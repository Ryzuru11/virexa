@extends('frontend.layouts.master')

@section('title', 'VIREXA Digital - Jasa Pembuatan Website & Sistem Digital Profesional')
@section('description', 'VIREXA Digital - Agensi digital terpercaya yang membantu bisnis berkembang dengan website, sistem, dan aplikasi yang menguntungkan')

@section('content')
<!-- Hero Section with Overlapping CTA Box -->
<section class="relative w-full">
    <img src="{{ asset('images/banner.png') }}" alt="VIREXA Banner" class="w-full h-auto">
    
    <!-- Overlapping CTA Box -->
    <div class="absolute bottom-0 left-0 right-0 transform translate-y-1/2 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-10 md:p-12 text-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-primary mb-4">
                    Kami Bantu Bisnis Berkembang Pesat
                </h2>
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Dengan solusi digital yang tepat sasaran dan menguntungkan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-accent text-white px-8 py-4 rounded-xl text-base font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Konsultasi Gratis Sekarang
                    </a>
                    <a href="{{ route('portfolio') }}" class="border-2 border-accent text-accent px-8 py-4 rounded-xl text-base font-semibold hover:bg-accent hover:text-white transition-all duration-200">
                        Lihat Hasil Kerja Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Spacer for overlapping box -->
<div class="h-32 md:h-40"></div>

<!-- About Section - Modern Style -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Side - Stats & Features -->
            <div class="space-y-10">
                <!-- Stat 1 -->
                <div class="flex items-start gap-6 group">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent to-accent-dark flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-4xl font-heading font-bold text-primary mb-2">500+</h3>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Klien Kami</p>
                        <p class="text-gray-600 leading-relaxed">Dalam 3 tahun terakhir, kami telah dipercaya oleh ratusan bisnis di seluruh Indonesia</p>
                    </div>
                </div>
                
                <!-- Stat 2 -->
                <div class="flex items-start gap-6 group">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-4xl font-heading font-bold text-primary mb-2">100%</h3>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Satisfaction</p>
                        <p class="text-gray-600 leading-relaxed">Fokus pada hasil nyata yang meningkatkan penjualan dan efisiensi bisnis Anda</p>
                    </div>
                </div>
                
                <!-- Stat 3 -->
                <div class="flex items-start gap-6 group">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-4xl font-heading font-bold text-primary mb-2">Modern</h3>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Desain</p>
                        <p class="text-gray-600 leading-relaxed">Selalu up-to-date dengan tren digital terbaru dan teknologi modern</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Content & Image -->
            <div>
                <div class="bg-white rounded-3xl shadow-xl p-10 mb-8">
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary mb-6">
                        Tentang VIREXA Digital
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        VIREXA.ID Digital Indonesia bergerak di bidang jasa pembuatan website, yang berfokus pada memberikan solusi digital modern untuk kebutuhan bisnis.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Berdiri sejak 3 tahun yang lalu, VIREXA.ID telah membuktikan keunggulan dan kepercayaannya dengan melayani lebih dari 500 pelanggan di seluruh Indonesia.
                    </p>
                    <a href="{{ route('about') }}" class="inline-flex items-center text-accent font-semibold text-lg hover:text-accent-dark transition-colors duration-200">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Image with Animation -->
                <div class="relative">
                    <style>
                        @keyframes imageFloat {
                            0%, 100% { transform: translateY(0px); }
                            50% { transform: translateY(-15px); }
                        }
                        @keyframes imageShine {
                            0% { left: -100%; }
                            100% { left: 100%; }
                        }
                        .animated-image {
                            animation: imageFloat 3s ease-in-out infinite;
                            position: relative;
                            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.1));
                        }
                        .animated-image::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: -100%;
                            width: 50%;
                            height: 100%;
                            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
                            animation: imageShine 3s ease-in-out infinite;
                            z-index: 1;
                        }
                    </style>
                    <img src="{{ asset('images/orang1.png') }}" alt="VIREXA Team" class="w-full h-auto animated-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animated Illustration Section -->
<section class="py-24 bg-gradient-to-br from-accent via-accent-dark to-primary text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Side - Animated Illustration -->
            <div class="relative h-96">
                <style>
                    @keyframes float {
                        0%, 100% { transform: translateY(0px); }
                        50% { transform: translateY(-20px); }
                    }
                    @keyframes pulse-slow {
                        0%, 100% { opacity: 1; }
                        50% { opacity: 0.5; }
                    }
                    @keyframes rotate {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }
                    @keyframes bounce-slow {
                        0%, 100% { transform: translateY(0); }
                        50% { transform: translateY(-10px); }
                    }
                    @keyframes wiggle {
                        0%, 100% { transform: rotate(-3deg); }
                        50% { transform: rotate(3deg); }
                    }
                    @keyframes doodle-walk {
                        0% { left: -100px; opacity: 0; }
                        15% { left: 20%; opacity: 1; }
                        45% { left: 20%; }
                        55% { left: 20%; }
                        85% { left: 20%; }
                        100% { left: 110%; opacity: 0; }
                    }
                    @keyframes love-pop {
                        0% { transform: scale(0) translateY(0); opacity: 0; }
                        50% { transform: scale(0) translateY(0); opacity: 0; }
                        55% { transform: scale(1.5) translateY(-20px); opacity: 1; }
                        70% { transform: scale(1) translateY(-40px); opacity: 1; }
                        85% { transform: scale(0.8) translateY(-60px); opacity: 0; }
                        100% { transform: scale(0) translateY(-80px); opacity: 0; }
                    }
                    @keyframes walk-cycle {
                        0%, 100% { transform: translateY(0px); }
                        50% { transform: translateY(-5px); }
                    }
                    @keyframes amongus-walk {
                        0% { right: -100px; opacity: 1; transform: scale(1); }
                        15% { right: 30%; opacity: 1; transform: scale(1); }
                        35% { right: 30%; opacity: 1; transform: scale(1); }
                        50% { right: 80%; opacity: 1; transform: scale(1); }
                        55% { right: 80%; opacity: 1; transform: scale(1); }
                        60% { right: 80%; opacity: 1; transform: scale(0.8); }
                        65% { right: 80%; opacity: 0.7; transform: scale(0.5); }
                        70% { right: 80%; opacity: 0; transform: scale(0.1); }
                        100% { right: 80%; opacity: 0; transform: scale(0); }
                    }
                    @keyframes amongus-waddle {
                        0%, 100% { transform: translateY(0px) rotate(0deg); }
                        25% { transform: translateY(-3px) rotate(-5deg); }
                        75% { transform: translateY(-3px) rotate(5deg); }
                    }
                    @keyframes sus-pop {
                        0% { transform: scale(0) translateY(0); opacity: 0; }
                        35% { transform: scale(0) translateY(0); opacity: 0; }
                        38% { transform: scale(1.5) translateY(-20px); opacity: 1; }
                        42% { transform: scale(1) translateY(-40px); opacity: 1; }
                        46% { transform: scale(0.8) translateY(-60px); opacity: 0; }
                        100% { transform: scale(0) translateY(-80px); opacity: 0; }
                    }
                    @keyframes vent-appear {
                        0% { opacity: 0; transform: scale(0.8); }
                        30% { opacity: 0; transform: scale(0.8); }
                        35% { opacity: 1; transform: scale(1); }
                        70% { opacity: 1; transform: scale(1); }
                        75% { opacity: 0; transform: scale(0.8); }
                        100% { opacity: 0; transform: scale(0.8); }
                    }
                    .float-animation { animation: float 3s ease-in-out infinite; }
                    .float-animation-delay { animation: float 4s ease-in-out infinite; animation-delay: 0.5s; }
                    .pulse-animation { animation: pulse-slow 2s ease-in-out infinite; }
                    .rotate-animation { animation: rotate 20s linear infinite; }
                    .bounce-animation { animation: bounce-slow 2s ease-in-out infinite; }
                    .wiggle-animation { animation: wiggle 1s ease-in-out infinite; }
                    .doodle-character { animation: doodle-walk 12s ease-in-out infinite; }
                    .love-emoji { animation: love-pop 12s ease-in-out infinite; }
                    .walk-animation { animation: walk-cycle 0.5s ease-in-out infinite; }
                    .amongus-character { animation: amongus-walk 14s ease-in-out infinite; animation-delay: 3s; }
                    .amongus-waddle { animation: amongus-waddle 0.6s ease-in-out infinite; }
                    .sus-emoji { animation: sus-pop 14s ease-in-out infinite; animation-delay: 3s; }
                    .vent-animation { animation: vent-appear 14s ease-in-out infinite; animation-delay: 3s; }
                </style>
                
                <!-- Doodle Character Walking -->
                <div class="absolute bottom-10 doodle-character" style="z-index: 100;">
                    <div class="relative walk-animation">
                        <!-- Doodle Body -->
                        <svg width="60" height="80" viewBox="0 0 60 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Head -->
                            <circle cx="30" cy="20" r="15" fill="#FFD93D" stroke="#000" stroke-width="2"/>
                            <!-- Eyes -->
                            <circle cx="25" cy="18" r="2" fill="#000"/>
                            <circle cx="35" cy="18" r="2" fill="#000"/>
                            <!-- Smile -->
                            <path d="M 23 24 Q 30 28 37 24" stroke="#000" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <!-- Body -->
                            <rect x="20" y="35" width="20" height="25" rx="5" fill="#6BCB77" stroke="#000" stroke-width="2"/>
                            <!-- Arms -->
                            <line x1="20" y1="40" x2="10" y2="50" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="40" y1="40" x2="50" y2="50" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <!-- Legs -->
                            <line x1="25" y1="60" x2="20" y2="75" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="35" y1="60" x2="40" y2="75" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <!-- Love Emoji Pop -->
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 text-4xl love-emoji">
                            ❤️
                        </div>
                    </div>
                </div>
                
                <!-- Doodle Character with Laptop (Right to Left) -->
                <div class="absolute bottom-10" style="z-index: 100; animation: doodle-walk-reverse 15s ease-in-out infinite; animation-delay: 5s;">
                    <style>
                        @keyframes doodle-walk-reverse {
                            0% { right: -100px; opacity: 0; }
                            15% { right: 25%; opacity: 1; }
                            45% { right: 25%; }
                            55% { right: 25%; }
                            85% { right: 25%; }
                            100% { right: 110%; opacity: 0; }
                        }
                        @keyframes star-pop {
                            0% { transform: scale(0) translateY(0); opacity: 0; }
                            50% { transform: scale(0) translateY(0); opacity: 0; }
                            55% { transform: scale(1.5) translateY(-20px); opacity: 1; }
                            70% { transform: scale(1) translateY(-40px); opacity: 1; }
                            85% { transform: scale(0.8) translateY(-60px); opacity: 0; }
                            100% { transform: scale(0) translateY(-80px); opacity: 0; }
                        }
                        .star-emoji { animation: star-pop 15s ease-in-out infinite; animation-delay: 5s; }
                    </style>
                    <div class="relative walk-animation">
                        <svg width="70" height="80" viewBox="0 0 70 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Head -->
                            <circle cx="35" cy="20" r="15" fill="#FF6B9D" stroke="#000" stroke-width="2"/>
                            <!-- Eyes -->
                            <circle cx="30" cy="18" r="2" fill="#000"/>
                            <circle cx="40" cy="18" r="2" fill="#000"/>
                            <!-- Smile -->
                            <path d="M 28 24 Q 35 28 42 24" stroke="#000" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <!-- Body -->
                            <rect x="25" y="35" width="20" height="25" rx="5" fill="#4ECDC4" stroke="#000" stroke-width="2"/>
                            <!-- Laptop in hands -->
                            <rect x="15" y="42" width="40" height="25" rx="2" fill="#95E1D3" stroke="#000" stroke-width="2"/>
                            <rect x="17" y="44" width="36" height="18" fill="#38B2AC" stroke="#000" stroke-width="1"/>
                            <!-- Arms holding laptop -->
                            <line x1="25" y1="40" x2="15" y2="50" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="45" y1="40" x2="55" y2="50" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <!-- Legs -->
                            <line x1="30" y1="60" x2="25" y2="75" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                            <line x1="40" y1="60" x2="45" y2="75" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <!-- Star Emoji Pop -->
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 text-4xl star-emoji">
                            ⭐
                        </div>
                    </div>
                </div>
                
                <!-- Among Us Character (Right to Left) -->
                <div class="absolute bottom-10 amongus-character" style="z-index: 100;">
                    <div class="relative amongus-waddle">
                        <svg width="90" height="100" viewBox="0 0 90 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Body (Bean Shape) - More detailed -->
                            <path d="M 45 25 Q 25 25 20 45 Q 18 60 20 70 Q 22 80 30 85 Q 40 90 50 90 Q 60 90 70 85 Q 78 80 80 70 Q 82 60 80 45 Q 75 25 55 25 Q 50 23 45 25 Z" 
                                  fill="#C0392B" stroke="#8B0000" stroke-width="3"/>
                            
                            <!-- Body Shadow/Depth -->
                            <ellipse cx="50" cy="60" rx="22" ry="28" fill="#A93226" opacity="0.3"/>
                            
                            <!-- Backpack - More detailed -->
                            <rect x="65" y="40" width="18" height="35" rx="6" fill="#A93226" stroke="#8B0000" stroke-width="2.5"/>
                            <rect x="68" y="45" width="12" height="8" rx="2" fill="#8B0000" opacity="0.5"/>
                            <rect x="68" y="58" width="12" height="8" rx="2" fill="#8B0000" opacity="0.5"/>
                            
                            <!-- Visor (Glass) - More detailed -->
                            <ellipse cx="40" cy="40" rx="22" ry="18" fill="#5DADE2" stroke="#2E86AB" stroke-width="3"/>
                            <ellipse cx="40" cy="40" rx="19" ry="15" fill="#87CEEB"/>
                            <ellipse cx="40" cy="40" rx="16" ry="12" fill="#AED6F1" opacity="0.7"/>
                            
                            <!-- Visor Shine - Multiple layers -->
                            <ellipse cx="33" cy="34" rx="8" ry="6" fill="white" opacity="0.9"/>
                            <ellipse cx="35" cy="36" rx="4" ry="3" fill="white" opacity="0.6"/>
                            <circle cx="48" cy="42" r="3" fill="white" opacity="0.4"/>
                            
                            <!-- Visor Frame Detail -->
                            <path d="M 18 40 Q 18 25 40 25 Q 62 25 62 40" stroke="#2E86AB" stroke-width="2" fill="none"/>
                            
                            <!-- Legs - More detailed -->
                            <rect x="30" y="85" width="14" height="12" rx="4" fill="#A93226" stroke="#8B0000" stroke-width="2.5"/>
                            <rect x="56" y="85" width="14" height="12" rx="4" fill="#A93226" stroke="#8B0000" stroke-width="2.5"/>
                            
                            <!-- Leg shadows -->
                            <rect x="32" y="88" width="10" height="6" rx="2" fill="#8B0000" opacity="0.3"/>
                            <rect x="58" y="88" width="10" height="6" rx="2" fill="#8B0000" opacity="0.3"/>
                            
                            <!-- Shadow under character -->
                            <ellipse cx="50" cy="98" rx="30" ry="4" fill="#000" opacity="0.25"/>
                        </svg>
                        <!-- SUS Emoji Pop -->
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 text-4xl sus-emoji">
                            😱
                        </div>
                    </div>
                </div>
                
                <!-- Ventilation Vent -->
                <div class="absolute bottom-8 vent-animation" style="right: 80%; z-index: 99;">
                    <svg width="100" height="80" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Vent Base -->
                        <rect x="10" y="20" width="80" height="60" rx="8" fill="#2C3E50" stroke="#1A252F" stroke-width="3"/>
                        
                        <!-- Vent Inner Shadow -->
                        <rect x="15" y="25" width="70" height="50" rx="6" fill="#1A252F"/>
                        
                        <!-- Vent Grill Lines -->
                        <line x1="20" y1="35" x2="80" y2="35" stroke="#34495E" stroke-width="3"/>
                        <line x1="20" y1="45" x2="80" y2="45" stroke="#34495E" stroke-width="3"/>
                        <line x1="20" y1="55" x2="80" y2="55" stroke="#34495E" stroke-width="3"/>
                        <line x1="20" y1="65" x2="80" y2="65" stroke="#34495E" stroke-width="3"/>
                        
                        <!-- Vent Screws -->
                        <circle cx="20" cy="30" r="3" fill="#7F8C8D" stroke="#5D6D7E" stroke-width="1"/>
                        <circle cx="80" cy="30" r="3" fill="#7F8C8D" stroke="#5D6D7E" stroke-width="1"/>
                        <circle cx="20" cy="70" r="3" fill="#7F8C8D" stroke="#5D6D7E" stroke-width="1"/>
                        <circle cx="80" cy="70" r="3" fill="#7F8C8D" stroke="#5D6D7E" stroke-width="1"/>
                        
                        <!-- Screw details (X marks) -->
                        <line x1="18" y1="28" x2="22" y2="32" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="22" y1="28" x2="18" y2="32" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="78" y1="28" x2="82" y2="32" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="82" y1="28" x2="78" y2="32" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="18" y1="68" x2="22" y2="72" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="22" y1="68" x2="18" y2="72" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="78" y1="68" x2="82" y2="72" stroke="#5D6D7E" stroke-width="1"/>
                        <line x1="82" y1="68" x2="78" y2="72" stroke="#5D6D7E" stroke-width="1"/>
                        
                        <!-- Vent Depth/Darkness -->
                        <rect x="25" y="30" width="50" height="40" rx="4" fill="#000" opacity="0.4"/>
                        
                        <!-- Highlight on edge -->
                        <line x1="15" y1="25" x2="85" y2="25" stroke="#4A5F7F" stroke-width="2" opacity="0.5"/>
                    </svg>
                </div>
                

                <!-- Laptop -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 float-animation">
                    <div class="w-64 h-40 bg-gray-800 rounded-lg shadow-2xl relative">
                        <div class="w-full h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-t-lg p-4 overflow-hidden">
                            <!-- Chart Animation -->
                            <div class="flex items-end justify-between h-full gap-1">
                                <div class="w-4 bg-white rounded-t pulse-animation" style="height: 60%;"></div>
                                <div class="w-4 bg-white rounded-t pulse-animation" style="height: 80%; animation-delay: 0.2s;"></div>
                                <div class="w-4 bg-white rounded-t pulse-animation" style="height: 40%; animation-delay: 0.4s;"></div>
                                <div class="w-4 bg-white rounded-t pulse-animation" style="height: 90%; animation-delay: 0.6s;"></div>
                                <div class="w-4 bg-white rounded-t pulse-animation" style="height: 70%; animation-delay: 0.8s;"></div>
                            </div>
                        </div>
                        <div class="h-8 bg-gray-700 rounded-b-lg"></div>
                        <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-32 h-2 bg-gray-600 rounded-full"></div>
                    </div>
                </div>
                
                <!-- Mobile Phone -->
                <div class="absolute top-1/4 right-1/4 float-animation-delay">
                    <div class="w-20 h-36 bg-gray-800 rounded-2xl shadow-xl p-1">
                        <div class="w-full h-full bg-gradient-to-br from-green-400 to-blue-500 rounded-xl p-2 flex flex-col items-center justify-center">
                            <!-- Emoji Animation -->
                            <div class="text-3xl bounce-animation">😊</div>
                            <div class="mt-2 space-y-1">
                                <div class="h-1 bg-white rounded w-12 pulse-animation"></div>
                                <div class="h-1 bg-white rounded w-8 pulse-animation" style="animation-delay: 0.3s;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tablet -->
                <div class="absolute bottom-1/4 left-1/4 float-animation" style="animation-delay: 1s;">
                    <div class="w-32 h-24 bg-gray-800 rounded-lg shadow-xl p-1">
                        <div class="w-full h-full bg-gradient-to-br from-pink-400 to-red-500 rounded-lg p-2 flex items-center justify-center">
                            <!-- Heart Animation -->
                            <div class="text-4xl wiggle-animation">❤️</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Icons - More -->
                <div class="absolute top-10 left-10 w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg float-animation">
                    <span class="text-2xl">💡</span>
                </div>
                
                <div class="absolute top-20 right-10 w-12 h-12 bg-green-400 rounded-full flex items-center justify-center shadow-lg float-animation-delay">
                    <span class="text-2xl">✅</span>
                </div>
                
                <div class="absolute bottom-10 right-20 w-12 h-12 bg-purple-400 rounded-full flex items-center justify-center shadow-lg float-animation" style="animation-delay: 1.5s;">
                    <span class="text-2xl">📧</span>
                </div>
                
                <div class="absolute bottom-20 left-10 w-12 h-12 bg-red-400 rounded-full flex items-center justify-center shadow-lg float-animation" style="animation-delay: 2s;">
                    <span class="text-2xl">🚀</span>
                </div>
                
                <div class="absolute top-32 right-32 w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center shadow-lg float-animation-delay">
                    <span class="text-2xl">⭐</span>
                </div>
                
                <div class="absolute bottom-32 right-10 w-12 h-12 bg-orange-400 rounded-full flex items-center justify-center shadow-lg float-animation" style="animation-delay: 0.8s;">
                    <span class="text-2xl">🎯</span>
                </div>
                
                <!-- Rotating Circles -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 border-4 border-dashed border-white opacity-20 rounded-full rotate-animation"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 border-4 border-dotted border-white opacity-10 rounded-full rotate-animation" style="animation-direction: reverse;"></div>
                
                <!-- Floating Dots -->
                <div class="absolute top-16 left-20 w-3 h-3 bg-white rounded-full pulse-animation"></div>
                <div class="absolute top-40 right-16 w-3 h-3 bg-white rounded-full pulse-animation" style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-16 left-32 w-3 h-3 bg-white rounded-full pulse-animation" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-32 right-24 w-3 h-3 bg-white rounded-full pulse-animation" style="animation-delay: 1.5s;"></div>
            </div>
            
            <!-- Right Side - Content -->
            <div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">
                    VIREXA.ID Digital Indonesia
                </h2>
                <p class="text-xl text-blue-100 leading-relaxed mb-8">
                    Jasa pembuatan website profesional yang melayani area Jakarta, Surabaya, Sidoarjo, Bandung, Malang, Depok, Bekasi, Tangerang, Bali, Medan, Palembang, dan kota-kota besar lainnya di seluruh Indonesia.
                </p>
                <p class="text-lg text-blue-100 leading-relaxed mb-8">
                    Hadir dengan desain modern, fitur lengkap, dan harga terjangkau untuk kebutuhan bisnis Anda!
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center bg-white text-accent px-8 py-4 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                    Pelajari Lebih Lanjut
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Layanan Unggulan Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Solusi digital lengkap yang terbukti meningkatkan omzet dan efisiensi bisnis Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Pengembangan Website</h3>
                <p class="text-gray-600 leading-relaxed">Website profesional yang menarik pelanggan dan meningkatkan penjualan online Anda</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">SEO & Optimasi</h3>
                <p class="text-gray-600 leading-relaxed">Tingkatkan ranking Google dan traffic organik website Anda dengan strategi SEO terbukti</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Google Ads</h3>
                <p class="text-gray-600 leading-relaxed">Iklan berbayar yang menghasilkan leads berkualitas dan ROI maksimal untuk bisnis Anda</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Sistem Bisnis Digital</h3>
                <p class="text-gray-600 leading-relaxed">Sistem terintegrasi yang mengotomatisasi proses bisnis dan menghemat waktu operasional</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Desain UI/UX</h3>
                <p class="text-gray-600 leading-relaxed">Desain yang memikat dan mudah digunakan, membuat pelanggan betah berlama-lama</p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-semibold mb-4 text-primary">Perawatan & Support</h3>
                <p class="text-gray-600 leading-relaxed">Jaminan website selalu aman, cepat, dan berfungsi optimal 24/7 tanpa gangguan</p>
            </div>
        </div>
        
        <div class="text-center mt-16">
            <a href="{{ route('services') }}" class="bg-accent text-white px-10 py-5 rounded-xl text-lg font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">
                Pelajari Semua Layanan
            </a>
        </div>
    </div>
</section>

<!-- Why Choose VIREXA Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes iconPulse {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.1);
                }
            }
            @keyframes iconRotate {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .why-card-1 {
                animation: fadeInUp 0.8s ease-out 0.2s both;
            }
            .why-card-2 {
                animation: fadeInUp 0.8s ease-out 0.4s both;
            }
            .why-card-3 {
                animation: fadeInUp 0.8s ease-out 0.6s both;
            }
            .why-card:hover .icon-wrapper {
                animation: iconPulse 0.6s ease-in-out;
            }
            .icon-rotate-hover:hover {
                animation: iconRotate 0.8s ease-in-out;
            }
        </style>
        
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Mengapa Memilih VIREXA.ID?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                VIREXA.ID siap menjadi solusi digital terpercaya untuk bisnis Anda!
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            <!-- Tim Berpengalaman -->
            <div class="why-card why-card-1 bg-gradient-to-br from-gray-50 to-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100">
                <div class="flex justify-center mb-8">
                    <div class="icon-wrapper w-24 h-24 rounded-full bg-gradient-to-br from-accent to-accent-dark flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center">Tim Berpengalaman</h3>
                <p class="text-gray-600 leading-relaxed text-center">
                    Tim ahli kami dalam digital marketing dan pengembangan website yang andal
                </p>
            </div>
            
            <!-- Hasil Terukur -->
            <div class="why-card why-card-2 bg-gradient-to-br from-gray-50 to-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100">
                <div class="flex justify-center mb-8">
                    <div class="icon-wrapper icon-rotate-hover w-24 h-24 rounded-full bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center">Hasil Terukur</h3>
                <p class="text-gray-600 leading-relaxed text-center">
                    Semua layanan dirancang untuk memberdayakan ROI (Return on Investment) terbaik
                </p>
            </div>
            
            <!-- Dukungan Jangka Panjang -->
            <div class="why-card why-card-3 bg-gradient-to-br from-gray-50 to-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100">
                <div class="flex justify-center mb-8">
                    <div class="icon-wrapper w-24 h-24 rounded-full bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center">Dukungan Jangka Panjang</h3>
                <p class="text-gray-600 leading-relaxed text-center">
                    Kami memastikan bisnis Anda tetap kompetitif di pasar online
                </p>
            </div>
        </div>
        
        <div class="text-center mt-16">
            <p class="text-2xl font-heading font-bold text-primary mb-8">
                VIREXA.ID siap menjadi solusi digital terpercaya untuk bisnis Anda!
            </p>
            <a href="{{ route('contact') }}" class="bg-accent text-white px-10 py-5 rounded-xl text-lg font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Pricing Packages Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <style>
            @keyframes fadeInUpPrice {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes priceFloat {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }
            @keyframes rotateGlow {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            @keyframes shimmer {
                0% {
                    background-position: -200% center;
                }
                100% {
                    background-position: 200% center;
                }
            }
            @keyframes shimmer-subtle {
                0% {
                    background-position: -200% center;
                }
                100% {
                    background-position: 200% center;
                }
            }
            @keyframes pulse-glow {
                0%, 100% {
                    box-shadow: 0 0 20px rgba(255, 215, 0, 0.5), 0 0 40px rgba(255, 215, 0, 0.3), 0 0 60px rgba(255, 215, 0, 0.2);
                }
                50% {
                    box-shadow: 0 0 30px rgba(255, 215, 0, 0.8), 0 0 60px rgba(255, 215, 0, 0.5), 0 0 90px rgba(255, 215, 0, 0.3);
                }
            }
            .price-card-1 {
                animation: fadeInUpPrice 0.8s ease-out 0.1s both;
            }
            .price-card-1:hover {
                box-shadow: 0 0 30px rgba(156, 163, 175, 0.4);
            }
            .price-card-2 {
                animation: fadeInUpPrice 0.8s ease-out 0.2s both;
            }
            .price-card-3 {
                animation: fadeInUpPrice 0.8s ease-out 0.3s both;
            }
            .price-card-3:hover {
                box-shadow: 0 0 30px rgba(6, 182, 212, 0.4);
            }
            .price-card-4 {
                animation: fadeInUpPrice 0.8s ease-out 0.4s both;
            }
            .price-card-4:hover {
                box-shadow: 0 0 30px rgba(168, 85, 247, 0.4);
            }
            .price-card:hover {
                transform: translateY(-8px);
            }
            .price-featured {
                animation: fadeInUpPrice 0.8s ease-out 0.2s both, priceFloat 3s ease-in-out infinite, pulse-glow 2s ease-in-out infinite;
                position: relative;
                overflow: hidden;
            }
            .price-featured::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: conic-gradient(
                    transparent,
                    rgba(255, 215, 0, 0.3),
                    transparent 30%
                );
                animation: rotateGlow 4s linear infinite;
            }
            .price-featured::after {
                content: '';
                position: absolute;
                top: 3px;
                left: 3px;
                right: 3px;
                bottom: 3px;
                background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
                border-radius: 1.5rem;
                z-index: -1;
            }
            .shimmer-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(
                    90deg,
                    transparent 0%,
                    rgba(255, 255, 255, 0.3) 50%,
                    transparent 100%
                );
                background-size: 200% 100%;
                animation: shimmer 3s ease-in-out infinite;
                border-radius: 1.5rem;
                pointer-events: none;
            }
            .shimmer-overlay-subtle {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(
                    90deg,
                    transparent 0%,
                    rgba(255, 255, 255, 0.15) 50%,
                    transparent 100%
                );
                background-size: 200% 100%;
                animation: shimmer-subtle 4s ease-in-out infinite;
                border-radius: 1.5rem;
                pointer-events: none;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            .price-card:hover .shimmer-overlay-subtle {
                opacity: 1;
            }
        </style>
        
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Paket Jasa Website</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Pilih Paket Untuk Bisnis Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Paket Silver -->
            <div class="price-card price-card-1 bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-200" style="position: relative; overflow: hidden;">
                <!-- Shimmer Effect on Hover -->
                <div class="shimmer-overlay-subtle"></div>
                
                <div class="flex justify-center mb-6" style="position: relative; z-index: 1;">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-gray-400 to-gray-600 flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center" style="position: relative; z-index: 1;">Paket Silver</h3>
                <p class="text-gray-600 text-center mb-6 text-sm leading-relaxed" style="position: relative; z-index: 1;">
                    Paket ini cocok untuk Anda yang baru memulai bisnis dan membutuhkan website sederhana yang praktis
                </p>
                <div class="text-center mb-6" style="position: relative; z-index: 1;">
                    <span class="text-3xl font-bold text-primary">IDR 700K</span>
                </div>
                <button onclick="openChatWidget()" class="w-full bg-primary text-white py-3 rounded-xl font-semibold hover:bg-primary-dark transition-all duration-200 mb-4" style="position: relative; z-index: 1;">
                    Detail Paket
                </button>
                <p class="text-xs text-gray-500 text-center mb-4" style="position: relative; z-index: 1;">Perpanjangan 500rb/tahun</p>
                <a href="https://wa.me/6285955369598?text=Halo%20VIREXA.ID,%20saya%20tertarik%20dengan%20Paket%20Silver" target="_blank" class="w-full bg-accent text-white py-3 rounded-xl font-semibold hover:bg-accent-dark transition-all duration-200 flex items-center justify-center gap-2" style="position: relative; z-index: 1;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Book Now
                </a>
            </div>
            
            <!-- Paket Gold (Featured) -->
            <div class="price-card price-featured bg-gradient-to-br from-accent to-accent-dark p-8 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-300 border-2 border-accent transform lg:-translate-y-4">
                <!-- Shimmer Overlay -->
                <div class="shimmer-overlay"></div>
                
                <div class="flex justify-center mb-6" style="position: relative; z-index: 1;">
                    <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-white mb-4 text-center" style="position: relative; z-index: 1;">Paket Gold</h3>
                <p class="text-blue-100 text-center mb-6 text-sm leading-relaxed" style="position: relative; z-index: 1;">
                    Paket ini ideal untuk Anda yang membutuhkan website dengan fitur lengkap seperti e-commerce, blog, dan lainnya
                </p>
                <div class="text-center mb-6" style="position: relative; z-index: 1;">
                    <span class="text-3xl font-bold text-white">IDR 1,6JUTA</span>
                </div>
                <button onclick="openChatWidget()" class="w-full bg-white text-accent py-3 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-200 mb-4" style="position: relative; z-index: 1;">
                    Detail Paket
                </button>
                <p class="text-xs text-blue-100 text-center mb-4" style="position: relative; z-index: 1;">Perpanjangan 600rb/tahun</p>
                <a href="https://wa.me/6285955369598?text=Halo%20VIREXA.ID,%20saya%20tertarik%20dengan%20Paket%20Gold" target="_blank" class="w-full bg-yellow-400 text-primary py-3 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-200 flex items-center justify-center gap-2" style="position: relative; z-index: 1;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Book Now
                </a>
            </div>
            
            <!-- Paket Diamond -->
            <div class="price-card price-card-3 bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-200" style="position: relative; overflow: hidden;">
                <!-- Shimmer Effect on Hover -->
                <div class="shimmer-overlay-subtle"></div>
                
                <div class="flex justify-center mb-6" style="position: relative; z-index: 1;">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-cyan-400 to-blue-600 flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center" style="position: relative; z-index: 1;">Paket Diamond</h3>
                <p class="text-gray-600 text-center mb-6 text-sm leading-relaxed" style="position: relative; z-index: 1;">
                    Paket ini cocok untuk Anda yang membutuhkan website profil bisnis untuk meningkatkan kredibilitas online
                </p>
                <div class="text-center mb-6" style="position: relative; z-index: 1;">
                    <span class="text-3xl font-bold text-primary">IDR 2JUTA</span>
                </div>
                <button onclick="openChatWidget()" class="w-full bg-primary text-white py-3 rounded-xl font-semibold hover:bg-primary-dark transition-all duration-200 mb-4" style="position: relative; z-index: 1;">
                    Detail Paket
                </button>
                <p class="text-xs text-gray-500 text-center mb-4" style="position: relative; z-index: 1;">Perpanjangan 1juta/tahun</p>
                <a href="https://wa.me/6285955369598?text=Halo%20VIREXA.ID,%20saya%20tertarik%20dengan%20Paket%20Diamond" target="_blank" class="w-full bg-accent text-white py-3 rounded-xl font-semibold hover:bg-accent-dark transition-all duration-200 flex items-center justify-center gap-2" style="position: relative; z-index: 1;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Book Now
                </a>
            </div>
            
            <!-- Paket Platinum -->
            <div class="price-card price-card-4 bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-200" style="position: relative; overflow: hidden;">
                <!-- Shimmer Effect on Hover -->
                <div class="shimmer-overlay-subtle"></div>
                
                <div class="flex justify-center mb-6" style="position: relative; z-index: 1;">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-4 text-center" style="position: relative; z-index: 1;">Paket Platinum</h3>
                <p class="text-gray-600 text-center mb-6 text-sm leading-relaxed" style="position: relative; z-index: 1;">
                    Paket ini ideal untuk Anda yang membutuhkan website dengan fitur kompleks dan desain yang unik serta menarik
                </p>
                <div class="text-center mb-6" style="position: relative; z-index: 1;">
                    <span class="text-3xl font-bold text-primary">IDR 3JUTA</span>
                </div>
                <button onclick="openChatWidget()" class="w-full bg-primary text-white py-3 rounded-xl font-semibold hover:bg-primary-dark transition-all duration-200 mb-4" style="position: relative; z-index: 1;">
                    Detail Paket
                </button>
                <p class="text-xs text-gray-500 text-center mb-4" style="position: relative; z-index: 1;">Perpanjangan 50% per tahun</p>
                <a href="https://wa.me/6285955369598?text=Halo%20VIREXA.ID,%20saya%20tertarik%20dengan%20Paket%20Platinum" target="_blank" class="w-full bg-accent text-white py-3 rounded-xl font-semibold hover:bg-accent-dark transition-all duration-200 flex items-center justify-center gap-2" style="position: relative; z-index: 1;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function openChatWidget() {
    // Buka chat widget
    const chatButton = document.getElementById('chatButton');
    const chatBox = document.getElementById('chatBox');
    if (chatBox && chatBox.classList.contains('hidden')) {
        chatBox.classList.remove('hidden');
        chatBox.classList.add('flex');
    }
}
</script>

<!-- Portfolio Preview -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-primary mb-6 tracking-tight">Proyek Unggulan</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
                Lihat bagaimana kami membantu klien mencapai kesuksesan dengan solusi digital yang tepat
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <a href="{{ route('portfolio.ecommerce') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group cursor-pointer">
                <div class="h-56 overflow-hidden relative">
                    <img src="{{ asset('images/ecomers.jpeg') }}" alt="Platform E-Commerce" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-3 text-primary group-hover:text-accent transition-colors">Platform E-Commerce</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Marketplace modern yang meningkatkan penjualan online hingga 300% dalam 6 bulan</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">Vue.js</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">MySQL</span>
                    </div>
                    <div class="flex items-center text-accent font-semibold group-hover:translate-x-2 transition-transform">
                        Lihat Gallery
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('portfolio.web-portfolio') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group cursor-pointer">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('images/arsi.png') }}" alt="Web Portofolio" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-3 text-primary group-hover:text-accent transition-colors">Web Portofolio</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Tampilkan karya terbaik Anda dengan portofolio online yang elegan dan profesional, menarik klien potensial dengan desain yang memukau</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">Bootstrap</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">PostgreSQL</span>
                    </div>
                    <div class="flex items-center text-accent font-semibold group-hover:translate-x-2 transition-transform">
                        Lihat Gallery
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('portfolio.mobile-app') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group cursor-pointer">
                <div class="h-56 bg-gradient-to-br from-orange-500 to-red-600 relative overflow-hidden">
                    <img src="{{ asset('images/aplikasi_mobile.jpeg') }}" alt="Aplikasi Mobile" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-heading font-semibold mb-3 text-primary group-hover:text-accent transition-colors">Aplikasi Mobile</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Aplikasi yang memudahkan pelanggan berinteraksi dan meningkatkan loyalitas brand</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">React Native</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">Node.js</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium">MongoDB</span>
                    </div>
                    <div class="flex items-center text-accent font-semibold group-hover:translate-x-2 transition-transform">
                        Lihat Gallery
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="text-center mt-16">
            <a href="{{ route('portfolio') }}" class="bg-accent text-white px-10 py-5 rounded-xl text-lg font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">
                Lihat Semua Proyek
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-accent text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold mb-8 tracking-tight">Siap Mengembangkan Bisnis Anda?</h2>
        <p class="text-xl mb-12 text-blue-100 max-w-3xl mx-auto font-medium leading-relaxed">
            Jangan biarkan kompetitor unggul. Mulai transformasi digital bisnis Anda hari ini juga dengan konsultasi gratis.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-accent px-10 py-5 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                Konsultasi Gratis Sekarang
            </a>
            <a href="tel:+6285237648941" class="border-2 border-white text-white px-10 py-5 rounded-xl text-lg font-semibold hover:bg-white hover:text-accent transition-all duration-200">
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
</section>
@endsection