 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => []]); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="px-4">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <?php if(auth()->check()): ?>
                    <div class="lg:w-1/6 mb-2">
                        <?php echo $__env->make('_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>

                <?php if(auth()->check()): ?>
                    <div class="lg:flex-1 lg:mx-10 mb-2">
                        <?php echo e($slot); ?>

                    </div>
                <?php endif; ?>

                <?php if(auth()->check()): ?>
                    <div class="lg:w-1/5 mb-2">
                        <?php echo $__env->make('_notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </main>
    </section>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/components/app.blade.php ENDPATH**/ ?>