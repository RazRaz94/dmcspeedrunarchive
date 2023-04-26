@extends('Layout')
@section('title', 'Turbo Setup')
@section('content')
<link rel="stylesheet" href="{{asset('css/Utilities.css')}}">
<link rel="stylesheet" href="{{asset('css/ImageModal.css')}}">

<div id = "content">
    <div id = "left">
        <h1>Turbo Setup</h1>
        {{"Generally macros/scripts/turbo are banned in speedrunning. However in "}} <a href="/DMC1#Rules">DMC1</a>
        {{" Dante Must Die, usage of turbo is allowed. This because of excessive shooting section. Most notable ones are Mission 1"}} <a href="/">Griffon 2</a>
        {{" and"}} <a href="/">Mundus</a>.
        <br>
        {{"Turbo is a feature that allows for one button press to do a repeated amount of actions.
        In other words, pressing or holding down the button that is activated under Turbo Mode, allows for the button to replicate pressing the same button over and over."}}
        <br>
        {{"On paper, it is possible to get max shooting speed on keyboard because a keyboard will actually let you mash the correct way to obtain the
        speed. Although, it's hard to maintain the consistency while performing other actions or playing the game in a long session."}}
        <h2>PC</h2>
        <table>
            <tr>
                <td>{{"You will need to use steam big picture mode go at library and manage HD collection with Controller Configuration."}}</td>
                <td><a href="#img1"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/1.png')}}" /></a>
                    <a href="#/" class="lightbox" id="img1">
                      <span style="background-image: url('images/DMC1Files/Turbo/1.png')"></span>
                    </a></td>
            </tr>
            <tr>
                <td>{{"From there, we pick right stick as it's the most suitable case for DMC1"}} </td>
                <td><a href="#img2"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/2.png')}}" /></a>
                    <a href="#/" class="lightbox" id="img2">
                      <span style="background-image: url('images/DMC1Files/Turbo/2.png')"></span>
                    </a></td>
            </tr>
            <tr>
                <td>{{"From the dropdown The Style of Input should be Directional Pad and the Layout will have to be 8 Way (Overlap)"}}</td>
                <td><a href="#img3"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/3.png')}}" /></a>
                    <a href="#/" class="lightbox" id="img3">
                      <span style="background-image: url('images/DMC1Files/Turbo/3.png')"></span>
                    </a></td>
            </tr>
            <tr>
                <td>{{"You will have to bind shoot button twice upstick and downstick. This because of the air and ground speed state difference.
                When you enable Turbo, the Repeat Rate for the Ground shooting has to remain default while the Air shooting should be on 0.928.
                Bind left or right stick for the quick Alastor / Ifrit switch."}}</td>
                <td><a href="#img4"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/4.png')}}" /></a>
                    <a href="#/" class="lightbox" id="img4">
                      <span style="background-image: url('images/DMC1Files/Turbo/4.png')"></span>
                    </a></td>
            </tr>
            <tr>
                <td>{{"Once you save and apply the changes from steam Big Picture download "}}<a href="https://www.autohotkey.com/">Auto Hot Key</a> {{"along with this "}}
                    <a href="https://cdn.discordapp.com/attachments/271255642784661505/937544823752261652/dmc1_shoot_script.ahk">script</a>
                {{"to set up Mundus 1 fight for Max Shotting speed on your J key. After you install the software, you only need to run the script.
                You should find H icon on your taskbar, which you can exit and stop the turbo key after you finish your session."}}</td>
                <td><a href="#img5"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/5.png')}}" /></a>
                    <a href="#/" class="lightbox" id="img5">
                      <span style="background-image: url('images/DMC1Files/Turbo/5.png')"></span>
                    </a></td>
            </tr>
        </table>
        <h2>Console</h2>
        {{"In general, you will have to buy third party controller that provides turbo function. Usually Hori and 8BitDo products are the most reliable in terms of quality.
        On the Other hand, PS4 users have the cheapest option with Back Button Attachment. Some good examples:"}} <br><br>
        <a href="#img6"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/6.png')}}" /></a>
        <a href="#/" class="lightbox" id="img6">
          <span style="background-image: url('images/DMC1Files/Turbo/6.png')"></span>
        </a>
        <a href="#img7"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/7.png')}}" /></a>
        <a href="#/" class="lightbox" id="img7">
          <span style="background-image: url('images/DMC1Files/Turbo/7.png')"></span>
        </a>
        <a href="#img8"><img id="Thumb" src="{{asset('images/DMC1Files/Turbo/8.png')}}" /></a>
        <a href="#/" class="lightbox" id="img8">
          <span style="background-image: url('images/DMC1Files/Turbo/8.png')"></span>
        </a>
    </div>
    <div id="clearit"></div>
    </div>
@endsection