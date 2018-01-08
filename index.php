<!DOCTYPE html>
<html>
<head>
	<title>Screenshot using html2canvas</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<body>

<h1 style="text-align: center;">Tutorial: How to take screenshot</h1>
<div id="capture" style="padding: 10px; background: #f5da55">
    <h4 style="color: #000; ">Hello C-Sharpcorner User!!</h4>
</div>
<div style="margin-top: 50px; text-align: center;">
	<button id="take_screenshoot">Take Screenshot</button>
</div>

<script type="text/javascript">
	var dataURL = {};
	$('#take_screenshoot').click(function(){
			html2canvas(document.querySelector("#capture")).then(canvas => {
	    document.body.appendChild(canvas);

	    //console.log(canvas.toDataURL());
	   	dataURL = canvas.toDataURL();
			post_data(dataURL);  	

		});

	});


	function post_data(imageURL){
		//console.log(imageURL);
		$.ajax({
						url: "save_data.php",
						type: "POST",
						data: {image: imageURL},
						dataType: "html",
						success: function(data) {
							alert(data);
							location.reload();
						}
					});
		
	}

</script>
</body>
</html>