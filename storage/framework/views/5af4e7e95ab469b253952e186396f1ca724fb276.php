<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="bg-gray-300">
    <div class="container  mx-auto mt-4">
    
    </div>
    <div class="container mx-auto mt-4">
        <?php echo $__env->yieldContent('content'); ?>
        <?php if(isset($slot)): ?>
        <?php echo e($slot); ?>

        <?php endif; ?>
    </div>
    
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>
<?php /**PATH F:\Github\exam\resources\views/layouts/app.blade.php ENDPATH**/ ?>