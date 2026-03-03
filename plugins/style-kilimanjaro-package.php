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

        .container {
            width: 100%;
            max-width: 800px; /* Same as booking form width */
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



/* Hero Section */
        .packages-hero-kili {
            height: 70vh;
            min-height: 550px;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
            padding-top: 80px;
            overflow: hidden;
        }

        .packages-hero-kili-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .packages-hero-kili-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .packages-hero-kili-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .packages-hero-kili-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .packages-hero-kili h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .packages-hero-kili p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
        }

        .packages-hero-kili-btns {
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



        /* REDUCED SECTION PADDING */
        .section {
            padding: 40px 0; /* Reduced from 80px */
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px; /* Reduced from 50px */
        }

        .section-title .subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px; /* Reduced from 12px */
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 28px;
            margin-bottom: 10px; /* Reduced from 15px */
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -5px; /* Reduced from -8px */
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

        /* Image Slider Section */
        .image-slider-section {
            padding: 30px 0 20px; /* Reduced from 60px 0 40px */
            background-color: var(--light);
        }

        .slider-container {
            max-width: 800px; /* Same width as other sections */
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider-slide {
            min-width: 100%;
            height: 450px; /* Reduced from 500px */
            position: relative;
        }

        .slider-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 20px; /* Reduced from 30px */
            color: var(--white);
        }

        .slide-overlay h3 {
            font-size: 24px;
            color: var(--white);
            margin-bottom: 6px; /* Reduced from 10px */
        }

        .slide-overlay p {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
            margin: 0;
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 20px;
            z-index: 2;
        }

        .slider-btn {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-btn:hover {
            background: var(--white);
            transform: scale(1.1);
        }

        .slider-dots {
            position: absolute;
            bottom: 12px; /* Reduced from 20px */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dot.active {
            background: var(--white);
            transform: scale(1.2);
        }

        /* Enhanced Kilimanjaro Itinerary Section */
.kilimanjaro-itinerary-section {
    padding: 40px 0; /* Reduced from 80px */
    background-color: var(--light);
}

.kilimanjaro-itinerary-container {
    max-width: 800px; /* Same as booking form width */
    margin: 0 auto;
}

.kilimanjaro-itinerary-content {
    background: var(--white);
    border-radius: 12px;
    padding: 25px; /* Reduced from 30px */
    margin-bottom: 30px;
    width: 100%; /* Full width of container */
}

.kilimanjaro-itinerary-heading {
    text-align: center;
    margin-bottom: 20px; /* Reduced from 30px */
}

.kilimanjaro-itinerary-heading h2 {
    font-size: 28px;
    color: var(--dark);
    margin-bottom: 6px; /* Reduced from 10px */
}

.kilimanjaro-itinerary-heading p {
    color: var(--text);
    font-size: 16px;
}

.kilimanjaro-days-container {
    display: flex;
    flex-direction: column;
    gap: 15px; /* Reduced from 20px */
}

.kilimanjaro-day {
    border-radius: 10px;
    overflow: hidden;
    background: var(--white);
    transition: all 0.3s ease;
}

.kilimanjaro-day:hover {
    transform: translateY(-3px);
}

.kilimanjaro-day-header {
    padding: 18px 20px; /* Reduced from 20px 25px */
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.3s;
    background-color: rgba(117, 104, 44, 0.05);
}

.kilimanjaro-day-header:hover {
    background-color: rgba(117, 104, 44, 0.08);
}

.kilimanjaro-day-title {
    display: flex;
    align-items: center;
    gap: 12px; /* Reduced from 15px */
}

.kilimanjaro-day-number {
    width: 70px; /* Reduced from 80px */
    height: 70px; /* Reduced from 80px */
    background: var(--primary);
    color: var(--white);
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

.day-label {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 2px;
    opacity: 0.9;
}

.day-digit {
    font-size: 32px;
    line-height: 1;
    font-weight: 800;
}

.kilimanjaro-day-info {
    flex: 1;
}

.kilimanjaro-day-info h3 {
    font-size: 20px;
    color: var(--dark);
    margin: 0 0 4px 0; /* Reduced from 5px */
}

.kilimanjaro-day-info p {
    font-size: 14px;
    color: var(--text);
    margin: 0;
    opacity: 0.8;
}

/* CONTENT ALWAYS VISIBLE (dropdown removed) */
.kilimanjaro-day-content {
    padding: 20px; /* Was dynamic; now always visible */
    background: var(--white);
}

.kilimanjaro-day-content p {
    margin-bottom: 12px; /* Reduced from 15px */
    color: var(--text);
    line-height: 1.6;
    font-size: 16px;
}

.kilimanjaro-day-content p:last-child {
    margin-bottom: 0;
}

.kilimanjaro-day-highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 12px; /* Reduced from 15px */
    margin: 15px 0; /* Reduced from 20px */
}

.highlight-item {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(117, 104, 44, 0.05);
    padding: 6px 10px; /* Reduced from 8px 12px */
    border-radius: 6px;
    font-size: 14px;
}

.highlight-item i {
    color: var(--primary);
}

.kilimanjaro-day-stats {
    display: flex;
    gap: 15px; /* Reduced from 20px */
    flex-wrap: wrap;
    margin-top: 12px; /* Reduced from 15px */
    padding-top: 12px; /* Reduced from 15px */
    border-top: 1px dashed var(--accent);
}

.kilimanjaro-day-stats p {
    margin-bottom: 0;
    font-size: 14px;
    color: var(--primary);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 5px;
}

.kilimanjaro-day-stats i {
    font-size: 16px;
}
        /* Mountain Activities Gallery Styles */
        .mountain-activities-gallery {
            padding: 40px 0;
            background: var(--light);
            position: relative;
        }

        .activities-gallery-container {
            position: relative;
            max-width: 1000px; /* Slightly wider for gallery */
            margin: 0 auto;
            padding: 0 15px;
        }

        .gallery-layout {
            display: grid;
            grid-template-columns: 2fr 1fr; /* Left: large image, Right: small images */
            gap: 20px;
            align-items: start;
        }

        .large-image {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 600px; /* Fixed height for large image */
        }

        .large-image:hover {
            transform: translateY(-5px);
        }

        .large-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .right-images {
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            gap: 15px;
            height: 600px; /* Same height as large image */
            align-items: stretch; /* Ensure all items stretch to fill */
        }

        .small-image {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            aspect-ratio: 1/1; /* Perfect square */
            width: 100%; /* Full width of grid cell */
        }

        .small-image:hover {
            transform: translateY(-3px);
        }

        .small-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            padding: 20px;
            color: white;
        }

        .image-overlay h3 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        /* BOOKING POPUP MODAL STYLES - SEPARATE CSS */
        .booking-popup-overlay {
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

        .booking-popup-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            animation: popupFadeIn 0.3s ease-out;
        }

        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .booking-popup-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .booking-popup-close:hover {
            color: var(--primary);
        }

        .booking-popup-heading {
            text-align: center;
            margin-bottom: 25px;
            padding-right: 30px;
        }

        .booking-popup-heading h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .booking-popup-heading p {
            color: var(--text);
            font-size: 14px;
        }

        .booking-popup-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .popup-form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .popup-form-group label {
            font-weight: 600;
            color: var(--dark);
            font-size: 14px;
        }

        .popup-form-group input,
        .popup-form-group select,
        .popup-form-group textarea {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: var(--body);
            background: var(--white);
        }

        .popup-form-group input:focus,
        .popup-form-group select:focus,
        .popup-form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(117, 104, 44, 0.1);
        }

        .popup-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .popup-price-summary {
            background: rgba(117, 104, 44, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }

        .popup-price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .popup-price-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 18px;
            padding-top: 10px;
            border-top: 2px solid var(--accent);
            margin-top: 10px;
        }

        .popup-booking-terms {
            font-size: 12px;
            color: var(--text);
            text-align: center;
            margin-top: 15px;
            line-height: 1.5;
        }

        .popup-btn-primary {
            background: linear-gradient(135deg, var(--primary), #d4a336);
            color: var(--white);
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .popup-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(117, 104, 44, 0.4);
        }

        /* Book Now Button in Itinerary Section */
        .book-now-container {
            text-align: center;
            margin-top: 30px;
        }

        .book-now-btn {
            background: linear-gradient(135deg, var(--primary), #d4a336);
            color: var(--white);
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .book-now-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(117, 104, 44, 0.4);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .slider-slide {
                height: 400px;
            }

            .gallery-layout {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .large-image {
                height: 400px;
            }
            
            .right-images {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: 1fr;
                height: 150px; /* Smaller height for tablet */
            }
        }

        @media (max-width: 768px) {
            .kilimanjaro-itinerary-section {
                padding: 30px 0; /* Reduced from 60px */
            }

            .kilimanjaro-itinerary-content {
                padding: 20px;
            }

            .kilimanjaro-day-header {
                padding: 15px 18px; /* Reduced from 18px 20px */
            }

            .kilimanjaro-day-info h3 {
                font-size: 18px;
            }

            .kilimanjaro-day-content.active {
                padding: 18px; /* Reduced from 20px */
            }

            .kilimanjaro-day-stats {
                flex-direction: column;
                gap: 6px; /* Reduced from 8px */
            }

            .booking-popup-modal {
                padding: 25px;
                width: 95%;
            }

            .popup-form-row {
                grid-template-columns: 1fr;
            }

            .mountain-activities-gallery {
                padding: 30px 0;
            }
            
            .large-image {
                height: 350px;
            }
            
            .right-images {
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 1fr;
                height: 200px; /* Same height for all three images on mobile */
                gap: 10px;
            }
            
            .small-image {
                aspect-ratio: 1/1; /* Ensure square aspect ratio */
            }
            
            .image-overlay {
                padding: 15px;
            }
            
            .image-overlay h3 {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .kilimanjaro-day-header {
                padding: 12px 15px; /* Reduced from 15px */
                flex-direction: column;
                align-items: flex-start;
                gap: 12px; /* Reduced from 15px */
            }

            .kilimanjaro-day-title {
                width: 100%;
            }

            .kilimanjaro-day-content.active {
                padding: 15px;
            }

            .kilimanjaro-day-number {
                width: 60px; /* Reduced from 65px */
                height: 60px; /* Reduced from 65px */
            }

            .day-digit {
                font-size: 26px;
            }

            .day-label {
                font-size: 12px;
            }

            .kilimanjaro-day-toggle {
                align-self: flex-end;
            }

            .slider-slide {
                height: 300px;
            }

            .slide-overlay {
                padding: 15px;
            }

            .slide-overlay h3 {
                font-size: 18px;
            }

            .slide-overlay p {
                font-size: 14px;
            }

            .slider-btn {
                width: 35px;
                height: 35px;
            }

            .large-image {
                height: 250px;
            }
            
            .right-images {
                height: 120px; /* Smaller height for mobile */
                gap: 8px;
            }
            
            .image-overlay {
                padding: 12px;
            }
            
            .image-overlay h3 {
                font-size: 14px;
            }

            .booking-popup-modal {
                padding: 20px;
            }
        }
    </style>