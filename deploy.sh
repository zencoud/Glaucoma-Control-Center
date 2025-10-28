#!/bin/bash
# Script de despliegue para Glaucoma Control Center
# Ejecutar desde la raíz del proyecto

echo "🚀 Iniciando proceso de despliegue..."

# Verificar que estamos en el directorio correcto
if [ ! -f "artisan" ]; then
    echo "❌ Error: No se encontró el archivo artisan. Ejecuta este script desde la raíz del proyecto."
    exit 1
fi

# Construir assets localmente
echo "📦 Construyendo assets localmente..."
npm run build

if [ $? -ne 0 ]; then
    echo "❌ Error al construir assets. Verifica que npm esté instalado y funcione correctamente."
    exit 1
fi

echo "✅ Assets construidos exitosamente"

# Verificar que se generó la carpeta build
if [ ! -d "public/build" ]; then
    echo "❌ Error: No se encontró la carpeta public/build/"
    exit 1
fi

echo "📁 Archivos listos para subir al servidor:"
echo "   - public/build/ (assets compilados)"
echo "   - Todos los archivos PHP"
echo "   - Carpeta storage/ (sin node_modules/)"
echo ""
echo "📋 Pasos siguientes:"
echo "1. Subir archivos al servidor (excepto node_modules/, .env, .git/)"
echo "2. Configurar archivo .env en el servidor"
echo "3. Ejecutar comandos de Laravel en el servidor:"
echo "   - composer install --optimize-autoloader --no-dev"
echo "   - php artisan key:generate"
echo "   - php artisan storage:link"
echo "   - php artisan migrate --force"
echo "   - php artisan db:seed --class=AdminUserSeeder"
echo "   - php artisan config:cache"
echo "   - php artisan route:cache"
echo "   - php artisan view:cache"
echo ""
echo "🔑 Credenciales del admin:"
echo "   Email: admin@glaucomacc.com.mx"
echo "   Password: GlaucomaSecure2025!"
echo ""
echo "🌐 URLs importantes:"
echo "   Sitio: http://glaucomacc.com.mx/"
echo "   Admin: http://glaucomacc.com.mx/login"
echo "   Galería: http://glaucomacc.com.mx/galeria"
echo ""
echo "✅ Proceso local completado. Continúa con el despliegue en el servidor."
