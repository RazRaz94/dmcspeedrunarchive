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
        <h2>Games List</h2>
        <ul>
        <li><a href="/DMC1">Devil May Cry</a></li>
        <li><a href="/DMC2">Devil May Cry 2</a></li>
        <li><a href="/DMC3">Devil May Cry 3</a></li>
        <li><a href="/DMC4">Devil May Cry 4</a></li>
        <li><a href="/DmC">DmC: Devil May Cry</a></li>
        <li><a href="/DMC5">Devil May Cry 5</a></li>
        </ul>
	</div> <!-- the end of left div -->
	<div id = "right">
    	<h1><span></span>Devil May Run</h1>
        <img class="photo" src="{{asset('images/DMC twitch icon.png')}}">
        <p> Make sure you follow the twitch page and Discord for DMCSpeedruns! </p>
        <p class="link"><a href="https://twitter.com/DmcSpeedruns">Twitter</a> <a href="https://www.twitch.tv/dmcspeedruns">Twitch</a></p>
        <h1>  Weekly Race Schedule </h1>
        <p>If you have plan organize events. Feel free to join the Discord </p>
        <div id = "clean"></div> <!-- clean div -->
        <img src="images/bull.png">
        <h3>News</h3>
        <p>Important dates for the DMCSpeedruns</p>
        <p class="link"><a href="/NewsArchive">Click here</a></p>
        </div> <!-- the end of right div -->
<div id="clearit"></div>
</div> <!-- this is the end of content -->
@endsection