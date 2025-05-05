<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookNest - The Last Leaf - Full Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&family=Cairo:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a6fa5;
            --secondary-color: #f8f9fa;
            --accent-color: #6c8fc7;
            --dark-color: #2c3e50;
            --light-color: #ffffff;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary-color);
            color: var(--dark-color);
            overflow-x: hidden;
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Animated Background */
        .animated-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #4a6fa5, #6c8fc7, #8fa8d1);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating Elements */
        .floating-elements {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            padding: 1rem;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
        }

        .navbar-brand h3 {
            margin: 0;
            display: flex;
            align-items: center;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            border-radius: 4px;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            background-color: var(--primary-color);
            color: white !important;
        }

        /* Book Section Styles */
        .book-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 2.5rem;
            margin: 2rem auto;
            max-width: 900px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 1s ease forwards 1.3s;
            transition: all 0.3s ease;
        }

        .book-section:hover {
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transform: translateY(-5px);
        }

        .translators-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            margin: 2rem 0;
        }

        .translators-table th {
            background: var(--primary-color);
            color: white;
            padding: 1rem;
            text-align: left;
            border-radius: 8px 8px 0 0;
            font-weight: 600;
        }

        .translators-table td {
            background: rgba(255, 255, 255, 0.8);
            padding: 1rem;
            transition: all 0.3s ease;
            border-radius: 4px;
        }

        .translators-table tr {
            transform: translateX(-20px);
            opacity: 0;
            animation: slideIn 0.5s ease forwards;
        }

        .translators-table tr:hover td {
            background: var(--primary-color);
            color: white;
            transform: translateX(10px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .book-content {
            margin-top: 2rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .book-content::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 8rem;
            font-family: 'Playfair Display', serif;
            color: rgba(74, 111, 165, 0.1);
            line-height: 1;
        }

        .book-content p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
            position: relative;
            z-index: 1;
            font-size: 1.35rem;
            font-weight: 700;
            color: #1a237e;
        }

        .book-content p:nth-child(1) { animation-delay: 1.5s; }
        .book-content p:nth-child(2) { animation-delay: 1.7s; }
        .book-content p:nth-child(3) { animation-delay: 1.9s; }

        .section-title {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards 1.3s;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            animation: widthGrow 0.8s ease forwards 1.5s;
        }

        @keyframes widthGrow {
            to { width: 100px; }
        }

        .book-cover-large {
            max-height: 500px;
            width: auto;
            display: block;
            margin: 0 auto;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: all 0.5s ease;
            transform-origin: center;
            border-radius: 8px;
            cursor: pointer;
        }

        .book-cover-large:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        @keyframes fadeInUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideIn {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Loading Animation */
        .loading-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--light-color);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid var(--secondary-color);
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Translator Cards */
        .translator-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .translator-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .translator-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .translator-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            font-weight: 600;
        }

        .translator-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .translator-role {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Reading Progress Bar */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 1000;
        }

        .reading-progress-bar {
            height: 100%;
            background: var(--primary-color);
            width: 0%;
            transition: width 0.2s ease;
        }

        /* Share Buttons */
        .share-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .share-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .share-button.facebook {
            background: #3b5998;
        }

        .share-button.twitter {
            background: #1da1f2;
        }

        .share-button.whatsapp {
            background: #25d366;
        }

        .share-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* Toast Notification */
        .toast-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 1rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            max-width: 300px;
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }

        .toast i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .toast.success i {
            color: var(--success-color);
        }

        .toast.warning i {
            color: var(--warning-color);
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 100;
        }

        .scroll-to-top.show {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-to-top:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .book-section {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .book-cover-large {
                max-height: 350px;
            }
            
            .translator-cards {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }

        /* Translation Toggle Styling */
        .translate-toggle {
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle;
            font-size: 0.95rem;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            background: #e9ecef;
            color: #4a6fa5;
            border: 1px solid #bfc9d1;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .translate-toggle:hover {
            background: #4a6fa5;
            color: #fff;
        }
        .translation-box {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 1rem 1.2rem;
            margin-top: 0.7rem;
            margin-bottom: 1.2rem;
            direction: rtl;
            text-align: right;
            font-size: 1.35rem;
            color: #111;
            font-family: 'Cairo', 'Tajawal', 'Amiri', Arial, sans-serif;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            animation: fadeInTrans 0.4s;
            display: none;
        }
        @keyframes fadeInTrans {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
<!-- Reading Progress Bar -->
<div class="reading-progress">
    <div class="reading-progress-bar" id="readingProgress"></div>
</div>

<!-- Loading Animation -->
<div class="loading-animation">
    <div class="loading-spinner"></div>
</div>

<!-- Animated Background -->
<div class="animated-background"></div>

<!-- Floating Elements -->
<div class="floating-elements">
    <i class="bx bxs-book floating-element" style="top: 10%; left: 5%; font-size: 2rem;"></i>
    <i class="bx bxs-book floating-element" style="top: 30%; left: 80%; font-size: 2rem;"></i>
    <i class="bx bxs-book floating-element" style="top: 70%; left: 15%; font-size: 2rem;"></i>
    <i class="bx bxs-book floating-element" style="top: 20%; left: 50%; font-size: 2rem;"></i>
    <i class="bx bxs-book floating-element" style="top: 60%; left: 70%; font-size: 2rem;"></i>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h3>📚 BookNest</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.view')}}">Back to Book</a>
                </li>
            </ul>
            <div class="search-box d-flex">
                <input type="text" class="form-control" placeholder="Search books...">
                <button class="btn btn-outline-primary ms-2">
                    <i class="bx bx-search"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Book Cover Section -->
<div class="container book-section">
    <h2 class="section-title">The Last Leaf</h2>
    <img src="{{ asset('images/WhatsApp Image 2025-05-03 at 15.46.45_ae3744e2.jpg') }}"
         class="book-cover-large"
         alt="The Last Leaf"
         id="bookCover">
</div>

<!-- Translators Section -->
<div class="container book-section">
    <!-- Removed: <h2 class="section-title">Our Translators</h2> -->
    
    <!-- Removed translator cards -->
    <!-- Translator Cards -->
    <!--
    <div class="translator-cards">
        ...
    </div>
    -->
    <!-- Keep only the translators table below -->
    <div class="table-responsive mt-4">
        <table class="translators-table">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem;">اسم المترجم</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">بسنت حامد</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">رناد صابر</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">منار سامح</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">سارة حسام</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">شهد عمرو</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">منة الله أشرف</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">انجي محمد</td></tr>
                <tr><td style="font-size: 1.4rem; font-weight: bold;">رانيا عابد</td></tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Book Content Section -->
<div class="container book-section">
    <h2 class="section-title">About The Book</h2>
    <div class="book-content">
        <div id="englishDescription">
            <p>The Last Leaf is a touching story that explores the themes of hope, sacrifice, and the enduring power of art. Set in Greenwich Village, New York, it follows the lives of two young artists, Johnsy and Sue, who share a studio apartment.</p>
            <p>When Johnsy falls ill with pneumonia, she becomes convinced that she will die when the last leaf falls from the vine outside her window. As the leaves continue to fall, an unexpected act of kindness from their elderly neighbor, Mr. Behrman, changes everything.</p>
            <p>This timeless tale reminds us of the strength of human connection and the profound impact that small acts of courage can have on our lives.
                <button id="translateBtn" class="translate-toggle">Translate</button>
            </p>
        </div>
        <div id="translationText" class="translation-box">
            الورقة الأخيرة هي قصة مؤثرة تكشف مواضيع الأمل والتضحية والقوة الدائمة للفن. يقع في قرية غرينتش، نيويورك، ويتبع حياة فنانين شابين، جونسي وسو، اللذان يتشاركان شقة استوديو.<br><br>
            عندما تمرض جونسي بالالتهاب الرئوي، تصبح مقتنعة بأنها ستموت عندما تسقط الورقة الأخيرة من الكرمة خارج نافذتها. مع استمرار سقوط الأوراق، يغير عمل لطف غير متوقع من جارهم المسن، السيد بيرمان، كل شيء.<br><br>
            تذكرنا هذه الحكاية الخالدة بقوة التواصل الإنساني والتأثير العميق الذي يمكن أن تحدثه أعمال الشجاعة الصغيرة على حياتنا.
        </div>
    </div>
    
    <!-- Share Buttons -->
    <div class="share-buttons">
        <div class="share-button facebook" id="shareFacebook">
            <i class="bx bxl-facebook"></i>
        </div>
        <div class="share-button twitter" id="shareTwitter">
            <i class="bx bxl-twitter"></i>
        </div>
        <div class="share-button whatsapp" id="shareWhatsapp">
            <i class="bx bxl-whatsapp"></i>
        </div>
    </div>
</div>

<!-- Toast Container -->
<div class="toast-container">
    <div class="toast success" id="successToast">
        <i class="bx bx-check-circle"></i>
        <span>Book shared successfully!</span>
    </div>
    <div class="toast warning" id="warningToast">
        <i class="bx bx-info-circle"></i>
        <span>Loading content...</span>
    </div>
</div>

<!-- Scroll to Top Button -->
<div class="scroll-to-top" id="scrollToTop">
    <i class="bx bx-chevron-up"></i>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<!-- Enhanced JavaScript for animations and interactions -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Remove loading animation
        setTimeout(() => {
            document.querySelector('.loading-animation').style.opacity = '0';
            setTimeout(() => {
                document.querySelector('.loading-animation').style.display = 'none';
            }, 500);
        }, 1000);

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 1rem';
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                navbar.style.padding = '1rem';
                navbar.style.boxShadow = 'none';
            }
            
            // Show/hide scroll to top button
            const scrollToTop = document.getElementById('scrollToTop');
            if (window.scrollY > 300) {
                scrollToTop.classList.add('show');
            } else {
                scrollToTop.classList.remove('show');
            }
            
            // Update reading progress
            updateReadingProgress();
        });

        // Book cover hover effect
        const bookCover = document.getElementById('bookCover');
        bookCover.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05) rotate(2deg)';
        });
        bookCover.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
        
        // Book cover click effect
        bookCover.addEventListener('click', function() {
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 300);
            
            // Show toast notification
            showToast('successToast');
        });

        // Add parallax effect to background
        document.addEventListener('mousemove', function(e) {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            document.querySelector('.animated-background').style.backgroundPosition = `${moveX}px ${moveY}px`;
        });
        
        // Scroll to top functionality
        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Toast notification function
        function showToast(toastId) {
            const toast = document.getElementById(toastId);
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }
        
        // Search functionality
        const searchInput = document.querySelector('.search-box input');
        const searchButton = document.querySelector('.search-box button');
        
        searchButton.addEventListener('click', function() {
            if (searchInput.value.trim() !== '') {
                showToast('warningToast');
                // Here you would typically perform a search
                setTimeout(() => {
                    alert('Searching for: ' + searchInput.value);
                }, 1000);
            }
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && searchInput.value.trim() !== '') {
                showToast('warningToast');
                // Here you would typically perform a search
                setTimeout(() => {
                    alert('Searching for: ' + searchInput.value);
                }, 1000);
            }
        });
        
        // Translator card hover effect
        const translatorCards = document.querySelectorAll('.translator-card');
        translatorCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Share buttons functionality
        document.getElementById('shareFacebook').addEventListener('click', function() {
            showToast('successToast');
            // Here you would typically implement sharing functionality
        });
        
        document.getElementById('shareTwitter').addEventListener('click', function() {
            showToast('successToast');
            // Here you would typically implement sharing functionality
        });
        
        document.getElementById('shareWhatsapp').addEventListener('click', function() {
            showToast('successToast');
            // Here you would typically implement sharing functionality
        });
        
        // Reading progress function
        function updateReadingProgress() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('readingProgress').style.width = scrolled + '%';
        }
        
        // Initialize reading progress
        updateReadingProgress();

        // Translation toggle logic
        const englishDiv = document.getElementById('englishDescription');
        const btn = document.getElementById('translateBtn');
        const translationBox = document.getElementById('translationText');
        let isArabic = false;
        btn.onclick = function() {
            if (!isArabic) {
                englishDiv.style.display = 'none';
                translationBox.style.display = 'block';
                btn.textContent = 'Show English';
            } else {
                englishDiv.style.display = 'block';
                translationBox.style.display = 'none';
                btn.textContent = 'Translate';
            }
            isArabic = !isArabic;
        };
    });
</script>

<iframe src="{{ asset('books/mybook.pdf') }}" width="100%" height="600px"></iframe>
</body>
</html>
