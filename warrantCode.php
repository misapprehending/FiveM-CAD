

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#createWarrant">New Warrant</a>
                        </li>
            <!-- New Warrant -->
            <div class="modal fade" id="createWarrant" tabindex="-1" role="dialog" aria-labelledby="createWarrant" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Create Warrant</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="text" id="createWarrant-IssFor" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Issued For</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="createWarrant-Reason" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Warrant Reason</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="createWarrant-IssTime" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Issue Time</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="createWarrant-OffSig" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Officer Signature</label>
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="createWarrant-JudSig" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Judge Signature</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End New Warrant -->