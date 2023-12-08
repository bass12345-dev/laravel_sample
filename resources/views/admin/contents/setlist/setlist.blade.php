@extends('admin.layouts.master')

@section('title', 'Singers')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')   
        <button class="btn btn-primary mt-2" id="table-switcher">Setlist Table</button>     
         <button class="btn btn-primary mt-2" id="table-switcher1" hidden>Setlist List</button>     
         <button class="btn btn-primary mt-2"  id="add-gig-button" >Add</button>
         <button class="btn btn-danger mt-2"  id="delete-gig-button" hidden>Delete</button>     
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
            <div class="row">
            @include('admin.contents.setlist.setlist_components.table_setlist')
            @include('admin.contents.setlist.setlist_components.list_setlist')
            @include('admin.contents.setlist.setlist_components.create_setlist')
            </div>
        </div>
    </div>
</div>

 @include('admin.contents.setlist.modal.add_update_gig')

@endsection