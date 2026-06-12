<?php /* Template Name: Christian Camps and Camp Ministry */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Christian Camps &amp; Camp Ministry | Children's Bible Ministries</title>
<meta name="description" content="CBM operates Christian camp ministries providing immersive, Scripture-centered environments for children, youth, families, and churches through summer camps, retreats, and group ministries.">
<?php wp_head(); ?>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }
#cbm-camps { min-height: 100vh; display: flex; flex-direction: column; }
.cbm-hero-band { background: linear-gradient(135deg, rgba(10,32,64,0.88) 0%, rgba(26,54,93,0.80) 100%), url('https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=1600&q=80') center/cover no-repeat; padding: 9rem 2rem 4.5rem; }
.cbm-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb { font-size: 0.82rem; color: rgba(255,255,255,0.5); margin-bottom: 0.85rem; }
.cbm-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; }
.cbm-breadcrumb a:hover { color: rgba(255,255,255,0.8); }
.cbm-hero-band h1 { font-size: clamp(2.2rem,5vw,3.4rem); font-weight: 700; color: #fff; letter-spacing: -0.02em; line-height: 1.1; }
.cbm-intro-band { background: #1a365d; padding: 3rem 2rem; text-align: center; }
.cbm-intro-band p { max-width: 820px; margin: 0 auto; font-size: clamp(1rem,1.8vw,1.2rem); color: rgba(255,255,255,0.88); line-height: 1.8; font-family: 'Arial', sans-serif; }
.cbm-section { padding: 70px 40px; }
.cbm-section--white { background: #fff; }
.cbm-section--light { background: #f5f7fa; }
.cbm-section--dark { background: #0a2040; }
.cbm-section-inner { max-width: 1100px; margin: 0 auto; }
.cbm-section-inner--narrow { max-width: 780px; margin: 0 auto; }
.cbm-section-label { display: inline-block; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #546e8a; margin-bottom: 0.9rem; }
.cbm-section h2 { font-size: clamp(1.7rem,3.5vw,2.5rem); font-weight: 700; color: #0a2040; margin-bottom: 1.25rem; letter-spacing: -0.02em; }
.cbm-section--dark h2 { color: #fff; }
.cbm-section h3 { font-size: 1.2rem; font-weight: 700; color: #0a2040; margin: 1.75rem 0 0.6rem; }
.cbm-section p { font-size: 1.02rem; color: #374f6b; line-height: 1.8; margin-bottom: 1.2rem; font-family: 'Arial', sans-serif; }
.cbm-section--dark p { color: rgba(255,255,255,0.8); }
.cbm-section ul { margin: 0 0 1.25rem 1.5rem; }
.cbm-section ul li { font-size: 1rem; color: #374f6b; line-height: 1.8; margin-bottom: 0.3rem; font-family: 'Arial', sans-serif; }
.cbm-link-arrow { display: inline-block; color: #1a6fc4; font-weight: 600; font-size: 0.95rem; text-decoration: none; margin-top: 0.4rem; }
.cbm-link-arrow:hover { text-decoration: underline; }
.cbm-link-arrow::after { content: ' →'; }
/* Camp location grid */
.cbm-camp-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.25rem; margin-top: 2rem; }
.cbm-camp-card { background: #fff; border: 1px solid #dce2ea; border-radius: 10px; padding: 1.5rem; }
.cbm-camp-card h4 { font-size: 0.95rem; font-weight: 700; color: #0a2040; margin-bottom: 0.35rem; }
.cbm-camp-card .cbm-camp-state { font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.07em; color: #546e8a; margin-bottom: 0.5rem; }
.cbm-camp-card p { font-size: 0.875rem; color: #546e8a; line-height: 1.6; margin: 0; font-family: 'Arial', sans-serif; }
.cbm-camp-card a { color: #1a6fc4; text-decoration: none; font-size: 0.85rem; font-weight: 600; display: inline-block; margin-top: 0.5rem; }
.cbm-camp-card a:hover { text-decoration: underline; }
/* CTA */
.cbm-cta-section { background: #0a2040; padding: 65px 40px; text-align: center; }
.cbm-cta-section h2 { font-size: clamp(1.6rem,3vw,2.1rem); color: #fff; font-weight: 700; margin-bottom: 1rem; }
.cbm-cta-section p { font-size: 1rem; color: rgba(255,255,255,0.78); max-width: 540px; margin: 0 auto 2.2rem; line-height: 1.7; font-family: 'Arial', sans-serif; }
.cbm-btn-row { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }
.cbm-btn { display: inline-block; padding: 13px 28px; background: #fff; color: #0a2040; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; }
.cbm-btn:hover { background: #e8eef5; }
.cbm-btn-green { display: inline-block; padding: 13px 28px; background: #2e7d32; color: #fff; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; }
.cbm-btn-green:hover { background: #1b5e20; }
.cbm-footer { background: #060f1e; padding: 30px 40px; color: rgba(255,255,255,0.4); font-family: 'Arial', sans-serif; font-size: 12px; }
.cbm-footer-inner { max-width: 1200px; margin: 0 auto; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 18px; }
.cbm-footer a { color: rgba(255,255,255,0.5); text-decoration: none; }
@media (max-width: 900px) { .cbm-camp-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) { .cbm-section { padding: 48px 22px; } .cbm-cta-section { padding: 48px 22px; } .cbm-btn-row { flex-direction: column; align-items: center; } }
@media (max-width: 600px) { .cbm-camp-grid { grid-template-columns: 1fr; } }
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('cbm-nav'); ?>

<div id="cbm-camps">

<div class="cbm-hero-band">
    <div class="cbm-hero-inner">
        <p class="cbm-breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> &rsaquo; <a href="<?php echo home_url('/programs-and-outreach'); ?>">Programs &amp; Outreach</a> &rsaquo; Christian Camps &amp; Camp Ministry</p>
        <h1>Christian Camps &amp; Camp Ministry</h1>
    </div>
</div>

<div class="cbm-intro-band">
    <p>Children's Bible Ministries operates Christian camp ministries that provide immersive, Scripture-centered environments for children, youth, families, churches, and ministry leaders. Through summer camps, year-round retreats, and group ministries, CBM camps exist to teach the Bible clearly, proclaim the gospel, and foster spiritual growth through Christ-centered community.</p>
</div>

<section class="cbm-section cbm-section--white">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Year-Round Ministry</span>
        <h2>More Than Summer Camp</h2>
        <p>While summer camps are often the most visible expression of camp ministry, CBM camp properties operate year-round. Summer typically represents a concentrated season of ministry — ranging from five to ten weeks depending on location — but camp ministry continues throughout the year through a wide variety of Bible-focused retreats and gatherings.</p>
        <p>Year-round camp programming includes events such as father-son and mother-daughter retreats, elementary and teen retreats, family retreats, sweetheart banquets, fish camps, homeschool retreats, leadership gatherings, and other discipleship-oriented experiences. Each event is intentionally designed to engage participants with God's Word and encourage spiritual growth in a Christ-honoring environment.</p>
    </div>
</section>

<section class="cbm-section cbm-section--light">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Scripture at the Center</span>
        <h2>Bible-Centered Camp Experiences</h2>
        <p>At every CBM camp, Scripture is central. Bible teaching is woven throughout camp programming, whether through formal teaching sessions, worship, cabin devotions, small group discussions, mentoring relationships, or guided activities. Camp settings provide focused time away from daily distractions, allowing children and families to engage deeply with biblical truth and Christian community.</p>
        <p>CBM camps emphasize:</p>
        <ul>
            <li>Clear presentation of the gospel</li>
            <li>Age-appropriate Bible teaching</li>
            <li>Christ-centered discipleship</li>
            <li>Spiritual encouragement and growth</li>
            <li>Child safety</li>
        </ul>
        <a href="<?php echo home_url('/child-protection-safety'); ?>" class="cbm-link-arrow">View CBM's Child Safety Protocols</a>
    </div>
</section>

<section class="cbm-section cbm-section--white">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Connected Programs</span>
        <h2>Camps and Bible Correspondence Lessons</h2>
        <p>Camp ministry is intentionally connected to CBM's Bible Correspondence Lessons program. At locations that operate camp properties, children who complete Bible correspondence lessons receive significant discounts toward camp attendance, reinforcing the value of consistent engagement with Scripture.</p>
        <p>In some locations, a child's first week of camp following completion of Bible lessons is offered at no cost, with continued lesson completion resulting in ongoing discounted opportunities. This integration encourages children to move from personal Bible study into immersive, community-based discipleship experiences.</p>
        <a href="<?php echo home_url('/bible-lessons-for-children'); ?>" class="cbm-link-arrow">View Bible Lessons by Mail or Email</a>
    </div>
</section>

<section class="cbm-section cbm-section--light">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Facility Stewardship</span>
        <h2>Group Ministries and Retreat Hosting</h2>
        <p>In addition to CBM-hosted programs, camp properties serve as ministry resources through Group Ministries. When not in use for CBM programming, camps host churches, ministries, and organizations seeking a safe, Christ-honoring environment for retreats and events.</p>
        <p>Group Ministries support stewardship of camp facilities, build relationships with local churches and partners, provide affordable retreat space, and help sustain year-round camp operations. Because many camps operate at or near break-even, Group Ministries play an important role in supporting the ongoing mission while keeping programs accessible.</p>
        <p>Several CBM camp locations offer free or deeply discounted lodging for pastors and missionaries during non-summer months — reflecting CBM's commitment to caring for those who serve in ministry.</p>
        <a href="<?php echo home_url('/retreat-resources'); ?>" class="cbm-link-arrow">View Retreat and Conference Space Options</a>
    </div>
</section>

<!-- Camp Locations -->
<section class="cbm-section cbm-section--dark">
    <div class="cbm-section-inner">
        <span class="cbm-section-label" style="color:rgba(255,255,255,0.45);">Where We Operate</span>
        <h2>CBM Camp Locations</h2>
        <p>The following locations operate active camp and retreat ministries within the CBM network.</p>

        <div class="cbm-camp-grid">
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Tennessee</div>
                <h4 style="color:#fff;">Camp Ta-Pa-Win-Go</h4>
                <p style="color:rgba(255,255,255,0.65);">East Tennessee — Summer camps, retreats, group ministries</p>
                <a href="https://cbmcamp.com" target="_blank" rel="noopener">cbmcamp.com</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Tennessee</div>
                <h4 style="color:#fff;">Camp Ozone</h4>
                <p style="color:rgba(255,255,255,0.65);">Upper Cumberlands — Summer camps, retreats, group ministries, homeschool events</p>
                <a href="https://campozone.org" target="_blank" rel="noopener">campozone.org</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Tennessee — HQ</div>
                <h4 style="color:#fff;">Tuckaleechee Retreat Center</h4>
                <p style="color:rgba(255,255,255,0.65);">Townsend — Retreats, group ministries, homeschool events</p>
                <a href="<?php echo home_url('/tuckaleechee-retreat-center'); ?>">Learn More</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Florida</div>
                <h4 style="color:#fff;">Camp Gilead</h4>
                <p style="color:rgba(255,255,255,0.65);">Polk City — Summer camps, retreats, group ministries</p>
                <a href="https://campgilead.com" target="_blank" rel="noopener">campgilead.com</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">North Carolina</div>
                <h4 style="color:#fff;">New Life Camp</h4>
                <p style="color:rgba(255,255,255,0.65);">Raleigh — Summer camps, retreats, group ministries</p>
                <a href="https://newlifecamp.com" target="_blank" rel="noopener">newlifecamp.com</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">North Carolina</div>
                <h4 style="color:#fff;">Camp Grace</h4>
                <p style="color:rgba(255,255,255,0.65);">Fairmont — Summer camps, retreats, group ministries</p>
                <a href="https://cbmcampgrace.com" target="_blank" rel="noopener">cbmcampgrace.com</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Virginia</div>
                <h4 style="color:#fff;">Camp Red Arrow</h4>
                <p style="color:rgba(255,255,255,0.65);">Stevensburg — Summer camps, retreats</p>
                <a href="https://cbmofvirginia.org" target="_blank" rel="noopener">cbmofvirginia.org</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Pennsylvania</div>
                <h4 style="color:#fff;">Camp Cornerstone</h4>
                <p style="color:rgba(255,255,255,0.65);">Jefferson — Summer camps, retreats, group ministries</p>
                <a href="https://campcornerstone.org" target="_blank" rel="noopener">campcornerstone.org</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Michigan</div>
                <h4 style="color:#fff;">Gitche Gumee Bible Camp</h4>
                <p style="color:rgba(255,255,255,0.65);">Eagle River — Summer camps, retreats</p>
                <a href="https://gitche.net" target="_blank" rel="noopener">gitche.net</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Alabama</div>
                <h4 style="color:#fff;">Camp Victory</h4>
                <p style="color:rgba(255,255,255,0.65);">Samson — Summer camps, retreats, group ministries, homeschool events</p>
                <a href="https://campvictoryal.org" target="_blank" rel="noopener">campvictoryal.org</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Alabama</div>
                <h4 style="color:#fff;">Ponderosa Student Ministries</h4>
                <p style="color:rgba(255,255,255,0.65);">Mentone — Summer camps, retreats, group ministries, foster camp</p>
                <a href="https://ponderosabiblecamp.com" target="_blank" rel="noopener">ponderosabiblecamp.com</a>
            </div>
            <div class="cbm-camp-card" style="background:#0d2035; border-color:rgba(255,255,255,0.1);">
                <div class="cbm-camp-state" style="color:rgba(255,255,255,0.4);">Moldova — International</div>
                <h4 style="color:#fff;">Camp Emmanuel</h4>
                <p style="color:rgba(255,255,255,0.65);">Cahul — Summer camps, retreats, group ministries</p>
                <a href="https://moldovamission.com" target="_blank" rel="noopener">moldovamission.com</a>
            </div>
        </div>
    </div>
</section>

<section class="cbm-section cbm-section--white">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">The 3 C's</span>
        <h2>Camp Ministry Within the 3 C's</h2>
        <p>Camp ministry represents one of the three core expressions of CBM's ministry model. Together with Classes and Correspondence Lessons, camps provide environments where biblical teaching is experienced, relationships are strengthened, and spiritual growth is nurtured. Each expression complements the others, creating a cohesive approach to gospel ministry among children and families.</p>
        <a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>" class="cbm-link-arrow">Learn About the Ministry Model: The 3 C's</a>
    </div>
</section>

<section class="cbm-cta-section">
    <h2>Get Involved in Camp Ministry</h2>
    <p>Whether you're a parent, church leader, pastor looking for retreat space, or someone sensing a call to camp ministry, there's a place for you.</p>
    <div class="cbm-btn-row">
        <a href="<?php echo home_url('/tuckaleechee-retreat-center'); ?>" class="cbm-btn">Explore Retreat Center Opportunities</a>
        <a href="<?php echo home_url('/church-partnerships'); ?>" class="cbm-btn-green">Partner With Your Church</a>
    </div>
</section>

<footer class="cbm-footer">
    <div class="cbm-footer-inner">
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability'); ?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety'); ?>">Child Protection Policy</a></p>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
