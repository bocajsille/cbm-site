<?php /* Template Name: Stories of Gods Faithfulness */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stories of God's Faithfulness | Children's Bible Ministries</title>
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}body{font-family:'Segoe UI',system-ui,sans-serif;background:#fff;color:#1a2940;}
#w{min-height:100vh;display:flex;flex-direction:column;}
.h{background:linear-gradient(135deg,rgba(10,32,64,.88),rgba(26,54,93,.80));padding:9rem 2rem 4.5rem;}
.hi{max-width:1100px;margin:0 auto;}.bc{font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.85rem;}.bc a{color:rgba(255,255,255,.5);text-decoration:none;}
.h h1{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;color:#fff;letter-spacing:-.02em;}
.coming{flex:1;display:flex;align-items:center;justify-content:center;padding:80px 40px;text-align:center;}
.coming-inner{max-width:560px;}
.coming-inner h2{font-size:1.6rem;font-weight:700;color:#0a2040;margin-bottom:1rem;}
.coming-inner p{font-size:1rem;color:#546e8a;line-height:1.8;margin-bottom:1.5rem;font-family:'Arial',sans-serif;}
.coming-inner .note{background:#fff8e1;border:1px solid #ffe082;border-radius:8px;padding:1rem 1.25rem;margin-bottom:1.5rem;text-align:left;}
.coming-inner .note p{font-size:.875rem;color:#5d4037;margin:0;}
.btn{display:inline-block;padding:12px 26px;background:#0a2040;color:#fff;font-family:'Arial',sans-serif;font-size:14px;font-weight:700;text-decoration:none;border-radius:4px;margin:4px;}
.btn:hover{background:#1a365d;}
.ft{background:#060f1e;padding:30px 40px;color:rgba(255,255,255,.4);font-family:'Arial',sans-serif;font-size:12px;}
.ft-i{max-width:1200px;margin:0 auto;border-top:1px solid rgba(255,255,255,.08);padding-top:18px;}.ft a{color:rgba(255,255,255,.5);text-decoration:none;}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><?php echo <a href="<?php echo home_url();?>">Home</a> &rsaquo; Historical Ministry Narratives &rsaquo; Stories of God's Faithfulness; ?></p>
<h1><?php echo Stories of God's Faithfulness; ?></h1>
</div></div>
<div class="coming"><div class="coming-inner">
<h2>This Page Is Coming Soon</h2>
<p><?php echo Historical narratives of God's faithfulness through Children's Bible Ministries across 90+ years of gospel ministry.; ?></p>
<div class="note"><p>⚠️ <strong>Webmaster note:</strong> <?php echo No content found in PDF. Awaiting content from client. Consider featuring long-form historical stories, archival photos, and missionary testimonies.; ?></p></div>
<a href="<?php echo home_url(); ?>" class="btn">Return Home</a>
<a href="<?php echo home_url('/volunteer-opportunities'); ?>" class="btn">Get Involved</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability'); ?>">Financial Accountability</a></p></div></footer>
</div><?php wp_footer(); ?></body></html>
