<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-4 py-4">
            <header class="lg:flex container mx-auto">
                    <img
                        src="/images/logo.svg"
                        class="object-sale-down h-16"
                        alt="logo"
                    >
                    <div class="px-1 py-4 font-bold text-green-500 text-xl">
                        BloodBank
                    </div>
            </header>
        </section>
       
        <?php echo e($slot); ?>

    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/components/master.blade.php ENDPATH**/ ?>