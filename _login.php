<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><H3>VENTA DE COMPUTADORAS</H3></title>
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4" id="col-4">
          <h2>Inicio de Sesion</h2>
          <form method="POST"action="<?php echo base_url('/login')?>">
          <label for="usuario">Usuario:</label>
          <input type="text" name="usuario" id="usuario"class="form-control mb-3" placeholder="usuario">
          <label for ="password">Password:</label>
          <input type="password"name="password" id="password"class="form-control mb-3" placeholder="password"><br>
          <button type="submit"class="btn btn-info center-button">Entrar</button>
          </form>
        </div>
        </div class="col-4">
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
  