<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <title>Self Assessment COVID19</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/feather-icons/feather.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162237944-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-162237944-1');
    </script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/data.js"></script>
    <script src="assets/js/app.js"></script>
</head>
<body class="intro">
    <section id="intro">
        <div class="virus">
            <div class="item"><img src="assets/images/background/virus.svg" alt=""></div>
            <div class="item"><img src="assets/images/background/virus-2.svg" alt=""></div>
            <div class="item"><img src="assets/images/background/bacteria.svg" alt=""></div>
            <div class="item"><img src="assets/images/background/virus.svg" alt=""></div>
            <div class="item"><img src="assets/images/background/virus-2.svg" alt=""></div>
            <div class="item"><img src="assets/images/background/bacteria.svg" alt=""></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 py-5 py-lg-0">
                <div class="col-md-6 d-flex align-items-center order-1 order-md-0 mt-5 mt-md-0">
                    <div class="text-center text-lg-left">
                        <h1 class="font-weight-black mb-4">SELF ASSESSMENT COVID19</h1>
                        <p>
                            Ini adalah alat uji sederhana berbasis website untuk bisa membantu merekomendasikan apakah kamu perlu melakukan pemeriksaan, mengisolasi diri ataupun pengujian lebih lanjut.
                        </p>
                        <button class="btn-start btn btn-info py-3 px-5 shadow mt-5"><h5 class="m-0">Mulai</h5></button>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <img src="assets/images/background/hero.svg" alt="" width="100%" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="quiz">
        <div class="row h-100">
            <div class="col-lg-3 bg-light d-flex align-items-center quiz-sidebar">
                <div class="info text-center p-4">
                    <div class="image mb-4"><img src="assets/images/background/sidebar-img.svg" alt="" width="100" height="auto"></div>
                    <h5 class="font-weight-bold mb-4">MENGAPA PENGUJIAN INI PENTING!</h5>
                    <p>
                        Kini, dunia sedang melawan virus yang sangat cepat persebarannya. Mendeteksi lebih awal gejala Virus Corona akan meminimalisir penyebaran virus ini. 
                    </p>
                </div>
            </div>
            <div class="col-lg bg-white overflow-auto quiz-content">
                <div class="row h-100 justify-content-center align-items-center form-nama">
                    <div class="col-md-8">
                        <h4 class="mb-4">Nama Anda?</h4>
                        <form action="" id="form-start-quiz">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info py-3 px-5" type="submit"><h5 class="m-0">Mulai Test</h5></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="chatbox p-5">

                    <div class="item default mb-5 active">
                        <div class="row mb-3">
                            <div class="col-auto">
                                <div class="avatar"><img src="assets/images/background/avatar.svg" alt="" width="60"></div>
                            </div>
                            <div class="col">
                                <div class="chatbubble">
                                    <div class="text">
                                        Halo <strong class="nama"></strong>, Apa khabar? saya akan memberikan beberapa pertanyaan tolong dijawab dengan jujur ya
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>
