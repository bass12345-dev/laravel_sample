@extends('admin.layouts.master')

@section('title', 'Singers')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')   
        
         <a href="{{ url('/user/setlist') }}" class="btn btn-primary mt-2" id="table-switcher1" >Setlist List</a>     
         <button class="btn btn-primary mt-2"  id="add-gig-button" >Add</button>
         <button class="btn btn-danger mt-2"  id="delete-gig-button">Delete</button>     
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
            <div class="row">
            @include('admin.contents.setlist.setlist_components.table_setlist')
            
            </div>
        </div>
    </div>
</div>

 @include('admin.contents.setlist.modal.add_update_gig')

@endsection