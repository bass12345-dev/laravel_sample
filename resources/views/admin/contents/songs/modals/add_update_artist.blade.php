  <!-- Modal -->
                                        <div class="modal fade" id="add_update_artist" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title add-title" id="artist_modal_title">Add Artist</h5>
                                                       
                                                        <button type="button" class="btn-close discard" data-bs-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                      <form id="add_artist_form">
                                                        <div class="modal-body">
                                                            <div class="add-contact-box">
                                                                <div class="add-contact-content">
                                                                  
                                                                        <input type="hidden" name="artist_id">
                                                                         <input type="hidden" name="action" >
                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <div class="contact-location">
                                                                                    <input type="text" name="artist" class="form-control" placeholder="Artist">
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                           
        
                                                            <button type="button" class="btn" class="discard" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
        
                                                            <button type="submit" id="btn-add-artist" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>