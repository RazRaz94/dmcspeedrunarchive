@extends('Layout')
@section('title', 'Help Out')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Help Out</h1>
        <dl class="CF2">
        <b>We need content creators! If you need help creating or organizing any of these pages please don't hesitate to ask in the DMCSpeedruns Discord.
            Additonally, you can use this page if you need help coordinating tasks for others for your game. Feel free to add/remove info as needed.</b>
            </dl>
            <fieldset>
                <legend>Devil May Cry Games</legend>
                <ul>
                    <li>DMC1 - Complete the tricks section</li>
                    <li>DMC1 - Complete Griffon and Mundus Page</li>
                    <li>DMC1 - Complete routes Information per category</li>
                    <li>Plan on the page set ups for the other games about characters, category information and such</li>
                    <li>Gather best segemented times for each DMC games.</li>
                    <li>Gather list of major skips for each DMC games.</li>
                    <li>Collect routes with estimate, time pastebin note and VoD for each DMC games.</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Website</legend>
                <ul>
                    <li>Make pages responsive with multiple setups for different platforms/aspect ratios</li>
                    <li>Implment users feature. Enable runners to edit pages to add content</li>
                    <li>End goal - Dynamic pages for the leadderboard and World Record progression</li>
                </ul>
            </fieldset>
    </div>

    <div id="clearit"></div>
    </div>
@endsection