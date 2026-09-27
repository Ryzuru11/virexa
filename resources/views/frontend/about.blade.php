@extends('frontend.layouts.master')

@section('title', 'Tentang Kami - VIREXA Digital')
@section('description', 'Kenali VIREXA Digital - Agensi digital terpercaya dengan misi membantu bisnis berkembang melalui solusi teknologi inovatif')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary via-secondary to-primary text-white py-24 relative overflow-hidden">
    <!-- Animated Constellation Background -->
    <canvas id="heroConstellationCanvas" class="absolute inset-0 w-full h-full"></canvas>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Tentang VIREXA Digital</h1>
        <p class="text-xl text-blue-100 max-w-4xl mx-auto font-medium">
            Berdedikasi menciptakan solusi digital yang mengubah bisnis dan mendorong inovasi berkelanjutan
        </p>
    </div>
    
    <script>
        (function() {
            const canvas = document.getElementById('heroConstellationCanvas');
            const ctx = canvas.getContext('2d');
            
            function resizeCanvas() {
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);
            
            const particles = [];
            const particleCount = 80;
            const maxDistance = 120;
            
            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.vx = (Math.random() - 0.5) * 0.3;
                    this.vy = (Math.random() - 0.5) * 0.3;
                    this.radius = Math.random() * 2.5 + 1;
                }
                
                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    
                    if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
                }
                
                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = 'rgba(147, 197, 253, 0.8)';
                    ctx.shadowBlur = 10;
                    ctx.shadowColor = 'rgba(147, 197, 253, 0.8)';
                    ctx.fill();
                    ctx.shadowBlur = 0;
                }
            }
            
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
            
            function connectParticles() {
                for (let i = 0; i < particles.length; i++) {
                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        
                        if (distance < maxDistance) {
                            const opacity = (1 - distance / maxDistance) * 0.4;
                            ctx.beginPath();
                            ctx.strokeStyle = `rgba(147, 197, 253, ${opacity})`;
                            ctx.lineWidth = 1.5;
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.stroke();
                        }
                    }
                }
            }
            
            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                particles.forEach(particle => {
                    particle.update();
                    particle.draw();
                });
                
                connectParticles();
                requestAnimationFrame(animate);
            }
            
            animate();
        })();
    </script>
</section>

<!-- Mission & Vision -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-8 tracking-tight">Misi Kami</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Memberdayakan bisnis dengan solusi digital inovatif yang mendorong pertumbuhan dan kesuksesan di era digital modern. Kami percaya pada penciptaan teknologi yang tidak hanya memenuhi kebutuhan saat ini tetapi juga mengantisipasi tantangan masa depan.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Komitmen kami melampaui sekadar menyelesaikan proyek – kami membangun kemitraan jangka panjang dengan klien, memastikan kesuksesan berkelanjutan mereka di dunia digital yang terus berkembang.
                </p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-10 rounded-2xl">
                <h3 class="text-3xl font-heading font-bold text-primary mb-6">Visi Kami</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Menjadi agensi digital terdepan di Indonesia yang diakui karena keunggulan dalam pengembangan web dan transformasi digital, menetapkan standar baru untuk inovasi dan kepuasan klien.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Nilai-Nilai Inti</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Prinsip-prinsip yang memandu segala yang kami lakukan dan membentuk budaya perusahaan
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-10 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-6 text-primary">Inovasi</h3>
                <p class="text-gray-600 leading-relaxed">Kami merangkul teknologi terdepan dan solusi kreatif untuk memecahkan tantangan kompleks</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-6 text-primary">Kualitas</h3>
                <p class="text-gray-600 leading-relaxed">Kami menghasilkan hasil luar biasa yang melampaui ekspektasi melalui pengujian ketat dan perhatian detail</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-6 text-primary">Integritas</h3>
                <p class="text-gray-600 leading-relaxed">Kami membangun kepercayaan melalui transparansi, komunikasi jujur, dan praktik bisnis yang etis</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-6 text-primary">Kolaborasi</h3>
                <p class="text-gray-600 leading-relaxed">Kami bekerja erat dengan klien dan anggota tim untuk mencapai tujuan bersama dan kesuksesan mutual</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Tim Profesional</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Profesional berbakat yang berdedikasi menghadirkan solusi digital luar biasa
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            <div class="text-center">
                <div class="w-40 h-40 bg-gradient-to-br from-accent to-accent-dark rounded-full mx-auto mb-8 flex items-center justify-center">
                    <span class="text-white text-4xl font-heading font-bold">HS</span>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-3 text-primary">Hilman Satia Pebrian</h3>
                <p class="text-accent font-semibold mb-4 text-lg">Lead Developer & Founder</p>
                <p class="text-gray-600 leading-relaxed">Developer full-stack berpengalaman dengan keahlian Laravel, Vue.js, dan teknologi web modern.</p>
            </div>
            
            <div class="text-center">
                <div class="w-40 h-40 bg-gradient-to-br from-green-500 to-teal-600 rounded-full mx-auto mb-8 flex items-center justify-center">
                    <span class="text-white text-4xl font-heading font-bold">SR</span>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-3 text-primary">Sari Rahayu</h3>
                <p class="text-accent font-semibold mb-4 text-lg">UI/UX Designer</p>
                <p class="text-gray-600 leading-relaxed">Desainer kreatif yang fokus pada desain berpusat pengguna dan menciptakan pengalaman digital intuitif.</p>
            </div>
            
            <div class="text-center">
                <div class="w-40 h-40 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-8 flex items-center justify-center">
                    <span class="text-white text-4xl font-heading font-bold">BP</span>
                </div>
                <h3 class="text-2xl font-heading font-bold mb-3 text-primary">Budi Pratama</h3>
                <p class="text-accent font-semibold mb-4 text-lg">Project Manager</p>
                <p class="text-gray-600 leading-relaxed">Manajer proyek terampil yang memastikan pengiriman tepat waktu dan komunikasi efektif dengan klien.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-24 bg-accent text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl md:text-6xl font-heading font-bold mb-4">50+</div>
                <p class="text-blue-100 text-lg font-medium">Proyek Selesai</p>
            </div>
            
            <div>
                <div class="text-5xl md:text-6xl font-heading font-bold mb-4">30+</div>
                <p class="text-blue-100 text-lg font-medium">Klien Puas</p>
            </div>
            
            <div>
                <div class="text-5xl md:text-6xl font-heading font-bold mb-4">3+</div>
                <p class="text-blue-100 text-lg font-medium">Tahun Pengalaman</p>
            </div>
            
            <div>
                <div class="text-5xl md:text-6xl font-heading font-bold mb-4">24/7</div>
                <p class="text-blue-100 text-lg font-medium">Support Tersedia</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Mengapa Pilih VIREXA?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Yang membedakan kami di lanskap digital yang kompetitif
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center mr-6 mt-1">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Track Record Terbukti</h3>
                            <p class="text-gray-600 leading-relaxed">Berhasil menyelesaikan 50+ proyek di berbagai industri dengan kepuasan klien yang konsisten.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center mr-6 mt-1">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Teknologi Modern</h3>
                            <p class="text-gray-600 leading-relaxed">Kami menggunakan teknologi dan framework terbaru untuk memastikan proyek Anda siap masa depan dan scalable.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center mr-6 mt-1">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold mb-3 text-primary">Support Berdedikasi</h3>
                            <p class="text-gray-600 leading-relaxed">Maintenance dan support berkelanjutan untuk memastikan aset digital Anda terus berkinerja optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-10 rounded-2xl">
                <h3 class="text-3xl font-heading font-bold text-primary mb-8">Siap Bekerja Sama?</h3>
                <p class="text-gray-700 mb-8 text-lg leading-relaxed">
                    Mari diskusikan proyek Anda dan jelajahi bagaimana kami dapat membantu mewujudkan visi digital Anda.
                </p>
                <a href="{{ route('contact') }}" class="bg-accent text-white px-8 py-4 rounded-xl font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">
                    Mulai Proyek Anda
                </a>
            </div>
        </div>
    </div>
</section>
@endsection