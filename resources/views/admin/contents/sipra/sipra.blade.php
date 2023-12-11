@extends('admin.layouts.master')

@section('title', 'Songs')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
        <div class="row">
        @include('admin.contents.sipra.sipra_components.sipra_table')
       
        </div> 
        
        </div>
        
        @include('admin.contents.sipra.modals.update_status')
    </div>




@endsection