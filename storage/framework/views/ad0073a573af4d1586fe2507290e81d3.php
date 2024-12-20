<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(route('index')); ?>">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('ads')); ?>">Опубликовать объявление</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('register')); ?>">Аутентификация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Корзина</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<?php echo $__env->yieldSection(); ?>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\laravel-site\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>