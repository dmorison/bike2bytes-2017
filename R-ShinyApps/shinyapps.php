<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);

include_once "../classes/classMeta.php";
include_once "../classes/classFooter.php";

echo buildContent();

function buildContent()
{
	$meta = new classMeta();
	$footer = new classFooter();

	$html = '';

	$html .= $meta->buildMeta();
	$html .= buildHeader();
	$html .= buildBody();
	$html .= $footer->buildFooter();

	return $html;

}

function buildHeader()
{

	$returnHtml = <<<EOD
<header>
	<div class="head-container">
		<a href="#"><h1>Shiny Apps</h1></a>
	</div>
</header>
<article ng-controller="bikeBytes">
EOD;

	return $returnHtml;

}

function buildBody()
{

	$returnHtml = <<<EOD
<div class="content-container">
	<p>My Shiny apps</p>
</div>
EOD;

	return $returnHtml;

}

?>