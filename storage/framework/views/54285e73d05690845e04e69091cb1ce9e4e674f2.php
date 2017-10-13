<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="block block_breadcrumb">
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a></li>
        <li class="active">Liên hệ</li>
    </ol>
</div><!-- /block_breadcrumb -->

<div class="block_form" style="padding-top:20px">

    <div class="block_contact_note">
        <h2>MỌI NHU CẦU, QUÝ KHÁCH VUI LÒNG LIÊN HỆ</h2>
        <p class="ctact-time">Ân Nam Mobile phục vụ từ 8:00 đến 21:30 Thứ 2 đến Chủ Nhật</p>
        <div class="ctact-note-inner">
            <p>
                <span>Tel: <strong>0904500057 
                </strong></span>
            </p>           
            <p>
                <span>Email: <strong>pnhtin@gmail.com / tinphan@annammobile.com
                </strong></span>
            </p>
        </div>
    </div><!-- /block_contact_note -->
     <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7021140509805!2d106.62289311480056!3d10.757425592334439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c291bd8bd93%3A0xbbcd65e4ee9dfba4!2zNjgzIEFuIETGsMahbmcgVsawxqFuZywgcGjGsOG7nW5nIDEzLCBCw6xuaCBUw6JuLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1502895046090" width="100%" height="439" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="contact-form col-md-6">
        
        <div class="ctact-frm-inner">
            <header class="frm-head">
                <h2>LIÊN HỆ</h2>
                <p>
                    Xin chân thành cảm ơn những ý kiến đóng góp, phản hồi từ phía
                    khách hàng.
                </p>
            </header>
            <article class="frm-content">
                <div class="row">
                    <?php if(Session::has('message')): ?>
                    <div class="col-md-12">
                        <p class="alert alert-info" ><?php echo e(Session::get('message')); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                    <div class="col-md-12">
                      <div class="alert alert-danger ">
                        <ul>                           
                            <li>Vui lòng nhập đầy đủ thông tin.</li>                            
                        </ul>
                      </div>
                    </div>
                    <?php endif; ?>  
                    <form method="POST" action="<?php echo e(route('send-contact')); ?>">
                    <?php echo e(csrf_field()); ?>                    
                        <div class="col-md-6 col-sm-6 col-xs-12 frm-itm">
                            <input type="text" placeholder="Họ và tên" name="full_name" id="full_name" class="ipt txt-name" value="<?php echo e(old('full_name')); ?>"><span class="required">*</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 frm-itm">
                            <input type="tel" placeholder="Số điện thoại" name="phone" id="phone" class="ipt txt-phone" value="<?php echo e(old('phone')); ?>"><span class="required">*</span>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <input type="email" placeholder="Email liên lạc" value="<?php echo e(old('email')); ?>" name="email" id="email" class="ipt txt-email"><span class="required">*</span>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <textarea placeholder="Nội dung liên hệ ..." name="content" id="content"><?php echo e(old('content')); ?></textarea>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <input type="submit" value="GỬI LIÊN HỆ" class="btn-submit">
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </div><!-- /contact-form -->
   
</div><!-- /block_form -->
<style type="text/css">
    span.required{
        color:red !important;
    }
    .contact-form-box input {
        font-size: 14px;
        border: 1px solid #ccc
    }
    .block_contact_note{
        margin-bottom: 30px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>