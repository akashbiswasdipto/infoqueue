<?php
echo ' i am here';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('header')
    <div class='cover_home'>
        <div class='slogan'>
            <h1>Book Your Time, Anytime!</h1>
            <h5>Your One-Stop Solution for Hassle-Free Appointment.</h5>
        </div>
    </div>
    <div class='For_you'>
        <h1>Your One-Stop Solution for Appointments, Tailored Just for You!</h1>
        <div class='service'>
            <img src="{{ asset('images/services/saloon.png')}}" alt="Saloon" class='icon_service'>
            <h5>Saloon/Parlor Services</h5>
        </div>
        <div class='service'>
            <img src="{{ asset('images/services/motorbike.png')}}" alt="Motor Bike" class='icon_service'>
            <h5>MotorCycle Repair Services</h5>
        </div>
        <div class='service'>
        <img src="{{ asset('images/services/restaurant.png')}}" alt="Motor Bike" class='icon_service'>
        <h5>Restaurant Services</h5>
        </div>
        <div class='service'></div>
    </div>
</body>
</html>