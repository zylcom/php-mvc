<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- my css -->
    <!-- <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css"> -->

    <title><?= $data['judul']; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"">
        <div class=" container">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
            <img src="https://www.fazztrack.com/_nuxt/img/fazztrack-logo-color.db4c9cc.svg" alt="Fazztrack" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Home</a>
                <a class="nav-link" href="<?= BASE_URL ?>/produk">Produk</a>
                <a class="nav-link" href="<?= BASE_URL ?>/about">About</a>
            </div>
        </div>
        </div>
    </nav>
    <div class="container mt-5">