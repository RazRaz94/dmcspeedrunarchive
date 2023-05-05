@extends('Layout')
@section('title', 'Style & Orb formulas')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/dmc2formula.css')}}">

<div id = "content">
    <div id ="left">
        <h1>Style and Orb Formulas</h1>
        {{ Breadcrumbs::render('DMC2StyleOrbFormulas') }}
        <div id="toc_container">
          <p class="toc_title">Contents</p>
          <ul class="toc_list">
            <li><a href="#StyleFormulas">Style Formulas</a></li>
            <li><a href="#RedOrb">Red Orb Drop Formulas</a></li>
            <ul><li><a href="#bons">Bonuses</a><li></ul>
            <li><a href="#GWOrb">Green & White Orb Drop Formulas</a></li>
          </ul>
          </div>
          <h2 id="StyleFormulas">Style Formulas</h2>
          <p>These formulas are added after an attack:</p>
          <ul>
            <li>Style point of attack x (Number of attacks + 9) x 0.1 </li>
            <li>If you perform an attack repeatedly, the style point for that attack will be reduced by 50%.</li>
            <li>If you do another attack then the style value will return to normal.</li>
            <li>The finisher hit gets a 5x bonus to style point gained.</li>
          </ul>
          <p>Time to make a combo (Basically style meter time): From when style point was last added: Within 1.8s</p>
          {{"Note: When in the middle of a roll (Wallhike counts from the start until you bounce off the wall) or SDT activation until you can move again, the style timer will be stopped."}}

          <table id="data">
            <caption>The points you get after you end a combo from a speific rank</caption>
            <tr>
              <th rowspan="2">Method</th>
              <th colspan="3" scope="colgroup">Distance to attack</th>
            </tr>
            <tr>
              <th scope="col">Far</th>
              <th scope="col">Middle</th>
              <th scope="col">Close</th>
            </tr>
            <tr>
              <th scope="row">Jump</th>
              <td>100</td>
              <td>300</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Roll</th>
              <td>500</td>
              <td>1,500</td>
              <td>2,500</td>
            </tr>
          </table>

          <table id="data">
            <caption>How combo ranks change</caption>
            <tr>
              <th>Total style points</th>
              <th>Combo Rank</th>
              <th>Display</th>
            </tr>
            <tr>
              <td>1499-</td>
              <td>E</td>
              <td>None</span></td>
            </tr>
            <tr>
                <td>1500~4999</td>
                <td>D</td>
                <td>DON'T WORRY</td>
              </tr>
              <tr>
                <td>5000~9999</td>
                <td>C</td>
                <td>COME ON!</td>
              </tr>
              <tr>
                <td>10000~14999</td>
                <td>B</td>
                <td>BINGO!</td>
              </tr>
              <tr>
                <td>15000~19999</td>
                <td>A</td>
                <td>ARE YOU READY ?</td>
              </tr>
              <tr>
                <td>20000+</td>
                <td>S</td>
                <td>SHOW TIME!!</td>
              </tr>
          </table>
          <h2 id="RedOrb">Red Orb Drop Formulas</h2>
          <p><img src="{{asset('images/DMC2Files/2red.png')}}" width="50px" height="50px" />The amount of Red Orbs that drop when an enemy dies is based on number of points. What you will need to
            check:</p>
            <ul id="extralinks">
              <li><a href="/DMC2:Enemy">Enemy Total HP</a></li>
              <li>Combo Rank Multiplier (Refer to the table table below)</li>
            </ul>
            <table id="data">
              <tr>
                <th>Combo Rank</th>
                <th>Multiplier</th>
              </tr>
              <tr>
                <td>S</td>
                <td>x10</td>
              </tr>
              <tr>
                  <td>A</td>
                  <td>x5</td>
                </tr>
                <tr>
                  <td>B</td>
                  <td>x3</td>
                </tr>
                <tr>
                  <td>C</td>
                  <td>x2</td>
                </tr>
                <tr>
                  <td>D</td>
                  <td>x1</td>
                </tr>
                <tr>
                  <td>E</td>
                  <td>x0.5</td>
                </tr>
            </table>
            <div class="CF2">
              <b>Then Calculate the number of points you have according to this formula: <code class="formula">Enemy total HP x 0.03 x Combo rank multiplier</code></b><br>
                <b>After that crosscheck the points you have with the number of orbs the enemy will drop in the table below</b>
              </div>
              <table id="data">
                <tr>
                  <th>Point</th>
                  <th>Orbs Dropped</th>
                </tr>
                <tr>
                  <td>2,800+</td>
                  <td>3,000</td>
                </tr>
                <tr>
                    <td>2,300~2,799</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1,800~2,299</td>
                    <td>2,000</td>
                  </tr>
                  <tr>
                    <td>1,300~1,799</td>
                    <td>1,500</td>
                  </tr>
                  <tr>
                    <td>800~1,299</td>
                    <td>1,000</td>
                  </tr>
                  <tr>
                    <td>500~799</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <td>450~499</td>
                    <td>460</td>
                  </tr>
                  <tr>
                    <td>420~449</td>
                    <td>420</td>
                  </tr>
                  <tr>
                    <td>400~419</td>
                    <td>400</td>
                  </tr>
                  <tr>
                    <td>350~399</td>
                    <td>360</td>
                  </tr>
                  <tr>
                    <td>320~349</td>
                    <td>320</td>
                  </tr>
                  <tr>
                    <td>300~319</td>
                    <td>300</td>
                  </tr>
                  <tr>
                    <td>250~299</td>
                    <td>260</td>
                  </tr>
                  <tr>
                    <td>220~249</td>
                    <td>220</td>
                  </tr>
                  <tr>
                    <td>200~219</td>
                    <td>200</td>
                  </tr>
                  <tr>
                    <td>150~199</td>
                    <td>160</td>
                  </tr>
                  <tr>
                    <td>120~149</td>
                    <td>120</td>
                  </tr>
                  <tr>
                    <td>100~119</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>50~99</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>30~49</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>10~29</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>9-</td>
                    <td>5</td>
                  </tr>
              </table>
              <h3 id="bons">Bonuses</h3>
              <table id="data2">
              <caption>If your stylish rank consecutively reached and dropped in the order below, the next enemy you kill will drop x3 the orbs:</caption>
              <tr><td>C➡D➡E</td></tr>
                <tr><td>B➡C➡D</td></tr>
                  <tr><td>A➡B➡C</td></tr>
                    <tr><td> S➡A➡B</td></tr>			
              </table>
              <table id="data2">
                <caption>If your stylish rank consecutively reached and dropped in the order below, the next 10 enemies you kill will drop x10 the orbs:</caption>
                <tr><td>E➡E➡D➡D➡A➡A</td></tr>
                  <tr><td>E➡D➡C➡B➡A➡S</td></tr>
                    <tr><td>C➡C➡C➡A➡A➡A</td></tr>
                      <tr><td>C➡A➡A➡A➡A➡C</td></tr>
                      <tr><td>B➡B➡B➡B➡B➡B</td></tr>
                      <tr><td>S➡S➡E➡E➡S➡S</td></tr>			
                </table>
          <h2 id="GWOrb">Green & White Orb Drop Formulas</h2>
          <div class="CF2">
          <b>> If HP/DT bar is full White/Green orbs will never drop</b><br>
          <b>> When enemy dies and when it drops green orbs, 1 out of 256 chance for holy water to drop.</b>	
          </div>
          <dl>
          <dt><figure>
            <img src="{{asset('images/DMC2Files/2green.png')}}" width="60px" height="60px" />
          </figure></dt>
         <dd style="color:#009900; font-weight:bold;">Green Orb drop rate based on style rank and remaining health</dd>
         <dd>
          <table id="data">
            <tr>
              <th rowspan="2">HP Remaining</th>
              <th colspan="6" scope="colgroup">Drop Rate Chance</th>
            </tr>
            <tr>
              <th scope="col">S</th>
              <th scope="col">A</th>
              <th scope="col">B</th>
              <th scope="col">C</th>
              <th scope="col">D</th>
              <th scope="col">E</th>
            </tr>
            <tr>
              <th scope="row">75% to less than 100%</th>
              <td>15%</td>
              <td>10%</td>	
              <td>10%</td>
              <td>5%</td>
              <td>5%</td>
              <td> - </td>
            </tr>
            <tr>
              <th scope="row">50% to less than 75%</th>
              <td>20%</td>
              <td>15%</td>
              <td>15%</td>
              <td>10%</td>
              <td>10%</td>
              <td>5%</td>
            </tr>
            <tr>
              <th scope="row">25% to less than 50%</th>
              <td>25%</td>
              <td>20%</td>
              <td>20%</td>
              <td>15%</td>
              <td>15%</td>
              <td>10%</td>
            </tr>
            <tr>
              <th scope="row">25% to lower</th>
              <td>50%</td>
              <td>40%</td>
              <td>30%</td>
              <td>20%</td>
              <td>20%</td>
              <td>15%</td>
            </tr>
          </table>
         </dd>
         <br>
         <dt><figure>
          <img src="{{asset('images/DMC2Files/2white.png')}}" width="60px" height="60px" />
        </figure></dt>
       <dd style="color:grey; font-weight:bold;">White Orb drop rate based on style rank and remaining DT gague</dd>
       <dd>
        <table id="data">
          <tr>
            <th rowspan="2">D.T Gauge</th>
            <th colspan="6" scope="colgroup">Drop Rate Chance</th>
          </tr>
          <tr>
            <th scope="col">S</th>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">C</th>
            <th scope="col">D</th>
            <th scope="col">E</th>
          </tr>
          <tr>
            <th scope="row">75% to less than 100%</th>
            <td>10%</td>
            <td>5%</td>	
            <td>5%</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
          </tr>
          <tr>
            <th scope="row">50% to less than 75%</th>
            <td>10%</td>
            <td>10%</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
            <td> - </td>
          </tr>
          <tr>
            <th scope="row">25% to less than 50%</th>
            <td>20%</td>
            <td>15%</td>
            <td>10%</td>
            <td>10%</td>
            <td>10%</td>
            <td>5%</td>
          </tr>
          <tr>
            <th scope="row">25% to lower</th>
            <td>30%</td>
            <td>25%</td>
            <td>20%</td>
            <td>15%</td>
            <td>10%</td>
            <td>10%</td>
          </tr>
        </table>
       </dd>
       </dl>
    <div id="clearit"></div>
    </div>
</div>
@endsection