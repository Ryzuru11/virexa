@extends('frontend.layouts.master')

@section('title', 'Platform E-Commerce - Gallery | VIREXA Digital')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-accent via-accent-dark to-primary py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-white/80 hover:text-white mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali ke Portfolio
            </a>
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-white mb-6">
                Platform E-Commerce
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Marketplace modern yang meningkatkan penjualan online hingga 300% dalam 6 bulan
            </p>
            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <span class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white rounded-xl text-sm font-semibold">Laravel</span>
                <span class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white rounded-xl text-sm font-semibold">Vue.js</span>
                <span class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white rounded-xl text-sm font-semibold">MySQL</span>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-heading font-bold text-primary mb-4">Project Gallery</h2>
            <p class="text-lg text-gray-600">Lihat tampilan dan fitur dari platform e-commerce kami</p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Gallery Item 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(0)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 1" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Homepage Design</h3>
                        <p class="text-sm text-white/90">Modern dan user-friendly interface</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(1)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 2" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Product Catalog</h3>
                        <p class="text-sm text-white/90">Katalog produk yang lengkap</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(2)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 3" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Shopping Cart</h3>
                        <p class="text-sm text-white/90">Keranjang belanja yang intuitif</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(3)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 4" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Checkout Process</h3>
                        <p class="text-sm text-white/90">Proses pembayaran yang mudah</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(4)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 5" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Admin Dashboard</h3>
                        <p class="text-sm text-white/90">Dashboard admin yang powerful</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer" onclick="openLightbox(5)">
                <img src="{{ asset('images/ecomers.jpeg') }}" alt="E-Commerce Screenshot 6" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2">Mobile Responsive</h3>
                        <p class="text-sm text-white/90">Tampilan mobile yang optimal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-heading font-bold text-primary mb-6">
            Tertarik dengan Project Ini?
        </h2>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            Hubungi kami sekarang untuk konsultasi gratis dan wujudkan platform e-commerce impian Anda
        </p>
        <a href="https://wa.me/6285955369598?text=Halo%20VIREXA%2C%20saya%20tertarik%20dengan%20Platform%20E-Commerce%20yang%20ditampilkan%20di%20gallery.%20Saya%20ingin%20konsultasi%20lebih%20lanjut." 
           target="_blank"
           class="inline-flex items-center px-10 py-5 bg-accent hover:bg-accent-dark text-white text-lg font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            Hubungi Sekarang
        </a>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center">
    <!-- Close Button -->
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors z-50">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    <!-- Previous Button -->
    <button onclick="changeImage(-1)" class="absolute left-6 text-white hover:text-gray-300 transition-colors z-50">
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    <!-- Next Button -->
    <button onclick="changeImage(1)" class="absolute right-6 text-white hover:text-gray-300 transition-colors z-50">
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <!-- Image Container -->
    <div class="relative max-w-7xl max-h-screen p-4">
        <img id="lightbox-img" src="" alt="Gallery Image" class="max-w-full max-h-[90vh] object-contain transition-transform duration-300" style="transform: scale(1);">
        
        <!-- Zoom Controls -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex items-center gap-4 bg-black/50 backdrop-blur-sm px-6 py-3 rounded-full">
            <button onclick="zoomOut()" class="text-white hover:text-gray-300 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7"/>
                </svg>
            </button>
            <span id="zoom-level" class="text-white font-semibold">100%</span>
            <button onclick="zoomIn()" class="text-white hover:text-gray-300 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
                </svg>
            </button>
            <button onclick="resetZoom()" class="text-white hover:text-gray-300 transition-colors ml-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
            </button>
        </div>

        <!-- Image Counter -->
        <div class="absolute top-6 left-1/2 transform -translate-x-1/2 bg-black/50 backdrop-blur-sm px-6 py-2 rounded-full">
            <span id="image-counter" class="text-white font-semibold"></span>
        </div>
    </div>
</div>

<script>
    const images = [
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Homepage Design' },
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Product Catalog' },
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Shopping Cart' },
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Checkout Process' },
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Admin Dashboard' },
        { src: '{{ asset("images/ecomers.jpeg") }}', title: 'Mobile Responsive' }
    ];

    let currentIndex = 0;
    let currentZoom = 1;

    function openLightbox(index) {
        currentIndex = index;
        currentZoom = 1;
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        
        img.src = images[index].src;
        img.style.transform = `scale(${currentZoom})`;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        updateCounter();
        updateZoomLevel();
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    }

    function changeImage(direction) {
        currentIndex += direction;
        
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        
        const img = document.getElementById('lightbox-img');
        img.style.opacity = '0';
        
        setTimeout(() => {
            img.src = images[currentIndex].src;
            img.style.opacity = '1';
            updateCounter();
        }, 150);
    }

    function zoomIn() {
        if (currentZoom < 3) {
            currentZoom += 0.25;
            applyZoom();
        }
    }

    function zoomOut() {
        if (currentZoom > 0.5) {
            currentZoom -= 0.25;
            applyZoom();
        }
    }

    function resetZoom() {
        currentZoom = 1;
        applyZoom();
    }

    function applyZoom() {
        const img = document.getElementById('lightbox-img');
        img.style.transform = `scale(${currentZoom})`;
        updateZoomLevel();
    }

    function updateZoomLevel() {
        document.getElementById('zoom-level').textContent = Math.round(currentZoom * 100) + '%';
    }

    function updateCounter() {
        document.getElementById('image-counter').textContent = `${currentIndex + 1} / ${images.length}`;
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const lightbox = document.getElementById('lightbox');
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') changeImage(-1);
            if (e.key === 'ArrowRight') changeImage(1);
            if (e.key === '+' || e.key === '=') zoomIn();
            if (e.key === '-') zoomOut();
            if (e.key === '0') resetZoom();
        }
    });

    // Close on background click
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });
</script>
@endsection
