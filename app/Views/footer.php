</main>
<!-- MODALS -->
<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="ms-form-group">
                        <label>Remind me about</label>
                        <textarea class="form-control" name="reminder"></textarea>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Repeat Daily</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <select class="form-control" name="reminder-time">
                                    <option value="">12:00 pm</option>
                                    <option value="">1:00 pm</option>
                                    <option value="">2:00 pm</option>
                                    <option value="">3:00 pm</option>
                                    <option value="">4:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Notes Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="ms-form-group">
                        <label>Note Title</label>
                        <input type="text" class="form-control" name="note-title" value="">
                    </div>
                    <div class="ms-form-group">
                        <label>Note Description</label>
                        <textarea class="form-control" name="note-description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make An Appointment</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom02" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Disease</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Disease" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom04">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Add Address" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom06">Department Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom06" placeholder="Enter Department Name" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom07">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom07" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom08">Appointment Date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Appointment Date" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Sex</label>
                                        <ul class="ms-list d-flex">
                                            <li class="ms-list-item pl-0">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="radioExample" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> Male </span>
                                            </li>
                                            <li class="ms-list-item">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="radioExample" value="" checked="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> Female </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add Appointment</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make a prescription</h4>
                <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom09">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom09" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom10">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom10" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom11">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom11" placeholder="Add Address" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom12">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom12" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom13">Medication</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom13" placeholder="Acetaminophen" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom14">Period Of medication</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom14" placeholder="" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom15">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom15" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Save Prescription</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save & Print</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="report1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Generate report</h4>
                <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom16">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom16" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom17">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom17" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom22">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom22" placeholder="Add Address" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom18">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom18" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom19">Report Type</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom19" placeholder="Diseases Report" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom23">Report Period</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom23" placeholder="" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom20">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom20" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Generate Report</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Generate & Print</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/perfect-scrollbar.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/jquery-ui.min.js"> </script>

<!-- Global Required Scripts End -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/d3.v3.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/topojson.v1.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/datamaps.all.min.js"> </script>


<!-- Page Specific Scripts Start -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/slick.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/moment.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/jquery.webticker.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/Chart.bundle.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/index-chart.js"> </script>

<!-- Page Specific Scripts Finish -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/calendar.js"></script>
<!-- Page Specific Scripts Start -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/jquery.steps.min.js"> </script>
<script src="<?= base_url() ?>/theme/medjestic/assets/js/form-wizard.js"> </script>
<!-- medjestic core JavaScript -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/framework.js"></script>
<!-- Settings -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/settings.js"></script>

<!-- Page Specific Scripts Start -->
<script src="<?= base_url() ?>/theme/medjestic/assets/js/datatables.min.js"> </script>
<!-- <script src="<?= base_url() ?>/theme/medjestic/assets/js/data-tables.js"> </script> -->
</body>


<!-- Mirrored from androthemes.com/themes/html/medjestic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 01:20:51 GMT -->

</html>