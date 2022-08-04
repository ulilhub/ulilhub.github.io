<?php
// redirect
if ($_POST["username"] !== "ulil" && $_POST["password"] !== "ulil") {
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Account</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Lembaga Dakwah Nahdlatul Ulama</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Logout</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>

<section class="jumbotron text-center">
      <img src="img/LDNU.jpg" alt="LDNU" width="150" />
      <h1 class="display-4">Hai, <?= "Nama" ?></h1>
      <p class="lead"><?= "email" ?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,96L48,106.7C96,117,192,139,288,122.7C384,107,480,53,576,53.3C672,53,768,107,864,128C960,149,1056,139,1152,117.3C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
</body>
</html>