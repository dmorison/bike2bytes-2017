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
<header class="tdf-game-header">
	<div class="head-container">
		<a href="#"><h1>Tour de France Game 2017</h1></a>
		<p>Welcome to Bike2:Bytes Tour de France game 2017 - Beta</p>
		<a href="/Tour-de-France-Game/Tour-de-France-Game_2017.html" class="header-button">Go to leaderboard</a>
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
	<div class="card size-100">
        <div class="card-inner alpha omega">
            <div class="card-contents tdf-game-contents">
                <h3>How it works</h3>
                <h5>How to pick your team</h5>
                <ol>
                	<li>Each player can pick 6 riders and a team competing in the 2017 Tour de France using this <a href="http://www.letour.com/le-tour/2016/us/starters.html" target="_blank">link</a> to find the list of riders and teams</li>
                	<li>You can only pick TWO team leaders. <em>e.g. If you pick Chris Froome and Nairo Quintana, you can't then pick another team leader such as Alberto Contador.</em> The team leaders are the riders with numbers ending in 1.</li>
                	<li>There are no restrictions on your remaining FOUR riders.</li>
                	<li>When choosing a team, you CAN'T pick a team that either of your two lead riders are from. <em>e.g. If you have picked Chris Froome and Nairo Quintana then you CAN'T choose either team Sky or team Movistar as your team.</em></li>
                </ol>
                <h5>How the scoring works</h5>
                <p>Daily points awarded:</p>
                <table>
                	<tr>
                		<th>Points</th>
                		<th>Awarded for</th>
                	</tr>
                	<tr>
                		<td>3</td>
                		<td>One of your riders wins the stage</td>
                	</tr>
                	<tr>
                		<td>2</td>
                		<td>For each day one of your riders is in the yellow jersey</td>
                	</tr>
                	<tr>
                		<td>1</td>
                		<td>For each day one of your riders is in another jersey: Green, Polka Dot, White</td>
                	</tr>
                	<tr>
                		<td>1</td>
                		<td>For each day one of your riders is wearing the red number for being the most agressive rider from the previous day</td>
                	</tr>
                	<tr>
                		<td>1</td>
                		<td>If any rider from your chosen team win the stage</td>
                	</tr>
                </table>
                <p>Overall points awarded at the end of the race:</p>
                <table>
                	<tr>
                		<th>Points</th>
                		<th>Awarded for</th>
                	</tr>
                	<tr>
                		<td>10</td>
                		<td>One of your riders wins the race</td>
                	</tr>
                	<tr>
                		<td>6</td>
                		<td>One of your riders comes second</td>
                	</tr>
                	<tr>
                		<td>4</td>
                		<td>One of your riders comes third</td>
                	</tr>
                	<tr>
                		<td>3</td>
                		<td>One of your riders wins one of the other jersey competitions: Green, Polka Dot, White</td>
                	</tr>
                	<tr>
                		<td>2</td>
                		<td>One of your riders wins the most agressive rider award</td>
                	</tr>
                	<tr>
                		<td>3</td>
                		<td>One of your riders wins the final stage</td>
                	</tr>
                	<tr>
                		<td>3</td>
                		<td>If your chosen team are the winning team</td>
                	</tr>
                	<tr>
                		<td>5</td>
                		<td>Bonus points if one of your riders is the "Lanten Rouge" i.e. comes last in the Tour de France (this is actually considered an honour...)</td>
                	</tr>
                </table>
                <p><em>Disclaimer:</em></p>
                <p><em>I thought of this at the last minute this week and developed it in about a days woth in total so there might be as pretty as hoped for and there may be a few bugs, if so please let me know. And I can't guarantee that it will even work as I obviously haven't been able to test it. But it might also work and be fun and then I will try and make it bigger and better next year.</em></p>
            </div>
        </div>
    </div>
</div>
EOD;

	return $returnHtml;

}

?>