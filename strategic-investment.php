<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>

<section id="breadcrumb-banner">
    <div class="main-header-img" data-aos="fade-up">
        <div class="w-100" style="height: 440px;  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)), url(images/corporate-sustainability/corporate-sustainability.jpg);  background-position: 40% 30%;  background-repeat: no-repeat;  background-size: cover;" alt="Breadcrumb Banner">
            <div class="inner-topic">
                <h3>Strategic Investment</h3>
            </div>
        </div>
    </div>
    <div class="container mt-3" data-aos="fade-up">
        <div class="bredcrumb">
            <a href="#">Home </a><i class="fas fa-chevron-right" aria-hidden="true"></i> <span>Strategic Investment<span>

        </div>
    </div>
</section>

<section id="si-nav" data-aos="fade-up">
    <div class="container mt-3">
        <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="horticulture-tab" data-bs-toggle="pill" data-bs-target="#horticulture" type="button" role="tab" aria-controls="horticulture" aria-selected="true">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/horticulture-green.png" alt="Horticulture Crops" width="40">
                    </span>
                    <h6>Horticulture<br>Crops</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cinnamon-tab" data-bs-toggle="pill" data-bs-target="#cinnamon" type="button" role="tab" aria-controls="cinnamon" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/cinnamon-green.png" alt="Cinnamon Value Chain" width="40">
                    </span>
                    <h6>Cinnamon Value<br>Chain</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="palm-oil-tab" data-bs-toggle="pill" data-bs-target="#palm-oil" type="button" role="tab" aria-controls="palm-oil" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/palm-oil-green.png" alt="Palm Oil Processing" width="40">
                    </span>
                    <h6>Palm Oil<br>Processing</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="adventure-tab" data-bs-toggle="pill" data-bs-target="#adventure" type="button" role="tab" aria-controls="adventure" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/adventure-game-green.png" alt="" width="40">
                    </span>
                    <h6>Adventure<br>Park</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="solar-energy-tab" data-bs-toggle="pill" data-bs-target="#solar-energy" type="button" role="tab" aria-controls="solar-energy" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/solar-energy-green.png" alt="" width="40">
                    </span>
                    <h6>Renewable<br>Energy</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="brand-positioning-tab" data-bs-toggle="pill" data-bs-target="#brand-positioning" type="button" role="tab" aria-controls="brand-positioning" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/brand-positioning-green.png" alt="" width="40">
                    </span>
                    <h6>Value Added Processing<br>And Branding</h6>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="agriculture-tab" data-bs-toggle="pill" data-bs-target="#agriculture" type="button" role="tab" aria-controls="agriculture" aria-selected="false">
                    <span class="img-hover">
                        <img src="./images/strategic-investment/agriculture-green.png" alt="" width="40">
                    </span>
                    <h6>Tourism<br>Adventure / Agro</h6>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" data-aos="fade-up">
            <div class="tab-pane fade show active" id="horticulture" role="tabpanel" aria-labelledby="horticulture-tab">
                <?php include('horticulture-crops.php'); ?>
            </div>
            <div class="tab-pane fade" id="cinnamon" role="tabpanel" aria-labelledby="cinnamon-tab">
                <?php include('cinnamon-value-chain.php'); ?>
            </div>
            <div class="tab-pane fade" id="palm-oil" role="tabpanel" aria-labelledby="palm-oil-tab">
                <?php include('plam-oil-processing.php'); ?>
            </div>
            <div class="tab-pane fade" id="adventure" role="tabpanel" aria-labelledby="adventure-tab">
                <?php include('adventure-park.php'); ?>
            </div>
            <div class="tab-pane fade" id="solar-energy" role="tabpanel" aria-labelledby="solar-energy-tab">
                <?php include('renewable-energy.php'); ?>
            </div>
            <div class="tab-pane fade" id="brand-positioning" role="tabpanel" aria-labelledby="brand-positioning-tab">
                <?php include('value-added-processing.php'); ?>
            </div>
            <div class="tab-pane fade" id="agriculture" role="tabpanel" aria-labelledby="agriculture-tab">
                <?php include('tourism-adventure.php'); ?>
            </div>
        </div>
    </div>
</section>

<?php include('inc/footer.php'); ?>