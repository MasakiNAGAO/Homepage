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

    <form method="POST" action="/dashboard/texts" class="mb-5">
        @csrf
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-greekText" class="col-2 d-flex justify-content-start">ギリシア語</label>
            <input type="text" name="greekText" id="text-greekText" class="form-control col-8">
        </div>
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-japaneseTranslation" class="col-2 d-flex justify-content-start">日本語訳</label>
            <input type="text" name="japaneseTranslation" id="text-japaneseTranslation" class="form-control col-8">
        </div>
        <div class="form-inline mt-4 mb-4 row">
            <label for="text-category" class="col-2 d-flex justify-content-start">カテゴリ</label>
            <select name="category_id" class="form-control col-8" id="text-category">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="w-25">テキストを登録</button>
        </div>
    </form>

    <div class="d-flex justify-content-end">
        <a href="/dashboard/texts">テキスト一覧に戻る</a>
    </div>
</div>
@endsection