<!-- <?php 
//function obtener_servicios() {
 //   try {
 //       require 'database.php';
  //      $sql = "SELECT * FROM servicios; ";
 //       $query = mysqli_query($db, $sql);
        

 //       echo "<pre>";
 //       var_dump(mysqli_fetch_all($query) );
 //       echo "</pre>";
 //   }
 //   catch (\Throwable $th) {
 //       var_dump($th);
 //   }
//}; ?> -->

<h2>Servicios</h2>

        <table class="servicios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Description</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php foreach( $servicios as $servicio ): ?>
              
                
                <tr>
                    <td><?php echo $servicio['id']; ?></td>
                    <td><?php echo $servicio['titulo']; ?></td>
                    <td>$ <?php echo $servicio['precio']; ?></td>
                    <td><?php echo $servicio['description']; ?></td>
                    <?php endforeach; ?>

<h3><?php echo htmlspecialchars($servicio['titulo']); ?> </h3>

  <p class="precio"> $ <?php echo htmlspecialchars($servicio['precio']); ?> </p>

  <p> <?php echo htmlspecialchars($servicio['description']); ?> </p>
  
  <a href="/servicio?id=<?php echo htmlspecialchars($servicio['id']); ?>" class="boton-amarillo-block">
      Ver Servicio
  </a>
                    
                </tr>
            </tbody>
        </table>


      