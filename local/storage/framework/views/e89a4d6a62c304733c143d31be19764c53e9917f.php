<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rincian Pemesanan</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
 
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
 
    tr:nth-child(even) {
      background-color: #dddddd;
    }
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
 
</head>
<body id="app-layout">
  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <img src="<?php echo e(asset('images/logo.png')); ?>" class="fa fa-search-plus pull-left icon" width="100" height="100"></img>
            <h2> Invoice :  <?php echo e(base64_decode($notrans->formid)); ?></h2><br>
            <h3> Tanggal :  <?php echo e($notrans->created_at->format('d-m-Y')); ?></h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 ">
              <div class="panel panel-default height">
                <h2>Alamat Pengiriman</h2>
                <table>
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
                <br>     
                <hr>
                <div class="alert alert-info">
                    <strong>Bukti Pembayaran</strong> 
                    <?php if($notrans->bukti != "Belum Kirim bukti"): ?>
                    <p><img src="<?php echo e(asset($notrans->bukti)); ?>" width="400" height="300"></p>
                    <?php else: ?>
                    <h3><?php echo e($notrans->bukti); ?></h3>
                    <?php endif; ?>
                </div>
                <div class="row">
                  <center>  
                    <div class="alert alert-info">
                    <br>
                       <strong>Info!</strong> Setelah Tranfer Hubungi kami Lewat SMS / WhatsApp / Telp
                    </div>
 
                    <div class="row">
                      <center>
                        <table>
                          <tr>
                            <th style="text-align: center;">
                              <div class="col-xs-12 col-sm-6">
                                <h3>Transfer</h3>
                                <img src="<?php echo e(asset('images/mandiri.png')); ?>" width="220" height="100">
                                <h4>Nama : Agus Rianto</h4>
                                <h4>NoRek : 1370011309651 </h4>
                              </div>
                            </div>
                          </th>
                            <th style="text-align: center;">
                          <div class="col-xs-12 col-sm-6">
                              <h3>Kontak</h3>
                              <img src="<?php echo e(asset('images/kontak.png')); ?>" width="300" height="100">
                              <h4>089636607271</h4>
                              <h4>(luqman)</h4>
                          </div>
                        </th>
                      </tr>
                    </table>
 
                  </center>
 
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="text-center"><strong>Order summary</strong></h3>
            </div>
 
            <table>
              <thead>
                <tr>
                  <td>Item Name</td>
                  <td>Item Price</td>
                  <td>Item Quantity</td>
                  <td>Item ukuran</td>
                  <td>Total Price</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach($transaction as $list): ?>
                <tr>
                  <td><?php echo e($list->product->name); ?></td>
                  <td><?php echo e("Rp ".number_format($list->product->price,2, ',', '.')); ?></td>
                  <td><?php echo e($list->qty); ?></td>
                  <td><?php echo e($list->size); ?></td>
                  <td><?php echo e("Rp ".number_format($list->total_price,2, ',', '.')); ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                  <td></td>
                  <td ></td>
                  <?php if(\Entrust::hasRole('member')): ?>
                  <td><strong>Subtotal</strong></td>
                  <?php else: ?>
                  <td><strong>Subtotal</strong></td>
                  <?php endif; ?>
 
                  <td><?php echo e($notrans->subtotal); ?> + Ongkir Rp <?php echo e($notrans->ongkir); ?></td>
                </tr>
              </tbody>
            </table>
           
          </div>
 
        </center>
 
 
 
      </body>
 
      </html>