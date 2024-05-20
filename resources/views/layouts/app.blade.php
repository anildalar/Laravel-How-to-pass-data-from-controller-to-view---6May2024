<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Extending Layout</title>
        <style>
            .a_tbdr{
                border:1px dashed red;
            }
            .base_color{
                background-color:#0D7962;
            }
            header{
                height:140px;
            }
            footer{
                height:70px;
            }
            main > div > section, main>div>sidebar{
                  height:550px;
            }
            
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid a_tbdr">
            <header class="a_tbdr base_color text-center fs-1 text-white">Header</header>
            <main class="a_tbdr">
                <div class="row m-0">
                    @yield('sidebar')
                    @yield('content')
                </div>
            </main>
            <footer class="a_tbdr base_color text-center fs-1 text-white">Footer</footer>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>