<!--
/*$dsn = 'mysql:dbname=dt36;host=sql2.njit.edu';
$user = 'dt36';
$password = 'xxxxxxxx';


try {

    $dbh = new PDO ($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} catch*/-->

<?php

$dsn = 'mysql:dbname=dt36;host=sql2.njit.edu';
$user = 'dt36';
$password = 'f3hxZqRK';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = "select * from accounts where id < 6";

$statement = $dbh->query($sql);
try {

    $records = $statement->fetchAll();
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

echo 'Connected Successfully' . "<br>";

$results = print_r($records);
//echo $results;

if($results != null)
{
    echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Pass</th></tr>";
    foreach ($results as $row) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["password"]."</td></tr>";
    }

}else{
    echo '0 results';
}




?>





