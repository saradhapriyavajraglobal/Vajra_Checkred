<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<!-- Hero banner -->

<?php if( have_rows('banner_wrap') ):
  while ( have_rows('banner_wrap') ) : the_row();?>
    <section class="c-banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mx-auto align-self-center">
            <div class="content-wrap">
              <?php if( have_rows('banner_slider') ):
                while ( have_rows('banner_slider') ) : the_row();?>
                  <div class="left-slider">
                    <h1 class="v-title-w"><?php the_sub_field('banner_title');?></h1>
                    <p class="tag-text"><?php the_sub_field('banner_tagline');?></p>
                    <a  href="<?php the_sub_field('cta_link');?>" class="cta cta-r">
                      <div data-hover="<?php the_sub_field('banner_cta');?>" class="text-wrap">
                        <div class="btn-link">
                          <span class="link"><?php the_sub_field('banner_cta');?></span>
                        </div> 
                      </div> 
                      <div class="icon-img">
                        <span>
                          <img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
                        </span>
                      </div>
                    </a>
                  </div>
                <?php
                endwhile;
                else :
              endif;
              ?>
            </div>
          </div>

          <div class="col-lg-6 pe-0">
            <div class="banner-slider m-pad">
              <?php if( have_rows('banner_slider') ):
                while ( have_rows('banner_slider') ) : the_row();?>
                  <?php if( get_sub_field('slider_image') ): ?>
                    <img class="banner-img" src="<?php the_sub_field('slider_image'); ?>" />
                  <?php endif; ?>
                <?php
                endwhile;
                else :
              endif;
              ?>
            </div>
            <div class="counter-info"></div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>

<?php if( have_rows('challenges_wrap') ):
  while ( have_rows('challenges_wrap') ) : the_row();?>
    <section class="c-challenges">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 me-auto">
            <div class="row">
              <div class="col-lg-6">
                <div class="img-container">
                  <?php if( get_sub_field('image') ): ?>
                    <img class="ch-img img-fluid" src="<?php the_sub_field('image'); ?>" />
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <h1 class="v-title-wwr"><?php the_sub_field('title');?></h1>
                <p class="tag-text c-des"><?php the_sub_field('description');?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>

<?php if( have_rows('client_cloud') ):
  while ( have_rows('client_cloud') ) : the_row();?>
    <section class="cloud-security">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mx-auto align-self-center">
            <h2 class="v-title-wwr"><?php the_sub_field('title');?></h2>
            <p class="tag-text c-des"><?php the_sub_field('description');?></p>
          </div>
          <div class="col-lg-6 pe-0 align-self-center">
            <div class="img-container">
              <?php if( get_sub_field('image') ): ?>
                <img class="ch-img img-fluid" src="<?php the_sub_field('image'); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>



<section class="cloud-tab-section">
	<div class="container-fluid">
		<h3 class="text-center main-tagline v-title-wwr">Enhance your <span class="v-tagline-r">cloud and SaaS security</span> </br> with the CheckRed platform</h3>
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" role="tab" aria-controls="tab1" aria-selected="true">CSPM</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link " id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" role="tab" aria-controls="tab2" aria-selected="true">SSPM</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-11 mx-auto cloud-tab-content">
				<div id="content" class="tab-content" role="tablist">
					<div class="card tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
						<div class="card-header" role="tab" id="heading-1">
							<h4 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">CSPM</a>
							</h4>
						</div>
						<div id="collapse-1" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-1">
							<div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-12 me-auto align-self-center order-sm-12">
                    <img class="img-fluid tab-img" src="/wp-content/uploads/2022/12/CSPM.webp" alt="">
                  </div>
                  <div class="col-lg-5 col-md-12 me-auto align-self-center order-sm-12 tab-content-wrap">
                    <h3 class="main-title v-subtitle-w">Cloud Security Posture Management</h3>
                    <P class="tag-text">Gain a comprehensive view of risk posture across your cloud assets. Identify, analyze, and prioritize these risks with accuracy and agility.</P>
                    <P class="tag-text-w">Supported applications</P>
                    <div class="img-slider">
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Aws-1.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Azzure.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/google_cloud.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Linode.svg" class="slide-icon">
                      </div>
                    </div>
                    <a  href="#" class="cta cta-r">
                      <div data-hover="Know More" class="text-wrap">
                        <div class="btn-link">
                          <span class="link">Know More</span>
                        </div> 
                      </div> 
                      <div class="icon-img">
                        <span>
                          <img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
                        </span>
                      </div>
                    </a>
                  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="card tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
						<div class="card-header" role="tab" id="heading-2">
							<h4 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-2" aria-expanded="true" aria-controls="collapse-2">SSPM</a>
							</h4>
						</div>
						<div id="collapse-2" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-2">
							<div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-12 me-auto align-self-center order-sm-12">
                    <img class="img-fluid tab-img" src="/wp-content/uploads/2022/12/SSPM.webp" alt="">
                  </div>
                  <div class="col-lg-5 col-md-12 me-auto align-self-center order-sm-12 tab-content-wrap">
                    <h3 class="main-title v-subtitle-w">SaaS security Posture Management</h3>
                    <P class="tag-text">Shield your SaaS applications from unauthorized users and avoid data leakages. Get complete visibility, monitor access, and follow all compliance and security policies.</P>
                    <P class="tag-text-w">Supported applications</P>
                    <div class="img-slider">
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Aws-1.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Azzure.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/google_cloud.svg" class="slide-icon">
                      </div>
                      <div class="img-slide">
                        <img src="/wp-content/uploads/2022/12/Linode.svg" class="slide-icon">
                      </div>
                    </div>
                    <a  href="#" class="cta cta-r">
                      <div data-hover="Know More" class="text-wrap">
                        <div class="btn-link">
                          <span class="link">Know More</span>
                        </div> 
                      </div> 
                      <div class="icon-img">
                        <span>
                          <img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
                        </span>
                      </div>
                    </a>
                  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<?php if( have_rows('approach_wrap') ):
  while ( have_rows('approach_wrap') ) : the_row();?>
<section class="c-approch">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 mx-auto">
       
        <div class="row">
        <h3 class="v-title-wwr1"><?php the_sub_field('a-sec-title');?></h3>
          <div class="col-lg-4 col-md-4">
            <div class="a-con content-wrapper">
              <h4 class="s-title-text"><?php the_sub_field('title-1');?></h4>
              <p class="s-text"><?php the_sub_field('desc-1');?></p>
            </div>
            <div class="a-con content-wrapper c-pad">
              <h4 class="s-title-text"><?php the_sub_field('title-2');?></h4>
              <p class="s-text"><?php the_sub_field('desc-2');?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
           
          </div>
          <div class="col-lg-4 col-md-4">
           <div class="a-con content-wrapper-s">
              <h4 class="s-title-text"><?php the_sub_field('title-3');?></h4>
              <p class="s-text"><?php the_sub_field('desc-3');?></p>
            </div>
            <div class="a-con content-wrapper-s c-pad1">
              <h4 class="s-title-text"><?php the_sub_field('title-4');?></h4>
              <p class="s-text"><?php the_sub_field('desc-4');?></p>
            </div>
          </div>
        </div>
        <div class="content-wrap-a text-center">
              <h4 class="s-title-text"><?php the_sub_field('title-5');?></h4>
              <p class="s-text"><?php the_sub_field('desc-5');?></p>
            </div>
      </div>
    </div>
  </div>
</section>
<?php
  endwhile;
  else :
endif;
?>
<section class="c-form">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <h3 class="v-title-wwr"><?php the_field('form_title');?></h3>
          </div>
          <div class="col-lg-7 m-pad">
            <?php the_field('home_form');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="checkred-works">
    <div class="container-fluid">
      <div class="row">
         <div class="col-lg-11 mx-auto">
                  <?php if(get_field('checkred_title')): ?>
                     <h2 class="v-title-wwr"><?php the_field('checkred_title'); ?></h2>
                  <?php endif; ?>
              <?php if( have_rows('checkred_works') ): ?>
    
              <div class="responsive-tabs">

                        <div class="work-titles">
                          <ul class="nav nav-tabs" role="tablist">
                              
                              <?php
                                  $i=1;
                                  while( have_rows('checkred_works') ): the_row();
                                  ?>

                                    <?php
                                        if($i==1) { ?>
                                          <li class="nav-item">
                                          <a id="tab-<?php echo $i; ?>" href="#pane-<?php echo $i; ?>" class="nav-link active" data-bs-toggle="tab" role="tab">
                                          <?php if(get_sub_field('work_titles')): ?>
                                          <?php the_sub_field('work_titles'); ?>
                                          <?php endif; ?>
                                          </a>
                                          </li>
                                      <?php
                                    } 
                                
                                    else { ?>
                                      <li class="nav-item">
                                      <a id="tab-<?php echo $i; ?>" href="#pane-<?php echo $i; ?>" class="nav-link" data-bs-toggle="tab" role="tab">
                                          <?php if(get_sub_field('work_titles')): ?>
                                          <?php the_sub_field('work_titles'); ?>
                                          <?php endif; ?>
                                      </a>
                                      </li>
                                      <?php
                                      }
                                  ?>
                            <?php $i++;
                            endwhile;
                            ?>
                          </ul>

                        </div>  

                          <div id="content" class="tab-content" role="tablist">
                          
                              <?php
                                  $i=1;
                                  while( have_rows('checkred_works') ): the_row();
                              ?>
                              <?php
                                if($i==1) { ?>
                                  <div id="pane-<?php echo $i; ?>" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                      <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                          <h5 class="mb-0">
                                              <a data-bs-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                                  <?php if(get_sub_field('work_titles')): ?>
                                                  <?php the_sub_field('work_titles'); ?>
                                                  <?php endif; ?>
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapse-<?php echo $i; ?>" class="collapse show" data-bs-parent="#content" role="tabpanel"
                                          aria-labelledby="heading-<?php echo $i; ?>">
                                          <div class="card-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-lg-5 align-self-center">
                                                          <?php if(get_sub_field('content_title')): ?>
                                                              <h3><?php the_sub_field('content_title'); ?></h3>
                                                          <?php endif; ?>
                                                          <?php if(get_sub_field('description')): ?>
                                                              <p><?php the_sub_field('description'); ?></p>
                                                          <?php endif; ?>
                                                      </div>
                                                      <div class="col-lg-7 cont-img" style="background-image:url('<?php the_sub_field('content_image'); ?>')">
                                                                                                       
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php
                                    } 
                              else { ?>
                              <div id="pane-<?php echo $i; ?>" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                  <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                      <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="false"
                                              aria-controls="collapse-<?php echo $i; ?>">
                                              <?php if(get_sub_field('work_titles')): ?>
                                              <?php the_sub_field('work_titles'); ?>
                                              <?php endif; ?>
                                          </a>
                                      </h5>
                                  </div>
                                  <div id="collapse-<?php echo $i; ?>" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
                                      <div class="card-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-lg-5 align-self-center">
                                                          <?php if(get_sub_field('content_title')): ?>
                                                              <h3><?php the_sub_field('content_title'); ?></h3>
                                                          <?php endif; ?>
                                                          <?php if(get_sub_field('description')): ?>
                                                              <p><?php the_sub_field('description'); ?></p>
                                                          <?php endif; ?>
                                                      </div>
                                                      <div class="col-lg-7 cont-img" style="background-image:url('<?php the_sub_field('content_image'); ?>')">
                                                 
                                                      </div>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              }
                              ?>
                              
                              <?php $i++;
                              endwhile;
                              ?>
                        
                          </div>
                     </div>
                  <?php  
                  endif; ?>

                  </div>
                </div>

       
    </div>
</section>

<section class="integration-sec">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="integration">
                  <div class="slide-inte">
                      <div class="inte-carousel">
                        <img src="/wp-content/uploads/2022/12/Logo-1.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-429.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-427.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-423.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-421.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-420.svg">
                        <img src="/wp-content/uploads/2022/12/Group-429.svg"/>
                      </div>
                  </div>
            </div>

            <div class="integration">
                    <div class="slide-inte">
                      <div class="inte-carousel-rtl" dir="rtl">
                        <img src="/wp-content/uploads/2022/12/Group-431.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-430.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-426.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-425.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-422.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-424.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-419.svg"/>
                      </div>
                    </div>
            </div>

          </div>
      </div>
      
    </div>
    
</section>

<?php endwhile;

get_footer();   ?>