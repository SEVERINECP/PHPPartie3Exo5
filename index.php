<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Partie3Exo4TableauAssociatif</title>
</head>
<body>
  <h1>Departments</h1>
    <?php
    $index = array(59 => 'Nord', 62 => 'Pas-de-Calais', 80 => 'Somme', 60 => 'Oise', 02 => 'Aisne');
    foreach($index as $departmentNumber => $nameDepartment){
      ?>
      <p><?php echo $departmentNumber .' '. $nameDepartment; ?></p>
    <?php } ?>
</body>
</html>
