@extends('admin.layouts.master')

@section('title', 'Artist')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
        @include('admin.contents.artist.artist_components.artist_table')      
        </div>
</div>

@endsection