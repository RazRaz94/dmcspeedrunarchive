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
              <tbody>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Msira</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Homromsira</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/msira.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/homromsira.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">20</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">30</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Frost Heart</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Killing them with knock down has long animation of despawn.</li>
                              <li>Dante fights total of 20 Misras in M1.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Completely ignored in the run.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Gbumsira</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Jomothumsira</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/gbusmsira.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/jomothumsira.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">800</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">40</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,000</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Completely ignored in the run.</li>
                              <li>Inflicts poison debuff.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in timer mission for both characters.</li>
                              <li>Most aggressive variant as they are extremely dangerous for dante while building Majin.</li>
                              <li>Lucia fights 10 of them in M12 room after the first elevator.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Agonofinis</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Terreofinis</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/agonofinis.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/terreofinis.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">20</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">30</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M1 Dante first fight total of 10.</li>
                              <li>Has 4 different variants (axes, swords, saws, unarmed).</li>
                              <li>Lucia skips their encounter entirely.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M7 with dante during the train transport section. Commonly unarmed variant.</li>
                              <li>Also appears in M16 (Dante) during the first elevator section with axe variant.</li>
                              <li>Lucia encounters them first at M12 during the the first elevator.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Mortfinis</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Pyromancer</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/mortfinis.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/pyromancer.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">40</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M16 Dante with the sword variant in the first elevator then axe variant for the second elevator. Same with Lucia in M12.</li>
                              <li>Strongest and most aggresive finis.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M2 with dante.</li>
                              <li>Lucia skips this encounter through the whole run.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Auromancer</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Brontomancer</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/auromancer.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/brontmancer.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">40</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">40</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in ruins and phantom mission, but they are completely ignored with both dante and lucia.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in ruins and phantom mission, but they are completely ignored with both dante and lucia.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Goatling</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Blood Goat</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/goatling.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/bloodgoat.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">80</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M2 for both dante and lucia before taking Aerial Heart. NG+ Skips this encounter.</li>
                              <li>Dante's mandatory fight in M3 as mini-boss used for Majin Building, while lucia skips it.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M5 for dante with 4. 2 Spawns each wave.</li>
                              <li>Mandatory fight at the start of M16 Dante with 5 of them. Same with Lucia in M12.</li>
                              <li>Dante can knock them down instantly with shotgun, which allows him to easily one cycle.</li>
                              <li>The same can be said with Lucia's Cranky Bombs, but also gets huge mileage of DT building.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Abyss Goat</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Savage Golem</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/abyssgoat.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/savagegolem.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">100</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">2,500</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in timer mission for both characters. Also final elevator in Trismagia's mission.</li>
                              <li>A lot harder to knock down when they start attacking. DT and Air Raid is used a lot for these kind of scenarios.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M1 Lucia at the end mission. Also appears in the ruins mission before moth boss for both characters.</li>
                              <li>Can inflict poison.</li>
                              <li>Only gets stunned at certain HP%. This is when part of it's limbs are destoryed.</li>
                              <li>80% cuts head - 60% cuts right arm - 40% cuts left arm - 15% only legs left</li>
                              <li>Has ability to regenerate, must be killed quickly when it's legs are the only parts left.</li>
                              <li>Always killed as last because they have the fastest death animation to despawn.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Puia</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Demonochorus</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/puia.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/demonochorus.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">500</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">20</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in early game, but usually ignored.</li>
                              <li>Dies instantly with DT shots or shotgun.</li>
                              <li>Can delay from receiving damage due to the distance and enviroment block.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in moth mission first then mandatory for timer mission.</li>
                              <li>Usually approaches to player due to their high speed.</li>
                              <li>Always killed as last on any wave due to their long despawn animation.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Flame Bat</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Spicere</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/flamebat.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/spicere.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Frost Heart</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Encountered in M2 Dante otherwise only appears in specific areas.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in factory mission only. Flame Heart room.</li>
                              <li>Cannot deal damage against it at all. The moment you hit or get close by, it starts to self-destruct</li>
                              <li>Building style point is the only purpose of it's existence by timing your dodge.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Sargasso</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Erupt Gel</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/sargasso.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/eruptgel.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">300</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Electro Heart</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Encountered in M11 Dante only.</li>
                              <li>Doesn't require killing them. You'd only need to complete the mechanism.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Completely ignored in the run.</li>
                              <li>Only appears in Lucia's underwater missions.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Blade</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Infestant</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/blade.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/infestant.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1,200</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">50</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Flame Heart</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Completely ignored in the run.</li>
                              <li>Only appears in Lucia's underwater missions.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Only appears in M4 lucia at the area where offence heart is located.</li>
                              <li>Beat 6 infestants to pick up the amulet.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Infested Tank</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Freki & Geri</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/infestanttank.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/frekigeri.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">3,600</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">3,200</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">100</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>M5 only with Dante.</li>
                              <li>Highly recommended to kill the first tank with DT helm breaker spam once there is enough DT gauge.</li>
                              <li>Second and third tanks are hard to end perfectly. Because, it depends on dante's current state of HP and DT gauge.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in Dante only Missions. First is at the start of M5 then it will only appear with Bolverk fights.</li>
                              <li>It is important to target switch between the dogs because their armor break state gives them large amount of iframes before you could damage them again.</li>
                              <li>It is important to note the melee opportunities against them which saves a lot of DT. One of the chances are doing High Time once after each bounce nearby or when they stand still you can spam stingers.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Tartarussian</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Plutonian</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/tartarussian.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/plutonian.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">7,500</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">180</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">10,000</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">240</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Only appears in M2 Lucia.</li>
                              <li>Check boss section.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Only appears in M12 Dante and M8 as Lucia.</li>
                              <li>Check boss section.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Nefasvermis</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Secretary</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/nefasvermis.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/secretary.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">1</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">5,000</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">100</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Gets summoned by nefasturris.</li>
                              <li>Check boss section.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Only appears in M17 Dante.</li>
                              <li>You don't have to fight them at all.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Infested Chopper</p>
                      </th>
                      <th colspan="4" class="enemy-name">
                          <p style="vertical-align: inherit;">Orangguerra</p>
                      </th>
                  </tr>
                  <tr>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/infestedchopper.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                      <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/orangguerra.png')}}" width="120" height="120" /></th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                      </th>
                      <th class="w93-1">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">7,500</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Ꝏ</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">9,000</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">180</dl></dl>
                      </th>
                      <th class="w93-2">
                          <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">none</dl></dl>
                      </th>
                  </tr>
                  <tr>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M5 Dante.</li>
                              <li>Check boss section.</li>
                          </ul>
                      </td>
                      <td colspan="4">
                          <ul>
                              <li>Appears in M3 Dante and M4 Lucia.</li>
                              <li>Check boss section.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                    <th colspan="4" class="enemy-name">
                        <p style="vertical-align: inherit;">Jokatgulm</p>
                    </th>
                    <th colspan="4" class="enemy-name">
                        <p style="vertical-align: inherit;">Furiataurus</p>
                    </th>
                </tr>
                <tr>
                    <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/jokatgulm.png')}}" width="120" height="120" /></th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                    </th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                    </th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                    </th>
                    <th rowspan="2" class="image"><img src="{{asset('images/DMC2Files/Enemies/furiataurus.png')}}" width="120" height="120" /></th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">HP</dl></dl>
                    </th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Armor</dl></dl>
                    </th>
                    <th class="w93-1">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Weakness</dl></dl>
                    </th>
                </tr>
                <tr>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">7,500</dl></dl>
                    </th>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">250</dl></dl>
                    </th>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Electro Heart</dl></dl>
                    </th>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">15,000</dl></dl>
                    </th>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">400</dl></dl>
                    </th>
                    <th class="w93-2">
                        <dl style="vertical-align: inherit;"><dl style="vertical-align: inherit;">Frost Heart</dl></dl>
                    </th>
                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li>Appears in M4 Dante and M3 Lucia.</li>
                            <li>Check boss section.</li>
                        </ul>
                    </td>
                    <td colspan="4">
                        <ul>
                            <li>Appears in M8 Dante.</li>
                            <li>Check boss section.</li>
                        </ul>
                    </td>
                </tr>
              </tbody>
          </table>                   
    </div>
    
    <div id="clearit"></div>
    </div>
@endsection