<?php
require __DIR__ . '/../vendor/autoload.php';


var_dump($_SERVER);
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
switch  ($_SERVER['PATH_INFO']){

    case '/listar-cursos':
        //require 'listar-cursos.php';
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
   
    default:
        echo "erro 404";
        break;
    



}
/*if($_SERVER['PATH_INFO']==='/listar-cursos'){

    require 'listar-cursos.php';
}elseif($_SERVER['PATH_INFO']==='/novo-curso'){
    require 'formulario-novo-curso.php';
} 
if($_SERVER['PATH_INFO']==='/sobre'){
    require 'sobre.php';

}
*/

?>