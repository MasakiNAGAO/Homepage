@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>About me</h1>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb"><a href="{{url('/')}}">Top</a> > 履歴と成果物</h5>
    <p>私のプロフィールです。</p>
    <div>
        <h2 class="headline">専攻分野</h2>
        <p><b>小ソクラテス派</b>を中心とする古代ギリシアの倫理思想史。<br>
            「哲学的に見ていかなる思想が正しいのか」という問いではなく、「仮に正しくないとしても／正しくないからこそ、<b>なぜ</b>そのような思想を抱くに至るのか」という問い（哲学の背景・動機・心理をめぐる問い）に関心があります。
        </p>
    </div>
    <div>
        <h2 class="headline">履歴</h2>
        <ul>
            <li>1998年12月　生まれる</li>
            <!-- <li>2011年4月 - 2017年3月　私立武蔵中学・高等学校</li> -->
            <li>2017年4月 - 2019年3月　東京大学 前期教養課程 文科三類</li>
            <li>2019年4月 - 2021年3月　東京大学 文学部 倫理学専修</li>
            <li>2021年4月 - 現在　東京大学 人文社会系研究科 倫理学専門分野 修士課程</li>
        </ul>
    </div>
    <div>
        <h2 class="headline">成果物</h2>
        <ul>
            <li>2021年1月「シノペのディオゲネスの倫理思想――「生への志向」の哲学」（卒業論文）</li>
            <li>2021年9月「キュレネ派における〈予-考慮〉(praemeditatio)の内実」（日本哲学会一般研究発表・口頭）<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<a class="link"
                    href="https://philosophy-japan.org/wpdata/wp-content/uploads/2021/08/4a307746b7d91e2df853275b86965645.pdf">要旨リンク（外部サイト）</a>
            </li>
            <li>2022年3月「悲観する快楽主義――キュレネ派のヘゲシアス訳註」『倫理学紀要』29, pp.1-33.</li>
        </ul>
    </div>
    <br>
</section>
@endsection