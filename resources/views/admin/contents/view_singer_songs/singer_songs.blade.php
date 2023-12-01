@extends('admin.layouts.master')

@section('title', 'Artist')


@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.contents.components.title')        
        <!--  END BREADCRUMBS  -->
        <div class="row layout-top-spacing">

        	<div class="col-md-12">
    		
                            <div class="widget-content searchable-container list">
    
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                       
                                    </div>
    
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                        <div class="d-flex justify-content-sm-end justify-content-center">
                                            
    
                                            <div class="switch align-self-center">
                                            	<input type="hidden" name="member_id" value="<?php echo $_GET['id']; ?>">
                                                <select class="form-control" id="song_type" >


                                                	<option value="all" >All</option>

                                                	<?php
                                                		$i = 0;
                                                		while($i < count($options)){

                                                			$selected = $options[$i]->song_type_id == $_GET['option'] ? 'selected' : '';

                                                			echo '<option value="'.$options[$i]->song_type_id.'" '.$selected.'>'.$options[$i]->type.'</option>';

                                                			$i++;

                                                		}

                                                	 ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                 <div class="searchable-items list ">
                                 	 <div class="items singer_songs_table">
                                 	 		
                                 	 		<?php

                                 	 			foreach ($songs as $row) {

                                 	 				echo '<div class="item-content mb-2" ><div class="user-profile">
                                                <div class="user-meta-info m-2">
                                                    <p class="user-name" data-name="Alan Green">'.$row->song_title.'</p>
                                                    <p class="user-work" data-occupation="Web Developer">'.$row->artist_name.'</p>
                                                </div>
                                            </div>
                        				</div>';


                                 	 			}

                                 	 		?>

                                 	 </div>
                            	</div>
    
                            </div>
                        </div>

        </div>
     
     </div>
</div>

@endsection