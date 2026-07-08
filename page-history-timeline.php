<?php /* Template Name: History and Timeline */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>History &amp; Timeline | Children's Bible Ministries</title>
<meta name="description" content="Since 1935, God has built Children's Bible Ministries into a nationwide and international Gospel ministry. Explore our history and milestones.">
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
.sd h2{color:#fff;}.s h3{font-size:1.1rem;font-weight:700;color:#0a2040;margin:1.75rem 0 .6rem;}
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.sd p{color:rgba(255,255,255,.8);}
.s ul{margin:0 0 1.25rem 1.5rem;}.s ul li{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:.3rem;font-family:'Arial',sans-serif;}
/* Stats at a glance */
.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin:2.5rem 0;}
.stat{background:#0a2040;border-radius:10px;padding:1.5rem;text-align:center;}
.stat-num{font-size:2rem;font-weight:700;color:#fff;line-height:1;}
.stat-lbl{font-size:.8rem;color:rgba(255,255,255,.65);font-family:'Arial',sans-serif;margin-top:.35rem;line-height:1.4;}
/* Timeline */
.timeline{position:relative;margin:2.5rem 0;}
.timeline::before{content:'';position:absolute;left:80px;top:0;bottom:0;width:2px;background:#dce2ea;}
.tl-item{display:grid;grid-template-columns:80px 1fr;gap:1.5rem;margin-bottom:1.5rem;position:relative;}
.tl-year{font-size:1rem;font-weight:700;color:#0a2040;text-align:right;padding-top:.25rem;padding-right:1.25rem;position:relative;}
.tl-year::after{content:'';position:absolute;right:-6px;top:.45rem;width:10px;height:10px;background:#0a2040;border-radius:50%;border:2px solid #fff;box-shadow:0 0 0 2px #0a2040;}
.tl-content{background:#f5f7fa;border-radius:8px;padding:1rem 1.25rem;}
.tl-content p{font-size:.92rem;color:#374f6b;line-height:1.7;margin:0;font-family:'Arial',sans-serif;}
/* Era sections */
.era{background:#f5f7fa;border-radius:12px;padding:2rem;margin-bottom:1.5rem;}
.era-label{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#2e7d32;margin-bottom:.5rem;}
.era h3{font-size:1.2rem;font-weight:700;color:#0a2040;margin-bottom:.75rem;}
.era p{font-size:.95rem;color:#374f6b;line-height:1.75;margin-bottom:.75rem;font-family:'Arial',sans-serif;}
.era ul{margin:0 0 0 1.25rem;}.era ul li{font-size:.95rem;color:#374f6b;line-height:1.75;margin-bottom:.25rem;font-family:'Arial',sans-serif;}
/* Then & Now */
.then-now{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;margin-top:2rem;}
.tn-box{border-radius:10px;padding:1.5rem;}
.tn-box.then{background:#e8eef5;}.tn-box.now{background:#0a2040;}
.tn-box h4{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;margin-bottom:.75rem;}
.tn-box.then h4{color:#546e8a;}.tn-box.now h4{color:rgba(255,255,255,.6);}
.tn-box ul{list-style:none;margin:0;padding:0;}
.tn-box ul li{font-size:.9rem;padding:.4rem 0;border-bottom:1px solid rgba(0,0,0,.07);font-family:'Arial',sans-serif;}
.tn-box.then ul li{color:#374f6b;}
.tn-box.now ul li{color:rgba(255,255,255,.85);border-bottom-color:rgba(255,255,255,.1);}
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
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}.stats{grid-template-columns:1fr 1fr;}.then-now{grid-template-columns:1fr;}.timeline::before{left:60px;}.tl-item{grid-template-columns:60px 1fr;}}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; Leadership &amp; History &rsaquo; History &amp; Timeline</p>
<h1>History &amp; Timeline</h1>
</div></div>
<div class="ib"><p>"How God Has Been Building CBM Since 1935" — What began with a small group of missionaries teaching Bible lessons to children has grown into a network of camps, missionaries, Released Time programs, training initiatives, church partnerships, and international ministry. The mission has never changed: teaching God's Word to children and youth.</p></div>

<div class="s sw"><div class="si sin">
<span class="lb">A Story Bigger Than Ourselves</span>
<h2>A Story Bigger Than Ourselves</h2>
<p>In 1935, a burden for children and a commitment to God's Word gave birth to a ministry that would eventually reach across the United States and around the world. Yet the mission has never changed: <em>Teaching God's Word to children and youth.</em> For nearly a century, God has used ordinary people who simply said "yes" to His calling.</p>
<div class="stats">
<div class="stat"><div class="stat-num">1935</div><div class="stat-lbl">Year CBM Founded</div></div>
<div class="stat"><div class="stat-num">24</div><div class="stat-lbl">Ministry Locations</div></div>
<div class="stat"><div class="stat-num">90+</div><div class="stat-lbl">Years of Faithful Ministry</div></div>
</div>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">The Story of CBM</span>
<h2>Ministry Through the Eras</h2>

<div class="era">
<div class="era-label">1935–1955</div>
<h3>The Early Years — A Burden for Children</h3>
<p>Walter and Marie Jensen helped establish what would become Children's Bible Ministries through Bible lessons, Scripture memory work, and outreach to public school children. Early camps were established in Florida, North Carolina, and Virginia, laying the foundation for future growth.</p>
<p>Under George Curtice's leadership, CBM expanded rapidly across multiple states. During this period, the ministry grew from 8 missionaries to approximately 80 missionaries and was reaching an estimated 350,000 boys and girls each month through public school ministry.</p>
</div>

<div class="era">
<div class="era-label">1956–1983</div>
<h3>Establishing a Foundation — Camps, Curriculum, and Expansion</h3>
<p>This era saw the development of many of the ministry tools and locations that would shape CBM for decades to come, including:</p>
<ul>
<li>Camp Victory opening in Alabama</li>
<li>The creation of Bible correspondence lessons</li>
<li>The first Released Time Bible program (1967)</li>
<li>The introduction of Bible Mailbox Club (1971)</li>
<li>Expansion of camp ministry</li>
<li>The first missionary training initiatives</li>
</ul>
</div>

<div class="era">
<div class="era-label">1984–1999</div>
<h3>Seasons of Challenge &amp; Change — Faithfulness Through Transition</h3>
<p>Like many long-standing ministries, CBM experienced seasons of both growth and difficulty. These years included major organizational restructuring, legal challenges involving public school ministry, headquarters relocation, new partnerships and ministry opportunities, and the development of stronger governance structures. Through each challenge, God continued to preserve and strengthen the ministry.</p>
</div>

<div class="era">
<div class="era-label">2000–2013</div>
<h3>Building for the Future — A Permanent Home</h3>
<p>The purchase of <a href="<?php echo home_url('/tuckaleechee-retreat-center');?>">Tuckaleechee Retreat Center</a> in 2000 marked a major turning point. What began as two buildings and 50 acres would eventually become the ministry's Global Headquarters and training center. During this period, new cabins and facilities were built, Camp Grace opened, Camp Red Arrow joined the ministry, and additional ministry properties were acquired.</p>
</div>

<div class="era">
<div class="era-label">2014–Present</div>
<h3>A New Generation of Growth — Training, Sending, and Expanding</h3>
<ul>
<li>Launch of the <a href="<?php echo home_url('/internship-program');?>">Internship Program</a> (2014)</li>
<li>Acquisition of Camp Ozone (2015)</li>
<li>CBM's first overseas missionary deployment (2018)</li>
<li>Establishment of CBM of the United Kingdom (2019)</li>
<li>Expansion into Honduras (2019)</li>
<li>Acquisition of an additional 50 acres adjacent to headquarters (2021)</li>
<li>Construction of the Missionary Training Center (2023)</li>
</ul>
<p>What began as a ministry focused primarily on the United States now serves internationally while continuing to invest heavily in training future Gospel workers.</p>
</div>
</div></div>

<div class="s sw"><div class="si">
<span class="lb">Key Milestones</span>
<h2>Timeline of Key Milestones</h2>
<div class="timeline">
<div class="tl-item"><div class="tl-year">1935</div><div class="tl-content"><p>CBM founded</p></div></div>
<div class="tl-item"><div class="tl-year">1938</div><div class="tl-content"><p>Camp Gilead established</p></div></div>
<div class="tl-item"><div class="tl-year">1948</div><div class="tl-content"><p>National Office established</p></div></div>
<div class="tl-item"><div class="tl-year">1955</div><div class="tl-content"><p>New Life Camp purchased</p></div></div>
<div class="tl-item"><div class="tl-year">1961</div><div class="tl-content"><p>Camp Victory opened</p></div></div>
<div class="tl-item"><div class="tl-year">1967</div><div class="tl-content"><p>First Released Time Bible program</p></div></div>
<div class="tl-item"><div class="tl-year">1971</div><div class="tl-content"><p>Bible Mailbox Club introduced</p></div></div>
<div class="tl-item"><div class="tl-year">1985</div><div class="tl-content"><p>50th Anniversary</p></div></div>
<div class="tl-item"><div class="tl-year">2000</div><div class="tl-content"><p>Tuckaleechee Retreat Center purchased — CBM Global Headquarters established</p></div></div>
<div class="tl-item"><div class="tl-year">2003</div><div class="tl-content"><p>Camp Grace opened</p></div></div>
<div class="tl-item"><div class="tl-year">2014</div><div class="tl-content"><p>Internship Program launched</p></div></div>
<div class="tl-item"><div class="tl-year">2015</div><div class="tl-content"><p>Camp Ozone acquired</p></div></div>
<div class="tl-item"><div class="tl-year">2018</div><div class="tl-content"><p>First overseas missionary sent</p></div></div>
<div class="tl-item"><div class="tl-year">2019</div><div class="tl-content"><p>CBM of the United Kingdom established &bull; CBM of Honduras joins CBM</p></div></div>
<div class="tl-item"><div class="tl-year">2021</div><div class="tl-content"><p>Additional 50 acres acquired adjacent to headquarters</p></div></div>
<div class="tl-item"><div class="tl-year">2023</div><div class="tl-content"><p>Missionary Training Center opens</p></div></div>
</div>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Then &amp; Now</span>
<h2>What God Has Done</h2>
<div class="then-now">
<div class="tn-box then"><h4>Then — 1935</h4><ul>
<li>A handful of missionaries</li>
<li>Bible lessons &amp; memory work</li>
<li>One region</li>
<li>First camp in the 1930s</li>
<li>Entirely U.S.-focused</li>
</ul></div>
<div class="tn-box now"><h4>Now — Today</h4><ul>
<li>108+ missionaries serving</li>
<li>Camps, Released Time, internships, missionary training, missions</li>
<li>24 ministry locations worldwide</li>
<li>International ministry in UK, Honduras, Kenya, Moldova</li>
<li>U.S. &amp; international ministry</li>
</ul></div>
</div>
<p style="margin-top:2rem;">The history of Children's Bible Ministries is ultimately not a story about buildings, programs, or organizational growth. It is a story of God's faithfulness.</p>
</div></div>

<div class="cta"><h2>The Mission Continues</h2><p>For nearly a century, God has used ordinary people who said "yes." The mission remains the same: teaching God's Word to children and youth and equipping others to do the same.</p>
<div class="br">
<a href="<?php echo home_url('/scope-gospel-impact');?>" class="btn">Scope &amp; Global Impact</a>
<a href="<?php echo home_url('/missionary-pathway');?>" class="btng">Join the Mission</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>
</div><?php wp_footer();?></body></html>
