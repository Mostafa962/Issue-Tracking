<script type="text/javascript">
  $('#users').DataTable({
       "processing": true,
       "serverSide": true,
        'paging'      : true,
        'info'        : true,
       "ajax": "{{ route('admin.users.show') }}",
       "columns":[
            { 
              "data": "name"
             },
              { 
              "data": "email"
             },
            {
              "mRender": function ( data, type, row ) 
              {
                var url = "{{ route('admin.users.edit','id') }}";
                url = url.replace('id', row['id']);
                return '<a class="btn btn-primary" href='+url+'><i class="fa fa-edit"></i></a>';
              },
               sortable: false,
               searchable: false,
            },
            {
              "mRender": function ( data, type, row ) {
                return '<a class="btn btn-danger delete" data-content="'+ row['id']+'"><i class="fa fa-trash"></i></a>';
              },
               sortable: false,
               searchable: false,
           }
        ]
    }).ajax.reload();
//******Dynamic List Data Table ******//
  $('#lists').DataTable({
       "processing": true,
       "serverSide": true,
        'paging'      : false,
        'info'        : false,
       "ajax": "{{ route('lists.show') }}",
       "columns":[
            { 
              "data": "name"
             },
            {
              "mRender": function ( data, type, row ) {
                //**User Can't delete default lists that created (TODO, IN PROGRESS, DONE),but can delete onther
                if (row['id']==1 || row['id']==2 || row['id']==3) {
                  return '<a class="btn btn-danger" disabled data-content="'+ row['id']+'" disabled><i class="fa fa-trash"></i></a>';
                }else {
                  return '<a class="btn btn-danger delete" data-content="'+ row['id']+'"><i class="fa fa-trash"></i></a>';
                }
              },
               sortable: false,
               searchable: false,
           }
        ]
    }).ajax.reload();

</script>