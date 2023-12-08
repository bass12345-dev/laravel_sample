  <!-- Modal -->
                                        <div class="modal fade" id="add_gig_modal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title add-title" id="gig_modal_title">Gig</h5>
                                                        
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                     <form id="add_gig_form">
                                                    <div class="modal-body">
                                                       
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                
                                                                <input type="" name="gig_id">
                                                                <input type="" name="action" >
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                <label>Location</label>
                                                                                <input type="text" name="location" class="form-control" placeholder="Location">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                <label>Event</label>
                                                                                <textarea class="form-control" name="event"></textarea placeholder ="Event">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                  

                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                <label>Number of Sets</label>
                                                                                <select class="form-control" name="number_of_sets">
                                                                                        <?php 

                                                                                            for ($i=1; $i <=5 ; $i++) { 


                                                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                                                            }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                     <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                <label>Date</label>
                                                                                <input type="date" class="form-control" name="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
    
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                       
    
                                                        <button type="button" class="btn" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
    
                                                        <button type="submit" id="btn-add-gig" class="btn btn-primary">Add</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>