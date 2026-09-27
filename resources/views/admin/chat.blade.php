<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Chat · VIREXA</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@1/index.js"></script>
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --bg:        #0f1117;
            --surface:   #1a1d27;
            --surface2:  #22263a;
            --border:    rgba(255,255,255,0.07);
            --accent:    #6366f1;
            --accent2:   #8b5cf6;
            --green:     #22c55e;
            --red:       #ef4444;
            --text:      #e2e8f0;
            --muted:     #64748b;
            --user-bg:   #1e293b;
            --admin-bg:  linear-gradient(135deg, #6366f1, #8b5cf6);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* ── TOP BAR ── */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            height: 60px;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            flex-shrink: 0;
        }
        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: -0.3px;
        }
        .topbar-brand .dot {
            width: 8px; height: 8px;
            background: var(--green);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--green);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .topbar-stat {
            font-size: 12px;
            color: var(--muted);
            background: var(--surface2);
            padding: 5px 12px;
            border-radius: 20px;
            border: 1px solid var(--border);
        }
        .topbar-stat span {
            color: var(--text);
            font-weight: 600;
        }
        .btn-logout {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 7px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s;
        }
        .btn-logout:hover {
            background: rgba(239,68,68,0.1);
            border-color: rgba(239,68,68,0.4);
            color: var(--red);
        }

        /* ── MAIN LAYOUT ── */
        .main {
            display: flex;
            flex: 1;
            overflow: hidden;
            gap: 0;
        }

        /* ── SIDEBAR ── */
        .sidebar {
            width: 320px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }
        .sidebar-header {
            padding: 20px 20px 14px;
            border-bottom: 1px solid var(--border);
        }
        .sidebar-header h2 {
            font-size: 13px;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .sidebar-search {
            margin-top: 12px;
            position: relative;
        }
        .sidebar-search input {
            width: 100%;
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 9px 14px 9px 36px;
            font-size: 13px;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: border-color 0.2s;
        }
        .sidebar-search input::placeholder { color: var(--muted); }
        .sidebar-search input:focus { border-color: var(--accent); }
        .sidebar-search svg {
            position: absolute;
            left: 11px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
        }

        .conv-list {
            overflow-y: auto;
            flex: 1;
        }
        .conv-item {
            padding: 14px 20px;
            border-bottom: 1px solid var(--border);
            cursor: pointer;
            transition: background 0.15s;
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .conv-item:hover { background: rgba(255,255,255,0.03); }
        .conv-item.active { background: rgba(99,102,241,0.12); }
        .conv-item.active::after {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 3px;
            background: var(--accent);
            border-radius: 0 3px 3px 0;
        }

        .conv-avatar {
            width: 38px; height: 38px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
            color: white;
        }
        .conv-body { flex: 1; min-width: 0; }
        .conv-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3px;
        }
        .conv-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--text);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .conv-time {
            font-size: 11px;
            color: var(--muted);
            flex-shrink: 0;
            margin-left: 8px;
        }
        .conv-dept {
            display: inline-block;
            font-size: 10px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 10px;
            background: rgba(99,102,241,0.15);
            color: #a5b4fc;
            margin-bottom: 5px;
        }
        .conv-preview {
            font-size: 12px;
            color: var(--muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .conv-actions {
            display: flex;
            flex-direction: column;
            gap: 4px;
            opacity: 0;
            transition: opacity 0.15s;
        }
        .conv-item:hover .conv-actions { opacity: 1; }
        .btn-del {
            background: none;
            border: none;
            color: var(--muted);
            cursor: pointer;
            padding: 3px;
            border-radius: 5px;
            font-size: 13px;
            transition: all 0.15s;
            line-height: 1;
        }
        .btn-del:hover { color: var(--red); background: rgba(239,68,68,0.1); }

        /* ── CHAT PANEL ── */
        .chat-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: var(--bg);
        }

        .chat-header {
            padding: 16px 24px;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 14px;
            flex-shrink: 0;
        }
        .chat-header-avatar {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 15px; color: white;
            flex-shrink: 0;
        }
        .chat-header-info { flex: 1; }
        .chat-header-name {
            font-weight: 700;
            font-size: 15px;
            color: var(--text);
        }
        .chat-header-meta {
            font-size: 12px;
            color: var(--muted);
            margin-top: 2px;
        }
        .chat-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 11px;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 20px;
            background: rgba(34,197,94,0.12);
            color: var(--green);
            border: 1px solid rgba(34,197,94,0.2);
        }
        .chat-header-badge::before {
            content: '';
            width: 5px; height: 5px;
            background: var(--green);
            border-radius: 50%;
        }

        /* ── MESSAGES ── */
        .messages-area {
            flex: 1;
            overflow-y: auto;
            padding: 24px 28px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .msg-date-sep {
            text-align: center;
            font-size: 11px;
            color: var(--muted);
            margin: 12px 0;
            position: relative;
        }
        .msg-date-sep::before, .msg-date-sep::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 36%;
            height: 1px;
            background: var(--border);
        }
        .msg-date-sep::before { left: 0; }
        .msg-date-sep::after { right: 0; }

        .msg-row {
            display: flex;
            margin-bottom: 6px;
            animation: fadeUp 0.25s ease;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .msg-row.user  { justify-content: flex-start; }
        .msg-row.admin { justify-content: flex-end; }

        .msg-bubble {
            max-width: 60%;
            padding: 10px 15px;
            border-radius: 16px;
            font-size: 14px;
            line-height: 1.55;
            word-break: break-word;
        }
        .msg-row.user  .msg-bubble {
            background: var(--user-bg);
            color: var(--text);
            border-bottom-left-radius: 4px;
        }
        .msg-row.admin .msg-bubble {
            background: var(--admin-bg);
            color: white;
            border-bottom-right-radius: 4px;
        }
        .msg-time {
            font-size: 10px;
            color: var(--muted);
            margin-top: 5px;
            text-align: right;
        }
        .msg-row.user .msg-time { text-align: left; }

        .empty-chat {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: var(--muted);
        }
        .empty-chat svg { opacity: 0.25; }
        .empty-chat p { font-size: 14px; font-weight: 500; }

        /* ── REPLY FORM ── */
        .reply-area {
            padding: 16px 24px 20px;
            background: var(--surface);
            border-top: 1px solid var(--border);
            flex-shrink: 0;
        }

        /* Quick replies */
        .qr-label {
            font-size: 10px;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.7px;
            margin-bottom: 8px;
        }
        .qr-list {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 14px;
        }
        .qr-btn {
            padding: 5px 11px;
            background: rgba(99,102,241,0.1);
            border: 1px solid rgba(99,102,241,0.25);
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            color: #a5b4fc;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            transition: all 0.15s;
            white-space: nowrap;
        }
        .qr-btn:hover {
            background: rgba(99,102,241,0.2);
            border-color: var(--accent);
            color: white;
        }

        .reply-input-row {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .reply-input {
            flex: 1;
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 14px;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: border-color 0.2s;
        }
        .reply-input::placeholder { color: var(--muted); }
        .reply-input:focus { border-color: var(--accent); }
        .btn-send {
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px 20px;
            font-size: 13px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 7px;
            transition: opacity 0.2s, transform 0.15s;
            white-space: nowrap;
        }
        .btn-send:hover { opacity: 0.9; transform: translateY(-1px); }
        .btn-send:active { transform: translateY(0); }
        .btn-send:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.08); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.15); }

        /* ── EMOJI PICKER ── */
        .emoji-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 20px;
            padding: 8px;
            border-radius: 10px;
            line-height: 1;
            transition: background 0.15s;
            flex-shrink: 0;
        }
        .emoji-btn:hover { background: rgba(255,255,255,0.07); }

        .emoji-picker-wrapper {
            position: absolute;
            bottom: 80px;
            left: 24px;
            z-index: 100;
            display: none;
            filter: drop-shadow(0 8px 32px rgba(0,0,0,0.5));
        }
        .emoji-picker-wrapper.open { display: block; }

        emoji-picker {
            --background: #1a1d27;
            --border-color: rgba(255,255,255,0.08);
            --button-active-background: rgba(99,102,241,0.25);
            --button-hover-background: rgba(255,255,255,0.06);
            --category-emoji-padding: 0.4rem;
            --category-emoji-size: 1.5rem;
            --category-font-color: #64748b;
            --emoji-padding: 0.3rem;
            --emoji-size: 1.4rem;
            --indicator-color: #6366f1;
            --input-border-color: rgba(255,255,255,0.1);
            --input-font-color: #e2e8f0;
            --input-placeholder-color: #64748b;
            --outline-color: #6366f1;
            --search-background: #22263a;
            --skintone-border-radius: 1rem;
            --tag-background: rgba(99,102,241,0.15);
            --tag-font-color: #a5b4fc;
            width: 340px;
            height: 380px;
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.08);
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="topbar">
        <div class="topbar-brand">
            <div class="dot"></div>
            VIREXA Admin Chat
        </div>
        <div class="topbar-right">
            <div class="topbar-stat">Percakapan: <span>{{ count($conversations) }}</span></div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Keluar</button>
            </form>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Percakapan</h2>
                <div class="sidebar-search">
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0"/>
                    </svg>
                    <input type="text" id="search-input" placeholder="Cari nama atau topik...">
                </div>
            </div>

            <div class="conv-list" id="conv-list">
                @forelse($conversations as $conv)
                    <div class="conv-item"
                         data-conversation-id="{{ $conv->id }}"
                         data-department="{{ $conv->department }}"
                         data-name="{{ $conv->user_name }}">
                        <div class="conv-avatar">{{ strtoupper(substr($conv->user_name, 0, 1)) }}</div>
                        <div class="conv-body">
                            <div class="conv-top">
                                <div class="conv-name">{{ $conv->user_name }}</div>
                                <div class="conv-time">
                                    {{ $conv->created_at ? $conv->created_at->format('H:i') : '' }}
                                </div>
                            </div>
                            <div class="conv-dept">{{ $conv->department ?? 'Umum' }}</div>
                            <div class="conv-preview">
                                {{ Str::limit($conv->messages->first()->message ?? 'Belum ada pesan', 55) }}
                            </div>
                        </div>
                        <div class="conv-actions">
                            <button class="btn-del"
                                onclick="deleteConversation(event, {{ $conv->id }}, '{{ addslashes($conv->user_name) }}')"
                                title="Hapus">
                                <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                @empty
                    <div style="padding:48px 20px;text-align:center;color:var(--muted);font-size:13px;">
                        Belum ada percakapan
                    </div>
                @endforelse
            </div>
        </div>

        <!-- CHAT PANEL -->
        <div class="chat-panel">

            <!-- Header -->
            <div class="chat-header" id="chat-header">
                <div class="empty-chat" style="flex-direction:row;gap:10px;flex:1;justify-content:flex-start;color:var(--muted);font-size:14px;">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="opacity:0.4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Pilih percakapan untuk mulai membalas
                </div>
            </div>

            <!-- Messages -->
            <div class="messages-area" id="messages-area">
                <div class="empty-chat">
                    <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <p>Pilih percakapan di sebelah kiri</p>
                </div>
            </div>

            <!-- Reply Form -->
            <div class="reply-area" id="reply-area" style="display:none;position:relative;">
                <div class="qr-label">Balasan Cepat</div>
                <div class="qr-list" id="qr-list"></div>

                <!-- Emoji Picker -->
                <div class="emoji-picker-wrapper" id="emoji-picker-wrapper">
                    <emoji-picker id="emoji-picker"></emoji-picker>
                </div>

                <div class="reply-input-row">
                    <button class="emoji-btn" id="emoji-btn" title="Emoji">😊</button>
                    <input type="text" class="reply-input" id="reply-input" placeholder="Ketik balasan...">
                    <button class="btn-send" id="btn-send">
                        <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>

<script>
    let currentConversationId = null;
    let currentDepartment     = null;
    let pollingInterval       = null;

    // ── QUICK REPLY TEMPLATES ──
    const qrTemplates = {
        default: [
            'Halo! Terima kasih sudah menghubungi VIREXA. Ada yang bisa kami bantu? 😊',
            'Boleh ceritakan lebih detail kebutuhan proyeknya?',
            'Baik, saya catat dulu ya. Mohon tunggu sebentar.',
            'Tim kami akan follow up via WhatsApp/email dalam 1×24 jam.',
            'Terima kasih! Jangan ragu untuk chat lagi ya 😊',
        ],
        'Konsultasi Website': [
            'Halo! Ada yang bisa kami bantu untuk konsultasi website? 😊',
            'Boleh ceritakan website seperti apa yang dibutuhkan?',
            'Sudah ada referensi desain atau fitur yang diinginkan?',
            'Kami bisa konsultasi gratis dulu — kapan waktu yang cocok?',
            'Silakan cek portofolio kami di virexa.id/portfolio ya.',
            'Tim kami akan follow up dalam 1×24 jam.',
        ],
        'Tanya Paket': [
            'Halo! Mau tanya soal paket layanan kami? 😊',
            'Boleh ceritakan kebutuhan proyeknya agar bisa kami rekomendasikan paket yang tepat?',
            'Info lengkap paket bisa dicek di virexa.id/services ya.',
            'Paket kami fleksibel dan bisa disesuaikan dengan kebutuhan Anda.',
            'Ada fitur khusus yang wajib ada di proyek ini?',
            'Tim kami akan follow up dalam 1×24 jam.',
        ],
        'Info Harga': [
            'Halo! Mau tanya soal harga layanan kami? 😊',
            'Boleh ceritakan dulu kebutuhan proyeknya? Harga kami sesuaikan dengan fitur yang diperlukan.',
            'Harga kami mulai dari Rp 500 ribu, tergantung kompleksitas proyek.',
            'Kami transparan soal harga — tidak ada biaya tersembunyi.',
            'Setelah diskusi kebutuhan, kami kirimkan penawaran detail.',
            'Tim kami akan follow up dalam 1×24 jam.',
        ],
        'Support Proyek': [
            'Halo! Tim support VIREXA siap membantu 😊',
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
            'Tim kami akan follow up via WhatsApp/email dalam 1×24 jam.',
            'Terima kasih! Jangan ragu untuk chat lagi ya 😊',
        ],
    };

    function renderQuickReplies(dept) {
        const list = document.getElementById('qr-list');
        const tpls = qrTemplates[dept] || qrTemplates['default'];
        list.innerHTML = '';
        tpls.forEach(text => {
            const btn = document.createElement('button');
            btn.className = 'qr-btn';
            btn.textContent = text.length > 42 ? text.slice(0, 40) + '…' : text;
            btn.title = text;
            btn.addEventListener('click', () => {
                document.getElementById('reply-input').value = text;
                document.getElementById('reply-input').focus();
            });
            list.appendChild(btn);
        });
    }

    // ── SEARCH ──
    document.getElementById('search-input').addEventListener('input', function () {
        const q = this.value.toLowerCase();
        document.querySelectorAll('.conv-item').forEach(item => {
            const name = item.dataset.name.toLowerCase();
            const dept = (item.dataset.department || '').toLowerCase();
            item.style.display = (name.includes(q) || dept.includes(q)) ? '' : 'none';
        });
    });

    // ── NOTIFICATION ──
    if ('Notification' in window && Notification.permission === 'default') Notification.requestPermission();

    function playSound() {
        try {
            const ctx  = new (window.AudioContext || window.webkitAudioContext)();
            const osc  = ctx.createOscillator();
            const gain = ctx.createGain();
            osc.connect(gain); gain.connect(ctx.destination);
            osc.frequency.value = 880; osc.type = 'sine';
            gain.gain.setValueAtTime(0.25, ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.5);
            osc.start(ctx.currentTime); osc.stop(ctx.currentTime + 0.5);
        } catch(e) {}
    }

    function showNotif(title, body) {
        if ('Notification' in window && Notification.permission === 'granted') {
            new Notification(title, { body, icon: '/images/virexa_icon.png' });
        }
    }

    // ── CLICK CONVERSATION ──
    document.querySelectorAll('.conv-item').forEach(item => {
        item.addEventListener('click', function () {
            loadConversation(this.dataset.conversationId);
            document.querySelectorAll('.conv-item').forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // ── DELETE CONVERSATION ──
    function deleteConversation(e, id, name) {
        e.stopPropagation();
        if (!confirm(`Hapus percakapan dengan "${name}"?\nSemua pesan akan dihapus permanen.`)) return;

        fetch(`/admin/api/chat/conversation/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            }
        })
        .then(r => r.json())
        .then(data => {
            if (!data.success) return;
            const el = document.querySelector(`.conv-item[data-conversation-id="${id}"]`);
            if (el) el.remove();
            if (currentConversationId == id) resetChatPanel();
            const list = document.getElementById('conv-list');
            if (!list.querySelector('.conv-item')) {
                list.innerHTML = '<div style="padding:48px 20px;text-align:center;color:var(--muted);font-size:13px;">Belum ada percakapan</div>';
            }
        })
        .catch(err => console.error(err));
    }

    function resetChatPanel() {
        currentConversationId = null;
        currentDepartment = null;
        if (pollingInterval) { clearInterval(pollingInterval); pollingInterval = null; }
        document.getElementById('chat-header').innerHTML = `
            <div class="empty-chat" style="flex-direction:row;gap:10px;flex:1;justify-content:flex-start;color:var(--muted);font-size:14px;">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="opacity:0.4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Pilih percakapan untuk mulai membalas
            </div>`;
        document.getElementById('messages-area').innerHTML = `
            <div class="empty-chat">
                <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <p>Pilih percakapan di sebelah kiri</p>
            </div>`;
        document.getElementById('reply-area').style.display = 'none';
    }

    // ── LOAD CONVERSATION ──
    function loadConversation(id) {
        currentConversationId = id;
        fetch(`/admin/api/chat/conversation/${id}`)
            .then(r => r.json())
            .then(data => {
                const conv = data.conversation;
                currentDepartment = conv.department || null;

                // Update header
                const initials = conv.user_name ? conv.user_name.charAt(0).toUpperCase() : '?';
                document.getElementById('chat-header').innerHTML = `
                    <div class="chat-header-avatar">${initials}</div>
                    <div class="chat-header-info">
                        <div class="chat-header-name">${escHtml(conv.user_name)}</div>
                        <div class="chat-header-meta">${escHtml(conv.user_email || '')} ${conv.user_phone ? '· ' + escHtml(conv.user_phone) : ''}</div>
                    </div>
                    <div class="chat-header-badge">${escHtml(conv.department || 'Umum')}</div>`;

                // Render messages
                const area = document.getElementById('messages-area');
                area.innerHTML = '<div class="msg-date-sep">Hari ini</div>';
                data.messages.forEach(m => area.appendChild(makeBubble(m)));
                area.scrollTop = area.scrollHeight;

                document.getElementById('reply-area').style.display = 'block';
                renderQuickReplies(currentDepartment);
                startPolling();
            })
            .catch(err => console.error(err));
    }

    function makeBubble(msg) {
        const row = document.createElement('div');
        row.className = `msg-row ${msg.sender_type}`;
        row.innerHTML = `
            <div class="msg-bubble">
                <div>${escHtml(msg.message)}</div>
                <div class="msg-time">${new Date(msg.created_at).toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'})}</div>
            </div>`;
        return row;
    }

    // ── POLLING ──
    function startPolling() {
        if (pollingInterval) clearInterval(pollingInterval);
        pollingInterval = setInterval(() => {
            if (!currentConversationId) return;
            fetch(`/admin/api/chat/conversation/${currentConversationId}`)
                .then(r => r.json())
                .then(data => {
                    const area  = document.getElementById('messages-area');
                    const count = area.querySelectorAll('.msg-row').length;
                    if (data.messages.length > count) {
                        const newMsgs = data.messages.slice(count);
                        const latest  = newMsgs[newMsgs.length - 1];
                        if (latest.sender_type === 'user') {
                            playSound();
                            showNotif('Pesan baru dari ' + data.conversation.user_name, latest.message);
                        }
                        newMsgs.forEach(m => {
                            area.appendChild(makeBubble(m));
                        });
                        area.scrollTop = area.scrollHeight;
                    }
                })
                .catch(err => console.error(err));
        }, 3000);
    }

    // ── SEND REPLY ──
    document.getElementById('btn-send').addEventListener('click', sendReply);
    document.getElementById('reply-input').addEventListener('keypress', e => { if (e.key === 'Enter') sendReply(); });

    function sendReply() {
        const input = document.getElementById('reply-input');
        const msg   = input.value.trim();
        if (!msg || !currentConversationId) return;

        const btn = document.getElementById('btn-send');
        btn.disabled = true;

        fetch('/admin/api/chat/reply', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ conversation_id: currentConversationId, message: msg }),
        })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                input.value = '';
                const area = document.getElementById('messages-area');
                const row  = document.createElement('div');
                row.className = 'msg-row admin';
                row.innerHTML = `
                    <div class="msg-bubble">
                        <div>${escHtml(msg)}</div>
                        <div class="msg-time">${new Date().toLocaleTimeString('id-ID',{hour:'2-digit',minute:'2-digit'})}</div>
                    </div>`;
                area.appendChild(row);
                area.scrollTop = area.scrollHeight;
            }
        })
        .catch(err => console.error(err))
        .finally(() => { btn.disabled = false; });
    }

    function escHtml(t) {
        return String(t||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
    }

    // ── EMOJI PICKER ──
    const emojiBtn     = document.getElementById('emoji-btn');
    const emojiWrapper = document.getElementById('emoji-picker-wrapper');
    const emojiPicker  = document.getElementById('emoji-picker');
    const replyInput   = document.getElementById('reply-input');

    // Toggle picker saat klik tombol emoji
    emojiBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        emojiWrapper.classList.toggle('open');
    });

    // Sisipkan emoji ke posisi kursor di input
    emojiPicker.addEventListener('emoji-click', (e) => {
        const emoji    = e.detail.unicode;
        const start    = replyInput.selectionStart;
        const end      = replyInput.selectionEnd;
        const val      = replyInput.value;
        replyInput.value = val.slice(0, start) + emoji + val.slice(end);
        // Kembalikan fokus ke input dan posisikan kursor setelah emoji
        replyInput.focus();
        replyInput.selectionStart = replyInput.selectionEnd = start + emoji.length;
        emojiWrapper.classList.remove('open');
    });

    // Tutup picker saat klik di luar
    document.addEventListener('click', (e) => {
        if (!emojiWrapper.contains(e.target) && e.target !== emojiBtn) {
            emojiWrapper.classList.remove('open');
        }
    });
</script>
</body>
</html>
