<?php
/**
 * Title: Hero with quote form
 * Slug: northbound/hero
 * Description: Headline, promise, inspection button, proof stats and the copper-topped quote form.
 * Categories: northbound
 * Keywords: northbound
 */
?>
<!-- wp:group {"className":"nb-section nb-hero","align":"full","backgroundColor":"mist","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull nb-section nb-hero has-mist-background-color has-background"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"56%"} -->
<div class="wp-block-column" style="flex-basis:56%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Leaks fixed. Roofs replaced. Written quote in 48 hours.</h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"nb-lede","fontSize":"lede"} -->
<p class="nb-lede has-lede-font-size">We're a family-owned roofing crew from Shrewsbury. We inspect the roof ourselves, send photos of what we found, and give you a price before any work starts.</p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#quote">Book a free inspection</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --><!-- wp:group {"className":"nb-proof","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group nb-proof"><!-- wp:paragraph -->
<p><strong>1,400+</strong>roofs since 2008</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><strong>25 yrs</strong>workmanship warranty</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><strong>4.9</strong>average from 380 Google reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:html -->
<form class="nb-quote" id="quote" onsubmit="event.preventDefault();this.querySelector('.nb-fine').textContent='Thanks. This is a demo form, so nothing was sent.';"><h2>Free roof inspection</h2><p>We'll call within one business day to set a time.</p><label for="nb-n">Name</label><input id="nb-n" name="name" autocomplete="name" required><label for="nb-p">Phone</label><input id="nb-p" name="phone" type="tel" autocomplete="tel" required><label for="nb-t">Town</label><select id="nb-t" name="town"><option>Worcester</option><option>Shrewsbury</option><option>Westborough</option><option>Grafton</option><option>Holden</option><option>Another town</option></select><label for="nb-w">What's going on?</label><textarea id="nb-w" name="details" placeholder="Water stain on the bedroom ceiling after last week's storm"></textarea><button type="submit">Request my inspection</button><p class="nb-fine">No cost and no obligation.</p></form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
