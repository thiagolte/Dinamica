<?php get_header();?>
        
        <!-- BEGIN OF FRONT-BOX -->
        <div id="mid-container">
          <?php include (TEMPLATEPATH.'/frontbox.php');?>
          <div class="clear"></div>
        </div>
        <!-- END OF FRONT-BOX --> 
        
        <!-- BEGIN OF CONTENT -->
        <div id="content">
        	
            <!-- begin of content column 1 -->
            <div class="front-box-content">
            <?php 
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Column 1')) : 
              include (TEMPLATEPATH.'/welcome.php');
            endif;            
            ?>
            </div>
            <!-- end of content column 1 -->
            
            <div class="separator-content">&nbsp;</div>
             
            <!-- begin of content column 2 -->    

            <!-- end of content column 2 -->  
            
            <div class="separator-content">&nbsp;</div>
            
            <!-- begin of content column 3 -->                    
            <div class="front-box-content-client">
            <?php 
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Column 3')) :
              indonez_clientslist(8,"","date",true);
            endif;
            ?>
            </div>
            <!-- end of content column 3 -->
            <div class="clear"></div>
        </div>
        <!-- END OF CONTENT -->
        
<?php get_footer();?>