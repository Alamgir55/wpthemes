<?php get_header(); ?>

      <div class="jumbotron">
        <div class="container">
          <h1><?php echo get_theme_mod('banner_heading'); ?></h1>
          <p class="lead"><?php echo get_theme_mod('banner_text'); ?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text'); ?></a></p>
        </div>
      </div>

      <section class="row marketing">
        <div class="container">
          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-<?php echo get_theme_mod('box1_icon', 'bar-chart'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box1_heading'); ?></h3>
              <p><?php echo get_theme_mod('box1_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at.'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box2_icon', 'code'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box2_heading'); ?></h3>
              <p><?php echo get_theme_mod('box2_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at.'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box3_icon', 'desktop'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box3_heading'); ?></h3>
              <p><?php echo get_theme_mod('box3_text', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at.'); ?></p>
            </div>
          </div>
        </div>
      </section>

      <section class="row content-region-1 pt50 pb40">
        <div class="container">
          <div class="col-md-12">
            <h1>Clean Bootstrap Wordpress Theme</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien sem, laoreet eu tempus vitae, sollicitudin eu odio</p>
          </div>
        </div>
      </section>

      <section class="row content-region-2 pt40 pb40">
        <div class="container">
          <div class="col-md-5">
            <img src="img/pic1.jpg">
          </div>
          <div class="col-md-7">
            <h3>Theme Features</h3>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Clean Code</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Custom Showcase Area</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Bootstrap 3 Framework</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Multiple Color Choices</li>
            </ul>
          </div>
        </div>
      </section>
      
<?php get_footer(); ?>


