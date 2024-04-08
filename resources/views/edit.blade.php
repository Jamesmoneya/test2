<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    
    <p>編輯文章</p>
    <form action='{{route('update',$post)}}'method='POST'>
        
        @csrf
        @method('patch')
            <textarea name='content'>
            </textarea>
            <button type='submit'>送出</button>
    <form>
    <i class="bi bi-cart-dash-fill" style="font-size: 100px"></i>

</body>
</html>