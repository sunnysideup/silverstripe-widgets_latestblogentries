<?php
/**
 * Shows a widget with viewing blog entries
 * by months or years.
 *
 * @package blog
 */
class LatestBlogEntries extends Widget {

	private static $db = array(
		'NumberOfItems' => 'Int',
		'OnlyFromThisPage' => 'Boolean'
	);
	private static $defaults = array(
		'NumberOfItems' => 7
	);

	private static $title = 'Latest Blog Entries';

	private static $cmsTitle = 'Latest Blog Entries';

	private static $description = 'Show a list of latest blog entries.';

	function getCMSFields() {
		return new FieldList(
			new NumericField("NumberOfItems","Number Of Items Shown")
		);
	}

	function Links() {
		Requirements::themedCSS("widgets_latestblogentries");
		return DataObject::get("BlogEntry", null, "{$bt}Created{$bt} DESC", null, $this->NumberOfItems);
	}

}
