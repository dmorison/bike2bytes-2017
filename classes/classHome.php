<?php
error_reporting(-1);
ini_set('display_errors', 'On');

include_once("classMeta.php");
include_once("classFooter.php");

class classHome
{

	$html = '';

	$meta = new classMeta();
	$footer = new classFooter();

	$html .= $meta->buildMeta();
	$html .= $this->buildHeader();
	$html .= $this->buildBody();
	$html .= $footer->buildFooter();

	public function buildHeader()
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

	public function buildBody()
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
			<div class="card-contents">
				<h3>Current book I'm reading:</h3>
				<p>{{ book }}</p>
			</div>
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
            <a href="r-shiny-app/weekly-planner.html">
                <div class="card-contents">
                    <h3>Weekly time planner</h3>
                    <img src="images/bar-chart.png">
                    <p>A simple R Shiny application</p>
                </div>
            </a>
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

}

?>