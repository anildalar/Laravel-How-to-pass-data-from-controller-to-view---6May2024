<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Bikes</title>
    </head>
    <body>  
        <h1>My Bikes</h1>  
        @foreach ($bikes as $bike)
        <h3>{{$bike->name}}</h3>
        @endforeach
    </body>
</html>