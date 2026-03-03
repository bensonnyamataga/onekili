<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Days Kilimanjaro Trekking via Marangu Route | Tanzania Adventure</title>
    <meta name="description" content="Experience the ultimate 5-day Kilimanjaro trek via the scenic Marangu Route with comfortable hut accommodations and expert guides.">
    <meta name="keywords"content="5 days Kilimanjaro trek, Marangu route, Kilimanjaro climbing, Tanzania trekking, mountain hiking, Africa adventure">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

         <?php include 'plugins/style-kilimanjaro-package.php';?>



    <style>
        /* Base Styles */
        :root {
            --kili-primary: #75682C;
            --kili-secondary: #e0b354;
            --kili-accent: #d4a762;
            --kili-dark: #1a1a1a;
            --kili-light: #F6F4F2;
            --kili-white: #F6F4F2;
            --kili-text: #444444;
            --kili-heading: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
            --kili-body: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
        }

        .kili-container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .kili-btn {
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

        .kili-btn-primary {
            background-color: var(--kili-primary);
            color: var(--kili-white);
            box-shadow: 0 4px 15px rgba(117, 104, 44, 0.3);
        }

        .kili-btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(117, 104, 44, 0.4);
        }

        /* REDUCED SECTION PADDING */
        .kili-section {
            padding: 40px 0;
        }

        .kili-section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .kili-section-title .kili-subtitle {
            display: block;
            color: var(--kili-primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .kili-section-title h2 {
            font-size: 28px;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .kili-section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--kili-secondary);
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .kili-section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--kili-text);
            padding: 0 15px;
        }

        /* Image Slider Section */
        .kili-image-slider-section {
            padding: 30px 0 20px;
            background-color: var(--kili-light);
        }

        .kili-slider-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .kili-slider-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .kili-slider-slide {
            min-width: 100%;
            height: 450px;
            position: relative;
        }

        .kili-slider-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .kili-slide-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 20px;
            color: var(--kili-white);
        }

        .kili-slide-overlay h3 {
            font-size: 24px;
            color: var(--kili-white);
            margin-bottom: 6px;
        }

        .kili-slide-overlay p {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
            margin: 0;
        }

        .kili-slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 20px;
            z-index: 2;
        }

        .kili-slider-btn {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--kili-primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .kili-slider-btn:hover {
            background: var(--kili-white);
            transform: scale(1.1);
        }

        .kili-slider-dots {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }

        .kili-slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .kili-slider-dot.active {
            background: var(--kili-white);
            transform: scale(1.2);
        }

        /* Enhanced Kilimanjaro Itinerary Section */
        .kili-itinerary-section {
            padding: 40px 0;
            background-color: var(--kili-light);
        }

        .kili-itinerary-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .kili-itinerary-content {
            background: var(--kili-white);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            width: 100%;
        }

        .kili-itinerary-heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .kili-itinerary-heading h2 {
            font-size: 28px;
            color: var(--kili-dark);
            margin-bottom: 6px;
        }

        .kili-itinerary-heading p {
            color: var(--kili-text);
            font-size: 16px;
        }

        .kili-days-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .kili-day {
            border-radius: 10px;
            overflow: hidden;
            background: var(--kili-white);
            transition: all 0.3s ease;
        }

        .kili-day:hover {
            transform: translateY(-3px);
        }

        .kili-day-header {
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: rgba(117, 104, 44, 0.05);
        }

        .kili-day-header:hover {
            background-color: rgba(117, 104, 44, 0.08);
        }

        .kili-day-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .kili-day-number {
            width: 70px;
            height: 70px;
            background: var(--kili-primary);
            color: var(--kili-white);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
            text-align: center;
            padding: 5px;
        }

        .kili-day-label {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
            opacity: 0.9;
        }

        .kili-day-digit {
            font-size: 32px;
            line-height: 1;
            font-weight: 800;
        }

        .kili-day-info {
            flex: 1;
        }

        .kili-day-info h3 {
            font-size: 20px;
            color: var(--kili-dark);
            margin: 0 0 4px 0;
        }

        .kili-day-info p {
            font-size: 14px;
            color: var(--kili-text);
            margin: 0;
            opacity: 0.8;
        }

        .kili-day-toggle {
            font-size: 24px;
            color: var(--kili-primary);
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .kili-day-content {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: var(--kili-white);
        }

        .kili-day-content.active {
            padding: 20px;
            max-height: 1000px;
        }

        .kili-day-content p {
            margin-bottom: 12px;
            color: var(--kili-text);
            line-height: 1.6;
            font-size: 16px;
        }

        .kili-day-content p:last-child {
            margin-bottom: 0;
        }

        .kili-day-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 15px 0;
        }

        .kili-highlight-item {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(117, 104, 44, 0.05);
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 14px;
        }

        .kili-highlight-item i {
            color: var(--kili-primary);
        }

        .kili-day-stats {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px dashed var(--kili-accent);
        }

        .kili-day-stats p {
            margin-bottom: 0;
            font-size: 14px;
            color: var(--kili-primary);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .kili-day-stats i {
            font-size: 16px;
        }

        /* Animation for toggle icon */
        .kili-day-toggle.rotate {
            transform: rotate(45deg);
        }

        /* Mountain Activities Gallery Styles */
        .kili-mountain-activities-gallery {
            padding: 40px 0;
            background: var(--kili-light);
            position: relative;
        }

        .kili-activities-gallery-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .kili-gallery-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            align-items: start;
        }

        .kili-large-image {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 600px;
        }

        .kili-large-image:hover {
            transform: translateY(-5px);
        }

        .kili-large-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .kili-right-images {
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            gap: 15px;
            height: 600px;
            align-items: stretch;
        }

        .kili-small-image {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            aspect-ratio: 1/1;
            width: 100%;
        }

        .kili-small-image:hover {
            transform: translateY(-3px);
        }

        .kili-small-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .kili-image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            padding: 20px;
            color: white;
        }

        .kili-image-overlay h3 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        /* BOOKING POPUP MODAL STYLES */
        .kili-booking-popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .kili-booking-popup-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--kili-white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            animation: kili-popupFadeIn 0.3s ease-out;
        }

        @keyframes kili-popupFadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .kili-booking-popup-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--kili-text);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .kili-booking-popup-close:hover {
            color: var(--kili-primary);
        }

        .kili-booking-popup-heading {
            text-align: center;
            margin-bottom: 25px;
            padding-right: 30px;
        }

        .kili-booking-popup-heading h3 {
            font-size: 24px;
            color: var(--kili-dark);
            margin-bottom: 8px;
        }

        .kili-booking-popup-heading p {
            color: var(--kili-text);
            font-size: 14px;
        }

        .kili-booking-popup-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .kili-popup-form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .kili-popup-form-group label {
            font-weight: 600;
            color: var(--kili-dark);
            font-size: 14px;
        }

        .kili-popup-form-group input,
        .kili-popup-form-group select,
        .kili-popup-form-group textarea {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: var(--kili-body);
            background: var(--kili-white);
        }

        .kili-popup-form-group input:focus,
        .kili-popup-form-group select:focus,
        .kili-popup-form-group textarea:focus {
            outline: none;
            border-color: var(--kili-primary);
            box-shadow: 0 0 0 3px rgba(117, 104, 44, 0.1);
        }

        .kili-popup-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .kili-popup-price-summary {
            background: rgba(117, 104, 44, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }

        .kili-popup-price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .kili-popup-price-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 18px;
            padding-top: 10px;
            border-top: 2px solid var(--kili-accent);
            margin-top: 10px;
        }

        .kili-popup-booking-terms {
            font-size: 12px;
            color: var(--kili-text);
            text-align: center;
            margin-top: 15px;
            line-height: 1.5;
        }

        .kili-popup-btn-primary {
            background: linear-gradient(135deg, var(--kili-primary), #d4a336);
            color: var(--kili-white);
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .kili-popup-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(117, 104, 44, 0.4);
        }

        /* Book Now Button in Itinerary Section */
        .kili-book-now-container {
            text-align: center;
            margin-top: 30px;
        }

        .kili-book-now-btn {
            background: linear-gradient(135deg, var(--kili-primary), #d4a336);
            color: var(--kili-white);
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .kili-book-now-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(117, 104, 44, 0.4);
        }

        /* Kilimanjaro Overview Section - Clean Design */
        .kili-overview-section {
            padding: 50px 0 30px;
            background: var(--kili-light);
        }

        .kili-overview-content {
            background: var(--kili-white);
            border-radius: 12px;
            padding: 40px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .kili-overview-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--kili-dark)
        }

        .kili-overview-header h2 {
            color: var(--kili-dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .kili-route-badge {
            display: inline-block;
            background: var(--kili-primary);
            color: var(--kili-white);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .kili-overview-description {
            color: var(--kili-text);
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: left;
        }

        .kili-facts-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .kili-fact-simple {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background: rgba(117, 104, 44, 0.05);
            border-radius: 6px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .kili-fact-label {
            color: var(--kili-dark);
            font-weight: 500;
            font-size: 14px;
        }

        .kili-fact-value {
            color: var(--kili-primary);
            font-weight: 600;
            font-size: 14px;
        }

        /* Kilimanjaro FAQ Section Styles */
        .kili-faq-section {
            padding: 40px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.03) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .kili-faq-container {
            max-width: 800px;
            margin: 0 auto 40px;
            background: var(--kili-white);
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .kili-faq-item {
            border-bottom: 1px solid rgba(117, 104, 44, 0.1);
            transition: all 0.3s ease;
        }

        .kili-faq-item:last-child {
            border-bottom: none;
        }

        .kili-faq-item:hover {
            background-color: rgba(117, 104, 44, 0.02);
        }

        .kili-faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .kili-faq-question:hover {
            background-color: rgba(117, 104, 44, 0.03);
        }

        .kili-faq-question h4 {
            font-size: 18px;
            color: var(--kili-dark);
            margin: 0;
            flex: 1;
            padding-right: 20px;
            font-weight: 600;
        }

        .kili-faq-toggle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--kili-primary);
            color: var(--kili-white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .kili-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background: rgba(117, 104, 44, 0.02);
        }

        .kili-faq-answer.active {
            max-height: 500px;
            padding: 0 25px 25px;
        }

        .kili-faq-answer p {
            color: var(--kili-text);
            line-height: 1.7;
            margin: 0;
            font-size: 16px;
        }

        /* Dynamic route name styling */
        .kili-route-name {
            color: var(--kili-primary);
            font-weight: 700;
        }

        .kili-route-duration {
            color: var(--kili-accent);
            font-weight: 600;
        }

        /* FAQ Contact CTA */
        .kili-faq-contact-cta {
            background: var(--kili-white);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            border-top: 4px solid var(--kili-primary);
        }

        .kili-cta-content h3 {
            font-size: 24px;
            color: var(--kili-dark);
            margin-bottom: 10px;
        }

        .kili-cta-content p {
            color: var(--kili-text);
            margin-bottom: 25px;
            font-size: 16px;
        }

        .kili-cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .kili-btn-secondary {
            background: transparent;
            color: var(--kili-primary);
            border: 2px solid var(--kili-primary);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 14px;
            text-align: center;
        }

        .kili-btn-secondary:hover {
            background: rgba(117, 104, 44, 0.1);
            transform: translateY(-2px);
        }

        /* Animation for FAQ toggle */
        .kili-faq-toggle.rotate {
            transform: rotate(45deg);
            background: #d4a336;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .kili-slider-slide {
                height: 400px;
            }

            .kili-gallery-layout {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .kili-large-image {
                height: 400px;
            }
            
            .kili-right-images {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: 1fr;
                height: 150px;
            }
        }

        @media (max-width: 768px) {
            .kili-itinerary-section {
                padding: 30px 0;
            }

            .kili-itinerary-content {
                padding: 20px;
            }

            .kili-day-header {
                padding: 15px 18px;
            }

            .kili-day-info h3 {
                font-size: 18px;
            }

            .kili-day-content.active {
                padding: 18px;
            }

            .kili-day-stats {
                flex-direction: column;
                gap: 6px;
            }

            .kili-booking-popup-modal {
                padding: 25px;
                width: 95%;
            }

            .kili-popup-form-row {
                grid-template-columns: 1fr;
            }

            .kili-mountain-activities-gallery {
                padding: 30px 0;
            }
            
            .kili-large-image {
                height: 350px;
            }
            
            .kili-right-images {
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 1fr;
                height: 200px;
                gap: 10px;
            }
            
            .kili-small-image {
                aspect-ratio: 1/1;
            }
            
            .kili-image-overlay {
                padding: 15px;
            }
            
            .kili-image-overlay h3 {
                font-size: 16px;
            }

            .kili-overview-content {
                padding: 30px 25px;
            }

            .kili-overview-header h2 {
                font-size: 28px;
            }

            .kili-facts-simple {
                gap: 15px;
            }

            .kili-fact-simple {
                padding: 8px 15px;
            }

            .kili-faq-question {
                padding: 18px 20px;
            }
            
            .kili-faq-question h4 {
                font-size: 16px;
            }
            
            .kili-faq-answer.active {
                padding: 0 20px 20px;
            }
            
            .kili-faq-contact-cta {
                padding: 30px 25px;
            }
            
            .kili-cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .kili-btn, .kili-btn-secondary {
                width: 100%;
                max-width: 250px;
            }
        }

        @media (max-width: 480px) {
            .kili-day-header {
                padding: 12px 15px;
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .kili-day-title {
                width: 100%;
            }

            .kili-day-content.active {
                padding: 15px;
            }

            .kili-day-number {
                width: 60px;
                height: 60px;
            }

            .kili-day-digit {
                font-size: 26px;
            }

            .kili-day-label {
                font-size: 12px;
            }

            .kili-day-toggle {
                align-self: flex-end;
            }

            .kili-slider-slide {
                height: 300px;
            }

            .kili-slide-overlay {
                padding: 15px;
            }

            .kili-slide-overlay h3 {
                font-size: 18px;
            }

            .kili-slide-overlay p {
                font-size: 14px;
            }

            .kili-slider-btn {
                width: 35px;
                height: 35px;
            }

            .kili-large-image {
                height: 250px;
            }
            
            .kili-right-images {
                height: 120px;
                gap: 8px;
            }
            
            .kili-image-overlay {
                padding: 12px;
            }
            
            .kili-image-overlay h3 {
                font-size: 14px;
            }

            .kili-booking-popup-modal {
                padding: 20px;
            }

            .kili-overview-content {
                padding: 25px 20px;
            }

            .kili-overview-header h2 {
                font-size: 24px;
            }

            .kili-route-badge {
                font-size: 12px;
                padding: 6px 12px;
            }

            .kili-facts-simple {
                flex-direction: column;
                align-items: center;
            }

            .kili-fact-simple {
                width: 100%;
                max-width: 250px;
                justify-content: space-between;
            }

            .kili-faq-question {
                padding: 15px 18px;
            }
            
            .kili-faq-question h4 {
                font-size: 15px;
            }
            
            .kili-faq-toggle {
                width: 25px;
                height: 25px;
                font-size: 16px;
            }
            
            .kili-faq-contact-cta {
                padding: 25px 20px;
            }
            
            .kili-cta-content h3 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    
    <?php include 'plugins/header.php';?> <br> <br> <br> <br> <br> <br> 

    <section class="packages-hero-kili">
        <div class="packages-hero-kili-background">
            <img src="img/marangu-trekking-on-kilimanjaro.jpg" alt="Mount Kilimanjaro Summit">
        </div>
        <div class="packages-hero-kili-overlay"></div>
        <div class="packages-hero-kili-content">
            <h1>5 Days Kilimanjaro trekking via Marangu route</h1>
            <p>Experience the classic "Coca-Cola Route" - Kilimanjaro's most popular and comfortable ascent.</p>
            <div class="packages-hero-kili-btns">
                <a href="kilimanjaro-route.php" class="btn btn-primary">View Trekking Packages</a>
                <a href="#booking" class="btn btn-primary"onclick="openBookingPopup()">Book Your Adventure</a>
            </div>
        </div>
    </section>



    <div class="kili-activities-gallery-container">
        
        <!-- Overview Section -->
        <section class="kili-overview-section">
            <div class="kili-container">
                <div class="kili-overview-content">
                    <div class="kili-overview-header">
                        <h2>5 Days Marangu Route Overview</h2>
                        <div class="kili-route-badge">Most Popular Route</div>
                    </div>
                    
                    <div class="kili-overview-grid">
                        <div class="kili-overview-main">
                            <p class="kili-overview-description">
                                Experience the classic "Coca-Cola Route" - Kilimanjaro's most popular and comfortable ascent. This 5-day adventure takes you through lush rainforests, alpine meadows, and lunar landscapes to Africa's highest peak. Enjoy comfortable mountain hut accommodations, expert guides, and the unique opportunity to summit Uhuru Peak at 5,895 meters.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="kili-gallery-layout">
            <!-- Left side - Large image -->
            <div class="kili-large-image">
                <img src="img/5-day-marangu-route-banner.jpg" alt="Kilimanjaro Main Experience">
            </div>
            
            <!-- Right side - Small images -->
            <div class="kili-right-images">
                <!-- Small Image 1 -->
                <div class="kili-small-image">
                    <img src="img/marangu-trekking-on-kilimanjaro.jpg" alt="Traveler Experience">
                </div>
                
                <!-- Small Image 2 -->
                <div class="kili-small-image">
                    <img src="img/marangu-route-trekking-5-day.jpg" alt="Room & Suite">
                </div>
                
                <!-- Small Image 3 -->
                <div class="kili-small-image">
                    <img src="img/marangu-route-trekking-kilimanjaro.jpg" alt="Pool & Beach">
                </div>
            </div>
        </div>
    </div>

    <br> <br>
        
    <section class="kili-itinerary-section">
        <div class="kili-itinerary-container">
            <div class="kili-itinerary-content">
                <div class="kili-itinerary-heading">
                    <h2>Day to Day Program</h2>
                    <p>Click on each day to explore the detailed itinerary and highlights</p>
                </div>

                <div class="kili-days-container">
                    <!-- Day 1 -->
                    <div class="kili-day">
                        <div class="kili-day-header">
                            <div class="kili-day-title">
                                <div class="kili-day-number">
                                    <div class="kili-day-label">Day</div>
                                    <div class="kili-day-digit">1</div>
                                </div>
                                <div class="kili-day-info">
                                    <h3>Marangu Gate to Mandara Hut</h3>
                                    <p>Begin your ascent through lush rainforest</p>
                                </div>
                            </div>
                            <span class="kili-day-toggle">+</span>
                        </div>
                        <div class="kili-day-content">
                            <p>
                                Your Kilimanjaro adventure begins at Marangu Gate (1,860m) where you'll complete registration formalities. After meeting your guides and porters, we start our trek through the beautiful montane rainforest.
                            </p>
                            <p>
                                The trail winds through dense vegetation with opportunities to spot blue monkeys and various bird species. We'll enjoy a picnic lunch en route before reaching Mandara Hut (2,720m) in the afternoon. The hut offers basic but comfortable accommodation with stunning views of the surrounding landscape.
                            </p>
                            
                            <div class="kili-day-highlights">
                                <div class="kili-highlight-item">
                                    <i class="fas fa-hiking"></i>
                                    <span>Rainforest Trek</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-tree"></i>
                                    <span>Montane Forest</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-home"></i>
                                    <span>Mandara Hut</span>
                                </div>
                            </div>
                            
                            <div class="kili-day-stats">
                                <p><i class="fas fa-walking"></i> Trekking Time: 4-5 hours</p>
                                <p><i class="fas fa-mountain"></i> Elevation Gain: 860m</p>
                                <p><i class="fas fa-bed"></i> Accommodation: Mountain Hut</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Day 2 -->
                    <div class="kili-day">
                        <div class="kili-day-header">
                            <div class="kili-day-title">
                                <div class="kili-day-number">
                                    <div class="kili-day-label">Day</div>
                                    <div class="kili-day-digit">2</div>
                                </div>
                                <div class="kili-day-info">
                                    <h3>Mandara Hut to Horombo Hut</h3>
                                    <p>Ascend through moorland to higher altitude</p>
                                </div>
                            </div>
                            <span class="kili-day-toggle">+</span>
                        </div>
                        <div class="kili-day-content">
                            <p>
                                After breakfast, we continue our ascent, leaving the rainforest behind and entering the heather and moorland zone. The vegetation becomes sparser as we gain altitude, offering spectacular views of Kibo Peak.
                            </p>
                            <p>
                                We'll trek through beautiful alpine landscapes with giant lobelias and groundsels dotting the terrain. The air becomes noticeably thinner as we approach Horombo Hut (3,720m), where we'll spend the night acclimatizing to the altitude.
                            </p>
                            
                            <div class="kili-day-highlights">
                                <div class="kili-highlight-item">
                                    <i class="fas fa-mountain"></i>
                                    <span>Moorland Zone</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-eye"></i>
                                    <span>Kibo Peak Views</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-wind"></i>
                                    <span>Altitude Acclimatization</span>
                                </div>
                            </div>
                            
                            <div class="kili-day-stats">
                                <p><i class="fas fa-walking"></i> Trekking Time: 6-7 hours</p>
                                <p><i class="fas fa-mountain"></i> Elevation Gain: 1,000m</p>
                                <p><i class="fas fa-bed"></i> Accommodation: Horombo Hut</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Day 3 -->
                    <div class="kili-day">
                        <div class="kili-day-header">
                            <div class="kili-day-title">
                                <div class="kili-day-number">
                                    <div class="kili-day-label">Day</div>
                                    <div class="kili-day-digit">3</div>
                                </div>
                                <div class="kili-day-info">
                                    <h3>Horombo Hut to Kibo Hut</h3>
                                    <p>Approach the base camp for summit attempt</p>
                                </div>
                            </div>
                            <span class="kili-day-toggle">+</span>
                        </div>
                        <div class="kili-day-content">
                            <p>
                                Today we trek across the "Saddle" - the alpine desert between Mawenzi and Kibo peaks. The landscape becomes increasingly barren as we approach the base of the summit cone.
                            </p>
                            <p>
                                We'll have an early lunch at Kibo Hut (4,703m) and spend the afternoon resting and preparing for the midnight summit attempt. This is a crucial day for acclimatization - we'll hydrate well, check our equipment, and get as much rest as possible before the challenging night ahead.
                            </p>
                            
                            <div class="kili-day-highlights">
                                <div class="kili-highlight-item">
                                    <i class="fas fa-sun"></i>
                                    <span>Alpine Desert</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-campground"></i>
                                    <span>Base Camp Preparation</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-tint"></i>
                                    <span>Hydration Focus</span>
                                </div>
                            </div>
                            
                            <div class="kili-day-stats">
                                <p><i class="fas fa-walking"></i> Trekking Time: 5-6 hours</p>
                                <p><i class="fas fa-mountain"></i> Elevation Gain: 983m</p>
                                <p><i class="fas fa-bed"></i> Accommodation: Kibo Hut</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Day 4 -->
                    <div class="kili-day">
                        <div class="kili-day-header">
                            <div class="kili-day-title">
                                <div class="kili-day-number">
                                    <div class="kili-day-label">Day</div>
                                    <div class="kili-day-digit">4</div>
                                </div>
                                <div class="kili-day-info">
                                    <h3>Summit Day: Uhuru Peak & Descent</h3>
                                    <p>Reach the roof of Africa and return to Horombo</p>
                                </div>
                            </div>
                            <span class="kili-day-toggle">+</span>
                        </div>
                        <div class="kili-day-content">
                            <p>
                                We begin our summit attempt around midnight, trekking by headlamp through the darkness. The climb to Gilman's Point (5,681m) is steep and challenging, but witnessing the sunrise from this vantage point is an unforgettable experience.
                            </p>
                            <p>
                                From Gilman's Point, we continue along the crater rim to Uhuru Peak (5,895m) - the highest point in Africa. After celebrating our achievement and taking photos, we descend back to Kibo Hut for a short rest before continuing down to Horombo Hut for the night.
                            </p>
                            
                            <div class="kili-day-highlights">
                                <div class="kili-highlight-item">
                                    <i class="fas fa-star"></i>
                                    <span>Summit Success</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-sunrise"></i>
                                    <span>Sunrise from Gilman's</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-trophy"></i>
                                    <span>Uhuru Peak Achievement</span>
                                </div>
                            </div>
                            
                            <div class="kili-day-stats">
                                <p><i class="fas fa-walking"></i> Summit Trek: 6-8 hours</p>
                                <p><i class="fas fa-arrow-down"></i> Descent: 4-5 hours</p>
                                <p><i class="fas fa-mountain"></i> Maximum Altitude: 5,895m</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Day 5 -->
                    <div class="kili-day">
                        <div class="kili-day-header">
                            <div class="kili-day-title">
                                <div class="kili-day-number">
                                    <div class="kili-day-label">Day</div>
                                    <div class="kili-day-digit">5</div>
                                </div>
                                <div class="kili-day-info">
                                    <h3>Horombo Hut to Marangu Gate</h3>
                                    <p>Final descent and celebration</p>
                                </div>
                            </div>
                            <span class="kili-day-toggle">+</span>
                        </div>
                        <div class="kili-day-content">
                            <p>
                                After a well-deserved breakfast, we begin our final descent through the moorland and back into the lush rainforest. The trek down is much easier and faster than the ascent.
                            </p>
                            <p>
                                At Marangu Gate, you'll receive your summit certificates - gold for those who reached Uhuru Peak and green for Gilman's Point. We'll then transfer you back to your hotel in Moshi or Arusha for a hot shower, celebration dinner, and restful sleep.
                            </p>
                            
                            <div class="kili-day-highlights">
                                <div class="kili-highlight-item">
                                    <i class="fas fa-award"></i>
                                    <span>Summit Certificates</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-tree"></i>
                                    <span>Rainforest Descent</span>
                                </div>
                                <div class="kili-highlight-item">
                                    <i class="fas fa-glass-cheers"></i>
                                    <span>Celebration</span>
                                </div>
                            </div>
                            
                            <div class="kili-day-stats">
                                <p><i class="fas fa-walking"></i> Descent Time: 5-6 hours</p>
                                <p><i class="fas fa-arrow-down"></i> Elevation Loss: 1,860m</p>
                                <p><i class="fas fa-hotel"></i> Accommodation: Hotel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book Now Button -->
                <div class="kili-book-now-container">
                    <button class="kili-book-now-btn" onclick="openBookingPopup()">
                        <i class="fas fa-calendar-check"></i> Book Your Trek Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    
   <!-- Inclusions & Exclusions Section -->
<section class="inclusions-exclusions-section">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">What's Included</span>
            <h2>Package Details</h2>
            <p>Everything you need to know about what's included in your Kilimanjaro adventure</p>
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
                            <i class="fas fa-hiking"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Professional Guides</h4>
                            <p>Licensed, experienced Kilimanjaro guides with wilderness first responder certification</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>All Meals on Mountain</h4>
                            <p>Nutritious, high-energy meals prepared by our mountain chef (breakfast, lunch, dinner)</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Mountain Hut Accommodation</h4>
                            <p>Comfortable dormitory-style huts throughout the trek (Mandara, Horombo, Kibo)</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Park Fees & Transfers</h4>
                            <p>All park entry fees, rescue fees, and transfers to/from Marangu Gate</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Porter Support Team</h4>
                            <p>Dedicated porters to carry equipment, food, and personal bags (max 15kg)</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Drinking Water</h4>
                            <p>Purified drinking water provided throughout the trek</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-first-aid"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Safety Equipment</h4>
                            <p>Comprehensive first aid kit, emergency oxygen, and pulse oximeter</p>
                        </div>
                    </div>
                    
                    <div class="inclusion-item">
                        <div class="inclusion-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="inclusion-content">
                            <h4>Summit Certificate</h4>
                            <p>Official Kilimanjaro National Park summit certificate</p>
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
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>International Flights</h4>
                            <p>Airfare to and from Kilimanjaro International Airport (JRO)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Visa Fees</h4>
                            <p>Tanzania tourist visa (approximately $50-100 depending on nationality)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Pre/Post Trek Accommodation</h4>
                            <p>Hotel nights before and after the climb (can be arranged separately)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Meals in Town</h4>
                            <p>Meals not on the mountain (before and after the trek)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Tips for Crew</h4>
                            <p>Gratuities for guides, cooks, and porters (recommended $250-350)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Travel Insurance</h4>
                            <p>Comprehensive travel insurance including medical evacuation</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Personal Gear</h4>
                            <p>Clothing, sleeping bags, trekking poles (available for rental)</p>
                        </div>
                    </div>
                    
                    <div class="exclusion-item">
                        <div class="exclusion-icon">
                            <i class="fas fa-wine-bottle"></i>
                        </div>
                        <div class="exclusion-content">
                            <h4>Alcoholic Beverages</h4>
                            <p>Beer, wine, and other alcoholic drinks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
    </div>
</section>

    <section class="kili-faq-section" id="kilimanjaro-faq">
        <div class="kili-container">
            <div class="kili-section-title">
                <span class="kili-subtitle">Climbing Preparation</span>
                <h2>Frequently Asked Questions About <span class="kili-route-name">Kilimanjaro Climbing</span></h2>
                <p>Find answers to common questions about climbing Mount Kilimanjaro via all routes and durations.</p>
            </div>
            <br> <br>
            <div class="kili-faq-container">
                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What is the best time of year to climb Kilimanjaro?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>The best climbing seasons are January-March and June-October. January-March offers warmer temperatures with clearer skies, while June-October has drier conditions with excellent visibility. The long rainy season (April-May) and short rains (November) are less ideal due to slippery trails and cloud cover.</p>
                    </div>
                </div>
                
                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What is the success rate for <span class="kili-route-duration">this route</span>?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Success rates vary by route and duration. Generally, longer routes have higher success rates due to better acclimatization. <span class="kili-route-name">Marangu Route</span> (5 days: 50%, 6 days: 65%), <span class="kili-route-name">Machame Route</span> (6 days: 70%, 7 days: 85%), <span class="kili-route-name">Lemosho Route</span> (7 days: 85%, 8 days: 90%). Our expert guides achieve above-average success rates through proper pacing and safety protocols.</p>
                    </div>
                </div>
                
                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>How difficult is <span class="kili-route-name">this route</span> and what fitness level is required?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p><span class="kili-route-name">Kilimanjaro</span> is classified as a strenuous trek rather than a technical climb. While no mountaineering experience is required, excellent physical fitness is essential. You should be comfortable hiking 5-7 hours daily with a daypack. We recommend 2-3 months of regular cardiovascular training (hiking, running, cycling) and strength training focusing on legs and core.</p>
                    </div>
                </div>
                
                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What are the symptoms of altitude sickness and how is it managed?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Symptoms include headache, nausea, dizziness, fatigue, and shortness of breath. Our guides are trained in wilderness first aid and carry pulse oximeters to monitor oxygen saturation. We follow the "pole pole" (slowly slowly) approach, maintain proper hydration, and have emergency oxygen and descent protocols. Severe cases are rare with our careful acclimatization schedules.</p>
                    </div>
                </div>
                
                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What type of accommodation is provided during the <span class="kili-route-name">climb</span>?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Accommodation varies by route: <span class="kili-route-name">Marangu Route</span> offers shared mountain huts with basic beds; all other routes use high-quality mountain tents. Our camping equipment includes comfortable sleeping mats, and we provide spacious dining tents with camp chairs. All accommodations are selected for safety, comfort, and minimal environmental impact.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What should I pack for my Kilimanjaro climb?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Essential items include: layered clothing for varying temperatures, quality waterproof jacket and pants, insulated jacket for summit night, thermal base layers, broken-in hiking boots, headlamp, sleeping bag rated to -10°C, daypack, and personal medications. We provide a comprehensive packing list upon booking and offer rental equipment for most items.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>How many people are in a typical climbing group?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>We maintain small group sizes of 4-10 climbers with a guide-to-client ratio of 1:2 on summit night and 1:4 during regular trekking days. This ensures personalized attention and safety. Private climbs can be arranged for individuals, couples, or custom groups with tailored pacing and flexibility.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What meals are provided during the trek?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Our professional mountain chefs prepare nutritious, high-energy meals including breakfast, lunch, and dinner plus snacks. Meals are designed for altitude trekking with carbohydrates for energy and adequate hydration. We accommodate dietary restrictions (vegetarian, vegan, gluten-free, etc.) with advance notice. Sample meals include porridge, soups, pasta, fresh vegetables, and protein sources.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What is the recommended tipping amount for the crew?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Tipping is customary and greatly appreciated. We recommend $250-350 per climber distributed as follows: Head Guide ($20-25/day), Assistant Guide ($15-20/day), Cook ($12-15/day), and Porters ($8-10/day each). Tips are typically collected and distributed collectively on the last day. Our staff work exceptionally hard to ensure your safety and success.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What safety measures are in place during the climb?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Our comprehensive safety protocol includes: certified Wilderness First Responder guides, daily health checks with pulse oximeters, emergency oxygen systems, satellite communication, carefully planned acclimatization schedules, and emergency evacuation procedures. We maintain one of the industry's best safety records through rigorous guide training and conservative altitude management.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>Can I climb Kilimanjaro if I have no previous high-altitude experience?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Yes, many first-time high-altitude climbers successfully summit Kilimanjaro. The key factors are good physical fitness, mental preparedness, and choosing an appropriate route with adequate acclimatization days. We recommend longer routes (7+ days) for beginners and suggest discussing any health concerns with your doctor before booking.</p>
                    </div>
                </div>

                <div class="kili-faq-item">
                    <div class="kili-faq-question">
                        <h4>What makes <span class="kili-route-name">this route</span> different from other Kilimanjaro routes?</h4>
                        <span class="kili-faq-toggle">+</span>
                    </div>
                    <div class="kili-faq-answer">
                        <p>Each Kilimanjaro route offers unique experiences. <span class="kili-route-name">Marangu Route</span> is known as the "Coca-Cola Route" with hut accommodations; <span class="kili-route-name">Machame Route</span> is the "Whiskey Route" with better acclimatization; <span class="kili-route-name">Lemosho Route</span> offers spectacular scenery and high success rates; <span class="kili-route-name">Rongai Route</span> approaches from the north with more wilderness feel. Our experts can help you choose the best route for your fitness level and preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended Packages Section (KEPT ORIGINAL CLASSES) -->
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
                        <h3>Northern Circuit 8-Day</h3>
                        <p class="package-duration">8 Days / 7 Nights</p>
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
                            <a href="#" class="btn btn-primary">View Details</a>
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
            // Kilimanjaro Day Toggle Functionality
            const kiliDayHeaders = document.querySelectorAll('.kili-day-header');
            
            kiliDayHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    const toggle = header.querySelector('.kili-day-toggle');
                    
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
            
            // Form submission
            const bookingForm = document.getElementById('kilimanjaro-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your Kilimanjaro trek booking request! We will contact you shortly to confirm your adventure.');
                closeBookingPopup();
            });
            
            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('popup-start-date').min = today;
            
            // Kilimanjaro FAQ Functionality
            const kiliFaqQuestions = document.querySelectorAll('.kili-faq-question');
            
            kiliFaqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.kili-faq-toggle');
                    
                    // Close all other FAQs
                    kiliFaqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherToggle = otherQuestion.querySelector('.kili-faq-toggle');
                            
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

        // Booking Popup Functions
        function openBookingPopup() {
            document.getElementById('bookingPopupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeBookingPopup() {
            document.getElementById('bookingPopupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close popup when clicking outside
        document.getElementById('bookingPopupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeBookingPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeBookingPopup();
            }
        });

        // Function to customize FAQ for specific routes
        function customizeKilimanjaroFAQ(routeName, routeDuration, successRate, difficulty, highlights) {
            const routeNameElements = document.querySelectorAll('.kili-route-name');
            const routeDurationElements = document.querySelectorAll('.kili-route-duration');
            
            // Update all route name placeholders
            routeNameElements.forEach(element => {
                element.textContent = routeName;
            });
            
            // Update all duration placeholders
            routeDurationElements.forEach(element => {
                element.textContent = routeDuration;
            });
            
            // You can extend this function to update other dynamic content
            // based on the specific route parameters
        }

        // Example usage for different routes:
        customizeKilimanjaroFAQ('Marangu Route', '5 days', '50-65%', 'Moderate', 'Hut accommodations');
    </script>
</body>
</html>