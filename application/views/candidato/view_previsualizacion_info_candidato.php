<style>
    .previsual_tal{
        margin-bottom: 5px;
        background-color: #f7f1d2;
        padding:10px;
        width: 670px;
        font-weight: 200;
    }
    .cerrar{
        float: right;
    }
</style>

<div class="previsual_tal">
    <div class='row'>
        <div class="col-xs-6 col-sm-3">
            <div id="userImg"> 
                <img src="<?=$user_image?>"  height="100" width="100" class="img-circle">
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">  
            <div class='row'>
                <div class="col-xs-6 col-sm-5"><?= $candidato->FCNOMBRE ?></div>
                <div class="col-xs-6 col-sm-3"><?= $candidato->FCESTADO ?></div>
                <div class="col-xs-6 col-sm-4">PROGRAMADOR</div>
            </div>
            <div class='row'>
                <div class="col-xs-6 col-sm-8">ANALISTA</div>
                <div class="col-xs-6 col-sm-4">MEDIO</div>
            </div>
            <div class='row'>
                <div class="col-xs-18 col-sm-12">
                    
                    <p class='text-justify'>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                    </p>                    
                </div>
            </div>
        </div>
    </div>
</div>
<button class="btn btn-sm btn-danger cerrar" id="tempP">
    Cerrar
</button>
<script>
    $('#tempP').click(function () {
        $('#btnPrevPop').popover('destroy');
    });
</script>

