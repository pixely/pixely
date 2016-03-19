<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pixely4
 */
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/navigation.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/jquery.pixely.js"></script>
    
		<?php wp_footer(); ?>

    <!-- Google Tag Manager - No JS Fallback -->    
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W3FKB7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager -->

  </body>
</html>