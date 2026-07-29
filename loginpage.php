<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body { font-family: Arial; background: #dee4a3; }
        .login-box {
            width: 300px;
            margin: 80px auto;
            padding: 40px;
            background: white;
          
        }
        input {
            width: 100%;
            padding: 5px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login to IWT Class</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required></input>
        <input type="password" name="password" placeholder="Password" required></input>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
