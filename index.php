<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Kilimanjaro   - Premium Kilimanjaro Climbing Experts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
   <link rel="stylesheet" href="style.css">
   <script src="script.js"></script>
</head>
<body>

    <?php include 'plugins/header.php';?>

   <!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-background">
        <img src="img/banner-kilimanjaro.jpg" alt="Mount Kilimanjaro">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1>Conquer the Roof of Africa</h1>
            <p>Experience the ultimate adventure with our expert-guided Kilimanjaro climbs. Join us for a life-changing journey to Africa's highest peak with the most experienced local guides.</p>
            <div class="hero-btns">
                <a href="kilimanjaro-route.php" class="btn btn-primary">Explore Routes</a>
                <a href="#booking" class="btn btn-primary"onclick="openBookingPopup()">send enquiry</a>
            </div>
        </div>
    </div>
</section>



<!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Discover Our Story</span>
                <h2>About One mimi mwenyewe  </h2>
            </div>
            
            
                
                <div class="about-text">
                    <h2>Your Kilimanjaro Climbing Specialists</h2>
                    <p>Welcome to One Kilimanjaro  , a locally-owned climbing company based in Tanzania, specializing exclusively in Mount Kilimanjaro expeditions. We are dedicated to helping adventurers from around the world safely reach the summit of Africa's highest peak.</p>
                    
                    <p>Our experienced team of certified guides, porters, and mountain crew has decades of combined experience on Kilimanjaro. We take pride in our 95% summit success rate and our commitment to responsible climbing practices, fair treatment of staff, and environmental conservation. At One Kilimanjaro  , we don't just guide climbs - we create unforgettable mountain experiences.</p>
                    
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Summit Experts</h4>
                                <p>95% success rate</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Safety First</h4>
                                <p>Certified mountain guides</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Eco-Friendly</h4>
                                <p>Sustainable climbing</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Local Experts</h4>
                                <p>Tanzanian owned & operated</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-primary">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

<!-- Mountain Activities Gallery Section -->
<section class="mountain-activities-gallery">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Kilimanjaro Experiences</span>
            <h2>Our Mountain Activities</h2>
            <p>Discover the incredible moments and breathtaking views from our Kilimanjaro expeditions</p>
        </div>
        
        <div class="activities-gallery-container">
            <div class="gallery-track" id="galleryTrack">
                <!-- Activity 1 -->
                <div class="activity-slide">
                    <img src="img/summit-cerebration.jpg" alt="Kilimanjaro Summit Celebration">
                </div>
                
                <!-- Activity 2 -->
                <div class="activity-slide">
                    <img src="img/camping-kilimanjaro.jpg" alt="High Camp Camping">
                </div>
                
                <!-- Activity 3 -->
                <div class="activity-slide">
                    <img src="img/glaciers-kilimanjaro.jpg" alt="Kilimanjaro Glaciers">
                </div>
                
                <!-- Activity 4 -->
                <div class="activity-slide">
                    <img src="img/kilimanjaro-sun-rise.jpg" alt="Sunrise on Kilimanjaro">
                </div>
                
                <!-- Activity 5 -->
                <div class="activity-slide">
                    <img src="img/support-on-mountain.jpg" alt="Mountain Crew Support">
                </div>
                
                <!-- Activity 6 -->
                <div class="activity-slide">
                    <img src="img/group-trekking.jpg" alt="Group Trekking Experience">
                </div>
                
                <!-- Activity 7 -->
                <div class="activity-slide">
                    <img src="img/kilimanjaro night.jpg" alt="Stargazing on Kilimanjaro">
                </div>
                
                <!-- Duplicate slides for seamless looping -->
                <div class="activity-slide">
                    <img src="img/summit-cerebration.jpg" alt="Kilimanjaro Summit Celebration">
                </div>
                
                <div class="activity-slide">
                    <img src="img/camping-kilimanjaro.jpg" alt="High Camp Camping">
                </div>
                
                <div class="activity-slide">
                    <img src="img/glaciers-kilimanjaro.jpg" alt="Kilimanjaro Glaciers">
                </div>
            </div>
            
            <!-- Navigation Controls -->
            <div class="gallery-controls">
                <button class="gallery-nav prev" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="gallery-nav next" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
/* Mountain Activities Gallery Styles */
.mountain-activities-gallery {
    padding: 80px 0;
    background: var(--light);
    position: relative;
    overflow: hidden;
}

.activities-gallery-container {
    position: relative;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    overflow: hidden;
}

.gallery-track {
    display: flex;
    gap: 20px;
    animation: slideWithPause 42s linear infinite; /* Longer duration for pauses */
    width: max-content;
}

.activity-slide {
    flex: 0 0 450px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    transition: all 0.4s ease;
    aspect-ratio: 1 / 1;
}

.activity-slide:hover {
    transform: scale(1.08);
    box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}

.activity-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Pause animation on hover */
.activities-gallery-container:hover .gallery-track {
    animation-play-state: paused;
}

/* Slide animation with pauses */
@keyframes slideWithPause {
    /* First slide visible for 3 seconds */
    0%, 4.76% {
        transform: translateX(0);
    }
    /* Slide to second image */
    9.52% {
        transform: translateX(calc(-450px - 20px));
    }
    /* Second slide visible for 3 seconds */
    9.53%, 14.29% {
        transform: translateX(calc(-450px - 20px));
    }
    /* Slide to third image */
    19.05% {
        transform: translateX(calc(-450px * 2 - 20px * 2));
    }
    /* Third slide visible for 3 seconds */
    19.06%, 23.81% {
        transform: translateX(calc(-450px * 2 - 20px * 2));
    }
    /* Slide to fourth image */
    28.57% {
        transform: translateX(calc(-450px * 3 - 20px * 3));
    }
    /* Fourth slide visible for 3 seconds */
    28.58%, 33.33% {
        transform: translateX(calc(-450px * 3 - 20px * 3));
    }
    /* Slide to fifth image */
    38.09% {
        transform: translateX(calc(-450px * 4 - 20px * 4));
    }
    /* Fifth slide visible for 3 seconds */
    38.1%, 42.86% {
        transform: translateX(calc(-450px * 4 - 20px * 4));
    }
    /* Slide to sixth image */
    47.62% {
        transform: translateX(calc(-450px * 5 - 20px * 5));
    }
    /* Sixth slide visible for 3 seconds */
    47.63%, 52.38% {
        transform: translateX(calc(-450px * 5 - 20px * 5));
    }
    /* Slide to seventh image */
    57.14% {
        transform: translateX(calc(-450px * 6 - 20px * 6));
    }
    /* Seventh slide visible for 3 seconds */
    57.15%, 61.9% {
        transform: translateX(calc(-450px * 6 - 20px * 6));
    }
    /* Slide to first duplicate (loop) */
    66.66% {
        transform: translateX(calc(-450px * 7 - 20px * 7));
    }
    /* First duplicate visible for 3 seconds */
    66.67%, 71.43% {
        transform: translateX(calc(-450px * 7 - 20px * 7));
    }
    /* Continue through duplicates... */
    76.19% {
        transform: translateX(calc(-450px * 8 - 20px * 8));
    }
    76.2%, 80.95% {
        transform: translateX(calc(-450px * 8 - 20px * 8));
    }
    85.71% {
        transform: translateX(calc(-450px * 9 - 20px * 9));
    }
    85.72%, 90.47% {
        transform: translateX(calc(-450px * 9 - 20px * 9));
    }
    /* Reset to start for seamless loop */
    95.23% {
        transform: translateX(calc(-450px * 10 - 20px * 10));
    }
    95.24%, 100% {
        transform: translateX(0);
    }
}

.gallery-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 30px;
    pointer-events: none;
    z-index: 10;
}

.gallery-nav {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--white);
    border: none;
    color: var(--primary);
    font-size: 22px;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
    pointer-events: all;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-nav:hover {
    background: var(--primary);
    color: var(--white);
    transform: scale(1.15);
}

/* Manual control styles */
.gallery-track.manual {
    animation: none;
    transition: transform 0.5s ease;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .activity-slide {
        flex: 0 0 400px;
    }
    
    @keyframes slideWithPause {
        0%, 4.76% { transform: translateX(0); }
        9.52% { transform: translateX(calc(-400px - 20px)); }
        9.53%, 14.29% { transform: translateX(calc(-400px - 20px)); }
        19.05% { transform: translateX(calc(-400px * 2 - 20px * 2)); }
        19.06%, 23.81% { transform: translateX(calc(-400px * 2 - 20px * 2)); }
        28.57% { transform: translateX(calc(-400px * 3 - 20px * 3)); }
        28.58%, 33.33% { transform: translateX(calc(-400px * 3 - 20px * 3)); }
        38.09% { transform: translateX(calc(-400px * 4 - 20px * 4)); }
        38.1%, 42.86% { transform: translateX(calc(-400px * 4 - 20px * 4)); }
        47.62% { transform: translateX(calc(-400px * 5 - 20px * 5)); }
        47.63%, 52.38% { transform: translateX(calc(-400px * 5 - 20px * 5)); }
        57.14% { transform: translateX(calc(-400px * 6 - 20px * 6)); }
        57.15%, 61.9% { transform: translateX(calc(-400px * 6 - 20px * 6)); }
        66.66% { transform: translateX(calc(-400px * 7 - 20px * 7)); }
        66.67%, 71.43% { transform: translateX(calc(-400px * 7 - 20px * 7)); }
        76.19% { transform: translateX(calc(-400px * 8 - 20px * 8)); }
        76.2%, 80.95% { transform: translateX(calc(-400px * 8 - 20px * 8)); }
        85.71% { transform: translateX(calc(-400px * 9 - 20px * 9)); }
        85.72%, 90.47% { transform: translateX(calc(-400px * 9 - 20px * 9)); }
        95.23% { transform: translateX(calc(-400px * 10 - 20px * 10)); }
        95.24%, 100% { transform: translateX(0); }
    }
}

@media (max-width: 992px) {
    .activity-slide {
        flex: 0 0 350px;
    }
    
    @keyframes slideWithPause {
        0%, 4.76% { transform: translateX(0); }
        9.52% { transform: translateX(calc(-350px - 20px)); }
        9.53%, 14.29% { transform: translateX(calc(-350px - 20px)); }
        19.05% { transform: translateX(calc(-350px * 2 - 20px * 2)); }
        19.06%, 23.81% { transform: translateX(calc(-350px * 2 - 20px * 2)); }
        28.57% { transform: translateX(calc(-350px * 3 - 20px * 3)); }
        28.58%, 33.33% { transform: translateX(calc(-350px * 3 - 20px * 3)); }
        38.09% { transform: translateX(calc(-350px * 4 - 20px * 4)); }
        38.1%, 42.86% { transform: translateX(calc(-350px * 4 - 20px * 4)); }
        47.62% { transform: translateX(calc(-350px * 5 - 20px * 5)); }
        47.63%, 52.38% { transform: translateX(calc(-350px * 5 - 20px * 5)); }
        57.14% { transform: translateX(calc(-350px * 6 - 20px * 6)); }
        57.15%, 61.9% { transform: translateX(calc(-350px * 6 - 20px * 6)); }
        66.66% { transform: translateX(calc(-350px * 7 - 20px * 7)); }
        66.67%, 71.43% { transform: translateX(calc(-350px * 7 - 20px * 7)); }
        76.19% { transform: translateX(calc(-350px * 8 - 20px * 8)); }
        76.2%, 80.95% { transform: translateX(calc(-350px * 8 - 20px * 8)); }
        85.71% { transform: translateX(calc(-350px * 9 - 20px * 9)); }
        85.72%, 90.47% { transform: translateX(calc(-350px * 9 - 20px * 9)); }
        95.23% { transform: translateX(calc(-350px * 10 - 20px * 10)); }
        95.24%, 100% { transform: translateX(0); }
    }
    
    .gallery-nav {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
    
    .gallery-controls {
        padding: 0 20px;
    }
}

@media (max-width: 768px) {
    .mountain-activities-gallery {
        padding: 60px 0;
    }
    
    .activity-slide {
        flex: 0 0 300px;
    }
    
    @keyframes slideWithPause {
        0%, 4.76% { transform: translateX(0); }
        9.52% { transform: translateX(calc(-300px - 20px)); }
        9.53%, 14.29% { transform: translateX(calc(-300px - 20px)); }
        19.05% { transform: translateX(calc(-300px * 2 - 20px * 2)); }
        19.06%, 23.81% { transform: translateX(calc(-300px * 2 - 20px * 2)); }
        28.57% { transform: translateX(calc(-300px * 3 - 20px * 3)); }
        28.58%, 33.33% { transform: translateX(calc(-300px * 3 - 20px * 3)); }
        38.09% { transform: translateX(calc(-300px * 4 - 20px * 4)); }
        38.1%, 42.86% { transform: translateX(calc(-300px * 4 - 20px * 4)); }
        47.62% { transform: translateX(calc(-300px * 5 - 20px * 5)); }
        47.63%, 52.38% { transform: translateX(calc(-300px * 5 - 20px * 5)); }
        57.14% { transform: translateX(calc(-300px * 6 - 20px * 6)); }
        57.15%, 61.9% { transform: translateX(calc(-300px * 6 - 20px * 6)); }
        66.66% { transform: translateX(calc(-300px * 7 - 20px * 7)); }
        66.67%, 71.43% { transform: translateX(calc(-300px * 7 - 20px * 7)); }
        76.19% { transform: translateX(calc(-300px * 8 - 20px * 8)); }
        76.2%, 80.95% { transform: translateX(calc(-300px * 8 - 20px * 8)); }
        85.71% { transform: translateX(calc(-300px * 9 - 20px * 9)); }
        85.72%, 90.47% { transform: translateX(calc(-300px * 9 - 20px * 9)); }
        95.23% { transform: translateX(calc(-300px * 10 - 20px * 10)); }
        95.24%, 100% { transform: translateX(0); }
    }
    
    .gallery-nav {
        width: 45px;
        height: 45px;
        font-size: 18px;
    }
    
    .gallery-controls {
        padding: 0 15px;
    }
}

@media (max-width: 576px) {
    .activity-slide {
        flex: 0 0 280px;
        border-radius: 6px;
    }
    
    @keyframes slideWithPause {
        0%, 4.76% { transform: translateX(0); }
        9.52% { transform: translateX(calc(-280px - 20px)); }
        9.53%, 14.29% { transform: translateX(calc(-280px - 20px)); }
        19.05% { transform: translateX(calc(-280px * 2 - 20px * 2)); }
        19.06%, 23.81% { transform: translateX(calc(-280px * 2 - 20px * 2)); }
        28.57% { transform: translateX(calc(-280px * 3 - 20px * 3)); }
        28.58%, 33.33% { transform: translateX(calc(-280px * 3 - 20px * 3)); }
        38.09% { transform: translateX(calc(-280px * 4 - 20px * 4)); }
        38.1%, 42.86% { transform: translateX(calc(-280px * 4 - 20px * 4)); }
        47.62% { transform: translateX(calc(-280px * 5 - 20px * 5)); }
        47.63%, 52.38% { transform: translateX(calc(-280px * 5 - 20px * 5)); }
        57.14% { transform: translateX(calc(-280px * 6 - 20px * 6)); }
        57.15%, 61.9% { transform: translateX(calc(-280px * 6 - 20px * 6)); }
        66.66% { transform: translateX(calc(-280px * 7 - 20px * 7)); }
        66.67%, 71.43% { transform: translateX(calc(-280px * 7 - 20px * 7)); }
        76.19% { transform: translateX(calc(-280px * 8 - 20px * 8)); }
        76.2%, 80.95% { transform: translateX(calc(-280px * 8 - 20px * 8)); }
        85.71% { transform: translateX(calc(-280px * 9 - 20px * 9)); }
        85.72%, 90.47% { transform: translateX(calc(-280px * 9 - 20px * 9)); }
        95.23% { transform: translateX(calc(-280px * 10 - 20px * 10)); }
        95.24%, 100% { transform: translateX(0); }
    }
    
    .gallery-nav {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    
    .gallery-controls {
        padding: 0 10px;
    }
}

/* Touch device improvements */
@media (hover: none) and (pointer: coarse) {
    .gallery-nav {
        display: none;
    }
    
    .gallery-track {
        animation-duration: 60s; /* Even slower on touch devices */
    }
    
    .activity-slide:hover {
        transform: none;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .gallery-track {
        animation: none;
    }
    
    .activity-slide:hover {
        transform: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryTrack = document.getElementById('galleryTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let isManualControl = false;
    let currentPosition = 0;
    const slideWidth = 470; // 450px + 20px gap
    
    // Get current slide width for responsive calculations
    function getCurrentSlideWidth() {
        const firstSlide = document.querySelector('.activity-slide');
        if (firstSlide) {
            const slideStyle = window.getComputedStyle(firstSlide);
            const slideWidth = parseInt(slideStyle.width);
            const gap = parseInt(window.getComputedStyle(galleryTrack).gap);
            return slideWidth + gap;
        }
        return 470;
    }
    
    // Pause auto-slide on manual interaction
    function pauseAutoSlide() {
        if (!isManualControl) {
            galleryTrack.style.animationPlayState = 'paused';
            galleryTrack.classList.add('manual');
            isManualControl = true;
        }
    }
    
    // Resume auto-slide after manual interaction
    function resumeAutoSlide() {
        if (isManualControl) {
            // Reset animation to current position
            const currentSlideWidth = getCurrentSlideWidth();
            const currentSlide = Math.round(Math.abs(currentPosition) / currentSlideWidth);
            galleryTrack.style.animation = 'none';
            void galleryTrack.offsetHeight; // Trigger reflow
            galleryTrack.style.animation = `slideWithPause 42s linear infinite`;
            galleryTrack.style.animationDelay = `-${currentSlide * 4.76}s`;
            galleryTrack.classList.remove('manual');
            isManualControl = false;
        }
    }
    
    // Manual navigation functions
    function nextSlide() {
        pauseAutoSlide();
        const currentSlideWidth = getCurrentSlideWidth();
        currentPosition -= currentSlideWidth;
        galleryTrack.style.transform = `translateX(${currentPosition}px)`;
        
        if (currentPosition <= -currentSlideWidth * 7) {
            setTimeout(() => {
                galleryTrack.style.transition = 'none';
                currentPosition = 0;
                galleryTrack.style.transform = `translateX(${currentPosition}px)`;
                setTimeout(() => {
                    galleryTrack.style.transition = 'transform 0.5s ease';
                }, 50);
            }, 500);
        }
    }
    
    function prevSlide() {
        pauseAutoSlide();
        const currentSlideWidth = getCurrentSlideWidth();
        currentPosition += currentSlideWidth;
        galleryTrack.style.transform = `translateX(${currentPosition}px)`;
        
        if (currentPosition > 0) {
            setTimeout(() => {
                galleryTrack.style.transition = 'none';
                currentPosition = -currentSlideWidth * 6;
                galleryTrack.style.transform = `translateX(${currentPosition}px)`;
                setTimeout(() => {
                    galleryTrack.style.transition = 'transform 0.5s ease';
                }, 50);
            }, 500);
        }
    }
    
    // Event listeners for manual controls
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    
    // Resume auto-slide after 5 seconds of inactivity
    let inactivityTimer;
    function resetInactivityTimer() {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(resumeAutoSlide, 5000);
    }
    
    // Track user interactions
    [prevBtn, nextBtn, galleryTrack].forEach(element => {
        element.addEventListener('click', resetInactivityTimer);
        element.addEventListener('touchstart', resetInactivityTimer);
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            resetInactivityTimer();
        }
        if (e.key === 'ArrowRight') {
            nextSlide();
            resetInactivityTimer();
        }
    });
    
    // Initialize
    resetInactivityTimer();
});
</script>

<!-- Best Routes Section -->
<section class="section destinations">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Kilimanjaro Routes</span>
            <h2>Discover Kilimanjaro's Best Climbing Routes</h2>
            <p>Choose from our carefully selected routes that showcase different aspects of Kilimanjaro's majestic beauty and challenge levels.</p>
        </div>
        
        <div class="destinations-grid">
            <!-- Machame Route -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/Machame-route.jpg" alt="Machame Route Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Machame Route</h3>
                        <p>The Whiskey Route</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>Known as the "Whiskey Route," this popular path offers stunning scenery and high success rates with 6-7 days for proper acclimatization.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-chart-line"></i> High Success Rate</span>
                        <span><i class="fas fa-camera"></i> Scenic Beauty</span>
                        <span><i class="fas fa-calendar-day"></i> 6-7 Days</span>
                    </div>
                    <a href="machame-route.php" class="btn btn-primary">Explore Machame</a>
                </div>
            </div>
            
            <!-- Marangu Route -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/marangu-kilimanjaro.jpg" alt="Marangu Route Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Marangu Route</h3>
                        <p>The Coca-Cola Route</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>The only route offering hut accommodations, Marangu is often called the "Coca-Cola Route" and is the oldest path up Kilimanjaro.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-bed"></i> Hut Accommodations</span>
                        <span><i class="fas fa-hiking"></i> Gentle Slopes</span>
                        <span><i class="fas fa-calendar-day"></i> 5-6 Days</span>
                    </div>
                    <a href="marangu-route-kilimanjaro.php" class="btn btn-primary">Explore Marangu</a>
                </div>
            </div>
            
            <!-- Lemosho Route -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/lemosho-route-7-days-private.jpg" alt="Lemosho Route Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Lemosho Route</h3>
                        <p>Most Scenic Path</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>Considered the most beautiful route, Lemosho offers a remote start with excellent acclimatization profile and high summit success.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-mountain"></i> Remote Start</span>
                        <span><i class="fas fa-heart"></i> Best Acclimatization</span>
                        <span><i class="fas fa-calendar-day"></i> 7-8 Days</span>
                    </div>
                    <a href="lemosho-route.php" class="btn btn-primary">Explore Lemosho</a>
                </div>
            </div>
            
            <!-- Rongai Route -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/Rongai Route.jpg" alt="Rongai Route Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Rongai Route</h3>
                        <p>Northern Approach</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>The only route approaching from the north near the Kenyan border, offering a more remote experience with drier conditions.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-compass"></i> Northern Approach</span>
                        <span><i class="fas fa-cloud-sun"></i> Drier Conditions</span>
                        <span><i class="fas fa-calendar-day"></i> 6-7 Days</span>
                    </div>
                    <a href="rongai-route.php" class="btn btn-primary">Explore Rongai</a>
                </div>
            </div>
            
            <!-- Umbwe Route -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                       <img src="img/umbwe-trekking-route.jpg" alt="Umbwe Route Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Umbwe Route</h3>
                        <p>Most Challenging</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>The steepest and most direct route to the summit, recommended only for experienced climbers seeking the ultimate challenge.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-running"></i> Most Direct</span>
                        <span><i class="fas fa-skull"></i> Experienced Only</span>
                        <span><i class="fas fa-calendar-day"></i> 6-7 Days</span>
                    </div>
                    <a href="umbwe-route.php" class="btn btn-primary">Explore Umbwe</a>
                </div>
            </div>


           <!-- Northern Circuit -->
<div class="destination-card">
    <div class="destination-image">
        <div class="image-container">
            <img src="img/northern-circuit route.jpg" alt="Northern Circuit Kilimanjaro">
        </div>
        <div class="destination-overlay">
            <h3>Northern Circuit</h3>
            <p>Longest Route</p>
        </div>
    </div>
    <div class="destination-content">
        <p>The newest and longest route, circumnavigating the northern slopes with maximum acclimatization time and incredible views.</p>
        <div class="destination-features">
            <span><i class="fas fa-route"></i> Longest Route</span>
            <span><i class="fas fa-lungs"></i> Best Acclimatization</span>
            <span><i class="fas fa-calendar-day"></i> 8-9 Days</span>
        </div>
        <a href="northern-circuit-route.php" class="btn btn-primary">Explore Northern Circuit</a>
    </div>
</div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section class="section features">
        <div class="container">
                      <div class="section-title">

            <h2>Why Choose Our Kilimanjaro Expeditions</h2>
            <p>Discover what sets us apart as Tanzania's premier Kilimanjaro climbing specialists.</p>
        </div>
        

            <div class="features-grid">
                <div class="feature-card">
                    
                    <div class="feature-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Expert Mountain Guides</h3>
                    <p>Our certified guides have hundreds of successful summits and extensive wilderness first aid training.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>95% Summit Success</h3>
                    <p>Industry-leading success rate thanks to our careful acclimatization schedules and expert guidance.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety First Approach</h3>
                    <p>Comprehensive safety protocols, emergency oxygen, and regular health checks throughout your climb.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Ethical Operations</h3>
                    <p>Fair wages for our crew, eco-friendly practices, and support for local mountain communities.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Add this section where you want the Instagram posts to appear -->
    <section class="instagram-section">
        <div class="container">
            <h2>Follow Our Kilimanjaro Adventures</h2>
            
            <!-- NEW: Instagram button added here -->
            
            <div class="container">
            <a href="https://instagram.com/yourprofile" target="_blank" class="instagram-follow-btn">
                <i class="fab fa-instagram"></i>
                Follow Our Climbs
            </a>
            
            <div class="instagram-grid">
                <!-- Post 1 -->
                <div class="instagram-post">
                    <img src="img/Climb-Kilimanjaro-1.jpg" alt="Kilimanjaro summit celebration" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post1" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Post 2 -->
                <div class="instagram-post">
                    <img src="img/kili-sun-rise.jpg" alt="Sunrise from Kilimanjaro" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="instagram-post">
                    <img src="img/kilimanjaro-team.jpg" alt="Our mountain crew" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="instagram-post">
                    <img src="img/camping-kilimanjaro.jpg" alt="High camp on Kilimanjaro" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="instagram-post">
                    <img src="img/Kilimanjaro-glaciers.jpg" alt="Kilimanjaro glaciers" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Post 3 -->
                <div class="instagram-post">
                    <img src="img/k.imanjaro-summit-cerebration.jpg" alt="Group climbing Kilimanjaro" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post3" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>            
                    </div>
    
                </div>
                
            </div>
        </div>
        
    </section>

<!-- Blog Articles Section -->

</section>

    <!-- Climbing Packages Section -->
    <!-- Kilimanjaro Packages Section -->
<section class="section safari-packages" id="packages">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Premium Experiences</span>
            <h2>Recommended Kilimanjaro Packages</h2>
        </div>
        
        <div class="packages-grid">
            <!-- Package 1 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/machame-route-climb.jpg" alt="Machame Route 6 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Machame 6-Day Adventure</h3>
                    <p class="package-duration">6 Days / 5 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Machame Route - "Whiskey Route"</span>
                        <span><i class="fas fa-tent"></i> Full Camping Experience</span>
                        <span><i class="fas fa-chart-line"></i> Excellent Acclimatization</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$2,299</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="6-day-machame-route.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Package 2 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/lemosho-route-climb.jpg" alt="Lemosho Route 7 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Lemosho 7-Day Scenic Trek</h3>
                    <p class="package-duration">7 Days / 6 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Lemosho Route - Most Scenic</span>
                        <span><i class="fas fa-tent"></i> Wilderness Camping</span>
                        <span><i class="fas fa-heartbeat"></i> Optimal Acclimatization</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$2,799</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="7-day-lemosho-route.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            
            
            <!-- Package 3 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/marangu-route-5-days.jpg" alt="Marangu Route 5 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Marangu 5-Day Express</h3>
                    <p class="package-duration">5 Days / 4 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Marangu - "Coca-Cola Route"</span>
                        <span><i class="fas fa-bed"></i> Mountain Hut Accommodation</span>
                        <span><i class="fas fa-bolt"></i> Fastest Summit Approach</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$1,999</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="5-day-marangu.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Package 4 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/northern-circuit-climbing.jpg" alt="Northern Circuit 8 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Northern Circuit 9-Day</h3>
                    <p class="package-duration">9 Days / 8 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Northern Circuit Route</span>
                        <span><i class="fas fa-tent"></i> Premium Camping Experience</span>
                        <span><i class="fas fa-shield-alt"></i> Highest Success Rate</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$3,299</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="9-day-northern-circuit.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Package 5 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/rongai-route-trekking.jpg" alt="Rongai Route 6 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Rongai 6-Day Remote Trek</h3>
                    <p class="package-duration">6 Days / 5 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Rongai - Northern Approach</span>
                        <span><i class="fas fa-tent"></i> Remote Wilderness Experience</span>
                        <span><i class="fas fa-sun"></i> Drier Climbing Conditions</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$2,499</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="6-day-rongai-route.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Package 6 -->
            <div class="package-card">
                <div class="package-image">
                    <img src="img/umbwe-route-trekking.jpg" alt="Umbwe Route 6 Days">
                    <div class="package-overlay">
                    </div>
                </div>
                <div class="package-content">
                    <h3>Umbwe 6-Day Challenge</h3>
                    <p class="package-duration">6 Days / 5 Nights</p>
                    <div class="package-features">
                        <span><i class="fas fa-mountain"></i> Umbwe - Steepest Route</span>
                        <span><i class="fas fa-tent"></i> Advanced Climbers Only</span>
                        <span><i class="fas fa-rocket"></i> Most Direct Summit Approach</span>
                    </div>
                    <div class="package-footer">
                        <div class="package-price">
                            <span class="from">From</span>
                            <span class="amount">$2,599</span>
                            <span class="per-person">per person</span>
                        </div>
                        <a href="6-day-umbwe-route.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TripAdvisor Reviews Section -->
<section class="tripadvisor-reviews">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Client Experiences</span>
            <h2>What Our Climbers Say</h2>
            <p>Read authentic reviews from adventurers who conquered Kilimanjaro with us</p>
        </div>
        
        <div class="reviews-grid">
            <!-- Review 1 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-1.jpg" alt="Island H">
                    </div>
                    <div class="client-info">
                        <h4>Island H</h4>
                        <span class="review-date">Oct 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Amazing Altezza</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>Wow wow wow! One Kilimanjaro  got a group of 7 of us up to the summit and back safely. They set up camp and portable toilets for us, the food was delicious, the crew was incredibly supportive throughout the entire journey...</p>
                    </div>
                    <div class="review-full">
                        <p>Wow wow wow! One Kilimanjaro  got a group of 7 of us up to the summit and back safely. They set up camp and portable toilets for us, the food was delicious, the crew was incredibly supportive throughout the entire journey. Our guides were knowledgeable about every aspect of the mountain and kept us motivated during the tough summit push. The equipment provided was top-notch and the attention to safety was exceptional. I would recommend One Kilimanjaro  to anyone considering climbing Kilimanjaro - they truly deliver an unforgettable experience!</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
            
            <!-- Review 2 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-2.jpg" alt="S Y">
                    </div>
                    <div class="client-info">
                        <h4>S Y</h4>
                        <span class="review-date">Oct 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Five star experience!</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>The team led by Stanford (head guide), Agrey, Joseph, Michael, Lihiru and Honest were the reason for our amazing experience. Their professionalism and dedication made our Kilimanjaro climb unforgettable...</p>
                    </div>
                    <div class="review-full">
                        <p>The team led by Stanford (head guide), Agrey, Joseph, Michael, Lihiru and Honest were the reason for our amazing experience. Their professionalism and dedication made our Kilimanjaro climb unforgettable. Each guide brought unique expertise and personality to the journey, creating a perfect balance of safety, education, and entertainment. The porters worked tirelessly to ensure our comfort, and the chef prepared meals that exceeded all expectations at high altitude. The summit night was challenging, but with their constant encouragement and expert pacing, all members of our group reached Uhuru Peak successfully. This was truly a five-star experience from start to finish!</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
            
            <!-- Review 3 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-3.jpg" alt="Michael T">
                    </div>
                    <div class="client-info">
                        <h4>Michael T</h4>
                        <span class="review-date">Sep 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Life-changing adventure!</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>From the initial booking to standing on the summit, every detail was perfectly handled. The guides were knowledgeable about the mountain and kept us motivated when the climb got tough. The porters were true heroes...</p>
                    </div>
                    <div class="review-full">
                        <p>From the initial booking to standing on the summit, every detail was perfectly handled. The guides were knowledgeable about the mountain and kept us motivated when the climb got tough. The porters were true heroes, carrying heavy loads with smiles on their faces and always ready to help. What impressed me most was the daily health checks and the careful attention to acclimatization. The team knew exactly when to push and when to rest, which resulted in our entire group summiting without any altitude issues. The celebration at the top with champagne and certificates was a beautiful touch. This wasn't just a climb; it was a life-changing adventure that I'll cherish forever!</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
            
            <!-- Review 4 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-4.jpg" alt="Sarah J">
                    </div>
                    <div class="client-info">
                        <h4>Sarah J</h4>
                        <span class="review-date">Aug 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Exceeded all expectations</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>I was nervous about climbing Kilimanjaro, but the team made me feel safe and supported throughout. The equipment was top-quality, the food was amazing, and the guides were incredibly patient. Reaching the summit was...</p>
                    </div>
                    <div class="review-full">
                        <p>I was nervous about climbing Kilimanjaro, but the team made me feel safe and supported throughout. The equipment was top-quality, the food was amazing, and the guides were incredibly patient. Reaching the summit was an emotional moment that I'll never forget. As a solo female traveler, I particularly appreciated how the team made me feel included and cared for. The sleeping tents were spacious and comfortable, and having a private toilet tent was a luxury I didn't expect on a mountain climb! The guides shared fascinating stories about the mountain's history and ecology, which made each day's trek educational as well as challenging. One Kilimanjaro  exceeded all my expectations in every possible way.</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
            
            <!-- Review 5 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-5.jpg" alt="David L">
                    </div>
                    <div class="client-info">
                        <h4>David L</h4>
                        <span class="review-date">Jul 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Professional and caring team</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>The attention to detail was impressive. Our guides checked our oxygen levels daily, adjusted our pace perfectly, and shared fascinating stories about the mountain. The entire crew worked seamlessly together...</p>
                    </div>
                    <div class="review-full">
                        <p>The attention to detail was impressive. Our guides checked our oxygen levels daily, adjusted our pace perfectly, and shared fascinating stories about the mountain. The entire crew worked seamlessly together like a well-oiled machine. What stood out to me was their genuine care for each climber's wellbeing. When one member of our group struggled with altitude sickness, the guides immediately implemented their emergency protocols and provided exceptional care until she recovered. The communication throughout the climb was excellent - we always knew what to expect each day. The celebration dinner back at the hotel with the entire crew was a beautiful way to conclude this incredible journey. I can't recommend One Kilimanjaro  highly enough!</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
            
            <!-- Review 6 -->
            <div class="review-card">
                <div class="review-header">
                    <div class="client-avatar">
                        <img src="img/client-6.jpg" alt="Emma R">
                    </div>
                    <div class="client-info">
                        <h4>Emma R</h4>
                        <span class="review-date">Jun 2025</span>
                    </div>
                    <div class="tripadvisor-brand">
                        <span class="trip">trip</span><span class="advisor">advisor</span>
                    </div>
                </div>
                
                <div class="review-title">
                    <h3>Best decision of my life</h3>
                </div>
                
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="review-content">
                    <div class="review-excerpt">
                        <p>Choosing One Kilimanjaro  for my Kilimanjaro climb was the best decision I could have made. The guides were not only experts but also became friends. They celebrated every milestone with us and made sure we had the energy...</p>
                    </div>
                    <div class="review-full">
                        <p>Choosing One Kilimanjaro  for my Kilimanjaro climb was the best decision I could have made. The guides were not only experts but also became friends. They celebrated every milestone with us and made sure we had the energy and motivation to continue. The "pole pole" (slowly slowly) approach really works! I never felt rushed or pressured, and the gradual acclimatization made summit day achievable. The views from each camp were breathtaking, and waking up to hot coffee delivered to our tents was a luxury I'll always remember. The team's commitment to environmental conservation was also impressive - they practiced Leave No Trace principles throughout the climb. This experience has given me confidence to take on more challenges in life. Thank you, Altezza!</p>
                    </div>
                </div>
                
                <div class="review-footer">
                    <button class="read-review-btn">
                        <span class="read-text">Read Full Review</span>
                        <span class="collapse-text" style="display: none;">Show Less</span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- NEW: Read More Reviews Button -->
        <div class="more-reviews-cta">
            <a href="#" class="tripadvisor-btn">
                Read More Reviews
            </a>
        </div>
        
        
    </div>
</section>

<style>
/* TripAdvisor Reviews Section Styles */
.tripadvisor-reviews {
    padding: px 0;
    background: var(--white);
    position: relative;
}

.reviews-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 40px; /* Reduced margin to accommodate new button */
}

/* NEW: Read More Reviews Button Styles */
.more-reviews-cta {
    text-align: center;
    margin-bottom: 50px;
}

.tripadvisor-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #00AA6C; /* TripAdvisor green */
    color: white;
    text-decoration: none;
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 170, 108, 0.3);
    border: 2px solid #00AA6C;
    position: relative;
    overflow: hidden;
}

.tripadvisor-btn:hover {
    background: white;
    color: #00AA6C;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 170, 108, 0.4);
}

.tripadvisor-btn:active {
    transform: translateY(-1px);
}

/* Rest of the existing styles remain the same */
.review-card {
    background: var(--light);
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.06);
    transition: all 0.4s ease;
    border: 1px solid rgba(117, 104, 44, 0.08);
    display: flex;
    flex-direction: column;
    height: auto;
    position: relative;
    overflow: hidden;
}

.review-card.expanded {
    position: relative;
    z-index: 10;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    transform: translateY(-5px);
}

.review-header {
    display: flex;
    align-items: center;
    margin-bottom: 18px;
    position: relative;
}

.client-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 12px;
    border: 2px solid var(--primary);
    flex-shrink: 0;
}

.client-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.client-info {
    flex: 1;
    text-align: left;
}

.client-info h4 {
    font-size: 16px;
    margin-bottom: 4px;
    color: var(--dark);
    font-weight: 600;
}

.review-date {
    font-size: 13px;
    color: var(--text);
    opacity: 0.7;
}

.tripadvisor-brand {
    font-size: 14px;
    font-weight: 700;
    position: absolute;
    top: 0;
    right: 0;
}

.trip {
    color: #000000;
}

.advisor {
    color: #00AA6C;
}

.review-title {
    margin-bottom: 12px;
    text-align: left;
}

.review-title h3 {
    font-size: 18px;
    color: var(--dark);
    margin: 0;
    font-weight: 600;
    line-height: 1.3;
}

.star-rating {
    margin-bottom: 15px;
    display: flex;
    gap: 2px;
    justify-content: flex-start;
}

.star-rating i {
    color: #00AA6C;
    font-size: 14px;
}

.review-content {
    flex: 1;
    margin-bottom: 20px;
    position: relative;
    text-align: left;
}

.review-excerpt p {
    color: var(--text);
    line-height: 1.5;
    margin: 0;
    font-size: 14px;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.review-full {
    display: none;
    color: var(--text);
    line-height: 1.6;
    margin: 0;
    font-size: 14px;
}

.review-card.expanded .review-excerpt {
    display: none;
}

.review-card.expanded .review-full {
    display: block;
    animation: fadeIn 0.5s ease;
}

.review-footer {
    padding-top: 15px;
    border-top: 1px solid rgba(117, 104, 44, 0.1);
    margin-top: auto;
    text-align: left;
}

.read-review-btn {
    background: none;
    border: none;
    color: var(--primary);
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    padding: 5px 0;
}

.read-review-btn:after {
    content: '↓';
    margin-left: 5px;
    transition: transform 0.3s ease;
    font-size: 12px;
}

.read-review-btn.expanded:after {
    content: '↑';
}

.read-review-btn:hover {
    color: var(--secondary);
}

.reviews-cta {
    background: var(--light);
    border-radius: 12px;
    padding: 40px;
    text-align: center;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    border: 1px solid rgba(117, 104, 44, 0.1);
}

.cta-content h3 {
    font-size: 24px;
    margin-bottom: 12px;
    color: var(--dark);
}

.cta-content p {
    color: var(--text);
    margin-bottom: 25px;
    font-size: 15px;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.review-card {
    animation: fadeInUp 0.5s ease forwards;
}

.review-card:nth-child(1) { animation-delay: 0.1s; }
.review-card:nth-child(2) { animation-delay: 0.2s; }
.review-card:nth-child(3) { animation-delay: 0.3s; }
.review-card:nth-child(4) { animation-delay: 0.4s; }
.review-card:nth-child(5) { animation-delay: 0.5s; }
.review-card:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .reviews-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .tripadvisor-reviews {
        padding: 60px 0;
    }
    
    .reviews-grid {
        grid-template-columns: 1fr;
        max-width: 450px;
        margin: 0 auto 40px;
    }
    
    .review-card {
        padding: 20px;
    }
    
    .review-header {
        flex-direction: row;
        text-align: left;
        gap: 0;
    }
    
    .client-avatar {
        margin-right: 12px;
        margin-bottom: 0;
    }
    
    .client-info {
        text-align: left;
        flex: 1;
    }
    
    .tripadvisor-brand {
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 0;
    }
    
    .review-title {
        text-align: left;
    }
    
    .star-rating {
        justify-content: flex-start;
    }
    
    .review-content {
        text-align: left;
    }
    
    .review-footer {
        text-align: left;
    }
    
    /* NEW: Mobile styles for the button */
    .tripadvisor-btn {
        padding: 12px 28px;
        font-size: 15px;
        width: 100%;
        max-width: 280px;
    }
    
    .reviews-cta {
        padding: 30px;
    }
    
    .cta-content h3 {
        font-size: 22px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 220px;
    }
}

@media (max-width: 576px) {
    .review-header {
        flex-direction: row;
        align-items: flex-start;
    }
    
    .client-avatar {
        width: 45px;
        height: 45px;
        margin-right: 10px;
    }
    
    .client-info h4 {
        font-size: 15px;
    }
    
    .review-date {
        font-size: 12px;
    }
    
    .tripadvisor-brand {
        font-size: 13px;
        position: absolute;
        top: 0;
        right: 0;
    }
    
    .review-title h3 {
        font-size: 17px;
    }
    
    /* NEW: Smaller mobile button */
    .tripadvisor-btn {
        padding: 11px 24px;
        font-size: 14px;
        max-width: 260px;
    }
    
    .reviews-cta {
        padding: 25px 20px;
    }
    
    .cta-content h3 {
        font-size: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readReviewButtons = document.querySelectorAll('.read-review-btn');
    
    readReviewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const reviewCard = this.closest('.review-card');
            const readText = this.querySelector('.read-text');
            const collapseText = this.querySelector('.collapse-text');
            
            // Toggle expanded class
            reviewCard.classList.toggle('expanded');
            this.classList.toggle('expanded');
            
            // Toggle button text
            if (reviewCard.classList.contains('expanded')) {
                readText.style.display = 'none';
                collapseText.style.display = 'inline';
            } else {
                readText.style.display = 'inline';
                collapseText.style.display = 'none';
            }
            
            // Close other expanded reviews
            if (reviewCard.classList.contains('expanded')) {
                document.querySelectorAll('.review-card.expanded').forEach(card => {
                    if (card !== reviewCard) {
                        card.classList.remove('expanded');
                        const otherButton = card.querySelector('.read-review-btn');
                        otherButton.classList.remove('expanded');
                        const otherReadText = otherButton.querySelector('.read-text');
                        const otherCollapseText = otherButton.querySelector('.collapse-text');
                        otherReadText.style.display = 'inline';
                        otherCollapseText.style.display = 'none';
                    }
                });
            }
        });
    });
    
    // Close expanded reviews when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.review-card')) {
            document.querySelectorAll('.review-card.expanded').forEach(card => {
                card.classList.remove('expanded');
                const button = card.querySelector('.read-review-btn');
                button.classList.remove('expanded');
                const readText = button.querySelector('.read-text');
                const collapseText = button.querySelector('.collapse-text');
                readText.style.display = 'inline';
                collapseText.style.display = 'none';
            });
        }
    });
});

</script>
<!-- Blog Articles Section -->
<section class="section blog-articles">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Climbing Insights</span>
            <h2>Kilimanjaro Resources & Stories</h2>
            <p>Discover the latest climbing tips, success stories, and essential information for your Kilimanjaro adventure.</p>
        </div>
        
        <div class="blog-grid">
            <!-- Blog Article 1 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/kilimanjaro-training.jpg" alt="Kilimanjaro Training">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Complete Training Guide: Preparing Your Body for Kilimanjaro</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    
                    <a href="kilimanjaro-training-guide.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 2 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/Mountain Sickness.jpg" alt="Altitude Sickness Prevention">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Altitude Sickness: Prevention and Management on Kilimanjaro</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="kilimanjaro-altitude-sickness.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 3 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/packing-list.jpg" alt="Kilimanjaro Packing List">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Ultimate Kilimanjaro Packing List: Essential Gear for Summit Success</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="kilimanjaro-packing-list.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 4 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/climbing-kilimanjaro.jpg" alt="Kilimanjaro Weather Guide">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Kilimanjaro Weather Guide: Best Times to Climb and What to Expect</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="kilimanjaro-weather-best-time-to-climb.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 5 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/travel-assuarance.jpg" alt="Summit Success Story">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Why Travel Insurance is Essential for Your Kilimanjaro Climb </h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="travel-insurance-importance.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 6 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/environment.jpg" alt="Kilimanjaro Environment">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Preserving Kilimanjaro: Environmental Conservation and Responsible Climbing</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="environmental-conservation-kilimanjaro.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
        
        <div class="blog-cta">
            <a href="#" class="btn btn-primary">View All Articles</a>
        </div>
    </div>
</section>


<!--Call to actions-->
 <?php include 'plugins/call-to-action.php';?>
 
<!-- ?php include 'plugins/pop-up-expert.php';?-->
    <!--Call to actions ends-->



    <?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>



    <!-- Additional sections would continue here for Kilimanjaro, Itineraries, About Tanzania, etc. -->

    
</body>
</html>