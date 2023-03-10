@extends('Layout')
@section('title', 'Nelo Angelo')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/bossdatatable.css')}}">

<div id = "content">
    <div id = "right">
        <img src="{{asset('images/DMC1Files/Bosses/Nelo_Angelo.png')}}" width="270" height="206" />
    </div>
    
    <div id ="left">
        <h1>Nelo Angelo</h1>
        <dl id="extralinks"><b>Nelo Angelo</b> serves as a boss and primary rival for Dante and mirrors his moveset. Appears at the end of Mission 4, 11 and 17. Can
        also be fought in Nightmare Space M20. His fight approaches vary depending on the selected difficulty.</dl>
        <ul>
            <li>Nelo is one of the bosses where it has no RNG at all. It's always consistent, but third fight can give little stalling with his teleport causing it to delay the damage
                taken from the Holy Water.
            </li>
            <li>DMD has RNG factor with the loop setup, but the time loss is not severe.</li>
            <li>The DMD trick usually comes from keeping up the hit count and knowing when take distance from him.</li>
        </ul>
        <table id="bossdata">
            <caption style="background-color:rgba(77, 14, 30);">
              <b>HP Value</b>
            </caption>
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">M4</th>
                <th scope="col">M11</th>
                <th scope="col">M17</th>
                <th scope="col">M20</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Easy</th>
                <td>1500</td>
                <td>2100</td>
                <td>2100</td>
                <td>1000</td>
              </tr>
              <tr>
                <th>Standard</th>
                <td>1500</td>
                <td>2100</td>
                <td>2500</td>
                <td>1000</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th scope="row" colspan="2">Note:</th>
                <td colspan="2">on DMD Dante Deals 1/3 of Normal damage even in DT.</td>
              </tr>
            </tfoot>
          </table>
          <h2>Strategy</h2>
          {{"For Normal and Easy, Holy Water makes this fight scripted. Unless you are playing the PS2 NA or EU release of this game. Dante's damage including Holy Water item
          is modified into a certain percentage. Therefore, most of these instrcutions applies to HD Collection and JP PS2 release."}}
          <table id="Steps">
            <tr>
                <td>
              <h3 style="color:#ff3333;">Mission 4</h3>
                  {{"Requires at least one Holy Water."}}<br> <br>
                  {{"After he dives, get in DT and do slash cancel twice then use Holy Water. If you overextend
                  with last hit as he teleports away that is fine he can still get hit from it. Even though, you lose some time."}} <br><br>
                  {{"For PS2 NA/EU version, you will need to deal another same amount of additional damage before using the item. This means you will be forced to fight him
                  on the second phase."}}</td>
                <td>
                  <video width="480" height="360" controls>
                    <source src="{{asset('video/DMC1Boss/Nelo/Nelo1Normal.mp4')}}" type="video/mp4">
                </video></td>
            </tr>
            <tr>
              <td>
                <h3 style="color:#ff3333;">Mission 11</h3>
                {{"M11, requires two Holy Waters."}}<br> <br>
                {{"You will use full melee string after popping up the waters. It doesn't have to be in DT"}} <br><br>
                {{"However for PS2 NA/EU, you are most likely going to do couple of DT slash cancels."}}</td>
              <td>
                <video width="480" height="360" controls>
                  <source src="{{asset('video/DMC1Boss/Nelo/Nelo2Normal.mp4')}}" type="video/mp4">
              </video></td>
          </tr>
          <tr>
            <td>
              <h3 style="color:#ff3333;">Mission 17</h3>
              {{"Three Holy Waters. Simply use them up, but if you can't afford third one then you could use two and DT slash cancel till death."}}<br> <br>
              {{"Currently not tested for PS2 NA/EU."}}</td>
            <td>
              <video width="480" height="360" controls>
                <source src="{{asset('video/DMC1Boss/Nelo/Nelo3Normal.mp4')}}" type="video/mp4">
            </video></td>
        </tr>
        </table>
        <h2>DMD</h2>
        {{"Holy Water is extremely ineffective against bosses in general, so you will have to fight against them with a proper setup. Luckily for Nelo's
        case most of the time his phases are consistent as long as you execute it right. Keep in mind that position awareness is the key of Nelo's cycle.
        None of these fights were tested in PS2 NA/EU version either."}}

        <table id="Steps">
        <tr>
        <td>
        <h3 style="color:#ff3333;">Mission 4</h3>
        <b>{{"Phase 1 Cutscene skip."}}</b><br> <br>
        {{"Nelo will always start with dive no matter the attempt. What you will need to do here is to DT Slash cancel of double sword x3 times.
        On the third cancel, you need to do it with a jump instead of stick rotate, so make sure to jump away from Nelo as far as you can.
        Some may make a mistake of that jump with a lock-on hold. Avoid that because it will make dante jump backward which has much less distance."}} <br><br>
        {{"If done right, Nelo will start using his meteor pattern. Run back to him immediately and repeat the sequence except the last cancel, which
        is regular slash into High Time cancel. Nelo will be stuck in stun animation long enough, so you can reach out the 2nd Phase Bridge before he does."}}</td>
        <td>
        <video width="480" height="360" controls>
          <source src="{{asset('video/DMC1Boss/Nelo/Nelo1DMDPhase1.mp4')}}" type="video/mp4">
        </video></td>
        </tr>
        <tr>
          <td>
          <b>{{"Phase 2 & 3 RNG."}}</b><br> <br>
          {{"You do have to pray a bit for a good RNG on both phases. Because in some scenario you will be forced to hit Nelo from his back that causes him to teleport
          away and may not give you pattern that ends quickly. For Phase 2 specifically, you want to end the phase close to the broken bridge."}} <br><br>
          {{"Ideally, you want to hit Nelo same way as phase 1, but this time you do 2 hit cancels until you fully built runes.
          Jump away for his meteor pattern then repeat in DT"}}</td>
          <td>
          <video width="480" height="360" controls>
            <source src="{{asset('video/DMC1Boss/Nelo/Nelo1DMDPhase2and3.mp4')}}" type="video/mp4">
          </video></td>
          </tr>
          <tr>
            <td>
            <h3 style="color:#ff3333;">Mission 11</h3>
            <b>{{"Loop Setup."}}</b><br> <br>
            {{"Positioning is the name of this fight. Nelo will give you more than enough time to switch Ifrit. You will have to do raw jump inferno to line up
            properly. Move slightly to the left before kick-13 then slightly to the right and do nade shot > Full charged punch x2 times."}} <br><br>
            {{"When you jump away from Nelo, make sure it's a straight-line jump, so distance will be good enough for him to trigger meteor. The nade shot is necessary
            to keep up the runes. After that you repeat the sequence once again which is:"}}
            <ul>
              <li>DT Inferno</li>
              <li>After the second hit from Inferno, Kick-13 and unDT during animation</li>
              <li>Slightly Align dante to keep him cornered </li>
              <li>Nade shot > Full Charged Ifrit Punchx2</li>
              <li>Jump away from Nelo after cancelling punch animation</li>
              <li>Shoot at Nelo during his meteor animation and jump towards him to repeat the sequence from Inferno</li> 
            </ul>
            </td>
            <td>
            <video width="480" height="360" controls>
              <source src="{{asset('video/DMC1Boss/Nelo/Nelo2DMDStart.mp4')}}" type="video/mp4">
            </video></td>
            </tr>
            <tr>
              <td>
                {{"It's important to adjust Dante's positioning whenever Nelo isn't cornered properly just to keep him in check. As long as you jump away from him with the
                right distance. The loop will keep going. If your orb route is tight then it's alright to stay with kick-13 Lv1 because that will still work. Inferno is the
                most important move to buy during that point of the run."}}
              </td>
              <td>
              <video width="480" height="360" controls>
                <source src="{{asset('video/DMC1Boss/Nelo/Nelo2DMDLoop.mp4')}}" type="video/mp4">
              </video></td>
              </tr>
              <tr>
                <td>
                  {{"If the loop breaks or the fight goes wrong you can salvage it again, but you will lose a lot of time. Because it's a lot harder to dodge Nelo in this arena."}}
                </td>
                <td>
                <video width="480" height="360" controls>
                  <source src="{{asset('video/DMC1Boss/Nelo/Nelo2DMDStruggle.mp4')}}" type="video/mp4">
                </video></td>
                </tr>
                <tr>
                  <td>
                  <h3 style="color:#ff3333;">Mission 17</h3>
                  {{"Same idea as M11, but this time you need to ensure that you are in the same podium as him. Because, it is a lot harder to salvage the loop compared to
                  M11. Some position will just not make him do the meteor pattern at all. The video example shown here is the sweet spot where you would loop."}}<br><br>
                  {{"Make sure to re-align every time after you do kick-13."}}
                  </td>
                  <td>
                  <video width="480" height="360" controls>
                    <source src="{{asset('video/DMC1Boss/Nelo/Nelo3DMDKickstart.mp4')}}" type="video/mp4">
                  </video></td>
                  </tr>
                  <tr>
                    <td>
                    {{"Optimally, you want to start with inferno. This can be achieved by forcing Nelo to do a meteor pattern after you shoot him at good range."}}
                    </td>
                    <td>
                    <video width="480" height="360" controls>
                      <source src="{{asset('video/DMC1Boss/Nelo/Nelo3DMDNadeshot.mp4')}}" type="video/mp4">
                    </video></td>
                    </tr>
                    <tr>
                      <td>
                      {{"Although, he will not give you the same pattern every time, so you will end up in a rough position if he does aggressive charge instead.
                      That's why kick-13 is much more preferable for consistency."}}
                      </td>
                      <td>
                      <video width="480" height="360" controls>
                        <source src="{{asset('video/DMC1Boss/Nelo/Nelo3DMDStinger.mp4')}}" type="video/mp4">
                      </video></td>
                      </tr>
      </table>
      <dl id="extralinks">It's good to check the <a href="/DMC1:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a>
        if you have general questions regarding the bosses. </dl>
        </div>
</div>