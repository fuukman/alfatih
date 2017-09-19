@extends('layouts/app')
@section('css')
<link href="{{asset('theme/backend/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('scripts')
<script src="{{asset('theme/backend/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/morris/morris.css"></script> -->
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="{{ url('theme/backend/plugins/fastclick/fastclick.js')}}"></script>
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script> -->
        <!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/demo.js"></script> -->
        <script src="{{ url('theme/backend/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ url('theme/backend/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ url('theme/backend/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{ url('theme/backend/plugins/flot/jquery.flot.categories.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ url('theme/backend/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ url('theme/backend/plugins/knob/jquery.knob.js')}}"></script>
<script>
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
  
    /* END JQUERY KNOB */
    </script>
        
        <script>
 var bar_data = {
      data: [
      
      @foreach($stok as $stk)
        [ "{{ $stk['name'] }}",{{ $stk['stok'] }} ],
      @endforeach
      // ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 30], ["June", 9],["asd", 10]

      ],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });


</script>

<script>
  //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
      @foreach($laris as $lrs)
      {label: "{{ $lrs['name'] }}", value: {{$lrs['jumlah']}} },

      @endforeach
      ],
      hideHover: 'auto'
    });
</script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Dashboard 
       
        <small>Control panel</small>
    </h1>
 
</section>

<section class="content">
   <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$countTotalTrans}}</h3>

              <p>Total Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><br></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$countUserUniver}}</h3>

              <p>Belum Verifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><br></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$countUser}}</h3>

              <p>Total Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer"><br></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$countProduct}}</h3>

              <p>Total Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><br></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</section><!-- /.content -->


<section class="content">
<div class="row">
     <div class="col-md-12">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <!-- /.box-body-->
          </div>
             <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Stok Barang</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">

              @foreach($stok as $stk)
                <div class="col-md-1">
                  <input type="text" class="knob" value="{{$stk->stok}}" data-width="60" data-height="60" data-fgColor="#3c8dbc">
                  <p style="text-align: center;">{{$stk->name}}</p>
                </div>
                @endforeach
                <!-- ./col -->
               
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
</section>


<section class="content">
<div class="row">
     <div class="col-md-6">
          <!-- Bar chart -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">3 Produk yang paling laris</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>

            <!-- /.box-body -->
          </div>


        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">8 Pelanggan Terakhir Daftar</h3>

             <div class="box-tools pull-right">
                    <span class="label label-danger">8 Pelanggan Terakhir Daftar</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  @foreach($lates as $lat)
                    <li>
                      <img src="{{url('images/user.png')}}" alt="User Image" width="80" height="80">
                      <a class="users-list-name" href="#">{{$lat->name}}</a>
                      <span class="users-list-date">{{$lat->created_at}}</span>
                    </li>
                   @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{url('/admin/listuser')}}" class="uppercase">lihat Semua</a>
                </div>
                <!-- /.box-footer -->
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->          
            <!-- /.box-body-->
          </div>
          </div>
</section>




@stop
