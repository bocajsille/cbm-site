<?php
/**
 * CBM 404 Template
 * Place in child theme root.
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
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; }

#cbm-404 { min-height: 100vh; display: flex; flex-direction: column; }

.cbm-404-body {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 8rem 2rem 5rem;
}
.cbm-404-number {
    font-size: clamp(6rem, 15vw, 10rem);
    font-weight: 800;
    color: #e8eef5;
    line-height: 1;
    margin-bottom: 0.5rem;
    letter-spacing: -0.04em;
}
.cbm-404-body h1 {
    font-size: clamp(1.5rem, 3vw, 2rem);
    font-weight: 700;
    color: #1a2940;
    margin-bottom: 1rem;
}
.cbm-404-body p {
    font-size: 1.05rem;
    color: #546e8a;
    line-height: 1.7;
    max-width: 480px;
    margin-bottom: 2.5rem;
}
.cbm-404-btn {
    background: #1a365d;
    color: #fff;
    text-decoration: none;
    padding: 0.85rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    transition: background 0.2s, transform 0.15s;
}
.cbm-404-btn:hover { background: #2c5282; transform: translateY(-2px); }

.cbm-page-footer {
    background: #1a2940;
    padding: 2rem;
    text-align: center;
}
.cbm-page-footer p { font-size: 0.875rem; color: rgba(255,255,255,0.45); }
.cbm-page-footer a { color: rgba(255,255,255,0.6); text-decoration: none; }
.cbm-page-footer a:hover { color: #fff; }
</style>

<div id="cbm-404">

    <?php get_template_part('cbm-nav'); ?>

    <div class="cbm-404-body">
        <div class="cbm-404-number">404</div>
        <h1>Page Not Found</h1>
        <p>Sorry, we couldn't find that page. It may have moved or the link might be incorrect.</p>
        <a href="<?php echo home_url(); ?>" class="cbm-404-btn">Return Home</a>
    </div>

    <footer class="cbm-page-footer">
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries. All rights reserved.</p>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
