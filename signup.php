<!DOCTYPE html>
<html>
<head>
    
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin:20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 22cm;
            background-image: url('d.png');
            background-size: cover;  

           
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #353535;
        }

        .login-form {
            margin-top: 1cm;
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
            border: 1px solid #666666;
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
    <form class="login-form" action="db.php" method="POST">
        <div class="form-group">
            <label for="username">NIC</label>
            <input type="text"  name="id" required>
        </div>
        <div class="form-group">
            <label for="username">Student Name</label>
            <input type="text" name="studentname" required>
        </div>
        <div class="form-group">
            <label for="username">Address</label>
            <input type="text"  name="Address" required>
        </div>
        <div class="form-group">
            <label for="username">Course</label>
            <input type="text" name="course" required>
        </div>
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text"  name="email" required>
        </div>
        <div class="form-group">
            <label for="username">Tell-No</label>
            <input type="text"  name="tell" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="form-group gender-group">
            <label for="female">Female</label>
            <input type="radio"  name="gender" value="female" required>
            
            <label for="male">Male</label>
            <input type="radio"  name="gender" value="male" required>
        </div>
        <form action="db.php">
            <button type="submit" class="login-btn">Sign Up</button>
        </form>
        <p>already you have account?<a href="login.php"> Login here</a></p>
    </form>
</div>

</body>
</html>