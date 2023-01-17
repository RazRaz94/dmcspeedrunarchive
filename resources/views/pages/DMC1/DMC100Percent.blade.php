@extends('Layout')
@section('title', '100%')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/ToggleableTabs.css')}}">
<link rel="stylesheet" href="{{asset('css/accordion.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>

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
          <li><a href="#Objectives">Objectives</a></li>
          <li><a href="#Routes">Routes</a></li>
          <li><a href="#Rules">Rules</a></li>
        </ul>
        </div>

        <h2 id="Objectives">Objectives</h2>

        <dl id="extralinks">
            {{"The objective is 100% game completion, meaning all significant interactions and criteria in each Missions needs to be performed and accomplished."}}
            <ul>
                <li>{{"Clearing all 23 missions with S rank"}}</li>
                <li>{{"Clearing all 12 secret missions "}}<sup>(1)</sup></li>
                <li>{{"All permanent upgrades must be purchased and collected "}}<sup>(2)</sup></li>
                <li>{{"All usable equipment must be collected "}}<sup>(3)</sup></li>
            </ul>
            <sup>(1) </sup>{{"All of them need to be cleared when you finish the game. The rewards you get from these missions are part of full health upgrade requirement.
            Which is the Blue Orb Fragment"}}


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
<br>
      <sup>(2) </sup>{{"In addition of collecting a total of 33 Blue Orb Fragments and 2 full Blue Orbs, you must buy all character's power-up. Note, in Easy
      difficulty you will only buy purple and blue orb upgrades 4 times."}}
      <div class="accordion">
        <input id="tab-2" type="checkbox">
        <label for="tab-2">List of all abilities and upgrades to purchase</label>
        <div class="ShowContent">
          <ul>
            <li><b>Alastor:</b><br>
              Stinger 350 → 1,400 <img height="18" width="18" src="{{asset('images/money.png')}}">
              <br>
              Round Trip 350 → 1,400 <img height="18" width="18" src="{{asset('images/money.png')}}">
              <br>
              Air Hike 4,000 <img height="18" width="18" src="{{asset('images/money.png')}}">
              <br>
              Air Raid 750 <img height="18" width="18" src="{{asset('images/money.png')}}">
              <br>
              Vortex 1,150 → 2,400 <img height="18" width="18" src="{{asset('images/money.png')}}"></li>
            <br>
            <li><b>Ifrit:</b><br>
                Rolling Blaze 3,450 <img height="18" width="18" src="{{asset('images/money.png')}}">
                <br>
                Magma Drive 500 <img height="18" width="18" src="{{asset('images/money.png')}}">
                <br>
                Kick-13 700 → 2,100 <img height="18" width="18" src="{{asset('images/money.png')}}">
                <br>
                Meteor 900 → 2,700 <img height="18" width="18" src="{{asset('images/money.png')}}">
                <br>
                Inferno 4,850 <img height="18" width="18" src="{{asset('images/money.png')}}"></li>
            <br>
            <li>Blue Orb 300 → 550 → 1,000 → 1,800 → 3,200 → 4,300 → 5,500 <img height="18" width="18" src="{{asset('images/money.png')}}"></li>
            <li>Purple Orb 440 → 830 → 1,560 → 2,920 → 5,440 → 6,540 → 7,740 <img height="18" width="18" src="{{asset('images/money.png')}}"></li>
            <br>
            <li><b>Total Cost:</b><br>
              Normal/Hard/Dante Must Die ---- 69,120 <img height="18" width="18" src="{{asset('images/money.png')}}"><br>
              Easy ------------------------------------ 36,400  <img height="18" width="18" src="{{asset('images/money.png')}}">
            </li>
        </ul>
        </div>
    </div>
    <div class="accordion">
      <input id="tab-4" type="checkbox">
      <label for="tab-4">List of all blue orb fragment locations</label>
      <div class="ShowContentHigh">
        <ul>
          <li><b>Mission 1:</b><br>
            1 - Prior to the "official" mission, stands inside the small tower to the left.
            <br>
            2 - Main Hall. On the left side of the room, 2nd floor.
            <br>
            3 - In the room with the portcullis, break the four suits of armor on the right as Dante enters.
            <br>
            4 - In the workshop area, jump up onto the biplane's wing.</li>
            <br>
          <li><b>Mission 3:</b><br>
            5 - After Phantom, return to broken bridge Wall-jump to the porch above the doors to the Cathedral and use Stinger towards the bridge.
            <br>
            6 - Then Cross the shattered Broken Bridge a second time.
            <br>
            7 - Jump off the Broken Bridge to access Secret Mission 1.</li>
            <br>
          <li><b>Mission 4:</b><br>
            8 - Return to the Cathedral at the start of the mission to access Secret Mission 2.
            <br>
            9 - After fighting the "Lion.", enter the small room with the Divinity Statue across from the airplane hangar to access Secret Mission 3.
            <br>
            10 - Before you leave the room, break table nearest to the statue.
            <br>
            11 - Return to the arena beneath the airplane hangar to access Secret Mission 4. If you fail this, then you will not be able to attempt another.</li>
            <br>
            <li><b>Mission 5:</b><br>
            12 - Jump to the area above the entrance ( where the fight ended ) and go past the hole. Jumping to the left tower ( just off-camera ),
            which has a Red Orb Cache and an Untouchable, then back across to the high tower to the right</li>
            <br>
            <li><b>Mission 8:</b><br>
            13 - Prior to the "official" mission, go back to the sewers and walk away from the camera into a dead-end area of the tunnel.
            <br>
            14 - Re-enter the room where Dante acquired the Rusty Key in mission 6 for secret mission 5. You need to grab the 13th Blue Fragment to enable that
            <br>
            15 -Above the horse statues after defeating Phantom. You can use Stinger to trigger a long-jump off the edge of the platform where the boss fight took place.
            <br>
            16 - After using the Trident, jump over the railing to the left to find the Fragment in a pool of water.
            <br>
            17 - After getting through the portcullis, do not exit the room: instead, jump over the railing to the right to find fragment in the water.</li>
            <br>
            <li><b>Mission 9:</b><br>
            18 - After the spiral staircase, stand near the entrance and walk along the wall to the right till you find small area with a gravestone. Strike it a few times with a melee to expose the orb fragment.</li>
            <br>
            <li><b>Mission 11:</b><br>
            19 - Right at the start of the level, turn around and go back out of the door for secret mission 6.
            <br>
            20 - On the way back after getting Sign of Chastity, Defeat all the Blades and the orb fragment will drop down from the middle of the circular area.
            <br>
            21 - In the first room, jump up on top of the glass wall. Walk over to the hole in the roof of the partitioned-off area and follow the path.</li>
            <br>
            <li><b>Mission 12:</b><br>
            22 - After Griffon, Stinger across each mast till you reach the prow. The orb will appear as you land.</li>
            <br></li>
            <li><b>Mission 13:</b><br>
            23 - After clearing first mandatory fight. Turn completely around. Head down the hole. It is floating at the far end, guarded by three Blades.</li>
            <br></li>
            <li><b>Mission 14:</b><br>
            24 - In the interval, swim back into the ship, into the captain's room, and examine his skeleton for secret mission 7.
            <br>
            25 - After exiting the water while being still in the interval, run around the mast and jump in the second pool. It is near the bottom at the back of the pool.
            <br>
            26 - In the waterfall area. Double jump onto the cliff.</li>
            <br><li><b>Mission 15:</b><br>
            27 - Back track to the tiered cliff, double jump on the right-hand side onto the ledge with the fragment before the tunnel exit.
            <br>
            28 - Back track to the rotating spiked floor from Mission 14 and examine the skull engraving on the wall for secret mission 8.
            <br>
            29 - In the blue shield path, break the wall opposite the door. Destroy the junk in the area to uncover the Blue Orb Fragment, along with a Holy Water.
            <br>
            30 - In the red shield path spike room, do not pick up the item immediately instead, jump down into the pit and kick-jump off the wall under the item. The Blue Orb Fragment will appear on the pedestal above
            <br>
            31 - At Coliseum, before you trigger Griffon, go to the upper floor, then climb the stairs to get to the top. Run across the bridge to the center. The fragment will appear and drop when you reach at the middle of the glass section.</li>
            <br><li><b>Mission 16:</b><br>
            32 - To the left of the elevator after picking up the Wheel of Destiny. This is a full Blue Orb, not just a fragment.
            <br>
            33 - After exiting the Coliseum, immediately re-enter it for secret mission 9
            <br>
            34 - Hovering in the air in the main hallway, Stinger off the Divinity Statue.
            <br>
            35 - After you kill plasma, go beneath the right-hand stairs in the main hall.  
            <br>
            36 - Jump around in front of the face above the painting which is right besides the small room with the Divinity Statue to drop the fragment.
            <br>
            37 - Go back to the biplane room after defeating Nightmare to complete secret mission 10.</li>
            <br><li><b>Mission 17:</b><br>
            38 - Return to the broken bridge and cross over to the Cathedral side without falling in the water for secret mission 11. There is only one chance to do this.
            <br>
            39 - In "Pluto's Dragon," jump up to the right above the area where the mirror is, and follow the right-hand wall to find the entrance to a balcony area.
            Stand still in the middle of the balcony and it will drop down after a short time. You can do that and kill Pluto's Dragon at the same time.</li>
            <br><li><b>Mission 18:</b><br>
            40 - Inside a barrel in the last prison cell on the left.
            <br>
            41 - On a small ledge in the version of the tall tower with the wheel device to flood the room.
            <br>
            42 - Before Nightmare II, jump up to the left to find a door on the second floor. Follow the trail of Red Orbs  till the end.</li>
            <br><li><b>Mission 19:</b><br>
            43 - Before you enter the mirror world in the Castellan's bedroom, check the right of the bed.
           <br>
            44 - Mirror World outdoor area. It is hovering near the edge of the square tower accessed from the uppermost level of the wall,
           and can be grabbed by simply jumping off the edge in the right place.
           <br>
            45 - The same tower as the Blue Orb Fragment in Mission 5. After getting the previous Fragment. Use Air Hike and grabs the ledge to get to the tower.
           This is the final blue fragment.</li>
           <br>
           <li><b>Mission 21:</b><br>
            46 - The Blue Orb is in the first room containing a Nobody in the Secret Mission 12.</li>
      </ul>
      </div>
    </div>
<br>

<sup>(3) </sup>{{"While"}} <a href="/DMC1:Any%">Any%</a> {{"skips majority of firearms, this category requires all of them for full completion. The devilarms
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
    </div>
</div> <!--- This is End of Content --->



@endsection