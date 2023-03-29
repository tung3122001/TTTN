$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/home/getHome",
    })
    .done(function(res){
        console.log(res);});

    let table = $('#listMuonThietBi').DataTable({
        ajax:{
            url:"/home/getHome",
            // 'dataScr':"list",
            type:'get',
            data: function(d){
                console.log(d);
            }
        },
        columns:[
            {data:"id"},
            {data:"tenthietbi"},
            {data:"tennhanvien"}
        ],
        scrollY:     500,
        scroller:    true,
        "searching": false,
            "info": false,
            "lengthChange": false,
            "paging": false,
        });

    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw()
})
