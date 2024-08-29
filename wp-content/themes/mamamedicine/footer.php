<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamamedicine
 */

$footer_logo = get_field('footer_logo', 'option');
$footer_copyright_text = get_field('footer_copyright_text', 'option');
$follow_on_text = get_field('follow_on_text', 'option');
$follow_one_image = get_field('follow_one_image', 'option');
$follow_two_image = get_field('follow_two_image', 'option');
?>

<footer id="colophon" class="site-footer">
	<div class="uk-container">
		<div class="uk-flex borders-function">
			<div>
				<div class="footer-logo">
					<img src="<?php echo $footer_logo['url'];?>">
				</div>
			</div>
			<div class="uk-width-1">
				<div class="footer-navigation">
				<?php  wp_nav_menu( array( 'theme_location'=> 'footer' ) ); ?>
					<div class="copy-rights">
						<p>© <?php echo date("Y"); ?><?php echo $footer_copyright_text;?></p>
						<div>
							<a href="https://www.facebook.com/login/">
								<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V9H1V13H4V21H8V13H11L12 9H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1Z" stroke="#2E3764" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
							<a href="https://www.instagram.com/accounts/login/">
								<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16 1H6C3.23858 1 1 3.23858 1 6V16C1 18.7614 3.23858 21 6 21H16C18.7614 21 21 18.7614 21 16V6C21 3.23858 18.7614 1 16 1Z" stroke="#2E3764" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M15 10.37C15.1234 11.2022 14.9812 12.0522 14.5937 12.799C14.2062 13.5458 13.5931 14.1514 12.8416 14.5297C12.0901 14.9079 11.2384 15.0396 10.4077 14.9059C9.57708 14.7723 8.80971 14.3801 8.21479 13.7852C7.61987 13.1902 7.22768 12.4229 7.09402 11.5922C6.96035 10.7615 7.09202 9.90989 7.47028 9.15837C7.84854 8.40685 8.45414 7.79374 9.20094 7.40624C9.94773 7.01874 10.7977 6.87658 11.63 7C12.4789 7.12588 13.2648 7.52146 13.8716 8.1283C14.4785 8.73515 14.8741 9.52107 15 10.37Z" stroke="#2E3764" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16.5 5.5H16.51" stroke="#2E3764" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="instafeed">
					<h5><?php echo $follow_on_text;?></h5>
					<div class="inst-img uk-flex">
						<div class="uk-width-1-2">
							<img src="<?php echo $follow_one_image['url'];?>">
						</div>
						<div class="uk-width-1-2">
							<img src="<?php echo $follow_two_image['url'];?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>