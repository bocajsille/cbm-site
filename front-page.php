<?php
/**
 * Template Name: CBM Homepage
 * Description: Custom homepage for Children's Bible Ministries
 */
get_header(); ?>

<style>
/* ============================================
   CBM GLOBAL NAV STYLES
   These styles are shared across all pages.
   Move to style.css in your child theme once confirmed.
   ============================================ */

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; }

/* NAV */
.cbm-nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    padding: 0 2rem;
    height: 70px;
    background: rgba(26, 54, 93, 0.92);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    transition: background 0.3s, box-shadow 0.3s;
}
.cbm-nav.cbm-nav-scrolled {
    background: rgba(20, 42, 74, 0.98);
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
}
.cbm-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    flex-shrink: 0;
    margin-right: 2rem;
}
.cbm-logo img {
    height: 42px;
    width: auto;
}

.cbm-nav-links {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    margin-left: auto;
}

/* Dropdown toggle buttons */
.cbm-dropdown { position: relative; }
.cbm-dropdown-toggle {
    display: flex;
    align-items: center;
    gap: 6px;
    background: none;
    border: none;
    color: rgba(255,255,255,0.88);
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.5rem 0.85rem;
    cursor: pointer;
    border-radius: 6px;
    transition: color 0.2s, background 0.2s;
    white-space: nowrap;
    letter-spacing: 0.01em;
}
.cbm-dropdown-toggle:hover,
.cbm-dropdown.cbm-open .cbm-dropdown-toggle {
    color: #fff;
    background: rgba(255,255,255,0.1);
}
.cbm-chevron {
    transition: transform 0.2s;
    opacity: 0.7;
}
.cbm-dropdown.cbm-open .cbm-chevron {
    transform: rotate(180deg);
    opacity: 1;
}

/* Dropdown menus */
.cbm-dropdown-menu {
    display: none;
    position: absolute;
    top: calc(100% + 8px);
    left: 0;
    background: rgba(18, 38, 66, 0.97);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 1.25rem;
    min-width: 200px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.4);
    animation: cbmFadeIn 0.18s ease;
}
.cbm-dropdown.cbm-open .cbm-dropdown-menu { display: flex; flex-direction: column; gap: 0.2rem; }
.cbm-dropdown-menu a {
    color: rgba(255,255,255,0.78);
    text-decoration: none;
    font-size: 0.9rem;
    padding: 0.4rem 0.6rem;
    border-radius: 6px;
    transition: color 0.15s, background 0.15s;
    white-space: nowrap;
}
.cbm-dropdown-menu a:hover { color: #fff; background: rgba(255,255,255,0.1); }

/* Mega menus */
.cbm-mega-menu {
    flex-direction: row !important;
    gap: 0 !important;
    left: 50%;
    transform: translateX(-50%);
    min-width: 700px;
    padding: 1.75rem 2rem;
}
.cbm-mega-col {
    flex: 1;
    padding: 0 1rem;
    border-right: 1px solid rgba(255,255,255,0.07);
}
.cbm-mega-col:first-child { padding-left: 0; }
.cbm-mega-col:last-child { padding-right: 0; border-right: none; }
.cbm-mega-heading {
    color: rgba(255,255,255,0.45);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.75rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}
.cbm-mega-col a {
    display: block;
    white-space: normal;
    line-height: 1.4;
    padding: 0.35rem 0.5rem;
}

/* Login + Donate */
.cbm-nav-login {
    color: rgba(255,255,255,0.78);
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.5rem 0.85rem;
    margin-left: 0.5rem;
    border-radius: 6px;
    transition: color 0.2s, background 0.2s;
}
.cbm-nav-login:hover { color: #fff; background: rgba(255,255,255,0.1); }
.cbm-nav-donate {
    background: #4CAF50;
    color: #fff !important;
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 600;
    padding: 0.5rem 1.4rem;
    border-radius: 50px;
    margin-left: 0.75rem;
    transition: background 0.2s, transform 0.15s;
    letter-spacing: 0.01em;
}
.cbm-nav-donate:hover { background: #43a047; transform: translateY(-1px); }

/* Hamburger */
.cbm-hamburger {
    display: none;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    margin-left: auto;
}
.cbm-hamburger span {
    display: block;
    width: 24px;
    height: 2px;
    background: #fff;
    border-radius: 2px;
    transition: transform 0.25s, opacity 0.25s;
}
.cbm-hamburger.cbm-ham-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.cbm-hamburger.cbm-ham-open span:nth-child(2) { opacity: 0; }
.cbm-hamburger.cbm-ham-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

@keyframes cbmFadeIn {
    from { opacity: 0; transform: translateY(-6px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ============================================
   HOMEPAGE STYLES
   ============================================ */

#cbm-homepage {
    padding-top: 70px; /* offset for fixed nav */
    background: #fff;
    color: #1a2940;
}

/* HERO */
.cbm-hero {
    min-height: 92vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-image:
        linear-gradient(135deg, rgba(26, 54, 93, 0.75) 0%, rgba(26, 54, 93, 0.65) 100%),
        url('https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=1800&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
    overflow: hidden;
}
.cbm-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 80px;
    background: linear-gradient(to bottom, transparent, #fff);
}
.cbm-hero-content {
    position: relative;
    z-index: 1;
    max-width: 780px;
    padding: 2rem;
}
.cbm-hero-content h1 {
    font-size: clamp(2.6rem, 6vw, 4.5rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 1.25rem;
    letter-spacing: -0.02em;
}
.cbm-hero-content p {
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    color: rgba(255,255,255,0.88);
    margin-bottom: 2.25rem;
    line-height: 1.6;
}
.cbm-hero-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
.cbm-btn-primary {
    background: #4CAF50;
    color: #fff;
    text-decoration: none;
    padding: 0.9rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
    box-shadow: 0 4px 16px rgba(76,175,80,0.4);
}
.cbm-btn-primary:hover { background: #43a047; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(76,175,80,0.5); }
.cbm-btn-secondary {
    background: rgba(255,255,255,0.15);
    color: #fff;
    text-decoration: none;
    padding: 0.9rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    border: 2px solid rgba(255,255,255,0.5);
    transition: background 0.2s, border-color 0.2s, transform 0.15s;
    backdrop-filter: blur(4px);
}
.cbm-btn-secondary:hover { background: rgba(255,255,255,0.25); border-color: #fff; transform: translateY(-2px); }

/* STATS */
.cbm-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
    background: #1a365d;
    padding: 3rem 2rem;
}
.cbm-stat {
    text-align: center;
    padding: 1.5rem 1rem;
    border-right: 1px solid rgba(255,255,255,0.12);
}
.cbm-stat:last-child { border-right: none; }
.cbm-stat-number {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: #fff;
    line-height: 1;
    margin-bottom: 0.5rem;
}
.cbm-stat-label {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.65);
    line-height: 1.4;
}

/* PROGRAMS */
.cbm-programs {
    padding: 6rem 2rem;
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
}
.cbm-section-title {
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 0.75rem;
    letter-spacing: -0.02em;
}
.cbm-section-subtitle {
    font-size: 1.1rem;
    color: #546e8a;
    margin-bottom: 3.5rem;
    line-height: 1.6;
}
.cbm-program-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
.cbm-program-card {
    background: #f7f9fc;
    border-radius: 16px;
    padding: 2.5rem 2rem;
    text-align: left;
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid #e8eef5;
}
.cbm-program-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(26,54,93,0.1); }
.cbm-program-icon { font-size: 2.5rem; margin-bottom: 1rem; }
.cbm-program-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 0.75rem;
}
.cbm-program-card p { font-size: 0.95rem; color: #546e8a; line-height: 1.7; }
.cbm-program-card a.cbm-card-link {
    display: inline-block;
    margin-top: 1.25rem;
    color: #1a6fc4;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
}
.cbm-program-card a.cbm-card-link:hover { text-decoration: underline; }

/* GET INVOLVED */
.cbm-get-involved {
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    padding: 6rem 2rem;
    text-align: center;
}
.cbm-get-involved .cbm-section-title { color: #fff; }
.cbm-get-involved .cbm-section-subtitle { color: rgba(255,255,255,0.78); }
.cbm-involvement-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    max-width: 1100px;
    margin: 0 auto;
}
.cbm-involvement-card {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 14px;
    padding: 2rem 1.5rem;
    text-align: left;
    transition: background 0.2s, transform 0.2s;
    text-decoration: none;
    display: block;
}
.cbm-involvement-card:hover { background: rgba(255,255,255,0.14); transform: translateY(-3px); }
.cbm-involvement-card h3 { font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 0.6rem; }
.cbm-involvement-card p { font-size: 0.9rem; color: rgba(255,255,255,0.7); line-height: 1.6; }

/* TESTIMONIAL */
.cbm-testimonials {
    padding: 6rem 2rem;
    background: #f7f9fc;
    text-align: center;
}
.cbm-testimonial-inner {
    max-width: 760px;
    margin: 0 auto;
}
.cbm-testimonial-inner .cbm-section-title { margin-bottom: 2.5rem; }
.cbm-quote {
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    color: #2d4a6e;
    font-style: italic;
    line-height: 1.75;
    margin-bottom: 1.5rem;
    position: relative;
}
.cbm-quote::before {
    content: '\201C';
    font-size: 5rem;
    color: #c9ddf0;
    position: absolute;
    top: -1.5rem;
    left: -1rem;
    font-style: normal;
    line-height: 1;
    font-family: Georgia, serif;
}
.cbm-quote-author { font-size: 0.95rem; font-weight: 600; color: #546e8a; letter-spacing: 0.03em; }

/* FOOTER CTA */
.cbm-footer-cta {
    background: #1a2940;
    padding: 5rem 2rem;
    text-align: center;
}
.cbm-footer-cta h2 { font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 700; color: #fff; margin-bottom: 1rem; }
.cbm-footer-cta p { font-size: 1.05rem; color: rgba(255,255,255,0.7); margin-bottom: 2rem; max-width: 560px; margin-left: auto; margin-right: auto; }
.cbm-footer-cta-btns { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cbm-mega-menu { min-width: 560px; }
    .cbm-involvement-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .cbm-hamburger { display: flex; }
    .cbm-nav-links {
        display: none;
        position: fixed;
        top: 70px; left: 0; right: 0; bottom: 0;
        background: rgba(18, 38, 66, 0.98);
        flex-direction: column;
        align-items: flex-start;
        padding: 1.5rem;
        overflow-y: auto;
        gap: 0.25rem;
    }
    .cbm-nav-links.cbm-mobile-open { display: flex; }
    .cbm-dropdown { width: 100%; }
    .cbm-dropdown-toggle { width: 100%; justify-content: space-between; padding: 0.75rem 1rem; }
    .cbm-dropdown-menu, .cbm-mega-menu {
        position: static;
        transform: none;
        min-width: unset;
        width: 100%;
        border-radius: 8px;
        margin-top: 0.25rem;
        background: rgba(255,255,255,0.05);
        box-shadow: none;
        border: 1px solid rgba(255,255,255,0.08);
    }
    .cbm-mega-menu { flex-direction: column !important; padding: 1rem; }
    .cbm-mega-col { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.07); padding: 0.75rem 0; }
    .cbm-mega-col:last-child { border-bottom: none; }
    .cbm-nav-login, .cbm-nav-donate { margin-left: 0; width: 100%; text-align: center; padding: 0.75rem 1rem; }
    .cbm-stats { grid-template-columns: repeat(2, 1fr); }
    .cbm-stat { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.12); }
    .cbm-stat:nth-child(2n) { border-bottom: 1px solid rgba(255,255,255,0.12); }
    .cbm-stat:nth-last-child(-n+2) { border-bottom: none; }
    .cbm-program-grid { grid-template-columns: 1fr; }
    .cbm-involvement-grid { grid-template-columns: 1fr; }
}
</style>

<div id="cbm-homepage">

    <?php get_template_part('cbm-nav'); ?>

    <!-- Hero -->
    <section class="cbm-hero">
        <div class="cbm-hero-content">
            <h1>Win a Child, Win a Life</h1>
            <p>Transforming lives through Christ across the globe</p>
            <div class="cbm-hero-buttons">
                <a href="<?php echo home_url('/christian-camps-camp-ministry'); ?>" class="cbm-btn-primary">Find a Camp Near You</a>
                <a href="<?php echo home_url('/volunteer-opportunities'); ?>" class="cbm-btn-secondary">Get Involved</a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="cbm-stats">
        <div class="cbm-stat">
            <div class="cbm-stat-number">53M+</div>
            <div class="cbm-stat-label">Children in Public Schools</div>
        </div>
        <div class="cbm-stat">
            <div class="cbm-stat-number">11</div>
            <div class="cbm-stat-label">Camps Across the US</div>
        </div>
        <div class="cbm-stat">
            <div class="cbm-stat-number">5</div>
            <div class="cbm-stat-label">International Affiliates</div>
        </div>
        <div class="cbm-stat">
            <div class="cbm-stat-number">100K+</div>
            <div class="cbm-stat-label">Students Reached Annually</div>
        </div>
    </section>

    <!-- Programs -->
    <section class="cbm-programs">
        <h2 class="cbm-section-title">Our Ministry Programs</h2>
        <p class="cbm-section-subtitle">Spreading the gospel of Jesus Christ through diverse opportunities</p>
        <div class="cbm-program-grid">
            <div class="cbm-program-card">
                <div class="cbm-program-icon">⛺</div>
                <h3>Summer Camps &amp; Retreats</h3>
                <p>Life-changing experiences where children encounter Christ through outdoor adventures, worship, and community.</p>
                <a href="<?php echo home_url('/christian-camps-camp-ministry'); ?>" class="cbm-card-link">Explore Camps →</a>
            </div>
            <div class="cbm-program-card">
                <div class="cbm-program-icon">📚</div>
                <h3>Released Time Bible Education</h3>
                <p>Weekly or monthly Bible instruction during school hours, reaching children where they are with God's Word.</p>
                <a href="<?php echo home_url('/released-time-bible-education'); ?>" class="cbm-card-link">Learn More →</a>
            </div>
            <div class="cbm-program-card">
                <div class="cbm-program-icon">✉️</div>
                <h3>Correspondence Lessons</h3>
                <p>Bible studies that earn camp discounts while building spiritual foundations at home — free of charge.</p>
                <a href="<?php echo home_url('/bible-lessons-for-children'); ?>" class="cbm-card-link">Get Lessons →</a>
            </div>
        </div>
    </section>

    <!-- Get Involved -->
    <section class="cbm-get-involved">
        <h2 class="cbm-section-title">Get Involved</h2>
        <p class="cbm-section-subtitle">Join us in making an eternal impact</p>
        <div class="cbm-involvement-grid">
            <a href="<?php echo home_url('/christian-camps-camp-ministry'); ?>" class="cbm-involvement-card">
                <h3>Parents</h3>
                <p>Register your children for transformative camp experiences that build lasting faith.</p>
            </a>
            <a href="<?php echo home_url('/church-partnerships'); ?>" class="cbm-involvement-card">
                <h3>Churches</h3>
                <p>Partner with us to bring Bible education and camp ministry to your community.</p>
            </a>
            <a href="<?php echo home_url('/volunteer-opportunities'); ?>" class="cbm-involvement-card">
                <h3>Volunteers</h3>
                <p>Serve as counselors, mentors, and ministry partners at CBM camps and programs.</p>
            </a>
            <a href="<?php echo home_url('/ways-to-give'); ?>" class="cbm-involvement-card">
                <h3>Donors</h3>
                <p>Support life-changing ministry that reaches children with the gospel every year.</p>
            </a>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="cbm-testimonials">
        <div class="cbm-testimonial-inner">
            <h2 class="cbm-section-title">Lives Changed</h2>
            <p class="cbm-quote">My son came home from camp a changed person. He discovered his faith and found a community that loves Jesus. CBM doesn't just run camps — they change lives.</p>
            <p class="cbm-quote-author">— Sarah M., Parent</p>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="cbm-footer-cta">
        <h2>Ready to Make an Eternal Impact?</h2>
        <p>Whether you give, serve, or pray — there's a place for you in this mission.</p>
        <div class="cbm-footer-cta-btns">
            <a href="https://www.continuetogive.com/cbm" target="_blank" rel="noopener noreferrer" class="cbm-btn-primary">Give Today</a>
            <a href="<?php echo home_url('/volunteer-opportunities'); ?>" class="cbm-btn-secondary">Serve With Us</a>
        </div>
    </section>

</div>

<?php get_footer(); ?>
