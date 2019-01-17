<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?> form-inline">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div id="<?php echo e($id, false); ?>" <?php echo $attributes; ?>>
            <select class="form-control" name="<?php echo e($name['province'], false); ?>"></select>
            <select class="form-control" name="<?php echo e($name['city'], false); ?>"></select>
            <select class="form-control" name="<?php echo e($name['district'], false); ?>"></select>
        </div>
        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>