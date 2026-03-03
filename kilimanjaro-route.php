<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimanjaro Trekking Packages | Expert Guided Routes</title>
    <meta name="description" content="Discover our comprehensive Kilimanjaro trekking packages. Machame, Lemosho, Marangu routes with expert guides, quality equipment and high success rates.">
    <meta name="keywords" content="Kilimanjaro trekking packages, Mount Kilimanjaro climbs, Machame route, Lemosho route, Marangu route, Northern Circuit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        .packages-hero {
            height: 70vh;
            min-height: 650px;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
            padding-top: 80px;
            overflow: hidden;
        }

        .packages-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .packages-hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .packages-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .packages-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .packages-hero h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .packages-hero p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
        }

        .packages-hero-btns {
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

        /* Packages Overview */
        .packages-overview-section {
            padding: 50px 0 30px;
            background: var(--light);
        }

        .packages-overview-content {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .packages-overview-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .packages-overview-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .packages-badge {
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

        .packages-overview-description {
            color: var(--text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .packages-facts-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .packages-fact-simple {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .packages-fact-label {
            color: var(--dark);
            font-weight: 500;
            font-size: 14px;
        }

        .packages-fact-value {
            color: var(--primary);
            font-weight: 600;
            font-size: 14px;
        }

        /* Why Choose Us Section */
        .why-choose-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .why-choose-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .why-choose-card {
            background: var(--light);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .why-choose-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .why-choose-icon {
            width: 80px;
            height: 80px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .why-choose-card:hover .why-choose-icon {
            background: var(--secondary);
            color: var(--dark);
        }

        .why-choose-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .why-choose-card p {
            color: var(--text);
            line-height: 1.6;
        }

        /* Packages Grid */
        .packages-grid-section {
            padding: 60px 0;
            background-color: var(--light);
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .package-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .package-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .package-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .package-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .package-card:hover .package-image img {
            transform: scale(1.08);
        }

        .package-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .package-badge {
            background: var(--primary);
            color: var(--white);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .package-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .package-content h3 {
            font-size: 22px;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .package-route {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .package-duration {
            color: var(--text);
            font-weight: 500;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .package-description {
            color: var(--text);
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .package-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .package-feature {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 20px;
            font-size: 13px;
            color: var(--primary);
            font-weight: 500;
        }

        .package-feature i {
            font-size: 12px;
        }

        .package-perfect-for {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            font-size: 14px;
        }

        .package-perfect-for i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 16px;
        }

        .package-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .package-price {
            display: flex;
            flex-direction: column;
        }

        .package-price .from {
            font-size: 12px;
            color: var(--text);
            margin-bottom: 2px;
        }

        .package-price .amount {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .package-price .per-person {
            font-size: 12px;
            color: var(--text);
        }

        /* Success Rate Section */
        .success-rate-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .success-rate-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .success-rate-text {
            flex: 1;
        }

        .success-rate-text h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .success-rate-text p {
            margin-bottom: 20px;
            color: var(--text);
            line-height: 1.7;
        }

        .success-rate-stats {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--text);
        }

        .success-rate-visual {
            flex: 1;
            text-align: center;
        }

        .success-rate-visual img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* FAQ Section */
        .packages-faq-section {
            padding: 60px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.03) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .packages-faq-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .packages-faq-item {
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
            transition: all 0.3s ease;
        }

        .packages-faq-item:last-child {
            border-bottom: none;
        }

        .packages-faq-item:hover {
            background-color: rgba(117, 104, 44, 0.02);
        }

        .packages-faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .packages-faq-question:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .packages-faq-question h4 {
            font-size: 18px;
            color: var(--dark);
            margin: 0;
            flex: 1;
            padding-right: 20px;
            font-weight: 600;
        }

        .packages-faq-toggle {
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

        .packages-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: rgba(117, 104, 44, 0.02);
        }

        .packages-faq-answer.active {
            max-height: 500px;
            padding: 0 25px 25px;
        }

        .packages-faq-answer p {
            color: var(--text);
            line-height: 1.7;
            margin: 0;
            font-size: 16px;
        }

        .packages-faq-toggle.rotate {
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
            .packages-hero h1 {
                font-size: 32px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .packages-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .success-rate-content {
                flex-direction: column;
                gap: 30px;
            }
            
            .success-rate-text {
                text-align: center;
            }
            
            .success-rate-stats {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .packages-hero {
                min-height: 700px;
                padding-top: 70px;
            }
            
            .packages-hero h1 {
                font-size: 28px;
            }
            
            .packages-hero p {
                font-size: 16px;
            }
            
            .packages-hero-btns {
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
            
            .packages-overview-content {
                padding: 30px 25px;
            }

            .packages-overview-header h2 {
                font-size: 28px;
            }

            .packages-facts-simple {
                gap: 15px;
            }

            .packages-fact-simple {
                padding: 8px 15px;
            }
            
            .packages-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .why-choose-grid {
                grid-template-columns: 1fr;
            }
            
            .success-rate-stats {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .packages-faq-question {
                padding: 18px 20px;
            }
            
            .packages-faq-question h4 {
                font-size: 16px;
            }
            
            .packages-faq-answer.active {
                padding: 0 20px 20px;
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
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 22px;
            }
            
            .packages-hero h1 {
                font-size: 24px;
            }
            
            .packages-hero p {
                font-size: 15px;
            }
            
            .packages-overview-content {
                padding: 25px 20px;
            }

            .packages-overview-header h2 {
                font-size: 24px;
            }

            .packages-badge {
                font-size: 12px;
                padding: 6px 12px;
            }

            .packages-facts-simple {
                flex-direction: column;
                align-items: center;
            }

            .packages-fact-simple {
                width: 100%;
                max-width: 250px;
                justify-content: space-between;
            }
            
            .package-content h3 {
                font-size: 20px;
            }
            
            .package-price .amount {
                font-size: 22px;
            }
            
            .success-rate-text h2 {
                font-size: 28px;
            }
            
            .stat-number {
                font-size: 30px;
            }
            
            .packages-faq-question {
                padding: 15px 18px;
            }
            
            .packages-faq-question h4 {
                font-size: 15px;
            }
            
            .packages-faq-toggle {
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
        }
    </style>
</head>
<body>

    <!-- Header would be included via PHP -->
    <?php include 'plugins/header.php';?> 

    <!-- Hero Section -->
    <section class="packages-hero">
        <div class="packages-hero-background">
            <img src="img/kilimanjaro-trekking-banner.jpg" alt="Mount Kilimanjaro Summit">
        </div>
        <div class="packages-hero-overlay"></div>
        <div class="packages-hero-content">
            <h1>Kilimanjaro Trekking Packages</h1>
            <p>Conquer Africa's highest peak with our expertly guided Kilimanjaro routes. High success rates, safety-focused expeditions, and unforgettable experiences.</p>
            <div class="packages-hero-btns">
                <a href="#packages" class="btn btn-primary">View Trekking Packages</a>
                <a href="#booking" class="btn btn-primary">Book Your Adventure</a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="packages-overview-section">
        <div class="container">
            <div class="packages-overview-content">
                <div class="packages-overview-header">
                    <h2>Kilimanjaro Trekking Overview</h2>
                    <div class="packages-badge">Expert Guided Expeditions</div>
                </div>
                
                <div class="packages-overview-description">
                    <p>Mount Kilimanjaro, Africa's highest peak at 5,895 meters (19,341 feet), offers one of the world's most accessible high-altitude treks. Our carefully curated Kilimanjaro packages provide the perfect balance of challenge, safety, and adventure. With multiple route options ranging from 5 to 9 days, we cater to all experience levels and preferences. Our expert guides, quality equipment, and comprehensive support ensure the highest success rates and most memorable experiences on the Roof of Africa.</p>
                    
                    <p>Each route offers unique landscapes, from lush rainforests to alpine deserts and arctic summit zones. Whether you choose the scenic Lemosho, popular Machame, or comfortable Marangu route, our experienced team will guide you every step of the way to ensure your safety, comfort, and ultimate success in reaching Uhuru Peak.</p>
                </div>
                
                <div class="packages-facts-simple">
                    <div class="packages-fact-simple">
                        <span class="packages-fact-label">Success Rate:</span>
                        <span class="packages-fact-value">95%+</span>
                    </div>
                    <div class="packages-fact-simple">
                        <span class="packages-fact-label">Group Size:</span>
                        <span class="packages-fact-value">2-12 people</span>
                    </div>
                    <div class="packages-fact-simple">
                        <span class="packages-fact-label">Difficulty:</span>
                        <span class="packages-fact-value">Moderate to Challenging</span>
                    </div>
                    <div class="packages-fact-simple">
                        <span class="packages-fact-label">Best Time:</span>
                        <span class="packages-fact-value">June-October, Jan-Feb</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Why Choose Us</span>
                <h2>Our Kilimanjaro Advantage</h2>
                <p>What sets our Kilimanjaro expeditions apart from the rest</p>
            </div>
            
            <div class="why-choose-grid">
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Safety First Approach</h3>
                    <p>Our guides are certified in wilderness first aid and high-altitude medicine. We carry comprehensive medical kits and portable oxygen on all climbs.</p>
                </div>
                
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>95%+ Success Rate</h3>
                    <p>Our carefully planned acclimatization schedules and pacing strategies result in industry-leading summit success rates.</p>
                </div>
                
                <div class="why-choose-card">
                    <div class="why-choose-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Nutritious Meals</h3>
                    <p>Our professional cooks prepare delicious, high-energy meals designed to fuel your body for the challenging climb ahead.</p>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- Packages Grid -->
    <section class="packages-grid-section" id="packages">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Our Trekking Packages</span>
                <h2>Choose Your Kilimanjaro Route</h2>
                <p>Select from our range of expertly guided Kilimanjaro trekking packages</p>
            </div>
            
            <div class="packages-grid">
                <!-- 6-Day Machame Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/6-Days-Kilimanjaro-Machame-Route-Trek-6.jpg" alt="Machame Route Kilimanjaro">
                        <div class="package-overlay">
                            <div class="package-badge">Most Popular</div>
                        </div>
                    </div>
                    <div class="package-content">
                        <h3>6-Day Machame Route</h3>
                        <div class="package-route">Machame Route</div>
                        <div class="package-duration">6 Days / 5 Nights</div>
                        <div class="package-description">
                            
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Scenic Route</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Moderate Difficulty</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-chart-line"></i>
                                <span>Good Acclimatization</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Adventurous trekkers with good fitness</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,150</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="6-day-machame-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-Day Machame Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/machame-route-7-day.jpg" alt="7-Day Machame Route">
                    </div>
                    <div class="package-content">
                        <h3>7-Day Machame Route</h3>
                        <div class="package-route">Machame Route</div>
                        <div class="package-duration">7 Days / 6 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Extended Itinerary</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Better Acclimatization</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-chart-line"></i>
                                <span>Higher Success Rate</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Those prioritizing summit success</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,450</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-machame-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 8-Day Lemosho Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/8-day-lemosho-package.jpg" alt="Lemosho Route Kilimanjaro">
                        <div class="package-overlay">
                            <div class="package-badge">Best Scenery</div>
                        </div>
                    </div>
                    <div class="package-content">
                        <h3>8-Day Lemosho Route</h3>
                        <div class="package-route">Lemosho Route</div>
                        <div class="package-duration">8 Days / 7 Nights</div>
                        <div class="package-description">
                            
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-eye"></i>
                                <span>Spectacular Views</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Less Crowded</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-chart-line"></i>
                                <span>Excellent Acclimatization</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Scenery lovers and photographers</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,850</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="8-day-lemosho-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-Day Lemosho Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/7-lemosho-route-package.jpg" alt="7-Day Lemosho Route">
                    </div>
                    <div class="package-content">
                        <h3>7-Day Lemosho Route</h3>
                        <div class="package-route">Lemosho Route</div>
                        <div class="package-duration">7 Days / 6 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-eye"></i>
                                <span>Beautiful Scenery</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Moderate Difficulty</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Less Crowded</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Fit trekkers with limited time</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,650</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-lemosho-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 9-Day Northern Circuit -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/9-northern-circuit-route.jpg" alt="Northern Circuit Kilimanjaro">
                        <div class="package-overlay">
                            <div class="package-badge">Highest Success</div>
                        </div>
                    </div>
                    <div class="package-content">
                        <h3>9-Day Northern Circuit</h3>
                        <div class="package-route">Northern Circuit</div>
                        <div class="package-duration">9 Days / 8 Nights</div>
                        <div class="package-description">
                            
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-route"></i>
                                <span>Complete Circuit</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-chart-line"></i>
                                <span>Highest Success Rate</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Least Crowded</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Maximum acclimatization and success</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$3,250</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="9-day-northern-circuit.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 6-Day Marangu Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/6-day-marangu-route-package.jpg" alt="Marangu Route Kilimanjaro">
                    </div>
                    <div class="package-content">
                        <h3>6-Day Marangu Route</h3>
                        <div class="package-route">Marangu Route</div>
                        <div class="package-duration">6 Days / 5 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-home"></i>
                                <span>Hut Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Moderate Difficulty</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-route"></i>
                                <span>Same Route Up & Down</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Popular Route</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Those preferring hut accommodation</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,050</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="6-day-marangu-route-trekking.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 5-Day Marangu Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/5-day-marangu-package.jpg" alt="5-Day Marangu Route">
                    </div>
                    <div class="package-content">
                        <h3>5-Day Marangu Route</h3>
                        <div class="package-route">Marangu Route</div>
                        <div class="package-duration">5 Days / 4 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-home"></i>
                                <span>Hut Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Challenging</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-clock"></i>
                                <span>Shortest Itinerary</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-route"></i>
                                <span>Same Route Up & Down</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Very fit trekkers with limited time</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$1,850</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="5-day-marangu.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-Day Rongai Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/6-days-rongai-route-trekking-package.jpg" alt="Rongai Route Kilimanjaro">
                    </div>
                    <div class="package-content">
                        <h3>7-Day Rongai Route</h3>
                        <div class="package-route">Rongai Route</div>
                        <div class="package-duration">7 Days / 6 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-compass"></i>
                                <span>Northern Approach</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-cloud-sun"></i>
                                <span>Drier Conditions</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Less Crowded</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Those seeking a remote experience</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,550</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-rongai-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 6-Day Rongai Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/6-days-rongai-route.jpg" alt="6-Day Rongai Route">
                    </div>
                    <div class="package-content">
                        <h3>6-Day Rongai Route</h3>
                        <div class="package-route">Rongai Route</div>
                        <div class="package-duration">6 Days / 5 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-compass"></i>
                                <span>Northern Approach</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-cloud-sun"></i>
                                <span>Drier Conditions</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-clock"></i>
                                <span>Shorter Itinerary</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Fit trekkers wanting a remote experience</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,350</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="6-day-rongai-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-Day Umbwe Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/rongai-route-7-days.jpg" alt="Umbwe Route Kilimanjaro">
                        <div class="package-overlay">
                            <div class="package-badge">Most Challenging</div>
                        </div>
                    </div>
                    <div class="package-content">
                        <h3>7-Day Umbwe Route</h3>
                        <div class="package-route">Umbwe Route</div>
                        <div class="package-duration">7 Days / 6 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Steep & Direct</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Very Challenging</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-users"></i>
                                <span>Least Crowded</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Experienced, fit trekkers seeking challenge</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,750</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-umbwe-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- 6-Day Umbwe Route -->
                <div class="package-card">
                    <div class="package-image">
                        <img src="img/umbwe-route-6-day.jpg" alt="6-Day Umbwe Route">
                    </div>
                    <div class="package-content">
                        <h3>6-Day Umbwe Route</h3>
                        <div class="package-route">Umbwe Route</div>
                        <div class="package-duration">6 Days / 5 Nights</div>
                        <div class="package-description">
                        </div>
                        <div class="package-features">
                            <div class="package-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Extremely Steep</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Most Challenging</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-bed"></i>
                                <span>Tent Accommodation</span>
                            </div>
                            <div class="package-feature">
                                <i class="fas fa-clock"></i>
                                <span>Rapid Ascent</span>
                            </div>
                        </div>
                        <div class="package-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Expert trekkers seeking ultimate challenge</span>
                        </div>
                        <div class="package-footer">
                            <div class="package-price">
                                <span class="from">From</span>
                                <span class="amount">$2,550</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="6-day-umbwe-route.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Rate Section -->
    <section class="success-rate-section">
        <div class="container">
            <div class="success-rate-content">
                <div class="success-rate-text">
                    <h2>Industry-Leading Success Rates</h2>
                    <p>Our carefully designed itineraries, expert guides, and comprehensive support system result in summit success rates that far exceed the industry average.</p>
                    <p>We prioritize proper acclimatization with longer routes and strategic ascent profiles. Our guides are trained to monitor each climber's condition and adjust pacing accordingly.</p>
                    
                    <div class="success-rate-stats">
                        <div class="stat-item">
                            <div class="stat-number">95%+</div>
                            <div class="stat-label">Overall Success Rate</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">8+ Day Routes</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">92%</div>
                            <div class="stat-label">6-7 Day Routes</div>
                        </div>
                    </div>
                </div>
                <div class="success-rate-visual">
                    <img src="img/kilimanjaro-summit-uhuru.jpg" alt="Kilimanjaro Success Rates">
                </div>
            </div>
        </div>
    </section>
<br><br>
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
<br><br>
    
    <!-- Booking Popup -->
    <div class="booking-popup-overlay" id="packagesBookingPopupOverlay">
        <div class="booking-popup-modal">
            <button class="booking-popup-close" onclick="closePackagesBookingPopup()">&times;</button>
            <div class="booking-popup-heading">
                <h3>Book Your Kilimanjaro Adventure</h3>
                <p>Fill out the form below and our team will contact you within 24 hours</p>
            </div>
            <form class="booking-popup-form" id="packages-booking-form">
                <div class="popup-form-row">
                    <div class="popup-form-group">
                        <label for="popup-first-name">First Name</label>
                        <input type="text" id="popup-first-name" name="first_name" required>
                    </div>
                    <div class="popup-form-group">
                        <label for="popup-last-name">Last Name</label>
                        <input type="text" id="popup-last-name" name="last_name" required>
                    </div>
                </div>
                <div class="popup-form-row">
                    <div class="popup-form-group">
                        <label for="popup-email">Email Address</label>
                        <input type="email" id="popup-email" name="email" required>
                    </div>
                    <div class="popup-form-group">
                        <label for="popup-phone">Phone Number</label>
                        <input type="tel" id="popup-phone" name="phone" required>
                    </div>
                </div>
                <div class="popup-form-row">
                    <div class="popup-form-group">
                        <label for="popup-package-type">Preferred Package</label>
                        <select id="popup-package-type" name="package_type" required>
                            <option value="">Select a package</option>
                            <option value="6-Day Machame Route">6-Day Machame Route</option>
                            <option value="7-Day Machame Route">7-Day Machame Route</option>
                            <option value="8-Day Lemosho Route">8-Day Lemosho Route</option>
                            <option value="7-Day Lemosho Route">7-Day Lemosho Route</option>
                            <option value="9-Day Northern Circuit">9-Day Northern Circuit</option>
                            <option value="6-Day Marangu Route">6-Day Marangu Route</option>
                            <option value="5-Day Marangu Route">5-Day Marangu Route</option>
                            <option value="7-Day Rongai Route">7-Day Rongai Route</option>
                            <option value="6-Day Rongai Route">6-Day Rongai Route</option>
                            <option value="7-Day Umbwe Route">7-Day Umbwe Route</option>
                            <option value="6-Day Umbwe Route">6-Day Umbwe Route</option>
                        </select>
                    </div>
                    <div class="popup-form-group">
                        <label for="popup-trip-date">Preferred Start Date</label>
                        <input type="date" id="popup-trip-date" name="trip_date" required>
                    </div>
                </div>
                <div class="popup-form-row">
                    <div class="popup-form-group">
                        <label for="popup-group-size">Number of People</label>
                        <input type="number" id="popup-group-size" name="group_size" min="1" max="20" value="1" required>
                    </div>
                    <div class="popup-form-group">
                        <label for="popup-budget">Budget Range</label>
                        <select id="popup-budget" name="budget">
                            <option value="">Select budget range</option>
                            <option value="Under $2,000">Under $2,000</option>
                            <option value="$2,000 - $2,500">$2,000 - $2,500</option>
                            <option value="$2,500 - $3,000">$2,500 - $3,000</option>
                            <option value="$3,000 - $3,500">$3,000 - $3,500</option>
                            <option value="Over $3,500">Over $3,500</option>
                        </select>
                    </div>
                </div>
                <div class="popup-form-group">
                    <label for="popup-message">Additional Information or Questions</label>
                    <textarea id="popup-message" name="message" rows="4" placeholder="Tell us about your fitness level, previous trekking experience, or any specific requirements..."></textarea>
                </div>
                <div class="popup-form-group">
                    <button type="submit" class="popup-btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        Submit Booking Request
                    </button>
                </div>
                <div class="popup-booking-terms">
                    By submitting this form, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
                </div>
            </form>
        </div>
    </div>
    
    <?php include 'plugins/call-to-action.php';?>
    <?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Toggle Functionality
            const faqQuestions = document.querySelectorAll('.packages-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.packages-faq-toggle');
                    
                    // Close all other FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherToggle = otherQuestion.querySelector('.packages-faq-toggle');
                            
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
            const bookingForm = document.getElementById('packages-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your Kilimanjaro trekking inquiry! We will contact you shortly to discuss your adventure.');
                closePackagesBookingPopup();
                bookingForm.reset();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-trip-date').min = today;
        });

        // Packages Booking Popup Functions
        function openPackagesBookingPopup(packageName = '') {
            // If a specific package is passed, set it as the default selection
            if (packageName) {
                document.getElementById('popup-package-type').value = packageName;
            }
            
            document.getElementById('packagesBookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closePackagesBookingPopup() {
            document.getElementById('packagesBookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('packagesBookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closePackagesBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePackagesBookingPopup();
            }
        });
    </script>
</body>
</html>