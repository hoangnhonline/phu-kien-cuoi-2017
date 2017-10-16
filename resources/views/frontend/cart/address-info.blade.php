@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block-breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a class="home" href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
      <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
      <li class="active">Thông tin thanh toán</li>
    </ul>
  </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
  <div class="block-page-common">
    <div class="block block-title">
      <h2>THÔNG TIN THANH TOÁN</h2>
    </div>
  </div><!-- /block-page-common -->
  <div class="row">
    <div class="col-sm-8 col-xs-12 block-col-left">
      <div class="block-billing">
        <div class="block-title">
          THÔNG TIN ĐẶT HÀNG
        </div>
        <div class="block-content">
          <form action="billing-infomation_submit" method="get" class="form-billing">
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" id="inputname" placeholder="Họ và tên">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-envelope"></i></span>
              <input type="text" class="form-control" id="inputmail" placeholder="Email">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-phone"></i></span>
              <input type="text" class="form-control" id="inputphone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-home"></i></span>
              <input type="text" class="form-control" id="inputaddress" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
              <label class="choose-another"><input type="radio" class="radio-cus"> Giao đến địa chỉ khác</label>
            </div>
            <div class="form-group">
              <b>Thông tin người nhận</b>
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" id="inputname" placeholder="Họ và tên">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-envelope"></i></span>
              <input type="text" class="form-control" id="inputmail" placeholder="Email">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-phone"></i></span>
              <input type="text" class="form-control" id="inputphone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-home"></i></span>
              <input type="text" class="form-control" id="inputaddress" placeholder="Địa chỉ">
            </div>
            <div class="text-right">
              <a href="payments.html" class="btn btn-main">
                Tiếp tục <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </form>
        </div>
      </div><!-- /block-billing -->
    </div><!-- /block-col-left -->
    <div class="col-sm-4 col-xs-12 block-col-right">
      <div class="block-billing-product">
        <div class="block-title">
          THÔNG TIN SẢN PHẨM
        </div>
        <div class="block-content">
          <table class="table-billing-product">
            <thead>
              <tr>
                <th class="table-width"><strong>Sản phẩm</strong></th>
                <th><strong>Tổng cộng</strong></th>
              </tr>
            </thead>
            <tbody>
              @if(!empty(Session::get('products')))
             <?php $total = 0; ?>
              @if( $arrProductInfo->count() > 0)
                  <?php $i = 0; ?>
                @foreach($arrProductInfo as $product)
                <?php 
                $i++;
                $price = $product->is_sale ? $product->price_sale : $product->price; 

                $total += $total_per_product = ($getlistProduct[$product->id]*$price);
                
                ?>
              <tr>
                <td>
                  <p class="tb-commom"><strong>{!! $product->name !!}</strong></p>
                  <p class="tb-commom">Số lượng: {{ $getlistProduct[$product->id] }} x {!! number_format($product->price_sell) !!} </p>               
                </td>
                <td style="text-align:right">
                  <strong class="text-right">{!! number_format($total_per_product) !!}đ</strong>
                </td>
              </tr>
              @endforeach

              @endif  

              @endif
              <tr>
                <td>
                  <strong>Tạm tính</strong>
                </td>
                <td>
                  <p class="text-right">{{ number_format($total) }}đ</p>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Tổng cộng</strong>
                </td>
                <td>
                  <p class="cl-red text-right">{{ number_format($total) }}đ</p>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="text-center">
                  (Chưa bao gồm phí vận chuyển nếu có)
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- /block-col-right -->
  </div>
</div><!-- /block_big-title -->
<style type="text/css">
  .error{
    border : 1px solid red;
  }
</style>
@stop
@section('js')
 
@endsection








