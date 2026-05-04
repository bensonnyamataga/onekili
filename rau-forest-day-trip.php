
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rau Forest Reserve | Nature Walk & Bird Watching Tour from Moshi</title>
    <meta name="description" content="Experience the beautiful Rau Forest Reserve with guided nature walks and bird watching. Day trip from Moshi with diverse wildlife and pristine nature.">
    <meta name="keywords" content="Rau Forest Reserve, Moshi day trip, Tanzania forest, bird watching, nature walk, wildlife">
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
            <img src="img/rau-forest-day-trip.jpg" alt="Rau Forest Reserve - Lush green forest with diverse wildlife">
        </div>
        <div class="daytrip-hero-overlay"></div>
        <div class="daytrip-hero-content">
            <h1>Rau Forest Reserve</h1>
            <p>Discover the pristine beauty of Rau Forest with guided nature walks and exceptional bird watching opportunities</p>
            <div class="daytrip-hero-btns">
                <button class="btn btn-primary" onclick="openRauBookingPopup()">Book This Tour</button>
                <a href="#itinerary" class="btn btn-primary">View Itinerary</a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="kilimanjaro-overview-section">
        <div class="container">
            <div class="overview-content">
                <div class="overview-header">
                    <h2>Rau Forest Reserve Overview</h2>
                    <div class="route-badge">Nature & Wildlife Experience</div>
                </div>
                
                <div class="overview-description">
                    <p>Located just outside Moshi, Rau Forest Reserve is a pristine natural sanctuary covering approximately 350 hectares of indigenous forest. This protected area is home to an incredible diversity of flora and fauna, including over 150 bird species, various monkey species, and countless plant species.</p>
                    <p>The forest offers well-maintained walking trails that wind through lush vegetation, providing excellent opportunities for bird watching, photography, and nature appreciation. With its proximity to Moshi, Rau Forest is the perfect destination for a half-day nature escape without traveling far from town.</p>
                </div>
                <div class="day-images">
                <img src="img/rau-forest-hiking_.jpg" alt="Kilimanjaro sunrise weather conditions">
                <img src="img/rau-forest-tour.jpg" alt="Kilimanjaro seasonal weather variations">
            </div>
                <div class="facts-simple">
                    <div class="fact-simple">
                        <span class="fact-label">Duration:</span>
                        <span class="fact-value">4-5 hours</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Group Size:</span>
                        <span class="fact-value">2-8 people</span>
                    </div>
                    <div class="fact-simple">
                        <span class="fact-label">Difficulty:</span>
                        <span class="fact-value">Easy to Moderate</span>
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
                <p>Follow our carefully planned itinerary for an unforgettable nature experience</p>
            </div>

            <div class="kilimanjaro-days-container">
                <!-- Time 1 -->
                <div class="kilimanjaro-day">
                    <div class="kilimanjaro-day-header">
                        <div class="kilimanjaro-day-title">
                            <div class="kilimanjaro-day-number">
                                <div class="day-label">Time</div>
                                <div class="day-digit">7:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Hotel Pickup in Moshi</h3>
                                <p>Start your nature adventure with convenient pickup</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Your day begins with a convenient pickup from your hotel or accommodation in Moshi. Meet your friendly guide who will accompany you throughout the nature walk and provide insights about the forest ecosystem.
                        </p>
                        <p>
                            We'll begin our short drive to Rau Forest Reserve, located just outside Moshi. The journey takes approximately 20-30 minutes, making this an easily accessible nature destination.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-hotel"></i>
                                <span>Hotel Pickup</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-car"></i>
                                <span>Short Drive</span>
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
                                <div class="day-digit">8:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Arrive at Rau Forest Reserve</h3>
                                <p>Begin your forest exploration</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Upon arrival at Rau Forest Reserve, you'll receive a brief orientation from your guide about the forest, its importance as a conservation area, and what to expect during your walk.
                        </p>
                        <p>
                            Your guide will provide binoculars for bird watching and explain the different trails available. This is also a good time to use restroom facilities before beginning your nature walk.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-tree"></i>
                                <span>Forest Orientation</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-binoculars"></i>
                                <span>Binoculars Provided</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-info-circle"></i>
                                <span>Trail Information</span>
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
                                <div class="day-digit">8:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Guided Nature Walk</h3>
                                <p>Explore the diverse forest ecosystem</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Begin your guided walk through the beautiful forest trails. The walk is conducted at a leisurely pace, allowing you to fully appreciate the natural surroundings and spot wildlife.
                        </p>
                        <p>
                            Your guide will point out various tree species, medicinal plants, and explain the ecological importance of the forest. You'll learn about the different forest layers and the animals that inhabit them.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-hiking"></i>
                                <span>Forest Walk</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-leaf"></i>
                                <span>Plant Identification</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-book"></i>
                                <span>Ecological Insights</span>
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
                                <div class="day-digit">10:00</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Bird Watching Session</h3>
                                <p>Spot diverse bird species in their natural habitat</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            Rau Forest is renowned for its exceptional bird watching opportunities. With over 150 recorded species, you'll have the chance to spot various colorful and unique birds.
                        </p>
                        <p>
                            Your guide will help you identify different species by their calls and appearances. Common sightings include turacos, hornbills, sunbirds, and various forest specialists. This is a perfect activity for both novice and experienced bird watchers.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-dove"></i>
                                <span>Bird Watching</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-binoculars"></i>
                                <span>Species Identification</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-camera"></i>
                                <span>Photography Opportunities</span>
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
                                <div class="day-digit">11:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Wildlife Observation</h3>
                                <p>Look for monkeys and other forest inhabitants</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            As you continue through the forest, keep your eyes peeled for various monkey species that call Rau Forest home. Commonly spotted primates include black and white colobus monkeys, blue monkeys, and vervet monkeys.
                        </p>
                        <p>
                            Your guide will share insights about their behavior, social structures, and ecological roles. You might also spot other forest inhabitants such as butterflies, reptiles, and small mammals.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-paw"></i>
                                <span>Monkey Spotting</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-binoculars"></i>
                                <span>Wildlife Observation</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-book"></i>
                                <span>Animal Behavior</span>
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
                                <div class="day-digit">12:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Picnic Lunch in Nature</h3>
                                <p>Enjoy a refreshing meal surrounded by forest</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After your forest exploration, enjoy a delicious picnic lunch in a scenic spot within or near the forest. The peaceful natural setting provides the perfect atmosphere for relaxing and reflecting on your nature experience.
                        </p>
                        <p>
                            The lunch typically includes fresh sandwiches, fruits, snacks, and beverages. We accommodate dietary restrictions with advance notice, ensuring everyone enjoys a satisfying meal in this beautiful natural setting.
                        </p>
                        
                        <div class="kilimanjaro-day-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-utensils"></i>
                                <span>Picnic Lunch</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-leaf"></i>
                                <span>Natural Setting</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-apple-alt"></i>
                                <span>Fresh Ingredients</span>
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
                                <div class="day-digit">13:30</div>
                            </div>
                            <div class="kilimanjaro-day-info">
                                <h3>Return to Moshi</h3>
                                <p>Journey back with nature memories</p>
                            </div>
                        </div>
                        <span class="kilimanjaro-day-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-day-content">
                        <p>
                            After lunch, we'll begin our journey back to Moshi. We typically depart around 1:30 PM to ensure we get you back to your accommodation with plenty of time to enjoy the rest of your day.
                        </p>
                        <p>
                            The return drive takes approximately 20-30 minutes, giving you time to relax and reflect on your amazing nature experience. We'll drop you off at your hotel in Moshi, typically arriving around 2:00 PM.
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
                                <span>Nature Memories</span>
                            </div>
                        </div>
                        
                        <div class="kilimanjaro-day-stats">
                            <p><i class="fas fa-clock"></i> Return Time: ~2:00 PM</p>
                            <p><i class="fas fa-car"></i> Drive Time: 20-30 minutes</p>
                            <p><i class="fas fa-hiking"></i> Walking Time: 3-4 hours</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class="book-now-container">
                <button class="btn btn-primary" onclick="openRauBookingPopup()">
                    <i class="fas fa-calendar-check"></i> Book Your Rau Forest Tour
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
                <p>Everything you need to know about what's included in your Rau Forest Reserve tour</p>
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
                                <p>Experienced English-speaking nature guide</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Entrance Fees</h4>
                                <p>All park and conservation fees for Rau Forest</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Picnic Lunch</h4>
                                <p>Delicious picnic lunch with drinks in a scenic setting</p>
                            </div>
                        </div>
                        
                        <div class="inclusion-item">
                            <div class="inclusion-icon">
                                <i class="fas fa-binoculars"></i>
                            </div>
                            <div class="inclusion-content">
                                <h4>Binoculars</h4>
                                <p>Quality binoculars provided for bird watching</p>
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
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Travel Insurance</h4>
                                <p>Personal travel insurance is not included</p>
                            </div>
                        </div>
                        
                        <div class="exclusion-item">
                            <div class="exclusion-icon">
                                <i class="fas fa-umbrella"></i>
                            </div>
                            <div class="exclusion-content">
                                <h4>Rain Gear</h4>
                                <p>Please bring appropriate clothing for weather conditions</p>
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
                <h2>Rau Forest Reserve FAQ</h2>
                <p>Find answers to frequently asked questions about our Rau Forest Reserve tour</p>
            </div>
            
            <div class="kilimanjaro-faq-container">
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What should I bring to the Rau Forest tour?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>We recommend bringing comfortable walking shoes, lightweight clothing in neutral colors, sunscreen, a hat, a reusable water bottle, a camera, insect repellent, and a light rain jacket (depending on the season). Don't forget any personal medications you might need.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>How difficult is the walking in Rau Forest?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The walking is generally easy to moderate with well-maintained trails. The terrain is mostly flat with some gentle inclines. The pace is leisurely with frequent stops for bird watching and wildlife observation. The total walking distance is approximately 3-4 kilometers.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Is this tour suitable for children and elderly people?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Yes, the tour is suitable for all ages and fitness levels. The walking is not strenuous, and there are plenty of opportunities to rest. Children especially enjoy spotting monkeys and colorful birds. For those with mobility issues, we can adjust the route to accommodate different abilities.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What happens if it rains on the day of our tour?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>The tour generally proceeds rain or shine, as we provide rain ponchos if needed. The forest canopy provides some protection from light rain, and many birds are actually more active after rainfall. However, in case of severe weather that makes the walk unsafe, we will either reschedule your tour or provide a full refund.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>What wildlife can we expect to see?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Rau Forest is home to over 150 bird species, including turacos, hornbills, sunbirds, and various forest specialists. Mammals include black and white colobus monkeys, blue monkeys, and vervet monkeys. You may also spot butterflies, reptiles, and various insects. While we can't guarantee specific sightings, your guide will maximize your chances of wildlife encounters.</p>
                    </div>
                </div>
                
                <div class="kilimanjaro-faq-item">
                    <div class="kilimanjaro-faq-question">
                        <h4>Are there restroom facilities in the forest?</h4>
                        <span class="kilimanjaro-faq-toggle">+</span>
                    </div>
                    <div class="kilimanjaro-faq-answer">
                        <p>Basic restroom facilities are available at the forest entrance. During the walk, facilities are limited, so we recommend using the restrooms before starting the nature walk. Your guide will identify appropriate spots for comfort breaks during the tour if needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer would be included via PHP -->
    <!-- <?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>
 -->
    <!-- <?php include 'plugins/call-to-action.php';?> -->

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
            const bookingForm = document.getElementById('rau-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your Rau Forest Reserve booking request! We will contact you shortly to confirm your nature adventure.');
                closeRauBookingPopup();
                bookingForm.reset();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-tour-date').min = today;
        });

        // Rau Forest Booking Popup Functions
        function openRauBookingPopup() {
            document.getElementById('rauBookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeRauBookingPopup() {
            document.getElementById('rauBookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('rauBookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRauBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeRauBookingPopup();
            }
        });
    </script>

<?php include 'plugins/call-to-action.php';?>
<?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


</body>
