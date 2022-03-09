@extends('layouts.app')

@section('content')
<section id="mainTop">
    <h1>Contact</h1>
</section>
<section id="mainExplain">
    <h5 class="breadcrumb"><a href="{{url('/')}}">Top</a> > お問い合わせ</h5>
    <p>以下のGoogle Formよりお問い合わせください。</p>
    <div>
        <iframe id="googleform"
            src="https://docs.google.com/forms/d/e/1FAIpQLSeyt-YHDHLh0ZmrylrYWP5DlgWbqz_gi4n2vgsnCw2U1DKhew/viewform?embedded=true"
            frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
    <br>
</section>
@endsection