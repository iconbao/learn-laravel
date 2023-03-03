<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <p>zbx-show</p>
        @if (empty($id))
        <a href="#">固定的</a>
        @else
        <a href="#">动态ID：{{$id}}</a>
        @endif
    </body>
</html>
