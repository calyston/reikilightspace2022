<?php
/**
 * Template Name: Reiki Page
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
      <section class="page-container reiki-page">

      <section class="">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </section>
      
      <!-- Pricing -->
      <section class="reiki-pricing">
        <h2>Pricing</h2>
        <p>Payments are by bank transfer; no cash will be exchanged.</p>
        <div class="pricing-table">
          <div class="pricing-service">
            <h4>Reiki (Usui Tradition)</h4>
            <h4>£60 (60 mins) / £30 (30 mins)</h4>
          </div>
          <div class="pricing-service">
            <h4>Angel Reiki</h4>
            <h4>£65 (60 mins) / £32.50 (30 mins)</h4>
          </div>
          <div class="pricing-service">
            <h4>Reiki with Crystals</h4>
            <h4>£65 (60 mins) / £32.50 (30 mins)</h4>
          </div>
          <div class="pricing-service">
            <h4>Chakra Balancing</h4>
            <h4>£60 (60 mins) / £30 (30 mins)</h4>
          </div>
        </div>
        <a href="https://reikilightspace.co.uk/contact/"><button>Book an Appointment</button></a>
      </section>
    </section>
		<?php endwhile; ?>

		<?php else : ?>
				
		<article class="post error">
			<h2 class="404">Nothing posted yet</h2>
		</article>

		<?php endif; ?>
  </main>
<?php get_footer(); ?>