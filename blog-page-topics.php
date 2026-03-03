<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimanjaro Blog | Climbing Resources & Stories</title>
    <meta name="description" content="Explore our comprehensive Kilimanjaro blog with training guides, altitude advice, wildlife information, and inspiring stories from Africa's highest peak.">
    <meta name="keywords" content="Kilimanjaro blog, climbing tips, altitude sickness, training guide, wildlife, travel insurance, seven summits">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* Blog Hero Section */
        .blog-hero {
            height: 60vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
            padding-top: 80px;
            overflow: hidden;
        }

        .blog-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .blog-hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .blog-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .blog-hero h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .blog-hero p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
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

        /* Blog Categories Section */
        .blog-categories-section {
            padding: 50px 0 30px;
            background: var(--light);
        }

        .blog-categories-content {
            background: var(--white);
            border-radius: 12px;
            padding: 40px;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .blog-categories-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(117, 104, 44, 0.1);
            color: var(--dark)
        }

        .blog-categories-header h2 {
            color: var(--dark);
            font-size: 32px;
            margin: 0 0 15px 0;
            font-weight: 700;
        }

        .blog-categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .blog-category-card {
            background: var(--light);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(117, 104, 44, 0.1);
        }

        .blog-category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }

        .blog-category-icon {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 15px;
            transition: all 0.3s ease;
        }

        .blog-category-card:hover .blog-category-icon {
            background: var(--secondary);
            color: var(--dark);
        }

        .blog-category-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .blog-category-card p {
            color: var(--text);
            font-size: 14px;
            line-height: 1.5;
        }

        /* Blog Articles Section */
        .blog-articles {
            background-color: var(--white);
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .blog-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .blog-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.08);
        }

        .blog-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.7));
            display: flex;
            align-items: flex-end;
            padding: 25px;
        }

        .blog-content-overlay {
            color: var(--white);
        }

        .blog-category {
            display: inline-block;
            background: var(--secondary);
            color: var(--dark);
            font-size: 12px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 4px;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .blog-title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0;
            color: var(--white);
        }

        .blog-excerpt {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 14px;
            color: var(--text);
        }

        .blog-date {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-read-time {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-excerpt p {
            margin-bottom: 20px;
            color: var(--text);
            line-height: 1.6;
            flex-grow: 1;
        }

        .blog-link {
            color: var(--primary);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .blog-link i {
            margin-left: 8px;
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .blog-link:hover {
            color: var(--secondary);
        }

        .blog-link:hover i {
            transform: translateX(5px);
        }

        .blog-cta {
            text-align: center;
            margin-top: 30px;
        }

        /* Newsletter Section */
        .newsletter-section {
            padding: 60px 0;
            background: linear-gradient(135deg, rgba(117, 104, 44, 0.05) 0%, rgba(246, 244, 242, 1) 100%);
        }

        .newsletter-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .newsletter-content h2 {
            font-size: 28px;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .newsletter-content p {
            color: var(--text);
            margin-bottom: 30px;
            font-size: 16px;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .newsletter-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(117, 104, 44, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .blog-hero h1 {
                font-size: 32px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .blog-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .blog-hero {
                min-height: 500px;
                padding-top: 70px;
            }
            
            .blog-hero h1 {
                font-size: 28px;
            }
            
            .blog-hero p {
                font-size: 16px;
            }
            
            .section-title h2 {
                font-size: 24px;
            }
            
            .section-title .subtitle {
                font-size: 13px;
            }
            
            .blog-categories-content {
                padding: 30px 25px;
            }

            .blog-categories-header h2 {
                font-size: 28px;
            }

            .blog-categories-grid {
                grid-template-columns: 1fr;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto 40px;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 22px;
            }
            
            .blog-hero h1 {
                font-size: 24px;
            }
            
            .blog-hero p {
                font-size: 15px;
            }
            
            .blog-categories-content {
                padding: 25px 20px;
            }

            .blog-categories-header h2 {
                font-size: 24px;
            }
            
            .blog-content h3 {
                font-size: 20px;
            }
            
            .blog-meta {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Header would be included via PHP -->
    <?php include 'plugins/header.php';?> 

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="blog-hero-background">
            <img src="img/blog-banner.jpg" alt="Kilimanjaro Blog">
        </div>
        <div class="blog-hero-overlay"></div>
        <div class="blog-hero-content">
            <h1>Kilimanjaro Resources & Stories</h1>
            <p>Your comprehensive guide to climbing Africa's highest peak. Discover training tips, altitude advice, wildlife insights, and inspiring stories from the mountain.</p>
        </div>
    </section>

    <!-- Blog Categories Section -->
    <section class="blog-categories-section">
        <div class="container">
            <div class="blog-categories-content">
                <div class="blog-categories-header">
                    <h2>Explore Our Blog Categories</h2>
                    <p>Find the information you need for your Kilimanjaro adventure</p>
                </div>
                
                <div class="blog-categories-grid">
                    <div class="blog-category-card">
                        <div class="blog-category-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h3>Training & Preparation</h3>
                        <p>Get your body and mind ready for the climb with our expert training guides.</p>
                    </div>
                    
                    <div class="blog-category-card">
                        <div class="blog-category-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h3>Altitude & Health</h3>
                        <p>Learn how to prevent and manage altitude sickness for a successful summit.</p>
                    </div>
                    
                    <div class="blog-category-card">
                        <div class="blog-category-icon">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <h3>Gear & Equipment</h3>
                        <p>Discover the essential gear you need for a safe and comfortable climb.</p>
                    </div>
                    
                    <div class="blog-category-card">
                        <div class="blog-category-icon">
                            <i class="fas fa-paw"></i>
                        </div>
                        <h3>Wildlife & Environment</h3>
                        <p>Explore the unique flora and fauna of Kilimanjaro's ecosystems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Articles Section -->
    <section class="section blog-articles">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Latest Articles</span>
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
                                <span class="blog-category">Training Guide</span>
                                <h3 class="blog-title">Complete Training Guide: Preparing Your Body for Kilimanjaro</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> March 15, 2023</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 8 min read</span>
                        </div>
                        <p>Discover the essential training regimen to prepare your body for the challenges of climbing Kilimanjaro. This comprehensive guide covers cardiovascular exercise, strength training, and mental preparation techniques.</p>
                        <a href="kilimanjaro-training-guide.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 2 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/Mountain Sickness.jpg" alt="Altitude Sickness Prevention">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Health & Safety</span>
                                <h3 class="blog-title">Altitude Sickness: Prevention and Management on Kilimanjaro</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> February 28, 2023</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 10 min read</span>
                        </div>
                        <p>Learn how to recognize, prevent, and manage altitude sickness during your Kilimanjaro climb. Our expert advice could be the difference between summit success and early descent.</p>
                        <a href="kilimanjaro-altitude-sickness.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 3 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/packing-list.jpg" alt="Kilimanjaro Packing List">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Gear Guide</span>
                                <h3 class="blog-title">Ultimate Kilimanjaro Packing List: Essential Gear for Summit Success</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> February 10, 2023</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 12 min read</span>
                        </div>
                        <p>Don't let improper gear ruin your Kilimanjaro experience. Our comprehensive packing list covers everything from base layers to summit day essentials, with recommendations for all budgets.</p>
                        <a href="kilimanjaro-packing-list.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 4 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/wild-on-kilimanjaro.jpg" alt="Wildlife on Kilimanjaro">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Wildlife</span>
                                <h3 class="blog-title">Wildlife You Can See on Kilimanjaro: From Colobus Monkeys to Rare Birds</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> January 25, 2023</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 7 min read</span>
                        </div>
                        <p>Kilimanjaro is home to diverse ecosystems supporting unique wildlife. Discover the animals you might encounter during your climb, from the rainforest zone to the alpine desert.</p>
                        <a href="wildlife-you-can-see-on-kilimanjaro.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 5 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/travel-assuarance.jpg" alt="Travel Insurance">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Planning</span>
                                <h3 class="blog-title">Why Travel Insurance is Essential for Your Kilimanjaro Climb</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> January 12, 2023</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 6 min read</span>
                        </div>
                        <p>Don't overlook this critical aspect of your Kilimanjaro preparation. Learn why specialized travel insurance is non-negotiable and what coverage you need for high-altitude trekking.</p>
                        <a href="travel-insurance-importance.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 6 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/kilimanjaro-summit-uhuru.jpg" alt="Seven Summits">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Mountaineering</span>
                                <h3 class="blog-title">Kilimanjaro: The Most Accessible of the Seven Summits</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> December 28, 2022</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 9 min read</span>
                        </div>
                        <p>How does Kilimanjaro compare to the other Seven Summits? Discover why Africa's highest peak is the perfect starting point for aspiring high-altitude mountaineers.</p>
                        <a href="the-most-accessible-Seven-Summit.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 7 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/kilimanjaro-food.jpg" alt="Kilimanjaro Food">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">On the Mountain</span>
                                <h3 class="blog-title">Kilimanjaro Food and Menu: Fueling Your Body for Summit Success</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> December 15, 2022</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 5 min read</span>
                        </div>
                        <p>Discover what to expect from the culinary experience on Kilimanjaro. Our professional cooks prepare nutritious, high-energy meals designed to fuel your climb.</p>
                        <a href="kilimanjaro-food-and-menu.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 8 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/environment.jpg" alt="Kilimanjaro Environment">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Conservation</span>
                                <h3 class="blog-title">Preserving Kilimanjaro: Environmental Conservation and Responsible Climbing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> November 30, 2022</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 8 min read</span>
                        </div>
                        <p>Learn how we're working to preserve Kilimanjaro's fragile ecosystems and how you can practice Leave No Trace principles during your climb.</p>
                        <a href="environmental-conservation-kilimanjaro.php" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Article 9 -->
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="img/success-story.jpg" alt="Summit Success Story">
                        <div class="blog-overlay">
                            <div class="blog-content-overlay">
                                <span class="blog-category">Success Stories</span>
                                <h3 class="blog-title">From Dream to Reality: Sarah's Kilimanjaro Summit Success Story</h3>
                            </div>
                        </div>
                    </div>
                    <div class="blog-excerpt">
                        <div class="blog-meta">
                            <span class="blog-date"><i class="far fa-calendar"></i> November 18, 2022</span>
                            <span class="blog-read-time"><i class="far fa-clock"></i> 11 min read</span>
                        </div>
                        <p>Follow Sarah's inspiring journey from office worker to Kilimanjaro summiteer. Her story proves that with proper preparation and determination, anyone can reach the Roof of Africa.</p>
                        <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            
            <div class="blog-cta">
                <a href="#" class="btn btn-primary">View All Articles</a>
            </div>
        </div>
    </section>

    
    
    <?php include 'plugins/call-to-action.php';?>
    <?php include 'plugins/booking-form-kili.php';?>

<?php include 'plugins/footer.php';?>


</body>
</html>