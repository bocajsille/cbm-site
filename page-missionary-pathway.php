<?php /* Template Name: Missionary Pathway */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Missionary Pathway | Children's Bible Ministries</title>
<meta name="description" content="Explore the CBM Missionary Pathway — structured preparation, church-connected training, and long-term ministry placement for those called to missionary service.">
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
.s h3{font-size:1.15rem;font-weight:700;color:#0a2040;margin:1.75rem 0 .6rem;}
.s p{font-size:1.02rem;color:#374f6b;line-height:1.8;margin-bottom:1.2rem;font-family:'Arial',sans-serif;}
.sd p{color:rgba(255,255,255,.8);}
.s ul{margin:0 0 1.25rem 1.5rem;}
.s ul li{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:.3rem;font-family:'Arial',sans-serif;}
.la{display:inline-block;color:#1a6fc4;font-weight:600;font-size:.95rem;text-decoration:none;margin-top:.4rem;}
.la:hover{text-decoration:underline;}.la::after{content:' →';}
/* Steps */
.steps{list-style:none;margin:0;padding:0;counter-reset:steps;}
.steps li{counter-increment:steps;padding:1.25rem 1.25rem 1.25rem 4rem;position:relative;border-bottom:1px solid #e8eef5;font-size:1rem;color:#374f6b;line-height:1.7;font-family:'Arial',sans-serif;}
.steps li::before{content:counter(steps);position:absolute;left:0;top:1.1rem;width:2rem;height:2rem;background:#0a2040;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;}
.steps li strong{color:#0a2040;display:block;margin-bottom:.25rem;}
.faq{margin-top:2rem;}
.faq-item{border-bottom:1px solid #e8eef5;padding:1.25rem 0;}
.faq-item h3{font-size:1rem;font-weight:700;color:#0a2040;margin-bottom:.5rem;}
.faq-item p{font-size:.95rem;color:#374f6b;line-height:1.7;margin:0;font-family:'Arial',sans-serif;}
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
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('cbm-nav'); ?>
<div id="cbm-wrap">

<div class="cbm-hero">
<div class="cbm-hero-inner">
<p class="cbm-bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; <a href="<?php echo home_url('/training-and-calling');?>">Training &amp; Calling</a> &rsaquo; Missionary Pathway</p>
<h1>The Missionary Pathway</h1>
</div></div>

<div class="cbm-intro"><p>Children's Bible Ministries provides a structured, church-connected pathway for those sensing a call to missionary service. The Missionary Pathway is designed to help individuals discern God's calling, prepare spiritually and practically, and serve under biblical oversight in partnership with the local church.</p></div>

<div class="s sw"><div class="si sin">
<span class="lbl">Church Connection</span>
<h2>Recognized and Sent by the Local Church</h2>
<p>Missionary service begins with personal calling — but calling is confirmed in the context of the local church. CBM encourages prospective missionaries to:</p>
<ul>
<li>Demonstrate faithful service in their local congregation</li>
<li>Exhibit spiritual maturity and doctrinal alignment</li>
<li>Show evidence of character, humility, and teachability</li>
<li>Seek counsel from local church leadership</li>
</ul>
<p>CBM works alongside churches to ensure missionaries are trained, supported, and accountable throughout their service.</p>
<a href="<?php echo home_url('/church-partnerships');?>" class="la">Is Your Church Exploring How to Send You?</a>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lbl">The Process</span>
<h2>Preparation and Evaluation</h2>
<p>The Missionary Pathway includes intentional preparation and evaluation to ensure readiness for gospel ministry within the CBM context. Steps typically include:</p>
<ol class="steps">
<li><strong>Initial Inquiry &amp; Conversation</strong>Reach out to CBM to begin an informal conversation about your sense of calling, background, and interest in ministry.</li>
<li><strong>Church Recommendation</strong>CBM works with your local church to understand your spiritual maturity, character, and readiness for ministry consideration.</li>
<li><strong>Short-Term Service</strong>Many prospective missionaries begin through a <a href="<?php echo home_url('/summer-seasonal-staff');?>">summer staff</a> opportunity, <a href="<?php echo home_url('/internship-program');?>">internship</a>, or <a href="<?php echo home_url('/serve-on-a-mission-trip');?>">mission trip</a> to gain hands-on ministry experience.</li>
<li><strong>CBM Internship Program</strong>The CBM Internship provides structured training, mentorship, and evaluation within a ministry context — the most common entry point for those pursuing long-term service.</li>
<li><strong>Ministry Placement &amp; Partnership Development</strong>Following training and evaluation, CBM works with missionaries and their supporting churches to identify a ministry placement and build a support network.</li>
<li><strong>Long-Term Missionary Service</strong>Missionaries enter full-time service supported by the local church, CBM, and a team of prayer and financial partners.</li>
</ol>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lbl">Where You'll Serve</span>
<h2>Ministry Opportunities Within the CBM Network</h2>
<p>CBM missionaries serve in the United States and internationally. Where you serve is determined through prayer, gifting, opportunity, and ministry need.</p>
<p>Ministry opportunities may include both frontline and behind-the-scenes roles within the following contexts:</p>
<ul>
<li>Bible clubs and Released Time Bible Education outreach programs</li>
<li>Camps and seasonal ministries</li>
<li>International missions through CBM affiliate networks</li>
<li>Administration, maintenance, hospitality, communications, and operations</li>
</ul>
<p>Every role is centered on faithfully communicating God's Word and helping the next generation grow in faith.</p>
<a href="<?php echo home_url('/programs-and-outreach');?>" class="la">Explore CBM Programs &amp; Outreach</a>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lbl">Common Questions</span>
<h2>Frequently Asked Questions</h2>
<div class="faq">
<div class="faq-item"><h3>Where would I serve?</h3><p>CBM missionaries serve across the United States and internationally. Location is determined through prayer, gifting, opportunity, and ministry need in partnership with CBM leadership and your home church.</p></div>
<div class="faq-item"><h3>What kind of ministry would I be doing?</h3><p>CBM missionaries are primarily called to teach Scripture to children and youth and to equip others to do the same. At the same time, ministry extends beyond visible teaching moments to include administration, maintenance, food service, hospitality, and more — all working together to support the mission.</p></div>
<div class="faq-item"><h3>What should I be doing now?</h3><p>Many begin through the CBM Internship (best for ages 18–29), volunteering with CBM during the school-year or summer, or ongoing service in the local church. This allows individuals to grow, be evaluated, and be equipped before stepping into long-term ministry roles.</p></div>
<div class="faq-item"><h3>Can I talk to someone before making a decision?</h3><p>Yes — we welcome that conversation. Pursuing ministry is a significant step, and we want to help you discern God's leading with clarity and confidence.</p></div>
</div>
</div></div>

<div class="cta">
<h2>Start the Conversation</h2>
<p>If you are exploring a calling to ministry or have questions about the Missionary Pathway, we would love to connect with you.</p>
<div class="br">
<a href="<?php echo home_url('/internship-program');?>" class="btn">Explore the Internship Program</a>
<a href="<?php echo home_url('/the-missionary-call');?>" class="btng">Read About the Missionary Call</a>
</div>
</div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>
</div>
<?php wp_footer();?>
</body></html>
