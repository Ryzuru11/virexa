<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'VIREXA Digital')</title>
    <meta name="description" content="@yield('description', 'VIREXA Digital - Agensi digital terpercaya yang membantu bisnis berkembang dengan website, sistem, dan aplikasi profesional')">
    <link rel="icon" type="image/png" href="{{ asset('images/virexa_icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A',
                        secondary: '#1E293B',
                        accent: '#3B82F6',
                        'accent-light': '#60A5FA',
                        'accent-dark': '#1D4ED8',
                        'gray-50': '#F8FAFC',
                        'gray-100': '#F1F5F9',
                        'gray-200': '#E2E8F0',
                        'gray-300': '#CBD5E1',
                        'gray-400': '#94A3B8',
                        'gray-500': '#64748B',
                        'gray-600': '#475569',
                        'gray-700': '#334155',
                        'gray-800': '#1E293B',
                        'gray-900': '#0F172A'
                    },
                    fontFamily: {
                        'heading': ['Poppins', 'sans-serif'],
                        'body': ['Inter', 'sans-serif']
                    },
                    fontSize: {
                        'xs': ['0.75rem', { lineHeight: '1rem' }],
                        'sm': ['0.875rem', { lineHeight: '1.25rem' }],
                        'base': ['1rem', { lineHeight: '1.5rem' }],
                        'lg': ['1.125rem', { lineHeight: '1.75rem' }],
                        'xl': ['1.25rem', { lineHeight: '1.75rem' }],
                        '2xl': ['1.5rem', { lineHeight: '2rem' }],
                        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
                        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
                        '5xl': ['3rem', { lineHeight: '1.1' }],
                        '6xl': ['3.75rem', { lineHeight: '1.1' }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 font-body">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-100 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/virexa_icon.png') }}" alt="VIREXA" class="h-24">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-10">
                        <a href="{{ route('home') }}" class="text-gray-700 hover:text-accent px-4 py-2 text-base font-medium transition-colors duration-200">Beranda</a>
                        <a href="{{ route('services') }}" class="text-gray-700 hover:text-accent px-4 py-2 text-base font-medium transition-colors duration-200">Layanan</a>
                        <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-accent px-4 py-2 text-base font-medium transition-colors duration-200">Portofolio</a>
                        <a href="{{ route('about') }}" class="text-gray-700 hover:text-accent px-4 py-2 text-base font-medium transition-colors duration-200">Tentang</a>
                        <a href="{{ route('contact') }}" class="bg-accent text-white px-6 py-3 rounded-xl text-base font-semibold hover:bg-accent-dark transition-all duration-200 shadow-lg hover:shadow-xl">Hubungi Kami</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-700 hover:text-accent">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Chat Widget with Form to Chat Interface -->
    <div id="chat-widget" class="fixed bottom-0 right-6 z-50">
        <!-- Chat Avatar Button -->
        <div id="chat-button" class="relative cursor-pointer">
            <div class="w-32 h-32 transition-all duration-300 hover:scale-105">
                <img src="{{ asset('images/cs_img.png') }}" alt="Customer Service" class="w-full h-full object-contain">
            </div>
            <!-- Online Status -->
            <div class="absolute top-2 right-2 w-5 h-5 bg-green-500 rounded-full border-2 border-white animate-pulse"></div>
        </div>
        
        <!-- Form Popup -->
        <div id="form-popup" class="hidden absolute bottom-32 right-0 bg-white rounded-xl shadow-xl w-80 p-4 border">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-primary">Mulai Percakapan</h4>
                <button id="close-form" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="bg-blue-50 p-3 rounded-lg mb-4">
                <p class="text-sm text-gray-700">Halo! 👋 Isi data singkat ini agar tim VIREXA bisa langsung bantu kebutuhanmu.</p>
            </div>
            
            <form id="chat-form" class="space-y-3">
                <select id="department" required class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-1 focus:ring-blue-500 text-gray-700">
                    <option value="">Pilih topik pertanyaan</option>
                    <option value="Konsultasi Website">🌐 Konsultasi Website</option>
                    <option value="Tanya Paket">📦 Tanya Paket</option>
                    <option value="Info Harga">💰 Info Harga</option>
                    <option value="Support Proyek">🔧 Support Proyek</option>
                    <option value="Lainnya">💬 Lainnya</option>
                </select>
                
                <input type="text" id="name" placeholder="Nama kamu" required class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-1 focus:ring-blue-500">
                
                <input type="email" id="email" placeholder="Alamat email" required class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-1 focus:ring-blue-500">
                
                <input type="tel" id="phone" placeholder="Nomor WhatsApp (08xxx)" required class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-1 focus:ring-blue-500">
                
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg text-sm font-semibold transition-colors">
                    MULAI CHAT
                </button>
            </form>
        </div>
        
        <!-- Chat Interface -->
        <div id="chat-interface" class="hidden absolute bottom-32 right-0 bg-white rounded-xl shadow-xl w-80 h-96 flex flex-col border">
            <!-- Chat Header -->
            <div class="bg-blue-500 text-white p-3 rounded-t-xl flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full overflow-hidden mr-2 flex-shrink-0">
                        <img src="{{ asset('images/cs_img.png') }}" alt="CS" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold text-sm">Tim VIREXA</h4>
                        <p class="text-xs opacity-90" id="cs-dept">Konsultasi</p>
                    </div>
                </div>
                <button id="close-chat" class="text-white hover:text-gray-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Chat Messages -->
            <div class="flex-1 p-3 overflow-y-auto bg-gray-50" id="chat-messages">
                <div class="text-center text-xs text-gray-400 mb-3">Hari ini</div>
                
                <!-- Pesan sambutan — diisi via JS setelah submit -->
                <div id="welcome-bubble" class="flex items-start mb-3">
                    <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                        <img src="{{ asset('images/cs_img.png') }}" alt="CS" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="bg-white rounded-lg p-2 shadow-sm text-sm mb-1" id="welcome-msg">
                            Halo! Terima kasih sudah menghubungi VIREXA. 😊
                        </div>
                        <div class="text-xs text-gray-400" id="welcome-time"></div>
                    </div>
                </div>

                <div class="flex items-start mb-3" id="waiting-bubble">
                    <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                        <img src="{{ asset('images/cs_img.png') }}" alt="CS" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="bg-white rounded-lg p-2 shadow-sm text-sm mb-1">
                            Tim kami akan segera merespons pesanmu. Silakan ketik pertanyaanmu di bawah ya!
                        </div>
                        <div class="text-xs text-gray-400" id="waiting-time"></div>
                    </div>
                </div>
            </div>
            
            <!-- Chat Input -->
            <div class="p-3 border-t bg-white rounded-b-xl">
                <div class="flex items-center gap-2">
                    <input type="text" id="chat-input" placeholder="Tulis pesan ..." class="flex-1 px-3 py-2 border rounded-lg text-sm focus:ring-1 focus:ring-blue-500 focus:outline-none">
                    <button id="send-message" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // =============================================
        // CHAT WIDGET
        // =============================================
        const chatButton     = document.getElementById('chat-button');
        const formPopup      = document.getElementById('form-popup');
        const chatInterface  = document.getElementById('chat-interface');
        const closeForm      = document.getElementById('close-form');
        const closeChat      = document.getElementById('close-chat');
        const chatForm       = document.getElementById('chat-form');
        const chatInput      = document.getElementById('chat-input');
        const sendMessageBtn = document.getElementById('send-message');
        const chatMessages   = document.getElementById('chat-messages');
        const deptSelect     = document.getElementById('department');

        let userData = {};

        // Auto-fill departemen berdasarkan halaman yang sedang dibuka
        (function autoFillDepartment() {
            const path = window.location.pathname;
            const params = new URLSearchParams(window.location.search);
            const topicParam = params.get('topik');

            // Prioritas: query string ?topik=... (dari tombol CTA di halaman)
            const topicMap = {
                'konsultasi': 'Konsultasi Website',
                'paket'     : 'Tanya Paket',
                'harga'     : 'Info Harga',
                'support'   : 'Support Proyek',
            };

            if (topicParam && topicMap[topicParam]) {
                deptSelect.value = topicMap[topicParam];
                return;
            }

            // Auto-fill berdasarkan URL halaman
            if (path.includes('/services') || path.includes('/layanan')) {
                deptSelect.value = 'Tanya Paket';
            } else if (path.includes('/portfolio') || path.includes('/portofolio')) {
                deptSelect.value = 'Konsultasi Website';
            } else if (path.includes('/contact') || path.includes('/kontak')) {
                deptSelect.value = 'Konsultasi Website';
            }
        })();

        // Buka form saat klik avatar
        chatButton.addEventListener('click', () => {
            if (!chatInterface.classList.contains('hidden')) return; // sudah di chat, tidak perlu buka form
            formPopup.classList.toggle('hidden');
        });

        // Tutup form
        closeForm.addEventListener('click', () => formPopup.classList.add('hidden'));

        // Tutup chat
        closeChat.addEventListener('click', () => {
            chatInterface.classList.add('hidden');
            stopPolling();
        });

        // Trigger buka chat dari tombol CTA eksternal (misal dari modal portfolio)
        document.addEventListener('open-chat', () => {
            formPopup.classList.remove('hidden');
            chatInterface.classList.add('hidden');
        });

        // Waktu sekarang format HH:MM
        function nowTime() {
            return new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
        }

        // Pesan sambutan dinamis berdasarkan topik
        function getWelcomeMessage(department, name) {
            const greetMap = {
                'Konsultasi Website': `Halo ${name}! 👋 Kami siap bantu konsultasi website untukmu. Ceritakan kebutuhanmu ya!`,
                'Tanya Paket'       : `Halo ${name}! 📦 Mau tanya soal paket layanan kami? Silakan ceritakan proyekmu!`,
                'Info Harga'        : `Halo ${name}! 💰 Kami akan bantu berikan informasi harga yang sesuai dengan kebutuhanmu.`,
                'Support Proyek'    : `Halo ${name}! 🔧 Tim support kami siap membantu. Ceritakan kendalamu!`,
                'Lainnya'           : `Halo ${name}! 😊 Ada yang bisa kami bantu? Langsung ceritakan saja!`,
            };
            return greetMap[department] || `Halo ${name}! Tim VIREXA siap membantu.`;
        }

        // Submit form identitas
        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = chatForm.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.textContent = 'MENGIRIM...';

            userData = {
                department : deptSelect.value,
                name       : document.getElementById('name').value.trim(),
                email      : document.getElementById('email').value.trim(),
                phone      : document.getElementById('phone').value.trim(),
            };

            try {
                const response = await fetch('{{ route("chat.submit-lead") }}', {
                    method : 'POST',
                    headers: {
                        'Content-Type' : 'application/json',
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}',
                        'Accept'       : 'application/json',
                    },
                    body: JSON.stringify(userData),
                });

                const result = await response.json();

                if (result.success) {
                    userData.conversationId = result.data.conversation_id;

                    // Update header & pesan sambutan
                    document.getElementById('cs-dept').textContent = userData.department;
                    const welcomeMsg = document.getElementById('welcome-msg');
                    welcomeMsg.textContent = getWelcomeMessage(userData.department, userData.name);
                    const now = nowTime();
                    document.getElementById('welcome-time').textContent = now;
                    document.getElementById('waiting-time').textContent  = now;

                    formPopup.classList.add('hidden');
                    chatInterface.classList.remove('hidden');
                    chatForm.reset();
                    startPolling();
                } else {
                    let msg = result.message || 'Gagal mengirim data. Silakan coba lagi.';
                    if (result.errors) {
                        const first = Object.values(result.errors)[0];
                        if (Array.isArray(first) && first.length > 0) msg = first[0];
                    }
                    alert(msg);
                }
            } catch (err) {
                console.error('Submit error:', err);
                alert('Terjadi kesalahan jaringan. Periksa koneksi internetmu dan coba lagi.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'MULAI CHAT';
            }
        });

        // Kirim pesan dalam chat
        async function sendChatMessage() {
            const message = chatInput.value.trim();
            if (!message || !userData.conversationId) return;

            chatInput.value = '';

            // Tampilkan pesan user (optimistic)
            const userBubble = document.createElement('div');
            userBubble.className = 'flex justify-end mb-3';
            userBubble.innerHTML = `
                <div class="text-right">
                    <div class="bg-blue-500 text-white rounded-lg p-2 shadow-sm text-sm mb-1 max-w-xs break-words">${escapeHtml(message)}</div>
                    <div class="text-xs text-gray-400">${nowTime()}</div>
                </div>`;
            chatMessages.appendChild(userBubble);
            chatMessages.scrollTop = chatMessages.scrollHeight;

            try {
                const response = await fetch('{{ route("chat.send-message") }}', {
                    method : 'POST',
                    headers: {
                        'Content-Type' : 'application/json',
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}',
                        'Accept'       : 'application/json',
                    },
                    body: JSON.stringify({
                        conversation_id : userData.conversationId,
                        message         : message,
                    }),
                });
                const result = await response.json();
                if (!result.success) console.error('Pesan gagal tersimpan:', result);
            } catch (err) {
                console.error('Kirim pesan error:', err);
            }
        }

        // Escape HTML untuk mencegah XSS di pesan
        function escapeHtml(text) {
            return text.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
        }

        sendMessageBtn.addEventListener('click', sendChatMessage);
        chatInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendChatMessage(); });

        // Polling pesan admin
        let pollingInterval = null;
        let lastMessageId   = 0;

        function startPolling() {
            if (pollingInterval) return;
            pollingInterval = setInterval(async () => {
                if (!userData.conversationId) return;
                try {
                    const res    = await fetch(`/api/chat/messages/${userData.conversationId}`);
                    const result = await res.json();
                    if (!result.success || !result.messages) return;

                    const newMsgs = result.messages.filter(m => m.sender_type === 'admin' && m.id > lastMessageId);
                    newMsgs.forEach(msg => {
                        const bubble = document.createElement('div');
                        bubble.className = 'flex items-start mb-3';
                        bubble.innerHTML = `
                            <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                                <img src="{{ asset('images/cs_img.png') }}" alt="CS" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="bg-white rounded-lg p-2 shadow-sm text-sm mb-1 max-w-xs break-words">${escapeHtml(msg.message)}</div>
                                <div class="text-xs text-gray-400">${new Date(msg.created_at).toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'})}</div>
                            </div>`;
                        chatMessages.appendChild(bubble);
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                        if (msg.id > lastMessageId) lastMessageId = msg.id;
                    });
                } catch (err) {
                    console.error('Polling error:', err);
                }
            }, 3000);
        }

        function stopPolling() {
            if (pollingInterval) { clearInterval(pollingInterval); pollingInterval = null; }
        }

        // Tutup widget saat klik di luar area
        document.addEventListener('click', (e) => {
            if (!document.getElementById('chat-widget').contains(e.target)) {
                formPopup.classList.add('hidden');
                // Tidak menutup chatInterface supaya percakapan tidak hilang saat klik di luar
            }
        });
    </script>

    <!-- Footer -->
    <footer class="bg-primary text-white py-16 relative overflow-hidden">
        <!-- Decorative Wave -->
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#F8FAFC"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mt-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="md:col-span-1">
                    <div class="mb-6">
                        <h3 class="text-3xl font-heading font-bold text-white mb-3">VIREXA.ID</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">Mewujudkan Ide Menjadi Keunggulan Digital</p>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mb-6">
                        <p class="text-gray-300 font-semibold mb-3">Find Us :</p>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-primary group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-primary group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-primary group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-accent transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-primary group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Privacy Button -->
                    <button class="bg-accent hover:bg-accent-dark text-white px-6 py-2 rounded-lg text-sm font-semibold transition-colors duration-200">
                        KEBIJAKAN PRIVASI
                    </button>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-xl font-heading font-bold mb-6">Kontak</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-accent mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Phone Number</p>
                                <a href="tel:+6285955369598" class="text-white hover:text-accent transition-colors">+62 859-5536-9598</a>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-accent mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Email</p>
                                <a href="mailto:support@virexa.id" class="text-white hover:text-accent transition-colors">support@virexa.id</a>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-accent mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                            <div>
                                <p class="text-gray-300 text-sm">Website</p>
                                <a href="https://www.virexa.id" class="text-white hover:text-accent transition-colors">www.virexa.id</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-xl font-heading font-bold mb-6">Layanan</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('services') }}#web-development" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Jasa Pembuatan Website
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#seo" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Jasa SEO Bergaransi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#google-ads" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Jasa Iklan Google Ads
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#mobile-app" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Jasa Pembuatan Aplikasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#social-media" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Jasa Sosial Media Ads
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Paket Website -->
                <div>
                    <h4 class="text-xl font-heading font-bold mb-6">Paket Website</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('services') }}#paket-silver" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Paket Silver
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#paket-gold" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Paket Gold
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#paket-diamond" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Paket Diamond
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#paket-platinum" class="text-gray-300 hover:text-accent transition-colors text-sm flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Paket Platinum
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-400 text-sm">&copy; 2025 PT Virexa Digital Indonesia. All Rights Reserved. Published by <a href="https://www.virexa.id" class="text-accent hover:text-accent-light">www.virexa.id</a></p>
            </div>
        </div>
    </footer>
</body>
</html>