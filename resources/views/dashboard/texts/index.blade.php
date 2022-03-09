@extends('layouts.dashboard')

@section('content')
<h1>テキスト管理</h1>

<div class="w-75 mt-2">
    <div class="d-flex justify-content-between w-75 mt-4">
        <a href="{{ route('dashboard.texts.create') }}">+ 新規作成</a>
    </div>
    <div class="table-responsive">
        <table class="table fixed-table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ギリシア語</th>
                    <th scope="col">日本語訳</th>
                    <th scope="col">カテゴリ名</th>
                    <th scope="col">親カテゴリ名</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($texts as $text)
                <tr>
                    <th scope="row">{{ $text->id }}</td>
                    <td>{{ $text->greekText }}</td>
                    <td>{{ $text->japaneseTranslation }}</td>
                    <td>{{ $text->category["name"] }}</td>
                    <td>{{ $text->category["major_category_name"] }}</td>
                    <td>
                        <a href="/dashboard/texts/{{ $text->id }}/edit" class="dashboard-edit-link">編集</a>
                    </td>
                    <td>
                        <a href="/dashboard/texts/{{ $text->id }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dashboard-delete-link">
                            削除
                        </a>

                        <form id="logout-form" action="/dashboard/texts/{{ $text->id }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$texts->links()}}
</div>
@endsection