<?php 
$modulo = $_REQUEST['cargar'] ?? '';
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">99d.CRUD</a>
    <button
      class="navbar-toggler d-lg-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link <?php echo ($modulo == 'inicio')? 'active' : '' ; ?>" href="?cargar=inicio" aria-current="page"
            >inicio <span class="visually-hidden">(current)</span></a
          >
        </li>   

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle <?php echo ($modulo == 'crear' || $modulo == 'modo_edicion')? 'active' : ''; ?>"
            href="#"
            id="dropdownId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >Acciones</a
          >
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item <?php echo ($modulo == 'crear') ? 'active' :''; ?>" href="<?php echo ($modulo == 'crear')? '#': '?cargar=crear'; ?>">Crear nueva entrada</a>
            <a class="dropdown-item <?php echo ($modulo == 'modo_edicion') ? 'active':''; ?>" href="<?php echo ($modulo == 'modo_edicion')?'#' : '?cargar=modo_edicion'; ?>">Modo edición</a>           
            
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


