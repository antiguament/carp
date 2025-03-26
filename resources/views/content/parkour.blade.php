<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkour Flow</title>
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
            filter: drop-shadow(0 0 8px rgba(96, 165, 250, 0.7));
        }
        .gradient-text { 
            background-clip: text; 
            -webkit-background-clip: text; 
            color: transparent; 
        }
        body {
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 50%, #e0f2fe 100%);
        }
        .sky-pulse {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.9; }
        }
        .cloud-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff10" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-repeat: repeat-x;
            background-position: bottom;
            opacity: 0.3;
        }
    </style>
</head>
<body class="min-h-screen p-6 text-sky-900 font-sans">
    <!-- Efecto de nubes -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="cloud-bg"></div>
        <div class="absolute top-20 right-20 w-32 h-16 bg-white/30 rounded-full filter blur-lg"></div>
        <div class="absolute top-1/3 left-1/4 w-40 h-20 bg-white/30 rounded-full filter blur-lg"></div>
    </div>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto text-center mb-16 animate-fade-in relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-6 gradient-text bg-gradient-to-r from-sky-500 to-blue-600 sky-pulse">
            PARKOUR FLOW
        </h1>
        <p class="text-xl md:text-2xl text-sky-700 max-w-3xl mx-auto font-medium">
            Domina el arte del movimiento urbano con nuestros videos premium
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#video-gallery" class="px-8 py-3 bg-sky-500 hover:bg-sky-600 rounded-full font-bold text-white transition-all duration-300 hover:shadow-lg hover:shadow-sky-400/30 transform hover:-translate-y-1">
                Comenzar
            </a>
            <a href="#categories" class="px-8 py-3 border-2 border-sky-500 hover:border-sky-400 rounded-full font-bold text-sky-600 hover:text-sky-700 transition-all duration-300 hover:bg-white/20">
                Explorar
            </a>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="max-w-5xl mx-auto mb-16 bg-white/30 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-sm border border-sky-300/50 relative z-10">
        <div class="aspect-w-16 aspect-h-9 bg-sky-100 relative">
            <!-- Video Player Placeholder -->
            <div id="main-video" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-sky-200 to-blue-200">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-sky-500 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-sky-700 mb-2">Selecciona un video</h3>
                    <p class="text-sky-600">Haz clic en cualquier video de la galería para reproducirlo aquí</p>
                </div>
            </div>
        </div>
        <div class="p-6 bg-white/20">
            <h2 id="video-title" class="text-3xl font-bold text-sky-800 mb-2">Título del Video</h2>
            <p id="video-desc" class="text-sky-700">Descripción del video seleccionado aparecerá aquí</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section id="video-gallery" class="max-w-7xl mx-auto relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-sky-500 to-blue-500">
            Biblioteca de Movimientos
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video 1 -->
            <div class="video-card group" data-video-id="i_nC4dtvtp8" data-title="Fundamentos de Parkour" data-desc="Aprende los movimientos básicos esenciales para comenzar tu viaje en parkour.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/i_nC4dtvtp8/maxresdefault.jpg" alt="Fundamentos de Parkour" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Fundamentos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        8:42
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-card group" data-video-id="V2flqoWkVM0" data-title="Saltos de Precisión" data-desc="Domina la técnica de saltos precisos para moverte con confianza en cualquier entorno.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/V2flqoWkVM0/maxresdefault.jpg" alt="Saltos de Precisión" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Saltos de Precisión</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        6:15
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-card group" data-video-id="6zkhxeU_WqI" data-title="Técnicas de Recepción" data-desc="Aprende a caer y recibir impactos correctamente para proteger tus articulaciones.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/6zkhxeU_WqI/maxresdefault.jpg" alt="Técnicas de Recepción" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Técnicas de Recepción</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        9:28
                    </div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-card group" data-video-id="NX7QNWEGcNI" data-title="Movimientos de Escalada" data-desc="Técnicas para escalar muros y superar obstáculos verticales con eficiencia.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/NX7QNWEGcNI/maxresdefault.jpg" alt="Movimientos de Escalada" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Movimientos de Escalada</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        7:53
                    </div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="video-card group" data-video-id="LVILaXvspcU" data-title="Flujo Urbano" data-desc="Combina movimientos para crear secuencias fluidas en entornos urbanos.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/LVILaXvspcU/maxresdefault.jpg" alt="Flujo Urbano" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Flujo Urbano</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        10:37
                    </div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="video-card group" data-video-id="_XZCtE8672g" data-title="Técnicas Avanzadas" data-desc="Movimientos complejos para practicantes con experiencia en parkour.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/_XZCtE8672g/maxresdefault.jpg" alt="Técnicas Avanzadas" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Técnicas Avanzadas</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        12:14
                    </div>
                </div>
            </div>

            <!-- Video 7 -->
            <div class="video-card group" data-video-id="Ot0g-dvgdNo" data-title="Entrenamiento de Fuerza" data-desc="Ejercicios específicos para desarrollar la fuerza necesaria en parkour.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/Ot0g-dvgdNo/maxresdefault.jpg" alt="Entrenamiento de Fuerza" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Entrenamiento de Fuerza</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        14:22
                    </div>
                </div>
            </div>

            <!-- Video 8 -->
            <div class="video-card group" data-video-id="cNktWBBM9AI" data-title="Rutina Completa" data-desc="Secuencia completa que integra todos los aspectos fundamentales del parkour.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-sky-400/30">
                    <img src="https://img.youtube.com/vi/cNktWBBM9AI/maxresdefault.jpg" alt="Rutina Completa" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Rutina Completa</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-sky-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-sky-900/80 text-sky-100 px-2 py-1 rounded-md text-xs font-bold">
                        15:48
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="max-w-7xl mx-auto mt-20 relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-sky-500 to-blue-500">
            Niveles de Habilidad
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Principiante -->
            <div class="bg-white/30 rounded-2xl p-8 border-2 border-sky-300/50 hover:border-sky-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-sky-300/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-sky-400 to-sky-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    1
                </div>
                <h3 class="text-2xl font-bold text-sky-800 mb-4">Principiante</h3>
                <p class="text-sky-700 mb-6">Aprende los fundamentos y construye una base sólida para tu práctica.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-sky-500 hover:bg-sky-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Intermedio -->
            <div class="bg-white/30 rounded-2xl p-8 border-2 border-blue-300/50 hover:border-blue-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-blue-300/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    2
                </div>
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Intermedio</h3>
                <p class="text-sky-700 mb-6">Combina movimientos y desarrolla fluidez en tus secuencias.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Avanzado -->
            <div class="bg-white/30 rounded-2xl p-8 border-2 border-indigo-300/50 hover:border-indigo-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-300/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-400 to-indigo-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    3
                </div>
                <h3 class="text-2xl font-bold text-indigo-800 mb-4">Avanzado</h3>
                <p class="text-sky-700 mb-6">Técnicas complejas y movimientos que desafían la gravedad.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="max-w-4xl mx-auto mt-24 mb-16 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text bg-gradient-to-r from-sky-500 to-blue-600">
            ¿Listo para Dominar el Parkour?
        </h2>
        <p class="text-xl text-sky-700 mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad y transforma tu forma de moverte por la ciudad.
        </p>
        <button class="px-10 py-4 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 rounded-full font-bold text-white text-lg transition-all duration-300 hover:shadow-lg hover:shadow-sky-500/30 transform hover:-translate-y-1">
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