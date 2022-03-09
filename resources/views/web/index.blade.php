@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>Home page</h1>
</section>
<section id="mainExplain">
    <p>長尾柾輝：古代ギリシアの倫理思想史を研究しています。<br>
        私のプロフィールや研究内容の詳細を知りたい方は<a class="link" href="{{ action('LinkController@profile') }}">こちら</a>をご覧ください。
    </p>
    <div>
        <h2 class="headline">サイト概要</h2>
        <p>本サイトでは私の研究分野にかんする情報（思想史的解説と試訳が主）を公開しています。</p>
        <ul>
            <li><a class="link"
                    href="{{ action('LinkController@minor_socratics') }}">小ソクラテス派</a>：小ソクラテス派についての基本資料（古典テキストの試訳と伝記的解説）を掲載しています。
            </li>
            <li><a class="link" href="{{ action('LinkController@on_pleasure') }}">古典期快楽論</a>：プラトン『フィレボス』冒頭部の試訳［<a class="link"
                    href="{{ action('LinkController@philebus') }}">Link</a>］およびアリストテレス快楽論の抄訳［<a class="link"
                    href="{{ action('LinkController@aristotle') }}">Link</a>］を掲載しています（『ニコマコス倫理学』の訳のみ<a class="link"
                    href="{{ action('LinkController@en') }}">こちら</a>に分置）</li>
            <li><a class="link" href="{{ action('LinkController@isocrates') }}">イソクラテス</a>：イソクラテスの著作を少しずつ訳しています</li>
        </ul>
        <p>試訳のページでは、日本語／原文にカーソルを合わせる（スマホならタップする）と対応する原文／日本語がハイライトされる仕掛けになっています。<br>
            訳文に不審点等があれば、是非<a class="link" href="{{ action('LinkController@contact') }}">こちら</a>よりお知らせください。なお、訳文は特に断りなく修正される可能性があります。
        </p>
    </div>
    <div>
        <h2 class="headline">更新の履歴</h2>
        <ul>
            <li>2022/03/08: ニコマコス倫理学の翻訳を拡充しました［<a href="{{ action('LinkController@en') }}" class="link">Link</a>］</li>
            <li>2022/02/24: ダークモードに対応しました</li>
            <li>2022/02/22: 無名氏「イソクラテス伝」の翻訳を掲載しました［<a href="{{ action('LinkController@isocrates') }}" class="link">Link</a>］
            </li>
            <li>2022/02/16: サイトを開設しました</li>
        </ul>
    </div>
    <br>
</section>
@endsection