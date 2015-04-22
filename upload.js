var handleUpload = function(event){
	event.preventDefault();
	event.stopPropagation();

	var fileInput = document.getElementById('file');

	var data = new FormData();

	data.append('ajax', true);

	for(var i = 0; i< fileInput.files.length; ++i)
	{
		data.append('file[]', fileInput.files[i]);
	}

	var request = new XMLHttpRequest();

	request.upload.addEventListener('progress', function(event){
		if(event.lengthComputable)
		{
			var percent = event.loaded / event.total;
			var progress = document.getElementById('upload_progress');

			while(progress.hasChildNodes())
			{
				progress.removeChild(progress.firstChild);
			}

			progress.appendChild(document.createTextNode(Math.round(percent * 100) + '%'));
		}
	});

	request.upload.addEventListener('load', function(event){
		document.getElementById('upload_progress').style.display = 'none';
	});

	request.upload.addEventListener('error', function(event){
		alert('Upload failed');
	});

	request.addEventListener('readystatechange', function(event){
		if(this.readyState == 4)
		{
			if(this.status == 200)
			{
				var links = document.getElementById('uploaded');
				var uploaded = eval(this.response);
				var div, a;

				for(var i = 0; i < uploaded.length; ++i)
				{
					div = document.createElement('div');
					a = document.createElement('a');

					a.setAttribute('href','Gallery_Pictures/' + uploaded[i]);
					a.setAttribute('target','_blank');
					a.appendChild(document.createTextNode(uploaded[i]));

					div.appendChild(a);
					links.appendChild(div);
				}
			}
			else
			{
				console.log('Server replied with HTTP status ' + this.status);
			}
		}
	});

	var parts = window.location.search.substr(1).split("&");
	var $_GET = {};
	for (var i = 0; i < parts.length; i++) {
	    var temp = parts[i].split("=");
	    $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
	}

	request.open('POST', 'profile.php?user=' + $_GET['user']);
	request.setRequestHeader('Cache-Control', 'no-cache');

	document.getElementById('upload_progress').style.display = 'block';

	request.send(data);	
}

window.addEventListener('load', function(event){
	if(typeof FormData!= 'undefined')
	{
		var submit = document.getElementById('submit');
		submit.addEventListener('click', handleUpload);
	}
});