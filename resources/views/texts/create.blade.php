<h1>New Texts</h1>

<form method="POST" action="/texts">
    @csrf
    <label for="form1">Category</label>
    <select name="category_id" id="form1">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
    </select>
    <br>
    <label for="form2">Greek Text</label>
    <textarea name="greekText" id="form2"></textarea>
    <br>
    <label for="form3">Japanese Translation</label>
    <textarea name="japaneseTranslation" id="form3"></textarea>
    <br>
    <button type="submit">Create</button>
</form>

<a href="/texts">Back</a>