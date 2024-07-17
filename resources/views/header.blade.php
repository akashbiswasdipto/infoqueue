
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Time, Anytime!</title>
</head>
<body>
    <div class='header'>
        <div class='logo'>
            <a href="{{route ('welcome')}}"><img src="{{ asset('images/icon.jpeg')}}" alt="Icon" class='icon'></a>
        </div>
        <div class='searchbox'>
            <input type='text' class='search' placeholder="Find your booking service here e.g. Saloon, Cafe ..." name='search'>
            <a href='' ><i class="fa fa-search icon" style='height:30px; width:auto; margin-left: 10px;'></i></a>
        </div>
        <div class='buttons'>
            <a href=''>All Services</a>
            <a href="{{route ('login')}}">Login</a>
        </div>
    </div>
</body>
</html>
