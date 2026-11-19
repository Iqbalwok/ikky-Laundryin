@extends('layouts.app')

@section('title', 'IKKY LAUNDRYIN COIN - Cuci Bersih, Praktis, Tanpa Ribet!')
@section('description', 'Solusi laundry mandiri berbasis koin dengan mesin cuci dan pengering modern, bersih, higienis, dan cepat. Mulai Rp5.000 per kali cuci. Tinggal masukkan koin, langsung jalan!')

@section('content')

@php
    $rawWa = $profile->whatsapp_number ?? '6281234567890';
    $cleanWa = preg_replace('/[^0-9]/', '', $rawWa);
    if (!str_starts_with($cleanWa, '62') && str_starts_with($cleanWa, '0')) {
        $cleanWa = '62' . substr($cleanWa, 1);
    }
    $waHeroUrl = 'https://wa.me/' . $cleanWa . '?text=' . urlencode('Halo IKKY LAUNDRYIN COIN, saya ingin bertanya seputar layanan cuci koin & ketersediaan mesin.');
    $waOwnerUrl = 'https://wa.me/' . $cleanWa . '?text=' . urlencode('Halo Pemilik IKKY LAUNDRYIN COIN, saya ingin bertanya langsung seputar outlet.');
    $waWasherUrl = 'https://wa.me/' . $cleanWa . '?text=' . urlencode('Halo IKKY LAUNDRYIN COIN, saya ingin tanya info layanan Mesin Cuci (Washer).');
    $waDryerUrl = 'https://wa.me/' . $cleanWa . '?text=' . urlencode('Halo IKKY LAUNDRYIN COIN, saya ingin tanya info layanan Mesin Pengering (Dryer).');
@endphp

{{-- ===== HERO BANNER SLIDESHOW (3 SLIDES OTOMATIS) ===== --}}
<section class="hero hero-slideshow-banner" id="beranda">
    <div class="hero-bg-overlay"></div>

    {{-- Slider Wrapper --}}
    <div class="hero-slider" id="heroSlider">
        {{-- SLIDE 1: CUCI MANDIRI KOIN --}}
        <div class="hero-slide active" data-slide="0">
            <div class="container hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-coins"></i>
                        <span>{{ $profile->price_info ?? 'Mulai dari Rp5.000 per kali cuci' }}</span>
                    </div>
                    <h1 class="hero-title">
                        Laundry Praktis,<br>
                        <span class="text-highlight">Bersih,</span> Tanpa Ribet!
                    </h1>
                    <p class="hero-desc">
                        {{ $profile->description ?? 'Solusi laundry mandiri yang praktis untuk membantu aktivitas harianmu. Cukup gunakan koin, pilih mesin, dan nikmati kemudahan mencuci serta mengeringkan pakaian dengan cepat, nyaman, dan higienis.' }}
                    </p>
                    <div class="hero-tagline">
                        <i class="fas fa-quote-left"></i>
                        {{ $profile->sub_tagline ?? 'Tinggal Masukkan Koin, Langsung Jalan!' }}
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="hero-actions">
                        <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-hero">
                            <i class="fab fa-whatsapp"></i> Chat WhatsApp / Order
                        </a>
                        <a href="#layanan" class="btn btn-outline">
                            <i class="fas fa-th-large"></i> Jelajahi Layanan
                        </a>
                        <a href="#pemilik" class="btn btn-ghost">
                            <i class="fas fa-user-circle"></i> Profil Pemilik
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-image-card">
                        <img src="{{ asset('assets/images/hero/hero-laundry.jpg') }}" alt="Interior IKKY LAUNDRYIN COIN" class="hero-img" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                        <div class="hero-float-badge badge-top">
                            <i class="fas fa-check-circle"></i> 1 Mesin Khusus Sendiri
                        </div>
                        <div class="hero-float-badge badge-bottom">
                            <i class="fas fa-bolt"></i> Cepat &amp; Kering 100%
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SLIDE 2: MESIN PENGERING CEPAT (MUSIM HUJAN) --}}
        <div class="hero-slide" data-slide="1">
            <div class="container hero-content">
                <div class="hero-text">
                    <div class="hero-badge badge-dryer">
                        <i class="fas fa-wind"></i>
                        <span>Mesin Pengering Komersial • 30-45 Menit Siap Lipat</span>
                    </div>
                    <h1 class="hero-title">
                        Musim Hujan?<br>
                        <span class="text-highlight">Kering 100%</span> Tanpa Jemur!
                    </h1>
                    <p class="hero-desc">
                        Gak perlu khawatir pakaian bau apek atau jemuran kehujanan! Mesin dryer komersial bersuhu panas higienis kami membunuh bakteri dan tungau, pakaian hangat, harum, dan langsung siap dipakai.
                    </p>
                    <div class="hero-tagline">
                        <i class="fas fa-quote-left"></i>
                        Pakaian Kering Maksimal, Higienis &amp; Bebas Repot!
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="hero-actions">
                        <a href="#layanan" class="btn btn-yellow">
                            <i class="fas fa-fire-alt"></i> Lihat Mesin Dryer
                        </a>
                        <a href="#cara-kerja" class="btn btn-outline">
                            <i class="fas fa-play-circle"></i> Panduan Pakai Mesin
                        </a>
                        <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-hero">
                            <i class="fab fa-whatsapp"></i> Tanya CS WhatsApp
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-image-card">
                        <img src="{{ asset('assets/images/slideshow/slide-3-dryer.jpg') }}" alt="Mesin Pengering Cepat IKKY LAUNDRYIN COIN" class="hero-img" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                        <div class="hero-float-badge badge-top">
                            <i class="fas fa-temperature-high"></i> Suhu Panas Higienis
                        </div>
                        <div class="hero-float-badge badge-bottom">
                            <i class="fas fa-clock"></i> 30 Menit Kering Tuntas
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SLIDE 3: HIGIENIS & RUANG TUNGGU NYAMAN --}}
        <div class="hero-slide" data-slide="2">
            <div class="container hero-content">
                <div class="hero-text">
                    <div class="hero-badge badge-comfort">
                        <i class="fas fa-shield-alt"></i>
                        <span>1 Mesin 1 Pelanggan • Privasi &amp; Higienis Terjamin</span>
                    </div>
                    <h1 class="hero-title">
                        Higienis Maksimal,<br>
                        <span class="text-highlight">Tidak Dicampur</span> Orang Lain!
                    </h1>
                    <p class="hero-desc">
                        Mencuci lebih tenang karena pakaian Anda tidak pernah dicampur cucian orang lain. Ruang tunggu bersih, sejuk, dan dilengkapi suasana nyaman agar Anda santai sambil menunggu cucian selesai.
                    </p>
                    <div class="hero-tagline">
                        <i class="fas fa-quote-left"></i>
                        Kenyamanan, Kebersihan &amp; Kepuasan Anda Adalah Prioritas Kami!
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="hero-actions">
                        <a href="#pemilik" class="btn btn-white">
                            <i class="fas fa-heart"></i> Kenali Pemilik &amp; Tim
                        </a>
                        <a href="#kontak" class="btn btn-outline">
                            <i class="fas fa-map-marker-alt"></i> Cek Lokasi Outlet
                        </a>
                        <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-hero">
                            <i class="fab fa-whatsapp"></i> Chat Pemilik
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-image-card">
                        <img src="{{ asset('assets/images/hero/about-facility.jpg') }}" alt="Fasilitas Ruang Tunggu Nyaman" class="hero-img" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                        <div class="hero-float-badge badge-top">
                            <i class="fas fa-couch"></i> Ruang Tunggu Bersih
                        </div>
                        <div class="hero-float-badge badge-bottom">
                            <i class="fas fa-spray-can"></i> Mesin Rutin Steril
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tombol Navigasi Kiri & Kanan --}}
    <button class="hero-nav-btn hero-prev" id="heroPrevBtn" aria-label="Slide sebelumnya">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="hero-nav-btn hero-next" id="heroNextBtn" aria-label="Slide berikutnya">
        <i class="fas fa-chevron-right"></i>
    </button>

    {{-- Indikator Titik (Dots) --}}
    <div class="hero-dots" id="heroDots">
        <button class="hero-dot active" data-index="0" aria-label="Slide 1"></button>
        <button class="hero-dot" data-index="1" aria-label="Slide 2"></button>
        <button class="hero-dot" data-index="2" aria-label="Slide 3"></button>
    </div>

    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none"><path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#F5F7FA"/></svg>
    </div>
</section>

{{-- ===== SLIDESHOW SECTION ===== --}}
@if($slides->count() > 0)
<section class="slideshow-section" id="slideshow">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Fasilitas Modern</span>
            <h2>Lihat Suasana &amp; Fasilitas Kami</h2>
            <p>Ruangan laundry bersih, nyaman, dan berpendingin udara untuk memberikan kenyamanan mencuci terbaik.</p>
        </div>
        <div class="slideshow" id="mainSlideshow">
            <div class="slideshow-track">
                @foreach($slides as $index => $slide)
                <div class="slide {{ $index === 0 ? 'active' : '' }}" aria-hidden="{{ $index !== 0 ? 'true' : 'false' }}">
                    @php
                        $slideUrl = '';
                        if ($slide->image_path && Storage::disk('public')->exists($slide->image_path)) {
                            $slideUrl = Storage::url($slide->image_path);
                        } elseif (file_exists(public_path('assets/images/' . $slide->image_path))) {
                            $slideUrl = asset('assets/images/' . $slide->image_path);
                        } else {
                            $slideUrl = asset('assets/images/slideshow/slide-' . (($index % 4) + 1) . '-interior.jpg');
                        }
                    @endphp
                    <img src="{{ $slideUrl }}" alt="{{ $slide->title }}" class="slide-img" loading="{{ $index === 0 ? 'eager' : 'lazy' }}" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                    <div class="slide-caption">
                        <span class="slide-badge-tag">Fasilitas Outlet</span>
                        <h3>{{ $slide->title }}</h3>
                        @if($slide->description)
                            <p>{{ $slide->description }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <button class="slide-btn slide-prev" aria-label="Slide sebelumnya"><i class="fas fa-chevron-left"></i></button>
            <button class="slide-btn slide-next" aria-label="Slide berikutnya"><i class="fas fa-chevron-right"></i></button>
            <div class="slide-dots">
                @foreach($slides as $index => $slide)
                <button class="dot {{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

{{-- ===== TENTANG KAMI ===== --}}
<section class="about-section" id="tentang">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual">
                <div class="about-img-wrap">
                    <img src="{{ asset('assets/images/hero/about-facility.jpg') }}" alt="Fasilitas IKKY LAUNDRYIN COIN" class="about-img" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                    <div class="about-badge-float">
                        <i class="fas fa-star"></i>
                        <span>Terpercaya &amp; Higienis</span>
                    </div>
                </div>
                <div class="about-stats">
                    <div class="stat-item">
                        <i class="fas fa-coins"></i>
                        <div>
                            <strong>Rp5.000</strong>
                            <span>Mulai dari / cuci</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-tshirt"></i>
                        <div>
                            <strong>Cuci &amp; Kering</strong>
                            <span>1 Tempat Tuntas</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-content">
                <span class="section-badge">Tentang Kami</span>
                <h2>{{ $profile->name ?? 'IKKY LAUNDRYIN COIN' }}</h2>
                <div class="about-tagline">
                    <i class="fas fa-quote-left"></i>
                    {{ $profile->tagline ?? 'Cuci Bersih, Praktis, Tanpa Ribet!' }}
                </div>
                <p>{{ $profile->description ?? 'IKKY LAUNDRYIN COIN adalah layanan laundry koin mandiri yang praktis dan modern. Kami hadir untuk membantu aktivitas harianmu dengan fasilitas mesin cuci dan pengering berkualitas tinggi yang mudah digunakan oleh siapa saja. Cukup siapkan koin, pilih mesin, dan nikmati layanan laundry bersih dan higienis tanpa perlu menunggu lama.' }}</p>
                @if($profile && $profile->price_info)
                <div class="about-price-info">
                    <i class="fas fa-tag"></i>
                    {{ $profile->price_info }}
                </div>
                @endif
                <div class="about-btn-wrap">
                    <a href="#cerita" class="btn btn-primary mt-3">
                        <i class="fas fa-book-open"></i> Baca Kisah Perjalanan Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== STORYTELLING SECTION: KISAH DI BALIK IKKY LAUNDRYIN COIN ===== --}}
<section class="story-section" id="cerita">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Kisah Nyata Kami</span>
            <h2>Cerita di Balik IKKY LAUNDRYIN COIN</h2>
            <p>Dari keresahan cucian yang sering tertukar, jemuran kehujanan, dan waktu yang terbuang — lahirlah tempat laundry mandiri yang higienis, cepat, dan ramah kantong.</p>
        </div>

        {{-- Highlight Mission Quote Banner --}}
        <div class="story-banner-quote">
            <div class="story-banner-icon"><i class="fas fa-heart"></i></div>
            <div class="story-banner-text">
                <h4>"Mencuci pakaian seharusnya tidak membuat stres atau menyita seluruh akhir pekanmu."</h4>
                <p>Inilah prinsip sederhana yang melandasi setiap mesin, koin, dan layanan yang kami siapkan di IKKY LAUNDRYIN COIN.</p>
            </div>
        </div>

        {{-- 4 Visual Milestone Cards --}}
        <div class="story-timeline-grid">
            <!-- Bab 1 -->
            <div class="story-card">
                <div class="story-card-top">
                    <span class="story-step-badge">BAB 01 • AWAL MULA</span>
                    <div class="story-icon-bubble problem"><i class="fas fa-cloud-rain"></i></div>
                </div>
                <h3 class="story-title">Keresahan Cucian &amp; Baju Tertukar</h3>
                <p class="story-text">
                    Bermula dari pengalaman tinggal di sekitar kampus dan lingkungan pemukiman padat: saat musim hujan datang, cucian menumpuk berhari-hari, jemuran tak kering dan menimbulkan bau apek. Titip laundry kiloan biasa pun sering cemas pakaian tertukar, luntur, atau hilang, ditambah harus antre 2–3 hari.
                </p>
                <div class="story-keynote">
                    <i class="fas fa-exclamation-circle"></i> <span>Masalah: Baju lembap, waktu terbuang, privasi minim.</span>
                </div>
            </div>

            <!-- Bab 2 -->
            <div class="story-card">
                <div class="story-card-top">
                    <span class="story-step-badge">BAB 02 • TITIK BALIK</span>
                    <div class="story-icon-bubble idea"><i class="fas fa-lightbulb"></i></div>
                </div>
                <h3 class="story-title">Mengapa Tidak Cuci Mandiri Sendiri?</h3>
                <p class="story-text">
                    Kami mengamati konsep laundromat modern: mengapa tidak memberikan kendali penuh kepada pelanggan? Satu orang mendapatkan 1 drum mesin khusus sendiri tanpa dicampur. Cukup masukkan koin, cucian selesai cepat dengan standar mesin komersial kelas dunia, dan biayanya sangat hemat.
                </p>
                <div class="story-keynote">
                    <i class="fas fa-check-circle"></i> <span>Solusi: 1 drum pribadi, higienis, selesai dalam hitungan menit.</span>
                </div>
            </div>

            <!-- Bab 3 -->
            <div class="story-card">
                <div class="story-card-top">
                    <span class="story-step-badge">BAB 03 • KELAHIRAN</span>
                    <div class="story-icon-bubble reality"><i class="fas fa-store-alt"></i></div>
                </div>
                <h3 class="story-title">Hadirnya IKKY LAUNDRYIN COIN</h3>
                <p class="story-text">
                    Didirikan di Jl. Utama Laundry No. 88, outlet pertama resmi dibuka dengan komitmen penuh: mesin cuci berputar kuat dan mesin dryer bersuhu panas higienis. Kami juga merancang ruang tunggu yang sejuk ber-AC, bersih, dan nyaman agar Anda bisa menunggu sambil santai atau mengerjakan tugas.
                </p>
                <div class="story-keynote">
                    <i class="fas fa-map-pin"></i> <span>Dekat kampus &amp; warga, koin mulai Rp5.000 per siklus.</span>
                </div>
            </div>

            <!-- Bab 4 -->
            <div class="story-card">
                <div class="story-card-top">
                    <span class="story-step-badge">BAB 04 • JANJI KAMI</span>
                    <div class="story-icon-bubble promise"><i class="fas fa-smile-beam"></i></div>
                </div>
                <h3 class="story-title">Bebas Repot, Lebih Banyak Waktu Luang</h3>
                <p class="story-text">
                    Tagline kami bukan sekadar kata-kata: <em>"Tinggal Masukkan Koin, Langsung Jalan!"</em> Hari ini kami bangga menjadi solusi harian yang dipercaya ratusan pelanggan. Datang membawa cucian kotor, pulang dengan pakaian bersih, harum, kering 100%, dan siap langsung dilipat!
                </p>
                <div class="story-keynote">
                    <i class="fas fa-star"></i> <span>Hasil: 45 menit beres, hidup lebih produktif dan bebas repot.</span>
                </div>
            </div>
        </div>

        {{-- Story Impact Stats Bar --}}
        <div class="story-impact-bar">
            <div class="story-stat-item">
                <div class="story-stat-number">&plusmn; 45 Menit</div>
                <div class="story-stat-label">Total Cuci &amp; Kering Sempurna</div>
            </div>
            <div class="story-stat-item">
                <div class="story-stat-number">100% Pribadi</div>
                <div class="story-stat-label">1 Drum Khusus, Tanpa Dicampur</div>
            </div>
            <div class="story-stat-item">
                <div class="story-stat-number">Rp5.000</div>
                <div class="story-stat-label">Tarif Koin Ramah Kantong</div>
            </div>
            <div class="story-stat-item">
                <div class="story-stat-number">Anti Apek</div>
                <div class="story-stat-label">Bakteri Mati Karena Suhu Panas</div>
            </div>
        </div>
    </div>
</section>

{{-- ===== PROFIL PEMILIK & DEDIKASI LAYANAN ===== --}}
<section class="owner-section" id="pemilik">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Profil &amp; Dedikasi</span>
            <h2>Profil Pemilik &amp; Komitmen Layanan</h2>
            <p>Mengenal komitmen di balik kenyamanan, kebersihan, dan higienitas IKKY LAUNDRYIN COIN.</p>
        </div>
        <div class="owner-card">
            <div class="owner-grid">
                <div class="owner-avatar-column">
                    <div class="owner-avatar-box">
                        <div class="owner-avatar-circle">
                            <i class="fas fa-user-tie owner-avatar-icon"></i>
                        </div>
                        <div class="owner-badge-verified">
                            <i class="fas fa-check-circle"></i> Terverifikasi Resmi
                        </div>
                    </div>
                    <h3 class="owner-name">{{ $profile->owner_name ?? 'Ikky & Tim Laundryin' }}</h3>
                    <p class="owner-title">{{ $profile->owner_title ?? 'Pemilik & Pengelola IKKY LAUNDRYIN COIN' }}</p>
                    <a href="{{ $waOwnerUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-owner">
                        <i class="fab fa-whatsapp"></i> Chat Langsung ke Pemilik
                    </a>
                </div>
                <div class="owner-content-column">
                    <div class="owner-quote-box">
                        <i class="fas fa-quote-left quote-mark"></i>
                        <p class="owner-bio-text">
                            {{ $profile->owner_bio ?? 'Berkomitmen menghadirkan layanan laundry koin mandiri yang bersih, higienis, dan terpercaya. Pakaian setiap pelanggan kami jaga agar tidak pernah tercampur, mesin terawat rutin, dan suasana outlet selalu sejuk dan nyaman untuk dikunjungi setiap hari.' }}
                        </p>
                    </div>
                    
                    <h4 class="owner-commitments-title">4 Jaminan Kualitas untuk Setiap Pelanggan:</h4>
                    <div class="owner-commitments-grid">
                        <div class="commitment-item">
                            <div class="commitment-icon"><i class="fas fa-shield-alt"></i></div>
                            <div>
                                <strong>100% Tidak Dicampur</strong>
                                <span>1 drum mesin khusus cucian kamu sendiri tanpa tercampur pakaian orang lain.</span>
                            </div>
                        </div>
                        <div class="commitment-item">
                            <div class="commitment-icon"><i class="fas fa-temperature-high"></i></div>
                            <div>
                                <strong>Kering Tuntas Anti Bau Apek</strong>
                                <span>Mesin pengering komersial bersuhu stabil, baju hangat dan siap langsung lipat.</span>
                            </div>
                        </div>
                        <div class="commitment-item">
                            <div class="commitment-icon"><i class="fas fa-coins"></i></div>
                            <div>
                                <strong>Tarif Jujur &amp; Ekonomis</strong>
                                <span>Mulai Rp5.000 per proses cuci, koin otomatis tersedia di mesin penukar.</span>
                            </div>
                        </div>
                        <div class="commitment-item">
                            <div class="commitment-icon"><i class="fab fa-whatsapp"></i></div>
                            <div>
                                <strong>Bantuan Siaga WhatsApp</strong>
                                <span>Staf &amp; pemilik siap memandu atau menjawab pertanyaanmu via chat WA.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== KEUNGGULAN ===== --}}
<section class="advantages-section" id="keunggulan">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Keunggulan</span>
            <h2>Mengapa Memilih Kami?</h2>
            <p>Kami menghadirkan pengalaman laundry mandiri terbaik dengan 4 keunggulan utama.</p>
        </div>
        <div class="advantages-grid">
            @forelse($advantages as $adv)
            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="{{ $adv->icon_class ?? 'fas fa-star' }}"></i>
                </div>
                <h3>{{ $adv->title }}</h3>
                <p>{{ $adv->description }}</p>
            </div>
            @empty
            <div class="advantage-card"><div class="advantage-icon"><i class="fas fa-bolt"></i></div><h3>Mudah &amp; Cepat</h3><p>Proses laundry yang sangat mudah dan cepat. Cukup masukkan koin, pilih program, dan tunggu hasilnya.</p></div>
            <div class="advantage-card"><div class="advantage-icon"><i class="fas fa-shield-alt"></i></div><h3>Bersih &amp; Higienis</h3><p>Mesin cuci dibersihkan secara rutin untuk memastikan pakaianmu bersih dan bebas kuman.</p></div>
            <div class="advantage-card"><div class="advantage-icon"><i class="fas fa-clock"></i></div><h3>Hemat Waktu</h3><p>Tidak perlu menunggu berhari-hari. Pakaian dicuci dan dikeringkan tuntas dalam hitungan menit.</p></div>
            <div class="advantage-card"><div class="advantage-icon"><i class="fas fa-tshirt"></i></div><h3>Mesin Cuci &amp; Pengering</h3><p>Tersedia lengkap mesin cuci dan pengering komersial dalam satu tempat.</p></div>
            @endforelse
        </div>
    </div>
</section>

{{-- ===== LAYANAN ===== --}}
<section class="services-section" id="layanan">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Layanan Unggulan</span>
            <h2>Layanan Mesin Cuci &amp; Pengering</h2>
            <p>Dua mesin andalan berkapasitas besar siap membantu pakaianmu bersih wangi dan kering tuntas.</p>
        </div>
        <div class="services-grid">
            @forelse($services as $service)
            <div class="service-card">
                <div class="service-img-wrap">
                    @php
                        $serviceImgUrl = '';
                        if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
                            $serviceImgUrl = Storage::url($service->image_path);
                        } elseif (file_exists(public_path('assets/images/' . $service->image_path))) {
                            $serviceImgUrl = asset('assets/images/' . $service->image_path);
                        } else {
                            $serviceImgUrl = $loop->first ? asset('assets/images/services/service-washer.jpg') : asset('assets/images/services/service-dryer.jpg');
                        }
                    @endphp
                    <img src="{{ $serviceImgUrl }}" alt="{{ $service->title }}" class="service-img" loading="lazy" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                    <div class="service-badge">
                        <i class="fas fa-coins"></i> Mulai Rp5.000
                    </div>
                </div>
                <div class="service-body">
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                    <ul class="service-features">
                        @if($loop->first)
                            <li><i class="fas fa-check"></i> 1 Mesin khusus sendiri, tidak dicampur</li>
                            <li><i class="fas fa-check"></i> Putaran drum stabil dan serat kain terjaga</li>
                            <li><i class="fas fa-check"></i> Hasil bersih optimal dan harum segar</li>
                        @else
                            <li><i class="fas fa-check"></i> Pengering bertenaga tinggi, bebas bau apek</li>
                            <li><i class="fas fa-check"></i> Kering tuntas 100% siap langsung lipat</li>
                            <li><i class="fas fa-check"></i> Bebas cemas saat musim hujan</li>
                        @endif
                    </ul>
                    <div class="service-action-wrap">
                        <a href="{{ $loop->first ? $waWasherUrl : $waDryerUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-sm">
                            <i class="fab fa-whatsapp"></i> Tanya Layanan Ini via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="service-card">
                <div class="service-img-wrap"><img src="{{ asset('assets/images/services/service-washer.jpg') }}" alt="Mesin Cuci" class="service-img"></div>
                <div class="service-body"><h3>Mesin Cuci (Washer)</h3><p>Layanan mesin cuci self-service dengan drum kapasitas besar dan teknologi modern.</p></div>
            </div>
            <div class="service-card">
                <div class="service-img-wrap"><img src="{{ asset('assets/images/services/service-dryer.jpg') }}" alt="Mesin Pengering" class="service-img"></div>
                <div class="service-body"><h3>Mesin Pengering (Dryer)</h3><p>Layanan pengering pakaian berkecepatan tinggi. Pakaian kering hangat sempurna siap lipat.</p></div>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- ===== EKSPLORASI LAYANAN & SOLUSI CUCI (LIVE SEARCH & FILTER KATEGORI) ===== --}}
<section class="exploration-section" id="eksplorasi">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Cari Cepat &amp; Kategori</span>
            <h2>Eksplorasi Solusi Cuci &amp; Panduan Koin</h2>
            <p>Cari informasi mesin, jenis cucian Anda (bedcover, jeans, pakaian harian), atau tips mengeringkan di musim hujan secara instan.</p>
        </div>

        {{-- Search & Filter Controls --}}
        <div class="exploration-controls">
            {{-- Live Search Input --}}
            <div class="search-input-wrapper">
                <i class="fas fa-search search-icon"></i>
                <input type="text" id="solutionSearchInput" class="solution-search-input" placeholder="Cari misal: bedcover, pengering, jeans, koin, musim hujan, sprei..." autocomplete="off">
                <button type="button" id="solutionSearchClear" class="search-clear-btn" aria-label="Hapus kata kunci" style="display: none;">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Category Filter Pills --}}
            <div class="category-filter-pills" id="categoryFilters">
                <button type="button" class="filter-pill active" data-category="all">
                    <i class="fas fa-border-all"></i> Semua Solusi
                </button>
                <button type="button" class="filter-pill" data-category="mesin">
                    <i class="fas fa-soap"></i> Mesin &amp; Koin
                </button>
                <button type="button" class="filter-pill" data-category="pakaian">
                    <i class="fas fa-tshirt"></i> Jenis Pakaian
                </button>
                <button type="button" class="filter-pill" data-category="tips">
                    <i class="fas fa-lightbulb"></i> Tips &amp; Trik
                </button>
            </div>

            {{-- Counter info --}}
            <div class="filter-meta-bar">
                <span class="filter-result-count" id="filterResultCount">Menampilkan 8 dari 8 solusi cuci</span>
                <span class="filter-helper-text"><i class="fas fa-bolt"></i> Filter instan tanpa refresh halaman</span>
            </div>
        </div>

        {{-- Solutions Cards Grid --}}
        <div class="solutions-grid" id="solutionsGrid">
            <!-- Item 1: Mesin Cuci -->
            <div class="solution-card" data-category="mesin" data-keywords="mesin cuci washer drum stainless putaran koin deterjen sabun bersih">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-mesin"><i class="fas fa-soap"></i> Mesin &amp; Koin</span>
                    <span class="solution-badge-price">Mulai Rp5.000</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-soap"></i></div>
                    <h3 class="solution-title">Mesin Cuci Komersial (Washer)</h3>
                    <p class="solution-desc">Drum stainless steel kapasitas besar dengan putaran stabil. Mengangkat noda membandel secara maksimal namun tetap menjaga kelembutan serat kain.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-clock"></i> 30 Menit</span>
                        <span class="tag-pill"><i class="fas fa-user-shield"></i> 1 Orang 1 Drum</span>
                        <span class="tag-pill"><i class="fas fa-tint"></i> Air Bersih Tersaring</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya ingin tanya ketersediaan Mesin Cuci (Washer).') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Mesin Cuci
                    </a>
                </div>
            </div>

            <!-- Item 2: Mesin Pengering -->
            <div class="solution-card" data-category="mesin" data-keywords="mesin pengering dryer komersial kering panas hangat musim hujan anti apek tungau bakteri">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-mesin"><i class="fas fa-wind"></i> Mesin &amp; Koin</span>
                    <span class="solution-badge-price">Kering 100%</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-wind"></i></div>
                    <h3 class="solution-title">Mesin Pengering Cepat (Dryer)</h3>
                    <p class="solution-desc">Pengering bertenaga tinggi dengan sirkulasi suhu panas higienis. Pakaian keluar hangat, bebas tungau dan bakteri, langsung kering siap lipat.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-clock"></i> 35-40 Menit</span>
                        <span class="tag-pill"><i class="fas fa-sun"></i> Tanpa Jemuran</span>
                        <span class="tag-pill"><i class="fas fa-virus-slash"></i> Suhu Steril Higienis</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya ingin tanya seputar penggunaan Mesin Pengering (Dryer).') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Mesin Dryer
                    </a>
                </div>
            </div>

            <!-- Item 3: Mesin Penukar Koin -->
            <div class="solution-card" data-category="mesin" data-keywords="koin coin changer mesin penukar uang pecahan cash mandiri praktis">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-mesin"><i class="fas fa-coins"></i> Mesin &amp; Koin</span>
                    <span class="solution-badge-price">Otomatis di Lokasi</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-coins"></i></div>
                    <h3 class="solution-title">Mesin Penukar Koin Otomatis</h3>
                    <p class="solution-desc">Tak perlu repot mencari uang receh. Di outlet tersedia mesin penukar uang kertas (Rp5.000, Rp10.000, Rp20.000) menjadi koin laundry secara instan.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-bolt"></i> Penukaran Instan</span>
                        <span class="tag-pill"><i class="fas fa-money-bill-wave"></i> Uang Kertas Diterima</span>
                        <span class="tag-pill"><i class="fas fa-check"></i> Tanpa Potongan Biaya</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya ingin tanya ketersediaan mesin penukar koin & uang pecahan.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Info Penukaran Koin
                    </a>
                </div>
            </div>

            <!-- Item 4: Pakaian Harian -->
            <div class="solution-card" data-category="pakaian" data-keywords="pakaian harian kaos kemeja seragam celana baju kerja kuliah santai">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-pakaian"><i class="fas fa-tshirt"></i> Jenis Pakaian</span>
                    <span class="solution-badge-price">Pilihan Favorit</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-tshirt"></i></div>
                    <h3 class="solution-title">Pakaian Harian (Kaos, Kemeja &amp; Seragam)</h3>
                    <p class="solution-desc">Pilihan utama mahasiswa dan keluarga. Baju kuliah, kerja, atau baju santai dicuci bersih merata, warna tetap cerah, dan serat kain awet.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-clock"></i> 30 Menit Cuci</span>
                        <span class="tag-pill"><i class="fas fa-heart"></i> Lembut di Kulit</span>
                        <span class="tag-pill"><i class="fas fa-feather-alt"></i> Warna Tidak Kusam</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya mau cuci pakaian harian / baju kuliah.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Cuci Harian
                    </a>
                </div>
            </div>

            <!-- Item 5: Bedcover & Selimut -->
            <div class="solution-card" data-category="pakaian" data-keywords="bedcover sprei selimut tebal bed sheet bed cover king size bantal guling">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-pakaian"><i class="fas fa-bed"></i> Jenis Pakaian</span>
                    <span class="solution-badge-price">Drum Ekstra Lega</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-bed"></i></div>
                    <h3 class="solution-title">Bedcover, Sprei &amp; Selimut Tebal</h3>
                    <p class="solution-desc">Cuci bedcover ukuran King size tanpa macet! Diameter drum komersial yang luas menjamin air dan deterjen meresap ke seluruh lapisan busa tebal.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-expand-arrows-alt"></i> Kapasitas Besar</span>
                        <span class="tag-pill"><i class="fas fa-bacteria"></i> Bebas Tungau &amp; Debu</span>
                        <span class="tag-pill"><i class="fas fa-spray-can"></i> Harum Maksimal</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya ingin tanya kapasitas mesin untuk cuci bedcover tebal.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Cuci Bedcover
                    </a>
                </div>
            </div>

            <!-- Item 6: Celana Jeans & Jaket -->
            <div class="solution-card" data-category="pakaian" data-keywords="celana jeans jaket denim hoodie sweater kain tebal dingin">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-pakaian"><i class="fas fa-vest"></i> Jenis Pakaian</span>
                    <span class="solution-badge-price">Bahan Berat</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-vest"></i></div>
                    <h3 class="solution-title">Jeans, Jaket Denim &amp; Hoodie Tebal</h3>
                    <p class="solution-desc">Bahan tebal yang paling sulit kering saat dijemur di rumah. Di mesin dryer kami, jaket dan jeans kering tuntas merata sampai ke saku dan lipatan terdalam.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-fire"></i> Kering Sampai Saku</span>
                        <span class="tag-pill"><i class="fas fa-shield-alt"></i> Serat Kain Terjaga</span>
                        <span class="tag-pill"><i class="fas fa-smog"></i> Tanpa Bau Lembap</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya mau tanya cuci dan keringkan jaket tebal / jeans.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Cuci Jeans &amp; Jaket
                    </a>
                </div>
            </div>

            <!-- Item 7: Solusi Musim Hujan -->
            <div class="solution-card" data-category="tips" data-keywords="musim hujan mendung cucian menumpuk bau apek lembap jamur jemuran basah">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-tips"><i class="fas fa-cloud-sun-rain"></i> Tips &amp; Trik</span>
                    <span class="solution-badge-price">Solusi Cuaca</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-cloud-sun-rain"></i></div>
                    <h3 class="solution-title">Solusi Bebas Bau Apek di Musim Hujan</h3>
                    <p class="solution-desc">Mendung berminggu-minggu bukan lagi halangan! Suhu panas terkontrol mesin dryer mematikan spora jamur penyebab bau apek khas jemuran basah.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-umbrella"></i> Kebal Musim Hujan</span>
                        <span class="tag-pill"><i class="fas fa-wind"></i> Harum Semerbak</span>
                        <span class="tag-pill"><i class="fas fa-smile"></i> Bebas Jemuran Rumah</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya butuh solusi keringkan cucian saat musim hujan.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Konsultasi Musim Hujan
                    </a>
                </div>
            </div>

            <!-- Item 8: Trik Lipat Hangat -->
            <div class="solution-card" data-category="tips" data-keywords="trik lipat hangat meja lipat rapi tanpa setrika hemat waktu langsung lemari">
                <div class="solution-card-header">
                    <span class="solution-category-tag cat-tips"><i class="fas fa-magic"></i> Tips &amp; Trik</span>
                    <span class="solution-badge-price">Trik Praktis</span>
                </div>
                <div class="solution-card-body">
                    <div class="solution-icon-wrap"><i class="fas fa-magic"></i></div>
                    <h3 class="solution-title">Trik Lipat Hangat: Minim Menyetrika!</h3>
                    <p class="solution-desc">Rahasia pakaian rapi tanpa capek: saat mesin dryer berbunyi selesai, segera keluarkan baju selagi hangat, kibaskan sekali, dan lipat di meja lipat outlet kami.</p>
                    <div class="solution-tags">
                        <span class="tag-pill"><i class="fas fa-check-double"></i> Meja Lipat Tersedia</span>
                        <span class="tag-pill"><i class="fas fa-hourglass-end"></i> Hemat Waktu 80%</span>
                        <span class="tag-pill"><i class="fas fa-tshirt"></i> Siap Pakai Langsung</span>
                    </div>
                </div>
                <div class="solution-card-footer">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya ingin tanya ketersediaan fasilitas meja lipat dan pewangi.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-solution-wa">
                        <i class="fab fa-whatsapp"></i> Tanya Fasilitas Lipat
                    </a>
                </div>
            </div>
        </div>

        {{-- Empty State (Jika Pencarian Tidak Ditemukan) --}}
        <div class="solutions-empty-state" id="solutionsEmptyState" style="display: none;">
            <div class="empty-icon"><i class="fas fa-search-minus"></i></div>
            <h3>Layanan atau Informasi Belum Ditemukan</h3>
            <p>Kata kunci yang Anda cari belum cocok dengan katalog di atas. Coba gunakan kata kunci seperti <strong>koin, pengering, bedcover, jeans, atau musim hujan</strong>.</p>
            <div class="empty-actions">
                <button type="button" class="btn btn-outline-primary" id="btnResetSearch">
                    <i class="fas fa-redo"></i> Tampilkan Semua Solusi
                </button>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->whatsapp_number ?? '6281234567890') }}?text={{ urlencode('Halo IKKY LAUNDRYIN, saya mencari informasi layanan tertentu yang belum ada di website.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-empty">
                    <i class="fab fa-whatsapp"></i> Tanya Langsung ke CS
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===== CARA KERJA ===== --}}
<section class="howto-section" id="cara-kerja">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Praktis &amp; Mudah</span>
            <h2>Cara Menggunakan Layanan</h2>
            <p>Hanya 4 langkah simpel: masukkan koin, pakaian bersih dan kering tanpa ribet.</p>
        </div>
        <div class="steps-grid">
            @forelse($steps as $step)
            <div class="step-card">
                <div class="step-number">{{ $loop->iteration }}</div>
                <div class="step-icon">
                    @php
                        $icons = ['fas fa-coins', 'fas fa-hand-pointer', 'fas fa-play-circle', 'fas fa-check-double'];
                        echo '<i class="' . ($icons[$loop->index % 4]) . '"></i>';
                    @endphp
                </div>
                <h3>{{ $step->title }}</h3>
                <p>{{ $step->description }}</p>
            </div>
            @empty
            <div class="step-card"><div class="step-number">1</div><div class="step-icon"><i class="fas fa-coins"></i></div><h3>Masukkan Koin</h3><p>Siapkan koin sesuai harga layanan yang dipilih.</p></div>
            <div class="step-card"><div class="step-number">2</div><div class="step-icon"><i class="fas fa-hand-pointer"></i></div><h3>Pilih Mesin</h3><p>Pilih mesin cuci atau mesin pengering sesuai kebutuhan.</p></div>
            <div class="step-card"><div class="step-number">3</div><div class="step-icon"><i class="fas fa-play-circle"></i></div><h3>Tekan Mulai</h3><p>Tekan tombol START dan mesin akan langsung bekerja.</p></div>
            <div class="step-card"><div class="step-number">4</div><div class="step-icon"><i class="fas fa-check-double"></i></div><h3>Pakaian Bersih</h3><p>Tunggu sebentar, pakaianmu sudah bersih dan siap diambil.</p></div>
            @endforelse
        </div>
    </div>
</section>

{{-- ===== HARGA ===== --}}
<section class="pricing-section" id="harga">
    <div class="container">
        <div class="pricing-banner">
            <div class="pricing-content">
                <span class="section-badge light">Harga Hemat &amp; Transparan</span>
                <h2>Laundry Bersih dengan Harga Ramah di Kantong</h2>
                <p>Nikmati kemudahan mencuci dan mengeringkan pakaian sendiri dengan tarif ekonomis mulai dari Rp5.000.</p>
                <div class="price-highlight">
                    <span class="price-from">Mulai dari</span>
                    <span class="price-amount">Rp5.000</span>
                    <span class="price-unit">per kali cuci</span>
                </div>
                <div class="pricing-buttons">
                    <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-hero">
                        <i class="fab fa-whatsapp"></i> Order / Tanya via WhatsApp
                    </a>
                    <a href="#kontak" class="btn btn-white">
                        <i class="fas fa-map-marker-alt"></i> Lihat Lokasi &amp; Kontak
                    </a>
                </div>
            </div>
            <div class="pricing-visual">
                <div class="coin-animation">
                    <i class="fas fa-coins coin-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== GALERI ===== --}}
@if($gallery->count() > 0)
<section class="gallery-section" id="galeri">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Galeri Foto</span>
            <h2>Suasana Outlet Kami</h2>
            <p>Kondisi fasilitas laundry kami yang bersih, rapi, dan terawat siap menyambut kehadiranmu.</p>
        </div>
        <div class="gallery-grid">
            @foreach($gallery as $img)
            @php
                $imgUrl = '';
                if ($img->image_path && Storage::disk('public')->exists($img->image_path)) {
                    $imgUrl = Storage::url($img->image_path);
                } elseif (file_exists(public_path('assets/images/' . $img->image_path))) {
                    $imgUrl = asset('assets/images/' . $img->image_path);
                }
            @endphp
            @if($imgUrl)
            <div class="gallery-item" data-src="{{ $imgUrl }}" data-title="{{ $img->title }}">
                <img src="{{ $imgUrl }}" alt="{{ $img->title }}" loading="lazy" onerror="this.src='{{ asset('assets/images/placeholder-laundry.svg') }}'">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                    <span>{{ $img->title }}</span>
                </div>
            </div>
            @else
            <div class="gallery-item gallery-placeholder-item">
                <div class="gallery-placeholder">
                    <i class="fas fa-image"></i>
                    <span>{{ $img->title }}</span>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox" aria-hidden="true">
        <button class="lightbox-close" id="lightboxClose" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <button class="lightbox-prev" id="lightboxPrev" aria-label="Sebelumnya"><i class="fas fa-chevron-left"></i></button>
        <button class="lightbox-next" id="lightboxNext" aria-label="Berikutnya"><i class="fas fa-chevron-right"></i></button>
        <div class="lightbox-content">
            <img src="" alt="" id="lightboxImg">
            <p id="lightboxCaption"></p>
        </div>
    </div>
</section>
@endif

{{-- ===== KONTAK & LOKASI ===== --}}
<section class="contact-section" id="kontak">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Lokasi &amp; Kontak</span>
            <h2>Kunjungi Outlet Kami</h2>
            <p>Datang langsung ke lokasi IKKY LAUNDRYIN COIN atau hubungi kami untuk informasi selengkapnya.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-card-list">
                    <!-- Alamat Outlet -->
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Alamat Outlet</strong>
                            <p>{{ $profile->address ?? 'Jl. Utama Laundry No. 88 (Dekat Area Kampus & Pemukiman Warga)' }}</p>
                            <span class="contact-sub-hint">Akses jalan mudah &amp; parkir motor/mobil aman</span>
                        </div>
                    </div>

                    <!-- WhatsApp & Telepon -->
                    <div class="contact-item highlight-wa-item">
                        <div class="contact-icon wa-icon-color"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <strong>WhatsApp &amp; Telepon Resmi</strong>
                            <p class="contact-phone-val"><strong>{{ $profile->phone ?? '0812-3456-7890' }}</strong></p>
                            <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-direct">
                                <i class="fab fa-whatsapp"></i> Chat WhatsApp Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Profil Pemilik Singkat -->
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-user-check"></i></div>
                        <div>
                            <strong>Penanggung Jawab / Pemilik</strong>
                            <p>{{ $profile->owner_name ?? 'Ikky & Tim Laundryin' }}</p>
                            <span class="contact-sub-hint">{{ $profile->owner_title ?? 'Pengelola Outlet' }}</span>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <strong>Jam Operasional</strong>
                            <p>{{ $profile->working_hours ?? 'Buka Setiap Hari: 06.00 – 22.00 WIB' }}</p>
                            <span class="contact-open-badge"><i class="fas fa-check"></i> Tetap buka di hari libur &amp; tanggal merah</span>
                        </div>
                    </div>

                    @if($profile && $profile->email)
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email Resmi</strong>
                            <p><a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                        </div>
                    </div>
                    @endif
                </div>

                @if($profile && ($profile->social_instagram || $profile->social_facebook || $profile->social_twitter))
                <div class="social-links">
                    <h4>Media Sosial Resmi</h4>
                    <div class="social-icons">
                        @if($profile->social_instagram)
                        <a href="{{ $profile->social_instagram }}" target="_blank" rel="noopener" class="social-btn instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @endif
                        @if($profile->social_facebook)
                        <a href="{{ $profile->social_facebook }}" target="_blank" rel="noopener" class="social-btn facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @endif
                        @if($profile->social_twitter)
                        <a href="{{ $profile->social_twitter }}" target="_blank" rel="noopener" class="social-btn facebook" aria-label="Twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>

            <div class="contact-map">
                @if($profile && $profile->google_maps_link)
                <div class="map-wrapper">
                    <iframe
                        src="{{ $profile->google_maps_link }}"
                        width="100%"
                        height="400"
                        style="border:0; border-radius:16px; display:block;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Google Maps IKKY LAUNDRYIN COIN">
                    </iframe>
                </div>
                @else
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <p><strong>Peta Lokasi Google Maps</strong></p>
                    <p>{{ $profile->address ?? 'Jl. Utama Laundry No. 88 (Dekat Kampus)' }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA SECTION ===== --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Cuci Bersih, Kering Cepat, Tanpa Ribet!</h2>
            <p>Bawa pakaian kotormu hari ini ke IKKY LAUNDRYIN COIN. Tinggal masukkan koin, langsung jalan!</p>
            <div class="cta-actions">
                <a href="{{ $waHeroUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-hero btn-lg">
                    <i class="fab fa-whatsapp"></i> Hubungi / Order via WhatsApp
                </a>
                <a href="#kontak" class="btn btn-white btn-lg">
                    <i class="fas fa-map-marker-alt"></i> Kunjungi Outlet
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
