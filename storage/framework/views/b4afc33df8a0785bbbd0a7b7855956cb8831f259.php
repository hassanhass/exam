<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name')); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(url(asset('favicon.ico'))); ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(url(mix('css/app.css'))); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>


    <!-- Scripts -->
    <script src="<?php echo e(url(mix('js/app.js'))); ?>" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/263d9819e3.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<?php /**PATH F:\Github\exam\resources\views/includes/head.blade.php ENDPATH**/ ?>