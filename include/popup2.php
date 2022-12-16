<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="logo col-12 text-center  mb-3 mb-md-5 mb-lg-0">
                    <a class="d-block" href="index.php">
                        <img loading="lazy" src="assets/images/site-logo-dark.webp" alt="Himachal Travels" style="max-width: 60%;">
                    </a>
                </div><!-- logo end -->
                <!-- <h4 class="text-center">Hay before you go please fill this form </h4> -->
                <form id="contact-form" action="function.php" method="get" role="form">
                    <div class="error-container"></div>
                    <img loading="lazy" src="assets/images/popup2.jpg" alt="<?= $brandname ?>" style="
    padding-bottom: 25px;
">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label>Name</label> -->
                                <input class="form-control form-control-name" name="name" id="name" placeholder="Name" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <input class="form-control form-control-email" name="email" id="email" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label>Mobile</label> -->
                                <input class="form-control form-control-name" name="name" id="tel" placeholder="Mobile" type="tel" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label>Place to Visit</label> -->
                                <input class="form-control form-control-email" name="place" id="text" placeholder="Place to Visit" type="text" required>
                            </div>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success solid blank" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function popupopen() {
        $("#exampleModalCenter").modal('show')
    };
</script>