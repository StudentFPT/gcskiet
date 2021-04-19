<html>
    <body>
        <h1>Sale revenue by Category</h1>
    </body>

    <?php
    echo "<p>This file is named after user have submmited the HTML product form<p>";
    ?>

    <?php
        $id = $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $cat = $_REQUEST["cat"];
        $date = $_REQUEST["date"]
	    $price = $_REQUEST['price'];
	    $desc = $_REQUEST['desc'];

        echo $id;
        echo $name;
        echo $cat;
        echo $date;
        echo $price;
        echo $desc;

        $host="ec2-3-233-43-103.compute-1.amazonaws.com";
        $database="daoeb2h1i4gref";
        $user = "ljguzytsklzppr";
        $port = "5432";
        $password = "88ba687e8bbe5cbd0741417086045a25cc5bb0d1b3d35ab35cfea4c48680e1fa";

        $host_param_str = "host=".$host;
        $dbname_param_str = "dbname=".$database;
        $port_param_str = "port=".$port;
        $user_param_str = "user=".$user;
        $pass_param_str = "pass=".$password;
        $sslmode_param_str = "sslmode= require";

        $connection_string = $host_param_str + $dbname_param_str + $port_param_str + $user_param_str + $pass_param_str + $sslmode_param_str;
        
        $connetion = pg_connect($connection_string);
        if ($connection === false){
            die("ERROR: Could not connect to the database");
        }else{
            echo "SUCCESS: Connection to Heroku Postgres has been established"

            $product_query = "INSERT INTO public. "Product" (id,product_name,category,desciption,price) 
            VALUES (\"" .$id. "," .$name. "," .$cat. "," .$desc. "\"," .$price.")";

            echo "<p>" .$product_query. "<p>";

            if (pg_query($connection, $product_query)){
                echo "<p>Record is added successfully. A new product is created</p>";
            }else{
                echo "<p>ERROR: Could not execute query</p>";
            }
        }
    ?>
</html>