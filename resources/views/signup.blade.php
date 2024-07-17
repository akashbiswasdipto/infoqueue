<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
@include('header')
<div class='signup_form'>
    <h1>Join Now and Start Scheduling with Ease!</h1>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <input type='text' name='name' class='signupfield' placeholder="Enter your full name" required><br>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <input type='email' name='email' class='signupfield' placeholder="Enter your email ID" required><br>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <input type='text' name='contact' class='signupfield' placeholder="Enter your Contact Number" required></br>
        <input type='password' name='password' class='signupfield' placeholder="Enter your Password" required><br>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <input type='password' name='password_confirmation' class='signupfield' placeholder="Enter your Password Again" required><br>
        <button type='submit' class='signup_submit'>Signup</button>
    </form>
</div>
</body>
</html>
