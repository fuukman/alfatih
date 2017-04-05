<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
    <?php foreach($cekongkir as $cek): ?>
    <?php if(count($cek['costs']) > 0): ?>
    <?php foreach($cek['costs'] as $cost): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php echo e($cek['name'].' - '.$cost['service'].' / '.$cost['description']); ?>

            <div class="radio">
                <label>
                    <input type="radio" name="tarif"  class="tarif" value="<?php echo e($cek['code'].'-'.$cost['service'].'-'.$cost['cost'][0]['value']); ?>">
                    <?php echo e($cost['cost'][0]['value']); ?>

                    <?php echo e($cost['etd'][0]['value']); ?>

                </label>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <div class="panel panel-default">
        <div class="panel-body">
            Tarif Pengiriman Tidak diketemukan.
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>