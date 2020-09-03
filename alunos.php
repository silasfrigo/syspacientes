<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
      
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
<?php

  require('vendor/autoload.php');

  $faker = Faker\Factory::create('pt_BR');

  $students = [
    array($faker->name,'Materia 1'),
    array($faker->name,'Materia 1'),
    array($faker->name,'Materia 3'),
    array($faker->name,'Materia 3'),
    array($faker->name,'Materia 2')
  ];

  echo "<table class='table table-striped table-dark' style='width:100%'>";
    
  echo "<thead>
          <tr>
            <th scope='col'>Indice</th>
            <th scope='col'>Alunos</th>
            <th scope='col'>Materia</th>
          </tr>
        </thead>";

  foreach ($students as $key => $student){
     echo "<tr>
     <td class='text-white bg-dark'>{$key}</td>
     <td style='width:49%'>{$student[0]}.</td>
     <td style='width:50%'>{$student[1]}</td>
     </tr>";
  }
echo "</table></div>";
?>
<script>
  
</script>

</body>
</html>