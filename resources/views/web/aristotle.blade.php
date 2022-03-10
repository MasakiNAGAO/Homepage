@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>Aristotle on pleasure</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb" id="top"><a href="{{url('/')}}">Top</a> > <a href="{{action('LinkController@on_pleasure')}}">古典期快楽論</a> >
        アリストテレス快楽論</h5>
    <p>本ページではアリストテレスの主だった快楽論を抄訳してあります。以下のリンクから各著作に飛んでください（リンクが付いていないものは未翻訳です）。
        <br>なお、『ニコマコス倫理学』については長くなるので、<a class="link" href="{{action('LinkController@en')}}">別ページ</a>に分置しておきました。<br>
        <b>日本語／原文にカーソルを合わせる（スマホならタップする）と対応する原文／日本語がハイライトされる仕掛けになっています。</b>
    </p>
    <div id="aristotleIndex">
        <ul>
            <li><a class="link" href="#AP">分析論後書</a>
                <ul>
                    <li>A29: 快と運動変化</li>
                </ul>
            </li>
            <li><a>トポス論</a>
                <ul>
                    <li>Α15: 快苦の対の有無</li>
                    <li>Β6: プロディコスの用語法</li>
                    <li>B10: 「より多く」・「より少なく」における随伴</li>
                    <li>Γ2: より望ましい善</li>
                    <li>Δ1: 類種関係による快楽非運動論</li>
                    <li>Ζ8: 定義を行うさいの留意点――「欲求」の例</li>
                    <li>Θ9: 快楽主義命題の反通念性</li>
                </ul>
            </li>
            <li><a class="link" href="#Physica">自然学</a>
                <ul>
                    <li>H3: 快楽の源泉としての感覚</li>
                </ul>
            </li>
            <li><a>魂について</a>
                <ul>
                    <li>B2: 感覚・快苦・欲望の共起</li>
                    <li>B3: 感覚能力にともなう快苦</li>
                    <li>B9: 嗅覚と快苦</li>
                    <li>Γ2: 一定の比例にともなう快楽</li>
                    <li>Γ7: 快苦の命題的機能</li>
                    <li>Γ13: 味覚と快苦</li>
                </ul>
            </li>
            <li><a>動物の運動について</a>
                <ul>
                    <li>6: 運動の始原としての善・快</li>
                    <li>7: 感覚や知性作用による受動・変容</li>
                    <li>8: 追求と忌避にともなう熱さと冷たさ</li>
                </ul>
            </li>
            <li><a>動物の生成について</a>
                <ul>
                    <li>A17-8: 性的快楽の激しさ</li>
                    <li>A20: 射精の快楽</li>
                </ul>
            </li>
            <li><a class="link" href="#Rhetoric">弁論術</a>
                <ul>
                    <li>A10: 快楽論導入</li>
                    <li>A11: 快楽論</li>
                </ul>
            </li>
            <li><a class="link" class="link" href="#Poietic">詩学</a>
                <ul>
                    <li>A4: 模倣の快楽</li>
                    <li>A14: 悲劇の快楽</li>
                </ul>
            </li>
            <li><a class="link" href="#EE">エウデモス倫理学</a>
                <ul>
                    <li>Γ2: 節度と放埓</li>
                </ul>
            </li>
            <li><a class="link" href="#MM">大道徳学</a>
                <ul>
                    <li>B7: 快楽論</li>
                </ul>
            </li>
        </ul>
    </div>
    
    @foreach($categories as $category)
        <section id="{{$category->name}}">
        <h2 class="headline">{{$category->headline}}</h2>
        <h4>{{$category->caption}}　[<a href="#top" class="link">Top</a>]</h4>
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

    <br>
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
</section>
@endsection