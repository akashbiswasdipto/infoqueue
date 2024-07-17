
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    @include('header')
    <div class='login'>
        <div class='logo_image'>
            <img src="{{asset('images/icon.jpeg')}}" class='login_logo'>
        </div>
        <div class='login_form'>
            <h1>Log In to Experience the Best of Our Services.</h1>
            <form method="POST" action="{{ route('login') }}">
                <input type='email' name='useremail' class='login_button' placeholder="Enter your email"><br>
                <input type='password' name='password' class='login_button' placeholder="Enter your password"><br>
                <button type='submit' class='submit_button'>Login</button>
            </form>
            <h5>Don't have an account in InfoQueue? <a class='signup_btn' href="{{route ('new_user')}}">Signup Now</a></h5>
        </div>
    </div>
</body>
</html>
