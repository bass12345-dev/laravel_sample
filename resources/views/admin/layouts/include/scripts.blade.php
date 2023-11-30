 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="{{ asset('assets/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src=" {{ asset('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src=" {{ asset('assets/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src=" {{ asset('assets/src/plugins/src/waves/waves.min.js') }} "></script>
    <script src=" {{ asset('assets/layouts/horizontal-light-menu/app.js') }} "></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src=" {{ asset('assets/src/assets/js/custom.js') }} "></script>

    <script src="{{ asset('assets/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/table/datatable/custom_miscellaneous.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=" {{ asset('assets/src/plugins/src/apex/apexcharts.min.js') }} "></script>
    <script src=" {{ asset('assets/src/assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- Drag and Drop -->
    <script src=" {{ asset('assets/src/plugins/src/drag-and-drop/dragula/dragula.min.js') }} "></script>
    <script src=" {{ asset('assets/src/plugins/src/drag-and-drop/dragula/custom-dragula.js') }} "></script>


    <script src=" {{ asset('assets/src/assets/js/jquery-ui.min.js') }}"></script>
    <script src=" {{ asset('assets\src\plugins\src\contact\contacts.js') }}"></script>
     <script src=" {{ asset('assets/js/overly.js') }}"></script>
     <script src=" {{ asset('assets/js/alert/alertify.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.1/sweetalert2.min.js" integrity="sha512-lhtxV2wFeGInLAF3yN3WN/2wobmk+HuoWjyr3xgft42IY0xv4YN7Ao8VnYOwEjJH1F7I+fadwFQkVcZ6ege6kA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://unpkg.com/typeahead.js@0.11.1/dist/typeahead.bundle.js" ></script>
    
    <script>



    var base_url = '<?php echo url('/'); ?>';
    alertify.success('Success message');


        $('#html5-extensio').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });


                                            //SONG TYPE SECTION

    var type_table = $('#type_table').DataTable({

        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10,
        "ajax": {
            "url": base_url + '/songs/get-types',
            "type" : 'GET',
            "dataSrc": "",
        },

        'columns': [

            {
                data: null,
                render: function (data, type, row) {
                    return '<input type="checkbox" value="'+data['song_type_id']+'" name="multi-type" >';
                }
            },
            
             {
                data: "type",
            },
            
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="btn btn-primary" data-id="'+data['song_type_id']+'" data-type="'+data['type']+'" id="update_song_type">Update</button>';
                }
            },


    ],


    });

    $(document).on('click', '#add_type', function(){ 
        $('#type_modal_title').text('Add Type');
        $('#btn-add-type').text('Add');
        $('input[name=action]').val('add');  
        $('input[name=type_id]').val('');  
        $('input[name=type]').val('');  
    });


    $(document).on('click', '#update_song_type', function(){ 
        $('#add_update_type').modal('show');
        $('#type_modal_title').text('Update Type');
        $('#btn-add-type').text('Update');
        $('input[name=action]').val('update');  
        $('input[name=type_id]').val($(this).data('id'));  
        $('input[name=type]').val($(this).data('type'));  
    })

    $('#add_type_form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var table = type_table;
        var url = '/songs/ap-type';
        var form = $('#add_type_form');
        var action = $('input[name=action]').val();
        var modal = $('#add_update_type');
        add_ajax(data,table,url,action,modal,form);
    });

     $(document).on('click','#delete-mutiple-type',function (e) {

        var selectedValues = [];
        $('input[name=multi-type]:checked').map(function() {
                    selectedValues.push($(this).val());
        });

        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            var table   = type_table;
            var url     = '/songs/delete-type';
            delete_ajax(selectedValues,url,table);
        }

     });


                                            //ARTIST SECTION


       var artist_table = $('#artist_table').DataTable({

        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10,
        "ajax": {
            "url": base_url + '/songs/get-artists',
            "type" : 'GET',
            "dataSrc": "",
        },

        'columns': [

            {
                data: null,
                render: function (data, type, row) {
                    return '<input type="checkbox" value="'+data['artist_id']+'" name="multi-artist" >';
                }
            },
            
             {
                data: "artist_name",
            },
            
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="btn btn-primary" data-id="'+data['artist_id']+'" data-type="'+data['artist_name']+'" id="update_artist">Update</button>';
                }
            },


    ],


    });  


                                                //SONGS SECTION
    var song_table = $('#song_table').DataTable({

        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10,
        "ajax": {
            "url": base_url + '/songs/get-songs',
            "type" : 'GET',
            "dataSrc": "",
        },

        'columns': [

            {
                data: null,
                render: function (data, type, row) {
                    return '<input type="checkbox" value="'+data['song_id']+'" name="multi-songs" >';
                }
            },
            
             {
                data: "song_title",
            },
            
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="btn btn-primary" \
                    data-id="'+data['song_id']+'" \
                    data-song="'+data['song_title']+'" \
                    data-artist-id="'+data['artist_id']+'" \
                    data-artist-name="'+data['artist_name']+'" \
                    data-song-type="'+data['s_type']+'" \
                    data-key="'+data['key_c']+'" \
                    data-wedding="'+data['wedding_song']+'" \
                    id="update_song">Update</button>';
                }
            },


    ],


    });  


    $(document).on('click', '#add_song', function(){ 
        $('#add_song_form')[0].reset();
        $('#song_modal_title').text('Add Type');
        $('#btn-add-song').text('Add');
        $('#add_song_form').find('input[name=action]').val('add');  
        $('#add_song_form').find('input[name=song_id]').val('');  

        // $('#add_song_form').find('input[name=type]').val('');  
    });



    $(document).on('click', '#update_song', function(){ 

        $('#add_update_songs').modal('show');
        $('#song_modal_title').text('Update Song');
        $('#btn-add-song').text('Update');
        $('#add_song_form').find('input[name=action]').val('update');  
        $('#add_song_form').find('input[name=song_id]').val($(this).data('id')); 

        $('#add_song_form').find('input[name=song_title]').val($(this).data('song')); 
        $('#add_song_form').find('input[name=artist_id]').val($(this).data('artist-id')); 
        $('#add_song_form').find('input[name=artist]').val($(this).data('artist-name')); 
        $('#add_song_form').find('select[name=song_type]').val($(this).data('song-type'));  
        $('#add_song_form').find('input[name=key_chords]').val($(this).data('key')); 
        $(this).data('wedding') == 'yes' ? $( "#wedding" ).prop( "checked", true ) : $( "#wedding" ).prop( "checked", false );

    })

    $('#add_song_form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var table = song_table;
        var url = '/songs/au-song';
        var form = $('#add_song_form');
        var action = form.find('input[name=action]').val();
        var modal = $('#add_update_songs');
        add_ajax(data,table,url,action,modal,form);
    });




    $(document).on('click','#delete-mutiple-songs',function (e) {

        var selectedValues = [];
        $('input[name=multi-songs]:checked').map(function() {
                    selectedValues.push($(this).val());
        });

        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            var table   = song_table;
            var url     = '/songs/delete-songs';
            delete_ajax(selectedValues,url,table);
        }

     });

     function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }



       $('input[name="artist"]').typeahead({
            hint: true,
            highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: base_url + '/songs/search_artist?key=' + $('input[name="artist"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        processAsync($.map(data, function (row) {
                            artist_name = capitalizeFirstLetter(row.artist_name);
                            
                            return [{
                                'artist_id': row.artist_id,
                                'artist_name': artist_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'artist',
            displayKey: 'artist_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Artist</small></li>',
               
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.artist_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            $('input[name="artist"]').val(data.artist_name)
            $('input[name="artist_id"]').val(data.artist_id);
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                $('input[name="artist"]').val(data.artist_name);
                $('input[name="artist_id"]').val(data.artist_id);
            } catch (error) {
                // error here...
            }
        });





    function delete_ajax(data='',url='',table=''){

        Swal.fire({
        title: "Are you sure?",
        text: "You wont be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + url,
                            data: {id:data},
                            cache: false,
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }, 
                            beforeSend : function(){

                                    Swal.fire({
                                        title: 'Deleting',
                                        html: 'Please wait...',
                                        allowEscapeKey: false,
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                          Swal.showLoading()
                                        }
                                      });

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                                        "",
                                        "Deleted Successfully",
                                        "success"
                                    );
                                  table.ajax.reload();
                                
                               }else {
                                alert(data.message)
                               }
                                
                            },

                             error :  function(xhr){

                                alert('something wrong');
                                Swal.close()
                                JsLoadingOverlay.hide();
                              }

                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });



    }

    function add_ajax(data='',table='',url='',action='',modal='',form=''){

       $.ajax({
              url: base_url + url,
             
              type: "POST",
              data: data,
              dataType: "json",
              beforeSend: function() {

                JsLoadingOverlay.show({
                    'overlayBackgroundColor': '#666666',
                    'overlayOpacity': 0.6,
                    'spinnerIcon': 'pacman',
                    'spinnerColor': '#000',
                    'spinnerSize': '2x',
                    'overlayIDName': 'overlay',
                    'spinnerIDName': 'spinner',
                  }); 

              },
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (data) {
                if (data.response) {
                   JsLoadingOverlay.hide();
                   if (action == 'add' ) {
                   form[0].reset()
                   }else if (action == 'update') {
                    modal.modal('hide')
                   }
                   alert(data.message);
                   table.ajax.reload();
                    
                }else {
                    JsLoadingOverlay.hide();
                   alert(data.message)
                }

              },
              error :  function(xhr){

                alert('something wrong')
                JsLoadingOverlay.hide();
              }
           })

    }

    </script>