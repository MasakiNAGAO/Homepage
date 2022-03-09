@extends('layouts.dashboard')

@section('content')
<div class="w-50">
    <h1>テキスト登録</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>

    <form method="POST" action="/dashboard/texts/{{ $text->id }}" class="mb-5">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-greekText" class="col-2 d-flex justify-content-start">ギリシア語</label></label>
            <input type="text" name="greekText" id="text-greekText" class="form-control col-8" value="{{ $text->greekText }}">
        </div>
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-japaneseTranslation" class="col-2 d-flex justify-content-start">日本語訳</label>
            <input type="text" name="japaneseTranslation" id="text-japaneseTranslation" class="form-control col-8" value="{{ $text->japaneseTranslation }}">
        </div>
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-category" class="col-2 d-flex justify-content-start">カテゴリ</label>
            <select name="category_id" class="form-control col-8" id="text-category">
                @foreach ($categories as $category)
                @if ($category->id == $text->category_id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="w-25">更新</button>
        </div>
    </form>

    <div class="d-flex justify-content-end">
        <a href="/dashboard/texts">商品一覧に戻る</a>
    </div>
</div>
@endsection