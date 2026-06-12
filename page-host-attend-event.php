<?php /* Template Name: Host or Attend an Event */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upcoming Events | Children's Bible Ministries</title>
<meta name="description" content="Find upcoming events across the CBM family — retreats, camps, homeschool programs, mission trips, volunteer weeks, and ministry gatherings.">
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
.s p{font-size:1rem;color:#374f6b;line-height:1.8;margin-bottom:1.1rem;font-family:'Arial',sans-serif;}
.event-placeholder{background:#f5f7fa;border:1px solid #dce2ea;border-radius:10px;padding:2.5rem;text-align:center;margin-top:2rem;}
.event-placeholder p{color:#546e8a;font-size:.9rem;font-family:'Arial',sans-serif;margin-bottom:1rem;}
.cat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin-top:2rem;}
.cat-card{background:#fff;border:1px solid #dce2ea;border-radius:10px;padding:1.5rem;}
.cat-card h3{font-size:1rem;font-weight:700;color:#0a2040;margin-bottom:.5rem;}
.cat-card p{font-size:.875rem;color:#546e8a;line-height:1.6;margin-bottom:.75rem;font-family:'Arial',sans-serif;}
.cat-card a{font-size:.85rem;color:#1a6fc4;font-weight:600;text-decoration:none;}
.cta{background:#0a2040;padding:65px 40px;text-align:center;}
.cta h2{font-size:clamp(1.6rem,3vw,2.1rem);color:#fff;font-weight:700;margin-bottom:1rem;}
.cta p{font-size:1rem;color:rgba(255,255,255,.78);max-width:540px;margin:0 auto 2.2rem;line-height:1.7;font-family:'Arial',sans-serif;}
.br{display:flex;flex-wrap:wrap;gap:14px;justify-content:center;}
.btn{display:inline-block;padding:13px 28px;background:#fff;color:#0a2040;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}.btn:hover{background:#e8eef5;}
.btng{display:inline-block;padding:13px 28px;background:#2e7d32;color:#fff;font-family:'Arial',sans-serif;font-size:15px;font-weight:700;text-decoration:none;border-radius:4px;}.btng:hover{background:#1b5e20;}
.ft{background:#060f1e;padding:30px 40px;color:rgba(255,255,255,.4);font-family:'Arial',sans-serif;font-size:12px;}
.ft-i{max-width:1200px;margin:0 auto;border-top:1px solid rgba(255,255,255,.08);padding-top:18px;}.ft a{color:rgba(255,255,255,.5);text-decoration:none;}
@media(max-width:900px){.cat-grid{grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.s{padding:48px 22px;}.cta{padding:48px 22px;}.br{flex-direction:column;align-items:center;}}
@media(max-width:500px){.cat-grid{grid-template-columns:1fr;}}
</style>
</head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><?php get_template_part('cbm-nav'); ?>
<div id="w">
<div class="h"><div class="hi">
<p class="bc"><a href="<?php echo home_url();?>">Home</a> &rsaquo; Prayer &amp; Engagement &rsaquo; Upcoming Events</p>
<h1>Upcoming Events</h1>
</div></div>
<div class="ib"><p>Across the CBM family, events are taking place throughout the year for children, teens, families, churches, volunteers, homeschoolers, pastors, missionaries, and ministry partners. This page serves as the central hub for upcoming events throughout Children's Bible Ministries.</p></div>

<div class="s sw"><div class="si">
<span class="lb">Events Calendar</span>
<h2>Find Your Next Opportunity</h2>
<div class="event-placeholder">
<p>⚠️ <strong>Webmaster note:</strong> This page should feature a WordPress event aggregator plugin (The Events Calendar or similar) allowing each CBM Area to submit events. Events should be tagged by type (Retreats, Camps, Homeschool Events, Mission Trips, Volunteer Opportunities, Banquets, Family Events, Training Events), audience (Children, Teens, Families, Churches, Volunteers, Missionaries), and location (state/region/international). Events should automatically appear on related pages (Homeschool Events, Mission Trips, Volunteer Opportunities, Retreat Center, etc.) from one central entry.</p>
<p style="margin-top:.5rem;">Until the calendar is live, direct visitors to individual program pages below.</p>
</div>
</div></div>

<div class="s sl"><div class="si">
<span class="lb">Browse by Category</span>
<h2>Featured Event Categories</h2>
<div class="cat-grid">
<div class="cat-card"><h3>Retreats &amp; Conferences</h3><p>Men's retreats, women's retreats, family retreats, leadership retreats, and more at CBM's Retreat Center and camp locations.</p><a href="<?php echo home_url('/tuckaleechee-retreat-center');?>">Explore the Retreat Center</a></div>
<div class="cat-card"><h3>Homeschool Events</h3><p>Field trips, enrichment programs, retreats, and homeschool-specific gatherings at CBM locations.</p><a href="<?php echo home_url('/homeschool-events');?>">View Homeschool Events</a></div>
<div class="cat-card"><h3>Mission Trips</h3><p>Serve alongside missionaries through short-term ministry opportunities in the U.S. and internationally.</p><a href="<?php echo home_url('/serve-on-a-mission-trip');?>">Serve on a Mission Trip</a></div>
<div class="cat-card"><h3>Volunteer Opportunities</h3><p>Work projects, ministry teams, and seasonal service opportunities including Volunteer Work Weeks at headquarters.</p><a href="<?php echo home_url('/volunteer-opportunities');?>">View Volunteer Opportunities</a></div>
<div class="cat-card"><h3>Camp Events</h3><p>Summer camps, retreats, group ministries, and special events at CBM camp locations across the eastern U.S.</p><a href="<?php echo home_url('/christian-camps-camp-ministry');?>">Explore Camp Ministry</a></div>
<div class="cat-card"><h3>Special Events</h3><p>Open houses, banquets, sweetheart events, fundraising events, and community celebrations across the CBM family.</p><a href="<?php echo home_url('/stories-of-impact');?>">Stories of Impact</a></div>
</div>
</div></div>

<div class="cta"><h2>Stay Connected</h2><p>Events are continually being added throughout the CBM family. Sign up to receive updates about events and opportunities that match your interests.</p>
<div class="br">
<a href="<?php echo home_url('/become-a-prayer-partner');?>" class="btn">Become a Prayer Partner</a>
<a href="<?php echo home_url('/volunteer-opportunities');?>" class="btng">Volunteer with CBM</a>
</div></div>
<footer class="ft"><div class="ft-i"><p>&copy; <?php echo date('Y');?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability');?>">Financial Accountability</a></p></div></footer>
</div><?php wp_footer();?></body></html>
