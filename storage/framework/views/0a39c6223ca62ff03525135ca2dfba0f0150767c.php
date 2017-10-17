<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="block block-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Liên hệ</li>
        </ul>
    </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-sm-3 col-xs-12 block-col-left">
            <div class="block-sidebar">
                <div class="block-module block-links-sidebar">
                    <div class="block-title">
                        <h2>
                            <i class="fa fa-gift"></i>
                            KHUYẾN MÃI HOT
                        </h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <li>
                                <a href="#" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/1.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/2.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/3.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <p class="thumb"><img src="images/pro-sidebar/4.jpg" alt=""></p>
                                    <h3>Tiêu đề khuyến mãi được viết bởi nhóm iMarketing</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
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
        </div><!-- /block-col-left -->
        <div class="col-sm-9 col-xs-12 block-col-right">
            <div class="block-page-common clearfix">
                <div class="block block-title">
                    <h1 class="title-main">LIÊN HỆ</h1>
                </div>
                <div class="block-content">
                    <h2 class="tit-page2">CÔNG TY CUNG CẤP PHỤ KIỆN CƯỚI CAO CẤP</h2>
                    <div class="block-address">
                        <p><strong>Địa chỉ:</strong> 788 - 790 Lạc Long Quân, phường 9, quận Tân Bình, thành phố Hồ Chí Minh</p>
                        <p><strong>Hotline:</strong> (08) 35 00 32 47 - 0909 787 111</p>
                        <p><strong>Website:</strong> www.namphucjeans.com</p>
                        <p><strong>Email:</strong> namphucjeans@yahoo.com.vn</p>
                    </div>
                     <?php if(Session::has('message')): ?>
                  
                        <p class="alert alert-info" ><?php echo e(Session::get('message')); ?></p>
                   
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
               
                      <div class="alert alert-danger ">
                        <ul>                           
                            <li>Vui lòng nhập đầy đủ thông tin.</li>                            
                        </ul>
                      </div>
                   
                    <?php endif; ?>  
                    <form method="POST" action="<?php echo e(route('send-contact')); ?>"  class="block-form">
                    <?php echo e(csrf_field()); ?>                        
                        <h2 class="tit-page2">THÔNG TIN LIÊN HỆ</h2>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="text" placeholder="Họ và tên" name="full_name" id="full_name" value="<?php echo e(old('full_name')); ?>" class="form-control"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="tel" placeholder="Số điện thoại" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="email" placeholder="Email liên lạc" value="<?php echo e(old('email')); ?>" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <textarea placeholder="Nội dung liên hệ ..." name="content" id="content" class="form-control"><?php echo e(old('content')); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-main">Gửi liên hệ</button>
                            </div>
                        </div>
                    </form>

                    <div class="block block-map">
                        <object data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3340475200366!2d106.66105631546826!3d10.785706992315221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ece0a7bad71%3A0x5fded1d58e5866d9!2zMTA0IELhuq9jIEjhuqNpLCBwaMaw4budbmcgNywgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1503933127779"></object>
                    </div>

                </div>
            </div><!-- /block-ct-news -->
        </div><!-- /block-col-right -->
    </div>
</div><!-- /block_big-title -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>