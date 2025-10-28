import './bootstrap';
import Alpine from 'alpinejs';

// Start Alpine
window.Alpine = Alpine;
Alpine.start();

// Loader functionality
document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    
    if (loader) {
        // Verificar si es la primera visita o si hay elementos pesados que cargar
        const isFirstVisit = !sessionStorage.getItem('hasVisited');
        const hasHeavyContent = document.querySelector('img[src*="unsplash"]') || 
                               document.querySelector('picture img[srcset]') ||
                               document.querySelector('img[src*="GLAUCOMA"]');
        
        // Solo mostrar loader si es primera visita o hay contenido pesado
        if (!isFirstVisit && !hasHeavyContent) {
            loader.style.display = 'none';
            return;
        }
        
        // Marcar que ya visitó el sitio
        sessionStorage.setItem('hasVisited', 'true');
        
        // Ocultar loader cuando la página esté completamente cargada
        window.addEventListener('load', function() {
            // Tiempo mínimo más corto para navegaciones subsecuentes
            const minTime = isFirstVisit ? 1000 : 500;
            
            setTimeout(function() {
                loader.style.opacity = '0';
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500); // Tiempo de la transición CSS
            }, minTime);
        });
        
        // Fallback: ocultar loader después de 2 segundos máximo
        setTimeout(function() {
            if (loader.style.display !== 'none') {
                loader.style.opacity = '0';
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }
        }, 2000);
    }
});

// Lazy loading para imágenes
document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = document.querySelectorAll('.lazy-image-container');
    console.log('Lazy loading iniciado. Encontradas:', lazyImages.length, 'imágenes');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    console.log('Imagen entrando en viewport:', entry.target);
                    const container = entry.target;
                    const imageSrc = container.getAttribute('data-src');
                    console.log('Cargando imagen:', imageSrc);
                    
                    if (imageSrc) {
                        // Crear elemento img
                        const img = document.createElement('img');
                        img.src = imageSrc;
                        img.alt = 'Glaucoma Control Center';
                        img.className = 'w-full h-48 object-contain transition-opacity duration-500';
                        img.style.opacity = '0';
                        
                        // Reemplazar skeleton con imagen
                        container.innerHTML = '';
                        container.appendChild(img);
                        
                        // Fade in de la imagen
                        img.onload = function() {
                            img.style.opacity = '1';
                        };
                        
                        // Remover observer para esta imagen
                        observer.unobserve(container);
                    }
                }
            });
        }, {
            rootMargin: '50px 0px',
            threshold: 0.1
        });
        
        lazyImages.forEach(container => {
            imageObserver.observe(container);
        });
    } else {
        // Fallback para navegadores sin IntersectionObserver
        lazyImages.forEach(container => {
            const imageSrc = container.getAttribute('data-src');
            if (imageSrc) {
                const img = document.createElement('img');
                img.src = imageSrc;
                img.alt = 'Glaucoma Control Center';
                img.className = 'w-full h-48 object-contain';
                container.innerHTML = '';
                container.appendChild(img);
            }
        });
    }
});
