@extends('layouts.dashboard')

@section('content')
<div class="w-75">
    <h1>親カテゴリ情報更新</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/dashboard/major_categories/{{ $major_category->id }}" class="mb-4">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="major-category-name">親カテゴリ名</label>
            <input type="text" name="name" id="major-category-name" class="form-control" value="{{ $major_category->name }}">
        </div>
        <button type="submit" class="btn">更新</button>
    </form>

    <a href="/dashboard/major_categories">親カテゴリ一覧に戻る</a>
</div>
@endsection