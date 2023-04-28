<main>
    <div class="container p-3">
        <div class="row">

            <div class="col-sm-3">
                <img src="./uploads/<?= $kq[0]['img'] ?>" class="" style="width: 300px;height: 300px; float: left;" alt="">
                
                <h2><?= $kq[0]['tensp'] ?></h2>
                <p><b>Giá</b>: <?= $kq[0]['gia'] ?></p>
               
            </div>
            
            <div class="col-sm-6">
                
                <h5>Thông số kỹ thuật</h5>
                <table class="table table-striped">

                    <tr>
                        <td>Màn hình:</td>
                        <td><?= $kq[0]['manhinh'] ?></td>

                    </tr>
                    <tr>
                        <td>Hệ điều hành:</td>
                        <td><?= $kq[0]['hedieuhanh'] ?></td>

                    </tr>
                    <tr>
                        <td>Camera sau:</td>
                        <td>2 camera 12 MP</td>

                    </tr>
                    <tr>
                        <td>Camera trước:</td>
                        <td>7 MP</td>

                    </tr>
                    <tr>
                        <td>Chip:</td>
                        <td>Apple A10 Fusion</td>

                    </tr>
                    <tr>
                        <td>Ram:</td>
                        <td>3GB</td>

                    </tr>
                    <tr>
                        <td>Dung lượng lưu trữ:</td>
                        <td>128 GB</td>

                    </tr>
                    <tr>
                        <td>SIM:</td>
                        <td>1 Nano SIMHỗ trợ 4G
</td>

                    </tr>
                    <tr>
                        <td>Pin, Sạc:</td>
                        <td>2900 mAh</td>

                    </tr>



                </table>

               
                <form action="index.php?act=addcart" method="post">
                    <input type="number" name="sl" class="w-25" id="" max="50" min="1" value="1">
                    <input type="submit" value="Đặt hàng" name="addcart" class="btn btn-dark">

                    <input type="hidden" name="id" id="" value="<?= $kq[0]['id'] ?>">
                    <input type="hidden" name="tensp" id="" value="<?= $kq[0]['tensp'] ?>">
                    <input type="hidden" name="img" id="" value="<?= $kq[0]['img'] ?>">
                    <input type="hidden" name="gia" id="" value="<?= $kq[0]['gia'] ?>">
                </form>
            </div>
        </div>
    </div>
</main>