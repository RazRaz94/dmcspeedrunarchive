@extends('Layout')
@section('title', 'Enemies (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">
<link rel="stylesheet" href="{{asset('css/EnemyTable.css')}}">
<div id = "content">
    <div id ="left">
        <h1>Enemies</h1>
        {{ Breadcrumbs::render('DMC2Enemies') }}
        - work in progress -
        <dl class="CF2">
        <b>"Armor = The higher the armor value, the harder it is to stun."</b>
            </dl>
            <table cellspacing="0" class="enemy">
                <tbody><tr>
                  <th colspan="4" class="enemy-name"><p style="vertical-align: inherit;"><p style="vertical-align: inherit;">Msira</p></p></th>
                  <th colspan="4" class="enemy-name"><p style="vertical-align: inherit;"><p style="vertical-align: inherit;">Homromsira</p></p></th>
                </tr>
                <tr>
                    <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/msira.png')}}" width="120" height="120"></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl></th>
                  <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/homromsira.png')}}" width="120" height="120"></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl></th>
                </tr>
                <tr>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl></th>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">20</dl></dl></th>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl></th>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl></th>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">30</dl></dl></th>
                  <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Frost Heart</dl></dl></th>
                </tr>
                <tr>
                    <th colspan="4" class="enemy-name"><p style="vertical-align: inherit;"><p style="vertical-align: inherit;">Gbumsira</p></p></th>
                    <th colspan="4" class="enemy-name"><p style="vertical-align: inherit;"><p style="vertical-align: inherit;">Jomothumsira</p></p></th>
                </tr>
                <tr>
                    <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/gbusmsira.png')}}" width="120" height="120"></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl></th>
                  <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/jomothumsira.png')}}" width="120" height="120"></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl></th>
                  <th class="w93-1"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl></th>
                </tr>
                <tr>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">800</dl></dl></th>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">40</dl></dl></th>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl></th>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,000</dl></dl></th>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl></th>
                    <th class="w93-2"><dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl></th>
                  </tr>
              </tbody></table> 
    </div>

    <div id="clearit"></div>
    </div>
@endsection