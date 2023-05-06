@extends('Layout')
@section('title', 'Devil May Cry 5')
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
            <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 5</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMC5box.png" width="270" height="384" />
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
                <td>LRT - PC
                </td></tr>
                <tr>
                <td>RTA - PS4/Xbox One
                </td></tr>
            <tr>
                <td rowspan="2"><b>Framerate</b>
                </td>
                <td>PC - 120
                </td></tr>
                <tr>
                <td>PS4/XBox One - 60
                </td></tr>
            <tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
                </td></tr>
                <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
                </td></tr></tbody></table>
            <table class="infobox content active" id="se">
                <tbody><tr>
                <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 5: Special Edition</b></i>
                </th></tr>
                <tr>
                <th colspan="2"> 
                    <img src="images/DMC5SEbox.png" width="270" height="384" />
                </th></tr>
                <tr>
                <td><b>Main platforms</b>
                </td>
                <td>PS5/Xbox Series
                </td></tr>
                <tr>
                <td><b>Timing</b>
                </td>
                <td>RTA</td>
                </td></tr>
                <tr>
                    <td><b>Framerate</b>
                    </td>
                    <td>120
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
    	<h1>DEVIL MAY CRY 5</h1>
        {{ Breadcrumbs::render('DMC5') }}
        <p>Devil May Cry 5 is a 2019 action-adventure game developed and published by Capcom. It is the sixth installment overall and the fifth mainline installment in the Devil May Cry series.
            Released in March 2019.</p>
            <p>In 2020, Devil May Cry 5 received expansion with Special Edition version which is exclusive for Xbox Series X/S and PlayStation 5. This version features the addition of Vergil as a playable character and new gameplay modes such as
                Legendary Dark Knight and turbo. Released in November.</p>
            <p>The original release had Vergil as paid downloadable content.</p>


        </p>
        <div id="toc_container">
<p class="toc_title">Contents</p>
<ul class="toc_list">
  <li><a href="#Leaderboards_&_Categories">Leaderboards & Categories</a></li>
  <li><a href="#Getting_Started">Getting Started</a></li>
  <li><a href="#Rules">Rules</a></li>
  <li><a href="#External_Resources">External Resources</a></li>
</ul>
</div>

<div id = "mobile">
    <table class="infobox">
        <tbody><tr>
        <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 5</b></i>
        </th></tr>
        <tr>
        <th colspan="2"> 
            <img src="images/DMC5box.png" width="270" height="384" />
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
            <td>LRT - PC
            </td></tr>
            <tr>
            <td>RTA - PS4/Xbox One
            </td></tr>
        <tr>
            <td rowspan="2"><b>Framerate</b>
            </td>
            <td>PC - 120
            </td></tr>
            <tr>
            <td>PS4/XBox One - 60
            </td></tr>
        <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
            </td></tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
            </td></tr></tbody></table>
            <br>
        <table class="infobox">
            <tbody><tr>
            <th colspan="2" style="text-align: center;"><i><b>Devil May Cry 5: Special Edition</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMC5SEbox.png" width="270" height="384" />
            </th></tr>
            <tr>
            <td><b>Main platforms</b>
            </td>
            <td>PS5/Xbox Series
            </td></tr>
            <tr>
            <td><b>Timing</b>
            </td>
            <td>RTA</td>
            </td></tr>
            <tr>
                <td><b>Framerate</b>
                </td>
                <td>120
                </td></tr>
            <tr>
            <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">Best Segmented Times</a></b>
            </td></tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b><a href="/sample">WR Progression Timeline </a></b>
            </td></tr></tbody></table>
</div>


<h2 id="Leaderboards_&_Categories">Leaderboards & Categories</h2>


<dl id="extralinks"> You will have a choice between these characters <a href="/DMC5:Nero/V/Dante">Nero/V/Dante</a> and <a href="/DMC5:Vergil">Vergil</a> then pick their respective categories:

    <ul><li><b>New Game</b> - Beats the game as fast as possible from a new file.</li>
        <li><b>New Game+</b> - Beats the game as fast as possible from a cleared file.</li>
    </ul></dl>
    
    <h2 id="Getting_Started">Getting Started</h2>

<dl id="extralinks"><ul><li>Visit the <a href="/DMC5:Getting_Started">Getting Started</a> page for information on how to get started with DMC5 speedrunning.</li>
    <li>Refer to the <a href="#Rules">General Rules</a> for rules that apply to all categories of DMC5 speedrunning.</li>
    <li>Check the <a href="/DMC5:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a> if you have general questions regarding methods and strategies used in DMC5 speedruns.</li>
</dl> 

<h2 id="Rules">Rules</h2>

<dl id="extralinks">
    <?php echo '(These rules apply to all DMC5 speedrun categories. Each category also has its own set of rules in addition
    to the one listed here.)'
?>
    <ul>
    <li>Vanilla run time is counted as the <a href="#">Real Time Attack (RTA)</a>.</li>
    <li>Special Edition run time is counted as the <a href="#">Load Time Removal (LRT)</a>.</li>
    <li>Timer starts when selecting your character after selecting “New Game,” and stops on the final hit of Mission 20.</li>
    <li>Submissions must contain all footage for the run provided.</li>
    <li>Orb count must be unobscured during the run.</li>
    <li>Using turbo controllers, Macros, or Mods is not allowed.</li>
    <li>Any modifications to the game that affect the gameplay itself is not allowed.</li>
    </ul>
</dl>

<h2 id="External_Resources">External Resources</h2>

<dl id="extralinks">
    <ul>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Speedrun Glossary</a> on SpeedRunsLive</li>
        <li><a href="https://en.wikipedia.org/wiki/Devil_May_Cry_5" target="_blank">Devil May Cry 5</a> at Wikipedia</li>
        <li><a href="https://devilmaycry.fandom.com/wiki/Devil_May_Cry_5" target="_blank">Devil May Cry 5 Fandom Wiki</a></li>
        <li><b>Devil May Cry 5 Leaderboards</b> at speedrun.com</li>
        <ul>
            <li><a href="https://www.speedrun.com/dmc5" target="_blank">Vanilla</a></li>
            <li><a href="https://www.speedrun.com/dmc5se" target="_blank">Special Edition</a></li>
            </ul>
        </ul>
    </ul>
</dl>


<div id="clearit"></div>
</div> <!-- this is the end of content -->
</div>
@endsection