<?php
/**
 * Template Name: Ministry Model The 3 Cs
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ministry Model: The 3 C's | Children's Bible Ministries</title>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<?php wp_head(); ?>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Georgia', serif; color: #1a1a1a; }

/* NAV */
<?php include(get_stylesheet_directory() . '/cbm-nav-styles.php'); ?>

/* HERO */
.cbm-hero {
  position: relative;
  min-height: 420px;
  display: flex;
  align-items: center;
  background: linear-gradient(rgba(10,30,60,0.72), rgba(10,30,60,0.72)),
              url('https://images.squarespace-cdn.com/content/v1/5ec321c2af33de48734cc929/b501ce91-c834-4f50-b1ff-5064bb688549/image-asset+%286%29.jpeg') center/cover no-repeat;
  padding: 120px 40px 80px;
}
.cbm-hero-inner { max-width: 1100px; margin: 0 auto; width: 100%; }
.cbm-breadcrumb { color: rgba(255,255,255,0.7); font-size: 13px; margin-bottom: 20px; font-family: 'Arial', sans-serif; letter-spacing: 0.5px; }
.cbm-breadcrumb a { color: rgba(255,255,255,0.7); text-decoration: none; }
.cbm-breadcrumb a:hover { color: #fff; }
.cbm-hero h1 { font-size: clamp(2.2rem, 5vw, 3.8rem); color: #fff; font-weight: 700; line-height: 1.15; }

/* INTRO BAND */
.cbm-intro-band {
  background: #0a2040;
  padding: 60px 40px;
  text-align: center;
}
.cbm-intro-band p {
  max-width: 900px;
  margin: 0 auto;
  font-size: clamp(1rem, 1.8vw, 1.2rem);
  color: rgba(255,255,255,0.92);
  line-height: 1.75;
  font-family: 'Arial', sans-serif;
}

/* BIBLE-CENTERED SECTION */
.cbm-bible-centered {
  background: #0a2040;
  padding: 70px 40px;
}
.cbm-bible-centered-inner {
  max-width: 1100px;
  margin: 0 auto;
}
.cbm-section-label {
  display: inline-block;
  background: rgba(255,255,255,0.12);
  color: #fff;
  font-family: 'Arial', sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 6px 16px;
  border-radius: 20px;
  margin-bottom: 24px;
}
.cbm-bible-centered h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  color: #fff;
  margin-bottom: 30px;
  font-weight: 700;
}
.cbm-bible-centered p {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.88);
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 18px;
  max-width: 900px;
}
.cbm-bible-centered ul {
  padding-left: 24px;
  margin-bottom: 18px;
}
.cbm-bible-centered ul li {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.88);
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 8px;
}

/* THE 3 C's SECTIONS — light background */
.cbm-c-section {
  padding: 80px 40px;
}
.cbm-c-section:nth-child(odd) { background: #f5f7fa; }
.cbm-c-section:nth-child(even) { background: #fff; }
.cbm-c-inner {
  max-width: 1100px;
  margin: 0 auto;
}
.cbm-c-header {
  display: inline-block;
  background: #0a2040;
  color: #fff;
  font-family: 'Arial', sans-serif;
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 1px;
  padding: 8px 24px;
  border-radius: 24px;
  margin-bottom: 28px;
}
.cbm-c-section h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  color: #0a2040;
  font-weight: 700;
  margin-bottom: 24px;
}
.cbm-c-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  align-items: start;
}
.cbm-c-layout.reverse { direction: rtl; }
.cbm-c-layout.reverse > * { direction: ltr; }
.cbm-c-text p {
  font-size: 1.05rem;
  color: #333;
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 18px;
}
.cbm-c-text ul {
  padding-left: 24px;
  margin-bottom: 18px;
}
.cbm-c-text ul li {
  font-size: 1.05rem;
  color: #333;
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 8px;
}
.cbm-c-text p strong { color: #0a2040; }
.cbm-c-image {
  border-radius: 16px;
  overflow: hidden;
  background: #d0d8e4;
}
.cbm-c-image img {
  width: 100%;
  height: 100%;
  min-height: 320px;
  object-fit: cover;
  display: block;
}
.cbm-c-image-placeholder {
  width: 100%;
  min-height: 320px;
  background: linear-gradient(135deg, #b8c8d8 0%, #d0dce8 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Arial', sans-serif;
  font-size: 14px;
  color: #6a7f90;
  border-radius: 16px;
}

/* Buttons within C sections */
.cbm-c-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: 24px;
}
.cbm-btn-outline {
  display: inline-block;
  padding: 12px 24px;
  border: 2px solid #0a2040;
  color: #0a2040;
  font-family: 'Arial', sans-serif;
  font-size: 14px;
  font-weight: 700;
  text-decoration: none;
  border-radius: 4px;
  transition: background 0.2s, color 0.2s;
}
.cbm-btn-outline:hover { background: #0a2040; color: #fff; }

/* ONE MODEL MANY LOCATIONS */
.cbm-one-model {
  background: #f5f7fa;
  padding: 80px 40px;
}
.cbm-one-model-inner {
  max-width: 1100px;
  margin: 0 auto;
}
.cbm-one-model h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  color: #0a2040;
  font-weight: 700;
  margin-bottom: 30px;
}
.cbm-one-model p {
  font-size: 1.05rem;
  color: #333;
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 18px;
  max-width: 900px;
}

/* CHRIST-FOCUSED SECTION */
.cbm-christ-focused {
  background: #fff;
  padding: 80px 40px;
}
.cbm-christ-focused-inner {
  max-width: 1100px;
  margin: 0 auto;
}
.cbm-christ-focused h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  color: #0a2040;
  font-weight: 700;
  margin-bottom: 30px;
}
.cbm-christ-focused p {
  font-size: 1.05rem;
  color: #333;
  line-height: 1.8;
  font-family: 'Arial', sans-serif;
  margin-bottom: 18px;
  max-width: 900px;
}

/* PARTNER CTA */
.cbm-partner-cta {
  background: #0a2040;
  padding: 70px 40px;
  text-align: center;
}
.cbm-partner-cta h2 {
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  color: #fff;
  font-weight: 700;
  margin-bottom: 36px;
}
.cbm-cta-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  justify-content: center;
}
.cbm-btn {
  display: inline-block;
  padding: 14px 30px;
  background: #fff;
  color: #0a2040;
  font-family: 'Arial', sans-serif;
  font-size: 15px;
  font-weight: 700;
  text-decoration: none;
  border-radius: 4px;
  transition: background 0.2s, color 0.2s;
}
.cbm-btn:hover { background: #e8eef5; }
.cbm-btn-green {
  display: inline-block;
  padding: 14px 30px;
  background: #2e7d32;
  color: #fff;
  font-family: 'Arial', sans-serif;
  font-size: 15px;
  font-weight: 700;
  text-decoration: none;
  border-radius: 4px;
  transition: background 0.2s;
}
.cbm-btn-green:hover { background: #1b5e20; }

/* FOOTER */
.cbm-footer {
  background: #060f1e;
  padding: 60px 40px 30px;
  color: rgba(255,255,255,0.7);
  font-family: 'Arial', sans-serif;
  font-size: 14px;
}
.cbm-footer-inner { max-width: 1200px; margin: 0 auto; }
.cbm-footer-logo { margin-bottom: 30px; }
.cbm-footer-logo img { height: 50px; }
.cbm-footer-bottom {
  border-top: 1px solid rgba(255,255,255,0.1);
  padding-top: 20px;
  margin-top: 40px;
  font-size: 12px;
  color: rgba(255,255,255,0.4);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .cbm-hero { padding: 100px 24px 60px; }
  .cbm-intro-band, .cbm-bible-centered, .cbm-c-section, .cbm-one-model, .cbm-christ-focused, .cbm-partner-cta { padding: 50px 24px; }
  .cbm-c-layout { grid-template-columns: 1fr; gap: 30px; }
  .cbm-c-layout.reverse { direction: ltr; }
  .cbm-cta-buttons { flex-direction: column; align-items: center; }
  .cbm-c-buttons { flex-direction: column; }
}
</style>
</head>
<body>

<?php get_template_part('cbm-nav'); ?>

<!-- HERO -->
<section class="cbm-hero">
  <div class="cbm-hero-inner">
    <div class="cbm-breadcrumb">
      <a href="/">Home</a> &rsaquo; <a href="/about">About</a> &rsaquo; Who We Are
    </div>
    <h1>Ministry Model: The 3 C's</h1>
  </div>
</section>

<!-- INTRO BAND -->
<section class="cbm-intro-band">
  <p>Children's Bible Ministries organizes all of its outreach, training, and ministry activity around a simple, Bible-centered framework known as The 3 C's: Classes, Correspondence Lessons, and Camps. Every CBM ministry location operates within one or more of these categories, ensuring a unified mission while allowing for contextualized local expression. The heart of our work is teaching the truth of God's Word — everything we do is rooted in Scripture, Christ-focused, and designed to help children and those who serve them understand, apply, and live out biblical truth.</p>
</section>

<!-- A BIBLE-CENTERED MINISTRY MODEL -->
<section class="cbm-bible-centered">
  <div class="cbm-bible-centered-inner">
    <span class="cbm-section-label">Our Framework</span>
    <h2>A Bible-Centered Ministry Model</h2>
    <p>The word "Bible" in Children's Bible Ministries reflects more than a resource — it defines our purpose. CBM exists to teach the Bible clearly and faithfully in a variety of settings so that children encounter the gospel and believers are equipped to serve. Whether ministry takes place in a church or rolling chapel, through mailed or digital lessons, or at a camp, Scripture is central and Christ is the focus.</p>
    <p>The 3 C's provide:</p>
    <ul>
      <li>A clear theological anchor</li>
      <li>A consistent ministry framework across locations</li>
      <li>Flexibility to meet local needs without mission drift</li>
    </ul>
  </div>
</section>

<!-- CLASSES -->
<section class="cbm-c-section">
  <div class="cbm-c-inner">
    <div class="cbm-c-header">The First C</div>
    <h2>Classes</h2>
    <div class="cbm-c-layout">
      <div class="cbm-c-text">
        <p><strong>Classes</strong> are structured learning environments where the Bible is taught directly or intentionally integrated into instruction, training, and mentorship. Across CBM ministry locations, classes take many forms, but each shares the same purpose: grounding participants in Scripture and pointing them to Jesus Christ.</p>
        <p>In some settings, classes provide foundational Bible teaching for children through before-school and after-school Bible clubs, often serving as a bridge until formal Bible Released Time education is established. In other contexts, classes equip believers and leaders through focused training, discipleship, and life-application of biblical truth.</p>
        <p>Across CBM locations, class-based ministry includes — but is not limited to:</p>
        <ul>
          <li>Before- and after-school Bible clubs where Bible Released Time is not yet established</li>
          <li>Homeschool enrichment programs that integrate Scripture with academic and character development</li>
          <li>Internship-based instruction combining Bible study, ministry training, and intentional mentoring</li>
          <li>Leadership and pastoral training rooted in biblical theology and ministry practice</li>
          <li>Marriage and family conferences emphasizing biblical foundations for Christian living</li>
          <li>English as a Second Language programs that incorporate Scripture and gospel witness</li>
          <li>Competitive sports ministry where biblical character, discipleship, and mentoring are intentionally emphasized</li>
          <li>Relational mentoring contexts where Scripture guides personal growth and spiritual formation</li>
        </ul>
        <p>While the format and audience of these classes vary by location and cultural context, each class remains <strong>Bible-centric, Christ-focused, and ministry-driven</strong>. This flexibility allows CBM to meet real needs while maintaining theological consistency and mission clarity across every ministry site.</p>
        <div class="cbm-c-buttons">
          <a href="/released-time-bible-education" class="cbm-btn-outline">Learn about Bible Released Time Education</a>
          <a href="/homeschool-events" class="cbm-btn-outline">Explore Homeschool Programs</a>
          <a href="/internship" class="cbm-btn-outline">Learn about the CBM Internship</a>
          <a href="/church-partnerships-overview" class="cbm-btn-outline">Explore Church Partnerships</a>
        </div>
      </div>
      <div class="cbm-c-image">
        <div class="cbm-c-image-placeholder">Photo: Classes &amp; Bible teaching</div>
      </div>
    </div>
  </div>
</section>

<!-- CORRESPONDENCE LESSONS -->
<section class="cbm-c-section">
  <div class="cbm-c-inner">
    <div class="cbm-c-header">The Second C</div>
    <h2>Correspondence Lessons</h2>
    <div class="cbm-c-layout reverse">
      <div class="cbm-c-text">
        <p><strong>Correspondence Lessons</strong> are a core expression of CBM's commitment to Bible-centered teaching that reaches beyond camp, church, or rolling chapel walls. The primary method of delivery is through <strong>mailed Bible lessons</strong>, allowing children to receive Scripture-based instruction consistently and personally, regardless of location. Many CBM ministry sites also offer correspondence lessons digitally, expanding access through online formats and, in some cases, multiple languages.</p>
        <p>Across CBM locations, correspondence lessons are available in English and, through The Shepherd's Place, in additional languages such as Spanish, Mandarin, and Filipino. This approach allows children and families from diverse backgrounds to engage meaningfully with the Bible in ways that are accessible and culturally appropriate.</p>
        <p>A unique strength of the Correspondence Lessons program is its connection to CBM camps. At locations that operate camp properties, completion of Bible correspondence lessons often results in <strong>significant camp discounts</strong>, reinforcing the value of Scripture engagement. In some locations, a child's <strong>first week of camp following completion of Bible lessons is offered at no cost</strong>, with continued lesson completion resulting in substantial discounts in subsequent years.</p>
        <p>Beyond individual learning, correspondence lessons often foster <strong>family-wide engagement with Scripture</strong>. Parents, guardians, and siblings frequently participate alongside the enrolled child, creating opportunities for shared Bible learning, gospel conversations, and discipleship within the home.</p>
        <p>Completion of one year of Bible Correspondence Lessons typically includes <strong>approximately 8–10 consecutively mailed lessons</strong>. All CBM correspondence lessons are provided <strong>completely free of charge</strong>, removing financial barriers and ensuring that access to God's Word remains open to every child and family.</p>
        <div class="cbm-c-buttons">
          <a href="/bible-lessons-for-children" class="cbm-btn-outline">View Bible Lessons by Mail or Email</a>
          <a href="/christian-camps-and-camp-ministry" class="cbm-btn-outline">Explore CBM Camps &amp; Camp Ministry</a>
        </div>
      </div>
      <div class="cbm-c-image">
        <div class="cbm-c-image-placeholder">Photo: Correspondence lessons</div>
      </div>
    </div>
  </div>
</section>

<!-- CAMPS -->
<section class="cbm-c-section">
  <div class="cbm-c-inner">
    <div class="cbm-c-header">The Third C</div>
    <h2>Camps</h2>
    <div class="cbm-c-layout">
      <div class="cbm-c-text">
        <p><strong>Camps</strong> represent immersive, Scripture-centered environments where children, families, and ministry leaders engage deeply with God's Word through teaching, discipleship, worship, and Christian community. While summer camps are often the most visible expression of camp ministry, CBM camps operate <strong>year-round</strong>, providing a wide range of Bible-focused retreat and ministry experiences for all ages.</p>
        <p>Summer camp remains a concentrated season of ministry — typically five to ten weeks depending on location — but it is only one part of CBM's broader camp model. Throughout the year, CBM camp properties host retreats and events such as father–son and mother–daughter retreats, elementary and teen retreats, family-focused gatherings, sweetheart banquets, and other discipleship-centered experiences.</p>
        <p>Camps also serve as a natural extension of CBM's Bible teaching ministries. Children who complete CBM's Bible Correspondence Lessons are encouraged to continue their spiritual growth through camp participation, with many locations offering <strong>significant camp discounts</strong> as a tangible reinforcement of Scripture engagement.</p>
        <p>In addition to CBM-hosted programs, <strong>Group Ministries</strong> are an important component of the Camps model. When camp properties are not in use for CBM events, they are stewarded as ministry resources for churches, organizations, and community groups seeking a safe, Christ-honoring environment for retreats and gatherings.</p>
        <p>Several CBM camp locations also offer <strong>free or deeply discounted lodging for pastors and missionaries</strong> during non-summer months, recognizing the importance of rest, renewal, and encouragement for those serving in ministry.</p>
        <div class="cbm-c-buttons">
          <a href="/christian-camps-and-camp-ministry" class="cbm-btn-outline">Explore CBM Camps &amp; Camp Ministry</a>
          <a href="/tuckaleechee-retreat-center" class="cbm-btn-outline">Learn About the Retreat Center</a>
          <a href="/bible-lessons-for-children" class="cbm-btn-outline">View Bible Lessons by Mail or Email</a>
          <a href="/church-partnerships" class="cbm-btn-outline">Explore Church Partnerships</a>
        </div>
      </div>
      <div class="cbm-c-image">
        <div class="cbm-c-image-placeholder">Photo: CBM camp ministry</div>
      </div>
    </div>
  </div>
</section>

<!-- ONE MODEL, MANY LOCATIONS -->
<section class="cbm-one-model">
  <div class="cbm-one-model-inner">
    <h2>One Model, Many Locations</h2>
    <p>Children's Bible Ministries operates across diverse geographic, cultural, and ministry contexts, yet remains unified through the shared framework of the 3 C's. Each CBM location applies this model according to local needs and opportunities, while maintaining a consistent commitment to biblical teaching, gospel clarity, and discipleship.</p>
    <p>Some locations emphasize classroom-based instruction, while others focus more heavily on correspondence lessons or camp ministry. Many integrate all three. This flexibility allows each ministry site to respond effectively to its community — whether serving urban neighborhoods, rural areas, international contexts, or multi-generational families — without compromising theological integrity or mission focus.</p>
    <p>The 3 C's function as both a unifying structure and a scalable model, ensuring that every CBM ministry reflects the same biblical foundation while allowing for contextualized expression. This shared framework promotes accountability, clarity, and measurable impact across all locations, strengthening CBM's collective mission while honoring the uniqueness of each ministry setting.</p>
  </div>
</section>

<!-- CHRIST-FOCUSED AND SCRIPTURE-DRIVEN -->
<section class="cbm-christ-focused">
  <div class="cbm-christ-focused-inner">
    <h2>Christ-Focused and Scripture-Driven</h2>
    <p>At the heart of the 3 C's is an unwavering commitment to Scripture and to the person and work of Jesus Christ. Every class, correspondence lesson, and camp experience is intentionally designed to engage participants with God's Word, proclaim the gospel, and encourage growth in faith and obedience.</p>
    <p>The term "Bible" in Children's Bible Ministries reflects this central conviction. The defining characteristic of CBM is the active teaching and application of Scripture. Whether children are studying the Bible in a classroom, working through mailed lessons at home, or participating in immersive camp environments, God's Word is the foundation and Christ is the focus.</p>
    <p>This Christ-centered, Scripture-driven approach ensures that CBM's ministries are not program-dependent but truth-centered. It allows the organization to remain faithful to its calling across generations and cultures, equipping children, families, and ministry leaders to understand the Bible and live out its message in everyday life.</p>
  </div>
</section>

<!-- PARTNER WITH US CTA -->
<section class="cbm-partner-cta">
  <h2>Partner With Us</h2>
  <div class="cbm-cta-buttons">
    <a href="/church-partnerships-overview" class="cbm-btn">Explore Church Partnerships</a>
    <a href="/ways-to-give" class="cbm-btn">Support Gospel Ministry</a>
    <a href="/programs-and-outreach" class="cbm-btn">View Our Programs &amp; Outreach</a>
    <a href="/training-and-calling" class="cbm-btn">Learn How Leaders Are Trained</a>
    <a href="https://www.continuetogive.com/cbm" class="cbm-btn-green" target="_blank">Donate Now</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="cbm-footer">
  <div class="cbm-footer-inner">
    <div class="cbm-footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/CBM-Logo-Transparent-Background.png" alt="Children's Bible Ministries">
    </div>
    <div class="cbm-footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries. All rights reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
