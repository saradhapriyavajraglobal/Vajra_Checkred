<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<h1>Title</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. recusandae dolor nostrum minima vitae consectetur ut vero, ab eveniet consequatur porro quas, dolorum nemo soluta non enim voluptatem nihil in.</p>



<section class="integration-sec">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="integration">
                  <div class="slide-inte">
                      <div class="inte-carousel">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png"/>
                      </div>
                  </div>
            </div>

            <div class="integration">
                    <div class="slide-inte">
                      <div class="inte-carousel-rtl" dir="rtl">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"/>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"/>
                      </div>
                    </div>
            </div>

          </div>
      </div>
      
    </div>
    
</section>


<section>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div>
              <h3>Inspect</h3>
              <p>Inspect your cloud and SaaS asset inventory based on customized rules with the help of agentless scanners</p>
            </div>
            <div>
              <h3>Report</h3>
              <p>View all pertinent security information on a single dashboard and use the ticketing system to respond to alerts</p>
            </div>
         </div>
         <div class="col-lg-4"></div>
         <div class="col-lg-4">
         <div>
              <h3>Inspect</h3>
              <p>Inspect your cloud and SaaS asset inventory based on customized rules with the help of agentless scanners</p>
            </div>
            <div>
              <h3>Report</h3>
              <p>View all pertinent security information on a single dashboard and use the ticketing system to respond to alerts</p>
            </div>
         </div>
      </div>
   </div>
</section>



<?php endwhile;

get_footer();   ?>