@extends('layouts.dashboard')

@section('content')
@if (session('flash_message'))
<div class="flash-success-bg w-25 text-center">
    <span class="flash-success-font">
        {{ session('flash_message') }}
    </span>
</div>
@endif

<div class="w-75">
    <h1>CSV登録</h1>
    <form method="POST" action="/dashboard/texts/import/csv" class="form-inline" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column">
            <div class="d-flex flex-row">
                <label for="text-import-csv" class="btn">CSVファイルを選択</label>
                <input type="file" name="csv" id="text-import-csv" style="display: none;" onChange="handleCSV(this.files)">
                <button class="btn">一括登録</button>
            </div>
            <small id="text-import-csv-filename"></small>
        </div>
    </form>

    <div class="d-flex justify-content-between mt-3">
        <h4 class="d-flex align-self-center mt-1 mb-0">CSVファイルフォーマット</h4>
        <a class="btn" href="{{ asset('csv/texts.csv') }}">雛形ファイルダウンロード</a>
    </div>

    <hr>

    <div class="row">
        <label class="col-3">ID</label>
        <span class="col-9">新規登録の場合は空にしてください。既存の商品を更新する場合は、商品IDを指定してください。</span>

        <label class="col-3">日本語訳</label>
        <span class="col-9"></span>

        <label class="col-3">ギリシア語</label>
        <span class="col-9"></span>

        <label class="col-3">カテゴリID</label>
        <span class="col-9"></span>
    </div>

    <hr>
</div>

<script type="text/javascript">
    function handleCSV(csv) {
        let reader = new FileReader();
        reader.onload = function() {
            let csvName = document.getElementById("text-import-csv-filename");
            console.log(reader)
            csvName.innerHTML = csv[0].name;
        }
        console.log(csv);
        reader.readAsDataURL(csv[0]);
    }
</script>
@endsection 