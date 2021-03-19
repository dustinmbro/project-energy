<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiesten</title>
    <link href="css/style-artiesten.css" rel="stylesheet" type="text/css">
</head>
<body>

<header class='boven'>
    <img src='img/logo.png'/>
    <details id='item_hamburger'>
    <summary>
        <h1>&#9776;</h1>
    </summary>
        <nav>
            <ul id='hamburger'>

                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>
                <li><a href='#'>veel gevraagde vragen</a></li>

            </ul>
        </nav>
</details>
</header>
<article class='links'>
<div class='item-border'>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "energy";
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) {
    echo $conn->connect_error;
}
$sql = "SELECT * FROM artiesten";
$result = $conn->query($sql);
if($result) {
    while($row = $result->fetch_row()) {
    echo "<a href='artiestdetail.php?id=".$row[0]."'>".$row[1]."</a><br>";
}
}

?>
</div>
</article>
</body>
</html>