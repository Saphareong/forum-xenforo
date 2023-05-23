<?php
// FROM HASH: 51f58c3aabe978cc84137ddf9425caeb
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: \'Font Awesome 5 Pro\';
  font-style: normal;
  font-weight: 300;
  src: url(\'@{fa-font-path}/fa-light-300.woff2\') format(\'woff2\'),
    url(\'@{fa-font-path}/fa-light-300.woff\') format(\'woff\');
}

.fal {
  font-family: \'Font Awesome 5 Pro\';
  font-weight: 300;
}

/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: \'Font Awesome 5 Pro\';
  font-style: normal;
  font-weight: 400;
  src: url(\'@{fa-font-path}/fa-regular-400.woff2\') format(\'woff2\'),
    url(\'@{fa-font-path}/fa-regular-400.woff\') format(\'woff\');
}

.far {
  font-family: \'Font Awesome 5 Pro\';
  font-weight: 400;
}

/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: \'Font Awesome 5 Pro\';
  font-style: normal;
  font-weight: 900;
  src: url(\'@{fa-font-path}/fa-solid-900.woff2\') format(\'woff2\'),
    url(\'@{fa-font-path}/fa-solid-900.woff\') format(\'woff\');
}

.fa,
.fas {
  font-family: \'Font Awesome 5 Pro\';
  font-weight: 900;
}

/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: \'Font Awesome 5 Brands\';
  font-style: normal;
  font-weight: 400;
  src: url(\'@{fa-font-path}/fa-brands-400.woff2\') format(\'woff2\'),
    url(\'@{fa-font-path}/fa-brands-400.woff\') format(\'woff\');
}

.fab {
  font-family: \'Font Awesome 5 Brands\';
  font-weight: 400;
}

// Base Class Definition
// -------------------------

.@{fa-css-prefix}, .fas, .far, .fal, .fab {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1;
}


// Icon Sizes
// -------------------------

.larger(@factor) when (@factor > 0) {
  .larger((@factor - 1));

  .@{fa-css-prefix}-@{factor}x {
    font-size: (@factor * 1em);
  }
}

/* makes the font 33% larger relative to the icon container */
.@{fa-css-prefix}-lg {
  font-size: (4em / 3);
  line-height: (3em / 4);
  vertical-align: -.0667em;
}

.@{fa-css-prefix}-xs {
  font-size: .75em;
}

.@{fa-css-prefix}-sm {
  font-size: .875em;
}

.larger(10);


// Fixed Width Icons
// -------------------------
.@{fa-css-prefix}-fw {
  text-align: center;
  width: (20em / 16);
}


// List Icons
// -------------------------

.@{fa-css-prefix}-ul {
  list-style-type: none;
  margin-left: (@fa-li-width * 5/4);
  padding-left: 0;

  > li { position: relative; }
}

.@{fa-css-prefix}-li {
  left: -@fa-li-width;
  position: absolute;
  text-align: center;
  width: @fa-li-width;
  line-height: inherit;
}


// Bordered & Pulled
// -------------------------

.@{fa-css-prefix}-border {
  border-radius: .1em;
  border: solid .08em @fa-border-color;
  padding: .2em .25em .15em;
}

.@{fa-css-prefix}-pull-left { float: left; }
.@{fa-css-prefix}-pull-right { float: right; }

.@{fa-css-prefix}, .fas, .far, .fal, .fab {
  &.@{fa-css-prefix}-pull-left { margin-right: .3em; }
  &.@{fa-css-prefix}-pull-right { margin-left: .3em; }
}


// Animated Icons
// --------------------------

.@{fa-css-prefix}-spin {
  animation: fa-spin 2s infinite linear;
}

.@{fa-css-prefix}-pulse {
  animation: fa-spin 1s infinite steps(8);
}

@keyframes fa-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


// Rotated & Flipped Icons
// -------------------------

.@{fa-css-prefix}-rotate-90  { .fa-icon-rotate(90deg, 1);  }
.@{fa-css-prefix}-rotate-180 { .fa-icon-rotate(180deg, 2); }
.@{fa-css-prefix}-rotate-270 { .fa-icon-rotate(270deg, 3); }

.@{fa-css-prefix}-flip-horizontal { .fa-icon-flip(-1, 1, 0); }
.@{fa-css-prefix}-flip-vertical   { .fa-icon-flip(1, -1, 2); }
.@{fa-css-prefix}-flip-both, .@{fa-css-prefix}-flip-horizontal.@{fa-css-prefix}-flip-vertical { .fa-icon-flip(-1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root {
  .@{fa-css-prefix}-rotate-90,
  .@{fa-css-prefix}-rotate-180,
  .@{fa-css-prefix}-rotate-270,
  .@{fa-css-prefix}-flip-horizontal,
  .@{fa-css-prefix}-flip-vertical,
  .@{fa-css-prefix}-flip-both {
    filter: none;
  }
}


// Stacked Icons
// -------------------------

.@{fa-css-prefix}-stack {
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2em;
}

.@{fa-css-prefix}-stack-1x, .@{fa-css-prefix}-stack-2x {
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%;
}

.@{fa-css-prefix}-stack-1x { line-height: inherit; }
.@{fa-css-prefix}-stack-2x { font-size: 2em; }
.@{fa-css-prefix}-inverse { color: @fa-inverse; }


/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */

.@{fa-css-prefix}-500px:before { content: @fa-var-500px; }
.@{fa-css-prefix}-abacus:before { content: @fa-var-abacus; }
.@{fa-css-prefix}-accessible-icon:before { content: @fa-var-accessible-icon; }
.@{fa-css-prefix}-accusoft:before { content: @fa-var-accusoft; }
.@{fa-css-prefix}-acorn:before { content: @fa-var-acorn; }
.@{fa-css-prefix}-acquisitions-incorporated:before { content: @fa-var-acquisitions-incorporated; }
.@{fa-css-prefix}-ad:before { content: @fa-var-ad; }
.@{fa-css-prefix}-address-book:before { content: @fa-var-address-book; }
.@{fa-css-prefix}-address-card:before { content: @fa-var-address-card; }
.@{fa-css-prefix}-adjust:before { content: @fa-var-adjust; }
.@{fa-css-prefix}-adn:before { content: @fa-var-adn; }
.@{fa-css-prefix}-adobe:before { content: @fa-var-adobe; }
.@{fa-css-prefix}-adversal:before { content: @fa-var-adversal; }
.@{fa-css-prefix}-affiliatetheme:before { content: @fa-var-affiliatetheme; }
.@{fa-css-prefix}-air-freshener:before { content: @fa-var-air-freshener; }
.@{fa-css-prefix}-airbnb:before { content: @fa-var-airbnb; }
.@{fa-css-prefix}-alarm-clock:before { content: @fa-var-alarm-clock; }
.@{fa-css-prefix}-algolia:before { content: @fa-var-algolia; }
.@{fa-css-prefix}-alicorn:before { content: @fa-var-alicorn; }
.@{fa-css-prefix}-align-center:before { content: @fa-var-align-center; }
.@{fa-css-prefix}-align-justify:before { content: @fa-var-align-justify; }
.@{fa-css-prefix}-align-left:before { content: @fa-var-align-left; }
.@{fa-css-prefix}-align-right:before { content: @fa-var-align-right; }
.@{fa-css-prefix}-alipay:before { content: @fa-var-alipay; }
.@{fa-css-prefix}-allergies:before { content: @fa-var-allergies; }
.@{fa-css-prefix}-amazon:before { content: @fa-var-amazon; }
.@{fa-css-prefix}-amazon-pay:before { content: @fa-var-amazon-pay; }
.@{fa-css-prefix}-ambulance:before { content: @fa-var-ambulance; }
.@{fa-css-prefix}-american-sign-language-interpreting:before { content: @fa-var-american-sign-language-interpreting; }
.@{fa-css-prefix}-amilia:before { content: @fa-var-amilia; }
.@{fa-css-prefix}-analytics:before { content: @fa-var-analytics; }
.@{fa-css-prefix}-anchor:before { content: @fa-var-anchor; }
.@{fa-css-prefix}-android:before { content: @fa-var-android; }
.@{fa-css-prefix}-angel:before { content: @fa-var-angel; }
.@{fa-css-prefix}-angellist:before { content: @fa-var-angellist; }
.@{fa-css-prefix}-angle-double-down:before { content: @fa-var-angle-double-down; }
.@{fa-css-prefix}-angle-double-left:before { content: @fa-var-angle-double-left; }
.@{fa-css-prefix}-angle-double-right:before { content: @fa-var-angle-double-right; }
.@{fa-css-prefix}-angle-double-up:before { content: @fa-var-angle-double-up; }
.@{fa-css-prefix}-angle-down:before { content: @fa-var-angle-down; }
.@{fa-css-prefix}-angle-left:before { content: @fa-var-angle-left; }
.@{fa-css-prefix}-angle-right:before { content: @fa-var-angle-right; }
.@{fa-css-prefix}-angle-up:before { content: @fa-var-angle-up; }
.@{fa-css-prefix}-angry:before { content: @fa-var-angry; }
.@{fa-css-prefix}-angrycreative:before { content: @fa-var-angrycreative; }
.@{fa-css-prefix}-angular:before { content: @fa-var-angular; }
.@{fa-css-prefix}-ankh:before { content: @fa-var-ankh; }
.@{fa-css-prefix}-app-store:before { content: @fa-var-app-store; }
.@{fa-css-prefix}-app-store-ios:before { content: @fa-var-app-store-ios; }
.@{fa-css-prefix}-apper:before { content: @fa-var-apper; }
.@{fa-css-prefix}-apple:before { content: @fa-var-apple; }
.@{fa-css-prefix}-apple-alt:before { content: @fa-var-apple-alt; }
.@{fa-css-prefix}-apple-crate:before { content: @fa-var-apple-crate; }
.@{fa-css-prefix}-apple-pay:before { content: @fa-var-apple-pay; }
.@{fa-css-prefix}-archive:before { content: @fa-var-archive; }
.@{fa-css-prefix}-archway:before { content: @fa-var-archway; }
.@{fa-css-prefix}-arrow-alt-circle-down:before { content: @fa-var-arrow-alt-circle-down; }
.@{fa-css-prefix}-arrow-alt-circle-left:before { content: @fa-var-arrow-alt-circle-left; }
.@{fa-css-prefix}-arrow-alt-circle-right:before { content: @fa-var-arrow-alt-circle-right; }
.@{fa-css-prefix}-arrow-alt-circle-up:before { content: @fa-var-arrow-alt-circle-up; }
.@{fa-css-prefix}-arrow-alt-down:before { content: @fa-var-arrow-alt-down; }
.@{fa-css-prefix}-arrow-alt-from-bottom:before { content: @fa-var-arrow-alt-from-bottom; }
.@{fa-css-prefix}-arrow-alt-from-left:before { content: @fa-var-arrow-alt-from-left; }
.@{fa-css-prefix}-arrow-alt-from-right:before { content: @fa-var-arrow-alt-from-right; }
.@{fa-css-prefix}-arrow-alt-from-top:before { content: @fa-var-arrow-alt-from-top; }
.@{fa-css-prefix}-arrow-alt-left:before { content: @fa-var-arrow-alt-left; }
.@{fa-css-prefix}-arrow-alt-right:before { content: @fa-var-arrow-alt-right; }
.@{fa-css-prefix}-arrow-alt-square-down:before { content: @fa-var-arrow-alt-square-down; }
.@{fa-css-prefix}-arrow-alt-square-left:before { content: @fa-var-arrow-alt-square-left; }
.@{fa-css-prefix}-arrow-alt-square-right:before { content: @fa-var-arrow-alt-square-right; }
.@{fa-css-prefix}-arrow-alt-square-up:before { content: @fa-var-arrow-alt-square-up; }
.@{fa-css-prefix}-arrow-alt-to-bottom:before { content: @fa-var-arrow-alt-to-bottom; }
.@{fa-css-prefix}-arrow-alt-to-left:before { content: @fa-var-arrow-alt-to-left; }
.@{fa-css-prefix}-arrow-alt-to-right:before { content: @fa-var-arrow-alt-to-right; }
.@{fa-css-prefix}-arrow-alt-to-top:before { content: @fa-var-arrow-alt-to-top; }
.@{fa-css-prefix}-arrow-alt-up:before { content: @fa-var-arrow-alt-up; }
.@{fa-css-prefix}-arrow-circle-down:before { content: @fa-var-arrow-circle-down; }
.@{fa-css-prefix}-arrow-circle-left:before { content: @fa-var-arrow-circle-left; }
.@{fa-css-prefix}-arrow-circle-right:before { content: @fa-var-arrow-circle-right; }
.@{fa-css-prefix}-arrow-circle-up:before { content: @fa-var-arrow-circle-up; }
.@{fa-css-prefix}-arrow-down:before { content: @fa-var-arrow-down; }
.@{fa-css-prefix}-arrow-from-bottom:before { content: @fa-var-arrow-from-bottom; }
.@{fa-css-prefix}-arrow-from-left:before { content: @fa-var-arrow-from-left; }
.@{fa-css-prefix}-arrow-from-right:before { content: @fa-var-arrow-from-right; }
.@{fa-css-prefix}-arrow-from-top:before { content: @fa-var-arrow-from-top; }
.@{fa-css-prefix}-arrow-left:before { content: @fa-var-arrow-left; }
.@{fa-css-prefix}-arrow-right:before { content: @fa-var-arrow-right; }
.@{fa-css-prefix}-arrow-square-down:before { content: @fa-var-arrow-square-down; }
.@{fa-css-prefix}-arrow-square-left:before { content: @fa-var-arrow-square-left; }
.@{fa-css-prefix}-arrow-square-right:before { content: @fa-var-arrow-square-right; }
.@{fa-css-prefix}-arrow-square-up:before { content: @fa-var-arrow-square-up; }
.@{fa-css-prefix}-arrow-to-bottom:before { content: @fa-var-arrow-to-bottom; }
.@{fa-css-prefix}-arrow-to-left:before { content: @fa-var-arrow-to-left; }
.@{fa-css-prefix}-arrow-to-right:before { content: @fa-var-arrow-to-right; }
.@{fa-css-prefix}-arrow-to-top:before { content: @fa-var-arrow-to-top; }
.@{fa-css-prefix}-arrow-up:before { content: @fa-var-arrow-up; }
.@{fa-css-prefix}-arrows:before { content: @fa-var-arrows; }
.@{fa-css-prefix}-arrows-alt:before { content: @fa-var-arrows-alt; }
.@{fa-css-prefix}-arrows-alt-h:before { content: @fa-var-arrows-alt-h; }
.@{fa-css-prefix}-arrows-alt-v:before { content: @fa-var-arrows-alt-v; }
.@{fa-css-prefix}-arrows-h:before { content: @fa-var-arrows-h; }
.@{fa-css-prefix}-arrows-v:before { content: @fa-var-arrows-v; }
.@{fa-css-prefix}-artstation:before { content: @fa-var-artstation; }
.@{fa-css-prefix}-assistive-listening-systems:before { content: @fa-var-assistive-listening-systems; }
.@{fa-css-prefix}-asterisk:before { content: @fa-var-asterisk; }
.@{fa-css-prefix}-asymmetrik:before { content: @fa-var-asymmetrik; }
.@{fa-css-prefix}-at:before { content: @fa-var-at; }
.@{fa-css-prefix}-atlas:before { content: @fa-var-atlas; }
.@{fa-css-prefix}-atlassian:before { content: @fa-var-atlassian; }
.@{fa-css-prefix}-atom:before { content: @fa-var-atom; }
.@{fa-css-prefix}-atom-alt:before { content: @fa-var-atom-alt; }
.@{fa-css-prefix}-audible:before { content: @fa-var-audible; }
.@{fa-css-prefix}-audio-description:before { content: @fa-var-audio-description; }
.@{fa-css-prefix}-autoprefixer:before { content: @fa-var-autoprefixer; }
.@{fa-css-prefix}-avianex:before { content: @fa-var-avianex; }
.@{fa-css-prefix}-aviato:before { content: @fa-var-aviato; }
.@{fa-css-prefix}-award:before { content: @fa-var-award; }
.@{fa-css-prefix}-aws:before { content: @fa-var-aws; }
.@{fa-css-prefix}-axe:before { content: @fa-var-axe; }
.@{fa-css-prefix}-axe-battle:before { content: @fa-var-axe-battle; }
.@{fa-css-prefix}-baby:before { content: @fa-var-baby; }
.@{fa-css-prefix}-baby-carriage:before { content: @fa-var-baby-carriage; }
.@{fa-css-prefix}-backpack:before { content: @fa-var-backpack; }
.@{fa-css-prefix}-backspace:before { content: @fa-var-backspace; }
.@{fa-css-prefix}-backward:before { content: @fa-var-backward; }
.@{fa-css-prefix}-bacon:before { content: @fa-var-bacon; }
.@{fa-css-prefix}-badge:before { content: @fa-var-badge; }
.@{fa-css-prefix}-badge-check:before { content: @fa-var-badge-check; }
.@{fa-css-prefix}-badge-dollar:before { content: @fa-var-badge-dollar; }
.@{fa-css-prefix}-badge-percent:before { content: @fa-var-badge-percent; }
.@{fa-css-prefix}-badger-honey:before { content: @fa-var-badger-honey; }
.@{fa-css-prefix}-balance-scale:before { content: @fa-var-balance-scale; }
.@{fa-css-prefix}-balance-scale-left:before { content: @fa-var-balance-scale-left; }
.@{fa-css-prefix}-balance-scale-right:before { content: @fa-var-balance-scale-right; }
.@{fa-css-prefix}-ball-pile:before { content: @fa-var-ball-pile; }
.@{fa-css-prefix}-ballot:before { content: @fa-var-ballot; }
.@{fa-css-prefix}-ballot-check:before { content: @fa-var-ballot-check; }
.@{fa-css-prefix}-ban:before { content: @fa-var-ban; }
.@{fa-css-prefix}-band-aid:before { content: @fa-var-band-aid; }
.@{fa-css-prefix}-bandcamp:before { content: @fa-var-bandcamp; }
.@{fa-css-prefix}-barcode:before { content: @fa-var-barcode; }
.@{fa-css-prefix}-barcode-alt:before { content: @fa-var-barcode-alt; }
.@{fa-css-prefix}-barcode-read:before { content: @fa-var-barcode-read; }
.@{fa-css-prefix}-barcode-scan:before { content: @fa-var-barcode-scan; }
.@{fa-css-prefix}-bars:before { content: @fa-var-bars; }
.@{fa-css-prefix}-baseball:before { content: @fa-var-baseball; }
.@{fa-css-prefix}-baseball-ball:before { content: @fa-var-baseball-ball; }
.@{fa-css-prefix}-basketball-ball:before { content: @fa-var-basketball-ball; }
.@{fa-css-prefix}-basketball-hoop:before { content: @fa-var-basketball-hoop; }
.@{fa-css-prefix}-bat:before { content: @fa-var-bat; }
.@{fa-css-prefix}-bath:before { content: @fa-var-bath; }
.@{fa-css-prefix}-battery-bolt:before { content: @fa-var-battery-bolt; }
.@{fa-css-prefix}-battery-empty:before { content: @fa-var-battery-empty; }
.@{fa-css-prefix}-battery-full:before { content: @fa-var-battery-full; }
.@{fa-css-prefix}-battery-half:before { content: @fa-var-battery-half; }
.@{fa-css-prefix}-battery-quarter:before { content: @fa-var-battery-quarter; }
.@{fa-css-prefix}-battery-slash:before { content: @fa-var-battery-slash; }
.@{fa-css-prefix}-battery-three-quarters:before { content: @fa-var-battery-three-quarters; }
.@{fa-css-prefix}-battle-net:before { content: @fa-var-battle-net; }
.@{fa-css-prefix}-bed:before { content: @fa-var-bed; }
.@{fa-css-prefix}-beer:before { content: @fa-var-beer; }
.@{fa-css-prefix}-behance:before { content: @fa-var-behance; }
.@{fa-css-prefix}-behance-square:before { content: @fa-var-behance-square; }
.@{fa-css-prefix}-bell:before { content: @fa-var-bell; }
.@{fa-css-prefix}-bell-school:before { content: @fa-var-bell-school; }
.@{fa-css-prefix}-bell-school-slash:before { content: @fa-var-bell-school-slash; }
.@{fa-css-prefix}-bell-slash:before { content: @fa-var-bell-slash; }
.@{fa-css-prefix}-bells:before { content: @fa-var-bells; }
.@{fa-css-prefix}-bezier-curve:before { content: @fa-var-bezier-curve; }
.@{fa-css-prefix}-bible:before { content: @fa-var-bible; }
.@{fa-css-prefix}-bicycle:before { content: @fa-var-bicycle; }
.@{fa-css-prefix}-bimobject:before { content: @fa-var-bimobject; }
.@{fa-css-prefix}-binoculars:before { content: @fa-var-binoculars; }
.@{fa-css-prefix}-biohazard:before { content: @fa-var-biohazard; }
.@{fa-css-prefix}-birthday-cake:before { content: @fa-var-birthday-cake; }
.@{fa-css-prefix}-bitbucket:before { content: @fa-var-bitbucket; }
.@{fa-css-prefix}-bitcoin:before { content: @fa-var-bitcoin; }
.@{fa-css-prefix}-bity:before { content: @fa-var-bity; }
.@{fa-css-prefix}-black-tie:before { content: @fa-var-black-tie; }
.@{fa-css-prefix}-blackberry:before { content: @fa-var-blackberry; }
.@{fa-css-prefix}-blanket:before { content: @fa-var-blanket; }
.@{fa-css-prefix}-blender:before { content: @fa-var-blender; }
.@{fa-css-prefix}-blender-phone:before { content: @fa-var-blender-phone; }
.@{fa-css-prefix}-blind:before { content: @fa-var-blind; }
.@{fa-css-prefix}-blog:before { content: @fa-var-blog; }
.@{fa-css-prefix}-blogger:before { content: @fa-var-blogger; }
.@{fa-css-prefix}-blogger-b:before { content: @fa-var-blogger-b; }
.@{fa-css-prefix}-bluetooth:before { content: @fa-var-bluetooth; }
.@{fa-css-prefix}-bluetooth-b:before { content: @fa-var-bluetooth-b; }
.@{fa-css-prefix}-bold:before { content: @fa-var-bold; }
.@{fa-css-prefix}-bolt:before { content: @fa-var-bolt; }
.@{fa-css-prefix}-bomb:before { content: @fa-var-bomb; }
.@{fa-css-prefix}-bone:before { content: @fa-var-bone; }
.@{fa-css-prefix}-bone-break:before { content: @fa-var-bone-break; }
.@{fa-css-prefix}-bong:before { content: @fa-var-bong; }
.@{fa-css-prefix}-book:before { content: @fa-var-book; }
.@{fa-css-prefix}-book-alt:before { content: @fa-var-book-alt; }
.@{fa-css-prefix}-book-dead:before { content: @fa-var-book-dead; }
.@{fa-css-prefix}-book-heart:before { content: @fa-var-book-heart; }
.@{fa-css-prefix}-book-medical:before { content: @fa-var-book-medical; }
.@{fa-css-prefix}-book-open:before { content: @fa-var-book-open; }
.@{fa-css-prefix}-book-reader:before { content: @fa-var-book-reader; }
.@{fa-css-prefix}-book-spells:before { content: @fa-var-book-spells; }
.@{fa-css-prefix}-book-user:before { content: @fa-var-book-user; }
.@{fa-css-prefix}-bookmark:before { content: @fa-var-bookmark; }
.@{fa-css-prefix}-books:before { content: @fa-var-books; }
.@{fa-css-prefix}-books-medical:before { content: @fa-var-books-medical; }
.@{fa-css-prefix}-boot:before { content: @fa-var-boot; }
.@{fa-css-prefix}-booth-curtain:before { content: @fa-var-booth-curtain; }
.@{fa-css-prefix}-bootstrap:before { content: @fa-var-bootstrap; }
.@{fa-css-prefix}-bow-arrow:before { content: @fa-var-bow-arrow; }
.@{fa-css-prefix}-bowling-ball:before { content: @fa-var-bowling-ball; }
.@{fa-css-prefix}-bowling-pins:before { content: @fa-var-bowling-pins; }
.@{fa-css-prefix}-box:before { content: @fa-var-box; }
.@{fa-css-prefix}-box-alt:before { content: @fa-var-box-alt; }
.@{fa-css-prefix}-box-ballot:before { content: @fa-var-box-ballot; }
.@{fa-css-prefix}-box-check:before { content: @fa-var-box-check; }
.@{fa-css-prefix}-box-fragile:before { content: @fa-var-box-fragile; }
.@{fa-css-prefix}-box-full:before { content: @fa-var-box-full; }
.@{fa-css-prefix}-box-heart:before { content: @fa-var-box-heart; }
.@{fa-css-prefix}-box-open:before { content: @fa-var-box-open; }
.@{fa-css-prefix}-box-up:before { content: @fa-var-box-up; }
.@{fa-css-prefix}-box-usd:before { content: @fa-var-box-usd; }
.@{fa-css-prefix}-boxes:before { content: @fa-var-boxes; }
.@{fa-css-prefix}-boxes-alt:before { content: @fa-var-boxes-alt; }
.@{fa-css-prefix}-boxing-glove:before { content: @fa-var-boxing-glove; }
.@{fa-css-prefix}-brackets:before { content: @fa-var-brackets; }
.@{fa-css-prefix}-brackets-curly:before { content: @fa-var-brackets-curly; }
.@{fa-css-prefix}-braille:before { content: @fa-var-braille; }
.@{fa-css-prefix}-brain:before { content: @fa-var-brain; }
.@{fa-css-prefix}-bread-loaf:before { content: @fa-var-bread-loaf; }
.@{fa-css-prefix}-bread-slice:before { content: @fa-var-bread-slice; }
.@{fa-css-prefix}-briefcase:before { content: @fa-var-briefcase; }
.@{fa-css-prefix}-briefcase-medical:before { content: @fa-var-briefcase-medical; }
.@{fa-css-prefix}-broadcast-tower:before { content: @fa-var-broadcast-tower; }
.@{fa-css-prefix}-broom:before { content: @fa-var-broom; }
.@{fa-css-prefix}-browser:before { content: @fa-var-browser; }
.@{fa-css-prefix}-brush:before { content: @fa-var-brush; }
.@{fa-css-prefix}-btc:before { content: @fa-var-btc; }
.@{fa-css-prefix}-buffer:before { content: @fa-var-buffer; }
.@{fa-css-prefix}-bug:before { content: @fa-var-bug; }
.@{fa-css-prefix}-building:before { content: @fa-var-building; }
.@{fa-css-prefix}-bullhorn:before { content: @fa-var-bullhorn; }
.@{fa-css-prefix}-bullseye:before { content: @fa-var-bullseye; }
.@{fa-css-prefix}-bullseye-arrow:before { content: @fa-var-bullseye-arrow; }
.@{fa-css-prefix}-bullseye-pointer:before { content: @fa-var-bullseye-pointer; }
.@{fa-css-prefix}-burn:before { content: @fa-var-burn; }
.@{fa-css-prefix}-buromobelexperte:before { content: @fa-var-buromobelexperte; }
.@{fa-css-prefix}-burrito:before { content: @fa-var-burrito; }
.@{fa-css-prefix}-bus:before { content: @fa-var-bus; }
.@{fa-css-prefix}-bus-alt:before { content: @fa-var-bus-alt; }
.@{fa-css-prefix}-bus-school:before { content: @fa-var-bus-school; }
.@{fa-css-prefix}-business-time:before { content: @fa-var-business-time; }
.@{fa-css-prefix}-buysellads:before { content: @fa-var-buysellads; }
.@{fa-css-prefix}-cabinet-filing:before { content: @fa-var-cabinet-filing; }
.@{fa-css-prefix}-calculator:before { content: @fa-var-calculator; }
.@{fa-css-prefix}-calculator-alt:before { content: @fa-var-calculator-alt; }
.@{fa-css-prefix}-calendar:before { content: @fa-var-calendar; }
.@{fa-css-prefix}-calendar-alt:before { content: @fa-var-calendar-alt; }
.@{fa-css-prefix}-calendar-check:before { content: @fa-var-calendar-check; }
.@{fa-css-prefix}-calendar-day:before { content: @fa-var-calendar-day; }
.@{fa-css-prefix}-calendar-edit:before { content: @fa-var-calendar-edit; }
.@{fa-css-prefix}-calendar-exclamation:before { content: @fa-var-calendar-exclamation; }
.@{fa-css-prefix}-calendar-minus:before { content: @fa-var-calendar-minus; }
.@{fa-css-prefix}-calendar-plus:before { content: @fa-var-calendar-plus; }
.@{fa-css-prefix}-calendar-star:before { content: @fa-var-calendar-star; }
.@{fa-css-prefix}-calendar-times:before { content: @fa-var-calendar-times; }
.@{fa-css-prefix}-calendar-week:before { content: @fa-var-calendar-week; }
.@{fa-css-prefix}-camera:before { content: @fa-var-camera; }
.@{fa-css-prefix}-camera-alt:before { content: @fa-var-camera-alt; }
.@{fa-css-prefix}-camera-retro:before { content: @fa-var-camera-retro; }
.@{fa-css-prefix}-campfire:before { content: @fa-var-campfire; }
.@{fa-css-prefix}-campground:before { content: @fa-var-campground; }
.@{fa-css-prefix}-canadian-maple-leaf:before { content: @fa-var-canadian-maple-leaf; }
.@{fa-css-prefix}-candle-holder:before { content: @fa-var-candle-holder; }
.@{fa-css-prefix}-candy-cane:before { content: @fa-var-candy-cane; }
.@{fa-css-prefix}-candy-corn:before { content: @fa-var-candy-corn; }
.@{fa-css-prefix}-cannabis:before { content: @fa-var-cannabis; }
.@{fa-css-prefix}-capsules:before { content: @fa-var-capsules; }
.@{fa-css-prefix}-car:before { content: @fa-var-car; }
.@{fa-css-prefix}-car-alt:before { content: @fa-var-car-alt; }
.@{fa-css-prefix}-car-battery:before { content: @fa-var-car-battery; }
.@{fa-css-prefix}-car-bump:before { content: @fa-var-car-bump; }
.@{fa-css-prefix}-car-crash:before { content: @fa-var-car-crash; }
.@{fa-css-prefix}-car-garage:before { content: @fa-var-car-garage; }
.@{fa-css-prefix}-car-mechanic:before { content: @fa-var-car-mechanic; }
.@{fa-css-prefix}-car-side:before { content: @fa-var-car-side; }
.@{fa-css-prefix}-car-tilt:before { content: @fa-var-car-tilt; }
.@{fa-css-prefix}-car-wash:before { content: @fa-var-car-wash; }
.@{fa-css-prefix}-caret-circle-down:before { content: @fa-var-caret-circle-down; }
.@{fa-css-prefix}-caret-circle-left:before { content: @fa-var-caret-circle-left; }
.@{fa-css-prefix}-caret-circle-right:before { content: @fa-var-caret-circle-right; }
.@{fa-css-prefix}-caret-circle-up:before { content: @fa-var-caret-circle-up; }
.@{fa-css-prefix}-caret-down:before { content: @fa-var-caret-down; }
.@{fa-css-prefix}-caret-left:before { content: @fa-var-caret-left; }
.@{fa-css-prefix}-caret-right:before { content: @fa-var-caret-right; }
.@{fa-css-prefix}-caret-square-down:before { content: @fa-var-caret-square-down; }
.@{fa-css-prefix}-caret-square-left:before { content: @fa-var-caret-square-left; }
.@{fa-css-prefix}-caret-square-right:before { content: @fa-var-caret-square-right; }
.@{fa-css-prefix}-caret-square-up:before { content: @fa-var-caret-square-up; }
.@{fa-css-prefix}-caret-up:before { content: @fa-var-caret-up; }
.@{fa-css-prefix}-carrot:before { content: @fa-var-carrot; }
.@{fa-css-prefix}-cart-arrow-down:before { content: @fa-var-cart-arrow-down; }
.@{fa-css-prefix}-cart-plus:before { content: @fa-var-cart-plus; }
.@{fa-css-prefix}-cash-register:before { content: @fa-var-cash-register; }
.@{fa-css-prefix}-cat:before { content: @fa-var-cat; }
.@{fa-css-prefix}-cauldron:before { content: @fa-var-cauldron; }
.@{fa-css-prefix}-cc-amazon-pay:before { content: @fa-var-cc-amazon-pay; }
.@{fa-css-prefix}-cc-amex:before { content: @fa-var-cc-amex; }
.@{fa-css-prefix}-cc-apple-pay:before { content: @fa-var-cc-apple-pay; }
.@{fa-css-prefix}-cc-diners-club:before { content: @fa-var-cc-diners-club; }
.@{fa-css-prefix}-cc-discover:before { content: @fa-var-cc-discover; }
.@{fa-css-prefix}-cc-jcb:before { content: @fa-var-cc-jcb; }
.@{fa-css-prefix}-cc-mastercard:before { content: @fa-var-cc-mastercard; }
.@{fa-css-prefix}-cc-paypal:before { content: @fa-var-cc-paypal; }
.@{fa-css-prefix}-cc-stripe:before { content: @fa-var-cc-stripe; }
.@{fa-css-prefix}-cc-visa:before { content: @fa-var-cc-visa; }
.@{fa-css-prefix}-centercode:before { content: @fa-var-centercode; }
.@{fa-css-prefix}-centos:before { content: @fa-var-centos; }
.@{fa-css-prefix}-certificate:before { content: @fa-var-certificate; }
.@{fa-css-prefix}-chair:before { content: @fa-var-chair; }
.@{fa-css-prefix}-chair-office:before { content: @fa-var-chair-office; }
.@{fa-css-prefix}-chalkboard:before { content: @fa-var-chalkboard; }
.@{fa-css-prefix}-chalkboard-teacher:before { content: @fa-var-chalkboard-teacher; }
.@{fa-css-prefix}-charging-station:before { content: @fa-var-charging-station; }
.@{fa-css-prefix}-chart-area:before { content: @fa-var-chart-area; }
.@{fa-css-prefix}-chart-bar:before { content: @fa-var-chart-bar; }
.@{fa-css-prefix}-chart-line:before { content: @fa-var-chart-line; }
.@{fa-css-prefix}-chart-line-down:before { content: @fa-var-chart-line-down; }
.@{fa-css-prefix}-chart-network:before { content: @fa-var-chart-network; }
.@{fa-css-prefix}-chart-pie:before { content: @fa-var-chart-pie; }
.@{fa-css-prefix}-chart-pie-alt:before { content: @fa-var-chart-pie-alt; }
.@{fa-css-prefix}-chart-scatter:before { content: @fa-var-chart-scatter; }
.@{fa-css-prefix}-check:before { content: @fa-var-check; }
.@{fa-css-prefix}-check-circle:before { content: @fa-var-check-circle; }
.@{fa-css-prefix}-check-double:before { content: @fa-var-check-double; }
.@{fa-css-prefix}-check-square:before { content: @fa-var-check-square; }
.@{fa-css-prefix}-cheese:before { content: @fa-var-cheese; }
.@{fa-css-prefix}-cheese-swiss:before { content: @fa-var-cheese-swiss; }
.@{fa-css-prefix}-cheeseburger:before { content: @fa-var-cheeseburger; }
.@{fa-css-prefix}-chess:before { content: @fa-var-chess; }
.@{fa-css-prefix}-chess-bishop:before { content: @fa-var-chess-bishop; }
.@{fa-css-prefix}-chess-bishop-alt:before { content: @fa-var-chess-bishop-alt; }
.@{fa-css-prefix}-chess-board:before { content: @fa-var-chess-board; }
.@{fa-css-prefix}-chess-clock:before { content: @fa-var-chess-clock; }
.@{fa-css-prefix}-chess-clock-alt:before { content: @fa-var-chess-clock-alt; }
.@{fa-css-prefix}-chess-king:before { content: @fa-var-chess-king; }
.@{fa-css-prefix}-chess-king-alt:before { content: @fa-var-chess-king-alt; }
.@{fa-css-prefix}-chess-knight:before { content: @fa-var-chess-knight; }
.@{fa-css-prefix}-chess-knight-alt:before { content: @fa-var-chess-knight-alt; }
.@{fa-css-prefix}-chess-pawn:before { content: @fa-var-chess-pawn; }
.@{fa-css-prefix}-chess-pawn-alt:before { content: @fa-var-chess-pawn-alt; }
.@{fa-css-prefix}-chess-queen:before { content: @fa-var-chess-queen; }
.@{fa-css-prefix}-chess-queen-alt:before { content: @fa-var-chess-queen-alt; }
.@{fa-css-prefix}-chess-rook:before { content: @fa-var-chess-rook; }
.@{fa-css-prefix}-chess-rook-alt:before { content: @fa-var-chess-rook-alt; }
.@{fa-css-prefix}-chevron-circle-down:before { content: @fa-var-chevron-circle-down; }
.@{fa-css-prefix}-chevron-circle-left:before { content: @fa-var-chevron-circle-left; }
.@{fa-css-prefix}-chevron-circle-right:before { content: @fa-var-chevron-circle-right; }
.@{fa-css-prefix}-chevron-circle-up:before { content: @fa-var-chevron-circle-up; }
.@{fa-css-prefix}-chevron-double-down:before { content: @fa-var-chevron-double-down; }
.@{fa-css-prefix}-chevron-double-left:before { content: @fa-var-chevron-double-left; }
.@{fa-css-prefix}-chevron-double-right:before { content: @fa-var-chevron-double-right; }
.@{fa-css-prefix}-chevron-double-up:before { content: @fa-var-chevron-double-up; }
.@{fa-css-prefix}-chevron-down:before { content: @fa-var-chevron-down; }
.@{fa-css-prefix}-chevron-left:before { content: @fa-var-chevron-left; }
.@{fa-css-prefix}-chevron-right:before { content: @fa-var-chevron-right; }
.@{fa-css-prefix}-chevron-square-down:before { content: @fa-var-chevron-square-down; }
.@{fa-css-prefix}-chevron-square-left:before { content: @fa-var-chevron-square-left; }
.@{fa-css-prefix}-chevron-square-right:before { content: @fa-var-chevron-square-right; }
.@{fa-css-prefix}-chevron-square-up:before { content: @fa-var-chevron-square-up; }
.@{fa-css-prefix}-chevron-up:before { content: @fa-var-chevron-up; }
.@{fa-css-prefix}-child:before { content: @fa-var-child; }
.@{fa-css-prefix}-chimney:before { content: @fa-var-chimney; }
.@{fa-css-prefix}-chrome:before { content: @fa-var-chrome; }
.@{fa-css-prefix}-chromecast:before { content: @fa-var-chromecast; }
.@{fa-css-prefix}-church:before { content: @fa-var-church; }
.@{fa-css-prefix}-circle:before { content: @fa-var-circle; }
.@{fa-css-prefix}-circle-notch:before { content: @fa-var-circle-notch; }
.@{fa-css-prefix}-city:before { content: @fa-var-city; }
.@{fa-css-prefix}-claw-marks:before { content: @fa-var-claw-marks; }
.@{fa-css-prefix}-clinic-medical:before { content: @fa-var-clinic-medical; }
.@{fa-css-prefix}-clipboard:before { content: @fa-var-clipboard; }
.@{fa-css-prefix}-clipboard-check:before { content: @fa-var-clipboard-check; }
.@{fa-css-prefix}-clipboard-list:before { content: @fa-var-clipboard-list; }
.@{fa-css-prefix}-clipboard-list-check:before { content: @fa-var-clipboard-list-check; }
.@{fa-css-prefix}-clipboard-prescription:before { content: @fa-var-clipboard-prescription; }
.@{fa-css-prefix}-clipboard-user:before { content: @fa-var-clipboard-user; }
.@{fa-css-prefix}-clock:before { content: @fa-var-clock; }
.@{fa-css-prefix}-clone:before { content: @fa-var-clone; }
.@{fa-css-prefix}-closed-captioning:before { content: @fa-var-closed-captioning; }
.@{fa-css-prefix}-cloud:before { content: @fa-var-cloud; }
.@{fa-css-prefix}-cloud-download:before { content: @fa-var-cloud-download; }
.@{fa-css-prefix}-cloud-download-alt:before { content: @fa-var-cloud-download-alt; }
.@{fa-css-prefix}-cloud-drizzle:before { content: @fa-var-cloud-drizzle; }
.@{fa-css-prefix}-cloud-hail:before { content: @fa-var-cloud-hail; }
.@{fa-css-prefix}-cloud-hail-mixed:before { content: @fa-var-cloud-hail-mixed; }
.@{fa-css-prefix}-cloud-meatball:before { content: @fa-var-cloud-meatball; }
.@{fa-css-prefix}-cloud-moon:before { content: @fa-var-cloud-moon; }
.@{fa-css-prefix}-cloud-moon-rain:before { content: @fa-var-cloud-moon-rain; }
.@{fa-css-prefix}-cloud-rain:before { content: @fa-var-cloud-rain; }
.@{fa-css-prefix}-cloud-rainbow:before { content: @fa-var-cloud-rainbow; }
.@{fa-css-prefix}-cloud-showers:before { content: @fa-var-cloud-showers; }
.@{fa-css-prefix}-cloud-showers-heavy:before { content: @fa-var-cloud-showers-heavy; }
.@{fa-css-prefix}-cloud-sleet:before { content: @fa-var-cloud-sleet; }
.@{fa-css-prefix}-cloud-snow:before { content: @fa-var-cloud-snow; }
.@{fa-css-prefix}-cloud-sun:before { content: @fa-var-cloud-sun; }
.@{fa-css-prefix}-cloud-sun-rain:before { content: @fa-var-cloud-sun-rain; }
.@{fa-css-prefix}-cloud-upload:before { content: @fa-var-cloud-upload; }
.@{fa-css-prefix}-cloud-upload-alt:before { content: @fa-var-cloud-upload-alt; }
.@{fa-css-prefix}-clouds:before { content: @fa-var-clouds; }
.@{fa-css-prefix}-clouds-moon:before { content: @fa-var-clouds-moon; }
.@{fa-css-prefix}-clouds-sun:before { content: @fa-var-clouds-sun; }
.@{fa-css-prefix}-cloudscale:before { content: @fa-var-cloudscale; }
.@{fa-css-prefix}-cloudsmith:before { content: @fa-var-cloudsmith; }
.@{fa-css-prefix}-cloudversify:before { content: @fa-var-cloudversify; }
.@{fa-css-prefix}-club:before { content: @fa-var-club; }
.@{fa-css-prefix}-cocktail:before { content: @fa-var-cocktail; }
.@{fa-css-prefix}-code:before { content: @fa-var-code; }
.@{fa-css-prefix}-code-branch:before { content: @fa-var-code-branch; }
.@{fa-css-prefix}-code-commit:before { content: @fa-var-code-commit; }
.@{fa-css-prefix}-code-merge:before { content: @fa-var-code-merge; }
.@{fa-css-prefix}-codepen:before { content: @fa-var-codepen; }
.@{fa-css-prefix}-codiepie:before { content: @fa-var-codiepie; }
.@{fa-css-prefix}-coffee:before { content: @fa-var-coffee; }
.@{fa-css-prefix}-coffee-togo:before { content: @fa-var-coffee-togo; }
.@{fa-css-prefix}-coffin:before { content: @fa-var-coffin; }
.@{fa-css-prefix}-cog:before { content: @fa-var-cog; }
.@{fa-css-prefix}-cogs:before { content: @fa-var-cogs; }
.@{fa-css-prefix}-coins:before { content: @fa-var-coins; }
.@{fa-css-prefix}-columns:before { content: @fa-var-columns; }
.@{fa-css-prefix}-comment:before { content: @fa-var-comment; }
.@{fa-css-prefix}-comment-alt:before { content: @fa-var-comment-alt; }
.@{fa-css-prefix}-comment-alt-check:before { content: @fa-var-comment-alt-check; }
.@{fa-css-prefix}-comment-alt-dollar:before { content: @fa-var-comment-alt-dollar; }
.@{fa-css-prefix}-comment-alt-dots:before { content: @fa-var-comment-alt-dots; }
.@{fa-css-prefix}-comment-alt-edit:before { content: @fa-var-comment-alt-edit; }
.@{fa-css-prefix}-comment-alt-exclamation:before { content: @fa-var-comment-alt-exclamation; }
.@{fa-css-prefix}-comment-alt-lines:before { content: @fa-var-comment-alt-lines; }
.@{fa-css-prefix}-comment-alt-medical:before { content: @fa-var-comment-alt-medical; }
.@{fa-css-prefix}-comment-alt-minus:before { content: @fa-var-comment-alt-minus; }
.@{fa-css-prefix}-comment-alt-plus:before { content: @fa-var-comment-alt-plus; }
.@{fa-css-prefix}-comment-alt-slash:before { content: @fa-var-comment-alt-slash; }
.@{fa-css-prefix}-comment-alt-smile:before { content: @fa-var-comment-alt-smile; }
.@{fa-css-prefix}-comment-alt-times:before { content: @fa-var-comment-alt-times; }
.@{fa-css-prefix}-comment-check:before { content: @fa-var-comment-check; }
.@{fa-css-prefix}-comment-dollar:before { content: @fa-var-comment-dollar; }
.@{fa-css-prefix}-comment-dots:before { content: @fa-var-comment-dots; }
.@{fa-css-prefix}-comment-edit:before { content: @fa-var-comment-edit; }
.@{fa-css-prefix}-comment-exclamation:before { content: @fa-var-comment-exclamation; }
.@{fa-css-prefix}-comment-lines:before { content: @fa-var-comment-lines; }
.@{fa-css-prefix}-comment-medical:before { content: @fa-var-comment-medical; }
.@{fa-css-prefix}-comment-minus:before { content: @fa-var-comment-minus; }
.@{fa-css-prefix}-comment-plus:before { content: @fa-var-comment-plus; }
.@{fa-css-prefix}-comment-slash:before { content: @fa-var-comment-slash; }
.@{fa-css-prefix}-comment-smile:before { content: @fa-var-comment-smile; }
.@{fa-css-prefix}-comment-times:before { content: @fa-var-comment-times; }
.@{fa-css-prefix}-comments:before { content: @fa-var-comments; }
.@{fa-css-prefix}-comments-alt:before { content: @fa-var-comments-alt; }
.@{fa-css-prefix}-comments-alt-dollar:before { content: @fa-var-comments-alt-dollar; }
.@{fa-css-prefix}-comments-dollar:before { content: @fa-var-comments-dollar; }
.@{fa-css-prefix}-compact-disc:before { content: @fa-var-compact-disc; }
.@{fa-css-prefix}-compass:before { content: @fa-var-compass; }
.@{fa-css-prefix}-compass-slash:before { content: @fa-var-compass-slash; }
.@{fa-css-prefix}-compress:before { content: @fa-var-compress; }
.@{fa-css-prefix}-compress-alt:before { content: @fa-var-compress-alt; }
.@{fa-css-prefix}-compress-arrows-alt:before { content: @fa-var-compress-arrows-alt; }
.@{fa-css-prefix}-compress-wide:before { content: @fa-var-compress-wide; }
.@{fa-css-prefix}-concierge-bell:before { content: @fa-var-concierge-bell; }
.@{fa-css-prefix}-confluence:before { content: @fa-var-confluence; }
.@{fa-css-prefix}-connectdevelop:before { content: @fa-var-connectdevelop; }
.@{fa-css-prefix}-container-storage:before { content: @fa-var-container-storage; }
.@{fa-css-prefix}-contao:before { content: @fa-var-contao; }
.@{fa-css-prefix}-conveyor-belt:before { content: @fa-var-conveyor-belt; }
.@{fa-css-prefix}-conveyor-belt-alt:before { content: @fa-var-conveyor-belt-alt; }
.@{fa-css-prefix}-cookie:before { content: @fa-var-cookie; }
.@{fa-css-prefix}-cookie-bite:before { content: @fa-var-cookie-bite; }
.@{fa-css-prefix}-copy:before { content: @fa-var-copy; }
.@{fa-css-prefix}-copyright:before { content: @fa-var-copyright; }
.@{fa-css-prefix}-corn:before { content: @fa-var-corn; }
.@{fa-css-prefix}-couch:before { content: @fa-var-couch; }
.@{fa-css-prefix}-cow:before { content: @fa-var-cow; }
.@{fa-css-prefix}-cpanel:before { content: @fa-var-cpanel; }
.@{fa-css-prefix}-creative-commons:before { content: @fa-var-creative-commons; }
.@{fa-css-prefix}-creative-commons-by:before { content: @fa-var-creative-commons-by; }
.@{fa-css-prefix}-creative-commons-nc:before { content: @fa-var-creative-commons-nc; }
.@{fa-css-prefix}-creative-commons-nc-eu:before { content: @fa-var-creative-commons-nc-eu; }
.@{fa-css-prefix}-creative-commons-nc-jp:before { content: @fa-var-creative-commons-nc-jp; }
.@{fa-css-prefix}-creative-commons-nd:before { content: @fa-var-creative-commons-nd; }
.@{fa-css-prefix}-creative-commons-pd:before { content: @fa-var-creative-commons-pd; }
.@{fa-css-prefix}-creative-commons-pd-alt:before { content: @fa-var-creative-commons-pd-alt; }
.@{fa-css-prefix}-creative-commons-remix:before { content: @fa-var-creative-commons-remix; }
.@{fa-css-prefix}-creative-commons-sa:before { content: @fa-var-creative-commons-sa; }
.@{fa-css-prefix}-creative-commons-sampling:before { content: @fa-var-creative-commons-sampling; }
.@{fa-css-prefix}-creative-commons-sampling-plus:before { content: @fa-var-creative-commons-sampling-plus; }
.@{fa-css-prefix}-creative-commons-share:before { content: @fa-var-creative-commons-share; }
.@{fa-css-prefix}-creative-commons-zero:before { content: @fa-var-creative-commons-zero; }
.@{fa-css-prefix}-credit-card:before { content: @fa-var-credit-card; }
.@{fa-css-prefix}-credit-card-blank:before { content: @fa-var-credit-card-blank; }
.@{fa-css-prefix}-credit-card-front:before { content: @fa-var-credit-card-front; }
.@{fa-css-prefix}-cricket:before { content: @fa-var-cricket; }
.@{fa-css-prefix}-critical-role:before { content: @fa-var-critical-role; }
.@{fa-css-prefix}-croissant:before { content: @fa-var-croissant; }
.@{fa-css-prefix}-crop:before { content: @fa-var-crop; }
.@{fa-css-prefix}-crop-alt:before { content: @fa-var-crop-alt; }
.@{fa-css-prefix}-cross:before { content: @fa-var-cross; }
.@{fa-css-prefix}-crosshairs:before { content: @fa-var-crosshairs; }
.@{fa-css-prefix}-crow:before { content: @fa-var-crow; }
.@{fa-css-prefix}-crown:before { content: @fa-var-crown; }
.@{fa-css-prefix}-crutch:before { content: @fa-var-crutch; }
.@{fa-css-prefix}-crutches:before { content: @fa-var-crutches; }
.@{fa-css-prefix}-css3:before { content: @fa-var-css3; }
.@{fa-css-prefix}-css3-alt:before { content: @fa-var-css3-alt; }
.@{fa-css-prefix}-cube:before { content: @fa-var-cube; }
.@{fa-css-prefix}-cubes:before { content: @fa-var-cubes; }
.@{fa-css-prefix}-curling:before { content: @fa-var-curling; }
.@{fa-css-prefix}-cut:before { content: @fa-var-cut; }
.@{fa-css-prefix}-cuttlefish:before { content: @fa-var-cuttlefish; }
.@{fa-css-prefix}-d-and-d:before { content: @fa-var-d-and-d; }
.@{fa-css-prefix}-d-and-d-beyond:before { content: @fa-var-d-and-d-beyond; }
.@{fa-css-prefix}-dagger:before { content: @fa-var-dagger; }
.@{fa-css-prefix}-dashcube:before { content: @fa-var-dashcube; }
.@{fa-css-prefix}-database:before { content: @fa-var-database; }
.@{fa-css-prefix}-deaf:before { content: @fa-var-deaf; }
.@{fa-css-prefix}-debug:before { content: @fa-var-debug; }
.@{fa-css-prefix}-deer:before { content: @fa-var-deer; }
.@{fa-css-prefix}-deer-rudolph:before { content: @fa-var-deer-rudolph; }
.@{fa-css-prefix}-delicious:before { content: @fa-var-delicious; }
.@{fa-css-prefix}-democrat:before { content: @fa-var-democrat; }
.@{fa-css-prefix}-deploydog:before { content: @fa-var-deploydog; }
.@{fa-css-prefix}-deskpro:before { content: @fa-var-deskpro; }
.@{fa-css-prefix}-desktop:before { content: @fa-var-desktop; }
.@{fa-css-prefix}-desktop-alt:before { content: @fa-var-desktop-alt; }
.@{fa-css-prefix}-dev:before { content: @fa-var-dev; }
.@{fa-css-prefix}-deviantart:before { content: @fa-var-deviantart; }
.@{fa-css-prefix}-dewpoint:before { content: @fa-var-dewpoint; }
.@{fa-css-prefix}-dharmachakra:before { content: @fa-var-dharmachakra; }
.@{fa-css-prefix}-dhl:before { content: @fa-var-dhl; }
.@{fa-css-prefix}-diagnoses:before { content: @fa-var-diagnoses; }
.@{fa-css-prefix}-diamond:before { content: @fa-var-diamond; }
.@{fa-css-prefix}-diaspora:before { content: @fa-var-diaspora; }
.@{fa-css-prefix}-dice:before { content: @fa-var-dice; }
.@{fa-css-prefix}-dice-d10:before { content: @fa-var-dice-d10; }
.@{fa-css-prefix}-dice-d12:before { content: @fa-var-dice-d12; }
.@{fa-css-prefix}-dice-d20:before { content: @fa-var-dice-d20; }
.@{fa-css-prefix}-dice-d4:before { content: @fa-var-dice-d4; }
.@{fa-css-prefix}-dice-d6:before { content: @fa-var-dice-d6; }
.@{fa-css-prefix}-dice-d8:before { content: @fa-var-dice-d8; }
.@{fa-css-prefix}-dice-five:before { content: @fa-var-dice-five; }
.@{fa-css-prefix}-dice-four:before { content: @fa-var-dice-four; }
.@{fa-css-prefix}-dice-one:before { content: @fa-var-dice-one; }
.@{fa-css-prefix}-dice-six:before { content: @fa-var-dice-six; }
.@{fa-css-prefix}-dice-three:before { content: @fa-var-dice-three; }
.@{fa-css-prefix}-dice-two:before { content: @fa-var-dice-two; }
.@{fa-css-prefix}-digg:before { content: @fa-var-digg; }
.@{fa-css-prefix}-digital-ocean:before { content: @fa-var-digital-ocean; }
.@{fa-css-prefix}-digital-tachograph:before { content: @fa-var-digital-tachograph; }
.@{fa-css-prefix}-diploma:before { content: @fa-var-diploma; }
.@{fa-css-prefix}-directions:before { content: @fa-var-directions; }
.@{fa-css-prefix}-discord:before { content: @fa-var-discord; }
.@{fa-css-prefix}-discourse:before { content: @fa-var-discourse; }
.@{fa-css-prefix}-disease:before { content: @fa-var-disease; }
.@{fa-css-prefix}-divide:before { content: @fa-var-divide; }
.@{fa-css-prefix}-dizzy:before { content: @fa-var-dizzy; }
.@{fa-css-prefix}-dna:before { content: @fa-var-dna; }
.@{fa-css-prefix}-do-not-enter:before { content: @fa-var-do-not-enter; }
.@{fa-css-prefix}-dochub:before { content: @fa-var-dochub; }
.@{fa-css-prefix}-docker:before { content: @fa-var-docker; }
.@{fa-css-prefix}-dog:before { content: @fa-var-dog; }
.@{fa-css-prefix}-dog-leashed:before { content: @fa-var-dog-leashed; }
.@{fa-css-prefix}-dollar-sign:before { content: @fa-var-dollar-sign; }
.@{fa-css-prefix}-dolly:before { content: @fa-var-dolly; }
.@{fa-css-prefix}-dolly-empty:before { content: @fa-var-dolly-empty; }
.@{fa-css-prefix}-dolly-flatbed:before { content: @fa-var-dolly-flatbed; }
.@{fa-css-prefix}-dolly-flatbed-alt:before { content: @fa-var-dolly-flatbed-alt; }
.@{fa-css-prefix}-dolly-flatbed-empty:before { content: @fa-var-dolly-flatbed-empty; }
.@{fa-css-prefix}-donate:before { content: @fa-var-donate; }
.@{fa-css-prefix}-door-closed:before { content: @fa-var-door-closed; }
.@{fa-css-prefix}-door-open:before { content: @fa-var-door-open; }
.@{fa-css-prefix}-dot-circle:before { content: @fa-var-dot-circle; }
.@{fa-css-prefix}-dove:before { content: @fa-var-dove; }
.@{fa-css-prefix}-download:before { content: @fa-var-download; }
.@{fa-css-prefix}-draft2digital:before { content: @fa-var-draft2digital; }
.@{fa-css-prefix}-drafting-compass:before { content: @fa-var-drafting-compass; }
.@{fa-css-prefix}-dragon:before { content: @fa-var-dragon; }
.@{fa-css-prefix}-draw-circle:before { content: @fa-var-draw-circle; }
.@{fa-css-prefix}-draw-polygon:before { content: @fa-var-draw-polygon; }
.@{fa-css-prefix}-draw-square:before { content: @fa-var-draw-square; }
.@{fa-css-prefix}-dreidel:before { content: @fa-var-dreidel; }
.@{fa-css-prefix}-dribbble:before { content: @fa-var-dribbble; }
.@{fa-css-prefix}-dribbble-square:before { content: @fa-var-dribbble-square; }
.@{fa-css-prefix}-dropbox:before { content: @fa-var-dropbox; }
.@{fa-css-prefix}-drum:before { content: @fa-var-drum; }
.@{fa-css-prefix}-drum-steelpan:before { content: @fa-var-drum-steelpan; }
.@{fa-css-prefix}-drumstick:before { content: @fa-var-drumstick; }
.@{fa-css-prefix}-drumstick-bite:before { content: @fa-var-drumstick-bite; }
.@{fa-css-prefix}-drupal:before { content: @fa-var-drupal; }
.@{fa-css-prefix}-duck:before { content: @fa-var-duck; }
.@{fa-css-prefix}-dumbbell:before { content: @fa-var-dumbbell; }
.@{fa-css-prefix}-dumpster:before { content: @fa-var-dumpster; }
.@{fa-css-prefix}-dumpster-fire:before { content: @fa-var-dumpster-fire; }
.@{fa-css-prefix}-dungeon:before { content: @fa-var-dungeon; }
.@{fa-css-prefix}-dyalog:before { content: @fa-var-dyalog; }
.@{fa-css-prefix}-ear:before { content: @fa-var-ear; }
.@{fa-css-prefix}-ear-muffs:before { content: @fa-var-ear-muffs; }
.@{fa-css-prefix}-earlybirds:before { content: @fa-var-earlybirds; }
.@{fa-css-prefix}-ebay:before { content: @fa-var-ebay; }
.@{fa-css-prefix}-eclipse:before { content: @fa-var-eclipse; }
.@{fa-css-prefix}-eclipse-alt:before { content: @fa-var-eclipse-alt; }
.@{fa-css-prefix}-edge:before { content: @fa-var-edge; }
.@{fa-css-prefix}-edit:before { content: @fa-var-edit; }
.@{fa-css-prefix}-egg:before { content: @fa-var-egg; }
.@{fa-css-prefix}-egg-fried:before { content: @fa-var-egg-fried; }
.@{fa-css-prefix}-eject:before { content: @fa-var-eject; }
.@{fa-css-prefix}-elementor:before { content: @fa-var-elementor; }
.@{fa-css-prefix}-elephant:before { content: @fa-var-elephant; }
.@{fa-css-prefix}-ellipsis-h:before { content: @fa-var-ellipsis-h; }
.@{fa-css-prefix}-ellipsis-h-alt:before { content: @fa-var-ellipsis-h-alt; }
.@{fa-css-prefix}-ellipsis-v:before { content: @fa-var-ellipsis-v; }
.@{fa-css-prefix}-ellipsis-v-alt:before { content: @fa-var-ellipsis-v-alt; }
.@{fa-css-prefix}-ello:before { content: @fa-var-ello; }
.@{fa-css-prefix}-ember:before { content: @fa-var-ember; }
.@{fa-css-prefix}-empire:before { content: @fa-var-empire; }
.@{fa-css-prefix}-empty-set:before { content: @fa-var-empty-set; }
.@{fa-css-prefix}-engine-warning:before { content: @fa-var-engine-warning; }
.@{fa-css-prefix}-envelope:before { content: @fa-var-envelope; }
.@{fa-css-prefix}-envelope-open:before { content: @fa-var-envelope-open; }
.@{fa-css-prefix}-envelope-open-dollar:before { content: @fa-var-envelope-open-dollar; }
.@{fa-css-prefix}-envelope-open-text:before { content: @fa-var-envelope-open-text; }
.@{fa-css-prefix}-envelope-square:before { content: @fa-var-envelope-square; }
.@{fa-css-prefix}-envira:before { content: @fa-var-envira; }
.@{fa-css-prefix}-equals:before { content: @fa-var-equals; }
.@{fa-css-prefix}-eraser:before { content: @fa-var-eraser; }
.@{fa-css-prefix}-erlang:before { content: @fa-var-erlang; }
.@{fa-css-prefix}-ethereum:before { content: @fa-var-ethereum; }
.@{fa-css-prefix}-ethernet:before { content: @fa-var-ethernet; }
.@{fa-css-prefix}-etsy:before { content: @fa-var-etsy; }
.@{fa-css-prefix}-euro-sign:before { content: @fa-var-euro-sign; }
.@{fa-css-prefix}-evernote:before { content: @fa-var-evernote; }
.@{fa-css-prefix}-exchange:before { content: @fa-var-exchange; }
.@{fa-css-prefix}-exchange-alt:before { content: @fa-var-exchange-alt; }
.@{fa-css-prefix}-exclamation:before { content: @fa-var-exclamation; }
.@{fa-css-prefix}-exclamation-circle:before { content: @fa-var-exclamation-circle; }
.@{fa-css-prefix}-exclamation-square:before { content: @fa-var-exclamation-square; }
.@{fa-css-prefix}-exclamation-triangle:before { content: @fa-var-exclamation-triangle; }
.@{fa-css-prefix}-expand:before { content: @fa-var-expand; }
.@{fa-css-prefix}-expand-alt:before { content: @fa-var-expand-alt; }
.@{fa-css-prefix}-expand-arrows:before { content: @fa-var-expand-arrows; }
.@{fa-css-prefix}-expand-arrows-alt:before { content: @fa-var-expand-arrows-alt; }
.@{fa-css-prefix}-expand-wide:before { content: @fa-var-expand-wide; }
.@{fa-css-prefix}-expeditedssl:before { content: @fa-var-expeditedssl; }
.@{fa-css-prefix}-external-link:before { content: @fa-var-external-link; }
.@{fa-css-prefix}-external-link-alt:before { content: @fa-var-external-link-alt; }
.@{fa-css-prefix}-external-link-square:before { content: @fa-var-external-link-square; }
.@{fa-css-prefix}-external-link-square-alt:before { content: @fa-var-external-link-square-alt; }
.@{fa-css-prefix}-eye:before { content: @fa-var-eye; }
.@{fa-css-prefix}-eye-dropper:before { content: @fa-var-eye-dropper; }
.@{fa-css-prefix}-eye-evil:before { content: @fa-var-eye-evil; }
.@{fa-css-prefix}-eye-slash:before { content: @fa-var-eye-slash; }
.@{fa-css-prefix}-facebook:before { content: @fa-var-facebook; }
.@{fa-css-prefix}-facebook-f:before { content: @fa-var-facebook-f; }
.@{fa-css-prefix}-facebook-messenger:before { content: @fa-var-facebook-messenger; }
.@{fa-css-prefix}-facebook-square:before { content: @fa-var-facebook-square; }
.@{fa-css-prefix}-fantasy-flight-games:before { content: @fa-var-fantasy-flight-games; }
.@{fa-css-prefix}-fast-backward:before { content: @fa-var-fast-backward; }
.@{fa-css-prefix}-fast-forward:before { content: @fa-var-fast-forward; }
.@{fa-css-prefix}-fax:before { content: @fa-var-fax; }
.@{fa-css-prefix}-feather:before { content: @fa-var-feather; }
.@{fa-css-prefix}-feather-alt:before { content: @fa-var-feather-alt; }
.@{fa-css-prefix}-fedex:before { content: @fa-var-fedex; }
.@{fa-css-prefix}-fedora:before { content: @fa-var-fedora; }
.@{fa-css-prefix}-female:before { content: @fa-var-female; }
.@{fa-css-prefix}-field-hockey:before { content: @fa-var-field-hockey; }
.@{fa-css-prefix}-fighter-jet:before { content: @fa-var-fighter-jet; }
.@{fa-css-prefix}-figma:before { content: @fa-var-figma; }
.@{fa-css-prefix}-file:before { content: @fa-var-file; }
.@{fa-css-prefix}-file-alt:before { content: @fa-var-file-alt; }
.@{fa-css-prefix}-file-archive:before { content: @fa-var-file-archive; }
.@{fa-css-prefix}-file-audio:before { content: @fa-var-file-audio; }
.@{fa-css-prefix}-file-certificate:before { content: @fa-var-file-certificate; }
.@{fa-css-prefix}-file-chart-line:before { content: @fa-var-file-chart-line; }
.@{fa-css-prefix}-file-chart-pie:before { content: @fa-var-file-chart-pie; }
.@{fa-css-prefix}-file-check:before { content: @fa-var-file-check; }
.@{fa-css-prefix}-file-code:before { content: @fa-var-file-code; }
.@{fa-css-prefix}-file-contract:before { content: @fa-var-file-contract; }
.@{fa-css-prefix}-file-csv:before { content: @fa-var-file-csv; }
.@{fa-css-prefix}-file-download:before { content: @fa-var-file-download; }
.@{fa-css-prefix}-file-edit:before { content: @fa-var-file-edit; }
.@{fa-css-prefix}-file-excel:before { content: @fa-var-file-excel; }
.@{fa-css-prefix}-file-exclamation:before { content: @fa-var-file-exclamation; }
.@{fa-css-prefix}-file-export:before { content: @fa-var-file-export; }
.@{fa-css-prefix}-file-image:before { content: @fa-var-file-image; }
.@{fa-css-prefix}-file-import:before { content: @fa-var-file-import; }
.@{fa-css-prefix}-file-invoice:before { content: @fa-var-file-invoice; }
.@{fa-css-prefix}-file-invoice-dollar:before { content: @fa-var-file-invoice-dollar; }
.@{fa-css-prefix}-file-medical:before { content: @fa-var-file-medical; }
.@{fa-css-prefix}-file-medical-alt:before { content: @fa-var-file-medical-alt; }
.@{fa-css-prefix}-file-minus:before { content: @fa-var-file-minus; }
.@{fa-css-prefix}-file-pdf:before { content: @fa-var-file-pdf; }
.@{fa-css-prefix}-file-plus:before { content: @fa-var-file-plus; }
.@{fa-css-prefix}-file-powerpoint:before { content: @fa-var-file-powerpoint; }
.@{fa-css-prefix}-file-prescription:before { content: @fa-var-file-prescription; }
.@{fa-css-prefix}-file-signature:before { content: @fa-var-file-signature; }
.@{fa-css-prefix}-file-spreadsheet:before { content: @fa-var-file-spreadsheet; }
.@{fa-css-prefix}-file-times:before { content: @fa-var-file-times; }
.@{fa-css-prefix}-file-upload:before { content: @fa-var-file-upload; }
.@{fa-css-prefix}-file-user:before { content: @fa-var-file-user; }
.@{fa-css-prefix}-file-video:before { content: @fa-var-file-video; }
.@{fa-css-prefix}-file-word:before { content: @fa-var-file-word; }
.@{fa-css-prefix}-files-medical:before { content: @fa-var-files-medical; }
.@{fa-css-prefix}-fill:before { content: @fa-var-fill; }
.@{fa-css-prefix}-fill-drip:before { content: @fa-var-fill-drip; }
.@{fa-css-prefix}-film:before { content: @fa-var-film; }
.@{fa-css-prefix}-film-alt:before { content: @fa-var-film-alt; }
.@{fa-css-prefix}-filter:before { content: @fa-var-filter; }
.@{fa-css-prefix}-fingerprint:before { content: @fa-var-fingerprint; }
.@{fa-css-prefix}-fire:before { content: @fa-var-fire; }
.@{fa-css-prefix}-fire-alt:before { content: @fa-var-fire-alt; }
.@{fa-css-prefix}-fire-extinguisher:before { content: @fa-var-fire-extinguisher; }
.@{fa-css-prefix}-fire-smoke:before { content: @fa-var-fire-smoke; }
.@{fa-css-prefix}-firefox:before { content: @fa-var-firefox; }
.@{fa-css-prefix}-fireplace:before { content: @fa-var-fireplace; }
.@{fa-css-prefix}-first-aid:before { content: @fa-var-first-aid; }
.@{fa-css-prefix}-first-order:before { content: @fa-var-first-order; }
.@{fa-css-prefix}-first-order-alt:before { content: @fa-var-first-order-alt; }
.@{fa-css-prefix}-firstdraft:before { content: @fa-var-firstdraft; }
.@{fa-css-prefix}-fish:before { content: @fa-var-fish; }
.@{fa-css-prefix}-fish-cooked:before { content: @fa-var-fish-cooked; }
.@{fa-css-prefix}-fist-raised:before { content: @fa-var-fist-raised; }
.@{fa-css-prefix}-flag:before { content: @fa-var-flag; }
.@{fa-css-prefix}-flag-alt:before { content: @fa-var-flag-alt; }
.@{fa-css-prefix}-flag-checkered:before { content: @fa-var-flag-checkered; }
.@{fa-css-prefix}-flag-usa:before { content: @fa-var-flag-usa; }
.@{fa-css-prefix}-flame:before { content: @fa-var-flame; }
.@{fa-css-prefix}-flask:before { content: @fa-var-flask; }
.@{fa-css-prefix}-flask-poison:before { content: @fa-var-flask-poison; }
.@{fa-css-prefix}-flask-potion:before { content: @fa-var-flask-potion; }
.@{fa-css-prefix}-flickr:before { content: @fa-var-flickr; }
.@{fa-css-prefix}-flipboard:before { content: @fa-var-flipboard; }
.@{fa-css-prefix}-flower:before { content: @fa-var-flower; }
.@{fa-css-prefix}-flower-daffodil:before { content: @fa-var-flower-daffodil; }
.@{fa-css-prefix}-flower-tulip:before { content: @fa-var-flower-tulip; }
.@{fa-css-prefix}-flushed:before { content: @fa-var-flushed; }
.@{fa-css-prefix}-fly:before { content: @fa-var-fly; }
.@{fa-css-prefix}-fog:before { content: @fa-var-fog; }
.@{fa-css-prefix}-folder:before { content: @fa-var-folder; }
.@{fa-css-prefix}-folder-minus:before { content: @fa-var-folder-minus; }
.@{fa-css-prefix}-folder-open:before { content: @fa-var-folder-open; }
.@{fa-css-prefix}-folder-plus:before { content: @fa-var-folder-plus; }
.@{fa-css-prefix}-folder-times:before { content: @fa-var-folder-times; }
.@{fa-css-prefix}-folder-tree:before { content: @fa-var-folder-tree; }
.@{fa-css-prefix}-folders:before { content: @fa-var-folders; }
.@{fa-css-prefix}-font:before { content: @fa-var-font; }
.@{fa-css-prefix}-font-awesome:before { content: @fa-var-font-awesome; }
.@{fa-css-prefix}-font-awesome-alt:before { content: @fa-var-font-awesome-alt; }
.@{fa-css-prefix}-font-awesome-flag:before { content: @fa-var-font-awesome-flag; }
.@{fa-css-prefix}-font-awesome-logo-full:before { content: @fa-var-font-awesome-logo-full; }
.@{fa-css-prefix}-fonticons:before { content: @fa-var-fonticons; }
.@{fa-css-prefix}-fonticons-fi:before { content: @fa-var-fonticons-fi; }
.@{fa-css-prefix}-football-ball:before { content: @fa-var-football-ball; }
.@{fa-css-prefix}-football-helmet:before { content: @fa-var-football-helmet; }
.@{fa-css-prefix}-forklift:before { content: @fa-var-forklift; }
.@{fa-css-prefix}-fort-awesome:before { content: @fa-var-fort-awesome; }
.@{fa-css-prefix}-fort-awesome-alt:before { content: @fa-var-fort-awesome-alt; }
.@{fa-css-prefix}-forumbee:before { content: @fa-var-forumbee; }
.@{fa-css-prefix}-forward:before { content: @fa-var-forward; }
.@{fa-css-prefix}-foursquare:before { content: @fa-var-foursquare; }
.@{fa-css-prefix}-fragile:before { content: @fa-var-fragile; }
.@{fa-css-prefix}-free-code-camp:before { content: @fa-var-free-code-camp; }
.@{fa-css-prefix}-freebsd:before { content: @fa-var-freebsd; }
.@{fa-css-prefix}-french-fries:before { content: @fa-var-french-fries; }
.@{fa-css-prefix}-frog:before { content: @fa-var-frog; }
.@{fa-css-prefix}-frosty-head:before { content: @fa-var-frosty-head; }
.@{fa-css-prefix}-frown:before { content: @fa-var-frown; }
.@{fa-css-prefix}-frown-open:before { content: @fa-var-frown-open; }
.@{fa-css-prefix}-fulcrum:before { content: @fa-var-fulcrum; }
.@{fa-css-prefix}-function:before { content: @fa-var-function; }
.@{fa-css-prefix}-funnel-dollar:before { content: @fa-var-funnel-dollar; }
.@{fa-css-prefix}-futbol:before { content: @fa-var-futbol; }
.@{fa-css-prefix}-galactic-republic:before { content: @fa-var-galactic-republic; }
.@{fa-css-prefix}-galactic-senate:before { content: @fa-var-galactic-senate; }
.@{fa-css-prefix}-gamepad:before { content: @fa-var-gamepad; }
.@{fa-css-prefix}-gas-pump:before { content: @fa-var-gas-pump; }
.@{fa-css-prefix}-gas-pump-slash:before { content: @fa-var-gas-pump-slash; }
.@{fa-css-prefix}-gavel:before { content: @fa-var-gavel; }
.@{fa-css-prefix}-gem:before { content: @fa-var-gem; }
.@{fa-css-prefix}-genderless:before { content: @fa-var-genderless; }
.@{fa-css-prefix}-get-pocket:before { content: @fa-var-get-pocket; }
.@{fa-css-prefix}-gg:before { content: @fa-var-gg; }
.@{fa-css-prefix}-gg-circle:before { content: @fa-var-gg-circle; }
.@{fa-css-prefix}-ghost:before { content: @fa-var-ghost; }
.@{fa-css-prefix}-gift:before { content: @fa-var-gift; }
.@{fa-css-prefix}-gift-card:before { content: @fa-var-gift-card; }
.@{fa-css-prefix}-gifts:before { content: @fa-var-gifts; }
.@{fa-css-prefix}-gingerbread-man:before { content: @fa-var-gingerbread-man; }
.@{fa-css-prefix}-git:before { content: @fa-var-git; }
.@{fa-css-prefix}-git-square:before { content: @fa-var-git-square; }
.@{fa-css-prefix}-github:before { content: @fa-var-github; }
.@{fa-css-prefix}-github-alt:before { content: @fa-var-github-alt; }
.@{fa-css-prefix}-github-square:before { content: @fa-var-github-square; }
.@{fa-css-prefix}-gitkraken:before { content: @fa-var-gitkraken; }
.@{fa-css-prefix}-gitlab:before { content: @fa-var-gitlab; }
.@{fa-css-prefix}-gitter:before { content: @fa-var-gitter; }
.@{fa-css-prefix}-glass:before { content: @fa-var-glass; }
.@{fa-css-prefix}-glass-champagne:before { content: @fa-var-glass-champagne; }
.@{fa-css-prefix}-glass-cheers:before { content: @fa-var-glass-cheers; }
.@{fa-css-prefix}-glass-martini:before { content: @fa-var-glass-martini; }
.@{fa-css-prefix}-glass-martini-alt:before { content: @fa-var-glass-martini-alt; }
.@{fa-css-prefix}-glass-whiskey:before { content: @fa-var-glass-whiskey; }
.@{fa-css-prefix}-glass-whiskey-rocks:before { content: @fa-var-glass-whiskey-rocks; }
.@{fa-css-prefix}-glasses:before { content: @fa-var-glasses; }
.@{fa-css-prefix}-glasses-alt:before { content: @fa-var-glasses-alt; }
.@{fa-css-prefix}-glide:before { content: @fa-var-glide; }
.@{fa-css-prefix}-glide-g:before { content: @fa-var-glide-g; }
.@{fa-css-prefix}-globe:before { content: @fa-var-globe; }
.@{fa-css-prefix}-globe-africa:before { content: @fa-var-globe-africa; }
.@{fa-css-prefix}-globe-americas:before { content: @fa-var-globe-americas; }
.@{fa-css-prefix}-globe-asia:before { content: @fa-var-globe-asia; }
.@{fa-css-prefix}-globe-europe:before { content: @fa-var-globe-europe; }
.@{fa-css-prefix}-globe-snow:before { content: @fa-var-globe-snow; }
.@{fa-css-prefix}-globe-stand:before { content: @fa-var-globe-stand; }
.@{fa-css-prefix}-gofore:before { content: @fa-var-gofore; }
.@{fa-css-prefix}-golf-ball:before { content: @fa-var-golf-ball; }
.@{fa-css-prefix}-golf-club:before { content: @fa-var-golf-club; }
.@{fa-css-prefix}-goodreads:before { content: @fa-var-goodreads; }
.@{fa-css-prefix}-goodreads-g:before { content: @fa-var-goodreads-g; }
.@{fa-css-prefix}-google:before { content: @fa-var-google; }
.@{fa-css-prefix}-google-drive:before { content: @fa-var-google-drive; }
.@{fa-css-prefix}-google-play:before { content: @fa-var-google-play; }
.@{fa-css-prefix}-google-plus:before { content: @fa-var-google-plus; }
.@{fa-css-prefix}-google-plus-g:before { content: @fa-var-google-plus-g; }
.@{fa-css-prefix}-google-plus-square:before { content: @fa-var-google-plus-square; }
.@{fa-css-prefix}-google-wallet:before { content: @fa-var-google-wallet; }
.@{fa-css-prefix}-gopuram:before { content: @fa-var-gopuram; }
.@{fa-css-prefix}-graduation-cap:before { content: @fa-var-graduation-cap; }
.@{fa-css-prefix}-gratipay:before { content: @fa-var-gratipay; }
.@{fa-css-prefix}-grav:before { content: @fa-var-grav; }
.@{fa-css-prefix}-greater-than:before { content: @fa-var-greater-than; }
.@{fa-css-prefix}-greater-than-equal:before { content: @fa-var-greater-than-equal; }
.@{fa-css-prefix}-grimace:before { content: @fa-var-grimace; }
.@{fa-css-prefix}-grin:before { content: @fa-var-grin; }
.@{fa-css-prefix}-grin-alt:before { content: @fa-var-grin-alt; }
.@{fa-css-prefix}-grin-beam:before { content: @fa-var-grin-beam; }
.@{fa-css-prefix}-grin-beam-sweat:before { content: @fa-var-grin-beam-sweat; }
.@{fa-css-prefix}-grin-hearts:before { content: @fa-var-grin-hearts; }
.@{fa-css-prefix}-grin-squint:before { content: @fa-var-grin-squint; }
.@{fa-css-prefix}-grin-squint-tears:before { content: @fa-var-grin-squint-tears; }
.@{fa-css-prefix}-grin-stars:before { content: @fa-var-grin-stars; }
.@{fa-css-prefix}-grin-tears:before { content: @fa-var-grin-tears; }
.@{fa-css-prefix}-grin-tongue:before { content: @fa-var-grin-tongue; }
.@{fa-css-prefix}-grin-tongue-squint:before { content: @fa-var-grin-tongue-squint; }
.@{fa-css-prefix}-grin-tongue-wink:before { content: @fa-var-grin-tongue-wink; }
.@{fa-css-prefix}-grin-wink:before { content: @fa-var-grin-wink; }
.@{fa-css-prefix}-grip-horizontal:before { content: @fa-var-grip-horizontal; }
.@{fa-css-prefix}-grip-lines:before { content: @fa-var-grip-lines; }
.@{fa-css-prefix}-grip-lines-vertical:before { content: @fa-var-grip-lines-vertical; }
.@{fa-css-prefix}-grip-vertical:before { content: @fa-var-grip-vertical; }
.@{fa-css-prefix}-gripfire:before { content: @fa-var-gripfire; }
.@{fa-css-prefix}-grunt:before { content: @fa-var-grunt; }
.@{fa-css-prefix}-guitar:before { content: @fa-var-guitar; }
.@{fa-css-prefix}-gulp:before { content: @fa-var-gulp; }
.@{fa-css-prefix}-h-square:before { content: @fa-var-h-square; }
.@{fa-css-prefix}-h1:before { content: @fa-var-h1; }
.@{fa-css-prefix}-h2:before { content: @fa-var-h2; }
.@{fa-css-prefix}-h3:before { content: @fa-var-h3; }
.@{fa-css-prefix}-hacker-news:before { content: @fa-var-hacker-news; }
.@{fa-css-prefix}-hacker-news-square:before { content: @fa-var-hacker-news-square; }
.@{fa-css-prefix}-hackerrank:before { content: @fa-var-hackerrank; }
.@{fa-css-prefix}-hamburger:before { content: @fa-var-hamburger; }
.@{fa-css-prefix}-hammer:before { content: @fa-var-hammer; }
.@{fa-css-prefix}-hammer-war:before { content: @fa-var-hammer-war; }
.@{fa-css-prefix}-hamsa:before { content: @fa-var-hamsa; }
.@{fa-css-prefix}-hand-heart:before { content: @fa-var-hand-heart; }
.@{fa-css-prefix}-hand-holding:before { content: @fa-var-hand-holding; }
.@{fa-css-prefix}-hand-holding-box:before { content: @fa-var-hand-holding-box; }
.@{fa-css-prefix}-hand-holding-heart:before { content: @fa-var-hand-holding-heart; }
.@{fa-css-prefix}-hand-holding-magic:before { content: @fa-var-hand-holding-magic; }
.@{fa-css-prefix}-hand-holding-seedling:before { content: @fa-var-hand-holding-seedling; }
.@{fa-css-prefix}-hand-holding-usd:before { content: @fa-var-hand-holding-usd; }
.@{fa-css-prefix}-hand-holding-water:before { content: @fa-var-hand-holding-water; }
.@{fa-css-prefix}-hand-lizard:before { content: @fa-var-hand-lizard; }
.@{fa-css-prefix}-hand-middle-finger:before { content: @fa-var-hand-middle-finger; }
.@{fa-css-prefix}-hand-paper:before { content: @fa-var-hand-paper; }
.@{fa-css-prefix}-hand-peace:before { content: @fa-var-hand-peace; }
.@{fa-css-prefix}-hand-point-down:before { content: @fa-var-hand-point-down; }
.@{fa-css-prefix}-hand-point-left:before { content: @fa-var-hand-point-left; }
.@{fa-css-prefix}-hand-point-right:before { content: @fa-var-hand-point-right; }
.@{fa-css-prefix}-hand-point-up:before { content: @fa-var-hand-point-up; }
.@{fa-css-prefix}-hand-pointer:before { content: @fa-var-hand-pointer; }
.@{fa-css-prefix}-hand-receiving:before { content: @fa-var-hand-receiving; }
.@{fa-css-prefix}-hand-rock:before { content: @fa-var-hand-rock; }
.@{fa-css-prefix}-hand-scissors:before { content: @fa-var-hand-scissors; }
.@{fa-css-prefix}-hand-spock:before { content: @fa-var-hand-spock; }
.@{fa-css-prefix}-hands:before { content: @fa-var-hands; }
.@{fa-css-prefix}-hands-heart:before { content: @fa-var-hands-heart; }
.@{fa-css-prefix}-hands-helping:before { content: @fa-var-hands-helping; }
.@{fa-css-prefix}-hands-usd:before { content: @fa-var-hands-usd; }
.@{fa-css-prefix}-handshake:before { content: @fa-var-handshake; }
.@{fa-css-prefix}-handshake-alt:before { content: @fa-var-handshake-alt; }
.@{fa-css-prefix}-hanukiah:before { content: @fa-var-hanukiah; }
.@{fa-css-prefix}-hard-hat:before { content: @fa-var-hard-hat; }
.@{fa-css-prefix}-hashtag:before { content: @fa-var-hashtag; }
.@{fa-css-prefix}-hat-santa:before { content: @fa-var-hat-santa; }
.@{fa-css-prefix}-hat-winter:before { content: @fa-var-hat-winter; }
.@{fa-css-prefix}-hat-witch:before { content: @fa-var-hat-witch; }
.@{fa-css-prefix}-hat-wizard:before { content: @fa-var-hat-wizard; }
.@{fa-css-prefix}-haykal:before { content: @fa-var-haykal; }
.@{fa-css-prefix}-hdd:before { content: @fa-var-hdd; }
.@{fa-css-prefix}-head-side:before { content: @fa-var-head-side; }
.@{fa-css-prefix}-head-side-brain:before { content: @fa-var-head-side-brain; }
.@{fa-css-prefix}-head-side-medical:before { content: @fa-var-head-side-medical; }
.@{fa-css-prefix}-head-vr:before { content: @fa-var-head-vr; }
.@{fa-css-prefix}-heading:before { content: @fa-var-heading; }
.@{fa-css-prefix}-headphones:before { content: @fa-var-headphones; }
.@{fa-css-prefix}-headphones-alt:before { content: @fa-var-headphones-alt; }
.@{fa-css-prefix}-headset:before { content: @fa-var-headset; }
.@{fa-css-prefix}-heart:before { content: @fa-var-heart; }
.@{fa-css-prefix}-heart-broken:before { content: @fa-var-heart-broken; }
.@{fa-css-prefix}-heart-circle:before { content: @fa-var-heart-circle; }
.@{fa-css-prefix}-heart-rate:before { content: @fa-var-heart-rate; }
.@{fa-css-prefix}-heart-square:before { content: @fa-var-heart-square; }
.@{fa-css-prefix}-heartbeat:before { content: @fa-var-heartbeat; }
.@{fa-css-prefix}-helicopter:before { content: @fa-var-helicopter; }
.@{fa-css-prefix}-helmet-battle:before { content: @fa-var-helmet-battle; }
.@{fa-css-prefix}-hexagon:before { content: @fa-var-hexagon; }
.@{fa-css-prefix}-highlighter:before { content: @fa-var-highlighter; }
.@{fa-css-prefix}-hiking:before { content: @fa-var-hiking; }
.@{fa-css-prefix}-hippo:before { content: @fa-var-hippo; }
.@{fa-css-prefix}-hips:before { content: @fa-var-hips; }
.@{fa-css-prefix}-hire-a-helper:before { content: @fa-var-hire-a-helper; }
.@{fa-css-prefix}-history:before { content: @fa-var-history; }
.@{fa-css-prefix}-hockey-mask:before { content: @fa-var-hockey-mask; }
.@{fa-css-prefix}-hockey-puck:before { content: @fa-var-hockey-puck; }
.@{fa-css-prefix}-hockey-sticks:before { content: @fa-var-hockey-sticks; }
.@{fa-css-prefix}-holly-berry:before { content: @fa-var-holly-berry; }
.@{fa-css-prefix}-home:before { content: @fa-var-home; }
.@{fa-css-prefix}-home-alt:before { content: @fa-var-home-alt; }
.@{fa-css-prefix}-home-heart:before { content: @fa-var-home-heart; }
.@{fa-css-prefix}-home-lg:before { content: @fa-var-home-lg; }
.@{fa-css-prefix}-home-lg-alt:before { content: @fa-var-home-lg-alt; }
.@{fa-css-prefix}-hood-cloak:before { content: @fa-var-hood-cloak; }
.@{fa-css-prefix}-hooli:before { content: @fa-var-hooli; }
.@{fa-css-prefix}-hornbill:before { content: @fa-var-hornbill; }
.@{fa-css-prefix}-horse:before { content: @fa-var-horse; }
.@{fa-css-prefix}-horse-head:before { content: @fa-var-horse-head; }
.@{fa-css-prefix}-hospital:before { content: @fa-var-hospital; }
.@{fa-css-prefix}-hospital-alt:before { content: @fa-var-hospital-alt; }
.@{fa-css-prefix}-hospital-symbol:before { content: @fa-var-hospital-symbol; }
.@{fa-css-prefix}-hospital-user:before { content: @fa-var-hospital-user; }
.@{fa-css-prefix}-hospitals:before { content: @fa-var-hospitals; }
.@{fa-css-prefix}-hot-tub:before { content: @fa-var-hot-tub; }
.@{fa-css-prefix}-hotdog:before { content: @fa-var-hotdog; }
.@{fa-css-prefix}-hotel:before { content: @fa-var-hotel; }
.@{fa-css-prefix}-hotjar:before { content: @fa-var-hotjar; }
.@{fa-css-prefix}-hourglass:before { content: @fa-var-hourglass; }
.@{fa-css-prefix}-hourglass-end:before { content: @fa-var-hourglass-end; }
.@{fa-css-prefix}-hourglass-half:before { content: @fa-var-hourglass-half; }
.@{fa-css-prefix}-hourglass-start:before { content: @fa-var-hourglass-start; }
.@{fa-css-prefix}-house-damage:before { content: @fa-var-house-damage; }
.@{fa-css-prefix}-house-flood:before { content: @fa-var-house-flood; }
.@{fa-css-prefix}-houzz:before { content: @fa-var-houzz; }
.@{fa-css-prefix}-hryvnia:before { content: @fa-var-hryvnia; }
.@{fa-css-prefix}-html5:before { content: @fa-var-html5; }
.@{fa-css-prefix}-hubspot:before { content: @fa-var-hubspot; }
.@{fa-css-prefix}-humidity:before { content: @fa-var-humidity; }
.@{fa-css-prefix}-hurricane:before { content: @fa-var-hurricane; }
.@{fa-css-prefix}-i-cursor:before { content: @fa-var-i-cursor; }
.@{fa-css-prefix}-ice-cream:before { content: @fa-var-ice-cream; }
.@{fa-css-prefix}-ice-skate:before { content: @fa-var-ice-skate; }
.@{fa-css-prefix}-icicles:before { content: @fa-var-icicles; }
.@{fa-css-prefix}-id-badge:before { content: @fa-var-id-badge; }
.@{fa-css-prefix}-id-card:before { content: @fa-var-id-card; }
.@{fa-css-prefix}-id-card-alt:before { content: @fa-var-id-card-alt; }
.@{fa-css-prefix}-igloo:before { content: @fa-var-igloo; }
.@{fa-css-prefix}-image:before { content: @fa-var-image; }
.@{fa-css-prefix}-images:before { content: @fa-var-images; }
.@{fa-css-prefix}-imdb:before { content: @fa-var-imdb; }
.@{fa-css-prefix}-inbox:before { content: @fa-var-inbox; }
.@{fa-css-prefix}-inbox-in:before { content: @fa-var-inbox-in; }
.@{fa-css-prefix}-inbox-out:before { content: @fa-var-inbox-out; }
.@{fa-css-prefix}-indent:before { content: @fa-var-indent; }
.@{fa-css-prefix}-industry:before { content: @fa-var-industry; }
.@{fa-css-prefix}-industry-alt:before { content: @fa-var-industry-alt; }
.@{fa-css-prefix}-infinity:before { content: @fa-var-infinity; }
.@{fa-css-prefix}-info:before { content: @fa-var-info; }
.@{fa-css-prefix}-info-circle:before { content: @fa-var-info-circle; }
.@{fa-css-prefix}-info-square:before { content: @fa-var-info-square; }
.@{fa-css-prefix}-inhaler:before { content: @fa-var-inhaler; }
.@{fa-css-prefix}-instagram:before { content: @fa-var-instagram; }
.@{fa-css-prefix}-integral:before { content: @fa-var-integral; }
.@{fa-css-prefix}-intercom:before { content: @fa-var-intercom; }
.@{fa-css-prefix}-internet-explorer:before { content: @fa-var-internet-explorer; }
.@{fa-css-prefix}-intersection:before { content: @fa-var-intersection; }
.@{fa-css-prefix}-inventory:before { content: @fa-var-inventory; }
.@{fa-css-prefix}-invision:before { content: @fa-var-invision; }
.@{fa-css-prefix}-ioxhost:before { content: @fa-var-ioxhost; }
.@{fa-css-prefix}-island-tropical:before { content: @fa-var-island-tropical; }
.@{fa-css-prefix}-italic:before { content: @fa-var-italic; }
.@{fa-css-prefix}-itch-io:before { content: @fa-var-itch-io; }
.@{fa-css-prefix}-itunes:before { content: @fa-var-itunes; }
.@{fa-css-prefix}-itunes-note:before { content: @fa-var-itunes-note; }
.@{fa-css-prefix}-jack-o-lantern:before { content: @fa-var-jack-o-lantern; }
.@{fa-css-prefix}-java:before { content: @fa-var-java; }
.@{fa-css-prefix}-jedi:before { content: @fa-var-jedi; }
.@{fa-css-prefix}-jedi-order:before { content: @fa-var-jedi-order; }
.@{fa-css-prefix}-jenkins:before { content: @fa-var-jenkins; }
.@{fa-css-prefix}-jira:before { content: @fa-var-jira; }
.@{fa-css-prefix}-joget:before { content: @fa-var-joget; }
.@{fa-css-prefix}-joint:before { content: @fa-var-joint; }
.@{fa-css-prefix}-joomla:before { content: @fa-var-joomla; }
.@{fa-css-prefix}-journal-whills:before { content: @fa-var-journal-whills; }
.@{fa-css-prefix}-js:before { content: @fa-var-js; }
.@{fa-css-prefix}-js-square:before { content: @fa-var-js-square; }
.@{fa-css-prefix}-jsfiddle:before { content: @fa-var-jsfiddle; }
.@{fa-css-prefix}-kaaba:before { content: @fa-var-kaaba; }
.@{fa-css-prefix}-kaggle:before { content: @fa-var-kaggle; }
.@{fa-css-prefix}-key:before { content: @fa-var-key; }
.@{fa-css-prefix}-key-skeleton:before { content: @fa-var-key-skeleton; }
.@{fa-css-prefix}-keybase:before { content: @fa-var-keybase; }
.@{fa-css-prefix}-keyboard:before { content: @fa-var-keyboard; }
.@{fa-css-prefix}-keycdn:before { content: @fa-var-keycdn; }
.@{fa-css-prefix}-keynote:before { content: @fa-var-keynote; }
.@{fa-css-prefix}-khanda:before { content: @fa-var-khanda; }
.@{fa-css-prefix}-kickstarter:before { content: @fa-var-kickstarter; }
.@{fa-css-prefix}-kickstarter-k:before { content: @fa-var-kickstarter-k; }
.@{fa-css-prefix}-kidneys:before { content: @fa-var-kidneys; }
.@{fa-css-prefix}-kiss:before { content: @fa-var-kiss; }
.@{fa-css-prefix}-kiss-beam:before { content: @fa-var-kiss-beam; }
.@{fa-css-prefix}-kiss-wink-heart:before { content: @fa-var-kiss-wink-heart; }
.@{fa-css-prefix}-kite:before { content: @fa-var-kite; }
.@{fa-css-prefix}-kiwi-bird:before { content: @fa-var-kiwi-bird; }
.@{fa-css-prefix}-knife-kitchen:before { content: @fa-var-knife-kitchen; }
.@{fa-css-prefix}-korvue:before { content: @fa-var-korvue; }
.@{fa-css-prefix}-lambda:before { content: @fa-var-lambda; }
.@{fa-css-prefix}-lamp:before { content: @fa-var-lamp; }
.@{fa-css-prefix}-landmark:before { content: @fa-var-landmark; }
.@{fa-css-prefix}-landmark-alt:before { content: @fa-var-landmark-alt; }
.@{fa-css-prefix}-language:before { content: @fa-var-language; }
.@{fa-css-prefix}-laptop:before { content: @fa-var-laptop; }
.@{fa-css-prefix}-laptop-code:before { content: @fa-var-laptop-code; }
.@{fa-css-prefix}-laptop-medical:before { content: @fa-var-laptop-medical; }
.@{fa-css-prefix}-laravel:before { content: @fa-var-laravel; }
.@{fa-css-prefix}-lastfm:before { content: @fa-var-lastfm; }
.@{fa-css-prefix}-lastfm-square:before { content: @fa-var-lastfm-square; }
.@{fa-css-prefix}-laugh:before { content: @fa-var-laugh; }
.@{fa-css-prefix}-laugh-beam:before { content: @fa-var-laugh-beam; }
.@{fa-css-prefix}-laugh-squint:before { content: @fa-var-laugh-squint; }
.@{fa-css-prefix}-laugh-wink:before { content: @fa-var-laugh-wink; }
.@{fa-css-prefix}-layer-group:before { content: @fa-var-layer-group; }
.@{fa-css-prefix}-layer-minus:before { content: @fa-var-layer-minus; }
.@{fa-css-prefix}-layer-plus:before { content: @fa-var-layer-plus; }
.@{fa-css-prefix}-leaf:before { content: @fa-var-leaf; }
.@{fa-css-prefix}-leaf-heart:before { content: @fa-var-leaf-heart; }
.@{fa-css-prefix}-leaf-maple:before { content: @fa-var-leaf-maple; }
.@{fa-css-prefix}-leaf-oak:before { content: @fa-var-leaf-oak; }
.@{fa-css-prefix}-leanpub:before { content: @fa-var-leanpub; }
.@{fa-css-prefix}-lemon:before { content: @fa-var-lemon; }
.@{fa-css-prefix}-less:before { content: @fa-var-less; }
.@{fa-css-prefix}-less-than:before { content: @fa-var-less-than; }
.@{fa-css-prefix}-less-than-equal:before { content: @fa-var-less-than-equal; }
.@{fa-css-prefix}-level-down:before { content: @fa-var-level-down; }
.@{fa-css-prefix}-level-down-alt:before { content: @fa-var-level-down-alt; }
.@{fa-css-prefix}-level-up:before { content: @fa-var-level-up; }
.@{fa-css-prefix}-level-up-alt:before { content: @fa-var-level-up-alt; }
.@{fa-css-prefix}-life-ring:before { content: @fa-var-life-ring; }
.@{fa-css-prefix}-lightbulb:before { content: @fa-var-lightbulb; }
.@{fa-css-prefix}-lightbulb-dollar:before { content: @fa-var-lightbulb-dollar; }
.@{fa-css-prefix}-lightbulb-exclamation:before { content: @fa-var-lightbulb-exclamation; }
.@{fa-css-prefix}-lightbulb-on:before { content: @fa-var-lightbulb-on; }
.@{fa-css-prefix}-lightbulb-slash:before { content: @fa-var-lightbulb-slash; }
.@{fa-css-prefix}-lights-holiday:before { content: @fa-var-lights-holiday; }
.@{fa-css-prefix}-line:before { content: @fa-var-line; }
.@{fa-css-prefix}-link:before { content: @fa-var-link; }
.@{fa-css-prefix}-linkedin:before { content: @fa-var-linkedin; }
.@{fa-css-prefix}-linkedin-in:before { content: @fa-var-linkedin-in; }
.@{fa-css-prefix}-linode:before { content: @fa-var-linode; }
.@{fa-css-prefix}-linux:before { content: @fa-var-linux; }
.@{fa-css-prefix}-lips:before { content: @fa-var-lips; }
.@{fa-css-prefix}-lira-sign:before { content: @fa-var-lira-sign; }
.@{fa-css-prefix}-list:before { content: @fa-var-list; }
.@{fa-css-prefix}-list-alt:before { content: @fa-var-list-alt; }
.@{fa-css-prefix}-list-ol:before { content: @fa-var-list-ol; }
.@{fa-css-prefix}-list-ul:before { content: @fa-var-list-ul; }
.@{fa-css-prefix}-location:before { content: @fa-var-location; }
.@{fa-css-prefix}-location-arrow:before { content: @fa-var-location-arrow; }
.@{fa-css-prefix}-location-circle:before { content: @fa-var-location-circle; }
.@{fa-css-prefix}-location-slash:before { content: @fa-var-location-slash; }
.@{fa-css-prefix}-lock:before { content: @fa-var-lock; }
.@{fa-css-prefix}-lock-alt:before { content: @fa-var-lock-alt; }
.@{fa-css-prefix}-lock-open:before { content: @fa-var-lock-open; }
.@{fa-css-prefix}-lock-open-alt:before { content: @fa-var-lock-open-alt; }
.@{fa-css-prefix}-long-arrow-alt-down:before { content: @fa-var-long-arrow-alt-down; }
.@{fa-css-prefix}-long-arrow-alt-left:before { content: @fa-var-long-arrow-alt-left; }
.@{fa-css-prefix}-long-arrow-alt-right:before { content: @fa-var-long-arrow-alt-right; }
.@{fa-css-prefix}-long-arrow-alt-up:before { content: @fa-var-long-arrow-alt-up; }
.@{fa-css-prefix}-long-arrow-down:before { content: @fa-var-long-arrow-down; }
.@{fa-css-prefix}-long-arrow-left:before { content: @fa-var-long-arrow-left; }
.@{fa-css-prefix}-long-arrow-right:before { content: @fa-var-long-arrow-right; }
.@{fa-css-prefix}-long-arrow-up:before { content: @fa-var-long-arrow-up; }
.@{fa-css-prefix}-loveseat:before { content: @fa-var-loveseat; }
.@{fa-css-prefix}-low-vision:before { content: @fa-var-low-vision; }
.@{fa-css-prefix}-luchador:before { content: @fa-var-luchador; }
.@{fa-css-prefix}-luggage-cart:before { content: @fa-var-luggage-cart; }
.@{fa-css-prefix}-lungs:before { content: @fa-var-lungs; }
.@{fa-css-prefix}-lyft:before { content: @fa-var-lyft; }
.@{fa-css-prefix}-mace:before { content: @fa-var-mace; }
.@{fa-css-prefix}-magento:before { content: @fa-var-magento; }
.@{fa-css-prefix}-magic:before { content: @fa-var-magic; }
.@{fa-css-prefix}-magnet:before { content: @fa-var-magnet; }
.@{fa-css-prefix}-mail-bulk:before { content: @fa-var-mail-bulk; }
.@{fa-css-prefix}-mailbox:before { content: @fa-var-mailbox; }
.@{fa-css-prefix}-mailchimp:before { content: @fa-var-mailchimp; }
.@{fa-css-prefix}-male:before { content: @fa-var-male; }
.@{fa-css-prefix}-mandalorian:before { content: @fa-var-mandalorian; }
.@{fa-css-prefix}-mandolin:before { content: @fa-var-mandolin; }
.@{fa-css-prefix}-map:before { content: @fa-var-map; }
.@{fa-css-prefix}-map-marked:before { content: @fa-var-map-marked; }
.@{fa-css-prefix}-map-marked-alt:before { content: @fa-var-map-marked-alt; }
.@{fa-css-prefix}-map-marker:before { content: @fa-var-map-marker; }
.@{fa-css-prefix}-map-marker-alt:before { content: @fa-var-map-marker-alt; }
.@{fa-css-prefix}-map-marker-alt-slash:before { content: @fa-var-map-marker-alt-slash; }
.@{fa-css-prefix}-map-marker-check:before { content: @fa-var-map-marker-check; }
.@{fa-css-prefix}-map-marker-edit:before { content: @fa-var-map-marker-edit; }
.@{fa-css-prefix}-map-marker-exclamation:before { content: @fa-var-map-marker-exclamation; }
.@{fa-css-prefix}-map-marker-minus:before { content: @fa-var-map-marker-minus; }
.@{fa-css-prefix}-map-marker-plus:before { content: @fa-var-map-marker-plus; }
.@{fa-css-prefix}-map-marker-question:before { content: @fa-var-map-marker-question; }
.@{fa-css-prefix}-map-marker-slash:before { content: @fa-var-map-marker-slash; }
.@{fa-css-prefix}-map-marker-smile:before { content: @fa-var-map-marker-smile; }
.@{fa-css-prefix}-map-marker-times:before { content: @fa-var-map-marker-times; }
.@{fa-css-prefix}-map-pin:before { content: @fa-var-map-pin; }
.@{fa-css-prefix}-map-signs:before { content: @fa-var-map-signs; }
.@{fa-css-prefix}-markdown:before { content: @fa-var-markdown; }
.@{fa-css-prefix}-marker:before { content: @fa-var-marker; }
.@{fa-css-prefix}-mars:before { content: @fa-var-mars; }
.@{fa-css-prefix}-mars-double:before { content: @fa-var-mars-double; }
.@{fa-css-prefix}-mars-stroke:before { content: @fa-var-mars-stroke; }
.@{fa-css-prefix}-mars-stroke-h:before { content: @fa-var-mars-stroke-h; }
.@{fa-css-prefix}-mars-stroke-v:before { content: @fa-var-mars-stroke-v; }
.@{fa-css-prefix}-mask:before { content: @fa-var-mask; }
.@{fa-css-prefix}-mastodon:before { content: @fa-var-mastodon; }
.@{fa-css-prefix}-maxcdn:before { content: @fa-var-maxcdn; }
.@{fa-css-prefix}-meat:before { content: @fa-var-meat; }
.@{fa-css-prefix}-medal:before { content: @fa-var-medal; }
.@{fa-css-prefix}-medapps:before { content: @fa-var-medapps; }
.@{fa-css-prefix}-medium:before { content: @fa-var-medium; }
.@{fa-css-prefix}-medium-m:before { content: @fa-var-medium-m; }
.@{fa-css-prefix}-medkit:before { content: @fa-var-medkit; }
.@{fa-css-prefix}-medrt:before { content: @fa-var-medrt; }
.@{fa-css-prefix}-meetup:before { content: @fa-var-meetup; }
.@{fa-css-prefix}-megaphone:before { content: @fa-var-megaphone; }
.@{fa-css-prefix}-megaport:before { content: @fa-var-megaport; }
.@{fa-css-prefix}-meh:before { content: @fa-var-meh; }
.@{fa-css-prefix}-meh-blank:before { content: @fa-var-meh-blank; }
.@{fa-css-prefix}-meh-rolling-eyes:before { content: @fa-var-meh-rolling-eyes; }
.@{fa-css-prefix}-memory:before { content: @fa-var-memory; }
.@{fa-css-prefix}-mendeley:before { content: @fa-var-mendeley; }
.@{fa-css-prefix}-menorah:before { content: @fa-var-menorah; }
.@{fa-css-prefix}-mercury:before { content: @fa-var-mercury; }
.@{fa-css-prefix}-meteor:before { content: @fa-var-meteor; }
.@{fa-css-prefix}-microchip:before { content: @fa-var-microchip; }
.@{fa-css-prefix}-microphone:before { content: @fa-var-microphone; }
.@{fa-css-prefix}-microphone-alt:before { content: @fa-var-microphone-alt; }
.@{fa-css-prefix}-microphone-alt-slash:before { content: @fa-var-microphone-alt-slash; }
.@{fa-css-prefix}-microphone-slash:before { content: @fa-var-microphone-slash; }
.@{fa-css-prefix}-microscope:before { content: @fa-var-microscope; }
.@{fa-css-prefix}-microsoft:before { content: @fa-var-microsoft; }
.@{fa-css-prefix}-mind-share:before { content: @fa-var-mind-share; }
.@{fa-css-prefix}-minus:before { content: @fa-var-minus; }
.@{fa-css-prefix}-minus-circle:before { content: @fa-var-minus-circle; }
.@{fa-css-prefix}-minus-hexagon:before { content: @fa-var-minus-hexagon; }
.@{fa-css-prefix}-minus-octagon:before { content: @fa-var-minus-octagon; }
.@{fa-css-prefix}-minus-square:before { content: @fa-var-minus-square; }
.@{fa-css-prefix}-mistletoe:before { content: @fa-var-mistletoe; }
.@{fa-css-prefix}-mitten:before { content: @fa-var-mitten; }
.@{fa-css-prefix}-mix:before { content: @fa-var-mix; }
.@{fa-css-prefix}-mixcloud:before { content: @fa-var-mixcloud; }
.@{fa-css-prefix}-mizuni:before { content: @fa-var-mizuni; }
.@{fa-css-prefix}-mobile:before { content: @fa-var-mobile; }
.@{fa-css-prefix}-mobile-alt:before { content: @fa-var-mobile-alt; }
.@{fa-css-prefix}-mobile-android:before { content: @fa-var-mobile-android; }
.@{fa-css-prefix}-mobile-android-alt:before { content: @fa-var-mobile-android-alt; }
.@{fa-css-prefix}-modx:before { content: @fa-var-modx; }
.@{fa-css-prefix}-monero:before { content: @fa-var-monero; }
.@{fa-css-prefix}-money-bill:before { content: @fa-var-money-bill; }
.@{fa-css-prefix}-money-bill-alt:before { content: @fa-var-money-bill-alt; }
.@{fa-css-prefix}-money-bill-wave:before { content: @fa-var-money-bill-wave; }
.@{fa-css-prefix}-money-bill-wave-alt:before { content: @fa-var-money-bill-wave-alt; }
.@{fa-css-prefix}-money-check:before { content: @fa-var-money-check; }
.@{fa-css-prefix}-money-check-alt:before { content: @fa-var-money-check-alt; }
.@{fa-css-prefix}-monitor-heart-rate:before { content: @fa-var-monitor-heart-rate; }
.@{fa-css-prefix}-monkey:before { content: @fa-var-monkey; }
.@{fa-css-prefix}-monument:before { content: @fa-var-monument; }
.@{fa-css-prefix}-moon:before { content: @fa-var-moon; }
.@{fa-css-prefix}-moon-cloud:before { content: @fa-var-moon-cloud; }
.@{fa-css-prefix}-moon-stars:before { content: @fa-var-moon-stars; }
.@{fa-css-prefix}-mortar-pestle:before { content: @fa-var-mortar-pestle; }
.@{fa-css-prefix}-mosque:before { content: @fa-var-mosque; }
.@{fa-css-prefix}-motorcycle:before { content: @fa-var-motorcycle; }
.@{fa-css-prefix}-mountain:before { content: @fa-var-mountain; }
.@{fa-css-prefix}-mountains:before { content: @fa-var-mountains; }
.@{fa-css-prefix}-mouse-pointer:before { content: @fa-var-mouse-pointer; }
.@{fa-css-prefix}-mug-hot:before { content: @fa-var-mug-hot; }
.@{fa-css-prefix}-mug-marshmallows:before { content: @fa-var-mug-marshmallows; }
.@{fa-css-prefix}-music:before { content: @fa-var-music; }
.@{fa-css-prefix}-napster:before { content: @fa-var-napster; }
.@{fa-css-prefix}-narwhal:before { content: @fa-var-narwhal; }
.@{fa-css-prefix}-neos:before { content: @fa-var-neos; }
.@{fa-css-prefix}-network-wired:before { content: @fa-var-network-wired; }
.@{fa-css-prefix}-neuter:before { content: @fa-var-neuter; }
.@{fa-css-prefix}-newspaper:before { content: @fa-var-newspaper; }
.@{fa-css-prefix}-nimblr:before { content: @fa-var-nimblr; }
.@{fa-css-prefix}-nintendo-switch:before { content: @fa-var-nintendo-switch; }
.@{fa-css-prefix}-node:before { content: @fa-var-node; }
.@{fa-css-prefix}-node-js:before { content: @fa-var-node-js; }
.@{fa-css-prefix}-not-equal:before { content: @fa-var-not-equal; }
.@{fa-css-prefix}-notes-medical:before { content: @fa-var-notes-medical; }
.@{fa-css-prefix}-npm:before { content: @fa-var-npm; }
.@{fa-css-prefix}-ns8:before { content: @fa-var-ns8; }
.@{fa-css-prefix}-nutritionix:before { content: @fa-var-nutritionix; }
.@{fa-css-prefix}-object-group:before { content: @fa-var-object-group; }
.@{fa-css-prefix}-object-ungroup:before { content: @fa-var-object-ungroup; }
.@{fa-css-prefix}-octagon:before { content: @fa-var-octagon; }
.@{fa-css-prefix}-odnoklassniki:before { content: @fa-var-odnoklassniki; }
.@{fa-css-prefix}-odnoklassniki-square:before { content: @fa-var-odnoklassniki-square; }
.@{fa-css-prefix}-oil-can:before { content: @fa-var-oil-can; }
.@{fa-css-prefix}-oil-temp:before { content: @fa-var-oil-temp; }
.@{fa-css-prefix}-old-republic:before { content: @fa-var-old-republic; }
.@{fa-css-prefix}-om:before { content: @fa-var-om; }
.@{fa-css-prefix}-omega:before { content: @fa-var-omega; }
.@{fa-css-prefix}-opencart:before { content: @fa-var-opencart; }
.@{fa-css-prefix}-openid:before { content: @fa-var-openid; }
.@{fa-css-prefix}-opera:before { content: @fa-var-opera; }
.@{fa-css-prefix}-optin-monster:before { content: @fa-var-optin-monster; }
.@{fa-css-prefix}-ornament:before { content: @fa-var-ornament; }
.@{fa-css-prefix}-osi:before { content: @fa-var-osi; }
.@{fa-css-prefix}-otter:before { content: @fa-var-otter; }
.@{fa-css-prefix}-outdent:before { content: @fa-var-outdent; }
.@{fa-css-prefix}-page4:before { content: @fa-var-page4; }
.@{fa-css-prefix}-pagelines:before { content: @fa-var-pagelines; }
.@{fa-css-prefix}-pager:before { content: @fa-var-pager; }
.@{fa-css-prefix}-paint-brush:before { content: @fa-var-paint-brush; }
.@{fa-css-prefix}-paint-brush-alt:before { content: @fa-var-paint-brush-alt; }
.@{fa-css-prefix}-paint-roller:before { content: @fa-var-paint-roller; }
.@{fa-css-prefix}-palette:before { content: @fa-var-palette; }
.@{fa-css-prefix}-palfed:before { content: @fa-var-palfed; }
.@{fa-css-prefix}-pallet:before { content: @fa-var-pallet; }
.@{fa-css-prefix}-pallet-alt:before { content: @fa-var-pallet-alt; }
.@{fa-css-prefix}-paper-plane:before { content: @fa-var-paper-plane; }
.@{fa-css-prefix}-paperclip:before { content: @fa-var-paperclip; }
.@{fa-css-prefix}-parachute-box:before { content: @fa-var-parachute-box; }
.@{fa-css-prefix}-paragraph:before { content: @fa-var-paragraph; }
.@{fa-css-prefix}-parking:before { content: @fa-var-parking; }
.@{fa-css-prefix}-parking-circle:before { content: @fa-var-parking-circle; }
.@{fa-css-prefix}-parking-circle-slash:before { content: @fa-var-parking-circle-slash; }
.@{fa-css-prefix}-parking-slash:before { content: @fa-var-parking-slash; }
.@{fa-css-prefix}-passport:before { content: @fa-var-passport; }
.@{fa-css-prefix}-pastafarianism:before { content: @fa-var-pastafarianism; }
.@{fa-css-prefix}-paste:before { content: @fa-var-paste; }
.@{fa-css-prefix}-patreon:before { content: @fa-var-patreon; }
.@{fa-css-prefix}-pause:before { content: @fa-var-pause; }
.@{fa-css-prefix}-pause-circle:before { content: @fa-var-pause-circle; }
.@{fa-css-prefix}-paw:before { content: @fa-var-paw; }
.@{fa-css-prefix}-paw-alt:before { content: @fa-var-paw-alt; }
.@{fa-css-prefix}-paw-claws:before { content: @fa-var-paw-claws; }
.@{fa-css-prefix}-paypal:before { content: @fa-var-paypal; }
.@{fa-css-prefix}-peace:before { content: @fa-var-peace; }
.@{fa-css-prefix}-pegasus:before { content: @fa-var-pegasus; }
.@{fa-css-prefix}-pen:before { content: @fa-var-pen; }
.@{fa-css-prefix}-pen-alt:before { content: @fa-var-pen-alt; }
.@{fa-css-prefix}-pen-fancy:before { content: @fa-var-pen-fancy; }
.@{fa-css-prefix}-pen-nib:before { content: @fa-var-pen-nib; }
.@{fa-css-prefix}-pen-square:before { content: @fa-var-pen-square; }
.@{fa-css-prefix}-pencil:before { content: @fa-var-pencil; }
.@{fa-css-prefix}-pencil-alt:before { content: @fa-var-pencil-alt; }
.@{fa-css-prefix}-pencil-paintbrush:before { content: @fa-var-pencil-paintbrush; }
.@{fa-css-prefix}-pencil-ruler:before { content: @fa-var-pencil-ruler; }
.@{fa-css-prefix}-pennant:before { content: @fa-var-pennant; }
.@{fa-css-prefix}-penny-arcade:before { content: @fa-var-penny-arcade; }
.@{fa-css-prefix}-people-carry:before { content: @fa-var-people-carry; }
.@{fa-css-prefix}-pepper-hot:before { content: @fa-var-pepper-hot; }
.@{fa-css-prefix}-percent:before { content: @fa-var-percent; }
.@{fa-css-prefix}-percentage:before { content: @fa-var-percentage; }
.@{fa-css-prefix}-periscope:before { content: @fa-var-periscope; }
.@{fa-css-prefix}-person-booth:before { content: @fa-var-person-booth; }
.@{fa-css-prefix}-person-carry:before { content: @fa-var-person-carry; }
.@{fa-css-prefix}-person-dolly:before { content: @fa-var-person-dolly; }
.@{fa-css-prefix}-person-dolly-empty:before { content: @fa-var-person-dolly-empty; }
.@{fa-css-prefix}-person-sign:before { content: @fa-var-person-sign; }
.@{fa-css-prefix}-phabricator:before { content: @fa-var-phabricator; }
.@{fa-css-prefix}-phoenix-framework:before { content: @fa-var-phoenix-framework; }
.@{fa-css-prefix}-phoenix-squadron:before { content: @fa-var-phoenix-squadron; }
.@{fa-css-prefix}-phone:before { content: @fa-var-phone; }
.@{fa-css-prefix}-phone-office:before { content: @fa-var-phone-office; }
.@{fa-css-prefix}-phone-plus:before { content: @fa-var-phone-plus; }
.@{fa-css-prefix}-phone-slash:before { content: @fa-var-phone-slash; }
.@{fa-css-prefix}-phone-square:before { content: @fa-var-phone-square; }
.@{fa-css-prefix}-phone-volume:before { content: @fa-var-phone-volume; }
.@{fa-css-prefix}-php:before { content: @fa-var-php; }
.@{fa-css-prefix}-pi:before { content: @fa-var-pi; }
.@{fa-css-prefix}-pie:before { content: @fa-var-pie; }
.@{fa-css-prefix}-pied-piper:before { content: @fa-var-pied-piper; }
.@{fa-css-prefix}-pied-piper-alt:before { content: @fa-var-pied-piper-alt; }
.@{fa-css-prefix}-pied-piper-hat:before { content: @fa-var-pied-piper-hat; }
.@{fa-css-prefix}-pied-piper-pp:before { content: @fa-var-pied-piper-pp; }
.@{fa-css-prefix}-pig:before { content: @fa-var-pig; }
.@{fa-css-prefix}-piggy-bank:before { content: @fa-var-piggy-bank; }
.@{fa-css-prefix}-pills:before { content: @fa-var-pills; }
.@{fa-css-prefix}-pinterest:before { content: @fa-var-pinterest; }
.@{fa-css-prefix}-pinterest-p:before { content: @fa-var-pinterest-p; }
.@{fa-css-prefix}-pinterest-square:before { content: @fa-var-pinterest-square; }
.@{fa-css-prefix}-pizza:before { content: @fa-var-pizza; }
.@{fa-css-prefix}-pizza-slice:before { content: @fa-var-pizza-slice; }
.@{fa-css-prefix}-place-of-worship:before { content: @fa-var-place-of-worship; }
.@{fa-css-prefix}-plane:before { content: @fa-var-plane; }
.@{fa-css-prefix}-plane-alt:before { content: @fa-var-plane-alt; }
.@{fa-css-prefix}-plane-arrival:before { content: @fa-var-plane-arrival; }
.@{fa-css-prefix}-plane-departure:before { content: @fa-var-plane-departure; }
.@{fa-css-prefix}-play:before { content: @fa-var-play; }
.@{fa-css-prefix}-play-circle:before { content: @fa-var-play-circle; }
.@{fa-css-prefix}-playstation:before { content: @fa-var-playstation; }
.@{fa-css-prefix}-plug:before { content: @fa-var-plug; }
.@{fa-css-prefix}-plus:before { content: @fa-var-plus; }
.@{fa-css-prefix}-plus-circle:before { content: @fa-var-plus-circle; }
.@{fa-css-prefix}-plus-hexagon:before { content: @fa-var-plus-hexagon; }
.@{fa-css-prefix}-plus-octagon:before { content: @fa-var-plus-octagon; }
.@{fa-css-prefix}-plus-square:before { content: @fa-var-plus-square; }
.@{fa-css-prefix}-podcast:before { content: @fa-var-podcast; }
.@{fa-css-prefix}-podium:before { content: @fa-var-podium; }
.@{fa-css-prefix}-podium-star:before { content: @fa-var-podium-star; }
.@{fa-css-prefix}-poll:before { content: @fa-var-poll; }
.@{fa-css-prefix}-poll-h:before { content: @fa-var-poll-h; }
.@{fa-css-prefix}-poll-people:before { content: @fa-var-poll-people; }
.@{fa-css-prefix}-poo:before { content: @fa-var-poo; }
.@{fa-css-prefix}-poo-storm:before { content: @fa-var-poo-storm; }
.@{fa-css-prefix}-poop:before { content: @fa-var-poop; }
.@{fa-css-prefix}-popcorn:before { content: @fa-var-popcorn; }
.@{fa-css-prefix}-portrait:before { content: @fa-var-portrait; }
.@{fa-css-prefix}-pound-sign:before { content: @fa-var-pound-sign; }
.@{fa-css-prefix}-power-off:before { content: @fa-var-power-off; }
.@{fa-css-prefix}-pray:before { content: @fa-var-pray; }
.@{fa-css-prefix}-praying-hands:before { content: @fa-var-praying-hands; }
.@{fa-css-prefix}-prescription:before { content: @fa-var-prescription; }
.@{fa-css-prefix}-prescription-bottle:before { content: @fa-var-prescription-bottle; }
.@{fa-css-prefix}-prescription-bottle-alt:before { content: @fa-var-prescription-bottle-alt; }
.@{fa-css-prefix}-presentation:before { content: @fa-var-presentation; }
.@{fa-css-prefix}-print:before { content: @fa-var-print; }
.@{fa-css-prefix}-print-search:before { content: @fa-var-print-search; }
.@{fa-css-prefix}-print-slash:before { content: @fa-var-print-slash; }
.@{fa-css-prefix}-procedures:before { content: @fa-var-procedures; }
.@{fa-css-prefix}-product-hunt:before { content: @fa-var-product-hunt; }
.@{fa-css-prefix}-project-diagram:before { content: @fa-var-project-diagram; }
.@{fa-css-prefix}-pumpkin:before { content: @fa-var-pumpkin; }
.@{fa-css-prefix}-pushed:before { content: @fa-var-pushed; }
.@{fa-css-prefix}-puzzle-piece:before { content: @fa-var-puzzle-piece; }
.@{fa-css-prefix}-python:before { content: @fa-var-python; }
.@{fa-css-prefix}-qq:before { content: @fa-var-qq; }
.@{fa-css-prefix}-qrcode:before { content: @fa-var-qrcode; }
.@{fa-css-prefix}-question:before { content: @fa-var-question; }
.@{fa-css-prefix}-question-circle:before { content: @fa-var-question-circle; }
.@{fa-css-prefix}-question-square:before { content: @fa-var-question-square; }
.@{fa-css-prefix}-quidditch:before { content: @fa-var-quidditch; }
.@{fa-css-prefix}-quinscape:before { content: @fa-var-quinscape; }
.@{fa-css-prefix}-quora:before { content: @fa-var-quora; }
.@{fa-css-prefix}-quote-left:before { content: @fa-var-quote-left; }
.@{fa-css-prefix}-quote-right:before { content: @fa-var-quote-right; }
.@{fa-css-prefix}-quran:before { content: @fa-var-quran; }
.@{fa-css-prefix}-r-project:before { content: @fa-var-r-project; }
.@{fa-css-prefix}-rabbit:before { content: @fa-var-rabbit; }
.@{fa-css-prefix}-rabbit-fast:before { content: @fa-var-rabbit-fast; }
.@{fa-css-prefix}-racquet:before { content: @fa-var-racquet; }
.@{fa-css-prefix}-radiation:before { content: @fa-var-radiation; }
.@{fa-css-prefix}-radiation-alt:before { content: @fa-var-radiation-alt; }
.@{fa-css-prefix}-rainbow:before { content: @fa-var-rainbow; }
.@{fa-css-prefix}-raindrops:before { content: @fa-var-raindrops; }
.@{fa-css-prefix}-ram:before { content: @fa-var-ram; }
.@{fa-css-prefix}-ramp-loading:before { content: @fa-var-ramp-loading; }
.@{fa-css-prefix}-random:before { content: @fa-var-random; }
.@{fa-css-prefix}-raspberry-pi:before { content: @fa-var-raspberry-pi; }
.@{fa-css-prefix}-ravelry:before { content: @fa-var-ravelry; }
.@{fa-css-prefix}-react:before { content: @fa-var-react; }
.@{fa-css-prefix}-reacteurope:before { content: @fa-var-reacteurope; }
.@{fa-css-prefix}-readme:before { content: @fa-var-readme; }
.@{fa-css-prefix}-rebel:before { content: @fa-var-rebel; }
.@{fa-css-prefix}-receipt:before { content: @fa-var-receipt; }
.@{fa-css-prefix}-rectangle-landscape:before { content: @fa-var-rectangle-landscape; }
.@{fa-css-prefix}-rectangle-portrait:before { content: @fa-var-rectangle-portrait; }
.@{fa-css-prefix}-rectangle-wide:before { content: @fa-var-rectangle-wide; }
.@{fa-css-prefix}-recycle:before { content: @fa-var-recycle; }
.@{fa-css-prefix}-red-river:before { content: @fa-var-red-river; }
.@{fa-css-prefix}-reddit:before { content: @fa-var-reddit; }
.@{fa-css-prefix}-reddit-alien:before { content: @fa-var-reddit-alien; }
.@{fa-css-prefix}-reddit-square:before { content: @fa-var-reddit-square; }
.@{fa-css-prefix}-redhat:before { content: @fa-var-redhat; }
.@{fa-css-prefix}-redo:before { content: @fa-var-redo; }
.@{fa-css-prefix}-redo-alt:before { content: @fa-var-redo-alt; }
.@{fa-css-prefix}-registered:before { content: @fa-var-registered; }
.@{fa-css-prefix}-renren:before { content: @fa-var-renren; }
.@{fa-css-prefix}-repeat:before { content: @fa-var-repeat; }
.@{fa-css-prefix}-repeat-1:before { content: @fa-var-repeat-1; }
.@{fa-css-prefix}-repeat-1-alt:before { content: @fa-var-repeat-1-alt; }
.@{fa-css-prefix}-repeat-alt:before { content: @fa-var-repeat-alt; }
.@{fa-css-prefix}-reply:before { content: @fa-var-reply; }
.@{fa-css-prefix}-reply-all:before { content: @fa-var-reply-all; }
.@{fa-css-prefix}-replyd:before { content: @fa-var-replyd; }
.@{fa-css-prefix}-republican:before { content: @fa-var-republican; }
.@{fa-css-prefix}-researchgate:before { content: @fa-var-researchgate; }
.@{fa-css-prefix}-resolving:before { content: @fa-var-resolving; }
.@{fa-css-prefix}-restroom:before { content: @fa-var-restroom; }
.@{fa-css-prefix}-retweet:before { content: @fa-var-retweet; }
.@{fa-css-prefix}-retweet-alt:before { content: @fa-var-retweet-alt; }
.@{fa-css-prefix}-rev:before { content: @fa-var-rev; }
.@{fa-css-prefix}-ribbon:before { content: @fa-var-ribbon; }
.@{fa-css-prefix}-ring:before { content: @fa-var-ring; }
.@{fa-css-prefix}-rings-wedding:before { content: @fa-var-rings-wedding; }
.@{fa-css-prefix}-road:before { content: @fa-var-road; }
.@{fa-css-prefix}-robot:before { content: @fa-var-robot; }
.@{fa-css-prefix}-rocket:before { content: @fa-var-rocket; }
.@{fa-css-prefix}-rocketchat:before { content: @fa-var-rocketchat; }
.@{fa-css-prefix}-rockrms:before { content: @fa-var-rockrms; }
.@{fa-css-prefix}-route:before { content: @fa-var-route; }
.@{fa-css-prefix}-route-highway:before { content: @fa-var-route-highway; }
.@{fa-css-prefix}-route-interstate:before { content: @fa-var-route-interstate; }
.@{fa-css-prefix}-rss:before { content: @fa-var-rss; }
.@{fa-css-prefix}-rss-square:before { content: @fa-var-rss-square; }
.@{fa-css-prefix}-ruble-sign:before { content: @fa-var-ruble-sign; }
.@{fa-css-prefix}-ruler:before { content: @fa-var-ruler; }
.@{fa-css-prefix}-ruler-combined:before { content: @fa-var-ruler-combined; }
.@{fa-css-prefix}-ruler-horizontal:before { content: @fa-var-ruler-horizontal; }
.@{fa-css-prefix}-ruler-triangle:before { content: @fa-var-ruler-triangle; }
.@{fa-css-prefix}-ruler-vertical:before { content: @fa-var-ruler-vertical; }
.@{fa-css-prefix}-running:before { content: @fa-var-running; }
.@{fa-css-prefix}-rupee-sign:before { content: @fa-var-rupee-sign; }
.@{fa-css-prefix}-rv:before { content: @fa-var-rv; }
.@{fa-css-prefix}-sack:before { content: @fa-var-sack; }
.@{fa-css-prefix}-sack-dollar:before { content: @fa-var-sack-dollar; }
.@{fa-css-prefix}-sad-cry:before { content: @fa-var-sad-cry; }
.@{fa-css-prefix}-sad-tear:before { content: @fa-var-sad-tear; }
.@{fa-css-prefix}-safari:before { content: @fa-var-safari; }
.@{fa-css-prefix}-salad:before { content: @fa-var-salad; }
.@{fa-css-prefix}-salesforce:before { content: @fa-var-salesforce; }
.@{fa-css-prefix}-sandwich:before { content: @fa-var-sandwich; }
.@{fa-css-prefix}-sass:before { content: @fa-var-sass; }
.@{fa-css-prefix}-satellite:before { content: @fa-var-satellite; }
.@{fa-css-prefix}-satellite-dish:before { content: @fa-var-satellite-dish; }
.@{fa-css-prefix}-sausage:before { content: @fa-var-sausage; }
.@{fa-css-prefix}-save:before { content: @fa-var-save; }
.@{fa-css-prefix}-scalpel:before { content: @fa-var-scalpel; }
.@{fa-css-prefix}-scalpel-path:before { content: @fa-var-scalpel-path; }
.@{fa-css-prefix}-scanner:before { content: @fa-var-scanner; }
.@{fa-css-prefix}-scanner-keyboard:before { content: @fa-var-scanner-keyboard; }
.@{fa-css-prefix}-scanner-touchscreen:before { content: @fa-var-scanner-touchscreen; }
.@{fa-css-prefix}-scarecrow:before { content: @fa-var-scarecrow; }
.@{fa-css-prefix}-scarf:before { content: @fa-var-scarf; }
.@{fa-css-prefix}-schlix:before { content: @fa-var-schlix; }
.@{fa-css-prefix}-school:before { content: @fa-var-school; }
.@{fa-css-prefix}-screwdriver:before { content: @fa-var-screwdriver; }
.@{fa-css-prefix}-scribd:before { content: @fa-var-scribd; }
.@{fa-css-prefix}-scroll:before { content: @fa-var-scroll; }
.@{fa-css-prefix}-scroll-old:before { content: @fa-var-scroll-old; }
.@{fa-css-prefix}-scrubber:before { content: @fa-var-scrubber; }
.@{fa-css-prefix}-scythe:before { content: @fa-var-scythe; }
.@{fa-css-prefix}-sd-card:before { content: @fa-var-sd-card; }
.@{fa-css-prefix}-search:before { content: @fa-var-search; }
.@{fa-css-prefix}-search-dollar:before { content: @fa-var-search-dollar; }
.@{fa-css-prefix}-search-location:before { content: @fa-var-search-location; }
.@{fa-css-prefix}-search-minus:before { content: @fa-var-search-minus; }
.@{fa-css-prefix}-search-plus:before { content: @fa-var-search-plus; }
.@{fa-css-prefix}-searchengin:before { content: @fa-var-searchengin; }
.@{fa-css-prefix}-seedling:before { content: @fa-var-seedling; }
.@{fa-css-prefix}-sellcast:before { content: @fa-var-sellcast; }
.@{fa-css-prefix}-sellsy:before { content: @fa-var-sellsy; }
.@{fa-css-prefix}-server:before { content: @fa-var-server; }
.@{fa-css-prefix}-servicestack:before { content: @fa-var-servicestack; }
.@{fa-css-prefix}-shapes:before { content: @fa-var-shapes; }
.@{fa-css-prefix}-share:before { content: @fa-var-share; }
.@{fa-css-prefix}-share-all:before { content: @fa-var-share-all; }
.@{fa-css-prefix}-share-alt:before { content: @fa-var-share-alt; }
.@{fa-css-prefix}-share-alt-square:before { content: @fa-var-share-alt-square; }
.@{fa-css-prefix}-share-square:before { content: @fa-var-share-square; }
.@{fa-css-prefix}-sheep:before { content: @fa-var-sheep; }
.@{fa-css-prefix}-shekel-sign:before { content: @fa-var-shekel-sign; }
.@{fa-css-prefix}-shield:before { content: @fa-var-shield; }
.@{fa-css-prefix}-shield-alt:before { content: @fa-var-shield-alt; }
.@{fa-css-prefix}-shield-check:before { content: @fa-var-shield-check; }
.@{fa-css-prefix}-shield-cross:before { content: @fa-var-shield-cross; }
.@{fa-css-prefix}-ship:before { content: @fa-var-ship; }
.@{fa-css-prefix}-shipping-fast:before { content: @fa-var-shipping-fast; }
.@{fa-css-prefix}-shipping-timed:before { content: @fa-var-shipping-timed; }
.@{fa-css-prefix}-shirtsinbulk:before { content: @fa-var-shirtsinbulk; }
.@{fa-css-prefix}-shish-kebab:before { content: @fa-var-shish-kebab; }
.@{fa-css-prefix}-shoe-prints:before { content: @fa-var-shoe-prints; }
.@{fa-css-prefix}-shopping-bag:before { content: @fa-var-shopping-bag; }
.@{fa-css-prefix}-shopping-basket:before { content: @fa-var-shopping-basket; }
.@{fa-css-prefix}-shopping-cart:before { content: @fa-var-shopping-cart; }
.@{fa-css-prefix}-shopware:before { content: @fa-var-shopware; }
.@{fa-css-prefix}-shovel:before { content: @fa-var-shovel; }
.@{fa-css-prefix}-shovel-snow:before { content: @fa-var-shovel-snow; }
.@{fa-css-prefix}-shower:before { content: @fa-var-shower; }
.@{fa-css-prefix}-shredder:before { content: @fa-var-shredder; }
.@{fa-css-prefix}-shuttle-van:before { content: @fa-var-shuttle-van; }
.@{fa-css-prefix}-shuttlecock:before { content: @fa-var-shuttlecock; }
.@{fa-css-prefix}-sickle:before { content: @fa-var-sickle; }
.@{fa-css-prefix}-sigma:before { content: @fa-var-sigma; }
.@{fa-css-prefix}-sign:before { content: @fa-var-sign; }
.@{fa-css-prefix}-sign-in:before { content: @fa-var-sign-in; }
.@{fa-css-prefix}-sign-in-alt:before { content: @fa-var-sign-in-alt; }
.@{fa-css-prefix}-sign-language:before { content: @fa-var-sign-language; }
.@{fa-css-prefix}-sign-out:before { content: @fa-var-sign-out; }
.@{fa-css-prefix}-sign-out-alt:before { content: @fa-var-sign-out-alt; }
.@{fa-css-prefix}-signal:before { content: @fa-var-signal; }
.@{fa-css-prefix}-signal-1:before { content: @fa-var-signal-1; }
.@{fa-css-prefix}-signal-2:before { content: @fa-var-signal-2; }
.@{fa-css-prefix}-signal-3:before { content: @fa-var-signal-3; }
.@{fa-css-prefix}-signal-4:before { content: @fa-var-signal-4; }
.@{fa-css-prefix}-signal-alt:before { content: @fa-var-signal-alt; }
.@{fa-css-prefix}-signal-alt-1:before { content: @fa-var-signal-alt-1; }
.@{fa-css-prefix}-signal-alt-2:before { content: @fa-var-signal-alt-2; }
.@{fa-css-prefix}-signal-alt-3:before { content: @fa-var-signal-alt-3; }
.@{fa-css-prefix}-signal-alt-slash:before { content: @fa-var-signal-alt-slash; }
.@{fa-css-prefix}-signal-slash:before { content: @fa-var-signal-slash; }
.@{fa-css-prefix}-signature:before { content: @fa-var-signature; }
.@{fa-css-prefix}-sim-card:before { content: @fa-var-sim-card; }
.@{fa-css-prefix}-simplybuilt:before { content: @fa-var-simplybuilt; }
.@{fa-css-prefix}-sistrix:before { content: @fa-var-sistrix; }
.@{fa-css-prefix}-sitemap:before { content: @fa-var-sitemap; }
.@{fa-css-prefix}-sith:before { content: @fa-var-sith; }
.@{fa-css-prefix}-skating:before { content: @fa-var-skating; }
.@{fa-css-prefix}-skeleton:before { content: @fa-var-skeleton; }
.@{fa-css-prefix}-sketch:before { content: @fa-var-sketch; }
.@{fa-css-prefix}-ski-jump:before { content: @fa-var-ski-jump; }
.@{fa-css-prefix}-ski-lift:before { content: @fa-var-ski-lift; }
.@{fa-css-prefix}-skiing:before { content: @fa-var-skiing; }
.@{fa-css-prefix}-skiing-nordic:before { content: @fa-var-skiing-nordic; }
.@{fa-css-prefix}-skull:before { content: @fa-var-skull; }
.@{fa-css-prefix}-skull-crossbones:before { content: @fa-var-skull-crossbones; }
.@{fa-css-prefix}-skyatlas:before { content: @fa-var-skyatlas; }
.@{fa-css-prefix}-skype:before { content: @fa-var-skype; }
.@{fa-css-prefix}-slack:before { content: @fa-var-slack; }
.@{fa-css-prefix}-slack-hash:before { content: @fa-var-slack-hash; }
.@{fa-css-prefix}-slash:before { content: @fa-var-slash; }
.@{fa-css-prefix}-sledding:before { content: @fa-var-sledding; }
.@{fa-css-prefix}-sleigh:before { content: @fa-var-sleigh; }
.@{fa-css-prefix}-sliders-h:before { content: @fa-var-sliders-h; }
.@{fa-css-prefix}-sliders-h-square:before { content: @fa-var-sliders-h-square; }
.@{fa-css-prefix}-sliders-v:before { content: @fa-var-sliders-v; }
.@{fa-css-prefix}-sliders-v-square:before { content: @fa-var-sliders-v-square; }
.@{fa-css-prefix}-slideshare:before { content: @fa-var-slideshare; }
.@{fa-css-prefix}-smile:before { content: @fa-var-smile; }
.@{fa-css-prefix}-smile-beam:before { content: @fa-var-smile-beam; }
.@{fa-css-prefix}-smile-plus:before { content: @fa-var-smile-plus; }
.@{fa-css-prefix}-smile-wink:before { content: @fa-var-smile-wink; }
.@{fa-css-prefix}-smog:before { content: @fa-var-smog; }
.@{fa-css-prefix}-smoke:before { content: @fa-var-smoke; }
.@{fa-css-prefix}-smoking:before { content: @fa-var-smoking; }
.@{fa-css-prefix}-smoking-ban:before { content: @fa-var-smoking-ban; }
.@{fa-css-prefix}-sms:before { content: @fa-var-sms; }
.@{fa-css-prefix}-snake:before { content: @fa-var-snake; }
.@{fa-css-prefix}-snapchat:before { content: @fa-var-snapchat; }
.@{fa-css-prefix}-snapchat-ghost:before { content: @fa-var-snapchat-ghost; }
.@{fa-css-prefix}-snapchat-square:before { content: @fa-var-snapchat-square; }
.@{fa-css-prefix}-snow-blowing:before { content: @fa-var-snow-blowing; }
.@{fa-css-prefix}-snowboarding:before { content: @fa-var-snowboarding; }
.@{fa-css-prefix}-snowflake:before { content: @fa-var-snowflake; }
.@{fa-css-prefix}-snowflakes:before { content: @fa-var-snowflakes; }
.@{fa-css-prefix}-snowman:before { content: @fa-var-snowman; }
.@{fa-css-prefix}-snowmobile:before { content: @fa-var-snowmobile; }
.@{fa-css-prefix}-snowplow:before { content: @fa-var-snowplow; }
.@{fa-css-prefix}-socks:before { content: @fa-var-socks; }
.@{fa-css-prefix}-solar-panel:before { content: @fa-var-solar-panel; }
.@{fa-css-prefix}-sort:before { content: @fa-var-sort; }
.@{fa-css-prefix}-sort-alpha-down:before { content: @fa-var-sort-alpha-down; }
.@{fa-css-prefix}-sort-alpha-up:before { content: @fa-var-sort-alpha-up; }
.@{fa-css-prefix}-sort-amount-down:before { content: @fa-var-sort-amount-down; }
.@{fa-css-prefix}-sort-amount-up:before { content: @fa-var-sort-amount-up; }
.@{fa-css-prefix}-sort-down:before { content: @fa-var-sort-down; }
.@{fa-css-prefix}-sort-numeric-down:before { content: @fa-var-sort-numeric-down; }
.@{fa-css-prefix}-sort-numeric-up:before { content: @fa-var-sort-numeric-up; }
.@{fa-css-prefix}-sort-up:before { content: @fa-var-sort-up; }
.@{fa-css-prefix}-soundcloud:before { content: @fa-var-soundcloud; }
.@{fa-css-prefix}-soup:before { content: @fa-var-soup; }
.@{fa-css-prefix}-sourcetree:before { content: @fa-var-sourcetree; }
.@{fa-css-prefix}-spa:before { content: @fa-var-spa; }
.@{fa-css-prefix}-space-shuttle:before { content: @fa-var-space-shuttle; }
.@{fa-css-prefix}-spade:before { content: @fa-var-spade; }
.@{fa-css-prefix}-speakap:before { content: @fa-var-speakap; }
.@{fa-css-prefix}-speaker-deck:before { content: @fa-var-speaker-deck; }
.@{fa-css-prefix}-spider:before { content: @fa-var-spider; }
.@{fa-css-prefix}-spider-black-widow:before { content: @fa-var-spider-black-widow; }
.@{fa-css-prefix}-spider-web:before { content: @fa-var-spider-web; }
.@{fa-css-prefix}-spinner:before { content: @fa-var-spinner; }
.@{fa-css-prefix}-spinner-third:before { content: @fa-var-spinner-third; }
.@{fa-css-prefix}-splotch:before { content: @fa-var-splotch; }
.@{fa-css-prefix}-spotify:before { content: @fa-var-spotify; }
.@{fa-css-prefix}-spray-can:before { content: @fa-var-spray-can; }
.@{fa-css-prefix}-square:before { content: @fa-var-square; }
.@{fa-css-prefix}-square-full:before { content: @fa-var-square-full; }
.@{fa-css-prefix}-square-root:before { content: @fa-var-square-root; }
.@{fa-css-prefix}-square-root-alt:before { content: @fa-var-square-root-alt; }
.@{fa-css-prefix}-squarespace:before { content: @fa-var-squarespace; }
.@{fa-css-prefix}-squirrel:before { content: @fa-var-squirrel; }
.@{fa-css-prefix}-stack-exchange:before { content: @fa-var-stack-exchange; }
.@{fa-css-prefix}-stack-overflow:before { content: @fa-var-stack-overflow; }
.@{fa-css-prefix}-staff:before { content: @fa-var-staff; }
.@{fa-css-prefix}-stamp:before { content: @fa-var-stamp; }
.@{fa-css-prefix}-star:before { content: @fa-var-star; }
.@{fa-css-prefix}-star-and-crescent:before { content: @fa-var-star-and-crescent; }
.@{fa-css-prefix}-star-christmas:before { content: @fa-var-star-christmas; }
.@{fa-css-prefix}-star-exclamation:before { content: @fa-var-star-exclamation; }
.@{fa-css-prefix}-star-half:before { content: @fa-var-star-half; }
.@{fa-css-prefix}-star-half-alt:before { content: @fa-var-star-half-alt; }
.@{fa-css-prefix}-star-of-david:before { content: @fa-var-star-of-david; }
.@{fa-css-prefix}-star-of-life:before { content: @fa-var-star-of-life; }
.@{fa-css-prefix}-stars:before { content: @fa-var-stars; }
.@{fa-css-prefix}-staylinked:before { content: @fa-var-staylinked; }
.@{fa-css-prefix}-steak:before { content: @fa-var-steak; }
.@{fa-css-prefix}-steam:before { content: @fa-var-steam; }
.@{fa-css-prefix}-steam-square:before { content: @fa-var-steam-square; }
.@{fa-css-prefix}-steam-symbol:before { content: @fa-var-steam-symbol; }
.@{fa-css-prefix}-steering-wheel:before { content: @fa-var-steering-wheel; }
.@{fa-css-prefix}-step-backward:before { content: @fa-var-step-backward; }
.@{fa-css-prefix}-step-forward:before { content: @fa-var-step-forward; }
.@{fa-css-prefix}-stethoscope:before { content: @fa-var-stethoscope; }
.@{fa-css-prefix}-sticker-mule:before { content: @fa-var-sticker-mule; }
.@{fa-css-prefix}-sticky-note:before { content: @fa-var-sticky-note; }
.@{fa-css-prefix}-stocking:before { content: @fa-var-stocking; }
.@{fa-css-prefix}-stomach:before { content: @fa-var-stomach; }
.@{fa-css-prefix}-stop:before { content: @fa-var-stop; }
.@{fa-css-prefix}-stop-circle:before { content: @fa-var-stop-circle; }
.@{fa-css-prefix}-stopwatch:before { content: @fa-var-stopwatch; }
.@{fa-css-prefix}-store:before { content: @fa-var-store; }
.@{fa-css-prefix}-store-alt:before { content: @fa-var-store-alt; }
.@{fa-css-prefix}-strava:before { content: @fa-var-strava; }
.@{fa-css-prefix}-stream:before { content: @fa-var-stream; }
.@{fa-css-prefix}-street-view:before { content: @fa-var-street-view; }
.@{fa-css-prefix}-stretcher:before { content: @fa-var-stretcher; }
.@{fa-css-prefix}-strikethrough:before { content: @fa-var-strikethrough; }
.@{fa-css-prefix}-stripe:before { content: @fa-var-stripe; }
.@{fa-css-prefix}-stripe-s:before { content: @fa-var-stripe-s; }
.@{fa-css-prefix}-stroopwafel:before { content: @fa-var-stroopwafel; }
.@{fa-css-prefix}-studiovinari:before { content: @fa-var-studiovinari; }
.@{fa-css-prefix}-stumbleupon:before { content: @fa-var-stumbleupon; }
.@{fa-css-prefix}-stumbleupon-circle:before { content: @fa-var-stumbleupon-circle; }
.@{fa-css-prefix}-subscript:before { content: @fa-var-subscript; }
.@{fa-css-prefix}-subway:before { content: @fa-var-subway; }
.@{fa-css-prefix}-suitcase:before { content: @fa-var-suitcase; }
.@{fa-css-prefix}-suitcase-rolling:before { content: @fa-var-suitcase-rolling; }
.@{fa-css-prefix}-sun:before { content: @fa-var-sun; }
.@{fa-css-prefix}-sun-cloud:before { content: @fa-var-sun-cloud; }
.@{fa-css-prefix}-sun-dust:before { content: @fa-var-sun-dust; }
.@{fa-css-prefix}-sun-haze:before { content: @fa-var-sun-haze; }
.@{fa-css-prefix}-sunrise:before { content: @fa-var-sunrise; }
.@{fa-css-prefix}-sunset:before { content: @fa-var-sunset; }
.@{fa-css-prefix}-superpowers:before { content: @fa-var-superpowers; }
.@{fa-css-prefix}-superscript:before { content: @fa-var-superscript; }
.@{fa-css-prefix}-supple:before { content: @fa-var-supple; }
.@{fa-css-prefix}-surprise:before { content: @fa-var-surprise; }
.@{fa-css-prefix}-suse:before { content: @fa-var-suse; }
.@{fa-css-prefix}-swatchbook:before { content: @fa-var-swatchbook; }
.@{fa-css-prefix}-swimmer:before { content: @fa-var-swimmer; }
.@{fa-css-prefix}-swimming-pool:before { content: @fa-var-swimming-pool; }
.@{fa-css-prefix}-sword:before { content: @fa-var-sword; }
.@{fa-css-prefix}-swords:before { content: @fa-var-swords; }
.@{fa-css-prefix}-symfony:before { content: @fa-var-symfony; }
.@{fa-css-prefix}-synagogue:before { content: @fa-var-synagogue; }
.@{fa-css-prefix}-sync:before { content: @fa-var-sync; }
.@{fa-css-prefix}-sync-alt:before { content: @fa-var-sync-alt; }
.@{fa-css-prefix}-syringe:before { content: @fa-var-syringe; }
.@{fa-css-prefix}-table:before { content: @fa-var-table; }
.@{fa-css-prefix}-table-tennis:before { content: @fa-var-table-tennis; }
.@{fa-css-prefix}-tablet:before { content: @fa-var-tablet; }
.@{fa-css-prefix}-tablet-alt:before { content: @fa-var-tablet-alt; }
.@{fa-css-prefix}-tablet-android:before { content: @fa-var-tablet-android; }
.@{fa-css-prefix}-tablet-android-alt:before { content: @fa-var-tablet-android-alt; }
.@{fa-css-prefix}-tablet-rugged:before { content: @fa-var-tablet-rugged; }
.@{fa-css-prefix}-tablets:before { content: @fa-var-tablets; }
.@{fa-css-prefix}-tachometer:before { content: @fa-var-tachometer; }
.@{fa-css-prefix}-tachometer-alt:before { content: @fa-var-tachometer-alt; }
.@{fa-css-prefix}-tachometer-alt-average:before { content: @fa-var-tachometer-alt-average; }
.@{fa-css-prefix}-tachometer-alt-fast:before { content: @fa-var-tachometer-alt-fast; }
.@{fa-css-prefix}-tachometer-alt-fastest:before { content: @fa-var-tachometer-alt-fastest; }
.@{fa-css-prefix}-tachometer-alt-slow:before { content: @fa-var-tachometer-alt-slow; }
.@{fa-css-prefix}-tachometer-alt-slowest:before { content: @fa-var-tachometer-alt-slowest; }
.@{fa-css-prefix}-tachometer-average:before { content: @fa-var-tachometer-average; }
.@{fa-css-prefix}-tachometer-fast:before { content: @fa-var-tachometer-fast; }
.@{fa-css-prefix}-tachometer-fastest:before { content: @fa-var-tachometer-fastest; }
.@{fa-css-prefix}-tachometer-slow:before { content: @fa-var-tachometer-slow; }
.@{fa-css-prefix}-tachometer-slowest:before { content: @fa-var-tachometer-slowest; }
.@{fa-css-prefix}-taco:before { content: @fa-var-taco; }
.@{fa-css-prefix}-tag:before { content: @fa-var-tag; }
.@{fa-css-prefix}-tags:before { content: @fa-var-tags; }
.@{fa-css-prefix}-tally:before { content: @fa-var-tally; }
.@{fa-css-prefix}-tanakh:before { content: @fa-var-tanakh; }
.@{fa-css-prefix}-tape:before { content: @fa-var-tape; }
.@{fa-css-prefix}-tasks:before { content: @fa-var-tasks; }
.@{fa-css-prefix}-tasks-alt:before { content: @fa-var-tasks-alt; }
.@{fa-css-prefix}-taxi:before { content: @fa-var-taxi; }
.@{fa-css-prefix}-teamspeak:before { content: @fa-var-teamspeak; }
.@{fa-css-prefix}-teeth:before { content: @fa-var-teeth; }
.@{fa-css-prefix}-teeth-open:before { content: @fa-var-teeth-open; }
.@{fa-css-prefix}-telegram:before { content: @fa-var-telegram; }
.@{fa-css-prefix}-telegram-plane:before { content: @fa-var-telegram-plane; }
.@{fa-css-prefix}-temperature-frigid:before { content: @fa-var-temperature-frigid; }
.@{fa-css-prefix}-temperature-high:before { content: @fa-var-temperature-high; }
.@{fa-css-prefix}-temperature-hot:before { content: @fa-var-temperature-hot; }
.@{fa-css-prefix}-temperature-low:before { content: @fa-var-temperature-low; }
.@{fa-css-prefix}-tencent-weibo:before { content: @fa-var-tencent-weibo; }
.@{fa-css-prefix}-tenge:before { content: @fa-var-tenge; }
.@{fa-css-prefix}-tennis-ball:before { content: @fa-var-tennis-ball; }
.@{fa-css-prefix}-terminal:before { content: @fa-var-terminal; }
.@{fa-css-prefix}-text-height:before { content: @fa-var-text-height; }
.@{fa-css-prefix}-text-width:before { content: @fa-var-text-width; }
.@{fa-css-prefix}-th:before { content: @fa-var-th; }
.@{fa-css-prefix}-th-large:before { content: @fa-var-th-large; }
.@{fa-css-prefix}-th-list:before { content: @fa-var-th-list; }
.@{fa-css-prefix}-the-red-yeti:before { content: @fa-var-the-red-yeti; }
.@{fa-css-prefix}-theater-masks:before { content: @fa-var-theater-masks; }
.@{fa-css-prefix}-themeco:before { content: @fa-var-themeco; }
.@{fa-css-prefix}-themeisle:before { content: @fa-var-themeisle; }
.@{fa-css-prefix}-thermometer:before { content: @fa-var-thermometer; }
.@{fa-css-prefix}-thermometer-empty:before { content: @fa-var-thermometer-empty; }
.@{fa-css-prefix}-thermometer-full:before { content: @fa-var-thermometer-full; }
.@{fa-css-prefix}-thermometer-half:before { content: @fa-var-thermometer-half; }
.@{fa-css-prefix}-thermometer-quarter:before { content: @fa-var-thermometer-quarter; }
.@{fa-css-prefix}-thermometer-three-quarters:before { content: @fa-var-thermometer-three-quarters; }
.@{fa-css-prefix}-theta:before { content: @fa-var-theta; }
.@{fa-css-prefix}-think-peaks:before { content: @fa-var-think-peaks; }
.@{fa-css-prefix}-thumbs-down:before { content: @fa-var-thumbs-down; }
.@{fa-css-prefix}-thumbs-up:before { content: @fa-var-thumbs-up; }
.@{fa-css-prefix}-thumbtack:before { content: @fa-var-thumbtack; }
.@{fa-css-prefix}-thunderstorm:before { content: @fa-var-thunderstorm; }
.@{fa-css-prefix}-thunderstorm-moon:before { content: @fa-var-thunderstorm-moon; }
.@{fa-css-prefix}-thunderstorm-sun:before { content: @fa-var-thunderstorm-sun; }
.@{fa-css-prefix}-ticket:before { content: @fa-var-ticket; }
.@{fa-css-prefix}-ticket-alt:before { content: @fa-var-ticket-alt; }
.@{fa-css-prefix}-tilde:before { content: @fa-var-tilde; }
.@{fa-css-prefix}-times:before { content: @fa-var-times; }
.@{fa-css-prefix}-times-circle:before { content: @fa-var-times-circle; }
.@{fa-css-prefix}-times-hexagon:before { content: @fa-var-times-hexagon; }
.@{fa-css-prefix}-times-octagon:before { content: @fa-var-times-octagon; }
.@{fa-css-prefix}-times-square:before { content: @fa-var-times-square; }
.@{fa-css-prefix}-tint:before { content: @fa-var-tint; }
.@{fa-css-prefix}-tint-slash:before { content: @fa-var-tint-slash; }
.@{fa-css-prefix}-tire:before { content: @fa-var-tire; }
.@{fa-css-prefix}-tire-flat:before { content: @fa-var-tire-flat; }
.@{fa-css-prefix}-tire-pressure-warning:before { content: @fa-var-tire-pressure-warning; }
.@{fa-css-prefix}-tire-rugged:before { content: @fa-var-tire-rugged; }
.@{fa-css-prefix}-tired:before { content: @fa-var-tired; }
.@{fa-css-prefix}-toggle-off:before { content: @fa-var-toggle-off; }
.@{fa-css-prefix}-toggle-on:before { content: @fa-var-toggle-on; }
.@{fa-css-prefix}-toilet:before { content: @fa-var-toilet; }
.@{fa-css-prefix}-toilet-paper:before { content: @fa-var-toilet-paper; }
.@{fa-css-prefix}-toilet-paper-alt:before { content: @fa-var-toilet-paper-alt; }
.@{fa-css-prefix}-tombstone:before { content: @fa-var-tombstone; }
.@{fa-css-prefix}-tombstone-alt:before { content: @fa-var-tombstone-alt; }
.@{fa-css-prefix}-toolbox:before { content: @fa-var-toolbox; }
.@{fa-css-prefix}-tools:before { content: @fa-var-tools; }
.@{fa-css-prefix}-tooth:before { content: @fa-var-tooth; }
.@{fa-css-prefix}-toothbrush:before { content: @fa-var-toothbrush; }
.@{fa-css-prefix}-torah:before { content: @fa-var-torah; }
.@{fa-css-prefix}-torii-gate:before { content: @fa-var-torii-gate; }
.@{fa-css-prefix}-tornado:before { content: @fa-var-tornado; }
.@{fa-css-prefix}-tractor:before { content: @fa-var-tractor; }
.@{fa-css-prefix}-trade-federation:before { content: @fa-var-trade-federation; }
.@{fa-css-prefix}-trademark:before { content: @fa-var-trademark; }
.@{fa-css-prefix}-traffic-cone:before { content: @fa-var-traffic-cone; }
.@{fa-css-prefix}-traffic-light:before { content: @fa-var-traffic-light; }
.@{fa-css-prefix}-traffic-light-go:before { content: @fa-var-traffic-light-go; }
.@{fa-css-prefix}-traffic-light-slow:before { content: @fa-var-traffic-light-slow; }
.@{fa-css-prefix}-traffic-light-stop:before { content: @fa-var-traffic-light-stop; }
.@{fa-css-prefix}-train:before { content: @fa-var-train; }
.@{fa-css-prefix}-tram:before { content: @fa-var-tram; }
.@{fa-css-prefix}-transgender:before { content: @fa-var-transgender; }
.@{fa-css-prefix}-transgender-alt:before { content: @fa-var-transgender-alt; }
.@{fa-css-prefix}-trash:before { content: @fa-var-trash; }
.@{fa-css-prefix}-trash-alt:before { content: @fa-var-trash-alt; }
.@{fa-css-prefix}-trash-restore:before { content: @fa-var-trash-restore; }
.@{fa-css-prefix}-trash-restore-alt:before { content: @fa-var-trash-restore-alt; }
.@{fa-css-prefix}-treasure-chest:before { content: @fa-var-treasure-chest; }
.@{fa-css-prefix}-tree:before { content: @fa-var-tree; }
.@{fa-css-prefix}-tree-alt:before { content: @fa-var-tree-alt; }
.@{fa-css-prefix}-tree-christmas:before { content: @fa-var-tree-christmas; }
.@{fa-css-prefix}-tree-decorated:before { content: @fa-var-tree-decorated; }
.@{fa-css-prefix}-tree-large:before { content: @fa-var-tree-large; }
.@{fa-css-prefix}-tree-palm:before { content: @fa-var-tree-palm; }
.@{fa-css-prefix}-trees:before { content: @fa-var-trees; }
.@{fa-css-prefix}-trello:before { content: @fa-var-trello; }
.@{fa-css-prefix}-triangle:before { content: @fa-var-triangle; }
.@{fa-css-prefix}-tripadvisor:before { content: @fa-var-tripadvisor; }
.@{fa-css-prefix}-trophy:before { content: @fa-var-trophy; }
.@{fa-css-prefix}-trophy-alt:before { content: @fa-var-trophy-alt; }
.@{fa-css-prefix}-truck:before { content: @fa-var-truck; }
.@{fa-css-prefix}-truck-container:before { content: @fa-var-truck-container; }
.@{fa-css-prefix}-truck-couch:before { content: @fa-var-truck-couch; }
.@{fa-css-prefix}-truck-loading:before { content: @fa-var-truck-loading; }
.@{fa-css-prefix}-truck-monster:before { content: @fa-var-truck-monster; }
.@{fa-css-prefix}-truck-moving:before { content: @fa-var-truck-moving; }
.@{fa-css-prefix}-truck-pickup:before { content: @fa-var-truck-pickup; }
.@{fa-css-prefix}-truck-plow:before { content: @fa-var-truck-plow; }
.@{fa-css-prefix}-truck-ramp:before { content: @fa-var-truck-ramp; }
.@{fa-css-prefix}-tshirt:before { content: @fa-var-tshirt; }
.@{fa-css-prefix}-tty:before { content: @fa-var-tty; }
.@{fa-css-prefix}-tumblr:before { content: @fa-var-tumblr; }
.@{fa-css-prefix}-tumblr-square:before { content: @fa-var-tumblr-square; }
.@{fa-css-prefix}-turkey:before { content: @fa-var-turkey; }
.@{fa-css-prefix}-turtle:before { content: @fa-var-turtle; }
.@{fa-css-prefix}-tv:before { content: @fa-var-tv; }
.@{fa-css-prefix}-tv-retro:before { content: @fa-var-tv-retro; }
.@{fa-css-prefix}-twitch:before { content: @fa-var-twitch; }
.@{fa-css-prefix}-twitter:before { content: @fa-var-twitter; }
.@{fa-css-prefix}-twitter-square:before { content: @fa-var-twitter-square; }
.@{fa-css-prefix}-typo3:before { content: @fa-var-typo3; }
.@{fa-css-prefix}-uber:before { content: @fa-var-uber; }
.@{fa-css-prefix}-ubuntu:before { content: @fa-var-ubuntu; }
.@{fa-css-prefix}-uikit:before { content: @fa-var-uikit; }
.@{fa-css-prefix}-umbrella:before { content: @fa-var-umbrella; }
.@{fa-css-prefix}-umbrella-beach:before { content: @fa-var-umbrella-beach; }
.@{fa-css-prefix}-underline:before { content: @fa-var-underline; }
.@{fa-css-prefix}-undo:before { content: @fa-var-undo; }
.@{fa-css-prefix}-undo-alt:before { content: @fa-var-undo-alt; }
.@{fa-css-prefix}-unicorn:before { content: @fa-var-unicorn; }
.@{fa-css-prefix}-union:before { content: @fa-var-union; }
.@{fa-css-prefix}-uniregistry:before { content: @fa-var-uniregistry; }
.@{fa-css-prefix}-universal-access:before { content: @fa-var-universal-access; }
.@{fa-css-prefix}-university:before { content: @fa-var-university; }
.@{fa-css-prefix}-unlink:before { content: @fa-var-unlink; }
.@{fa-css-prefix}-unlock:before { content: @fa-var-unlock; }
.@{fa-css-prefix}-unlock-alt:before { content: @fa-var-unlock-alt; }
.@{fa-css-prefix}-untappd:before { content: @fa-var-untappd; }
.@{fa-css-prefix}-upload:before { content: @fa-var-upload; }
.@{fa-css-prefix}-ups:before { content: @fa-var-ups; }
.@{fa-css-prefix}-usb:before { content: @fa-var-usb; }
.@{fa-css-prefix}-usd-circle:before { content: @fa-var-usd-circle; }
.@{fa-css-prefix}-usd-square:before { content: @fa-var-usd-square; }
.@{fa-css-prefix}-user:before { content: @fa-var-user; }
.@{fa-css-prefix}-user-alt:before { content: @fa-var-user-alt; }
.@{fa-css-prefix}-user-alt-slash:before { content: @fa-var-user-alt-slash; }
.@{fa-css-prefix}-user-astronaut:before { content: @fa-var-user-astronaut; }
.@{fa-css-prefix}-user-chart:before { content: @fa-var-user-chart; }
.@{fa-css-prefix}-user-check:before { content: @fa-var-user-check; }
.@{fa-css-prefix}-user-circle:before { content: @fa-var-user-circle; }
.@{fa-css-prefix}-user-clock:before { content: @fa-var-user-clock; }
.@{fa-css-prefix}-user-cog:before { content: @fa-var-user-cog; }
.@{fa-css-prefix}-user-crown:before { content: @fa-var-user-crown; }
.@{fa-css-prefix}-user-edit:before { content: @fa-var-user-edit; }
.@{fa-css-prefix}-user-friends:before { content: @fa-var-user-friends; }
.@{fa-css-prefix}-user-graduate:before { content: @fa-var-user-graduate; }
.@{fa-css-prefix}-user-hard-hat:before { content: @fa-var-user-hard-hat; }
.@{fa-css-prefix}-user-headset:before { content: @fa-var-user-headset; }
.@{fa-css-prefix}-user-injured:before { content: @fa-var-user-injured; }
.@{fa-css-prefix}-user-lock:before { content: @fa-var-user-lock; }
.@{fa-css-prefix}-user-md:before { content: @fa-var-user-md; }
.@{fa-css-prefix}-user-md-chat:before { content: @fa-var-user-md-chat; }
.@{fa-css-prefix}-user-minus:before { content: @fa-var-user-minus; }
.@{fa-css-prefix}-user-ninja:before { content: @fa-var-user-ninja; }
.@{fa-css-prefix}-user-nurse:before { content: @fa-var-user-nurse; }
.@{fa-css-prefix}-user-plus:before { content: @fa-var-user-plus; }
.@{fa-css-prefix}-user-secret:before { content: @fa-var-user-secret; }
.@{fa-css-prefix}-user-shield:before { content: @fa-var-user-shield; }
.@{fa-css-prefix}-user-slash:before { content: @fa-var-user-slash; }
.@{fa-css-prefix}-user-tag:before { content: @fa-var-user-tag; }
.@{fa-css-prefix}-user-tie:before { content: @fa-var-user-tie; }
.@{fa-css-prefix}-user-times:before { content: @fa-var-user-times; }
.@{fa-css-prefix}-users:before { content: @fa-var-users; }
.@{fa-css-prefix}-users-class:before { content: @fa-var-users-class; }
.@{fa-css-prefix}-users-cog:before { content: @fa-var-users-cog; }
.@{fa-css-prefix}-users-crown:before { content: @fa-var-users-crown; }
.@{fa-css-prefix}-users-medical:before { content: @fa-var-users-medical; }
.@{fa-css-prefix}-usps:before { content: @fa-var-usps; }
.@{fa-css-prefix}-ussunnah:before { content: @fa-var-ussunnah; }
.@{fa-css-prefix}-utensil-fork:before { content: @fa-var-utensil-fork; }
.@{fa-css-prefix}-utensil-knife:before { content: @fa-var-utensil-knife; }
.@{fa-css-prefix}-utensil-spoon:before { content: @fa-var-utensil-spoon; }
.@{fa-css-prefix}-utensils:before { content: @fa-var-utensils; }
.@{fa-css-prefix}-utensils-alt:before { content: @fa-var-utensils-alt; }
.@{fa-css-prefix}-vaadin:before { content: @fa-var-vaadin; }
.@{fa-css-prefix}-value-absolute:before { content: @fa-var-value-absolute; }
.@{fa-css-prefix}-vector-square:before { content: @fa-var-vector-square; }
.@{fa-css-prefix}-venus:before { content: @fa-var-venus; }
.@{fa-css-prefix}-venus-double:before { content: @fa-var-venus-double; }
.@{fa-css-prefix}-venus-mars:before { content: @fa-var-venus-mars; }
.@{fa-css-prefix}-viacoin:before { content: @fa-var-viacoin; }
.@{fa-css-prefix}-viadeo:before { content: @fa-var-viadeo; }
.@{fa-css-prefix}-viadeo-square:before { content: @fa-var-viadeo-square; }
.@{fa-css-prefix}-vial:before { content: @fa-var-vial; }
.@{fa-css-prefix}-vials:before { content: @fa-var-vials; }
.@{fa-css-prefix}-viber:before { content: @fa-var-viber; }
.@{fa-css-prefix}-video:before { content: @fa-var-video; }
.@{fa-css-prefix}-video-plus:before { content: @fa-var-video-plus; }
.@{fa-css-prefix}-video-slash:before { content: @fa-var-video-slash; }
.@{fa-css-prefix}-vihara:before { content: @fa-var-vihara; }
.@{fa-css-prefix}-vimeo:before { content: @fa-var-vimeo; }
.@{fa-css-prefix}-vimeo-square:before { content: @fa-var-vimeo-square; }
.@{fa-css-prefix}-vimeo-v:before { content: @fa-var-vimeo-v; }
.@{fa-css-prefix}-vine:before { content: @fa-var-vine; }
.@{fa-css-prefix}-vk:before { content: @fa-var-vk; }
.@{fa-css-prefix}-vnv:before { content: @fa-var-vnv; }
.@{fa-css-prefix}-volcano:before { content: @fa-var-volcano; }
.@{fa-css-prefix}-volleyball-ball:before { content: @fa-var-volleyball-ball; }
.@{fa-css-prefix}-volume:before { content: @fa-var-volume; }
.@{fa-css-prefix}-volume-down:before { content: @fa-var-volume-down; }
.@{fa-css-prefix}-volume-mute:before { content: @fa-var-volume-mute; }
.@{fa-css-prefix}-volume-off:before { content: @fa-var-volume-off; }
.@{fa-css-prefix}-volume-slash:before { content: @fa-var-volume-slash; }
.@{fa-css-prefix}-volume-up:before { content: @fa-var-volume-up; }
.@{fa-css-prefix}-vote-nay:before { content: @fa-var-vote-nay; }
.@{fa-css-prefix}-vote-yea:before { content: @fa-var-vote-yea; }
.@{fa-css-prefix}-vr-cardboard:before { content: @fa-var-vr-cardboard; }
.@{fa-css-prefix}-vuejs:before { content: @fa-var-vuejs; }
.@{fa-css-prefix}-walker:before { content: @fa-var-walker; }
.@{fa-css-prefix}-walking:before { content: @fa-var-walking; }
.@{fa-css-prefix}-wallet:before { content: @fa-var-wallet; }
.@{fa-css-prefix}-wand:before { content: @fa-var-wand; }
.@{fa-css-prefix}-wand-magic:before { content: @fa-var-wand-magic; }
.@{fa-css-prefix}-warehouse:before { content: @fa-var-warehouse; }
.@{fa-css-prefix}-warehouse-alt:before { content: @fa-var-warehouse-alt; }
.@{fa-css-prefix}-watch:before { content: @fa-var-watch; }
.@{fa-css-prefix}-watch-fitness:before { content: @fa-var-watch-fitness; }
.@{fa-css-prefix}-water:before { content: @fa-var-water; }
.@{fa-css-prefix}-water-lower:before { content: @fa-var-water-lower; }
.@{fa-css-prefix}-water-rise:before { content: @fa-var-water-rise; }
.@{fa-css-prefix}-wave-square:before { content: @fa-var-wave-square; }
.@{fa-css-prefix}-waze:before { content: @fa-var-waze; }
.@{fa-css-prefix}-webcam:before { content: @fa-var-webcam; }
.@{fa-css-prefix}-webcam-slash:before { content: @fa-var-webcam-slash; }
.@{fa-css-prefix}-weebly:before { content: @fa-var-weebly; }
.@{fa-css-prefix}-weibo:before { content: @fa-var-weibo; }
.@{fa-css-prefix}-weight:before { content: @fa-var-weight; }
.@{fa-css-prefix}-weight-hanging:before { content: @fa-var-weight-hanging; }
.@{fa-css-prefix}-weixin:before { content: @fa-var-weixin; }
.@{fa-css-prefix}-whale:before { content: @fa-var-whale; }
.@{fa-css-prefix}-whatsapp:before { content: @fa-var-whatsapp; }
.@{fa-css-prefix}-whatsapp-square:before { content: @fa-var-whatsapp-square; }
.@{fa-css-prefix}-wheat:before { content: @fa-var-wheat; }
.@{fa-css-prefix}-wheelchair:before { content: @fa-var-wheelchair; }
.@{fa-css-prefix}-whistle:before { content: @fa-var-whistle; }
.@{fa-css-prefix}-whmcs:before { content: @fa-var-whmcs; }
.@{fa-css-prefix}-wifi:before { content: @fa-var-wifi; }
.@{fa-css-prefix}-wifi-1:before { content: @fa-var-wifi-1; }
.@{fa-css-prefix}-wifi-2:before { content: @fa-var-wifi-2; }
.@{fa-css-prefix}-wifi-slash:before { content: @fa-var-wifi-slash; }
.@{fa-css-prefix}-wikipedia-w:before { content: @fa-var-wikipedia-w; }
.@{fa-css-prefix}-wind:before { content: @fa-var-wind; }
.@{fa-css-prefix}-wind-warning:before { content: @fa-var-wind-warning; }
.@{fa-css-prefix}-window:before { content: @fa-var-window; }
.@{fa-css-prefix}-window-alt:before { content: @fa-var-window-alt; }
.@{fa-css-prefix}-window-close:before { content: @fa-var-window-close; }
.@{fa-css-prefix}-window-maximize:before { content: @fa-var-window-maximize; }
.@{fa-css-prefix}-window-minimize:before { content: @fa-var-window-minimize; }
.@{fa-css-prefix}-window-restore:before { content: @fa-var-window-restore; }
.@{fa-css-prefix}-windows:before { content: @fa-var-windows; }
.@{fa-css-prefix}-windsock:before { content: @fa-var-windsock; }
.@{fa-css-prefix}-wine-bottle:before { content: @fa-var-wine-bottle; }
.@{fa-css-prefix}-wine-glass:before { content: @fa-var-wine-glass; }
.@{fa-css-prefix}-wine-glass-alt:before { content: @fa-var-wine-glass-alt; }
.@{fa-css-prefix}-wix:before { content: @fa-var-wix; }
.@{fa-css-prefix}-wizards-of-the-coast:before { content: @fa-var-wizards-of-the-coast; }
.@{fa-css-prefix}-wolf-pack-battalion:before { content: @fa-var-wolf-pack-battalion; }
.@{fa-css-prefix}-won-sign:before { content: @fa-var-won-sign; }
.@{fa-css-prefix}-wordpress:before { content: @fa-var-wordpress; }
.@{fa-css-prefix}-wordpress-simple:before { content: @fa-var-wordpress-simple; }
.@{fa-css-prefix}-wpbeginner:before { content: @fa-var-wpbeginner; }
.@{fa-css-prefix}-wpexplorer:before { content: @fa-var-wpexplorer; }
.@{fa-css-prefix}-wpforms:before { content: @fa-var-wpforms; }
.@{fa-css-prefix}-wpressr:before { content: @fa-var-wpressr; }
.@{fa-css-prefix}-wreath:before { content: @fa-var-wreath; }
.@{fa-css-prefix}-wrench:before { content: @fa-var-wrench; }
.@{fa-css-prefix}-x-ray:before { content: @fa-var-x-ray; }
.@{fa-css-prefix}-xbox:before { content: @fa-var-xbox; }
.@{fa-css-prefix}-xing:before { content: @fa-var-xing; }
.@{fa-css-prefix}-xing-square:before { content: @fa-var-xing-square; }
.@{fa-css-prefix}-y-combinator:before { content: @fa-var-y-combinator; }
.@{fa-css-prefix}-yahoo:before { content: @fa-var-yahoo; }
.@{fa-css-prefix}-yammer:before { content: @fa-var-yammer; }
.@{fa-css-prefix}-yandex:before { content: @fa-var-yandex; }
.@{fa-css-prefix}-yandex-international:before { content: @fa-var-yandex-international; }
.@{fa-css-prefix}-yarn:before { content: @fa-var-yarn; }
.@{fa-css-prefix}-yelp:before { content: @fa-var-yelp; }
.@{fa-css-prefix}-yen-sign:before { content: @fa-var-yen-sign; }
.@{fa-css-prefix}-yin-yang:before { content: @fa-var-yin-yang; }
.@{fa-css-prefix}-yoast:before { content: @fa-var-yoast; }
.@{fa-css-prefix}-youtube:before { content: @fa-var-youtube; }
.@{fa-css-prefix}-youtube-square:before { content: @fa-var-youtube-square; }
.@{fa-css-prefix}-zhihu:before { content: @fa-var-zhihu; }


// Screen Readers
// -------------------------

.sr-only { .sr-only(); }
.sr-only-focusable { .sr-only-focusable(); }';
	return $__finalCompiled;
});