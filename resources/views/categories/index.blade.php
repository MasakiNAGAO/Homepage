@foreach($categories as $category)
    {{$category->name}}
    {{$category->headline}}
    @if($category->caption != null)
        {{$category->caption}}
    @endif
    
    <form action="/categories/{{ $category->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form> 
    
    <a href="{{route('categories.show', $category)}}">Show</a>
    <a href="{{route('categories.edit', $category)}}">Edit</a> 
@endforeach

<a href="{{route('categories.create')}}">Create</a> 