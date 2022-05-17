<?php 
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
  <section class="page-container contact-page">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <div class="contact-p"><?php the_content(); ?></div>
    <section class="contact-content">
      <div class="contact-address">
        <h4>Reiki Light Space</h4>
        <p>Catford, London, United Kingdom</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19895.263580574756!2d-0.03188681872088049!3d51.44148439589588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760217687bbabf%3A0xaa75a3ab26a3bb67!2sCatford%2C%20London!5e0!3m2!1sen!2suk!4v1624380674017!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div> 
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