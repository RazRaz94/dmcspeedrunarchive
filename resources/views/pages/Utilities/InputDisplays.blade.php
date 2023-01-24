@extends('Layout')
@section('title', 'Input Displays')
@section('content')
<link rel="stylesheet" href="{{asset('css/Utilities.css')}}">
<link rel="stylesheet" href="{{asset('css/ImageModal.css')}}">

<div id = "content">
    <div id = "left">
        <h1>Input Displays</h1>
        {{"Display your controller inputs for your viewers to see, without having to add a 2nd camera to your setup.
        The purpose of this page is to help players setup streamer/video-ready overlay for your joystick, gamepad and keyboard."}}
        <a href="/DMC1#Rules">DMC1</a> {{"World Record submissions require this for all inputs."}}
        <br><br>
        {{"Here's an example of some layouts from DECosmic and Maxylobes:"}}
        <br>
        <table>
        <tr><td><a href="#img1"><img id="Thumb" src="https://i.imgur.com/VxOa5EM.png" /></a></td><td><a href="#img2"><img id="Thumb" src="https://i.imgur.com/wkpINjl.png" /></a></td></tr>
        </table>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('https://i.imgur.com/VxOa5EM.png')"></span>
          </a>
          <a href="#" class="lightbox" id="img2">
            <span style="background-image: url('https://i.imgur.com/wkpINjl.png')"></span>
          </a>
    </div>
</div>