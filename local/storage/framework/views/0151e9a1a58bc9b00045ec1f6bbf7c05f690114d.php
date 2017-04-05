<?php $__env->startSection('content'); ?>

<div class="container">
  <h2>Histori Pembelian</h2>
  <hr></br>
  <?php if($history = $history): ?>
  <div class="table-responsive">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Nama Product</th>
          <th>Formid</th>
          <th>Sku</th>
          <th>Qty</th>
          <th>Size</th>
          <th>subtotal</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($history as $his): ?>
        <tr>  
          <td><?php echo e($his->produkNama); ?></td>
          <td><a href="<?php echo url('invoice/' .$his->formid); ?>"><?php echo e($his->formid); ?></a></td>
          <td><?php echo e($his->sku); ?></td>
          <td><?php echo e($his->qty); ?></td>
          <td><?php echo e($his->size); ?></td>
          <td><?php echo e($his->subtotal); ?></td>
          <td><?php echo e($his->status); ?></td>
        </tr>
        <?php endforeach; ?>         
      </tbody>
    </table>
    <?php else: ?>
    <center>
      <div class="alert alert-info">
        <strong>Info!</strong> Belum ada daftar transaksi Pembelian
      </div>
    </center>
    <?php endif; ?>
  </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>