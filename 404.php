<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
		<div class="row">
			<div class="col-md-12">
		



			<header class="page-header">
				<h1 style="text-align: center;" class="page-title">LOGIN</h1>
			</header>

			<div style="text-align: center;padding: 20px;" class="page-content">
				<p>ESTA PAGINA PODE ESTAR DISPONÍVEL APENAS PARA USUÁRIOS LOGADOS</p>


				<?php echo do_shortcode('[scm_botao label="LOGIN" target="__site_url__/login/ " class="btn btn-primary"]') ?> ou <?php echo do_shortcode('[scm_botao label="CADASTRE-SE" target="__site_url__/cadastre-se/ " class="btn btn-primary"]') ?>
			</div><!-- .page-content -->

			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
