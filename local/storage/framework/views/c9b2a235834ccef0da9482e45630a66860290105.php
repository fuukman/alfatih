    
    <?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
    <div class="col-md-12">
                <div class="text-center">
                <h4>Silakan transfer sesuai invoice</h4>
                    <img src="<?php echo e(asset('images/logo.png')); ?>" class="fa fa-search-plus pull-left icon" width="130" height="130"></img>
                    <h2> Invoice :  <?php echo e(base64_decode($notrans->formid)); ?></h2><br>
                    <h3> Tanggal :  <?php echo e($notrans->created_at->format('d-m-Y')); ?></h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 ">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Alamat Pengiriman</div>
                            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                                    <thead>
                                      <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Propinsi</th>
                                        <th>Kodepos</th>
                                        <th>No Telp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($customer->name); ?></td>
                                        <td><?php echo e($customer->address); ?></td>
                                        <td><?php echo e($customer->province); ?></td>
                                        <td><?php echo e($customer->postal_code); ?></td>
                                        <td><?php echo e($customer->phone); ?></td>
                                    </tr>     
                                </tbody>
                            </table>               
                          <div class="alert alert-info">
                              <strong>Bukti Pembayaran</strong> 
                              <?php if($notrans->bukti != "Belum Kirim bukti"): ?>
                              <p><img src="<?php echo e(asset($notrans->bukti)); ?>" width="400" height="300"></p>
                              <?php else: ?>
                              <h3><?php echo e($notrans->bukti); ?></h3>
                              <?php endif; ?>
                          </div>
                          <hr>
                        </div>
                          <div class="row">
                          <center>   
                          <div class="alert alert-info">
                              <strong>Info!</strong> Setelah Tranfer Hubungi kami Lewat SMS / WhatsApp / Telp
                          </div>
                          <div class="col-xs-12 col-sm-6">
                              <h3>Transfer</h3>
                              <img src="<?php echo e(asset('images/mandiri.png')); ?>" width="220" height="100">
                              <h4>Nama : Arih</h4>
                              <h4>NoRek : 1370011309651 </h4>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                              <h3>Kontak</h3>
                              <img src="<?php echo e(asset('images/kontak.png')); ?>" width="300" height="100">
                              <h4>085742155733</h4>
                              <h4>(Arih)</h4>
                          </div>
                  </center>

              </div>  
          </div>
      </div>
  </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center"><strong>Order summary</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Item Price</strong></td>
                                <td class="text-center"><strong>Item Quantity</strong></td>
                                <td class="text-center"><strong>Item ukuran</strong></td>
                                <td class="text-center"><strong>Total Price</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($transaction as $list): ?>
                            <tr>
                                <td><?php echo e($list->product->name); ?></td>
                                <td class="text-center"><?php echo e("Rp ".number_format($list->product->price,2, ',', '.')); ?></td>
                                <td class="text-center"><?php echo e($list->qty); ?></td>
                                <td class="text-center"><?php echo e($list->size); ?></td>
                                <td class="text-center"><?php echo e("Rp ".number_format($list->total_price,2, ',', '.')); ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <?php if(\Entrust::hasRole('member')): ?>
                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                <?php else: ?>
                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                <?php endif; ?>

                                <td class="highrow text-center"><?php echo e($notrans->subtotal); ?> + Ongkir Rp <?php echo e($notrans->ongkir); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="<?php echo url('/'); ?>" class="btn btn-primary">Selesai</a>
        <a href="<?php echo url('/pdf/' .$notrans->formid ); ?>" class="btn btn-primary">Download PDF</a></p>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>