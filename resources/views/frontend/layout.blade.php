<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi">
<head>
	<title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="@yield('site_description')"/>
    <meta name="keywords" content="@yield('site_keywords')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="@yield('favicon')" type="image/x-icon"/>
    <link rel="canonical" href="{{ url()->current() }}"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('site_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="annammobile.com" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="{{ Helper::showImage($socialImage) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('site_description')" />
    <meta name="twitter:title" content="@yield('title')" />        
    <meta name="twitter:image" content="{{ Helper::showImage($socialImage) }}" />	

	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/responsive.css') }}">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='css/animations-ie-fix.css' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=567408173358902";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

	@include('frontend.partials.header')

	<div class="wrapper">
		
		@yield('content')

	</div><!-- /wrapper-->

	@include('frontend.partials.footer')

	<!-- Modal Cart -->
	<div class="modal fade" id="Cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times-circle"></i>
				</button>
				<div class="shopcart-ct">
					<div class="modal-body">
						<form action="#" method="POST" id="frm_order_items">
							<div class="table cart-tbl">
								<div class="table-row thead">
									<div class="table-cell product-col t-c">Sản phẩm</div>
									<div class="table-cell numb-col t-c">Số lượng</div>
									<div class="table-cell total-col t-c">Thành tiền</div>
								</div><!-- table-row thead -->
								<div class="tr-wrap">
									<div class="table-row clearfix">
										<div class="table-cell product-col">
											<figure class="img-prod">
												<img alt="Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng" src="{{ URL::asset('public/assets/images/cart/1.jpg') }}">
											</figure>
											<a href="#" target="_blank" title="Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng">Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng</a>
											<p class="p-color">
												<span>Màu sắc sản phẩm:</span>
												<span>Đen</span>
											</p>
											<p class="p-size">
												<span>Size sản phẩm:</span>
												<span>39</span>
												<span>|</span>
												<a href="#" title="Xóa sản phẩm">Xóa</a>
											</p>
										</div>
										<div class="table-cell numb-col t-c">
											<select name="" size="1" class="change_quantity">
												<option value="0">0</option>
												<option value="1" selected="">1</option>
												<option value="2">2</option>
											</select>
										</div>
										<div class="table-cell total-col t-r">355.000đ</div><!-- /table-cell total-col t-r -->
									</div>
									<div class="table-row clearfix">
										<div class="table-cell product-col">
											<figure class="img-prod">
												<img alt="Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng" src="{{ URL::asset('public/assets/images/cart/1.jpg') }}">
											</figure>
											<a href="#" target="_blank" title="Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng">Tên sản phẩm quần jeans chất lượng cao được thêm vào giỏ hàng</a>
											<p class="p-color">
												<span>Màu sắc sản phẩm:</span>
												<span>Đen</span>
											</p>
											<p class="p-size">
												<span>Size sản phẩm:</span>
												<span>39</span>
												<span>|</span>
												<a href="#" title="Xóa sản phẩm">Xóa</a>
											</p>
										</div>
										<div class="table-cell numb-col t-c">
											<select name="" size="1" class="change_quantity">
												<option value="0">0</option>
												<option value="1" selected="">1</option>
												<option value="2">2</option>
											</select>
										</div>
										<div class="table-cell total-col t-r">355.000đ</div><!-- /table-cell total-col t-r -->
									</div>
								</div><!-- tr-wrap -->
							</div><!-- table cart-tbl -->
							<div class="block-btn">
								<a href="#" title="Xóa tất cả" class="btn btn-default">Xóa tất cả <i class="fa fa-trash-o"></i></a>
								<a href="cart.html" title="Xóa tất cả" class="btn btn-danger">Thanh toán <i class="fa fa-angle-right"></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="editContentModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Cập nhật nội dung</h4>
	      </div>
	      <form method="POST" action="{{ route('save-content') }}">
	      {{ csrf_field() }}
	      <input type="hidden" name="id" id="txtId" value="">
	      <div class="modal-body">
	        <textarea rows="5" class="form-control" name="content" id="txtContent"></textarea>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary" id="btnSaveContent">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>
	<style type="text/css">
		.edit {  
		position: relative;
		border: 1px dashed transparent;
		min-height: 20px;
		}
		.edit:hover {
		border: 1px dashed #c70f19;\
		}
		.edit:hover:before {
		content: "\f040";
		font-family: "FontAwesome";
		font-size: 13px;
		color: #ffffff;
		width: 20px;
		height: 20px;
		display: block;
		background: #c70f19;
		position: absolute;
		top: 0;
		right: 0;
		cursor: pointer;
		}
	</style>
	<!-- ===== JS ===== -->
	<script src="{{ URL::asset('public/assets/js/jquery.min.js') }}"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="{{ URL::asset('public/assets/lib/bootstrap/bootstrap.min.js') }}"></script>
	<!-- carousel -->
	<script src="{{ URL::asset('public/assets/lib/carousel/owl.carousel.min.js') }}"></script>
	<!-- sticky -->
    <script src="{{ URL::asset('public/assets/lib/sticky/jquery.sticky.js') }}"></script>
    <!-- Js Common -->
	<script src="{{ URL::asset('public/assets/js/common.js') }}"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b215c2a2658a8a"></script> 	
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script>
		jQuery('.fb-page1').toggleClass('hide');
			jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat Tư Vấn').css({'bottom':0});
		jQuery('#closefbchat').click(function(){
			jQuery('.fb-page1').toggleClass('hide');
			if(jQuery('.fb-page1').hasClass('hide')){
				jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat Tư Vấn').css({'bottom':0});
			}
			else{
				jQuery('#closefbchat').text('Tắt Chat').css({'bottom':299});
			}
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
			      headers: {
			          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      }
			  });

			$('.edit').click(function(){
				$('#txtId').val($(this).data('text'));
				$('#txtContent').val($(this).html());
				$('#editContentModal').modal('show');
			});
			$('#btnSaveContent').click(function(){
				$.ajax({
					url : '{{ route('save-content') }}',
					type : "POST",
					data : {
						id : $('#txtId').val(),
						content : $('#txtContent').val()
					},
					success:  function(){
						window.location.reload();
					}

				});
			});
		});
	</script>
</body>
</html>
