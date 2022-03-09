{{$text->greekText}}
{{$text->japaneseTranslation}}
{{$text->category}}
@if($text->headline != null)
    {{$text->headline}}
@endif
@if($text->caption != null)
    {{$text->caption}}
@endif

<a href="/texts">Back</a>