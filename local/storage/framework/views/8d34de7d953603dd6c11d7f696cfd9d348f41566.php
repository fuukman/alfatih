<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rincian Pemesanan</title>

</head>
<body id="app-layout">
<center>
  <div class="container">
        <div class="row">
    <div class="col-md-12">
                <div class="text-center">
                    <i class="fa fa-search-plus pull-left icon"></i>
                    <h2> Invoice :  <?php echo e($notrans->formid); ?></h2><br>
                    <h3> Tanggal :  <?php echo e($notrans->created_at); ?></h3>
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
                            <hr>
                            <div class="row">
                                <center>
                                    <div class="col-xs-12 col-sm-6">
                                        <img src="<?php echo e(asset('images/bni.jpg')); ?>" width="140" height="60">
                                        <p>Nama : Luqmanul Hakim</p>
                                        <p>NoRek : 454226715 </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                      <img src="<?php echo e(asset('images/mandiri.jpg')); ?>" width="140" height="60">
                                      <p>Nama : Agus Rianto</p>
                                      <p>NoRek : 1370011309651 </p>
                                  </div>
                              </center>
                          </div>
                          <hr>
                        </div>
                          <div class="row">
                          <center>   
                              <div class="alert alert-info">
                              <strong>Info!</strong> Setelah Tranfer Hubungi kami Lewat Line / WhatsApp atau bisa COD untuk Pembayaran / Pengambilan Barang
                          </div>
                            <div class="col-xs-12 col-sm-6">
                             <h3>Line</h3>
                             <img src="http://qr-official.line.me/L/lj4SADTeVG.png" width="160" height="160">
                             <p><a href="https://line.me/R/ti/p/%40qdo7059y"><img src="<?php echo e(asset('images/addfriends_en.png')); ?>"></a></p>
                         </div>
                         <div class="col-xs-12 col-sm-6">
                          <h3>WhatsApp / SMS /Tlp </h3>
                          <img src="<?php echo e(asset('images/WA.png')); ?>" width="160" height="160">
                          <h4>089636607271</h4>(luqman)
                          <h4>085728220567</h4>(agus)
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

                                <td class="highrow text-center"><?php echo e($notrans->subtotal); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <hr>
            <h2><a href="http://belisob.com">BeliSob</a></h2>

</center>
<style>
    .height {
        min-height: 200px;
    }

    .icon {
        font-size: 47px;
        color: #5CB85C;
    }

    .iconbig {
        font-size: 77px;
        color: #5CB85C;
    }

    .table > tbody > tr > .emptyrow {
        border-top: none;
    }

    .table > thead > tr > .emptyrow {
        border-bottom: none;
    }

    .table > tbody > tr > .highrow {
        border-top: 3px solid;
    }
</style>


</body>

</html>