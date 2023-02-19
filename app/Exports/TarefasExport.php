<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tarefa::where('user_id', '=', auth()->user()->id)->get();
    }

    public function headings():array{
        return [
            'ID da Tarefa',
            'Tarefa',
            'Data Limite coclusão'
        ];
    }

    public function map($linha): array
    {
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/Y', strtotime($linha->data_limite_conclusao))
        ];
    }

}
