<?php
/*
	Template Name: Gallery Page
*/	

?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<h1>gallery</h1>