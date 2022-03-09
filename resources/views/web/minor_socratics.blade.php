@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>On minor Socratics</h1>
    </p>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb" id="top"><a href="{{url('/')}}">Top</a> > 小ソクラテス派</h5>
    <p>本ページでは小ソクラテス派にかんする基本資料を公開しています。</p>
    <div id="aristotleIndex">
        <ul>
            <li><a class="link" href="#translation">翻訳</a>：<br>
                <ul>
                    <li><a class="link" href="#Aias">アンティステネス『アイアス』</a></li>
                    <li><a class="link" href="#Odysseus">アンティステネス『オデュッセウス』</a></li>
                </ul>
            </li>
            <li><a class="link" href="#bio">伝記</a>：<br>
                <ul>
                    <li><a class="link" href="#antisthenes">アテナイのアンティステネス</a></li>
                    <li><a class="link" href="#aristippus">キュレネのアリスティッポス</a></li>
                    <li><a class="link" href="#eukleides">メガラのエウクレイデス</a></li>
                    <li><a class="link" href="#phaidon">エリスのパイドン</a></li>
                </ul>
            </li>
            <li><a class="link" href="#biblio">基本文献</a></li>
        </ul>
    </div>
    <div>
        <h2 class="headline" id="translation">翻訳</h2>
    </div>
    <div>
        <h2 class="headline" id="bio">伝記</h2>
        <h4 id="antisthenes">アテナイのアンティステネス　[<a class="link" href="#top">Top</a>]</h4>
        <div class="bioText">
            <p class="bioTopic"><b>生没年</b><br></p>
            <p>
                生年：「Tanagraにおける戦で評判を得た（ἐν Τανάγρᾳ κατὰ τὴν μάχην
                εὐδοκιμήσας）」(『哲学者列伝』6.1)という記述から、生年の上限が推測される。おそらく紀元前424におけるDeliumの戦いを指した証言であろう。この場合、<b>生年は遅くとも紀元前445年前後だということになる</b>。
            </p>
            <p>
                没年：偽エウドキア（<i>Violarium</i>,
                p.96.6-7）によると、アンティステネスは70歳で死没したらしい。とはいえ、資料の年代（紀元後16世紀！）および他証言との不整合から、報告の信憑性には疑いが残る。
                Leuktraの戦い（紀元前371年）に対するアンティステネスのコメントをプルタルコスが紹介している（<i>Life of Lycurgus</i>,
                58f-59a）ほか、紀元前366/5年時点においてアンティステネスがなお存命中であったことを示す証言（Diodorus, <i>Library of History</i>,
                15.76.4）も残る。<b>諸家の多くは、紀元前360年ごろに没年を置いているようである</b>。
            </p>
            <p>
                死にざま：ルキアノスへの註釈者（<i>On Parasite</i>, 57）は、ルキアノスのいうτοὺς ... ἀπὸ δυσουρίας
                φθινήσαντας（排尿難で衰弱した者）がアンティステネスにあたるとしているが、おそらくエピクロスの間違いであろう。
                『哲学者列伝』6.18-9だと、アンティステネスは<b>慢性的な病によって（ἀρρωστίᾳ）死んだ</b>と報告されている。なお、ἀρρωστίαは文字通りには「強さの欠如」を意味する語であり、アンティステネスへの皮肉を含意していると思われる。
                同系列のユリアヌス（<i>Oration 9</i>, 181b）では、μακρὰν καὶ δυσανάληπτον (in Suda: δυσανάκλητον)
                ἀρρωστίαν（長く癒しがたい／呼び戻されがたい病）という表現がなされる。『哲学者列伝』6.19では、著者からアンティステネスに向けたエピグラムのなかで、“ἔθανες
                φθισκός”（彼は肺病で死んだ）と詠われる。
            </p>
            <p class="bioTopic"><b>出自</b><br></p>
            <p>
                父母：<b>父は同名のアンティステネスでアテナイ人、母はトラキア人</b>――ただし、プルタルコス（<i>On Exile</i>,
                17.607b）やクレメンス（<i>Miscellanies</i>,
                1.15.66.1）によるとフリュギアの人――だと伝わる（『哲学者列伝』6.1ほか）。当人の生地はアテナイだが、母の出自ゆえ、<b>正嫡子相当ではなかった</b>（οὐκ ...
                ἰθαγενής）らしい。こうした事情は、彼の思想形成にも重大な影響を及ぼしたと考えられる。
            </p>
            <p>
                国籍：先述のとおりアンティステネスはοὐκ ... ἰθαγενήςとされているが、その内実がどのようなものであったのかは判然としない。
                「アテナイの人（Ἄθηναῖος）」という語はふつう市民権の所持を含意するものであるから、アンティステネスの法制上の身分は――いわゆる「ノトス（νόθος）」ではなく――正式のアテナイ市民だったのかもしれない。
                トラキアの血統が事実であるのだとすれば、彼がペリクレス法（451/50BCE）の適用範囲外にいたか、戦功にともなう特例的な授権が行われていた可能性もある
            </p>
            <p class="bioTopic"><b>ソクラテス以前以後</b><br></p>
            <p>
                弁論家として：『哲学者列伝』6.1は彼がもともと<b>「弁論家ゴルギアスの講義を聴講していた（ἤκουσε Γοργίου τοῦ
                    ῥήτορος）」</b>と報告しており、『スーダ』も彼を「弁論家出身の（ἀπὸ
                ῥητόρων）ソクラテス派哲学者」と紹介する。仮にアンティステネスが文字通りゴルギアスの生徒であったのだとすれば、彼の生家の富裕さが示唆される。
                なお、弁論家時代から彼には弟子がおり、弁論術を「教えていた（ἐδίδασκεν）」。しかも、名声が高かったのだという（t.12 Prince）。
            </p>
            <p>
                哲学への「転向」？：『哲学者列伝』6.2は<b>「弁論術から哲学へ」</b>という図式を伝えるが、この図式自体はヘレニズム期の創作である可能性も高い。<b>弁論家であることと哲学者であることとは必ずしも矛盾し合わない</b>はずだからである。
                ともかくアンティステネスは、<b>ソクラテスから「忍耐力を受けとったり、平静心を見習ったりすることで、〈キュニコス＝犬的なるもの〉の端緒を開いた（καὶ τὸ καρτερικὸν λαβὼν
                    καὶ
                    τὸ ἀπαθές ζηλώσας, κατῆρξε πρῶτος τοῦ Κυνισμοῦ）」</b>。
                こうした表象は、聖ヒエロニュモス（<i>Against Jovinian</i>,
                2.14）においてさらに強調される。ヒエロニュモス曰く、ソクラテスに帰依した直後、アンティステネスは家財を売り払い、一枚の外套（palliolum）だけを手許に残した。
                この筋書きはクラテスの「転向」（『哲学者列伝』6.87）と酷似しており、並行する証拠がないことから、ヒエロニュモスの創作であったかもしれない。
                いずれにせよ、アンティステネスとソクラテスの出会いはかなり劇的なものとして記憶されていたらしく、その片鱗がフィロストラトス（<i>Life of Apollonius of
                    Tyana</i>, 4.25.1）にも見て取れる。
            </p>
            <p class="bioTopic"><b>活動場所</b><br></p>
            <p>
                居地：『哲学者列伝』6.2は彼の住居がPeiraiosにあったと伝える。このロケーションは、彼の生家が商業を営んでいたことを示唆するかもしれない。
            </p>
            <p>
                活動拠点：彼は日ごろ、キュノサルゲス（Κυνόσαργες）のギュムナシオンで講義を行っていた（『哲学者列伝』6.13）らしい。当地はνόθοιやμέτοικοι（非正格アテナイ市民や在アテナイ外国人）に開かれた施設であり、アンティステネスの出自との関連を示唆する。
            </p>
            <p class="bioTopic"><b>人間関係</b><br></p>
            <p>
                <b>プロディコス</b>：クセノフォン（<i>Symposium</i>, 4.62）は、アンティステネスとプロディコスの関係を示唆しているように見える。
                両者の間には、名称や倫理学的問題をめぐる関心が共有されていた。他方、Xen.当該証言の示唆はアイロニカルな雰囲気を醸し出してもおり、内実は判然としない。
            </p>
            <p>
                <b>プラトン</b>：『哲学者列伝』6.7など、彼とプラトンの反目を伝える逸話は数多い。ただし、ソクラテス派同士の対立を強調するのは初期の反ソクラテス的伝統におけるひとつの方法でもあった。そして、『哲学者列伝』3.35
                「疎遠であった（ἀλλοτρίως ἔχοντες）」という表現は両者の反目関係を伝えるものとしてはやや控えめであり、仲違いの実情もそう大したものではなかったのかもしれない。
            </p>
            <p>
                <b>アリスティッポス</b>：彼とアリスティッポスとの敵対関係については、意外なほど報告が少ない。『スーダ』「アリスティッポス」によると、アリスティッポスは彼を、その厳格さ／粗野さゆえに（διὰ
                τὴν
                στρυφνότητα）嘲っていた。20世紀前半の研究者Joelは、南方の血統で「猫」の気質を持った（！）アリスティッポスと、北方の血統で「犬」と称されたアンティステネスとを両極化して並べる。
            </p>
            <p>
                <b>イソクラテス</b>：著作目録第1巻（『哲学者列伝』6.15）に、彼とイソクラテスとの間の対立を連想させる書名が収録されている。イソクラテス『パネギュリコス』188-9も両者間の衝突を匂わせる。
            </p>
            <p>
                <b>アルキビアデス</b>：プロクロス『プラトン「アルキビアデス」註解』98.14-16は、彼がその著作『ヘラクレス』のなかでアルキビアデスに（おそらく肯定的な仕方で）言及していたことを示す。とはいえ無論、否定的と思われる言及も多い。
            </p>
            <p class="bioTopic"><b>古代における評価</b><br></p>
            <p>
                名声：<b>アンティステネスはしばしばプラトン、クセノフォンと並び立つ最重要の哲学的著述家のひとりに数え入れられる
                </b>。
                キケロ「アッティクスへの書簡」12.38.5は、アンティステネスの著作が共和政末期のローマにおいてそこまで評価されていなかったことを示唆する一方で、その鋭さを個人的に称賛している。
            </p>
            <p>
                綽名：『哲学者列伝』6.13がἉπλοκύων（単純な／端的な／ただの犬）という綽名を伝えている。『哲学者列伝』はこれが彼の生前からの呼称であることを示唆しているように見えるが、必ずしもそうであるとは限らない。
                接頭辞Ἁπλο-にアンティステネスの言語論との関連を見出そうとする論者も存在する。
            </p>
            <p class="bioTopic"><b>著述活動</b><br></p>
            <p>
                多作：<b>『哲学者列伝』6.15-8に長大かつ構造化された文献目録が記載されている</b>。古代においてアンティステネスの著作が有したインパクトの大きさを窺わせ、彼の思索の広がりを示す有用な資料だと言うことができる。ともすれば、学説誌的な図式化を免れた直接的証言のひとつだとも見なしうるだろう。
                著作目録の作成者・作成時期は不明だが、錯綜した書名から、比較的後代の編纂が想定される。なお、『哲学者列伝』6.18は、ティモンによるアンティステネスへの言及として、<b>“παντοφυῆ
                    φλέδονά”（なんでも生み出す駄弁家）</b>という批判を挙げている。
            </p>
            <p>
                対話篇：『哲学者列伝』2.64は、Σωκρατικοὶ
                διαλόγοιのうち、プラトン、クセノフォン、アンティステネス、アイスキネスのものは確実に真作だ（ἀληθεῖς）というパナイティオスの見解を引いている。これは、<b>アンティステネスがソクラテス対話篇を執筆していたことの最も明示的な証拠</b>である。
            </p>
            <p>
                偽作・盗作：『スーダ』はアンティステネスの著作がアリストテレスのものやロドスのアンティステネスのものと混同されていたことを示す。
                実際、『スーダ』自身が、ソクラテスの徒とロドスの人とをしばしば取り違えている。また、アテナイオス（11.508c-d）は、テオポンポスの証言として、プラトンがアンティステネスの著作（正確にはδιατριβῶν）を盗作していたのだと主張する。
                プラトンに対する同様の盗作批判は、アリストクセノスにも見える（『哲学者列伝』3.37,
                9.40）。また、テキストが壊れているものの、『哲学者列伝』6.61は、アンティステネスの著作（μικρὸν Κῦρον, τὸν Ἡρακλέα ἐλάσσω,
                Ἀλκιβιάδην）がアイスキネスに帰される場合もあったことを示す。
            </p>
        </div>
        <br>
        <h4 id="aristippus">キュレネのアリスティッポス　[<a class="link" href="#top">Top</a>]</h4>
        <div class="bioText">
            <p class="bioTopic"><b>生没年</b><br></p>
            <p>
                生没年：歴史家のディオドロスは、彼が紀元前366/365年の時点ではまだ存命だったと述べる（<i>bibl. hist.</i>,
                15.76）。また、『哲学者列伝』2.62は、アイスキネスが紀元前356年（cf.『哲学者列伝』2.63）にシケリアからアテナイへと帰還したさい、
                プラトン一派・アリスティッポス一派の名声に憚ってソフィスト活動を控えたのだと報告する。
                これらの証言から逆算して、<b>多くの哲学史家は、アリスティッポスの生没年を紀元前435-355年付近と見積もってきた</b>。
            </p>
            <p class="bioTopic"><b>出自</b><br></p>
            <p>
                父母：母の名前はソクラテス派の偽書簡でのみ登場し、MicaないしSonica。父の名は基本的にAritadesとされるが、校訂提案もある。アリスティッポスの娘アレテーの名は、祖父の名「Aretades」（校訂案）から採られたものかもしれない。
                なお、Ἀριστ-という名前などから、これまでさしたる根拠もなく、彼の生家は富裕であるという推測が行われてきた。詳細は不明。
                <br>ちなみに、アリスティッポスの生地であるキュレネはリビコ-ベルベル系先住民との関係が深く、卓越した戦車術や馬術が市のアイデンティティのひとつとなっていたらしい。
                この点、「アリスティッポス（直訳すれば「最上の馬」）」という名前は、きわめてキュレネ的だといえる。
            </p>
            <p class="bioTopic"><b>子女</b><br></p>
            <p>
                子女：娘のアレテーが殊に著名。カッリマコス（<i>Ep.</i>,
                20）は「アリスティッポスの子」メラニッポスとバシレウスの死をめぐるもので、これがキュレネのアリスティッポスに関わるものだと憶測する論者もいるが、実際は信用に値しない。アリスティッポスという名は、当時のキュレネにありふれたものであった。
                なお、『哲学者列伝』2.81などには、彼が酷薄にも息子の養育を拒否した逸話が記録されている。
            </p>
            <p class="bioTopic"><b>活動場所</b><br></p>
            <p>
                外遊：<b>彼の活動範囲はアテナイおよびキュレネにとどまらず、アイギナ、シケリア、小アジア、メガラ、スキルスなどに逗留していた記録が残る</b>。
                広範な活動圏はしばしば彼が「ソフィスト」であったことの兆候であると見なされてきたが、アリスティッポスの「ソフィスト性」をめぐっては異論も多い。
                たとえばGiannantoniは、「ソフィスト」という呼称が、授業料（μίσθος）をとったという端的な事実および快楽説への不信によるものだと考え、その含意をごく限定的に捉える。
                なお、<b>彼のシケリア行については、当地の僭主ディオニュシオスとの交渉をめぐって、数多くの逸話が残されている</b>。
            </p>
            <p class="bioTopic"><b>人間関係</b><br></p>
            <p>
                <b>ソクラテス</b>：彼とソクラテスとの出会いについては、プルタルコス（<i>Curios.</i>,
                2.516C）が次のような逸話を伝えている。
                <ul>
                    <li style="list-style: none;">
                        アリスティッポスも、オリュンピアでイスコマコスと邂逅したとき、ソクラテスが若者たちをかくあらしめているのはいかなる対話を通じてのことか、と尋ねた。そして、彼の言葉のごく小さな種子や見本を手にしただけで（μίκρ'
                        ἄττα τῶν λόγων αὐτοῦ σπέρματα καὶ δείγματα
                        λαβὼν）、アリスティッポスは非常な感動を覚え、身体ごと崩れ落ちた挙句、まったく蒼白となり、痩せ細ってしまうほどであった。終いに彼は、焼けつくような渇きを抱いたままアテナイへと船出し、湧き出る源泉の水を汲みだした。すなわち、かの人［＝ソクラテス］とその言葉、そして、哲学を探究したのである。その哲学というのは、自らの欠点を認識し、取り除くことが目的であった。
                    </li>
                </ul>
                とはいえ、両者の関係について学説ベースの証言は存在せず、大半は逸話を通じた報告である。
                <br>ソクラテスの死に際には臨席していなかったらしい（プラトン『パイドン』59c）が、彼の脱獄計画には参与していたとする証言が残る（偽書簡16）。
                偽書簡9では、アリスティッポスが<b>「ソクラテスの言葉の支配人（λόγων ἐπιμελητὴν τῶν
                    Σωκρατικῶν）」</b>を自称しているほか、テミスティオス（<i>Oration
                    34</i>, 5）も彼を<b>「ソクラテスの本統のコロス（ὁ γνήσιος Σωκράτους
                    χορός）」</b>と称している。明らかに彼は、ソクラテスを慕う熱心な弟子のひとりであった。
            </p>
            <p>
                <b>アイスキネス</b>：彼はアイスキネスと非常に親密だったらしい。シケリアに滞在していたさいは、プラトンから無視されたアイスキネスを親切に助けてやったとされる。
            </p>
            <p>
                <b>プラトン</b>：プラトンはアイスキネスとアリスティッポスの両人と仲が悪かったらしい。アリスティッポスとプラトンの対立を示す証言は枚挙にいとまがないが、その大半は、哲学思想というよりも生き方や為人に関わるものである。
            </p>
            <p>
                <b>アンティステネス</b>：アンティステネスの項を参照のこと。
            </p>
            <p>
                <b>クセノフォン</b>：アリスティッポスがクセノフォン邸に呼ばれ『メモラビリア』の草稿を読んだという逸話も残る（偽書簡18）が、基本的に両者は反目関係にあったと伝えられている（『哲学者列伝』2.65）。
                『メモラビリア』2.1および3.8は、アリスティッポスとソクラテスの論戦を記録した資料として重要。
            </p>
            <p class="bioTopic"><b>著述活動</b><br></p>
            <p>
                著作：<b>『哲学者列伝』2.83-85に長大な目録が記載されている</b>。かつては無著作説を主張する論者も少なくなかったが、いまではほとんど受け入れられていない。彼は確かに多産な著述家であったと思われる。
                なお、パナイティオスの証言（『哲学者列伝』2.64）は、アリスティッポスがソクラテス対話篇を著していなかったことを示唆する。
            </p>
        </div>
        <br>
        <h4 id="eukleides">メガラのエウクレイデス　[<a class="link" href="#top">Top</a>]</h4>
        <div class="bioText">
            <p class="bioTopic"><b>生没年</b><br></p>
            <p>
                生年：ゲッリウスを経由したタウルス（fl. mid-2nd C. BCE）の報告から生年の下限が推測される。アテナイでの禁令が発布されたのは紀元前432/1年である（Thucyd.,
                1.139）から、タウルスの報告が歴史的な事実なのであれば、<b>エウクレイデスの生年は（遅くとも）紀元前450年ごろと比定される</b>ことになる。
                当該証言の事実性については疑いの声も上がっているが、これといった反対証拠も存在しないため、過剰な懐疑は推奨されない。
            </p>
            <p>
                没年：プラトンは『テアイテトス』の冒頭にエウクレイデスを登場させている。本対話篇はテアイテトスがコリントスの戦いで致命傷を負う場面からはじまるが、その年代設定としては、紀元前369/8年だとする説が有力である。
                この場合、450年生年説が正しいのだとすれば、対話篇当時のエウクレイデスは80歳を超える高齢であったということになる（もちろんこれは、理解不可能な年齢ではない）。
                プラトン対話篇の歴史的精確性には一定の留保が必要だが、テアイテトスの死に捧げられたと見られる著作が完全な（しかも無用な）虚構を含んでいるとは見なしづらい。
                そのため、<b>エウクレイデスは369/8年前後にはまだ存命だったと考えるべきである</b>。<br>
                他方、366/365年時点で存命中だった人物を列挙しているディオドロスは、ソクラテス派の主要人物たちのうち、エウクレイデスだけに言及していない。
                この沈黙を重く見るのであれば、<b>エウクレイデスは366/365年までに死没していた</b>ということになる。この場合、<b>彼の具体的な没年は紀元前367年ごろに比定されうる</b>であろう。ただしもちろん、以上の想定は多くの推測に基づくものであり、信憑性には留保が必要である。
            </p>
            <p class="bioTopic"><b>出自</b><br></p>
            <p>
                生地：ほとんどの証言はエウクレイデスがメガラ出身だと伝えるが、「博識（πολυΐστωρ）」のアレクサンドロスは、彼が「ゲラの人（Γελῶς）」だとしている。
                19世紀の研究者DeycksはこれをΕὐκλείδης ὁ
                γελοῖοςから転じた誤解だと推測するが、Zeller以来、そこまで真剣に考えない見方が主流である。同名人との混同が生じていた可能性も否定できない。
            </p>
            <p class="bioTopic"><b>人間関係</b><br></p>
            <p>
                <b>ソクラテス</b>：彼はソクラテスの最も忠実な弟子のひとりであったと目される。その熱心さについては、タウルスによる次のような逸話（ゲッリウス『アッティカの夜』7.10.1-4）が重要視される。
                <ul>
                    <li style="list-style: none;">
                        哲学者タウルス（我々の記憶ではプラトン派の門下において有名だった男である）は、他の多くの善きものどもや健全な範例などによって、着手すべき哲学へと［人々を］駆り立てた。その後、ソクラテス派のエウクレイデスが事としていたと言われるものによって、若者たちの精神を殊に著しく目覚めさせた。曰く、「アテナイ人はその法令によって、次のごとく規定した。すなわち、メガラ市民たる者、アテナイに足を踏み込んだことが認められれば、そのことのゆえに死罪が下る、と」。彼は言う「これほどまでに、アテナイ人は、メガラの隣人たちへの憎しみに燃やされていたのだ。このときエウクレイデスは、当の法令が下されるよりも前に、ほかならぬメガラからアテナイへと赴き、ソクラテスの話を聞くのが習慣になっていた。彼は、その法令が施行されて以降、日暮れ時、夜が近づいてきた時分に、女物の長いチュニカを着て、色とりどりの外套を身に纏い、ヴェールで顔を隠し、メガラの自宅からアテナイへと、ソクラテスを訪ねた。せめて夜の幾らかの時間くらいは、彼の助言や講話を共有するために。そして、月明かりのもと、20マイルよりも少し長い道のりを、先と同じ上着に包まれて引き返した」。
                    </li>
                </ul>
            </p>
            <p>
                <b>ソクラテス派一般</b>：プラトンをはじめとするソクラテス師の刑死後まもなく、エウクレイデスのもとへと逃げ延びたのだという（SSR2A5; cf. 2A6-8）。
                メガラは伝統的にアテナイと対立関係にあり、政治的にも距離を置いたポリスであった。アテナイにおける反哲学の風潮から逃れる避難所としては好適な土地柄であったといえる。
            </p>
            <p>
                <b>プラトン</b>：プラトンの思想形成はソクラテス刑死直後のメガラ滞在期になされたという説もあり、エウクレイデスとの深い交友が想定されてきた。『テアイテトス』序文における扱いなどからも、両者が友好的な関係にあったことが窺われる。
            </p>
            <p class="bioTopic"><b>著述活動</b><br></p>
            <p>
                著作：『哲学者列伝』2.106および『スーダ』に、<b>6篇の著作名</b>が記録されている。後者はさらに、名前が伝わらない若干の著作が存在していたことをも示唆する。書名から鑑みるに、諸著作の形式は対話篇であろう。
                パナイティオスはエウクレイデスの著作の真作性に疑義を呈しているが、近年の研究ではあまり深刻視されない。
            </p>
        </div>
        <br>
        <h4 id="phaidon">エリスのパイドン　[<a class="link" href="#top">Top</a>]</h4>
        <div class="bioText">
            <p class="bioTopic"><b>生没年</b><br></p>
            <p>
                生没年：プラトン『パイドン』においてソクラテスがパイドンの長髪をからかった（παίζειν）という表現は、当時パイドンが年少であった事実を示唆すると見なされるが、その内実は定かでない。
                当時のスパルタでは成人の長髪がふつうに行われていたらしく、「からかい」の根拠はまさしくそうした「スパルタかぶれ」に対するものであったのかもしれない。
                彼はペロポネソスの富家出身であった。『パイドン』89aでthe
                younger（νεανίσκοι）であることが示唆されるシミアスやケベスとの比較にしてみても、この語が指し示す年齢層の広さ・相対性からすれば、さして決定的な証拠とはならない。
                <b>総じて、パイドンの生没年にかんする考証は決定打を欠き、困難を極める</b>。
            </p>
            <p class="bioTopic"><b>出自</b><br></p>
            <p>
                生家：良家の生まれであったと伝わる（『哲学者列伝』2.105）。
            </p>
            <p class="bioTopic"><b>虜囚・売春・解放？</b><br></p>
            <p>
                半生：古来の伝承によると、パイドンは戦争捕虜となったのち娼館に売り出されていたところを、ソクラテス――正確には彼の指示を受けたアルキビアデス「一派」ないしクリトン――に身請けされて自由の身となり、哲学の道に足を踏み入れたのだという。
                もっとも、この話はうまく出来すぎているため、史実性を疑う論者も多い。
            </p>
            <p class="bioTopic"><b>人間関係</b><br></p>
            <p>
                沈黙：プラトンという重大な例外を除き、同時代人がパイドンの名に言及することはない。19世紀の文献学者Wilamowitz曰く、「哲学はパイドンについて沈黙せねばならない」。
                パイドンがソクラテスの忠実な生徒であったとするイメージが流通しているが、必ずしも根拠のある言説とは思われない。
            </p>
            <p>
                <b>プラトン</b>：プラトンがパイドンを同名著作の語り手にしたという事実は、彼がソクラテス派のなかで特別重要な位置を占めていたのだということを含意しない。
                むしろ、パイドンがそうした卓越性を有していなかったからこそ、プラトンは、彼自身のソクラテス解釈の正統性を主張する対話篇において、彼を語り手として選出したのかもしれない（Giannantoni）。以上の見立ては、クセノフォンやアリストテレスによる沈黙を説明するばかりか、彼の著述活動および思想に関する証言の欠如をも説明している。
            </p>
            <p class="bioTopic"><b>著述活動</b><br></p>
            <p>
                著作：『哲学者列伝』2.105と『スーダ』にふたつの微妙に異なる目録が記載されている。前者はそれらのうち『ゾピュロス』と『シモン』の二篇は真作（γνησίους）であると述べており、比較的充実した研究がなされている。
                なお、パイドンの著作は紀元後2世紀ごろの時点ではまだ広く読まれていたらしい（『アッティカの夜』2.18.1-5）。
            </p>
        </div>
        <br>
    </div>
    <div>
        <h2 class="headline" id="biblio">基本文献</h2>
        <p>小ソクラテス派の倫理思想を検討するにあたって基本になると思われる研究書をいくつか推薦しておきます。何かめぼしい本が出ていれば教えてください。</p>
        <h4>全体　[<a class="link" href="#top">Top</a>]</h4>
        <ul>
            <li><b>G. Giannantoni, 1990, <i>Socratis et Socraticorum Reliquiae</i>, 4 vols.,
                    Bibliopolis.</b><br>
                「SSR」と略称されるソクラテス派全般の基本資料集です。
            </li>
        </ul>
        <h4>キュニコス派　[<a class="link" href="#top">Top</a>]</h4>
        <ul>
            <li><b>S. Prince, 2015, <i>Antisthenes of Athens: Texts, Translations, and Commentary</i>,
                    University of Michigan Press.</b><br>
                今世紀初頭までのアンティステネス研究の集大成といえる大著です。アンティステネスにかんする全現存証言の原文・英訳・コメンタリーを収めており、
                一冊で個別研究の全体像を総覧することができます。
            </li>
            <br>
            <li><b>R. B. Branham & M.-O. Goulet-Cazé (eds.), 1996, <i>The Cynics: The Cynic Movement in
                        Antiquity and its Legacy</i>, University of California Press.</b><br>
                キュニコス派全般にわたる充実した論文集。基本図書として今なお必見だと思われます。
            </li>
            <br>
            <li><b>L. E. Navia, 1996, <i>Classical Cynicism: A Critical Study</i>, Greenwood Press.</b><br>
                ギリシア時代のキュニコス派を中心にまとめられた標準的な概説書。文献表が充実しており簡便ですが、きわめて高価です。同著者の<b><i>Diogenes the Cynic: The War
                        against the World</i> (2005, Humanity Books)</b>は安価な電子書籍も出ており、ディオゲネスにかんする優れた入門書となっています。
            </li>
            <br>
            <li><b>山川偉也、2008年『哲学者ディオゲネス――世界市民の原像』講談社学術文庫。</b><br>
                日本語で読める貴重な文献です。癖が強いので、ほかの入門書に目を通してから読むのがいいかもしれません。
            </li>
        </ul>
        <h4>キュレネ派　[<a class="link" href="#top">Top</a>]</h4>
        <ul>
            <li><b>K. Lampe, 2015, <i>The Birth of Hedonism</i>, Princeton University Press.</b><br>
                決定版といえる画期的なキュレネ派概論です。これ一冊を読んでおけばひとまずは間違いありません。
            </li>
            <br>
            <li><b>V. Tsouna, 1998, <i>The Epistemology of the Cyrenaic School</i>, Cambridge University
                    Press.</b><br>
                キュレネ派の認識論を特化的に論じた研究書です。刊行後しばらく経ちますが、いまだに多くの示唆に富んだ必読書です。
            </li>
            <br>
            <li><b>U. Zilioli, 2012, <i>The Cyrenaics</i>, Routledge.</b><br>
                プラトン対話篇を本格的な資料として用いるかなり特殊な概説書です。最初の一冊として読むのは推奨しませんが、優れた洞察も数多く含まれています。
            </li>
        </ul>
        <h4>メガラ派　[<a class="link" href="#top">Top</a>]</h4>
        <ul>
            <li><b>R. Muller, 1985, <i>Les Mégariques: Fragments et Témoignages</i>, Vrin.</b><br>
                メガラ派の資料集としては<b>K. Döring, 1972, <i>Die Megariker: Kommentierte Sammlung der Testimonien</i>,
                    Grüner.</b>がありますが、現代語訳が付されておらず、抜萃の仕方も少々大味です。Mullerの一書は、Döringによる証言の選定にしたがいながらも、充実した仏語訳およびコメンタリーを付している点で、はるかにいっそう扱いやすい内容となっています。
                同著者の<b><i>Introduction à la pensèe des Mégarrriques</i>(1988,
                    Vrin)</b>も、メガラ派にかんする比較的新しい概説書として重要です。
            </li>
            <br>
            <li><b>U. Zilioli, 2023(予定), <i>The Circle of Megara</i>, Routledge.</b><br>
                近いうちに出るらしいです。英語で読めるメガラ派の概説書はこれまで存在しなかったので、もし無事に刊行されれば界隈を揺るがす大事件だといえるでしょう。ただ、Zilioliは癖の強い議論をしがちな研究者なので、内容は未知数です。
            </li>
        </ul>
        <h4>エリス-エレトリア派　[<a class="link" href="#top">Top</a>]</h4>
        <ul>
            <li><b>D. Knoepfler, 1991, <i>La Vie de Ménédème d'Érétrie de Diogène Laërce</i>, Bâle.</b><br>
                この前海外から取り寄せたのですが、航路上で消滅してしまいました。中身は未確認です。
            </li>
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