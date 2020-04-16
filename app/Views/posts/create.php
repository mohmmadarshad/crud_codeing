<?php
include_once(APPPATH . '/Views/layouts/header.php');
include_once(APPPATH . '/Views/layouts/navbar.php');
?>
<!-- <link rel="stylesheet" href="style.css"> -->
<div class="container-fluid">
    <div class="row">
        <?php
        include_once(APPPATH . '/Views/layouts/sideNav.php');
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            
            <div class="row">
                <form class="needs-validation" method="POST" action="/"  novalidate>
                    <div class="form-row">
                        <div class="col">
                            <label for="validationCustom01">Name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name" required>
                            <div class="valid-feedback">
                                Look Good
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="validationCustom02">Email Id</label>
                            <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="Email ID" required>
                            <div class="valid-feedback">
                                Look Good
                            </div>
                            <div class="invalid-feedback">
                                Please provide a Email.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom03">Mobile No.</label>
                            <input type="text" class="form-control" id="validationCustom03" name="mobile" placeholder="Mobile No." required>
                            <div class="valid-feedback">
                                Look Good
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Mobile No.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Date of Birth</label>
                            <input type="date" class="form-control" id="validationCustom04" name="dob" placeholder="Date of Birth" required>
                            <div class="valid-feedback">
                                Look Good
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Date of Birth.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Pin Code</label>
                            <input type="Pin Code" class="form-control" id="validationCustom05" name="pincode" placeholder="Pin Code" required>
                            <div class="valid-feedback">
                                Look Good
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Pin Code.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                    alert($('#validationCustom01').val());
                </script>
            </div>
        </main>
    </div>
</div>


<?php
include_once(APPPATH . '/Views/layouts/footer.php');

// include_once('../layouts/footer.php');

?>