$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/home/getHome",
    })
    .done(function(res){
        console.log(res);});

    let table = $('.listhome').DataTable({
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
$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/home/getNhanVien",
    })
    .done(function(res){
        console.log(res);});

    let table = $('.listnhanvien').DataTable({
        ajax:{
            url:"/home/getNhanVien",
            // 'dataScr':"list",
            type:'get',
            data: function(d){
                console.log(d);
            }
        },
        columns:[
            {data:"idnhanvien"},
            {data:"tennhanvien"},
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
$().ready( function(){
    $.ajax({
        method:"GET",
        url:"/home/getMuon",
    })
    .done(function(res){
        console.log(res);});

    let table = $('.listMuonThietBi').DataTable({
        initComplete: function() {
       $('.total_sinhvien').text( this.api().data().length )
          
        },
        ajax:{
            url:"/home/getMuon",
            // 'dataScr':"list",
            type:'get',
            data: function(d){
                console.log(d);
            }
        },
        columns:[
            {data:"id"},
            {data:"idthietbi"},
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