<?php

namespace App\Exports;

use App\Models\Universitas;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\FromCollection;

class UniversitasExport implements FromCollection, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Universitas::with('prodi')->get()->map(function ($item) {
            return [
                'nama' => $item->nama,
                'kota_id' => $item->kota->kota ?? 'N/A',
                'provinsi_id' => $item->provinsi->provinsi ?? 'N/A',
                'prodi_id' => $item->prodi->nama ?? 'N/A',
                'kode_prodi' => $item->kode_prodi,
                'minimal_nilai_utbk' => $item->minimal_nilai_utbk,
                'minimal_nilai_snbp' => $item->minimal_nilai_snbp
            ];
        });

    }

    public function headings(): array
    {
        return ['Nama', 'Kota', 'Provinsi', 'Prodi', 'Kode Prodi', 'Minimal Nilai UTBK', 'Minimal Nilai SNBP'];
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
