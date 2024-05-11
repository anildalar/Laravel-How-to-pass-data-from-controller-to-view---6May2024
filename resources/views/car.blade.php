<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyCars</title>
    </head>
    <body>
        <h1>My Cars </h1>
       
        <ul>
        @foreach ($cars as $car)
            <li>{{$car->brand_name}}</li>
        @endforeach
        </ul>

    </body>
</html>