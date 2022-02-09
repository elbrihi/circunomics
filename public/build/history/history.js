$(document).ready(function () {
   $.ajax({
       url: 'http://localhost:8181/api/histries',
       success:function (data)
       {
           $('#histories').DataTable( {
               pagination: "bootstrap",
               filter:true,
               data: data,
               destroy: true,
               lengthMenu:[5,10,25,50,100],
               pageLength: 100,
               "columns": [
                   {     "data"     :     "commit"     },
                   {     "data"     :     "name"     },
                   {     "data"     :     "email"     },
                   {     "data"     :     "date"     },
               ],
               columnDefs: [
                   {   targets: 0,
                       "render": function ( data, type, row ) {
                           //$(row).addClass( 'important' );
                           console.log(type)
                           if (typeof row.commit === 'string')
                           {
                               // console.log(typeof row.commit)
                                $('td').addClass( 'important' );
                           }
                           // console.log(typeof row.commit)
                           return data
                       },

                   },


               ],
           } );

       }
   })

})
