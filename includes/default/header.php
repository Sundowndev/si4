<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= DIR_ASSETS; ?>/css/reset.css">
    <link rel="stylesheet" href="<?= DIR_ASSETS; ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <title><?= (!empty($title)) ? APP_NAME . ' - ' . $title : APP_NAME; ?></title>
    <link rel="icon" type="img/png" href="<?= DIR_ASSETS; ?>/img/favicon.png" />
</head>
<body>
<header class="containerHeader">
    <div class="logoNav">
        <a href="<?= WEBROOT; ?>"><img src="<?= DIR_ASSETS; ?>/img/logo.svg" width="164" src="" alt=""></a>
    </div>
    
    <?php if ($_SESSION['auth']): ?>
    <div>
        <ul class="menu">
            <li><a href='#' class='menuLI <?= ($title == 'web') ? 'menuLI-isactive' : '' ?>'>Web</a></li>
            <li><a href='#' class='menuLI <?= ($title == 'grandeecole') ? 'menuLI-isactive' : '' ?>'>Grande Ecole</a></li>
            <li><a href='#' class='menuLI <?= ($title == 'marketing') ? 'menuLI-isactive' : '' ?>'>Marketing</a></li>
            <li><a href='#' class='menuLI <?= ($title == 'master') ? 'menuLI-isactive' : '' ?>'>Master</a></li>
            <li><a href='#' class='menuLI <?= ($title == 'master') ? 'menuLI-isactive' : '' ?>'>Bachelor 3D</a></li>
        </ul>
    </div>
    
    <div class="account">
    <img src="<?= DIR_ASSETS; ?>/img/avatar.png" width="32" alt="">
    <a href="#"><?= $_SESSION['username']; ?></a> <a href="logout.php?csrf=<?= $_SESSION['csrf']; ?>" style="font-size:13px;margin-top:5px;">Déconnexion</a>
    </div>
    <?php endif; ?>
</header>

   <?php if ($_SESSION['auth']): ?>
    <div class="classes">
      <ul>
          <li class="active"><a href="#">P2020</a></li>
          <li><a href="#">P2019</a></li>
          <li><a href="#">P2018</a></li>
      </ul>
    </div>
    <?php endif; ?>