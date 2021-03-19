
<html>
<head>
<meta charset="utf-8">  
<meta http-equiv="language" content="NL">
<meta name="viewport" content="with=device-width, initial-scales=1">
<meta name="Description" content="">
<meta name="author" content="dustin moenen">
<meta name="Keywords" content="gegevens">

<title>energy bedrijf</title>
<link href="css/home.css" rel="stylesheet" type="text/css">
</head>
<body>


  <?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "energy";
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error) {
    echo $conn->connect_error;
}

echo "<header>
    <section id='bovensec1'></section>
    
    <section id='bovensec2'>  <img src='img/logo_flashback_wit.png' width='250'/>   </section>
    
    <section id='bovensec3'><details id='item_hamburger'>
    <summary    >
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
</section>



    </header>";

   

echo "<section id='middensec1'>


<article id='middendata1'>";
$sql = "SELECT * FROM aanbiedingen";
$result = $conn->query($sql);


if($result) {
    $i = 1;
    while($row = $result->fetch_array(MYSQLI_BOTH)) {
    echo "<br>";
    echo $row[1]."<br>";
    echo $row["begindatum"]."<br>";
    echo $row["einddatum"]."<br>";
    $i += 1;
    if ($i > 6) {
        break;
    } 
}
$result->close();
 echo "</article>



     </section>";
echo "<section id='middensec2'>


<article id='midden-foto'>

<h1>elke slok neemt je terug in de tijd</h1>
<img src='img/foto-blikjes.png' width='250'/>
 </article>



     </section>";
echo "<section id='middensec3'>


 <article id='middendata2'>";
 
            $sql2 = "SELECT * FROM evenementen ";
$result2 = $conn->query($sql2);

if($result2) {
    $i = 1;
    while($row = $result2->fetch_array(MYSQLI_BOTH)) {
    echo "<br>";
    echo "<br>";
    
    echo "vivalafrance". " ".$row["datum"]."<br>"."<br>";
    $i += 1;

    if ($i > 6) {
        break;
    } 
    }
}

$result2->close();
 
 
echo "</article>



     </section>";
  














}

$conn->close();


?>
</body>
</html>