<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Bondowoso | Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="login-page">
    <div class="login-wrapper">
        <div class="login-box">
            <div class="login-logo">
                <img src="{{ asset('images/logo-five.png') }}" alt="Logo FIVE">
            </div>

            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>

                <div class="login-options">
                    <label class="remember-label">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#" class="forgot-link">Forgot password ?</a>
                </div>

                <button type="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>
