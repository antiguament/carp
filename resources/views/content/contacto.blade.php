<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección Modernizada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#6366f1',
                            DEFAULT: '#4f46e5',
                            dark: '#4338ca',
                        },
                        secondary: {
                            light: '#f472b6',
                            DEFAULT: '#ec4899',
                            dark: '#db2777',
                        },
                        dark: {
                            DEFAULT: '#0f172a',
                            light: '#1e293b'
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    backgroundImage: {
                        'mesh-gradient': 'radial-gradient(at 40% 20%, hsla(252,100%,70%,0.3) 0px, transparent 50%), radial-gradient(at 80% 0%, hsla(252,100%,60%,0.1) 0px, transparent 50%), radial-gradient(at 0% 50%, hsla(252,100%,70%,0.2) 0px, transparent 50%)',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-gradient {
                @apply bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent;
            }
            .floating {
                animation: floating 6s ease-in-out infinite;
            }
            @keyframes floating {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }
            .glow {
                box-shadow: 0 0 15px rgba(99, 102, 241, 0.5);
            }
            .glow:hover {
                box-shadow: 0 0 25px rgba(236, 72, 153, 0.7);
            }
        }


        @keyframes textShine {
    0% { background-position: 0% 50%; }
    100% { background-position: 100% 50%; }
}

.animate-text-shine {
    background-size: 200% auto;
    animation: textShine 3s linear infinite alternate;
}


    </style>
</head>
<body class="bg-dark text-white font-sans overflow-x-hidden">
    
    <!-- Sección Modernizada -->
    <section class="relative py-24 px-4 overflow-hidden">
        <!-- Fondo con efecto moderno -->
        <div class="absolute inset-0 bg-mesh-gradient opacity-20 z-0"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center mix-blend-overlay opacity-30 z-0"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Contenido de texto -->
                <div class="space-y-8">
                    <span class="inline-block px-4 py-2 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full text-sm font-semibold uppercase tracking-wider text-white shadow-lg hover:shadow-cyan-300/40 transition-all duration-300 animate-pulse">
                        ✨ INNOVACIÓN 2025 📲 312-865-8195 ✨
                    </span>
                    
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-cyan-600 drop-shadow-[0_5px_15px_rgba(34,211,238,0.5)] animate-text-shine">
                            Redefiniendo
                        </span> 
                        <span class="text-gray-800 dark:text-white">los límites del diseño digital</span>
                    </h2>
                    
                    <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
                        Descubre una nueva era de experiencias digitales con nuestra plataforma revolucionaria. Combinamos tecnología de vanguardia con diseño intuitivo para crear soluciones que inspiran.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10 hover:border-primary/50 transition-all duration-300 glow">
                            <div class="text-primary mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Rendimiento</h3>
                            <p class="text-gray-300">Tecnología optimizada para máxima velocidad y eficiencia.</p>
                        </div>
                        
                        <div class="p-6 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10 hover:border-secondary/50 transition-all duration-300 glow">
                            <div class="text-secondary mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Diseño</h3>
                            <p class="text-gray-300">Interfaces intuitivas con estética visual impactante.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-4">
                        <button class="px-8 py-4 bg-gradient-to-r from-primary to-primary-dark rounded-lg font-bold text-white hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                            </svg>
                            Ver demostración
                        </button>
                        <button class="px-8 py-4 bg-transparent border-2 border-white/20 hover:border-primary rounded-lg font-bold text-white hover:text-primary transition-all duration-300">
                            Explorar características
                        </button>
                    </div>
                </div>
                
                <!-- Imagen moderna con efecto 3D -->
                <div class="relative floating">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Tecnología moderna" 
                             class="w-full h-auto object-cover rounded-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark via-transparent to-transparent opacity-80"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-primary/20 rounded-full blur-xl"></div>
                    <div class="absolute -top-6 -right-6 w-40 h-40 bg-secondary/20 rounded-full blur-xl"></div>
                    
                    <!-- Elemento decorativo flotante -->
        
                </div>
            </div>
        </div>
        
        <!-- Elementos decorativos abstractos -->
       
    </section>

</body>
</html>