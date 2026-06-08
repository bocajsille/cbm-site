<?php
/**
 * CBM Shared Navigation
 * Include this file in every page template with:
 * get_template_part('cbm-nav');
 * (place this file in your child theme root as cbm-nav.php)
 */
?>
<nav class="cbm-nav" id="cbmNav">
    <a href="<?php echo home_url(); ?>" class="cbm-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cbm-logo.png" alt="Children's Bible Ministries Logo">
    </a>

    <div class="cbm-nav-links" id="cbmNavLinks">

        <!-- About -->
        <div class="cbm-dropdown">
            <button class="cbm-dropdown-toggle" aria-expanded="false" aria-haspopup="true">
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
            <button class="cbm-dropdown-toggle" aria-expanded="false" aria-haspopup="true">
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
            <button class="cbm-dropdown-toggle" aria-expanded="false" aria-haspopup="true">
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
            <button class="cbm-dropdown-toggle" aria-expanded="false" aria-haspopup="true">
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

    <!-- Hamburger -->
    <button class="cbm-hamburger" id="cbmHamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>
</nav>

<script>
(function() {
    // Dropdown toggles
    document.querySelectorAll('.cbm-dropdown-toggle').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = this.getAttribute('aria-expanded') === 'true';
            // Close all
            document.querySelectorAll('.cbm-dropdown-toggle').forEach(function(b) {
                b.setAttribute('aria-expanded', 'false');
                b.closest('.cbm-dropdown').classList.remove('cbm-open');
            });
            // Open this one if it was closed
            if (!isOpen) {
                this.setAttribute('aria-expanded', 'true');
                this.closest('.cbm-dropdown').classList.add('cbm-open');
            }
        });
    });

    // Close on outside click
    document.addEventListener('click', function() {
        document.querySelectorAll('.cbm-dropdown-toggle').forEach(function(b) {
            b.setAttribute('aria-expanded', 'false');
            b.closest('.cbm-dropdown').classList.remove('cbm-open');
        });
    });

    // Hamburger mobile toggle
    var ham = document.getElementById('cbmHamburger');
    var links = document.getElementById('cbmNavLinks');
    if (ham && links) {
        ham.addEventListener('click', function() {
            var open = links.classList.toggle('cbm-mobile-open');
            ham.setAttribute('aria-expanded', open ? 'true' : 'false');
            ham.classList.toggle('cbm-ham-open', open);
        });
    }

    // Scroll: add shadow to nav
    var nav = document.getElementById('cbmNav');
    window.addEventListener('scroll', function() {
        if (nav) nav.classList.toggle('cbm-nav-scrolled', window.scrollY > 20);
    }, {passive: true});
})();
</script>
