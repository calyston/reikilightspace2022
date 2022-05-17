<?php
/**
 * Template Name: Pricing Page
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
      <section class="page-container pricing-page">
        <h2><?php the_title(); ?></h2>
        <section class="reiki-pricing">
          <?php the_content(); ?>
          <div class="pricing-table">
            <div class="pricing-service">
              <h4>Reiki (Usui Tradition)</h4>
              <h4>£55 (1 hour) / £30 (30 mins)</h4>
            </div>
            <div class="pricing-service">
              <h4>Angel Reiki</h4>
              <h4>£65 (1 hour) / £40 (30 mins)</h4>
            </div>
            <div class="pricing-service">
              <h4>Reiki with Crystals</h4>
              <h4>£40 (30 mins)</h4>
            </div>
            <div class="pricing-service">
              <h4>Chakra Clearing/Balancing</h4>
              <h4>£40 (30 mins)</h4>
            </div>
            <div class="pricing-service">
              <h4>Hypnotherapy</h4>
              <h4>£90 (1 hour)</h4>
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