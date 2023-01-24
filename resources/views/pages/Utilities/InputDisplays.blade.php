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
          <h2>Downloads</h2>
          {{"There are plenty of good sources. For Gamepad:"}}
          <ul>
            <li> <a href="https://moonspod.itch.io/input-display" target="_blank">Input Display</a> - MoonsPod </li>
            <li> <a href="https://gamepadviewer.com/" target="_blank">Gamepad Viewer</a> - Christopher R </li>
            <li> <a href="https://github.com/KernelZechs/open-joystick-display" target="_blank">Open Joystick Display</a> - KernelZechs </li>
            <li> <a href="https://thatsmytrunks.itch.io/controllerdisplay" target="_blank"> Controller Display</a> - Fred Wood </li>
            <li> <a href="https://retro-spy.com/" target="_blank"> RetroSpy</a> - Zoggins </li>
          </ul>
          {{"Keyboard and Mouse:"}}
          <ul>
            <li> <a href="https://github.com/ThoNohT/NohBoard/releases" target="_blank">NohBoard</a> - ThoNohT </li>
            <li> <a href="https://github.com/univrsal/input-overlay/releases" target="_blank"> OBS Input Overlay </a> - Universal </li>
            <li> <a href="https://github.com/RoanH/KeysPerSecond" target="_blank"> KeysPerSecond </a> - RonanH</li>
          </ul>
          <h2>Setting up the Layout</h2>
          {{"In order to set it up accordingly, you have to pick one of the progams above."}}
          <a href="https://github.com/KernelZechs/open-joystick-display" target="_blank">Open Joystick Display</a>
          {{"is ideal for gamepad because any joystick, gamepad, or controller that connects successfully to your operating system should work."}}
          <a href="https://github.com/ThoNohT/NohBoard/releases" target="_blank">NohBoard</a>
          {{"is a great one for keyboard if you're looking to show full layouts/different sets of keys in an interface."}}
          <br><br>
          {{"Here is a step by step guide on how to achieve this:"}}
          <ol>
            <b>GamePad</b>
            <li>Once you started the program, check the input tester to ensure that buttons are mapped correctly.
              In general, this mimics your operating system dialog when you connect a gamepad.</li>
            <li>Make note of Chroma Color so that you can use Chroma Color/Key filter in OBS or XSplit.
              You can just set the color to whatever you want.</li>
            <li>Adjust Profile Window Size to your liking. Clicking [Lock] it will prevent the window from being resizable in broadcast mode.</li>
            <li>After you are done with configuration, press <b>ESC</b> to remove interface and resizes the window to whatever you have defined in your Profile Window Size.
              This is used for when you are streaming.</li>
            <li>In OBS, add Window Capture source and select Open Joystick Display.exe</li>
            <li>Right click the Window Capture source that you just added and select filter</li>
            <li>Click <b>&plus;</b> to add color key. Select Custom color to add a transparent overlay. This also works with Chroma Key, but you have
            to experiment with Similarity and Key Color Spill Reduction.</li>
            <li>Now you can close the filter window and position the GamePad wherever you like.</li>
          </ol>
          <ol>
            <b>Keyboard</b>
            <li>After you start the program, right click > load keyboard. Pick a layout of your choice</li>
            <li>If you don't want to setup or customize for DMC1 quickshooting keys ignore to step y</li>
            <li>For DMC1 quickshooting, pick game_keys1</li>
            <li>Right click > Start Editing then right click remove element till you have 2 arrow keys and spacebar.</li>
            <li>Click any arrow then Right click > Element properties</li>
            <li>Clear Text and Shift Text.</li>
            <li>In the column where it says Key codes click the number below then click remove.</li>
            <li>Click detect and press J then Add. Click Detecting then Accept.</li>
            <li>Repeat <b>Step 5</b> for the other key till 8 again with L</li>
            <li>Once you finish draging the button closer to the spacebar, right click > Stop Editing.</li>
            <li>In OBS, add Window Capture source and select NohBoard.exe</li>
            <li>Right click the Window Capture source that you just added and select filter</li>
            <li>Click <b>&plus;</b> to add color key. Select blue color to add a transparent overlay. This also works with Chroma Key, but you have
            to experiment with Similarity and Key Color Spill Reduction.</li>
            <li>Now you can close the filter window and position the Keyboard Inputs wherever you like.</li>
          </ol>
    </div>
</div>