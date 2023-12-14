<?php /*
    Define una clase llamada PropiedadesUsuarioque incluya un array privado llamado $datos 
    para almacenar las propiedades del usuario.

    Dentro de la clase, implementa el método mágico __get.
    Este método debe permitir el acceso a las propiedades del usuario.
    Si la propiedad solicitada no existe, el método debe devolver el mensaje "Propiedad no encontrada: {nombre de la propiedad}".
    
    Implementa el método mágico __set dentro de la clase.
    Este método debe permitir la asignación de valores a las propiedades del usuario.
    Crea una instancia de la clase PropiedadesUsuario y asigna valores a al menos tres propiedades diferentes del usuario 
    a través de la constante mágica __set.

    Muestra por pantalla los valores de las propiedades accediendo a ellas a través de la constante mágica __get.
    Intenta acceder a una propiedad que no ha sido definida e imprime un mensaje indicando que la propiedad no fue encontrada.
    Intenta asignar un valor a una propiedad que no ha sido definida e imprime un mensaje indicando que la propiedad no existe.
    Intenta nuevamente acceder a la propiedad que no existía para verificar si se ha asignado correctamente 
    después del intento de asignación.*/
class PropiedadesUsuario{
    private $datos = [];
    function __construct(Array $datos){
        $this->datos = $datos;
    }
    public function __getDatos($datos, $propiedad){
        if(property_exists($datos, $propiedad)){
            return $datos->$propiedad;
        }else{
            echo "Propiedad no encontrada: {$propiedad}";
        }
    }
    public function __setDatos($datos, $propiedad, $valor){
        if(property_exists($datos, $propiedad)){
            $datos->$propiedad = $valor;
        }else{
            echo "Propiedad no encontrada: {$propiedad}";
        }
    }
    /*
    Crea una instancia de la clase PropiedadesUsuario y asigna valores a al menos tres propiedades diferentes del usuario 
    a través de la constante mágica __set.*/
}
?>