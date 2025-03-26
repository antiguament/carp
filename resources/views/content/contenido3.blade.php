<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes Alternativos | Movimiento Extremo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a',
                        secondary: '#facc15',
                        cyan: '#06b6d4',
                        fuchsia: '#d946ef',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1.5s ease-in-out',
                        'slide-up': 'slideUp 1s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .gradient-blue-cyan {
                @apply bg-gradient-to-r from-primary to-cyan;
            }
            .gradient-fuchsia-yellow {
                @apply bg-gradient-to-r from-fuchsia to-secondary;
            }
            .card-hover:hover {
                @apply scale-105 shadow-lg;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Portada animada -->
    <section class="min-h-screen gradient-blue-cyan flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="container mx-auto px-4 z-10 text-center">
            <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-6 animate-fade-in">
                <span class="block animate-slide-up">DEPORTES</span>
                <span class="block text-secondary animate-slide-up [animation-delay:0.3s]">ALTERNATIVOS</span>
            </h1>
            <p class="text-xl md:text-2xl text-cyan-100 max-w-3xl mx-auto animate-fade-in [animation-delay:0.6s]">
                Explora disciplinas que desafían los límites del movimiento humano y la expresión artística
            </p>
        </div>
    </section>

    <!-- Sección de disciplinas -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-16">
                Descubre las Disciplinas
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card Capoeira -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-fuchsia-yellow h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🥋</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Capoeira</h3>
                        <p class="text-gray-600 mb-4">
                            Arte marcial brasileño que combina elementos de danza, acrobacias y música.
                        </p>
                        <a href="#capoeira" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
                
                <!-- Card Breakdance -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-blue-cyan h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🕺</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Breakdance</h3>
                        <p class="text-gray-600 mb-4">
                            Danza urbana que incluye movimientos acrobáticos, giros y figuras en el suelo.
                        </p>
                        <a href="#breakdance" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
                
                <!-- Card Parkour -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-fuchsia-yellow h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🏃‍♂️</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Parkour</h3>
                        <p class="text-gray-600 mb-4">
                            Disciplina de desplazamiento eficiente superando obstáculos urbanos.
                        </p>
                        <a href="#parkour" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
                
                <!-- Card Triking -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-blue-cyan h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🛹</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Triking</h3>
                        <p class="text-gray-600 mb-4">
                            Skateboarding extremo que combina trucos aéreos con movimientos fluidos.
                        </p>
                        <a href="#triking" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
                
                <!-- Card Freerunning -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-fuchsia-yellow h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🤸</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Freerunning</h3>
                        <p class="text-gray-600 mb-4">
                            Versión artística del parkour con acrobacias y movimientos creativos.
                        </p>
                        <a href="#freerunning" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
                
                <!-- Card Cliff jumping -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 card-hover">
                    <div class="gradient-blue-cyan h-3"></div>
                    <div class="p-6">
                        <div class="text-5xl mb-4 text-center">🌊</div>
                        <h3 class="text-2xl font-bold text-primary mb-3">Cliff Jumping</h3>
                        <p class="text-gray-600 mb-4">
                            Salto desde acantilados al agua, combinando altura, técnica y valor.
                        </p>
                        <a href="#cliff-jumping" class="text-cyan font-semibold hover:text-primary transition-colors">
                            Saber más →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa de relaciones SVG interactivo -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-primary/10">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-16">
                Conexiones entre Disciplinas
            </h2>
            
            <div class="bg-white rounded-xl shadow-2xl p-6">
                <!-- SVG interactivo iría aquí -->
                <div class="min-h-[400px] flex items-center justify-center bg-gray-100 rounded-lg">
                    <p class="text-gray-500">Mapa SVG interactivo de relaciones entre deportes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de imágenes -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-16">
                Galería Visual
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Imágenes de la galería (lightbox) -->
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
                <div class="aspect-square bg-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                    <!-- Imagen con lightbox -->
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de videos -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-16">
                Videos Inspiradores
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Videos embebidos -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        <!-- Video embed -->
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-primary">Freerunning en Barcelona</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        <!-- Video embed -->
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-primary">Campeonato Mundial de Breakdance</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de enseñanzas (acordeón) -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                Enseñanzas Adicionales
            </h2>
            
            <div class="max-w-3xl mx-auto">
                <!-- Acordeón con Tailwind -->
                <div class="mb-4 overflow-hidden rounded-xl">
                    <input type="checkbox" id="accordion-1" class="hidden peer">
                    <label for="accordion-1" class="bg-primary-dark flex justify-between items-center p-6 cursor-pointer">
                        <span class="text-xl font-bold">Seguridad y Preparación Física</span>
                        <svg class="w-6 h-6 transform peer-checked:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </label>
                    <div class="max-h-0 peer-checked:max-h-[500px] bg-primary-dark/50 overflow-hidden transition-all duration-300">
                        <div class="p-6">
                            <p>Consejos esenciales para preparar tu cuerpo y minimizar riesgos en deportes extremos.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4 overflow-hidden rounded-xl">
                    <input type="checkbox" id="accordion-2" class="hidden peer">
                    <label for="accordion-2" class="bg-primary-dark flex justify-between items-center p-6 cursor-pointer">
                        <span class="text-xl font-bold">Equipo Recomendado</span>
                        <svg class="w-6 h-6 transform peer-checked:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </label>
                    <div class="max-h-0 peer-checked:max-h-[500px] bg-primary-dark/50 overflow-hidden transition-all duration-300">
                        <div class="p-6">
                            <p>Guía de equipamiento esencial para cada disciplina deportiva alternativa.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4 overflow-hidden rounded-xl">
                    <input type="checkbox" id="accordion-3" class="hidden peer">
                    <label for="accordion-3" class="bg-primary-dark flex justify-between items-center p-6 cursor-pointer">
                        <span class="text-xl font-bold">Comunidades y Eventos</span>
                        <svg class="w-6 h-6 transform peer-checked:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </label>
                    <div class="max-h-0 peer-checked:max-h-[500px] bg-primary-dark/50 overflow-hidden transition-all duration-300">
                        <div class="p-6">
                            <p>Dónde encontrar comunidades locales y eventos internacionales de deportes alternativos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts para interactividad -->
    <script>
        // Aquí iría el JavaScript para:
        // - Animaciones al scroll
        // - Lightbox de galería
        // - Interactividad del SVG
        // - Funcionalidad del acordeón
    </script>
</body>
</html>