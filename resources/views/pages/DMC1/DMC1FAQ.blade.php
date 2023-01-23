@extends('Layout')
@section('title', 'Frequently Asked Questions')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Frequently Asked Questions</h1>
        <table class="CF">
            <tbody><tr>
            <td><b>Press CTRL+F to search for specific questions!</b>
            </td></tr></tbody></table>

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

</div>