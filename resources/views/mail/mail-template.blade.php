<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Template</title>
</head>
<body>
    <h1>hai ricevuta una nuova mail; ecco i dettagli:</h1>
    <p>{{$contactMail['name']}}</p>
    <p>{{$contactMail['email']}}</p>
    <p>{{$contactMail['message']}}</p>
</body>
</html>