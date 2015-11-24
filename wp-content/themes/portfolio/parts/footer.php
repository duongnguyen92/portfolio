<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<div id="footer-widgets" class="full-container">
		<div class="welcome-ft"><i></i><span class="contact">Welcome</span></div>
		<div class="email-ft">
			<span>Your Email Address</span>
			<input type="text" class="email-input" />
			<div class="button-email" ><span>Send</span></div>
		</div>
		<div class="contact-ft">
			<div class="contact-us">
				<i></i><span class="contact">Contact us</span>
			</div>
			<div class="telephone-ft"><i></i><span>098888666</span></div>
			<div class="fax-ft"><i></i><span>098888666</span></div>
			<div class="mail-ft"><i></i><span>duongnguyen.it92@gmail.com</span></div>
		</div>
		<?php dynamic_sidebar( 'sidebar-footer' ) ?>
	</div><!-- #footer-widgets -->

</footer><!-- #colophon .site-footer -->