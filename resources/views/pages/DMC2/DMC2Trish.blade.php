@extends('Layout')
@section('title', 'Dante (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCCharacterInformation.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/CSSModal.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
          <tbody><tr>
          <th colspan="2" style="text-align: center;"><i><b>Trish</b></i>
          </th></tr>
          <tr>
          <th colspan="2"> 
            <img src="{{asset('images/DMC2Files/Character/DMC2Trish.png')}}" />
          </th></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>Categories</b>
          </td></tr>
          <tr><td colspan="2" style="text-align: center;"><b>NG+ Trish</b></td></tr>
        </tbody></table>
    </div>
    <div id ="left">
        <h1>Trish (Devil May Cry 2)</h1>
        {{ Breadcrumbs::render('DMC2Trish') }}
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
        <dl id="extralinks">- work in progress -.</dl>
        <h2 id="Character_Information">Character Information</h2>
        <ul>

        </ul>
        <h2 id="Move_List">Move List</h2>


        <h2 id="Techniques">Techniques</h2>

        <h2 id="Categories">Categories</h2>
        <ul>
        <li>Dante Disc</li>
        <li>Lucia Disc</li>
        </ul>
        <h2 id="Video_Tutorials">Video Tutorials</h2>
        N/A
    </div>
    <div id="clearit"></div>
</div>
@endsection