function deleteData(id){
    let table = $('#thongtinnhanvien').DataTable();
    var csrf_token = $('meta[name="csrf_token"]').attr('content');
    Swal.fire({
    title: 'Bạn chắc chắn muốn xoá?',
    text: "Bạn sẽ không thể khôi phục thông tin này!",
    icon: 'warning',
    showCancelButton: true,
         confirmButtonColor: '#d33',
         cancelButtonColor: '#3085d6',
         cancelButtonText: 'Thoát',
         confirmButtonText: 'Xoá',
     }).then((result) => {
        // if (result.isConfirmed) {
            $.ajax({
                url: 'nhanvien/getDelNhanVien' + '/' + id,
                type: "GET",

             })
                 .done(function (res) {
                          Swal.fire(
                         'Xoá Thành Công!',
                        'Bạn đã xoá thông tin nhân viên thành công.',
                        'success'
                     )
                    table.ajax.reload(null, false);
                     
                 })
        //}
     }
     )
}

$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/nhanvien/getListNhanVien",
    })
    .done(function(res){
        console.log(res);});

    let table = $('#thongtinnhanvien').DataTable({
        ajax:{
            url:"/nhanvien/getListNhanVien",
            // 'dataScr':"list",
            type:'get',
            // data: function(d){
            //     console.log(d);
            // }
        },
        columns:[
            {data:"idnhanvien"},
            {
                data:"avata",
                render: function (data, type, row){
                    let url = window.location.host + '/images/' + data;
                    return `<img src="${url}"/>`
                }
            },
            {data:"tennhanvien"},
            {data:"email"},
            {data:"phone"},
            {data:"diachi"},
            {data:"manv"},
            {data:"trangthainv"},
            {data:"idnhanvien"}
        ],
        columnDefs:[

            {
                // "targets": "_all",
                targets: [1,2,3,4,5,6,7],
                "defaultContent":"-",
                orderable: false,
            },
            {
                targets: 8,
                "render": function(data){
                    return "<a href='/nhanvien/getEditNhanVien/"+data+"' class='btn btn-warning'>Sửa</a> <button onclick='deleteData("+data+")' class='btn btn-danger'>Xóa</button >";
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
    $('#formnhanvien').validate({
        rules: {
            avata:"required",
            tennhanvien: "required",
            email: "required",
            phone:"required",
            diachi:"required",
            manv:"required",
            trangthainv: "required"
        },
        messages: {
            avata: "Chọn hình ảnh phù hợp",
            tennhanvien : "Vui lòng điền tên nhân viên",
            email : "Vui lòng điền email của nhân viên",
            phone :  "Vui lòng điền số điện thoại",
            diachi : "Vui lòng điền địa chỉ",
            manv : "Vui lòng điền mã nhân viên",
            trangthainv :  "Vui lòng điền trạng thái nhân viên"
        }
    });
    $( ".Button" ).click(function() {
        $('.Alert').html("Hello <b>world</b>!");
      });
})