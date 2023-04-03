<?php 
headerAdmin($data); /* Método que se encarga de mostrar el encabezado de la página */
getModal('modalCompras', $data); /* Método que se encarga de mostrar un modal en la página */
?>
   <main class="app-content"> <!-- Contenido principal de la página empieza aquí. -->
      <div class="app-title"> <!-- Mostrar el título de la página y otros elementos de la interfaz -->
        <div>
          <h1><i class="fas fa-box"></i> <?= $data['page_title'] ?> <!-- Encabezado HTML que muestra el ícono de una caja y el título -->
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalFormCompras">
            <i class="fas fa-plus-circle"></i> Nuevo
        </div>
        <ul class="app-breadcrumb breadcrumb">  <!-- Lista de enlaces que muestran la ruta de navegación del usuario en el sitio web. -->
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>  <!-- Icono de casa en la lista de breadcrumbs. -->
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/Compras"><?= $data['page_title'] ?></a></li> <!-- Enlace de compras -->
        </ul>
      </div>

      <!-- Tabla de compras -->
      <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableCompras"> <!-- el id que llevara en la dataTable de la functions_Compras.js -->
                      <thead>
                        <tr>
                          <th>Fecha</th>
                          <th>Proveedor</th>
                          <th>Total</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>


    </main>
    <?php footerAdmin($data); ?> <!-- contiene información necesaria para mostrar el pie de página -->