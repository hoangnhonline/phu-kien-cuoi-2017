<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sản phẩm mới    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo e(route('product.index')); ?>">Sản phẩm mới</a></li>
      <li class="active">Thêm mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="<?php echo e(route('product.index')); ?>" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="<?php echo e(route('product.store')); ?>" id="dataForm">
    <input type="hidden" name="is_copy" value="1">
    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm mới</h3>
          </div>
          <!-- /.box-header -->               
            <?php echo csrf_field(); ?>          
            <div class="box-body">
                <?php if(count($errors) > 0): ?>
                  <div class="alert alert-danger">
                    <ul>
                        <?php foreach($errors->all() as $error): ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin chi tiết</a></li>                    
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hình ảnh</a></li>
                    <li role="presentation"><a href="#thuoctinh" aria-controls="thuoctinh" role="tab" data-toggle="tab">Thuộc tính</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                   
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="form-group col-md-6 none-padding">
                          <label for="email">Danh mục cha<span class="red-star">*</span></label>
                          <select class="form-control req" name="loai_id" id="loai_id">
                            <option value="">--Chọn--</option>
                            <?php foreach( $loaiSpArr as $value ): ?>
                            <option value="<?php echo e($value->id); ?>" <?php echo e($value->id == old('loai_id') || $value->id == $loai_id ? "selected" : ""); ?>><?php echo e($value->name); ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <div class="form-group col-md-6 none-padding pleft-5">
                          <label for="email">Danh mục con<span class="red-star">*</span></label>
                          <?php 
                          $loai_id = old('loai_id');
                          if($loai_id > 0){
                            $cateArr = DB::table('cate')->where('loai_id', $loai_id)->orderBy('display_order')->get();
                          }
                          ?>
                          <select class="form-control req" name="cate_id" id="cate_id">
                            <option value="">--Chọn--</option>
                            <?php foreach( $cateArr as $value ): ?>
                            <option value="<?php echo e($value->id); ?>" <?php echo e($value->id == old('cate_id') || $value->id == $cate_id ? "selected" : ""); ?>><?php echo e($value->name); ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>  
                        <div class="form-group" >                  
                          <label>Tên <span class="red-star">*</span></label>
                          <input type="text" class="form-control req" name="name" id="name" value="<?php echo e(old('name')); ?>">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control req" readonly="readonly" name="slug" id="slug" value="<?php echo e(old('slug')); ?>">
                        </div> 
                        <div class="col-md-4 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_hot" value="1" <?php echo e(old('is_hot') == 1 ? "checked" : ""); ?>> NỔI BẬT </label>
                          </div>                          
                        </div>
                        <div class="col-md-4 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_new" value="1" <?php echo e(old('is_new') == 1 ? "checked" : ""); ?>> NEW </label>
                          </div>                          
                        </div>                        
                        <div class="col-md-4 none-padding pleft-5">
                            <div class="checkbox">
                              <label><input type="checkbox" name="is_sale" id="is_sale" value="1" <?php echo e(old('is_sale') == 1 ? "checked" : ""); ?>> SALE </label>
                          </div>
                        </div>
                        <div class="form-group col-md-6 none-padding" >                  
                            <label>Giá<span class="red-star">*</span></label>
                            <input type="text" class="form-control req number" name="price" id="price" value="<?php echo e(old('price')); ?>">
                        </div>
                        <div class="form-group col-md-6" >                  
                            <label>Giá SALE</label>
                            <input type="text" class="form-control number" name="price_sale" id="price_sale" value="<?php echo e(old('price_sale')); ?>">
                        </div>                        
                         <div class="col-md-6 none-padding">
                          <label>Số lượng tồn<span class="red-star">*</span></label>                  
                          <input type="text" class="form-control req number" name="so_luong_ton" id="so_luong_ton" value="<?php echo e(old('so_luong_ton')); ?>">                        
                        </div>
                        <div class="col-md-6">
                            <label>Màu sắc</label>
                            <select name="color_id" id="color_id" class="form-control">
                                <option value="">--chọn--</option>
                                <?php if( $colorArr->count() > 0): ?>
                                  <?php foreach( $colorArr as $color ): ?>
                                      <option value="<?php echo e($color->id); ?>"><?php echo e($color->name); ?></option>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div style="margin-bottom:10px;clear:both"></div>
                        <div class="form-group col-md-6 none-padding">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="4" name="mo_ta" id="mo_ta"><?php echo e(old('mo_ta')); ?></textarea>
                          </div>
                        <div class="form-group col-md-6 none-padding pleft-5">
                          <label>Khuyến mãi</label>
                          <textarea class="form-control" rows="4" name="khuyen_mai" id="khuyen_mai"><?php echo e(old('khuyen_mai')); ?></textarea>
                        </div>
                         
                        <div class="form-group">
                          <label>Chi tiết</label>
                          <textarea class="form-control" rows="10" name="chi_tiet" id="chi_tiet"><?php echo e(old('chi_tiet')); ?></textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban-->                    
                    
                     <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                         
                          <div class="col-md-12" style="text-align:center">                            
                            
                            <input type="file" id="file-image"  style="display:none" multiple/>
                         
                            <button class="btn btn-primary" id="btnUploadImage" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <div class="clearfix"></div>
                            <div id="div-image" style="margin-top:10px"></div>
                          </div>
                          <div style="clear:both"></div>
                        </div>

                     </div><!--end hinh anh-->
                     <div role="tabpanel" class="tab-pane" id="thuoctinh">
                     
                     <?php if( !empty( $thuocTinhArr )): ?>
                     <table class="table table-responsive table-bordered">
                      <?php foreach($thuocTinhArr as $loaithuoctinh): ?>
                        <tr style="background-color:#CCC">
                          <td colspan="2"><?php echo e($loaithuoctinh['name']); ?></td>
                        </tr>
                        <?php if( !empty($loaithuoctinh['child'])): ?>
                          <?php foreach( $loaithuoctinh['child'] as $thuoctinh): ?>
                          <tr>
                            <td width="150"><?php echo e($thuoctinh['name']); ?></td>
                            <td><input type="text" class="form-control" name="thuoc_tinh[<?php echo e($thuoctinh['id']); ?>]" value="<?php echo e(old('thuoc_tinh')[$thuoctinh['id']]); ?>"></td>
                          </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </table>
                     <?php endif; ?>
                     
                     </div>
              
                    
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">              
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="<?php echo e(route('product.index')); ?>">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-4">      
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thông tin SEO</h3>
          </div>

          <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>Meta title </label>
                <input type="text" class="form-control" name="meta_title" id="meta_title" value="<?php echo e(old('meta_title')); ?>">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Meta desciption</label>
                <textarea class="form-control" rows="6" name="meta_description" id="meta_description"><?php echo e(old('meta_description')); ?></textarea>
              </div>  

              <div class="form-group">
                <label>Meta keywords</label>
                <textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords"><?php echo e(old('meta_keywords')); ?></textarea>
              </div>  
              <div class="form-group">
                <label>Custom text</label>
                <textarea class="form-control" rows="6" name="custom_text" id="custom_text"><?php echo e(old('custom_text')); ?></textarea>
              </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<input type="hidden" id="route_upload_tmp_image_multiple" value="<?php echo e(route('image.tmp-upload-multiple')); ?>">
<input type="hidden" id="route_upload_tmp_image" value="<?php echo e(route('image.tmp-upload')); ?>">
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #444345 !important;
  }
  .error{
    border : 1px solid red;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript_page'); ?>
<script type="text/javascript">

$(document).on('click', '.remove-image', function(){
  if( confirm ("Bạn có chắc chắn không ?")){
    $(this).parents('.col-md-3').remove();
  }
});


    $(document).ready(function(){
      $('#btnSave').click(function(){
        var errReq = 0;
        $('#dataForm .req').each(function(){
          var obj = $(this);
          if(obj.val() == '' || obj.val() == '0'){
            errReq++;
            obj.addClass('error');
          }else{
            obj.removeClass('error');
          }
        });
        if(errReq > 0){          
         $('html, body').animate({
              scrollTop: $("#dataForm .req.error").eq(0).parents('div').offset().top
          }, 500);
          return false;
        }
        if( $('#div-image img.img-thumbnail').length == 0){
          if(confirm('Bạn chưa upload hình sản phẩm. Vẫn tiếp tục lưu ?')){
            return true;
          }else{
            $('html, body').animate({
                scrollTop: $("#dataForm").offset().top
            }, 500);
            $('a[href="#settings"]').click();            
             return false;
          }
        }

      });
      $('#is_old').change(function(){
        if($(this).prop('checked') == true){
          $('#price_new').addClass('req');
        }else{
          $('#price_new').val('').removeClass('req');
        }
      });
      $('#is_sale').change(function(){
        if($(this).prop('checked') == true){
          $('#price_sale').addClass('req');
        }else{
          $('#price_sale').val('').removeClass('req');
        }
      });
      $('#dataForm .req').blur(function(){    
        if($(this).val() != ''){
          $(this).removeClass('error');
        }else{
          $(this).addClass('error');
        }
      });
      $('#loai_id').change(function(){
        location.href="<?php echo e(route('product.create')); ?>?loai_id=" + $(this).val();
      })
      $(".select2").select2();
      $('#dataForm').submit(function(){
        /*var no_cate = $('input[name="category_id[]"]:checked').length;
        if( no_cate == 0){
          swal("Lỗi!", "Chọn ít nhất 1 thể loại!", "error");
          return false;
        }
        var no_country = $('input[name="country_id[]"]:checked').length;
        if( no_country == 0){
          swal("Lỗi!", "Chọn ít nhất 1 quốc gia!", "error");
          return false;
        }        
        */
        $('#btnSave').hide();
        $('#btnLoading').show();
      });
      var editor = CKEDITOR.replace( 'chi_tiet',{
          language : 'vi',
          height: 300,
          filebrowserBrowseUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/browse.php?type=files')); ?>",
          filebrowserImageBrowseUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/browse.php?type=images')); ?>",
          filebrowserFlashBrowseUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/browse.php?type=flash')); ?>",
          filebrowserUploadUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/upload.php?type=files')); ?>",
          filebrowserImageUploadUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/upload.php?type=images')); ?>",
          filebrowserFlashUploadUrl: "<?php echo e(URL::asset('public/admin/dist/js/kcfinder/upload.php?type=flash')); ?>"
      });
      var editor2 = CKEDITOR.replace( 'khuyen_mai',{
          language : 'vi',
          height : 100,
          toolbarGroups : [
            
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },           
            '/',
            
          ]
      });
      var editor3 = CKEDITOR.replace( 'mo_ta',{
          language : 'vi',
          height : 100,
          toolbarGroups : [
            
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },           
            '/',
            
          ]
      });
      $('#btnUploadImage').click(function(){        
        $('#file-image').click();
      }); 
     
      var files = "";
      $('#file-image').change(function(e){
         files = e.target.files;
         
         if(files != ''){
           var dataForm = new FormData();        
          $.each(files, function(key, value) {
             dataForm.append('file[]', value);
          });   
          
          dataForm.append('date_dir', 0);
          dataForm.append('folder', 'tmp');

          $.ajax({
            url: $('#route_upload_tmp_image_multiple').val(),
            type: "POST",
            async: false,      
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (response) {
                $('#div-image').append(response);
                if( $('input.thumb:checked').length == 0){
                  $('input.thumb').eq(0).prop('checked', true);
                }
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
        }
      });
     

      $('#name').change(function(){
         var name = $.trim( $(this).val() );
         if( name != ''){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });  
     
     
      
    });
    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>