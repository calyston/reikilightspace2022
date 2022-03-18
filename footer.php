<?php ?>

</main>

<footer>
	<section class="footer-container">
	<a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/full-logo-white.png" alt="logo"/></a>
    <section class="footer-text">
      <div class="link-tree">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );?>
      </div>
      <?php dynamic_sidebar('contact-info'); ?>
      <div class="sns">
        <a href="">
          <p><i class="fab fa-facebook-f fa-2x"></i></p>
        </a>
        <a href="">
          <p><i class="fab fa-instagram fa-2x"></i></p>
        </a>
      </div>
    </section>
    <p>Privacy Policy | Terms and Conditions</p>
    <p>&copy; 2022 Reiki Light Space | All Rights Reserved</p>
		<p>Designed and developed by <a href="https://christinelyston.co.uk/" target="blank">Christine Lyston</a></p>	
	</section>

  </footer>

<?php wp_footer(); ?>
  <script src="https://kit.fontawesome.com/74fdfd1d95.js" crossorigin="anonymous"></script>
</body>
</html>