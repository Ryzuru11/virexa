<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Chat - VIREXA</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            overflow: hidden;
        }
        
        .header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .btn-logout {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        
        .chat-container {
            display: flex;
            height: calc(100vh - 80px);
            margin: 20px;
            gap: 20px;
        }
        
        .conversations-panel {
            width: 380px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .conversations-header {
            padding: 24px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .conversations-header h2 {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
        }
        
        .conversations-list {
            overflow-y: auto;
            height: calc(100% - 80px);
        }
        
        .conversation-item {
            padding: 20px 24px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .conversation-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .conversation-item:hover {
            background: rgba(102, 126, 234, 0.05);
        }
        
        .conversation-item.active {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        }
        
        .conversation-item.active::before {
            transform: scaleY(1);
        }
        
        .conversation-name {
            font-weight: 600;
            margin-bottom: 6px;
            color: #1a1a1a;
            font-size: 15px;
        }
        
        .conversation-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }
        
        .conversation-dept {
            font-size: 12px;
            color: #667eea;
            font-weight: 500;
        }
        
        .conversation-preview {
            font-size: 13px;
            color: #666;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.4;
        }

        .conversation-item:hover .btn-delete-conv {
            opacity: 1;
        }

        .btn-delete-conv {
            opacity: 0;
            background: none;
            border: none;
            cursor: pointer;
            color: #e53e3e;
            padding: 4px 6px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            transition: all 0.2s;
            flex-shrink: 0;
            line-height: 1;
        }

        .btn-delete-conv:hover {
            background: rgba(229, 62, 62, 0.1);
        }
        
        .messages-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .messages-header {
            padding: 24px 30px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .messages-header strong {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
        }
        
        .messages-list {
            flex: 1;
            overflow-y: auto;
            padding: 30px;
            background: #fafafa;
        }
        
        .message {
            margin-bottom: 20px;
            display: flex;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .message.user {
            justify-content: flex-start;
        }
        
        .message.admin {
            justify-content: flex-end;
        }
        
        .message-bubble {
            max-width: 65%;
            padding: 14px 18px;
            border-radius: 18px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        
        .message.user .message-bubble {
            background: white;
            color: #1a1a1a;
            border-bottom-left-radius: 4px;
        }
        
        .message.admin .message-bubble {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-bottom-right-radius: 4px;
        }
        
        .message-text {
            line-height: 1.5;
            font-size: 14px;
        }
        
        .message-time {
            font-size: 11px;
            opacity: 0.6;
            margin-top: 6px;
            font-weight: 500;
        }
        
        .reply-form {
            padding: 24px 30px;
            background: white;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        /* Quick Reply Templates */
        .quick-replies {
            margin-bottom: 12px;
        }

        .quick-replies-label {
            font-size: 11px;
            font-weight: 600;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .quick-replies-list {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .quick-reply-btn {
            padding: 6px 12px;
            background: rgba(102, 126, 234, 0.08);
            border: 1px solid rgba(102, 126, 234, 0.25);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            color: #667eea;
            cursor: pointer;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .quick-reply-btn:hover {
            background: rgba(102, 126, 234, 0.18);
            border-color: #667eea;
            transform: translateY(-1px);
        }

        .quick-reply-btn:active {
            transform: translateY(0);
        }
        
        .reply-input-group {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        
        .reply-input {
            flex: 1;
            padding: 14px 20px;
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 16px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: #fafafa;
        }
        
        .reply-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }
        
        .btn-send {
            padding: 14px 28px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 16px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }
        
        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }
        
        .btn-send:active {
            transform: translateY(0);
        }
        
        .empty-state {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #999;
            font-size: 16px;
            font-weight: 500;
        }
        
        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        
        ::-webkit-scrollbar-thumb {
            background: rgba(102, 126, 234, 0.3);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(102, 126, 234, 0.5);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>💬 VIREXA Admin Chat</h1>
        <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
    
    <div class="chat-container">
        <div class="conversations-panel">
            <div class="conversations-header">
                <h2>Conversations</h2>
            </div>
            <div class="conversations-list">
                @forelse($conversations as $conversation)
                    <div class="conversation-item" data-conversation-id="{{ $conversation->id }}" data-department="{{ $conversation->department }}">
                        <div class="conversation-meta">
                            <div class="conversation-name">{{ $conversation->user_name }}</div>
                            <div style="display:flex;align-items:center;gap:6px;">
                                <div class="conversation-dept">{{ $conversation->department }}</div>
                                <button class="btn-delete-conv" 
                                    onclick="deleteConversation(event, {{ $conversation->id }}, '{{ addslashes($conversation->user_name) }}')"
                                    title="Hapus kontak ini">✕</button>
                            </div>
                        </div>
                        <div class="conversation-preview">
                            {{ Str::limit($conversation->messages->first()->message ?? 'No messages yet', 60) }}
                        </div>
                    </div>
                @empty
                    <div class="empty-state">No conversations yet</div>
                @endforelse
            </div>
        </div>
        
        <div class="messages-panel">
            <div class="messages-header">
                <strong id="current-conversation-name">Select a conversation</strong>
            </div>
            
            <div class="messages-list" id="messages-list">
                <div class="empty-state">Select a conversation to view messages</div>
            </div>
            
            <div class="reply-form" id="reply-form" style="display: none;">
                <!-- Quick Reply Templates -->
                <div class="quick-replies" id="quick-replies">
                    <div class="quick-replies-label">Balasan Cepat</div>
                    <div class="quick-replies-list" id="quick-replies-list"></div>
                </div>
                <div class="reply-input-group">
                    <input type="text" class="reply-input" id="reply-input" placeholder="Tulis balasan...">
                    <button class="btn-send" id="btn-send">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        let currentConversationId = null;
        let currentDepartment = null;
        let pollingInterval = null;
        let lastMessageCount = 0;

        // =============================================
        // TEMPLATE QUICK REPLY PER TOPIK
        // =============================================
        const quickReplyTemplates = {
            default: [
                'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan lebih detail kebutuhan proyeknya?',
                'Baik, saya catat dulu ya. Mohon tunggu sebentar.',
                'Tim kami akan follow up via WhatsApp/email dalam 1x24 jam.',
                'Terima kasih sudah menghubungi kami! Jangan ragu chat lagi ya 😊',
            ],
            'Konsultasi Website': [
                'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan lebih detail website seperti apa yang dibutuhkan?',
                'Apakah sudah punya referensi desain atau fitur yang diinginkan?',
                'Kami bisa bantu konsultasi gratis dulu — kapan waktu yang cocok?',
                'Silakan cek portofolio kami di virexa.id/portfolio untuk referensi.',
                'Tim kami akan follow up via WhatsApp/email dalam 1x24 jam.',
            ],
            'Tanya Paket': [
                'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan kebutuhan proyeknya agar kami bisa rekomendasikan paket yang sesuai?',
                'Untuk info lengkap paket, bisa cek di virexa.id/services ya.',
                'Paket kami fleksibel dan bisa dikustomisasi sesuai kebutuhan Anda.',
                'Apakah ada fitur khusus yang wajib ada di proyeknya?',
                'Tim kami akan follow up via WhatsApp/email dalam 1x24 jam.',
            ],
            'Info Harga': [
                'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan dulu kebutuhan proyeknya? Harga kami sesuaikan dengan fitur yang diperlukan.',
                'Harga kami mulai dari Rp 500 ribu — tergantung kompleksitas proyek.',
                'Kami transparan soal harga, tidak ada biaya tersembunyi.',
                'Setelah diskusi kebutuhan, kami akan kirimkan penawaran harga yang detail.',
                'Tim kami akan follow up via WhatsApp/email dalam 1x24 jam.',
            ],
            'Support Proyek': [
                'Halo! Terima kasih sudah menghubungi VIREXA Support. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan kendala yang dialami secara detail?',
                'Bisa screenshot atau rekam layarnya untuk kami analisis?',
                'Kami sedang periksa masalahnya, mohon tunggu sebentar ya.',
                'Masalah sudah kami identifikasi, sedang dalam proses perbaikan.',
                'Masalah sudah teratasi! Silakan coba lagi dan konfirmasi ya.',
            ],
            'Lainnya': [
                'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
                'Boleh ceritakan lebih detail kebutuhannya?',
                'Baik, saya catat dulu ya. Mohon tunggu sebentar.',
                'Tim kami akan follow up via WhatsApp/email dalam 1x24 jam.',
                'Terima kasih sudah menghubungi kami! Jangan ragu chat lagi ya 😊',
            ],
        };

        function renderQuickReplies(department) {
            const list = document.getElementById('quick-replies-list');
            const templates = quickReplyTemplates[department] || quickReplyTemplates['default'];
            list.innerHTML = '';
            templates.forEach(text => {
                const btn = document.createElement('button');
                btn.className = 'quick-reply-btn';
                // Tampilkan teks dipotong agar tidak terlalu panjang di tombol
                btn.textContent = text.length > 40 ? text.substring(0, 38) + '…' : text;
                btn.title = text; // full text di tooltip
                btn.addEventListener('click', () => {
                    document.getElementById('reply-input').value = text;
                    document.getElementById('reply-input').focus();
                });
                list.appendChild(btn);
            });
        }
        
        // Request notification permission
        if ('Notification' in window && Notification.permission === 'default') {
            Notification.requestPermission();
        }
        
        // Create notification sound
        function playNotificationSound() {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.value = 800;
            oscillator.type = 'sine';
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);
        }
        
        // Show desktop notification
        function showNotification(title, body) {
            if ('Notification' in window && Notification.permission === 'granted') {
                new Notification(title, {
                    body: body,
                    icon: '/images/virexa_icon.png',
                    badge: '/images/virexa_icon.png'
                });
            }
        }
        
        document.querySelectorAll('.conversation-item').forEach(item => {
            item.addEventListener('click', function() {
                const conversationId = this.dataset.conversationId;
                loadConversation(conversationId);
                
                document.querySelectorAll('.conversation-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        function deleteConversation(event, id, name) {
            event.stopPropagation(); // jangan trigger click conversation

            if (!confirm(`Hapus kontak "${name}" beserta semua pesannya? Tindakan ini tidak bisa dibatalkan.`)) return;

            fetch(`/admin/api/chat/conversation/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    // Hapus item dari daftar
                    const item = document.querySelector(`.conversation-item[data-conversation-id="${id}"]`);
                    if (item) item.remove();

                    // Kalau yang dihapus sedang aktif, reset panel kanan
                    if (currentConversationId == id) {
                        currentConversationId = null;
                        currentDepartment = null;
                        if (pollingInterval) { clearInterval(pollingInterval); pollingInterval = null; }
                        document.getElementById('current-conversation-name').textContent = 'Select a conversation';
                        document.getElementById('messages-list').innerHTML = '<div class="empty-state">Select a conversation to view messages</div>';
                        document.getElementById('reply-form').style.display = 'none';
                    }

                    // Kalau list kosong, tampilkan empty state
                    const list = document.querySelector('.conversations-list');
                    if (!list.querySelector('.conversation-item')) {
                        list.innerHTML = '<div class="empty-state" style="padding:40px 24px;text-align:center;color:#999;">Belum ada percakapan</div>';
                    }
                }
            })
            .catch(err => console.error('Delete error:', err));
        }
        
        function loadConversation(conversationId) {
            currentConversationId = conversationId;
            
            fetch(`/admin/api/chat/conversation/${conversationId}`)
                .then(response => response.json())
                .then(data => {
                    const conv = data.conversation;
                    currentDepartment = conv.department || null;

                    document.getElementById('current-conversation-name').textContent =
                        conv.user_name + (conv.department ? ' — ' + conv.department : '');
                    
                    const messagesList = document.getElementById('messages-list');
                    messagesList.innerHTML = '';
                    
                    data.messages.forEach(message => {
                        const messageDiv = document.createElement('div');
                        messageDiv.className = `message ${message.sender_type}`;
                        messageDiv.innerHTML = `
                            <div class="message-bubble">
                                <div class="message-text">${escapeHtml(message.message)}</div>
                                <div class="message-time">${new Date(message.created_at).toLocaleTimeString('id-ID', {hour: '2-digit', minute: '2-digit'})}</div>
                            </div>
                        `;
                        messagesList.appendChild(messageDiv);
                    });
                    
                    messagesList.scrollTop = messagesList.scrollHeight;
                    lastMessageCount = data.messages.length;

                    // Tampilkan form + render quick replies sesuai topik
                    document.getElementById('reply-form').style.display = 'block';
                    renderQuickReplies(currentDepartment);
                    
                    startPolling();
                })
                .catch(error => console.error('Error loading conversation:', error));
        }
        
        function startPolling() {
            if (pollingInterval) clearInterval(pollingInterval);
            
            pollingInterval = setInterval(() => {
                if (!currentConversationId) return;
                
                fetch(`/admin/api/chat/conversation/${currentConversationId}`)
                    .then(response => response.json())
                    .then(data => {
                        const messagesList = document.getElementById('messages-list');
                        const currentMessageCount = messagesList.children.length;
                        
                        if (data.messages.length > currentMessageCount) {
                            const newMessages = data.messages.slice(currentMessageCount);
                            const latestMessage = newMessages[newMessages.length - 1];
                            
                            if (latestMessage.sender_type === 'user') {
                                playNotificationSound();
                                showNotification(
                                    'Pesan Baru dari ' + data.conversation.user_name,
                                    latestMessage.message
                                );
                            }
                            
                            // Tambah hanya pesan baru, tidak render ulang semua
                            newMessages.forEach(message => {
                                const messageDiv = document.createElement('div');
                                messageDiv.className = `message ${message.sender_type}`;
                                messageDiv.innerHTML = `
                                    <div class="message-bubble">
                                        <div class="message-text">${escapeHtml(message.message)}</div>
                                        <div class="message-time">${new Date(message.created_at).toLocaleTimeString('id-ID', {hour: '2-digit', minute: '2-digit'})}</div>
                                    </div>
                                `;
                                messagesList.appendChild(messageDiv);
                            });
                            
                            messagesList.scrollTop = messagesList.scrollHeight;
                        }
                    })
                    .catch(error => console.error('Polling error:', error));
            }, 3000);
        }

        function escapeHtml(text) {
            return String(text)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;');
        }
        
        document.getElementById('btn-send').addEventListener('click', sendReply);
        document.getElementById('reply-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendReply();
            }
        });
        
        function sendReply() {
            const input = document.getElementById('reply-input');
            const message = input.value.trim();
            
            if (!message || !currentConversationId) return;

            const btnSend = document.getElementById('btn-send');
            btnSend.disabled = true;
            btnSend.textContent = '...';
            
            fetch('/admin/api/chat/reply', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    conversation_id: currentConversationId,
                    message: message
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    input.value = '';
                    // Tambah pesan admin langsung ke UI tanpa reload
                    const messagesList = document.getElementById('messages-list');
                    const messageDiv = document.createElement('div');
                    messageDiv.className = 'message admin';
                    messageDiv.innerHTML = `
                        <div class="message-bubble">
                            <div class="message-text">${escapeHtml(message)}</div>
                            <div class="message-time">${new Date().toLocaleTimeString('id-ID', {hour: '2-digit', minute: '2-digit'})}</div>
                        </div>
                    `;
                    messagesList.appendChild(messageDiv);
                    messagesList.scrollTop = messagesList.scrollHeight;
                }
            })
            .catch(error => console.error('Error sending reply:', error))
            .finally(() => {
                btnSend.disabled = false;
                btnSend.textContent = 'Kirim';
            });
        }
    </script>
</body>
</html>
