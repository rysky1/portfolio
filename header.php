<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<?php wp_head(); ?>
<script>
  jQuery(function ($) {
    $(function(){
      $('.pagetop').hide();
      $(window).scroll(function(){
        if($(this).scrollTop() > 800){
          $('.pagetop').fadeIn();
        }else{
          $('.pagetop').fadeOut();
        }
      });

      $('.pagetop').on('click',function(){
        $('body,html').animate({
          scrollTop:0
        },300);
        return false;
      });


      $('.home-btn').on('click',function(){
        $('body,html').animate({
          scrollTop: 0
        },600);
        return false;
      });

      $('.about-btn').on('click',function(){
        var about = $('#about').offset().top;
        $('body,html').animate({
          scrollTop: about
        },600);
        return false;
      });

      $('.skills-btn').on('click',function(){
        var skills = $('#skills').offset().top;
        $('body,html').animate({
          scrollTop: skills
        },600);
        return false;
      });

      $('.works-btn').on('click',function(){
        var works = $('#works').offset().top;
        $('body,html').animate({
          scrollTop: works
        },600);
        return false;
      });

      $('.contact-btn').on('click',function(){
        var contact = $('#contact').offset().top;
        $('body,html').animate({
          scrollTop: contact
        },600);
        return false;
      });
    });
  });  
</script>    
<body>
  <!----------------header---------------->
  <header class="header">
    <div class="header-ttl">
      <a href="#">Ryo Sekiya</a>
    </div>
    <nav class="header-nav">
      <ul class="header-nav__list">
        <li class="header-nav__item"><a href="#" class="home-btn">Home</a></li>
        <li class="header-nav__item"><a href="#" class="about-btn">About</a></li>
        <li class="header-nav__item"><a href="#" class="skills-btn">Skills</a></li>
        <li class="header-nav__item"><a href="#" class="works-btn">Works</a></li>
        <li class="header-nav__item"><a href="#" class="contact-btn">Contact</a></li>
      </ul>
    </nav>  
  </header>
