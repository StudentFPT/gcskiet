<!DOCTYPE html>
<html>
<body>

<h1>Sale revenue by Category</h1>

<?php
echo "This is Customer";
?>

<?php
	$id = $_REQUEST["id"];
    $email = $_REQUEST["email"];
	$name = $_REQUEST["name"];
	$phone = $_REQUEST["phone"];
    $address = $_REQUEST["address"];
	
	echo $id;
    echo $email;
	echo $name;
	echo $phone;
	echo $address;

        $host="ec2-3-233-43-103.compute-1.amazonaws.com";
        $database="daoeb2h1i4gref";
        $user = "ljguzytsklzppr";
        $port = "5432";
        $password = "88ba687e8bbe5cbd0741417086045a25cc5bb0d1b3d35ab35cfea4c48680e1fa";

        $host_param_str = "host=".$host;
        $dbname_param_str = "dbname=".$database;
        $port_param_str = "port=".$port;
        $user_param_str = "user=".$user;
        $pass_param_str = "password=".$password;
        $sslmode_param_str = "sslmode= require";

	$connection_string = "host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require";

	$connection = pg_connect($connection_string);

	if ($connection === false){
		die("ERROR: Could not connect to database");
	} else
	{
		echo "SUCCESS: Connection to Heroku Postgres has been established";

		$customer_query = 'INSERT INTO public."Customer"(Email,Id,Name,Phone,Address) VALUES 
		(\''.$id.'\',\''.$email.'\',\''.$name.'\',\''.$phone.'\','.$address.')';

		echo '<p>'.$customer_query.'</p>';

		if (pg_query($connection,$customer_query)){
			echo '<p>SUCCESS: Record is added succesfully. A new product is created</p>';
		}
		else{
			echo '<p>ERROR: Could not execute query</p>';
		}

	}
	
?>

</body>
</html>