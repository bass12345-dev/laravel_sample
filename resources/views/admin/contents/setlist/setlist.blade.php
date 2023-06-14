@extends('admin.layouts.master')

@section('title', 'Singers')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')   
        <button class="btn btn-primary mt-2">Setlist Table</button>     
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
            <div class="row">
            @include('admin.contents.setlist.setlist_components.list_setlist')
            @include('admin.contents.setlist.setlist_components.create_setlist')
            </div>
        </div>
    </div>
</div>

@endsection