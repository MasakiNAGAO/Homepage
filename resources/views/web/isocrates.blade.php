@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>On Isocrates</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb" id="top"><a href="{{url('/')}}">Top</a> > イソクラテス</h5>
    <p>本ページではイソクラテスの著作を少しずつ訳していきます。</p>
    <div id="aristotleIndex">
        <ul>
            <li><a class="link" href="#translation">翻訳</a>：<br>
                <ul>
                    <li><a class="link" href="#anonymIsoc">無名氏「イソクラテス伝」</a></li>
                    <li>　＊＊＊</li>
                    <li><a class="link" href="#sophist">ソフィスト反駁</a></li>
                </ul>
            </li>
            <li><a class="link" href="#biblio">基本文献</a></li>
        </ul>
    </div>
    <div>
        <h2 class="headline" id="translation">翻訳</h2>
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
    </div>
    <div>
        <h2 class="headline" id="biblio">基本文献</h2>
        <p>翻訳の底本には便宜上Loeb版を用いています：</p>
        <ul>
            <li><b>G. Norlin & L.-R. van Hook, 1928-1945, <i>Isocrates</i>, 3 vols., Loeb Classical
                    Library.</b><br>
            </li>
        </ul>
        <p>イソクラテスについてはふたつの優れた邦語文献が存在します。その他英書も含め、めぼしい参考書があれば是非教えてください。</p>
        <ul>
            <li><b>廣川洋一、1984年『イソクラテスの修辞学校――西欧的教養の源泉』岩波書店（電子書籍あり）。</b></li>
            <br>
            <li><b>柿田秀樹、2012年『倫理のパフォーマンス――イソクラテスの哲学と民主主義批判』彩流社。</b></li>
        </ul>
        <p>以下の文献でもイソクラテスの思想が哲学的な文脈で論及されています。</p>
        <ul>
            <li><b>納富信留、2021年『ギリシア哲学史』筑摩書房。</b></li>
        </ul>
    </div>
    <div>
        <!-- 何か -->
    </div>
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