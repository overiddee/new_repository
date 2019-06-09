<?php
    require_once "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with LinkedIn</title>
</head>
<style type="text/css">
	
	a span:hover
	{
		color:lightblue;
	}
	
</style>
<body style="margin-top: 200px; text-align: center;">
    <img src="https://goo.gl/1H14Q6" alt="Logo" width="300">
    <h1><a style="font-family: 'Arial';display: inline-block;overflow: hidden; text-decoration: none; padding: 20px; color:#013243;" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><span>Sign in with LinkedIn</span></a></h1>
    
</body>
</html>