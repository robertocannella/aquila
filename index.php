<?php
/**
 * Main template file.
 *
 * @package Aquila
 */

get_header();

?>

    <div id="primary">
        <main id="main" class="site-main mt-5" role="main">
			<?php
			if ( have_posts() ) :
				?>
                <div class="container">
					<?php
					if ( is_home() && ! is_front_page() ) {
						?>
                        <header class="mb-5">

                            <h1 class="page-title">
								<?php single_post_title(); ?>
                            </h1>
                        </header>
						<?php
					}
					?>

                    <div class="row">
						<?php
						$index             = 0;
						$no_inside_columns = 3; // The number of items to list in the column before creating a new one
                                            //  1  4  7
                                            //  2  5  8
                                            //  3  6  9
						while ( have_posts() ) : the_post();

							if ( 0 === $index % $no_inside_columns ) {
								?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
								<?php
							}

							get_template_part( 'template-parts/content' );

							$index ++;

							if ( 0 !== $index && 0 === $index % $no_inside_columns ) {
								?>
                                </div>
								<?php
							}

						endwhile;
						?>
                    </div>
                </div>
			<?php

			else :

				get_template_part( 'template-parts/content-none' );

			endif;

			//aquila_pagination();


			?>
        </main>
    </div>

<?php
get_footer();
