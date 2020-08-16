<div class="flex p-4 border-b border-b-gray-500">
    <div class="mr-2 flex-shrink-0">
        <a href="<?php echo e(route('profile', $blog->user->name)); ?>">
            <img 
                src="<?php echo e($blog->user->avatar); ?>"
                alt="avatar" 
                class="rounded-full mr-2"  
            >
        </a>
    </div>

    <div>
        <a href="<?php echo e(route('profile', $blog->user->name)); ?>">
            <h5 class="font-bold">
                <?php echo e($blog->user->name); ?></h5>
            <h6 class='text-xs text-indigo-800 mb-2'>
                Posted <?php echo e($blog->created_at->diffForHumans()); ?>

            </h6>
        </a>

        <p class="text-sm">
            <?php echo e($blog->body); ?>

        </p>

    </div>
</div><?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/_postblog.blade.php ENDPATH**/ ?>