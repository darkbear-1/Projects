<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MyTheme
 */

get_header();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js"></script>
<style>
    #four{
        display: block;
        width: 984px;
        margin: 0 auto;
        height: 690px;
        background-color: #f7f7f7;
    }
</style>
	<div class="content-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    	<section class="not-found">
    		<div class="container">
                <canvas id="four"></canvas>
    		</div>
    	</section>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>

<?php
get_footer();
