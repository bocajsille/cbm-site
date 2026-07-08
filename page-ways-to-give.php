<?php /* Template Name: Ways to Give */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ways to Give | Children's Bible Ministries</title>
<meta name="description" content="Give to Children's Bible Ministries through online gifts, mail, donor-advised funds, missionary support, planned giving, and strategic ministry funds.">
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
.s h2{font-size:clamp(1.7rem,3.5vw,2.5rem);font-weight:700;color:#0a2040;margin-bottom:1.25rem;letter-spacing:-.02em;}
.s h3{font-size:1.1rem;font-weight:700;color:#0a2040;margin:1.75rem 0 .5rem;}
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.s ul{margin:0 0 1.25rem 1.5rem;}.s ul li{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:.3rem;font-family:'Arial',sans-serif;}
.give-embed{background:#f5f7fa;border:2px dashed #c5d0de;border-radius:10px;padding:3rem;text-align:center;margin:2rem 0;}
.give-embed p{color:#546e8a;font-size:.9rem;font-family:'Arial',sans-serif;margin-bottom:1rem;}
.give-embed a{display:inline-block;padding:14px 32px;background:#2e7d32;color:#fff;font-family:'Arial',sans-serif;font-size:16px;font-weight:700;text-decoration:none;border-radius:4px;}
.fund-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:2rem;}
.fund-card{background:#fff;border:1px solid #dce2ea;border-radius:10px;padding:1.75rem;}
.fund-card h3{margin-top:0;font-size:1rem;font-weight:700;color:#0a2040;margin-bottom:.5rem;}
.fund-card p{font-size:.875rem;color:#546e8a;line-height:1.65;margin-bottom:1rem;font-family:'Arial',sans-serif;}
.fund-card a{display:inline-block;padding:9px 20px;background:#0a2040;color:#fff;text-decoration:none;border-radius:4px;font-size:.82rem;font-weight:700;font-family:'Arial',sans-serif;}
.info-box{background:#f5f7fa;border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;}
.info-box h3{margin-top:0;}
.info-box p{margin:0;font-size:.92rem;}
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
@media(max-width:900px){.fund-grid{grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}}
@media(max-width:500px){.fund-grid{grid-template-columns:1fr;}}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; Give&rsaquo; Ways to Give</p>
<h1>Ways to Give</h1>
</div></div>
<div class="ib"><p>Your Giving Helps Teach God's Word to Children and Youth. Every gift to Children's Bible Ministries helps advance Gospel-centered ministry through camps, Bible teaching, missionary training, church partnerships, mission trips, and outreach to children and youth around the world.</p></div>

<div class="s sw"><div class="si sin">
<span class="lb">Give Online</span>
<h2>Give Online</h2>
<div class="give-embed">
<p>⚠️ <strong>Webmaster note:</strong> Embed the giving form here (continuetogive.com/cbm or your preferred giving platform). The form should include a fund/designation dropdown with options for: Where Most Needed, Global Impact Fund, Expansion Fund, Capital Campaign, Special Projects, Missionary Support, Mission Trip Support, Pastor &amp; Missionary Rest &amp; Renewal Fund, Other.</p>
<a href="https://www.continuetogive.com/cbm" target="_blank" rel="noopener">Give Now at ContinueToGive.com</a>
</div>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Our Supporters</span>
<h2>A Ministry Supported by God's People</h2>
<p>Since 1935, Children's Bible Ministries has been supported by individuals, families, churches, and ministry partners who believe in the importance of teaching God's Word to children and youth. CBM is not funded or governed by a denomination, convention, or church hierarchy. Instead, the ministry is supported by believers from a variety of church backgrounds who share a common commitment to the Gospel.</p>
</div></div>

<div class="s sw"><div class="si">
<span class="lb">Featured Giving Opportunities</span>
<h2>Featured Giving Opportunities</h2>
<div class="fund-grid">
<div class="fund-card"><h3>Global Impact Fund</h3><p>Flexible, ministry-wide support for the ongoing work of CBM. Helps strengthen Gospel outreach, missionary service, ministry development, and opportunities throughout the year.</p><a href="<?php echo home_url('/strategic-funds');?>">Learn More</a></div>
<div class="fund-card"><h3>Expansion Fund</h3><p>Helps increase ministry capacity through infrastructure, training, property development, and strategic growth opportunities.</p><a href="<?php echo home_url('/strategic-funds');?>">Learn More</a></div>
<div class="fund-card"><h3>Capital Campaign</h3><p>Helps retire remaining investor notes on the Training Center property, unlocking future site development for missionary training and ministry expansion.</p><a href="<?php echo home_url('/strategic-funds');?>">Learn More</a></div>
</div>
<a href="<?php echo home_url('/strategic-funds');?>" class="la" style="margin-top:1.5rem;">Explore All Strategic Giving Opportunities</a>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Other Ways to Give</span>
<h2>Other Ways to Give</h2>
<div class="info-box"><h3>Give by Mail</h3><p>Make checks payable to <strong>CBM</strong> and mail to:<br><strong>CBM, P.O. Box 278, Townsend, TN 37882</strong><br>Please include any gift designation in the memo line or with an enclosed note.</p></div>
<div class="info-box"><h3>Give by Phone</h3><p>Contact the CBM Global Office for assistance: <strong>865-448-1200</strong></p></div>
<div class="info-box"><h3>Donor-Advised Funds</h3><p>CBM welcomes gifts through donor-advised funds. Donors may recommend grants to Children's Bible Ministries through their DAF provider.</p></div>
<div class="info-box"><h3>Planned Giving</h3><p>Planned gifts help strengthen CBM ministry for future generations — including estate gifts, beneficiary designations, charitable IRA distributions, and other long-term giving strategies.</p></div>
<div class="info-box"><h3>Memorial &amp; Honor Gifts</h3><p>Gifts may be given in memory of a loved one or in honor of an individual, family, church, group, or ministry partner.</p></div>
<h2 style="margin-top:2.5rem;">Tax Information</h2>
<p>Children's Bible Ministries is a registered 501(c)(3) nonprofit organization. Contributions are tax-deductible to the full extent permitted by law.</p>
<p><strong>Federal Tax ID: 59-066-2267</strong></p>
</div></div>

<div class="cta"><h2>Your Generosity Makes Gospel Ministry Possible</h2><p>Every camp, missionary, training initiative, and ministry opportunity exists because faithful supporters have chosen to invest in work they believe is making an eternal difference.</p>
<div class="br">
<a href="https://www.continuetogive.com/cbm" target="_blank" rel="noopener" class="btn">Give Now</a>
<a href="<?php echo home_url('/donor-care');?>" class="btng">Questions? Contact Donor Care</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; Federal Tax ID: 59-066-2267 &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a></p></div></footer>
</div><?php wp_footer();?></body></html>
