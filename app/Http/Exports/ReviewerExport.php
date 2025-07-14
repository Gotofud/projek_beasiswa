<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class ReviewerExport implements FromCollection, WithHeadings, WithEvents, WithTitle
{
    public function collection()
    {
        return User::where('role', 'reviewer')->get()->map(function ($item) {
            return [
                'name' => $item->name,
                'email' => $item->email,
                'role' => ucfirst($item->role),
            ];
        });
    }

    public function headings(): array
    {
        return ['Name', 'Email', 'Role'];
    }

    public function title(): string
    {
        return 'Reviewer Report';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                // Header styling
                $event->sheet->getDelegate()->getStyle('A1:C1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['argb' => 'FFFFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '0D1B39'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                ]);

                // Border & auto size
                $lastColumn = $event->sheet->getHighestColumn();
                $lastRow = $event->sheet->getHighestRow();

                $event->sheet->getDelegate()->getStyle("A1:{$lastColumn}{$lastRow}")->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);

                foreach (range('A', $lastColumn) as $col) {
                    $event->sheet->getDelegate()->getColumnDimension($col)->setAutoSize(true);
                }
            },
        ];
    }
}
