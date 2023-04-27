@extends('Layout')
@section('title', 'News Archive')
@section('content')

<link rel="stylesheet" href="{{asset('css/DMCIndexPage.css')}}">
<link rel="stylesheet" href="{{asset('css/FAQs.css')}}">

<div id = "content">
    <div id ="left">
        <h1>News Archive</h1>
        <dl class="CF2">
        <b>At the moment this is work in progress page due to gathering the datas from our previus events. You can see all of our previous work by scrolling through
             the twitter timeline below.</b>
            </dl>
            <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/DmcSpeedruns?ref_src=twsrc%5Etfw">Tweets by DmcSpeedruns</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <div id="clearit"></div>
    </div>
@endsection