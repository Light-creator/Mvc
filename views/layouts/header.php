<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="h-100">

<nav class="p-3 navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Start logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      </ul>
    </div>
    <?php if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false) { ?>
      <a class="nav-link" href="/auth/index">Авторизация</a>
      <a type="button" href="/auth/register" class="btn btn-outline-primary">Регистрация</a>
    <?php } else { ?>
      <form action="/auth/logout" method="POST">
        <button type="submit" class="nav-link">Выйти</button>
      </form>
    <?php } ?>
  </div>
</nav>

<?php require $_SERVER['DOCUMENT_ROOT']. "/views/layouts/flash.php"; ?>