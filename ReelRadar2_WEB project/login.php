<?php
$servername = "localhost";
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "user_database";

session_start();

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['uname'];
    $password = $_POST['password'];

    $errors = [];

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);

        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $db_username, $hashed_password);
            $stmt->fetch();
            
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $db_username;

                $cookie_name = "user_login";
                $cookie_value = $username; 
                $cookie_expiration = time() + (86400 * 30); 
                $cookie_path = "/"; 
                $cookie_secure = true;
                $cookie_httponly = true; 

            
                setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path, null, $cookie_secure, $cookie_httponly);

                
                header("Location: index.php");
                exit();
            } else {
           
                header("Location: main.php?error=Incorrect%20Credentials");
                exit();
            }
        } else {
  
            header("Location: main.php?error=Incorrect%20Credentials");
            exit();
        }

        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }

    $conn->close();
}
?>