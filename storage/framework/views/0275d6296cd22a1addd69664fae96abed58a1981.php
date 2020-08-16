 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="px-40 lg:flex mb-4">
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

    </div>

    <div class="py-4 px-4 bg-blue-100 rounded-lg shadow border">
        <p class="text-5xl font-bold text-teal-700 text-center mb-4">
            CONTACT US
        </p>
        <div class="">
            <p class="py-3"> Medical Queries : If you have any query regarding eligibilty and wheather you can donate. call us on 555-555-555 .</p >
            <p> Enquiry : wheather you have a question or comment that is not related to any medical quesry please contatc us at +910123456789 .</p>
            <p class="py-3"> Send us your story : Have an amazing story about donation or receiving blood ? Tell us about this, email us - bloodbank@example.com .</p>
            <p> Compliments or Complaints : Do you want to give a compliments about our service ? Or you are unhappy with our service please let us know and we will correct our issue - bloodbank@gmail.com .</p>
        </div>
        <img src="/images/pos4.jpg" alt="" class="rounded-lg">
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/contactus.blade.php ENDPATH**/ ?>