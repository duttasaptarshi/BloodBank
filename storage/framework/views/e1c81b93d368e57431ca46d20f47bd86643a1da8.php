<div class="border border-gray-500 rounded-lg">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <?php echo $__env->make('_postblog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div><?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/_profiletimeline.blade.php ENDPATH**/ ?>