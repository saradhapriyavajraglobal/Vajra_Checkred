<?php
/**
 * Template Name:  Platform Summary
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>


  <?php if( have_rows('platform_banner_wrap') ):
  while ( have_rows('platform_banner_wrap') ) : the_row();?>

  <section class="platform-banner" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-11 col-md-12 mx-auto align-self-center">
                <div class="row">
                    <div class="col-lg-5 col-md-8 me-auto">
                        <div class="content">
                            <?php if(get_sub_field('banner_title')): ?>
                                <h1 class="v-title-w v-title-lh1"><?php the_sub_field('banner_title'); ?></h1>
                            <?php endif; ?>
                            <?php if(get_sub_field('banner_title')): ?>
                                <p class="tag-text v-para-lh2"><?php the_sub_field('banner_tagline'); ?></p>
                            <?php endif; ?>
                            <a  href="<?php the_sub_field('cta_link'); ?>" class="cta cta-r">
                                <div data-hover="Request a Demo" class="text-wrap">
                                <div class="btn-link">
                                    <?php if(get_sub_field('cta_text')): ?>
                                        <span class="link"><?php the_sub_field('cta_text'); ?></span>
                                    <?php endif; ?>
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
  </section>

  <?php
  endwhile;
  else :
endif;
?>


  <section class="platform-banner-btm section-pad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 col-md-12 mx-auto align-self-center">
                <div class="row">
                    <div class="col-lg-5 me-auto align-self-center c-btm-content">
                        <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/flowchart.webp" /> 
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <h2 class="v-title-wwr v-title-lh2">Reinventing <span class="v-tagline-r">security posture</span></h2>
                        <p class="v-subtitle-w">Experience speed and efficiency with centralized cloud and SaaS security</p>
                        <p class="tag-text v-para-lh2">The abundance and advancement of cloud computing and SaaS applications have led to greater complexities in their security requirements. As businesses increase their reliance on cloud and SaaS applications, seamlessly managing security concerns becomes a high priority.<br/><br/>CheckRed offers a single platform that manages the risk posture of both - cloud and SaaS environments. With an emphasis on simplicity, complete visibility, and efficient remediation workflows, CheckRed meets the security needs of all enterprises.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  <section class="checkred-advantage text-center section-pad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 col-md-12 mx-auto">
               
                    <h3 class="v-title-wwr v-title-lh2">The CheckRed <span class="v-tagline-r">Advantage</span></h3>
        
                <div class="row">
                    <div class="col-lg-4 col-md-5 mx-auto">
                        <div class="advantage-card">
                                <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/icon1.svg" /> 
                            
                                <h5 class="v-subtitle-w v-title">Eliminate the need for multiple security tools</h5>
                           
                             <p class="tag-text v-para-lh2">CheckRed’s automated platform allows effortless management of cloud and SaaS security posture from a single dashboard.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 mx-auto">
                        <div class="advantage-card">
                                <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/icon2.svg" /> 
                            
                                <h5 class="v-subtitle-w v-title">Monitor the risk posture of all your customers</h5>
                           
                             <p class="tag-text v-para-lh2">MSPs and MSSPs that cater to businesses in highly regulated industries need a security partner to help identify and eliminate risks.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 mx-auto">
                        <div class="advantage-card">
                                <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/icon3.svg" /> 
                            
                                <h5 class="v-subtitle-w v-title">Gain detailed and contextual remediation workflows</h5>
                           
                             <p class="tag-text v-para-lh2">By continuously analyzing cloud and SaaS inventory, the CheckRed platform delivers automated workflows to mitigate risks.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="security-section section-pad">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-11 col-md-12 mx-auto text-center">
                <h4 class="v-title-wwr v-title-lh2">Address <span class="v-tagline-r">security challenges</span>with insightful risk audit</h4>
                <p class="tag-text v-para-lh2">A dedicated platform to monitor cloud and SaaS posture</p>
                <div class="row section-pad">
                    <div class="challenges-img">
                    
                        <img class="img-fluid" src="http://checkred.local/wp-content/uploads/2023/02/Infographics.webp" />

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  </section>
  

  <section class="cloud-security-section section-pad">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 col-md-12 mx-auto align-self-center">
                    <div class="row">
                        
                        <div class="col-lg-6 align-self-center">
                            <h2 class="v-title-wwr v-title-lh2"><span class="v-tagline-r">Cloud </span>Security Posture Management</h2>
                            <p class="tag-text v-para-lh2 section-pad">The constant changes and growing complexities in cloud environments make it hard for businesses to manage their cloud security. Dealing with misconfigurations, proving compliance requirements, and ensuring proper access are critical processes that need to be carried out continuously. However, they can take up a significant amount of time and resources.<br /><br />CheckRed is a non-intrusive platform that inspects, detects, and prioritizes alerts and assists in managing risk posture with ease. The agentless scanners deliver a comprehensive and accurate view of your cloud infrastructure. Optimize cloud security with a robust platform that supports AWS, Azure, Google Cloud, Linode, multi-cloud and more!</p>
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

                        <div class="col-lg-6 me-auto align-self-center c-btm-content">
                            <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/slide2.webp" /> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
  </section>

  <section class="saas-security-section section-pad">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 col-md-12 mx-auto align-self-center">
                    <div class="row">

                        <div class="col-lg-6 me-auto align-self-center c-btm-content">
                            <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/slide1.webp" /> 
                        </div>
                        
                        <div class="col-lg-6 align-self-center">
                            <h2 class="v-title-wwr v-title-lh2"><span class="v-tagline-r">SaaS </span>Security Posture Management</h2>
                            <p class="tag-text v-para-lh2 section-pad">Any modern business depends on dozens (and sometimes hundreds) of SaaS applications daily, with each containing confidential data and vital business information. A minor misconfiguration, a missed compliance requirement, or even wrong access authorization can result in catastrophic consequences.<br /><br />SaaS security posture management is vital for any enterprise. The CheckRed platform manages the risk posture of multiple SaaS applications and provides complete visibility of alerts. Make SSPM simple and effortless with automated audits, customized remediation workflows, and seamless notification of alerts.</p>
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
  </section>

  <section class="cloud-compliance-section section-pad">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 col-md-12 mx-auto align-self-center">
                    <div class="row">
                        
                        <div class="col-lg-6 align-self-center">
                            <h4 class="v-title-wwr v-title-lh2">Cloud Compliance</h2>
                            <p class="tag-text v-para-lh2 section-pad">The rapid growth of the cloud has resulted in increased compliance requirements. Businesses that are expanding into new markets, dealing with mergers and acquisitions, or simply migrating sensitive and critical data into the cloud have to be perfectly compliant. A single miss can lead to unfortunate and costly repercussions.<br /><br />CheckRed helps businesses eliminate the complexities of compliance and achieve improved growth. The continuous monitoring and rapid assessment of compliance measures ensure better security and fewer risks. Utilize our platform for single or multicloud environments and reduce manual, time-consuming audits.</p>
                            <a  href="#" class="cta cta-r">
                                <div data-hover="Read More" class="text-wrap">
                                <div class="btn-link">
                                    <span class="link">Read More</span>
                                </div> 
                                </div> 
                                <div class="icon-img">
                                <span>
                                    <img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
                                </span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6 me-auto align-self-center c-btm-content">
                            <img class="vc-img img-fluid" src="/wp-content/uploads/2023/02/flowchart.webp" /> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
  </section>

<?php endwhile;

get_footer();   ?>