// Editor for product
CKEDITOR.replace('editor-product-1');
CKEDITOR.replace('editor-product-2');

// Editor for category
CKEDITOR.replace('editor-category');



// Đổi dữ liệu từ input qua slug tự động
function ChangeToSlug() {
    var slug;

    //Lấy text từ thẻ input title
    slug = document.getElementById("slug").value;
    slug = slug.toLowerCase();
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('convert_slug').value = slug;
}

$(document).ready(function () {
    // Check Admin Password is correct or not
    $("#current_pwd").keyup(function () {
        var current_pwd = $("#current_pwd").val();
        //alert(current_pwd);
        $.ajax({
            type: 'post',
            url: '/admin/check-current-pwd',
            data: {
                current_pwd: current_pwd
            },
            success: function (resp) {
                if (resp == "false") {
                    $("#chkCurrentPwd").html("<font color=red>Mật khẩu hiện tại sai rồi!!!</font>");
                } else if (resp == "true") {
                    $("#chkCurrentPwd").html("<font color=green>Mật khẩu hiện tại đúng rồi</font>");
                }
            },
            error: function () {
                alert("Bị lỗi !!!");
            }
        });
    });
});


// $(document).ready(function () {
//     load_gallery();

//     function load_gallery(){
//         var pro_id = $('.pro_id').val();
//         var _token = $('input[name="_token"]').val();
//         //alert(pro_id);
//         $.ajax({
//             url : "{{url('/select-gallery')}}",
//             method: "POST",
//             data:{pro_id:pro_id,_token:_token},
//             success:function(data){
//                 $('#gallery_load').html(data);
//             }
//         });
//     }

//     $('#file').change(function(){
//         var error = '';
//         var files = $('#file')[0].files;

//         if(files.length = 5){
//             error += "<p>Bạn chỉ được chọn tối đa 5 ảnh</p>";
//         }else if(files.length = ''){
//             error += "<p>Bạn không được bỏ trống ảnh</p>";
//         }else if(files.length > 2000000){
//             error += "<p>File ảnh không được lớn hơn 2 MB</p>";
//         }

//         if(error == ''){

//         }else {
//             $('#file').val('');
//             $('#error_gallery').html('<span class="text-danger">'+error+'</span>'); // Hiện tại ko in lỗi ra được
//             return false;
//         }
//     });
// });
