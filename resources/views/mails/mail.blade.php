<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova mensagem enviada</title>
</head>

<body>
    <div class="card">
        <div class="card-header">
            Nova mensagem enviada pelo website Palco Nuarte
        </div>
        <hr>
        <div class="card-body">
            <h3 class="card-title"><mark>Dados da mensagem</mark></h3>
            <p class="card-text"><strong>Nome:</strong> {{ $data['name'] }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $data['email'] }}.</p>
            <p class="card-text"><strong>Assunto:</strong><br> {{ $data['subject'] }}.</p>
            <p class="card-text"><strong>Mensagem:</strong> {{ $data['message'] }}.</p>

        </div>
    </div>
</body>

</html>