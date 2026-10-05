<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <h1>Welcome Back</h1>
            <p>Login to your account</p>

            <form>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>

                <div class="remember">
                    <label>
                        <input type="checkbox">
                        Remember me
                    </label>

                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit">Login</button>

            </form>

        </div>

    </div>

</body>
</html> 