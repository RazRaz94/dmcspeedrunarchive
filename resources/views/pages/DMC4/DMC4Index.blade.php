@extends('Layout')
@section('title', 'Devil May Cry 4')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/ImageTab.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

<div id = "content">
    <div id = "right">
        <div class ="wrapper">
            <div class="buttonWrapper">
                <button class="tab-button" data-id="vanilla">Vanilla</button>
                <button class="tab-button active" data-id="se">Special Edition</button>
            </div>
        <div class ="contentWrapper">
        <table class="infobox content" id="vanilla">
            <tbody><tr>
            <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 4</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMC4box.png" width="270" height="384" />
            </th></tr>
            <tr>
                <td rowspan="2"><b>Main platforms</b>
                </td>
                <td>PC
                </td></tr>
                <tr>
                <td>PS3/XBox 360
                </td></tr>
            <td><b>Timing</b>
            </td>
            <td>RTA</td>
            </td></tr>
            <tr>
                <td rowspan="2"><b>Framerate</b>
                </td>
                <td>PC - 120
                </td></tr>
                <tr>
                <td>PS3/XBox 360 - 60
                </td></tr>
            <tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
                </td></tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
                </td></tr></tbody></table>
            <table class="infobox content active" id="se">
                <tbody><tr>
                <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 4: Special Edition</b></i>
                </th></tr>
                <tr>
                <th colspan="2"> 
                    <img src="images/DMC4SEbox.png" width="270" height="384" />
                </th></tr>
                <tr>
                <td rowspan="2"><b>Main platforms</b>
                </td>
                <td>PC
                </td></tr>
                <tr>
                <td>PS4/Xbox One
                </td></tr>
                <td rowspan="2"><b>Timing</b>
                </td>
                <td>LRT - PC </td>
                </td></tr>
                <td>RTA - Console </td>
                </td></tr>
                <tr>
                    <td rowspan="2"><b>Framerate</b>
                    </td>
                    <td>PC - 120
                    </td></tr>
                    <tr>
                    <td>PS4/Xbox One - 60
                    </td></tr>
                <tr>
                <tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
                </td></tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
                </td></tr></tbody></table>
            </div>
    </div>
</div>
    <div id = "left">
    	<h1>Devil May Cry 4</h1>
        {{ Breadcrumbs::render('DMC4') }}
        <p>Devil May Cry 4 is a 2008 action-adventure game developed and published by Capcom. It was remastered in 2015
            as Devil May Cry 4: Special Edition, featuring new playable characters and polished gameplay. This wiki focuses mainly on the Special Edition version.</p>
        <p>Note: The World Record Progression / best segemented time is shared with both releases.</p>
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


<dl id="extralinks"> You will have a choice between these characters <a href="/DMC4:Nero_Dante">Nero/Dante</a>, <a href="/DMC4:Vergil">Vergil</a> and
    <a href="/DMC2:Lady_Trish">Lady/Trish</a> then pick their respective categories:

    <ul><li><b>New Game</b> - Beats the game as fast as possible from a new file.</li>
        <li><b>New Game+</b> - Beats the game as fast as possible from a cleared file.</li>
    </ul>
    In Vanilla, you can use the items which is avaliable on <a href="/DMC4:Nero_Dante">Nero/Dante</a> only. Special Edition New Game+ is categorized as No Items.</dl>
    
    <h2 id="Getting_Started">Getting Started</h2>

<dl id="extralinks"><ul><li>Visit the <a href="/DMC4:Getting_Started">Getting Started</a> page for information on how to get started with DMC4 speedrunning.</li>
    <li>Refer to the <a href="#Rules">General Rules</a> for rules that apply to all categories of DMC4 speedrunning.</li>
    <li>Check the <a href="/DMC4:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a> if you have general questions regarding methods and strategies used in DMC4 speedruns.</li>
</dl> 

<h2 id="Rules">Rules</h2>

<dl id="extralinks">
    <?php echo '(These rules apply to all DMC4 speedrun categories. Each category also has its own set of rules in addition
    to the one listed here.)'
?>
    <ul>
    <li>PC runs are ranked by <a href="#">Load Time Removal (LRT)</a> while Console are <a href="#">Real Time Attack (RTA)</a>.
    <li>In Vanilla, the offical run time is counted as the <a href="#">Real Time Attack (RTA)</a>.
    <li>Submissions must contain all footage for the run provided.</li>
    <li>Any modifications to the game that affect the gameplay itself is not allowed.</li>
    </ul>
</dl>

<h2 id="External_Resources">External Resources</h2>

<dl id="extralinks">
    <ul>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Speedrun Glossary</a> on SpeedRunsLive</li>
        <li><a href="https://en.wikipedia.org/wiki/Devil_May_Cry_4" target="_blank">Devil May Cry 4</a> at Wikipedia</li>
        <li><a href="https://devilmaycry.fandom.com/wiki/Devil_May_Cry_4" target="_blank">Devil May Cry 4 Fandom Wiki</a></li>
        <li><a href="https://speeddemosarchive.com/DevilMayCry4.html" target="_blank">Devil May Cry 4</a> at SpeedDemosArchive</li>
        <li><b>Devil May Cry 4 Leaderboards</b> at speedrun.com:</li>
        <ul>
        <li><a href="https://www.speedrun.com/dmc4" target="_blank">Vanilla</a></li>
        <li><a href="https://www.speedrun.com/dmc4se" target="_blank">Special Edition</a></li>
        </ul>
    </ul>
</dl>


<div id="clearit"></div>
</div> <!-- this is the end of content -->
</div>
@endsection