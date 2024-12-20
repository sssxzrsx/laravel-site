<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Регистрация</h1>
    <form action="<?php echo e(route('store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="name">
            <label for="name">Имя: </label>
            <input type="text" name="name" id="name" placeholder="ИМЯ" value="<?php echo e(old('name')); ?>" required>  
        </div>
        <div class="email">
            <label for="email">Почта: </label>
            <input type="text" name="email" id="email" placeholder="ПОЧТА" value="<?php echo e(old('email')); ?>" required> 
        </div>
        <div class="password">
            <label for="password">Пароль: </label>
            <input type="password" name="password" id="password" placeholder="ПАРОЛЬ" value="<?php echo e(old('password')); ?>" required"> 
        </div>
        <a href="<?php echo e(route('login')); ?>"></a>
        <button type="submit">Регистрация</button>
    </form>
<?php echo $__env->yieldSection(); ?>
<?php /**PATH D:\OSPanel\domains\laravel-site\resources\views/auth/register.blade.php ENDPATH**/ ?>