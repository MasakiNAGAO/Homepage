@foreach($texts as $text)
    {{$text->greekText}}
    {{$text->japaneseTranslation}}
    {{$text->category}}
    @if($text->headline != null)
        {{$text->headline}}
    @endif
    @if($text->caption != null)
        {{$text->caption}}
    @endif
    
    <form action="/texts/{{ $text->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form> 
    
    <a href="{{route('texts.show', $text)}}">Show</a>
    <a href="{{route('texts.edit', $text)}}">Edit</a> 
@endforeach

<a href="{{route('texts.create')}}">Create</a> 