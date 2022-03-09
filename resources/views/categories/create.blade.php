<h1>New Categories</h1>

<form method="POST" action="/categories">
    @csrf
    <label for="form1">Major Category</label>
    <select name="major_category_id" id="form1">
    @foreach ($major_categories as $major_category)
        <option value="{{ $major_category->id }}">{{ $major_category->name }}</option>
    @endforeach
    </select>
    <br>
    <label for="form2">Name</label>
    <input type="text" name="name" id="form2">
    <br>
    <label for="form3">Headline</label>
    <input type="text" name="headline" id="form3">
    <br>
    <label for="form4">Caption</label>
    <textarea name="caption" id="form4"></textarea>
    <br>
    <button type="submit">Create</button>
</form>

<a href="/categories">Back</a>