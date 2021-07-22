<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký dùng thử</title>
    <script src="./vendor/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="./registryform/index.js"></script> -->
    <script src="index.js"></script>
    <link rel="stylesheet" href="./vendor/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="./vendor/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="headertop">
        <div class="row">
            <div class="col-md-3 offset-1 registryleftinfo">
                <div class="registryinfo">
                    <img src="./images/logo_white.png" alt="" />
                    <h4>Xin chào!!!</h4>
                    <p>Đăng ký ngay để được dùng thử 14 ngày!</p>
                </div>
            </div>
            <div class="col-md-7 registryform">
                <div class="row row3">
                    <div class="col-md-12 text-center">
                        <h2>Đăng ký dùng thử</h2>
                    </div>
                </div>
                <div class="row row4">
                    <div class="container">
                        <h4>Thông tin cá nhân</h4>
                        <form class="form1">
                            <div class="form-group">
                                <label for="inputAddress">Họ và tên</label>
                                <input type="text" class="form-control" id="hoten" placeholder="Nhập họ tên">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Số điện thoại</label>
                                    <input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chức vụ</label>
                                <select class="form-control" id="chucvu">
                                    <option value="" selected="selected" class="gf_placeholder">(Chức vụ của bạn)</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Marketing_Manager">Trưởng phòng Marketing</option>
                                    <option value="Sales_Manager">Trưởng phòng Kinh doanh</option>
                                    <option value="Head_of_Customer_Care">Trưởng phòng Chăm sóc khách hàng</option>
                                    <option value="IT_Manager">Trưởng phòng IT</option>
                                    <option value="Marketing_Staff">Nhân viên Marketing</option>
                                    <option value="Salesman">Nhân viên Bán hàng</option>
                                    <option value="Customer_Care_Staff">Nhân viên Chăm sóc khách hàng</option>
                                    <option value="IT_Staff">Nhân viên IT</option>
                                    <option value="Others">Khác</option>
                                </select>
                            </div>
                        </form>
                        <h4>Thông tin trường/trung tâm</h4>
                        <form class="form2">
                            <div class="form-group">
                                <label for="inputAddress">Tên trường</label>
                                <input type="text" class="form-control" id="tentruong" placeholder="Tên trường/trung tâm">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Loại hình trung tâm</label>
                                <select class="form-control" id="loaihinhtrungtam">
                                    <option value="" selected="selected" class="gf_placeholder">(Loại hình trung tâm)</option>
                                    <option value="Foreign_Language_School">Trường Ngoại ngữ</option>
                                    <option value="Skills_Training_Center">Trường Đào tạo kỹ năng</option>
                                    <option value="Study_Abroad_Advisory_School">Trường Tư vấn du học</option>
                                    <option value="University">Trường Trung cấp / Cao đẳng / Đại học</option>
                                    <option value="International_School">Trường Quốc tế</option>
                                    <option value="Preschool">Trường Mầm non</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Khu vực (Tỉnh/Thành)</label>
                                <select class="form-control" id="khuvuc">
                                    <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                    <option value="Đắk Nông">Đắk Nông</option>
                                    <option value="Điện Biên">Điện Biên</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Hòa Bình">Hòa Bình</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Thừa Thiên - Huế">Thừa Thiên - Huế</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                    <option value="Phú Yên">Phú Yên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Quy mô trường/trung tâm</label>
                                <select class="form-control" id="quymo">
                                    <option value="less_than_300_students">Dưới 300 học viên</option>
                                    <option value="300_1500_students">300 - 1500 học viên</option>
                                    <option value="1500_5000_students">1500 - 5000 học viên</option>
                                    <option value="5000_10 000_students">5000 - 10 000 học viên</option>
                                    <option value="more_than_10 000_students">Trên 10 000 học viên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Website công ty</label>
                                <input type="text" class="form-control" id="website" placeholder="Website">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Nội dung cần tư vấn</label>
                                <textarea class="form-control" placeholder="Nhập nội dung mà bạn mong muốn tư vấn" id="noidungtuvan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary dangky">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>