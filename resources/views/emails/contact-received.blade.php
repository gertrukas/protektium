<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
        }

        .header {
            background-color: #1e40af;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 20px -30px;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .data-row {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .data-row:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
            color: #1e40af;
            display: block;
            margin-bottom: 5px;
        }

        .value {
            color: #555;
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: 20px;
        }

        .signature {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #1e40af;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0;">protektium.ocom</h1>
        </div>

        <p>Estimado/a <strong>{{ $name }}</strong>,</p>

        <p>Hemos recibido su comentario con los siguientes datos:</p>

        <div class="content">
            <div class="data-row">
                <span class="label">Nombre:</span>
                <span class="value">{{ $name }}</span>
            </div>

            <div class="data-row">
                <span class="label">Correo:</span>
                <span class="value">{{ $email }}</span>
            </div>

            <div class="data-row">
                <span class="label">Teléfono:</span>
                <span class="value">{{ $phone }}</span>
            </div>

            <div class="data-row">
                <span class="label">Comentarios:</span>
                <span class="value">{{ $comments }}</span>
            </div>
        </div>

        <p>En breve nos pondremos en comunicación con usted.</p>

        <div class="signature">
            <p><strong>Atentamente:</strong></p>
            <p style="font-size: 18px; color: #1e40af; margin: 10px 0;"><strong>Protektium</strong></p>
        </div>

        <div class="footer">
            <p>Este es un correo automático, por favor no responder a este mensaje.</p>
        </div>
    </div>
</body>

</html>
