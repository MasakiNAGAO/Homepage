@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>Platon's Philebus</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb" id="top"><a href="{{url('/')}}">Top</a> > <a href="{{action('LinkController@on_pleasure')}}">古典期快楽論</a> >
        プラトン『フィレボス』
    </h5>
    <p>本ページではプラトン『フィレボス』冒頭部の試訳を掲載しています。以下のリンクから各節に飛んでください（リンクが付いていないものは未翻訳です）。
        <br><b>日本語／原文にカーソルを合わせる（スマホならタップする）と対応する原文／日本語がハイライトされる仕掛けになっています。</b><br>
        底本はBurnetのOCT版ですが、B写本を重めに読んでいます。
    </p>
    <div id="aristotleIndex">
        <ul>
            <li><a class="link" href="#sec1">1．論点導入：「幸福な生」をめぐるレース</a></li>
            <li><a class="link" href="#sec2">2．快の複数性・非単一性</a></li>
        </ul>
    </div>
</section>
<br>
<script>
    const rhetJap = document.getElementsByClassName("rhetJap");
    const rhetGr = document.getElementsByClassName("rhetGr");
    if (window.matchMedia('(prefers-color-scheme: dark)').matches == false) {
        for (let i = 0; i < rhetJap.length; i++) {
            rhetJap[i].addEventListener("mouseover", function () {
                rhetJap[i].style.backgroundColor = "rgb(210, 255, 158)";
                rhetGr[i].style.backgroundColor = "rgb(210, 255, 158)";
            });
            rhetJap[i].addEventListener("mouseleave", function () {
                rhetJap[i].style.backgroundColor = "rgba(0,0,0,0)";
                rhetGr[i].style.backgroundColor = "rgba(0,0,0,0)";
            });
        }
        for (let i = 0; i < rhetGr.length; i++) {
            rhetGr[i].addEventListener("mouseover", function () {
                rhetJap[i].style.backgroundColor = "rgb(210, 255, 158)";
                rhetGr[i].style.backgroundColor = "rgb(210, 255, 158)";
            });
            rhetGr[i].addEventListener("mouseleave", function () {
                rhetJap[i].style.backgroundColor = "rgba(0,0,0,0)";
                rhetGr[i].style.backgroundColor = "rgba(0,0,0,0)";
            });
        }
    } else {
        for (let i = 0; i < rhetJap.length; i++) {
            rhetJap[i].addEventListener("mouseover", function () {
                rhetJap[i].style.backgroundColor = "rgb(10, 161, 136)";
                rhetGr[i].style.backgroundColor = "rgb(10, 161, 136)";
            });
            rhetJap[i].addEventListener("mouseleave", function () {
                rhetJap[i].style.backgroundColor = "rgba(0,0,0,0)";
                rhetGr[i].style.backgroundColor = "rgba(0,0,0,0)";
            });
        }
        for (let i = 0; i < rhetGr.length; i++) {
            rhetGr[i].addEventListener("mouseover", function () {
                rhetJap[i].style.backgroundColor = "rgb(10, 161, 136)";
                rhetGr[i].style.backgroundColor = "rgb(10, 161, 136)";
            });
            rhetGr[i].addEventListener("mouseleave", function () {
                rhetJap[i].style.backgroundColor = "rgba(0,0,0,0)";
                rhetGr[i].style.backgroundColor = "rgba(0,0,0,0)";
            });
        }
    }
</script>
@endsection