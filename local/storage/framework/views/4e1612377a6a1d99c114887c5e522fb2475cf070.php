<?php $__env->startSection('content'); ?>
<!-- app/views/productcart.blade.php -->

	<div class="container">
		<h4><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h4>
		<!-- Panel -->
		<div class="panel">
		 <ul class="nav nav-tabs">
		 			<li class="active"><a data-toggle="tab" href="#menu1">Kirim-Kirim</a></li>
	   			 	<li><a data-toggle="tab" href="#home">COD</a></li>
	    			
	  			</ul>
				
			<div class="panel-heading"></div>
				
<div class="tab-content">
    <div id="home" class="tab-pane fade">
     <table class="table table-striped m-b-none text-sm">
				<thead>
					<tr>
						<th width="8">No</th>
						<th width="300">Nama Product</th>                    
						<th width="150">Harga</th>
						<th width="10">Jumlah</th>
						<th width="100">Ukuran</th>
						<th width="100">berat</th>
						<th width="200">Total</th>
						<th width="75">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					<?php foreach($cart_content as $cart): ?>
						<tr>
							<td><?php echo e($i); ?></td>
							<td><?php echo e($cart->name); ?></td>
							<td><?php echo e("Rp ".number_format($cart->price,2, ',', '.')); ?></td>
							<td><?php echo e($cart->qty); ?></td>
							<td><?php echo e($cart->berat); ?></td>
							<td><?php echo e($cart->size); ?> gram</td>
							
							<td><?php echo e("Rp ".number_format($cart->price * $cart->qty,2, ',', '.')); ?></td>
							<td>
								<a href="<?php echo e(url('cart/delete/'.$cart->rowId)); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>	
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
					<tr>
						<td class="highrow"></td>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong>Subtotal <!-- (discount 5%) --></strong></td>
						<?php else: ?>
							<td><strong>Subtotal</strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?> + Ongkir (Rp <?php echo e($pilih); ?>) </strong></td>
						<?php else: ?>
							<!-- <td><strong><?php echo e("Rp ".Cart::total(2, ',', '.')); ?></strong></td> -->
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?></strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
					</tr>
				</tbody>
			</table>

			<div class="panel-footer">
				<a href="<?php echo e(url('/')); ?>" class="btn btn-white" type="submit">Lanjut Belanja</a>
				<?php if(Cart::count() != 0): ?>
							  <form class="form-horizontal" action="<?php echo e(route('simpanOngkir')); ?>" method="POST">
 							 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
 							 <input type="hidden" name="ongkir" value="<?php echo e($pilih); ?>">
					<!-- <a href="<?php echo e(url('cart/checkout')); ?>" class="btn btn-info">Bayar</a> -->
							<button type="submit" class="btn btn-info">Bayar</button>
						  </form>
				<?php endif; ?>
			</div>

    </div>
    <div id="menu1" class="tab-pane fade in active">
    <table class="table table-striped m-b-none text-sm">
				<thead>
					<tr>
						<th width="8">No</th>
						<th width="300">Nama Product</th>                    
						<th width="150">Harga</th>
						<th width="10">Jumlah</th>
						<th width="100">Ukuran</th>
						<th width="100">berat</th>
						<th width="200">Total</th>
						<th width="75">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					<?php foreach($cart_content as $cart): ?>
						<tr>
							<td><?php echo e($i); ?></td>
							<td><?php echo e($cart->name); ?></td>
							<td><?php echo e("Rp ".number_format($cart->price,2, ',', '.')); ?></td>
							<td><?php echo e($cart->qty); ?></td>
							<td><?php echo e($cart->berat); ?></td>
							<td><?php echo e($cart->size); ?> gram</td>
							
							<td><?php echo e("Rp ".number_format($cart->price * $cart->qty,2, ',', '.')); ?></td>
							<td>
								<a href="<?php echo e(url('cart/delete/'.$cart->rowId)); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>	
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
					<tr>
						<td class="highrow"></td>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong>Subtotal <!-- (discount 5%) --></strong></td>
						<?php else: ?>
							<td><strong>Subtotal</strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
						<?php if(\Entrust::hasRole('member')): ?>
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?> + Ongkir (Rp <?php echo e($pilih); ?>) </strong></td>
						<?php else: ?>
							<!-- <td><strong><?php echo e("Rp ".Cart::total(2, ',', '.')); ?></strong></td> -->
							<td><strong><?php echo e("Rp ".Cart::subtotal(2, ',', '.')); ?></strong></td>
						<?php endif; ?>
						<td class="highrow"></td>
					</tr>
				</tbody>
			</table>

			<div class="panel-footer">
				<a href="<?php echo e(url('/')); ?>" class="btn btn-white" type="submit">Lanjut Belanja</a>
				<?php if(Cart::count() != 0): ?>
							  <form class="form-horizontal" action="<?php echo e(route('simpanOngkir')); ?>" method="POST">
 							 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
 							 <input type="hidden" name="ongkir" value="<?php echo e($pilih); ?>">
					<!-- <a href="<?php echo e(url('cart/checkout')); ?>" class="btn btn-info">Bayar</a> -->
							<button type="submit" class="btn btn-info">Bayar</button>
						  </form>
				<?php endif; ?>
			</div>

     <h2>Cek Ongkir</h2>

  <form class="form-horizontal" action="<?php echo e(route('cekOngkir')); ?>" method="POST">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kota Asal</label>
      <div class="col-sm-10">
        <input type="text" autocomplete="off" class="form-control" value="Yogyakarta" readonly="readonly" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Kota Tujuan</label>
      <div class="col-sm-10">
		<input type="text" placeholder="ex : Bandung" name="kota" required="" id="autocomplete" class="form-control"/>
		<input type="hidden" name="kota_asal" value="" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Berat (gram)</label>
      <div class="col-sm-10">
        <input type="number" autocomplete="off" value="" required="required" class="form-control" name="berat" placeholder="Berat Kiriman">
      </div>
    </div>

    	<div class="row" style="width: 500px; height: 50px; margin-left: 100px;">
       <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="jne" checked>
         JNE
       </label>
        </div>

        <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="tiki" checked>
         TIKI
       </label>
        </div>

        <div class="radio-inline">
      <label>
       <input type="radio" name="courier" id="optionsRadios1" value="pos" checked>
        POS
       </label>
        </div>

       </div>


    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cek Tarif</button>
      </div>
    </div>
  </form>
   
  </div>
</div>

</div>			

</div>
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<!-- <script>
  $( function() {
    var availableTags = 
    [ 
   
    <?php foreach($ongkir as $datas): ?>
    "<?php echo e($datas['city_id']); ?>","<?php echo e($datas['city_name']); ?>",
    <?php endforeach; ?>


   
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<script>
	function rubahValue(){
		var data = document.getElementById("tags").value;
		document.getElementById("keluaran").value = data;
	}
</script>
 -->
 <script>
var dataCities = [
		 <?php foreach($ongkir as $datas): ?>
			{"value": "<?php echo e($datas['city_name']); ?>", "data": "<?php echo e($datas['city_id']); ?>"}, 
			  <?php endforeach; ?>
]
$(document).ready(function () {
$('#autocomplete').autocomplete({
    lookup: dataCities,
    onSelect: function (suggestion) {
        $("input[name=kota_asal]").val(suggestion.data);
    }
});
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>