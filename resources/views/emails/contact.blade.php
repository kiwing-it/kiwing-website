<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Consulta enviada desde www.kiwing.it</h2>
    <div>
        Nombre: <strong>{{ $name }}</strong><br />
        Email: <strong>{{ $email }}</strong><br />
        Teléfono: <strong>{{ $phone }}</strong><br />
        Horario: <strong>{{ $schedule }}</strong><br />
        Asunto: <strong>{{ $subject }}</strong><br />
    </div>
    <div style="margin:25px 0; padding:25px; background-color: #eee; ">
        {{ $content }}
    </div>
</body>
</html>