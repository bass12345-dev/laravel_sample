<div class="row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                        
                                <table id="artist_song_table" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Song Title</th>
                                            <th>Song Type</th>
                                            <th>Key</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                            <?php

                                            $i = 0;

                                            while ($i < count($song)) {

                                                 echo '<tr> <td>'.$song[$i]->song_title.'</td>
                                                            <td>'.$song[$i]->type.'</td>
                                                            <td>'.$song[$i]->key_c.'</td> 
                                                        </tr>';
                                                $i++;
                                            }


                                            // for ($i=0; $i < count($song); $i++) {

                                            //     echo $song[$i]->song_title;
                                            //     // code...
                                            // }

                                            //     foreach ($song as $roe) {
                                                    
                                            //         echo '<tr><td>Tiger Nixon</td>
                                            // <td>System Architect</td>
                                            // <td>Edinburgh</td> </tr>';
                                            //     }

                                             ?>
                                          <!--   <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td> -->
                                            
                                       
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        </div>