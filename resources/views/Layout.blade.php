<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title') - DMCSpeedruns</title>
<link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/body.css')}}">
</head>
<div id="container">
<body>
    <div id="header">
        <a href="/" class="Logo"></a>
        <div class="header-right">
        <div class="wrap">
            <div class="search">
               <input type="text" class="searchTerm" placeholder="What are you looking for?">
               <button type="submit" class="searchButton">
                🔎
              </button>
            </div>
         </div>
        </div>
    </div>
    <div id="sidenav">    <div class = "sidenavcontent">
        <img class="logo" src="../images/DMCLogo.png"/>
        <img class="borderimage" src="../images/sidebar-border.jpg"/>
      <div id = "links">
      <h3>Main Page</h3>
          <div class="list">
              <ul>
              <li><a href="/">Home</a></li>
              <li><a href="#">Help Out!</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">News Archive</a></li>
              </ul>
<img class="borderimage" src="../images/sidebar-border.jpg"/>
          </div> <!-- list 1 -->
                  <h3>Games</h3>
          <div class="list">
              <ul>
              <li><a href="/DMC1">Devil May Cry 1</a></li>
              <li><a href="/DMC2">Devil May Cry 2</a></li>
              <li><a href="/DMC3">Devil May Cry 3</a></li>
              <li><a href="/DMC4">Devil May Cry 4</a></li>
              <li><a href="/DmC">DmC: Devil May Cry</a></li>
              <li><a href="/DMC5">Devil May Cry 5</a></li>
              </ul>
              <img class="borderimage" src="../images/sidebar-border.jpg"/>
          <h3>Speedrun Tools</h3>
          </div> <!-- list 2 -->
          <div class="list">
              <ul>
              <li><a href="https://splits.io/">Splits.io</a></li>
              <li><a href="https://therun.gg/">Statistics for Runners</a></li>
              <li><a href="https://livesplit.org/">LiveSplit</a></li>
              </ul>
          </div> <!-- list 3 -->
                      <h3>Support Us</h3>
                                  <div class="list">
              <ul>
              <li><a href="#">Pay Pal</a></li>
              </ul>
          </div> <!-- list 3 -->
</div> <!-- the end of sidenav content -->
</div> <!-- the end of sidenav --></div>
    {{-- View OUTPUT --}}

    @yield('content')

<div id="footer">    <div class = "footercontent">
    <div id = "legal">
        <span class="mini"></span>Graphical assets used are owned by ©CAPCOM.<span class="options">{{now()->format('Y-m-d') }}</span>
    </div> <!-- the end of legal -->
    <br>
</div> <!-- the end of footer content -->
</div> <!-- the end of footer --></div>
</body>
</div>
</html>