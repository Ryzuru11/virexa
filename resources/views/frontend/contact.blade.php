@extends('frontend.layouts.master')

@section('title', 'Hubungi Kami - VIREXA Digital')
@section('description', 'Hubungi VIREXA Digital untuk konsultasi gratis pengembangan website dan sistem digital profesional. Tim kami siap membantu.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary via-secondary to-primary text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Hubungi Kami</h1>
        <p class="text-xl text-blue-100 max-w-4xl mx-auto font-medium">
            Siap memulai proyek Anda? Hubungi tim kami untuk konsultasi gratis dan solusi terbaik
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-white p-10 rounded-2xl shadow-lg">
                <h2 class="text-3xl font-heading font-bold text-primary mb-8">Kirim Pesan</h2>
                <form class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200" placeholder="Nama lengkap Anda">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Alamat Email</label>
                            <input type="email" id="email" name="email" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200" placeholder="email@anda.com">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-3">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200" placeholder="+62 812 3456 789">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-700 mb-3">Perusahaan (Opsional)</label>
                            <input type="text" id="company" name="company" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200" placeholder="Nama perusahaan Anda">
                        </div>
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-semibold text-gray-700 mb-3">Layanan yang Diminati</label>
                        <select id="service" name="service" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200">
                            <option value="">Pilih layanan</option>
                            <option value="web-development">Pengembangan Website</option>
                            <option value="seo-optimization">SEO & Optimasi</option>
                            <option value="google-ads">Google Ads</option>
                            <option value="system-development">Sistem Bisnis Digital</option>
                            <option value="ui-ux-design">Desain UI/UX</option>
                            <option value="maintenance">Perawatan & Support</option>
                            <option value="consultation">Konsultasi</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="budget" class="block text-sm font-semibold text-gray-700 mb-3">Budget Proyek</label>
                        <select id="budget" name="budget" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200">
                            <option value="">Pilih rentang budget</option>
                            <option value="under-10m">Di bawah Rp 10.000.000</option>
                            <option value="10m-25m">Rp 10.000.000 - Rp 25.000.000</option>
                            <option value="25m-50m">Rp 25.000.000 - Rp 50.000.000</option>
                            <option value="50m-100m">Rp 50.000.000 - Rp 100.000.000</option>
                            <option value="over-100m">Di atas Rp 100.000.000</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">Detail Proyek</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-accent focus:border-transparent transition-all duration-200" placeholder="Ceritakan tentang kebutuhan proyek, tujuan, dan fitur khusus yang Anda inginkan..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-accent text-white py-4 px-8 rounded-xl font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="space-y-10">
                <div>
                    <h2 class="text-3xl font-heading font-bold text-primary mb-8">Mari Berdiskusi</h2>
                    <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                        Kami ingin mendengar tentang proyek Anda. Hubungi kami melalui salah satu metode di bawah ini, dan kami akan merespons dalam 24 jam.
                    </p>
                </div>
                
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold text-primary mb-2">Telepon</h3>
                            <p class="text-gray-600 text-lg font-medium">+62 859 5536 9598</p>
                            <p class="text-sm text-gray-500 font-medium">Senin-Jumat 9:00-18:00 WIB</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold text-primary mb-2">Email</h3>
                            <p class="text-gray-600 text-lg font-medium">hilmansatiapebrian9715@gmail.com</p>
                            <p class="text-sm text-gray-500 font-medium">Kami akan merespons dalam 24 jam</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold text-primary mb-2">Kantor</h3>
                            <p class="text-gray-600 text-lg font-medium">Jakarta, Indonesia</p>
                            <p class="text-sm text-gray-500 font-medium">Tersedia untuk meeting dengan perjanjian</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading font-semibold text-primary mb-2">WhatsApp</h3>
                            <p class="text-gray-600 text-lg font-medium">+62 859 5536 9598</p>
                            <p class="text-sm text-gray-500 font-medium">Respon cepat untuk pertanyaan mendesak</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ -->
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <h3 class="text-xl font-heading font-semibold text-primary mb-6">Pertanyaan Umum</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Berapa lama waktu pengerjaan proyek?</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Timeline proyek bervariasi berdasarkan kompleksitas, umumnya 2-12 minggu.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Apakah ada layanan support berkelanjutan?</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Ya, kami menyediakan paket maintenance dan support untuk semua proyek.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Bisakah bekerja dengan sistem yang sudah ada?</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Tentu! Kami dapat mengintegrasikan atau meningkatkan infrastruktur digital yang sudah ada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-accent text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Siap Memulai Proyek Anda?</h2>
        <p class="text-xl mb-12 text-blue-100 max-w-3xl mx-auto font-medium">
            Jangan menunda lagi – mari wujudkan ide Anda menjadi kenyataan. Hubungi kami hari ini untuk konsultasi gratis.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="tel:+6285955369598" class="bg-white text-accent px-10 py-5 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                Telepon: +62 859 5536 9598
            </a>
            <a href="mailto:hilmansatiapebrian9715@gmail.com" class="border-2 border-white text-white px-10 py-5 rounded-xl font-semibold hover:bg-white hover:text-accent transition-all duration-200">
                Email: hilmansatiapebrian9715@gmail.com
            </a>
        </div>
    </div>
</section>
@endsection