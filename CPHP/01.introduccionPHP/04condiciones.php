<?php

#condiciones 
$a = 5;
$b = 10;

if($a > $b){
	echo "a es mayor que b<br>";
}

#y tambien
else if($a == $b){
	echo "a es igual que b";
}

else{
	echo "a es menor que b";
}

echo "<br><br>";

#condicion swicht
$dia = "lunes";
switch ($dia) {
	case 'sabado':
    echo "Estudiar";
		break;

	case 'viernes':
	echo "Fiesta";

	case 'domingo':
	echo "voy a descansar";
	
	default:
	echo "voy  a la U";
}

echo "<br><br>";
#Ciclos while
$n = 1;

while ($n <= 5) {
	echo $n;
	$n++;
	
}
echo "<br><br>";

#ciclo do while
$p = 1;

do{
	echo $p;
	$p++;
}
while ($p <= 5);

echo "<br><br>";
#ciclo for
for ($i=0; $i <= 5 ; $i++) { 
	echo $i;
}
?>