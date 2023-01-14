<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="view port" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Devil May Cry Speedruns</title>
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/body.css')}}">
<script src="{{ asset('js/Modal.js')}}"></script>
</head>

<body>

    {{-- View OUTPUT --}}
    @yield('content')

<div id="footer">    <div class = "footercontent">
    <div id = "copyrights">
        <span class="rights"> Desgin and Content Expect footer ©2014 LonerHero - All Rights Reserved</span>
        <span class="college">{{ date('Y-m-d H:i:s') }}</span>
        <div class = "desgin">
            <a href="https://www.zaxios.com">Footer Design by Zaxios</a>
        </div> <!-- desgin -->
        <div id = "links">
            <div class="list">
                <ul>
                <li><a href="/">Home</a></li>
                <li><a href="https://www.speedrun.com/">Speedrun.com</a></li>
                <li><a href="#">News Archive</a></li>
                <br>
                <li><a href="#">Site Legend</a></li>
                </ul>
            </div> <!-- list 1 -->
            <div class="list">
                <ul>
                <li><a href="#">Games</a></li>
                <li><a href="/DMC1">Devil May Cry 1</a></li>
                <li><a href="#">Devil May Cry 2</a></li>
                <li><a href="#">Devil May Cry 3</a></li>
                <li><a href="#">Devil May Cry 4</a></li>
                <li><a href="#">DmC: Devil May Cry</a></li>
                <li><a href="#">Devil May Cry 5</a></li>
                </ul>
            </div> <!-- list 2 -->
            <div class="list">
                <ul>
                <li><a href="https://discordapp.com/invite/nJMWNSA">Discord</a></li>
                <li><a href="#">Event Calendar</a></li>
                <li><a href="#">Runners List</a></li>
                </ul>
            </div> <!-- list 3 -->
            <div class="list">
                <ul>
                <li><a href="https://www.speedrun.shop/">Speedrun Shop</a></li>
                <li><a href="https://www.speedrun.com/supporter">SRC Supporter</a></li>
                <li><a href="https://splits.io/">Splits.io</a></li>
                <li><a href="https://therun.gg/">Statistics for Runners</a></li>
                </ul>
            </div> <!-- list 4 --> 
            <div class="list">
                <ul>
                <li><a href="#">Printable version</a></li>
                <li><a href="#">DMC FAQs</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">DMCSpeedrunArchive</a></li>
                <li><a href="#">Discailmers</a></li>   
                </ul>
                <div id = "extra">
                    <div><a href="#Top">Back to Top</a></div> <!-- top div -->
                    <div><a href="mailto:mishima_lars@hotmail.com?subject=myproject">Email me</a></div> <!-- email div -->
                   </div> <!-- the end of extra -->    
            </div> <!-- list 5 -->
        </div> <!-- the end of links -->
    <div id = "legal">
        <span class="mini"></span>
          This Project is an unofficial website - Content and its Charecters are a registered trademark and copyright of each company.
    </div> <!-- the end of legal -->
    <br>
</div> <!-- the end of footer content -->
</div> <!-- the end of footer --></div>
</body>
</html>