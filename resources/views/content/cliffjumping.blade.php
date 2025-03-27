<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliff Jumping Flow</title>
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
        .video-thumbnail:hover .play-icon { 
            opacity: 1; 
            transform: scale(1.1);
            filter: drop-shadow(0 0 8px rgba(236, 72, 153, 0.7));
        }
        .gradient-text { 
            background-clip: text; 
            -webkit-background-clip: text; 
            color: transparent; 
        }
        body {
            background: linear-gradient(135deg, #111827 0%, #1f2937 50%, #111827 100%);
            color: #f3f4f6;
        }
        .neon-pulse {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        .star-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(white 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.1;
        }
    </style>
</head>
<body class="min-h-screen p-6 font-sans">
    <!-- Efecto de estrellas -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="star-bg"></div>
    </div>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto text-center mb-16 animate-fade-in relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-6 gradient-text bg-gradient-to-r from-fuchsia-500 to-blue-600 neon-pulse">
            CLIFF JUMPING FLOW
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto font-medium">
            Domina el arte del salto al vacío con nuestros videos premium de los mejores lugares del mundo
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#video-gallery" class="px-8 py-3 bg-gradient-to-r from-fuchsia-600 to-blue-700 hover:from-fuchsia-700 hover:to-blue-800 rounded-full font-bold text-white transition-all duration-300 hover:shadow-lg hover:shadow-fuchsia-500/30 transform hover:-translate-y-1">
                Comenzar
            </a>
            <a href="#categories" class="px-8 py-3 border-2 border-fuchsia-500 hover:border-fuchsia-400 rounded-full font-bold text-fuchsia-400 hover:text-fuchsia-300 transition-all duration-300 hover:bg-gray-900/20">
                Explorar
            </a>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="max-w-5xl mx-auto mb-16 bg-gray-900/50 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-sm border border-fuchsia-500/30 relative z-10">
        <div class="aspect-w-16 aspect-h-9 bg-gray-800 relative">
            <!-- Video Player Placeholder -->
            <div id="main-video" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-900 to-blue-900">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Selecciona un video</h3>
                    <p class="text-gray-400">Haz clic en cualquier video de la galería para reproducirlo aquí</p>
                </div>
            </div>
        </div>
        <div class="p-6 bg-gray-900/40">
            <h2 id="video-title" class="text-3xl font-bold text-gray-100 mb-2">Título del Video</h2>
            <p id="video-desc" class="text-gray-300">Descripción del video seleccionado aparecerá aquí</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section id="video-gallery" class="max-w-7xl mx-auto relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-fuchsia-500 to-blue-500">
            Mejores Saltos del Mundo
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video 1 -->
            <div class="video-card group" data-video-id="OlF2LpJ_h3I" data-title="Cliff Jumping Extremo" data-desc="Los saltos más extremos desde acantilados impresionantes alrededor del mundo.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/OlF2LpJ_h3I/maxresdefault.jpg" alt="Cliff Jumping Extremo" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Cliff Jumping Extremo</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        3:22
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-card group" data-video-id="ih5CAaR1hNQ" data-title="Saltos desde 30 metros" data-desc="Adrenalina pura con estos saltos desde alturas que superan los 30 metros.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/ih5CAaR1hNQ/maxresdefault.jpg" alt="Saltos desde 30 metros" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Saltos desde 30m</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        2:45
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-card group" data-video-id="0iv2bHA-0As" data-title="Técnicas de Entrada al Agua" data-desc="Aprende a entrar al agua correctamente desde grandes alturas para minimizar impactos.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/0iv2bHA-0As/maxresdefault.jpg" alt="Técnicas de Entrada al Agua" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Técnicas de Entrada</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        4:18
                    </div>
                </div>
            </div>

            <!-- Video 4 (Short) -->
            <div class="video-card group" data-video-id="zt2l4W019HY" data-title="Salto Perfecto en Hawaii" data-desc="Captura aérea de un salto perfecto en los acantilados de Hawaii.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/zt2l4W019HY/maxresdefault.jpg" alt="Salto Perfecto en Hawaii" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Salto en Hawaii</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        0:58
                    </div>
                </div>
            </div>

            <!-- Video 5 (Short) -->
            <div class="video-card group" data-video-id="iOQDc2JdcsI" data-title="Doble Salto Acrobático" data-desc="Dos amigos realizando saltos acrobáticos sincronizados desde un acantilado.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/iOQDc2JdcsI/maxresdefault.jpg" alt="Doble Salto Acrobático" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Doble Salto</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        0:45
                    </div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="video-card group" data-video-id="pMlwL2v3f68" data-title="Los 10 Mejores Saltos" data-desc="Compilación de los 10 saltos más espectaculares de la temporada.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/pMlwL2v3f68/maxresdefault.jpg" alt="Los 10 Mejores Saltos" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Top 10 Saltos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        5:12
                    </div>
                </div>
            </div>

            <!-- Video 7 (Short) -->
            <div class="video-card group" data-video-id="1JcyRy0A2-U" data-title="Salto Nocturno con Luces" data-desc="Impresionante salto nocturno iluminado con luces LED.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/1JcyRy0A2-U/maxresdefault.jpg" alt="Salto Nocturno con Luces" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Salto Nocturno</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        0:59
                    </div>
                </div>
            </div>

            <!-- Video 8 -->
            <div class="video-card group" data-video-id="7pp6jXqSGE8" data-title="Guía Completa de Cliff Jumping" data-desc="Todo lo que necesitas saber para comenzar en el mundo del salto desde acantilados.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-fuchsia-500/30">
                    <img src="https://img.youtube.com/vi/7pp6jXqSGE8/maxresdefault.jpg" alt="Guía Completa de Cliff Jumping" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Guía Completa</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-gray-900/80 text-gray-100 px-2 py-1 rounded-md text-xs font-bold">
                        8:36
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="max-w-7xl mx-auto mt-20 relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-fuchsia-500 to-blue-500">
            Niveles de Dificultad
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Principiante -->
            <div class="bg-gray-900/50 rounded-2xl p-8 border-2 border-fuchsia-500/30 hover:border-fuchsia-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-fuchsia-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-fuchsia-600 to-blue-600 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    1
                </div>
                <h3 class="text-2xl font-bold text-gray-100 mb-4">Principiante</h3>
                <p class="text-gray-300 mb-6">Saltos desde alturas bajas con técnicas básicas para empezar con seguridad.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-fuchsia-600 to-blue-600 hover:from-fuchsia-700 hover:to-blue-700 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Intermedio -->
            <div class="bg-gray-900/50 rounded-2xl p-8 border-2 border-blue-500/30 hover:border-blue-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    2
                </div>
                <h3 class="text-2xl font-bold text-gray-100 mb-4">Intermedio</h3>
                <p class="text-gray-300 mb-6">Saltos desde 10-20 metros con giros y entradas más técnicas.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Avanzado -->
            <div class="bg-gray-900/50 rounded-2xl p-8 border-2 border-indigo-500/30 hover:border-indigo-400/50 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    3
                </div>
                <h3 class="text-2xl font-bold text-gray-100 mb-4">Avanzado</h3>
                <p class="text-gray-300 mb-6">Saltos extremos desde más de 25 metros con acrobacias complejas.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="max-w-4xl mx-auto mt-24 mb-16 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text bg-gradient-to-r from-fuchsia-500 to-blue-600">
            ¿Listo para Experimentar la Adrenalina?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad de cliff jumping y descubre los mejores lugares del mundo para saltar.
        </p>
        <button class="px-10 py-4 bg-gradient-to-r from-fuchsia-600 to-blue-700 hover:from-fuchsia-700 hover:to-blue-800 rounded-full font-bold text-white text-lg transition-all duration-300 hover:shadow-lg hover:shadow-fuchsia-500/30 transform hover:-translate-y-1">
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