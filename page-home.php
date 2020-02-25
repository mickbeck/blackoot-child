<?php

get_header();
?>
<div class="container" id="main-content">
	<div id="page-container">
        <main id="work">
            <h1 class="lg-heading">
                <i class="fas fa-chevron-left"></i> Theme Templates <i class="fas fa-chevron-right"></i>
            </h1>
            <div class="post-wrapper">
                <div class="item">
                    <a href="https://mickbeck.github.io/ontel_" target="_blank">
                        <img src="<?php echo get_theme_file_uri();?>/img/ontel-1.jpg" alt="theme-1">
                    </a>
                </div>
                <div class="item">
                    <a href="https://mickbeck.github.io/ontel_" target="_blank">
                        <img src="<?php echo get_theme_file_uri();?>/img/victory-1.jpg" alt="theme-1">
                    </a>
                </div>
                <div class="item">
                    <a href="https://mickbeck.github.io/ontel_" target="_blank">
                        <img src="<?php echo get_theme_file_uri();?>/img/moonlight-1.jpg" alt="theme-1">
                    </a>
                </div>
            </div>
        </main>
        <main id="about">
            <div class="card-wrapper">
                <div class="img-wrapper">
                    <img src="<?php echo get_theme_file_uri();?>/img/profile-1.jpg" alt="">
                </div>
                <div class="txt-wrapper">
                    <h1 class="lg-heading">
                        <i class="fas fa-chevron-left"></i> About Me <i class="fas fa-chevron-right"></i> 
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis facere commodi obcaecati quia dignissimos sapiente consequuntur dolores, eos minima necessitatibus sequi labore laudantium nihil corrupti iure optio adipisci quis tenetur beatae! Quidem sequi harum impedit ut omnis. Voluptate, adipisci neque.</p>
                </div>
            </div>
        </main>
	</div>
</div>
<?php
get_footer();
?>