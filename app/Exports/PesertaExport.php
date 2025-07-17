<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\FromCollection;

class PesertaExport implements FromCollection, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Peserta::all()->map(function ($item) {
            return [
                'nama_lengkap' => $item->nama_lengkap,
                'nisn' => $item->nisn,
                'nik' => $item->nik,
                'jenis_kelamin' => $item->jenis_kelamin,
                'tempat_lahir' => $item->tempat_lahir,
                'no_hp' => $item->no_hp,
                'alamat' => $item->alamat,
                'nama_sekolah' => $item->nama_sekolah,
                'npsn' => $item->npsn,
                'tahun_lulus' => $item->tahun_lulus,
            ];
        });
    }
    public function headings(): array
    {
        return ['Nama Lengkap', 'NISN', 'NIK', 'Jenis Kelamin', 'Tempat Lahir', 'NO Hp', 'Alamat', 'Nama Sekolah', 'NPSN', 'Tahun Lulus'];
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
