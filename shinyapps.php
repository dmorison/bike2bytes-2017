<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);

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
<header class="shiny">
	<div class="head-container">
		<a href="index.php"><h1>Bike 2:bytes</h1></a>
	</div>
</header>
<article ng-controller="bikeBytes">
EOD;

	return $returnHtml;

}

function buildBody()
{

	$returnHtml = <<<EOD
<div class="content-container clearfix">
	<div class="card">
		<div class="card-inner alpha">
			<a href="shinyapp-london-crime-mapping.php">
				<div class="card-contents">
					<h3>London crime mapping</h3>
					<img src="images/bar-chart.png">
				</div>
			</a>
		</div>
	</div>
	<div class="card">
	    <div class="card-inner omega">
	        <a href="shinyapp-weekly-planner.php">
	            <div class="card-contents">
	                <h3>Weekly time planner</h3>
	                <img src="images/bar-chart.png">
	            </div>
	        </a>
	    </div>
	</div>
</div>
EOD;

	return $returnHtml;

}

?>