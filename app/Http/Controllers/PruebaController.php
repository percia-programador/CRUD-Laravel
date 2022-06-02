<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{


    function parametros($id){
        return "Hola ahora estoy ejecutando desde un controlador con el id : ".$id;
    }

    function mostrar(){
        return "Hola ahora estoy ejecutando desde un controlador ";
    }

    function blog($slug, $id){
        return "El nombre de nuestro post es ${slug} y el ID ES : ${id}";
    }


    function mostrarProducts(){
        return "Listado de productos";
    }

    function sinToken()
    {
        return "No tienes acceso a la lista de productos";
    }

}
