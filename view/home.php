


<main class="py-5 ">
<div class="banner">
			<div class="owl-carousel owl-theme"></div>
		</div> <!-- End Banner -->
      
		


    <div class="container px-4 px-lg-5">
        <h1 class="text-center mb-4">Nổi bật nhất</h1>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            showproduct($dssphome_new);
            ?>

        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <h1 class="text-center mb-4">Sản phẩm mới
        </h1>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            showproduct($dssphome_view)
            // echo var_dump($dssphome_view);

            ?>

        </div>
    </div>

    <div class="container product_special">
        <div class="col text-center">
        <a href="index.php?act=allsanpham" class="btn btn-dark text-white">Xem tất cả</a>
           
        </div>
    </div>
</main>