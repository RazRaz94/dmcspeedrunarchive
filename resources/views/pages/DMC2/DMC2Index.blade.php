@extends('Layout')
@section('title', 'Devil May Cry 2')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
            <tbody><tr>
            <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 2</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMC2box.png" width="270" height="384" />
            </th></tr>
            <tr>
            <td rowspan="2"><b>Main platforms</b>
            </td>
            <td>PC
            </td></tr>
            <tr>
            <td>PS4/PS2
            </td></tr>
            <td><b>Timing</b>
            </td>
            <td>RTA
            </td></tr>
            <tr>
            <td><b>Framerate</b>
            </td>
            <td>60
            </td></tr>
            <tr>
            <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
            </td></tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
            </td></tr></tbody></table>
    </div>
    <div id = "left">
    	<h1>Devil May Cry 2</h1>
        {{ Breadcrumbs::render('DMC2') }}
        <p>Devil May Cry 2 is a 2003 action-adventure game developed by Capcom Production Studio and published by Capcom. Released from January to March, originally for the PS2.</p>
        <div id="toc_container">
<p class="toc_title">Contents</p>
<ul class="toc_list">
  <li><a href="#Leaderboards_&_Categories">Leaderboards & Categories</a></li>
  <li><a href="#Getting_Started">Getting Started</a></li>
  <li><a href="#Rules">Rules</a></li>
  <li><a href="#External_Resources">External Resources</a></li>
</ul>
</div>


<h2 id="Leaderboards_&_Categories">Leaderboards & Categories</h2>


<dl id="extralinks"> You will have a choice between these characters <a href="/DMC2:Dante">Dante</a>, <a href="/DMC2:Lucia">Lucia</a> and <a href="/DMC2:Trish">Trish</a> then pick their respective categories:

    <ul><li><b>New Game</b> - Beats the game as fast as possible from a new file.</li>
        <li><b>New Game+</b> - Beats the game as fast as possible from a cleared file.</li>
    </ul>
    Note that <a href="/DMC2:Trish">Trish</a> can only run from a cleard file. Her sub-category is split to pick between <a href="/DMC2:Lucia">Lucia</a> route or <a href="/DMC2:Dante">Dante</a>. </dl>
    
    <h2 id="Getting_Started">Getting Started</h2>

<dl id="extralinks"><ul><li>Visit the <a href="/DMC2:Getting_Started">Getting Started</a> page for information on how to get started with DMC2 speedrunning.</li>
    <li>Refer to the <a href="#Rules">General Rules</a> for rules that apply to all categories of DMC2 speedrunning.</li>
    <li>Check the <a href="/DMC2:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a> if you have general questions regarding methods and strategies used in DMC2 speedruns.</li>
</dl> 

<h2 id="Rules">Rules</h2>

<dl id="extralinks">
    <?php echo '(These rules apply to all DMC2 speedrun categories. Each category also has its own set of rules in addition
    to the one listed here.)'
?>
    <ul>
    <li>The offical run time is counted as the <a href="#">Real Time Attack (RTA)</a>.
    <li>Timer starts when you select New Game (the "Devil May Cry" audio cue will play).</li>
    <li>Submissions must contain all footage for the run provided.</li>
    <li>Region is needed for PS2 runs.</li>
    <li>Any modifications to the game that affect the gameplay itself is not allowed.</li>
    </ul>
</dl>

<h2 id="External_Resources">External Resources</h2>

<dl id="extralinks">
    <ul>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Speedrun Glossary</a> on SpeedRunsLive</li>
        <li><a href="https://en.wikipedia.org/wiki/Devil_May_Cry_2" target="_blank">Devil May Cry 2</a> at Wikipedia</li>
        <li><a href="https://devilmaycry.fandom.com/wiki/Devil_May_Cry_2" target="_blank">Devil May Cry 2 Fandom Wiki</a></li>
        <li><a href="https://www.speedrun.com/dmc2" target="_blank">Devil May Cry 2 Leaderboards</a> at speedrun.com</li>
    </ul>
</dl>


<div id="clearit"></div>
</div> <!-- this is the end of content -->
</div>
@endsection