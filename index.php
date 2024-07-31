<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/index.css">
  <title>Login Form</title>
</head>
<body>
   <header class="header">
      <nav class="navbar">
        <h1 class="logo">Welcome to the Login</h1>
      </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="validasi.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit" name="submit">Log in</button>
                    <div class="register">
                        <p>Don't have a account? <a href="register.php">Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
      <div class="footer-content">
          <p>&copy; Created with &hearts; by Irene XI RPL</p>
      </div>
  </footer>
</body>
</html>