<?php if( !is_single() ){?>

	</div><!-- #content -->

<?php } ?>
<?php if( !is_front_page() ){?>

	<?php get_sidebar(); ?>

	</div><!-- #wrap -->
	<div class="push"></div>

	</div><!-- .wrapper for sitting footer at the bottom of the page -->
<?php } ?>


<div class="footer">
	<div class="inner">
		<?php if ( get_option('blog_public' ) == '1' || is_user_logged_in() ): ?>
			<?php if ( is_page() || is_home() ): ?>

			<dl>
				<dt><?php _e( 'Book Name', 'pressbooks' ); ?>:</dt>
				<dd><?php bloginfo( 'name' ); ?></d>
				<?php global $metakeys;
				$metadata = pb_get_book_information();
				foreach ( $metadata as $key => $val ) :
					if ( isset( $metakeys[ $key ] ) && ! empty( $val ) ) : ?>
						<dt><?php echo $metakeys[ $key ]; ?>:</dt>
						<dd><?php if ( 'pb_publication_date' == $key ) { $val = date_i18n( 'F j, Y', absint( $val ) ); }
						echo $val; ?></dd>
				<?php endif;
				endforeach; ?>
				<?php
				// Copyright
				echo '<dt>' . __( 'Copyright', 'pressbooks' ) . ':</dt><dd>';
				echo ( ! empty( $metadata['pb_copyright_year'] ) ) ? $metadata['pb_copyright_year'] : date( 'Y' );
				if ( ! empty( $metadata['pb_copyright_holder'] ) ) {
					echo ' ' . __( 'by', 'pressbooks' ) . ' ' . $metadata['pb_copyright_holder'];
				}
				echo "</dd>\n"; ?>

			</dl>
			<?php endif; ?>

			<?php echo pressbooks_copyright_license(); ?>

			<?php endif; ?>
			<p class="cie-name"><a href="https://pressbooks.com">Pressbooks: <?php _e('Simple Book Production', 'pressbooks'); ?>
				
			</a>
			</p>
			<!-- In this div we call shortcodes of presbooks-related-content plugin-->
			<div style="width: 100%">	  
			<!--This do the shortcode  related-content, this shortcode prints the values of fields resources-->
			<?php echo do_shortcode('[related_content type="all"]')?>	

			<!-- This do the shortcode related-based, this shortcode prints the link and flag of the language on which the book is based-->
			<?php echo do_shortcode('[related_based]')?>	

			<!-- We call the function is_post_type to tell you if the enable button of this function is activated-->
			<?php if(is_post_type('part'))
				//This shortcode is responsible for showing the relationship between books. 
			 	//Show the section (for example vocabulary) and the link to the book.
				echo do_shortcode('[related_books ]')
			?>

			<!--This shortcode shows the information of the Educational Information metabox.
				It was created to show the metadata. -->
			<?php echo do_shortcode('[show_metadata]')?>

			<!--This is how a widget would be called, in this example we show the link_based widget -->		
			<?php //dynamic_sidebar ( 'link_based_widget ' )?>
			</div>
			

	</div><!-- #inner -->
	
	 
</div><!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>
