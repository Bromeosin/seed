<?php
/*
 * Template Name: Index-Page-PPC
 * Description: Seed's general use index page.
 */

 get_header(); ?>

  <!-- Navigation Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php if( get_field('masthead_image') ): ?>
    <div class="row dark masthead" style="background: linear-gradient(rgba(43, 45, 66, 0.3), rgba(43, 45, 66, 1)), url(<?php the_field('masthead_image'); ?>); background-size: cover; background-size: cover;">
  <?php endif; ?>
      <div class="container narrower center">
        <div class="twelve columns">
          <h1><?php the_title(); ?></h1>
          <?php if( get_field('subheading') ): ?>
              <h4><?php the_field('subheading'); ?></h4>
          <?php endif; ?>
         </div>
      </div>
    </div>

  <!-- Half column layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row quote light grey triangles">
    <div class="container" onload="isotope();">
      <div class="index-masonry">
        <div class="index-sizer"></div>
      <?php
          // The Query
            query_posts( array ( 'category_name' => 'PPC-Service, PPC-FAQs' , 'posts_per_page' => 20, 'orderby'=>'latest' ) );
            // The Loop
            while ( have_posts() ) : the_post(); ?>
                  <div class="index-element">
                    <a href="<?php the_permalink() ?>">
                      <img class="index-image" src="<?php the_field('masthead_image'); ?>">
                    <div class="index-caption">
                      <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
                      <p class="small"><?php the_author(); ?> | <?php the_time('d F Y'); ?></p>
                    </div>
                    </a>
                  </div>
            <?php endwhile;
            wp_reset_query();
      ?>
    </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!--isotope here...-->
  <script src="/wp-content/themes/seed-theme-18/js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <!--Custom Js file here ... -->
  <script type="text/javascript">
  $('.index-masonry').imagesLoaded( function() {
    $('.index-masonry').isotope({
    // options
    itemSelector: '.index-element',
    masonry: {
      columnWidth: '.index-sizer',
      gutter: 30,
      horizontalOrder: true
    }
    });
  });
  </script>


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
