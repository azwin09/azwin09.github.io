<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - CAR DEAL</title>
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
                <h2 class="text-center mb-4">Hubungi Kami</h2>
                <p>
                    Kami sangat senang bisa membantu Anda! Jika Anda memiliki pertanyaan atau ingin informasi lebih lanjut,
                    jangan ragu untuk menghubungi kami melalui kontak berikut.
                </p>
                <h3 class="mt-5">Alamat Kami</h3>
                <p>
                    Jl. Pangadegan Utara kel. Cikoko, Jakarta, Indonesia
                </p>
                <h3 class="mt-5">Telepon</h3>
                <p>
                    +62 81 234 567 8910
                </p>
                <h3 class="mt-5">Email</h3>
                <p>
                    Cardeal@gmail.com
                </p>
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
