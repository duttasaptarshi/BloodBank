 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <header class="mb-4 relative">
        <img
            src="/images/poster.jpg"
            alt="bg-poster"
            class="rounded-lg"
        >

        <div class="flex px-2 py-2 justify-between ">
            <div>
                <h2 class="uppercase font-bold"><?php echo e($user->name); ?></h2>
                <p>Joined <?php echo e($user->created_at->diffForHumans()); ?></p>
                <p class="text-green-600">Units Donated : <?php echo e($user->donated_bags); ?> </p>
            </div>
            <div class="py-5">
                <a href="<?php echo e(route('logout')); ?>" 
                class="font-bold text-white rounded-full bg-blue-500 text-xs shadow uppercase py-2 px-4"
                >Logout !
            </a>
            </div>
        </div>
        <img 
            src="<?php echo e($user->avatar); ?>" 
            alt="avatar"
            class="rounded-full mr-2 absolute"
            style="width: 75px; left: calc(50% - 37px); top: 73%" 
            >

    </header>

    <?php echo $__env->make('_profiletimeline',[
            'blogs' => $user->blogs

        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/profiles/show.blade.php ENDPATH**/ ?>