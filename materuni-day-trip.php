<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materuni Waterfalls & Coffee Tour | Cultural Day Trip from Moshi</title>
    <meta name="description" content="Experience the beautiful Materuni Waterfalls and traditional Chagga coffee tour. Day trip from Moshi with hiking, cultural immersion, and natural beauty.">
    <meta name="keywords" content="Materuni Waterfalls, Coffee Tour, Moshi day trip, Tanzania waterfalls, Chagga culture, traditional coffee">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* Base Styles */
        :root {
            --primary: #75682C;
            --secondary: #e0b354;
            --accent: #d4a762;
            --dark: #1a1a1a;
            --light: #F6F4F2;
            --white:#F6F4F2;
            --text: #444444;
            --heading: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
            --body: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--body);
        }

        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
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

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
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

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(117, 104, 44, 0.3);
        }

        .btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(117, 104, 44, 0.4);
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title .subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 28px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--text);
            padding: 0 15px;
        }

        /* Hero Section */
        .daytrip-hero {
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
            padding-top: 80px;
            overflow: hidden;
        }

        .daytrip-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .daytrip-hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .daytrip-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .daytrip-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .daytrip-hero h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .daytrip-hero p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
        }

        .daytrip-hero-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
            flex-wrap: wrap;
        }

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

        /* Overview Section */
        .kilimanjaro-overview-section {
            padding: 50px 0 30px;
            background: var(--light);
        }

        .overview-content {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .overview-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .overview-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .route-badge {
            display: inline-block;
            background: var(--primary);
            color: var(--white);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .overview-description {
            color: var(--text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .facts-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .fact-simple {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .fact-label {
            color: var(--dark);
            font-weight: 500;
            font-size: 14px;
        }

        .fact-value {
            color: var(--primary);
            font-weight: 600;
            font-size: 14px;
        }

        /* Itinerary Section - UPDATED */
        .kilimanjaro-itinerary-container {
            padding: 60px 0 30px; /* Reduced bottom padding from 60px to 30px */
            background-color: var(--white);
        }

        .kilimanjaro-itinerary-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .kilimanjaro-itinerary-heading h2 {
            font-size: 32px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .kilimanjaro-itinerary-heading p {
            color: var(--text);
            max-width: 700px;
            margin: 0 auto;
        }

        .kilimanjaro-days-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .kilimanjaro-day {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            background: var(--white);
        }

        .kilimanjaro-day-header {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--light);
        }

        .kilimanjaro-day-header:hover {
            background: rgba(117, 104, 44, 0.05);
        }

        .kilimanjaro-day-title {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .kilimanjaro-day-number {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 70px;
        }

        .day-label {
            font-size: 12px;
            color: var(--text);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .day-digit {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .kilimanjaro-day-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .kilimanjaro-day-info p {
            color: var(--text);
            font-size: 14px;
            margin: 0;
        }

        .kilimanjaro-day-toggle {
            font-size: 20px;
            color: var(--primary);
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .kilimanjaro-day-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .kilimanjaro-day-content.active {
            max-height: 1000px;
            padding: 25px;
        }

        .kilimanjaro-day-content p {
            margin-bottom: 15px;
            color: var(--text);
            line-height: 1.6;
        }

        .kilimanjaro-day-highlights {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
        }

        .highlight-item i {
            color: var(--primary);
        }

        .kilimanjaro-day-stats {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            flex-wrap: wrap;
        }

        .kilimanjaro-day-stats p {
            margin: 0;
            font-size: 14px;
            color: var(--primary);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .book-now-container {
            text-align: center;
            margin-top: 50px;
        }

        /* Inclusions & Exclusions Section - UPDATED */
        .inclusions-exclusions-section {
            padding: 30px 0 80px; /* Reduced top padding from 80px to 30px, kept bottom padding */
            background-color: var(--light);
        }

        .inclusions-exclusions-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .inclusions-column, .exclusions-column {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .inclusions-header, .exclusions-header {
            padding: 25px 25px 20px;
            text-align: center;
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
        }

        .inclusions-header {
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.05), transparent);
        }

        .exclusions-header {
            background: linear-gradient(135deg, rgba(244, 67, 54, 0.05), transparent);
        }

        .icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 30px;
        }

        .inclusions-header .icon-wrapper {
            background: rgba(117, 104, 44, 0.1);
            color: var(--primary);
        }

        .exclusions-header .icon-wrapper {
            background: rgba(244, 67, 54, 0.1);
            color: #f44336;
        }

        .inclusions-header h3, .exclusions-header h3 {
            font-size: 22px;
            margin-bottom: 8px;
        }

        .inclusions-header p, .exclusions-header p {
            color: var(--text);
            font-size: 14px;
            opacity: 0.8;
        }

        .inclusions-list, .exclusions-list {
            padding: 20px 0;
        }

        .inclusion-item, .exclusion-item {
            display: flex;
            align-items: flex-start;
            padding: 15px 25px;
            transition: background-color 0.3s ease;
        }

        .inclusion-item:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .exclusion-item:hover {
            background-color: rgba(244, 67, 54, 0.03);
        }

        .inclusion-icon, .exclusion-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
            font-size: 18px;
        }

        .inclusion-icon {
            background: rgba(117, 104, 44, 0.1);
            color: var(--primary);
        }

        .exclusion-icon {
            background: rgba(244, 67, 54, 0.1);
            color: #f44336;
        }

        .inclusion-content h4, .exclusion-content h4 {
            font-size: 16px;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .inclusion-content p, .exclusion-content p {
            font-size: 14px;
            color: var(--text);
            line-height: 1.5;
            margin: 0;
        }

        /* FAQ Section */
        .kilimanjaro-faq-section {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.03) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .kilimanjaro-faq-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .kilimanjaro-faq-item {
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
            transition: all 0.3s ease;
        }

        .kilimanjaro-faq-item:last-child {
            border-bottom: none;
        }

        .kilimanjaro-faq-item:hover {
            background-color: rgba(117, 104, 44, 0.02);
        }

        .kilimanjaro-faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .kilimanjaro-faq-question:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .kilimanjaro-faq-question h4 {
            font-size: 18px;
            color: var(--dark);
            margin: 0;
            flex: 1;
            padding-right: 20px;
            font-weight: 600;
        }

        .kilimanjaro-faq-toggle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .kilimanjaro-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: rgba(117, 104, 44, 0.02);
        }

        .kilimanjaro-faq-answer.active {
            max-height: 500px;
            padding: 0 25px 25px;
        }

        .kilimanjaro-faq-answer p {
            color: var(--text);
            line-height: 1.7;
            margin: 0;
            font-size: 16px;
        }

        .kilimanjaro-faq-toggle.rotate {
            transform: rotate(45deg);
            background: #d4a336;
        }

        /* Booking Popup Styles */
        .booking-popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            overflow-y: auto;
            padding: 20px;
            animation: fadeIn 0.3s ease;
        }

        .booking-popup-modal {
            position: relative;
            background: var(--white);
            border-radius: 12px;
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            animation: slideUp 0.4s ease;
        }

        .booking-popup-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: transparent;
            border: none;
            font-size: 20px;
            color: var(--text);
            cursor: pointer;
            transition: color 0.3s ease;
            z-index: 10;
        }

        .booking-popup-close:hover {
            color: var(--primary);
        }

        .booking-popup-heading {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
        }

        .booking-popup-heading h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .booking-popup-heading p {
            color: var(--text);
            font-size: 16px;
        }

        .booking-popup-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .popup-form-group {
            display: flex;
            flex-direction: column;
        }

        .popup-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .popup-form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
            font-size: 14px;
        }

        .popup-form-group input,
        .popup-form-group select,
        .popup-form-group textarea {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: var(--body);
        }

        .popup-form-group input:focus,
        .popup-form-group select:focus,
        .popup-form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(117, 104, 44, 0.1);
        }

        .popup-btn-primary {
            background: var(--primary);
            color: var(--white);
            border: none;
            padding: 14px 25px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .popup-btn-primary:hover {
            background: #d4a336;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .popup-booking-terms {
            text-align: center;
            font-size: 12px;
            color: var(--text);
            margin-top: 20px;
            line-height: 1.5;
        }

        .popup-booking-terms a {
            color: var(--primary);
            text-decoration: underline;
        }

        .popup-booking-terms a:hover {
            color: #d4a336;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .daytrip-hero h1 {
                font-size: 32px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .inclusions-exclusions-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .daytrip-hero {
                min-height: 700px;
                padding-top: 70px;
            }
            
            .daytrip-hero h1 {
                font-size: 28px;
            }
            
            .daytrip-hero p {
                font-size: 16px;
            }
            
            .daytrip-hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .btn {
                width: 100%;
                max-width: 220px;
                margin: 0 auto;
                padding: 10px 20px;
            }
            
            .section-title h2 {
                font-size: 24px;
            }
            
            .section-title .subtitle {
                font-size: 13px;
            }
            
            .overview-content {
                padding: 30px 25px;
            }

            .overview-header h2 {
                font-size: 28px;
            }

            .facts-simple {
                gap: 15px;
            }

            .fact-simple {
                padding: 8px 15px;
            }
            
            .kilimanjaro-day-header {
                padding: 18px 20px;
            }
            
            .kilimanjaro-day-title {
                gap: 15px;
            }
            
            .kilimanjaro-day-number {
                min-width: 60px;
            }
            
            .kilimanjaro-day-info h3 {
                font-size: 16px;
            }
            
            .kilimanjaro-day-content.active {
                padding: 20px;
            }
            
            .kilimanjaro-day-highlights {
                flex-direction: column;
                gap: 10px;
            }
            
            .kilimanjaro-day-stats {
                flex-direction: column;
                gap: 10px;
            }
            
            .popup-form-row {
                grid-template-columns: 1fr;
            }
            
            .booking-popup-modal {
                padding: 25px 20px;
                margin: 20px auto;
            }
            
            .booking-popup-heading h3 {
                font-size: 22px;
            }
            
            .inclusion-item, .exclusion-item {
                padding: 12px 20px;
            }
            
            /* Mobile gap reduction */
            .kilimanjaro-itinerary-container {
                padding: 50px 0 20px; /* Even smaller gap on mobile */
            }
            
            .inclusions-exclusions-section {
                padding: 20px 0 60px; /* Even smaller gap on mobile */
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 22px;
            }
            
            .daytrip-hero h1 {
                font-size: 24px;
            }
            
            .daytrip-hero p {
                font-size: 15px;
            }
            
            .overview-content {
                padding: 25px 20px;
            }

            .overview-header h2 {
                font-size: 24px;
            }

            .route-badge {
                font-size: 12px;
                padding: 6px 12px;
            }

            .facts-simple {
                flex-direction: column;
                align-items: center;
            }

            .fact-simple {
                width: 100%;
                max-width: 250px;
                justify-content: space-between;
            }
            
            .kilimanjaro-day-header {
                padding: 15px 18px;
            }
            
            .kilimanjaro-day-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .kilimanjaro-day-number {
                flex-direction: row;
                gap: 10px;
            }
            
            .kilimanjaro-faq-question {
                padding: 18px 20px;
            }
            
            .kilimanjaro-faq-question h4 {
                font-size: 16px;
            }
            
            .kilimanjaro-faq-toggle {
                width: 25px;
                height: 25px;
                font-size: 16px;
            }
            
            .booking-popup-overlay {
                padding: 10px;
            }
            
            .booking-popup-modal {
                padding: 20px 15px;
            }
            
            .booking-popup-heading h3 {
                font-size: 20px;
            }
            
            .inclusion-icon, .exclusion-icon {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Header would be included via PHP -->
 <?php include 'plugins/header.php';?>

    <!-- Hero Section -->
    <section class="daytrip-hero">
        <div class="daytrip-hero-background">
            <img src="img/Materuni_Waterfalls.jpg" alt="Materuni Waterfalls - Beautiful waterfall in lush green surroundings">
        </div>
        <div class="daytrip-hero-overlay"></div>
        <div class="daytrip-hero-content">
            <h1>Materuni Waterfalls & Coffee Tour</h1>
            <p>Immerse yourself in Chagga culture, hike to a stunning waterfall, and experience traditional coffee making</p>
            <div class="daytrip-hero-btns">
                <button class="btn btn-primary" onclick="openMateruniBookingPopup()">Book This Tour</button>
                <a href="#itinerary" class="btn btn-primary">View Itinerary</a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="kilimanjaro-overview-section">
        <div class="container">
            <div class="overview-content">
                <div class="overview-header">
                    <h2>Materuni Waterfalls & Coffee Tour Overview</h2>
                    <div class="route-badge">Cultural & Nature Experience</div>
                </div>
                
                <div class="overview-description">
                    <p>Located on the slopes of Mount Kilimanjaro, Materuni Village offers an authentic cultural experience combined with breathtaking natural beauty. This tour takes you through lush banana and coffee plantations to the stunning Materuni Waterfall, followed by a traditional Chagga coffee-making experience.</p>
                    <p>You'll hike through beautiful scenery, learn about local traditions, taste freshly brewed coffee, and even have the opportunity to swim in the refreshing pool at the base of the waterfall. This is a perfect day trip for those interested in culture, nature, and authentic local experiences.</p>
                </div>
                <div class="day-images">
                <img src="img/materuni-visit-for-day-trip.jpg" alt="materuni-day-visit">
                <img src="img/materuni-waterfall-day-tour.jpg" alt="materuni-cultural-tour">
            </div>
                <div class="facts-simple">
                    <div class="fact-simple">
                        <span class="fact-label">Duration:</span>
                        <span class="fact-value">6-7 hours</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Group Size:</span>
                        <span class="fact-value">2-10 people</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Difficulty:</span>
                        <span class="fact-value">Moderate</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Best Time:</span>
                        <span class="fact-value">Year-round</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerary Section -->
    <section class="kilimanjaro-itinerary-container" id="itinerary">
        <div class="container">
            <div class="kilimanjaro-itinerary-heading">
                <h2>Tour Itinerary</h2>
                <p>Follow our carefully planned itinerary for an unforgettable cultural experience</p>
            </div>

            <div class="kilimanjaro-days-container">
                <!-- Time 1 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">8:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Hotel Pickup in Moshi</h3>
                                <p>Start your cultural adventure with convenient pickup</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Your day begins with a convenient pickup from your hotel or accommodation in Moshi. Meet your friendly guide who will accompany you throughout the day and provide insights about the Chagga culture and local traditions.
                        </p>
                        <p>
                            We'll begin our scenic drive to Materuni Village, located on the southern slopes of Mount Kilimanjaro. The journey takes approximately 1 hour, offering beautiful views of the countryside and local life.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-hotel"></i>
                                <span>Hotel Pickup</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-car"></i>
                                <span>Scenic Drive</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-user"></i>
                                <span>Expert Guide</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 2 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">9:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Arrive at Materuni Village</h3>
                                <p>Meet the local community and start your hike</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Upon arrival at Materuni Village, you'll meet your local Chagga guide who will lead the hike to the waterfall. The village is situated at approximately 1,500 meters above sea level, offering beautiful views and a pleasant climate.
                        </p>
                        <p>
                            Before starting the hike, your guide will provide a brief orientation about the area, the Chagga culture, and what to expect during the tour. This is also a good time to use restroom facilities before beginning the trek.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-mountain"></i>
                                <span>Village Introduction</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-users"></i>
                                <span>Local Guide</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-info-circle"></i>
                                <span>Orientation</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 3 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">9:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Hike to Materuni Waterfall</h3>
                                <p>Trek through beautiful landscapes to the waterfall</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            The hike to Materuni Waterfall takes approximately 45-60 minutes each way, passing through lush banana and coffee plantations, with beautiful views of the surrounding landscape. The trail is moderately challenging but suitable for most fitness levels.
                        </p>
                        <p>
                            Along the way, your guide will point out various plants and trees, explain their traditional uses, and share stories about Chagga culture and traditions. You'll learn about local farming practices and might even spot some wildlife.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-hiking"></i>
                                <span>Scenic Hike</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-leaf"></i>
                                <span>Plantations</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-book"></i>
                                <span>Cultural Insights</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 4 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">10:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Explore Materuni Waterfall</h3>
                                <p>Experience the majestic 80-meter waterfall</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Arrive at the breathtaking Materuni Waterfall, which cascades approximately 80 meters into a beautiful natural pool. The sight and sound of the powerful waterfall surrounded by lush green vegetation is truly spectacular.
                        </p>
                        <p>
                            You'll have time to take photos, swim in the refreshing pool at the base of the waterfall (weather permitting), and simply enjoy the magnificent natural surroundings. The mist from the waterfall creates rainbows on sunny days, adding to the magical atmosphere.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-water"></i>
                                <span>80m Waterfall</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-swimmer"></i>
                                <span>Swimming Opportunity</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-camera"></i>
                                <span>Photo Opportunities</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 5 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">12:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Traditional Coffee Tour</h3>
                                <p>Learn about and participate in Chagga coffee making</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After returning from the waterfall, you'll participate in a traditional Chagga coffee-making experience. You'll learn about the entire process from bean to cup, including harvesting, roasting, grinding, and brewing using traditional methods.
                        </p>
                        <p>
                            This hands-on experience allows you to participate in the process yourself. You'll roast coffee beans over an open fire, grind them using traditional tools, and finally brew and taste the freshly made coffee. This is often accompanied by a taste of local bananas.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-coffee"></i>
                                <span>Coffee Making</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-fire"></i>
                                <span>Traditional Roasting</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-mug-hot"></i>
                                <span>Coffee Tasting</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 6 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">13:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Traditional Lunch</h3>
                                <p>Enjoy a authentic Chagga meal</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After the coffee experience, you'll enjoy a traditional Chagga lunch prepared by local villagers. The meal typically includes local dishes such as "mtori" (banana and meat soup), "ugali" (maize porridge), vegetables, and fresh fruits.
                        </p>
                        <p>
                            This is not just a meal but another cultural experience, as you'll learn about local food traditions and eating customs. The lunch is served in a traditional setting, often with beautiful views of the surrounding landscape.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-utensils"></i>
                                <span>Traditional Lunch</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-apple-alt"></i>
                                <span>Local Cuisine</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-leaf"></i>
                                <span>Cultural Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Time 7 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">15:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Return to Moshi</h3>
                                <p>Journey back with unforgettable memories</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After lunch, we'll begin our journey back to Moshi. We typically depart around 3:00 PM to ensure we get you back to your accommodation at a reasonable hour.
                        </p>
                        <p>
                            The return drive takes approximately 1 hour, giving you time to relax and reflect on your amazing cultural experience. We'll drop you off at your hotel in Moshi, typically arriving around 4:00 PM.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-car"></i>
                                <span>Return Transport</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-hotel"></i>
                                <span>Hotel Drop-off</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-memory"></i>
                                <span>Unforgettable Memories</span>
                            </div>
                        </div>
                        
                        <div class="kilimanjaro-day-stats">
                            <p><i class="fas fa-clock"></i> Return Time: ~4:00 PM</p>
                            <p><i class="fas fa-car"></i> Drive Time: 1 hour</p>
                            <p><i class="fas fa-hiking"></i> Hiking Time: 1.5-2 hours</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class="book-now-container">
                <button class="btn btn-primary" onclick="openMateruniBookingPopup()">
                    <i class="fas fa-calendar-check"></i> Book Your Materuni Tour
                </button>
            </div>
        </div>
    </section>

    <!-- Inclusions & Exclusions Section -->
    <section class="inclusions-exclusions-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">What's Included</span>
                <h2>Package Details</h2>
                <p>Everything you need to know about what's included in your Materuni Waterfalls & Coffee Tour</p>
            </div>
            
            <div class="inclusions-exclusions-container">
                <!-- Inclusions Column -->
                <div class="inclusions-column">
                    <div class="inclusions-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>What's Included</h3>
                        <p>All these services are covered in your package</p>
                    </div>
                    
                    <div class="inclusions-list">
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Round-trip Transportation</h4>
                                <p>Comfortable transport to and from your hotel in Moshi</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Professional Guide</h4>
                                <p>Experienced English-speaking guide throughout the trip</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>All Entrance Fees</h4>
                                <p>Village entrance fees and waterfall access</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Traditional Lunch</h4>
                                <p>Authentic Chagga meal with local dishes</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Coffee Experience</h4>
                                <p>Traditional coffee making and tasting session</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Exclusions Column -->
                <div class="exclusions-column">
                    <div class="exclusions-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <h3>What's Not Included</h3>
                        <p>Additional expenses to consider</p>
                    </div>
                    
                    <div class="exclusions-list">
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-cocktail"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Alcoholic Beverages</h4>
                                <p>Beer, wine, and other alcoholic drinks</p>
                            </div>
                        </div>
                        
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Tips for Guides</h4>
                                <p>Gratuities for your guide and local hosts (recommended)</p>
                            </div>
                        </div>
                        
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Personal Expenses</h4>
                                <p>Souvenirs, additional snacks, or personal purchases</p>
                            </div>
                        </div>
                        
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-swimmer"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Swimwear & Towels</h4>
                                <p>Please bring your own swimwear and towels if you plan to swim</p>
                            </div>
                        </div>
                        
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Travel Insurance</h4>
                                <p>Personal travel insurance is not included</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="kilimanjaro-faq-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Common Questions</span>
                <h2>Materuni Tour FAQ</h2>
                <p>Find answers to frequently asked questions about our Materuni Waterfalls & Coffee Tour</p>
            </div>
            
            <div class="kilimanjaro-faq-container">
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What should I bring to the Materuni Tour?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>We recommend bringing comfortable walking shoes, swimwear and a towel (if you plan to swim), sunscreen, a hat, a reusable water bottle, a camera, some cash for souvenirs or tips, and a light rain jacket (depending on the season). Don't forget any personal medications you might need.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>How difficult is the hike to the waterfall?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The hike is moderately challenging but suitable for most people with average fitness. The trail involves some uphill sections and can be slippery when wet. The hike takes about 45-60 minutes each way. We take regular breaks and proceed at a comfortable pace suitable for the group.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Is this tour suitable for children and elderly people?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The tour is suitable for children aged 8 and above who are accustomed to walking. For elderly participants, it depends on their fitness level. The hike can be challenging for those with mobility issues or joint problems. We recommend assessing your physical condition before booking. We can sometimes arrange for a shorter, less strenuous version of the tour upon request.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What happens if it rains on the day of our tour?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The tour generally proceeds rain or shine, as we provide rain ponchos if needed. However, in case of severe weather that makes the hike unsafe, we will either reschedule your tour or provide a full refund. Light rain can actually make the waterfall more impressive and the forest more lush and beautiful.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Can we buy coffee to take home?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Yes, you'll have the opportunity to purchase freshly roasted coffee beans directly from the local community. This is a great way to support the local economy and bring home a authentic souvenir. The coffee is typically sold at very reasonable prices.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Are vegetarian or other dietary requirements accommodated?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Yes, we can accommodate vegetarian, vegan, and other dietary requirements with advance notice. Please inform us of any dietary restrictions when you book the tour so we can make appropriate arrangements with the local community who prepares the traditional lunch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Kilimanjaro Day Toggle Functionality
            const kilimanjaroDayHeaders = document.querySelectorAll('.kilimanjaro-day-header');
            
            kilimanjaroDayHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    const toggle = header.querySelector('.kilimanjaro-day-toggle');
                    
                    // Toggle active class
                    content.classList.toggle('active');
                    
                    // Change toggle symbol and add rotation effect
                    if (content.classList.contains('active')) {
                        toggle.textContent = '−';
                        toggle.classList.add('rotate');
                    } else {
                        toggle.textContent = '+';
                        toggle.classList.remove('rotate');
                    }
                });
            });
            
            // FAQ Toggle Functionality
            const faqQuestions = document.querySelectorAll('.kilimanjaro-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.kilimanjaro-faq-toggle');
                    
                    // Close all other FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherToggle = otherQuestion.querySelector('.kilimanjaro-faq-toggle');
                            
                            otherAnswer.classList.remove('active');
                            otherToggle.textContent = '+';
                            otherToggle.classList.remove('rotate');
                        }
                    });
                    
                    // Toggle current FAQ
                    answer.classList.toggle('active');
                    
                    if (answer.classList.contains('active')) {
                        toggle.textContent = '−';
                        toggle.classList.add('rotate');
                    } else {
                        toggle.textContent = '+';
                        toggle.classList.remove('rotate');
                    }
                });
            });
            
            // Form submission
            const bookingForm = document.getElementById('materuni-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your Materuni Tour booking request! We will contact you shortly to confirm your cultural adventure.');
                closeMateruniBookingPopup();
                bookingForm.reset();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-tour-date').min = today;
        });

        // Materuni Booking Popup Functions
        function openMateruniBookingPopup() {
            document.getElementById('materuniBookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeMateruniBookingPopup() {
            document.getElementById('materuniBookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('materuniBookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeMateruniBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMateruniBookingPopup();
            }
        });
    </script>

<?php include 'plugins/call-to-action.php';?>
<?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


</body>
</html>