<?php include('inc/head.php'); ?>

<?php include('inc/header.php'); ?>

<section id="cart">
    <div class="container mt-5 mb-5">
        <div style="text-align: center;">
            <h3><i class="fa-solid fa-bag-shopping"></i> My Cart</h3>
        </div>
        <div class="row mt-5">
            <div class="col-md-9" style="border-top: 2px solid #000;">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <tbody>
                            <tr style="border-style:hidden !important; text-align:center;">
                                <td></td>
                                <td>Product Name</td>
                                <td>Each</td>
                                <td>Qty</td>
                                <td>Total</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="images/cart/product-1.jpg" alt=""></td>
                                <td>Cinnamon - 02</td>
                                <td>Rs. 5700.00</td>
                                <td>
                                    <div class="product-count">
                                        <form action="#" class="d-flex form-styl">
                                            <div class="qtyminus">-</div>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <div class="qtyplus">+</div>
                                        </form>
                                    </div>
                                </td>
                                <td>Rs. 5700.00</td>
                                <td><i class="fa-regular fa-trash-can" style="color:red;"></i></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table align-middle table-borderless mt-5">
                        <tbody>
                            <tr style="font-weight: bold;">
                                <td>1 Items</td>
                                <td style="text-align: right;">Rs. 5700.00</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table align-middle table-borderless">
                    <tbody>
                        <tr style="border-style:none !important;">
                            <td>Estiamate Total</td>
                            <td style="text-align: right;">Rs. 5700.00</td>
                        </tr>

                    </tbody>
                </table>
                <div style="text-align: center;" class="mt-5">
                    <button type="button" id="myBtn" class="btn btn-order-sub">Submit Your Order</button>
                </div>

                <!-- Modal HTML -->
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Inquiry Form</h5>                                
                            </div>
                            <div class="modal-body">

                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="ContactNo" placeholder="Contact Number">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="City" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="Email" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <textarea type="text" class="form-control" id="Message" placeholder="Enter Message Here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">                                
                                <button type="button" class="btn btn-submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>





<script>
    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById("myBtn");

        btn.addEventListener("click", function() {
            var myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.show();
        });
    });
</script>

<script>
    $(".qtyminus").on("click", function() {
        var now = $(".qty").val();
        if ($.isNumeric(now)) {
            if (parseInt(now) - 1 > 0) {
                now--;
            }
            $(".qty").val(now);
        }
    })
    $(".qtyplus").on("click", function() {
        var now = $(".qty").val();
        if ($.isNumeric(now)) {
            $(".qty").val(parseInt(now) + 1);
        }
    });
</script>

<?php include('inc/footer.php'); ?>