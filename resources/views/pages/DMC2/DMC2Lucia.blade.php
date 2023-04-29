@extends('Layout')
@section('title', 'Lucia (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCCharacterInformation.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/CSSModal.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
          <tbody><tr>
          <th colspan="2" style="text-align: center;"><i><b>Lucia</b></i>
          </th></tr>
          <tr>
          <th colspan="2"> 
            <img src="{{asset('images/DMC2Files/Character/DMC2Lucia.png')}}" />
          </th></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>Categories</b>
          </td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG Lucia</b></td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG+ Lucia</b></td></tr>
        </tbody></table>
    </div>
    <div id ="left">
        <h1>Lucia (Devil May Cry 2)</h1>
        {{ Breadcrumbs::render('DMC2Lucia') }}
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
        <dl id="extralinks"><b>Lucia</b> runs feature the most execution. She never slow down due to the her usage of rapid fire cancels.
            This page provides information on the character mechanics.</dl>
        <h2 id="Character_Information">Character Information</h2>
        <ul>
            <li>Lucia's Amulet start is Frost Heart.</li>
            <li>Has the fastest DT run animation in the game.</li>
            <li>Extremely stubby melees.</li>
            <li>Builds DT gauge like it's nothing.</li>
            <li>Lucia melee damage is divided between her equipped melee and kick.</li>
            <li>The DT heart elements will not proc from any of kicks other than the shockwave somersault kick.</li>
        </ul>
        <h2 id="Move_List">Move List</h2>

        <h3>Regular Moves</h3>
        <ul class="line">
            <li><label class="btn" for="modal-1">Combo</label></li>	
            <li><label class="btn" for="modal-2">Wheel Kick</label></li>
            <li><label class="btn" for="modal-3">Sky High</label></li>
            <li><label class="btn" for="modal-4">Axe Kick</label></li>
            <li><label class="btn" for="modal-5">Air Combo</label></li>
            <li><label class="btn" for="modal-6">Rapid Fire</label></li>
            <li><label class="btn" for="modal-7">Underwater</label></li>
            <li><label class="btn" for="modal-8">Lush</label></li>
            <li><label class="btn" for="modal-9">Dagggers</label></li>
            <li><label class="btn" for="modal-10">Dart</label></li>
            <li><label class="btn" for="modal-11">Cranky Bomb</label></li>
            <li><label class="btn" for="modal-12">Bowgun</label></li>
        </ul>
        <h3> Devil Trigger Moves </h3>
        <ul class="line">
            <li><label class="btn" for="modal-13">Slash Down</label></li>
            <li><label class="btn" for="modal-14">Frenzied</label></li>
            <li><label class="btn" for="modal-15">Somersault</label></li>
            <li><label class="btn" for="modal-16">Air Combo</label></li>
            <li><label class="btn" for="modal-17">Air Raid Cross</label></li>
            <li><label class="btn" for="modal-18">Elemental Damage</label></li>
            <li><label class="btn" for="modal-19">Seraphic Soar</label></li>
            <li><label class="btn" for="modal-20">Divine Anger</label></li>
        </ul>
      </p>

      @include('pages.DMC2.DMC2LuciaMoveList')

        <h2 id="Techniques">Techniques</h2>
        <ul>
            <li>Cranky bombs ranged throw</li>
            <li>Bunny Hop</li>
            <li>Rapid Fire Cancel</li>
            <li>Roll cancel into Air Raid</li>
            <li>DT and Human combo mix ups</li>
            <li>One-on-one Twosome Time</li>
        </ul>
        <h2 id="Categories">Categories</h2>
        <ul>
        <li>NG Lucia</li>
        <li>NG+ Lucia</li>
        </ul>
        <h2 id="Video_Tutorials">Video Tutorials</h2>
    <ul id="extralinks">
        <li><a href="https://youtube.com/playlist?list=PL5iFYeD1oFELFPSVg4j3nPgpuaEmCv3J0">LonerHero : Complete NG Lucia Playlist</a></li>
    </ul>
    </div>
    <div id="clearit"></div>
</div>
@endsection