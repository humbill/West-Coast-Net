<?php
	// /Applications/AMPPS/www/west-coast-net.info/index.php
	require_once("include/template.inc.php");

	$title="About The Net";
	$content=<<<HTDOC
		<p>WCN was originally named Northwest Slow Speed Net (NSN). NSN had a very nice sound in CW, "dah di, di di di, dah di." The first session was conducted by W7IEU September 2nd, 1958. Read <a href="http://west-coast-net.info/pages/begin.php">The Beginning of NSN</a> by Bob Klepper, W7IEU, for the story.</p>
		<p>Band conditions usually limit coverage to the general area of the Pacific Northwest.  Most participating stations are located in Northern California, Oregon, Washington and British Columbia.  All are welcome, regardless of location.</p>
		<p>The net meets daily (check the <a href="http://west-coast-net.info/pages/roster.php">roster</a> for the latest information).  Each Net Control Station (NCS) is required to transmit at no more than ten words per minute.</p>
HTDOC;

	$prefix="index";

	write_new_page($title, $content, $prefix);

?>