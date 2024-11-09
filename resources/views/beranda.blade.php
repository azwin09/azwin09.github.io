<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CAR DEAL - Kalkulator Kredit Mobil</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <script>
        function calculateLoan() {
            var hargaMobil = parseFloat(document.getElementById("hargaMobil").value);
            var dpPersen = parseFloat(document.getElementById("dpPersen").value);
            var tenor = parseInt(document.getElementById("tenor").value);
            var bunga = 0.05;

            if (isNaN(hargaMobil) || hargaMobil <= 0) {
                alert("Harga mobil tidak valid!");
                return;
            }
            if (isNaN(dpPersen) || dpPersen <= 0) {
                alert("DP persen tidak valid!");
                return;
            }
            if (isNaN(tenor) || tenor <= 0) {
                alert("Tenor tidak valid!");
                return;
            }

            var dp = hargaMobil * dpPersen / 100;
            var jumlahPinjaman = hargaMobil - dp;
            var bungaTotal = jumlahPinjaman * bunga * tenor;
            var angsuranPerBulan = (jumlahPinjaman + bungaTotal) / (tenor * 12);

            document.getElementById("hasil").innerHTML = `
                <div class="card text-center mx-auto" style="width: 50%; padding: 20px;">
                    <h3>Detail Pembayaran:</h3>
                    <p><strong>Harga Mobil:</strong> Rp. ${hargaMobil.toLocaleString()}</p>
                    <p><strong>DP:</strong> Rp. ${dp.toLocaleString()} (${dpPersen}%)</p>
                    <p><strong>Bunga Total:</strong> Rp. ${bungaTotal.toLocaleString()}</p>
                    <p><strong>Angsuran per Bulan:</strong> Rp. ${angsuranPerBulan.toLocaleString()}</p>
                </div>
            `;
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <img class="img-fluid rounded-circle mb-4" src="{{asset('image/logo.jpeg')}}" alt="..."
                style="margin-right: 30px;margin-top: 20px;width: 60px;">
            <a class="navbar-brand text-white" href="#!">CAR DEAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-white active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
    <header class="masthead bg-white text-dark text-center py-5">
        <div class="container d-flex align-items-center flex-column">
            <img class="img-fluid rounded-circle mb-4" src="{{asset('image/logo.jpeg')}}" alt="..."
                style="margin-left: 40px;margin-top: 20px;width: 300px;">
            <h1 class="display-4 mb-3">Selamat Datang di CAR DEAL</h1>
            <p class="lead mb-0">Temukan mobil impian Anda dengan harga terbaik!</p>
        </div>
    </header>
    <hr style="border-top: 2px solid #343a40; margin: 40px 0;"/>

    <section class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="col-md-6 text-start">
                <h2 class="text-center mb-4">Kalkulator Kredit Mobil</h2>
                <form>
                    <div class="mb-3">
                        <label for="hargaMobil" class="form-label">Harga Mobil</label>
                        <input type="number" class="form-control" id="hargaMobil" placeholder="Masukkan Harga Mobil" required>
                    </div>
                    <div class="mb-3">
                        <label for="dpPersen" class="form-label">DP (%)</label>
                        <select class="form-select" id="dpPersen" required>
                            <option value="5">5% </option>
                            <option value="10">10% </option>
                            <option value="15">15% </option>
                            <option value="20">20% </option>
                            <option value="25">25% </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tenor" class="form-label">Tenor (Tahun)</label>
                        <select class="form-select" id="tenor" required>
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                            <option value="4">4 Tahun</option>
                            <option value="5">5 Tahun</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculateLoan()">Hitung Kredit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container" id="hasil">
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
