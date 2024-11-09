<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - CAR DEAL</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link text-white active" aria-current="page" href="beranda">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Siapa Kami?</h2>
                <p>
                    CAR DEAL adalah platform yang menyediakan layanan kredit mobil dengan berbagai pilihan. Kami berkomitmen
                    untuk membantu Anda memiliki kendaraan impian dengan proses yang mudah dan terpercaya.
                </p>
                <h3 class="mt-5">Misi Kami</h3>
                <p>
                    Kami ingin memberikan solusi pembiayaan mobil yang mudah, cepat, dan aman untuk semua pelanggan. Kami 
                    memahami bahwa memiliki mobil adalah impian banyak orang, dan kami di sini untuk membantu Anda mewujudkannya.
                </p>
                <h3 class="mt-5">Mengapa Memilih CAR DEAL?</h3>
                <ul>
                    <li>Proses cepat dan mudah.</li>
                    <li>Bunga kompetitif.</li>
                    <li>Transparansi dan keamanan dalam setiap transaksi.</li>
                    <li>Tim ahli siap membantu Anda.</li>
                </ul>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p class="m-0 text-center">Copyright &copy; CAR DEAL 2023</p>
        </div>
    </footer>
</body>
</html>
