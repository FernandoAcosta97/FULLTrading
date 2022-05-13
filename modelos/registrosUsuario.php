<?php

	require_once "conexion.php";

	class datos extends conexion{

		public function registroUserModelo($datosModel,$tabla){

			$consulta = conexion::conectar()-> prepare("INSERT INTO $tabla(cedula,nombres,apellidos,correo,telefono, nombreusuario,clave,direccion,pais,ciudad,municipio,foto) 
			    VALUES (:cedula,:nombres,:apellidos,:correo, :telefono,:nombreusuario,:clave,:direccion,:pais,:ciudad,:municipio,:foto)");
	

			$consulta->bindParam(":cedula",$datosModel["cedula"], PDO::PARAM_STR);
            $consulta->bindParam(":nombres",$datosModel["nombres"], PDO::PARAM_STR);
			$consulta->bindParam(":apellidos",$datosModel["apellidos"], PDO::PARAM_STR);
			$consulta->bindParam(":correo",$datosModel["correo"], PDO::PARAM_STR);
			$consulta->bindParam(":telefono",$datosModel["telefono"], PDO::PARAM_STR);
			$consulta->bindParam(":nombreusuario",$datosModel["nombreusuario"], PDO::PARAM_STR);
			$consulta->bindParam(":clave",$datosModel["clave"], PDO::PARAM_STR);
			$consulta->bindParam(":direccion",$datosModel["direccion"], PDO::PARAM_STR);
			$consulta->bindParam(":pais",$datosModel["pais"], PDO::PARAM_STR);
			$consulta->bindParam(":ciudad",$datosModel["ciudad"], PDO::PARAM_STR);
			$consulta->bindParam(":municipio",$datosModel["municipio"], PDO::PARAM_STR);
			$consulta->bindParam(":foto",$datosModel["foto"], PDO::PARAM_STR);






			if($consulta->execute()){

				return "Correcto";
			} else {

				return "error";
			}


			$consultar->close();
			$consultar = null;


		}

	}



?> 