<?php /* Template Name: The Sending Church */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Sending Church | Children's Bible Ministries</title>
<meta name="description" content="Learn how your church can commission, send, and support a missionary through CBM in partnership with gospel ministry to children and youth.">
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
.sd h2{color:#fff;}
.s h3{font-size:1.1rem;font-weight:700;color:#0a2040;margin:1.5rem 0 .5rem;}
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.sd p{color:rgba(255,255,255,.8);}
.s ul{margin:0 0 1.25rem 1.5rem;}.s ul li{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:.4rem;font-family:'Arial',sans-serif;}
.la{display:inline-block;color:#1a6fc4;font-weight:600;font-size:.95rem;text-decoration:none;margin-top:.4rem;}
.la:hover{text-decoration:underline;}.la::after{content:' →';}
.steps{list-style:none;margin:0;padding:0;counter-reset:step;}
.steps li{position:relative;padding:0 0 1.5rem 3.2rem;font-size:1rem;color:#374f6b;line-height:1.8;font-family:'Arial',sans-serif;}
.steps li:last-child{padding-bottom:0;}
.steps li::before{counter-increment:step;content:counter(step);position:absolute;left:0;top:0;width:2.2rem;height:2.2rem;border-radius:50%;background:#1a365d;color:#fff;font-weight:700;font-size:.95rem;display:flex;align-items:center;justify-content:center;font-family:'Arial',sans-serif;}
.steps li strong{display:block;color:#0a2040;font-size:1.05rem;margin-bottom:.2rem;}
.form-note{background:#fff8e1;border:1px solid #ffe082;border-radius:8px;padding:1.25rem 1.5rem;margin-top:1.5rem;}
.form-note h3{font-size:1.05rem;font-weight:700;color:#5d4037;margin-bottom:.5rem;}
.form-note p{font-size:.9rem;color:#5d4037;margin:0;font-family:'Arial',sans-serif;}
.faq{border-top:1px solid #e2e8f0;}
.faq-item{border-bottom:1px solid #e2e8f0;padding:1.5rem 0;}
.faq-item h3{margin:0 0 .5rem;}
.cta{background:#0a2040;padding:65px 40px;text-align:center;}
.cta h2{font-size:clamp(1.6rem,3vw,2.1rem);color:#fff;font-weight:700;margin-bottom:1rem;}
.cta p{font-size:1rem;color:rgba(255,255,255,.78);max-width:560px;margin:0 auto 2.2rem;line-height:1.7;font-family:'Arial',sans-serif;}
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
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; <a href="<?php echo home_url('/church-partnerships');?>">Church Partnerships</a> &rsaquo; The Sending Church</p>
<h1>The Sending Church</h1>
</div></div>

<div class="ib"><p>At Children's Bible Ministries, we believe missionaries are best recognized, commissioned, and sent through the local church. A sending church does more than recommend a person for ministry — it prayerfully confirms a calling, provides spiritual encouragement, and partners in the work of the Christian Gospel. CBM exists to come alongside churches in that process.</p></div>

<div class="s sw"><div class="si sin">
<span class="lb">Why It Matters</span>
<h2>Why the Local Church Matters</h2>
<p>Throughout Scripture, God often calls individuals from within the life of the church, and that calling is strengthened through the wisdom, affirmation, and support of spiritual leaders and ministry relationships.</p>
<p>A sending church plays a vital role in helping a missionary move from interest to readiness. When a church knows the individual, observes their faithfulness, and affirms their calling, that partnership creates a strong foundation for long-term ministry.</p>
<p>CBM values the local church not as a formality in the process, but as an essential partner in identifying and sending gospel workers.</p>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Definition</span>
<h2>What Does It Mean to Be a Sending Church?</h2>
<p>A sending church is not simply a financial sponsor, nor is it a requirement of a sending church to financially support their missionary (though it is recommended if possible). It is a church body that stands behind a missionary with prayer, encouragement, and ongoing partnership.</p>
<p>A church may serve as a sending church by:</p>
<ul>
<li>Affirming a missionary candidate's calling and character</li>
<li>Commissioning the missionary for service</li>
<li>Providing prayer support and spiritual encouragement</li>
<li>Participating financially as part of the missionary's support team</li>
<li>Maintaining a relationship with the missionary over time</li>
<li>Partnering with CBM Member Care</li>
<li>Rejoicing in the fruit of ministry and gospel impact</li>
</ul>
<p>Sending is not only about launching someone into ministry. It is about continuing to walk with them as they serve.</p>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lb">Who Might Be Called</span>
<h2>Who Might a Church Send?</h2>
<p>CBM is eager to partner with churches who identify and intentionally prepare faithful church members who show potential for service in full-time ministry and missions in any or all of the following ways:</p>
<ul>
<li>Faithfulness in serving where they are</li>
<li>A growing love for God's Word and the gospel</li>
<li>A burden for children, youth, and discipleship</li>
<li>Spiritual maturity and teachability</li>
<li>A love for and unity with God's people</li>
<li>Affirmation from pastors, mentors, or ministry leaders</li>
<li>A willingness to follow the Lord wherever He leads</li>
</ul>
<p>Many CBM missionaries come through church recommendation, internship experience, camp ministry, or other ministry relationships that reveal both gifting and calling over time.</p>
<a href="<?php echo home_url('/missionary-pathway');?>" class="la">Learn More About the Missionary Pathway</a>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Our Role</span>
<h2>How CBM Partners with Churches</h2>
<p>CBM links arms with the local church to together reach more children and youth with the Christian Gospel. When a church is considering sending a missionary, CBM helps by:</p>
<ul>
<li>Providing a clear pathway for training and ministry preparation</li>
<li>Offering mentorship and guidance throughout the process</li>
<li>Helping candidates understand support-based ministry</li>
<li>Identifying ministry opportunities that align with gifting and need</li>
<li>Walking in partnership with both the church and the missionary candidate</li>
</ul>
<p>Our desire is to help churches send workers who are spiritually grounded, practically prepared, and equipped for faithful service.</p>
<h3>Understanding Support-Based Ministry</h3>
<p>CBM missionaries typically serve through a support-based model, raising a personal team of prayer and financial partners who stand with them in ministry. This creates a network of people personally invested in the missionary's work, allows more ministry resources to be directed toward expanding gospel efforts, and gives missionaries flexibility to follow God's leading without financial delay.</p>
<p>Support-raising is not about asking people for money. It is about inviting others to participate in what God is doing through identifiable and proven gospel work.</p>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lb">The Journey</span>
<h2>What the Process Usually Looks Like</h2>
<p>Each situation is unique, but many churches walk through a process like this:</p>
<ol class="steps">
<li><strong>A Calling Begins to Take Shape</strong>A church member begins to sense the Lord's leading toward ministry, often through faithfulness in current service and a growing burden for gospel work. Sometimes members don't see this on their own — being approached by church leaders who recognize this potential can be a powerful catalyst into ministry.</li>
<li><strong>The Church Affirms and Encourages</strong>Pastors or church leaders begin conversations, observe the individual's readiness, and help discern whether this may be a call worth pursuing.</li>
<li><strong>CBM Comes Alongside the Process</strong>CBM connects with the individual and the church to provide guidance, answer questions, and help identify next steps.</li>
<li><strong>Training, Mentorship, and Preparation</strong>The candidate may move through internships, ministry experiences, or other forms of preparation as the pathway becomes clearer.</li>
<li><strong>Ongoing Partnership in Ministry</strong>As the individual moves into ministry, the sending church remains a meaningful part of the relationship through prayer, encouragement, and support.</li>
</ol>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Frequently Asked Questions</span>
<h2>Common Questions from Church Leaders</h2>
<div class="faq">
<div class="faq-item">
<h3>Why does CBM call our workers "missionaries"?</h3>
<p>At Children's Bible Ministries, we refer to our workers as missionaries because their calling, commitment, and vocation are fully centered on advancing the gospel through full-time ministry.</p>
</div>
</div>
<div class="form-note">
<p>⚠️ <strong>Webmaster note:</strong> Additional FAQ items from the client's source content should be added here in an accordion format once received. Keep all internal links opening in the same tab and PDF/external links opening in a new tab.</p>
</div>
</div></div>

<div class="s sw"><div class="si sin">
<span class="lb">Eternal Impact</span>
<h2>A Partnership with Eternal Impact</h2>
<p>When a church sends a missionary, it extends its ministry far beyond its own walls. Through that partnership, the church is helping bring Scripture to children and youth, strengthen ministry efforts, and invest in the next generation of gospel workers.</p>
<p>CBM missionaries serve in many settings, both stateside and internationally, but the mission remains the same: making God's Word known and helping children and youth grow in Christ. This is why the sending church matters so deeply. It is part of the mission from the very beginning.</p>
</div></div>

<div class="s sl"><div class="si sin">
<span class="lb">Get Started</span>
<h2>Start a Conversation About Sending a Missionary</h2>
<p>If your church is interested in sending or recommending someone to serve with Children's Bible Ministries, we would be honored to walk with you through that process. This form is not a commitment, just a starting point for conversation.</p>
<div class="form-note">
<h3>Church Inquiry Form</h3>
<p>⚠️ <strong>Webmaster note:</strong> Add the church sending inquiry form here. Recommended fields: Church Name, Church Location, Website/Facebook, Contact Name, Role at Church, Email, Phone, Whether a specific candidate is in mind (and their name/connection to the church if so), Church's readiness level, and Additional questions/goals. Route submissions to CBM leadership and trigger the standard auto-reply.</p>
</div>
<p style="margin-top:1.5rem;">Church leaders who would like a printable overview can also download a guide:</p>
<div class="form-note">
<p>⚠️ <strong>Webmaster note:</strong> "Sending a Missionary — A Guide for Churches" PDF has not yet been created. Link a download button here once available.</p>
</div>
</div></div>

<div class="cta"><h2>Partner in Sending Gospel Workers</h2><p>Whether your church already has a specific individual in mind or is simply exploring what it looks like to send a missionary, we are here to walk with you through that process.</p>
<div class="br">
<a href="<?php echo home_url('/missionary-pathway');?>" class="btn">Missionary Pathway</a>
<a href="<?php echo home_url('/church-partnerships');?>" class="btng">Church Partnerships</a>
</div></div>

<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety');?>">Child Protection Policy</a></p></div></footer>

</div><?php wp_footer();?></body></html>
