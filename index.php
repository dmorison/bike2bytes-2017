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
<header>
	<div class="head-container">
		<a href="#"><h1>Bike 2:bytes</h1></a>
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
			<a href="/wineBook" target="_blank">
				<div class="card-contents">
					<h3>Wine cellar</h3>
					<img src="images/drink.png">
					<p>Browse my personal wine website</p>
				</div>
			</a>
		</div>
	</div>
	<div class="card">
	    <div class="card-inner omega">
	        <a href="shinyapps.php">
	            <div class="card-contents">
	                <h3>Shiny apps built in R</h3>
	                <img src="images/bar-chart.png">
	            </div>
	        </a>
	    </div>
	</div>
	<div class="card size-60">
		<div class="card-inner alpha">
			<div class="card-contents">
				<h3>2017 challenge:</h3>
				<p>20 push-ups per day, 6 days a week</p>
				<div class="challenge">
					<span>Count:</span><span class="number">{{ pushups }}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="card size-40">
		<div class="card-inner omega">
			<div class="card-contents">
				<h3>Current book I'm reading:</h3>
				<p>{{ book }}</p>
			</div>
		</div>
	</div>
	<div class="card size-60 center-align">
		<div class="card-inner">
			<a href="http://www.parkrun.org.uk/richmond/results/athletehistory/?athleteNumber=995354" target="_blank">
				<div class="card-contents">
					<h3>Fastest 5km park run:</h3>
					<span class="number">{{ parkrunpb }}</span>
					<p>Richmond Park<br><span class="small-text">(visit results page)</span></p>
				</div>
			</a>
		</div>
	</div>
</div>
EOD;

	return $returnHtml;

}

?>