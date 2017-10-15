<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main div element.
*
* @package Odin
* @since 2.2.0
*/
?>
				</div>
			</div>
		</div>
		<div class="container" >
			<div style="min-height: 30px; border:1px solid #95a5a6;margin: 5px; padding: 10px; border-radius:10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
				<div class="row">
					<?php dynamic_sidebar( 'footer-sidebar' ) ?>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
