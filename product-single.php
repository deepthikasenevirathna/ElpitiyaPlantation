<?php include('inc/head.php'); ?>

<?php include('inc/header.php'); ?>


    <section id="breadcrumb-banner">
        <div class="container mt-3">
            <div class="bredcrumb">
                <a href="#">Home </a><i class="fas fa-chevron-right" aria-hidden="true"></i>
                <a href="#">Plantations</a> <i class="fas fa-chevron-right" aria-hidden="true"></i>
                <a href="#">Cinnamon</a> <i class="fas fa-chevron-right" aria-hidden="true"></i>
                <span>Cinnamon 02<span>

            </div>
        </div>
    </section>

    <section id="product-single">
        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <!-- left -->
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img src="images/products/product-1/1.png" alt="shoe image">
                                <img src="images/products/product-1/3.png" alt="shoe image">
                                <img src="images/products/product-1/1.png" alt="shoe image">
                                <img src="images/products/product-1/3.png" alt="shoe image">
                            </div>
                        </div>
                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="images/products/product-1/1.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="images/products/product-1/3.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="images/products/product-1/1.png" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="images/products/product-1/3.png" alt="shoe image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <!-- right -->
                    <div class="product-content">
                        <h2 class="product-title">Cinnamon - 02</h2> 
                        <div class="product-detail">                            
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>     
                        </div>
                        <div class="product-price">                            
                            <p class="new-price">Rs. 5700.00</p>
                        </div>
                        <div class="product-count mt-5">
                        <form action="#" class="d-flex form-styl">
							    <div class="qtyminus">-</div>
							    <input type="text" name="quantity" value="1" class="qty">
							    <div class="qtyplus">+</div>
							</form>
                        </div>
                        <div class="purchase-info">
                        
                            <button type="button" class="btn">
                                Add to Cart
                            </button>                            
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }
    window.addEventListener('resize', slideImage);
</script>
<script>
     $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });</script>
            
<?php include('inc/footer.php'); ?>