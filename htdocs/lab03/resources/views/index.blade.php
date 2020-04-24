<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab03 - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            margin: 0;
        }
        p, .f20 {
            font-size: 20px;
        }
        .content {
            text-align: center;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .title {
            font-size: 84px;
            font-weight: 200;
        }
    </style>
</head>
<body>
<div class="content" style="text-align: center">
    @yield('content')
</div>
</body>
</html>
