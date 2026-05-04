<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Trips Around Moshi | Kilimanjaro Region Experiences</title>
    <meta name="description" content="Discover amazing day trips around Moshi City at the foothills of Mount Kilimanjaro. Waterfalls, coffee tours, cultural experiences and more.">
    <meta name="keywords" content="Moshi day trips, Kilimanjaro day tours, Materuni Waterfall, coffee tour, cultural experiences, Kikuletwa Hot Springs">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="style.css">

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

        /* Day Trips Overview */
        .daytrips-overview-section {
            padding: 50px 0 30px;
            background: var(--light);
        }

        .daytrips-overview-content {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .daytrips-overview-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .daytrips-overview-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .daytrips-badge {
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

        .daytrips-overview-description {
            color: var(--text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .daytrips-facts-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .daytrips-fact-simple {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .daytrips-fact-label {
            color: var(--dark);
            font-weight: 500;
            font-size: 14px;
        }

        .daytrips-fact-value {
            color: var(--primary);
            font-weight: 600;
            font-size: 14px;
        }

        /* Day Trips Grid */
        .daytrips-grid-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .daytrips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .daytrip-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .daytrip-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .daytrip-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .daytrip-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .daytrip-card:hover .daytrip-image img {
            transform: scale(1.08);
        }

        .daytrip-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .daytrip-badge {
            background: var(--primary);
            color: var(--white);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .daytrip-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .daytrip-content h3 {
            font-size: 22px;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .daytrip-location {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .daytrip-duration {
            color: var(--text);
            font-weight: 500;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .daytrip-description {
            color: var(--text);
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .daytrip-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .daytrip-feature {
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

        .daytrip-feature i {
            font-size: 12px;
        }

        .daytrip-perfect-for {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            font-size: 14px;
        }

        .daytrip-perfect-for i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 16px;
        }

        .daytrip-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .daytrip-price {
            display: flex;
            flex-direction: column;
        }

        .daytrip-price .from {
            font-size: 12px;
            color: var(--text);
            margin-bottom: 2px;
        }

        .daytrip-price .amount {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .daytrip-price .per-person {
            font-size: 12px;
            color: var(--text);
        }

        /* Day Trip Details Section */
        .daytrip-details-section {
            padding: 60px 0;
            background-color: var(--light);
        }

        .daytrip-details-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .daytrip-details-content {
            margin-top: 30px;
        }

        .daytrip-details-heading {
            font-size: 30px;
            color: var(--dark);
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }

        .daytrip-details-heading:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background: var(--secondary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .daytrip-detail-item {
            margin-bottom: 50px;
            padding-bottom: 30px;
            background-color: var(--white);
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid rgba(117, 104, 44, 0.05);
        }

        .daytrip-detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-header-section {
            display: flex;
            align-items: center;
            margin-bottom: 14px;
        }

        .detail-indicator {
            min-width: 70px;
            height: 35px;
            background: var(--primary);
            color: var(--white);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 12px;
            flex-shrink: 0;
            padding: 0 12px;
            font-size: 14px;
        }

        .detail-title-text {
            font-size: 18px;
            color: var(--dark);
            margin: 0;
        }

        .detail-content-section {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .detail-description {
            flex: 1;
            padding-right: 30px;
            position: relative;
        }

        .detail-description:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 1px;
            height: 100%;
            background: var(--accent);
        }

        .detail-description p {
            margin-bottom: 15px;
            color: var(--text);
            line-height: 1.6;
            font-size: 16px;
        }

        .detail-visual {
            flex: 0 0 40%;
            max-width: 40%;
        }

        .detail-visual img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(117, 104, 44, 0.1);
        }

        .detail-stats {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed var(--accent);
            justify-content: center;
        }

        .detail-stats p {
            margin-bottom: 0;
            font-size: 14px;
            color: var(--primary);
            font-weight: 500;
        }

        /* Booking Section */
        .daytrip-booking-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .booking-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--light);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .booking-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .booking-heading h3 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .booking-heading p {
            color: var(--text);
        }

        .booking-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(117, 104, 44, 0.1);
        }

        .form-submit {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 20px;
        }

        /* FAQ Section */
        .daytrip-faq-section {
            padding: 60px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.03) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .daytrip-faq-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .daytrip-faq-item {
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
            transition: all 0.3s ease;
        }

        .daytrip-faq-item:last-child {
            border-bottom: none;
        }

        .daytrip-faq-item:hover {
            background-color: rgba(117, 104, 44, 0.02);
        }

        .daytrip-faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .daytrip-faq-question:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .daytrip-faq-question h4 {
            font-size: 18px;
            color: var(--dark);
            margin: 0;
            flex: 1;
            padding-right: 20px;
            font-weight: 600;
        }

        .daytrip-faq-toggle {
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

        .daytrip-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: rgba(117, 104, 44, 0.02);
        }

        .daytrip-faq-answer.active {
            max-height: 500px;
            padding: 0 25px 25px;
        }

        .daytrip-faq-answer p {
            color: var(--text);
            line-height: 1.7;
            margin: 0;
            font-size: 16px;
        }

        .daytrip-faq-toggle.rotate {
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
            
            .daytrips-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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
            
            .daytrips-overview-content {
                padding: 30px 25px;
            }

            .daytrips-overview-header h2 {
                font-size: 28px;
            }

            .daytrips-facts-simple {
                gap: 15px;
            }

            .daytrips-fact-simple {
                padding: 8px 15px;
            }
            
            .daytrips-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .detail-header-section {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .detail-indicator {
                margin-bottom: 8px;
                margin-right: 0;
                min-width: 65px;
                font-size: 13px;
                padding: 0 10px;
            }
            
            .detail-content-section {
                flex-direction: column;
                gap: 15px;
            }
            
            .detail-description {
                padding-right: 0;
            }
            
            .detail-description:after {
                display: none;
            }
            
            .detail-description p {
                font-size: 14px;
                margin-bottom: 12px;
                line-height: 1.6;
            }
            
            .detail-visual {
                max-width: 100%;
                flex: 0 0 100%;
            }
            
            .detail-visual img {
                height: 200px;
            }
            
            .detail-stats {
                flex-direction: column;
                gap: 8px;
                align-items: flex-start;
                margin-top: 12px;
                padding-top: 12px;
            }
            
            .detail-stats p {
                font-size: 13px;
            }
            
            .booking-form {
                grid-template-columns: 1fr;
            }
            
            .booking-container {
                padding: 30px 25px;
            }
            
            .daytrip-faq-question {
                padding: 18px 20px;
            }
            
            .daytrip-faq-question h4 {
                font-size: 16px;
            }
            
            .daytrip-faq-answer.active {
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
            
            .daytrip-hero h1 {
                font-size: 24px;
            }
            
            .daytrip-hero p {
                font-size: 15px;
            }
            
            .daytrips-overview-content {
                padding: 25px 20px;
            }

            .daytrips-overview-header h2 {
                font-size: 24px;
            }

            .daytrips-badge {
                font-size: 12px;
                padding: 6px 12px;
            }

            .daytrips-facts-simple {
                flex-direction: column;
                align-items: center;
            }

            .daytrips-fact-simple {
                width: 100%;
                max-width: 250px;
                justify-content: space-between;
            }
            
            .daytrip-content h3 {
                font-size: 20px;
            }
            
            .daytrip-price .amount {
                font-size: 22px;
            }
            
            .detail-visual img {
                height: 180px;
            }
            
            .booking-container {
                padding: 25px 20px;
            }
            
            .daytrip-faq-question {
                padding: 15px 18px;
            }
            
            .daytrip-faq-question h4 {
                font-size: 15px;
            }
            
            .daytrip-faq-toggle {
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
    <section class="daytrip-hero">
        <div class="daytrip-hero-background">
            <img src="img/moshi-to-chemka.jpg" alt="Moshi City and Mount Kilimanjaro">
        </div>
        <div class="daytrip-hero-overlay"></div>
        <div class="daytrip-hero-content">
            <h1>Day Trips Around Moshi City</h1>
            <p>Discover the beauty and culture of Kilimanjaro region with our curated day trips from Moshi</p>
            <div class="daytrip-hero-btns">
                <a href="#daytrips" class="btn btn-primary">Explore Day Trips</a>
                <a href="#booking" class="btn btn-primary" onclick="openBookingPopup()">send enquiry</a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="daytrips-overview-section">
        <div class="container">
            <div class="daytrips-overview-content">
                <div class="daytrips-overview-header">
                    <h2>Moshi Day Trips Overview</h2>
                    <div class="daytrips-badge">Cultural & Natural Experiences</div>
                </div>
                
                <div class="daytrips-overview-description">
                    <p>Located at the foothills of Mount Kilimanjaro, Moshi serves as the perfect base for exploring the natural wonders and cultural richness of northern Tanzania. Our day trips offer immersive experiences that showcase the region's stunning waterfalls, traditional villages, coffee plantations, and hot springs. Each excursion is carefully designed to provide authentic interactions with local communities while enjoying the breathtaking landscapes that make this region so special.</p>
                </div>
                
                <div class="daytrips-facts-simple">
                    <div class="daytrips-fact-simple">
                        <span class="daytrips-fact-label">Duration:</span>
                        <span class="daytrips-fact-value">6-10 hours</span>
                    </div>
                    <div class="daytrips-fact-simple">
                        <span class="daytrips-fact-label">Group Size:</span>
                        <span class="daytrips-fact-value">2-12 people</span>
                    </div>
                    <div class="daytrips-fact-simple">
                        <span class="daytrips-fact-label">Difficulty:</span>
                        <span class="daytrips-fact-value">Easy to Moderate</span>
                    </div>
                    <div class="daytrips-fact-simple">
                        <span class="daytrips-fact-label">Best Time:</span>
                        <span class="daytrips-fact-value">Year-round</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Day Trips Grid -->
    <section class="daytrips-grid-section" id="daytrips">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Our Day Trips</span>
                <h2>Explore Moshi's Surroundings</h2>
                <p>Choose from our selection of unforgettable day trips around Moshi City</p>
            </div>
            
            <div class="daytrips-grid">
                <!-- Materuni Waterfall & Coffee Tour -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/materuni-visit-for-day-trip.jpg" alt="Materuni Waterfall">
                        <div class="daytrip-overlay">
                            <div class="daytrip-badge">Most Popular</div>
                        </div>
                    </div>
                    <div class="daytrip-content">
                        <h3>Materuni Waterfalls & Coffee Tour</h3>
                        <div class="daytrip-location">Moshi</div>
                        <div class="daytrip-duration">Full Day (8 hours)</div>
                        <div class="daytrip-description">
                            <p>Experience the majestic Materuni Waterfall and learn about traditional Chagga coffee production. This immersive tour combines natural beauty with cultural insights.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Scenic Hike</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-swimmer"></i>
                                <span>Waterfall Swim</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-coffee"></i>
                                <span>Coffee Making</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-utensils"></i>
                                <span>Local Lunch</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Culture lovers, photographers, nature seekers</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$85</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="materuni-day-trip.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
                
                <!-- Kikuletwa Hot Springs -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/chemka-day-tour-moshi.jpg" alt="Kikuletwa Hot Springs">
                    </div>
                    <div class="daytrip-content">
                        <h3>Kikuletwa (Chemka) Hot Springs</h3>
                        <div class="daytrip-location">Boma Ng'ombe</div>
                        <div class="daytrip-duration">Full Day (7 hours)</div>
                        <div class="daytrip-description">
                            <p>Relax in the crystal-clear turquoise natural pool of Kikuletwa Hot Springs, a hidden oasis surrounded by fig trees in the middle of the semi-arid landscape.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-swimming-pool"></i>
                                <span>Natural Pool</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-water"></i>
                                <span>Turquoise Waters</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-tree"></i>
                                <span>Fig Tree Forest</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-utensils"></i>
                                <span>BBQ Lunch</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Couples, families, laid-back travellers</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$75</span>
                                <span class="per-person">per person</span>
                            </div>
                             <a href="chemka-hotspring.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
                
                <!-- Marangu Cultural Tour -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/marangu-cultural-tour.jpg" alt="Marangu Cultural Tour">
                    </div>
                    <div class="daytrip-content">
                        <h3>Marangu Cultural Tour</h3>
                        <div class="daytrip-location">Marangu Village</div>
                        <div class="daytrip-duration">Full Day (6 hours)</div>
                        <div class="daytrip-description">
                            <p>Immerse yourself in Chagga culture with a visit to Marangu village, exploring traditional homes, learning about local customs, and visiting waterfalls.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-home"></i>
                                <span>Chagga Homes</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-history"></i>
                                <span>Cultural Caves</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-beer"></i>
                                <span>Banana Beer</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-utensils"></i>
                                <span>Traditional Food</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Cultural immersion lovers</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$65</span>
                                <span class="per-person">per person</span>
                            </div>
                           <a href="marangu-cultural-tour.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
                
                <!-- Kilimanjaro Day Hike -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/kilimanjaro-day-hike.jpg" alt="Kilimanjaro Day Hike">
                    </div>
                    <div class="daytrip-content">
                        <h3>Kilimanjaro Day Hike (Mandara Hut)</h3>
                        <div class="daytrip-location">Marangu Route</div>
                        <div class="daytrip-duration">Full Day (8 hours)</div>
                        <div class="daytrip-description">
                            <p>Get a taste of climbing Mount Kilimanjaro without the full commitment. Hike through the rainforest to Mandara Hut and enjoy spectacular views.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-mountain"></i>
                                <span>Kili Experience</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Rainforest Hike</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-binoculars"></i>
                                <span>Crater Views</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-paw"></i>
                                <span>Wildlife Spotting</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Clients who want a taste of climbing but not the full trek</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$95</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="kilimanjaro-day-hike.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
                
                <!-- Lake Chala Day Trip -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/lake-chala-day-tour.jpg" alt="Lake Chala">
                    </div>
                    <div class="daytrip-content">
                        <h3>Lake Chala Day Trip</h3>
                        <div class="daytrip-location">Border of Tanzania & Kenya</div>
                        <div class="daytrip-duration">Full Day (8 hours)</div>
                        <div class="daytrip-description">
                            <p>Discover the stunning Lake Chala, a crater lake on the border of Tanzania and Kenya, offering breathtaking views and opportunities for hiking and canoeing.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-water"></i>
                                <span>Crater Lake</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-hiking"></i>
                                <span>Scenic Hikes</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-ship"></i>
                                <span>Canoeing</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-binoculars"></i>
                                <span>Birdwatching</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Nature lovers, peaceful retreats, honeymooners</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$80</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="lake-chala-day-trip.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
                
                <!-- Rau Forest Reserve -->
                <div class="daytrip-card">
                    <div class="daytrip-image">
                        <img src="img/rau-forest-hiking_.jpg" alt="Rau Forest Reserve">
                    </div>
                    <div class="daytrip-content">
                        <h3>Rau Forest Reserve</h3>
                        <div class="daytrip-location">Moshi</div>
                        <div class="daytrip-duration">Half Day (4-5 hours)</div>
                        <div class="daytrip-description">
                            <p>Explore the beautiful Rau Forest Reserve with its famous "Big Tree" and diverse wildlife. Choose between cycling or walking through this unique ecosystem.</p>
                        </div>
                        <div class="daytrip-features">
                            <div class="daytrip-feature">
                                <i class="fas fa-tree"></i>
                                <span>Big Tree</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-monkey"></i>
                                <span>Colobus Monkeys</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-bicycle"></i>
                                <span>Cycling/Walking</span>
                            </div>
                            <div class="daytrip-feature">
                                <i class="fas fa-leaf"></i>
                                <span>Banana Plantations</span>
                            </div>
                        </div>
                        <div class="daytrip-perfect-for">
                            <i class="fas fa-user-friends"></i>
                            <span><strong>Perfect for:</strong> Eco travelers, cyclists</span>
                        </div>
                        <div class="daytrip-footer">
                            <div class="daytrip-price">
                                <span class="from">From</span>
                                <span class="amount">$60</span>
                                <span class="per-person">per person</span>
                            </div>
                            <a href="rau-forest-day-trip.php" class="btn btn-primary">Explore Day Trips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- FAQ Section -->
    <section class="daytrip-faq-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Common Questions</span>
                <h2>Day Trips FAQ</h2>
                <p>Find answers to frequently asked questions about our day trips around Moshi</p>
            </div>
            
            <div class="daytrip-faq-container">
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>What is included in the day trip price?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>All our day trips include transportation to and from your accommodation in Moshi, an experienced English-speaking guide, entrance fees to all attractions, and meals as specified in the itinerary (typically lunch). Some specialized activities like bike rentals are also included where applicable. Personal expenses, tips, and additional snacks or drinks are not included.</p>
                    </div>
                </div>
                
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>What should I bring on a day trip?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>We recommend bringing comfortable walking shoes, a hat, sunscreen, a reusable water bottle, a camera, and some cash for souvenirs or additional purchases. For waterfall and hot spring trips, don't forget your swimsuit and a towel. It's also a good idea to bring a light jacket as weather can change quickly in the mountains.</p>
                    </div>
                </div>
                
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>Are the day trips suitable for children and elderly travelers?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>Most of our day trips are family-friendly and suitable for travelers of all ages. However, some activities like the hike to Materuni Waterfall require a moderate level of fitness. We can customize itineraries for families with young children or travelers with mobility concerns. Please let us know about any special requirements when booking.</p>
                    </div>
                </div>
                
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>What happens if the weather is bad on the day of my trip?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>Day trips generally proceed rain or shine, as the weather in the Kilimanjaro region can be unpredictable. We provide ponchos if needed, and many activities can be enjoyed regardless of weather conditions. In case of severe weather that makes the trip unsafe, we will either reschedule your trip or provide a full refund.</p>
                    </div>
                </div>
                
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>Can I book a private day trip?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>Yes, private day trips are available for all our itineraries. Private trips offer more flexibility with timing and itinerary customization. There is an additional cost for private tours, which varies based on group size. Please indicate your preference for a private tour when making your booking inquiry.</p>
                    </div>
                </div>
                
                <div class="daytrip-faq-item">
                    <div class="daytrip-faq-question">
                        <h4>What is the cancellation policy?</h4>
                        <span class="daytrip-faq-toggle">+</span>
                    </div>
                    <div class="daytrip-faq-answer">
                        <p>You can cancel your booking up to 48 hours before the scheduled departure for a full refund. Cancellations made within 48 hours are subject to a 50% cancellation fee. No-shows on the day of the trip will be charged the full amount. In case we need to cancel due to unforeseen circumstances, you will receive a full refund.</p>
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
            const faqQuestions = document.querySelectorAll('.daytrip-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.daytrip-faq-toggle');
                    
                    // Close all other FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherToggle = otherQuestion.querySelector('.daytrip-faq-toggle');
                            
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
            const bookingForm = document.getElementById('daytrip-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your day trip booking request! We will contact you shortly to confirm your adventure.');
                closeDaytripBookingPopup();
                bookingForm.reset();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-trip-date').min = today;
        });

        // Day Trips Booking Popup Functions
        function openDaytripBookingPopup(daytripName = '') {
            // If a specific day trip is passed, set it as the default selection
            if (daytripName) {
                document.getElementById('popup-daytrip-type').value = daytripName;
            }
            
            document.getElementById('daytripBookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeDaytripBookingPopup() {
            document.getElementById('daytripBookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('daytripBookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDaytripBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDaytripBookingPopup();
            }
        });
    </script>


</body>
</html>