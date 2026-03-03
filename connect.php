<html>
    <head></head>
    <body>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = mysqli_connect($servername, $username, $password, $database,3307);

if (!$conn) {
    die("Database connection failed");
}

echo "Database Connected Successfully";
?>
    </body>
</html>