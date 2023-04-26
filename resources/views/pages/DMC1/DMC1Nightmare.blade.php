@extends('Layout')
@section('title', 'Nightmare')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/DMC1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bossdatatable.css') }}">

    <div id="content">
        <div id="right">
            <img src="{{ asset('images/DMC1Files/Bosses/Nightmare.png') }}" width="270" height="206" />
        </div>
        <div id="left">
            <h1>Nightmare</h1>
            <dl id="extralinks"><b>Nightmare</b> is a pile of toxic mush with some garbage and probably one of the most
                challenging boss.
                Appears at the end of Mission 16, 18 and 20.</dl>
            <ul>
                <li>Similar to Nelo. This boss fight is scripted and will go the same way every time.</li>
                <li>DMD requires careful routing on how much you will damage it's core, since the state of it will carry
                    over each Mission.</li>
                <li>Nightmare can drag you into different space where you encounter Sargassos and bosses. This can be useful
                    in some situations.</li>
                <li>One of the few bosses where HP value is the same regardless of the difficulty.</li>
            </ul>
            <table id="bossdata">
                <caption style="background-color:rgba(77, 14, 30);">
                    <b>HP Value</b>
                </caption>
                <thead>
                    <tr>
                        <th scope="col">M16</th>
                        <th scope="col">M18</th>
                        <th scope="col">M20</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7000</td>
                        <td>7000</td>
                        <td>7000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row">Note:</th>
                        <td>on DMD Dante Deals 1/3 of Normal damage even in DT.</td>
                    </tr>
                    <tr>
                        <th scope="row">Final phase:</th>
                        <td>2000 HP Only in M20 where Nightmare goes breserk.</td>
                    </tr>
                </tfoot>
            </table>

            <h2>Strategy</h2>
            {{ "Every encounter has the same approach. Only difference is M20 where you don't have to throw 2 additional hits from Ifrit. Additionally,
                        you can't set the light early before triggering the fight. You can also skip his final phase by Holy Water. The sequence is:" }}
            <ul>
                <li>After light, get behind nightmare while building DT Runes with taunt and nade shots. You need at least 4
                    runes.</li>
                <li>Stay behind him and prepare for DT Ifrit melee as early as possible before the core pops up.</li>
                <li>For M16 and 18 you need 6 hits in DT state. 5 of them needs to be fully charged. In M20 you only need 4
                    full charge.</li>
                <li>After the last hit do melee cancel then use Holy Water.</li>
                <li>In M20, you need to pop another Holy Water during his side spike pattern to kill.</li>
            </ul>
            <table>
                <tr>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Nightmare/Nightmare1Normal.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                    <td>
                        <video width="480" height="360" controls>
                            <source src="{{ asset('video/DMC1Boss/Nightmare/Nightmare2Normal.mp4') }}" type="video/mp4">
                        </video>
                    </td>
                </tr>
            </table>
            <video style="display: block; margin: 0 auto;" width="480" height="360" controls>
                <source src="{{ asset('video/DMC1Boss/Nightmare/Nightmare3Normal.mp4') }}" type="video/mp4">
            </video>
            <h2>DMD</h2>
            <dl id="extralinks">{{"If Nightmare 1 or 3 Cycles did not go well then it's highly recommended to get sucked into nightmare space.
            Nightmare 2 is not ideal because of"}}<a href="/DMC1:Griffon"> Griffon</a>.{{" DT Management is the key of this fight."}}</dl>
                      <table id="Steps">
                        <tr>
                            <td>
                          <h3 style="color:#ff3333;">Mission 16</h3>
                              {{"The fight must end with back core not being broken."}}<br> <br>
                              {{"If you don't have the DT at max then do a taunt followed up a nade shot twice. Walk slowly to the left till nightmare preps for
                              Light Ray. Air Hike towards the core into DT HB. The first jump has to be raw."}}<br><br>
                              {{"Start doing Shoot > Stinger loop 8 times. The core should be on green during this sequence."}}<br> <br>
                              {{"Taunt then quick switch to Ifrit as soon as you finish DT Stinger loop. Shoot the nade twice as you jump away
                              from Nightmare."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare1DMDCore1.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <tr>
                            <td>
                              {{"This part is usually where things get decided whether you dive into Nightmare space or not. If you could not setup
                              the re-light well then you will have to consider doing that to not ruin the core state.
                              The mini-nightmares spawns are random but they can be dealt with well timed-jump."}}<br><br>
                              {{"It's hard to see at certain camera angle to get the visual cue of fading light. It's the best indicator of when to re-light. Otherwise,
                              you will have to count to 2 seconds."}}<br> <br>
                              {{"Walk to Nightmare's side for spike deflect prep. It's always good idea to at least shoot the nade once to maintain high Runes."}}<br> <br>
                              {{"The sequence here is DT shoot followed by 5 Full Charge Ifrit."}}</td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare1DMDCore2.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <tr>
                            <td>
                              {{"If the previous core cycle has not done correctly (Missing last Ifrit hit or re-light fail) then dive into Nightmare Space."}}<br><br>
                              {{"Immediately after the last Ifrit hit, switch to Alastor then do shoot roll till you are face to face Nightmare. This makes it
                              trigger the Light Ray again. You will need at least 4 Runes for this."}}<br> <br>
                              {{"Do Shoot > Stinger loop again but this time should be 7 not 8."}}<br> <br>
                              {{"If Nightmare's health is not at this range then dive."}}</td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare1DMDCore3.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <td>
                            {{"For the last piece, walk to Nightmare's side again for spike deflect pattern. End the fight with 5 Full Charge Ifrit."}}</td>
                          <td>
                            <video width="480" height="360" controls>
                              <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare1DMDCore4.mp4')}}" type="video/mp4">
                          </video></td>
                      </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                          <h3 style="color:#ff3333;">Mission 18</h3>
                              {{"The fight must end with cores at green state."}}<br> <br>
                              {{"Depends on what you did at movement section, one taunt should give you max Runes."}}<br><br>
                              {{"This sequence is extremely important. Note down the timing on when to jump. If you fail to do that then you won't
                              be able to get the last hit. The timing for the last two full Ifrit charges are very tight."}}<br> <br>
                              {{"Shoot > 4 Full Charge > 2 Normal hits > 2 Full Charge."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare2DMDCore1.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <tr>
                            <td>
                              {{"Before the second core, you will need to setup re-light. Be ready to deal with mini-nightmares
                              while trying to build back some runes. Walk to Nightmare's side for spike deflect prep"}}<br><br>
                              {{"DT shoot followed by 5 Full Charge Ifrit."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare2DMDCore2.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <tr>
                            <td>
                              {{"Immediately start building 5 runes while staying at the same spot. This sequence is very important to get it right, so
                              you could deal massive damage on the last hit."}}<br><br>
                              {{"DT shoot > 5 Full Charge Ifrit > 3 Normal hits > Last hit Full Charge."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare2DMDCore3.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                        <tr>
                            <td id="extralinks">
                              {{"Prep for spike deflect then finish the fight."}}<br><br>
                              {{"If everything went right, this should be the last sequence you deal with otherwise you'd have to repeat this again one more. Diving
                              into Nightmare Space is not good for this fight because"}} <a href="/DMC1:Griffon"> Griffon 4</a>
                              {{"is arguably one of the worst fights in the game as it
                              takes so much time to kill."}}<br><br>
                              {{"DT shoot followed by 5 Full Charge Ifrit"}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare2DMDCore4.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                          <h3 style="color:#ff3333;">Mission 20</h3>
                              {{"The speed of this fight depends on the re-light consistency."}}<br> <br>
                              {{"Try to build DT Runes as much as possible. Sometimes you may not have enough for the sixth hit. The jump timing is similar to
                              the second fight."}}<br><br>
                              {{"You will have to taunt twice after dpsing
                              because you will need to keep Runes management high for the re-lighting sequence."}}<br> <br>
                              {{"First sequence is DT Shoot > 6 Full Charge Ifrit."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare3DMDCore1.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                              {{"Unlike previous encoutners, you need to make sure that you are close to the light mechanic."}}<br> <br>
                              {{"You need to stay in the same line before you prep for spike deflect for few seconds."}}<br><br>
                              {{"Avoid getting stun-locked with nightmare shots is the most important part."}}<br> <br>
                              {{"Sequence is 4 Full Charge Ifrit. You can add 5th, but it can very tight to re-light and build back DT runes."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare3DMDCore2.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                              {{"Nightmare will try to move you away far from mechanic after that, so you will have to get on his left side to push him back."}}<br><br>
                              {{"You will need to have at least 6 runes."}}<br> <br>
                              {{"Sequence is DT Shoot > 5 Full Charge Ifrit."}}<br> <br></td>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare3DMDCore3.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                              {{"The last sequence for 5 Full Charge Ifrit can be rough if you didn't build 4 runes back. When that happens you will either do 6th
                              Full Charge or lose time by doing the light mechanic again."}}<br><br>
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare3DMDCore4.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <table id="Steps">
                        <tr>
                            <td>
                              {{"Final phase is troublesome because if you don't light the mechanic fast enough. Nightmare will waste a lot of time to
                              ceilling bullets. Other than that, you will have to build 5 runes to kill him before the breserk state."}}<br><br>
                              {{"Sequence can be 4 or 5 Full Charge Ifrit. The moment you see the breserk state, jump away and use untouchable."}}<br><br>
                              {{"Abuse Inferno till death. It's important to note that the reason why your input gets eaten away is due to Nightmare
                              interrupting you with a stun. Therefore, you have to be careful from mashing it."}}
                            <td>
                              <video width="480" height="360" controls>
                                <source src="{{asset('video/DMC1Boss/Nightmare/Nightmare3DMDCoreFinal.mp4')}}" type="video/mp4">
                            </video></td>
                        </tr>
                    </table>
                    <dl id="extralinks">It's good to check the <a href="/DMC1:Frequently_Asked_Questions"> Frequently Asked Questions (FAQ)</a>
                        if you have general questions regarding the bosses. </dl>
        </div>
        <div id="clearit"></div>
    </div>
    @endsection
