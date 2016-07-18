<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	</div>
	</div> <!-- Row -->
	</div><!-- .site-content -->
</div><!-- .site -->
<footer>
	<div class="container ">
		<div class="row same-height-container">
			<div class="col-sm-2 same-height-col">
				<a href="http://code4sa.org/"><img src="http://code4sa.org/images/footer-logo.png" alt="Code4SA" class="img img-responsive"></a>
			</div>
			<div class="col-sm-4 border-right same-height-col">
				<ul>
					<li>Naked Data is a <a href="http://code4sa.org/">Code for South Africa</a> publication</li>
					<li>All content Copyright <a href="http://code4sa.org/">Code for South Africa</a> unless otherwise indicated</li>
					<li>All content is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a> unless otherwise indicated</li>
					<li>Code for South Africa is a non-profit organisation registered with the South African Department of Social Development, number 133-850NPO</li>
				</ul>
			</div>
			<div class="col-sm-3 border-right same-height-col">
				<ul>
					<li><a href="/about">About Naked Data</a></li>
					<li><a href="/contact">Contact Naked Data</a></li>
					<li><a href="https://github.com/code4sa">Our Github Account</a></li>
					<li><a href="https://data.code4sa.org/">Our Datasets</a></li>
				</ul>
			</div>
			<div class="col-sm-3 same-height-col">
				<ul>
					<li><a href="http://code4sa.org/">Code4SA</a></li>
					<li><a href="http://academy.code4sa.org/">Code4SA Data Journalism Academy</a></li>
				</ul>
			</div>
		</div>
	</div>
	
</footer>
<?php wp_footer(); ?>
<?php include_once(get_template_directory() . "/snippets/analytics.php") ?>
</body>
</html>
