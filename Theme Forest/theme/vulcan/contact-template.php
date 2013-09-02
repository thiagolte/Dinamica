<?php
/*
Template Name: Contact Form
*/
?>


<?php get_header();?>

<?php
  $info_address = get_option('vulcan_info_address') ? get_option('vulcan_info_address') : "Enter your addres from theme options";
  $info_latitude = get_option('vulcan_info_latitude') ? get_option('vulcan_info_latitude') : "-6.229555086277892";
  $info_longitude = get_option('vulcan_info_longitude') ? get_option('vulcan_info_longitude') : "106.82551860809326";
?>
        <!-- BEGIN OF PAGE TITLE -->
        <?php if (have_posts()) : ?>      
        <div id="page-title">
        	<div id="page-title-inner">
                <div class="title">
                <h1><?php the_title();?></h1>
                </div>
                <div class="dot-separator-title"></div>
                <div class="description">
                  <?php global $post;?>
                  <?php $short_desc = get_post_meta($post->ID, '_short_desc', true ); ?>
                  <p><?php echo $short_desc;?></p>
                </div>
            </div>   	            
        </div>
        <!-- END OF PAGE TITLE --> 
        
        <!-- BEGIN OF CONTENT -->
        <div id="content">
        
        	<div id="contact-left">  
                <div class="maincontent">
                <?php 
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
                ?>                        
                </div>
            </div>
            
            <div class="contact-separator">&nbsp;</div>
            
            <div id="contact-right">   
                  <div id="contactFormArea">
                    <?php $success_msg  = get_option('vulcan_success_msg');?>
                    <div id="emailSuccess"><?php echo ($success_msg) ? $success_msg : "Your message has been sent successfully. Thank you!";?></div>
                    <div id="maincontactform">
                      <form action="#" id="contactform"> 
                      <div>
                      <label><?php echo __('Empresa ','vulcan');?></label><input type="text" name="empresa" class="textfield" id="empresa" value="" /><span class="require"> *</span>
                      <label><?php echo __('Ramo de Atuação','vulcan');?></label><input type="text" name="ramo" class="textfield" id="ramo" value="" /><span class="require"> *</span> 
                      <label><?php echo __('Nome','vulcan');?></label><input type="text" name="nome" class="textfield" id="nome" value="" /><span class="require"> *</span> 
                      <label><?php echo __('Telefone','vulcan');?></label><input type="text" name="telefone" class="textfield" id="telefone" value="" /><span class="require"> *</span> 
                      <label><?php echo __('Celular','vulcan');?></label><input type="text" name="celular" class="textfield" id="celular" value="" /><span class="require"> *</span> 
                      <label><?php echo __('E-mail','vulcan');?></label><input type="text" name="email" class="textfield" id="email" value="" /><span class="require"> *</span> 

                      <label><?php echo __('Dúvidas','vulcan');?></label><textarea name="duvidas" id="duvidas" class="textarea" cols="2" rows="2"></textarea><br />
                      <label>Digite as Marcas desejadas separadas por vírgula ","</label><textarea name="marcas" id="marcas" class="textarea" cols="2" rows="2"></textarea><span class="require"> *</span><br />
                     
                      <input type="hidden" name="sendto" id="sendto" value="<?php echo (get_option('vulcan_info_email')) ? get_option('vulcan_info_email') : get_option('admin_email');?>" />
                      <input type="hidden" name="siteurl" id="siteurl" value="<?php echo get_template_directory_uri();?>" />
                      <input type="submit" name="submit" class="buttoncontact" id="buttonsend" value="" />
                      <span class="loading" style="display: none;"><?php echo __('Please wait..','vulcan');?></span>
                      </div>
                      </form>
                  </div>   
                </div>
            </div>    
          </div>
          <?php endif;?>
        </div>
        <!-- END OF CONTENT -->
        <?php get_footer();?>
