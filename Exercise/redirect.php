<?php

    require_once "init.php";

	if ($_POST['1']) 
	{
		header("Location: http://localhost/Exercise/contactus.html");
	}
	elseif ($_POST['2']) {

		//header("Location: http://localhost/Exercise/");    made a seperate page---not needed
        header("Location: https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}; "); 
    }

?>