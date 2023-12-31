
@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
    
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">
        @include('admin.contents.dashboard.dashboard_components.card')      
        @include('admin.contents.dashboard.dashboard_components.gig_statistics')
        @include('admin.contents.dashboard.dashboard_components.new_songs_added')    
        @include('admin.contents.dashboard.dashboard_components.all_gigs')
    </div>
</div>
@endsection