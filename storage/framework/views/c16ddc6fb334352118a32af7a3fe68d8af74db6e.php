<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="block block-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo route('home'); ?>">Trang chủ</a></li>
            <li class="active"><?php echo $detailPage->title; ?></li>
        </ul>
    </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-sm-3 col-xs-12 block-col-left">
            <div class="block-sidebar">
                <div class="block-module block-search-sidebar">
                    <div class="block-title">
                        <h2>
                            <i class="fa fa-search"></i>
                            TÌM KIẾM SẢN PHẨM
                        </h2>
                    </div>
                    <div class="block-content">
                        <form method="" action="" class="frm-search">
                            <div class="form-group">
                            <input type="text" class="form-control" id="" name="" value="" placeholder="Nhập từ khóa bạn muốn tìm kiếm">
                          </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="" name="" value="" placeholder="Nhập mã sản phẩm">
                          </div>
                            <div class="form-group">
                                <select class="form-control" id="" name="">
                                <option value="0">--Chọn mức giá--</option>
                              </select>
                          </div>
                            <div class="form-group">
                                <select class="form-control" id="" name="">
                                <option value="0">--Chọn danh mục--</option>
                              </select>
                          </div>
                            <div class="form-group">
                                <div class="choose-prod-color-list">
                                    <a href="#" class="color_01"></a>
                                    <a href="#" class="color_02 active"></a>
                                    <a href="#" class="color_03"></a>
                                    <a href="#" class="color_04"></a>
                                    <a href="#" class="color_05"></a>
                                    <a href="#" class="color_06"></a>
                                    <a href="#" class="color_07"></a>
                                    <a href="#" class="color_08"></a>
                                    <a href="#" class="color_09"></a>
                                </div>
                          </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-main show">Tìm kiếm</button>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="block-module block-links-sidebar">
                    <div class="block-title">
                        <h2>
                            <i class="fa fa-gift"></i>
                            TIN TỨC NỔI BẬT
                        </h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <li>
                                <a href="sales-detail.html" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/1.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="sales-detail.html" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/2.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="sales-detail.html" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/3.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="sales-detail.html" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/4.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="sales-detail.html" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/5.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="block-module block-statistics-sidebar">
                    <div class="block-title">
                        <h2>
                            <i class="fa fa-bar-chart"></i>
                            THỐNG KÊ TRUY CẬP
                        </h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <li>
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="text">Hôm qua:</span>
                                <span class="number">246</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="text">Hôm nay:</span>
                                <span class="number">246</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="text">Trong tuần:</span>
                                <span class="number">246</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="text">Tổng truy cập:</span>
                                <span class="number">246</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /block-col-right -->
        <div class="col-sm-9 col-xs-12 block-col-right">
            <div class="block-page-about">
                <div class="block-page-common">
                    <div class="block block-title">
                        <h1 class="title-main"><?php echo $detailPage->title; ?></h1>
                    </div>
                </div>
                <div class="block-article">
                    <div class="block block-content">
                        <?php echo $detailPage->content; ?>

                    </div>
                </div>
            </div>
        </div><!-- /block-col-left -->

    </div>
</div><!-- /block_big-title -->
<?php $__env->stopSection(); ?>  

<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>