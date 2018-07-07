
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?= $imagesBaseURL.$result[0]->mainPic; ?>">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 style="color:#fff;"class="title"><?= $model->modelNameAr; ?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="hyundai" >
        <div class="col-md-12 mt-30">
            <div class="row multi-row-clearfix">
            <div class="products related">
                <?php

                    foreach($result as $car){
                ?>

                <div class="col-sm-6 col-md-3 col-lg-4 mb-30">
                <div class="product pb-0">
                    <div class="product-thumb" style="padding-top: 0px;"> 
                    <img alt="" src="<?=$imagesBaseURL.$car->mainPic; ?>" class="img-responsive img-fullwidth" style="width: 250px; height: 250px; background-position: center center; background-repeat: no-repeat;">
                    <div class="overlay">
                        <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="<?=base_url().'ar/car/'.$brandName.'/'.$modelId.'/'.$car->carId;?>"><?=$car->carNameAr; ?></a>
                        </div>
                        <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="<?=base_url().'ar/car/'.$brandName.'/'.$modelId.'/'.$car->carId;?>">عرض التفاصيل</a>
                        </div>
                    </div>
                    </div>
                    <div class="product-details text-center bg-lighter pt-15 pb-10">
                        <a href="<?=base_url().'ar/car/'.$brandName.'/'.$modelId.'/'.$car->carId;?>"><h5 class="product-title mt-0"><?=$car->carNameAr; ?></h5></a>
                    </div>
                </div>
                </div>
                
                    <?php } ?>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
  <!-- end main-content -->