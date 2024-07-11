<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <a href="{{ route('user_id_name?', ['id' => 1, 'name' => 'Chirawattt']) }}">แสดงชื่อ</a>
</body>
</html>