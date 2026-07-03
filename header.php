<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Muhammad Dzaky Farhat</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk Ikon Sosmed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        cyber: {
                            bg: '#0B0F19',
                            card: '#161F30',
                            accent: '#00F0FF', 
                            neon: '#39FF14',   
                            unpad: '#FFB800',  
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                        'netflix-space': 'netflixSpace 2.5s cubic-bezier(0.7, 0, 0.3, 1) forwards',
                        'space-stars': 'spaceWarp 4s linear infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)', filter: 'blur(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)', filter: 'blur(0)' },
                        },
                        netflixSpace: {
                            '0%': { transform: 'scale(0.5)', opacity: '0', filter: 'blur(4px)' },
                            '40%': { transform: 'scale(1)', opacity: '1', filter: 'blur(0px)' },
                            '70%': { transform: 'scale(1.1)', opacity: '1', filter: 'blur(0px)' },
                            '100%': { transform: 'scale(4)', opacity: '0', filter: 'blur(12px)' },
                        },
                        spaceWarp: {
                            '0%': { transform: 'scale(1) rotate(0deg)', opacity: '0.3' },
                            '50%': { opacity: '0.8' },
                            '100%': { transform: 'scale(2.5) rotate(15deg)', opacity: '0' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Menghilangkan margin bawaan & handling scroll */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: #000; overflow-x: hidden; }

        /* Efek hover untuk card agar seperti situs premium */
        .group:hover img { opacity: 0.8; }

        /* Efek Flip 3D untuk Nametag */
        .perspective-1000 { perspective: 1000px; }
        .transform-style-3d { transform-style: preserve-3d; }
        .backface-hidden { backface-visibility: hidden; }
        .rotate-y-180 { transform: rotateY(180deg); }
        
        /* Custom Glow Effect */
        .glow-blue { box-shadow: 0 0 20px rgba(0, 240, 255, 0.2); }
        .glow-unpad { box-shadow: 0 0 20px rgba(255, 184, 0, 0.2); }

        /* Utility class untuk delay animasi pembuka */
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-300 { animation-delay: 300ms; }
        .animate-delay-500 { animation-delay: 500ms; }
        .animate-delay-700 { animation-delay: 700ms; }

        /* Sembunyikan scrollbar saat loading */
        body.loading { overflow: hidden; }
    </style>
</head>
<body class="bg-cyber-bg text-gray-100 font-sans selection:bg-cyber-accent selection:text-black loading">

    <!-- SPLASH SCREEN: NETFLIX INTRO STYLE X SPACE TUNNEL -->
    <div id="preloader" class="fixed inset-0 z-[9999] bg-black flex items-center justify-center overflow-hidden transition-opacity duration-700">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,240,255,0.15)_0%,transparent_60%)] animate-space-stars"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,184,0,0.1)_0%,transparent_70%)] animate-space-stars animate-delay-500"></div>
        
        <div class="text-center z-10 animate-netflix-space">
            <div class="font-mono text-4xl md:text-7xl font-extrabold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-cyber-accent to-cyber-unpad drop-shadow-[0_0_30px_rgba(0,240,255,0.4)]">
                PORTOFOLIO
            </div>
            <div class="text-[10px] md:text-xs font-mono text-gray-400 tracking-[0.4em] uppercase mt-4">
                Muhammad Dzaky Farhat
            </div>
        </div>
    </div>

    <!-- Navbar Minimalis -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-cyber-bg/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex flex-col justify-center home-brand">
                <span class="font-mono text-xl font-black tracking-wider text-cyber-accent uppercase">
                    PORTOFOLIO
                </span>
                <span class="text-xs font-sans text-gray-400 tracking-wide font-medium -mt-0.5">
                    Muhammad Dzaky Farhat
                </span>
            </div>
            <div class="hidden md:flex space-x-8 font-mono text-sm">
                <a href="#home" class="hover:text-cyber-accent transition-colors">Home</a>
                <a href="#shs" class="hover:text-cyber-accent transition-colors">Education</a>
                <a href="#unpad" class="hover:text-cyber-unpad transition-colors">Dream Uni</a>
                <a href="#career" class="hover:text-cyber-neon transition-colors">Career</a>
            </div>
        </div>
    </nav>

    <!-- Script preloader ditaruh di sini agar langsung dieksekusi -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                if (preloader) {
                    preloader.classList.add('opacity-0');
                    setTimeout(() => {
                        preloader.style.display = 'none';
                        document.body.classList.remove('loading');
                    }, 700);
                } else {
                    document.body.classList.remove('loading');
                }
            }, 2500);
        });
    </script>