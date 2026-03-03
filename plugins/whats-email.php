<!-- WhatsApp & Email Buttons Only -->
<section class="travolo-contact-buttons-section">
    <div class="container">
        <div class="travolo-contact-buttons-wrapper">
            <div class="travolo-contact-buttons-grid">
                <a href="https://wa.me/255123456789" class="travolo-contact-btn travolo-whatsapp-full-btn" target="_blank">
                    <div class="travolo-btn-icon-wrapper">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="travolo-btn-text-content">
                        <span class="travolo-btn-main-text">WhatsApp Us</span>
                        <span class="travolo-btn-sub-text">Instant Response</span>
                    </div>
                </a>
                
                <a href="mailto:info@travolo.com" class="travolo-contact-btn travolo-email-full-btn">
                    <div class="travolo-btn-icon-wrapper">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="travolo-btn-text-content">
                        <span class="travolo-btn-main-text">Email Inquiry</span>
                        <span class="travolo-btn-sub-text">Detailed Quote</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Travolo Contact Buttons Section - Unique Classes */
.travolo-contact-buttons-section {
    padding: 10px 0;
    background: var(--light);
    font-family: var(--body);
}

.travolo-contact-buttons-wrapper {
    max-width: 600px;
    margin: 0 auto;
}

.travolo-contact-buttons-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.travolo-contact-btn {
    display: flex;
    align-items: center;
    padding: 20px 30px;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
    min-width: 220px;
    box-shadow: 0 4px 15px rgba(26, 26, 26, 0.1);
    border: none;
    position: relative;
    overflow: hidden;
}

.travolo-contact-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
}

.travolo-contact-btn:hover::before {
    left: 100%;
}

.travolo-contact-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(26, 26, 26, 0.2);
}

.travolo-btn-icon-wrapper {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 22px;
    flex-shrink: 0;
    background: rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.travolo-contact-btn:hover .travolo-btn-icon-wrapper {
    transform: scale(1.1);
}

.travolo-btn-text-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.travolo-btn-main-text {
    font-size: 17px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 4px;
    font-family: var(--heading);
}

.travolo-btn-sub-text {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

/* WhatsApp Button - Full Original Color */
.travolo-whatsapp-full-btn {
    background: #25D366;
}

.travolo-whatsapp-full-btn:hover {
    background: #128C7E;
}

.travolo-whatsapp-full-btn .travolo-btn-icon-wrapper {
    background: rgba(255, 255, 255, 0.3);
    color: white;
}

/* Email Button - Full Brand Primary Color */
.travolo-email-full-btn {
    background: var(--primary); /* #75682C */
}

.travolo-email-full-btn:hover {
    background: var(--secondary); /* #e0b354 */
}

.travolo-email-full-btn .travolo-btn-icon-wrapper {
    background: rgba(255, 255, 255, 0.3);
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .travolo-contact-buttons-section {
        padding: 40px 20px;
    }
    
    .travolo-contact-buttons-grid {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .travolo-contact-btn {
        width: 100%;
        max-width: 300px;
        padding: 18px 25px;
    }
}

@media (max-width: 480px) {
    .travolo-contact-buttons-section {
        padding: 30px 15px;
    }
    
    .travolo-contact-btn {
        padding: 16px 20px;
        flex-direction: row;
    }
    
    .travolo-btn-icon-wrapper {
        width: 45px;
        height: 45px;
        font-size: 20px;
        margin-right: 12px;
    }
    
    .travolo-btn-main-text {
        font-size: 16px;
    }
    
    .travolo-btn-sub-text {
        font-size: 12px;
    }
}

/* Extra Small Devices */
@media (max-width: 360px) {
    .travolo-contact-buttons-section {
        padding: 25px 10px;
    }
    
    .travolo-contact-btn {
        padding: 14px 18px;
    }
    
    .travolo-btn-icon-wrapper {
        width: 40px;
        height: 40px;
        font-size: 18px;
        margin-right: 10px;
    }
    
    .travolo-btn-main-text {
        font-size: 15px;
    }
    
    .travolo-btn-sub-text {
        font-size: 11px;
    }
}
</style>
