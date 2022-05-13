<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">


	<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo' 
			<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>

			<li class="treeview">
				<a href="#">
					<!--<i class="fa fa-list-ul"></i>-->
					<i class="fa fa-user"></i>					
					<span>Administrar Usuarios</span>					
					<span class="pull-right-container">					
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu">					
					<li>
						<a href="usuariosActivos">							
							<i class="fa fa-circle-o"></i>
							<span>Usuarios Activos</span>
						</a>
					</li>

					<li>
						<a href="usuariosInactivos">							
							<i class="fa fa-circle-o"></i>
							<span>Usuarios inactivos</span>
						</a>
					</li>

					<li>
						<a href="reportes">							
							<i class="fa fa-circle-o"></i>
							<span>Usuarios sin referidos</span>
						</a>
					</li>


					<li>
						<a href="reportes">							
							<i class="fa fa-circle-o"></i>
							<span>Usuarios con referidos</span>
						</a>
					</li>
				</ul>
			</li>


			<li>
				<a href="comprobantes">
					<i class="fa fa-th"></i>
					<span>Administrar Comprobantes</span>
				</a>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-list-ul"></i>					
					<span>Administrar Pagos</span>					
					<span class="pull-right-container">					
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="pagocomision">							
							<i class="fa fa-circle-o"></i>
							<span>Pagar comisiones</span>
						</a>
					</li>

					<li>
						<a href="pagoinversion">							
							<i class="fa fa-circle-o"></i>
							<span>Pagar inversiones</span>
						</a>
					</li>

					<li>
						<a href="pagobienvenida">
							<i class="fa fa-circle-o"></i>
							<span>Pagar bienvenida</span>
						</a>
					</li>
				</ul>
			</li> 





			<li>
				<a href="clientes">
					<i class="fa fa-users"></i>
					<span>Administrar patrocinadores</span>
				</a>
			</li>
			';

		}



		if($_SESSION["perfil"] == "Cliente"){

			echo '
			<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>


			<li class="treeview">
				<a href="#">
					<i class="fa fa-list-ul"></i>
					<span>Perfil</span>					
					<span class="pull-right-container">					
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>


				<ul class="treeview-menu">					
					<li>
						<a href="pagocomision">							
							<i class="fa fa-circle-o"></i>
							<span>Actualizar</span>
						</a>
					</li>

					<li>
						<a href="pagoinversion">							
							<i class="fa fa-circle-o"></i>
							<span>Cargar foto</span>
						</a>
					</li>
				</ul>

			</li> 


			<li>
				<a href="clientes">
					<i class="fa fa-users"></i>
					<span>Inversiones</span>
				</a>
			</li>

			<li>
				<a href="comprobantes">
					<i class="fa fa-th"></i>
					<span>Comprobantes</span>
				</a>
			</li>


			<li class="treeview">

				<a href="#">
					<i class="fa fa-list-ul"></i>					
					<span>Rendimientos</span>					
					<span class="pull-right-container">					
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu">					
					<li>
						<a href="pagocomision">							
							<i class="fa fa-circle-o"></i>
							<span>Por ciclo</span>
						</a>
					</li>
					<li>
						<a href="pagoinversion">							
							<i class="fa fa-circle-o"></i>
							<span>Extra</span>
						</a>
					</li>
				</ul>
			</li>


			<li>
				<a href="comprobantes">
					<i class="fa fa-th"></i>
					<span>Mi plan de traders</span>
				</a>
			</li>  '; }

	       ?>

		</ul>

     </section>

</aside>