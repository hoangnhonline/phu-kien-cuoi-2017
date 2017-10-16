<header class="header">
	<div class="block-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12 block-logo">
					<a href="{!! route('home') !!}" title="Logo">
						<img src="{{ URL::asset('public/assets/images/logo.png') }}" alt="Logo">
					</a>
				</div><!-- /block-logo -->
				<div class="col-sm-8 col-xs-12 block-info">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="block-search">
								<form class=""  action="{{ route('search') }}" method="GET">
									<button type="submit" class="btn icon"><i class="fa fa-search"></i></button>
									<div class="search-inner">
										<input type="text" class="txtSearch" value="{!! isset($tu_khoa) ? $tu_khoa : "" !!}" name="keyword" placeholder="Từ khóa bạn cần tìm...">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /bblock-info -->				
				<form class="hdr-search"  action="{{ route('search') }}" method="GET">
					<div class="input-serach">
						<input type="text" class="txtSearch" value="{!! isset($tu_khoa) ? $tu_khoa : "" !!}" name="keyword" placeholder="Từ khóa bạn cần tìm...">
					</div>
					<div class="select-choice">
						<div class="form-category">
							<select id="cid" class="cid choice" name="cid">
								<option value="">Danh mục</option>
								@foreach($cateParentList as $value)
							   	<option value="{{ $value->id }}" {{ isset($parent_id) && $parent_id == $value->id ? "selected" : "" }}>{!! $value->name !!}</option>>
							   	@endforeach
							</select>
						</div>
						<button type="submit" class="btn-search">Tìm kiếm</button>
					</div>
				</form>

				<div class="hdr-cart">
					<a href="{{ route('cart') }}" title="Cart" data-toggle="modal" data-target="#Cart">
						<i class="fa fa-shopping-cart"></i>
						<span>Giỏ hàng</span><br>
						<span><b>{{ Session::get('products') ? array_sum(Session::get('products')) : 0 }}</b> sản phẩm</span>
					</a>
				</div>

				<ul class="hdr-social">
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-google"></i></a></li>
					<li><a href=""><i class="fa fa-youtube"></i></a></li>
					<li><a href=""><i class="fa fa-skype"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="block-fb">
			<div class="icon">
				<i class="fa fa-facebook"></i>
			</div>
			<div class="fb-inner">
				<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300px" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
			</div>
		</div>
	</div><!-- /block-header-bottom -->
	<div class="menu">
		<div class="nav-toogle">
			<i class="fa"></i>
		</div>
		<div class="block-cart-mb">
			<a href="{{ route('cart') }}" title="Cart" data-toggle="modal" data-target="#Cart">
				<i class="fa fa-shopping-cart"></i>
				<span>{{ Session::get('products') ? array_sum(Session::get('products')) : 0 }}</span>
			</a>
		</div>
		<nav class="menu-top">
			<div class="container">
				<ul class="nav-menu">
					<li class="level0 active"><a href="index.html" title="Trang Chủ">Trang Chủ</a></li>
					<li class="level0"><a href="about.html" title="Giới Thiệu">Giới Thiệu</a></li>
					<li class="level0 parent">
						<a href="product.html" title="Sản Phẩm">SẢN PHẨM</a>
						<ul class="level0 submenu">
							<li class="level1"><a href="product.html" title="Phụ kiện cưới">Phụ kiện cưới</a></li>
							<li class="level1 parent">
								<a href="product.html" title="Phụ kiện bé yêu">Phụ kiện bé yêu</a>
								<ul class="level1 submenu">
									<li class="level2"><a href="product.html" title="Vương miệng cho bé">Vương miệng cho bé</a></li>
									<li class="level2"><a href="product.html" title="Cài tóc cho bé">Cài tóc cho bé</a></li>
									<li class="level2"><a href="product.html" title="Trang phục hóa thân nhân vật">Trang phục hóa thân nhân vật</a></li>
								</ul>
							</li>
							<li class="level1"><a href="product.html" title="Đồ trang điểm">Đồ trang điểm</a>
							</li>
							<li class="level1"><a href="product.html" title="Phụ kiện Anh">Phụ kiện Anh</a></li>
						</ul>
					</li>
					<li class="level0"><a href="sales.html" title="Thi Công">KHUYẾN MÃI</a></li>
					<li class="level0"><a href="recruitment.html" title="Nội Thất">TUYỂN DỤNG</a></li>
					<li class="level0"><a href="contact.html" title="Liên Hệ">Liên Hệ</a></li>
					<li class="nav-info">
						<i class="fa fa-phone"></i> <a href="tel:0949765166">0949 765 166</a> - <a href="tel:0943761688">0943 761 688</a>
					</li>
				</ul>
			</div>
		</nav><!-- /menu-top -->
	</div><!-- /menu -->
</header><!-- /header -->