     <!-- Modal -->
                                        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title add-title" id="member_modal_title">Add Member</h5>
                                                       
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                     <form id="add_member_form">
                                                    <div class="modal-body">
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                <input type="hidden" name="action">
                                                                <input type="hidden" name="member_id">
                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-name">
                                                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                <label>Position</label>
                                                                                <select id="position" name="position" class="form-control">
                                                                                   <?php
                                                                                        $i = 0;
                                                                                        while (count($position) > $i) {
                                                                                           
                                                                                           echo '<option value="'.$position[$i].'">'.ucfirst($position[$i]).'</option>';

                                                                                           $i++ ;
                                                                                        }

                                                                                      
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
    
                                                               
    
                                                                     <div class="row">
                                                                        <div class="col-md-12 mb-3">
                                                                            <div class="contact-location">
                                                                                 <label>Type</label>
                                                                                <select id="type" name="type" class="form-control">
                                                                                    <option value="member">Member</option>
                                                                                    <option value="session">Session</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
    
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                       
    
                                                        <button type="button" class="btn" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
    
                                                        <button type="submit
                                                        " id="btn-add-member" class="btn btn-primary">Add</button>
                                                    </div>
                                                     </form>
                                                </div>
                                            </div>
                                        </div>