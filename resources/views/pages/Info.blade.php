@extends('Layout')
@section('title', 'Site Info')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Site Info</h1>
        <dl class="CF2">
        <b>"For support inquiries or any inquiries about DMCSpeedrun Archive, please contact LonerHero#9235 on Discord."</b>
            </dl>
            <fieldset>
                <legend>LonerHero</legend>
                <p>{{"LonerHero is the wiki's Director. LonerHero is in charge of the site design and takes care of updates and PHP coding duties.
                He is also responsible for capturing and editing most contents currently available on the site. Games of interest besides Devil May Cry are
                Onimusha, Ninja Gaiden, Bloodstained and many other arcade based action games."}}</p>
            </fieldset> 
            <fieldset>
                <legend>Hies</legend>
                <p> {{"Hies is the Senior Administrator and owner of the DMCSpeedrun wiki server. Helping in the general development of Devil May Cry Speedrun Archive. He is also
                the Director of the infamous DMC3 Tools that helped runner immensely to get consistent result in DMC3 runs."}}</p>
            </fieldset> 
    </div>

    <div id="clearit"></div>
    </div>
@endsection