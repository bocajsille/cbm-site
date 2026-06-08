<?php
/**
 * CBM General Page Template
 * Handles all pages that don't have a specific custom template assigned.
 * Place in child theme root to override parent theme's page.php.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }

#cbm-page { min-height: 100vh; display: flex; flex-direction: column; }

/* Page Hero / Title Bar */
.cbm-page-hero {
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    padding: 7rem 2rem 3.5rem;
    text-align: left;
}
.cbm-page-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-page-hero h1 {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.02em;
    line-height: 1.15;
}
.cbm-page-hero .cbm-breadcrumb {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.55);
    margin-bottom: 0.75rem;
}
.cbm-page-hero .cbm-breadcrumb a {
    color: rgba(255,255,255,0.55);
    text-decoration: none;
}
.cbm-page-hero .cbm-breadcrumb a:hover { color: rgba(255,255,255,0.85); }

/* Page Content */
.cbm-page-content {
    flex: 1;
    max-width: 860px;
    margin: 0 auto;
    padding: 4rem 2rem 5rem;
    width: 100%;
}
.cbm-page-content h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1a2940;
    margin: 2.5rem 0 1rem;
    letter-spacing: -0.01em;
}
.cbm-page-content h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1a2940;
    margin: 2rem 0 0.75rem;
}
.cbm-page-content p {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #374f6b;
    margin-bottom: 1.25rem;
}
.cbm-page-content ul, .cbm-page-content ol {
    margin: 0 0 1.25rem 1.5rem;
}
.cbm-page-content li {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #374f6b;
    margin-bottom: 0.4rem;
}
.cbm-page-content a {
    color: #1a6fc4;
    text-decoration: underline;
}
.cbm-page-content a:hover { color: #1558a0; }
.cbm-page-content strong { color: #1a2940; }

/* Nothing Found / Draft state */
.cbm-nothing-found {
    text-align: center;
    padding: 5rem 2rem;
    flex: 1;
}
.cbm-nothing-found h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 1rem;
}
.cbm-nothing-found p {
    font-size: 1rem;
    color: #546e8a;
    line-height: 1.7;
}

/* Simple Footer */
.cbm-page-footer {
    background: #1a2940;
    padding: 2rem;
    text-align: center;
}
.cbm-page-footer p {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.45);
}
.cbm-page-footer a {
    color: rgba(255,255,255,0.6);
    text-decoration: none;
}
.cbm-page-footer a:hover { color: #fff; }
</style>

<div id="cbm-page">

    <?php get_template_part('cbm-nav'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="cbm-page-hero">
            <div class="cbm-page-hero-inner">
                <p class="cbm-breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> &rsaquo; <?php the_title(); ?></p>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="cbm-page-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; else : ?>

        <div class="cbm-page-hero">
            <div class="cbm-page-hero-inner">
                <h1>Page Not Found</h1>
            </div>
        </div>

        <div class="cbm-nothing-found">
            <h2>This page is coming soon.</h2>
            <p>We're currently building out this section of the site.<br>Check back soon or <a href="<?php echo home_url(); ?>">return home</a>.</p>
        </div>

    <?php endif; ?>

    <footer class="cbm-page-footer">
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries. All rights reserved. &nbsp;&middot;&nbsp; <a href="<?php echo home_url(); ?>">Home</a></p>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
