<?php /* Template Name: Annual Impact Report */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Annual Impact Report | Children's Bible Ministries</title>
<meta name="description" content="Explore annual ministry impact reports from CBM highlighting gospel outreach, stewardship, missionary training, and lives impacted through God's Word.">
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}body{font-family:'Segoe UI',system-ui,sans-serif;background:#fff;color:#1a2940;}
#w{min-height:100vh;display:flex;flex-direction:column;}
.h{background:linear-gradient(135deg,rgba(10,32,64,.88),rgba(26,54,93,.80));padding:9rem 2rem 4.5rem;}
.hi{max-width:1100px;margin:0 auto;}.bc{font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.85rem;}.bc a{color:rgba(255,255,255,.5);text-decoration:none;}
.h h1{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;color:#fff;letter-spacing:-.02em;}
.ib{background:#1a365d;padding:3rem 2rem;text-align:center;}
.ib p{max-width:820px;margin:0 auto;font-size:clamp(1rem,1.8vw,1.2rem);color:rgba(255,255,255,.88);line-height:1.8;font-family:'Arial',sans-serif;}
.s{padding:70px 40px;}.sw{background:#fff;}.sl{background:#f5f7fa;}.sd{background:#0a2040;}
.si{max-width:1100px;margin:0 auto;}.sin{max-width:780px;margin:0 auto;}
.lb{display:inline-block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#546e8a;margin-bottom:.9rem;}
.sd .lb{color:rgba(255,255,255,.45);}
.s h2{font-size:clamp(1.7rem,3.5vw,2.5rem);font-weight:700;color:#0a2040;margin-bottom:1.25rem;letter-spacing:-.02em;}
.sd h2{color:#fff;}.s h3{font-size:1.1rem;font-weight:700;color:#0a2040;margin:1.5rem 0 .5rem;}
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.sd p{color:rgba(255,255,255,.8);}
/* Stats */
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin:2.5rem 0;}
.stat{background:#fff;border:1px solid #dce2ea;border-radius:10px;padding:1.75rem 1.25rem;text-align:center;}
.stat-num{font-size:2.2rem;font-weight:700;color:#0a2040;line-height:1;margin-bottom:.4rem;}
.stat-lbl{font-size:.8rem;color:#546e8a;font-family:'Arial',sans-serif;line-height:1.4;}
.sd .stat{background:#0d2035;border-color:rgba(255,255,255,.1);}
.sd .stat-num{color:#fff;}
.sd .stat-lbl{color:rgba(255,255,255,.6);}
/* Report download cards */
.report-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2rem;}
.report-card{background:#f5f7fa;border:1px solid #dce2ea;border-radius:10px;overflow:hidden;}
.report-cover{width:100%;aspect-ratio:8.5/11;background:linear-gradient(135deg,#1a365d,#0a2040);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.5);font-size:12px;font-family:'Arial',sans-serif;}
.report-body{padding:1.25rem;}
.report-body h4{font-size:.95rem;font-weight:700;color:#0a2040;margin-bottom:.35rem;}
.report-body p{font-size:.85rem;color:#546e8a;margin-bottom:.75rem;font-family:'Arial',sans-serif;}
.report-body a{display:inline-block;padding:8px 18px;background:#0a2040;color:#fff;text-decoration:none;border-radius:4px;font-size:.82rem;font-weight:700;font-family:'Arial',sans-serif;}
.report-body a:hover{background:#1a365d;}
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
@media(max-width:900px){.stats{grid-template-columns:1fr 1fr;}.report-grid{grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}}
@media(max-width:500px){.stats{grid-template-columns:1fr 1fr;}.report-grid{grid-template-columns:1fr;}}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; <a href="<?php echo home_url('/impact-and-accountability');?>">Impact &amp; Accountability</a> &rsaquo; Annual Impact Report</p>
<h1>Annual Impact Report</h1>
</div></div>
<div class="ib"><p>Each and every year since 1935, Children's Bible Ministries has had the privilege of witnessing God work through Bible camps, Bible teaching, correspondence lessons, community outreach, leadership development, church partnerships, and discipleship ministry around the world. These reports represent lives impacted through the consistent teaching of God's Word.</p></div>

<div class="s sd"><div class="si">
<span class="lb">Ministry Impact at a Glance</span>
<h2>2025 Ministry Highlights</h2>
<div class="placeholder-note" style="background:rgba(255,255,0,.07);border-color:rgba(255,255,0,.2);"><p style="color:rgba(255,255,255,.7);">⚠️ <strong>Webmaster note:</strong> Replace these numbers with current-year actuals.</p></div>
<div class="stats">
<div class="stat"><div class="stat-num">79,566</div><div class="stat-lbl">Children &amp; Youth Reached</div></div>
<div class="stat"><div class="stat-num">5,726</div><div class="stat-lbl">Professions of Faith</div></div>
<div class="stat"><div class="stat-num">108</div><div class="stat-lbl">Missionaries Serving</div></div>
<div class="stat"><div class="stat-num">24</div><div class="stat-lbl">Camps &amp; Ministry Locations</div></div>
<div class="stat"><div class="stat-num">19</div><div class="stat-lbl">Internship Participants</div></div>
<div class="stat"><div class="stat-num">90+</div><div class="stat-lbl">Years of Faithful Ministry</div></div>
<div class="stat"><div class="stat-num">23</div><div class="stat-lbl">Ministry Locations Worldwide</div></div>
<div class="stat"><div class="stat-num">100<span style="font-size:1.2rem;">ac</span></div><div class="stat-lbl">Missionary Training Property</div></div>
</div>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lb">Stories Behind the Numbers</span>
<h2>Every Number Is a Person</h2>
<p>Every statistic represents a person, a family, a church, or a ministry relationship impacted through the teaching of God's Word. Across camps, classrooms, churches, retreats, mission fields, and ministry partnerships, God continues to work in powerful and deeply personal ways.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Add embedded videos, story pull quotes, and ministry photography here. Alternating image/story layouts work best. See Stories of Impact page for format reference.</p></div>
<a href="<?php echo home_url('/stories-of-impact');?>" class="la">Read Stories of Impact</a>
</div></div>

<div class="s sl"><div class="si">
<span class="lb">Stewardship</span>
<h2>Stewardship &amp; Accountability</h2>
<p>Children's Bible Ministries is committed to faithfully stewarding the resources, relationships, and ministry opportunities entrusted to us. We recognize that every donation, volunteer hour, prayer, and partnership represents trust — and we steward that trust with integrity, transparency, and Gospel-centered purpose.</p>
<div class="stats" style="margin-top:1.5rem;">
<div class="stat"><div class="stat-num">1935</div><div class="stat-lbl">Year CBM Founded</div></div>
<div class="stat"><div class="stat-num">2000</div><div class="stat-lbl">Headquarters Relocation</div></div>
<div class="stat"><div class="stat-num">2014</div><div class="stat-lbl">Internship Program Launch</div></div>
<div class="stat"><div class="stat-num">2022</div><div class="stat-lbl">Training Center Opening</div></div>
</div>
<a href="<?php echo home_url('/financials-financial-accountability');?>" class="la">View Financial Accountability</a>
</div></div>

<div class="s sw"><div class="si">
<span class="lb">Download Reports</span>
<h2>Annual Impact Reports</h2>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Upload PDF report files to the media library and replace the # href links below with the actual PDF URLs. Add cover image thumbnails for each report card.</p></div>
<div class="report-grid">
<div class="report-card"><div class="report-cover">[ 2025 Report Cover ]</div><div class="report-body"><h4>2025 Annual Impact Report</h4><p>Highlights from a year of Gospel ministry through camps, Bible teaching, missionary outreach, discipleship, and church partnership.</p><a href="#">Download PDF</a></div></div>
<div class="report-card"><div class="report-cover">[ 2024 Report Cover ]</div><div class="report-body"><h4>2024 Annual Impact Report</h4><p>Ministry stories, outreach highlights, and stewardship updates from CBM ministry efforts throughout the year.</p><a href="#">Download PDF</a></div></div>
<div class="report-card"><div class="report-cover">[ 2023 Report Cover ]</div><div class="report-body"><h4>2023 Annual Impact Report</h4><p>A look at ministry growth, Gospel outreach, and continued ministry development across CBM locations.</p><a href="#">Download PDF</a></div></div>
</div>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Looking Ahead</span>
<h2>Looking Ahead</h2>
<p>As CBM continues to grow, the ministry remains focused on faithfully teaching God's Word to children and youth while strengthening churches, equipping leaders, and expanding opportunities for Gospel impact. Future ministry goals include:</p>
<ul>
<li>Strengthening <a href="<?php echo home_url('/internship-program');?>">missionary training</a></li>
<li>Supporting growing ministry locations</li>
<li>Expanding discipleship opportunities</li>
<li>Increasing ministry accessibility</li>
<li>Developing <a href="<?php echo home_url('/missionary-pathway');?>">future Gospel workers</a></li>
</ul>
<p>With a 90+ year history of faithful long-term ministry, CBM is committed to helping people encounter the truth of God's Word for generations to come.</p>
</div></div>

<div class="cta"><h2>Partner in the Mission</h2><p>The work represented in these reports is made possible through the faithfulness of churches, volunteers, missionaries, prayer partners, and financial supporters.</p>
<div class="br">
<a href="<?php echo home_url('/ways-to-give');?>" class="btn">Support the Ministry</a>
<a href="<?php echo home_url('/stories-of-impact');?>" class="btng">Read Stories of Impact</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>
</div><?php wp_footer();?></body></html>
