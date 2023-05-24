<?php
    require 'data.php';
    $categoryid = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="product-style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>ComputerShop - <?= ucwords($categoryid) ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark nav-padding pt-3 pb-3 navbar-background-color">
    <div class="container-fluid">
        <a class="navbar-brand navbarstyle ms-5 fs-3" href="index.php">ComputerShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                foreach ($categories as $key => $category): ?>
                    <?php
                    if (empty ($category['categories'])): ?>
                        <li class="nav-item">
                            <a class="nav-link mt-2 ms-5 pt-1 fs-6" href="category.php?id=<?= $key ?>" role="button" aria-expanded="false">
                                <?= $category['title'] ?>
                            </a>
                        </li>
                        <?php break; ?>
                    <?php endif; ?>
                    <li class="nav-item dropdown ms-5 pt-1 fs-6">
                        <a class="nav-link dropdown-toggle" href="category.php?id=<?= $key ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $category['title'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <?php foreach ($category['categories'] as $key => $subcategory): ?>
                                <li><a class="dropdown-item" href="category.php?id=<?= $key ?>"><?= $subcategory['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb custom-margin">
        <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="breadcrumb-item"><?= ucfirst($categoryid) ?></li>
    </ol>
</nav>
<main>


    <h1 class="category-title"><?= strtoupper($categoryid) ?></h1>

    <div class="category-grid">
            <?php
                foreach ($products as $key => $product): ?>
            <?php
                foreach ($product['categories'] as $subkey => $subcategory): ?>
                    <?php
                     if ($categoryid === $subcategory): ?>
                        <div class="card">
                            <h2 class="card-title"><?= $product['title'] ?></h2>
                            <div class="card-img">
                                <img src="img/products/<?= $key ?>/1.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <p><?= substr($product['description'],0, 112)?>...</p>
                                <p class="price-tag-discount"><?= number_format($product['price_vat'], 0, '.', ' ') ?> Kč</p>
                                <p class="price-tag"><?= number_format($product['price'], 0, '.', ' ') ?> Kč</p>
                                <a href="product-detail.php?productid=<?= $key ?>" class="read-more"><i class="fa fa-eye"></i> Zobrazit více</a>
                            </div>
                        </div>

                <?php endif;?>
            <?php endforeach;?>
      <?php endforeach;?>
    </div>
</main>
<footer>
    © 2022 Computer Shop
</footer>
<script src="https://kit.fontawesome.com/a10f07ebc3.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
