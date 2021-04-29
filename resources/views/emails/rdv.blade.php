<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prise de rendez-vous</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="dislay-4 text-center text-info">Formulaire de prise de rendez-vous</h1>
        <p class="lead text-center">
            Le Client {{ $data['name'] }} , souhaite prendre rendez-vous avec un {{ $data['membre'] }} le {{ $data['daterdv'] }} et a laisser la note suivante :<br><br>
            <b>
                {{ $data['notes'] }}
            </b>
            <br><br>
            {{ $data['name'] }},<br>
            {{ $data['email'] }}.
        </p>
        <p>
            Cordialement,<br>

            {{ config('app.name') }}
        </p>
    </body>

</html>