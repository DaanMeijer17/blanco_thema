<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanco_thema
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blanco-thema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'blanco-thema' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'blanco-thema' ), 'blanco-thema', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		<footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
    <h2> About the <span> company</span></h2> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
      ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
    </p>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <h2> Company<span> location</span></h2>
    </div>
    <div>
      <p> (+00) 0000 000 000</p>
    </div>
    <div>
      <p><a href="#"> office@company.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> Company<span> logo</span></h2>
    <p class="menu">
      <a href="/"> Home</a> |
      <a href="/"> About</a> |
      <a href="/"> Content</a> |
      <a href="/"> Agenda</a> |
      <a href="/"> Contact</a>
    </p>
      <p class="name"> Company Name &copy; 2019</p>
  </div>
</footer>
	</footer><!-- #colophon -->
</div><!-- #page -->

