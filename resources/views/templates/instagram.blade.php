<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            background-color: #3897f0;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #357ae8;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #999;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="instagram-logo.png" alt="Instagram">
        </div>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password">
            </div>
            <button class="btn" type="submit">Log In</button>
        </form>
        <div class="footer">
            <a href="#">Forgot password?</a>
        </div>
    </div>
</body>
</html>
