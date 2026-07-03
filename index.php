<?php include 'header.php'; ?>

<!-- MAIN CONTAINER -->
<main class="w-full pt-16 overflow-hidden">

    <!-- 1. SECTION HOME / BIO & HERO (INTERACTIVE NAMETAG) -->
    <section id="home" class="min-h-screen w-full flex flex-col justify-center items-center px-4 md:px-12 py-16 bg-gradient-to-b from-cyber-bg to-cyber-card relative">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f293710_1px,transparent_1px),linear-gradient(to_bottom,#1f293710_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-6 text-center lg:text-left order-2 lg:order-1">
                <div class="inline-block bg-cyber-accent/10 text-cyber-accent border border-cyber-accent/20 px-4 py-1.5 rounded-full font-mono text-xs uppercase tracking-widest">
                    Welcome to my digital space
                </div>
                <h1 class="text-4xl md:text-6xl font-bold font-mono tracking-tight leading-tight">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyber-accent to-cyber-unpad">Future Tech Specialist</span>
                </h1>
                <p class="text-gray-400 text-base md:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Saya adalah seorang pelajar yang berfokus pada pengembangan teknologi, analisis sistem, dan keamanan siber. Selamat datang di portofolio interaktif saya.
                </p>
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="#shs" class="bg-transparent border border-cyber-accent text-cyber-accent hover:bg-cyber-accent hover:text-black font-mono font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:-translate-y-1 glow-blue">
                        Explore My Journey <i class="fas fa-arrow-down ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Nametag Card (3D Flip) -->
            <div class="flex justify-center order-1 lg:order-2 perspective-1000">
                <div id="nametag" class="w-80 h-[450px] relative transform-style-3d transition-transform duration-700 cursor-pointer group">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyber-card to-gray-900 border-2 border-cyber-accent rounded-2xl flex flex-col justify-between backface-hidden shadow-2xl glow-blue overflow-hidden">
                        <div class="w-full h-56 relative bg-gray-800 border-b border-cyber-accent/30">
                            <img src="1.jpeg" alt="Muhammad Dzaky Farhat" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=300&q=80'">
                            <div class="absolute top-0 left-0 w-full p-4 bg-gradient-to-b from-black/70 to-transparent flex justify-between items-center">
                                <span class="font-mono text-xs text-cyber-accent tracking-widest font-bold">IDENTITY_CARD</span>
                                <div class="w-3 h-3 rounded-full bg-cyber-neon animate-ping"></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center flex-1 p-6 text-center">
                            <h3 class="text-xl font-bold font-mono text-white tracking-wide">Muhammad Dzaky Farhat</h3>
                            <p class="text-sm text-gray-400 mt-1">Tech Enthusiast</p>
                        </div>
                        <div class="text-center pb-4 pt-2 border-t border-gray-800/60 mx-6">
                            <span class="text-xs font-mono text-gray-500 animate-bounce block">Click / Hover to Flip</span>
                        </div>
                    </div>

                    <!-- SISI BELAKANG -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 to-cyber-card border-2 border-cyber-unpad rounded-2xl p-6 flex flex-col justify-between backface-hidden rotate-y-180 shadow-2xl glow-unpad">
                        <div class="border-b border-gray-800 pb-3">
                            <span class="font-mono text-xs text-cyber-unpad tracking-widest">METADATA_CORE</span>
                        </div>
                        <div class="space-y-4 my-auto text-sm font-mono">
                            <div class="bg-black/40 p-3 rounded-lg border border-gray-800">
                                <span class="text-cyber-accent block text-xs">STATUS:</span>
                                <p class="text-gray-300 font-semibold">Student</p>
                            </div>
                            <div class="bg-black/40 p-3 rounded-lg border border-gray-800">
                                <span class="text-cyber-unpad block text-xs">FOCUS:</span>
                                <p class="text-gray-300 font-semibold">Cyber Security & Dev</p>
                            </div>
                            <div class="bg-black/40 p-3 rounded-lg border border-gray-800">
                                <span class="text-cyber-neon block text-xs">LOCATION:</span>
                                <p class="text-gray-300 font-semibold">Cibinong, Indonesia</p>
                            </div>
                        </div>
                        <div class="text-center pt-3 border-t border-gray-800">
                            <span class="text-xs text-cyber-unpad">System Secured ■</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SECTION SENIOR HIGH SCHOOL -->
    <section id="shs" class="w-full py-24 bg-cyber-card px-6 md:px-12 flex justify-center border-y border-gray-800">
        <div class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-4">
                <h2 class="text-3xl md:text-4xl font-bold font-mono">Senior High School</h2>
                <p class="text-gray-400 leading-relaxed">
                    Saat ini saya sedang menempuh pendidikan menengah atas, membangun fondasi logika matematika, dasar-dasar pemrograman, dan kepemimpinan dalam lingkungan yang kompetitif.
                </p>
            </div>
            <a href="https://www.instagram.com/p/DT98BtsEr1o/" target="_blank" rel="noopener noreferrer" class="block bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl border border-gray-800 relative overflow-hidden group hover:border-cyber-accent transition-all duration-300 shadow-xl">
                <div class="absolute top-0 right-0 w-24 h-24 bg-cyber-accent/5 rounded-bl-full pointer-events-none transition-all group-hover:bg-cyber-accent/10"></div>
                <i class="fas fa-school text-4xl text-cyber-accent mb-6"></i>
                <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyber-accent transition-colors">SMAS PGRI PLUS CIBINONG</h3>
                <p class="text-sm text-cyber-accent font-mono mb-4">Aktif • Kurikulum Terintegrasi</p>
                <div class="w-full bg-gray-800 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-cyber-accent h-1.5 rounded-full w-[85%]"></div>
                </div>
                <div class="mt-4 text-xs font-mono text-gray-500 flex justify-between">
                    <span>Progress Akademik</span>
                    <span>85% Completed</span>
                </div>
            </a>
        </div>
    </section>

    <!-- 3. SECTION DREAM UNIVERSITY -->
    <section id="unpad" class="w-full py-24 bg-cyber-bg px-6 md:px-12 flex justify-center">
        <div class="max-w-5xl w-full text-center space-y-12">
            <div class="space-y-3">
                <h2 class="text-3xl md:text-5xl font-bold font-mono">Dream University</h2>
            </div>
            <div class="bg-gradient-to-b from-cyber-card to-gray-950 p-8 md:p-12 rounded-3xl border-2 border-cyber-unpad/30 shadow-2xl relative overflow-hidden text-left glow-unpad">
                <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-cyber-unpad/5 rounded-full blur-3xl pointer-events-none"></div>
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 border-b border-gray-800 pb-8 mb-8">
                    <div>
                        <h3 class="text-2xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-cyber-unpad font-mono">
                            Universitas Padjadjaran (UNPAD)
                        </h3>
                        <p class="text-gray-400 mt-2 font-mono"><i class="fas fa-map-marker-alt text-cyber-unpad mr-2"></i>Jatinangor / Bandung, Indonesia</p>
                    </div>
                    <div class="bg-cyber-unpad/10 border border-cyber-unpad/30 px-6 py-3 rounded-xl text-center">
                        <span class="block text-xs font-mono text-cyber-unpad">TARGET YEAR</span>
                        <span class="text-xl font-bold font-mono text-white">Soon</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 font-mono">
                    <div class="bg-black/50 p-6 rounded-xl border border-gray-800 hover:border-cyber-unpad/50 transition-colors">
                        <span class="text-cyber-unpad text-xs block mb-1">■ MAJOR STRATEGY</span>
                        <h4 class="text-lg font-bold text-white">Teknik Informatika</h4>
                        <p class="text-xs text-gray-400 mt-2">Fokus pada rekayasa perangkat lunak, arsitektur komputasi modern, dan algoritma tingkat lanjut.</p>
                    </div>
                    <div class="bg-black/50 p-6 rounded-xl border border-gray-800 hover:border-cyber-unpad/50 transition-colors">
                        <span class="text-cyber-accent text-xs block mb-1">■ SPECIALIZATION</span>
                        <h4 class="text-lg font-bold text-white">Cyber Security</h4>
                        <p class="text-xs text-gray-400 mt-2">Mendalami keamanan sistem, kriptografi, pengujian penetrasi, dan pertahanan jaringan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SECTION RECENT PROJECTS -->
    <section id="projects" class="w-full py-24 bg-cyber-card px-6 md:px-12 flex justify-center border-t border-gray-800">
        <div class="max-w-5xl w-full space-y-12">
            <div class="text-center md:text-left space-y-2">
                <span class="text-cyber-accent font-mono text-xs tracking-widest block">■ DEPLOYED_APPLICATIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold font-mono">Recent Projects</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 font-mono">
                <div class="bg-gradient-to-br from-black to-gray-950 rounded-2xl border border-gray-800 overflow-hidden group hover:border-cyber-unpad/80 transition-all duration-500 shadow-xl flex flex-col justify-between">
                    <div class="relative h-52 overflow-hidden bg-gray-900">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10"></div>
                        <img src="banten/kerajaan.jpg" alt="Banten Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-70 group-hover:opacity-90" onerror="this.src='https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?auto=format&fit=crop&w=600&q=80'">
                        <span class="absolute top-4 right-4 bg-cyber-unpad/10 border border-cyber-unpad/30 text-cyber-unpad text-[10px] uppercase tracking-widest px-3 py-1 rounded-full z-20 backdrop-blur-sm">
                            PHP & MySQL
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-6">
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-white group-hover:text-cyber-unpad transition-colors">Banten Royal Heritage HD</h3>
                            <p class="text-xs text-gray-400 leading-relaxed">
                                Sebuah platform web berbasis Native PHP & MySQL yang mendokumentasikan kekayaan sejarah Sultan Ageng Tirtayasa, seni bela diri Debus, serta keunikan kuliner tradisional Banten dengan representasi visual High-Definition.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-900 flex items-center justify-between">
                            <span class="text-[11px] text-gray-500">Database: ict2</span>
                            <a href="banten/" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-cyber-unpad hover:text-white transition-colors group/btn">
                                LAUNCH PROJECT 
                                <i class="fas fa-external-link-alt text-[10px] transform group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-black to-gray-950 rounded-2xl border border-gray-900 border-dashed p-8 flex flex-col justify-center items-center text-center text-gray-600 font-mono group hover:border-gray-800 transition-colors">
                    <div class="w-12 h-12 rounded-full border border-gray-800 border-dashed flex items-center justify-center mb-4 text-gray-700 group-hover:text-gray-500 transition-colors">
                        <i class="fas fa-plus text-sm"></i>
                    </div>
                    <h3 class="text-sm font-bold text-gray-500 mb-1">Next Repository</h3>
                    <p class="text-xs text-gray-600 max-w-xs">Mengembangkan modul sistem cerdas baru. Menunggu kompilasi kode selanjutnya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SECTION DREAM WORKING -->
    <section id="career" class="w-full py-24 bg-gradient-to-t from-black to-cyber-card px-6 md:px-12 flex justify-center border-t border-gray-800">
        <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-4 self-center">
                <h2 class="text-3xl font-bold font-mono">Dream Career</h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Membangun ekosistem digital yang aman dari ancaman siber. Berkomitmen menjadi garda depan dalam perlindungan privasi data global.
                </p>
                <p class="text-xs text-cyber-accent font-mono animate-pulse hidden md:block">
                    *Click any card to view core tasks & responsibilities
                </p>
            </div>
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6 font-mono">
                <div onclick="openModal('cyber-engineer')" class="bg-black/60 p-6 rounded-xl border border-cyber-neon/20 hover:border-cyber-neon/80 transition-all duration-300 flex flex-col justify-between group cursor-pointer hover:scale-[1.02] shadow-lg">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-cyber-neon/10 flex items-center justify-center mb-4 text-cyber-neon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 flex items-center justify-between">
                            Cyber Security Engineer
                            <i class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-cyber-neon transition-colors"></i>
                        </h3>
                        <p class="text-xs text-gray-500 leading-relaxed">Merancang, mengimplementasikan, dan memantau sistem keamanan tingkat tinggi untuk infrastruktur kritis.</p>
                    </div>
                </div>
                <div onclick="openModal('pen-tester')" class="bg-black/60 p-6 rounded-xl border border-cyber-accent/20 hover:border-cyber-accent/80 transition-all duration-300 flex flex-col justify-between group cursor-pointer hover:scale-[1.02] shadow-lg">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-cyber-accent/10 flex items-center justify-center mb-4 text-cyber-accent">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 flex items-center justify-between">
                            Penetration Tester
                            <i class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-cyber-accent transition-colors"></i>
                        </h3>
                        <p class="text-xs text-gray-500 leading-relaxed">Melakukan simulasi serangan secara legal guna menemukan celah kerentanan sebelum pihak luar mengeksploitasinya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- 5. SECTION DREAM WORKING -->
    <section id="career" class="w-full py-24 bg-gradient-to-t from-black to-cyber-card px-6 md:px-12 flex justify-center border-t border-gray-800">
        <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-4 self-center">
                <h2 class="text-3xl font-bold font-mono">Dream Career</h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Membangun ekosistem digital yang aman dari ancaman siber. Berkomitmen menjadi garda depan dalam perlindungan privasi data global.
                </p>
                <p class="text-xs text-cyber-accent font-mono animate-pulse hidden md:block">
                    *Click any card to view core tasks & responsibilities
                </p>
            </div>
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6 font-mono">
                <div onclick="openModal('cyber-engineer')" class="bg-black/60 p-6 rounded-xl border border-cyber-neon/20 hover:border-cyber-neon/80 transition-all duration-300 flex flex-col justify-between group cursor-pointer hover:scale-[1.02] shadow-lg">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-cyber-neon/10 flex items-center justify-center mb-4 text-cyber-neon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 flex items-center justify-between">
                            Cyber Security Engineer
                            <i class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-cyber-neon transition-colors"></i>
                        </h3>
                        <p class="text-xs text-gray-500 leading-relaxed">Merancang, mengimplementasikan, dan memantau sistem keamanan tingkat tinggi untuk infrastruktur kritis.</p>
                    </div>
                </div>
                <div onclick="openModal('pen-tester')" class="bg-black/60 p-6 rounded-xl border border-cyber-accent/20 hover:border-cyber-accent/80 transition-all duration-300 flex flex-col justify-between group cursor-pointer hover:scale-[1.02] shadow-lg">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-cyber-accent/10 flex items-center justify-center mb-4 text-cyber-accent">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 flex items-center justify-between">
                            Penetration Tester
                            <i class="fas fa-arrow-right text-xs text-gray-600 group-hover:text-cyber-accent transition-colors"></i>
                        </h3>
                        <p class="text-xs text-gray-500 leading-relaxed">Melakukan simulasi serangan secara legal guna menemukan celah kerentanan sebelum pihak luar mengeksploitasinya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. SECTION SOCIAL MEDIA CONNECT (BARU) -->
    <section id="connect" class="w-full py-20 bg-black px-6 md:px-12 flex flex-col items-center justify-center border-t border-gray-900 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,240,255,0.05)_0%,transparent_50%)] pointer-events-none"></div>
        
        <div class="max-w-3xl w-full space-y-8 relative z-10 font-mono">
            <div class="space-y-2">
                <span class="text-cyber-accent text-xs tracking-[0.3em] uppercase block">Establish Connection</span>
                <h2 class="text-2xl md:text-4xl font-bold text-white">Let's Get in Touch</h2>
                <p class="text-gray-500 text-xs md:text-sm max-w-md mx-auto font-sans"> Silakan hubungi atau ikuti perjalanan digital saya melalui platform media sosial di bawah ini.</p>
            </div>

            <!-- Tombol Grid Media Sosial -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 pt-4">
                <!-- Instagram Button -->
                <a href="https://www.instagram.com/farhatdzky/" target="_blank" rel="noopener noreferrer" 
                   class="w-full sm:w-52 h-14 bg-gray-950 border border-gray-800 rounded-xl flex items-center justify-center gap-3 text-gray-300 hover:text-white hover:border-pink-500 hover:shadow-[0_0_20px_rgba(236,72,153,0.15)] transition-all duration-300 transform hover:-translate-y-1 group">
                    <i class="fab fa-instagram text-xl text-gray-500 group-hover:text-pink-500 transition-colors"></i>
                    <span class="text-sm font-bold tracking-wide">Instagram</span>
                </a>

                <!-- TikTok Button -->
                <a href="https://www.tiktok.com/@.frhtdzky" target="_blank" rel="noopener noreferrer" 
                   class="w-full sm:w-52 h-14 bg-gray-950 border border-gray-800 rounded-xl flex items-center justify-center gap-3 text-gray-300 hover:text-white hover:border-cyber-accent hover:shadow-[0_0_20px_rgba(0,240,255,0.15)] transition-all duration-300 transform hover:-translate-y-1 group">
                    <i class="fab fa-tiktok text-lg text-gray-500 group-hover:text-cyber-accent transition-colors"></i>
                    <span class="text-sm font-bold tracking-wide">TikTok</span>
                </a>
            </div>

            <!-- Catatan Kaki Hak Cipta -->
            <div class="pt-12 text-[10px] text-gray-600 tracking-widest font-sans uppercase">
                &copy; 2026 Muhammad Dzaky Farhat. All Rights Reserved.
            </div>
        </div>
    </section>

</main>