@extends('Layout')
@section('title', 'Community')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/accordion.css')}}">
<link rel="stylesheet" href="{{asset('css/MarathonTable.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Community</h2>
            <div id="toc_container">
                <p class="toc_title">Contents</p>
                <ul class="toc_list">
                  <li><a href="#ContactUs">Contact Us</a></li>
                  <li><a href="#Tournaments">Tournaments</a></li>
                  <li><a href="#Marathons">Marathon Runs</a></li>
                </ul>
                </div>
                <h2 id="Contact Us">Contact Us</h2>
                {{"If you want to come chill with the DMC Runners or have any questions on anything DMC related, come check us out"}}<br>
                <h3 style="border-bottom:none;">Twitch Channel</h3>
                Community events and more will be streamed here: <a href="https://www.twitch.tv/dmcspeedruns">https://www.twitch.tv/dmcspeedruns</a>
                <h3 style="border-bottom:none;">Discord Server</h3>
                This discord is for discussing and getting help with speedrunning games in the Devil May Cry series,
                as well as sharing your streams and hanging out with the other neat folks who run these games.
                <a href="https://discord.gg/PAabkkvY">You join us with this invite link</a>

                <h2 id="Tournaments">Tournaments</h2>
                <div class="accordion">
                    <input id="tab-1" type="checkbox">
                    <label for="tab-1">Devil May Cry 1 - 2020 Championship</label>
                    <div class="ShowContent">
                        <dl style="margin:10px">
                            <ul>
                                <li><a href="https://challonge.com/yciu9zyz">Bracket</a></li>
                                <li>Entrants: 11</li>
                            </ul>
                          <b>Top 8 Results</b>
                          <ol>
                            <li>Mick</li>
                            <li>Zetta</li>
                            <li>RedPyramid</li>
                            <li>LonerHero</li>
                            <li>Waifu</li>
                            <li>XAemonX</li>
                            <li>DigitalT [Tied]</li>
                            <li>Zerodux [Tied]</li>
                        </ol>
                    </dl>
                    </div>
                  </div>
                  <div class="accordion">
                    <input id="tab-2" type="checkbox">
                    <label for="tab-2">Devil May Cry 1 - 2021 Championship</label>
                    <div class="ShowContent">
                    <dl style="margin:10px">
                        <ul>
                            <li><a href="https://challonge.com/wx6xzdru">Bracket</a></li>
                            <li>Entrants: 16</li>
                        </ul>
                      <b>Top 8 Results</b>
                      <ol>
                        <li>Slickford_IV</li>
                        <li>coolkarmact</li>
                        <li>Waifu</li>
                        <li>DanSpence94</li>
                        <li>DizzySplits [Tied]</li>
                        <li>LonerHero [Tied]</li>
                        <li>Muty [Tied]</li>
                        <li>Zetta [Tied]</li>
                    </ol>
                </dl>
                    </div>
                  </div>

                  <div class="accordion">
                    <input id="tab-3" type="checkbox">
                    <label for="tab-3">Devil May Cry 3 - Peak of Darkness 2021</label>
                    <div class="ShowContent">
                        <dl style="margin:10px">
                            <ul>
                                <li><a href="https://challonge.com/m8jaf5tb">Bracket</a></li>
                                <li>Entrants: 12</li>
                            </ul>
                          <b>Top 8 Results</b>
                          <ol>
                            <li>LonerHero</li>
                            <li>hies</li>
                            <li>esfrenchie09</li>
                            <li>Simoteus</li>
                            <li>DizzySplits [Tied]</li>
                            <li>Jonsey [Tied]</li>
                            <li>RageCage [Tied]</li>
                            <li>Waifu [Tied]</li>
                        </ol>
                    </dl>
                    </div>
                  </div>
                <h2 id="Marathons">Marathon Runs</h2>
                <table id="Marathon">
                    <tr>
                        <td>Player</td>
                        <td>Game</td>
                        <td>Category</td>
                        <td>Event</td>
                    </tr>
                    <tr>
                        <td>Breakdown</td>
                        <td>Devil May Cry</td>
                        <td>NG+ DMD (Dante)</td>
                        <td>AGDQ 2012</td>
                    </tr>
                    <tr>
                        <td>AncientAE</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>ESA 2014</td>
                    </tr>
                    <tr>
                        <td>Maxylobes</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>AGDQ 2017</td>
                    </tr>
                    <tr>
                        <td>Maxylobes</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>SGDQ 2019</td>
                    </tr>
                    <tr>
                        <td>MickWasTaken</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>DevilNeverCry</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>ESA Together 2020</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>Thunderthon: Winter Wonderland</td>
                    </tr>
                    <tr>
                        <td>Chad_Thorsen</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>Thunderthon: HallowSpeed</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>UKSG Winter 2021</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>BSG Online #3</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>WASD 2021</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>ESA Summer 2021</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>All Collectibles - Normal (Dante)</td>
                        <td>Lime Aid 2.0</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry</td>
                        <td>All Collectibles - DMD (Dante)</td>
                        <td>SGDQ 2022</td>
                    </tr>
                    <tr>
                        <td>flennils</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>Fastest Furs Fall Fest 2022</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>All Collectibles - Normal (Dante)</td>
                        <td>WASD 2022</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>All Collectibles - DMD (Super Dante)</td>
                        <td>MGS2 20th Anniversary Marathon</td>
                    </tr>
                    <tr>
                        <td>DanSpence94</td>
                        <td>Devil May Cry</td>
                        <td>Any% - Normal (Dante)</td>
                        <td>UKSM i68</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 2</td>
                        <td>NG Dante</td>
                        <td>Reddit May Cry Charity Stream II</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 2</td>
                        <td>NG Dante</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 2</td>
                        <td>NG Dante</td>
                        <td>Thunderthon: HallowSpeed</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 2</td>
                        <td>NG Dante</td>
                        <td>ESA Winter 2021</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 2</td>
                        <td>NG Lucia</td>
                        <td>UKSG Autumn 2021</td>
                    </tr>
                    <tr>
                        <td>Flicky</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG+ Dante Normal</td>
                        <td>AGDQ 2013</td>
                    </tr>
                    <tr>
                        <td>Glaeder</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>PreNASA 2016</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>NASA 2016</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Vergil Heaven or Hell</td>
                        <td>ARPGME 2017</td>
                    </tr>
                    <tr>
                        <td>Simoteus</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>ARPGME 2017</td>
                    </tr>
                    <tr>
                        <td>zerodux</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Vergil Normal</td>
                        <td>FURiOUS-A-THON</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>NoReset x DreamHack Atlanta 2018</td>
                    </tr>
                    <tr>
                        <td>Simoteus</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>ARPGME 2018</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>WWJSRFHD4</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG+ Vergil Normal</td>
                        <td>Shots Fired: Annihilation</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG+ Vergil Normal</td>
                        <td>RUSC-A-THON 2019</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>GDQx 2019</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Calithon 2019</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Reddit May Cry Charity Stream II</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG+ Dante Heaven or Hell</td>
                        <td>RUSC-a-Thon 2020</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>ESA Summer 2020</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Thunderthon: PawsYourGame</td>
                    </tr>
                    <tr>
                        <td>zerodux</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Vergil Normal</td>
                        <td>Maratona SGPT 2020</td>
                    </tr>
                    <tr>
                        <td>Waifu</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Vergil Normal</td>
                        <td>AGDQ 2021</td>
                    </tr>
                    <tr>
                        <td>LonerHero</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Vergil Normal</td>
                        <td>Thunderthon: 2021</td>
                    </tr>
                    <tr>
                        <td>Mysterion_06_</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Connect_Ger Weekend Runs</td>
                    </tr>
                    <tr>
                        <td>parklez</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>7ª Maratona Online</td>
                    </tr>
                    <tr>
                        <td>igna77</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Lime Aid 2.0</td>
                    </tr>
                    <tr>
                        <td>BanHitGaming</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>NoHolidays Allowed 2022</td>
                    </tr>
                    <tr>
                        <td>XirZs</td>
                        <td>Devil May Cry 3: SE</td>
                        <td>NG Dante Normal</td>
                        <td>Hack&Speed SRE 2022</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Vergil Devil Hunter</td>
                        <td>SGDQ2016</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4</td>
                        <td>NG Devil Hunter</td>
                        <td>ARPGME 2017</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4</td>
                        <td>NG+ Devil Hunter</td>
                        <td>Themeathon 80s</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG+ Vergil HoH</td>
                        <td>Shots Fired: Overkill</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>MWSS2018</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>pre-Themeathon2018</td>
                    </tr>
                    <tr>
                        <td>PvtCb</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>NASA 2018</td>
                    </tr>
                    <tr>
                        <td>Mekarazium vs. PvtCb</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>ARPGME 2018</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>Shots Fired: Annihilation</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>Valuethon 6</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>ESA Summer 2019</td>
                    </tr>
                    <tr>
                        <td>dakkaduck</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG+ Vergil HoH</td>
                        <td>RUSC-a-thon: Baldej Edition</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Lady/Trish Devil Hunter</td>
                        <td>ESATogether2020</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>SGDQ2020</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>Reddit May Cry Charity Stream II</td>
                    </tr>
                    <tr>
                        <td>Tymethief</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG+ Lady/Trish LDK</td>
                        <td>Reddit May Cry Charity Stream III</td>
                    </tr>
                    <tr>
                        <td>Tymethief</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG+ Lady/Trish LDK</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>SpeedSouls Charity Marathon 2020</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>SpeedSouls Charity Marathon 2019</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>ESA Winter 2021</td>
                    </tr>
                    <tr>
                        <td>R3NZERO</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Vergil Devil Hunter</td>
                        <td>RUSC-a-thon</td>
                    </tr>
                    <tr>
                        <td>R3NZERO</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Vergil Devil Hunter</td>
                        <td>BallDJ-thon II</td>
                    </tr>
                    <tr>
                        <td>Mysterion_06_</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG+ Vergil Human</td>
                        <td>SGDE 2020</td>
                    </tr>
                    <tr>
                        <td>Mysterion_06_</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Vergil Devil Hunter</td>
                        <td>Connect_Ger Weekend Runs</td>
                    </tr>
                    <tr>
                        <td>R3NZERO</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>Lime Aid 2.0</td>
                    </tr>
                    <tr>
                        <td>Mekarazium vs R3NZERO</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>SpeedDocsAThon 2021</td>
                    </tr>
                    <tr>
                        <td>UnintendedChaos</td>
                        <td>Devil May Cry 4: SE</td>
                        <td>NG Nero/Dante Devil Hunter</td>
                        <td>HEKATHON Offline 2022</td>
                    </tr>
                    <tr>
                        <td>Aphox</td>
                        <td>DmC: Devil May Cry </td>
                        <td>Any% HoH</td>
                        <td>ESA 15 Purple</td>
                    </tr>
                    <tr>
                        <td>JJToro</td>
                        <td>DmC: Devil May Cry DE</td>
                        <td>NG Human</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>Mekarazium</td>
                        <td>DmC: Devil May Cry</td>
                        <td>NG+ Dante Must Die</td>
                        <td>ESATogether2020</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>DmC: Devil May Cry</td>
                        <td>Dante + Vergil NG Nephilim</td>
                        <td>RUSC-a-Thon 2019</td>
                    </tr>
                    <tr>
                        <td>JJToro</td>
                        <td>DmC: Devil May Cry</td>
                        <td>Any% New Game Human / No IG</td>
                        <td>Thunderthon: HallowSpeed</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>DmC: Vergil's Downfall</td>
                        <td>NG Human</td>
                        <td>RUSC-a-THON: BE</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>DmC: Vergil's Downfall</td>
                        <td>NG Human</td>
                        <td>RUSC-a-Thon 2020</td>
                    </tr>
                    <tr>
                        <td>Bulkich</td>
                        <td>DmC: Vergil's Downfall</td>
                        <td>NG+ Human</td>
                        <td>RUSC-a-Thon 2022</td>
                    </tr>
                    <tr>
                        <td>Froob</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>ESA Summer 2019</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>Reddit May Cry Charity Stream IV</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>AGDQ 2020</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>ESA Summer Online</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>Thunderthon: PawsYourGame</td>
                    </tr>
                    <tr>
                        <td>zerodux</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>Brazilians Against Time 2020</td>
                    </tr>
                    <tr>
                        <td>zeromodoki vs. yamanaru</td>
                        <td>Devil May Cry 5</td>
                        <td>NG+ Faustless DevilHunter</td>
                        <td>RTA in Japan 2020</td>
                    </tr>
                    <tr>
                        <td>zerodux</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>Maratona SGPT 2020</td>
                    </tr>
                    <tr>
                        <td>THEhoboGaming_</td>
                        <td>Devil May Cry 5</td>
                        <td>NG Human</td>
                        <td>Power Up With Pride 2020</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Vergil Human</td>
                        <td>Thunderthon: Winter Wonderland</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>Calithon Stand Strong</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>Thunderthon: 2021</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Vergil Human</td>
                        <td>Fleetfest 2021</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>Valuethon 2021</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Vergil Human</td>
                        <td>SGDQ 2021</td>
                    </tr>
                    <tr>
                        <td>DECosmic</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>ARPGME</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>ESA Summer 2021</td>
                    </tr>
                    <tr>
                        <td>Scruffington</td>
                        <td>Devil May Cry 5 SE</td>
                        <td>NG Nero / V / Dante Human</td>
                        <td>SpeedSouls 2022</td>
                    </tr>
                </table>
    </div>

    <div id="clearit"></div>
    </div>
@endsection