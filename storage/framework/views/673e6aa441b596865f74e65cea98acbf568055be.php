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
       
        <section class="px-4">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <?php if(auth()->check()): ?>
                    <div class="lg:w-1/6">
                        <?php echo $__env->make('_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(auth()->check()): ?>
                    <div class="lg:flex-1 lg:mx-10 mb-2">
                       <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(auth()->check()): ?>
                    <div class="lg:w-1/5">
                        <?php echo $__env->make('_notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </main>
        </section>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/layouts/app.blade.php ENDPATH**/ ?>