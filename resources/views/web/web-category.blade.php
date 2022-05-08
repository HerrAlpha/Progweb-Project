<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title></title>
</head>
<body class='bg-light   '>
<h1 class="text-center my-5">{{$web->title}}</h1>
<hr class="border-bottom border-5 border-dark">
{{-- @dump($post) --}}
@foreach ($post as $post)
    {{$post->title}}
@endforeach
</body>
</html>
