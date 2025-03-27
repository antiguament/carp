<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakdance Mastery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-fade-in { animation: fadeIn 1s ease-out forwards; }
        .video-thumbnail:hover .play-icon { opacity: 1; transform: scale(1.1); }
        .gradient-text { 
            background-clip: text; 
            -webkit-background-clip: text; 
            color: transparent; 
        }
        body {
            background: linear-gradient(135deg, #000000 0%, #1a1200 50%, #000000 100%);
        }
        .break-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
    </style>
</head>
<body class="min-h-screen p-6 text-white font-sans">

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto text-center mb-16 animate-fade-in">
        <h1 class="text-6xl md:text-8xl font-black mb-6 gradient-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-red-600 break-pulse">
            BREAKDANCE FLOW
        </h1>
        <p class="text-xl md:text-2xl text-yellow-300 max-w-3xl mx-auto font-medium">
            Domina el arte del breakdance con nuestros movimientos premium
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#video-gallery" class="px-8 py-3 bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 rounded-full font-bold text-black transition-all duration-300 hover:shadow-lg hover:shadow-yellow-500/30">
                Comenzar
            </a>
            <a href="#categories" class="px-8 py-3 border-2 border-yellow-500 hover:border-yellow-400 rounded-full font-bold text-yellow-300 transition-all duration-300 hover:text-white">
                Explorar
            </a>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="max-w-5xl mx-auto mb-16 bg-gradient-to-br from-black/80 via-yellow-900/50 to-black/80 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-sm border border-yellow-500/20">
        <div class="aspect-w-16 aspect-h-9 bg-black relative">
            <!-- Video Player Placeholder -->
            <div id="main-video" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-black to-yellow-900">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-2">Selecciona un video</h3>
                    <p class="text-yellow-400">Haz clic en cualquier video de la galería para reproducirlo aquí</p>
                </div>
            </div>
        </div>
        <div class="p-6">
            <h2 id="video-title" class="text-3xl font-bold text-yellow-400 mb-2">Título del Video</h2>
            <p id="video-desc" class="text-yellow-300">Descripción del video seleccionado aparecerá aquí</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section id="video-gallery" class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-yellow-400 to-red-500">
            Biblioteca de Movimientos
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video 1 - Top Rock -->
            <div class="video-card group" data-video-id="CSWrZH4dw6Q" data-title="Top Rock Esencial" data-desc="Aprende los fundamentos del Top Rock, la base de todo buen breaker.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/CSWrZH4dw6Q/maxresdefault.jpg" alt="Top Rock Esencial" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Top Rock Esencial</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        8:15
                    </div>
                </div>
            </div>

            <!-- Video 2 - Footwork -->
            <div class="video-card group" data-video-id="hPU4lF2jvxo" data-title="Footwork Avanzado" data-desc="Domina las combinaciones de footwork que impresionarán en cualquier batalla.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/hPU4lF2jvxo/maxresdefault.jpg" alt="Footwork Avanzado" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Footwork Avanzado</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        10:22
                    </div>
                </div>
            </div>

            <!-- Video 3 - Freezes -->
            <div class="video-card group" data-video-id="A8pMTwjIC-Y" data-title="Freezes Impactantes" data-desc="Aprende freezes que dejarán boquiabierto a cualquier público.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/A8pMTwjIC-Y/maxresdefault.jpg" alt="Freezes Impactantes" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Freezes Impactantes</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        7:45
                    </div>
                </div>
            </div>

            <!-- Video 4 - Power Moves -->
            <div class="video-card group" data-video-id="jis9USyhxBI" data-title="Power Moves Básicos" data-desc="Introducción a los movimientos de poder que definen el breakdance.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/jis9USyhxBI/maxresdefault.jpg" alt="Power Moves Básicos" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Power Moves Básicos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        9:30
                    </div>
                </div>
            </div>

            <!-- Video 5 - Flares -->
            <div class="video-card group" data-video-id="wmBb0i1brx4" data-title="Flares Perfectos" data-desc="Técnica y entrenamiento para lograr flares impresionantes.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/wmBb0i1brx4/maxresdefault.jpg" alt="Flares Perfectos" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Flares Perfectos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        6:18
                    </div>
                </div>
            </div>

            <!-- Video 6 - Windmill -->
            <div class="video-card group" data-video-id="0dB7JjpBMtI" data-title="Dominando el Windmill" data-desc="De cero a héroe con el movimiento icónico del breakdance.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/0dB7JjpBMtI/maxresdefault.jpg" alt="Dominando el Windmill" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Dominando el Windmill</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        11:42
                    </div>
                </div>
            </div>

            <!-- Video 7 - Short 1 -->
            <div class="video-card group" data-video-id="D1xRrN6ruvo" data-title="Combinación Rápida" data-desc="Secuencia corta pero impactante para añadir a tu repertorio.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/D1xRrN6ruvo/maxresdefault.jpg" alt="Combinación Rápida" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Combinación Rápida</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        0:58
                    </div>
                </div>
            </div>

            <!-- Video 8 - Short 2 -->
            <div class="video-card group" data-video-id="JUDTjLWOxeg" data-title="Transición Creativa" data-desc="Movimiento fluido para conectar tus pasos de breakdance.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-yellow-500/30">
                    <img src="https://img.youtube.com/vi/JUDTjLWOxeg/maxresdefault.jpg" alt="Transición Creativa" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Transición Creativa</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-black/80 text-yellow-400 px-2 py-1 rounded-md text-xs font-bold">
                        0:45
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="max-w-7xl mx-auto mt-20">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-yellow-400 to-red-500">
            Explora por Estilos
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Foundations -->
            <div class="bg-gradient-to-br from-black/70 via-yellow-900/50 to-black/70 rounded-2xl p-8 border-2 border-yellow-500/20 hover:border-yellow-500/50 transition-all duration-300 hover:shadow-xl hover:shadow-yellow-500/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mb-6 text-black text-2xl font-bold">
                    B
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">Básicos</h3>
                <p class="text-yellow-300 mb-6">Fundamentos esenciales para construir tu técnica de breakdance.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 rounded-full font-bold text-black transition-all duration-300">
                    Ver Movimientos
                </a>
            </div>
            
            <!-- Style -->
            <div class="bg-gradient-to-br from-black/70 via-yellow-900/50 to-black/70 rounded-2xl p-8 border-2 border-yellow-500/20 hover:border-yellow-500/50 transition-all duration-300 hover:shadow-xl hover:shadow-yellow-500/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mb-6 text-black text-2xl font-bold">
                    S
                </div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4">Estilo</h3>
                <p class="text-yellow-300 mb-6">Desarrolla tu flow personal y originalidad en el dance.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 rounded-full font-bold text-black transition-all duration-300">
                    Ver Movimientos
                </a>
            </div>
            
            <!-- Power -->
            <div class="bg-gradient-to-br from-black/70 via-red-900/50 to-black/70 rounded-2xl p-8 border-2 border-red-500/20 hover:border-red-500/50 transition-all duration-300 hover:shadow-xl hover:shadow-red-500/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mb-6 text-black text-2xl font-bold">
                    P
                </div>
                <h3 class="text-2xl font-bold text-red-400 mb-4">Power</h3>
                <p class="text-yellow-300 mb-6">Movimientos acrobáticos y giros que roban el show.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 rounded-full font-bold text-black transition-all duration-300">
                    Ver Movimientos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="max-w-4xl mx-auto mt-24 mb-16 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text bg-gradient-to-r from-yellow-400 to-red-500">
            ¿Listo para Romper el Suelo?
        </h2>
        <p class="text-xl text-yellow-300 mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad y lleva tu breakdance al siguiente nivel.
        </p>
        <button class="px-10 py-4 bg-gradient-to-r from-yellow-500 to-red-600 hover:from-yellow-600 hover:to-red-700 rounded-full font-bold text-black text-lg transition-all duration-300 hover:shadow-lg hover:shadow-yellow-500/30 transform hover:-translate-y-1">
            Comenzar Entrenamiento Premium
        </button>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoCards = document.querySelectorAll('.video-card');
            const mainVideo = document.getElementById('main-video');
            const videoTitle = document.getElementById('video-title');
            const videoDesc = document.getElementById('video-desc');
            
            videoCards.forEach(card => {
                card.addEventListener('click', function() {
                    const videoId = this.getAttribute('data-video-id');
                    const title = this.getAttribute('data-title');
                    const desc = this.getAttribute('data-desc');
                    
                    // Update main video player
                    mainVideo.innerHTML = `
                        <iframe 
                            class="w-full h-full" 
                            src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" 
                            title="${title}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    `;
                    
                    // Update video info
                    videoTitle.textContent = title;
                    videoDesc.textContent = desc;
                    
                    // Smooth scroll to video player
                    mainVideo.scrollIntoView({ behavior: 'smooth', block: 'center' });
                });
            });
        });
    </script>
</body>
</html>