<?php 
    class PropiedadesUsuario{
        private $datos = [];
        public function __getDatos($propiedad){
            if(array_key_exists($propiedad, $this->datos)){//array_key_exists porque es array y no objeto
                return $this->datos[$propiedad];
            }else{
                echo "Propiedad no encontrada: {$propiedad}";
            }
        }
        public function __setDatos($propiedad, $valor){
            $this->datos[$propiedad] = $valor;
        }
    }
    $user = new PropiedadesUsuario();
    $user->__setDatos('nombre', 'Pepe');
    $user->__setDatos('edad', 20);
    
    //Muestra
    echo "Nombre: {$user->__getDatos('nombre')} <br>";
    echo "Edad: {$user->__getDatos('edad')} <br>";
    
    //Accede a lo no definido
    echo "Edad: {$user->__getDatos('ojos')}";//Propiedad no encontrada: ojosEdad:
    
    //Asigna algo que no ha sido definido
    $user->__setDatos('color', 'rojo');//Lo hace  
    
    // Intentar acceder a la propiedad después de asignarla
    echo "Color: {$user->__getDatos('color')}"; //Color: rojo



    
    /*
        Implementa el método mágico __set dentro de la clase.
        Este método debe permitir la asignación de valores a las propiedades del usuario.
        Crea una instancia de la clase PropiedadesUsuario y asigna valores a al menos tres propiedades diferentes del usuario 
        a través de la constante mágica __set.
    
        Muestra por pantalla los valores de las propiedades accediendo a ellas a través de la constante mágica __get.
        Intenta acceder a una propiedad que no ha sido definida e imprime un mensaje indicando que la propiedad no fue encontrada.
        Intenta asignar un valor a una propiedad que no ha sido definida e imprime un mensaje indicando que la propiedad no existe.
        Intenta nuevamente acceder a la propiedad que no existía para verificar si se ha asignado correctamente 
        después del intento de asignación.*/
    ?>