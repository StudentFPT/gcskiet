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
    ?>
</html>