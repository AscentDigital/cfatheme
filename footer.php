<!-- footer -->
<?php wp_footer(); ?>
<footer class="section border-block __up">
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logotopbw.png" alt="" class="">

    <img src="<?php echo get_template_directory_uri(); ?>/img/contacticons4-u3155.png" alt="">
    <a href="" class="contact">713.722.0162</a>

    <img src="<?php echo get_template_directory_uri(); ?>/img/contacticons3-u3153.png" alt="">
    <a href="" class="contact">info@constructionfa.com</a>

    <div class="social-contact">
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social1-u4291.png" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social2-u4293.png" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social3-u4295.png" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/social4-u4297.png" alt=""></a>
    </div>

    <div class="footer-nav">
      <a href="<?php echo get_link_by_slug('privacy-notice', 'page'); ?>">Privacy Notice</a>
      <a href="about.html">about</a> 
      <a href="loans.html">loans</a> 
      <a href="faq/html">FAQ's</a> 
      <a href="contact.html">Contact</a> 
    </div>
  </div>
  <div class="copyright">
    <?php echo _('Copyright 2017 by Construction Funding Access, LLC'); ?>
  </div>
</footer>
<!-- end footer -->
<script>
  jQuery(function( $ ){
    $('.parallaxie').parallaxie();
  });

  <?php if(isset($_GET['sent']) && $_GET['sent'] == 'true'){ ?>
    jQuery(function( $ ){
      $('#SuccessWindow').modal('show');
    });
  <?php } ?>

  <?php if(isset($_GET['success']) && $_GET['success'] == 'true'){ ?>
    jQuery(function( $ ){
      $('#SuccessWindow').modal('show');
    });
  <?php } ?>
</script>
</body>
</html>