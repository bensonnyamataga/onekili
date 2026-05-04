<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Kilimanjaro  </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">
    <style>
/* Base Styles */
:root {
    --primary: #75682C;
    --secondary: #e0b354;
    --accent: #d4a762;
    --dark: #1a1a1a;
    --light: #F6F4F2;
    --white: #F6F4F2;
    --text: #444444;
    --heading: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
    --body: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--body);
    color: var(--text);
    line-height: 1.6;
    overflow-x: hidden;
    background-color: var(--light);
}

h1, h2, h3, h4, h5, h6 {
    font-family: var(--heading);
    color: var(--dark);
    margin-bottom: 15px;
    line-height: 1.3;
    font-weight: 600;
}

a {
    text-decoration: none;
    transition: all 0.3s ease;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

.travolo-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.travolo-btn {
    display: inline-block;
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 14px;
    text-align: center;
}

.travolo-btn-primary {
    background-color: var(--primary);
    color: var(--white);
    box-shadow: 0 4px 15px rgba(42, 92, 69, 0.3);
}

.travolo-btn-primary:hover {
    background-color: #d4a336;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(42, 92, 69, 0.4);
}

.travolo-btn-secondary {
    background-color: var(--secondary);
    color: var(--dark);
    box-shadow: 0 4px 15px rgba(224, 179, 84, 0.3);
}

.travolo-btn-secondary:hover {
    background-color: #d4a336;
    color: var(--dark);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(224, 179, 84, 0.4);
}

.travolo-section {
    padding: 80px 0;
}

.travolo-section-title {
    text-align: center;
    margin-bottom: 50px;
}

.travolo-section-title .travolo-subtitle {
    display: block;
    color: var(--primary);
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 12px;
    text-transform: lowercase;
    letter-spacing: 2px;
}

.travolo-section-title h2 {
    font-size: 28px;
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
}

.travolo-section-title h2:after {
    content: '';
    position: absolute;
    width: 50px;
    height: 3px;
    background: var(--secondary);
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
}

.travolo-section-title p {
    max-width: 700px;
    margin: 0 auto;
    font-size: 16px;
    color: var(--text);
    padding: 0 15px;
}

/* Header Styles - UNIQUE CLASSES */
.travolo-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9997;
    transition: all 0.3s ease;
    background-color: var(--light);
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.travolo-header.scrolled {
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.travolo-header-top {
    background-color: #f3eeea;
    padding: 8px 0; /* Reduced from 0px to make header more compact */
    color: var(--text);
    font-size: 13px;
}

.travolo-header-top-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.travolo-specialist-info {
    display: flex;
    align-items: center;
    gap: 20px;
}

.travolo-specialist-tag {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #444444;
}

.travolo-review-badges {
    display: flex;
    align-items: center;
    gap: 20px;
}

.travolo-review-badge {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 500;
}

.travolo-stars {
    display: flex;
    gap: 2px;
}

.travolo-stars i {
    color: #FFC107;
    font-size: 12px;
}

/* Language Switcher Styles - UNIQUE CLASSES */
.travolo-language-switcher {
    position: relative;
    display: inline-block;
}

.travolo-current-language {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
    color: var(--text);
}

.travolo-current-language:hover {
    background-color: rgba(117, 104, 44, 0.1);
}

.travolo-language-dropdown {
    position: absolute;
    top: 100%;
    right: 0;
    background: var(--white);
    border-radius: 8px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    min-width: 150px;
    z-index: 1002;
    display: none;
    overflow: hidden;
}

.travolo-language-dropdown.active {
    display: block;
}

.travolo-language-option {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s;
    border-bottom: 1px solid #f0f0f0;
}

.travolo-language-option:last-child {
    border-bottom: none;
}

.travolo-language-option:hover {
    background-color: #f5f5f5;
}

.travolo-language-option.active {
    background-color: rgba(117, 104, 44, 0.1);
    font-weight: 600;
}

.travolo-flag-icon {
    width: 20px;
    height: 15px;
    border-radius: 2px;
}

.travolo-header-main {
    padding: 12px 0; /* Reduced padding for more compact header */
}

.travolo-header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo Styles - FIXED: Proper aspect ratio for both desktop and mobile */
.travolo-logo {
    display: flex;
    align-items: center;
}

.one-kilimanjaro-logo {
    /* Desktop: Reduced size, fixed width with auto height for proper aspect ratio */
    width: 180px; /* Fixed width to prevent squishing */
    height: auto; /* Auto height to maintain aspect ratio */
    max-height: 65px; /* Maximum height to prevent too tall */
    object-fit: contain; /* Ensures image maintains aspect ratio */
    transition: all 0.3s ease;
}

.travolo-nav ul {
    display: flex;
    list-style: none;
}

.travolo-nav ul li {
    margin-left: 20px; /* Reduced spacing for more compact header */
}

.travolo-nav ul li a {
    color: #1a1a1a;
    font-weight: 700;
    position: relative;
    font-size: 14px; /* Slightly smaller font */
    text-transform: uppercase;
    letter-spacing: 1.2px; /* Reduced letter spacing */
    padding: 6px 0; /* Reduced padding */
}

.travolo-nav ul li a:after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background: var(--primary);
    bottom: 0;
    left: 0;
    transition: width 0.3s ease;
}

.travolo-nav ul li a:hover {
    color: var(--primary);
}

.travolo-nav ul li a:hover:after {
    width: 100%;
}

/* Mobile Menu Button - UNIQUE CLASSES */
.travolo-mobile-menu-btn {
    display: none;
    font-size: 24px;
    color: var(--dark);
    cursor: pointer;
    z-index: 10000;
    transition: all 0.3s ease;
    width: 30px;
    height: 30px;
    position: relative;
}

.travolo-hamburger-icon, .travolo-close-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.travolo-hamburger-icon {
    opacity: 1;
}

.travolo-close-icon {
    opacity: 0;
}

.travolo-mobile-menu-btn.active .travolo-hamburger-icon {
    opacity: 0;
}

.travolo-mobile-menu-btn.active .travolo-close-icon {
    opacity: 1;
}

/* Mobile Review Badges - UNIQUE CLASSES */
.travolo-mobile-review-badges {
    display: none;
    background-color: #f3eeea;
    padding: 10px 0; /* Reduced padding */
    color: var(--text);
    position: relative;
    font-size: 12px;
}

.travolo-mobile-review-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.travolo-mobile-review-badge {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12px; /* Smaller font */
    font-weight: 500;
}

.travolo-mobile-stars {
    display: flex;
    gap: 1px;
}

.travolo-mobile-stars i {
    color: #FFC107;
    font-size: 10px;
}

.travolo-mobile-language-switcher {
    display: none;
}

/* Mobile Menu Overlay - UPDATED */
.travolo-mobile-menu-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    z-index: 9998;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.travolo-mobile-menu-overlay.active {
    display: block;
    opacity: 1;
}

/* Mobile Navigation - COMPLETELY UPDATED FOR FULL SCREEN LEFT ALIGN */
.travolo-mobile-nav {
    position: fixed;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100vh;
    background: var(--light);
    flex-direction: column;
    transition: all 0.4s ease;
    z-index: 9999;
    display: flex;
    overflow: hidden;
}

.travolo-mobile-nav.active {
    left: 0;
}

/* Mobile Menu Header with Close Button */
.travolo-mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 25px; /* Reduced padding */
    background-color: var(--light);
    border-bottom: 1px solid rgba(117, 104, 44, 0.1);
    position: relative;
    z-index: 2;
    min-height: 70px; /* Reduced height */
    height: auto;
}

.travolo-mobile-menu-logo {
    display: flex;
    align-items: center;
}

.travolo-mobile-menu-close {
    font-size: 28px; /* Slightly reduced */
    color: var(--dark);
    cursor: pointer;
    width: 45px; /* Reduced size */
    height: 45px; /* Reduced size */
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
    background-color: rgba(117, 104, 44, 0.1);
}

.travolo-mobile-menu-close:hover {
    background-color: rgba(117, 104, 44, 0.2);
    color: var(--primary);
    transform: rotate(90deg);
}

/* Mobile Menu Content - LEFT ALIGNED */
.travolo-mobile-menu-content {
    flex: 1;
    overflow-y: auto;
    padding: 20px 0; /* Reduced padding */
    display: flex;
    flex-direction: column;
}

.travolo-mobile-nav ul {
    display: flex;
    flex-direction: column;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
}

.travolo-mobile-nav ul li {
    margin: 0;
    width: 100%;
    text-align: left;
}

.travolo-mobile-nav ul li a {
    display: flex;
    align-items: center;
    color: #1a1a1a;
    font-weight: 700;
    font-size: 18px; /* Slightly reduced */
    text-transform: uppercase;
    letter-spacing: 1.2px;
    padding: 20px 30px; /* Reduced padding */
    width: 100%;
    text-align: left;
    transition: all 0.3s ease;
    border-bottom: 1px solid rgba(117, 104, 44, 0.1);
    position: relative;
}

.travolo-mobile-nav ul li a:hover {
    color: var(--primary);
    background-color: rgba(117, 104, 44, 0.05);
    padding-left: 35px; /* Reduced hover padding */
}

.travolo-mobile-nav ul li a:after {
    content: '';
    position: absolute;
    width: 0;
    height: 100%;
    background: rgba(117, 104, 44, 0.05);
    top: 0;
    left: 0;
    transition: width 0.3s ease;
    z-index: -1;
}

.travolo-mobile-nav ul li a:hover:after {
    width: 100%;
}

/* Menu item icon for left alignment visual */
.travolo-mobile-nav ul li a:before {
    content: '→';
    margin-right: 12px; /* Reduced margin */
    font-size: 16px; /* Reduced size */
    color: var(--primary);
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.travolo-mobile-nav ul li a:hover:before {
    opacity: 1;
    transform: translateX(0);
}

/* Mobile Menu Footer */
.travolo-mobile-menu-footer {
    padding: 20px 30px; /* Reduced padding */
    background-color: rgba(117, 104, 44, 0.05);
    border-top: 1px solid rgba(117, 104, 44, 0.1);
}

.travolo-mobile-language-switcher.mobile-footer {
    display: block;
    margin-top: 12px;
}

.travolo-mobile-footer .travolo-current-language {
    padding: 10px 16px; /* Reduced padding */
    font-size: 14px; /* Smaller font */
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 6px;
}

/* Animations */
@keyframes travolo-fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes travolo-slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive Styles - UPDATED with proper logo handling */
@media (max-width: 992px) {
    .travolo-hero h1 {
        font-size: 32px;
    }
    
    .travolo-section {
        padding: 70px 0;
    }
    
    .travolo-header-top {
        display: none;
    }
    
    .travolo-mobile-review-badges {
        display: block;
        padding: 10px 0;
    }
    
    .travolo-mobile-language-switcher.mobile-only {
        display: block;
    }
    
    .travolo-desktop-language-switcher {
        display: none;
    }
    
    .travolo-nav ul {
        display: none;
    }
    
    .travolo-mobile-menu-btn {
        display: block;
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 26px;
    }
    
    .travolo-hero {
        margin-top: 130px; /* Reduced margin for smaller header */
    }
    
    /* FIXED: Mobile logo with proper aspect ratio */
    .travolo-header-container {
        position: relative;
        justify-content: center;
        height: 70px; /* Reduced height for more compact mobile header */
    }
    
    .travolo-logo {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 9998;
    }
    
    /* Mobile logo: Fixed width, auto height to maintain aspect ratio */
    .one-kilimanjaro-logo {
        width: 160px; /* Fixed width for mobile */
        height: auto; /* Auto height to maintain aspect ratio */
        max-height: 55px; /* Prevent too tall */
        object-fit: contain;
    }
    
    .travolo-header-main {
        padding: 10px 0; /* Reduced padding */
    }
    
    /* Hide mobile language switcher in header on mobile */
    .travolo-mobile-language-switcher:not(.mobile-footer):not(.mobile-only) {
        display: none;
    }
    
    /* Adjust mobile menu header */
    .travolo-mobile-menu-header {
        min-height: 70px;
        padding: 18px 25px;
    }
    
    .travolo-mobile-menu-logo img {
        width: 140px; /* Fixed width for mobile menu logo */
        height: auto;
        max-height: 50px;
        object-fit: contain;
    }
    
    .travolo-mobile-menu-close {
        font-size: 26px;
        width: 42px;
        height: 42px;
    }
}

@media (max-width: 768px) {
    .travolo-hero {
        min-height: 500px;
        padding-top: 70px;
    }
    
    .travolo-hero h1 {
        font-size: 28px;
    }
    
    .travolo-hero p {
        font-size: 16px;
    }
    
    .travolo-hero-btns {
        flex-direction: column;
        gap: 12px;
    }
    
    .travolo-btn {
        width: 100%;
        max-width: 220px;
        margin: 0 auto;
        padding: 10px 20px;
    }
    
    .travolo-section-title h2 {
        font-size: 24px;
    }
    
    .travolo-section-title .travolo-subtitle {
        font-size: 13px;
    }
    
    .travolo-about-features {
        flex-direction: column;
        align-items: center;
    }
    
    .travolo-feature-item {
        min-width: 100%;
        max-width: 300px;
    }
    
    .travolo-mobile-review-container {
        gap: 12px;
    }
    
    .travolo-mobile-nav ul li a {
        font-size: 17px;
        padding: 18px 25px;
    }
    
    .travolo-mobile-menu-header {
        padding: 16px 20px;
        min-height: 65px;
    }
    
    .travolo-mobile-menu-logo img {
        width: 130px;
        max-height: 45px;
    }
    
    /* Mobile logo adjustment */
    .one-kilimanjaro-logo {
        width: 150px;
        max-height: 50px;
    }
    
    .travolo-header-container {
        height: 65px;
    }
    
    .travolo-mobile-review-badge {
        font-size: 11px;
    }
    
    .travolo-mobile-stars i {
        font-size: 10px;
    }
}

@media (max-width: 576px) {
    .travolo-section {
        padding: 60px 0;
    }
    
    .travolo-section-title h2 {
        font-size: 22px;
    }
    
    .travolo-feature-icon {
        width: 60px;
        height: 60px;
        font-size: 22px;
    }
    
    .travolo-feature-text h4 {
        font-size: 18px;
    }
    
    .travolo-btn {
        font-size: 13px;
    }
    
    .travolo-mobile-nav ul li a {
        font-size: 16px;
        padding: 16px 20px;
        letter-spacing: 1px;
    }
    
    .travolo-mobile-review-badge {
        font-size: 10px;
    }
    
    .travolo-mobile-menu-header {
        padding: 14px 18px;
        min-height: 60px;
    }
    
    .travolo-mobile-menu-logo img {
        width: 120px;
        max-height: 40px;
    }
    
    .travolo-mobile-menu-close {
        font-size: 24px;
        width: 38px;
        height: 38px;
    }
    
    .travolo-mobile-menu-footer {
        padding: 16px 20px;
    }
    
    /* Mobile logo adjustment */
    .one-kilimanjaro-logo {
        width: 140px;
        max-height: 45px;
    }
    
    .travolo-header-container {
        height: 60px;
    }
    
    .travolo-hero {
        margin-top: 120px;
    }
}

/* Ensure smooth scrolling for mobile menu */
.travolo-mobile-menu-content::-webkit-scrollbar {
    width: 5px;
}

.travolo-mobile-menu-content::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.travolo-mobile-menu-content::-webkit-scrollbar-thumb {
    background: var(--primary);
    border-radius: 10px;
}

.travolo-mobile-menu-content::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Add animation to menu items */
.travolo-mobile-nav ul li {
    animation: travolo-slideInLeft 0.4s ease forwards;
    opacity: 0;
}

.travolo-mobile-nav ul li:nth-child(1) { animation-delay: 0.1s; }
.travolo-mobile-nav ul li:nth-child(2) { animation-delay: 0.15s; }
.travolo-mobile-nav ul li:nth-child(3) { animation-delay: 0.2s; }
.travolo-mobile-nav ul li:nth-child(4) { animation-delay: 0.25s; }
.travolo-mobile-nav ul li:nth-child(5) { animation-delay: 0.3s; }
.travolo-mobile-nav ul li:nth-child(6) { animation-delay: 0.35s; }
.travolo-mobile-nav ul li:nth-child(7) { animation-delay: 0.4s; }

/* Extra small devices */
@media (max-width: 400px) {
    .travolo-mobile-nav ul li a {
        font-size: 15px;
        padding: 14px 18px;
    }
    
    .travolo-mobile-menu-header {
        padding: 12px 15px;
        min-height: 55px;
    }
    
    .travolo-mobile-menu-logo img {
        width: 110px;
        max-height: 35px;
    }
    
    .one-kilimanjaro-logo {
        width: 130px;
        max-height: 40px;
    }
    
    .travolo-header-container {
        height: 55px;
    }
    
    .travolo-mobile-menu-close {
        font-size: 22px;
        width: 35px;
        height: 35px;
    }
    
    .travolo-mobile-review-badges {
        padding: 8px 0;
    }
}

/* Prevent horizontal scroll on mobile */
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* Mobile menu open state for body */
body.mobile-menu-open {
    overflow: hidden;
}

/* Desktop specific: Make header more compact */
@media (min-width: 993px) {
    .travolo-header {
        /* Compact desktop header */
    }
    
    .travolo-header-main {
        padding: 10px 0; /* Even more compact on desktop */
    }
    
    .one-kilimanjaro-logo {
        width: 160px; /* Slightly smaller on desktop */
        max-height: 60px;
    }
    
    .travolo-nav ul li {
        margin-left: 18px;
    }
    
    .travolo-nav ul li a {
        font-size: 13px;
        letter-spacing: 1px;
    }
}
    </style>


</head>
<body>

<script>
    window.gtranslateSettings = {
      default_language: "en",
      detect_browser_language: true,
      languages: ["en","sw","fr","de","es"],
      wrapper_selector: ".gtranslate_wrapper",
      switcher_horizontal_position: "right",
      switcher_vertical_position: "top"
    };
  </script>
  <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>


    <!-- Header Section with UNIQUE CLASSES -->
    <header class="travolo-header">
        <div class="travolo-header-top">
            <div class="travolo-container travolo-header-top-container">
                <div class="travolo-specialist-info">
                    <div class="travolo-specialist-tag">#Kilimanjaro Trekking Experts</div>
                </div>
                <div class="travolo-review-badges">
                    <div class="travolo-review-badge">
                        <div class="travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Tripadvisor</span>
                    </div>
                    <div class="travolo-review-badge">
                        <div class="travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Google</span>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travolo-mobile-review-badges">
            <div class="travolo-container travolo-mobile-review-container">
                <div class="travolo-mobile-review-badge">
                    <div class="travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Tripadvisor</span>
                </div>
                <div class="travolo-mobile-review-badge">
                    <div class="travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Google</span>
                </div>
                <div class="travolo-language-switcher travolo-mobile-language-switcher">
                    <div class="travolo-current-language" id="travolo-mobile-current-language">
                        <span class="fi fi-us"></span>
                        <span>EN</span>
                        <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                    </div>
                    <div class="travolo-language-dropdown" id="travolo-mobile-language-dropdown">
                        <div class="travolo-language-option active" data-lang="en">
                            <span class="fi fi-us"></span>
                            <span>English</span>
                        </div>
                        <div class="travolo-language-option" data-lang="fr">
                            <span class="fi fi-fr"></span>
                            <span>Français</span>
                        </div>
                        <div class="travolo-language-option" data-lang="de">
                            <span class="fi fi-de"></span>
                            <span>Deutsch</span>
                        </div>
                        <div class="travolo-language-option" data-lang="es">
                            <span class="fi fi-es"></span>
                            <span>Español</span>
                        </div>
                        <div class="travolo-language-option" data-lang="it">
                            <span class="fi fi-it"></span>
                            <span>Italiano</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travolo-header-main">
            <div class="travolo-container travolo-header-container">
                <!-- UPDATED: Logo replaced with image -->
                <div class="travolo-logo">
                    <img src="img/one-kilimanjaro-logo.png" alt="One Kilimanjaro   Logo" class="one-kilimanjaro-logo">
                </div>
                
                <nav class="travolo-nav">
                    <ul id="travolo-nav-menu">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="kilimanjaro-route.php">PACKAGES</a></li>
                        <li><a href="day-trips.php">DAY-TRIPS</a></li>
                          <li><a href="safari-combo.php">SAFARI COMBO</a></li>
                          <li><a href="blog-page-topics.php">BLOGS</a></li>
                        <li><a href="about-us.php">ABOUT US</a></li>
                        <li><a href="contact-us.php">CONTACT US</a></li>

                    </ul>
                    
                    <!-- Updated Mobile Menu Button with UNIQUE CLASSES -->
                    <div class="travolo-mobile-menu-btn" id="travolo-mobile-menu-toggle">
                        <div class="travolo-hamburger-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="travolo-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

   <!-- Mobile Navigation with UNIQUE CLASSES -->
<div class="travolo-mobile-nav" id="travolo-mobile-nav">
    <!-- Mobile Menu Header with Close Button -->
    <div class="travolo-mobile-menu-header">
        <div class="travolo-mobile-menu-logo">
            <img src="img/one-kilimanjaro-logo.png" alt="One Kilimanjaro   Logo" class="one-kilimanjaro-logo" style="height: 80px;">
        </div>
        <div class="travolo-mobile-menu-close">
            <i class="fas fa-times"></i>
        </div>
    </div>
    
    <!-- Mobile Menu Content - LEFT ALIGNED -->
    <div class="travolo-mobile-menu-content">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="kilimanjaro-route.php">PACKAGES</a></li>
            <li><a href="day-trips.php">DAY-TRIPS</a></li>
            <li><a href="safari-combo.php">SAFARI COMBO</a></li>
            <li><a href="blog-page-topics.php">BLOGS</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
        </ul>
    </div>
    
    <!-- Mobile Menu Footer with Language Switcher -->
    <div class="travolo-mobile-menu-footer">
        <div class="travolo-language-switcher mobile-footer">
            <div class="travolo-current-language" id="travolo-mobile-footer-current-language">
                <span class="fi fi-us"></span>
                <span>EN</span>
                <i class="fas fa-chevron-down" style="font-size: 14px;"></i>
            </div>
            <div class="travolo-language-dropdown" id="travolo-mobile-footer-language-dropdown">
                <div class="travolo-language-option active" data-lang="en">
                    <span class="fi fi-us"></span>
                    <span>English</span>
                </div>
                <div class="travolo-language-option" data-lang="fr">
                    <span class="fi fi-fr"></span>
                    <span>Français</span>
                </div>
                <div class="travolo-language-option" data-lang="de">
                    <span class="fi fi-de"></span>
                    <span>Deutsch</span>
                </div>
                <div class="travolo-language-option" data-lang="es">
                    <span class="fi fi-es"></span>
                    <span>Español</span>
                </div>
                <div class="travolo-language-option" data-lang="it">
                    <span class="fi fi-it"></span>
                    <span>Italiano</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
       // Mobile Menu Functionality with UNIQUE IDs
const travoloMobileMenuToggle = document.getElementById('travolo-mobile-menu-toggle');
const travoloMobileNav = document.getElementById('travolo-mobile-nav');
const travoloMobileMenuOverlay = document.getElementById('travolo-mobile-menu-overlay');
const travoloMobileMenuClose = document.querySelector('.travolo-mobile-menu-close');

// Toggle mobile menu
travoloMobileMenuToggle.addEventListener('click', function() {
    openMobileMenu();
});

// Close mobile menu with X button
if (travoloMobileMenuClose) {
    travoloMobileMenuClose.addEventListener('click', function() {
        closeMobileMenu();
    });
}

// Close menu when clicking on overlay
travoloMobileMenuOverlay.addEventListener('click', function() {
    closeMobileMenu();
});

// Close menu when clicking on links
const travoloMobileNavLinks = document.querySelectorAll('.travolo-mobile-nav a');
travoloMobileNavLinks.forEach(link => {
    link.addEventListener('click', function() {
        closeMobileMenu();
    });
});

// Function to open mobile menu
function openMobileMenu() {
    travoloMobileNav.classList.add('active');
    travoloMobileMenuOverlay.classList.add('active');
    travoloMobileMenuToggle.classList.add('active');
    document.body.style.overflow = 'hidden';
    document.documentElement.style.overflow = 'hidden';
    
    // Add active class to body for additional styling
    document.body.classList.add('mobile-menu-open');
}

// Function to close mobile menu
function closeMobileMenu() {
    travoloMobileNav.classList.remove('active');
    travoloMobileMenuOverlay.classList.remove('active');
    travoloMobileMenuToggle.classList.remove('active');
    document.body.style.overflow = '';
    document.documentElement.style.overflow = '';
    
    // Remove active class from body
    document.body.classList.remove('mobile-menu-open');
}

// Language Switcher Functionality with UNIQUE IDs
const travoloCurrentLanguage = document.getElementById('travolo-current-language');
const travoloLanguageDropdown = document.getElementById('travolo-language-dropdown');
const travoloMobileCurrentLanguage = document.getElementById('travolo-mobile-current-language');
const travoloMobileLanguageDropdown = document.getElementById('travolo-mobile-language-dropdown');
const travoloLanguageOptions = document.querySelectorAll('.travolo-language-option');

// Toggle desktop language dropdown
if (travoloCurrentLanguage) {
    travoloCurrentLanguage.addEventListener('click', function(e) {
        e.stopPropagation();
        travoloLanguageDropdown.classList.toggle('active');
    });
}

// Toggle mobile language dropdown
if (travoloMobileCurrentLanguage) {
    travoloMobileCurrentLanguage.addEventListener('click', function(e) {
        e.stopPropagation();
        travoloMobileLanguageDropdown.classList.toggle('active');
    });
}

// Handle language selection
travoloLanguageOptions.forEach(option => {
    option.addEventListener('click', function() {
        const lang = this.getAttribute('data-lang');
        
        // Update active state
        travoloLanguageOptions.forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        
        // Update current language display
        const flagClass = this.querySelector('.fi').className;
        const languageName = this.querySelector('span:last-child').textContent;
        const languageCode = languageName.substring(0, 2).toUpperCase();
        
        // Update desktop switcher
        if (travoloCurrentLanguage) {
            travoloCurrentLanguage.innerHTML = `<span class="${flagClass}"></span> <span>${languageCode}</span> <i class="fas fa-chevron-down" style="font-size: 12px;"></i>`;
        }
        
        // Update mobile switcher
        if (travoloMobileCurrentLanguage) {
            travoloMobileCurrentLanguage.innerHTML = `<span class="${flagClass}"></span> <span>${languageCode}</span> <i class="fas fa-chevron-down" style="font-size: 12px;"></i>`;
        }
        
        // Update mobile footer switcher
        const mobileFooterSwitcher = document.querySelector('.travolo-mobile-language-switcher.mobile-footer .travolo-current-language');
        if (mobileFooterSwitcher) {
            mobileFooterSwitcher.innerHTML = `<span class="${flagClass}"></span> <span>${languageCode}</span> <i class="fas fa-chevron-down" style="font-size: 12px;"></i>`;
        }
        
        // Close dropdowns
        if (travoloLanguageDropdown) {
            travoloLanguageDropdown.classList.remove('active');
        }
        if (travoloMobileLanguageDropdown) {
            travoloMobileLanguageDropdown.classList.remove('active');
        }
        
        // Save the language preference to localStorage
        localStorage.setItem('travolo-preferred-language', lang);
        
        // Show confirmation (optional)
        travoloShowLanguageChangeToast(languageName);
        
        // Close mobile menu if open
        if (travoloMobileNav.classList.contains('active')) {
            closeMobileMenu();
        }
    });
});

// Close dropdowns when clicking outside
document.addEventListener('click', function() {
    if (travoloLanguageDropdown) {
        travoloLanguageDropdown.classList.remove('active');
    }
    if (travoloMobileLanguageDropdown) {
        travoloMobileLanguageDropdown.classList.remove('active');
    }
});

// Prevent dropdown close when clicking inside
if (travoloLanguageDropdown) {
    travoloLanguageDropdown.addEventListener('click', function(e) {
        e.stopPropagation();
    });
}

if (travoloMobileLanguageDropdown) {
    travoloMobileLanguageDropdown.addEventListener('click', function(e) {
        e.stopPropagation();
    });
}

// Load saved language preference
function travoloLoadLanguagePreference() {
    const savedLang = localStorage.getItem('travolo-preferred-language');
    if (savedLang) {
        const optionToSelect = document.querySelector(`.travolo-language-option[data-lang="${savedLang}"]`);
        if (optionToSelect) {
            optionToSelect.click();
        }
    }
}

// Show toast notification for language change
function travoloShowLanguageChangeToast(languageName) {
    // Create toast element
    const toast = document.createElement('div');
    toast.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--primary);
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        font-weight: 600;
        transform: translateX(150%);
        transition: transform 0.3s ease;
    `;
    toast.textContent = `Language changed to ${languageName}`;
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateX(0)';
    }, 100);
    
    // Animate out and remove
    setTimeout(() => {
        toast.style.transform = 'translateX(150%)';
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}

// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.travolo-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Close mobile menu on window resize (if open)
window.addEventListener('resize', function() {
    if (window.innerWidth > 992) {
        closeMobileMenu();
    }
});

// Load language preference on page load
window.addEventListener('DOMContentLoaded', function() {
    travoloLoadLanguagePreference();
    
    // Add mobile menu close button event listeners
    const mobileMenuCloseBtns = document.querySelectorAll('.travolo-mobile-menu-close');
    mobileMenuCloseBtns.forEach(btn => {
        btn.addEventListener('click', closeMobileMenu);
    });
});

// Add keyboard support for mobile menu
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && travoloMobileNav.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Add swipe to close functionality for mobile menu
let touchStartX = 0;
let touchEndX = 0;

travoloMobileNav.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
}, false);

travoloMobileNav.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, false);

function handleSwipe() {
    const swipeThreshold = 100;
    
    if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left to close
        closeMobileMenu();
    }
}

// Mobile footer language switcher functionality
const mobileFooterLanguageSwitcher = document.querySelector('.travolo-mobile-language-switcher.mobile-footer');
if (mobileFooterLanguageSwitcher) {
    const mobileFooterCurrentLang = mobileFooterLanguageSwitcher.querySelector('.travolo-current-language');
    const mobileFooterDropdown = mobileFooterLanguageSwitcher.querySelector('.travolo-language-dropdown');
    
    if (mobileFooterCurrentLang && mobileFooterDropdown) {
        mobileFooterCurrentLang.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileFooterDropdown.classList.toggle('active');
        });
        
        mobileFooterDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Close footer dropdown when clicking outside
        document.addEventListener('click', function() {
            mobileFooterDropdown.classList.remove('active');
        });
    }
}
    </script>
</body>
</html>