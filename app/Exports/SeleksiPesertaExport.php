<?php

namespace App\Exports;

use App\Models\Seleksi;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\FromCollection;

class SeleksiPesertaExport implements FromCollection, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Seleksi::all()->map(function ($item) {
            return [
                'id_pendaftaran' => $item->id_pendaftaran,
                'nilai_total' => $item->nilai_total,
                'status_kelulusan' => $item->status_kelulusan,
                'tgl_penilaian' => $item->tgl_penilaian,
                'reviewer' => $item->user->name,
            ];
        });
    }
     public function headings(): array
    {
        return ['Id Pendaftaran', 'Nilai Total', 'Status', 'Tanggal Penilaian', 'Reviewer'];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $lastColumn = $event->sheet->getHighestColumn();
                $lastRow = $event->sheet->getHighestRow();

                // Style heading
                $event->sheet->getDelegate()->getStyle("A1:{$lastColumn}1")->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => [
                            'rgb' => '0D1B39', // warna biru gelap
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                ]);

                // Border seluruh tabel
                $event->sheet->getDelegate()->getStyle("A1:{$lastColumn}{$lastRow}")->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);

                // Auto size kolom
                foreach (range('A', $lastColumn) as $col) {
                    $event->sheet->getDelegate()->getColumnDimension($col)->setAutoSize(true);
                }
            },
        ];
    }
}
