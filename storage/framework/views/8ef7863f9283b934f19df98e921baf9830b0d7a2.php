 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<div id="wrapper" >
	<div id="page" class="lg:container bg-blue-100 rounded-lg shadow border px-2 py-2 mb-2">
        
        <form method="POST" action="/requests">
            <?php echo csrf_field(); ?>
            <div class="text-center font-bold text-teal-700 text-4xl mb-2">
                Request Blood
            </div>
            <div class="field ">
                <label class="label" for="patients_name">Patients Name</label>   

                <div class="control">
                    <input class="<?php $__errorArgs = ['patients_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> w-1/2 rounded shadow" type="text" name="patients_name" id="Patients_name">
                </div>
                <?php $__errorArgs = ['patients_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help text-red-500 is-danger"><?php echo e($errors->first('patients_name')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field py-2">
                <label class="label" for="contact_no">Contact No.</label>   
                <div class="control">
                    <input class="textarea <?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> label w-auto rounded shadow" name="contact_no" id="contact_no" type="text" placeholder="Enter 10 digit no."></textarea>
                </div>
                <?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help text-red-500 is-danger"><?php echo e($errors->first('contact_no')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field py-2">
                <label class="label" for="blood_group">Blood Group</label>   

                <div class="control">
                    <input class="<?php $__errorArgs = ['blood_group'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> w-24 rounded shadow" type="text" name="blood_group" id="Blood_group">
                </div>
                <?php $__errorArgs = ['blood_group'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help text-red-500 is-danger"><?php echo e($errors->first('blood_group')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field">
                <label class="label" for="required_date">Required Date</label>   

                <div class="control">
                    <input class="<?php $__errorArgs = ['required_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> w-24 rounded shadow" name="required_date" id="required_date" type="text">
                </div>
                    <?php $__errorArgs = ['required_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="help text-red-500 is-danger"><?php echo e($errors->first('required_date')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field py-2">
                <label class="label" for="doctors_name">Doctors Name</label>   

                <div class="control">
                    <input class="<?php $__errorArgs = ['doctors_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> w-1/2 rounded shadow" name="doctors_name" id="doctors_name" type="text">
                </div>
                    <?php $__errorArgs = ['doctors_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="help text-red-500 is-danger"><?php echo e($errors->first('doctors_name')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field">
                <label class="label" for="hospital_details">Hospital Details</label>   

                <div class="control">
                    <textarea class="<?php $__errorArgs = ['hospital_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> label textarea w-full rounded shadow" name="hospital_details" id="hospital_details" type="text"></textarea>
                </div>
                    <?php $__errorArgs = ['hospital_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="help text-red-500 is-danger"><?php echo e($errors->first('hospital_details')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="field py-2">
                <label class="label" for="comments">Comments</label>   

                <div class="control">
                    <textarea class="label textarea w-full rounded shadow" name="comments" id="comments" placeholder="Please,enter any additional details your want to mention ?"></textarea>
                </div>
            </div>
            
            <div class="field is-grouped mb-4">
                <div label class="controll">   
                    <button class="button is-link rounded-lg bg-blue-500 font-bold text-white px-2 py-2 shadow" type="submit">SUBMIT</button>
                </div>
            </div>
        </form>  
    </div>
</div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\xampp\htdocs\BloodBank\resources\views/requests.blade.php ENDPATH**/ ?>