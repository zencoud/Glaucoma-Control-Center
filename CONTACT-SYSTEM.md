# Configuración de Correo para Contactos

## Variables de Entorno (.env)

Agrega estas variables a tu archivo `.env` para configurar el envío de correos:

```env
# Configuración básica de correo
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=tu_username_de_mailtrap
MAIL_PASSWORD=tu_password_de_mailtrap
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@glaucoma-control-center.com"
MAIL_FROM_NAME="Glaucoma Control Center"

# Email administrativo donde se enviarán los contactos
MAIL_ADMIN_EMAIL="admin@glaucoma-control-center.com"
```

## Configuración con Mailpit (Desarrollo Local)

Para desarrollo local con Mailpit:

```env
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@glaucoma-control-center.com"
MAIL_FROM_NAME="Glaucoma Control Center"
MAIL_ADMIN_EMAIL="admin@glaucoma-control-center.com"
```

## Configuración con Gmail

Para usar Gmail como servidor SMTP:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu_email@gmail.com
MAIL_PASSWORD=tu_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="tu_email@gmail.com"
MAIL_FROM_NAME="Glaucoma Control Center"
MAIL_ADMIN_EMAIL="tu_email@gmail.com"
```

**Nota:** Para Gmail necesitas usar una "App Password" en lugar de tu contraseña normal.

## Funcionalidades Implementadas

### ✅ Formulario de Contacto
- Campos: Nombre, Email, Teléfono (opcional), Asunto (opcional), Mensaje
- Validación completa de datos
- Mensajes de éxito/error
- Preservación de datos en caso de error

### ✅ Base de Datos
- Tabla `contacts` con todos los campos necesarios
- Tracking de estado de envío de correos
- Timestamps de creación y procesamiento

### ✅ Envío de Correos
- Plantilla HTML profesional
- Información completa del contacto
- Reply-to configurado para responder directamente
- Manejo de errores y logging

### ✅ Panel Administrativo
- Lista de todos los contactos con paginación
- Vista detallada de cada contacto
- Estadísticas (total, procesados, pendientes, etc.)
- Acciones: Reenviar email, Marcar como procesado, Eliminar
- Respuesta rápida con cliente de email

### ✅ Gestión de Estados
- Contactos pendientes (sin procesar)
- Contactos procesados (email enviado)
- Tracking de errores de envío
- Respuestas del sistema

## Uso del Sistema

### Para Usuarios
1. Llenar el formulario de contacto en `/contacto`
2. Recibir confirmación de envío
3. El mensaje se guarda en la base de datos

### Para Administradores
1. Acceder a `/admin/contacts` (requiere autenticación)
2. Ver lista de contactos recibidos
3. Ver detalles completos de cada contacto
4. Reenviar emails si es necesario
5. Marcar contactos como procesados
6. Eliminar contactos antiguos

## Logs y Monitoreo

El sistema registra en los logs de Laravel:
- Envíos exitosos de correos
- Errores de envío
- Contactos guardados sin envío (si no está configurado el email)

Revisa `storage/logs/laravel.log` para monitorear la actividad.
