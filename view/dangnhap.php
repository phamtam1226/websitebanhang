<main class="pb-5">
    <div class="container mt-5">
        <div class="box-form mx-auto p-3" style="width: 50%; border: 1px solid grey; ">
            <h1 class="text-center mb-4 ">ĐĂNG NHẬP</h1>
            <form action="index.php?act=dangnhapuser" method="POST" id="fname_login" onsubmit="return checkLogin(this)">
                <div class="form-group mb-3">
                    <label for="my-input">Name:</label>
                    <input id="my-input" class="form-control" type="text" name="user" required>
                </div>
                <div class="form-group mb-3">
                    <label for="my-input">Password:</label>
                    <input id="my-input" class="form-control" type="password" name="pass" required>
                </div>
                <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-outline-secondary bg-dark  " >
            </form>
        </div>
    </div>
</main>
<script>
function checkLogin(frm) {
    var user = frm.user;
    if (user.length == "") {
        alert('Lỗi');
        user.focus();
        return false;
    }
    return true;
}
</script>