<?php
	session_start();

	if(isset($_POST['submit']))
	{  
		
		$myfile = fopen('data.json', 'r');
		$data = fread($myfile, filesize('data.json'));
		$userloginfo = json_decode($data, true);

		$id = $userloginfo[0]['id'];
		$password = $userloginfo[0]['password'];

		if($id == "" || $password == "")
		{
			echo "<h2>username and password are not matching</2>";
		}
		else
		{
			if($id == $_POST['id'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location:home.php');
			
			}
			else
			{
				echo ("<h2>Please input correct username or password </h2>");
			}
		}
	}


?> 