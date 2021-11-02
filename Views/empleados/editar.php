<div class="card">
    <div class="card-header">
        Editar Empleado
    </div>
    <div class="card-body">
       <form action="" method="post">
       <div class="mb-3">
             <label for="id" class="form-label">ID:</label>
             <input type="text"
               class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
           </div>
           <div class="mb-3">
             <label for="nombre" class="form-label"></label>
             <input type="text"
               class="form-control" value="<?php echo $empleado->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
           </div>
           <div class="mb-3">
             <label for="apellido" class="form-label"></label>
             <input type="text"
               class="form-control" value="<?php echo $empleado->apellido; ?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
           </div>
           <div class="mb-3">
             <label for="edad" class="form-label"></label>
             <input type="number"
               class="form-control" value="<?php echo $empleado->edad; ?>" name="edad" id="edad" aria-describedby="helpId" placeholder="Edad">
           </div>
           <div class="mb-3">
             <label for="email" class="form-label"></label>
             <input type="email"
               class="form-control" value="<?php echo $empleado->email; ?>" name="email" id="email" aria-describedby="helpId" placeholder="Email">
           </div>
           <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
       </form>
    </div>
    
</div>