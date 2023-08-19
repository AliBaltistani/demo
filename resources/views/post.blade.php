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
         
        <h1>Add Post</h1>
        <form action="{{ Route('post.insert') }}" method="POST">
            @csrf

            <select name="category_id" id="">
                @foreach ($categ as $category )
                     <option value="{{$category->id}}"> {{$category->name }}</option>
                @endforeach
                </select>
    
                <input type="text" name="title" placeholder="Enter Post Title" >
               

                <label for="tags">Tags:</label>
                <select name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select><br>

                    
                <br>
                    <input type="submit" value="Save">

        </form>
    </body>
</html>
