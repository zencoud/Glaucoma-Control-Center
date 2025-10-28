# Glaucoma Control Center - Guía de Despliegue en cPanel

## 📋 Información del Proyecto

**Sitio Web:** http://glaucomacc.com.mx/  
**Panel Admin:** http://glaucomacc.com.mx/login  
**Credenciales Admin:** admin@glaucomacc.com.mx / GlaucomaSecure2025!

## 🚀 Guía de Despliegue en cPanel

### Prerrequisitos
- Acceso SSH al servidor
- PHP 8.2+ con extensiones: GD, SQLite3, OpenSSL, PDO, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo
- Composer instalado en el servidor
- Base de datos MySQL/MariaDB configurada

### Paso 1: Preparación Local (Antes del Despliegue)

```bash
# 1. Construir assets localmente
npm run build

# 2. Verificar que se generó la carpeta public/build/
ls -la public/build/

# 3. Commit de cambios (opcional)
git add .
git commit -m "Build assets for production"
```

### Paso 2: Subir Archivos al Servidor

**Via SSH o File Manager de cPanel:**

```bash
# Subir todos los archivos excepto node_modules y .env
rsync -av --exclude 'node_modules' --exclude '.env' --exclude '.git' \
  /ruta/local/proyecto/ usuario@servidor:/home/usuario/public_html/
```

**O manualmente via File Manager:**
- Subir todos los archivos del proyecto
- **NO subir:** `node_modules/`, `.env`, `.git/`

### Paso 3: Configuración en el Servidor

#### 3.1 Crear archivo .env
```bash
# Via SSH
cd /home/usuario/public_html/
cp .env.example .env
```

**Configurar .env:**
```env
APP_NAME="Glaucoma Control Center"
APP_ENV=production
APP_KEY=base64:TU_CLAVE_AQUI
APP_DEBUG=false
APP_URL=http://glaucomacc.com.mx

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=usuario_basedatos
DB_USERNAME=usuario_mysql
DB_PASSWORD=tu_password_mysql

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=public
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

#### 3.2 Instalar dependencias PHP
```bash
# Via SSH
cd /home/usuario/public_html/
composer install --optimize-autoloader --no-dev
```

#### 3.3 Generar clave de aplicación
```bash
php artisan key:generate
```

#### 3.4 Configurar permisos
```bash
# Permisos para storage y cache
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chown -R usuario:usuario storage/
chown -R usuario:usuario bootstrap/cache/
```

#### 3.5 Crear enlace simbólico para storage
```bash
php artisan storage:link
```

#### 3.6 Ejecutar migraciones y seeder
```bash
# Crear tablas
php artisan migrate --force

# Crear usuario administrador
php artisan db:seed --class=AdminUserSeeder
```

#### 3.7 Limpiar cache
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Paso 4: Configuración de cPanel

#### 4.1 Document Root
- Asegurar que el Document Root apunte a `/public_html/public/`
- O configurar `.htaccess` en `/public_html/` para redirigir a `/public/`

#### 4.2 Archivo .htaccess en public_html
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

#### 4.3 Configuración PHP
- **Versión PHP:** 8.2 o superior
- **Extensiones requeridas:** GD, SQLite3, OpenSSL, PDO, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo
- **Memory Limit:** 256M mínimo
- **Max Upload Size:** 10M mínimo
- **Max Execution Time:** 300 segundos

### Paso 5: Verificación Post-Despliegue

#### 5.1 URLs a verificar:
- ✅ http://glaucomacc.com.mx/ (Home)
- ✅ http://glaucomacc.com.mx/galeria (Galería completa)
- ✅ http://glaucomacc.com.mx/login (Panel admin)
- ✅ http://glaucomacc.com.mx/quienes-somos
- ✅ http://glaucomacc.com.mx/servicios
- ✅ http://glaucomacc.com.mx/contacto

#### 5.2 Funcionalidades a probar:
- ✅ Login con admin@glaucomacc.com.mx / GlaucomaSecure2025!
- ✅ Subir imagen en panel admin
- ✅ Ver thumbnail generado automáticamente
- ✅ Ver imagen en galería pública
- ✅ Modal de galería con navegación
- ✅ Responsive design en móvil

### Paso 6: Mantenimiento y Actualizaciones

#### 6.1 Para actualizar el sitio:
```bash
# 1. Local: Construir nuevos assets
npm run build

# 2. Subir archivos modificados
# 3. En servidor: Limpiar cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# 4. Regenerar cache optimizado
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### 6.2 Backup recomendado:
- Base de datos MySQL
- Carpeta `storage/app/public/gallery/` (imágenes subidas)
- Archivo `.env`

### 🔧 Solución de Problemas Comunes

#### Error: "Class 'Intervention\Image\ImageManager' not found"
```bash
composer install --no-dev
```

#### Error: "Storage link already exists"
```bash
php artisan storage:link --force
```

#### Error: "Permission denied" en storage
```bash
chmod -R 755 storage/
chown -R usuario:usuario storage/
```

#### Error: "APP_KEY not set"
```bash
php artisan key:generate
```

#### Imágenes no se muestran
- Verificar que `storage:link` esté ejecutado
- Verificar permisos de `/public/storage/`
- Verificar que las imágenes estén en `storage/app/public/gallery/`

### 📁 Estructura de Archivos Importantes

```
public_html/
├── public/                 # Document root
│   ├── build/             # Assets compilados (subir desde local)
│   ├── storage/          # Enlace simbólico a storage/app/public
│   └── index.php
├── storage/
│   └── app/
│       └── public/
│           └── gallery/   # Imágenes de la galería
├── .env                   # Configuración del entorno
├── composer.json          # Dependencias PHP
└── artisan               # Comandos de Laravel
```

### 🎯 Credenciales de Acceso

**Panel Administrativo:**
- URL: http://glaucomacc.com.mx/login
- Email: admin@glaucomacc.com.mx
- Password: GlaucomaSecure2025!

**Funcionalidades del Admin:**
- Subir imágenes (máximo 10MB)
- Generación automática de thumbnails
- Activar/desactivar imágenes
- Ordenar imágenes
- Editar títulos y descripciones
- Eliminar imágenes

### 📞 Soporte

Si encuentras problemas durante el despliegue:
1. Verificar logs en `storage/logs/laravel.log`
2. Verificar permisos de archivos y carpetas
3. Verificar configuración de PHP en cPanel
4. Verificar que todas las extensiones PHP estén habilitadas

---

**¡El sistema está listo para producción!** 🚀
