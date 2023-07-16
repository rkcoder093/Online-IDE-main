<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Login Page </title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="icon" type="image/x-icon" href="./image/CB.jpeg">
</head>

<body>
    <div class="center">
        <div class="container">
            <div class="text">Code Book</div>
            <form action="index.php" method = "post">
                <?php if (isset($_GET['error'])) { ?> 
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } 
                ?>
        
                
                <div class="data">
                    <label>Email or Phone</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label>Password</label> 
                    <input type="password" required>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="btn">
                    <div class="inner">
                    </div>
                    <button type="submit">login</button>
                </div>
                <div class="signup-link"> Not a member? <a href="./Registrationform.html">Signup now</a></div>
            </form>
        </div>
    </div>
</body>
</html>