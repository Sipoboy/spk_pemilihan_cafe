<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    {{-- ICON (pakai CDN) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="login-page">

<div class="login-box">

    <div class="login-logo">
        <img src="{{ asset('images/logo-five.png') }}">
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- ERROR --}}
        @if(session('error'))
            <p style="color:red; margin-bottom:10px;">
                {{ session('error') }}
            </p>
        @endif

        <div class="input-group">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="login-options">
            <label>
                <input type="checkbox"> Remember me
            </label>
            <a href="#">Forgot password ?</a>
        </div>

        <button class="login-btn">LOGIN</button>
    </form>

</div>

</body>
</html>
