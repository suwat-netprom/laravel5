<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ยินดีต้อนรับ {{$name or "ไม่มีชื่อ"}}</h1>
    {{'<script>alert("สวัสดี js");</script>'}}

    {!!'<script>alert("สวัสดี js");</script>'!!}

</body>
</html>