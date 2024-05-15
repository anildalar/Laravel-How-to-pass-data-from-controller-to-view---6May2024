<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
    </head>
    <body>
        <h1>Add News  FORM</h1>
        <form method="POST" action="/news">
            @csrf
            <label for="ttl">News Title</label>
            <input type="text" name="title" id="ttl"/><br />
            <label for="desc">News Title</label>
            <textarea name="description" id="desc" ></textarea><br />
            <label for="img_url">News Title</label>
            <input type="text" name="image_url" id="img_url"/><br />
            <input type="submit" >
        </form>
    </body>
</html>