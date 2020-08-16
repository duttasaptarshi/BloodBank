 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <header class="px-40 lg:flex mb-4 items:center">
        <div>
            <img 
            src="/images/logo.svg"
            class="align-content:center object-sale-down h-24" 
            alt="logo"
            >
        </div>

        <div class="font-bold text-4xl px-2 py-6 text-green-500">
            BloodBank
        </div>
    </header>

    <h1 
        class="lg:flex mx-auto justify-between font-bold bg-blue-200 rounded" style="padding-left:5%;" >
        <div>
            DATE :-
        </div>
        <div>
            A+
        </div>
        <div>
            A-
        </div>
        <div>
            B+
        </div>
        <div>
            B-
        </div>
        <div style="padding-left:1%;">
            O+
        </div>
        <div>
            O-
        </div>
        <div>
            AB+
        </div>
        <div>
            AB-
        </div> 
    </h1>
    

    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="lg:flex px-2 justify-between container mx-auto shadow rounded">
            <div>
                <?php echo e($stock->date); ?>

            </div>
            <div>
                <?php echo e($stock->A_pos); ?>

            </div>
            <div> 
                <?php echo e($stock->A_neg); ?>

            </div>
            <div>
                <?php echo e($stock->B_pos); ?>

            </div>
            <div>
                <?php echo e($stock->B_neg); ?>

            </div>
            <div>
                <?php echo e($stock->O_pos); ?>

            </div>
            <div>
                <?php echo e($stock->O_neg); ?>

            </div>
            <div>
                <?php echo e($stock->AB_pos); ?>

            </div>
            <div>
                <?php echo e($stock->AB_neg); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/stocks.blade.php ENDPATH**/ ?>