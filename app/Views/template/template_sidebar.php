<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poliku</title>
    <link href="style/main.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?= base_url() ?>script/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<?= $this->renderSection('page-content'); ?>

<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="script/navbar-scroll.js"></script>
<script src="https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="pt-4 pb-2">2020 Copyright Store. All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
    
