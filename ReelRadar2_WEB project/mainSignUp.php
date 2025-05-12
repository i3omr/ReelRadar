<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReelRadar</title>
    <link rel="stylesheet" href="style2.css">
    
    <style>
        .feedback {
            font-size: 0.9em;
            margin-top: 5px;
        }
        .input-error {
            border-color: red;
        }
        .input-success {
            border-color: green;
        }
        .feedback-error {
            color: red;
        }
        .feedback-success {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Sign Up</h2>
    <form id="signupForm" action="signup.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required>
        <div id="usernameFeedback" class="feedback"></div><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        <div id="emailFeedback" class="feedback"></div><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required>
        <div id="passwordFeedback" class="feedback"></div><br>

        <input type="submit" value="Sign Up">

        <script src = "signup.js"></script>
    </form>
</body>
</html>