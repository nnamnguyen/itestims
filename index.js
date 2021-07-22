$(document).ready(function () {
    $('.dangky').click(function (e) {
        e.preventDefault();
        lastName = '';
        fullName = $(".row4 input#hoten").val().split(' ');
        for (let i = 0; i < fullName.length - 1; i++) {
            lastName += fullName[i];
            if(i != fullName.length - 2){
                lastName += ' ';
            }
        }
        firstName = fullName[fullName.length - 1];
        chucVu = $('#chucvu :selected').val();
        loaiHinhTrungTam = $('#loaihinhtrungtam :selected').val();
        khuVuc = $('#khuvuc :selected').val();
        quyMo = $('#quymo :selected').val();

        $.ajax({
            type: "POST",
            url: "./api-php/insertdatalead.php",
            data: {
                'ten': firstName,
                'ho': lastName,
                'sdt': $(".row4 input#sdt").val(),
                'email': $(".row4 input#email").val(),
                'chucvu': chucVu,
                'tentruong': $(".row4 input#tentruong").val(),
                'loaihinhtrungtam': loaiHinhTrungTam,
                'khuvuc': khuVuc,
                'quymo': quyMo,
                'website': $(".row4 input#website").val(),
                'noidung': $(".row4 #noidungtuvan").val(),
            },
            caches: false,
            success: function (result) {
                alert(result);
            }
        });
    });
});