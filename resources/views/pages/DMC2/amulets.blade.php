@extends('Layout')
@section('title', 'Amulets (DMC2)')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/amulet.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/ImageTab.css')}}">
<script src="{{asset('js/ToggleableTabs.js')}}"></script>


<div id = "content">
   <div id = "right">
      <table class="infobox">
        <tbody>
        <tr>
        <th colspan="2"> 
         <video autoplay loop muted width="250px" height="250px">
            <source src="{{asset('video/DMC2Moves/heartdemo.mp4')}}" type="video/mp4">
         </video>
        </th></tr>
        <tr><td colspan="2" style="text-align: center;"><b>Demonstration of Frost Heart</b></td></tr>
      </tbody></table>
  </div>
   <div id ="left">
       <h1>Amulets</h1>
       {{ Breadcrumbs::render('DMC2Amulets') }}
       <div id="toc_container">
         <p class="toc_title">Contents</p>
         <ul class="toc_list">
           <li><a href="#Movement">Movement</a></li>
           <li><a href="#Attribute">Attribute</a></li>
           <li><a href="#Support">Support</a></li>
           <li><a href="#Table">Damage Table</a></li>
           <li><a href="#Notes">Notes</a></li>
         </ul>
         </div>
       <dl id="extralinks">
         <dt><img src="{{asset('images/DMC2Files/Amulets.png')}}" width="100px" height="100px" /></dt>
         <dd style="    margin: 1em 0 1em 7em;">
       Amulets are magic stones that augment <a href="/DMC2:Dante">Dante</a>, <a href="/DMC2:Lucia">Lucia</a> and <a href="/DMC2:Trish">Trish</a> Devil Trigger (besides the majin form),
       which plays a very important role in speedrunning.
       Although, other hearts are not really needed unless 100% speedrun is considered in future.
       There are 3 types of Devil Hearts that you can equip (only one per slot).
       Movement, Attribute and Support. Each Attribute Heart deals more damage to certain types of enemies.
         </dd>
       </dl>
       
   <h2 id="Movement">Movement</h2>
<dl>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/aerialheart.png')}}" width="60px" height="60px" />
      <figcaption>Aerial Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a flying demon bird. Location:</dd>
   <dd>
      <ul>
         <li> Dante - M2 Final chamber</li>
         <li>Lucia - M2 First chamber</li>
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/quickheart.png')}}" width="60px" height="60px" />
      <figcaption>Quick Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a running demon beast. Location:</dd>
   <dd>
      <ul>
      <li>Dante - M4 In the room north of the striking globe</li>
      <li>Lucia - M8 After clearing the moving globe puzzle</li>
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/aquaheart.png')}}" width="60px" height="60px" />
      <figcaption>Aqua Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a swimming demon fish. This heart is exclusive to <a href="/DMC2:Lucia">Lucia</a> due to underwater level. Location:</dd>
   <dd>
      <ul>
      <li>Lucia - M7 Second chamber</li>
      <li>Exclusive to Lucia due to underwater level</li>
      </ul>
   </dd>
 </dl>
 <h2 id="Attribute">Attribute</h2>
 <dl>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/electroheart.png')}}" width="60px" height="60px" />
      <figcaption>Electro Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a proud lightning demon. Lightning effect is added at the end of a sword attack meaning it extends the attacks' reach such as Stinger.
      Upgrading the melee weapons increase the number of lightning strikes at the end of combo strings. In addition to the reach and damage.</dd>
   <dd>
      <ul>
         <li>Dante - Starter Amulet</li>
         <li>Lucia - M5 After using the Evil Heart</li>
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/flameheart.png')}}" width="60px" height="60px" />
      <figcaption>Flame Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with a fierce flame demon. Adds Flaming afterimage to sword attacks and basic combos' finishers. The width of the after-image can be increased by upgrading the
      melee weapons. Location:</dd>
   <dd>
      <ul>
         <li>Dante - M7 Fly up the center of the stairs</li>
         <li>Lucia - M5 Same location as Dante</li>         
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/frostheart.png')}}" width="60px" height="60px" />
      <figcaption>Frost Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with a beautiful ice demon. Attacks freeze opponents in place for a short moment, barely giving them a chance to recover.
      Duration of the enemy freeze can be increased by upgrading the melee weapon. Location:</dd>
   <dd>
      <ul>
      <li>Dante - M16 Top right optional chamber on your map</li>
      <li>Lucia - Starter Amulet</li>
      </ul>
   </dd>
 </dl>
 <h2 id="Support">Support</h2>
 <dl>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/chronoheart.png')}}" width="60px" height="60px" />
      <figcaption>Chrono Heart</figcaption>
    </figure></dt>
   <dd> A magic stone with the heart of an old god who lived for eternity. when equipped, allows the user to slow time while attacking. Location:</dd>
   <dd>
      <ul>
         <li>Dante - M15 Wall Splat an enemy on top of the one eye that does NOT show itself; weird mark on ground</li>
         <li>Lucia - M11 Similar to Dante's location.</li>
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/healingheart.png')}}" width="60px" height="60px" />
      <figcaption>Healing Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a merciful goddess. when equipped, enhances the user's regenerative ability. Location:</dd>
   <dd>
      <ul>
         <li>Dante - M11 After solving the statue puzzle</li>
         <li>Lucia - M3 The room north of the striking globe</li>         
      </ul>
   </dd>
   <br>
   <dt><figure>
      <img src="{{asset('images/DMC2Files/offenceheart.png')}}" width="60px" height="60px" />
      <figcaption>Offence Heart</figcaption>
    </figure></dt>
   <dd>A magic stone with the heart of a vigorous battle god. when equipped, enhances the user's attack power. Location:</dd>
   <dd>
      <ul>
      <li>Dante - M5, M7, M9 ( preferably to pick in M9 during escape mission, located in a room where Lucia placed the Evil Heart that became Electro aka vendetta room in M7 )</li>
      <li>Lucia - M4 The lower path, Tunnel</li>
      </ul>
   </dd>
 </dl>
<h2 id="Table">Damage Table</h2>

<div class ="wrapper">
   <div class="buttonWrapper">
       <button class="tab-button active" data-id="dante">Dante</button>
       <button class="tab-button" data-id="lucia">Lucia</button>
   </div>
<div class="contentWrapper">
   <table class="content active" id="dante">
   <tr>
      <td></td>
      <td>Damage Normal</td>
      <td>Damage DT</td>
      <td>Armor break points</td>
      <td>DT gain</td>
      <td>Style point</td>
   </tr>
   <tr>
      <td>Electro Heart - Falling lightning</td>
      <td></td>
      <td>120</td>
      <td>50</td>
      <td>0</td>
      <td>100</td>
   </tr>
   <tr>
      <td>Flame Heart - Fire</td>
      <td></td>
      <td>12</td>
      <td>20</td>
      <td>0</td>
      <td>0</td>
   </tr>
</table>
<table class="content" id="lucia">
   <tr>
      <td></td>
      <td>Damage Normal</td>
      <td>Damage DT</td>
      <td>Armor break points</td>
      <td>DT gain</td>
      <td>Style point</td>
   </tr>
   <tr>
      <td>Electro Heart - Falling lightning</td>
      <td></td>
      <td>72</td>
      <td>50</td>
      <td>0</td>
      <td>100</td>
   </tr>
   <tr>
      <td>Flame Heart - Fire</td>
      <td></td>
      <td>12</td>
      <td>20</td>
      <td>0</td>
      <td>0</td>
   </tr>
</table>
</div>
<h2 id="Notes">Notes</h2>
<dl id="extralinks">
   <ul style="line-height:1.5;">
   <li><a href="/DMC2:Trish">Trish</a> does not generate Electro or Flame heart effects, however the damage to the enemy weakness still applies.</li>
   <li>There are certain moves from <a href="/DMC2:Dante">Dante</a> and <a href="/DMC2:Lucia">Lucia</a> such as: Death Pierce's ender does not generate any elemental effects</li>
   <li>Hearts have no effect on Majin as <a href="/DMC2:Dante">Dante</a> can fly without Aerial Heart during that form.</li>
   <li>Flame Heart is the Strongest Attribute in the game, however it absorbs the DT dramatically. Especially with the recent HD Collection bug which somehow
      interacts all enviroments when you hit enemies with <a href="/DMC2:Dante">Dante's</a> Round Trip.</li>
   <li>DT without Quick Heart does not increase attack speed.</li>
   <li>Quick Heart is used regularly in New Game+</li>
   <li>Electro Heart consumes The least DT gauge out of all three.</li>
   <li>Offence Heart is +20% damage to DT damage. This amulet however, does not work in PS2 version see <a href="/DMC2:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a>.</li>
   </ul>
</dl>
</div>
   </div>
   <div id="clearit"></div>
</div> <!-- this is the end of content -->
@endsection