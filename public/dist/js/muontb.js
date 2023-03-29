function deleteData(id){
    let table = $('#thongtinmuon').DataTable();
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
                url: 'muon/getDelMuon' + '/' + id,
                type: "GET",
             })
                 .done(function (res) {
                          Swal.fire(
                         'Xoá Thành Công!',
                        'Bạn đã xoá thông tin thành công.',
                        'success'
                     )
                    table.ajax.reload(null, false);
                     
                 })
       // }
     }
     )
}

$().ready( function(){
    // $.ajax({
    //     method:"GET",
    //     url:"/muon/getListMuon",
    // })
    // .done(function(res){
    //     console.log(res);});

    let table = $('#thongtinmuon').DataTable({
        ajax:{
            url:"/muon/getListMuonThietBi",
            // 'dataScr':"list",
            type:'get',
            data: function(d){
                console.log(d);
            }
        },
        columns:[
            {data:'id'},
            {data:"tenthietbi"},
            {data:"tennhanvien"},
            {data:"ngaymuon"},
            {data:"thongtinmota"},
            {data:"trangthaimuon"},
            {data:"id"}
        ],
        columnDefs:[

            {
                //  "targets": "_all",
                targets: [3,4,5],
                // "defaultContent":"-",
                orderable: false,
            },
            {
                targets: 6,
                "render": function(data){
                    return "<a href='/muon/getEditMuon/"+data+"' class='btn btn-warning'>Sửa</a> <button onclick='deleteData("+data+")' class='btn btn-danger'>Xóa</button >";
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
    $('#formmuon').validate({
        rules: {
            IDNhanVien:"required",
            IDThietBi: "required",
            ngaymuon: "required",
            trangthaimuon:"required",
            thongtinmota: "required"
        },
        messages: {
            IDNhanVien : "Chọn hình ảnh phù hợp",
            IDThietBi : "Vui lòng điền tên nhân viên",
            ngaymuon : "Vui lòng điền ngày mượn",
            trangthaimuon :  "Vui lòng chọn trạng thái",
            thongtinmota :  "Vui lòng điền thông tin mô tả"
        }
    });
})