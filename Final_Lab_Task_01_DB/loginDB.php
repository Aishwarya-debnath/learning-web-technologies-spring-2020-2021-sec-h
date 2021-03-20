<?php

	$username= $_Post['id'];
	$password= $_Post['password'];

	mysql_connect("localhost","root","","web tech");

	$result= mysql_query("select * from users where id= $'password'")
	$row= mysql_fetch_array($result);

	if ($row['id']== $id && $row['password']== $password)
	{
	echo "Login";
	}
	
	else 
	{
	echo "Login not successfull"
	}
	
	      