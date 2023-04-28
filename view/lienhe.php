<main class="pb-5">
    <div class="container mt-5">
        <div class="box-form mx-auto p-3" style="width: 50%;border: 1px solid black; ">
            <h1 class="text-center mb-4">LIÊN HỆ</h1>
            <form action="index.php?act=lienheshop" method="post" id="">
                <div class="form-group mb-3">
                    <label for="my-input">Họ tên:</label>
                    <input id="my-input" class="form-control" type="text" name="hoten" required>
                </div>
               
                <div class="form-group mb-3">
                    <label for="my-input">Email:</label>
                    <input id="my-input" class="form-control" type="text" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="my-input">Nội dung:</label>
                    <input id="my-input" class="form-control" type="text" name="noidung" required>
                </div>
               
                <input type="submit" name="lienhe" value="Gửi" class="btn btn-dark mx-auto" >
            </form>
        </div>
    </div>
</main>