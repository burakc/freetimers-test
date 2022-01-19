<?php require __DIR__ . '/header.php'; ?>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <form action="#" method="get">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Results:</h4>
                <hr>
                <h5 class="card-title mb-3 text-center">You need</h5>
                <h2 class="card-title mb-4 text-center"><?php echo $neededBags; ?></h2>
                <h5 class="card-title mb-3 text-center">bags of topsoil</h5>
                <hr>
                <h2 class="card-title mb-1 mt-5 text-center">£<?php echo $neededBags * 72; ?></h2>
                <h6 class="card-title mb-5 text-center">(inc VAT)</h6>
                <button class="btn btn-primary btn-block confirm-button">Add to Basket</button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>