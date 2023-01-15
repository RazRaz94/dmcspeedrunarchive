@extends('Layout')
@section('title', '100%')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">


<link rel="stylesheet" href="{{asset('css/ToggleableTabs.css')}}">

<div id = "content">
    <div id = "left">
    <h1>100%</h1>
    <dl id="extralinks"><b><a href="/DMC1">Devil May Cry</a> 100%</b> {{'is a speedrun category in which the player tries to complete the game as fast as possible in addition to
    fully clearing the game.'}}
    <a href="/Glitch">Glitches</a> {{'such as Shadow despawn are all allowed. Using other programs to affect the game or modifying the game with mod is not allowed.'}}
    </dl>
    
    <dl id="extralinks">    {{'The leaderboards for this category are available'}} <a href="#/">here.</a> </dl>

    <div id="toc_container">
        <p class="toc_title">Contents</p>
        <ul class="toc_list">
          <li><a href="#Leaderboards_&_Categories">Objectives</a></li>
          <li><a href="#Getting_Started">Tracker</a></li>
          <li><a href="#Tricks">Routes</a></li>
          <li><a href="#Rules">Rules</a></li>
        </ul>
        </div>

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
    </div>
</div> <!--- This is End of Content --->



@endsection