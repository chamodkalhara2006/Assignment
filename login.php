<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('d.png');
            background-size: cover;  
 ;
           
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender-group {
            text-align: left;
        }

        .gender-group label {
            margin-right: 10px;
        }

        .login-btn {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body>



<div class="login-container">
     <h2 style="color: green;">IMBS CAMPUS LOGIN</h2>
    <form class="login-form" action="logindb.php" method="post">
        <div class="form-group">
            <label for="username">NIC:</label>
            <input type="text" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
      <form action="logindb.php"> 
        <button type="submit" class="login-btn">Login</button>
        </form>
        <P> you have not account? <a href="student rgiter.php">Register here</a></P>
    </form>
</div>

</body>
</html>
