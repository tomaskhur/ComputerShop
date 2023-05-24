<?php
    require 'data.php';
    $product = $products[$_GET['productid']];
    $productid = $_GET['productid'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="product-style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>ComputerShop - <?= $product['title'] ?></title>
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
        <?php
        foreach($categories as $key => $category ): ?>
            <?php
            if (in_array($key, $product['categories'])): ?>
                <li class="breadcrumb-item"><a href="category.php?id=<?= $key ?>"> <?= $category['title']?></a></li>
            <?php endif; ?>
            <?php if (!empty($category['categories'])): ?>
                <?php foreach($category['categories'] as $key => $subcategory): ?>
                    <?php if (in_array($key, $product['categories'])): ?>
                        <li class="breadcrumb-item" aria-current="page"><a href="category.php?id=<?= $key ?>"><?= $subcategory['title']?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <li class="breadcrumb-item" aria-current="page"><?= $product['title'] ?></li>
    </ol>
</nav>

<main>
    <?php
        $productCount = count($product["images"]);
    ?>

    <div class="product-detail-container">
        <div class="product-detail-grid">
            <div class="slideshow">
                <div id="carouselExampleDark" class="carouselmain carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php for ($i = 0; $i < $productCount; $i++):?>
                            <?php if ($i == 0): ?>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <?php else: ?>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>" aria-label="<?= $i + 1?>"></button>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < $productCount; $i++):?>
                            <?php if ($i == 0): ?>
                                <div class="carousel-item active">
                                    <img src="img/products/<?= $productid ?>/<?= $i + 1 ?>.jpg" class="d-block w-100" alt="">
                                </div>
                            <?php else: ?>
                                <div class="carousel-item">
                                    <img src="img/products/<?= $productid ?>/<?= $i + 1 ?>.jpg" class="d-block w-100" alt="">
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="product-detail-description">
                <div class="product-detail-description-title">
                        <h2><?=$product['title']?></h2>
                </div>
                <div class="product-detail-description-description">
                    <p><?= $product['description']?></p>
                </div>
                <div class="manufacturer-logo">
                    <img src="img/logos/<?= $product['manufacturer'] ?>.png" alt="<?= $product['manufacturer']?>">
                </div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom-margin">
                        <p>Kategorie:</p>
                        <?php
                        foreach($categories as $key => $category ): ?>
                            <?php
                            if (in_array($key, $product['categories'])): ?>
                                <li class="breadcrumb-item"><a href="category.php?id=<?= $key ?>"> <?= $category['title']?></a></li>
                            <?php endif; ?>
                            <?php if (!empty($category['categories'])): ?>
                                <?php foreach($category['categories'] as $key => $subcategory): ?>
                                    <?php if (in_array($key, $product['categories'])): ?>
                                        <li class="breadcrumb-item" aria-current="page"><a href="category.php?id=<?= $key ?>"><?= $subcategory['title']?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                </nav>
                <div class="product-detail-description-price_vat">
                    <h3><span class="price-label">Cena s DPH:</span> <?= number_format($product['price_vat'], 0, '.', ' ') ?> Kč</h3>
                </div>
                <div class="product-detail-description-price">
                    <h5>Cena bez DPH: <?= number_format($product['price'], 0, '.', ' ') ?> Kč</h5>
                </div>
                <div class="product-detail-description-buy_button">
                    <button class="buy-button" role="button"><i class="fa-solid fa-basket-shopping"></i>  Zakoupit</button>
                </div>
                <div class="product-detail-description-parameters">
                    <h3>Popis parametrů</h3>
                    <table>
                        <?php
                        foreach ($product['parameters'] as $key => $parameter): ?>
                            <tr>
                                <th><?= $key ?></th>
                                <td><?= $parameter ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
        <div class="related-title"></div>
                <div class="container">
                    <div class="page-title">
                        Podobné produkty
                    </div>
                    <div class="grid">
                        <?php
                        if (!empty ($product['related'])): ?>
                            <?php
                                foreach ($product['related'] as $key => $relatedproduct): ?>
                                    <div class="card">
                                        <h2 class="card-title"><?= $products[$relatedproduct]['title'] ?></h2>
                                        <div class="card-img">
                                            <img src="img/products/<?= $relatedproduct ?>/1.jpg" alt="eletronics">
                                        </div>
                                        <div class="card-body">
                                            <p><?=substr($products[$relatedproduct]['description'],0, 112)?>...</p>
                                            <p class="price-tag"><?= number_format($products[$relatedproduct]['price_vat'], 0, '.', ' ') ?> Kč</p>
                                            <a href="product-detail.php?productid=<?= $relatedproduct ?>" class="read-more"><i class="fa fa-eye"></i> Zobrazit více</a>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <?php endif; ?>
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