<?php
class Calculator
{
    public function sumArray($array){
        $sum = 0;
        foreach($array as $value) {
            //en caso de que el booleano sea true lo sumaria como 1
            if (gettype($value) === "boolean"){
                continue;
            }

            if (gettype($value) === "array"){
                $sum += $this->sumArray($value);
            }else{
                print_r("+".(int)$value."<br>");
                $sum += (int)$value;
            }
        }
        return $sum;
    }
}

$calculator = new Calculator();
$array = [[1,2],2,3,4,5,null,"null","4",["2",4,null,"true",true], "A"];
/** Soluciona punto 1.1 **/
print_r("Resultado: ".$calculator->sumArray($array));

echo "<br>";
echo "<br>";
/** Soluciona punto 1.2: Resultado del whilepro puesto  **/
$i = 1;
while ($i <= 10) {
    echo "valor de $i";
    $i++;
    echo "<br>";
}

echo "<br>";
/** Soluciona punto 1.3: Utilizaria trim para eliminar los espacios **/
print_r(trim(" Johan David Ospina A  "));
?>

<!-- Soluciona punto 2.1: Implementar con jQuery las acciones de los botones “Agregar” y “Borrar” -->
<div id="nombre">
    <span>Nombre: </span>
    <input id="nombre_fruta" class="texto" type="text"><button onclick="addElement()" type="button" class="agregar">Agregar</button>
</div>
<div id="listado_frutas">
    <ul>
        <li>
            Pera <button onclick="deleteElement(this)" type="button">Borrar</button>
        </li>
        <li>
            Manzana <button onclick="deleteElement(this)" type="button">Borrar</button>
        </li>
        <li>
            Naranja <button onclick="deleteElement(this)" type="button">Borrar</button>
        </li>
    </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Soluciona punto 2.1: Implementar con jQuery las acciones de los botones “Agregar” y “Borrar”
    function deleteElement(element){
        $(element).parent().remove();
    }
    function addElement(){
        let inputVal = $("#nombre_fruta").val();
        if (inputVal !== "")
        $("#listado_frutas").find("ul").append("<li>"+ inputVal + " " +"<button onclick='deleteElement(this)' type='button'>Borrar</button></li>");
    }

    // Soluciona punto 2.2: Calcular de forma genérica, la suma de los elementos de un array numérico
    function sumArray(listArray) {
        let sum = 0;
        $.each(listArray, function( index, value ) {
            if ($.type( value ) === "array"){
                sum += sumArray(value);
            }else{
                sum += value;
            }
        });

        return sum;
    }

    $( document ).ready(function() {

        alert("Soluciona punto 2.2: " + sumArray([0, [6, 2], null, 7, 1]));
    });
</script>

<ul>
    <li>
        Si estuvieras de guardia y llegara un aviso de llenado de disco. ¿Qué comandos ejecutarías para saber qué directorio se está llenando?"
        <ul>
            <li>
                Respuesta: ejecutaria ----> df -h
            </li>
        </ul>
    </li>
    <li>
        ¿Qué es un balanceador web? ¿Qué es un grupo de autoscaling?
        <ul>
            <li>
                Respuesta 1:
                <p>Un Balanceador de carga fundamentalmente es un dispositivo de hardware o software que se pone al frente </p>
                <p>de un conjunto de servidores que atienden una aplicación y, tal como su nombre lo indica, asigna o balancea </p>
                <p>las solicitudes que llegan de los clientes a los servidores usando algún algoritmo. </p>
            </li>
            <li>
                Respuesta 2:
                <p>lanza instancias y mantiene un numero especifico de instancias activas minimo</p>
                <p>y realiza comprobaciones para saber si estan arriba sino subir las instancias deseadas</p>
            </li>
        </ul>
    </li>
</ul>
