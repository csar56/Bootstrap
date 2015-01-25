<!Doctype html>
<html>
<head>
<title>Animation</title>
<link rel="stylesheet" href="css/mysite/animation.css">
</head>
<body>
<div>Klick mich</div>
<script>
$(document).ready(function(){
	$('div').click(function(){
			$('div').hide();
		});
});
</script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>