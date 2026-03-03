<?php
include "connect.php";

function registerUser() {
    global $conn;   

    static $count = 0;
    $count++;

    $username = $_POST['username']; 
    $email = $_POST['email'];       
    $password = $_POST['pass']; 

    $success = false; 

    $query = "INSERT INTO users (username, email, password)
              VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        $success = true;
        echo "Registration Successful<br>";
        echo "Total registrations in this request: " . $count;
    } else {
        die("Registration Failed");
    }
}

registerUser();
?>
<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>