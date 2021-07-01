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
      <div class="card-group">
        <?php foreach ($categories as $category) : ?>
          <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
              <a href="news/<?= $category['id'] ?>">
                <h5 class="card-title"><?= $category['title'] ?></h5>
              </a>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>

  <?php require('footer.php') ?>
</body>

</html>
