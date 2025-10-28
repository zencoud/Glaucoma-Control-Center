<div id="loader" class="fixed inset-0 bg-gray-900 flex items-center justify-center z-50 transition-opacity duration-500">
    <div class="text-center">
        <!-- Isotipo con animación -->
        <div class="loader-logo mb-4">
            <img 
                src="/img/GLAUCOMA_-_ISOTIPO_POSITIVO_yylf2b_c_scale,w_200.png"
                alt="Glaucoma Control Center"
                class="h-20 w-auto mx-auto"
            >
        </div>
        
        <!-- Nombre del centro -->
        <div class="text-white">
            <p class="text-sm font-light text-gray-300">Glaucoma Control Center</p>
        </div>
    </div>
</div>

<style>
.loader-logo img {
    animation: logoFloat 3s ease-in-out infinite;
}

@keyframes logoFloat {
    0%, 100% {
        transform: translateY(0px);
        opacity: 1;
    }
    50% {
        transform: translateY(-8px);
        opacity: 0.8;
    }
}
</style>
