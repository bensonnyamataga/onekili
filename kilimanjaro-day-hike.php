<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimanjaro Day Hike to Mandara Hut | Marangu Route Day Trip</title>
    <meta name="description" content="Experience Mount Kilimanjaro with a day hike to Mandara Hut. Trek through rainforest to the first hut on the Marangu Route with stunning views.">
    <meta name="keywords" content="Kilimanjaro day hike, Mandara Hut, Marangu Route, Mount Kilimanjaro hike, Tanzania day trip">
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
            <img src="img/The-Mandara-Hut-of-Mount-Kilimanjaro.jpg" alt="Kilimanjaro Day Hike - Mandara Hut on Marangu Route">
        </div>
        <div class="daytrip-hero-overlay"></div>
        <div class="daytrip-hero-content">
            <h1>Kilimanjaro Day Hike to Mandara Hut</h1>
            <p>Experience the magic of Mount Kilimanjaro with a day hike to the first hut on the famous Marangu Route</p>
            <div class="daytrip-hero-btns">
                <button class="btn btn-primary" onclick="openKilimanjaroBookingPopup()">Book This Hike</button>
                <a href="#itinerary" class="btn btn-primary">View Itinerary</a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="kilimanjaro-overview-section">
        <div class="container">
            <div class="overview-content">
                <div class="overview-header">
                    <h2>Kilimanjaro Day Hike Overview</h2>
                    <div class="route-badge">Mountain Adventure</div>
                </div>
                
                <div class="overview-description">
                    <p>Experience the majesty of Mount Kilimanjaro without committing to a multi-day summit attempt. Our day hike to Mandara Hut takes you through the stunning rainforest zone of Africa's highest peak, offering a perfect introduction to Kilimanjaro's diverse ecosystems and breathtaking scenery.</p>
                    <p>You'll trek through lush montane forest, spot colobus monkeys in the canopy, and reach Mandara Hut at 2,720 meters (8,920 feet) where you can enjoy spectacular views before descending. This challenging but rewarding day hike gives you a true taste of the Kilimanjaro experience with professional guides and all necessary permits included.</p>
                </div>
                <div class="day-images">
                <img src="img/day-hike-marangu.jpg" alt="Kilimanjaro sunrise weather conditions">
                <img src="img/kilimanjaro-day-hike.jpg" alt="Kilimanjaro seasonal weather variations">
            </div>
                <div class="facts-simple">
                    <div class="fact-simple">
                        <span class="fact-label">Duration:</span>
                        <span class="fact-value">8-9 hours</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Group Size:</span>
                        <span class="fact-value">2-8 people</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Difficulty:</span>
                        <span class="fact-value">Moderate to Challenging</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Max Altitude:</span>
                        <span class="fact-value">2,720m / 8,920ft</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerary Section -->
    <section class="kilimanjaro-itinerary-container" id="itinerary">
        <div class="container">
            <div class="kilimanjaro-itinerary-heading">
                <h2>Hiking Itinerary</h2>
                <p>Follow our carefully planned itinerary for an unforgettable Kilimanjaro day hike</p>
            </div>

            <div class="kilimanjaro-days-container">
                <!-- Time 1 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">6:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Hotel Pickup in Moshi</h3>
                                <p>Early start for your mountain adventure</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Your day begins with an early morning pickup from your hotel or accommodation in Moshi. Meet your experienced mountain guide who will brief you on the day's hike and provide important safety information.
                        </p>
                        <p>
                            We'll begin our drive to Marangu Gate, the starting point of the Marangu Route. The journey takes approximately 1 hour, giving you time to prepare mentally for the hike ahead while enjoying views of the mountain in the morning light.
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
                                <span>Mountain Guide</span>
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
                                <div class="day-digit">7:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Marangu Gate Registration</h3>
                                <p>Official start of your Kilimanjaro hike</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Arrive at Marangu Gate (1,870m / 6,135ft) where you'll complete the necessary registration with Kilimanjaro National Park authorities. This is the official starting point for the Marangu Route, one of Kilimanjaro's most popular trails.
                        </p>
                        <p>
                            Your guide will handle all the paperwork while you prepare your daypack and take in the atmosphere. This is also your last chance to use proper restroom facilities before beginning the ascent through the rainforest.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-clipboard-check"></i>
                                <span>Park Registration</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-mountain"></i>
                                <span>Marangu Gate</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-hiking"></i>
                                <span>Trail Preparation</span>
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
                                <div class="day-digit">8:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Rainforest Ascent</h3>
                                <p>Trek through lush montane forest</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Begin your ascent through Kilimanjaro's magnificent rainforest zone. The well-maintained trail winds through dense vegetation with giant trees covered in moss and ferns. The air is humid and filled with the sounds of birds and wildlife.
                        </p>
                        <p>
                            Your guide will point out interesting flora and fauna along the way. Keep an eye out for blue monkeys, colobus monkeys, and various bird species that inhabit this rich ecosystem. The trail is steadily uphill but manageable at a comfortable pace.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-tree"></i>
                                <span>Rainforest Trek</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-leaf"></i>
                                <span>Rich Biodiversity</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-crow"></i>
                                <span>Wildlife Spotting</span>
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
                                <div class="day-digit">11:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Arrive at Mandara Hut</h3>
                                <p>Reach the first hut on Marangu Route</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Arrive at Mandara Hut (2,720m / 8,920ft), the first overnight stop for climbers on the Marangu Route. The A-frame huts are nestled in a clearing surrounded by forest, creating a peaceful mountain refuge.
                        </p>
                        <p>
                            Take time to rest, enjoy your packed lunch, and explore the area. On clear days, you might catch glimpses of the summit through breaks in the forest canopy. This is your turnaround point and a great achievement for a day hike.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-mountain"></i>
                                <span>Mandara Hut</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-utensils"></i>
                                <span>Lunch Break</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-camera"></i>
                                <span>Summit Views</span>
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
                                <div class="day-digit">12:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Begin Descent</h3>
                                <p>Return journey through the forest</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After a well-deserved rest at Mandara Hut, begin your descent back to Marangu Gate. The return journey is generally faster as you're going downhill, but still requires careful footing on the sometimes-slippery trail.
                        </p>
                        <p>
                            Descending gives you a different perspective on the rainforest, and you might spot wildlife you missed on the way up. Your guide will ensure you maintain a safe pace and take breaks as needed during the descent.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-hiking"></i>
                                <span>Forest Descent</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-shoe-prints"></i>
                                <span>Downhill Trek</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-eye"></i>
                                <span>Different Perspectives</span>
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
                                <div class="day-digit">15:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Return to Marangu Gate</h3>
                                <p>Complete your Kilimanjaro day hike</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Arrive back at Marangu Gate where you'll sign out with park authorities. This marks the official completion of your Kilimanjaro day hike. Take a moment to reflect on your achievement and celebrate with your guide and fellow hikers.
                        </p>
                        <p>
                            You'll have access to restroom facilities to freshen up before the drive back to Moshi. Many hikers choose to purchase certificates or souvenirs at the gate to commemorate their Kilimanjaro experience.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-flag-checkered"></i>
                                <span>Hike Completion</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-clipboard-list"></i>
                                <span>Park Sign-out</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-gift"></i>
                                <span>Souvenir Shopping</span>
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
                                <div class="day-digit">16:30</div>
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
                            After completing your hike, we'll begin the drive back to Moshi. The return journey takes approximately 1 hour, giving you time to relax and reflect on your amazing Kilimanjaro experience.
                        </p>
                        <p>
                            We'll drop you off at your hotel in Moshi, typically arriving around 5:30 PM. After a challenging but rewarding day on the mountain, you'll appreciate a hot shower and comfortable rest at your accommodation.
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
                            <p><i class="fas fa-clock"></i> Return Time: ~5:30 PM</p>
                            <p><i class="fas fa-hiking"></i> Hiking Time: 6-7 hours</p>
                            <p><i class="fas fa-mountain"></i> Elevation Gain: 850m / 2,790ft</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class="book-now-container">
                <button class="btn btn-primary" onclick="openKilimanjaroBookingPopup()">
                    <i class="fas fa-calendar-check"></i> Book Your Kilimanjaro Day Hike
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
                <p>Everything you need to know about what's included in your Kilimanjaro Day Hike</p>
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
                                <h4>Professional Mountain Guide</h4>
                                <p>Experienced, certified Kilimanjaro guide</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>All Park Fees & Permits</h4>
                                <p>Kilimanjaro National Park entry fees and hiking permits</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Packed Lunch</h4>
                                <p>Nutritious packed lunch for the hike</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Bottled Water</h4>
                                <p>Ample bottled water for hydration during the hike</p>
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
                                <h4>Tips for Guide</h4>
                                <p>Gratuities for your guide (recommended)</p>
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
                                <i class="fas fa-hiking"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Hiking Gear</h4>
                                <p>Personal hiking equipment (can be rented separately)</p>
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
                <h2>Kilimanjaro Day Hike FAQ</h2>
                <p>Find answers to frequently asked questions about our Kilimanjaro Day Hike to Mandara Hut</p>
            </div>
            
            <div class="kilimanjaro-faq-container">
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What should I bring for the Kilimanjaro day hike?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>We recommend bringing sturdy hiking boots, comfortable moisture-wicking clothing (layers), rain jacket, daypack, hat, sunglasses, sunscreen, camera, personal medications, and any preferred snacks. We provide water and lunch, but you may want additional energy snacks.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>How difficult is the hike to Mandara Hut?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The hike is moderately challenging with a steady uphill climb of about 850 meters (2,790 feet) elevation gain. The trail is well-maintained but can be slippery when wet. A reasonable level of fitness is required. We maintain a comfortable pace with regular breaks to accommodate different fitness levels.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Is this hike suitable for children or elderly people?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The hike is suitable for children aged 12+ who are accustomed to hiking and in good physical condition. For elderly participants, it depends on their fitness level and hiking experience. We recommend this hike for people with good mobility and cardiovascular fitness. Those with health concerns should consult their doctor before booking.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What happens if the weather is bad?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The hike generally proceeds in most weather conditions as we provide rain gear if needed. However, in case of severe weather that makes the trail unsafe (heavy rain, thunderstorms), we will either reschedule your hike or provide a full refund. The rainforest can be quite wet even on good days, so proper preparation is essential.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Can I rent hiking equipment?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Yes, we offer rental equipment including hiking boots, rain jackets, daypacks, and trekking poles. Please inform us in advance of your needs so we can ensure availability. Rental fees are additional and not included in the tour price.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What is the best time of year for this day hike?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The hike is available year-round, but the best conditions are typically during the drier seasons from June-October and December-February. The rainforest is lush and beautiful during the rainy seasons (March-May and November) but trails can be muddier. Each season offers a unique experience on the mountain.</p>
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
            const bookingForm = document.getElementById('kilimanjaro-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your Kilimanjaro Day Hike booking request! We will contact you shortly to confirm your mountain adventure.');
                closeKilimanjaroBookingPopup();
                bookingForm.reset();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-hike-date').min = today;
        });

        // Kilimanjaro Booking Popup Functions
        function openKilimanjaroBookingPopup() {
            document.getElementById('kilimanjaroBookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeKilimanjaroBookingPopup() {
            document.getElementById('kilimanjaroBookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('kilimanjaroBookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeKilimanjaroBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeKilimanjaroBookingPopup();
            }
        });
    </script>

<?php include 'plugins/call-to-action.php';?>
<?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


</body>
</html>