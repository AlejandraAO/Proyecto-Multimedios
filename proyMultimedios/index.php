

<?php


get_header();
if(have_posts()):
  while(have_posts()):the_post();?>
  <h3><a class= "menu" href="<?php the_permalink();?>">
    <?php the_title();?></a></h3>
    
    <p><?php the_content();?></p>
    <?php endwhile;
else:
echo "<p>no content to show</p>";
endif;
get_footer();
?>



<!DOCTYPE html>
<html lang="en">





    
