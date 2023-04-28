@extends('Layout')
@section('title', 'Frequently Asked Questions')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Frequently Asked Questions</h1>
        {{ Breadcrumbs::render('Frequently_Asked_Questions') }}
        <table class="CF2">
            <tbody><tr>
            <td><b>Press CTRL+F to search for specific questions!</b>
            </td></tr></tbody></table>

            <fieldset>
                <legend>What is the fastest way to move ?</legend>
                {{"From fastest to slowest, the means of movement are ranked as follows:"}}
                <ul>
                    <li>Vortex 2</li>
                    <li>Vortex 1</li>
                    <li>Stinger 2</li>
                    <li>DT running</li>
                    <li>Rolling</li>
                    <li>Walk Jumping</li>
                    <li>Walking</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>What's the difference on each DMC1 release ? Is there difference for HD Collection language ?</legend>
                {{"There are gameplay differences on each DMC1 release. For PS2:"}}
                <ul>
                    <li><b>NTSC-U/C:</b> Dante takes 20% more damage. Controls are different <b style="color:#3ddb9a;">△</b> is jump.
                        Melee is <b style="color:#f0747f;">O</b> and interaction is <b style="color:#a1c2e5;">X</b></li>
                    <li><b>NTSC-J:</b> Same as US version however, control is the standard DMC default.</li>
                    <li><b>PAL:</b> runs at 50&#x3390; which is slower than NTSC (60&#x3390;).</li>
                </ul>
                {{"HD Collection:"}}
                <ul>
                    <li><b>2012 (PS3/Xbox360):</b> Numerous graphical and audio issues present in the ports,
                        including simplified or missing graphical effects, distorted or missing audio, and music failing to loop correctly.</li>
                    <li><b>Twitch Prime Drop:</b> Has a glitch where <a href="https://youtu.be/zgVUySy2Iro" target="_blank">the game speeds up in windowed mode</a>. This due to
                        how some monitors handle frame rates. Any monitor whose refresh-rate is greater than 60&#x3390;.
                    <li><b>2018 (PS4/XboxOne/PC):</b> A few of the issues above were addresse, however
                        it has new bug where Griffon's chest opening for proper hitbox in Mission 15 does not work.</li>
                </ul>
                <span style="color:#f0747f;">Changing HD Collection 2018 text to JP text does save a little time over ENG.</span>
            </fieldset>

            <fieldset>
                <legend>Is it faster to bait Skewer and jump on and kill <a href="https://devilmaycry.fandom.com/wiki/Shadow" target="_blank">Shadow </a>
                    or Just DT off the bat and shoot him ?</legend>
                {{"It's always better to just unload with DT. Shadow can also show his core instantly sometimes with a rare RNG. In Dante Must Die, it's better to bait
                Skewer instead."}}
            </fieldset>

            <fieldset>
                <legend>I don't understand Mission 2 <a href="https://devilmaycry.fandom.com/wiki/Sin_Scissors_%26_Scythe" target="_blank">Sin Scissors</a> ,
                    what am I missing here?  because i almost exclusively bounce off their blades</legend>
                {{"When the first scissor approaches you with its attack pattern don't do long jump cancel on it. Instead, do a quick one with helm breaker.
                The other two you can do long delay jump cancel so they can leave themselves vulnerable by them screaming a pattern before you helm break,
                but if you want a double hit rng pray you can wall jump. You can still try quick helm breaker for both still but the first one should always be the quick one."}}
            </fieldset>

            <fieldset>
                <legend>Is the <a href="https://devilmaycry.fandom.com/wiki/Marionette" target="_blank">Marionette</a> Mission 1 spawns always random ? Why do we quick shoot instead of melee ?</legend>
                {{"Yes, the reason why quick shoot being done sometimes is due to the player getting extremely lucky blue spawns."}}
            </fieldset>

            <fieldset>
                <legend>Why am I not dealing enough damage to <a href="https://devilmaycry.fandom.com/wiki/Nightmare" target="_blank">nightmare ?</a></legend>
                {{"Nightmare core health is determined by how many times it is hit. It starts blue, then goes green, then red and when it is red it takes significantly decreased damage.
                If you need to put extra damage on a scuffed one cycle Nightmare, attack the core on top so you don't do extra damage to the core in the rear."}}
            </fieldset>

            <fieldset><legend>Can I do Ifrit skip without Air Hike ?</legend>
                {{"Yes you can, but it's very important to have air hike for the second encounter against"}}
                <a href="https://devilmaycry.fandom.com/wiki/Phantom" target="_blank">Phantom</a>.
            </fieldset>

            <fieldset><legend>Is the room at the end of mission 9 random ?</legend>
                {{"It's not random. From start to finish, you should be shooting your grenade launcher twice to take out the first two groups,
                and then turn on DT and use grenade launcher and stinger to take out the first Fetish.
                From that point, you just need to kill the rest as soon as you can after they spawn. It's better to stand
                in the middle of the room and when each one of them hits the ground after spawning, shoot."}}
            </fieldset>

            <fieldset><legend><a href="https://devilmaycry.fandom.com/wiki/Griffon" target="_blank">Griffon</a> in Mission 15 is not getting hit at all. What is going on ?</legend>
                {{"After Holy Water, walk to the side of the arena that he is on and roll back/forth with grenades
                if you're not hitting him you can jump backwards and shoot nades."}}
            </fieldset>
    </div>

    <div id="clearit"></div>
    </div>
@endsection