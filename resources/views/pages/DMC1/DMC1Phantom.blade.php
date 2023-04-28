@extends('Layout')
@section('title', 'Phantom')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/bossdatatable.css')}}">

<div id = "content">
    <div id = "right">
        <table class="infobox">
          <tbody><tr>
          <th colspan="2" style="text-align: center;"><i><b>Phantom</b></i>
          </th></tr>
          <tr>
          <th colspan="2"> 
            <img src="{{asset('images/DMC1Files/Bosses/DMC1_Phantom_Artbook_Scan.png')}}" width="270" height="206" />
          </th></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>HP Values - Easy</b>
          </td></tr>
          <tr><td><b>M3</b></td><td><b>M4/7</b></td></tr>
          <tr><td>3,375</td><td>1,500</td></tr>
          <tr><td><b>M16</b></td><td><b>M8</b></td></tr>
          <tr><td>2,250</td><td>4,1250</td></tr>
          <tr>
            <td colspan="2" style="background-color:#FF1F23; text-align: center;"><b>HP Values - Standard</b>
          </td></tr>
          <tr><td><b>M3</b></td><td><b>M4/7</b></td></tr>
          <tr><td>4,500</td><td>2,000</td></tr>
          <tr><td><b>M16</b></td><td><b>M8</b></td></tr>
          <tr><td>2,250</td><td>5,500</td></tr>
          <tr>
        </tbody></table>
    </div>
    <div id ="left">
        <h1>Phantom</h1>
        {{ Breadcrumbs::render('Phantom') }}
        <dl id="extralinks"><b>Phantom</b> is a boss which encountered first in Mission 3. He is also encountered in a hallway during Mission 4 and 7 which are
        not required to fight unless you desperately need the orbs. The final encounter is at Mission 8, but he can also be fought one more time in Nightmare Space M16.
        He does not have any specific difficulty approaches mainly because of fight being scripted. However, he is also one of the main reset points if:</dl>
        <ul>
            <li>Player fails to start and maintain the HB stun loop</li>
            <li>Phantom's quick RNG pattern</li>
            <li id="extralinks">Failing to meet SB requirement by taking damage (This applies the most in M3 with <a href="/DMC1:Any">Any%</a></li>
        </ul>
        <b>Note: </b>on DMD, Dante Deals 1/3 of Normal damage even in DT. Standard HP values means the rest of diffculties.
        <h2>Strategy</h2>
        {{"The idea is to keep the HB stun loop going,
        but the start up is different for both encounters. With Mission 3, the RNG is usually determined by how fast he ends his fireball pattern. For example:"}}
        <table>
        <tr>
        <td>  
        <video width="480" height="360" controls>
            <source src="{{asset('video/DMC1Boss/Phantom/SlowTurn.mp4')}}" type="video/mp4">
        </video>
        </td>
        <td>  
            <video width="480" height="360" controls>
                <source src="{{asset('video/DMC1Boss/Phantom/QuickTurn.mp4')}}" type="video/mp4">
            </video>
            </td>
        </tr>
    </table>
    <br>
    <table id="Steps">
      <tr>
          <td>
            {{"These are worst case scenario.
            You want to HB in DT as soon as possible and hope he doesn't perform fast fireball. Fast fireball pattern from phantom is the root
            of the problem."}}<br><br>
            {{"The start up may looks like a JC but that is the biggest misconception of this fight. However, you can use it as a rhythm to get
            the critical hit loops timing right."}}</td>
          <td>
            <video width="480" height="360" controls>
              <source src="{{asset('video/DMC1Boss/Phantom/LandJump.mp4')}}" type="video/mp4">
          </video></td>
      </tr>
      <tr>
        <td>
          {{"To maintain the loop, you have to be able to land another quick HB during phantom's stun animation then chase him.
          Make note of where dante could land on his back for the critical hit spot. This fight will go the same way as long as you execute it right."}}</td>
        <td>
          <video width="480" height="360" controls>
            <source src="{{asset('video/DMC1Boss/Phantom/KeyHBs.mp4')}}" type="video/mp4">
        </video></td>
    </tr>
    </table>
    <h3 style="color:#ff3333;">Mission 8</h3>
    {{"It doesn't change much here because the idea is the same. What makes this different that you have to lure him into a spot where you are comfortable with. You also have an
     advantage with the air hike ability to not worry about landing on his back, but it's highly suggested to do the same idea for the consistency sake."}}
     <table id="Steps">
      <tr>
          <td>
            {{"Phantom will always start up with a stomp. The corner start up is usually the optimal one due to the ability of landing critical hit twice.
            There is a risk though as seen in the video. Compared to the Encounter in M3, you have to hit HB twice to get stun."}} <br><br>
            {{"This means you can get his quick turn pattern which is much harder to salvage compared to his slow turn."}}</td>
          <td>
            <video width="480" height="360" controls>
              <source src="{{asset('video/DMC1Boss/Phantom/PhantomIICorner.mp4')}}" type="video/mp4">
          </video></td>
      </tr>
      <tr>
        <td>
          {{"Starting phantom II with his face stun could be more consistent. Only down side is getting used to the camera and phantom's movement where you could
          potentially whiff your HB and hit on his armor instead of his vulnerable point."}}</td>
        <td>
          <video width="480" height="360" controls>
            <source src="{{asset('video/DMC1Boss/Phantom/PhantomIIFace.mp4')}}" type="video/mp4">
        </video></td>
    </tr>
    </table>
    <h3 style="color:#ff3333;">DMD</h3>
    {{"Dante damage is significantly reduced (refer to HP Value), which means it will take more HBs and such to kill. It's not necessary to aim for the perfect fight as DMD
    in nature is extremely polarizing difficulty."}}
    <br>
    <table id="Steps">
      <tr>
          <td>
            {{"You will notice after certain amount of stuns, phantom will get discharged and goes into idle state.
            He won't be doing anything for about 3 seconds then does a fireball."}} <br> <br>
            {{" If you are not in DT or have enough runes to go back into that mode immediately,
            phantom will do his usual slow turn or quick turn."}}
          </td>
          <td>
            <video width="480" height="360" controls>
              <source src="{{asset('video/DMC1Boss/Phantom/Idlestate.mp4')}}" type="video/mp4">
          </video></td>
      </tr>
      <tr>
        <td>
          {{"Note that most of these footage are not DMD, but it should help you to get the idea."}} <br> <br>
          {{"You will likely end up chasing pahntom if things goes wrong. Use your stingers to build runes back and stun phantom whenever he tries to attack you.
          Use that opportunity to HB his critical spot."}} <br><br>
          {{"During his idle state, it's better to land couple of Alastor hits before HB unless you locked him down into a stun loop and have enough runes to keep it going."}}
        </td>
        <td>
          <video width="480" height="360" controls>
            <source src="{{asset('video/DMC1Boss/Phantom/Chase.mp4')}}" type="video/mp4">
        </video></td>
    </tr>
    </table>
    <dl id="extralinks">It's good to check the <a href="/DMC1:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a>
      if you have general questions regarding the bosses. </dl>

    </div>
    <div id="clearit"></div>
</div>
@endsection