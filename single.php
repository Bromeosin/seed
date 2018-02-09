<?php
/*
 * Template Name: Single
 * Description: Seed's single blog page.
 */

 get_header(); ?>

<?php $image = get_field('hero_image'); ?>

  <!-- Blog Masthead Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php if( get_field('masthead_image') ): ?>
  <div class="row dark masthead" style="background: linear-gradient(rgba(43, 45, 66, 0.3), rgba(43, 45, 66, 1)), url(<?php the_field('masthead_image'); ?>); background-size: cover; background-size: cover;">
<?php endif; ?>
    <div class="container narrower center">
      <div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <?php if( get_field('subheading') ): ?>
            <h5><?php the_field('subheading'); ?></h5>
        <?php endif; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <p class="small"><?php the_author(); ?> | <?php the_time('d F Y'); ?></p>
              <?php endwhile; else: ?>
        <?php endif; ?>      </div>
    </div>
  </div>

  <!-- Landing Page Copy Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row light content-space">
    <div class="container narrower">
      <div class="twelve columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Blog Authorship Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container narrow">
    <div class="line-break"></div>
  </div>

  <!-- Blog Authorship Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row light">
    <div class="container author">
      <div class="one-third column">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 175 ); ?>
      </div>
      <div class="two-thirds column">
        <h5>Written by <?php the_author_link(); ?></h5>
        <p><?php echo (get_the_author_meta('description')); ?></p>
      </div>
    </div>
  </div>
  <?php endwhile; else: ?>
  <?php endif; ?>

  <!-- Blog Related Posts Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="row grey featured-blog triangles">
    <div class="container">
      <div class="twelve columns title">
        <h3>Latest articles from our team</h3>
      </div>
    </div>

    <div class="container space featured-posts">

  <?php

      // The Query
        query_posts( array ( 'category_name' => 'Article', 'posts_per_page' => 5, 'orderby'=>'latest' ) );

        $i = 1;
        // The Loop
        while ( have_posts() ) : the_post();

          if ($i <= 3) { ?>

            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

            <div class="six space columns blog-block featured" style="background: linear-gradient(rgba(43, 45, 66, 0.7), rgba(43, 45, 66, 0.7)), url(<?php the_field('masthead_image'); ?>); background-size: cover; background-size: cover;">
              <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Read More</a>
              <h6><?php the_title(); ?></h6>
            </div>

        <?php } else { ?>

          <div class="three columns blog-block" style="background: linear-gradient(rgba(43, 45, 66, 0.7), rgba(43, 45, 66, 0.7)), url(<?php the_field('masthead_image'); ?>); background-size: cover; background-size: cover;">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Read More</a>
            <h6><?php the_title(); ?></h6>
          </div>

        <?php }

        $i++;

        endwhile;

        wp_reset_query();

  ?>

  </div>
</div>

<!-- Contact form layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<form name="contactform" method="post" action="/contact.php">
  <div class="row light">
    <div class="container narrow">
      <div class="twelve columns center space">
        <h2>So, how can we help you?</h2>
        <p class="narrower">Want to increase your visibility in organic search? Improve ROI from your PPC campaigns? Captivate customers with compelling content? Transform your website's UX & design?</p>
      </div>
      <div class="one-half column" id="respond">

        <label for="exampleEmailInput">Your Name</label>

        <input class="u-full-width form-box" type="text" placeholder="Elon Musk" id="exampleEmailInput" name="yourname">

        <label for="exampleEmailInput">Your Email</label>

        <input class="u-full-width form-box" type="email" placeholder="elon@tesla.com" id="exampleEmailInput" name="email">
      </div>
      <div class="one-half column">

        <label for="exampleRecipientInput">How can we help you?</label>

        <select class="u-full-width form-box" id="exampleRecipientInput" type="text" name="service">
          <option value="I have an SEO problem!">I have an SEO problem!</option>
          <option value="I'm looking for better PPC results!">I'm looking for better PPC results!</option>
          <option value="I need a full digital marketing solution!">I need a full digital marketing solution!</option>
        </select>

        <label for="exampleEmailInput">Your Website</label>

        <input class="u-full-width form-box" type="text" placeholder="www.tesla.com" id="exampleEmailInput" name="subject">

      </div>

      <div style="margin-bottom: 2rem;" class="twelve columns">

        <label for="exampleMessage">Your message to us</label>

        <textarea class="u-full-width form-box" placeholder="Hi Team Seed …" id="exampleMessage" name="comments"></textarea>

      </div>

      <div class="twelve columns center">

        <input style="margin-bottom: 2rem;" class="button-primary center" type="submit" value="Send Message">

        <p class="small">Or just <i class="far fa-envelope-open"></i> us on</p>

        <h4 style="margin-top: -3rem;"><a class="link-cta">hello@seedpublicity.co.uk</a></h4>

      </div>
    </div>
  </div>
</form>

<?php get_footer() ; ?>
