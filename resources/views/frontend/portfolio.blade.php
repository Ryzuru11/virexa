@extends('frontend.layouts.master')

@section('title', 'Portofolio - VIREXA Digital')
@section('description', 'Lihat portofolio proyek sukses VIREXA Digital dalam pengembangan website, sistem, dan aplikasi untuk berbagai industri')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary via-secondary to-primary text-white py-24 relative overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <canvas id="starsCanvas" class="absolute inset-0 w-full h-full"></canvas>
        <script>
            (function() {
                const canvas = document.getElementById('starsCanvas');
                if (!canvas) return;
                const ctx = canvas.getContext('2d');
                function resizeCanvas() { canvas.width = canvas.offsetWidth; canvas.height = canvas.offsetHeight; }
                resizeCanvas();
                window.addEventListener('resize', resizeCanvas);
                const stars = [];
                for (let i = 0; i < 80; i++) {
                    stars.push({ x: Math.random() * canvas.width, y: Math.random() * canvas.height, radius: Math.random() * 1.5 + 0.5, opacity: Math.random(), speed: Math.random() * 0.02 + 0.01 });
                }
                function animate() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    stars.forEach(star => {
                        star.opacity += star.speed;
                        if (star.opacity > 1 || star.opacity < 0) star.speed *= -1;
                        ctx.beginPath();
                        ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                        ctx.fillStyle = `rgba(255,255,255,${Math.abs(star.opacity)})`;
                        ctx.shadowBlur = 3;
                        ctx.shadowColor = 'rgba(255,255,255,0.8)';
                        ctx.fill();
                        ctx.shadowBlur = 0;
                    });
                    requestAnimationFrame(animate);
                }
                animate();
            })();
        </script>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-block bg-white/20 text-white text-sm font-semibold px-4 py-2 rounded-full mb-6">✦ Portofolio Kami</span>
        <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6 tracking-tight">Karya Terbaik VIREXA</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
            Lebih dari 50+ proyek telah kami selesaikan. Setiap karya adalah bukti komitmen kami terhadap kualitas dan kepuasan klien.
        </p>
        <div class="flex flex-wrap justify-center gap-8 mt-12">
            <div class="text-center">
                <div class="text-4xl font-bold">7+</div>
                <div class="text-blue-200 text-sm mt-1">Proyek Selesai</div>
            </div>
            <div class="w-px bg-white/20 hidden md:block"></div>
            <div class="text-center">
                <div class="text-4xl font-bold">4</div>
                <div class="text-blue-200 text-sm mt-1">Kategori Layanan</div>
            </div>
            <div class="w-px bg-white/20 hidden md:block"></div>
            <div class="text-center">
                <div class="text-4xl font-bold">100%</div>
                <div class="text-blue-200 text-sm mt-1">Proyek Selesai Tepat Waktu</div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-14">
            <button onclick="filterPortfolio('semua')" class="filter-btn active px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200" data-filter="semua">
                Semua Proyek
            </button>
            <button onclick="filterPortfolio('website')" class="filter-btn px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200" data-filter="website">
                🌐 Website
            </button>
            <button onclick="filterPortfolio('ecommerce')" class="filter-btn px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200" data-filter="ecommerce">
                🛒 E-Commerce
            </button>
            <button onclick="filterPortfolio('mobile')" class="filter-btn px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200" data-filter="mobile">
                📱 Aplikasi Mobile
            </button>
            <button onclick="filterPortfolio('sistem')" class="filter-btn px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200" data-filter="sistem">
                ⚙️ Sistem Informasi
            </button>
        </div>

        <style>
            .filter-btn {
                background: #f3f4f6;
                color: #6b7280;
                border: 2px solid transparent;
            }
            .filter-btn:hover {
                background: #eff6ff;
                color: #2563eb;
                border-color: #bfdbfe;
            }
            .filter-btn.active {
                background: #2563eb;
                color: #ffffff;
                border-color: #2563eb;
                box-shadow: 0 4px 14px rgba(37,99,235,0.35);
            }
            .portfolio-card {
                transition: all 0.35s ease;
            }
            .portfolio-card.hidden-card {
                opacity: 0;
                transform: scale(0.95);
                pointer-events: none;
                position: absolute;
                visibility: hidden;
            }
            .portfolio-grid {
                position: relative;
            }
        </style>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolioGrid">

            <!-- Proyek 1: Website Portfolio -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="website">
                <div class="h-56 bg-gradient-to-br from-accent to-blue-700 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-accent text-xs font-bold px-3 py-1 rounded-full">Website</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Website Portfolio</h3>
                            <p class="text-xs text-gray-500">Personal Branding & Showcase</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Website Portfolio Profesional</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Website pribadi untuk memperkenalkan diri, menampilkan proyek, skill, dan pengalaman kepada calon klien atau recruiter secara profesional.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-lg text-xs font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Web Developer Portfolio</span>
                        <button onclick="openModal('website-portfolio')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 2: RUKI.ID -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="website">
                <div class="h-56 bg-gradient-to-br from-slate-700 to-gray-900 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h6v-5h2v5h6v-8h3L12 3z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-gray-700 text-xs font-bold px-3 py-1 rounded-full">Website</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">RUKI.ID</h3>
                            <p class="text-xs text-gray-500">Arsitektur & Desain Visual</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">RUKI.ID — Website Arsitektur</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Website visual untuk brand arsitektur dan desain RUKI.ID, mengutamakan layout elegan, presentasi gambar berkualitas tinggi, dan user experience yang kuat.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-medium">HTML</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">CSS</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-xs font-medium">JavaScript</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Arsitektur & Desain</span>
                        <button onclick="openModal('website-ruki')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 3: Dilaga Tour -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="website">
                <div class="h-56 bg-gradient-to-br from-sky-500 to-blue-600 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M21 3L3 10.53v.98l6.84 2.65L12.48 21h.98L21 3z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-sky-700 text-xs font-bold px-3 py-1 rounded-full">Website</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Web Travel</h3>
                            <p class="text-xs text-gray-500">Travel & Wisata</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Web Travel</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Website bisnis travel dan paket wisata dengan katalog destinasi, detail paket lengkap termasuk harga dan itinerary, galeri foto, dan form pemesanan.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-lg text-xs font-medium">Bootstrap</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Travel & Wisata</span>
                        <button onclick="openModal('website-dilaga')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 4: Web Profil Desa -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="sistem">
                <div class="h-56 bg-gradient-to-br from-green-500 to-emerald-700 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Sistem Informasi</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Web Profil Desa</h3>
                            <p class="text-xs text-gray-500">Informasi & CMS Desa</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Website Profil Desa</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Pusat informasi digital desa: profil, sejarah, berita, agenda kegiatan, galeri, potensi UMKM, dan dashboard admin untuk pengelolaan konten secara mandiri.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-medium">Livewire</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Pemerintahan & Desa</span>
                        <button onclick="openModal('sistem-desa')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 5: Wedding QR Album -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="website">
                <div class="h-56 bg-gradient-to-br from-rose-400 to-pink-600 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-rose-700 text-xs font-bold px-3 py-1 rounded-full">Website</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Wedding QR Album</h3>
                            <p class="text-xs text-gray-500">Album Digital Pernikahan</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Wedding QR Album</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Album foto pernikahan digital yang diakses via QR Code. Menampilkan galeri foto, info pernikahan, ucapan tamu, countdown, dan background musik — semua dalam satu link.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded-lg text-xs font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-xs font-medium">QR Code</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Wedding & Event</span>
                        <button onclick="openModal('website-wedding')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 6: Aplikasi Fisioterapi -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="sistem">
                <div class="h-56 bg-gradient-to-br from-teal-500 to-cyan-700 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-teal-700 text-xs font-bold px-3 py-1 rounded-full">Sistem Informasi</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Aplikasi Fisioterapi Clinic</h3>
                            <p class="text-xs text-gray-500">Monitoring & Manajemen Pasien</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Aplikasi Fisioterapi Clinic</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Sistem informasi klinik fisioterapi dengan program latihan pasien, checklist harian, video edukasi, statistik progres, dan monitoring perkembangan oleh terapis.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-cyan-100 text-cyan-700 rounded-lg text-xs font-medium">Flutter</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Kesehatan & Klinik</span>
                        <button onclick="openModal('sistem-fisio')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Proyek 7: E-Commerce -->
            <div class="portfolio-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group" data-category="ecommerce">
                <div class="h-56 bg-gradient-to-br from-violet-500 to-purple-700 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96C5 16.1 6.1 17 7 17h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63H19c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1 1 0 0023 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-all duration-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-violet-700 text-xs font-bold px-3 py-1 rounded-full">E-Commerce</span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <div class="bg-white/95 rounded-xl p-3">
                            <h3 class="font-heading font-semibold text-primary text-base">Web E-Commerce</h3>
                            <p class="text-xs text-gray-500">Toko Online End-to-End</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Web E-Commerce</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">Platform toko online lengkap dengan katalog produk, keranjang belanja, checkout, manajemen pesanan, dan dashboard admin untuk kelola produk dan stok.</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-medium">Vue.js</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">Bisnis & Perdagangan</span>
                        <button onclick="openModal('ecommerce-toko')" class="flex items-center gap-1 text-accent hover:text-blue-700 font-semibold text-sm group-hover:gap-2 transition-all">
                            Lihat Detail <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Empty State (saat filter tidak ada hasil) -->
        <div id="emptyState" class="hidden text-center py-20">
            <div class="text-6xl mb-4">🔍</div>
            <p class="text-gray-500 text-lg">Belum ada proyek dalam kategori ini.</p>
        </div>
    </div>
</section>

<!-- Banner CTA Konsultasi -->
<section class="py-16 bg-gradient-to-r from-primary to-secondary">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-white text-center md:text-left">
                <h2 class="text-3xl font-heading font-bold mb-3">Tertarik memiliki proyek seperti ini?</h2>
                <p class="text-blue-100 text-lg">Konsultasikan kebutuhan digitalmu — gratis, tanpa tekanan.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 flex-shrink-0">
                <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-7 py-4 bg-white text-primary font-semibold rounded-xl hover:bg-blue-50 transition-all duration-200 shadow-lg">
                    Lihat Paket Jasa
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-7 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-xl hover:bg-white/10 transition-all duration-200">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Teknologi Terdepan</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Kami menggunakan teknologi terkini untuk membangun solusi yang robust dan scalable
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-12">
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-orange-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-orange-600 transition-colors">HTML5</p>
                <p class="text-xs text-gray-500 mt-1">Markup Language</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-blue-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-blue-600 transition-colors">CSS3</p>
                <p class="text-xs text-gray-500 mt-1">Styling Language</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-yellow-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-yellow-600 transition-colors">JavaScript</p>
                <p class="text-xs text-gray-500 mt-1">Programming Language</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-indigo-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-indigo-600 transition-colors">PHP</p>
                <p class="text-xs text-gray-500 mt-1">Server-Side Language</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-red-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-red-600 transition-colors">Laravel</p>
                <p class="text-xs text-gray-500 mt-1">PHP Framework</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-green-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-green-600 transition-colors">Vue.js</p>
                <p class="text-xs text-gray-500 mt-1">JS Framework</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-cyan-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-cyan-600 transition-colors">React</p>
                <p class="text-xs text-gray-500 mt-1">JS Library</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-green-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-green-700 transition-colors">Node.js</p>
                <p class="text-xs text-gray-500 mt-1">JS Runtime</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-blue-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-blue-500 transition-colors">Flutter</p>
                <p class="text-xs text-gray-500 mt-1">Mobile Framework</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-purple-50 group-hover:-translate-y-2 p-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin" class="w-full h-full object-contain">
                </div>
                <p class="text-gray-700 font-semibold group-hover:text-purple-600 transition-colors">Kotlin</p>
                <p class="text-xs text-gray-500 mt-1">Android Native</p>
            </div>
        </div>

        <div class="mt-16">
            <h3 class="text-2xl font-heading font-bold text-center text-primary mb-10">Database & Backend</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="text-center group">
                    <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-blue-50 group-hover:-translate-y-2 p-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-full h-full object-contain">
                    </div>
                    <p class="text-gray-700 font-semibold group-hover:text-blue-600 transition-colors">MySQL</p>
                    <p class="text-xs text-gray-500 mt-1">SQL Database</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-green-50 group-hover:-translate-y-2 p-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-full h-full object-contain">
                    </div>
                    <p class="text-gray-700 font-semibold group-hover:text-green-600 transition-colors">MongoDB</p>
                    <p class="text-xs text-gray-500 mt-1">NoSQL Database</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-orange-50 group-hover:-translate-y-2 p-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" alt="Firebase" class="w-full h-full object-contain">
                    </div>
                    <p class="text-gray-700 font-semibold group-hover:text-orange-500 transition-colors">Firebase</p>
                    <p class="text-xs text-gray-500 mt-1">Backend Platform</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-blue-50 group-hover:-translate-y-2 p-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" alt="SQLite" class="w-full h-full object-contain">
                    </div>
                    <p class="text-gray-700 font-semibold group-hover:text-blue-700 transition-colors">SQLite</p>
                    <p class="text-xs text-gray-500 mt-1">Local Database</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-blue-50 group-hover:-translate-y-2 p-4">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="w-full h-full object-contain">
                    </div>
                    <p class="text-gray-700 font-semibold group-hover:text-blue-800 transition-colors">PostgreSQL</p>
                    <p class="text-xs text-gray-500 mt-1">Advanced SQL</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     MODAL DETAIL PROYEK
     ============================================================ -->
<div id="projectModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal()"></div>
    <!-- Panel -->
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto z-10 animate-fade-in">
        <!-- Header dengan warna dinamis -->
        <div id="modalHeader" class="p-8 rounded-t-2xl relative">
            <button onclick="closeModal()" class="absolute top-5 right-5 text-white/80 hover:text-white transition-colors bg-white/20 rounded-full p-1.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <span id="modalBadge" class="inline-block bg-white/25 text-white text-xs font-bold px-3 py-1 rounded-full mb-3"></span>
            <h2 id="modalTitle" class="text-2xl font-heading font-bold text-white mb-1"></h2>
            <p id="modalSubtitle" class="text-white/80 text-sm"></p>
        </div>
        <!-- Body -->
        <div class="p-8">
            <!-- Deskripsi -->
            <div class="mb-7">
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Tentang Proyek</h3>
                <p id="modalDesc" class="text-gray-700 leading-relaxed"></p>
            </div>
            <!-- Fitur -->
            <div class="mb-7">
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Fitur Utama</h3>
                <ul id="modalFeatures" class="space-y-2"></ul>
            </div>
            <!-- Hasil -->
            <div class="mb-7 bg-green-50 rounded-xl p-5 border border-green-100">
                <h3 class="text-sm font-semibold text-green-700 uppercase tracking-wider mb-2">✓ Hasil yang Dicapai</h3>
                <p id="modalResult" class="text-green-800 font-medium"></p>
            </div>
            <!-- Tech Stack -->
            <div class="mb-8">
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Teknologi</h3>
                <div id="modalTech" class="flex flex-wrap gap-2"></div>
            </div>
            <!-- CTA -->
            <div class="bg-gradient-to-r from-primary to-secondary rounded-xl p-6 text-center">
                <p class="text-white font-semibold mb-1">Tertarik dengan proyek seperti ini?</p>
                <p id="modalCTADesc" class="text-blue-200 text-sm mb-5"></p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a id="modalCTALink" href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary font-semibold rounded-xl hover:bg-blue-50 transition-all text-sm">
                        Lihat Paket Jasa
                    </a>
                    <button onclick="closeModal()" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-semibold rounded-xl hover:bg-white/10 transition-all text-sm" 
                        x-data 
                        @click="$dispatch('open-chat')">
                        💬 Konsultasi Gratis
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px) scale(0.97); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
}
.animate-fade-in { animation: fadeIn 0.25s ease-out; }
</style>

<script>
// =============================================
// DATA PROYEK
// =============================================
const projectData = {
    'website-portfolio': {
        badge: 'Website',
        title: 'Website Portfolio Profesional',
        subtitle: 'Personal Branding & Showcase',
        headerGradient: 'from-accent to-blue-700',
        desc: 'Website pribadi yang digunakan untuk memperkenalkan diri secara profesional kepada calon klien dan recruiter. Menampilkan project, skill, pengalaman, dan layanan yang ditawarkan dalam satu tampilan yang bersih dan modern.',
        features: [
            'Halaman About Me dengan profil lengkap',
            'Showcase project dengan deskripsi detail',
            'Tampilan skill & teknologi yang dikuasai',
            'Halaman pengalaman & riwayat kerja',
            'Form kontak terintegrasi langsung',
            'Desain responsif untuk semua perangkat'
        ],
        result: 'Menjadi identitas profesional digital yang memperkuat personal branding sebagai web developer.',
        tech: ['Laravel', 'Tailwind CSS', 'MySQL', 'Alpine.js'],
        ctaDesc: 'Butuh website portfolio untuk personal branding Anda? Kami siap bantu.',
        ctaRoute: '{{ route("services") }}'
    },
    'website-ruki': {
        badge: 'Website',
        title: 'RUKI.ID — Website Arsitektur',
        subtitle: 'Visual Branding & Showcase Karya',
        headerGradient: 'from-slate-700 to-gray-900',
        desc: 'Website untuk brand arsitektur dan desain RUKI.ID yang mengutamakan pengalaman visual yang kuat. Dibangun dengan HTML, CSS, dan JavaScript murni tanpa framework — membuktikan kemampuan membangun UI elegan dari dasar.',
        features: [
            'Layout visual yang mengutamakan presentasi gambar',
            'Typography dan desain yang mencerminkan identitas brand',
            'Galeri karya arsitektur dengan tampilan premium',
            'Animasi dan transisi halaman yang halus',
            'Fully responsive tanpa framework CSS',
            'Loading cepat karena tanpa overhead framework'
        ],
        result: 'Menjadi media branding digital yang kuat untuk RUKI.ID, menonjolkan karya arsitektur secara visual dan profesional.',
        tech: ['HTML5', 'CSS3', 'JavaScript'],
        ctaDesc: 'Butuh website visual yang elegan untuk brand atau bisnis kreatif Anda?',
        ctaRoute: '{{ route("services") }}'
    },
    'website-dilaga': {
        badge: 'Website',
        title: 'Web Travel',
        subtitle: 'Bisnis Travel & Paket Wisata',
        headerGradient: 'from-sky-500 to-blue-600',
        desc: 'Website bisnis travel dan wisata yang memudahkan calon pelanggan mencari dan memesan paket perjalanan. Menampilkan destinasi, detail paket lengkap, galeri foto, dan form inquiry pemesanan.',
        features: [
            'Katalog paket wisata dengan detail lengkap',
            'Informasi destinasi, itinerary, dan fasilitas',
            'Daftar harga dan pilihan paket',
            'Galeri foto destinasi wisata',
            'Form inquiry dan pemesanan online',
            'Integrasi kontak WhatsApp langsung'
        ],
        result: 'Memberikan Dilaga Tour kehadiran digital profesional yang mempermudah calon pelanggan mengenal dan memesan paket wisata.',
        tech: ['Laravel', 'Bootstrap', 'MySQL', 'jQuery'],
        ctaDesc: 'Punya bisnis travel, tour, atau jasa wisata? Kami bisa buatkan websitenya.',
        ctaRoute: '{{ route("services") }}'
    },
    'sistem-desa': {
        badge: 'Sistem Informasi',
        title: 'Website Profil Desa',
        subtitle: 'Pusat Informasi Digital Desa',
        headerGradient: 'from-green-500 to-emerald-700',
        desc: 'Website pusat informasi digital untuk desa/kalurahan yang dilengkapi dashboard admin agar pengelola desa bisa memperbarui konten secara mandiri. Masyarakat bisa mengakses informasi desa kapan saja tanpa harus datang ke kantor.',
        features: [
            'Profil desa: sejarah, visi & misi, struktur organisasi',
            'Berita dan agenda kegiatan desa',
            'Galeri foto kegiatan dan fasilitas',
            'Data potensi desa dan UMKM lokal',
            'Informasi kontak dan lokasi desa',
            'Dashboard admin CMS untuk kelola seluruh konten'
        ],
        result: 'Menjadi referensi digitalisasi desa dengan sistem CMS yang memudahkan pengelolaan konten secara mandiri oleh perangkat desa.',
        tech: ['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS'],
        ctaDesc: 'Cocok untuk desa, kelurahan, RT/RW, atau organisasi komunitas.',
        ctaRoute: '{{ route("services") }}'
    },
    'website-wedding': {
        badge: 'Website',
        title: 'Wedding QR Album',
        subtitle: 'Album Digital Pernikahan via QR Code',
        headerGradient: 'from-rose-400 to-pink-600',
        desc: 'Album foto pernikahan digital yang bisa diakses tamu melalui QR Code. Menggabungkan fungsi undangan digital, galeri foto, dan buku tamu dalam satu pengalaman interaktif yang berkesan dan mudah dibagikan.',
        features: [
            'Landing page pasangan dengan foto dan cerita',
            'Galeri foto pernikahan berkualitas tinggi',
            'QR Code unik untuk akses mudah tamu',
            'Countdown menuju hari pernikahan',
            'Fitur ucapan & pesan dari tamu',
            'Background musik pengiring yang elegan'
        ],
        result: 'Menghadirkan dokumentasi pernikahan yang lebih modern, interaktif, dan mudah diakses dibanding album foto fisik konvensional.',
        tech: ['Laravel', 'Tailwind CSS', 'Alpine.js', 'QR Code Generator', 'MySQL'],
        ctaDesc: 'Mau buatkan album digital pernikahan atau undangan digital untuk klien Anda?',
        ctaRoute: '{{ route("services") }}'
    },
    'sistem-fisio': {
        badge: 'Sistem Informasi',
        title: 'Aplikasi Fisioterapi Clinic',
        subtitle: 'Monitoring & Manajemen Pasien',
        headerGradient: 'from-teal-500 to-cyan-700',
        desc: 'Sistem informasi klinik fisioterapi yang membantu pasien menjalani program latihan secara terstruktur dan memudahkan terapis memantau perkembangan pasien. Tersedia versi web dan mobile (Flutter) untuk akses fleksibel.',
        features: [
            'Login multi-role: pasien dan admin/terapis',
            'Data pasien dan riwayat terapi lengkap',
            'Program latihan terstruktur per pasien',
            'Checklist latihan harian yang bisa diisi pasien',
            'Video edukasi gerakan fisioterapi',
            'Statistik & grafik progres perkembangan pasien'
        ],
        result: 'Membantu klinik fisioterapi memberikan pelayanan yang lebih terstruktur dan meningkatkan kepatuhan pasien dalam menjalankan program latihan.',
        tech: ['Laravel', 'Flutter', 'MySQL', 'REST API', 'Tailwind CSS'],
        ctaDesc: 'Butuh sistem informasi untuk klinik, praktik dokter, atau layanan kesehatan?',
        ctaRoute: '{{ route("services") }}'
    },
    'ecommerce-toko': {
        badge: 'E-Commerce',
        title: 'Web E-Commerce',
        subtitle: 'Platform Toko Online End-to-End',
        headerGradient: 'from-violet-500 to-purple-700',
        desc: 'Platform toko online lengkap yang mencakup seluruh proses transaksi dari katalog produk hingga pengelolaan pesanan. Dilengkapi dashboard admin untuk mengelola produk, stok, dan laporan penjualan secara real-time.',
        features: [
            'Katalog produk dengan kategori dan pencarian',
            'Halaman detail produk dengan foto dan deskripsi',
            'Keranjang belanja dan proses checkout',
            'Manajemen data pelanggan dan riwayat pesanan',
            'Dashboard admin: CRUD produk, stok, pesanan',
            'Laporan penjualan dan statistik transaksi'
        ],
        result: 'Menjadi bukti kemampuan membangun sistem transaksi end-to-end yang siap digunakan untuk bisnis online skala UMKM hingga menengah.',
        tech: ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
        ctaDesc: 'Ingin punya toko online sendiri? Kami siap wujudkan dari nol.',
        ctaRoute: '{{ route("services") }}'
    }
};

// =============================================
// FILTER PORTFOLIO
// =============================================
function filterPortfolio(category) {
    const cards = document.querySelectorAll('.portfolio-card');
    const buttons = document.querySelectorAll('.filter-btn');
    const emptyState = document.getElementById('emptyState');
    let visibleCount = 0;

    buttons.forEach(btn => {
        btn.classList.toggle('active', btn.dataset.filter === category);
    });

    cards.forEach(card => {
        const match = category === 'semua' || card.dataset.category === category;
        if (match) {
            card.classList.remove('hidden-card');
            card.style.display = '';
            visibleCount++;
        } else {
            card.classList.add('hidden-card');
            setTimeout(() => {
                if (card.classList.contains('hidden-card')) card.style.display = 'none';
            }, 350);
        }
    });

    emptyState.classList.toggle('hidden', visibleCount > 0);
}

// =============================================
// MODAL
// =============================================
function openModal(id) {
    const data = projectData[id];
    if (!data) return;

    document.getElementById('modalBadge').textContent = data.badge;
    document.getElementById('modalTitle').textContent = data.title;
    document.getElementById('modalSubtitle').textContent = data.subtitle;
    document.getElementById('modalDesc').textContent = data.desc;
    document.getElementById('modalResult').textContent = data.result;
    document.getElementById('modalCTADesc').textContent = data.ctaDesc;
    document.getElementById('modalHeader').className = `p-8 rounded-t-2xl relative bg-gradient-to-br ${data.headerGradient}`;

    // Fitur
    const featuresList = document.getElementById('modalFeatures');
    featuresList.innerHTML = data.features.map(f =>
        `<li class="flex items-start gap-2 text-gray-700 text-sm">
            <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            ${f}
        </li>`
    ).join('');

    // Tech badges
    const techColors = ['bg-blue-100 text-blue-700', 'bg-green-100 text-green-700', 'bg-purple-100 text-purple-700', 'bg-orange-100 text-orange-700', 'bg-gray-100 text-gray-700', 'bg-cyan-100 text-cyan-700'];
    document.getElementById('modalTech').innerHTML = data.tech.map((t, i) =>
        `<span class="px-3 py-1.5 ${techColors[i % techColors.length]} rounded-lg text-xs font-semibold">${t}</span>`
    ).join('');

    // Show modal
    const modal = document.getElementById('projectModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('projectModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeModal();
});
</script>

@endsection
