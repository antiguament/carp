<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freerunning Xtreme</title>
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
            filter: drop-shadow(0 0 8px rgba(249, 115, 22, 0.7));
        }
        .gradient-text { 
            background-clip: text; 
            -webkit-background-clip: text; 
            color: transparent; 
        }
        body {
            background: linear-gradient(135deg, #1c1917 0%, #292524 50%, #1c1917 100%);
        }
        .pulse {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.9; }
        }
        .concrete-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff10" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-repeat: repeat-x;
            background-position: bottom;
            opacity: 0.1;
        }
    </style>
</head>
<body class="min-h-screen p-6 text-orange-100 font-sans">
    <!-- Efecto de fondo urbano -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="concrete-bg"></div>
        <div class="absolute top-20 right-20 w-32 h-16 bg-orange-500/10 rounded-full filter blur-lg"></div>
        <div class="absolute top-1/3 left-1/4 w-40 h-20 bg-orange-500/10 rounded-full filter blur-lg"></div>
    </div>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto text-center mb-16 animate-fade-in relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-6 gradient-text bg-gradient-to-r from-orange-500 to-amber-600 pulse">
            FREERUNNING XTREME
        </h1>
        <p class="text-xl md:text-2xl text-orange-200 max-w-3xl mx-auto font-medium">
            Domina el arte del movimiento extremo con nuestros videos premium de freerunning
        </p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#video-gallery" class="px-8 py-3 bg-orange-500 hover:bg-orange-600 rounded-full font-bold text-white transition-all duration-300 hover:shadow-lg hover:shadow-orange-400/30 transform hover:-translate-y-1">
                Comenzar
            </a>
            <a href="#categories" class="px-8 py-3 border-2 border-orange-500 hover:border-orange-400 rounded-full font-bold text-orange-300 hover:text-orange-200 transition-all duration-300 hover:bg-white/10">
                Explorar
            </a>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="max-w-5xl mx-auto mb-16 bg-black/30 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-sm border border-orange-500/30 relative z-10">
        <div class="aspect-w-16 aspect-h-9 bg-stone-800 relative">
            <!-- Video Player Placeholder -->
            <div id="main-video" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-stone-800 to-stone-900">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-orange-300 mb-2">Selecciona un video</h3>
                    <p class="text-orange-200">Haz clic en cualquier video de la galería para reproducirlo aquí</p>
                </div>
            </div>
        </div>
        <div class="p-6 bg-black/30">
            <h2 id="video-title" class="text-3xl font-bold text-orange-300 mb-2">Título del Video</h2>
            <p id="video-desc" class="text-orange-200">Descripción del video seleccionado aparecerá aquí</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section id="video-gallery" class="max-w-7xl mx-auto relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-orange-500 to-amber-500">
            Galería de Movimientos
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video 1 -->
            <div class="video-card group" data-video-id="2vfoyY9lshI" data-title="Freerunning Urbano Extremo" data-desc="Movimientos imposibles en la ciudad con los mejores atletas de freerunning.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/2vfoyY9lshI/maxresdefault.jpg" alt="Freerunning Urbano Extremo" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Urbano Extremo</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        4:32
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-card group" data-video-id="7kmlXMErdgU" data-title="Parkour vs Freerunning" data-desc="Comparativa de estilos y técnicas entre parkour y freerunning.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/7kmlXMErdgU/maxresdefault.jpg" alt="Parkour vs Freerunning" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Parkour vs Freerunning</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        6:15
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-card group" data-video-id="4DfQ67E74fU" data-title="Freerunning en Naturaleza" data-desc="Acrobacias espectaculares en entornos naturales y salvajes.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/4DfQ67E74fU/maxresdefault.jpg" alt="Freerunning en Naturaleza" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">En Naturaleza</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        5:48
                    </div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-card group" data-video-id="t073c2YbCzM" data-title="Los 10 Mejores Movimientos" data-desc="Top de técnicas de freerunning que debes dominar.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/t073c2YbCzM/maxresdefault.jpg" alt="Los 10 Mejores Movimientos" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Top 10 Movimientos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        8:22
                    </div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="video-card group" data-video-id="rezxHxi9KF4" data-title="Freerunning Nocturno" data-desc="Espectáculo de freerunning bajo las luces de la ciudad.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/rezxHxi9KF4/maxresdefault.jpg" alt="Freerunning Nocturno" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Nocturno</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        3:56
                    </div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="video-card group" data-video-id="K5qCUauRrSE" data-title="Competencia Mundial" data-desc="Los mejores atletas de freerunning compitiendo en el escenario mundial.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/K5qCUauRrSE/maxresdefault.jpg" alt="Competencia Mundial" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Competencia Mundial</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        9:14
                    </div>
                </div>
            </div>

            <!-- Video 7 -->
            <div class="video-card group" data-video-id="xJJEzresLS4" data-title="Tutorial: Saltos Básicos" data-desc="Aprende los fundamentos de los saltos en freerunning con este tutorial detallado.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/xJJEzresLS4/maxresdefault.jpg" alt="Tutorial: Saltos Básicos" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Tutorial Saltos</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        7:03
                    </div>
                </div>
            </div>

            <!-- Video 8 -->
            <div class="video-card group" data-video-id="uTC8voVE-C8" data-title="Freerunning Artístico" data-desc="Cuando el movimiento se convierte en arte. Fusión de acrobacias y expresión.">
                <div class="video-thumbnail relative rounded-xl overflow-hidden shadow-lg transition-all duration-300 group-hover:shadow-orange-400/30">
                    <img src="https://img.youtube.com/vi/uTC8voVE-C8/maxresdefault.jpg" alt="Freerunning Artístico" class="w-full h-full object-cover aspect-video">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white">Freerunning Artístico</h3>
                    </div>
                    <div class="play-icon absolute inset-0 flex items-center justify-center opacity-0 transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500/90 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            </svg>
                        </div>
                    </div>
                    <div class="duration-badge absolute top-3 right-3 bg-stone-900/80 text-orange-100 px-2 py-1 rounded-md text-xs font-bold">
                        4:45
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="max-w-7xl mx-auto mt-20 relative z-10">
        <h2 class="text-4xl font-bold mb-8 text-center gradient-text bg-gradient-to-r from-orange-500 to-amber-500">
            Niveles de Dificultad
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Principiante -->
            <div class="bg-black/30 rounded-2xl p-8 border-2 border-orange-500/50 hover:border-orange-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-orange-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-orange-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    1
                </div>
                <h3 class="text-2xl font-bold text-orange-300 mb-4">Principiante</h3>
                <p class="text-orange-200 mb-6">Aprende los fundamentos y construye una base sólida para tu práctica de freerunning.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-orange-500 hover:bg-orange-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Intermedio -->
            <div class="bg-black/30 rounded-2xl p-8 border-2 border-amber-500/50 hover:border-amber-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-amber-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    2
                </div>
                <h3 class="text-2xl font-bold text-amber-300 mb-4">Intermedio</h3>
                <p class="text-orange-200 mb-6">Combina movimientos y desarrolla fluidez en tus secuencias de freerunning.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-amber-500 hover:bg-amber-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
            
            <!-- Avanzado -->
            <div class="bg-black/30 rounded-2xl p-8 border-2 border-red-500/50 hover:border-red-400/70 transition-all duration-300 hover:shadow-xl hover:shadow-red-500/20 backdrop-blur-sm">
                <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-red-500 rounded-full flex items-center justify-center mb-6 text-white text-2xl font-bold shadow-md">
                    3
                </div>
                <h3 class="text-2xl font-bold text-red-300 mb-4">Extremo</h3>
                <p class="text-orange-200 mb-6">Técnicas avanzadas y movimientos que desafían los límites físicos.</p>
                <a href="#video-gallery" class="inline-block px-6 py-2 bg-red-500 hover:bg-red-600 rounded-full font-bold text-white transition-all duration-300">
                    Ver Videos
                </a>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="max-w-4xl mx-auto mt-24 mb-16 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text bg-gradient-to-r from-orange-500 to-amber-600">
            ¿Listo para el Desafío Extremo?
        </h2>
        <p class="text-xl text-orange-200 mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad y lleva tu freerunning al siguiente nivel.
        </p>
        <button class="px-10 py-4 bg-gradient-to-r from-orange-500 to-amber-600 hover:from-orange-600 hover:to-amber-700 rounded-full font-bold text-white text-lg transition-all duration-300 hover:shadow-lg hover:shadow-orange-500/30 transform hover:-translate-y-1">
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