<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookNest - Your Literary Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Animated Gradient Header */
        .gradient-header {
            background: linear-gradient(135deg, #4a6fa5, #6c8fc7, #8fa8d1);
            background-size: 200% 200%;
            animation: gradientBG 8s ease infinite;
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .header-content h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
            animation: fadeInDown 1s ease;
        }

        .header-content p {
            font-size: 1.3rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
        }

        /* Floating Book Animation */
        .floating-books {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            opacity: 0.1;
        }

        .book-icon {
            position: absolute;
            font-size: 2rem;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Navbar Styles */
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: var(--light-color) !important;
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

        .nav-link:hover {
            background-color: rgba(74, 111, 165, 0.1);
        }

        .nav-link.active {
            background-color: var(--primary-color);
            color: white !important;
        }

        /* Hero Section */
        .hero-section {
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            color: white;
            position: relative;
            margin-bottom: 3rem;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, transparent 20%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-content h2 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            animation: fadeInUp 1s ease;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 700px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .btn-explore {
            padding: 0.8rem 2.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            background-color: var(--primary-color);
            border: none;
            transition: all 0.3s;
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
            box-shadow: 0 4px 15px rgba(74, 111, 165, 0.4);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-explore::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.6s;
            z-index: -1;
        }

        .btn-explore:hover::before {
            left: 100%;
        }

        .btn-explore:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(74, 111, 165, 0.6);
        }

        /* Featured Books Section */
        .featured-section {
            padding: 4rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-color);
            display: inline-block;
            padding-bottom: 0.5rem;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .section-title:hover h2::after {
            width: 120px;
        }

        .book-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            margin-bottom: 2rem;
            height: 100%;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .book-img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .book-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.7));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .book-card:hover .book-img::after {
            opacity: 1;
        }

        .book-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .book-card:hover .book-img img {
            transform: scale(1.05);
        }

        .book-info {
            padding: 1.5rem;
        }

        .book-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
            transition: color 0.3s ease;
        }

        .book-card:hover .book-title {
            color: var(--primary-color);
        }

        .book-author {
            color: #6c757d;
            margin-bottom: 0.8rem;
            font-style: italic;
        }

        .book-price {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .book-badge {
            background-color: rgba(74, 111, 165, 0.1);
            color: var(--primary-color);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .book-card:hover .book-badge {
            background-color: var(--primary-color);
            color: white;
        }

        /* Testimonials */
        .testimonial-section {
            background-color: var(--light-color);
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .testimonial-section::before {
            content: '"';
            position: absolute;
            top: 50px;
            left: 50px;
            font-size: 15rem;
            font-family: 'Playfair Display', serif;
            color: rgba(74, 111, 165, 0.05);
            line-height: 1;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 1rem;
            position: relative;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: rgba(74, 111, 165, 0.1);
            font-family: serif;
            line-height: 1;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .testimonial-author::before {
            content: '';
            display: inline-block;
            width: 30px;
            height: 2px;
            background-color: var(--primary-color);
            margin-right: 10px;
        }

        /* Newsletter */
        .newsletter-section {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            padding: 4rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .newsletter-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }

        .newsletter-form {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .form-control {
            height: 50px;
            border-radius: 50px;
            border: none;
            padding-left: 1.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        .btn-subscribe {
            background-color: white;
            color: var(--primary-color);
            font-weight: 600;
            border-radius: 50px;
            padding: 0.6rem 2rem;
            border: none;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn-subscribe:hover {
            background-color: var(--dark-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 3rem 0 1rem;
            position: relative;
        }

        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .footer-links h5::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
            bottom: -8px;
            left: 0;
            transition: width 0.3s ease;
        }

        .footer-links:hover h5::after {
            width: 60px;
        }

        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
            transition: transform 0.3s ease;
        }

        .footer-links li:hover {
            transform: translateX(5px);
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 0.5rem;
            color: white;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            text-align: center;
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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

        /* Book Filter */
        .book-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: white;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            margin: 0.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-color);
            color: white;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .header-content h1 {
                font-size: 2.2rem;
            }

            .hero-content h2 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }
            
            .book-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>
<body>
<!-- Loading Animation -->
<div class="loading-animation">
    <div class="loading-spinner"></div>
</div>

<!-- Animated Header -->
<div class="gradient-header">
    <div class="floating-books">
        <i class="bx bxs-book book-icon" style="top: 10%; left: 5%; animation-delay: 0s;"></i>
        <i class="bx bxs-book book-icon" style="top: 30%; left: 80%; animation-delay: 1s;"></i>
        <i class="bx bxs-book book-icon" style="top: 70%; left: 15%; animation-delay: 2s;"></i>
        <i class="bx bxs-book book-icon" style="top: 20%; left: 50%; animation-delay: 0.5s;"></i>
        <i class="bx bxs-book book-icon" style="top: 60%; left: 70%; animation-delay: 1.5s;"></i>
    </div>
    <div class="header-content">
        <h1>Welcome to BookNest</h1>
        <p>Discover your next favorite book in our cozy literary haven</p>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content container">
        <h2>Explore Worlds Between Pages</h2>
        <p>Dive into our carefully curated collection of books that will transport you to different realms, expand your knowledge, and ignite your imagination.</p>
        <a href="{{ route('post.view', 1) }}" class="btn btn-explore">Start Exploring</a>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-title">
            
        </div>
        <div class="row" id="testimonials">
            <!-- Testimonials will be loaded here via JavaScript -->
        </div>
    </div>
</section>

<!-- Newsletter -->
<!-- تم حذف قسم Stay Updated (النشرة البريدية) بالكامل بناءً على طلب المستخدم -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-4 text-center">
                <h5 class="mb-4">BookNest</h5>
                <p>Your cozy place for books. We're dedicated to bringing you the best reading experience with carefully selected titles from around the world.</p>
                <div class="social-icons mt-4 d-flex justify-content-center">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-goodreads"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p>&copy; 2023 BookNest. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Toast Container -->
<div class="toast-container">
    <div class="toast success" id="successToast">
        <i class="bx bx-check-circle"></i>
        <span>Thank you for subscribing!</span>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Remove loading animation
        setTimeout(() => {
            document.querySelector('.loading-animation').style.opacity = '0';
            setTimeout(() => {
                document.querySelector('.loading-animation').style.display = 'none';
            }, 500);
        }, 1000);

        // Featured Books Data
        const featuredBooks = [
            {
                title: "The Midnight Library",
                author: "Matt Haig",
                price: "$14.99",
                image: "https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                category: "Fiction",
                animationDelay: "0.1s"
            },
            {
                title: "Atomic Habits",
                author: "James Clear",
                price: "$16.99",
                image: "https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                category: "Self-Help",
                animationDelay: "0.2s"
            },
            {
                title: "Where the Crawdads Sing",
                author: "Delia Owens",
                price: "$12.99",
                image: "https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                category: "Fiction",
                animationDelay: "0.3s"
            },
            {
                title: "Educated",
                author: "Tara Westover",
                price: "$15.99",
                image: "https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                category: "Memoir",
                animationDelay: "0.4s"
            }
        ];

        // Testimonials Data
        const testimonials = [
            {
                text: "BookNest has completely transformed my reading habits. Their recommendations are always spot on!",
                author: "Sarah Johnson",
                role: "Avid Reader",
                animationDelay: "0.1s"
            },
            {
                text: "I love the cozy atmosphere of BookNest, both online and in their physical store. It's my happy place.",
                author: "Michael Chen",
                role: "Book Club Member",
                animationDelay: "0.2s"
            },
            {
                text: "The selection is incredible and the staff recommendations have introduced me to books I never would have found otherwise.",
                author: "Emma Rodriguez",
                role: "Literature Professor",
                animationDelay: "0.3s"
            }
        ];

        // Load Featured Books
        const booksContainer = document.getElementById('featuredBooks');
        featuredBooks.forEach(book => {
            const bookHTML = `
                <div class="col-md-3" data-category="${book.category.toLowerCase()}">
                    <div class="book-card" style="animation-delay: ${book.animationDelay}">
                        <div class="book-img">
                            <img src="${book.image}" alt="${book.title}">
                        </div>
                        <div class="book-info">
                            <div class="book-title">${book.title}</div>
                            <div class="book-author">by ${book.author}</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="book-badge">${book.category}</span>
                                <span class="book-price">${book.price}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            booksContainer.innerHTML += bookHTML;
        });

        // Load Testimonials
        const testimonialsContainer = document.getElementById('testimonials');
        testimonials.forEach(testimonial => {
            const testimonialHTML = `
                <div class="col-md-4">
                    <div class="testimonial-card" style="animation-delay: ${testimonial.animationDelay}">
                        <p class="testimonial-text">${testimonial.text}</p>
                        <div class="testimonial-author">${testimonial.author}</div>
                        <small class="text-muted">${testimonial.role}</small>
                    </div>
                </div>
            `;
            testimonialsContainer.innerHTML += testimonialHTML;
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;

            // Simple validation
            if (email.includes('@') && email.includes('.')) {
                // In a real app, you would send this to your server
                showToast('successToast');
                this.querySelector('input').value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });

        // Book filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const bookItems = document.querySelectorAll('#featuredBooks .col-md-3');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                bookItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

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
        
        // Book card hover effect
        const bookCards = document.querySelectorAll('.book-card');
        bookCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            const heroSection = document.querySelector('.hero-section');
            heroSection.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    });
</script>
</body>
</html>
