<?php /* Template Name: Released Time Bible Education */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Released Time Bible Education | Children's Bible Ministries</title>
<meta name="description" content="Released Time Bible Education allows children to receive Bible instruction during the public school day — legally, voluntarily, and off school property.">
<?php wp_head(); ?>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }
#cbm-rte { min-height: 100vh; display: flex; flex-direction: column; }
.cbm-hero-band { background: linear-gradient(135deg, rgba(10,32,64,0.88) 0%, rgba(26,54,93,0.80) 100%); padding: 9rem 2rem 4.5rem; }
.cbm-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb { font-size: 0.82rem; color: rgba(255,255,255,0.5); margin-bottom: 0.85rem; }
.cbm-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; }
.cbm-hero-band h1 { font-size: clamp(2.2rem,5vw,3.4rem); font-weight: 700; color: #fff; letter-spacing: -0.02em; }
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
.cbm-section h3 { font-size: 1.15rem; font-weight: 700; color: #0a2040; margin: 1.75rem 0 0.6rem; }
.cbm-section p { font-size: 1.02rem; color: #374f6b; line-height: 1.8; margin-bottom: 1.2rem; font-family: 'Arial', sans-serif; }
.cbm-section--dark p { color: rgba(255,255,255,0.8); }
.cbm-section ul { margin: 0 0 1.25rem 1.5rem; }
.cbm-section ul li { font-size: 1rem; color: #374f6b; line-height: 1.8; margin-bottom: 0.3rem; font-family: 'Arial', sans-serif; }
.cbm-link-arrow { display: inline-block; color: #1a6fc4; font-weight: 600; font-size: 0.95rem; text-decoration: none; margin-top: 0.4rem; }
.cbm-link-arrow:hover { text-decoration: underline; }
.cbm-link-arrow::after { content: ' →'; }
.cbm-info-box { background: #eef4fb; border-left: 4px solid #1a365d; border-radius: 0 8px 8px 0; padding: 1.5rem 2rem; margin: 1.5rem 0; }
.cbm-info-box p { margin: 0; color: #1a2940; }
.cbm-cta-section { background: #0a2040; padding: 65px 40px; text-align: center; }
.cbm-cta-section h2 { font-size: clamp(1.6rem,3vw,2.1rem); color: #fff; font-weight: 700; margin-bottom: 1rem; }
.cbm-cta-section p { font-size: 1rem; color: rgba(255,255,255,0.78); max-width: 540px; margin: 0 auto 2.2rem; line-height: 1.7; font-family: 'Arial', sans-serif; }
.cbm-btn-row { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }
.cbm-btn { display: inline-block; padding: 13px 28px; background: #fff; color: #0a2040; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; }
.cbm-btn:hover { background: #e8eef5; }
.cbm-btn-green { display: inline-block; padding: 13px 28px; background: #2e7d32; color: #fff; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; }
.cbm-footer { background: #060f1e; padding: 30px 40px; color: rgba(255,255,255,0.4); font-family: 'Arial', sans-serif; font-size: 12px; }
.cbm-footer-inner { max-width: 1200px; margin: 0 auto; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 18px; }
.cbm-footer a { color: rgba(255,255,255,0.5); text-decoration: none; }
@media (max-width: 768px) { .cbm-section { padding: 48px 22px; } .cbm-cta-section { padding: 48px 22px; } .cbm-btn-row { flex-direction: column; align-items: center; } }
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('cbm-nav'); ?>

<div id="cbm-rte">

<div class="cbm-hero-band">
    <div class="cbm-hero-inner">
        <p class="cbm-breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> &rsaquo; Programs &amp; Outreach &rsaquo; Released Time Bible Education</p>
        <h1>Released Time Bible Education</h1>
    </div>
</div>

<div class="cbm-intro-band">
    <p>Released Time Bible Education is Children's Bible Ministries' application of a long-established and legally recognized educational option that allows children to receive Bible-based instruction during the public school day — with written parental permission, off school property, and at no cost to families.</p>
</div>

<section class="cbm-section cbm-section--white">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Legal Framework</span>
        <h2>What Is Released Time for Religious Instruction?</h2>
        <p>Released Time is a constitutionally protected option that allows parents to choose religious instruction for their children during the school day. Participation is voluntary, instruction occurs off public school property, and programs are not funded or administered by the public school.</p>
        <div class="cbm-info-box">
            <p>Released Time was upheld by the U.S. Supreme Court in <em>Zorach v. Clauson</em> (1952) and has been practiced in the United States for over a century. It is fully legal and continues to be used in communities across the country today.</p>
        </div>
        <p>Children's Bible Ministries uses this legal framework to provide Bible-based instruction — which is why we refer to our programs as <strong>Bible Released Time</strong>. While Released Time itself applies broadly to religious instruction, CBM's purpose is clear and specific: to teach the Bible and share the gospel with children who may otherwise have little or no access to biblical instruction.</p>
    </div>
</section>

<section class="cbm-section cbm-section--light">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">How It Works</span>
        <h2>The Released Time Model</h2>
        <p>In CBM's Bible Released Time programs, children are released from public school at a designated time during the school day to attend Bible instruction at a nearby off-campus location. Classes are taught by trained CBM missionaries and volunteers, and all instruction is rooted in Scripture.</p>
        <h3>Key features of CBM's Released Time programs:</h3>
        <ul>
            <li>Voluntary participation, requiring written parental consent</li>
            <li>Instruction takes place off public school property</li>
            <li>Programs receive no public school funding</li>
            <li>Bible teaching is the sole focus of instruction</li>
            <li>Classes are taught by trained CBM workers</li>
            <li>Provided completely free of charge to all families</li>
        </ul>
        <h3>What Children Learn</h3>
        <p>Each class focuses on age-appropriate Bible teaching designed to help children understand the Scriptures, hear the gospel clearly, and grow in their understanding of God's Word. CBM's Released Time curriculum is built around the same biblical foundation used across all CBM ministry expressions.</p>
    </div>
</section>

<section class="cbm-section cbm-section--white">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">Who Can Start a Program</span>
        <h2>Bringing Released Time to Your Community</h2>
        <p>Bible Released Time programs can be established in communities where CBM missionaries or trained volunteers are present and willing to lead. Churches, parents, and community leaders who desire to see children in their area receive biblical instruction are often key partners in getting a program started.</p>
        <p>CBM provides training, curriculum, and support resources for those looking to establish or lead a Released Time ministry. If you are interested in learning more about starting or supporting a program in your area, CBM is glad to help you explore next steps.</p>
        <a href="<?php echo home_url('/released-time-starter-kit'); ?>" class="cbm-link-arrow">View the Released Time Starter Kit</a>
    </div>
</section>

<section class="cbm-section cbm-section--light">
    <div class="cbm-section-inner cbm-section-inner--narrow">
        <span class="cbm-section-label">The 3 C's Connection</span>
        <h2>Classes Within the Ministry Model</h2>
        <p>Bible Released Time is one of the primary expressions of the first "C" in CBM's ministry model — <strong>Classes</strong>. Together with Correspondence Lessons and Camps, Released Time Bible Education forms part of a cohesive, Scripture-centered approach to reaching children and families with the gospel.</p>
        <a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>" class="cbm-link-arrow">Learn More About the Ministry Model: The 3 C's</a>
    </div>
</section>

<section class="cbm-cta-section">
    <h2>Reach Children in Your Community</h2>
    <p>Bible Released Time is one of the most effective tools available for reaching public school children with the gospel during the school week.</p>
    <div class="cbm-btn-row">
        <a href="<?php echo home_url('/released-time-starter-kit'); ?>" class="cbm-btn">Get the Starter Kit</a>
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
