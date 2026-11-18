<?php
/**
 * Title: Hero with sample report
 * Slug: lockline/hero
 * Description: Headline, lede, call to action and the sample security report panel.
 * Categories: lockline
 * Keywords: lockline
 */
?>
<!-- wp:group {"className":"ll-section ll-hero","align":"full","layout":{"type":"constrained","contentSize":"1160px"}} -->
<div class="wp-block-group alignfull ll-section ll-hero"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Know where your business is exposed before someone else finds it.</h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ll-lede","fontSize":"lede"} -->
<p class="ll-lede has-lede-font-size">Lockline checks your email, website, Wi-Fi and backups, then gives you a plain-English list of what to fix first. Most checks finish in five business days.</p>
<!-- /wp:paragraph --><!-- wp:group {"className":"ll-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group ll-actions"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Get a security check</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --><!-- wp:paragraph -->
<p><a href="#report">See a sample report</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:html -->
<article class="ll-report" id="report" aria-label="Sample security report"><header class="ll-report-head"><strong>Sample report: dental office, 14 staff</strong><span>5 days</span></header><div class="ll-score"><svg viewBox="0 0 64 64" aria-hidden="true"><circle cx="32" cy="32" r="27" fill="none" stroke="#2A4560" stroke-width="7"/><circle cx="32" cy="32" r="27" fill="none" stroke="#F5B841" stroke-width="7" stroke-dasharray="99 170" stroke-linecap="round" transform="rotate(-90 32 32)"/><text x="32" y="38" text-anchor="middle" fill="#E6EDF2" font-family="IBM Plex Sans" font-weight="600" font-size="17">58</text></svg><div><b>Needs attention: 2 urgent fixes</b>Score out of 100, based on 41 checks</div></div><div class="ll-finding"><span class="ll-sev h">Urgent</span><p>Shared front-desk email has no two-factor login</p><small>Fix: turn on 2FA for all 14 mailboxes. About 1 hour.</small></div><div class="ll-finding"><span class="ll-sev h">Urgent</span><p>WordPress site runs 3 plugins with known vulnerabilities</p><small>Fix: update or replace them, then add a firewall plugin.</small></div><div class="ll-finding"><span class="ll-sev m">Soon</span><p>Patient files are backed up, but the backup was never test-restored</p><small>Fix: run a monthly restore test. We'll show you how.</small></div><div class="ll-finding"><span class="ll-sev l">Later</span><p>Guest Wi-Fi shares a network with the X-ray workstation</p><small>Fix: separate guest network on the existing router.</small></div></article>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
