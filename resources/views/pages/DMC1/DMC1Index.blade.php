@extends('Layout')
@section('title', 'Devil May Cry')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/Modal.css')}}">
<script src="{{asset('js/Modal.js')}}"></script>

<div id = "content">
    <div id = "right">
        <table class="infobox">
            <tbody><tr>
            <th colspan="2" style="text-align: center;"><i><b>Devil May Cry</b></i>
            </th></tr>
            <tr>
            <th colspan="2"> 
                <img src="images/DMC1box.png" width="270" height="384" />
            </th></tr>
            <tr>
            <td rowspan="2"><b>Main platforms</b>
            </td>
            <td>PC
            </td></tr>
            <tr>
            <td>PS4/XBox One
            </td></tr>
            <td><b>Timing</b>
            </td>
            <td>LRT
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
    	<h1>DEVIL MAY CRY (2001)</h1>
        <p>Devil May Cry is a 2001 action-adventure game developed by Capcom Production Studio and published by Capcom. Released from August to Decemberit is the first installment in the Devil May Cry series.</p>
        <div id="toc_container">
<p class="toc_title">Contents</p>
<ul class="toc_list">
  <li><a href="#Leaderboards_&_Categories">Leaderboards & Categories</a></li>
  <li><a href="#Getting_Started">Getting Started</a></li>
  <li><a href="#Tricks">Tricks</a></li>
  <li><a href="#Rules">Rules</a></li>
  <li><a href="#External_Resources">External Resources</a></li>
</ul>
</div>


<h2 id="Leaderboards_&_Categories">Leaderboards & Categories</h2>


<dl id="extralinks"><ul><li><a href="/DMC1:Any">Any%</a> - Beats the game as fast as possible.</li>
    <li><a href="/DMC1:All">100%</a> - All permanent upgrades must be purchased, weapons, secret missions must be completed. All Missions must end with S rank before beating the game</li>
    <li><a href="/DMC1:AC">All Collectibles</a> - All Blue orbs/fragments, weapons, secret missions must be completed before beating the game</li>
    <li><a href="/DMC1:Low">Low%</a> - Beats the game without upgrades or use of weapons that aren't mandatory.</li></dl>
    
    <h2 id="Getting_Started">Getting Started</h2>

<dl id="extralinks"><ul><li>Visit the <a href="/DMC1:Getting_Started">Getting Started</a> page for information on how to get started with DMC1 speedrunning.</li>
    <li>Refer to the <a href="#Rules">General Rules</a> for rules that apply to all categories of DMC1 speedrunning.</li>
    <li>Check the <a href="/DMC1:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a> if you have general questions regarding methods and strategies used in DMC1 speedruns.</li>
    <li>Helpful Utilities:
        <ul><li><a href="/Input_Displays">Input Displays</a></li>
            <li><a href="/DMC1:Turbo">Turbo Setup</a></li>
            <li><a href="https://www.speedrun.com/resourceasset/5v4dr"> Doorsplitter Splits</a></li>
        </ul>
    </li></dl> 

    
<h2 id="Tricks">Tricks</h2>
<dl> {{'There are number of Strategies and movement tricks that can significantly shorten the amount of time needed to progress through the
amount of time needed to progress through the game. Devil May Cry 1 is a heavily scripted game so the following list is only a selection of possible
strats most often used in speedruns'}} </dl>

<h3>Movement</h3>

<dl id="extralinks"><ul>
    @foreach($Movement as $key)
    <li><a href="#/" id="myBtn">{{$key['title']}}</a>  - {{$key['description']}}</li>
    @endforeach
</ul>
</dl>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Horse Jump</h2>
      </div>
      <div class="modal-body">
        <img src="{{asset('images/DMC1Files/horse.gif')}}">
        <p>The horse Jump is a movement trick in DMC that allows the player to instantly gain required currency to open the red door.
            Run straight down the middle of the staircase, do a half tap jump then a full hold jump to get on the horse. Turn towards the spear and then do a stationary wall hike.
            Do not move the stick because dante will move forward on his own.</p>
      </div>
      
  </div>
</div>

<h3>Combat</h3>

<dl id="extralinks"><ul>
    <li><a href="#">Slash Cancel</a> - Mauris feugiat tortor ac aliquet consectetur.</li>
    <li><a href="#">Roll Cancel</a> - Maecenas id metus placerat, sodales enim sit amet, pulvinar justo.</li>
    <li>Aenean vitae tortor ut massa fringilla rutrum.</li>
    <li>Donec rutrum nisl sed erat tempus ullamcorper et ut odio.</li>
    <li>Pellentesque congue erat non magna aliquet tincidunt.</li>
    <li>Sed quis nulla vitae leo congue sodales sed sed nibh.</li>
    </ul>
</dl>

<h3>Bosses</h3>

<dl id="extralinks"><ul>
    <li><a href="/DMC1:Phantom">Phantom</a></li>
    <li><a href="/DMC1:Nelo">Nelo Angelo</a></li>
    <li><a href="#">Griffon</a></li>
    <li><a href="/DMC1:Nightmare">Nightmare</a></li>
    <li><a href="#">Mundus</a></li>
    </ul>
</dl>

<h3>Miscellaneous</h3>

<dl id="extralinks"><ul>
    <li><a href="#">Save Quit</a> - Mauris feugiat tortor ac aliquet consectetur.</li>
    <li>Aenean vitae tortor ut massa fringilla rutrum.</li>
    <li>Donec rutrum nisl sed erat tempus ullamcorper et ut odio.</li>
    <li>Pellentesque congue erat non magna aliquet tincidunt.</li>
    <li>Sed quis nulla vitae leo congue sodales sed sed nibh.</li>
    </ul>
</dl>

<h2 id="Rules">Rules</h2>

<dl id="extralinks">
    <?php echo '(These rules apply to all DMC1 speedrun categories. Each category also has its own set of rules in addition
    to the one listed here.)'
?>
    <ul>
        <li>The offical run time is counted as the <a href="#">Load Time Removal (LRT)</a>.<ul>
            <li>PC runs can activate autosplitter by Mysterion_06 in livesplit and compare against game time for LRT.</li>
            <li>Console runs will be calculated by moderators upon submission.</ul></li>
    <li>World record submissions require a twitch VOD. PC runs require <a href="/Input_Displays">Input Displays</a> for all inputs.</li>
    <li><a href="/DMC1:Turbo">Turbo Macros or Controllers</a> are only allowed in Dante Must Die difficulty.</li>
    <li>Timer starts when you select difficulty (the "Devil May Cry" audio cue will play).</li>
    <li>Total Result screen at the end of the run which includes IGT, orb count, and mission rankings must be included in the submission.</li>
    <li>Region is needed for PS2 runs.</li>
    <li>Any modifications to the game that affect the gameplay itself is not allowed.</li>
    </ul>
</dl>

<h2 id="External_Resources">External Resources</h2>

<dl id="extralinks">
    <ul>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Speedrun Glossary</a> on SpeedRunsLive</li>
        <li><a href="https://en.wikipedia.org/wiki/Devil_May_Cry_(video_game)" target="_blank">Devil May Cry</a> at Wikipedia</li>
        <li><a href="https://devilmaycry.fandom.com/wiki/Devil_May_Cry" target="_blank">Devil May Cry Fandom Wiki</a></li>
        <li><a href="https://www.speedrunslive.com/rules-faq/glossary/" target="_blank">Devil May Cry</a> at SpeedDemosArchive</li>
        <li><a href="https://www.speedrun.com/dmc" target="_blank">Devil May Cry Leaderboards</a> at speedrun.com</li>
    </ul>
</dl>


<div id="clearit"></div>
</div> <!-- this is the end of content -->
</div>
@endsection