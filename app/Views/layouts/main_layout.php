<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME . " " . APP_VERSION ?></title>

    <!--css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    
<h3>ANTES</h3>

<?= $this->renderSection('content') ?>

<h3>DEPOIS</h3>

 <!--scripts js -->
 <script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

</body>
</html>