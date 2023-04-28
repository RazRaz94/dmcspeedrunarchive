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
              <th>Estimated possible time</th>
              <th>Current Record</th>
              <th>Runner</th>
              <th>VoD</th>
              </tr>
              <tr>
                <td>SDA Classic  < link</td>
                <td>37:37</td>
                <td>37:35</td>
                <td>Maxylobes</td>
                <td>YouTube icon</td>
              </tr>
              <tr>
                <td>Beginner's Route  < link</td>
                <td>40:30</td>
                <td>41:35</td>
                <td>Zetta</td>
                <td>YouTube icon</td>
              </tr>
              <tr>
                <td>IGT Route</td>
                <td>42:30</td>
                <td>43:35</td>
                <td>Bread</td>
                <td>YouTube icon</td>
              </tr>
            </table>
            <table class="content active" id="normal">
                <tr>
                  <th>Route</th>
                  <th>Estimated possible time</th>
                  <th>Current Record</th>
                  <th>Runner</th>
                  <th>VoD</th>
                  </tr>
                  <tr>
                    <td>Break down < link</td>
                    <td>37:37</td>
                    <td>37:35</td>
                    <td>Maxylobes</td>
                    <td>YouTube icon</td>
                  </tr>
                  <tr>
                    <td>Beginner's Route  < link</td>
                    <td>40:30</td>
                    <td>41:35</td>
                    <td>Zetta</td>
                    <td>Twitch icon</td>
                  </tr>
                  <tr>
                    <td>Waifu Route  < link</td>
                    <td>42:30</td>
                    <td>43:35</td>
                    <td>Bread</td>
                    <td>YouTube icon</td>
                  </tr>
                </table>
                <table class="content" id="dantemustdie">
                    <tr>
                      <th>Route</th>
                      <th>Estimated possible time</th>
                      <th>Current Record</th>
                      <th>Runner</th>
                      <th>VoD</th>
                      </tr>
                      <tr>
                        <td>Screw Autos < link</td>
                        <td>37:37</td>
                        <td>37:35</td>
                        <td>Maxylobes</td>
                        <td>YouTube icon</td>
                      </tr>
                      <tr>
                        <td>Beginner's Route  < link</td>
                        <td>40:30</td>
                        <td>41:35</td>
                        <td>Zetta</td>
                        <td>Twitch icon</td>
                      </tr>
                      <tr>
                        <td>Waifu Route  < link</td>
                        <td>42:30</td>
                        <td>43:35</td>
                        <td>Bread</td>
                        <td>YouTube icon</td>
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