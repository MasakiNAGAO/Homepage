<h1>Update Texts</h1>

<form method="POST" action="/texts/{{ $text->id }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="form1">Category</label>
    <select name="category_id">
    @foreach ($categories as $category)
        @if ($category->id == $text->category_id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
    @endforeach
    </select>
    <br>
    <label for="form2">Greek Text</label>
    <textarea name="greekText" id="form2">{{$text->greekText}}</textarea>
    <br>
    <label for="form3">Japanese Translation</label>
    <textarea name="japaneseTranslation" id="form3">{{$text->japaneseTranslation}}</textarea>
    <br>
    <button type="submit">Update</button>
</form>

<a href="/texts">Back</a>