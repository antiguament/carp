<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freerunning Xtreme | Galería de Videos Pro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #FF6D00;
            --primary-dark: #E65100;
            --secondary: #212121;
            --accent: #4CAF50;
            --text: #FFFFFF;
            --text-secondary: #CCCCCC;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', 'Arial', sans-serif;
            background-color: #000;
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Header Estilo Cine */
        .hero-header {
            background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%), 
                        url('https://images.unsplash.com/photo-1547153760-18fc86324498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            margin-bottom: 5rem;
        }
        
        .hero-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, transparent 0%, var(--secondary) 100%);
        }
        
        .hero-title {
            font-size: 4.5rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 10px rgba(0,0,0,0.8);
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: titleGlow 2s ease-in-out infinite alternate;
        }
        
        @keyframes titleGlow {
            from {
                text-shadow: 0 0 10px var(--primary), 0 0 20px rgba(255,109,0,0.3);
            }
            to {
                text-shadow: 0 0 15px var(--primary), 0 0 30px rgba(255,109,0,0.5), 0 0 40px rgba(76,175,80,0.3);
            }
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
            color: var(--text-secondary);
        }
        
        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255,109,0,0.4);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255,109,0,0.6);
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        /* Navegación */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: rgba(0,0,0,0.9);
            padding: 15px 5%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }
        
        .logo span {
            color: var(--primary);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Contenido Principal */
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }
        
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        
        .section-description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 3rem;
            max-width: 800px;
        }
        
        /* Galería de Videos */
        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
            margin: 3rem 0;
        }
        
        .video-card {
            background: var(--secondary);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            position: relative;
        }
        
        .video-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(255,109,0,0.3);
        }
        
        .video-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.8) 100%);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .video-card:hover::before {
            opacity: 1;
        }
        
        .video-thumbnail {
            position: relative;
            padding-bottom: 56.25%;
            overflow: hidden;
        }
        
        .video-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .video-card:hover .video-thumbnail img {
            transform: scale(1.1);
        }
        
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(255,109,0,0.8);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            opacity: 0.9;
            transition: all 0.3s;
        }
        
        .play-button i {
            color: white;
            font-size: 1.8rem;
            margin-left: 5px;
        }
        
        .video-card:hover .play-button {
            background-color: var(--primary);
            width: 80px;
            height: 80px;
            opacity: 1;
        }
        
        .video-info {
            padding: 20px;
            position: relative;
            z-index: 2;
        }
        
        .video-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--text);
            transition: color 0.3s;
        }
        
        .video-card:hover .video-title {
            color: var(--primary);
        }
        
        .video-meta {
            display: flex;
            justify-content: space-between;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .video-duration {
            background-color: rgba(0,0,0,0.7);
            padding: 3px 10px;
            border-radius: 20px;
            color: white;
        }
        
        .video-views {
            display: flex;
            align-items: center;
        }
        
        .video-views i {
            margin-right: 5px;
            color: var(--primary);
        }
        
        /* Sección de Destacados */
        .featured-section {
            margin: 6rem 0;
        }
        
        .featured-video {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            background: linear-gradient(135deg, rgba(33,33,33,0.8) 0%, rgba(0,0,0,0.9) 100%);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        
        .featured-video-content {
            padding: 40px;
        }
        
        .featured-tag {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }
        
        .featured-title {
            font-size: 2.2rem;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .featured-description {
            color: var(--text-secondary);
            margin-bottom: 30px;
        }
        
        .featured-stats {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .featured-video-player {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .featured-video-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--secondary) 0%, #000 100%);
            padding: 80px 0 30px;
            margin-top: 100px;
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 2px;
            background: var(--primary);
            bottom: -8px;
            left: 0;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s;
            display: inline-block;
        }
        
        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: var(--text);
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 50px;
            margin-top: 50px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        .footer-bottom p {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        /* Efectos de Scroll */
        .reveal {
            position: relative;
            transform: translateY(50px);
            opacity: 0;
            transition: all 1s ease;
        }
        
        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3.5rem;
            }
        }
        
        @media (max-width: 992px) {
            .featured-video {
                grid-template-columns: 1fr;
            }
            
            .featured-video-content {
                order: 2;
            }
            
            .featured-video-player {
                order: 1;
            }
            
            .navbar {
                padding: 15px 5%;
            }
            
            .nav-links {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .video-gallery {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-header {
                height: 60vh;
            }
            
            .cta-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
            
            .featured-title {
                font-size: 1.8rem;
            }
            
            .featured-stats {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar">
        <a href="#" class="logo">Freerun<span>X</span></a>
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="#videos">Videos</a></li>
            <li><a href="#destacados">Destacados</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
    
    <!-- Hero Section -->
    <header class="hero-header">
        <h1 class="hero-title">Freerunning Xtreme</h1>
        <p class="hero-subtitle">Domina el arte del movimiento urbano con los mejores atletas del mundo. Saltos imposibles, acrobacias espectaculares y pura adrenalina.</p>
        <a href="#videos" class="cta-button">Ver Videos</a>
    </header>
    
    <!-- Contenido Principal -->
    <main class="main-container">
        <!-- Sección de Videos -->
        <section id="videos" class="reveal">
            <h2 class="section-title">Galería de Videos</h2>
            <p class="section-description">Explora nuestra colección premium de los mejores momentos del freerunning mundial. Desde principiantes hasta profesionales, aquí encontrarás la inspiración para tu próximo movimiento.</p>
            
            <div class="video-gallery">
                <!-- Video 1 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=2vfoyY9lshI" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/2vfoyY9lshI/maxresdefault.jpg" alt="Freerunning Urbano Extremo">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Freerunning Urbano Extremo</h3>
                        <div class="video-meta">
                            <span class="video-duration">4:32</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 2.4M</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=7kmlXMErdgU" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/7kmlXMErdgU/maxresdefault.jpg" alt="Parkour vs Freerunning">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Parkour vs Freerunning</h3>
                        <div class="video-meta">
                            <span class="video-duration">6:15</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 1.8M</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video 3 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=4DfQ67E74fU" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/4DfQ67E74fU/maxresdefault.jpg" alt="Freerunning en Naturaleza">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Freerunning en Naturaleza</h3>
                        <div class="video-meta">
                            <span class="video-duration">5:48</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 1.2M</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video 4 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=t073c2YbCzM" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/t073c2YbCzM/maxresdefault.jpg" alt="Los 10 Mejores Movimientos">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Los 10 Mejores Movimientos</h3>
                        <div class="video-meta">
                            <span class="video-duration">8:22</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 3.1M</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video 5 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=rezxHxi9KF4" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/rezxHxi9KF4/maxresdefault.jpg" alt="Freerunning Nocturno">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Freerunning Nocturno</h3>
                        <div class="video-meta">
                            <span class="video-duration">3:56</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 950K</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video 6 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=K5qCUauRrSE" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/K5qCUauRrSE/maxresdefault.jpg" alt="Competencia Mundial">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Competencia Mundial</h3>
                        <div class="video-meta">
                            <span class="video-duration">9:14</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 4.5M</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección de Destacados -->
        <section id="destacados" class="featured-section reveal">
            <h2 class="section-title">Video Destacado</h2>
            <p class="section-description">No te pierdas nuestro contenido exclusivo seleccionado especialmente para los verdaderos amantes del freerunning.</p>
            
            <div class="featured-video">
                <div class="featured-video-content">
                    <span class="featured-tag">Exclusivo</span>
                    <h3 class="featured-title">Técnicas Avanzadas de Freerunning con Jason Paul</h3>
                    <p class="featured-description">Acompaña a Jason Paul en este tutorial exclusivo donde desglosa sus técnicas más avanzadas. Aprende los secretos de uno de los mejores atletas de freerunning del mundo.</p>
                    
                    <div class="featured-stats">
                        <div class="stat-item">
                            <div class="stat-number">7:03</div>
                            <div class="stat-label">Duración</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5.2M</div>
                            <div class="stat-label">Visitas</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Likes</div>
                        </div>
                    </div>
                    
                    <a href="https://www.youtube.com/watch?v=xJJEzresLS4" target="_blank" class="cta-button">Ver Ahora</a>
                </div>
                
                <div class="featured-video-player">
                    <iframe src="https://www.youtube.com/embed/xJJEzresLS4?autoplay=0&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        
        <!-- Sección de Artístico -->
        <section class="reveal">
            <h2 class="section-title">Freerunning Artístico</h2>
            <p class="section-description">Cuando el movimiento se convierte en arte. Disfruta de la fusión entre acrobacias y expresión artística.</p>
            
            <div class="video-gallery">
                <!-- Video 7 -->
                <div class="video-card">
                    <a href="https://www.youtube.com/watch?v=uTC8voVE-C8" target="_blank" class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/uTC8voVE-C8/maxresdefault.jpg" alt="Freerunning Artístico">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                    <div class="video-info">
                        <h3 class="video-title">Freerunning Artístico</h3>
                        <div class="video-meta">
                            <span class="video-duration">4:45</span>
                            <span class="video-views"><i class="fas fa-eye"></i> 1.7M</span>
                        </div>
                    </div>
                </div>
                
                <!-- Puedes agregar más videos artísticos aquí -->
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="footer" id="contacto">
        <div class="footer-content">
            <div class="footer-column">
                <h3>FreerunX</h3>
                <p>La mayor comunidad de freerunning en línea. Compartimos lo mejor del movimiento urbano desde 2015.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Enlaces</h3>
                <ul class="footer-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#videos">Videos</a></li>
                    <li><a href="#destacados">Destacados</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Tutoriales</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Comunidad</h3>
                <ul class="footer-links">
                    <li><a href="#">Foro</a></li>
                    <li><a href="#">Competiciones</a></li>
                    <li><a href="#">Meetups</a></li>
                    <li><a href="#">Sponsors</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Contacto</h3>
                <ul class="footer-links">
                    <li><a href="mailto:info@freerunx.com">info@freerunx.com</a></li>
                    <li><a href="#">Soporte</a></li>
                    <li><a href="#">Colaboraciones</a></li>
                    <li><a href="#">Enviar tus videos</a></li>
                </ul>
            </div>
        </div>
        
        
    </footer>
    
    <script>
        // Efecto de scroll para la navegación
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Animación de revelado al hacer scroll
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.reveal');
            
            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const revealTop = reveals[i].getBoundingClientRect().top;
                const revealPoint = 150;
                
                if (revealTop < windowHeight - revealPoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }
        
        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);
        
        // Smooth scrolling para enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>