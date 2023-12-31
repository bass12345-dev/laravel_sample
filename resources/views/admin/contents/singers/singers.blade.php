@extends('admin.layouts.master')

@section('title', 'Singers')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        @include('admin.contents.singers.singer_components.tables.band_members')               
        @include('admin.contents.singers.singer_components.tables.sessions')                         
        </div>

</div>

@endsection