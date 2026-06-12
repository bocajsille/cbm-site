<?php /* Template Name: Financials Financial Accountability */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Financial Accountability | Children's Bible Ministries</title>
<meta name="description" content="CBM is committed to financial transparency, responsible stewardship, and accountability to donors, churches, and ministry partners.">
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}body{font-family:'Segoe UI',system-ui,sans-serif;background:#fff;color:#1a2940;}
#w{min-height:100vh;display:flex;flex-direction:column;}
.h{background:linear-gradient(135deg,rgba(10,32,64,.88),rgba(26,54,93,.80));padding:9rem 2rem 4.5rem;}
.hi{max-width:1100px;margin:0 auto;}.bc{font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.85rem;}.bc a{color:rgba(255,255,255,.5);text-decoration:none;}
.h h1{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;color:#fff;letter-spacing:-.02em;}
.ib{background:#1a365d;padding:3rem 2rem;text-align:center;}
.ib p{max-width:820px;margin:0 auto;font-size:clamp(1rem,1.8vw,1.2rem);color:rgba(255,255,255,.88);line-height:1.8;font-family:'Arial',sans-serif;}
.s{padding:70px 40px;}.sw{background:#fff;}.sl{background:#f5f7fa;}
.si{max-width:1100px;margin:0 auto;}.sin{max-width:780px;margin:0 auto;}
.lb{display:inline-block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#546e8a;margin-bottom:.9rem;}
.s h2{font-size:clamp(1.7rem,3.5vw,2.5rem);font-weight:700;color:#0a2040;margin-bottom:1.25rem;letter-spacing:-.02em;}
.s h3{font-size:1.05rem;font-weight:700;color:#0a2040;margin:1.5rem 0 .5rem;}
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.s ul{margin:0 0 1.25rem 1.5rem;}.s ul li{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:.3rem;font-family:'Arial',sans-serif;}
.placeholder-note{background:#fff8e1;border:1px solid #ffe082;border-radius:8px;padding:1.25rem 1.5rem;margin:1.5rem 0;}
.placeholder-note p{font-size:.9rem;color:#5d4037;margin:0;font-family:'Arial',sans-serif;}
.la{display:inline-block;color:#1a6fc4;font-weight:600;font-size:.95rem;text-decoration:none;margin-top:.4rem;}
.la:hover{text-decoration:underline;}.la::after{content:' →';}
.cta{background:#0a2040;padding:65px 40px;text-align:center;}
.cta h2{font-size:clamp(1.6rem,3vw,2.1rem);color:#fff;font-weight:700;margin-bottom:1rem;}
.cta p{font-size:1rem;color:rgba(255,255,255,.78);max-width:540px;margin:0 auto 2.2rem;line-height:1.7;font-family:'Arial',sans-serif;}
.br{display:flex;flex-wrap:wrap;gap:14px;justify-content:center;}
.btn{display:inline-block;padding:13px 28px;background:#fff;color:#0a2040;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}.btn:hover{background:#e8eef5;}
.btng{display:inline-block;padding:13px 28px;background:#2e7d32;color:#fff;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}.btng:hover{background:#1b5e20;}
.ft{background:#060f1e;padding:30px 40px;color:rgba(255,255,255,.4);font-family:'Arial',sans-serif;font-size:12px;}
.ft-i{max-width:1200px;margin:0 auto;border-top:1px solid rgba(255,255,255,.08);padding-top:18px;}.ft a{color:rgba(255,255,255,.5);text-decoration:none;}
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; <a href="<?php echo home_url('/impact-and-accountability');?>">Impact &amp; Accountability</a> &rsaquo; Financial Accountability</p>
<h1>Financial Accountability</h1>
</div></div>
<div class="ib"><p>Children's Bible Ministries is committed to financial transparency, responsible stewardship, and accountability to the donors, churches, and ministry partners who make Gospel ministry possible. Every gift entrusted to CBM is stewarded with integrity and Gospel-centered purpose.</p></div>

<div class="s sw"><div class="si sin">
<span class="lb">Our Commitment</span>
<h2>Stewarding Resources for Gospel Ministry</h2>
<p>CBM recognizes that every donation, volunteer hour, prayer, and partnership represents trust. Financial resources are stewarded with the goal of maximizing Gospel impact through ministry programming, missionary support, training and discipleship, property stewardship, outreach opportunities, and ministry development.</p>
<h3>Accountability &amp; Oversight</h3>
<p>CBM prioritizes healthy accountability through board oversight, ministry leadership collaboration, financial review processes, church and donor partnerships, and operational transparency. The Board of Directors provides financial oversight and governance alongside the Global Directors and financial support personnel.</p>
<a href="<?php echo home_url('/board-of-directors');?>" class="la">Meet the Board of Directors</a>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Financial Documents</span>
<h2>Financial Information &amp; Reports</h2>
<p>Annual reports, ministry updates, and financial information are made available to help churches, donors, and ministry partners better understand the work and impact of the ministry. Additional financial information may be available upon request.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Add downloadable financial documents here — 990 forms, audited financial statements, or ministry financial summaries. Upload PDFs to the media library and link them. Consider using a clean card grid matching the Annual Impact Report format.</p></div>
<a href="<?php echo home_url('/annual-impact-report');?>" class="la">View Annual Impact Reports</a>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lb">Property Stewardship</span>
<h2>Stewarding Ministry Properties Year-Round</h2>
<p>CBM believes ministry properties should be actively stewarded for Gospel impact throughout the year. Most CBM camps and ministry locations operate year-round through Bible classes and clubs, camps and retreats, volunteer project weeks, hosting pastors and missionaries, homeschool events, and church and ministry partnerships.</p>
<p>This stewardship philosophy allows ministry locations to serve children, families, churches, missionaries, and ministry partners in multiple ways throughout the year — making responsible use of every resource God has entrusted to the ministry.</p>
</div></div>

<div class="cta"><h2>Partner With CBM</h2><p>Your giving supports missionaries, ministry locations, training programs, and the proclamation of God's Word to children and youth around the world.</p>
<div class="br">
<a href="https://www.continuetogive.com/cbm" target="_blank" rel="noopener" class="btn">Give to CBM</a>
<a href="<?php echo home_url('/annual-impact-report');?>" class="btng">View Impact Reports</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>
</div><?php wp_footer();?></body></html>
