<!-- INTERACTIVE MODAL OVERLAY -->
<div id="careerModal" class="fixed inset-0 z-[10000] bg-black/80 backdrop-blur-md flex items-center justify-center hidden opacity-0 transition-opacity duration-300 p-4">
    <div class="bg-gradient-to-b from-cyber-card to-black border-2 rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300" id="modalBox">
        <div class="p-6 border-b border-gray-800 flex justify-between items-center" id="modalHeader">
            <h3 class="text-xl font-bold font-mono text-white" id="modalTitle">Job Title</h3>
            <button onclick="closeModal()" class="text-gray-500 hover:text-white transition-colors p-2 text-lg">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6 space-y-6 font-mono text-sm">
            <div>
                <span class="text-xs text-gray-500 block mb-1">■ OVERVIEW & DESCRIPTION</span>
                <p class="text-gray-300 leading-relaxed" id="modalDesc">Job description details will display here.</p>
            </div>
            <div>
                <span class="text-xs text-gray-500 block mb-2" id="tasksLabel">■ KEY RESPONSIBILITIES & TASKS</span>
                <ul class="space-y-3 text-gray-400" id="modalTasks"></ul>
            </div>
        </div>
        <div class="p-4 bg-black/40 border-t border-gray-800 text-center">
            <button onclick="closeModal()" class="px-6 py-2 rounded-lg font-mono text-xs font-bold uppercase tracking-wider bg-gray-900 border border-gray-700 hover:bg-white hover:text-black transition-all duration-300">
                Close Core Secure Matrix
            </button>
        </div>
    </div>
</div>

<!-- JAVASCRIPT GLOBAL LOGIC -->
<script>
    // Logic Kartu 3D Flip Nametag
    const nametag = document.getElementById('nametag');
    if(nametag) {
        nametag.addEventListener('click', () => {
            nametag.classList.toggle('rotate-y-180');
        });
    }

    const careerData = {
        'cyber-engineer': {
            title: 'Cyber Security Engineer',
            borderColor: 'border-cyber-neon',
            glowClass: 'shadow-[0_0_30px_rgba(57,255,20,0.2)]',
            tagColor: 'text-cyber-neon',
            desc: 'Fokus utama dari seorang Cyber Security Engineer adalah membangun benteng arsitektur pertahanan siber yang solid, serta melindungi integritas data, jaringan, dan sistem perusahaan dari segala bentuk ancaman siber eksternal maupun internal.',
            tasks: [
                'Merancang dan menerapkan sistem firewall, enkripsi data, serta sistem deteksi intrusi (IDS/IPS) tingkat lanjut.',
                'Melakukan monitoring traffic jaringan secara real-time guna mendeteksi aktivitas anomali atau mencurigah.',
                'Menangani insiden keamanan data (Incident Response) dan melakukan pemulihan pasca serangan siber.',
                'Mengonfigurasi serta memelihara alat manajemen keamanan informasi (SIEM) secara berkala.'
            ]
        },
        'pen-tester': {
            title: 'Penetration Tester',
            borderColor: 'border-cyber-accent',
            glowClass: 'shadow-[0_0_30px_rgba(0,240,255,0.2)]',
            tagColor: 'text-cyber-accent',
            desc: 'Sering disebut sebagai Ethical Hacker, seorang Penetration Tester bertugas melakukan simulasi taktik serangan siber nyata yang legal pada aplikasi, sistem, maupun infrastruktur jaringan jaringan untuk mendeteksi kerentanan eksploitasi.',
            tasks: [
                'Melakukan pengujian penetrasi (Penetesting) sistem web, mobile, maupun infrastruktur server internal.',
                'Menganalisis kode sumber aplikasi (Source Code Review) untuk mencari celah keamanan logis.',
                'Membuat laporan dokumentasi detail mengenai bug/kerentanan yang ditemukan beserta tingkat risikonya.',
                'Meberikan rekomendasi teknis perbaikan celah (Remediation Strategy) kepada tim developer.'
            ]
        }
    };

    function openModal(key) {
        const modal = document.getElementById('careerModal');
        const box = document.getElementById('modalBox');
        const data = careerData[key];

        if (!data) return;

        box.className = "bg-gradient-to-b from-cyber-card to-black border-2 rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300 " + data.borderColor + " " + data.glowClass;
        document.getElementById('modalTitle').innerText = data.title;
        document.getElementById('modalDesc').innerText = data.desc;
        
        const label = document.getElementById('tasksLabel');
        label.className = `text-xs ${data.tagColor} block mb-2`;

        const tasksContainer = document.getElementById('modalTasks');
        tasksContainer.innerHTML = '';
        data.tasks.forEach(task => {
            const li = document.createElement('li');
            li.className = 'flex items-start gap-3';
            li.innerHTML = `<i class="fas fa-check-circle ${data.tagColor} mt-1 text-xs flex-shrink-0"></i> <span>${task}</span>`;
            tasksContainer.appendChild(li);
        });

        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            box.classList.remove('scale-95');
            box.classList.add('scale-100');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('careerModal');
        const box = document.getElementById('modalBox');

        modal.classList.add('opacity-0');
        box.classList.remove('scale-100');
        box.classList.add('scale-95');

        setTimeout(() => {
            modal.classList.add('hidden');
            if(!document.body.classList.contains('loading')) {
                document.body.style.overflow = '';
            }
        }, 300);
    }

    document.getElementById('careerModal').addEventListener('click', function(e) {
        if (e.target === this) { closeModal(); }
    });
</script>
</body>
</html>