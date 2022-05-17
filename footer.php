<?php ?>

</main>

<footer>
	<section class="footer-container">
	<a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/full-logo-white.png" alt="logo"/></a>
    <section class="footer-text">
      <div class="footer-links">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
      </div>
    </section>
    <p><a href="https://reikilightspace.co.uk/privacy-policy">Privacy Policy</a> | <a href="https://reikilightspace.co.uk/terms-conditions/">Terms and Conditions</a></p>
    <p>&copy; 2022 Reikilight Space | All Rights Reserved</p>
		<p>Designed and developed by <a href="https://christinelyston.co.uk/" target="blank">Christine Lyston</a></p>	
	</section>

  </footer>

<?php wp_footer(); ?>
  <script src="https://kit.fontawesome.com/74fdfd1d95.js" crossorigin="anonymous"></script>
</body>
</html>