<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Login</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
            <div class="nav__logo">
        <a href="home.html"><img class="logo" src="img/logo.jpg"></a>
                </div>
                    <ul class="nav__list" type="none">
                        <li><a href="top.html">Trending</a></li>
                        <li><a href="music.html">Music</a></li>
                        <li><a href="sport.html">Sport</a></li>
                        <li><a href="gaming.html">Gaming</a></li>
                    </ul>
                <div class="sun">
                <div class="div__wrapper">
                    <a href="#!"><img class="rain" src="img/search-icon.png"></a>
                </div>
                <div class="nav__login"><a href="login.html">Sign in</a></div>
            </div>
                    
                    
            </nav></div>
        </header>
    <main class="content">
        <div class="login-form">
            <h1>Login</h1>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webtube_users";
$conn = new mysqli($servername, $username, $password, $database);

session_start();
session_destroy();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_SESSION['user_id'])) {
    echo "You are already logged in as ".$_SESSION['username']."<br>"."<br>";
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM `users` WHERE `Username` = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row["Parola"])) {
                echo "Login successful!";

                $_SESSION['user_id'] = $row['ID_users_date'];
                $_SESSION['username'] = $username;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid username.";
        }
    }
}

$conn->close();
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" >
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" >
                </div>
                <button type="submit" class="nav__login">Login</button>
            </form>
            <p>Don't have an account? <a href="register.html">Register here</a>.</p>
        </div>
    </main>
    <footer class="footer_login">
        <ul class="footer_contacts" type="none">
    <li><div class="contacts">
        <p class="contacts1" >Question?Contac us.</p>
    <ul type="none" class="contacts2">
    <a href="#!"><li>Help Center</li></a>
    <a href="#!"><li>Cookie preferences</li></a>
    <a href="https://drive.google.com/uc?id=1bQxZHH8hocJ5li0T26sINh1-GmhQ7GLw&export=download" download><li>Corporate Information</li></a>
    <a href="contacts.html"><li>Contact us</li></a>
    </ul></div></li><li>
    <div class="follow">
        <p class="follow1">Follow us.</p>
        <ul type="none" class="follow2">
       <li>
        <a href="https://www.instagram.com/netflixro/" class="fa fa-instagram"></a><a href="https://www.instagram.com/netflixro/"><p>instagram</p></a>
       </li>
       <li>
        <a href="https://www.facebook.com/netflix" class="fa fa-facebook"></a><a href="https://www.facebook.com/netflix"><p>facebook</p></a>
       </li>
        </ul>
    </div></li></ul>
    <center><p class="container" class="coryright">@FeedbackCopyright</p></center>
    </footer>
</body>
</html>
    

