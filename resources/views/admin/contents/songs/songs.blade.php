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
        @include('admin.contents.songs.songs_components.songs_table')
        @include('admin.contents.songs.songs_components.artist_table')
        </div> 
        <div class="row">
         @include('admin.contents.songs.songs_components.type_table')
        </div>       
        </div>
         @include('admin.contents.songs.modals.add_singer_songs_modal')
         @include('admin.contents.songs.modals.add_update_song')
         @include('admin.contents.songs.modals.add_update_artist')
         @include('admin.contents.songs.modals.add_update_type')

    </div>




@endsection