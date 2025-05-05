<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookNest - The Last Leaf</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons library -->
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

        .book-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            transition: all 0.3s ease;
        }

        .book-container:hover {
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transform: translateY(-5px);
        }

        @keyframes fadeInUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .book-cover {
            max-height: 450px;
            width: auto;
            display: block;
            margin: 0 auto;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: all 0.5s ease;
            transform-origin: center;
            border-radius: 8px;
            cursor: pointer;
        }

        .book-cover:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .book-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.8s ease forwards 0.5s;
            position: relative;
            display: inline-block;
        }

        .book-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .book-container:hover .book-title::after {
            width: 100px;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .book-author {
            color: #6c757d;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.8s ease forwards 0.7s;
            font-style: italic;
        }

        .book-description {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1a237e;
            line-height: 1.7;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.8s ease forwards 0.9s;
        }

        .btn-read-more {
            padding: 0.8rem 2.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            background-color: var(--primary-color);
            border: none;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(74, 111, 165, 0.4);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards 1.1s;
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-read-more::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.6s;
        }

        .btn-read-more:hover::before {
            left: 100%;
        }

        .btn-read-more:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(74, 111, 165, 0.6);
        }

        .btn-read-more i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .btn-read-more:hover i {
            transform: translateX(5px);
        }

        .search-box {
            width: 250px;
            transition: all 0.3s ease;
        }

        .search-box:focus-within {
            width: 300px;
        }

        .navbar-nav {
            margin-right: auto;
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

        /* Rating Stars */
        .rating {
            display: flex;
            margin-bottom: 1rem;
        }

        .rating i {
            color: var(--warning-color);
            font-size: 1.2rem;
            margin-right: 2px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .rating i:hover {
            transform: scale(1.2);
        }

        /* Book Details */
        .book-details {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .book-detail-item {
            display: flex;
            align-items: center;
            background: rgba(74, 111, 165, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            color: var(--primary-color);
        }

        .book-detail-item i {
            margin-right: 8px;
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
            .book-container {
                padding: 20px;
            }
            
            .book-title {
                font-size: 2rem;
            }
            
            .book-cover {
                max-height: 350px;
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
                    <a class="nav-link active" href="{{route('post.view2')}}">Full Story</a>
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

<!-- Book Container -->
<div class="book-container">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ asset('images/WhatsApp Image 2025-05-03 at 15.46.45_ae3744e2.jpg') }}"
                 class="book-cover img-fluid rounded-start"
                 alt="The Last Leaf"
                 id="bookCover">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h1 class="book-title">The Last Leaf</h1>
                <p class="book-author">By O. Henry</p>
                
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                
                <div class="book-details">
                    <div class="book-detail-item">
                        <i class="bx bx-book-open"></i>
                        <span>Short Story</span>
                    </div>
                    <div class="book-detail-item">
                        <i class="bx bx-calendar"></i>
                        <span>1907</span>
                    </div>
                    <div class="book-detail-item">
                        <i class="bx bx-time"></i>
                        <span>15 min read</span>
                    </div>
                </div>
                
                <p class="book-description" id="bookDescription" style="margin-bottom: 0.5rem;">
                    A touching story of hope, sacrifice, and the enduring power of art. 
                    Set in Greenwich Village, New York, it follows the lives of two young artists 
                    and their elderly neighbor, whose unexpected act of kindness changes everything.
                    <button id="translateBtn" class="translate-toggle">Translate</button>
                </p>
                <div id="translationText" class="translation-box">
                    الورقة الأخيرة هي قصة مؤثرة تكشف مواضيع الأمل والتضحية والقوة الدائمة للفن. يقع في قرية غرينتش، نيويورك، ويتبع حياة فنانين شابين، جونسي وسو، اللذان يتشاركان شقة استوديو.<br><br>
                    عندما تمرض جونسي بالالتهاب الرئوي، تصبح مقتنعة بأنها ستموت عندما تسقط الورقة الأخيرة من الكرمة خارج نافذتها. مع استمرار سقوط الأوراق، يغير عمل لطف غير متوقع من جارهم المسن، السيد بيرمان، كل شيء.<br><br>
                    تذكرنا هذه الحكاية الخالدة بقوة التواصل الإنساني والتأثير العميق الذي يمكن أن تحدثه أعمال الشجاعة الصغيرة على حياتنا.
                </div>
                <a href="{{route('post.view2')}}" class="btn btn-read-more">
                    Read Full Story <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Toast Container -->
<div class="toast-container">
    <div class="toast success" id="successToast">
        <i class="bx bx-check-circle"></i>
        <span>Book added to favorites!</span>
    </div>
    <div class="toast warning" id="warningToast">
        <i class="bx bx-info-circle"></i>
        <span>Loading full story...</span>
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
        
        // Rating stars interaction
        const stars = document.querySelectorAll('.rating i');
        stars.forEach((star, index) => {
            star.addEventListener('click', function() {
                // Reset all stars
                stars.forEach(s => s.classList.remove('bxs-star'));
                stars.forEach(s => s.classList.add('bx-star'));
                
                // Fill stars up to the clicked one
                for (let i = 0; i <= index; i++) {
                    stars[i].classList.remove('bx-star');
                    stars[i].classList.add('bxs-star');
                }
                
                // Show success toast
                showToast('successToast');
            });
        });

        const englishText = `A touching story of hope, sacrifice, and the enduring power of art. 
        Set in Greenwich Village, New York, it follows the lives of two young artists 
        and their elderly neighbor, whose unexpected act of kindness changes everything.`;
        const arabicText = `الورقة الأخيرة هي قصة مؤثرة تكشف مواضيع الأمل والتضحية والقوة الدائمة للفن. يقع في قرية غرينتش، نيويورك، ويتبع حياة فنانين شابين، جونسي وسو، اللذان يتشاركان شقة استوديو.<br><br>عندما تمرض جونسي بالالتهاب الرئوي، تصبح مقتنعة بأنها ستموت عندما تسقط الورقة الأخيرة من الكرمة خارج نافذتها. مع استمرار سقوط الأوراق، يغير عمل لطف غير متوقع من جارهم المسن، السيد بيرمان، كل شيء.<br><br>تذكرنا هذه الحكاية الخالدة بقوة التواصل الإنساني والتأثير العميق الذي يمكن أن تحدثه أعمال الشجاعة الصغيرة على حياتنا.`;
        let isArabic = false;
        const desc = document.getElementById('bookDescription');
        const btn = document.getElementById('translateBtn');
        const translationBox = document.getElementById('translationText');
        btn.onclick = function() {
            if (!isArabic) {
                desc.style.display = 'none';
                translationBox.style.display = 'block';
                btn.textContent = 'Show English';
            } else {
                desc.style.display = 'block';
                translationBox.style.display = 'none';
                btn.textContent = 'Translate';
            }
            isArabic = !isArabic;
        };
    });
</script>
</body>
</html>
        

