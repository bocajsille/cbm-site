<?php
/**
 * Template Name: Scope and Global Impact
 * Description: Scope & Global Impact page for Children's Bible Ministries
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scope &amp; Global Impact | Children's Bible Ministries</title>
    <meta name="description" content="Children's Bible Ministries serves children, families, and churches across the U.S. and internationally through a unified, Bible-centered ministry model.">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.css" crossorigin="">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }

#cbm-scope { min-height: 100vh; display: flex; flex-direction: column; }

/* ── PAGE HERO ────────────────────────────────────────────── */
.cbm-page-hero {
    background:
        linear-gradient(135deg, rgba(26,54,93,0.82) 0%, rgba(26,54,93,0.72) 100%),
        url('https://images.squarespace-cdn.com/content/v1/5ec321c2af33de48734cc929/b501ce91-c834-4f50-b1ff-5064bb688549/image-asset+%286%29.jpeg') center/cover no-repeat;
    padding: 10rem 2rem 5rem;
}
.cbm-page-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb { font-size: 0.85rem; color: rgba(255,255,255,0.55); margin-bottom: 1rem; }
.cbm-breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; }
.cbm-breadcrumb a:hover { color: rgba(255,255,255,0.85); }
.cbm-page-hero h1 {
    font-size: clamp(2.4rem, 5vw, 3.5rem);
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.02em;
    line-height: 1.1;
}

/* ── INTRO BAND ───────────────────────────────────────────── */
.cbm-intro-band { background: #1a365d; padding: 3.5rem 2rem; text-align: center; }
.cbm-intro-band p {
    max-width: 860px;
    margin: 0 auto;
    font-size: clamp(1.05rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.8;
    font-family: 'Arial', sans-serif;
}

/* ── CONTENT SECTIONS ─────────────────────────────────────── */
.cbm-section { padding: 80px 40px; }
.cbm-section--white { background: #fff; }
.cbm-section--light { background: #f5f7fa; }
.cbm-section--dark  { background: #0a2040; }

.cbm-section-inner { max-width: 1100px; margin: 0 auto; }
.cbm-section-inner--narrow { max-width: 800px; margin: 0 auto; }
.cbm-section-inner--center { text-align: center; }

.cbm-section-label {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #546e8a;
    margin-bottom: 1rem;
}
.cbm-section h2 {
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    color: #0a2040;
    margin-bottom: 1.25rem;
    letter-spacing: -0.02em;
}
.cbm-section--dark h2 { color: #fff; }
.cbm-section p {
    font-size: 1.05rem;
    color: #374f6b;
    line-height: 1.8;
    margin-bottom: 1.25rem;
    font-family: 'Arial', sans-serif;
}
.cbm-section--dark p { color: rgba(255,255,255,0.82); }

.cbm-link-arrow {
    display: inline-block;
    color: #1a6fc4;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    margin-top: 0.5rem;
}
.cbm-link-arrow:hover { text-decoration: underline; }
.cbm-link-arrow::after { content: ' →'; }

/* ── MAP ──────────────────────────────────────────────────── */
.cbm-map-wrapper {
    width: 100%;
    height: 500px;
    border-radius: 12px;
    overflow: hidden;
    margin-top: 2rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.15);
    background: #0d1b2a;
}

/* Override Leaflet's default light grey map background */
#cbm-ministry-map { background: #0d1b2a !important; }
.leaflet-container { background: #0d1b2a !important; }

/* Custom teardrop markers via SVG DivIcon */
.cbm-pin { width: 28px; height: 38px; position: relative; }
.cbm-pin svg { width: 28px; height: 38px; }

/* Leaflet popup override — match Squarespace dark style */
.leaflet-popup-content-wrapper {
    background: #1a1a2e;
    color: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.5);
    padding: 0;
    min-width: 220px;
    max-width: 300px;
}
.leaflet-popup-content {
    margin: 0;
    padding: 20px 24px 20px;
    font-family: 'Segoe UI', system-ui, sans-serif;
}
.leaflet-popup-tip-container { display: none; }
.leaflet-popup-close-button {
    color: rgba(255,255,255,0.5) !important;
    font-size: 20px !important;
    top: 8px !important;
    right: 10px !important;
}
.leaflet-popup-close-button:hover { color: #fff !important; }
.cbm-popup-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #4caf50;
    margin-bottom: 8px;
    line-height: 1.3;
}
.cbm-popup-title a {
    color: #4caf50;
    text-decoration: none;
}
.cbm-popup-title a:hover { text-decoration: underline; }
.cbm-popup-address {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.75);
    line-height: 1.6;
    margin-bottom: 6px;
}
.cbm-popup-cat {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: rgba(255,255,255,0.4);
}

/* ── MAP KEY ──────────────────────────────────────────────── */
.cbm-map-key {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem 2.5rem;
    margin-top: 1.25rem;
    justify-content: center;
}
.cbm-map-key-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    font-weight: 600;
    color: #374f6b;
    font-family: 'Arial', sans-serif;
}
.cbm-map-key-dot {
    width: 18px;
    height: 18px;
    border-radius: 50% 50% 50% 0;
    transform: rotate(-45deg);
    flex-shrink: 0;
}
.cbm-map-key-dot--area      { background: #4caf50; }
.cbm-map-key-dot--project   { background: #ef6c52; }
.cbm-map-key-dot--affiliate { background: #26c6da; }
.cbm-map-key-dot--hq        { background: #90a4ae; }

/* ── CBM STRUCTURE BOX ────────────────────────────────────── */
.cbm-structure-box {
    background: #f5f7fa;
    border: 1px solid #dce2ea;
    border-radius: 12px;
    padding: 2rem 2.5rem;
    margin-top: 2rem;
    max-width: 780px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.cbm-structure-box h3 {
    font-size: 1rem;
    font-weight: 700;
    color: #0a2040;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}
.cbm-structure-box p {
    font-size: 0.95rem;
    color: #374f6b;
    line-height: 1.8;
    margin: 0;
}
.cbm-structure-box strong { color: #0a2040; }

/* ── LOCATION GRID ────────────────────────────────────────── */
.cbm-locations-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-top: 2.5rem;
}
.cbm-locations-country__heading {
    font-size: 1rem;
    font-weight: 700;
    color: #0a2040;
    border-bottom: 2px solid #0a2040;
    padding-bottom: 0.5rem;
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.cbm-locations-country--intl .cbm-locations-country__heading { color: #2e7d32; border-color: #2e7d32; }
.cbm-locations-states {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem 1.5rem;
}
.cbm-locations-state h4 {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #0a2040;
    margin-bottom: 0.35rem;
    font-family: 'Arial', sans-serif;
}
.cbm-locations-country--intl .cbm-locations-state h4 { color: #2e7d32; }
.cbm-locations-state ul { list-style: none; margin: 0; padding: 0; }
.cbm-locations-state ul li {
    font-size: 0.875rem;
    color: #374f6b;
    padding: 0.18rem 0 0.18rem 0.9rem;
    position: relative;
    line-height: 1.5;
    font-family: 'Arial', sans-serif;
}
.cbm-locations-state ul li::before { content: "•"; color: #0a2040; position: absolute; left: 0; font-weight: 700; }
.cbm-locations-country--intl .cbm-locations-state ul li::before { color: #2e7d32; }
.cbm-locations-state ul li a { color: #374f6b; text-decoration: none; }
.cbm-locations-state ul li a:hover { color: #1a6fc4; text-decoration: underline; }

/* ── CTA ──────────────────────────────────────────────────── */
.cbm-partner-cta { background: #0a2040; padding: 70px 40px; text-align: center; }
.cbm-partner-cta h2 { font-size: clamp(1.6rem, 3vw, 2.2rem); color: #fff; font-weight: 700; margin-bottom: 1rem; }
.cbm-partner-cta p {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.78);
    max-width: 560px;
    margin: 0 auto 2.5rem;
    line-height: 1.7;
    font-family: 'Arial', sans-serif;
}
.cbm-cta-buttons { display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; }
.cbm-btn {
    display: inline-block; padding: 14px 30px; background: #fff; color: #0a2040;
    font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700;
    text-decoration: none; border-radius: 4px; transition: background 0.2s, color 0.2s;
}
.cbm-btn:hover { background: #e8eef5; }
.cbm-btn-green {
    display: inline-block; padding: 14px 30px; background: #2e7d32; color: #fff;
    font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700;
    text-decoration: none; border-radius: 4px; transition: background 0.2s;
}
.cbm-btn-green:hover { background: #1b5e20; }

/* ── FOOTER ───────────────────────────────────────────────── */
.cbm-footer { background: #060f1e; padding: 60px 40px 30px; color: rgba(255,255,255,0.7); font-family: 'Arial', sans-serif; font-size: 14px; }
.cbm-footer-inner { max-width: 1200px; margin: 0 auto; }
.cbm-footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; margin-top: 40px; font-size: 12px; color: rgba(255,255,255,0.4); }
.cbm-footer a { color: rgba(255,255,255,0.55); text-decoration: none; }
.cbm-footer a:hover { color: #fff; }

/* ── RESPONSIVE ───────────────────────────────────────────── */
@media (max-width: 900px) {
    .cbm-locations-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .cbm-section { padding: 50px 24px; }
    .cbm-partner-cta { padding: 50px 24px; }
    .cbm-cta-buttons { flex-direction: column; align-items: center; }
    .cbm-map-wrapper { height: 340px; }
}
@media (max-width: 600px) {
    .cbm-locations-states { grid-template-columns: 1fr; }
    .cbm-map-key { gap: 0.75rem 1.5rem; }
}
</style>

<?php get_template_part('cbm-nav'); ?>

<div id="cbm-scope">

    <!-- ── HERO ─────────────────────────────────────────────── -->
    <div class="cbm-page-hero">
        <div class="cbm-page-hero-inner">
            <p class="cbm-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a> &rsaquo;
                <a href="<?php echo home_url('/about'); ?>">About</a> &rsaquo;
                Scope &amp; Global Impact
            </p>
            <h1>Scope &amp; Global Impact</h1>
        </div>
    </div>

    <!-- ── INTRO BAND ───────────────────────────────────────── -->
    <div class="cbm-intro-band">
        <p>Children's Bible Ministries serves children, families, churches, and ministry leaders across multiple regions of the United States and around the world. Through a unified, Bible-centered ministry model, CBM seeks to faithfully teach God's Word, proclaim the gospel, and equip believers for service in diverse cultural and geographic contexts. Scope and gospel impact are measured not only by where ministry takes place, but by the consistent presence of Scripture, discipleship, and Christ-centered teaching across every location.</p>
    </div>

    <!-- ── A UNIFIED MODEL WITH GLOBAL REACH ────────────────── -->
    <section class="cbm-section cbm-section--white">
        <div class="cbm-section-inner">
            <span class="cbm-section-label">Our Framework</span>
            <h2>A Unified Model with Global Reach</h2>
            <p>CBM's ministries operate within a shared framework — <strong><a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>" style="color:#0a2040;">the 3 C's: Classes, Correspondence Lessons, and Camps</a></strong> — allowing for both theological consistency and contextual flexibility. Each ministry location applies this model according to local needs while remaining grounded in Scripture and aligned with CBM's mission.</p>
            <p>This unified approach enables CBM to serve in varied settings, including churches, rolling chapels, motels, homes, camp properties, and international contexts, while maintaining clarity of purpose and accountability across all ministry expressions.</p>
            <a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>" class="cbm-link-arrow">Learn More About CBM's Ministry Model: The 3 C's</a>
        </div>
    </section>

    <!-- ── WHERE WE SERVE — MAP ──────────────────────────────── -->
    <section class="cbm-section cbm-section--dark">
        <div class="cbm-section-inner">
            <span class="cbm-section-label" style="color:rgba(255,255,255,0.45);">Ministry Reach</span>
            <h2>Where We Serve</h2>
            <p>Children's Bible Ministries currently operates in multiple locations throughout the United States and internationally. These ministry sites represent a combination of CBM-owned properties and locally led ministry efforts.</p>

            <div class="cbm-map-wrapper" id="cbm-ministry-map" aria-label="Map of CBM ministry locations worldwide"></div>

            <!-- Map Key -->
            <div class="cbm-map-key">
                <div class="cbm-map-key-item">
                    <div class="cbm-map-key-dot cbm-map-key-dot--area"></div>
                    <span style="color:rgba(255,255,255,0.75);">Area</span>
                </div>
                <div class="cbm-map-key-item">
                    <div class="cbm-map-key-dot cbm-map-key-dot--project"></div>
                    <span style="color:rgba(255,255,255,0.75);">Project</span>
                </div>
                <div class="cbm-map-key-item">
                    <div class="cbm-map-key-dot cbm-map-key-dot--affiliate"></div>
                    <span style="color:rgba(255,255,255,0.75);">Affiliate</span>
                </div>
                <div class="cbm-map-key-item">
                    <div class="cbm-map-key-dot cbm-map-key-dot--hq"></div>
                    <span style="color:rgba(255,255,255,0.75);">HQ</span>
                </div>
            </div>

            <!-- CBM Structure explanation -->
            <div class="cbm-structure-box" style="background:rgba(255,255,255,0.07); border-color:rgba(255,255,255,0.12);">
                <h3 style="color:rgba(255,255,255,0.6);">CBM's Structure</h3>
                <p style="color:rgba(255,255,255,0.7);">
                    <strong style="color:#fff;">Headquarters:</strong> Parent organization responsible for training and equipping, national internship, and organizational policy and governance &nbsp;&bull;&nbsp;
                    <strong style="color:#fff;">Area:</strong> Founded by CBM; locally incorporated &nbsp;&bull;&nbsp;
                    <strong style="color:#fff;">Project:</strong> Founded by CBM; under direction of HQ &nbsp;&bull;&nbsp;
                    <strong style="color:#fff;">Affiliate:</strong> Partner / Sister Ministries
                </p>
            </div>
        </div>
    </section>

    <!-- ── MINISTRY LOCATIONS AT A GLANCE ───────────────────── -->
    <section class="cbm-section cbm-section--light">
        <div class="cbm-section-inner">
            <span class="cbm-section-label">Location Overview</span>
            <h2>Ministry Locations at a Glance</h2>
            <p>Below is a high-level overview of CBM locations. Detailed program information is available on each location's individual page.</p>

            <div class="cbm-locations-grid">

                <!-- United States -->
                <div class="cbm-locations-country">
                    <h3 class="cbm-locations-country__heading">🇺🇸 United States</h3>
                    <div class="cbm-locations-states">

                        <div class="cbm-locations-state">
                            <h4>Tennessee</h4>
                            <ul>
                                <li><a href="https://childrensbibleministries.net" target="_blank" rel="noopener">CBM HQ — Townsend</a></li>
                                <li><a href="https://campozone.org" target="_blank" rel="noopener">Camp Ozone</a></li>
                                <li><a href="https://cbmcamp.com" target="_blank" rel="noopener">Camp Ta-Pa-Win-Go</a></li>
                                <li><a href="https://followhislead.org" target="_blank" rel="noopener">L.E.A.D. — Knoxville</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Florida</h4>
                            <ul>
                                <li><a href="https://campgilead.com" target="_blank" rel="noopener">Camp Gilead</a></li>
                                <li><a href="https://faithxtreme.org" target="_blank" rel="noopener">Faith Xtreme</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>North Carolina</h4>
                            <ul>
                                <li><a href="https://newlifecamp.com" target="_blank" rel="noopener">New Life Camp</a></li>
                                <li><a href="https://cbmcampgrace.com" target="_blank" rel="noopener">Camp Grace</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Virginia</h4>
                            <ul>
                                <li><a href="https://cbmofvirginia.org" target="_blank" rel="noopener">Camp Red Arrow</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Pennsylvania</h4>
                            <ul>
                                <li><a href="https://campcornerstone.org" target="_blank" rel="noopener">Camp Cornerstone</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Michigan</h4>
                            <ul>
                                <li><a href="https://gitche.net" target="_blank" rel="noopener">Gitche Gumee Bible Camp</a></li>
                                <li><a href="https://cbmwmi.org" target="_blank" rel="noopener">Lakeshore Student Ministries</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Utah</h4>
                            <ul>
                                <li>Project Utah — Salt Lake City</li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Georgia</h4>
                            <ul>
                                <li><a href="https://newcreationusa.org" target="_blank" rel="noopener">New Creation Ministries</a></li>
                                <li><a href="https://campamplify.org" target="_blank" rel="noopener">Camp Amplify</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Texas</h4>
                            <ul>
                                <li><a href="https://shepherds-place.org" target="_blank" rel="noopener">The Shepherd's Place</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Maryland</h4>
                            <ul>
                                <li><a href="https://cbmmd.org" target="_blank" rel="noopener">CBM of Maryland</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Alabama</h4>
                            <ul>
                                <li><a href="https://campvictoryal.org" target="_blank" rel="noopener">Camp Victory</a></li>
                                <li><a href="https://ponderosabiblecamp.com" target="_blank" rel="noopener">Ponderosa Student Ministries</a></li>
                            </ul>
                        </div>

                    </div>
                </div><!-- US -->

                <!-- International -->
                <div class="cbm-locations-country cbm-locations-country--intl">
                    <h3 class="cbm-locations-country__heading">🌍 International</h3>
                    <div class="cbm-locations-states">

                        <div class="cbm-locations-state">
                            <h4>Kenya</h4>
                            <ul>
                                <li><a href="https://interlockingministries.org" target="_blank" rel="noopener">Interlocking Ministries — Mfangano Island</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Moldova</h4>
                            <ul>
                                <li><a href="https://moldovamission.com" target="_blank" rel="noopener">Moldova Mission — Cahul</a></li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>United Kingdom</h4>
                            <ul>
                                <li>CBM of the United Kingdom (London)</li>
                            </ul>
                        </div>

                        <div class="cbm-locations-state">
                            <h4>Honduras</h4>
                            <ul>
                                <li><a href="https://facebook.com/thefillingstationhonduras" target="_blank" rel="noopener">CBM of Honduras — La Paz</a></li>
                            </ul>
                        </div>

                    </div>
                </div><!-- International -->

            </div>
        </div>
    </section>

    <!-- ── DEPTH OF IMPACT ───────────────────────────────────── -->
    <section class="cbm-section cbm-section--white">
        <div class="cbm-section-inner cbm-section-inner--narrow cbm-section-inner--center">
            <span class="cbm-section-label">The Measure of Ministry</span>
            <h2>Depth of Impact Through Scripture</h2>
            <p>Across all locations, CBM's impact is defined by depth of engagement with God's Word. Whether through a classroom Bible lesson, a mailed correspondence course, or an immersive camp experience, Scripture remains central and Christ is consistently proclaimed.</p>
            <p>CBM fosters multi-layered impact — reaching children directly, engaging families through shared learning, equipping volunteers and leaders, and strengthening partnerships with local churches. This approach allows gospel influence to extend beyond individual participants into households, congregations, and communities.</p>
        </div>
    </section>

    <!-- ── FAITHFUL STEWARDSHIP ──────────────────────────────── -->
    <section class="cbm-section cbm-section--light">
        <div class="cbm-section-inner cbm-section-inner--narrow cbm-section-inner--center">
            <span class="cbm-section-label">Stewardship</span>
            <h2>Faithful Stewardship and Sustainable Ministry</h2>
            <p>CBM's scope is sustained through intentional stewardship of people, resources, and facilities. Camp properties are operated year-round to support ministry programs, host partner organizations, and provide affordable retreat space for churches, pastors, and missionaries. Group Ministries and partnerships help fund ministry operations, ensuring that Bible teaching programs remain accessible and financially responsible.</p>
            <p>This stewardship-focused approach allows CBM to maintain long-term ministry presence, support local leadership, and adapt responsibly to changing needs without compromising biblical integrity.</p>
        </div>
    </section>

    <!-- ── LOOKING AHEAD ─────────────────────────────────────── -->
    <section class="cbm-section cbm-section--white">
        <div class="cbm-section-inner cbm-section-inner--narrow cbm-section-inner--center">
            <span class="cbm-section-label">The Road Ahead</span>
            <h2>Looking Ahead</h2>
            <p>As Children's Bible Ministries continues to serve existing locations and explore future opportunities, the focus remains on faithfulness to Scripture, strong partnerships with the local church, and thoughtful growth aligned with mission. Scope and gospel impact are not pursued for expansion's sake, but as a response to God's leading and the ongoing need for biblical teaching among children and families.</p>
            <a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>" class="cbm-link-arrow">Learn About the Ministry Model: The 3 C's</a>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────────────── -->
    <section class="cbm-partner-cta">
        <h2>Partner in the Mission</h2>
        <p>The breadth of CBM's reach is made possible through the faithfulness of churches, volunteers, missionaries, prayer partners, and financial supporters who believe that every child deserves to hear the gospel.</p>
        <div class="cbm-cta-buttons">
            <a href="<?php echo home_url('/programs-and-outreach'); ?>" class="cbm-btn">Explore Programs &amp; Outreach</a>
            <a href="<?php echo home_url('/church-partnerships'); ?>" class="cbm-btn-green">Partner With Your Church</a>
        </div>
    </section>

    <!-- ── FOOTER ─────────────────────────────────────────────── -->
    <footer class="cbm-footer">
        <div class="cbm-footer-inner">
            <div class="cbm-footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries, Inc. &bull;
                <a href="<?php echo home_url('/financials'); ?>">Financial Accountability</a> &bull;
                <a href="<?php echo home_url('/child-protection-and-safety'); ?>">Child Protection Policy</a></p>
            </div>
        </div>
    </footer>

</div><!-- #cbm-scope -->

<!-- ── LEAFLET MAP ────────────────────────────────────────── -->
<script>
/* Load Leaflet JS dynamically, then init map once both script + DOM are ready */
(function () {
    function initMap() {
        var mapEl = document.getElementById('cbm-ministry-map');
        if (!mapEl || typeof L === 'undefined') return;

        /* Ensure the container has height before Leaflet measures it */
        if (mapEl.offsetHeight === 0) {
            mapEl.style.height = '500px';
        }

    var map = L.map('cbm-ministry-map', {
        center: [25, -20],
        zoom: 3,
        scrollWheelZoom: false,
        zoomControl: true
    });

    /* CartoDB Positron (light base) — invert + tint gives us full control over final colors */
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    /* Invert the light map to dark, then hue-rotate into dark navy blue.
       Positron land is ~#f5f5f5 → after invert becomes ~#0a0a0a → brightness lifts to #2d3a4a
       Positron water is ~#d4e0f0 → after invert becomes ~#2b1f0f → hue-rotate shifts to dark navy */
    var tilePaneEl = map.getPanes().tilePane;
    if (tilePaneEl) {
        tilePaneEl.style.filter = 'invert(1) hue-rotate(200deg) saturate(0.5) brightness(0.85)';
    }

    /* Color map matching screenshot */
    var colors = {
        'Area':      '#4caf50',   /* green */
        'Project':   '#ef6c52',   /* salmon/red */
        'Affiliate': '#26c6da',   /* cyan */
        'CBM':       '#90a4ae'    /* blue-grey */
    };

    function makePin(color) {
        /* Teardrop / balloon shape matching screenshot */
        var svg = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="38" viewBox="0 0 28 38">'
            + '<path d="M14 0C6.268 0 0 6.268 0 14c0 9.333 14 24 14 24S28 23.333 28 14C28 6.268 21.732 0 14 0z" fill="' + color + '"/>'
            + '<circle cx="14" cy="14" r="5" fill="white" opacity="0.9"/>'
            + '</svg>';
        return L.divIcon({
            html: svg,
            className: '',
            iconSize: [28, 38],
            iconAnchor: [14, 38],
            popupAnchor: [0, -40]
        });
    }

    var locations = [
        /* Areas */
        { lat: 39.92689025, lng: -80.01513213, name: 'Camp Cornerstone',           cat: 'Area',      url: 'https://campcornerstone.org',                  addr: '381 Willis Rd., Jefferson, PA 15344' },
        { lat: 28.1734192,  lng: -81.80720967, name: 'Camp Gilead',                cat: 'Area',      url: 'https://campgilead.com',                       addr: '1445 Camp Gilead Dr., Polk City, FL 33868' },
        { lat: 34.48744519, lng: -79.19763085, name: 'Camp Grace',                 cat: 'Area',      url: 'https://cbmcampgrace.com',                     addr: '145 Grace Dr., Fairmont, NC' },
        { lat: 35.88640783, lng: -84.81506619, name: 'Camp Ozone',                 cat: 'Area',      url: 'https://campozone.org',                        addr: '232 Camp Ozone Rd., Rockwood, TN 37854' },
        { lat: 38.44142091, lng: -77.8465891,  name: 'Camp Red Arrow',             cat: 'Area',      url: 'https://cbmofvirginia.org',                    addr: '22338 Arrowhead Trail, Stevensburg, VA 22741' },
        { lat: 36.37475367, lng: -82.25914904, name: 'Camp Ta-Pa-Win-Go',          cat: 'Area',      url: 'https://cbmcamp.com',                          addr: '111 CBM Camp Rd., Watauga, TN 37694' },
        { lat: 31.07938811, lng: -86.17650456, name: 'Camp Victory',               cat: 'Area',      url: 'https://campvictoryal.org',                    addr: '363 Victory Cir., Samson, AL 36477' },
        { lat: 14.32047662, lng: -87.67370074, name: 'CBM of Honduras',            cat: 'Area',      url: 'https://facebook.com/thefillingstationhonduras', addr: 'La Paz, Honduras' },
        { lat: 39.28892899, lng: -76.6098455,  name: 'CBM of Maryland',            cat: 'Area',      url: 'https://cbmmd.org',                            addr: '' },
        { lat: 51.50758961, lng: -0.1311321,   name: 'CBM of the United Kingdom',  cat: 'Area',      url: '',                                             addr: 'London, UK' },
        { lat: 35.91150785, lng: -78.60104466, name: 'New Life Camp',              cat: 'Area',      url: 'https://newlifecamp.com',                      addr: '9927 Falls of Neuse Rd., Raleigh, NC 27614' },
        { lat: 34.62613886, lng: -85.55202177, name: 'Ponderosa Student Ministries', cat: 'Area',   url: 'https://ponderosabiblecamp.com',               addr: '1018 Co Rd 734, Mentone, AL 35984' },
        /* Projects */
        { lat: 33.72086534, lng: -85.14601549, name: 'New Creation Ministries',    cat: 'Project',   url: 'https://newcreationusa.org',                   addr: 'Bremen, GA' },
        { lat: 35.96546944, lng: -83.92595543, name: 'L.E.A.D.',                   cat: 'Project',   url: 'https://followhislead.org',                    addr: 'Knoxville, TN' },
        { lat: 43.06288399, lng: -86.22829084, name: 'Lakeshore Student Ministries', cat: 'Project', url: 'https://cbmwmi.org',                           addr: 'Grand Haven, MI' },
        { lat: 29.42579077, lng: -98.49680418, name: "The Shepherd's Place",       cat: 'Project',   url: 'https://shepherds-place.org',                  addr: 'San Antonio, TX' },
        { lat: 40.75912098, lng: -111.878372,  name: 'Project Utah',               cat: 'Project',   url: '',                                             addr: 'Salt Lake City, UT' },
        /* Affiliates */
        { lat: 34.10928043, lng: -83.7663159,  name: 'Camp Amplify',               cat: 'Affiliate', url: 'https://campamplify.org',                      addr: 'Braselton, GA' },
        { lat: 28.03960812, lng: -81.76766865, name: 'Faith Xtreme',               cat: 'Affiliate', url: 'https://faithxtreme.org',                      addr: '1574 34th St. NW, Winter Haven, FL 33881' },
        { lat: 47.41389679, lng: -88.292291,   name: 'Gitche Gumee Bible Camp',    cat: 'Affiliate', url: 'https://gitche.net',                           addr: '5189 Garden City Rd., Eagle River, MI 49950' },
        { lat: -0.4609055,  lng: 34.01221188,  name: 'Interlocking Ministries',    cat: 'Affiliate', url: 'https://interlockingministries.org',            addr: 'Mfangano Island, Kenya' },
        { lat: 45.89540033, lng: 28.19937185,  name: 'Moldova Mission',            cat: 'Affiliate', url: 'https://moldovamission.com',                   addr: 'Cahul, Moldova' },
        /* HQ */
        { lat: 35.65384224, lng: -83.77316782, name: 'CBM Headquarters',           cat: 'CBM',       url: 'https://childrensbibleministries.net',         addr: 'Townsend, TN' }
    ];

    locations.forEach(function (loc) {
        var color = colors[loc.cat] || '#888';
        var titleHtml = loc.url
            ? '<a href="' + loc.url + '" target="_blank" rel="noopener">' + loc.name + '</a>'
            : loc.name;
        var addrHtml = loc.addr ? '<div class="cbm-popup-address">' + loc.addr + '</div>' : '';
        var popup = '<div class="cbm-popup-title">' + titleHtml + '</div>'
            + addrHtml
            + '<div class="cbm-popup-cat">' + loc.cat + '</div>';

        L.marker([loc.lat, loc.lng], { icon: makePin(color) })
            .addTo(map)
            .bindPopup(popup, { maxWidth: 300, minWidth: 200 });
    });

    /* Force Leaflet to re-measure the container after full page load */
    setTimeout(function () { map.invalidateSize(); }, 300);
    window.addEventListener('load', function () { map.invalidateSize(); });

    } /* end initMap */

    /* Dynamically load Leaflet JS, then call initMap */
    var s = document.createElement('script');
    s.src = 'https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.js';
    s.crossOrigin = '';
    s.onload = function () { initMap(); };
    /* Fallback: try unpkg if jsdelivr fails */
    s.onerror = function () {
        var s2 = document.createElement('script');
        s2.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
        s2.crossOrigin = '';
        s2.onload = function () { initMap(); };
        document.head.appendChild(s2);
    };
    document.head.appendChild(s);
}());
</script>

<?php wp_footer(); ?>
</body>
</html>
