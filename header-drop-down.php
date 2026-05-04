<style>
/* MEGA MENU STYLES - ADD TO EXISTING CSS */

/* Mega Menu Container */
.travolo-mega-menu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: var(--white);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    border-top: 2px solid var(--primary);
    padding: 30px 0;
}

.travolo-mega-menu.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.travolo-mega-menu-container {
    display: flex;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.travolo-mega-menu-column {
    flex: 1;
    min-width: 0;
}

.travolo-mega-menu-column h4 {
    font-size: 18px;
    margin-bottom: 20px;
    color: var(--primary);
    position: relative;
    padding-bottom: 10px;
}

.travolo-mega-menu-column h4:after {
    content: '';
    position: absolute;
    width: 30px;
    height: 2px;
    background: var(--secondary);
    bottom: 0;
    left: 0;
}

.travolo-mega-menu-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.travolo-mega-menu-links li {
    margin-bottom: 12px;
}

.travolo-mega-menu-links a {
    color: var(--text);
    font-weight: 500;
    font-size: 15px;
    display: block;
    padding: 5px 0;
    transition: all 0.3s ease;
    position: relative;
    padding-left: 0;
}

.travolo-mega-menu-links a:hover {
    color: var(--primary);
    padding-left: 10px;
}

.travolo-mega-menu-links a:hover:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 5px;
    height: 5px;
    background: var(--primary);
    border-radius: 50%;
}

.travolo-mega-menu-image {
    flex: 0 0 300px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.travolo-mega-menu-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.travolo-mega-menu-image:hover img {
    transform: scale(1.05);
}

/* Desktop nav items with dropdown capability */
.travolo-nav ul li {
    position: relative;
}

.travolo-nav ul li.has-mega-menu:hover .travolo-mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Mobile Mega Menu Styles */
.travolo-mobile-mega-menu {
    display: none;
    background: rgba(117, 104, 44, 0.05);
    padding: 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, padding 0.4s ease;
}

.travolo-mobile-mega-menu.active {
    display: block;
    max-height: 1000px;
    padding: 20px 0;
}

.travolo-mobile-mega-menu-container {
    padding: 0 30px;
}

.travolo-mobile-mega-menu-column {
    margin-bottom: 25px;
}

.travolo-mobile-mega-menu-column h4 {
    font-size: 16px;
    margin-bottom: 15px;
    color: var(--primary);
    position: relative;
    padding-bottom: 8px;
}

.travolo-mobile-mega-menu-column h4:after {
    content: '';
    position: absolute;
    width: 25px;
    height: 2px;
    background: var(--secondary);
    bottom: 0;
    left: 0;
}

.travolo-mobile-mega-menu-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.travolo-mobile-mega-menu-links li {
    margin-bottom: 10px;
}

.travolo-mobile-mega-menu-links a {
    color: var(--text);
    font-weight: 500;
    font-size: 14px;
    display: block;
    padding: 8px 0;
    transition: all 0.3s ease;
    position: relative;
    padding-left: 0;
}

.travolo-mobile-mega-menu-links a:hover {
    color: var(--primary);
    padding-left: 10px;
}

.travolo-mobile-mega-menu-links a:hover:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 5px;
    height: 5px;
    background: var(--primary);
    border-radius: 50%;
}

.travolo-mobile-nav-item.has-mega-menu > a {
    position: relative;
}

.travolo-mobile-nav-item.has-mega-menu > a:after {
    content: '\f078';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    right: 30px;
    transition: transform 0.3s ease;
}

.travolo-mobile-nav-item.has-mega-menu > a.active:after {
    transform: rotate(180deg);
}

/* Responsive Styles for Mega Menu */
@media (max-width: 992px) {
    .travolo-mega-menu {
        display: none;
    }
    
    .travolo-nav ul li.has-mega-menu:hover .travolo-mega-menu {
        opacity: 0;
        visibility: hidden;
    }
}

@media (max-width: 768px) {
    .travolo-mobile-mega-menu-container {
        padding: 0 20px;
    }
    
    .travolo-mobile-mega-menu-column h4 {
        font-size: 15px;
    }
    
    .travolo-mobile-mega-menu-links a {
        font-size: 13px;
    }
}
</style>

<!-- MEGA MENU HTML - ADD TO EXISTING NAVBAR -->

<!-- ROUTES Mega Menu -->
<div class="travolo-mega-menu" id="routes-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Main Routes</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Machame Route</a></li>
                <li><a href="#">Marangu Route</a></li>
                <li><a href="#">Lemosho Route</a></li>
                <li><a href="#">Rongai Route</a></li>
                <li><a href="#">Northern Circuit</a></li>
                <li><a href="#">Umbwe Route</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Route Comparison</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Difficulty Levels</a></li>
                <li><a href="#">Duration Comparison</a></li>
                <li><a href="#">Success Rates</a></li>
                <li><a href="#">Scenery Comparison</a></li>
                <li><a href="#">Crowd Levels</a></li>
                <li><a href="#">Cost Comparison</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Route Planning</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Best Time to Climb</a></li>
                <li><a href="#">Seasonal Considerations</a></li>
                <li><a href="#">Custom Route Options</a></li>
                <li><a href="#">Group vs Private</a></li>
                <li><a href="#">Acclimatization Tips</a></li>
                <li><a href="#">Route Maps</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1589553416260-f586c8f1514f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Kilimanjaro Routes">
        </div>
    </div>
</div>

<!-- PACKAGES Mega Menu -->
<div class="travolo-mega-menu" id="packages-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Climbing Packages</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Budget Packages</a></li>
                <li><a href="#">Standard Packages</a></li>
                <li><a href="#">Luxury Packages</a></li>
                <li><a href="#">Private Climbing</a></li>
                <li><a href="#">Group Discounts</a></li>
                <li><a href="#">Last Minute Deals</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Duration Options</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">6-Day Climbs</a></li>
                <li><a href="#">7-Day Climbs</a></li>
                <li><a href="#">8-Day Climbs</a></li>
                <li><a href="#">9-Day Climbs</a></li>
                <li><a href="#">Extended Acclimatization</a></li>
                <li><a href="#">Combination Tours</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Special Offers</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Early Bird Discounts</a></li>
                <li><a href="#">Group Discounts</a></li>
                <li><a href="#">Seasonal Promotions</a></li>
                <li><a href="#">Charity Climbs</a></li>
                <li><a href="#">Family Packages</a></li>
                <li><a href="#">Corporate Packages</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1516487106395-f3c55b3f44b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Kilimanjaro Packages">
        </div>
    </div>
</div>

<!-- DAY-TRIPS Mega Menu -->
<div class="travolo-mega-menu" id="preparation-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Safari Day Trips</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Arusha National Park</a></li>
                <li><a href="#">Lake Manyara</a></li>
                <li><a href="#">Tarangire National Park</a></li>
                <li><a href="#">Ngorongoro Crater</a></li>
                <li><a href="#">Materuni Waterfalls</a></li>
                <li><a href="#">Coffee Plantation Tours</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Cultural Experiences</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Maasai Village Tours</a></li>
                <li><a href="#">Local Market Visits</a></li>
                <li><a href="#">Traditional Cooking</a></li>
                <li><a href="#">Cultural Performances</a></li>
                <li><a href="#">Artisan Workshops</a></li>
                <li><a href="#">Historical Sites</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Adventure Activities</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Mountain Biking</a></li>
                <li><a href="#">Hiking & Trekking</a></li>
                <li><a href="#">Waterfall Adventures</a></li>
                <li><a href="#">Bird Watching</a></li>
                <li><a href="#">Photography Tours</a></li>
                <li><a href="#">Hot Air Ballooning</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1598894595350-70d67b3c5c1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Safari Day Trips">
        </div>
    </div>
</div>

<!-- BLOGS Mega Menu -->
<div class="travolo-mega-menu" id="success-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Climbing Resources</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Training Guides</a></li>
                <li><a href="#">Packing Lists</a></li>
                <li><a href="#">Altitude Sickness</a></li>
                <li><a href="#">Health & Safety</a></li>
                <li><a href="#">Equipment Reviews</a></li>
                <li><a href="#">Climbing Tips</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Travel Stories</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">Climber Interviews</a></li>
                <li><a href="#">Photo Journals</a></li>
                <li><a href="#">Team Experiences</a></li>
                <li><a href="#">Charity Expeditions</a></li>
                <li><a href="#">Family Adventures</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Destination Guides</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Tanzania Travel Tips</a></li>
                <li><a href="#">Safari Planning</a></li>
                <li><a href="#">Cultural Etiquette</a></li>
                <li><a href="#">Best Time to Visit</a></li>
                <li><a href="#">Local Cuisine</a></li>
                <li><a href="#">Travel Insurance</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Kilimanjaro Blog">
        </div>
    </div>
</div>

<!-- ABOUT US Mega Menu -->
<div class="travolo-mega-menu" id="about-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Our Company</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Mission & Values</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Safety Standards</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Certifications</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Why Choose Us</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Success Rates</a></li>
                <li><a href="#">Guide Expertise</a></li>
                <li><a href="#">Equipment Quality</a></li>
                <li><a href="#">Client Testimonials</a></li>
                <li><a href="#">Awards & Recognition</a></li>
                <li><a href="#">Partnerships</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Responsible Tourism</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Environmental Policy</a></li>
                <li><a href="#">Community Support</a></li>
                <li><a href="#">Porter Welfare</a></li>
                <li><a href="#">Leave No Trace</a></li>
                <li><a href="#">Wildlife Protection</a></li>
                <li><a href="#">Carbon Offset</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Our Team">
        </div>
    </div>
</div>

<!-- CONTACT US Mega Menu -->
<div class="travolo-mega-menu" id="contact-mega-menu">
    <div class="travolo-mega-menu-container">
        <div class="travolo-mega-menu-column">
            <h4>Get In Touch</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Contact Form</a></li>
                <li><a href="#">Office Locations</a></li>
                <li><a href="#">Phone Numbers</a></li>
                <li><a href="#">Email Addresses</a></li>
                <li><a href="#">Live Chat</a></li>
                <li><a href="#">Emergency Contacts</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Planning Assistance</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Custom Itineraries</a></li>
                <li><a href="#">Group Bookings</a></li>
                <li><a href="#">Travel Agents</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Booking Conditions</a></li>
                <li><a href="#">Payment Options</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-column">
            <h4>Support Services</h4>
            <ul class="travolo-mega-menu-links">
                <li><a href="#">Pre-Climb Support</a></li>
                <li><a href="#">During Your Trip</a></li>
                <li><a href="#">Post-Climb Follow-up</a></li>
                <li><a href="#">Travel Insurance</a></li>
                <li><a href="#">Visa Assistance</a></li>
                <li><a href="#">Medical Support</a></li>
            </ul>
        </div>
        <div class="travolo-mega-menu-image">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Contact Us">
        </div>
    </div>
</div>

<script>
// MEGA MENU JAVASCRIPT - ADD TO EXISTING JS

// Add mega menu classes to desktop nav items
document.addEventListener('DOMContentLoaded', function() {
    // Add has-mega-menu class to desktop nav items
    const desktopNavItems = document.querySelectorAll('#travolo-nav-menu li');
    desktopNavItems.forEach((item, index) => {
        if (index > 0) { // Skip HOME
            item.classList.add('has-mega-menu');
        }
    });
    
    // Add has-mega-menu class to mobile nav items
    const mobileNavItems = document.querySelectorAll('.travolo-mobile-nav li');
    mobileNavItems.forEach((item, index) => {
        if (index > 0) { // Skip HOME
            item.classList.add('travolo-mobile-nav-item', 'has-mega-menu');
        }
    });
    
    // Add mobile mega menu containers
    const mobileNav = document.querySelector('.travolo-mobile-nav ul');
    const mobileNavItemsWithMega = mobileNav.querySelectorAll('.has-mega-menu');
    
    mobileNavItemsWithMega.forEach(item => {
        const linkText = item.querySelector('a').textContent;
        const megaMenuId = linkText.toLowerCase().replace('-', '') + '-mobile-mega-menu';
        
        // Create mobile mega menu container
        const mobileMegaMenu = document.createElement('div');
        mobileMegaMenu.className = 'travolo-mobile-mega-menu';
        mobileMegaMenu.id = megaMenuId;
        
        // Clone content from desktop mega menu
        const desktopMegaMenuId = linkText.toLowerCase().replace('-', '') + '-mega-menu';
        const desktopMegaMenu = document.getElementById(desktopMegaMenuId);
        
        if (desktopMegaMenu) {
            const desktopContent = desktopMegaMenu.querySelector('.travolo-mega-menu-container');
            const mobileContent = desktopContent.cloneNode(true);
            
            // Remove the image column for mobile
            const imageColumn = mobileContent.querySelector('.travolo-mega-menu-image');
            if (imageColumn) {
                imageColumn.remove();
            }
            
            // Update classes for mobile
            const columns = mobileContent.querySelectorAll('.travolo-mega-menu-column');
            columns.forEach(column => {
                column.className = 'travolo-mobile-mega-menu-column';
            });
            
            const links = mobileContent.querySelectorAll('.travolo-mega-menu-links');
            links.forEach(linkList => {
                linkList.className = 'travolo-mobile-mega-menu-links';
            });
            
            mobileContent.className = 'travolo-mobile-mega-menu-container';
            mobileMegaMenu.appendChild(mobileContent);
            item.appendChild(mobileMegaMenu);
        }
    });
    
    // Mobile mega menu toggle functionality
    const mobileMegaMenuLinks = document.querySelectorAll('.travolo-mobile-nav-item.has-mega-menu > a');
    
    mobileMegaMenuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Close all other mega menus
            document.querySelectorAll('.travolo-mobile-mega-menu.active').forEach(menu => {
                if (menu !== this.nextElementSibling) {
                    menu.classList.remove('active');
                    menu.previousElementSibling.classList.remove('active');
                }
            });
            
            // Toggle current mega menu
            this.classList.toggle('active');
            const megaMenu = this.nextElementSibling;
            if (megaMenu && megaMenu.classList.contains('travolo-mobile-mega-menu')) {
                megaMenu.classList.toggle('active');
            }
        });
    });
    
    // Close mobile mega menus when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.travolo-mobile-nav')) {
            document.querySelectorAll('.travolo-mobile-mega-menu.active').forEach(menu => {
                menu.classList.remove('active');
                menu.previousElementSibling.classList.remove('active');
            });
        }
    });
});

// Close mega menus when scrolling
window.addEventListener('scroll', function() {
    document.querySelectorAll('.travolo-mega-menu.active').forEach(menu => {
        menu.classList.remove('active');
    });
});
</script>