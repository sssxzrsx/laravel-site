
<?php $__env->startSection('content'); ?>

    <h1>Регистрация</h1>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="email">
            <label for="email">Почта: </label>
            <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" required> 
        </div>
        <div class="password">
            <label for="password">Пароль: </label>
            <input type="password" name="password" id="password"value="<?php echo e(old('password')); ?>" required"> 
        </div>
        <button type="submit">Вход</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\laravel-site\resources\views/auth/login.blade.php ENDPATH**/ ?>