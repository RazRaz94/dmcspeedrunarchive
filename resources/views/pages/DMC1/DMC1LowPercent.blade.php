@extends('Layout')
@section('title', 'Low%')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/ToggleableTabs.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

<div id = "content">
    <div id = "left">
        <h1>Low%</h1>
        {{ Breadcrumbs::render('Low') }}
        <dl id="extralinks"><b><a href="/DMC1">Devil May Cry</a> Low%</b> {{'is a speedrun category in which the player must follow the stipulations, while using certain
        actions within the game as little as possible.'}}
            <a href="/Glitch">Glitches</a> {{'such as Shadow despawn are all allowed. Using other programs to affect the game or modifying the game with mod is not allowed.'}}
        
            </dl>

            {{'The stipulations for completing Low% are:'}}
            <ul>
                <li>No picking up weapons/unique items that aren't mandatory (shotgun, grenadegun, nightmare beta, bangle of time)</li>
                <li>No picking up or buying blue orbs/fragments</li>
                <li>No buying purple orbs</li>
                <li>No buying upgrades for weapons</li>
                <li>No completing secret missions</li>
            </ul>
            
            <dl id="extralinks">{{'The leaderboards for this category are available'}} <a href="#/">here.</a> </dl>

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
                <li>{{"You need to follow all the stipulations listed above throughout the entire game."}}</li>
                <li>{{"Play under the respective difficulty that you're running on."}}</li>
                <li><a href="/Glitch">Glitches</a>, {{"and any sort of gameplay exploits are allowed."}}</li>
            </ul>
                </dl>

                <h2>Learning</h2>

                <dl id="extralinks">{{"Low% is mostly known as a challenge run. In most cases, runners would be interested
                in this category after they acquired enough practical understanding of this game."}}
                <ul>
                  <li>{{'Make savefiles before each part that you probably have issues with. You can backup and copy the savefiles
                  (generally in <Steam-folder>\userdata\<user-id>\631510\remote\) into a seperate folder.'}}</li>
                  <li>{{'Make splits. Download a program like'}} <a href="https://livesplit.org/" target="_blank"><b>Livesplit</b></a>
                    {{'and setup your splits. It does not matter how bad they are in your first run.'}}</li>
                </ul>
                {{"Once you have completed your first run and made savefiles practice the parts you are least confident with then try another run.
                When you get more confident you should stop getting safety routes and start tighten your currency."}}
                       </dl>
                      </div>
                      <div id="clearit"></div>
                      </div>
                  @endsection