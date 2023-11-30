@extends('admin.layouts.master')

@section('title', 'Members')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            @include('admin.contents.members.members_components.members_table')              
        </div>
</div>


 @include('admin.contents.members.modals.add_update_members')             

@endsection