<?php
/**
 *
 * Blackoot Lite WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2014-2019 Iceable Media - Mathieu Sarrasin
 *
 * Page Template
 *
 */

get_header();


?>

<div class="container" id="main-content">
	<div id="page-container">
    <main id="contact">
        <h1 class="lg-heading">
            <i class="fas fa-chevron-left"></i> Contact <i class="fas fa-chevron-right"></i> 
        </h1>
        <form name="contact" method="POST" data-netlify-recaptcha="true" data-netlify="true">
            <div id="input-boxes">
                <div id="small-boxes">
                    <input id="name-input" type="text" name="name" placeholder="Name..."/>
                    <input id="email-input" type="email" name="email" placeholder="Email..."/>
                </div>
                <textarea id="text-input" name="message" placeholder="Message..."></textarea>
            </div>
            <div id="button-box">
              <button type="submit">Submit</button>
            </div>
        </form>
    </main>
	</div>
</div>
<?php

get_footer();
