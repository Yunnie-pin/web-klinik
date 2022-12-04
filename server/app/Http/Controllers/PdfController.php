<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\ParameterPemeriksaan;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\User;
use App\Models\ValidatorPemeriksaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function nota(Request $request)
    {
        $request->validate([
            'pemeriksaan_id' => 'required'
        ]);
        $data = Pemeriksaan::where('id', $request->pemeriksaan_id)->first();
        $user = User::where('id', $data->user_id)->first();
        $pasien = Pasien::where('id', $data->pasien_id)->first();
        $validator = ValidatorPemeriksaan::where('id', $data->validator_pemeriksaan_id)->first();
        $keterangan = Keterangan::where('pemeriksaan_id', $data->id)->get();
        $dompdf = new Dompdf();
        $html = '
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8" http-equiv="Content-Type" content="text/html" />
                <style>
                    table {
                        width: 70%;
                        margin: auto;
                        border: 1px solid;
                        border-collapse:collapse;
                    }

                    td {
                        text-align: left;
                        width: 25%;
                        padding: .5rem;
                        border: 1px solid;
                    }
        
                    .detail td,.detail th {
                        padding: .5rem;
                        border: 1px solid;
                        width: 45%;
                    }
                </style>
            </head>
            <body>
                <h3 style="text-align: center">
                    Cetak Nota <br />
                    Web Klinik
                </h3>
                <div style="width: 70%;margin:auto">
                    <h3>Tanggal : ' . $data->created_at->translatedFormat('l, d / F / Y') . '</h3>  
                </div>
                <table>
                    <tr>
                        <td colspan="2">
                            <b>Pasien</b>
                        </td>
                        <td colspan="2">
                            <b>Dokter</b>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>' . $pasien->nama . '</td>
                        <td>Nama Dokter</td>
                        <td>' . $user->nama_lengkap . '</td>
                    </tr>
                    <tr>
                        <td>No. Telp.</td>
                        <td>' . $pasien->no_telp . '</td>
                        <td>No. Telp</td>
                        <td>' . $user->no_telp . '</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>' . $pasien->jenis_kelamin . '</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Jenis Identitas</td>
                        <td>' . $pasien->jenis_identitas . '</td>
                        <td colspan="2"><b>Validator Laborat</b></td>
                    </tr>
                    <tr>
                        <td>No. Identitas</td>
                        <td>' . $pasien->no_identitas . '</td>
                        <td>Nama Laborat</td>
                        <td>' . $validator->nama . '</td>
                    </tr>
                    <tr>
                        <td>BPJS</td>
                        <td>' . $pasien->bpjs . '</td>
                        <td colspan="2" style="border:0;"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>' . $pasien->alamat . '</td>
                        <td colspan="2" style="border:0;"></td>
                    </tr>
                </table>
                <div style="width: 70%;margin:auto">
                    <h3>Detail Pemeriksaan :</h3>  
                </div>
                <table class="detail">
                    <thead>
                        <tr>
                            <th style="width: 2rem;">No.</th>
                            <th>Nama Pemeriksaan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>';
        $i = 1;
        $total = 0;
        foreach ($keterangan as $value) {
            $param = ParameterPemeriksaan::where('id', $value->parameter_id)->first();
            $html .= '<tr>';
            $html .= '<th style="width: 2rem;">' . $i . '</th>';
            $html .= '<td>' . $param->parameter . '</td>';
            $html .= '<td>' . $param->harga . '</td>';
            $html .= '</tr>';
            $i++;
            $total += $param->harga;
        }
        $html .= '</tbody><tfoot>
                        <tr>
                            <th colspan="2">Total Harga</th>
                            <th>' . $total . '</th>
                        </tr>
                    </tfoot>
                </table>
            </body>
        </html>';
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
