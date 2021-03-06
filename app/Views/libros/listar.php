<?=$cabecera?>
        <table class="table table-light " style="font-family: Arial, Helvetica, sans-serif;">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Portada</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Editorial</th>
                    <th>País</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($libros as $libro): ?>
                <tr>
                    <td><?=$libro['id'];?></td>
                    <td>
                        <img class="img-thumbnail" 
                        src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>" 
                        width="300" alt="">       
                    </td>
                    <td><?=$libro['titulo'];?></td>
                    <td><?=$libro['autor'];?></td>
                    <td><?=$libro['isbn'];?></td>
                    <td><?=$libro['editorial'];?></td>
                    <td><?=$libro['pais'];?></td>
                    <td><?=$libro['anio'];?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$libro['id']);?>" class="btn btn-success mb-3" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$libro['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
            <button type="button" class="btn btn-info fas fa-print" onclick="javascrip:window.print()">Imprimir</button>
<?=$pie?>