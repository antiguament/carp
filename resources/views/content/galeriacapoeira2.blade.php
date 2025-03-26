<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capoeira Mastery</title>
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
            background: linear-gradient(135deg, #1a3a2f 0%, #2d6957 50%, #1a3a2f 100%);
        }
    </style>
</head>
<body class="min-h-screen p-6 text-white font-sans">

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto text-center mb-16 animate-fade-in">
        <h1 class="text-6xl md:text-8xl font-black mb-6 gradient-text bg-gradient-to-r from-amber-300 via-emerald-400 to-teal-400">
            CAPOEIRA FLOW
        </h1>
        <p class="text-xl md:text-2xl text-emerald-200 max-w-3xl mx-auto font-medium">
            Domina el arte de la capoeira con nuestros videos premium
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#video-gallery" class="px-8 py-3 bg-amber-400 hover:bg-amber-500 rounded-full font-bold text-gray-900 transition-all duration-300 hover:shadow-lg hover:shadow-amber-400/30">
                Comenzar
            </a>
            <a href="#categories" class="px-8 py-3 border-2 border-emerald-400 hover:border-amber-300 rounded-full font-bold text-emerald-100 transition-all duration-300 hover:text-white">
                Explorar
            </a>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="max-w-5xl mx-auto mb-16 bg-emerald-900/30 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-sm border border-amber-400/20">
        <div class="aspect-w-16 aspect-h-9 bg-black relative">
            <!-- Video Player Placeholder -->
            <div id="main-video" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-900 to-emerald-900">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-amber-400 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-900 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-amber-300 mb-2">Selecciona un video</h3>
                    <p class="text-emerald-300">Haz clic en cualquier video de la galería para reproducirlo aquí</p>
                </div>
            </div>
        </div>
        <div class="p-6">
            <h2 id="video-title" class="text-3xl font-bold text-amber-300 mb-2">Título del Video</h2>
            <p id="video-desc" class="text-emerald-200">Descripción del video seleccionado aparecerá aquí</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section id="video-gallery" class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-amber-300 to-emerald-400">
            Biblioteca de Movimientos
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video 1 - Ginga Básica -->
            <div class="video-card group" data-video-id="Wz8b2xff7s0" data-title="Ginga Fundamental" data-desc="Domina la base de todos los movimientos de capoeira con esta guía completa de la ginga.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/vi/Wz8b2xff7s0/maxresdefault.jpg" alt="Ginga Fundamental" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Ginga Fundamental</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        7:22
                    </div>
                </div>
            </div>

            <!-- Video 2 - Au (Rueda Lateral) -->
            <div class="video-card group" data-video-id="Ticu4XkGqHo" data-title="Au Perfeccionado" data-desc="Técnica avanzada de la rueda lateral para ganar fluidez y control en tus movimientos.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/vi/Ticu4XkGqHo/maxresdefault.jpg" alt="Au Perfeccionado" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Au Perfeccionado</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        9:15
                    </div>
                </div>
            </div>

            <!-- Video 3 - Meia Lua de Frente -->
            <div class="video-card group" data-video-id="Js1xdb8f-RQ" data-title="Meia Lua de Frente Avanzada" data-desc="Variaciones y aplicaciones avanzadas de este movimiento clásico de capoeira.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/vi/Js1xdb8f-RQ/maxresdefault.jpg" alt="Meia Lua de Frente Avanzada" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Meia Lua Avanzada</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        6:48
                    </div>
                </div>
            </div>

            <!-- Video 4 - Esquivas -->
            <div class="video-card group" data-video-id="aTh9OScnSLc" data-title="Esquivas Dinámicas" data-desc="Técnicas de esquiva que combinan fluidez y preparación para el contraataque.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/watch?v=r1qsT2feZcI/maxresdefault.jpg" alt="Esquivas Dinámicas" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Esquivas Dinámicas</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        8:34
                    </div>
                </div>
            </div>

            <!-- Video 5 - Berimbau -->
            <div class="video-card group" data-video-id="0AWMj6m-zUE" data-title="Ritmos de Berimbau" data-desc="Aprende los toques tradicionales y su significado en la roda de capoeira.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/vi/0AWMj6m-zUE/maxresdefault.jpg" alt="Ritmos de Berimbau" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Ritmos de Berimbau</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        10:12
                    </div>
                </div>
            </div>

            <!-- Video 6 - Roda -->
            <div class="video-card group" data-video-id="oCoctTsjdaY" data-title="Roda Contemporánea" data-desc="Análisis de una roda moderna con interpretación de los movimientos y estrategias.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-amber-400/30">
                    <img src="https://img.youtube.com/vi/oCoctTsjdaY/maxresdefault.jpg" alt="Roda Contemporánea" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Roda Contemporánea</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-400/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-900 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-amber-300 px-2 py-1 rounded-md text-xs font-bold">
                        12:05
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="max-w-7xl mx-auto mt-20">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-amber-300 to-emerald-400">
            Explora por Niveles
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Beginner -->
            <div class="bg-gray-900/40 rounded-2xl p-8 border-2 border-amber-400/20 hover:border-amber-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-amber-400/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-amber-400 rounded-full flex items-center justify-center mb-6 text-gray-900 text-2xl font-bold">
                    1
                </div>
                <h3 class="text-2xl font-bold text-amber-300 mb-4">Principiante</h3>
                <p class="text-emerald-200 mb-6">Fundamentos básicos y movimientos esenciales para empezar tu viaje en la capoeira.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-amber-400 hover:bg-amber-500 rounded-full font-bold text-gray-900 transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Intermediate -->
            <div class="bg-gray-900/40 rounded-2xl p-8 border-2 border-emerald-400/20 hover:border-emerald-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-400/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-emerald-400 rounded-full flex items-center justify-center mb-6 text-gray-900 text-2xl font-bold">
                    2
                </div>
                <h3 class="text-2xl font-bold text-emerald-300 mb-4">Intermedio</h3>
                <p class="text-emerald-200 mb-6">Combina movimientos y desarrolla fluidez en el juego con técnicas más avanzadas.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-emerald-400 hover:bg-emerald-500 rounded-full font-bold text-gray-900 transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Advanced -->
            <div class="bg-gray-900/40 rounded-2xl p-8 border-2 border-teal-400/20 hover:border-teal-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-teal-400/10 backdrop-blur-sm">
                <div class="w-16 h-16 bg-teal-400 rounded-full flex items-center justify-center mb-6 text-gray-900 text-2xl font-bold">
                    3
                </div>
                <h3 class="text-2xl font-bold text-teal-300 mb-4">Avanzado</h3>
                <p class="text-emerald-200 mb-6">Acrobacias, movimientos complejos y dominio del ritmo en la roda.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-teal-400 hover:bg-teal-500 rounded-full font-bold text-gray-900 transition-all duration-300">
                    Ver Videos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="max-w-4xl mx-auto mt-24 mb-16 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text bg-gradient-to-r from-amber-300 to-teal-400">
            ¿Listo para dominar la Capoeira?
        </h2>
        <p class="text-xl text-emerald-200 mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad y accede a cientos de tutoriales exclusivos.
        </p>
        <button class="px-10 py-4 bg-gradient-to-r from-amber-400 to-emerald-500 hover:from-amber-500 hover:to-emerald-600 rounded-full font-bold text-gray-900 text-lg transition-all duration-300 hover:shadow-lg hover:shadow-amber-400/30 transform hover:-translate-y-1">
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