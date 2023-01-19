@extends('Layout')
@section('title', 'Getting Started')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">

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
    </div>
</div>