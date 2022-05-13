 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">		
		<!-- logo mini -->
		<span class="logo-mini">			
			<img src="vistas/img/plantilla/icono-blanco.png" class="img-responsive" style="padding:10px">
		</span>

		<!-- logo normal -->
		<span class="logo-lg">			
			<img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding:10px 0px">
		</span>
	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">

		<!-- Botón de navegación -->
	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">        	
        	<span class="sr-only">Toggle navigation</span> 	
      	</a>

		<!-- perfil de usuario -->
		<div class="navbar-custom-menu">				
			<ul class="nav navbar-nav">				
				<li class="dropdown user user-menu">					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					  <?php

					     if($_SESSION["foto"] != ""){
						      echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
					      }

					      else{
						      echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
					         }
					  ?>
						
						<span class="hidden-xs">							
							<?php  echo ' Bienvenido '. $_SESSION["nombreusuario"]; ?>							
						</span>
					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">						
						<li class="user-body">							
							<div class="pull-right">								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>


	  <?php

        $item = null;
        $valor = null;
        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

       foreach ($usuarios as $key => $value){
         
          echo ' 

          		<tr>
          		
                  <td>1</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){
                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                  

                 <td>
                    <div class="btn-group">                                            
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
                    </div>  
                  </td>                
                
                </tr>';
        }

        ?> 

	</nav>
 </header>