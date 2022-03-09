<header>
    <div id="headerTitle"><a href="{{url('/')}}">MasakiNAGAO</a></div>
    <nav id="headerLink">
        <a href="{{ action('LinkController@profile') }}">履歴と成果物</a>
        <a href="{{ action('LinkController@minor_socratics') }}">小ソクラテス派</a>
        <a href="{{ action('LinkController@on_pleasure') }}">古典期快楽論</a>
        <a href="{{ action('LinkController@isocrates') }}">イソクラテス</a>
        <a href="{{ action('LinkController@contact') }}">お問い合わせ</a>
    </nav>
    <img id="menu-sp" src="{{asset('img/menu.png')}}" height="50px" width="50px"
        onclick="document.getElementById('headerLinkSp').style.display = 'block'">
    <img id="menu-dark-sp" src="{{asset('img/menuDark.png')}}" height="50px" width="50px"
        onclick="document.getElementById('headerLinkSp').style.display = 'block'">
    <nav id="headerLinkSp">
        <span id="close" onclick="document.getElementById('headerLinkSp').style.display = 'none'">×</span>
        <a href="{{ action('LinkController@profile') }}" onclick="document.getElementById('headerLinkSp').style.display = 'none'">履歴と成果物</a>
        <a href="{{ action('LinkController@minor_socratics') }}"
            onclick="document.getElementById('headerLinkSp').style.display = 'none'">小ソクラテス派</a>
        <a href="{{ action('LinkController@on_pleasure') }}"
            onclick="document.getElementById('headerLinkSp').style.display = 'none'">古典期快楽論</a>
        <a href="{{ action('LinkController@isocrates') }}" onclick="document.getElementById('headerLinkSp').style.display = 'none'">イソクラテス</a>
        <a href="{{ action('LinkController@contact') }}" onclick="document.getElementById('headerLinkSp').style.display = 'none'">お問い合わせ</a>
    </nav>
</header>