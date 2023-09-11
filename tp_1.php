<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico N°1</title>
</head>
<body>
    <h1>Mi primer programa PHP</h1>
    <?php 
      /* 1. Imprima por pantalla: “Hola mundo” */
      echo "1. Hola Potrero";
      echo "<br>"; 
      /* 2. Cargue en una variable la cadena de caracteres 
      “Hola mundo” y luego la imprima por pantalla */
      $saludo = "2. Hola Potrero";
      echo $saludo;
      echo "<br>";
      /* 3. Crear dos variables enteras y mostrar por pantalla, 
      la suma, la resta, la multiplicación, la división entera 
      y el resto de la división entera */
      $a = 6;
      $b = 3;
      echo "suma de a+b=";
      echo $a+$b;
      echo "<br>";
      /* 4. Realizar la transformación de grados Celsius a Fahrenheit, 
      para el valor 20°C y luego lo imprima por pantalla */
      $temp_celcius = 20;
      $conv_farenheit = $temp_celcius * 1.8 +32;
      echo $temp_celcius;
      echo "C° equivalen a ";
      echo $conv_farenheit;
      echo "F°";
      echo "<br>";
      /* 5.a) Calcular el perímetro y el área de un rectángulo, 
      dado que su base es 18cm y su altura 12cm */
      $lado_1 = 18;
      $lado_2 = 12;
      echo "El perímetro de un rectángulo de ", $lado_1, " por ",
      $lado_2, " es = ", 2*($lado_1+$lado_2), "cm";
      echo "<br>";
      echo "El area de un rectángulo de ", $lado_1, " por ",
      $lado_2, " es ", $lado_1*$lado_2, "cm cuadrados";
      echo "<br>";
      /* 5.b) Calcular el perímetro y el área de un círculo dado 
      que su radio es de 30cm */
      $radio = 30;
      echo "El perímetro de un círculo de ", $radio,
       " cm de radio es ", 3.14*$radio, "cm";
       echo "<br>";
      echo "El área de un círculo de ", $radio, 
      " cm de radio es ", 3.14*($radio**2), "cm cuadrados"; 
      echo "<br>";
      echo "Eso sería todo por ahora, gracias";
    ?>
</body>
</html>