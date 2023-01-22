@extends('Layout')
@section('title', 'Getting Started')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/accordion.css')}}">

<div id = "content">
    <div id = "left">
        <h1>Getting Started</h1>
        <dl id="extralinks"> {{"This page is meant for people trying to get into"}} <a href="/DMC1">DMC1</a> {{"speedrunning."}}
        </dl>

        <div id="toc_container">
            <p class="toc_title">Contents</p>
            <ul class="toc_list">
              <li><a href="#General">General</a></li>
              <li><a href="#Tutorials">Tutorials</a></li>
              <li><a href="#Resources_to_Speedrun_Devil_May_Cry">Resources to Speedrun Devil May Cry</a></li>
              <li><a href="#Common_Terms_in_Devil_May_Cry_Speedrunning">Common Terms in Devil May Cry Speedrunning</a></li>
              <li><a href="#Choosing_a_Category_.26_Route">Choosing a Category & Route</a></li>
              <li><a href="#Tips_.26_Tricks">Tips & Tricks</a></li>
            </ul>
            </div>

            <h2 id ="General">General</h2>

            {{"Before you consider speedrunning, you want to be quite familiar with the game, its mechanics and the mission layouts.
            It's not recommended to start after only one playthrough which can turn off so many people. Especially when it comes to specific
            movement like the horse jump. The excessive resets can be one big issue for most players, in which can be difficult to play
            with time pressure on them. One suggestion that might help you getting used to speedruns more quickly: Do not aim for the perfect
            route and ranks until you reach the breaking barrier. Make back up strats."}}

            {{"In the following sections, you will find important concepts and information that you may find useful for starting out with DMC1
            Speedrunning."}}

            <h2 id="Tutorials">Tutorials</h2>
        <dl id="extralinks">
            {{"Refer to DMC1 main page "}}<a href="DMC1#Tricks">for general tricks being used</a> {{" along with tutorials here:"}}
            <ul>
            <li><a href="https://youtube.com/playlist?list=PL_OpViuUFJmGHaCPat3ajCcaTBe_rOSQr" target="_blank"> Slickford's Basic Beginner information </a></li>
            <li><a href="https://www.youtube.com/playlist?list=PLdtB5n2OvooYvukaa7cobKYsH66gF3n46" target="_blank"> DECosmic's DMC1 Speedrun Tutorial</a></li>
            </ul>
        </dl>
        <h2 id="Resources_to_Speedrun_Devil_May_Cry">Resources to Speedrun Devil May Cry</h2>
        <dl id="extralinks"><ul>
            <li>A <b>Keyboard</b> or <b>Controller</b>. Most Devil May Cry speedrunners prefer controller, commonly Xbox or PlayStation controllers. Controllers
                in DMC make the game more reliable movement wise, but it is up to the player in the end. At high-level play, a mix of both your controller
                and keyboard might be favourable.
            <li><b>Timer / Split Program.</b> The most common used is <b>LiveSplit.</b></li>
            <li>For PC runners, autosplitter and load time removal is integrated into LiveSplit. This must be enabled.</li>
            <li>Follow this page[] on how to set up a layout for your runs.</li>
        </ul>
        </dl>
        <h2 id="Common_Terms_in_Devil_May_Cry_Speedrunning">Common Terms in Devil May Cry Speedrunning</h2>
        <dl id="extralinks">
            {{"When learning Devil May Cry, you might find out a lot about the game yourself, but when starting off speedrunning, there might be some terms you will not
            be familiar with at first. The common terms used Devil May Cry are mentioned here below."}}

<div class="accordion">
    <input id="tab-1" type="checkbox">
    <label for="tab-1">Common terms in Devil May Cry speedrunning</label>
    <div class="ShowContentHigh">
      <ul>
        <li><b>IGT:</b> Devil May Cry runs on an In-Game Timer
            which keeps track of the time you are "inside of the game", meaning whenever you are outside of the actual game, like in the RESET Menu,
        the timer will pause and resume when you are back in the game. Players commonly mention
        and check this at the end-mission screen to determine whether their segment was good or bad.</li>
        <br>
        <li><b>DT:</b> Stands for Devil Trigger and is used to transform dante into a demon, boosting his various stats depending on the equipment.
            While using Alastor, movement speed and attack speed increased, and the sword attack deals more damage. On the other hand, using ifrit
            only increases the damage output. Gunfire from weapons other than Nightmare-β charged with a respective elemental boost.
            In Dante Must Die mode, Devil Trigger does not restore health.</li>
        <br>
        <li><b>Runes:</b> Devil Trigger in DMC1 often abbreviated as Runes, shows how much DT energy the character has. The runes can be seen below the vitality gauge.
            The player can extend the runes by buying Purple Orbs, allowing them to maintain their form for a longer period of time.</li>
        <br>
        <li><b>SB:</b> Stands for Special Bonus and is a bonus that you receive at the end of the missions by meeting four conditions: Getting the present of Red Orbs,
        beating the mission within the timelimit, not receiving any damage and not using excessive items. The bonus is a reward of <b>2,000</b>
        <img height="18" width="18" src="{{asset('images/money.png')}}"></li>
        <br>
        <li><b>RNG:</b> Stands for Random Number Generator and is based on whatever events are randomly generated in the game. An event being everything like an
        enemy animation, attack, spawn or game behavior. The term applies a lot for Devil May Cry is important in a way because of the nature of enemies and bosses
        which have patterns that are considered <b>good RNG</b> and <b>bad RNG</b>. Patterns that allows you to kill within few seconds are considered good. Patterns
        that takes you longer to kill are considered bad.</li>
        <br>
        <li><b>iFrames:</b> Stands for Invincibility Frames and are commonly referred to the amount of frames in which the player is invincible, for example holy water
        animation.</li>
        <br>
        <li><b>Save & Quit:</b> Commonly used in <a href="DMC1:AC">All Collectibles</a> category. Quitting of the game to the main menu is a efficient way to fast travel
        such as secret mission 5. Quitting out and reloading the game back also used to back up <b>SB</b> in short missions if failed.</li>
        <br>
        <li><b> DT grenade launcher:</b> Refers to DT management []</li>
        <br>
        <li><b>Cosmo Climb</b>: Refers to vortex platforming skip in Mission 21[]</li>
    </ul>
    </div>
  </div>
        </dl>
        <h2 id="Choosing_a_Category_.26_Route">Choosing a Category & Route</h2>
        <dl id="extralinks">
            <ul>
                <li>You can refer to the main categories <a href="/DMC1#Leaderboards_&_Categories">here</a> and make your choice.</li>
                <li>Route of your choosing is up to personal preference, but generally, for beginners,
                    it is advised to try and avoid the currency tight routes (a route where you need a certain set of ranking requirements per mission).</li>
                <li>Starting with the fastest route is not always good idea, as these routes often require a high execution level and tend to be very punishing.
                    Look around the category pages and pick carefully. However, in the end, it is all about overall improvement, which you can achieve via any route.</li>
            </ul>
        </dl>
        <h2 id="Tips_.26_Tricks">Tips & Tricks</h2>
        <dl id="extralinks">
            <ul>
                <li>You must plan your movement for each room. Spamming <b>Stingers/Vortex</b> without checking the surroundings will cost you more time than you realize.</li>
                <li>Do not disable <b>Devil Trigger</b> while you are close to the door for the next room. You will lose extra runes that way.
                    Transitioning to the next room will still carry the same amount of runes and disables the devil trigger itself.</li>
                <li>There are no pre-made savefiles for this game. It is much more convenient to create your own.
                    Everyone has their method of practising as it will help you go through your route quicker..</li>
                <li>Check the <a href="/DMC1:Frequently_Asked_Questions">Frequently Asked Questions</a> for general information regarding the speedrun</li>
            </ul>
        </dl>
    </div>
</div>