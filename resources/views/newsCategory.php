<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light d-flex flex-column h-100">
  <?php require('header.php') ?>

  <main class="flex-shrink">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($newsList as $news) : ?>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <a href="news/<?= $categoryId ?>/<?= $news['id'] ?>">
                  <h5 class="card-title"><?= $news['title'] ?></h5>
                </a>
                <p class="card-text">
                  <?= $news['text'] ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>

  <?php require('footer.php') ?>
</body>

</html>
