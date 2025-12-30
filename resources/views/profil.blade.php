@extends('layouts.layouts')

@section('content')
<section style="margin-top: 120px; background:#fafafa; min-height:100vh;">
    <div class="container py-5">

        <div class="d-flex flex-column align-items-center text-center mb-5">
            <img src="{{ asset('assets/images/pendiri.jpg') }}" class="img-fluid rounded-4 mb-3" style="max-width: 400px;" alt="Pendiri PKBM Usaha Mandiri">
            <p class="fw-bold fs-4 mb-0">Drs. SETYAWAN ADI SUBAGIYO, M.Pd</p>
            <small class="text-muted">Pendiri PKBM Usaha Mandiri</small>
            <p>Pusat Kegiatan Belajar Masyarakat (PKBM) adalah lembaga pendidikan nonformal yang dibentuk dari, oleh, dan untuk masyarakat yang berorientasi pada pemberdayaan berbasis kearifan lokal guna meningkatkan pengetahuan, keterampilan, dan sikap masyarakat dalam bidang ekonomi, sosial, dan budaya. PKBM Usaha Mandiri hadir sebagai wadah sarana pemberdayaan potensi-potensi yang ada guna meningkatkan kesejahteraan masyarakat.
            </p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3"><i class="bi bi-eye-fill me-2"></i>Visi</h4>
                        <p class="fst-italic">Menjadi PKBM berprestasi serta berwawasan luas berlandaskan falsafah Pancasila.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3"><i class="bi bi-flag-fill me-2"></i>Misi</h4>
                        <ul class="list-unstyled">
                            <li>✔ Meraih prestasi dalam akademik dan non-akademik.</li>
                            <li>✔ Mengoptimalkan pembelajaran berbasis inovasi dan teknologi.</li>
                            <li>✔ Meningkatkan IPTEK, sosial, budaya bagi semua pihak.</li>
                            <li>✔ Mengembangkan life skill berbasis kearifan lokal.</li>
                            <li>✔ Menanamkan budi pekerti luhur dan wawasan kebangsaan.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3"><i class="bi bi-bullseye me-2"></i>Tujuan</h4>
                        <ul class="list-unstyled">
                            <li>🎯 PKBM berprestasi tingkat Lokal, Regional, dan Nasional.</li>
                            <li>🎯 Pembelajaran berbasis teknologi.</li>
                            <li>🎯 Pengembangan SDM bidang IPTEK, sosial, dan budaya.</li>
                            <li>🎯 Meningkatkan keterampilan melalui life skill.</li>
                            <li>🎯 Membentuk karakter religius dan kebangsaan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <button class="btn btn-gradient-blue px-4 py-2 me-2" data-bs-toggle="modal" data-bs-target="#pengurusModal">
                Lihat Susunan Pengurus
            </button>
            <button class="btn btn-gradient-blue px-4 py-2" data-bs-toggle="modal" data-bs-target="#tutorModal">
                Lihat Data Tutor
            </button>
        </div>
        <div class="modal fade" id="pengurusModal" tabindex="-1" aria-labelledby="pengurusModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4">
                    <div class="modal-header bg-gradient-blue text-white rounded-top-4">
                        <h5 class="modal-title" id="pengurusModalLabel">Susunan Pengurus PKBM Usaha Mandiri</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Jabatan</th>
                                        <th>Nama</th>
                                        <th>Kualifikasi</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ketua</td>
                                        <td>Drs. Setiawan Adi S., M.Pd</td>
                                        <td>S-2</td>
                                        <td>085856861280</td>
                                    </tr>
                                    <tr>
                                        <td>Bendahara</td>
                                        <td>Sutiarisih</td>
                                        <td>SMA</td>
                                        <td>081615837788</td>
                                    </tr>
                                    <tr>
                                        <td>Sekretaris</td>
                                        <td>Wardi Edi Cahyono</td>
                                        <td>SMA</td>
                                        <td>085815237136</td>
                                    </tr>
                                    <tr>
                                        <td>Sie Kemitraan</td>
                                        <td>Sugiono, S.Pd</td>
                                        <td>S-1</td>
                                        <td>081553685425</td>
                                    </tr>
                                    <tr>
                                        <td>Sie Pendidikan</td>
                                        <td>Umyk Choiriyah</td>
                                        <td>S-1</td>
                                        <td>08565529514</td>
                                    </tr>
                                    <tr>
                                        <td>Sie Keuangan</td>
                                        <td>Frida Luthvita S., S.Si, M.Pd</td>
                                        <td>S-2</td>
                                        <td>085755886655</td>
                                    </tr>
                                    <tr>
                                        <td>Sie Administrasi</td>
                                        <td>Lutfi Fatimah, S.Pd</td>
                                        <td>S-1</td>
                                        <td>085856950090</td>
                                    </tr>
                                    <tr>
                                        <td>Sie Pelayanan Program</td>
                                        <td>Ida Putri Rarasati, SM</td>
                                        <td>S-2</td>
                                        <td>085748856463</td>
                                    </tr>
                                    {{-- dst --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tutorModal" tabindex="-1" aria-labelledby="tutorModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content rounded-4">
                    <div class="modal-header bg-gradient-blue text-white rounded-top-4">
                        <h5 class="modal-title" id="tutorModalLabel">Data Tutor PKBM Usaha Mandiri</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>L/P</th>
                                        <th>Pend. Terakhir</th>
                                        <th>Status Pengawas</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Domisili</th>
                                        <th>Program</th>
                                        <th>Ket.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Drs. SETIAWAN ADI S.</td>
                                        <td>L</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>20-12-1961</td>
                                        <td>Jl. Kresno No. 02 RT.03 RW.04</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>WARDI EDI CAHYONO</td>
                                        <td>L</td>
                                        <td>SMA</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>10-10-1977</td>
                                        <td>Sdn. Paraan RT.04 RW.09 Ds. Plosorejo</td>
                                        <td>Keterampilan Komputer</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>S. ADI SUJATMIKA</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>12-09-1963</td>
                                        <td>Jl. Udowo RT.02 RW.04 Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>MARATUS SOLIKAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>07-07-1988</td>
                                        <td>Jl. Sadewo RT.03 RW.02 Kel. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>ANDIK SUSILO, M.Pd</td>
                                        <td>L</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>18-09-1986</td>
                                        <td>Kec. Kepanjenkidul Kota Blitar</td>
                                        <td>B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>FRIDA LUTHVITA SETYAWAN, M.Pd</td>
                                        <td>P</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>08-09-1989</td>
                                        <td>Jl. Kresno No. 02 Kel. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>IDA PUTRI RARASATI, M.Pd</td>
                                        <td>P</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>12-05-1990</td>
                                        <td>Jl. Pinus No. 35 RT.03 RW.01 Kepanjenkidul Kota Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>UMYK CHOIRIYAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>11-12-1989</td>
                                        <td>Dsn. Jatinom RT.02 RW.02 Kec. Kanigoro Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>LUTFI FATIMAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>22-12-1988</td>
                                        <td>Jl. Pondok Ds. Plumpungrejo RT.03 RW.04</td>
                                        <td>A, B dan C, Keterampilan</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>ARISTININGSIH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>02-06-1993</td>
                                        <td>Ds. Dawuhan RT.02 RW.02 Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>ITA MEI SAFITRI, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>06-05-1989</td>
                                        <td>Dsn. Jimbe Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>BINTI MUSTHOLIFAH, S.Pd. M.Pd</td>
                                        <td>P</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>27-08-1973</td>
                                        <td>Dsn. Butun RT.01 RW.01 Ds. Butun Kec. Gandusari Kab. Blitar</td>
                                        <td>B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>ENI SUSIANAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>10-12-1976</td>
                                        <td>Ds. Dayu RT.04 RW.08 Kec. Nglegok Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>NURUL KHOTIMAH</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>17-08-1972</td>
                                        <td>Ds. Dayu RT.02 RW.08 Kec. Nglegok Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>LAILATUNIKMAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>17-08-1972</td>
                                        <td>Ds. Kemloko RT.02 RW.01 Kec. Nglegok Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>BINTI KHOIRUL NIKMAH, S.Pd</td>
                                        <td>P</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>30-10-1977</td>
                                        <td>Ds. Dayu RT.04 RW.04 Kec. Nglegok Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>NURHANIK, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>18-05-1991</td>
                                        <td>Dsn. Sanan RT.04 RW.02 Ds. Dayu Kec. Nglegok Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>NURHIDAYAH, S.Pd.I</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>06-04-1977</td>
                                        <td>Ds. Nglegok Kec. Nglegok Kab. Blitar</td>
                                        <td>Paket C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>UMI FARIDA, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>03-05-1986</td>
                                        <td>Dsn. Monggalan Ds. Kanigoro Kec. Kanigoro Kab. Blitar</td>
                                        <td>Paket C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>NURIL ISYAROH, A.Md</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>26-07-1991</td>
                                        <td>Dsn. Bulu Ds. Modangan Kec. Nglegok Kab. Blitar</td>
                                        <td>Paket C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>NANDA ADI SUSILO, S.I.Kom</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>02-01-1989</td>
                                        <td>Jl. Ternate Kel. Klamplok Kec. Sananwetan Kota Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>YULINI ATI, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>12-07-1962</td>
                                        <td>Ds. Tulis Kec. Sanankulon Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>MOHAMAD YUSUF IHKSANUDIN</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>17-08-1999</td>
                                        <td>Jl. Bima Kel. Kademangan Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C, Keterampilan Komputer</td>
                                        <td>Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>DWI WIDODO EDI S., S.Pd</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>09-02-1972</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>IRWAN WIDODO, S.Sos</td>
                                        <td>L</td>
                                        <td>S-2</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>23-04-1974</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>AGUS ZAENAL FANANI, S.Pd</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>27-08-1987</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>AGUNG DWI NUGROHO, S.Sn</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>14-10-1986</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>LUKMAN DEWANTARA, S.Pt</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>15-02-1981</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>YASIN YUSUF, S.Kom</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>29-01-1989</td>
                                        <td>Ds. Lodoyo Kec. Sutojayan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>MOH. ABDUL KARIM, S.M</td>
                                        <td>L</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>04-09-1996</td>
                                        <td>Jl. Pondok RT.05 RW.01 Dsn Soko Ds. Plumpungrejo Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>IKANINGTYAS SUSELAWATI</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>03-09-1986</td>
                                        <td>Jl. Maninjau C.17 RT.03 RW.07 Ds. Tanjungsari Kec. Sukorejo Kota Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>KUNTO SETYOWIYONO, M.Pd</td>
                                        <td>L</td>
                                        <td>S-2</td>
                                        <td>Tetap</td>
                                        <td>Blitar</td>
                                        <td>21-02-1963</td>
                                        <td>Jl. Urip Sumoharjo 17 RT.03 RW.01 Kel. Beru Kec. Wlingi Kab. Blitar</td>
                                        <td>B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>LILIS RUSTYANI, S.Pd</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>10-08-1983</td>
                                        <td>Dsn. Srangi RT.02 RW.02 Kec. Talun Kab. Blitar</td>
                                        <td>B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>CICI YULIANTI, S.Sos</td>
                                        <td>P</td>
                                        <td>S-1</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>02-07-1999</td>
                                        <td>Ds. Tugurejo RT.02 RW.01 Kec. Talun Kab. Blitar</td>
                                        <td>B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>MULTAZAMAH, M.A</td>
                                        <td>P</td>
                                        <td>S-2</td>
                                        <td>Tidak Tetap</td>
                                        <td>Blitar</td>
                                        <td>12-10-1965</td>
                                        <td>Dsn. Gogourung 02/05 Ds. Dawuhan Kec. Kademangan Kab. Blitar</td>
                                        <td>A, B dan C</td>
                                        <td>Non Dapodik</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="text-center">
                <div class="ratio ratio-16x9" style="max-width: 700px; margin: 0 auto;">
                    <iframe src="https://www.youtube.com/embed/K55k1j498uc" title="Company Profile PKBM Usaha Mandiri Blitar" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* Button Gradasi Biru */
    .btn-gradient-blue {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #fff;
        border: none;
    }

    .btn-gradient-blue:hover {
        background: linear-gradient(135deg, #2a5298, #1e3c72);
        color: #fff;
    }

    .bg-gradient-blue {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
    }

    /* Custom Card Style */
    .custom-card {
        background: none;
        /* hilangkan background */
        border: 2px solid transparent;
        border-radius: 15px;
        position: relative;
    }

    .custom-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 15px;
        padding: 2px;
        background: linear-gradient(135deg, #000000, #555555);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

</style>
@endsection
