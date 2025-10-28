<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: 'Open Sans', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .email-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #179BA1;
        }
        .logo {
            color: #179BA1;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .contact-info h3 {
            color: #179BA1;
            margin-top: 0;
            margin-bottom: 15px;
        }
        .info-row {
            margin-bottom: 10px;
        }
        .info-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 100px;
        }
        .message-content {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 6px;
            padding: 20px;
            margin-top: 20px;
        }
        .message-content h3 {
            color: #179BA1;
            margin-top: 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #666;
            font-size: 14px;
        }
        .timestamp {
            color: #999;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Glaucoma Control Center</div>
            <h1>Nuevo mensaje de contacto</h1>
        </div>

        <div class="contact-info">
            <h3>Información del contacto</h3>
            
            <div class="info-row">
                <span class="info-label">Nombre:</span>
                <span>{{ $contact->name }}</span>
            </div>
            
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span>{{ $contact->email }}</span>
            </div>
            
            @if($contact->phone)
            <div class="info-row">
                <span class="info-label">Teléfono:</span>
                <span>{{ $contact->phone }}</span>
            </div>
            @endif
            
            @if($contact->subject)
            <div class="info-row">
                <span class="info-label">Asunto:</span>
                <span>{{ $contact->subject }}</span>
            </div>
            @endif
            
            <div class="info-row">
                <span class="info-label">Fecha:</span>
                <span>{{ $contact->created_at->format('d/m/Y H:i') }}</span>
            </div>
        </div>

        <div class="message-content">
            <h3>Mensaje</h3>
            <p style="white-space: pre-wrap;">{{ $contact->message }}</p>
        </div>

        <div class="footer">
            <p>Este mensaje fue enviado desde el formulario de contacto del sitio web.</p>
            <p>Puedes responder directamente a este correo para contactar al cliente.</p>
            
            <div class="timestamp">
                Recibido el {{ $contact->created_at->format('d/m/Y') }} a las {{ $contact->created_at->format('H:i') }}
            </div>
        </div>
    </div>
</body>
</html>
