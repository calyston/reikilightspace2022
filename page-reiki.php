<?php
/**
 * Template Name: Reiki Page
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
      <section class="page-container reiki-page">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
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