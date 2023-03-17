@extends('Layout')
@section('title', 'Griffon')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMC1.css')}}">
<link rel="stylesheet" href="{{asset('css/bossdatatable.css')}}">

<div id = "content">
    <div id = "right">
        <img src="{{asset('images/DMC1Files/Bosses/Griffon.png')}}" width="270" height="206" />
    </div>
    <div id ="left">
        <h1>Griffon</h1>
        <dl id="extralinks"><b>Griffon</b> is a boss which encountered first in Mission 9. The actual
            mandatory fight starts from Mission 12 and it's final encounter in 15. It's infamously remarked that it kills the player run if:
        <ul>
            <li>Player gets caught on it's kite pattern in Mission 12.</li>
            <li>Taking waay to long to get knocked down in Mission 15 for the second phase</li>
            <li>Being forced to fight in M18 after <a href="/DMC1:Nightmare">Nightmare</a> drags you into the space</li>
        </ul></dl>
        <table id="bossdata">
            <caption style="background-color:rgba(77, 14, 30);">
              <b>HP Value</b>
            </caption>
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">M9</th>
                <th scope="col">M12</th>
                <th scope="col">M15</th>
                <th scope="col">M18</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Easy</th>
                <td>6000</td>
                <td>4000</td>
                <td>10000</td>
                <td>2000</td>
              </tr>
              <tr>
                <th>Standard</th>
                <td>8000</td>
                <td>4000</td>
                <td>10000</td>
                <td>4000</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th scope="row" colspan="2">Note:</th>
                <td colspan="2">on DMD Dante Deals 1/3 of Normal damage even in DT.</td>
              </tr>
            </tfoot>
          </table>
          
        <h2>Strategy</h2>
        {{"On many occasions the strategy kept changing for M12. Currently, there are 3 different approaches:"}}
        <ul>
            <li>The hardest one to pull is the Ifrit glitch (also known as Maxy punch), where you can replace bullet damage with melee the moment it hits.</li>
            <li>The standard is the Alastor Stinger after 2 Grenade Shots in DT.</li>
            <li>The safest is doing 3 lightning strike during air raid after after 2 Grenade Shots in DT.</li>
        </ul>
        {{"You use the Holy Water after you do any of the approaches above. The most important part of this fight is not get caught on Griffon's kite."}}
        </div>
    </div>