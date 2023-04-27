@extends('Layout')
@section('title', 'DmC: Devil May Cry')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/ImageTab.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

<div id = "content">
    <div id = "right">
        <div class ="wrapper">
            <div class="buttonWrapper">
                <button class="tab-button" data-id="vanilla">Vanilla</button>
                <button class="tab-button active" data-id="se">Definitive Edition</button>
            </div>
        <div class ="contentWrapper">
        <table class="infobox content" id="vanilla">
            <tbody><tr>
            <th colspan="2" style="text-align: center;"><i><b>DmC: Devil May Cry</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMCDMCbox.png" width="270" height="384" />
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
            <td>LRT</td>
            </td></tr>
            <tr>
                <td rowspan="2"><b>Framerate</b>
                </td>
                <td>PC - Uncapped
                </td></tr>
                <tr>
                <td>PS3/XBox 360 - 30
                </td></tr>
            <tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
                </td></tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
                </td></tr></tbody></table>
            <table class="infobox content active" id="se">
                <tbody><tr>
                <th colspan="2" style="text-align: center;"><i><b>DmC: Devil May Cry: Definitive Edition</b></i>
                </th></tr>
                <tr>
                <th colspan="2"> 
                    <img src="images/DMCDMCDEbox.png" width="270" height="384" />
                </th></tr>
                <tr>
                <td rowspan="2"><b>Main platforms</b>
                </td>
                <td>PS5/PS4
                </td></tr>
                <tr>
                <td>Xbox One/Series
                </td></tr>
                <tr>
                <td><b>Timing</b>
                </td>
                <td>RTA</td>
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
    </div>
</div>
    <div id = "left">
    	<h1>DmC: Devil May Cry</h1>
        <p>DmC: Devil May Cry is a 2013 action-adventure game developed by Ninja Theory and published by Capcom. A parallel game to the mainline Devil May Cry series.
            A DLC expansion for the game, titled Vergil's Downfall was released on 23 March 2013.</p>
        <p>In 2015, a remastered edition of the full game was released known as DmC: Definitive Edition with the significant improvements. The game runs at 60 framerate and includes all downloadable content.
            Gameplay features were massively overhauled. This release is still exclsuive to PlayStation 4 and Xbox One.</p>
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


<dl id="extralinks"> You will have a choice between these characters <a href="/DmC:Dante">Dante</a> and <a href="/DmC:Trish">Vergil</a> then pick their respective categories:

    <ul><li><b>New Game</b> - Beat the game as fast as possible from a new file.</li>
        <li><b>New Game+</b> - Beats the game as fast as possible from a cleared file.</li>
    </ul>
    <a href="/DmC:Dante">Dante</a> has his categories split between Any% and No Major Glitches
    <ul>
    <li><b>Any%</b> - any means necessary without any restriction</li>
    <li><b>No Major Glitches</b> - Limited to using the game's mechanics any forms of Out of Bounds Wall Break and such are not allowed</li></dl>
    
    <h2 id="Getting_Started">Getting Started</h2>

<dl id="extralinks"><ul><li>Visit the <a href="/DmC:Getting_Started">Getting Started</a> page for information on how to get started with DmC speedrunning.</li>
    <li>Refer to the <a href="#Rules">General Rules</a> for rules that apply to all categories of DmC speedrunning.</li>
    <li>Check the <a href="/DmC:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a> if you have general questions regarding methods and strategies used in DmC speedruns.</li>
</dl> 

<h2 id="Rules">Rules</h2>

<dl id="extralinks">
    <?php echo '(These rules apply to all DmC speedrun categories. Each category also has its own set of rules in addition
    to the one listed here.)'
?>
    <ul>
    <li>Definitive Edition run time is counted as the <a href="#">Real Time Attack (RTA)</a>.
    <li>Vanilla run time is counted as the <a href="#">Load Time Removal (LRT)</a>.
    <li>Timer starts when confirming the “Start Mission” prompt after selecting Start Mission on the Mission 1 menu screen.</li>
    <li>Submissions must contain all footage for the run provided including difficulty choice.</li>
    <li>Any modifications to the game that affect the gameplay itself is not allowed.</li>
    </ul>
</dl>

<h2 id="External_Resources">External Resources</h2>

<dl id="extralinks">
    <ul>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Speedrun Glossary</a> on SpeedRunsLive</li>
        <li><a href="https://en.wikipedia.org/wiki/DmC:_Devil_May_Cry" target="_blank">DmC: Devil May Cry</a> at Wikipedia</li>
        <li><a href="https://devilmaycry.fandom.com/wiki/DmC:_Devil_May_Cry" target="_blank">DmC: Devil May Cry Fandom Wiki</a></li>
        <li><a href="https://www.speedrun.com/dmc2" target="_blank">DmC: Devil May Cry Leaderboards</a> at speedrun.com</li>
        <li><b>DmC: Devil May Cry Leaderboards</b> at speedrun.com:</li>
        <ul>
        <li><b>Vanilla</b> - <a href="https://www.speedrun.com/dmcdmc" target="_blank">Main Board</a> / <a href="https://www.speedrun.com/vergils_downfall" target="_blank">Vergil's Downfall</a></li>
        <li><b>Definitive Edition</b> - <a href="https://www.speedrun.com/dmcdmcde" target="_blank">Main Board</a> / <a href="https://www.speedrun.com/vergils_downfall_definitive_edition" target="_blank">Vergil's Downfall</a></li>
        </ul>
    </ul>
</dl>


<div id="clearit"></div>
</div> <!-- this is the end of content -->
</div>
@endsection