# Breadcrumbs en Page Header - Guía de Uso

## Descripción
El componente `page-header` ahora incluye soporte para breadcrumbs semánticos con múltiples estilos de colores que mejoran la navegación y la accesibilidad del sitio.

## Características Semánticas

### ✅ Estructura HTML Semántica
- Usa `<nav>` con `aria-label="Breadcrumb"`
- Implementa `<ol>` (lista ordenada) para la estructura jerárquica
- Cada elemento es un `<li>` apropiado
- Enlaces con `aria-current="false"` para elementos navegables
- Elemento actual con `aria-current="page"`

### ✅ Accesibilidad
- Iconos SVG con `aria-hidden="true"`
- Contraste adecuado en todos los estilos
- Estados hover con transiciones suaves
- Estructura navegable por lectores de pantalla

### ✅ Responsive Design
- Padding responsivo: `px-4 sm:px-6 lg:px-8`
- Texto escalable: `text-sm`
- Espaciado adaptativo entre elementos

## Estilos de Colores Disponibles

### 🎨 Primary Style (`breadcrumbStyle="primary"`)
- **Colores**: Usa el color primario (#179BA1)
- **Efectos**: Hover con fondo blanco translúcido
- **Elemento actual**: Fondo redondeado con color primario
- **Ideal para**: Páginas principales, información importante

### 🎨 Secondary Style (`breadcrumbStyle="secondary"`)
- **Colores**: Usa el color secundario (#8DCFD4)
- **Efectos**: Hover con fondo secundario translúcido
- **Elemento actual**: Fondo redondeado con color secundario
- **Ideal para**: Páginas de contacto, galería

### 🎨 Gradient Style (`breadcrumbStyle="gradient"`)
- **Colores**: Gradiente entre primary y secondary
- **Efectos**: Hover con gradiente de fondo, sombras
- **Elemento actual**: Fondo gradiente con sombra
- **Ideal para**: Servicios, valores, páginas destacadas

### 🎨 Default Style (`breadcrumbStyle="default"`)
- **Colores**: Grises tradicionales
- **Efectos**: Hover simple con cambio de color
- **Elemento actual**: Texto blanco sin fondo
- **Ideal para**: Páginas legales, administrativas

## Uso Básico

```php
<x-page-header
    text="Título de la Página"
    :image="null"
    breadcrumbStyle="primary"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Página Actual']
    ]"
/>
```

## Ejemplos por Estilo

### Primary Style
```php
<x-page-header
    text="¿Quiénes somos?"
    breadcrumbStyle="primary"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => '¿Quiénes somos?']
    ]"
/>
```

### Secondary Style
```php
<x-page-header
    text="Contacto"
    breadcrumbStyle="secondary"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Contacto']
    ]"
/>
```

### Gradient Style
```php
<x-page-header
    text="Nuestros Servicios"
    breadcrumbStyle="gradient"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Nuestros Servicios']
    ]"
/>
```

### Default Style
```php
<x-page-header
    text="Aviso de Privacidad"
    breadcrumbStyle="default"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Aviso de Privacidad']
    ]"
/>
```

## Uso Avanzado

### Breadcrumbs de 3 niveles con estilo gradient
```php
<x-page-header
    text="Diagnóstico Avanzado"
    breadcrumbStyle="gradient"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Servicios', 'url' => '/servicios'],
        ['text' => 'Diagnóstico Avanzado']
    ]"
/>
```

### Breadcrumbs con subcategorías usando primary
```php
<x-page-header
    text="Tratamiento con Láser"
    breadcrumbStyle="primary"
    :breadcrumbs="[
        ['text' => 'Inicio', 'url' => '/'],
        ['text' => 'Servicios', 'url' => '/servicios'],
        ['text' => 'Tratamientos', 'url' => '/servicios/tratamientos'],
        ['text' => 'Tratamiento con Láser']
    ]"
/>
```

## Estructura de Datos

Cada breadcrumb debe ser un array con:
- `text` (requerido): El texto visible del breadcrumb
- `url` (opcional): La URL de enlace (solo para elementos navegables)

```php
[
    'text' => 'Texto del Breadcrumb',
    'url' => '/ruta-opcional'  // Solo para elementos navegables
]
```

## Reglas de Implementación

1. **Elemento actual**: El último breadcrumb NO debe tener `url`
2. **Elementos navegables**: Todos los breadcrumbs anteriores deben tener `url`
3. **Mínimo**: Al menos 2 elementos (Inicio + Página actual)
4. **Máximo recomendado**: 4-5 elementos para evitar saturación
5. **Estilo**: Elegir el estilo apropiado según el tipo de página

## Distribución de Estilos por Página

### Páginas con Primary Style
- ✅ About (`/quienes-somos`)
- ✅ Mission (`/mision-vision`)

### Páginas con Secondary Style
- ✅ Contact (`/contacto`)
- ✅ Gallery (`/galeria`)

### Páginas con Gradient Style
- ✅ Services (`/servicios`)
- ✅ Values (`/valores`)

### Páginas con Default Style
- ✅ Privacy (`/aviso-de-privacidad`)

## Demostración

Visita `/breadcrumbs-demo` para ver todos los estilos en acción y comparar las diferencias visuales.

## Beneficios

### Para Usuarios
- ✅ Navegación clara y contextual
- ✅ Ubicación actual en el sitio
- ✅ Acceso rápido a páginas padre
- ✅ Experiencia visual atractiva y coherente

### Para SEO
- ✅ Estructura semántica mejorada
- ✅ Enlaces internos adicionales
- ✅ Jerarquía de contenido clara

### Para Accesibilidad
- ✅ Navegación por lectores de pantalla
- ✅ Estructura semántica correcta
- ✅ Indicadores de ubicación actual
- ✅ Contraste adecuado en todos los estilos

### Para Diseño
- ✅ Consistencia visual con la marca
- ✅ Flexibilidad para diferentes tipos de página
- ✅ Efectos hover atractivos
- ✅ Integración perfecta con el header existente
