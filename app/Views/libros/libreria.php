<?=$cabecera;?>
<div class="row" style="font-family: Arial, Helvetica, sans-serif;">
    <?php foreach($libros as $libro): ?>
    <div id="fondo" class="col-md-4" style="padding: 25px; background-color: rgba(133, 133, 133, 0.230);">
        <img class="img-thumbnail img-fluid mx-auto d-block"
            src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>" width="250" alt="">
        <div id="texto" style="padding: 25px; ">
            <h4 class="text-center titulos"><?=$libro['titulo']?></h4>
            <h6 class="autores">Autor: <strong><?=$libro['autor']?></strong></h6>
            <p class="text-justify">Descripción: <br><?=$libro['descripcionc']?></p>
            <a href="<?=base_url('mostrar/'.$libro['id']);?>" class="btn btn-success mb-4 btn-center">Ver más...</a>
        </div>
    </div>
    <?php endforeach; ?>
    <button type="button" class="btn btn-info fas fa-print" onclick="javascrip:window.print()">Imprimir</button>
</div>
<?=$pie?>