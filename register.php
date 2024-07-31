<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
          <h1 class="logo">Welcome to the Register</h1>
        </nav>
    </header>
    <section class="container">
        <div class="text-section">
            <h2>Welcome to our platform!</h2>
            <p>Looks like you weren't registered with us yet. We are really appreciate your attendance in our platforms! Let us welcome you with lots of love &hearts;</p>
        </div>
        <div class="form-box">
            <h2>Register</h2>
            <form action="tambah.php" method="POST">
                <div class="inputbox" style="margin-bottom: 10px">
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="inputbox" style="margin-bottom: 20px">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="inputbox" style="margin-bottom: 10px">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <label style="font-size: xx-large">Gender:</label>
                <div class="input" style="font-size: xx-large; size: 100px; justify-content: space-evenly; margin-bottom: 20px">
                    <input type="radio" id="men" name="gender" value="men" style="height: 20px" />
                    <label for="men">Men</label>
                    <input type="radio" id="women" name="gender" value="women" style="height: 20px" />
                    <label for="women">Women</label>
                </div>
                <label style="font-size: xx-large">Hobbies:</label>
                <div class="input" style="display: flex; justify-content: flex-start; font-size: x-large; margin-bottom: 10px">
                    <input type="checkbox" id="sleep" name="hobi" value="sleep" style="width: 20px;">
                    <label for="sleep" style="margin-right: 20px">Sleep</label><br>
                    <input type="checkbox" id="playinggame" name="hobi" value="playinggame" style="width: 20px">
                    <label for="playinggame" style="margin-right: 20px">Playing Game</label><br>
                    <input type="checkbox" id="art" name="hobi" value="art" style="width: 20px">
                    <label for="art" style="margin-right: 20px">Art</label><br>
                </div>
                <label style="font-size: xx-large">Role:</label>
                <div class="input" style="margin-bottom: 10px;">
                    <select name="role" id="role" style="width: 200px; height: 50px; font-size: 30px">
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <button type="submit" name="submit" style="margin-top: 10px">Sign Up</button>
            </form>
            <div class="register">
                <p>Already have an account? <a href="index.php">Log in here</a>.</p>
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
