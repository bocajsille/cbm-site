<?php /* Template Name: Prayer Calendar */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prayer Calendar | Children's Bible Ministries</title>
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}body{font-family:'Segoe UI',system-ui,sans-serif;background:#fff;color:#1a2940;}
#w{min-height:100vh;display:flex;flex-direction:column;}
.h{background:linear-gradient(135deg,rgba(10,32,64,.88),rgba(26,54,93,.80));padding:9rem 2rem 4.5rem;}
.hi{max-width:1100px;margin:0 auto;}.bc{font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.85rem;}.bc a{color:rgba(255,255,255,.5);text-decoration:none;}
.h h1{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;color:#fff;letter-spacing:-.02em;}
.body-section{flex:1;padding:80px 40px;max-width:680px;margin:0 auto;text-align:center;}
.body-section h2{font-size:1.6rem;font-weight:700;color:#0a2040;margin-bottom:1rem;}
.body-section p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.5rem;font-family:'Arial',sans-serif;}
.note{background:#fff8e1;border:1px solid #ffe082;border-radius:8px;padding:1rem 1.25rem;margin-bottom:1.5rem;text-align:left;}
.note p{font-size:.875rem;color:#5d4037;margin:0;font-family:'Arial',sans-serif;}
.btn{display:inline-block;padding:13px 28px;background:#0a2040;color:#fff;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;margin:4px;}
.ft{background:#060f1e;padding:30px 40px;color:rgba(255,255,255,.4);font-family:'Arial',sans-serif;font-size:12px;}
.ft-i{max-width:1200px;margin:0 auto;border-top:1px solid rgba(255,255,255,.08);padding-top:18px;}.ft a{color:rgba(255,255,255,.5);text-decoration:none;}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; Prayer &amp; Engagement &rsaquo; Prayer Calendar</p>
<h1>Prayer Calendar</h1>
</div></div>
<div class="body-section">
<h2>The Monthly Prayer Calendar Is for Prayer Partners</h2>
<p>The CBM Prayer Calendar is a confidential monthly resource shared with registered CBM Prayer Partners. Each month, ministry locations throughout the CBM family submit prayer requests that are compiled and distributed to those who have committed to praying with us.</p>
<div class="note"><p>⚠️ <strong>Webmaster note:</strong> Once a Prayer Partner signup system is in place, this page can either embed a current-month calendar for logged-in partners, provide a download link after email confirmation, or redirect to the Become a Prayer Partner signup page. For now, direct visitors to sign up.</p></div>
<p>Becoming a Prayer Partner is free and easy. Sign up to receive the monthly Prayer Calendar and begin praying alongside the CBM family.</p>
<a href="<?php echo home_url('/become-a-prayer-partner');?>" class="btn">Join the CBM Prayer Team</a>
</div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc.</p></div></footer>
</div><?php wp_footer();?></body></html>
