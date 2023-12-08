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
     <script src="{{ asset('assets/js/sweet.js') }}" ></script>
     <script src="{{ asset('assets/typeahead/typeahead.js') }}" ></script>
    
    <script>



    var base_url = '<?php echo url('/'); ?>';





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
        $('#add_type_form').find('input[name=action]').val('add');  
        $('#add_type_form').find('input[name=type_id]').val('');  
        $('#add_type_form').find('input[name=type]').val('');  
    });


    $(document).on('click', '#update_song_type', function(){ 
        $('#add_update_type').modal('show');
        $('#type_modal_title').text('Update Type');
        $('#btn-add-type').text('Update');
        $('#add_type_form').find('input[name=action]').val('update');  
        $('#add_type_form').find('input[name=type_id]').val($(this).data('id'));  
        $('#add_type_form').find('input[name=type]').val($(this).data('type'));  
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
                    return '<button class="btn btn-primary" data-id="'+data['artist_id']+'" data-artist="'+data['artist_name']+'" id="update_artist">Update</button> <a class="btn btn-success" href="'+base_url+'/user/view-artist-songs?id='+data['artist_id']+'" data-id="'+data['artist_id']+'" data-artist="'+data['artist_name']+'">View</a>';
                }
            },


    ],


    });  



   $('#artist_song_table').DataTable({

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


    });  



     $(document).on('click', '#add_artist', function(){ 
        $('#artist_modal_title').text('Add Type');
        $('#btn-add-artist').text('Add');
        $('#add_artist_form').find('input[name=action]').val('add');  
        $('#add_artist_form').find('input[name=artist_id]').val('');  
        $('#add_artist_form').find('input[name=artist1]').val('');  
    });


    $(document).on('click', '#update_artist', function(){ 
        $('#add_update_artist').modal('show');
        $('#artist_modal_title').text('Update Type');
        $('#btn-add-artist').text('Update');
        $('#add_artist_form').find('input[name=action]').val('update');  
        $('#add_artist_form').find('input[name=artist_id]').val($(this).data('id'));  
        $('#add_artist_form').find('input[name=artist1]').val($(this).data('artist'));  
    })

    $('#add_artist_form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var table = artist_table;
        var url = '/songs/ap-artist';
        var form = $('#add_artist_form');
        var action = $('#add_artist_form').find('input[name=action]').val();
        var modal = $('#add_update_artist');
        add_ajax(data,table,url,action,modal,form);
    });

     $(document).on('click','#delete-mutiple-artist',function (e) {

        var selectedValues = [];
        $('input[name=multi-artist]:checked').map(function() {
                    selectedValues.push($(this).val());
        });

        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            var table   = artist_table;
            var url     = '/songs/delete-artist';
            delete_ajax(selectedValues,url,table);
        }

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
                data: "artist_name",
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
                    id="update_song">Update</button> \
                    <button class="btn btn-success" \
                    id="add_singer_songs"  data-id="'+data['song_id']+'" >Add</i></button>';
                }
            },


    ],


    }); 


     $(document).on('click', '#add_singer_songs', function(){ 

        $('#add_singer_songs_modal').modal('show');

        var id = $(this).data('id');



         $.ajax({
              url: base_url + '/get_singer_songs',
              type: "POST",
              data : { id : id},
              dataType: "json",
              beforeSend: function() {

                                    Swal.fire({
                                        title: 'Getting some data',
                                        html: 'Please wait...',
                                        allowEscapeKey: false,
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                          Swal.showLoading()
                                        }
                                      });

              },
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (data) {
                $('input[name=s_song_id]').val(id)
                var singers = '';
                if (data.length > 0) {

                    for(let item of data){

                         singers += '<div class="fv-row mb-7"><input  type="checkbox" class="" name="multi_singer_songs" value="'+item.singer_id+'" '+item.x+' > <label class="required fw-bold fs-6 mb-2">'+item.singer_name+'</label></div>' 
                    }

                    $('.singer-list').html(singers);


                }

                Swal.close();

            


              },
                error :  function(xhr){
                alert('Please click add again if error occur');
                Swal.close();
                $('#add_singer_songs_modal').modal('hide');
              }


        })

     });


    $(document).on('click','#btn-add-singer-songs',function (e) {

        var selectedValues = [];
        var song_id = $('input[name=s_song_id]').val()
        $('input[name=multi_singer_songs]:checked').map(function() {
                    selectedValues.push($(this).val());
        });



        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            var table   = song_table;
            var url     = '/songs/add-singer-songs';
            var action = 'update';
            var data = { song_id : song_id , id : selectedValues};
            var modal = $('#add_singer_songs_modal');
            var form = '';

            add_ajax(data,table,url,action,modal,form);
        }



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


                                        //Setlist


    $(document).on('click','#table-switcher',function (e) {

        var list_setlist = $('#list_setlist').attr('hidden', true);
        var table_setlist = $('#table_setlist').attr('hidden', false);
        $(this).attr('hidden', true);
        $('button#table-switcher1').attr('hidden', false);
        
        $('button#delete-gig-button').attr('hidden', false);
    });

    $(document).on('click','#table-switcher1',function (e) {

        var list_setlist = $('#list_setlist').attr('hidden', false);
        var table_setlist = $('#table_setlist').attr('hidden', true);
        $('button#table-switcher').attr('hidden', false);
        $(this).attr('hidden', true);
        $('button#delete-gig-button').attr('hidden', true);

    });



    function load_gigs(){

        $.ajax({
              url: base_url + '/get-gigs',
              type: "GET",
              dataType: "json",
              beforeSend: function() {

                                    Swal.fire({
                                        title: 'Getting some data',
                                        html: 'Please wait...',
                                        allowEscapeKey: false,
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                          Swal.showLoading()
                                        }
                                      });

              },
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (data) {

                Swal.close();
                 html = '';
                if (data.length > 0) {
                for (var i = 5 ; i < data.length; i++) {

                    var style = data[i].x == true ? 'border: 1px solid green; border-radius: 15px;' : '';

                    html += '<div class="timeline-list mt-2"> \
                                            <div class="bor p-4" style="'+style+'">\
                                            <div class="timeline-post-content" >\
                                                <div class="user-profile">\
                                                    <img src="{{ asset("assets/music.png") }}" alt="">\
                                                </div>\
                                                <div class="">\
                                                    <h4>'+data[i].location+'</h4><br>\
                                                    <p class="meta-time-date">Date : '+data[i].date+' - Start Time: '+data[i].time+'</p>\
                                                    <p class="meta-time-date">Added by : '+data[i].full_name+'</p>\
                                                    <div class="">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>';


                }
                $('.number_of_gigs').text('#'+data.length);
                $('.populate_gigs').html(html);
            }


            
            var gig_table = $('#gigs_table').DataTable({

                     columns: [

                        {
                            data: null,
                            render: function (data, type, row) {
                                return '<input type="checkbox" value="'+data['gig_id']+'" name="multi-gigs" >';
                            }
                        },
                        { data: 'location' },
                        { data: 'date' },
                              {
                    data: null,
                    render: function (data, type, row) {
                        return '<button class="btn btn-primary" \
                        data-id="'+data['gig_id']+'" \
                        data-location="'+data['location']+'" \
                        data-event="'+data['event']+'" \
                        data-sets="'+data['number_of_sets']+'" \
                        data-date="'+data['date']+'" \
                        id="update_gig">Update</button> \
                        ';
                    }
                },
                       
                    ],
                    data: data,
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

            })


              }

            })


    }

    $(document).on('click','#add-gig-button',function (e) {


        $('#add_gig_modal').modal('show');
        $('#gig_modal_title').text('Add Type');
        $('#btn-add-gig').text('Add');
        $('#add_gig_form')[0].reset();
        $('#add_gig_form').find('input[name=action]').val('add');  
        $('#add_gig_form').find('input[name=gig_id]').val('');  
        

    });


    $(document).on('click', '#update_gig', function(){ 

        $('#add_gig_modal').modal('show');
        $('#gig_modal_title').text('Update Gig');
        $('#btn-add-gig').text('Update');
        $('#add_gig_form').find('input[name=action]').val('update');  
        $('#add_gig_form').find('input[name=gig_id]').val($(this).data('id')); 

        $('#add_gig_form').find('input[name=location]').val($(this).data('location')); 
        $('#add_gig_form').find('textarea[name=event]').val($(this).data('event')); 
        $('#add_gig_form').find('select[name=number_of_sets]').val($(this).data('sets')); 
        $('#add_gig_form').find('input[name=date]').val($(this).data('date')); 
        $(this).data('wedding') == 'yes' ? $( "#wedding" ).prop( "checked", true ) : $( "#wedding" ).prop( "checked", false );

    })



    $('#add_gig_form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var table = '';
        var url = '/setlist/ap-gig';
        var form = $('#add_gig_form');
        var action = $('#add_gig_form').find('input[name=action]').val();
        var modal = $('#add_gig_modal');
        add_ajax(data,table,url,action,modal,form);
        
        load_gigs();
    });



                                        //Members

    function load_members(){

        $.ajax({
              url: base_url + '/get-members',
              type: "GET",
              dataType: "json",
              beforeSend: function() {

                                    Swal.fire({
                                        title: 'Getting some data',
                                        html: 'Please wait...',
                                        allowEscapeKey: false,
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                          Swal.showLoading()
                                        }
                                      });

              },
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (data) {
                   Swal.close();

                   html = '';
                   html1 = '';

                   singer_members = '';
                   session_members = '';


                   if (data.length > 0) {

                     for (var i = 0 ; i < data.length; i++) {

                        var count_song = '<p class="user-name" >'+data[i].count_song+'</p>';
             

                        if (data[i].type == 'member') {


                             html += '<div class="item-content mb-2" ><div class="user-profile">\
                                                <div class="n-chk align-self-center text-center">\
                                                    <div class="form-check form-check-primary me-0 mb-0">\
                                                        <input class="form-check-input inbox-chkbox contact-chkbox" type="checkbox">\
                                                    </div>\
                                                </div>\
                                                <div class="user-meta-info m-2">\
                                                    <p class="user-name" data-name="Alan Green">'+data[i].full_name+'</p>\
                                                    <p class="user-work" data-occupation="Web Developer">'+data[i].position+'</p>\
                                                </div>\
                                            </div>';
                        html += ' <div class="action-btn">\
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>\
                                            </div></div>';


                        singer_members += '<a href="'+base_url+'/user/view-songs?id='+data[i].member_id+'&&option=all"><div class="item-content mb-2 view-singer-songs" data-id="'+data[i].member_id+'"   ><div class="user-profile">\
                                                    <div class="user-meta-info m-2">\
                                                        <p class="user-name" data-name="Alan Green">'+data[i].full_name+'</p>\
                                                        <p class="user-work" data-occupation="Web Developer">'+data[i].position+'</p>\
                                                    </div>\
                                                </div> <div class="action-btn">\
                                                '+count_song+'\
                                            </div></div></a>';
                          

                        }

                    
                        if (data[i].type == 'session') {

                            html1 += '<div class="item-content mb-2" ><div class="user-profile">\
                                                <div class="n-chk align-self-center text-center">\
                                                    <div class="form-check form-check-primary me-0 mb-0">\
                                                        <input class="form-check-input inbox-chkbox contact-chkbox" type="checkbox">\
                                                    </div>\
                                                </div>\
                                                <div class="user-meta-info m-2">\
                                                    <p class="user-name" data-name="Alan Green">'+data[i].full_name+'</p>\
                                                    <p class="user-work" data-occupation="Web Developer">'+data[i].position+'</p>\
                                                </div>\
                                            </div>';
                        html1 += ' <div class="action-btn">\
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>\
                                            </div></div>';



                        session_members += '<a href="'+base_url+'/user/view-songs?id='+data[i].member_id+'&&option=all"><div class="item-content mb-2 view-singer-songs" data-id="'+data[i].member_id+'"   ><div class="user-profile">\
                                                    <div class="user-meta-info m-2">\
                                                        <p class="user-name" data-name="Alan Green">'+data[i].full_name+'</p>\
                                                        <p class="user-work" data-occupation="Web Developer">'+data[i].position+'</p>\
                                                    </div>\
                                                </div> <div class="action-btn">\
                                                '+count_song+'\
                                            </div></div></div> </a>';

                        }
                        


                    }
                    $('.members_table').html(html);
                    $('.sessions_table').html(html1);
                    $('.singer_members_table').html(singer_members);
                    $('.singer_sessions_table').html(session_members);
                   }else {
                        alert('no data')
                   }

                  
              },
              error :  function(xhr){
                // alert('Please reload the page if errors occur')
                Swal.close();
              }
           })




    }



$('#song_type').on('change', function() {

    var id = $('input[name=member_id]').val();
    window.open(base_url + '/user/view-songs?id='+id+'&&option='+ $('select[id=song_type]').val(), '_self');

})


$(document).ready(function() {
   load_members();
   load_gigs();
  
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