<?php

namespace App\Imports;

use App\Questions;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel #, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Questions([

            'question' => $row[0],
            'o1' => $row[1],
            'o2' => $row[2],
            'o3' => $row[3],
            'o4' => $row[4],
            'correct_ans' => $row[5],
            'lang_id' => $row[6],


            // 'question' => $row['question'],
            // 'o1' => $row['o1'],
            // 'o2' => $row['o2'],
            // 'o3' => $row['o3'],
            // 'o4' => $row['o4'],
            // 'correct_ans' => $row['correct_ans'],
            // 'lang_id' => $row['lang_id'],

        ]);
    }
}
