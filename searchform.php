<?php
/**
 * The template for displaying search form
 *
 * @package jaybauerstarter
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

do_action( 'jaybauerstarter_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<?php do_action( 'jaybauerstarter_searchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="Search">
		<?php do_action( 'jaybauerstarter_searchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="Search" class="button">
		</div>
	</div>
	<?php do_action( 'jaybauerstarter_searchform_after_search_button' ); ?>
</form>
<?php do_action( 'jaybauerstarter_after_searchform' );
