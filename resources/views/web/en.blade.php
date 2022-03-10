@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>Nicomachean Ethics on pleasure</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb" id="top"><a href="{{url('/')}}">Top</a> > <a href="{{action('LinkController@on_pleasure')}}">古典期快楽論</a> > <a
            href="{{action('LinkController@aristotle')}}">アリストテレス快楽論</a> > ニコマコス倫理学</h5>
    <p>本ページではアリストテレス『ニコマコス倫理学』における主だった快楽論を抄訳してあります。以下のリンクから各節に飛んでください（リンクが付いていないものは未翻訳です）。
        <br><b>日本語／原文にカーソルを合わせると対応する原文／日本語がハイライトされる仕掛けになっています。</b><br>
        底本はSusemihlのTeubner旧版（1880）です。
    </p>
    <div id="aristotleIndex">
        <ul>
            <li><a class="link" href="#gamma10">Γ10: 節度と放埓に関わる快楽の種類</a></li>
            <li><a class="link" href="#gamma11">Γ11: 欲望の種類</a></li>
            <li><a class="link" href="#gamma12">Γ12: 節度と放埓の実践的考察</a></li>
            <li><a>Η4: 端的な無抑制</a></li>
            <li><a>Η5: 獣的・病的な無抑制</a></li>
            <li><a>Η6: 激情・欲望による無抑制</a></li>
            <li><a>Η7: 軟弱さ</a></li>
            <li><a>Η8: 無抑制と放埓の区別</a></li>
            <li><a>Η9: 抑制の間接的規定</a></li>
            <li><a class="link" href="#eta11">Η11: 先行する快楽論の紹介</a></li>
            <li><a class="link" href="#eta12">Η12: 快楽と善</a></li>
            <li><a class="link" href="#eta13">Η13: 快楽と幸福</a></li>
            <li><a class="link" href="#eta14">Η14: 身体的快楽</a></li>
            <li><a class="link" href="#kappa1">Κ1: 快楽をめぐる諸論点</a></li>
            <li><a class="link" href="#kappa2">K2: エウドクソスの快楽論</a></li>
            <li><a class="link" href="#kappa3">K3: 快楽非善論をめぐって</a></li>
            <li><a class="link" href="#kappa4">Κ4: 快楽と活動</a></li>
            <li><a class="link" href="#kappa5">K5: 快楽の種類</a></li>
            <li><a class="link" href="#kappa6">K6: テロスとしての幸福</a></li>
            <li><a class="link" href="#kappa7">Κ7: 幸福と知性</a></li>
        </ul>
    </div>
    
    <h2 class="headline">ニコマコス倫理学 (ΗΘΙΚΑ ΝΙΚΟΜΑΧΕΙΑ)</h2>
    @foreach($categories as $category)
        <section id="{{$category->name}}">
        <h4>{{$category->headline}}　[<a href="#top" class="link">Top</a>]</h4>
            @if($category->caption != null)
            <p class="caption"><?=sprintf($category->caption)?></p>
            @endif
            @foreach($texts as $text)
                @if($text->category_id == $category->id)
                <div class="translationSet">
                    <div class="japTranslation">
                        <?=sprintf($text->japaneseTranslation)?>
                    </div>
                    <div class="greekText">
                        <?=sprintf($text->greekText)?>
                    </div>
                </div>
                <br>
                @endif
            @endforeach
        </section>
    @endforeach
    
</section>
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
<br>
</section>
@endsection