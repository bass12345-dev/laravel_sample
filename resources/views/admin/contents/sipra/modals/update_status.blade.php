  <!-- Modal -->
                                        <div class="modal fade" id="update_status_modal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title add-title" >Update Status</h5>
                                                       
                                                        <button type="button" class="btn-close discard" data-bs-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                      <form id="update_status_form">
                                                        <div class="modal-body">
                                                            <div class="add-contact-box">
                                                                <div class="add-contact-content">
                                                                        <div class="row">
                                                                            <input type="hidden" name="song_id">
                                                                            <div class="col-md-12 mb-3">
                                                                                <div class="contact-location">
                                                                                    <label>Update</label>
                                                                                   <select class="form-control" name="sipra_status">
                                                                                       <option value="to_review">To review</option>
                                                                                       <option value="siprado">Siprado</option>
                                                                                       <option value="dili_siprado">Dili Siprado</option>
                                                                                   </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                           
        
                                                            <button type="button" class="btn" class="discard" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
        
                                                            <button type="submit"  class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>