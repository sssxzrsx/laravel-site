<h1>Добро пожаловать</h1>

    <?php if(session('success')): ?>
        <div>
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <h2>Категории</h2>
    <ul>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('category.ads', $category->id)); ?>"><?php echo e($category->name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <ul>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <h3><?php echo e($ad->title); ?></h3>
                <p><?php echo e($ad->description); ?></p>
                <p><strong>Category:</strong></p>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul><?php /**PATH D:\OSPanel\domains\laravel-site\resources\views/home.blade.php ENDPATH**/ ?>