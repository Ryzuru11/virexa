@extends('frontend.layouts.master')

@section('title', 'Portofolio - VIREXA Digital')
@section('description', 'Lihat portofolio proyek sukses VIREXA Digital dalam pengembangan website, sistem, dan aplikasi untuk berbagai industri')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary via-secondary to-primary text-white py-24 relative overflow-hidden">
    <!-- Animated Tech Icons Background -->
    <div class="absolute inset-0 overflow-hidden">
        <style>
            @keyframes floatTech1 {
                0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.6; }
                50% { transform: translate(30px, -40px) rotate(10deg); opacity: 0.8; }
            }
            @keyframes floatTech2 {
                0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.5; }
                50% { transform: translate(-25px, 35px) rotate(-8deg); opacity: 0.7; }
            }
            @keyframes floatTech3 {
                0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.6; }
                50% { transform: translate(20px, 30px) rotate(12deg); opacity: 0.9; }
            }
            @keyframes floatTech4 {
                0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.5; }
                50% { transform: translate(-30px, -25px) rotate(-10deg); opacity: 0.7; }
            }
            @keyframes floatTech5 {
                0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.6; }
                50% { transform: translate(35px, 20px) rotate(15deg); opacity: 0.8; }
            }
            .tech-icon {
                position: absolute;
                color: rgba(147, 197, 253, 0.4);
                pointer-events: none;
            }
            .tech-icon-1 { top: 10%; left: 5%; animation: floatTech1 8s ease-in-out infinite; }
            .tech-icon-2 { top: 20%; right: 8%; animation: floatTech2 10s ease-in-out infinite; }
            .tech-icon-3 { top: 60%; left: 10%; animation: floatTech3 9s ease-in-out infinite; }
            .tech-icon-4 { top: 70%; right: 15%; animation: floatTech4 11s ease-in-out infinite; }
            .tech-icon-5 { top: 40%; left: 15%; animation: floatTech5 7s ease-in-out infinite; }
            .tech-icon-6 { top: 30%; right: 20%; animation: floatTech1 9s ease-in-out infinite 1s; }
            .tech-icon-7 { top: 80%; left: 20%; animation: floatTech2 8s ease-in-out infinite 2s; }
            .tech-icon-8 { top: 15%; left: 25%; animation: floatTech3 10s ease-in-out infinite 1.5s; }
            .tech-icon-9 { top: 50%; right: 10%; animation: floatTech4 9s ease-in-out infinite 2.5s; }
            .tech-icon-10 { top: 65%; right: 25%; animation: floatTech5 11s ease-in-out infinite 1s; }
        </style>
        
        <!-- Database Icon -->
        <svg class="tech-icon tech-icon-1 w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 3C7.58 3 4 4.79 4 7s3.58 4 8 4 8-1.79 8-4-3.58-4-8-4zm8 6c0 2.21-3.58 4-8 4s-8-1.79-8-4v3c0 2.21 3.58 4 8 4s8-1.79 8-4V9zm0 5c0 2.21-3.58 4-8 4s-8-1.79-8-4v3c0 2.21 3.58 4 8 4s8-1.79 8-4v-3z"/>
        </svg>
        
        <!-- Server Icon -->
        <svg class="tech-icon tech-icon-2 w-20 h-20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
        </svg>
        
        <!-- Code Brackets -->
        <svg class="tech-icon tech-icon-3 w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
        </svg>
        
        <!-- Chart Icon -->
        <svg class="tech-icon tech-icon-4 w-18 h-18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M3.5 18.49l6-6.01 4 4L22 6.92l-1.41-1.41-7.09 7.97-4-4L2 16.99z"/>
        </svg>
        
        <!-- Mobile Icon -->
        <svg class="tech-icon tech-icon-5 w-14 h-14" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
        </svg>
        
        <!-- Laptop Icon -->
        <svg class="tech-icon tech-icon-6 w-20 h-20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>
        </svg>
        
        <!-- Cloud Icon -->
        <svg class="tech-icon tech-icon-7 w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/>
        </svg>
        
        <!-- Settings/Gear Icon -->
        <svg class="tech-icon tech-icon-8 w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94L14.4 2.81c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/>
        </svg>
        
        <!-- Rocket Icon -->
        <svg class="tech-icon tech-icon-9 w-18 h-18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 13.05l2.23 2.84 3.62-.89c.31-.14 3.12-1.49 5.89-3.57L9.19 6.35zm13.33-4.87c-.36-.36-.88-.54-1.4-.47-1.48.18-6.04 1.03-9.39 4.38l-3.73 3.73 4.24 4.24 3.73-3.73c3.35-3.35 4.2-7.91 4.38-9.39.07-.52-.11-1.04-.47-1.4zM4.59 17.41c-.83.83-.83 2.17 0 3 .83.83 2.17.83 3 0 .83-.83.83-2.17 0-3-.83-.83-2.17-.83-3 0z"/>
        </svg>
        
        <!-- Network/Globe Icon -->
        <svg class="tech-icon tech-icon-10 w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
        </svg>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Portofolio Unggulan</h1>
        <p class="text-xl text-blue-100 max-w-4xl mx-auto font-medium">
            Lihat bagaimana kami membantu klien mencapai kesuksesan bisnis dengan solusi digital yang inovatif
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Project 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-accent to-accent-dark relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">E-Commerce Platform</h3>
                            <p class="text-sm text-gray-600 font-medium">Modern Marketplace</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Platform E-Commerce</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Marketplace modern yang meningkatkan penjualan online klien hingga 300% dalam 6 bulan pertama.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">Vue.js</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg text-sm font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2024</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-green-500 to-teal-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">Corporate Website</h3>
                            <p class="text-sm text-gray-600 font-medium">Professional Business Site</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Corporate Website</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Professional company website with content management system, multi-language support, and integrated analytics dashboard.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-lg text-sm font-medium">Bootstrap</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">PostgreSQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2024</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-orange-500 to-red-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">Mobile Application</h3>
                            <p class="text-sm text-gray-600 font-medium">Cross-Platform App</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Mobile Application</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Cross-platform mobile application with real-time messaging, push notifications, and cloud synchronization capabilities.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-cyan-100 text-cyan-700 rounded-lg text-sm font-medium">React Native</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">Node.js</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-lg text-sm font-medium">MongoDB</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2024</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-purple-500 to-pink-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">Analytics Dashboard</h3>
                            <p class="text-sm text-gray-600 font-medium">Business Intelligence</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Analytics Dashboard</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Advanced business intelligence dashboard with real-time data visualization, custom reports, and predictive analytics.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-orange-100 text-orange-700 rounded-lg text-sm font-medium">Chart.js</span>
                        <span class="px-4 py-2 bg-red-100 text-red-700 rounded-lg text-sm font-medium">Redis</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2023</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-indigo-500 to-blue-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">Learning Management</h3>
                            <p class="text-sm text-gray-600 font-medium">Educational Platform</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Learning Management System</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive e-learning platform with course management, student tracking, and interactive assessment tools.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">Vue.js</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg text-sm font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2023</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 bg-gradient-to-br from-teal-500 to-cyan-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white bg-opacity-95 rounded-xl p-4">
                            <h3 class="font-heading font-semibold text-primary text-lg">Restaurant POS</h3>
                            <p class="text-sm text-gray-600 font-medium">Point of Sale System</p>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Restaurant POS System</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Complete point-of-sale solution for restaurants with order management, inventory tracking, and sales reporting.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-lg text-sm font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">SQLite</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 font-medium">Completed 2023</span>
                        <button class="text-accent hover:text-accent-dark font-semibold">View Details →</button>
                    </div>
                </div>
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
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-red-600">L</span>
                </div>
                <p class="text-gray-700 font-semibold">Laravel</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-green-600">V</span>
                </div>
                <p class="text-gray-700 font-semibold">Vue.js</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-cyan-600">R</span>
                </div>
                <p class="text-gray-700 font-semibold">React</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-green-700">N</span>
                </div>
                <p class="text-gray-700 font-semibold">Node.js</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-blue-600">M</span>
                </div>
                <p class="text-gray-700 font-semibold">MySQL</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4 hover:shadow-xl transition-shadow duration-300">
                    <span class="text-3xl font-heading font-bold text-green-600">M</span>
                </div>
                <p class="text-gray-700 font-semibold">MongoDB</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-accent text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Siap Memulai Proyek Anda?</h2>
        <p class="text-xl mb-12 text-blue-100 max-w-3xl mx-auto font-medium">
            Mari ciptakan sesuatu yang luar biasa bersama. Hubungi kami untuk diskusi kebutuhan proyek Anda.
        </p>
        <a href="{{ route('contact') }}" class="bg-white text-accent px-10 py-5 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
            Mulai Proyek Hari Ini
        </a>
    </div>
</section>
@endsection