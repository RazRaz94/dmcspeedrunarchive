@extends('Layout')
@section('title', 'Main Page')
@section('content')
<link rel="stylesheet" href="{{asset('css/Home.css')}}">
<div id = "content">
	<div id = "banner">
        <h1 id="page">Main Page</h1>
        <img alt = "Home banner" src="{{asset('images/DMCLogo.png')}}">
    </div>
	
    <div id = "left">
    	<h1>For all your DMC Speedrunning needs!</h1>
		<p> Welcome to the brand new DMC Speedruns Archive. This website is established in January 2023 as a community
            hub for people seeking information about speedrunning the various Devil May Cry games.
        </p>
        <dl>
        <dt>Events</dt>
        <dd>The DMC3 Peak of Darkness Speedrun Tournament on November 13-14, 2021 </dd>
        </dl>
        <img id="icon" alt="issue" src="{{asset('images/race-runner.png')}}">
        <br><br>
        <ul>
        <li><a href="/community">Community</a></li>
        <li><a href="/helpout">Help Out!</a></li>
        <li><a href="https://discord.gg/PAabkkvY">Discord</a></li>
        </ul>
	</div> <!-- the end of left div -->
	<div id = "right">
    	<h1><span></span>Devil May Run</h1>
        <img class="photo" src="{{asset('images/DMC twitch icon.png')}}">
        <p> Make sure you follow the twitch page for DMCSpeedruns! </p>
        <p class="link"><a href="https://www.twitch.tv/dmcspeedruns">Twitch</a></p>
        <h1>  Weekly Race Schedule </h1>
        <p>We should be providing race schedules and tournament announcement here soon.</p>
        <div id = "clean"></div> <!-- clean div -->
        <img id="img2" src="images/bull.png">
        <h3>News</h3>
        <p>Important dates for the DMCSpeedruns</p>
        <p class="link"><a href="/NewsArchive">Click here</a></p>
        </div> <!-- the end of right div -->
        <br>
        <div id="GameWrap">
            <fieldset>
                <legend>Games List</legend>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
            <a href="/DMC1"><img src="{{asset('images/DMC1GameList.png')}}"></a>
            <div style="padding:5px; font-size: 1.5em;">
            <a href="/DMC1"><strong>Devil May Cry </strong></a>
            </div>
            <div style="border-bottom: 1px solid #777;">
            </div>
            <div style="margin:2px; font-size: 1.0em line-height:1.15;">
            <p><a href="/DMC1#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
            <p><a href="https://www.speedrun.com/dmc"><strong>Leaderboards</strong></a></p>
            </div>
            </div>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
                <a href="/DMC2"><img src="{{asset('images/DMC2GameList.png')}}"></a>
                <div style="padding:5px; font-size: 1.5em;">
                <a href="/DMC2"><strong>Devil May Cry 2</strong></a>
                </div>
                <div style="border-bottom: 1px solid #777;">
                </div>
                <div style="margin:2px; font-size: 1.0em line-height:1.15;">
                <p><a href="/DMC2#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc2"><strong>Leaderboards</strong></a></p>
                </div>
            </div>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
                <a href="/DMC3"><img src="{{asset('images/DMC3GameList.png')}}"></a>
                <div style="padding:5px; font-size: 1.5em;">
                <a href="/DMC3"><strong>Devil May Cry 3</strong></a>
                </div>
                <div style="border-bottom: 1px solid #777;">
                </div>
                <div style="margin:2px; font-size: 1.0em line-height:1.15;">
                <p><a href="/DMC3#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc3se"><strong>Leaderboards</strong></a></p>
                </div>
            </div>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
                <a href="/DMC4"><img src="{{asset('images/DMC4GameList.png')}}"></a>
                <div style="padding:5px; font-size: 1.5em;">
                <a href="/DMC4"><strong>Devil May Cry 4</strong></a>
                </div>
                <div style="border-bottom: 1px solid #777;">
                </div>
                <div style="margin:2px; font-size: 1.0em line-height:1.15;">
                <p><a href="/DMC4#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc4se"><strong>Leaderboards SE</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc4"><strong>Leaderboards OG</strong></a></p>
                </div>
            </div>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
                <a href="/DmC"><img src="{{asset('images/DMCDMCGameList.png')}}"></a>
                <div style="padding:5px; font-size: 1.5em;">
                <a href="/DmC"><strong>DmC</strong></a>
                </div>
                <div style="border-bottom: 1px solid #777;">
                </div>
                <div style="margin:2px; font-size: 1.0em line-height:1.15;">
                <p><a href="/DmC#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
                <p><a href="https://www.speedrun.com/dmcdmcde"><strong>Leaderboards DE</strong></a></p>
                <p><a href="https://www.speedrun.com/dmcdmc"><strong>Leaderboards OG</strong></a></p>
                </div>
            </div>
            <div id="GameList" style="float:right;width:240px; text-align: center;">
                <a href="/DMC5"><img src="{{asset('images/DMC5GameList.png')}}"></a>
                <div style="padding:5px; font-size: 1.5em;">
                <a href="/DMC5"><strong>Devil May Cry 5</strong></a>
                </div>
                <div style="border-bottom: 1px solid #777;">
                </div>
                <div style="margin:2px; font-size: 1.0em line-height:1.15;">
                <p><a href="/DMC5#Leaderboards_&_Categories"><strong>Categories & Routes</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc5se"><strong>Leaderboards SE</strong></a></p>
                <p><a href="https://www.speedrun.com/dmc5"><strong>Leaderboards OG</strong></a></p>
                </div>
            </div>
        </fieldset>
        </div>
<div id="clearit"></div>
</div> <!-- this is the end of content -->
@endsection