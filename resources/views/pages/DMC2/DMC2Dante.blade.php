@extends('Layout')
@section('title', 'Dante (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCCharacterInformation.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
          <tbody><tr>
          <th colspan="2" style="text-align: center;"><i><b>Dante</b></i>
          </th></tr>
          <tr>
          <th colspan="2"> 
            <img src="{{asset('images/DMC2Files/Character/DMC2Dante.png')}}" width="270" height="206" />
          </th></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>Categories</b>
          </td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG Dante</b></td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG+ Dante</b></td></tr>
        </tbody></table>
    </div>
    <div id ="left">
        <h1>Dante (Devil May Cry 2)</h1>
        {{ Breadcrumbs::render('DMC2Dante') }}
        <div id="toc_container">
            <p class="toc_title">Contents</p>
            <ul class="toc_list">
              <li><a href="#Character_Information">Character Information</a></li>
              <li><a href="#Move_List">Move List</a></li>
              <li><a href="#Techniques">Techniques</a></li>
              <li><a href="#Categories">Categories</a></li>
              <li><a href="#Video_Tutorials">Video Tutorials</a></li>
            </ul>
            </div>
        <dl id="extralinks"><b>Dante</b> runs feature the most risky playstyle as well as the most heavy use of various combats.
            Extremely punishable due to tightness of the orb route. This page provides information on the character mechanics.</dl>
        <h2 id="Character_Information">Character Information</h2>
        <ul>
            <li>Dante's Amulet start is Electro Heart.</li>
            <li>Has the best front roll in the game.</li>
            <li>The only character that utilizes orb manipulation mechanic.</li>
            <li>Has second form that requires HP to be at red state before transform.</li>
        </ul>
        <h2 id="Move_List">Move List</h2>
        <table id="Marathon">
            <tr>
                <td>Move List</td>
                <td>Damage Normal</td>
                <td>Damage DT</td>
                <td>Armor break points</td>
                <td>DT gain</td>
                <td>Style point</td>
            </tr>
            <tr>
                <td>Combo (Ground)</td>
                <td>160</td>
                <td>192</td>
                <td>50</td>
                <td>40</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Ground&#39;s finish hit)</td>
                <td>200</td>
                <td>240</td>
                <td>50</td>
                <td>40</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Belvedere)</td>
                <td>200</td>
                <td></td>
                <td>50</td>
                <td>40</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Combo (Million Stabs)</td>
                <td></td>
                <td>108</td>
                <td>50</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Thrust Kick/1st phase)</td>
                <td></td>
                <td>192</td>
                <td>50</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Thrust Kick/2nd phase)</td>
                <td></td>
                <td>216</td>
                <td>50</td>
                <td>0</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Stinger</td>
                <td>200</td>
                <td>240</td>
                <td>50</td>
                <td>40</td>
                <td>500</td>
            </tr>
            <tr>
                <td>High Time</td>
                <td>200</td>
                <td>240</td>
                <td>50</td>
                <td>40</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Helm Breaker</td>
                <td>260</td>
                <td>312</td>
                <td>50</td>
                <td>40</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Combo (Air)</td>
                <td>180</td>
                <td>216</td>
                <td>50</td>
                <td>40</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Round Trip</td>
                <td></td>
                <td>240</td>
                <td>50</td>
                <td>0</td>
                <td>120</td>
            </tr>
            <tr>
                <td>Smash</td>
                <td>200</td>
                <td></td>
                <td>50</td>
                <td>50</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Gravedigger</td>
                <td></td>
                <td>240</td>
                <td>50</td>
                <td>0</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Handgun</td>
                <td>20</td>
                <td></td>
                <td>12</td>
                <td>5</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Handgun (Twosome Time)</td>
                <td>20</td>
                <td></td>
                <td>50</td>
                <td>5</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Handgun (Rainstorm)</td>
                <td>20</td>
                <td></td>
                <td>12</td>
                <td>5</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Shotgun</td>
                <td>25</td>
                <td></td>
                <td>10</td>
                <td>3</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Shotgun (Curved hit)</td>
                <td>25</td>
                <td></td>
                <td>10</td>
                <td>3</td>
                <td>100</td>
            </tr>
            <tr>
                <td>SMG</td>
                <td>7</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Missile launcher (Hit)</td>
                <td>50</td>
                <td></td>
                <td>50</td>
                <td>20</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Missile launcher (Explosion)</td>
                <td>300</td>
                <td></td>
                <td>50</td>
                <td>20</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Electro Heart (Falling lightning)</td>
                <td></td>
                <td>120</td>
                <td>50</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Flame Heart (fire)</td>
                <td></td>
                <td>12</td>
                <td>20</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Caligula</td>
                <td></td>
                <td>24</td>
                <td>3</td>
                <td>0</td>
                <td>10</td>
            </tr>
        </table>
        <h3>Majin Form</h3>
        <table id="Marathon">
            <tr>
                <td>Move List</td>
                <td>Damage Value</td>
                <td></td>
                <td>Armor break points</td>
                <td>DT gain</td>
                <td>Style point</td>
            </tr>
            <tr>
                <td>Combo (Ground)</td>
                <td>500</td>
                <td></td>
                <td>500</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Ground&#39;s finish hit)</td>
                <td>1000</td>
                <td></td>
                <td>500</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Combo (Flight)</td>
                <td>500</td>
                <td></td>
                <td>500</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Archivolt</td>
                <td>500</td>
                <td></td>
                <td>500</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Whirlwind</td>
                <td>500</td>
                <td></td>
                <td>500</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Crimson Bolide</td>
                <td>500</td>
                <td></td>
                <td>50</td>
                <td>0</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Doomsday (DT gauge at 3000 or below)</td>
                <td>2500</td>
                <td></td>
                <td>1000</td>
                <td>0</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Doomsday (DT gauge at 3001 or higher)</td>
                <td>5000</td>
                <td></td>
                <td>1000</td>
                <td>0</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Laevateinn (DT gauge at 3000 or below)</td>
                <td>50</td>
                <td></td>
                <td>30</td>
                <td>0</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Laevateinn (DT gauge at 3001 or higher)</td>
                <td>100</td>
                <td></td>
                <td>30</td>
                <td>0</td>
                <td>100</td>
            </tr>
        </table>
        <h2 id="Techniques">Techniques</h2>
        <ul>
            <li>Turnaround Stinger - links to new page.</li>
            <li>Rocket Launcher aim maniplutation</li>
            <li>E&I Shotgun cancel</li>
            <li>Stinger/Roll cancel into Air Raid</li>
            <li>Kick Cancel</li>
            <li>DT and Human combo mix ups</li>
            <li>One-on-one Twosome Time</li>
        </ul>
        <h2 id="Categories">Categories</h2>
        <ul>
        <li>NG Dante</li>
        <li>NG+ Dante</li>
        </ul>
        <h2 id="Video_Tutorials">Video Tutorials</h2>
    <ul id="extralinks">
        <li><a href="https://www.youtube.com/watch?v=X4tPgGLmCvk&list=PL5iFYeD1oFEKO-4YxCqHoJ4CjWH1cfl8j">LonerHero : Complete NG Dante Playlist</a></li>
    </ul>
    </div>
    <div id="clearit"></div>
</div>
@endsection