<div class="container">
  <div class="row">
    <div class="page-content content-wrapper">

      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>
      
      <?php if(have_rows('team_members')) : ?>

        <div class="container">
          <div class="row">

            <?php get_court_house(); ?>

            <h3 class="gallery-slogan text-center">
             <?= get_field('team_member_slogan'); ?>
            </h3>

            <?php while(have_rows('team_members')) : the_row(); ?>

              <?php 
              $image = get_sub_field('image'); 
              $name  = get_sub_field('name');
              $role  = get_sub_field('role');
              $i++;
              ?>

              <div class="col-lg-3 col-sm-4 col-xs-6 member">
                <div class="member-wrap">
                  <p class="member-image-wrap">
                    <img 
                      src="<?= $image['url']; ?>" 
                      alt="<?= $image['alt']; ?>" 
                      class="img-responsive auto member-img">
                  </p>

                  <h3 class="member-title text-center"><?= $name; ?></h3>
                  <p class="member-role text-center"><?= $role; ?></p>
                  <?php if (get_sub_field('bio')): ?>
                    <button type="button" class="view-member-bio" data-toggle="modal" data-target="#member-<?= $i; ?>">
                      Member Summary
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="member-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2><?= $name; ?></h2>
                            <p><?= $role; ?></p>
                          </div>
                          <div class="modal-body">
                            <p class="member-bio"><?php the_sub_field('bio') ?></p>
                          </div>
                          <div class="modal-footer">
                            <span type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endif ?>

                </div><!-- member wrap -->
              </div><!-- col -->

            <?php endwhile; ?>
      
          </div>
        </div>

      <?php endif; ?>

      <?php get_template_part('team/gallery'); ?>

    </div><!-- page content -->
  </div><!-- row -->
</div><!-- container -->