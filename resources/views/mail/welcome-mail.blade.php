<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail send</title>
</head>
<body>
    <h3>Hellow , Admin</h3>
    <p>Name: {{$request['name']}}</p>
    <p>Email: {{$request['email']}}</p>
    <p>Subject: {{$request['subject']}}</p>
    <p>Message: {{$request['message']}}</p>

</body>
</html>
