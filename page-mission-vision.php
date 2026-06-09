<?php
/**
 * Template Name: Mission and Vision
 * Description: Mission & Vision page for Children's Bible Ministries
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mission &amp; Vision | Children's Bible Ministries</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }

#cbm-mission-vision { min-height: 100vh; display: flex; flex-direction: column; }

/* PAGE HERO */
.cbm-page-hero {
    background:
        linear-gradient(135deg, rgba(26,54,93,0.82) 0%, rgba(26,54,93,0.72) 100%),
        url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=1600&q=80') center/cover no-repeat;
    padding: 10rem 2rem 5rem;
}
.cbm-page-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.55);
    margin-bottom: 1rem;
}
.cbm-breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; }
.cbm-breadcrumb a:hover { color: rgba(255,255,255,0.85); }
.cbm-page-hero h1 {
    font-size: clamp(2.4rem, 5vw, 3.5rem);
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.02em;
    line-height: 1.1;
}

/* INTRO BAND */
.cbm-intro-band {
    background: #1a365d;
    padding: 3.5rem 2rem;
    text-align: center;
}
.cbm-intro-band p {
    max-width: 860px;
    margin: 0 auto;
    font-size: clamp(1.05rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.8;
}

/* MISSION + VISION SPLIT */
.cbm-mv-section {
    max-width: 1100px;
    margin: 0 auto;
    padding: 5rem 2rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
}
.cbm-mv-card {
    background: #f7f9fc;
    border-radius: 16px;
    padding: 3rem;
    border: 1px solid #e8eef5;
    position: relative;
}
.cbm-mv-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #1a365d, #2c5282);
    border-radius: 16px 16px 0 0;
}
.cbm-mv-label {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #546e8a;
    margin-bottom: 1rem;
}
.cbm-mv-card h2 {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 1.25rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
}
.cbm-mv-card p {
    font-size: 1.05rem;
    color: #374f6b;
    line-height: 1.8;
}

/* MINISTRY FOCUS */
.cbm-focus-section {
    background: #1a365d;
    padding: 5rem 2rem;
}
.cbm-focus-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}
.cbm-focus-text h2 {
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1.25rem;
    letter-spacing: -0.02em;
}
.cbm-focus-text p {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.8);
    line-height: 1.8;
    margin-bottom: 1.5rem;
}
.cbm-focus-list {
    list-style: none;
    margin-bottom: 1.5rem;
}
.cbm-focus-list li {
    font-size: 1rem;
    color: rgba(255,255,255,0.8);
    line-height: 1.7;
    padding: 0.5rem 0 0.5rem 1.75rem;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    position: relative;
}
.cbm-focus-list li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: #4CAF50;
    font-weight: 700;
}
.cbm-focus-list li:last-child { border-bottom: none; }
.cbm-focus-image {
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 4/3;
}
.cbm-focus-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* ACCOUNTABILITY */
.cbm-accountability {
    padding: 5rem 2rem;
    background: #f7f9fc;
}
.cbm-accountability-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}
.cbm-accountability-image {
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 4/3;
}
.cbm-accountability-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.cbm-accountability-text h2 {
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 1.25rem;
    letter-spacing: -0.02em;
}
.cbm-accountability-text p {
    font-size: 1.05rem;
    color: #374f6b;
    line-height: 1.8;
    margin-bottom: 1.25rem;
}

/* CTA SECTION */
.cbm-cta-section {
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    padding: 5rem 2rem;
    text-align: center;
}
.cbm-cta-section h2 {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
}
.cbm-cta-section p {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.78);
    margin-bottom: 2.5rem;
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.7;
}
.cbm-cta-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
.cbm-btn-primary {
    background: #4CAF50;
    color: #fff;
    text-decoration: none;
    padding: 0.9rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    transition: background 0.2s, transform 0.15s;
}
.cbm-btn-primary:hover { background: #43a047; transform: translateY(-2px); }
.cbm-btn-secondary {
    background: rgba(255,255,255,0.12);
    color: #fff;
    text-decoration: none;
    padding: 0.9rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    border: 2px solid rgba(255,255,255,0.4);
    transition: background 0.2s, transform 0.15s;
}
.cbm-btn-secondary:hover { background: rgba(255,255,255,0.22); transform: translateY(-2px); }

/* FOOTER */
.cbm-page-footer {
    background: #1a2940;
    padding: 2rem;
    text-align: center;
    margin-top: auto;
}
.cbm-page-footer p { font-size: 0.875rem; color: rgba(255,255,255,0.45); }
.cbm-page-footer a { color: rgba(255,255,255,0.6); text-decoration: none; }
.cbm-page-footer a:hover { color: #fff; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .cbm-mv-section { grid-template-columns: 1fr; gap: 1.5rem; }
    .cbm-focus-inner { grid-template-columns: 1fr; }
    .cbm-focus-image { order: -1; }
    .cbm-accountability-inner { grid-template-columns: 1fr; }
}
</style>

<div id="cbm-mission-vision">

    <?php get_template_part('cbm-nav'); ?>

    <!-- Page Hero -->
    <div class="cbm-page-hero">
        <div class="cbm-page-hero-inner">
            <p class="cbm-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a> &rsaquo;
                <a href="<?php echo home_url('/mission-vision'); ?>">About</a> &rsaquo;
                Mission &amp; Vision
            </p>
            <h1>Mission &amp; Vision</h1>
        </div>
    </div>

    <!-- Intro -->
    <div class="cbm-intro-band">
        <p>Children's Bible Ministries exists to reach children and families with the truth of God's Word and to equip believers for faithful gospel service. Rooted in Scripture and shaped by decades of ministry experience, CBM partners with churches to teach the Bible, train leaders, and mobilize missionaries locally and around the world. Our mission and vision guide every program, partnership, and investment, ensuring that all we do remains centered on Christ and focused on lasting spiritual impact.</p>
    </div>

    <!-- Mission + Vision -->
    <section class="cbm-mv-section">
        <div class="cbm-mv-card">
            <p class="cbm-mv-label">Our Mission</p>
            <h2>Teaching. Evangelizing. Discipling.</h2>
            <p>The purpose of CBM is teaching the Bible, evangelizing the unreached, discipling believers of all ages, encouraging and equipping them for active service for Jesus Christ in their community, local church and on to the world.</p>
        </div>
        <div class="cbm-mv-card">
            <p class="cbm-mv-label">Our Vision</p>
            <h2>Children reached. Churches strengthened. Leaders sent.</h2>
            <p>Our vision is to see children reached with the gospel, churches strengthened through partnership, and trained leaders serving faithfully in ministry around the world.</p>
        </div>
    </section>

    <!-- Ministry Focus -->
    <section class="cbm-focus-section">
        <div class="cbm-focus-inner">
            <div class="cbm-focus-text">
                <h2>Our Ministry Focus</h2>
                <p>CBM's ministry is intentionally designed to serve both children and those called to minister to them. This dual focus shapes every aspect of our work — from classroom Bible teaching to leadership training and global missions engagement.</p>
                <ul class="cbm-focus-list">
                    <li>Teaching the Bible clearly and consistently to children</li>
                    <li>Supporting churches through education, camps, and outreach</li>
                    <li>Training interns, missionaries, and ministry leaders</li>
                    <li>Providing resources and environments that foster spiritual growth</li>
                </ul>
                <p>This integrated approach allows CBM to invest in present ministry needs while building capacity for future gospel impact.</p>
            </div>
            <div class="cbm-focus-image">
                <img src="https://images.unsplash.com/photo-1491975474562-1f4e30bc9468?w=800&q=80" alt="Children in Bible class" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Accountability -->
    <section class="cbm-accountability">
        <div class="cbm-accountability-inner">
            <div class="cbm-accountability-image">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&q=80" alt="Ministry leaders" loading="lazy">
            </div>
            <div class="cbm-accountability-text">
                <h2>Guided by Scripture and Accountability</h2>
                <p>CBM's mission and vision are grounded in biblical truth and carried out with intentional accountability. Our leadership, programs, and partnerships operate under clearly defined beliefs, governance structures, and safety standards to ensure integrity and faithfulness in all areas of ministry.</p>
                <p>We are committed to responsible stewardship, transparency, and the protection of those we serve — especially children — so that our mission is carried out in a way that honors God and builds trust with churches, families, and ministry partners.</p>
                <div style="display:flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                    <a href="<?php echo home_url('/beliefs-statement-of-faith'); ?>" style="color:#1a6fc4; font-weight:600; text-decoration:none; font-size:0.95rem;">View our Statement of Faith →</a>
                    <a href="<?php echo home_url('/leadership-team'); ?>" style="color:#1a6fc4; font-weight:600; text-decoration:none; font-size:0.95rem;">Meet our Leadership Team →</a>
                    <a href="<?php echo home_url('/child-protection-safety'); ?>" style="color:#1a6fc4; font-weight:600; text-decoration:none; font-size:0.95rem;">Child Protection &amp; Safety →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cbm-cta-section">
        <h2>Partner With Us</h2>
        <p>CBM carries out this mission by working alongside local churches, equipping leaders, and reaching children with the gospel. There's a place for you in this work.</p>
        <div class="cbm-cta-buttons">
            <a href="<?php echo home_url('/church-partnerships'); ?>" class="cbm-btn-primary">Explore Church Partnerships</a>
            <a href="<?php echo home_url('/ways-to-give'); ?>" class="cbm-btn-secondary">Support Gospel Ministry</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="cbm-page-footer">
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries. All rights reserved. &nbsp;&middot;&nbsp; <a href="<?php echo home_url(); ?>">Home</a></p>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
