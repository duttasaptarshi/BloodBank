<div class="border border-blue-400 rounded-lg px-8 py-4 mb-6">
    <form method="POST" action="/blogs">
        <?php echo csrf_field(); ?>
        <textarea 
            name="body" 
            class="w-full" 
            placeholder="post ?"
        ></textarea>
        <hr class="mb-4">
        <footer class="flex justify-between">
            <img
                src="<?php echo e(auth()->user()->avatar); ?>"
                alt="avatar"
                class="rounded-full mr-2"
            >
            <button type="submit" class="font-bold bg-blue-500 rounded-lg text-white shadow py-2 px-2"> POST </button>
        </footer>
    </form>
    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-sm mt-2"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/_blogs.blade.php ENDPATH**/ ?>