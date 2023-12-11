@extends('admin.layouts.master')

@section('title', 'Singers')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')   
        <a href="{{ url('/user/setlist/table-view') }}" class="btn btn-primary mt-2" id="table-switcher">Setlist Table</a>     
        <button class="btn btn-primary mt-2"  id="add-gig-button" >Add</button>

        <div class="row layout-top-spacing">
            <div class="row">
                <div class="col-md-3">
                 <input type="text" class="form-control" name="dates">
                </div>
                 <div class="col-md-3" >
                     <button class="btn btn-primary" style="height: 45px">Search</button>
                </div>
            </div>
        </div>
       
        <div class="row layout-top-spacing">
            <div class="row">
          
            @include('admin.contents.setlist.setlist_components.list_setlist')
            @include('admin.contents.setlist.setlist_components.create_setlist')
            </div>
        </div>
    </div>
</div>

 @include('admin.contents.setlist.modal.add_update_gig')

@endsection