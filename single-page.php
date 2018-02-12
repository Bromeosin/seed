<?php
/*
 * Template Name: Single-page
 * Description: Seed's single landing page with no blog attributes.
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
      </div>
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

      <!-- Client List
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <div class="row light grey client-grid short-stack">
        <div class="container gridlet">
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/sworkit.png" width="100%" height="auto"/>
          </div>
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/act.png" width="100%" height="auto"/>
          </div>
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/wob.png" width="100%" height="auto"/>
          </div>
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/eddie-stobart.png" width="100%" height="auto"/>
          </div>
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/holmes.png" width="100%" height="auto"/>
          </div>
          <div class="two columns">
              <img src="/wp-content/themes/seed-theme-18/images/said-business.png" width="100%" height="auto"/>
          </div>
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
