<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favico.png"> 
  <title>Home : Construction Funding Access</title> 
  <?php wp_head(); ?>
</head> 
<body>

  <!-- .nav-ribbon -->
  <div class="nav-ribbon">
    <div class="container">
      <div class="nav-content">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/iconscontact2.png" alt="call us"> <span>732.123.4567</span></a>
        </div>
        <div class="nav-content">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/iconscontact3-u3004.png" alt="email us"> <span>info@constructionfa.com</span></a>
          </div> 
          <div class="nav-content">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social1-u3006.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social2.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social3-u3010.png" alt="">
            </a>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/social4-u3012.png" alt="">
            </a>
          </div>
        </div> 
      </div>
      <!-- end .nav-ribbon -->




      <!-- .main-banner -->
      <header class="main-banner">
        <div class="container">
          <!-- Pre-block -->
          <div class="pre-block">
            <div class="logo_blk">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logotop.png" alt="" class="img-responsive">
            </div>
            <div class="submit_blk">
              <div class="submit-group">
                <div><p>+</p></div>
                <a href="form.html">
                  <span>Submit a Request</span>
                </a>
              </div>
            </div>
          </div>
          <!-- Nav-block -->
          <nav class="nav-block hidden-xs">
            <div><a href="index.html" class="active">home</a></div>
            <div><a href="about.html">about</a></div>
            <div><a href="loans.html">loans</a></div>
            <div><a href="faq.html">FAQ's</a></div>
            <div><a href="contact.html">contact</a></div>
          </nav>
          <div class="styled-select blue visible-xs">
            <select onchange="location = this.value;">
              <option value="index.html">Home</option> 
              <option value="about.html">About</option> 
              <option value="loans.html">Loans</option> 
              <option value="faq.html">FAQ's</option> 
              <option value="contact.html">Contact</option> 
            </select>
          </div>
          <!--  -->
        </div>
      </header>
    <!-- end .main-banner -->