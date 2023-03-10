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
        </div>
    </div>
