<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calistenia 2025 | Entrenamiento Avanzado</title>
    <style>
        :root {
            --cyan: #00f2fe;
            --dark-blue: #0a1a3a;
            --medium-blue: #1a3a6a;
            --gradient: linear-gradient(135deg, var(--cyan), var(--medium-blue));
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: var(--dark-blue);
            color: white;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .hero {
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(10, 26, 58, 0.7), rgba(10, 26, 58, 0.9)), 
                        url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
            margin-bottom: 50px;
            border-radius: 0 0 30px 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }
        
        .hero::before {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: var(--gradient);
            clip-path: polygon(0 0, 100% 0, 100% 20%, 0 100%);
            z-index: 1;
        }
        
        .hero-content {
            text-align: center;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 4rem;
            margin: 0;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
        }
        
        .hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin: 20px auto;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
            margin: 80px 0;
        }
        
        .video-card {
            background: linear-gradient(145deg, #0f2a52, #0a1a3a);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }
        
        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 242, 254, 0.2);
        }
        
        .video-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .video-info {
            padding: 20px;
        }
        
        .video-info h3 {
            margin: 0 0 10px 0;
            color: var(--cyan);
            font-size: 1.3rem;
        }
        
        .video-info p {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.5;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin: 100px 0;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 242, 254, 0.1);
            transition: all 0.3s;
        }
        
        .feature-card:hover {
            background: rgba(0, 242, 254, 0.1);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 242, 254, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--cyan);
        }
        
        .feature-card h3 {
            margin: 0 0 15px 0;
            color: white;
        }
        
        .feature-card p {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .video-gallery {
                grid-template-columns: 1fr;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <h1>CALISTENIA 2025</h1>
            <p>Domina tu cuerpo con las técnicas más avanzadas de entrenamiento calisténico</p>
        </div>
    </div>
    
    <div class="container">
        <div class="video-gallery">
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nqnUzPy4G-k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Entrenamiento Avanzado de Fuerza</h3>
                    <p>Aprende las técnicas más efectivas para desarrollar fuerza pura con tu peso corporal.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ZoZhIhVl_r0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Rutina de Movilidad Completa</h3>
                    <p>Mejora tu rango de movimiento y previene lesiones con esta rutina especializada.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/PpeH3Tj3nm0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Skill Work para Principiantes</h3>
                    <p>Los fundamentos esenciales para comenzar tu viaje en el mundo de los skills.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ho1l_48HGaU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Entrenamiento Explosivo</h3>
                    <p>Desarrolla potencia y velocidad con estos ejercicios claves para tu progreso.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ed9yRl84ETQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Planificación de Rutinas</h3>
                    <p>Cómo estructurar tus sesiones de entrenamiento para maximizar resultados.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/MYSWE-5L58c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Nutrición para Calistenia</h3>
                    <p>Los secretos alimenticios que potenciarán tu rendimiento y recuperación.</p>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/DRGNPQz83So" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <h3>Mentalidad del Atleta</h3>
                    <p>Desarrolla la fortaleza mental necesaria para superar tus límites.</p>
                </div>
            </div>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">💪</div>
                <h3>Fuerza Pura</h3>
                <p>Técnicas avanzadas para desarrollar fuerza funcional utilizando solo tu peso corporal.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🧘</div>
                <h3>Movilidad</h3>
                <p>Mejora tu rango de movimiento y previene lesiones con nuestros ejercicios especializados.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Skills Avanzados</h3>
                <p>Domina los movimientos más impresionantes de la calistenia con nuestra metodología.</p>
            </div>
        </div>
    </div>
</body>
</html>