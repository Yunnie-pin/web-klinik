<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type" content="text/html" />
        <style>
            table {
                width: 70%;
                margin: auto;
                border: 1px solid;
            }

            table table {
                width: 100%;
                margin: 0;
                margin-top: 0.5rem;
            }
            
            .pasien td,
            .dokter td,
            .validator td {
                border: 1px solid;
            }
            .dokter-validator {
                vertical-align: baseline;
            }
            .dokter-validator div:last-of-type {
                padding-top:2rem;
            }
            td {
                text-align: left;
                width: 50%;
            }

            .detail td {
                border: 1px solid;
                width: 45%;
            }
            .detail td:first-of-type {
                width: 10%;
            }
        </style>
    </head>
    <body>
        <h3 style="text-align: center">
            Cetak Nota <br />
            Web Klinik
        </h3>
        <div style="width: 70%;margin:auto">
            <h3>Tanggal :</h3>  
        </div>
        <table>
            <tr>
                <td>
                    <b>Data Pasien</b>
                    <table class="pasien">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Id Pasien</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Telp.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jenis Identitas</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Identitas</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td></td>
                        </tr>
                    </table>
                </td>
                <td class="dokter-validator">
                    <div>
                        <b>Data Dokter</b>
                        <table class="dokter">
                            <tr>
                                <td>Nama Dokter</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>SIP</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <b>Data Validator Laborat</b>
                        <table class="validator">
                            <tr>
                                <td>Nama Laborat</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        
        <div style="width: 70%;margin:auto">
            <h3>Detail Pemeriksaan :</h3>  
        </div>
        <table class="detail">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pemeriksaan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total Harga</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
