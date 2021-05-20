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
