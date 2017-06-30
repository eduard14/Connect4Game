<html>
<body>

Welcome <?php
    echo $_POST["Var1"];
    $Letter = $_post["Var1"];
    echo $Letter;
    $Letter = mysql_real_escape_string($Letter);
    echo $Letter;
    $servername = "localhost";
    $username = "Classic1";
    $password = "Classic1";
    $dbname = "GameMoves";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO Classic1 (Var1)
    VALUES ('$Letter')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "variable was" + $Letter;
    $conn->close();?>

</body>
</html>