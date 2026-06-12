<?php
/* Shared inline styles used across all CBM custom page templates.
   Include via: include(get_stylesheet_directory() . '/_shared-styles.php');
   OR just paste the <style> block directly into each template.
*/
?>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background: #fff; color: #1a2940; }
.cbm-page-wrap { min-height: 100vh; display: flex; flex-direction: column; }

/* HERO */
.cbm-hero-band {
    background: linear-gradient(135deg, rgba(10,32,64,0.88) 0%, rgba(26,54,93,0.80) 100%),
                url('') center/cover no-repeat;
    padding: 9rem 2rem 4.5rem;
}
.cbm-hero-band.has-bg { background-size: cover; background-position: center; }
.cbm-hero-inner { max-width: 1100px; margin: 0 auto; }
.cbm-breadcrumb { font-size: 0.82rem; color: rgba(255,255,255,0.5); margin-bottom: 0.85rem; }
.cbm-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; }
.cbm-breadcrumb a:hover { color: rgba(255,255,255,0.8); }
.cbm-hero-band h1 { font-size: clamp(2.2rem,5vw,3.4rem); font-weight: 700; color: #fff; letter-spacing: -0.02em; line-height: 1.1; }

/* INTRO BAND */
.cbm-intro-band { background: #1a365d; padding: 3rem 2rem; text-align: center; }
.cbm-intro-band p { max-width: 820px; margin: 0 auto; font-size: clamp(1rem,1.8vw,1.2rem); color: rgba(255,255,255,0.88); line-height: 1.8; font-family: 'Arial', sans-serif; }

/* SECTIONS */
.cbm-section { padding: 70px 40px; }
.cbm-section--white { background: #fff; }
.cbm-section--light { background: #f5f7fa; }
.cbm-section--dark  { background: #0a2040; }
.cbm-section-inner { max-width: 1100px; margin: 0 auto; }
.cbm-section-inner--narrow { max-width: 780px; margin: 0 auto; }
.cbm-section-label { display: inline-block; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #546e8a; margin-bottom: 0.9rem; }
.cbm-section--dark .cbm-section-label { color: rgba(255,255,255,0.45); }
.cbm-section h2 { font-size: clamp(1.7rem,3.5vw,2.5rem); font-weight: 700; color: #0a2040; margin-bottom: 1.25rem; letter-spacing: -0.02em; }
.cbm-section--dark h2 { color: #fff; }
.cbm-section h3 { font-size: 1.25rem; font-weight: 700; color: #0a2040; margin: 2rem 0 0.75rem; }
.cbm-section--dark h3 { color: rgba(255,255,255,0.9); }
.cbm-section p { font-size: 1.02rem; color: #374f6b; line-height: 1.8; margin-bottom: 1.2rem; font-family: 'Arial', sans-serif; }
.cbm-section--dark p { color: rgba(255,255,255,0.8); }
.cbm-section ul { margin: 0 0 1.25rem 1.5rem; }
.cbm-section ul li { font-size: 1rem; color: #374f6b; line-height: 1.8; margin-bottom: 0.35rem; font-family: 'Arial', sans-serif; }
.cbm-section--dark ul li { color: rgba(255,255,255,0.8); }
.cbm-section blockquote { border-left: 3px solid #1a365d; margin: 1.5rem 0; padding: 0.75rem 1.5rem; background: #f5f7fa; font-style: italic; }
.cbm-section blockquote p { color: #546e8a; margin: 0; }
.cbm-section blockquote cite { display: block; font-size: 0.85rem; color: #888; margin-top: 0.5rem; font-style: normal; }
.cbm-link-arrow { display: inline-block; color: #1a6fc4; font-weight: 600; font-size: 0.95rem; text-decoration: none; margin-top: 0.4rem; }
.cbm-link-arrow:hover { text-decoration: underline; }
.cbm-link-arrow::after { content: ' →'; }

/* TWO COL */
.cbm-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; }
.cbm-two-col--center { align-items: center; }
.cbm-two-col--reverse { direction: rtl; }
.cbm-two-col--reverse > * { direction: ltr; }
.cbm-img-placeholder { width: 100%; aspect-ratio: 4/3; background: linear-gradient(135deg,#b8c8d8,#d0dce8); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 13px; color: #6a7f90; font-family: 'Arial', sans-serif; }

/* STEP / PROCESS LIST */
.cbm-steps { list-style: none; margin: 0; padding: 0; counter-reset: steps; }
.cbm-steps li { counter-increment: steps; padding: 1.25rem 1.25rem 1.25rem 4rem; position: relative; border-bottom: 1px solid #e8eef5; font-size: 1rem; color: #374f6b; line-height: 1.7; font-family: 'Arial', sans-serif; }
.cbm-steps li::before { content: counter(steps); position: absolute; left: 0; top: 1.1rem; width: 2rem; height: 2rem; background: #0a2040; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; }
.cbm-steps li strong { color: #0a2040; display: block; margin-bottom: 0.25rem; }

/* CARD GRID */
.cbm-card-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; margin-top: 2rem; }
.cbm-card { background: #fff; border: 1px solid #dce2ea; border-radius: 10px; padding: 1.75rem; transition: box-shadow 0.2s; }
.cbm-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.09); }
.cbm-card h3 { font-size: 1.05rem; font-weight: 700; color: #0a2040; margin: 0 0 0.6rem; }
.cbm-card p { font-size: 0.92rem; color: #546e8a; line-height: 1.65; margin: 0; font-family: 'Arial', sans-serif; }

/* CTA SECTION */
.cbm-cta-section { background: #0a2040; padding: 65px 40px; text-align: center; }
.cbm-cta-section h2 { font-size: clamp(1.6rem,3vw,2.1rem); color: #fff; font-weight: 700; margin-bottom: 1rem; }
.cbm-cta-section p { font-size: 1rem; color: rgba(255,255,255,0.78); max-width: 540px; margin: 0 auto 2.2rem; line-height: 1.7; font-family: 'Arial', sans-serif; }
.cbm-btn-row { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }
.cbm-btn { display: inline-block; padding: 13px 28px; background: #fff; color: #0a2040; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; transition: background 0.2s; }
.cbm-btn:hover { background: #e8eef5; }
.cbm-btn-green { display: inline-block; padding: 13px 28px; background: #2e7d32; color: #fff; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: 700; text-decoration: none; border-radius: 4px; transition: background 0.2s; }
.cbm-btn-green:hover { background: #1b5e20; }
.cbm-btn-outline { display: inline-block; padding: 11px 26px; background: transparent; color: #0a2040; border: 2px solid #0a2040; font-family: 'Arial', sans-serif; font-size: 14px; font-weight: 700; text-decoration: none; border-radius: 4px; transition: all 0.2s; margin-top: 1rem; margin-right: 0.5rem; }
.cbm-btn-outline:hover { background: #0a2040; color: #fff; }

/* FOOTER */
.cbm-footer { background: #060f1e; padding: 40px 40px 28px; color: rgba(255,255,255,0.4); font-family: 'Arial', sans-serif; font-size: 12px; }
.cbm-footer-inner { max-width: 1200px; margin: 0 auto; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 20px; }
.cbm-footer a { color: rgba(255,255,255,0.5); text-decoration: none; }
.cbm-footer a:hover { color: #fff; }

/* RESPONSIVE */
@media (max-width: 900px) { .cbm-card-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) {
    .cbm-section { padding: 48px 22px; }
    .cbm-cta-section { padding: 48px 22px; }
    .cbm-two-col { grid-template-columns: 1fr; gap: 2rem; }
    .cbm-two-col--reverse { direction: ltr; }
    .cbm-btn-row { flex-direction: column; align-items: center; }
}
@media (max-width: 600px) { .cbm-card-grid { grid-template-columns: 1fr; } }
</style>
