<!DOCTYPE html>
<html>
  <body>
    <?php
        int nota == 0;
        Console.Write("ingrese la nota del alumno: ");

        if (int.TryParse(Console.ReadLine(), out nota))
            if (nota >= 9 && nota <= 10)
                Console.WriteLine("sobresaliente");
            else if (nota <9 && nota <= 7)
                Console.WriteLine("notable");
            else if (nota == 6 && nota == 6)
                Console.WriteLine("bien");
            else if (nota == 5 && nota == 5)
                Console.WriteLine("suficiente");
            else if (nota < 5 && nota >= 0)
                Console.WriteLine("insuficiente");
            else
                Console.WriteLine("La nota no está entre 0 y 10.");
        else
            Console.WriteLine("El valor introducido no es correcto.");

        Console.ReadLine();
      
    ?>

   </body>
</html>
