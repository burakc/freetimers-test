<?php require __DIR__ . '/header.php'; ?>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <form action="/freetimers-test/?calculate" method="post">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center"><i class="fa fa-calculator"></i> How many bags of topsoil needed for my garden?</h5>

                <h6 class="card-title mb-3"><i class="fa fa-pencil"></i> Measurement Unit :</h6>
                <div class="d-flex flex-row"> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="measurement" value="metre" checked><span>Metres</span>
                    </label> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="measurement" value="feet"> <span>Feets</span>
                    </label> 
                    <label class="radio text-center"> 
                        <input type="radio" name="measurement" value="yard"> <span>Yards</span>
                    </label> 
                </div>

                <h6 class="card-title mb-3 mt-3"><i class="fa fa-pencil"></i> Depth-Measurement Unit :</h6>
                <div class="d-flex flex-row"> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="depth-measurement" value="centimetre" checked><span>Centimetres</span>
                    </label> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="depth-measurement" value="inch"> <span>Inches</span>
                    </label> 
                </div>

                <h6 class="information mt-4"><i class="fa fa-pencil"></i> Please provide dimensions of your garden :</h6>
                <div class="d-flex flex-row no-gutters mr-1">
                    <div class="col-sm-6 mr-1">
                        <div class="form-group">
                            <input class="form-control" type="number" name="width" placeholder="Garden Width">
                        </div>
                    </div>
                    <div class="col-sm-6 mr-1">
                        <div class="form-group">
                            <input class="form-control" type="number" name="length" placeholder="Garden Lenght">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-block confirm-button">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>