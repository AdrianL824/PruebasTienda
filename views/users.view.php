<?php require 'views/includes/header.php' ?>

<section class="page-content">
  <h2 class="title-page">Lista de usuarios</h2>
  <div class="users-table">
    <table>
      <thead> <!-- encabezado -->
        <tr>
          <th width= "1px">Id</th>
          <th>Nombre/s</th>
          <th>Apellido/s</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>C.I.</th>
          <th>Dirección</th>
          <th>Tipo usuario</th>
          <th width= "3px"></th>
          <th></th>
        </tr>
      </thead>
      <tbody><!-- cuerpo de la lista -->
        <?php foreach($users as $row): ?>
          <tr style="font-size:13px;">
            <th><?= $row['id']?></th>
            <th><?= $row['nombre']?></th>
            <th><?= $row['apellido']?></th>
            <th><?= $row['email']?></th>
            <th><?= $row['telefono']?></th>
            <th><?= $row['ci']?></th>
            <th><?= $row['direccion']?></th>
            <th><?= $row['tipo_usr']?></th>


            <th><a href="<?=RAIZ?>/user-edit.php?id=<?=$row['id']?>" class="users-table--edit">Editar</a></th>
            <th>
              <form action="<?=RAIZ?>/user-delete.php?id=<?=$row['id']?>" class="from-delete" method="post">
                <input type="submit" class="users-table--delete" value="Eliminar" />
              </form>
            </th>   
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<section class="modal ">
  <div class="modal__container">
    <h2 class="modal__title">Eliminar usuario</h2>
    <p class="modal__paragraph">¿Está seguro que desea eliminar este usuario?</p>
    <div class="a"></div>
    <div class="modal_buttons">
      <button class="modal__close">Si</button>
      <button class="modal__close2">No</button>
    </div>
  </div>
</section>

<?php require 'views/includes/footer.php' ?>