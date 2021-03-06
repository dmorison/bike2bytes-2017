<?php

include_once "classes/classMeta.php";
include_once "classes/classFooter.php";

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
<header class="small-header">
	<div class="head-container">
		<a href="index.php"><h1>Bike 2:bytes</h1></a>
	</div>
</header>
<article class="simple-page" ng-controller="bikeBytes">
EOD;

	return $returnHtml;

}

function buildBody()
{

	$returnHtml = <<<EOD
<div class="content-container clearfix">
	<iframe class="weekly-planner" src="https://dmorison.shinyapps.io/2017-02-25_week-time-planner_ggplot/"></iframe>
</div>
EOD;

	return $returnHtml;

}

?>