<footer>

  <div class="footer-main" >
    <div class="footer-contacts-wrapper" >
      <?php

      $query = new WP_Query( array(
          'post_type'       => 'torque_staff',
          'posts_per_page'  => -1
      ));

      if ( $query->have_posts() ) {

        ?>

        <h2>CONTACT</h2>

        <div class="footer-contacts">

        <?php

        while ( $query->have_posts() ) {
          $query->the_post();

          $meta = get_post_meta( get_the_ID(), 'staff_meta', true );

          ?>

          <div class="footer-contact" >
            <p class="footer-contact-field name" ><?php the_title(); ?></p>

            <?php if ($meta['tel']) { ?>
              <p class="footer-contact-field tel" ><?php echo $meta['tel']; ?></p>
            <?php }?>

            <?php if ($meta['email']) { ?>
              <a href="mailto:<?php echo $meta['email']; ?>" >
                <p class="footer-contact-field email" ><?php echo $meta['email']; ?></p>
              </a>
            <?php }?>
          </div>

          <?php
        }

        ?>

        </div>

        <?php
      }


      wp_reset_postdata();

      ?>
    </div>
  </div>

  <div class="footer-lower" ></div>
</footer>
