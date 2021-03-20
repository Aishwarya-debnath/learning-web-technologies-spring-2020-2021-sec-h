<?php 
if (isset($_POST['submit']))
{
	$id = $_POST['id'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$name = $_POST['name'];
	$type = $_POST['type'];

	if($username == "" || $password == "" || $confirmpassword == ""|| $type == "")
	{
		echo "<h1>Null submission...</h1>";
	}
	else
	{
		$userinfo= [
					 'user' => $username,
					 'password' => $password,
					 'confirmassword' => $confirmpassword,
					 'name'=>$name,
					 'type' => $type
					 
				   ];
		#$jsonvalue = json_encode($userinfo);
		#echo($jsonvalue);
		
		$myfile = fopen('data.json', 'w');
	    $data 	= fwrite($myfile, json_encode($userinfo));
	    echo "<h1>Successful</h1>";

	}

}


 ?>