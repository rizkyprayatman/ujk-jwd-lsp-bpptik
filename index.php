<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/Logo-lsp-bpptik.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="assets/img/Logo-lsp-bpptik.png" alt="logo-lsp-bpptik">
        <div class="collapse navbar-collapse nBold">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home</a>
                <a class="nav-item nav-link" href="profile.php">Profile</a>
                <a class="nav-item nav-link" href="#skema">Sertifikasi</a>
                <a class="nav-item nav-link" href="#kontak">Kontak</a>
            </div>
        </div>
        <div class="navbar-side navbar-nav nBold">
            <a class="nav-item nav-link" href="#" style="color: black;">Login</a>
            <button type="button" class="btn btn-primary"> <a class="tombol" href=""> Registrasi</a></button>
        </div>
    </nav>

    <section id="heroSatu" class="hero">
        <div class="hero1">
            <h1> LSP BPPTIK </h1>
            <p> lembaga pendukung BNSP yang bertanggung jawab
                untuk melaksanakan uji kompetensi dan
                sertifikasi kompetensi di bidang TIK
            </p>
            <button type="button" class="btn btn-primary"> <a class="tombol" href=""> Skema Sertifikasi</a> </button>
        </div>
        <div class="hero2">
            <img src="assets/img/hero/undraw_Working_re_ddwy.svg" alt="hero">
        </div>
    </section>

    <section id="heroDua" class="bg-light nRegular">
        <h1>LSP BPPTIK</h1>
        <div class="d-flex justify-content-center">
            <div style="width: 20%; margin-right: 50px; padding-top: 20px;">
                <img class="mx-auto d-block" src="assets/img/icon-1.svg" alt="lsp-profesional" style=" width: 45%;">
                <p style="text-align: center;">Melaksanakan sertifikasi
                    kompetensi kerja di bidang TIK
                    yang independen dan profesional</p>
            </div>
            <div style="width: 20%; margin-left: 50px; padding-top: 20px;">
                <img class="mx-auto d-block" src="assets/img/icon-2.svg" alt="lsp-profesional" style="width: 45%;">
                <p style="text-align: center;">Melaksanakan sertifikasi
                    kompetensi kerja di bidang TIK
                    yang independen dan profesional</p>
            </div>
        </div>
    </section>

    <!-- Side Bar Menu Skema Sertifikasi -->
    <section id="skema">
        <h1>Skema Sertifikasi</h1>
        <div class=" d-flex justifi-content-beetween">
            <div class="sideBar">
                <div class="list-group">
                    <?php $skema = @$_GET['skema']; ?>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == '' || $skema == 'jwd' ? 'active' : ''; ?>" href="index.php?skema=jwd">Okupasi Pengembang Web Pratama <br> (Junior Web Developer)</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'tujk' ? 'active' : ''; ?>" href="index.php?skema=tujk">Okupasi Teknisi Utama Jaringan Komputer</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'joo' ? 'active' : ''; ?>" href="index.php?skema=joo">Okupasi Junior Office Operator</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'jgd' ? 'active' : ''; ?>" href="index.php?skema=jgd">Okupasi Desainer Grafis Muda <br> (Junior Graphic Designer)</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'jna' ? 'active' : ''; ?>" href="index.php?skema=jna">Okupasi Network Administrasi Muda <br> (Junior Network Administrator)</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'jmp' ? 'active' : ''; ?>" href="index.php?skema=jmp">Okupasi Pemrograman Mobil Pratama <br> (Junior Mobile Programmer)</a>
                    <a class="list-group-item-action list-group-item-light p-3 <?php echo $skema == 'ia' ? 'active' : ''; ?>" href="index.php?skema=ia">Okupasi Animator Madya <br> (Intermediate Animator)</a>

                </div>
            </div>

            <!-- Kemasan Kompetensi -->

            <div class="infoBar">
                <div>
                    <?php
                    if ($skema == '' || $skema == 'jwd') {
                        echo "<div class=\"active\">
                                    <h2 >Kemasan Kompetensi</h2>
                                    <h3>Deskripsi</h3>
                                    <p> Jenis kemasan ini adalah kemasan okupasi PENGEMBANG WEB PRATAMA 
                                    (JUNIOR WEB DEVELOPER) di lingkungan kantor pemerintahan atau swasta. 
                                    Okupasi ini merefleksikan peran individu dalam melaksanakan satu tugas 
                                    spesifik, dengan menggunakan perangkat lunak tools pemrograman, 
                                    informasi, dan prosedur kerja yang lazim dilakukan, serta menunjukkan 
                                    kinerja dengan mutu yang terukur, di bawah pengawasan tidak langsung 
                                    atasannya.  Memiliki pengetahuan operasional dasar dan pengetahuan 
                                    faktual bidang kerja yang spesifik, sehingga mampu memilih penyelesaian 
                                    yang tersedia terhadap masalah yang lazim timbul. Bertanggung jawab 
                                    pada pekerjaan sendiri.
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else if ($skema == 'tujk') {
                        echo "<div class=\"active\">
                                    <h2>Kemasan Kompetensi</h2>
                                    <h3>Deskripsi</h3>
                                    <p> Jenis kemasan ini adalah kemasan okupasi TEKNISI UTAMA JARINGAN 
                                    KOMPUTER dilingkungan kantor pemerintahan atau swasta. Okupasi ini 
                                    merefleksikan peran individu dalam melaksanakan satu tugas spesifik, 
                                    seperti memasang dan mengkonfigurasi perangkat jaringan dan prosedur 
                                    kerja yang lazim dilakukan, serta menunjukkan kinerja dengan mutu yang 
                                    terukur, di bawah pengawasan tidak langsung atasannya.  Memiliki 
                                    pengetahuan operasional dasar dan pengetahuan faktual bidang kerja 
                                    yang spesifik, sehingga mampu memilih penyelesaian yang tersedia 
                                    terhadap masalah yang lazim timbul. Bertanggung jawab pada pekerjaan 
                                    sendiri.
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else if ($skema == 'joo') {
                        echo "<div class=\"active\">
                                    <h2>Kemasan Kompetensi</h2>
                                    <h3>Deskripsi</h3>
                                    <p> Jenis kemasan ini adalah kemasan okupasi JUNIOR OFFICE OPERATOR 
                                    dilingkungan kantor pemerintahan atau swasta. Okupasi ini merefleksikan 
                                    peran individu dalam melaksanakan  satu tugas spesifik, dengan 
                                    menggunakan perangkat lunak aplikasi perkantoran dan perangkat keras, 
                                    informasi, dan prosedur kerja yang lazim dilakukan, serta menunjukkan 
                                    kinerja dengan mutu yang terukur, di bawah pengawasan tidak langsung 
                                    atasannya.  Memiliki pengetahuan operasional dasar dan pengetahuan 
                                    faktual bidang kerja yang spesifik, sehingga mampu memilih penyelesaian 
                                    yang tersedia terhadap masalah yang lazim timbul. Bertanggung jawab 
                                    pada pekerjaan sendiri.
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else if ($skema == 'jgd') {
                        echo "<div class=\"active\">
                                    <h2>Kemasan Kompetensi</h2>
                                    <h3>Deskripsi</h3>
                                    <p> Jenis kemasan ini adalah kemasan okupasi DESAINER GRAFIS MUDA (JUNIOR GRAPHIC DESIGNER) 
                                    dilingkungan kantor pemerintahan atau swasta. Okupasi ini merefleksikan 
                                    peran individu dalam melaksanakan satu tugas spesifik, dengan 
                                    menggunakan perangkat lunak desain, informasi, dan prosedur kerja yang 
                                    lazim dilakukan, serta menunjukkan kinerja dengan mutu yang terukur, 
                                    di bawah pengawasan tidak langsung atasannya. Memiliki pengetahuan 
                                    operasional dasar dan pengetahuan faktual bidang kerja yang spesifik, 
                                    sehingga mampu memilih penyelesaian yang tersedia terhadap masalah 
                                    yang lazim timbul. Bertanggung jawab pada pekerjaan sendiri.
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else if ($skema == 'jna') {
                        echo "<div class=\"active\">
                                <h2>Kemasan Kompetensi</h2>
                                <h3>Deskripsi</h3>
                                <p> Jenis kemasan ini adalah kemasan okupasi NETWORK ADMINISTRATOR MUDA 
                                (JUNIOR NETWORK ADMINISTRATOR) di lingkungan kantor pemerintahan atau 
                                swasta. Okupasi ini merefleksikan peran individu dalam melaksanakan 
                                satu tugas spesifik, seperti memasang dan mengkonfigurasi perangkat 
                                jaringan dan prosedur kerja yang lazim dilakukan, serta menunjukkan 
                                kinerja dengan mutu yang terukur, di bawah pengawasan tidak langsung 
                                atasannya.  Memiliki pengetahuan operasional dasar dan pengetahuan 
                                faktual bidang kerja yang spesifik, sehingga mampu memilih penyelesaian 
                                yang tersedia terhadap masalah yang lazim timbul. Bertanggung jawab 
                                pada pekerjaan sendiri.
                                </p>
                                <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else if ($skema == 'jmp') {
                        echo "<div class=\"active\">
                                <h2>Kemasan Kompetensi</h2>
                                <h3>Deskripsi</h3>
                                <p> Jenis kemasan ini adalah kemasan okupasi PEMROGRAM MOBIL PRATAMA 
                                (JUNIOR MOBILE PROGRAMMER) di lingkungan kantor pemerintahan atau 
                                swasta. Okupasi ini merefleksikan peran individu dalam melaksanakan 
                                satu tugas spesifik, dengan melakukan interaksi antara pengguna dan 
                                komputer dimana komputer dapat dibawa kemana saja mengikuti manusia 
                                yang berpindah tempat dan selalu terkoneksi dengan jaringan internet, 
                                serta menunjukkan kinerja dengan mutu yang terukur, di bawah pengawasan 
                                tidak langsung atasannya.  Memiliki pengetahuan operasional dasar dan 
                                pengetahuan faktual bidang kerja yang spesifik, sehingga mampu memilih 
                                penyelesaian yang tersedia terhadap masalah yang lazim timbul. 
                                Bertanggung jawab pada pekerjaan sendiri.
                                </p>
                                <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    } else {
                        echo "<div class=\"active\">
                                <h2>Kemasan Kompetensi</h2>
                                <h3>Deskripsi</h3>
                                <p> Jenis kemasan ini adalah kemasan okupasi ANIMATOR MADYA (INTERMEDIATE ANIMATOR) 
                                di lingkungan kantor pemerintahan atau swasta. Okupasi ini merefleksikan peran individu dalam 
                                melaksanakan satu tugas spesifik, seperti membuat model, gerak dan pencahayaan objek non karakter dan prosedur 
                                kerja yang lazim dilakukan, serta menunjukkan kinerja dengan mutu yang terukur, di bawah pengawasan tidak langsung atasannya.  
                                Memiliki pengetahuan operasional dasar dan pengetahuan faktual bidang kerja yang spesifik, sehingga mampu memilih penyelesaian 
                                yang tersedia terhadap masalah yang lazim timbul. Bertanggung jawab pada pekerjaan sendiri.
                                </p>
                                <button type=\"button\" class=\"btn btn-primary\"> <a class=\"tombol\" href=\"\">baca selanjutnya</a></button>
                            </div> ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri">
        <h1>Galeri <br> LSP BPPTIK</h1>
        <div class="d-flex justify-content-around">
            <img style="border-radius: 10px;" src="assets/img/galeri/IMG_0233-300x200.jpg" alt="galeri-lsp">
            <img style="border-radius: 10px;" src="assets/img/galeri/IMG_0243-300x200.jpg" alt="galeri-lsp">
            <img style="border-radius: 10px;" src="assets/img/galeri/IMG_0630-300x200.jpg" alt="galeri-lsp">
        </div>

        <div style="margin: 25px 0px;" class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary"> <a class="tombol" href="">Lihat Galeri</a> </button>
        </div>

        <?php

        $source = "assets/img/galeri";

        $destination = "assets/img/galeri";

        $watermark = imagecreatefrompng("assets/img/watermark.png");

        $margin_right = 155;
        $margin_bottom = 5;

        $sx = imagesx($watermark);
        $sy = imagesy($watermark);

        $images = array_diff(scandir($source), array('..', '.'));

        foreach ($images as $image) {
            $img = imagecreatefromjpeg($source . '/' . $image);

            imagecopy($img, $watermark, imagesx($img) - $sx - $margin_right, imagesy($img) - $sy - $margin_bottom, 0, 0, $sx, $sy);

            $i = imagejpeg($img, $destination . '/' . $image, 100);

            imagedestroy($img);
        }

        ?>

    </section>

    <footer>
        <div class="d-flex" style="background-color: #0d6efd; color: white; padding: 25px">
            <div style="padding: 10px 25px 0px 0px;">
                <img src="assets /img/logo-lsp-bpptik-bg-white.svg" alt="logo-lspbpptik">
            </div>
            <div id="kontak">
                <h1>Kontak</h1>
                <p> <img src="assets/img/icon/fluent_mail-24-regular.svg" alt="icon-mail"> lspbpptik@kominfo.go.id</p>
                <p> <img src="assets/img/icon/bytesize_telephone.svg" alt="icon-phone"> (021) 2864 - 5060</p>
                <p> <img src="assets/img/icon/whh_address.svg" alt="icon-address"> Jl. Sekolah Hijau Kav. 2, Kota Jababeka, Kab. Bekasi Kec. Cikarang Utara, 17550</p>
            </div>
        </div>
        <p class="cpy">@ Copyright 2021 | lspbpptik </p>
    </footer>


</body>

</html>