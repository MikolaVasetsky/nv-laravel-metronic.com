jQuery(document).ready(function() {
    $('#users_ajax').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/users/list',
            method: 'POST'
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'admin', name: 'admin'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var columnClass = column.footer().className;
                if(columnClass != 'non_searchable' && columnClass != 'admin_search'){ //add input if not admin field and have search
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                    .on('change', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                } else if ( columnClass == 'admin_search' ) { // add select for admin fiela
                    var selectList = document.createElement("select");
                    var arrayOpt = ['All', 'User', 'Admin'];
                    for (var i = 0; i < arrayOpt.length; i++) { //search in array for add options in select
                        var option = document.createElement("option");
                        if ( i > 0 ) {
                            option.value = i-1;
                        } else {
                            option.value = '';
                        }
                        option.text = arrayOpt[i];
                        selectList.appendChild(option);
                    }
                    $(selectList).appendTo($(column.footer()).empty())
                    .on('change', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                }
            });
        }
    });
});