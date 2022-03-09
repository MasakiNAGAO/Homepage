@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>On pleasure in the classical period</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb"><a href="{{url('/')}}">Top</a> > 古典期快楽論</h5>
    <p>本ページでは古典期ギリシアの快楽論にかんする基本テキストを公開しています。</p>
    <div>
        <h2 class="headline">翻訳</h2>
        <p>現在は以下の二点をご用意しています：</p>
        <ul>
            <li><a class="link" href="{{action('LinkController@philebus')}}">プラトン『フィレボス』(Platon, <i>Philebus</i>)</a><br>
                <ul>
                    <li>プラトン快楽論の集大成といえる比較的大部の対話篇です。西洋古典叢書より山田道夫先生のすぐれた翻訳が出ているため、冒頭部のみを掲載しています。</li>
                </ul>
            </li>
            <li><a class="link" href="{{action('LinkController@aristotle')}}">アリストテレス快楽論</a><br>
                <ul>
                    <li>アリストテレス著作集のなかから、快楽にかんする代表的な議論を抄訳しています。『ニコマコス倫理学』だけは<a class="link"
                            href="{{action('LinkController@en')}}">こちらのページ</a>に分置してあります。</li>
                </ul>
            </li>
        </ul>
    </div>
    <div>
        <h2 class="headline">基本文献</h2>
        <p>古典期の快楽論を検討するにあたって基本になると思われる研究書をいくつか推薦しておきます。何かめぼしい本が出ていれば教えてください。</p>
        <ul>
            <li><b>D. Wolfsdorf, 2013, <i>Pleasure in Ancient Greek Philosophy</i>, Cambridge University
                    Press.</b><br>
                古代ギリシアにおける快楽論を幅広くまとめた良書です。<br>
                長所：<br>
                <ul>
                    <li>1．分析的手法を用いることによる明晰な議論展開</li>
                    <li>2．初期ギリシア哲学や自然学的伝統も押さえた射程の広さ</li>
                    <li>3．現代英米圏の分析的快楽論を見据えた議論</li>
                    <li>4．長文の少ない平易な英語</li>
                </ul>
                短所：<br>
                <ul>
                    <li>1．明晰さを志向しているがゆえの過度な単純化</li>
                    <li>2．「快楽とは何か」という問題を焦点にしているため規範倫理的な考察は控えめ</li>
                    <li>3．出典明示度が低い</li>
                </ul>
            </li>
            <br>
            <li><b>J. C. B. Gosling & C. C. W. Taylor, 1982, <i>The Greeks on Pleasure</i>, Clarendon
                    Press.</b><br>
                古代ギリシアにおける哲学的な快楽論をまとめた記念碑的著作です。<br>
                長所：<br>
                <ul>
                    <li>1．オーソドックスな見取り図として有用</li>
                    <li>2．プラトン・アリストテレス・エピクロスに手厚い構成</li>
                </ul>
                短所：<br>
                <ul>
                    <li>1．キュレネ派への言及が手薄</li>
                    <li>2．古い</li>
                </ul>
            </li>
            <br>
            <li><b>J. Warren, 2014, <i>The Pleasure of Reason in Plato, Aristotle, and the Hellenistic
                        Hedonism</i>, Cambridge University Press.</b></li>
            <br>
            <li><b>G. Rudebusch, 1999, <i>Socrates, Pleasure, and Value</i>, Oxford University Press.</b></li>
        </ul>
    </div>
    <div>
        <!-- 何か -->
    </div>
    <br>
</section>
@endsection