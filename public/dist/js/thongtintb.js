function deleteData(id){
// import { function } from './../../plugins/fullcalendar/main';
    let table = $('#ThongTinThietBiTable').DataTable();
    var csrf_token = $('meta[name="csrf_token"]').attr('content');
    Swal.fire({
        title: 'Bạn chắc chắn muốn xoá?',
        text: "Bạn sẽ không thể khôi phục tên sách này!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Thoát',
        confirmButtonText: 'Xoá',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'thongtin/getDel' + '/' + id,
                type: "GET",
            })
            .done(function (res) {
                if (res.error != false) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Xoá Không Thành Công',
                        text: 'Thiết bị đã có dữ liệu không thể xoá!',
                        footer: '<a href="">Tại sao tôi có vấn đề này?</a>'
                    })
                } else {
                    Swal.fire(
                        'Xoá Thành Công!',
                        'Bạn đã xoá thông tin sách thành công.',
                        'success'
                    )
                    table.ajax.reload(null, false);
                }
            })
        }
    })
}

$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/thongtin/getList",
    })
    .done(function(res){
        console.log(res);});

    let table = $('#ThongTinThietBiTable').DataTable({
        ajax:{
            url:"/thongtin/getList",
            // 'dataScr':"list",
            type:'get',
            data: function(d){
                console.log(d);
            }

        },
        columns:[
            {data:"id"},
            {data:"tenthietbi"},
            {data:"model"},
            {data:"thongtinmota"},
            {data:"trangthai"},
            {data:"id"}
        ],
        columnDefs:[

            {
                targets:[2,3,4,5],
                orderable: false,
            },
            {
                targets: 5,
                "render": function(data){
                    return "<a href='/thongtin/getEdit/"+data+"' class='btn btn-warning'>Sửa</a> <button onclick='deleteData("+data+")' class='btn btn-danger'>Xóa</button >";
                }

            }
        ],
        "lengthChange": false,

    });
    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
    $('#formInf').validate({
        rules: {
            tenthietbi: "required",
            model: "required",
            thongtinmota:"required",
            trangthai: "required"
        },
        messages: {
            tenthietbi : "Vui lòng điền tên thiết bị",
            model : "Vui lòng điền tên thiết bị",
            thongtinmota :  "Vui lòng điền tên thiết bị",
            trangthai :  "Vui lòng điền tên thiết bị"
        },
      
        
        
    });
    $( ".Button" ).click(function() {
        $('.Alert').html("Hello <b>world</b>!");
      });

})