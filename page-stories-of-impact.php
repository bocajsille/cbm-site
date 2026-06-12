<?php /* Template Name: Stories of Impact */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stories of Impact | Children's Bible Ministries</title>
<meta name="description" content="Read stories of lives changed through camps, Bible teaching, missions, Released Time, internships, and gospel ministry through CBM.">
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
body{font-family:'Segoe UI',system-ui,sans-serif;background:#fff;color:#1a2940;}
#cbm-wrap{min-height:100vh;display:flex;flex-direction:column;}
.cbm-hero{background:linear-gradient(135deg,rgba(10,32,64,.88),rgba(26,54,93,.80));padding:9rem 2rem 4.5rem;}
.cbm-hero-inner{max-width:1100px;margin:0 auto;}
.cbm-bc{font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.85rem;}
.cbm-bc a{color:rgba(255,255,255,.5);text-decoration:none;}
.cbm-hero h1{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;color:#fff;letter-spacing:-.02em;}
.cbm-intro{background:#1a365d;padding:3rem 2rem;text-align:center;}
.cbm-intro p{max-width:820px;margin:0 auto;font-size:clamp(1rem,1.8vw,1.2rem);color:rgba(255,255,255,.88);line-height:1.8;font-family:'Arial',sans-serif;}
.s{padding:70px 40px;}
.sw{background:#fff;}.sl{background:#f5f7fa;}.sd{background:#0a2040;}
.si{max-width:1100px;margin:0 auto;}
.sin{max-width:780px;margin:0 auto;}
.lbl{display:inline-block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#546e8a;margin-bottom:.9rem;}
.sd .lbl{color:rgba(255,255,255,.45);}
.s h2{font-size:clamp(1.7rem,3.5vw,2.5rem);font-weight:700;color:#0a2040;margin-bottom:1.25rem;letter-spacing:-.02em;}
.sd h2{color:#fff;}
.s h3{font-size:1.15rem;font-weight:700;color:#0a2040;margin:0 0 .75rem;}
.s p{font-size:1.02rem;color:#374f6b;line-height:1.8;margin-bottom:1.2rem;font-family:'Arial',sans-serif;}
.sd p{color:rgba(255,255,255,.8);}
/* Story block */
.story-block{display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:center;margin:3rem 0;}
.story-block.reverse{direction:rtl;}
.story-block.reverse>*{direction:ltr;}
.story-img{width:100%;aspect-ratio:4/3;background:linear-gradient(135deg,#b8c8d8,#d0dce8);border-radius:12px;display:flex;align-items:center;justify-content:center;color:#6a7f90;font-size:13px;font-family:'Arial',sans-serif;}
.story-quote{border-left:4px solid #1a365d;padding:1rem 1.5rem;margin:1.5rem 0;background:#f5f7fa;border-radius:0 8px 8px 0;}
.story-quote p{font-style:italic;color:#546e8a;margin:0;font-size:1rem;font-family:'Arial',sans-serif;}
.story-quote cite{display:block;font-size:.82rem;color:#888;margin-top:.5rem;font-style:normal;}
.placeholder-note{background:#fff8e1;border:1px solid #ffe082;border-radius:8px;padding:1.25rem 1.5rem;margin:1.5rem 0;}
.placeholder-note p{font-size:.9rem;color:#5d4037;margin:0;font-family:'Arial',sans-serif;}
.la{display:inline-block;color:#1a6fc4;font-weight:600;font-size:.95rem;text-decoration:none;margin-top:.4rem;}
.la:hover{text-decoration:underline;}.la::after{content:' →';}
.cta{background:#0a2040;padding:65px 40px;text-align:center;}
.cta h2{font-size:clamp(1.6rem,3vw,2.1rem);color:#fff;font-weight:700;margin-bottom:1rem;}
.cta p{font-size:1rem;color:rgba(255,255,255,.78);max-width:540px;margin:0 auto 2.2rem;line-height:1.7;font-family:'Arial',sans-serif;}
.br{display:flex;flex-wrap:wrap;gap:14px;justify-content:center;}
.btn{display:inline-block;padding:13px 28px;background:#fff;color:#0a2040;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}
.btn:hover{background:#e8eef5;}
.btng{display:inline-block;padding:13px 28px;background:#2e7d32;color:#fff;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}
.ft{background:#060f1e;padding:30px 40px;color:rgba(255,255,255,.4);font-family:'Arial',sans-serif;font-size:12px;}
.ft-i{max-width:1200px;margin:0 auto;border-top:1px solid rgba(255,255,255,.08);padding-top:18px;}
.ft a{color:rgba(255,255,255,.5);text-decoration:none;}
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}.story-block{grid-template-columns:1fr;}.story-block.reverse{direction:ltr;}}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('cbm-nav'); ?>
<div id="cbm-wrap">

<div class="cbm-hero">
<div class="cbm-hero-inner">
<p class="cbm-bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; <a href="<?php echo home_url('/impact-and-accountability');?>">Impact &amp; Accountability</a> &rsaquo; Stories of Impact</p>
<h1>Stories of Impact</h1>
</div></div>

<div class="cbm-intro"><p>Every number represents a person. Every ministry effort represents an opportunity for someone to encounter the life-changing Gospel and the truth of God's Word. Across camps, Bible classes, mission fields, retreats, internships, and ministry partnerships, God continues to work through Children's Bible Ministries in powerful and deeply personal ways.</p></div>

<div class="s sw"><div class="si">
<span class="lbl">Camps &amp; Retreat Ministry</span>
<h2>Camps &amp; Retreat Ministry</h2>
<p>Across CBM camps and retreat ministries, children, teens, families, churches, and ministry leaders encounter God's Word in environments designed for discipleship, encouragement, and spiritual growth. Many individuals first hear the Gospel, surrender to ministry, or take important spiritual steps during camp and retreat experiences.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Replace the story blocks below with real stories, testimonials, photos, and videos from camp and retreat ministry. Add as many story blocks as needed.</p></div>
<div class="story-block">
<div class="story-img">[ Photo: Camp ministry moment ]</div>
<div>
<h3>"I Came as a Camper…"</h3>
<div class="story-quote"><p>"I first attended a CBM camp as a child. Years later, I returned as summer staff — and eventually sensed the Lord leading me into ministry."</p><cite>— CBM Missionary</cite></div>
<p>Stories like this reflect what God does when children are faithfully exposed to Scripture in environments designed for His glory. Add your full story content here.</p>
<a href="<?php echo home_url('/christian-camps-camp-ministry');?>" class="la">Explore Camp Ministry</a>
</div>
</div>
</div></div>

<div class="s sl"><div class="si">
<span class="lbl">Bible Teaching &amp; Released Time</span>
<h2>Bible Teaching &amp; Released Time</h2>
<p>Through Released Time Bible Education and Bible classes in communities across the country, children are hearing the Gospel and engaging with Scripture — often for the very first time.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Add real stories, photos, and testimonials from Released Time and classroom Bible ministry here.</p></div>
<div class="story-block reverse">
<div class="story-img">[ Photo: Bible class ]</div>
<div>
<h3>A Child Encounters the Gospel</h3>
<p>Released Time Bible Education creates opportunities to share God's Word with children who might not otherwise hear it. Add your full story content here.</p>
<a href="<?php echo home_url('/released-time-bible-education');?>" class="la">Learn About Released Time</a>
</div>
</div>
</div></div>

<div class="s sw"><div class="si">
<span class="lbl">Mission Trips &amp; Partnerships</span>
<h2>Mission Trips &amp; Global Partnerships</h2>
<p>Short-term mission trips connect individuals and churches to established CBM ministry contexts around the world. These partnerships strengthen long-term ministry, encourage missionaries, and often spark a deeper personal calling to gospel work.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Add stories, testimonials, and photos from mission trips, international partnerships (Honduras, Moldova, Kenya, UK), and church partnership experiences here.</p></div>
</div></div>

<div class="s sl"><div class="si">
<span class="lbl">Internships &amp; Missionary Development</span>
<h2>Internships &amp; Missionary Development</h2>
<p>The CBM Internship Program and Missionary Pathway have helped shape the lives and callings of countless individuals who now serve in ministry across the United States and internationally.</p>
<div class="placeholder-note"><p>⚠️ <strong>Webmaster note:</strong> Add stories and testimonials from former interns and current missionaries about how CBM shaped their calling and ministry here.</p></div>
</div></div>

<div class="cta">
<h2>Partner in the Mission</h2>
<p>The work represented in these stories is made possible through the faithfulness of churches, volunteers, missionaries, prayer partners, and financial supporters.</p>
<div class="br">
<a href="<?php echo home_url('/give');?>" class="btn">Support the Ministry</a>
<a href="<?php echo home_url('/serve-on-a-mission-trip');?>" class="btng">Serve with CBM</a>
</div>
</div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>
</div>
<?php wp_footer();?>
</body></html>
