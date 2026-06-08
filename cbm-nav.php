<?php
/**
 * CBM Shared Navigation
 * Include in any page template with: get_template_part('cbm-nav');
 */
?>
<style>
/* ============================================
   CBM NAV STYLES
   Once confirmed, move these to style.css
   ============================================ */

.cbm-nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    padding: 0 2rem;
    height: 70px;
    background: rgba(26, 54, 93, 0.92);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    transition: background 0.3s, box-shadow 0.3s;
}
.cbm-nav.cbm-nav-scrolled {
    background: rgba(20, 42, 74, 0.98);
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
}
.cbm-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    flex-shrink: 0;
    margin-right: 2rem;
}
.cbm-logo img { height: 42px; width: auto; }

.cbm-nav-links {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    margin-left: auto;
}

/* Dropdown */
.cbm-dropdown { position: static; }

.cbm-dropdown-toggle {
    display: flex;
    align-items: center;
    gap: 6px;
    background: none;
    border: none;
    color: rgba(255,255,255,0.88);
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.5rem 0.85rem;
    cursor: pointer;
    border-radius: 6px;
    transition: color 0.2s, background 0.2s;
    white-space: nowrap;
    letter-spacing: 0.01em;
    height: 70px;
}
.cbm-dropdown:hover .cbm-dropdown-toggle,
.cbm-dropdown-toggle:focus-visible {
    color: #fff;
    background: rgba(255,255,255,0.1);
    outline: none;
}
.cbm-chevron { transition: transform 0.2s; opacity: 0.7; }
.cbm-dropdown:hover .cbm-chevron { transform: rotate(180deg); opacity: 1; }

/* Dropdown menus — shown on hover via CSS */
.cbm-dropdown-menu {
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    position: fixed;
    top: 70px;
    background: rgba(18, 38, 66, 0.97);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.1);
    border-top: none;
    border-radius: 0 0 12px 12px;
    padding: 1.5rem 2rem;
    box-shadow: 0 12px 40px rgba(0,0,0,0.4);
    transition: opacity 0.18s ease, visibility 0.18s ease;
    display: flex;
    flex-direction: column;
    gap: 0.2rem;
}
.cbm-dropdown:hover .cbm-dropdown-menu {
    visibility: visible;
    opacity: 1;
    pointer-events: auto;
}
.cbm-dropdown-menu a {
    color: rgba(255,255,255,0.78);
    text-decoration: none;
    font-size: 0.9rem;
    padding: 0.4rem 0.6rem;
    border-radius: 6px;
    transition: color 0.15s, background 0.15s;
    white-space: nowrap;
}
.cbm-dropdown-menu a:hover { color: #fff; background: rgba(255,255,255,0.1); }

/* Mega menus — full width, flush under nav */
.cbm-mega-menu {
    flex-direction: row !important;
    left: 0;
    right: 0;
    width: 100%;
    padding: 2rem 3rem;
    border-radius: 0 0 12px 12px;
}
.cbm-mega-col {
    flex: 1;
    padding: 0 1.5rem;
    border-right: 1px solid rgba(255,255,255,0.07);
}
.cbm-mega-col:first-child { padding-left: 0; }
.cbm-mega-col:last-child { padding-right: 0; border-right: none; }
.cbm-mega-heading {
    color: rgba(255,255,255,0.45);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 0.75rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}
.cbm-mega-col a {
    display: block;
    white-space: normal;
    line-height: 1.4;
    padding: 0.35rem 0.5rem;
}

/* Login + Donate */
.cbm-nav-login {
    color: rgba(255,255,255,0.78);
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.5rem 0.85rem;
    margin-left: 0.5rem;
    border-radius: 6px;
    transition: color 0.2s, background 0.2s;
}
.cbm-nav-login:hover { color: #fff; background: rgba(255,255,255,0.1); }
.cbm-nav-donate {
    background: #4CAF50;
    color: #fff !important;
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 600;
    padding: 0.5rem 1.4rem;
    border-radius: 50px;
    margin-left: 0.75rem;
    transition: background 0.2s, transform 0.15s;
}
.cbm-nav-donate:hover { background: #43a047; transform: translateY(-1px); }

/* Hamburger */
.cbm-hamburger {
    display: none;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    margin-left: auto;
}
.cbm-hamburger span {
    display: block;
    width: 24px;
    height: 2px;
    background: #fff;
    border-radius: 2px;
    transition: transform 0.25s, opacity 0.25s;
}
.cbm-hamburger.cbm-ham-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.cbm-hamburger.cbm-ham-open span:nth-child(2) { opacity: 0; }
.cbm-hamburger.cbm-ham-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* Mobile */
@media (max-width: 768px) {
    .cbm-hamburger { display: flex; }
    .cbm-nav-links {
        display: none;
        position: fixed;
        top: 70px; left: 0; right: 0; bottom: 0;
        background: rgba(18, 38, 66, 0.98);
        flex-direction: column;
        align-items: flex-start;
        padding: 1.5rem;
        overflow-y: auto;
        gap: 0.25rem;
    }
    .cbm-nav-links.cbm-mobile-open { display: flex; }
    .cbm-dropdown { width: 100%; }
    .cbm-dropdown-toggle {
        width: 100%;
        justify-content: space-between;
        padding: 0.75rem 1rem;
        height: auto;
    }
    .cbm-dropdown-menu,
    .cbm-mega-menu {
        visibility: visible !important;
        opacity: 1 !important;
        pointer-events: auto !important;
        position: static !important;
        width: 100% !important;
        border-radius: 8px;
        margin-top: 0.25rem;
        background: rgba(255,255,255,0.05);
        box-shadow: none;
        border: 1px solid rgba(255,255,255,0.08);
        display: none;
        padding: 1rem;
    }
    .cbm-dropdown.cbm-mobile-open .cbm-dropdown-menu { display: flex; }
    .cbm-mega-menu { flex-direction: column !important; }
    .cbm-mega-col {
        border-right: none;
        border-bottom: 1px solid rgba(255,255,255,0.07);
        padding: 0.75rem 0;
    }
    .cbm-mega-col:last-child { border-bottom: none; }
    .cbm-nav-login, .cbm-nav-donate {
        margin-left: 0;
        width: 100%;
        text-align: center;
        padding: 0.75rem 1rem;
    }
}
</style>

<nav class="cbm-nav" id="cbmNav">
    <a href="<?php echo home_url(); ?>" class="cbm-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cbm-logo.png" alt="Children's Bible Ministries Logo">
    </a>

    <div class="cbm-nav-links" id="cbmNavLinks">

        <!-- About -->
        <div class="cbm-dropdown">
            <button class="cbm-dropdown-toggle">
                About <svg class="cbm-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="cbm-dropdown-menu cbm-mega-menu">
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Who We Are</p>
                    <a href="<?php echo home_url('/mission-vision'); ?>">Mission &amp; Vision</a>
                    <a href="<?php echo home_url('/beliefs-statement-of-faith'); ?>">Beliefs / Statement of Faith</a>
                    <a href="<?php echo home_url('/ministry-model-the-3-cs'); ?>">Ministry Model: The 3 C's</a>
                    <a href="<?php echo home_url('/scope-gospel-impact'); ?>">Scope &amp; Global Impact</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Programs &amp; Outreach</p>
                    <a href="<?php echo home_url('/christian-camps-camp-ministry'); ?>">Christian Camps &amp; Camp Ministry</a>
                    <a href="<?php echo home_url('/released-time-bible-education'); ?>">Released Time Bible Education</a>
                    <a href="<?php echo home_url('/mission-trips'); ?>">Mission Trips</a>
                    <a href="<?php echo home_url('/character-building-curriculum'); ?>">Character-Building Curriculum</a>
                    <a href="<?php echo home_url('/homeschool-events'); ?>">Homeschool Events</a>
                    <a href="<?php echo home_url('/tuckaleechee-retreat-center'); ?>">Retreat Center</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Impact &amp; Accountability</p>
                    <a href="<?php echo home_url('/stories-of-impact'); ?>">Stories of Impact</a>
                    <a href="<?php echo home_url('/the-missionary-call'); ?>">The Missionary Call</a>
                    <a href="<?php echo home_url('/annual-impact-report'); ?>">Annual Impact Report</a>
                    <a href="<?php echo home_url('/financials-financial-accountability'); ?>">Financials / Financial Accountability</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Leadership &amp; History</p>
                    <a href="<?php echo home_url('/leadership-team'); ?>">Leadership Team</a>
                    <a href="<?php echo home_url('/board-of-directors'); ?>">Board of Directors</a>
                    <a href="<?php echo home_url('/history-timeline'); ?>">History &amp; Timeline</a>
                    <a href="<?php echo home_url('/child-protection-safety'); ?>">Child Protection &amp; Safety</a>
                </div>
            </div>
        </div>

        <!-- Get Involved -->
        <div class="cbm-dropdown">
            <button class="cbm-dropdown-toggle">
                Get Involved <svg class="cbm-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="cbm-dropdown-menu cbm-mega-menu">
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Serve</p>
                    <a href="<?php echo home_url('/volunteer-opportunities'); ?>">Volunteer Opportunities</a>
                    <a href="<?php echo home_url('/serve-on-a-mission-trip'); ?>">Serve on a Mission Trip</a>
                    <a href="<?php echo home_url('/work-at-a-cbm-camp'); ?>">Work at a CBM Camp</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Training &amp; Calling</p>
                    <a href="<?php echo home_url('/internship-program'); ?>">Internship Program &amp; Application</a>
                    <a href="<?php echo home_url('/missionary-pathway'); ?>">Missionary Pathway</a>
                    <a href="<?php echo home_url('/ministry-opportunities'); ?>">Ministry Opportunities</a>
                    <a href="<?php echo home_url('/leadership-development'); ?>">Leadership Development</a>
                    <a href="<?php echo home_url('/ministry-camp-staff-training'); ?>">Ministry &amp; Camp Staff Training</a>
                    <a href="<?php echo home_url('/ministry-training-center'); ?>">Ministry Training Center</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Church Partnerships</p>
                    <a href="<?php echo home_url('/invite-a-missionary'); ?>">Invite a Missionary to Your Church</a>
                    <a href="<?php echo home_url('/church-partnerships'); ?>">Church Partnerships</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Prayer &amp; Engagement</p>
                    <a href="<?php echo home_url('/become-a-prayer-partner'); ?>">Become a Prayer Partner</a>
                    <a href="<?php echo home_url('/host-attend-event'); ?>">Host or Attend an Event</a>
                    <a href="<?php echo home_url('/prayer-calendar'); ?>">Prayer Calendar</a>
                </div>
            </div>
        </div>

        <!-- Resources -->
        <div class="cbm-dropdown">
            <button class="cbm-dropdown-toggle">
                Resources <svg class="cbm-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="cbm-dropdown-menu cbm-mega-menu">
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Family &amp; Children Resources</p>
                    <a href="<?php echo home_url('/bible-lessons-for-children'); ?>">Bible Lessons for Children</a>
                    <a href="<?php echo home_url('/cbm-kids'); ?>">CBM Kids</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Church &amp; Leader Resources</p>
                    <a href="<?php echo home_url('/ministry-training-resources'); ?>">Ministry Training Resources</a>
                    <a href="<?php echo home_url('/released-time-starter-kit'); ?>">Released Time Starter Kit</a>
                    <a href="<?php echo home_url('/camp-resources'); ?>">Camp Resources</a>
                    <a href="<?php echo home_url('/retreat-resources'); ?>">Retreat Resources</a>
                </div>
                <div class="cbm-mega-col">
                    <p class="cbm-mega-heading">Historical Ministry Narratives</p>
                    <a href="<?php echo home_url('/stories-of-gods-faithfulness'); ?>">Stories of God's Faithfulness</a>
                </div>
            </div>
        </div>

        <!-- Give -->
        <div class="cbm-dropdown">
            <button class="cbm-dropdown-toggle">
                Give <svg class="cbm-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="cbm-dropdown-menu">
                <a href="<?php echo home_url('/ways-to-give'); ?>">Ways to Give</a>
                <a href="<?php echo home_url('/strategic-funds'); ?>">Strategic Funds</a>
                <a href="<?php echo home_url('/donor-care'); ?>">Donor Care</a>
            </div>
        </div>

        <a href="<?php echo home_url('/login'); ?>" class="cbm-nav-login">Login</a>
        <a href="https://www.continuetogive.com/cbm" target="_blank" rel="noopener noreferrer" class="cbm-nav-donate">Donate</a>
    </div>

    <button class="cbm-hamburger" id="cbmHamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>
</nav>

<script>
(function() {
    // Mobile hamburger toggle
    var ham = document.getElementById('cbmHamburger');
    var links = document.getElementById('cbmNavLinks');
    if (ham && links) {
        ham.addEventListener('click', function() {
            var open = links.classList.toggle('cbm-mobile-open');
            ham.setAttribute('aria-expanded', open ? 'true' : 'false');
            ham.classList.toggle('cbm-ham-open', open);
        });
    }

    // Mobile: tap toggles to open/close dropdowns
    if (window.matchMedia('(max-width: 768px)').matches) {
        document.querySelectorAll('.cbm-dropdown-toggle').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.cbm-dropdown').classList.toggle('cbm-mobile-open');
            });
        });
    }

    // Scroll shadow on nav
    var nav = document.getElementById('cbmNav');
    window.addEventListener('scroll', function() {
        if (nav) nav.classList.toggle('cbm-nav-scrolled', window.scrollY > 20);
    }, { passive: true });
})();
</script>
