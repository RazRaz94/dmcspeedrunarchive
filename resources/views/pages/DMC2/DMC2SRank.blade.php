@extends('Layout')
@section('title', 'S Rank Criteria')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/SRankTable2.css')}}">

<div id = "content">
    <div id ="left">
        <h1>S Rank Criteria</h1>
        {{ Breadcrumbs::render('DMC2SRank') }}
        <div id="toc_container">
            <p class="toc_title">Contents</p>
            <ul class="toc_list">
              <li><a href="#TimeOrb">Time and Orbs Requirements per Mission</a></li>
              <li><a href="#Basic">Basic Criteria</a></li>
              <li><a href="#StylishAverage">STYLISH AVERAGE Criteria</a></li>
              <li><a href="#Items">ITEM USED Criteria</a></li>
              <li><a href="#DevilHunt">Devil Hunter Rank Criteria</a></li>
            </ul>
            </div>
        These criteria applies to every difficulty. There are no other stipulation aside from requirements to go over with the  time and orbs for each missions.
        <h2 id="TimeOrb">Time and Orbs Requirements per Mission</h2>
        <div class="row">
            <div class="column">
                <table>
                  <caption>Dante Route</caption>
                  <tr>
                    <th>Missions</th>
                    <th>Time</th>
                    <th>Orb</th>
                  </tr>
                  <tr>
                    <td>Mission 1</td>
                    <td>9:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 2</td>
                    <td>7:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 3</td>
                    <td>4:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 4</td>
                    <td>7:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 5</td>
                    <td>13:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 6</td>
                    <td>5:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 7</td>
                    <td>8:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 8</td>
                    <td>3:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 9</td>
                    <td>5:00</td>
                    <td>2,000</td>
                </tr>
                <tr>
                    <td>Mission 10</td>
                    <td>6:00</td>
                    <td>1,500</td>
                </tr>
                <tr>
                    <td>Mission 11</td>
                    <td>12:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 12</td>
                    <td>5:00</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>Mission 13</td>
                    <td>3:00</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>Mission 14</td>
                    <td>11:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 15</td>
                    <td>5:00</td>
                    <td>2,500</td>
                </tr>
                <tr>
                    <td>Mission 16</td>
                    <td>12:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 17</td>
                    <td>4:00</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>Mission 18</td>
                    <td>7:00</td>
                    <td>1,500</td>
                </tr>
                </table>
              </div>
            <div class="column">
              <table>
                <caption>Lucia Route</caption>
                <tr>
                    <th>Missions</th>
                    <th>Time</th>
                    <th>Orb</th>
                </tr>
                <tr>
                    <td>Mission 1</td>
                    <td>8:00</td>
                    <td>2,000</td>
                </tr>
                <tr>
                    <td>Mission 2</td>
                    <td>9:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 3</td>
                    <td>14:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 4</td>
                    <td>5:00</td>
                    <td>2,500</td>
                </tr>
                <tr>
                    <td>Mission 5</td>
                    <td>8:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 6</td>
                    <td>9:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 7</td>
                    <td>8:00</td>
                    <td>1,500</td>
                </tr>
                <tr>
                    <td>Mission 8</td>
                    <td>7:00</td>
                    <td>4,000</td>
                </tr>
                <tr>
                    <td>Mission 9</td>
                    <td>4:00</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>Mission 10</td>
                    <td>11:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 11</td>
                    <td>5:00</td>
                    <td>2,000</td>
                </tr>
                <tr>
                    <td>Mission 12</td>
                    <td>12:00</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>Mission 13</td>
                    <td>4:00</td>
                    <td>1,500</td>
                </tr>
              </table>
            </div>
        </div>
        <h2 id="Basic">Basic Criteria</h2>
        <div class="row">
            <div class="column">
                <table>
                  <caption>CLEAR TIME</caption>
                  <tr>
                    <th>Going over the requirement time by</th>
                    <th>Rank</th>
                  </tr>
                  <tr>
                      <td>Within requirement</td>
                      <td>S</td>
                  </tr>
                  <tr>
                      <td>1s - 1min</td>
                      <td>A</td>
                  </tr>
                  <tr>
                      <td>1minls - 3min</td>
                      <td>B</td>
                  </tr>
                  <tr>
                      <td>3minls - 6min</td>
                      <td>C</td>
                  </tr>
                  <tr>
                      <td>6minls+</td>
                      <td>D</td>
                  </tr>
                </table>
              </div>
            <div class="column">
              <table>
                <caption>DAMAGE</caption>
                <tr>
                    <th>Taken Damage</th>
                    <th>Rank</th>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>S</td>
                  </tr>
                  <tr>
                      <td>1 - 1000</td>
                      <td>A</td>
                  </tr>
                  <tr>
                      <td>1001 - 2000</td>
                      <td>B</td>
                  </tr>
                  <tr>
                      <td>2001 - 3000</td>
                      <td>C</td>
                  </tr>
                  <tr>
                      <td>3001+</td>
                      <td>D</td>
                  </tr>
              </table>
            </div>
            <div class="column">
                <table>
                  <caption>ORBS</caption>
                  <tr>
                    <th>Reward orbs + requirement orbs</th>
                    <th>Rank</th>
                  </tr>
                  <tr>
                      <td>100% or more</td>
                      <td>S</td>
                  </tr>
                  <tr>
                      <td>75% - 99%</td>
                      <td>A</td>
                  </tr>
                  <tr>
                      <td>50% - 74%</td>
                      <td>B</td>
                  </tr>
                  <tr>
                      <td>20% - 49%</td>
                      <td>C</td>
                  </tr>
                  <tr>
                      <td>0 - 19%</td>
                      <td>D</td>
                  </tr>
                </table>
              </div>
          </div>
          <h2 id="StylishAverage">STYLISH AVERAGE Criteria</h2>
          <ul>
            <li>When your combo stops, you get point according to the style meter at the time your combo is ended. Refer to the table table below.</li>
            <li>Take the average points to decide the final rank.</li>
        </ul>
          <div class="row">
            <div class="column">
                <table>
                    <caption>1) Combo points:</caption>
                    <tr>
                      <th>The message on the screen</th>
                      <th>Combo Rank</th>
                      <th>Point</th>
                    </tr>
                    <tr>
                      <td>SHOW TIME!!</td>
                      <td>S</td>
                      <td>5 <span style="color:#d72854;"><b>(PSA)</b></span></td>
                    </tr>
                    <tr>
                        <td>ARE YOU READY ?</td>
                        <td>A</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>BINGO!</td>
                        <td>B</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>COME ON!</td>
                        <td>C</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>DON'T WORRY</td>
                        <td>D</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>NO DISPLAY</td>
                        <td>E</td>
                        <td>0</td>
                      </tr>
                      <tfoot>
                        <tr>
                          <td colspan="3">PSA: After S rank, for each 5000 style points you get, you get one more point to 6, 7, 8,...etc.</td>
                        </tr>
                      </tfoot>
                  </table>
            </div>
            <div class="column">
                <table>
                    <caption>2) Divide for average to get your rank</caption>
                    <tr>
                      <th>Average point</th>
                      <th>Rank</th>
                    </tr>
                    <tr>
                      <td>3.5 and above</td>
                      <td>S</td>
                    </tr>
                    <tr>
                        <td>2.5 to 3.4</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>1.5 to 2.4</td>
                        <td>B</td>
                      </tr>
                      <tr>
                        <td>1.0 to 1.4</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>lower than 1.0</td>
                        <td>D</td>
                      </tr>
                      <tfoot>
                        <tr>
                          <td colspan="2">Note: Average point is calculated based on "Total points" and "Number of times combos has been interrupted".</td>
                        </tr>
                      </tfoot>
                  </table>
                </div>
          </div>
          <h2 id="Items">ITEM USED Criteria</h2>
          <ul>
            <li>Regardless of the size you use for Devil Star and Vital star. You will still get the same amount of point.</li>
          </ul>
          <div class="row">
            <div class="column">
                <table>
                  <caption>1) Get points according to item used</caption>
                  <tr>
                    <th>Used item</th>
                    <th>Point</th>
                  </tr>
                  <tr>
                      <td>Devil Star</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>Vital Star</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>Holy Star</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>Smell of Fear</td>
                      <td>5</td>
                  </tr>
                  <tr>
                      <td>Gold Orb</td>
                      <td>5</td>
                  </tr>
                </table>
              </div>
              <div class="column">
                <table>
                  <caption>2) Add those points to get your final rank in items</caption>
                  <tr>
                    <th>Total points</th>
                    <th>Rank</th>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>S</td>
                  </tr>
                  <tr>
                      <td>1 - 4</td>
                      <td>A</td>
                  </tr>
                  <tr>
                      <td>5 - 9</td>
                      <td>B</td>
                  </tr>
                  <tr>
                      <td>10 - 14</td>
                      <td>C</td>
                  </tr>
                  <tr>
                      <td>15 or more</td>
                      <td>D</td>
                  </tr>
                </table>
              </div>
          </div>
          <h2 id="DevilHunt">Devil Hunter Rank Criteria</h2>
          <div class="row">
            <div class="column">
                <table>
                  <caption>1) For each category, translate your rank letter to point</caption>
                  <tr>
                    <th>Rank</th>
                    <th>Point</th>
                  </tr>
                  <tr>
                      <td>S</td>
                      <td>4</td>
                  </tr>
                  <tr>
                      <td>A</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>B</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>C</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>D</td>
                      <td>0</td>
                  </tr>
                </table>
              </div>
              <div class="column">
                <table>
                  <caption>2) Add points to convert into the final rank and orb reward</caption>
                  <tr>
                    <th>Total points</th>
                    <th>Rank</th>
                    <th>Orb reward</th>
                  </tr>
                  <tr>
                    <td>18 - 20</td>
                    <td>S</td>
                    <td>5,000</td>
                </tr>
                <tr>
                    <td>13 - 17</td>
                    <td>A</td>
                    <td>3,000</td>
                </tr>
                <tr>
                    <td>8 - 12</td>
                    <td>B</td>
                    <td>2,000</td>
                </tr>
                <tr>
                    <td>3 - 7</td>
                    <td>C</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>0 - 2</td>
                    <td>D</td>
                    <td>500</td>
                </tr>
                <tfoot>
                    <tr>
                      <td colspan="3">Note: If you use a continue you lose 1 rank.</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
          </div>
    <div id="clearit"></div>
    </div>
</div>
@endsection