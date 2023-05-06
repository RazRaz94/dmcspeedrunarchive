@extends('Layout')
@section('title', 'Any%')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/ToggleableTabs.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

<div id = "content">
    <div id = "left">
    <h1>Any%</h1>
    {{ Breadcrumbs::render('Any') }}
    <dl id="extralinks"><b><a href="/DMC1">Devil May Cry</a> Any%</b> {{'is a speedrun category in which the player tries to complete the game as fast as possible. There are
    no added restrictions on how the player completes the game, they must simply start a new character and reach the final plane cutscene as quickly as they can. '}}
    <a href="/Glitch">Glitches</a> {{'such as Shadow despawn are all allowed. Using other programs to affect the game or modifying the game with mod is not allowed.'}}

    </dl>
    
    <dl id="extralinks">    {{'The leaderboards for this category are available'}} <a href="#/">here.</a> </dl>

    <h2>Routes</h2>



<div class ="wrapper">
    <div class="buttonWrapper">
        <button class="tab-button" data-id="easy">Easy</button>
        <button class="tab-button active" data-id="normal">Normal</button>
        <button class="tab-button" data-id="dantemustdie">Dante Must Die</button>
    </div>
    <div class="contentWrapper">
      <table class="content" id="easy">
        <tr>
          <th>Route</th>
          <th>Estimated Time</th>
          <th>Runner</th>
          <th>VoD</th>
          </tr>
          <tr>
            <td>Beginner</td>
            <td>40:00 - 55:00</td>
            <td>DECosmic</td>
            <td><a href="https://www.twitch.tv/videos/430522645?t=0h0m1s" target="_blank">
              <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
          </tr>
          <tr>
            <td id="extralinks"><a href="https://pastebin.com/yse0h3zh" target="_blank">Advanced</a></td>
            <td>34:00 - 40:00</td>
            <td>Out_With_A_Yang</td>
            <td><a href="https://www.twitch.tv/videos/1710213858?t=0h0m1s" target="_blank">
              <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
          </tr>
        </table>
            <table class="content active" id="normal">
                <tr>
                  <th>Route</th>
                  <th>Estimated Time</th>
                  <th>Runner</th>
                  <th>VoD</th>
                  </tr>
                  <tr>
                    <td>Beginner</td>
                    <td>45:00 - 55:00</td>
                    <td>Chad Thorsen</td>
                    <td><a href="https://www.twitch.tv/videos/795722619" target="_blank">
                      <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
                  </tr>
                  <tr>
                    <td>Intermediate</td>
                    <td>38:00 - 45:00</td>
                    <td>DECosmic</td>
                    <td><a href="https://www.twitch.tv/videos/1096674307?t=0h0m1s" target="_blank">
                      <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
                  </tr>
                  <tr>
                    <td>Zetta</td>
                    <td>45:00 - 55:00</td>
                    <td>Zetta</td>
                    <td><a href="https://www.youtube.com/watch?v=2EcG1PQ2ss8" target="_blank">
                      <img id="icon" alt="issue" src="{{asset('images/youtube.png')}}"></a></td>
                  </tr>
                  <tr>
                    <td id="extralinks"><a href="https://pastebin.com/DAUYd2Ke" target="_blank">Best Current Meta</a></td>
                    <td>35:00 - 38:00</td>
                    <td>Waifu</td>
                    <td><a href="https://www.twitch.tv/videos/1567068552?t=0h0m1s" target="_blank">
                      <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
                  </tr>
                </table>
                <table class="content" id="dantemustdie">
                  <tr>
                    <th>Route</th>
                    <th>Estimated Time</th>
                    <th>Runner</th>
                    <th>VoD</th>
                    </tr>
                    <tr>
                      <td>Standard</td>
                      <td>54:00+</td>
                      <td>Waifu</td>
                      <td><a href="https://www.twitch.tv/videos/1472527755?t=0h0m1s" target="_blank">
                        <img id="icon" alt="issue" src="{{asset('images/twitch.png')}}"></a></td>
                    </tr>
                    </table>
    </div>
</div>

    <h2>Rules</h2>
    <dl id="extralinks">{{"(The rules here are specific to this category. Go to"}} <a href="/DMC1#Rules"> <b>this page</b></a> {{"to find the rules that apply to all
    Devil May Cry speedruns.)"}}
    <ul>
        <li>{{"Play under the respective difficulty that you're running on."}}</li>
        <li><a href="/Glitch">Glitches</a>, {{"and any sort of gameplay exploits are allowed."}}</li>
    </ul>
        </dl>
    <h2>Learning</h2>

    <dl id="extralinks">{{"Learning a speedrun in Devil May Cry may seem to generate an idea of your own, but the game most of the time is heavily scripted.
    This means majority of the time you preform a combat sequence with the right pattern, it will go same every single time. To make the process easier,
    start with Normal difficulty and watch "}} <a href="https://www.youtube.com/playlist?list=PLdtB5n2OvooYvukaa7cobKYsH66gF3n46" target="_blank"><b>Tutorial videos by DECosmic</b></a>
    {{"then do an initial run through making sure to do the following things:"}}
    <ul>
      <li>{{"Follow the "}}<a href="https://shorturl.at/jwJTV" target="_blank"><b>Written supplement</b></a>{{" without checking any top runners. This helps
      you to understand the flow of the game."}}</li>
      <li>{{'Make savefiles before each part that you probably have issues with. You can backup and copy the savefiles
      (generally in <Steam-folder>\userdata\<user-id>\631510\remote\) into a seperate folder.'}}</li>
      <li>{{'Make splits. Download a program like'}} <a href="https://livesplit.org/" target="_blank"><b>Livesplit</b></a>
        {{'and setup your splits. It does not matter how bad they are in your first run.'}}</li>
    </ul>

    {{"Once you have completed your first run and made savefiles practice the parts you are least confident with then try another run.
    When you get more confident you should stop getting safety routes and start tighten your currency."}}
           </dl>
    </div>
</div> <!--- This is End of Content --->
<div id="clearit"></div>
@endsection