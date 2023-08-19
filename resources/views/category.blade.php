<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
         
        <h1>Add Category</h1>
        <form action="{{ Route('category.insert') }}" method="POST">
         
            @csrf

            <input type="text" name="category_name" placeholder="Enter category Name" >
            <input type="submit" value="Save">
        </form>
    </body>
</html>
