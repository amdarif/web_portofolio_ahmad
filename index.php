
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>20242001_Portofolio_Ahmad</title>

        <link rel="stylesheet" href="aset/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleku.css">

        <script src="aset/js/chartJS.js"></script>
        <script src="aset/js/chartJS.plugin.databel.js"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar-utama" data-bs-root-margin="0px 0px -40%">



        <nav id="navbar-utama" class="navbar bg-white sticky-top shadow-sm navbar-expand">
            <div class="container-fluid px-4">

                <a class="navbar-brand d-flex align-items-center" href="#home">
                    <img src="aset/gbr/C3_Ahmad.jpg" class="logo me-2" alt="Foto Ahmad">
                    <div>
                        <div class="fw-bold">Ahmad</div>
                        <small class="text-secondary">Mekatronika</small>
                    </div>
                </a>

                <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>

            </div>
        </nav>

            <!-- Hero Perkenalan -->
            <section id="home" class="hero-section py-5">

                <div class="container">
                    <div class="row align-items-center min-vh-80 py-5">

                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <p class="text-primary fw-bold mb-2">
                                HALO, SAYA AHMAD 
                            </p>

                            <h1 class="display-3 fw-bold mb-3">
                                Salken...
                            </h1>

                            <h3 class="text-secondary mb-4">
                                Mahasiswa Mekatronika
                            </h3>

                            <p class="lead mb-4">
                                Halo Guyss.. Namaku Ahmad Arif Budijatmiko,
                                kalian bisa memanggilku Ahmad. Saya sedang
                                menempuh pendidikan di Politeknik ATMI Surakarta
                                pada bidang Mekatronika.
                            </p>

                            <p class="text-secondary mb-4">
                                Saat ini saya sedang belajar membuat website dari awal hingga mempublish di server local, selamat melihat...
                            </p>

                            <div class="d-flex flex-wrap gap-3">
                                <a href="#about" class="btn btn-primary btn-lg">
                                    Tentang Saya
                                </a>

                                <a href="#kontak" class="btn btn-outline-primary btn-lg">
                                    Kontak
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-6 text-center">
                            <img src="aset/gbr/gaya.jpg"
                                class="hero-image img-fluid"
                                alt="Foto Ahmad">
                        </div>

                    </div>
                </div>

            </section>



            <!-- Service -->
            <section id="service" class="service-section py-5">

                <div class="container">

                    <div class="text-center mb-5">
                        <h2 class="fw-bold">Service</h2>
                        <p class="text-secondary">
                            Beberapa bidang yang saya pelajari dan minati.
                        </p>
                    </div>

                    <div class="row g-4">

                        <div class="col-md-6 col-lg-4">
                            <div class="card service-card h-100 text-center shadow-sm">

                                <div class="card-body p-4">
                                    <img src="aset/gbr/mekanik.png"
                                        class="service-img img-fluid mb-4"
                                        alt="Mekanik">

                                    <h3 class="fw-bold">Mekanik</h3>

                                    <p class="text-secondary">
                                        Mempelajari sistem mekanik, perakitan,
                                        komponen mesin, dan cara kerja sistem mekanik.
                                    </p>

                                   <button 
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalMekanik">
                                        Selengkapnya
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card service-card h-100 text-center shadow-sm">

                                <div class="card-body p-4">
                                    <img src="aset/gbr/elektrik.png" class="service-img img-fluid mb-4"
                                        alt="Elektrik">

                                    <h3 class="fw-bold">Elektrik</h3>

                                    <p class="text-secondary">
                                        Mempelajari kelistrikan, wiring, motor,
                                        kontrol, PLC, dan sistem otomasi.
                                    </p>

                                     <button 
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalElektrik">
                                        Selengkapnya
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card service-card h-100 text-center shadow-sm">

                                <div class="card-body p-4">
                                    <img src="aset/gbr/informatik.png"
                                        class="service-img img-fluid mb-4"
                                        alt="Informatik">

                                    <h3 class="fw-bold">Informatik</h3>

                                    <p class="text-secondary">
                                        Mempelajari HTML, CSS, Bootstrap,
                                        pemrograman dasar, dan pembuatan website.
                                    </p>

                                    <button 
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalInformatik">
                                        Selengkapnya
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </section>



            <!-- MODAL MEKANIK -->
            <div class="modal fade" id="modalMekanik" tabindex="-1">

                <?php

                include "koneksi.php";

                // $query = "SELECT * FROM modal_service"; ini kalo aku mau ambil semua
                $query = "SELECT * FROM modal_service WHERE id = 1";

                $result = mysqli_query($koneksi, $query);

                ?>

                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                
                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title fw-bold">
                                <?php echo $data["judul"]?>
                            </h5>

                        </div>

                        <div class="modal-body">

                            <p>
                                <?php echo $data["keterangan"]?>
                            </p>

                            <h6 class="fw-bold mt-4">
                                <?php echo $data["petunjuk"]?>
                            </h6>

                            <?php echo $data["isi"]?>

                        </div>

                        <div class="modal-footer">

                            <button 
                                type="button" 
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>

                        </div>

                    </div>

                </div>
                <?php } 
                mysqli_close($koneksi); ?>

            </div>


       
            <!-- MODAL ELEKTRIK -->
            <div class="modal fade" id="modalElektrik" tabindex="-1">

            <?php

                include "koneksi.php";

                $query = "SELECT * FROM modal_service WHERE id = 2";

                $result = mysqli_query($koneksi, $query);

                ?>

                <?php while ($data = mysqli_fetch_assoc($result)) { ?>

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title fw-bold">
                                <?php echo $data["judul"]?>
                            </h5>

                        </div>

                        <div class="modal-body">

                            <p>
                                <?php echo $data["keterangan"]?>
                            </p>

                            <h6 class="fw-bold mt-4">
                                <?php echo $data["petunjuk"]?>
                            </h6>

                            <?php echo $data["isi"]?>

                        </div>

                        <div class="modal-footer">

                            <button 
                                type="button" 
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>

                        </div>

                    </div>

                </div>

                <?php } 
                mysqli_close($koneksi); ?>

            </div>


            
            <!-- MODAL INFORMATIK -->
            <div class="modal fade" id="modalInformatik" tabindex="-1">

            <?php

                include "koneksi.php";

                $query = "SELECT * FROM modal_service WHERE id = 3";

                $result = mysqli_query($koneksi, $query);

                ?>

                <?php while ($data = mysqli_fetch_assoc($result)) { ?>

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title fw-bold">
                                <?php echo $data["judul"]?>
                            </h5>

                        </div>

                        <div class="modal-body">

                            <p>
                                <?php echo $data["keterangan"]?>
                            </p>

                            <h6 class="fw-bold mt-4">
                                <?php echo $data["petunjuk"]?>
                            </h6>

                            <?php echo $data["isi"]?>

                        </div>

                        <div class="modal-footer">

                            <button 
                                type="button" 
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>

                        </div>

                    </div>

                </div>

                <?php } 
                mysqli_close($koneksi); ?>
            </div>


            <!-- About -->
            <section id="about" class="about-section py-5">

                <div class="container">

                    <div class="text-center mb-5">
                        <h2 class="fw-bold">About</h2>
                        <p class="text-secondary">
                            Mengenal saya lebih dekat.
                        </p>
                    </div>

                    <div class="row align-items-center">

                
                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center text-center">
                                <p class="mb-2 text-secondary">Tentang Saya</p> 
                            </div>
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h5 class="fw-bold"> Pendidikan</h5>
                                            <p class="mb-1">
                                                Politeknik ATMI Surakarta
                                            </p>
                                            <small class="text-secondary">
                                                Program Studi Mekatronika
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h5 class="fw-bold"> Keahlian</h5>
                                            <p class="mb-0">
                                                Electrical, Mechanical,
                                                PLC & Automation
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h5 class="fw-bold"> Minat</h5>
                                            <p class="mb-0">
                                                Otomasi industri, kelistrikan
                                                dan teknologi.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h5 class="fw-bold"> Tujuan</h5>
                                            <p class="mb-0">
                                                Terus belajar dan mengembangkan
                                                kemampuan di bidang teknologi.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center text-center">

                                <?php

                                    include "koneksi.php";

                                    $query = "SELECT * FROM keahlian_vote ORDER BY id";
                                    $result = mysqli_query($koneksi, $query);

                                    $suara = [];

                                    while ($data = mysqli_fetch_assoc($result)) {
                                        $suara[] = (int) $data["jumlah_vote"];
                                    }

                                    $total = array_sum($suara);

                                ?>
                            
                                <div id="keahlian" class="container text-center mt-5">

                                    <p class="mb-2 text-secondary">
                                        Penilaian keahlian menurut Tim/partner kerja
                                    </p>

                                    <div class="row justify-content-center mt-4">
                                        <div class="col-md-6">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>

                                    <p id="infoTotal" class="mt-3">
                                        Total Suara: <?php echo $total; ?>
                                    </p>

                                </div>


                                <script>

                                    let suara = <?php echo json_encode($suara); ?>;

                                    let nama = ["PLC", "Program", "Elektro", "Mekanik"];

                                    let grafik = new Chart("myChart", {
                                        type: "pie",

                                        data: {
                                            labels: nama,

                                            datasets: [{
                                                data: suara,
                                                backgroundColor: ["red", "green", "blue", "orange"]
                                            }]
                                        },

                                        plugins: [ChartDataLabels],

                                        options: {
                                            plugins: {

                                                legend: {
                                                    display: false
                                                },

                                                datalabels: {

                                                    color: "white",

                                                    font: {
                                                        weight: "bold",
                                                        size: 14
                                                    },

                                                    formatter: function(value, context) {

                                                        let total = context.dataset.data.reduce(
                                                            (a, b) => a + b, 0
                                                        );

                                                        if (total === 0) {
                                                            return "";
                                                        }

                                                        let persen = (value / total * 100).toFixed(1);

                                                        return context.chart.data.labels[context.dataIndex]
                                                            + "\n" + persen + "%";
                                                    }
                                                }
                                            }
                                        }
                                    });

                                    function tambahSuara(id) {

                                        fetch("vote.php", {
                                            method: "POST",

                                            headers: {
                                                "Content-Type": "application/x-www-form-urlencoded"
                                            },

                                            body: "id=" + id
                                        })

                                        .then(response => response.text())

                                        .then(() => {

                                            
                                            suara[id - 1]++;
                                           
                                            grafik.data.datasets[0].data = suara;

                                            grafik.update();

                                            let total = suara.reduce((a, b) => a + b, 0);

                                            document.getElementById("infoTotal").innerText =
                                             "Total Suara: " + total;

                                        });

                                    }

                                    </script>

                            </div>
                        </div>
                    
                    <div class="d-flex flex-column align-items-center text-center">
                        <p class="text-secondary pt-5" style="font-size: 20px;">
                            Bantu seseorang mengenal keahlian saya dengan memberi penilain kepada saya , terimakasih
                        </p>
                        <button 
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalPenilaian">
                            Beri Penilaian
                        </button>    
                    </div>                      
                                             
                </div>

            </section>


            <div class="modal fade" id="modalPenilaian" tabindex="-1">

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title fw-bold">
                                Penilaian Keahlian Ahmad
                            </h5>

                            <button 
                                type="button" 
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>

                        </div>

                        <div class="modal-body">

                            <p>
                                Setelah berdinamika bersama saya, pada keahlian apa yang menurut anda saya lebih kompeten, Mohon memberikan penialian agar oran lain bisa melihat keahlian saya berdasrkan penilain dari tim saya, terimakasih.. 
                            </p>

                            <h6 class="fw-bold mt-4">
                                Pilihan:
                            </h6>

                            <div class="d-flex justify-content-center gap-2 mt-4">

                                <button onclick="tambahSuara(1)" class="btn btn-danger">
                                    + PLC
                                </button>

                                <button onclick="tambahSuara(2)" class="btn btn-success">
                                    + Program
                                </button>

                                <button onclick="tambahSuara(3)" class="btn btn-primary">
                                    + Elektro
                                </button>

                                <button onclick="tambahSuara(4)" class="btn btn-warning">
                                    + Mekanik
                                </button>

                            </div>
                        </div>

                    </div>

                </div>

            </div>





            <!-- Kontak -->
            <section id="kontak" class="kontak-section py-5">

                <div class="container">

                    <div class="text-center mb-5">
                        <h2 class="fw-bold">Kontak</h2>
                        <p class="text-secondary">
                            Jangan ragu untuk menghubungi saya.
                        </p>
                    </div>

                    <div class="row justify-content-center g-4">

                        <div class="col-lg-5">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body p-4">

                                    <h4 class="fw-bold mb-4">
                                        Mari Terhubung 
                                    </h4>

                                    <p class="text-secondary">
                                        Jika ingin berdiskusi, bekerja sama, atau
                                        ingin mengenal saya lebih jauh, silakan
                                        hubungi saya melalui kontak berikut.
                                    </p>

                                <div class="d-flex align-items-center mb-3">
                                        <div class="card h-100 shadow-sm border-0 w-100">
                                             
                                            <a href="https://mail.google.com/mail/?view=cm&to=arif44hmad@gmail.com"
                                                target="_blank">
  
                                                <div class="card-body row align-items-center">
                                                
                                                    <div class="col-auto">
                                                        <img src="aset/gbr/gmail.webp" width="30px">
                                                    </div>
                                                
                                                    <div class="col">
                                                        <small class="text-secondary d-block">Gmail</small>
                                                        <div class="fw-bold tex-color-media">
                                                            arif44hmad@gmail.com
                                                        </div>
                                                    </div>
                                                </div>
                                             </a> 
                                        </div>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <div class="card h-100 shadow-sm border-0 w-100">
                                            
                                            <a href="https://wa.me/6285163524125?text=Halo%20saya%20tertarik%20dengan%20portfolio%20Anda"
                                                        target="_blank">

                                                <div class="card-body row align-items-center">
                                                   
                                                     <div class="col-auto">
                                                                <img src="aset/gbr/wa.png" width="30px">
                                                            </div>
                                                        
                                                            <div class="col">
                                                                <small class="text-secondary d-block">WhatsApp</small>
                                                                <div class="fw-bold tex-color-media">
                                                                    085163524125
                                                            </div>
                                                    </div>   
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="d-flex align-items-center mb-3">
                                        <div class="card h-100 shadow-sm border-0 w-100">
                                            
                                            <a href="https://instagram.com/rieefff_" target="_blank">

                                                <div class="card-body row align-items-center">

                                                    <div class="col-auto">
                                                        <img src="aset/gbr/ig.webp" width="30px">
                                                    </div>
                                                            
                                                    <div class="col">
                                                        <small class="text-secondary d-block">Instagram</small>
                                                        <div class="fw-bold tex-color-media">
                                                        @rieefff_
                                                        </div>         
                                                    </div>
                                                            
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow-sm border-0">

                                <div class="card-body p-4">

                                    <h4 class="fw-bold mb-4">
                                        Kirim Pesan
                                    </h4>

                                    <form action="kirim_kontak.php" method="POST">

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Nama
                                            </label>

                                            <input
                                                type="text"
                                                name="nama"
                                                class="form-control"
                                                placeholder="Masukkan nama kamu"
                                                required>

                                        </div>


                                        <div class="mb-3">

                                            <label class="form-label">
                                                Email
                                            </label>

                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Masukkan email kamu"
                                                required>

                                        </div>


                                        <div class="mb-3">

                                            <label class="form-label">
                                                Pesan
                                            </label>

                                            <textarea
                                                name="pesan"
                                                class="form-control"
                                                rows="5"
                                                placeholder="Tulis pesan kamu..."
                                                required></textarea>

                                        </div>


                                        <button
                                            type="submit"
                                            class="btn btn-primary w-100">

                                            Kirim Pesan

                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- Footer -->
            <footer class="footer-section">

                <div class="container text-center">

                    <h5 class="fw-bold mb-2">Ahmad</h5>

                    <p class="text-secondary mb-3">
                        Mahasiswa Mekatronika |
                        Electrical • Mechanical • Automation
                    </p>

                    <hr>

                    <p class="text-secondary mb-0">
                        Ahmad Arif Budijatmiko
                    </p>

                </div>

            </footer>
    
    <script src="aset/js/bootstrap.min.js"></script>

    </body>
</html>
