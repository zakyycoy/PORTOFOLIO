const heritageData = [
    { title: "SULTAN AGENG TIRTAYASA", category: "HISTORY", img: "kerajaan.jpg", desc: "Pemimpin visioner yang membawa Kesultanan Banten menuju puncak kejayaan." },
    { title: "DEBUS BANTEN", category: "CULTURE", img: "debus.jpg", desc: "Seni bela diri yang mengombinasikan ketangkasan fisik dengan spiritual." },
    { title: "SATE BANDENG", category: "CULINARY", img: "satebandeng.jpg", desc: "Diciptakan untuk menikmati ikan bandeng tanpa duri." },
    { title: "RABEG BANTEN", category: "CULINARY", img: "rabegbanten.jpg", desc: "Olahan daging kambing berempah favorit Sultan." },
    { title: "BENTENG SPEELWIJK", category: "HISTORY", img: "benteng speelwjk.jpg", desc: "Saksi bisu sejarah pertahanan kolonial di Banten." }
];

const grid = document.getElementById('heritageGrid');
heritageData.forEach(item => {
    grid.innerHTML += `
        <div class="card">
            <img src="${item.img}" alt="${item.title}">
            <div class="card-content">
                <span style="color:var(--gold); font-size: 10px;">${item.category}</span>
                <h3>${item.title}</h3>
                <button class="btn-luxury" onclick="openModal('${item.title}', '${item.desc}')">DISCOVER</button>
            </div>
        </div>`;
});

function openModal(t, d) {
    document.getElementById('modalTitle').innerText = t;
    document.getElementById('modalDesc').innerText = d;
    document.getElementById('descModal').style.display = "block";
}

function closeModal() { document.getElementById('descModal').style.display = "none"; }