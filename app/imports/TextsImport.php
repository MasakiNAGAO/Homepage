<?php

namespace App\Imports;

use App\Text;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TextsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $text = new Text();
        $text->japaneseTranslation = $row['japaneseTranslation'];
        $text->greekText = $row['greekText'];
        $text->category_id = $row['category_id'];
        $text->save();

        return $text;
    }
}