<!DOCTYPE html>
<html>
<body>
    
    <h1>Sale revenue</h1>
<?php

    echo "SUPPPPPPP"
?>

<?php
    $revenue = 1 + 2 + 3;
    $html_content = <<<XYZ
    "<nav>
        <ul>
            <li><a href="#">Air conditioner</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Washing machine</a><p>Sale revenue: $revenue</p></li>
            <li><a href="#">Microwave</a><p>Sale revenue: $revenue</p></li>
            <li><a href="#">Refridgerator</a><p>Sale revenue: $revenue + $revenue</p></li>
        </ul>
    </nav>
    XYZ;
    echo $html_content;
?>

</body>
</html>