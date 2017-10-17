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
                    Khuyến mãi hot
                </h2>
            </div>
            <div class="block-content">
                <ul class="list">
                    <?php if($kmHot): ?>
                    <?php foreach( $kmHot as $obj ): ?>
                    <li>
                        <a href="<?php echo route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ] ); ?>" title="<?php echo $obj->title; ?>">
                            <p class="thumb"><img src="<?php echo Helper::showImage( $obj->image_url ); ?>" alt="<?php echo $obj->title; ?>"></p>
                            <h3><?php echo $obj->title; ?></h3>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
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