<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Surat</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap/style.css">
</head>

<body>

    <!-- Navbar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Administrator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- End Navbar -->

    <!-- Content -->

    <section id="content">
        <div class="container">
            <div class="box">
                <div class="box-title">
                    <h3>Electronic Surat</h3>
                </div>
                <div class="box-form shadow">
                    <div class="box-form-title">
                        <strong>Input data</strong>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <div class="progresbar">
                                    <div class="progres" id="progres"></div>
                                    <div class="progres-step progres-step-active" data-title="Step1"></div>
                                    <div class="progres-step" data-title="Step2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="fpdf.php" method="POST" class="form" target="_blank">
                        <div class="form-step form-step-active">
                            <div class="row mb-3">
                                <div class="col ">
                                    <label for="judulsurat" class="form-label">Judul Surat</label>
                                    <div class="field-input">
                                        <input type="text" name="judulsurat" class="form-control form-control-sm text-input" autofocus id="judulsurat" autocomplete="off">
                                        <div class="alert-input-danger">
                                            <i class="fas fa-exclamation-circle ms-1"></i>
                                        </div>
                                        <div class="alert-input-success">
                                            <i class="fas fa-check-circle ms-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col mb-3">
                                    <label for="nomorsurat" class="form-label">Nomor Surat</label>
                                    <div class="field-input">
                                        <input type="text" name="nomorsurat" class="form-control form-control-sm text-input" id="nomorsurat" autocomplete="off">
                                        <div class="alert-input-danger">
                                            <i class="fas fa-exclamation-circle ms-1"></i>
                                        </div>
                                        <div class="alert-input-success">
                                            <i class="fas fa-check-circle ms-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="lampiran" class="form-label">Lampiran</label>
                                    <div class="field-input">
                                        <input type="text" name="lampiran" class="form-control form-control-sm text-input" id="lampiran" autocomplete="off" placeholder="-">
                                        <div class="alert-input-danger">
                                            <i class="fas fa-exclamation-circle ms-1"></i>
                                        </div>
                                        <div class="alert-input-success">
                                            <i class="fas fa-check-circle ms-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col mb-3">
                                    <label for="perihal" class="form-label">Perihal</label>
                                    <div class="field-input">
                                        <input type="text" name="perihal" class="form-control form-control-sm text-input" id="perihal" autocomplete="off" placeholder="perihal">
                                        <div class="alert-input-danger">
                                            <i class="fas fa-exclamation-circle ms-1"></i>
                                        </div>
                                        <div class="alert-input-success">
                                            <i class="fas fa-check-circle ms-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="tanggalsurat" class="form-label">Tanggal Surat</label>
                                    <div class="field-input">
                                        <input type="text" name="tanggalsurat" class="form-control form-control-sm text-input" id="tanggalsurat" autocomplete="off" placeholder="tanggal Surat">
                                        <div class="alert-input-danger">
                                            <i class="fas fa-exclamation-circle ms-1"></i>
                                        </div>
                                        <div class="alert-input-success">
                                            <i class="fas fa-check-circle ms-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tujuansurat" class="form-label">Tujuan Surat</label>
                                        <div class="field-input">
                                            <input type="text" name="tujuansurat" class="form-control form-control-sm text-input" id="tujuansurat" autocomplete="off" placeholder="Tujuan Surat">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="haritanggal" class="form-label">Tanggal Acara</label>
                                        <div class="field-input">
                                            <input type="text" name="haritanggal" class="form-control form-control-sm text-input" id="haritanggal" autocomplete="off" placeholder="Sabtu, 28 Agustus">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="waktu" class="form-label">Waktu</label>
                                        <div class="field-input">
                                            <input type="text" name="waktu" class="form-control form-control-sm text-input" id="waktu" autocomplete="off" placeholder="08:00 WIB - Selesai">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="via" class="form-label">Via</label>
                                        <div class="field-input">
                                            <input type="text" name="via" class="form-control form-control-sm text-input" id="via" autocomplete="off" placeholder="Zoom">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col text-end">
                                    <a href="#" class="btn btn-primary btn-sm btn-width btn-next">Next &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-step">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="ketuapanitia" class="form-label">Ketua Panitia</label>
                                        <div class="field-input">
                                            <input type="text" name="ketuapanitia" class="form-control form-control-sm text-input" id="ketuapanitia" autocomplete="off" placeholder="Chairul Akhyar">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="nimketua" class="form-label">Nim Ketua</label>
                                        <div class="field-input">
                                            <input type="text" name="nimketua" class="form-control form-control-sm text-input" id="nimketua" autocomplete="off" placeholder="190705097">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="sekpanitia" class="form-label">Sekretaris Panitia</label>
                                        <div class="field-input">
                                            <input type="text" name="sekpanitia" class="form-control form-control-sm text-input" id="sekpanitia" autocomplete="off" placeholder="Raihana">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="nimsek" class="form-label">Nim Sekretaris</label>
                                        <div class="field-input">
                                            <input type="text" name="nimsek" class="form-control form-control-sm text-input" id="nimsek" autocomplete="off" placeholder="190238484">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="kahim" class="form-label">Ketua Himpunan</label>
                                        <div class="field-input">
                                            <input type="text" name="kahim" class="form-control form-control-sm text-input" id="kahim" autocomplete="off" placeholder="Rizki Mardhatillah">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-4">
                                        <label for="nimkahim" class="form-label">Nim Ketua Himpunan</label>
                                        <div class="field-input">
                                            <input type="text" name="nimkahim" class="form-control form-control-sm text-input" id="nimkahim" autocomplete="off" placeholder="20092838">
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="isisurat" class="form-label">Isi Surat</label>
                                        <div class="field-input">
                                            <textarea class="form-control text-input" name="isisurat" id="isisurat" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati volupta" autocomplete="off"></textarea>
                                            <div class="alert-input-danger">
                                                <i class="fas fa-exclamation-circle ms-1"></i>
                                            </div>
                                            <div class="alert-input-success">
                                                <i class="fas fa-check-circle ms-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col text-start">
                                    <a href="#" class="btn btn-danger btn-sm btn-width btn-prev ">&nbsp;<i class="fas fa-angle-double-left"></i> Previous</a>
                                    <button type="button" class="btn btn-sm btn-info btn-width btn-preview" id="preview" data-bs-toggle="modal" data-bs-target="#previewModal">Preview &nbsp;<i class="fas fa-angle-double-up"></i></button>
                                </div>
                                <div class="col text-end">
                                    <button type="submit" name="submit" class="btn btn-sm btn-width btn-warning btn-print">Cetak file &nbsp;<i class="fas fa-print"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- End Content -->



    <!-- Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Modal Body Add -->
                    <div class="preview-form-data">
                        <div class="preview-header mb-1">
                            <div class="image-first mt-2 d-flex justify-content-center align-items-center"><img src="assets/image/logo1.png" alt=""></div>
                            <div class="text-preview-header mt-2 ">
                                <strong class="value-text-judul" id="judulsurat-val">PANITIA PELAKSANA</strong>
                                <small>HIMPUNAN MAHASISWA TEKNOLOGI INFORMASI</small>
                                <small class="text-info">FAKULTAS SAINT DAN TEKNOLOGI</small>
                                <small>UNIVERSITAS ISLAM NEGERI AR-RANIRY</small>
                                <small>Sekretariat: Komplek Fakultas Saints Dan Teknologi</small>
                                <small>No. Telp: +6285261506337 - Email: hima.ti@ar-raniry.ac.id</small>
                            </div>
                            <div class="image-second  mt-2 d-flex justify-content-center align-items-center"><img src="assets/image/hima.png" alt=""></div>
                        </div>
                        <div class="rows" style="height: 1px;background-color: black;"></div>
                        <div class="preview-form mt-3">
                            <div class="row">
                                <div class="col text">
                                    <strong>Nomor&emsp;&emsp;&nbsp;: &nbsp;</strong><b class="value-text" id="nomorsurat-val"> </b>
                                </div>
                                <div class="col text-end text"><b class="value-text" id="tanggalsurat-val"></b></div>
                            </div>
                            <div class="row">
                                <div class="col text"><strong>Lampiran &emsp;: &nbsp;</strong><b class="value-text" id="lampiran-val"></b></div>
                            </div>
                            <div class="row">
                                <div class="col text"><strong>Perihal &emsp;&emsp;&nbsp;: &nbsp;</strong><b class="value-text" id="perihal-val"></b></div>
                            </div>
                        </div>
                        <div class="preview-data-form mt-2 p-3">
                            <p>Kepada Yth.</p>
                            <strong><b class="value-text fw-bold" id="tujuansurat-val"></b></strong>
                            <small class="text-line">Di-Tempat</small>
                            <small class="mb-3"><i>Assalamualaikum Wr. Wb</i></small>
                            <small><strong>Dengan Hormat,</strong></small>
                            <small class="text-justify">&emsp;&emsp;<b class="value-text" id="isisurat-val"></b></small>
                            <div class="form-data-date mt-3 mb-3">
                                <table>
                                    <tr>
                                        <td id="row1">Hari / Tanggal</td>
                                        <td id="row2">:</td>
                                        <td><b class="value-text" id="haritanggal-val"></b></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Waktu</td>
                                        <td>:</td>
                                        <td><b class="value-text" id="waktu-val"></b></td>
                                    </tr>
                                    <tr>
                                        <td>Via</td>
                                        <td>:</td>
                                        <td><b class="value-text" id="via-val"></b></td>
                                    </tr>
                                </table>
                            </div>
                            <small class="mb-2">Demikian surat ini kami sampaikan, atas perhatian dan kesedian bapak kami ucapkan terimakasih.</small>
                            <small><i>Wassalamualaikum Wr. Wb</i></small>

                            <div class="footer-data mt-4">
                                <div class="row">
                                    <div class="col text-center mb-3">
                                        <small>Hormat kami</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-line">Ketua Panitia</p>
                                        <strong><b class="value-text" id="ketuapanitia-val"></b></strong>
                                        <small>NIM. <b class="value-text" id="nimketua-val"></b></small>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-line">Sekretaris Panitia</p>
                                        <strong><b class="value-text" id="sekpanitia-val"></b></strong>
                                        <small>NIM. <b class="value-text" id="nimsek-val"></b></small>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="row">
                                        <div class="col text-center">
                                            <small>Mengetahui</small>
                                            <small>Ketua Himpunan Mahasiswa Teknologi Informasi</small>
                                            <small>Fakultas Sains dan Teknologi, UIN Ar-Raniry</small>
                                            <small class="text-line">Periode 2020/2021</small>
                                            <strong><b class="value-text" id="kahim-val"></b></strong>
                                            <samll>NIM. <b class="value-text" id="nimkahim-val"></b></samll>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i>&nbsp; Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>