
    <header>
        <h2 id="logo"><span class="icono"><img src="img/masventas.svg" width = "40%"></span>
           
            <div id="user"> Le atiende :  <?php echo $_SESSION['name']?></div>
        </h2>

        <nav class="main-nav">
            <ul class="main-menu">
                <li class="main-item active"><a class="main-link" href="ventaAdmin.php"><span class="icono"><i class="fa fa-home" aria-hidden="true"></i></span> Ventas</a></li>
                <li class="main-item"><a class="main-link" href="clientes.php"><span class="icono"><i class="fa fa-users" aria-hidden="true"></i></span></i> Clientes</a></li>
                <li class="main-item"><a class="main-link" href="productos.php"><span class="icono"><i class="fa fa-barcode" aria-hidden="true"></i></span> Productos</a></li>
                <li class="main-item"><a class="main-link" href="inventario.php"><span class="icono"><i class="fa fa-barcode" aria-hidden="true"></i></span> Inventario</a></li>
                <li class="main-item"><a class="main-link" href="cajero.php"><span class="icono"><i class="fa fa-cog " aria-hidden="true"></i></span></i>Cajeros</a></li>
                <li class="main-item"><a class="main-link" href="corte.php"><span class="icono"><i class="fa fa-calculator" aria-hidden="true"></i></span> Corte</a></li>
                <li class="main-item"><a class="main-link" href="salir.php"><span class="icono"><i class="fa fa-window-close-o" aria-hidden="true"></i></span> Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
