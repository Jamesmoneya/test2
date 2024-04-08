<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    @foreach ( $posts as $post1)
        <p>{{$post1->inputer}}</p>
        <p>{{$post1->content}}</p>
        <a href='{{ route('edit',['post' => $post1->id])}}'>編輯</a>
    @endforeach
    <form action='{{route('create')}}'method='POST'>
        @csrf
            <textarea name='content'>
            </textarea>
            <button type='submit'>送出</button>
    <form>
    <i class="bi bi-cart-dash-fill" style="font-size: 100px"></i>

</body>
</html>