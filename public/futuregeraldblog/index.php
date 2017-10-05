  <!DOCTYPE html>
  <html>
    <head>
   
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="css/app.css"  />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="favicon.png">
 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div className="navbar-fixed">
            <nav>
              <div class="nav-wrapper blue darken-3">
                <a href="/" class="brand-logo"><img alt="FutureGerald" class="logoClass" src="https://futuregerald.com/logo/logoWhiteTransparent.png"/></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="/">Home</a></li>
                  <li><a href="/links">My Links</a></li>
                  <li><a href="/mywork">My Work</a></li>
                  <li><a href="/contact">Contact Me</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <li><a href="/">Home</a></li>
                  <li><a href="/links">My Links</a></li>
                  <li><a href="/mywork">My Work</a></li>
                  <li><a href="/contact">Contact Me</a></li>
                </ul>
              </div>
            </nav>
      </div>
      <div class="container">
                <?php
      
              if(have_posts()) :
                while (have_posts()) : the_posts(); ?>
                  <div class="row">
                    <div class="col s12 m7">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo get_the_post_thumbnail(get_the_ID(), '960_'); ?>">
                          <span class="card-title"><?php the_title(); ?></span>
                        </div>
                        <div class="card-content">
                          <p> <?php the_content(); ?> </p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                  </div>
        
              <?php  endwhile;

                else: 
                  echo "<p>Can't find any blog posts<p>"

              ?>
              

        
      </div>

   
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>