@extends('Layout')
@section('title', 'All Collectibles')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/ToggleableTabs.css')}}">
<link rel="stylesheet" href="{{asset('css/accordion.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

<div id = "content">
    <div id ="left">
        <h1>All Collectibles</h1>
        <dl id="extralinks"><b><a href="/DMC1">Devil May Cry</a> All Collectibles</b> {{'is a speedrun category in which the player tries to complete the game as fast as possible
        while also collecting all blue orb fragment and equipments.'}}
        <a href="/Glitch">Glitches</a> {{'such as Shadow despawn are all allowed. Using other programs to affect the game or modifying the game with mod is not allowed.'}}
        </dl>

        <dl id="extralinks">    {{'The leaderboards for this category are available'}} <a href="#/">here.</a> </dl>

        <div id="toc_container">
            <p class="toc_title">Contents</p>
            <ul class="toc_list">
              <li><a href="#Requirements">Collect Requirements</a></li>
              <li><a href="#Routes">Routes</a></li>
              <li><a href="#Rules">Rules</a></li>
              <li><a href="#Learning">Learning</a></li>
            </ul>
            </div>

            <h2 id="Requirements">Collect Requirements</h2>

            <dl id="extralinks">
                {{"All Collectibles requirement is similar to "}} <a href="/DMC1:100%">100%</a> {{"objectives, but without the need of
                 full upgrades and ending each missions with specific criteria. The following requirements are:"}}
                <ul>
                    <li>{{"Clearing all 12 secret missions "}}<sup>(1)</sup></li>
                    <li>{{"All blue orbs and blue orb fragments must be collected"}}<sup></sup></li>
                    <li>{{"All usable equipment must be collected "}}<sup>(2)</sup></li>
                </ul>
                <sup>(1) </sup>{{"All of them need to be cleared when you finish the game. The rewards you get from these missions are part of collectibles requirement,
                which is the Blue Orb Fragment. You are also allowed to Save/Quit for quick travel as long as you collect the item reward in the area.
                For example, you can go back to mission 8's entrance interval after you grab blue orb in secret mission 5."}} 

            <div class="accordion">
                <input id="tab-1" type="checkbox">
                <label for="tab-1">List of all Secret Missions to clear</label>
                <div class="ShowContent">
                <ul>
                    <li><b>Critical Hit</b> - Mission 3 after Phantom I fight</li>
                    <li><b>Phantom Baby</b> - At the start of mission 4</li>
                    <li><b>Phantom Baby II</b> - After the "Lion", back track to enter the small room with the Divinity Statue</li>
                    <li><b>The Three Beasts</b> - Beneath the airplane hangar after previous secret mission</li>
                    <li><b>One-Eyed Evil</b> -  Re-enter the room where Dante acquired the Rusty Key in mission 6. You need 13th Blue Orb Fragment to activate the mission</li>
                    <li><b>Wandering Ghosts</b> - At the start of mission 11, turn around and go back out of the door</li>
                    <li><b>Water Cell</b> - In the mission 14 interval, swim back into ship at captain's room to interact with his skeleton.</li>
                    <li><b>Treasure of the Reaper</b> - Need to be in Mission 15. Examine the skull engraving in the rotating spiked floor from Mission 14.</li>
                    <li><b>Stairway of Tranquility</b> - In Mission 16, after you exit the Coliseum, re-enter.</li>
                    <li><b>Shadow of Darkness</b> - At the biplane room after defeating Nightmare I.</li>
                    <li><b>Blue Gem in the Sky</b> - Return to the broken bridge and cross over to the Cathedral side without falling in the water. There is only one chance to do this.</li>
                    <li><b>Hidden Bangle</b> - In mission 21, find the Divinity Statue and interact with the wall.</li>
                </ul>
                </div>
            </div>
            @include('pages.DMC1.DMC1BlueOrbs')
            <br>

            <sup>(2) </sup>{{"While"}} <a href="/DMC1:Any%">Any%</a> {{"skips majority of firearms, this category requires all of them for full completion. The devilarms
  by default are mandatory progression pick."}}

<div class="accordion">
  <input id="tab-5" type="checkbox">
  <label for="tab-5">List of all equipments to collect</label>
  <div class="ShowContent">
    <ul>
      <li>Mission 2: Alastor</li>
      <li>Mission 2: Shotgun</li>
      <li>Mission 8: Grenade Gun</li>
      <li>Mission 9: Ifrit</li>
      <li>Mission 12: Needle Gun</li>
      <li>Mission 19: Nightmare-β</li>
      <li>Secret Mission 12: Bangle of Time</li>
  </ul>
  </div>
</div>
    
    </dl>

    <h2 id="Routes">Routes</h2>
    
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

<h2 id="Rules">Rules</h2>
<dl id="extralinks">{{"(The rules here are specific to this category. Go to"}} <a href="/DMC1#Rules"> <b>this page</b></a> {{"to find the rules that apply to all
Devil May Cry speedruns.)"}}
<ul>
    <li>{{"You need to complete all the requirements listed above in every mission before reaching mission 22"}}</li>
    <li>{{"Play under the respective difficulty that you're running on."}}</li>
    <li><a href="/Glitch">Glitches</a>, {{"and any sort of gameplay exploits are allowed."}}</li>
</ul>
    </dl>

    <h2 id="Learning">Learning</h2>

    <dl id="extralinks">{{"For those who are interested in"}} <a href="/DMC1:100%">100%</a> {{"category this is a good starting point."}}
    <ul>
      <li>{{"For Dante Must Die specifically, it's highly recommended and check "}} <a href="/DMC1#Tricks"> Tricks</a> {{" section regarding the boss cycles and
      if you ever get stuck or lost in certain segment, you can check Speedrun Explained video by "}}  <a href="https://youtu.be/ceZqWXbry-8" target="_blank">Waifu</a>.</li>
      <li>{{"For Normal difficulty refer to"}} <a href="https://youtu.be/uU8wcQgUgN8" target="_blank">DanSpence94's video</a>
      <li>{{"You can save during end-mission menus to secure routes with Special Bonus."}}</li>
      <li>{{'Make savefiles before each part that you probably have issues with. You can backup and copy the savefiles
      (generally in <Steam-folder>\userdata\<user-id>\631510\remote\) into a seperate folder.'}}</li>
      <li>{{'Make splits. Download a program like'}} <a href="https://livesplit.org/" target="_blank"><b>Livesplit</b></a>
        {{'and setup your splits. It does not matter how bad they are in your first run.'}}</li>
    </ul>

    {{"Once you have completed your first run and made savefiles practice the parts you are least confident with then try another run."}}
           </dl>
    </div>
    </div>
</div>