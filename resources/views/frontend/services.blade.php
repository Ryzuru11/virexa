@extends('frontend.layouts.master')

@section('title', 'Layanan - VIREXA Digital')
@section('description', 'Layanan lengkap pengembangan website, sistem bisnis, desain UI/UX, dan maintenance oleh VIREXA Digital')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary via-secondary to-primary text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Layanan Unggulan Kami</h1>
        <p class="text-xl text-blue-100 max-w-4xl mx-auto font-medium">
            Solusi digital terpadu yang terbukti meningkatkan omzet dan efisiensi operasional bisnis Anda
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Web Development -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">Pengembangan Website</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Website profesional yang menarik pelanggan, meningkatkan kredibilitas, dan menghasilkan penjualan online yang menguntungkan.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Tampilan Responsif di Semua Device</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Optimasi SEO untuk Ranking Google</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Loading Cepat & Performa Optimal</span>
                    </li>
                </ul>
            </div>

            <!-- SEO & Optimization -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">SEO & Optimasi</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Tingkatkan ranking Google dan traffic organik website Anda dengan strategi SEO yang terbukti efektif dan menguntungkan.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Riset Keyword Mendalam</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Optimasi On-Page & Off-Page</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Laporan Ranking Berkala</span>
                    </li>
                </ul>
            </div>

            <!-- Google Ads -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">Google Ads</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Iklan berbayar yang menghasilkan leads berkualitas tinggi dan ROI maksimal untuk pertumbuhan bisnis yang cepat.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Setup & Optimasi Kampanye</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Targeting Audience Tepat</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Monitoring & Reporting ROI</span>
                    </li>
                </ul>
            </div>

            <!-- System Development -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">Sistem Bisnis Digital</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Sistem terintegrasi yang mengotomatisasi proses bisnis, menghemat waktu operasional, dan meningkatkan produktivitas tim Anda.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Otomatisasi Proses Bisnis</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Integrasi Database Terpusat</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Koneksi API Sistem Eksternal</span>
                    </li>
                </ul>
            </div>

            <!-- UI/UX Design -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">Desain UI/UX</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Desain yang memikat dan mudah digunakan, membuat pelanggan betah berlama-lama dan meningkatkan konversi penjualan.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Riset Perilaku Pengguna</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Prototype Interaktif</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Desain Visual Menarik</span>
                    </li>
                </ul>
            </div>

            <!-- Maintenance -->
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="w-20 h-20 bg-accent rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-primary">Perawatan & Support</h3>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">Jaminan website selalu aman, cepat, dan berfungsi optimal 24/7 tanpa gangguan, sehingga bisnis Anda tidak pernah berhenti.</p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Monitoring 24/7 Non-Stop</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Update Keamanan Berkala</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Support Teknis Responsif</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Free Consultation Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="order-2 lg:order-1">
                <img src="{{ asset('images/klinik.png') }}" alt="Gratis Konsultasi Digital" class="w-full h-auto">
            </div>
            
            <!-- Content -->
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-8 tracking-tight">Gratis Konsultasi Digital</h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p>
                        Kami sediakan konsultasi gratis untuk mengobati website yang "sakit", lambat dan rentan serangan keamanan. Dokter-dokter kami akan membantu Anda melakukan analisis penyebab penyakit dan melakukan pengobatan yang perlu dilakukan.
                    </p>
                    <p>
                        Termasuk membantu mengupdate CMS, membersihkan malware, melakukan tune-up, dan semua pekerjaan lain yang diperlukan agar website Anda dapat diakses dengan cepat dan lebih aman.
                    </p>
                    <p class="font-semibold text-accent">
                        Biaya pengobatannya gratis ditanggung oleh VIREXA.
                    </p>
                </div>
                <div class="mt-10">
                    <a href="{{ route('contact') }}" class="bg-accent text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl inline-block">
                        Konsultasi Gratis Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Proses Kerja Terpercaya</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Metodologi yang telah terbukti menghasilkan proyek sukses dan kepuasan klien maksimal
            </p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-heading font-bold text-2xl">1</span>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Analisis Kebutuhan</h3>
                <p class="text-gray-600 leading-relaxed">Memahami mendalam kebutuhan bisnis dan tujuan proyek Anda</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-heading font-bold text-2xl">2</span>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Perencanaan Detail</h3>
                <p class="text-gray-600 leading-relaxed">Menyusun roadmap proyek dan spesifikasi teknis yang komprehensif</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-heading font-bold text-2xl">3</span>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Pengembangan</h3>
                <p class="text-gray-600 leading-relaxed">Membangun solusi dengan update berkala dan feedback berkelanjutan</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-heading font-bold text-2xl">4</span>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Peluncuran</h3>
                <p class="text-gray-600 leading-relaxed">Deploy proyek dan memberikan support berkelanjutan untuk kesuksesan</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-accent text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Siap Memulai Proyek Anda?</h2>
        <p class="text-xl mb-12 text-blue-100 max-w-3xl mx-auto font-medium">
            Jangan tunda lagi. Mari diskusikan kebutuhan bisnis Anda dan temukan solusi digital yang tepat.
        </p>
        <a href="{{ route('contact') }}" class="bg-white text-accent px-10 py-5 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
            Konsultasi Gratis Hari Ini
        </a>
    </div>
</section>
@endsection