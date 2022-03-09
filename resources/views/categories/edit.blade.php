<h1>Update Categories</h1>

<form method="POST" action="/categories/{{ $category->id }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="form1">Major Category</label>
    <select name="major_category_id">
    @foreach ($major_categories as $major_category)
        @if ($major_category->id == $category->major_category_id)
            <option value="{{ $major_category->id }}" selected>{{ $major_category->name }}</option>
        @else
            <option value="{{ $major_category->id }}">{{ $major_category->name }}</option>
        @endif
    @endforeach
    </select>
    <br>
    <label for="form2">Name</label>
    <input type="text" name="name" id="form2" value="{{$category->name}}">
    <br>
    <label for="form3">Headline</label>
    <input type="text" name="headline" id="form3" value="{{$category->headline}}">
    <br>
    <label for="form4">Caption</label>
    <textarea name="caption" id="form4">{{$category->caption}}</textarea>
    <br>
    <button type="submit">Update</button>
</form>

<a href="/categories">Back</a>