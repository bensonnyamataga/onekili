<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari Package Combos | Kilimanjaro & Serengeti Adventure Packages</title>
    <meta name="description" content="Discover our premium safari package combos combining Kilimanjaro climbs with Serengeti safaris and Zanzibar beach holidays. All-inclusive adventure packages.">
    <meta name="keywords" content="safari package combos, Kilimanjaro and safari, Tanzania adventure packages, Serengeti safari combos, Lemosho route packages, Machame route combos">
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
        .safari-hero {
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

        .safari-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .safari-hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .safari-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .safari-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .safari-hero h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .safari-hero p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
        }

        .safari-hero-btns {
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

        /* Why Book Safari Combo Section */
        .why-safari-combo-section {
             padding: 40px 0 20px;
            background-color: var(--white);
        }

        .why-safari-combo-content {
            background: var(--light);
            border-radius: 12px;
            padding: 40px;
        }

        .why-safari-combo-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .why-safari-combo-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .why-safari-badge {
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

        .why-safari-combo-description {
            color: var(--text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .why-safari-benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .why-safari-benefit {
            background: var(--white);
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .why-safari-benefit:hover {
            transform: translateY(-5px);
        }

        .why-safari-benefit-icon {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
        }

        .why-safari-benefit h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .why-safari-benefit p {
            font-size: 14px;
            color: var(--text);
            line-height: 1.5;
        }

        /* Safari Combo Overview Section */
        .safari-combo-overview-section {
             padding: 20px 0 30px;
            background: var(--light);
        }

        .safari-combo-overview-content {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
        }

        .safari-combo-overview-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .safari-combo-overview-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .safari-combo-badge {
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

        .safari-combo-overview-description {
            color: var(--text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .safari-combo-facts-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .safari-combo-fact-simple {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .safari-combo-fact-label {
            color: var(--dark);
            font-weight: 500;
            font-size: 14px;
        }

        .safari-combo-fact-value {
            color: var(--primary);
            font-weight: 600;
            font-size: 14px;
        }

        /* Safari Combo Grid */
        .safari-combo-grid-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .safari-combo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .safari-combo-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .safari-combo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .safari-combo-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .safari-combo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .safari-combo-card:hover .safari-combo-image img {
            transform: scale(1.08);
        }

        .safari-combo-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .safari-combo-badge {
            background: var(--primary);
            color: var(--white);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .safari-combo-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .safari-combo-content h3 {
            font-size: 22px;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .safari-combo-location {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .safari-combo-duration {
            color: var(--text);
            font-weight: 500;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .safari-combo-description {
            color: var(--text);
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .safari-combo-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .safari-combo-feature {
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

        .safari-combo-feature i {
            font-size: 12px;
        }

        .safari-combo-perfect-for {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            font-size: 14px;
        }

        .safari-combo-perfect-for i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 16px;
        }

        .safari-combo-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .safari-combo-price {
            display: flex;
            flex-direction: column;
        }

        .safari-combo-price .from {
            font-size: 12px;
            color: var(--text);
            margin-bottom: 2px;
        }

        .safari-combo-price .amount {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .safari-combo-price .per-person {
            font-size: 12px;
            color: var(--text);
        }

        /* FAQ Section */
        .safari-combo-faq-section {
            padding: 60px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.03) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .safari-combo-faq-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .safari-combo-faq-item {
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
            transition: all 0.3s ease;
        }

        .safari-combo-faq-item:last-child {
            border-bottom: none;
        }

        .safari-combo-faq-item:hover {
            background-color: rgba(117, 104, 44, 0.02);
        }

        .safari-combo-faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .safari-combo-faq-question:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .safari-combo-faq-question h4 {
            font-size: 18px;
            color: var(--dark);
            margin: 0;
            flex: 1;
            padding-right: 20px;
            font-weight: 600;
        }

        .safari-combo-faq-toggle {
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

        .safari-combo-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: rgba(117, 104, 44, 0.02);
        }

        .safari-combo-faq-answer.active {
            max-height: 500px;
            padding: 0 25px 25px;
        }

        .safari-combo-faq-answer p {
            color: var(--text);
            line-height: 1.7;
            margin: 0;
            font-size: 16px;
        }

        .safari-combo-faq-toggle.rotate {
            transform: rotate(45deg);
            background: #d4a336;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .safari-hero h1 {
                font-size: 32px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .safari-combo-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .safari-hero {
                min-height: 700px;
                padding-top: 70px;
            }
            
            .safari-hero h1 {
                font-size: 28px;
            }
            
            .safari-hero p {
                font-size: 16px;
            }
            
            .safari-hero-btns {
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
            
            .why-safari-combo-content,
            .safari-combo-overview-content {
                padding: 30px 25px;
            }

            .why-safari-combo-header h2,
            .safari-combo-overview-header h2 {
                font-size: 28px;
            }

            .why-safari-benefits {
                grid-template-columns: 1fr;
            }

            .safari-combo-facts-simple {
                gap: 15px;
            }

            .safari-combo-fact-simple {
                padding: 8px 15px;
            }
            
            .safari-combo-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .safari-combo-content h3 {
                font-size: 20px;
            }
            
            .safari-combo-price .amount {
                font-size: 22px;
            }
            
            .safari-combo-faq-question {
                padding: 18px 20px;
            }
            
            .safari-combo-faq-question h4 {
                font-size: 16px;
            }
            
            .safari-combo-faq-answer.active {
                padding: 0 20px 20px;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 22px;
            }
            
            .safari-hero h1 {
                font-size: 24px;
            }
            
            .safari-hero p {
                font-size: 15px;
            }
            
            .why-safari-combo-content,
            .safari-combo-overview-content {
                padding: 25px 20px;
            }

            .why-safari-combo-header h2,
            .safari-combo-overview-header h2 {
                font-size: 24px;
            }

            .why-safari-badge,
            .safari-combo-badge {
                font-size: 12px;
                padding: 6px 12px;
            }

            .safari-combo-facts-simple {
                flex-direction: column;
                align-items: center;
            }

            .safari-combo-fact-simple {
                width: 100%;
                max-width: 250px;
                justify-content: space-between;
            }
            
            .safari-combo-faq-question {
                padding: 15px 18px;
            }
            
            .safari-combo-faq-question h4 {
                font-size: 15px;
            }
            
            .safari-combo-faq-toggle {
                width: 25px;
                height: 25px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Header would be included via PHP -->
    <?php include 'plugins/header.php';?> 

    <!-- Hero Section -->
    <section class="safari-hero">
        <div class="safari-hero-background">
            <img src="img/safari-and-kilimanjaro.jpg" alt="Kilimanjaro and Serengeti Safari Combo">
        </div>
        <div class="safari-hero-overlay"></div>
        <div class="safari-hero-content">
            <h1>Safari Package Combos</h1>
            <p>Experience the ultimate Tanzania adventure with our premium Kilimanjaro climbs and Serengeti safari combinations</p>
            <div class="safari-hero-btns">
                <a href="#safari-combos" class="btn btn-primary">Explore Packages</a>
                <a href="#booking" class="btn btn-primary" onclick="openBookingPopup()">send enquiry</a>
            </div>
        </div>
    </section>

    <!-- Why Book Safari Combo Section -->
    <section class="why-safari-combo-section">
        <div class="container">
            <div class="why-safari-combo-content">
                <div class="why-safari-combo-header">
                    <h2>Why Book Safari Combos</h2>
                    <div class="why-safari-badge">Maximum Adventure, Minimum Hassle</div>
                </div>
                
                <div class="why-safari-combo-description">
                    <p>Our safari package combos offer the perfect blend of mountain adventure and wildlife exploration, providing exceptional value and seamless logistics. By combining Kilimanjaro climbs with Serengeti safaris and Zanzibar beach extensions, we create unforgettable Tanzania experiences that maximize your time and minimize travel hassles.</p>
                </div>
                
                <div class="why-safari-benefits">
                    <div class="why-safari-benefit">
                        <div class="why-safari-benefit-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h4>Better Value</h4>
                        <p>Save up to 15% compared to booking Kilimanjaro and safari separately with our all-inclusive package pricing.</p>
                    </div>
                    
                    <div class="why-safari-benefit">
                        <div class="why-safari-benefit-icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <h4>Seamless Logistics</h4>
                        <p>We handle all transfers, accommodations, and permits between your climb and safari for a stress-free experience.</p>
                    </div>
                    
                    <div class="why-safari-benefit">
                        <div class="why-safari-benefit-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4>Optimal Timing</h4>
                        <p>Our combos are carefully timed to maximize wildlife viewing and climbing conditions throughout your trip.</p>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Safari Combo Overview Section -->
    <section class="safari-combo-overview-section">
        <div class="container">
            <div class="safari-combo-overview-content">
                <div class="safari-combo-overview-header">
                    <h2>Safari Combo Overview</h2>
                    <div class="safari-combo-badge">Premium Adventure Packages</div>
                </div>
                
<div class="safari-combo-overview-description">
    <p>Our safari package combos offer the ultimate Tanzanian adventure, seamlessly blending Kilimanjaro climbs with wildlife safaris for an unforgettable experience. Each carefully crafted journey balances physical challenge with wildlife immersion, taking you from Africa's rooftop to the vast Serengeti plains. We handle all logistics—permits, accommodations, and expert guides—so you can focus completely on the adventure. Whether you choose our popular Lemosho-Serengeti combo or shorter Marangu options, you'll enjoy perfect timing between mountain triumphs and safari wonders, all while benefiting from significant savings compared to booking separately.</p>
</div>                    
                </div>
                
                <div class="safari-combo-facts-simple">
                    <div class="safari-combo-fact-simple">
                        <span class="safari-combo-fact-label">Duration:</span>
                        <span class="safari-combo-fact-value">8-15 days</span>
                    </div>
                    <div class="safari-combo-fact-simple">
                        <span class="safari-combo-fact-label">Group Size:</span>
                        <span class="safari-combo-fact-value">2-12 people</span>
                    </div>
                    <div class="safari-combo-fact-simple">
                        <span class="safari-combo-fact-label">Difficulty:</span>
                        <span class="safari-combo-fact-value">Moderate to Challenging</span>
                    </div>
                    <div class="safari-combo-fact-simple">
                        <span class="safari-combo-fact-label">Best Time:</span>
                        <span class="safari-combo-fact-value">Year-round</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safari Combo Grid -->
    <section class="safari-combo-grid-section" id="safari-combos">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Our Packages</span>
                <h2>Safari Package Combos</h2>
                <p>Choose from our selection of premium Kilimanjaro and safari combination packages</p>
            </div>
            
            <div class="safari-combo-grid">
                <!-- 8-day Lemosho + 5-day Serengeti -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/8-day-lemosho-trekking.jpg" alt="Lemosho Route and Serengeti Safari">
                        <div class="safari-combo-overlay">
                            <div class="safari-combo-badge">Most Popular</div>
                        </div>
                    </div>
                    <div class="safari-combo-content">
                        <h3>8-day Lemosho + 5-day Serengeti</h3>
                        <div class="safari-combo-location">Kilimanjaro & Northern Circuit</div>
                        <div class="safari-combo-duration">13 Days / 12 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Lemosho Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-binoculars"></i>
                                <span>Serengeti Safari</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-hotel"></i>
                                <span>Lodge & Camping</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-utensils"></i>
                                <span>All Meals</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Adventure seekers wanting comprehensive Tanzania experience</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$4,850</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="8-day-lemosho-5-day-serengeti.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-day Lemosho + 5-day Serengeti -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/7-day-lemosho-route.jpg" alt="Lemosho Route and Short Serengeti Safari">
                    </div>
                    <div class="safari-combo-content">
                        <h3>7-day Lemosho + 5-day Serengeti</h3>
                        <div class="safari-combo-location">Kilimanjaro & Serengeti</div>
                        <div class="safari-combo-duration">12 Days / 11 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Lemosho Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-lion"></i>
                                <span>Big Five Safari</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-camera"></i>
                                <span>Great Migration</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-car"></i>
                                <span>4x4 Safari Vehicle</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Time-conscious adventurers seeking quality experiences</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$4,450</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-lemosho-5-day-serengeti.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
                
                <!-- 7-day Machame + 6-day Safari Zanzibar -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/tanzania-safari-comb.jpg" alt="Machame Route and Zanzibar Beach">
                    </div>
                    <div class="safari-combo-content">
                        <h3>7-day Machame + 6-day Safari Zanzibar</h3>
                        <div class="safari-combo-location">Kilimanjaro, Safari & Zanzibar</div>
                        <div class="safari-combo-duration">13 Days / 12 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Machame Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-paw"></i>
                                <span>Tarangire & Ngorongoro</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-umbrella-beach"></i>
                                <span>Zanzibar Beach</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-swimmer"></i>
                                <span>Stone Town Tour</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Those wanting mountain, wildlife and beach experiences</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$4,750</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="7-day-machame-6-safari-zanzibar.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
                
                <!-- 13-day Machame and Safari -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/lion-in-serengeti.jpg" alt="Extended Machame and Safari Combo">
                    </div>
                    <div class="safari-combo-content">
                        <h3>13-day Machame and Safari</h3>
                        <div class="safari-combo-location">Kilimanjaro & Northern Parks</div>
                        <div class="safari-combo-duration">13 Days / 12 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Machame Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-elephant"></i>
                                <span>Tarangire Elephants</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-globe"></i>
                                <span>Ngorongoro Crater</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Multiple Parks</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Wildlife enthusiasts and photography lovers</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$5,150</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="13-day-machame-and-safari.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
                
                <!-- 11-day Lemosho Short Safari -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/ngorongoro-crater-safari-tanzania.jpg" alt="Lemosho Route with Short Safari">
                    </div>
                    <div class="safari-combo-content">
                        <h3>11-day Lemosho Short Safari</h3>
                        <div class="safari-combo-location">Kilimanjaro & Safari Parks</div>
                        <div class="safari-combo-duration">11 Days / 10 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Lemosho Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-tree"></i>
                                <span>Tarangire Park</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Ngorongoro Crater</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-camera"></i>
                                <span>Wildlife Photography</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> First-time visitors wanting balanced experience</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$4,250</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="11-day-Lemosho-short-safari.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
                
                
                <!-- 5-day Marangu 3-day Safari -->
                <div class="safari-combo-card">
                    <div class="safari-combo-image">
                        <img src="img/safari-in-serengeti.jpg" alt="Short Marangu and Safari Combo">
                    </div>
                    <div class="safari-combo-content">
                        <h3>5-day Marangu 3-day Safari</h3>
                        <div class="safari-combo-location">Kilimanjaro & Quick Safari</div>
                        <div class="safari-combo-duration">8 Days / 7 Nights</div>
                        <div class="safari-combo-description">
                            
                        </div>
                        <div class="safari-combo-features">
                            <div class="safari-combo-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Marangu Route</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-clock"></i>
                                <span>Time Efficient</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-hotel"></i>
                                <span>Lodge Safari</span>
                            </div>
                            <div class="safari-combo-feature">
                                <i class="fas fa-camera"></i>
                                <span>Essential Parks</span>
                            </div>
                        </div>
                        <div class="safari-combo-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Time-limited travelers wanting key experiences</span>
                        </div>
                        <div class="safari-combo-footer">
                            <div class="safari-combo-price">
                                <span class="from">From</span>
                                <span class="amount">$3,250</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="5-day-marangu-3-day-safari.php" class="btn btn-primary">View Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    
    <?php include 'plugins/call-to-action.php';?>
    <?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Toggle Functionality
            const faqQuestions = document.querySelectorAll('.safari-combo-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.safari-combo-faq-toggle');
                    
                    // Close all other FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherToggle = otherQuestion.querySelector('.safari-combo-faq-toggle');
                            
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
        });
    </script>

</body>
</html>