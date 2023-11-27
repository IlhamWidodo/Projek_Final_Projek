<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Apotek Murah Sehat</title>
</head>
<body>
    <section class="login-section">
        <div class="form-box">
            <div class="form-value">
                <form action="./backend/login.php" method="post">
                    <h2>Masuk</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" placeholder="" required>
                        <label for="">Email</label>             
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div> 
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <form action="./pages/register.php" method="post">
                    <div class="register">
                        <p><a href="./pages/register.php">Don't have an account? Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.2.5/dist/ionicons/ionicons.js"></script>
</body>
</html>
