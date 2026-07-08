<?php
/**
 * Template Name: Beliefs Statement of Faith
 * Description: Beliefs & Statement of Faith page for Children's Bible Ministries
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beliefs &amp; Statement of Faith | Children's Bible Ministries</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }

#cbm-beliefs { min-height: 100vh; display: flex; flex-direction: column; }

/* PAGE HERO */
.cbm-page-hero {
    background:
        linear-gradient(135deg, rgba(26,54,93,0.82) 0%, rgba(26,54,93,0.72) 100%),
        url('https://images.squarespace-cdn.com/content/v1/691cb16fe77494051b48dd86/1764724951752-YQSLBR319U4CT4BALWSE/unsplash-image-DRgrzQQsJDA.jpg') center/cover no-repeat;
    padding: 10rem 2rem 5rem;
}
.cbm-page-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.55);
    margin-bottom: 1rem;
}
.cbm-breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; }
.cbm-breadcrumb a:hover { color: rgba(255,255,255,0.85); }
.cbm-page-hero h1 {
    font-size: clamp(2.4rem, 5vw, 3.5rem);
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.02em;
    line-height: 1.1;
}

/* INTRO BAND */
.cbm-intro-band {
    background: #1a365d;
    padding: 3.5rem 2rem;
    text-align: center;
}
.cbm-intro-band p {
    max-width: 860px;
    margin: 0 auto;
    font-size: clamp(1.05rem, 1.8vw, 1.25rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.8;
}

/* DOWNLOAD BUTTON BAND */
.cbm-download-band {
    background: #f0f4f8;
    padding: 2.5rem 2rem;
    text-align: center;
    border-bottom: 1px solid #dce4ed;
}
.cbm-download-band p {
    font-size: 0.9rem;
    color: #64748b;
    margin-top: 0.75rem;
}
.cbm-btn-outline {
    display: inline-block;
    padding: 0.85rem 2.2rem;
    border: 2px solid #1a365d;
    color: #1a365d;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
    letter-spacing: 0.01em;
}
.cbm-btn-outline:hover { background: #1a365d; color: #fff; }

/* SOF CONTENT */
.cbm-sof-section {
    max-width: 860px;
    margin: 0 auto;
    padding: 4rem 2rem 5rem;
}
.cbm-sof-meta {
    font-size: 0.9rem;
    color: #64748b;
    font-weight: 600;
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid #e8eef5;
}

/* Each article */
.cbm-article {
    margin-bottom: 2.75rem;
    padding-bottom: 2.75rem;
    border-bottom: 1px solid #e8eef5;
}
.cbm-article:last-of-type {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.cbm-article h2 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1a365d;
    margin-bottom: 0.85rem;
    letter-spacing: -0.01em;
}
.cbm-article p {
    font-size: 1rem;
    line-height: 1.8;
    color: #374151;
    margin-bottom: 0.5rem;
}
.cbm-article .cbm-refs {
    font-size: 0.875rem;
    color: #64748b;
    font-style: italic;
    line-height: 1.6;
    margin-top: 0.35rem;
}

/* GOVERNING AUTHORITY */
.cbm-governing {
    background: #f7f9fc;
    border: 1px solid #e8eef5;
    border-radius: 16px;
    padding: 3rem;
    margin-top: 3.5rem;
    text-align: center;
}
.cbm-governing h2 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a365d;
    margin-bottom: 1rem;
}
.cbm-governing p {
    font-size: 1rem;
    line-height: 1.8;
    color: #374151;
    max-width: 700px;
    margin: 0 auto;
}

/* DOWNLOAD CTA BOTTOM */
.cbm-download-bottom {
    text-align: center;
    margin-top: 3.5rem;
    padding-top: 3rem;
    border-top: 2px solid #e8eef5;
}

/* CTA SECTION */
.cbm-cta-section {
    background: #1a365d;
    padding: 5rem 2rem;
    text-align: center;
}
.cbm-cta-section h2 {
    font-size: clamp(1.8rem, 3.5vw, 2.5rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
}
.cbm-cta-section p {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.8);
    max-width: 560px;
    margin: 0 auto 2rem;
    line-height: 1.7;
}
.cbm-btn-white {
    display: inline-block;
    background: #fff;
    color: #1a365d;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.9rem 2.2rem;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.2s;
    margin: 0.4rem;
}
.cbm-btn-white:hover { background: #f0f4f8; }
.cbm-btn-green {
    display: inline-block;
    background: #2d8a4e;
    color: #fff;
    font-weight: 700;
    font-size: 1rem;
    padding: 0.9rem 2.2rem;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.2s;
    margin: 0.4rem;
}
.cbm-btn-green:hover { background: #236e3e; }

/* FOOTER */
.cbm-footer {
    background: #0f1f38;
    padding: 3rem 2rem;
    text-align: center;
    color: rgba(255,255,255,0.45);
    font-size: 0.85rem;
}
.cbm-footer a { color: rgba(255,255,255,0.55); text-decoration: none; }
.cbm-footer a:hover { color: #fff; }

@media (max-width: 640px) {
    .cbm-governing { padding: 2rem 1.5rem; }
    .cbm-sof-section { padding: 2.5rem 1.25rem 3rem; }
}
</style>

<?php get_template_part('cbm-nav'); ?>

<div id="cbm-beliefs">

    <!-- PAGE HERO -->
    <section class="cbm-page-hero">
        <div class="cbm-page-hero-inner">
            <div class="cbm-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a> &rsaquo;
                <a href="<?php echo home_url('/who-we-are'); ?>">Who We Are</a> &rsaquo;
                Beliefs &amp; Statement of Faith
            </div>
            <h1>Beliefs &amp; Statement of Faith</h1>
        </div>
    </section>

    <!-- INTRO BAND -->
    <section class="cbm-intro-band">
        <p>Children's Bible Ministries, Inc. serves along nondenominational lines, and as such there are certain essential truths which we believe. As Christians we believe in the necessity of the new birth as the work of God, the Holy Spirit to be obtained only by receiving the Lord Jesus Christ and that men are saved by grace through faith not by works.</p>
    </section>

    <!-- DOWNLOAD BAND -->
    <div class="cbm-download-band">
        <a href="https://staging.childrensbibleministries.net/wp-content/uploads/2026/06/CBM-Statement-of-Faith_revised-2-8-24.pdf" class="cbm-btn-outline" target="_blank">Download the Full Statement of Faith (PDF)</a>
        <p>(This document contains the same content presented below and is provided for download and reference.)</p>
    </div>

    <!-- STATEMENT OF FAITH CONTENT -->
    <section class="cbm-sof-section">

        <div class="cbm-sof-meta">This revision made and placed into effect February 8, 2024</div>

        <!-- Article 1 -->
        <div class="cbm-article">
            <h2>1. The Authority of Scripture</h2>
            <p>We believe the Scriptures of the Old and New Testament to be the verbally inspired (God-breathed) Word of God, the final authority for faith and life, inerrant in the original writings.</p>
            <p class="cbm-refs">(Matthew 5:18; John 16:12–13; 2 Timothy 3:16–17; 2 Peter 1:20–21)</p>
        </div>

        <!-- Article 2 -->
        <div class="cbm-article">
            <h2>2. The Nature of God</h2>
            <p>We believe that there is only one living and true God, the Creator, Sustainer, and sovereign over all that exists. This one God exists in three Persons who are equal in every divine perfection.</p>
            <p class="cbm-refs">(Deuteronomy 6:4; Isaiah 45:5; Ephesians 3:9; Revelation 4:11; Psalm 115:3; Psalm 135:6; Matthew 28:19; 2 Corinthians 13:14)</p>
        </div>

        <!-- Article 3 -->
        <div class="cbm-article">
            <h2>3. The Person of Jesus Christ</h2>
            <p>We believe in the deity of the Lord Jesus Christ as fully God and fully man, conceived by the Holy Spirit, born of a virgin; as God, co-equal and co-existent with God the Father and God the Holy Spirit.</p>
            <p class="cbm-refs">(Matthew 1:1–2:13; John 1:1–11; John 14:16; Philippians 2:5–11; Colossians 1:15)</p>
        </div>

        <!-- Article 4 -->
        <div class="cbm-article">
            <h2>4. The Condition of Humanity</h2>
            <p>We believe in man's fallen condition. Through nature, choice and practice he is guilty before God and is righteously judged fit only for everlasting punishment.</p>
            <p class="cbm-refs">(Genesis 3:1–13; Matthew 25:46; Romans 3:10 &amp; 23; Romans 5:12–21; 1 Corinthians 15:21–22; 2 Thessalonians 1:7–10; Revelation 20:12–15)</p>
        </div>

        <!-- Article 5 -->
        <div class="cbm-article">
            <h2>5. The Work of Christ and Atonement</h2>
            <p>We believe that by His substitutionary atonement on the cross, Jesus Christ offered on our behalf the only acceptable sacrifice for sin and was raised in the same body from the dead according to the Scriptures. Christ has secured our redemption through the shedding of His blood, qualifying the saints for service here, a like resurrection, and a place in His divine presence for eternity.</p>
            <p class="cbm-refs">(Matthew 28; Luke 24:39–43; Romans 3:21–28; Romans 5:10–11; 1 Corinthians 15:3–4; 1 Timothy 2:5–6; Hebrews 9:11–22; 1 Peter 1:18–20; 1 John 2:2; 1 John 5:10–13)</p>
        </div>

        <!-- Article 6 -->
        <div class="cbm-article">
            <h2>6. Salvation and Security of the Believer</h2>
            <p>We believe that repentance, forgiveness and becoming a new creature are several of the many experiences of the Christian who is kept by God's power, being secure in Christ forever and that it is the privilege of believers to rejoice in the assurance of salvation.</p>
            <p class="cbm-refs">(John 6:37–40; John 10:27–30; Romans 8:1 &amp; 38–39; 2 Corinthians 5:17; 1 John 5:11–13)</p>
        </div>

        <!-- Article 7 -->
        <div class="cbm-article">
            <h2>7. The Holy Spirit</h2>
            <p>We believe that God the Holy Spirit is a person who convicts sinners and who regenerates and baptizes them at the moment of their salvation into the body of Christ. We also believe that the Holy Spirit indwells and seals until Christ returns, all who believe, and fills and empowers for service those who are yielded to Him.</p>
            <p class="cbm-refs">(John 16:8–11; Romans 8–9; 1 Corinthians 6:19–20; 1 Corinthians 12:12–14; Galatians 5:16; Ephesians 1:13–14; Ephesians 4:30; Ephesians 5:18; Titus 3:5)</p>
        </div>

        <!-- Article 8 -->
        <div class="cbm-article">
            <h2>8. The Return of Christ</h2>
            <p>We believe in the visible, personal and imminent return of the Lord and Savior Jesus Christ for His church.</p>
            <p class="cbm-refs">(John 14:3; Acts 1:9–11; 1 Thessalonians 4:13–18)</p>
        </div>

        <!-- Article 9 -->
        <div class="cbm-article">
            <h2>9. The Coming Resurrection</h2>
            <p>We believe in the bodily resurrection of the saved and of the lost, the everlasting blessedness of the saved and the everlasting punishment of the lost.</p>
            <p class="cbm-refs">(John 11:23–27; Romans 8:11; 2 Corinthians 5:1; 1 Thessalonians 4:13–18; Revelation 20:12–15)</p>
        </div>

        <!-- Article 10 -->
        <div class="cbm-article">
            <h2>10. Divine Healing and Final Restoration</h2>
            <p>We believe that Christ made provision for all the effects of sin in the atonement and that God heals in answer to believing prayer according to His sovereign discretion. Healing may not be claimed on the same unconditional basis as salvation, and the final deliverance from sickness awaits the believer in glory.</p>
            <p class="cbm-refs">(1 Corinthians 15:51–57; 2 Corinthians 12:7–9; Philippians 3:20–21; 1 John 3:2)</p>
        </div>

        <!-- Article 11 -->
        <div class="cbm-article">
            <h2>11. God's Design for Humanity</h2>
            <p>We believe God sovereignly and immutably creates each person as a male or female. These two distinct, complementary genders together reflect the image and nature of God and His plan for man and woman.</p>
            <p class="cbm-refs">(Genesis 1:27; Matthew 19:4)</p>
        </div>

        <!-- Article 12 -->
        <div class="cbm-article">
            <h2>12. God's Design for Marriage</h2>
            <p>We believe in the biblical view of marriage as sanctioned and defined by God in His Word, which is the exclusive, covenantal union between one man (born biologically male) and one woman (born biologically female).</p>
            <p class="cbm-refs">(Genesis 2:18–24; Ephesians 5:22–23; Matthew 19:4–6; Mark 10:6)</p>
        </div>

        <!-- Governing Authority -->
        <div class="cbm-governing">
            <h2>Governing Authority</h2>
            <p>This Statement of Faith governs all teaching, training, partnerships, leadership practices, and ministry activities of Children's Bible Ministries, Inc. All staff, missionaries, interns, and ministry leaders serving with CBM are expected to affirm and conduct themselves in accordance with these biblical principles.</p>
        </div>

        <!-- Download CTA bottom -->
        <div class="cbm-download-bottom">
            <a href="https://staging.childrensbibleministries.net/wp-content/uploads/2026/06/CBM-Statement-of-Faith_revised-2-8-24.pdf" class="cbm-btn-outline" target="_blank">Download the Full Statement of Faith (PDF)</a>
            <p style="margin-top:0.75rem;font-size:0.875rem;color:#64748b;">(This document contains the same content presented above and is provided for download and reference.)</p>
        </div>

    </section>

    <!-- CTA SECTION -->
    <section class="cbm-cta-section">
        <h2>Learn More About CBM</h2>
        <p>Explore our mission, ministry model, and global impact to understand how CBM is reaching children with the gospel.</p>
        <a href="<?php echo home_url('/mission-vision'); ?>" class="cbm-btn-white">Mission &amp; Vision</a>
        <a href="<?php echo home_url('/ways-to-give'); ?>" class="cbm-btn-green">Give Today</a>
    </section>

    <!-- FOOTER -->
    <footer class="cbm-footer">
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries, Inc. &bull; <a href="<?php echo home_url('/financials-financial-accountability'); ?>">Financial Accountability</a> &bull; <a href="<?php echo home_url('/child-protection-safety'); ?>">Child Protection Policy</a></p>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
