<!DOCTYPE html> 
<html lang="uk"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Інформація про спорт</title> 
    <link rel="stylesheet" href="index.css"> <!-- Підключення зовнішнього CSS-файлу --> 
</head> 
<body> 
 
    <h1>Спорт</h1> 
 
    <?php 
        $description = "Спорт - це активна діяльність, яка сприяє здоровому способу життя та розвитку фізичних якостей."; 
        $behavior = "У спорті важливість різноманітний видів фізичної активності та вміння спільно працювати в команді."; 
        $social_interaction = "Спорт об'єднує людей незалежно від їхнього віку, статі чи соціального статусу. Він створює сприятливу атмосферу для взаємодії та спілкування."; 
        $threats = "Нездоровий спосіб життя, травми та надмірне навантаження можуть бути загрозою для людей, які займаються спортом."; 
    ?> 
 
    <p><?php echo $description; ?></p> 
 
    <h2>Опис</h2> 
    <p><?php echo $behavior; ?></p> 
 
    <h2>Життя в спорті</h2> 
    <p><?php echo $social_interaction; ?></p> 
 
    <h2>Загрози</h2> 
    <p><?php echo $threats; ?></p> 
 
    <footer> 
        <p>&copy; <?php echo date("Y"); ?> Інформація про спорт</p> 
    </footer> 
</body> 
</html>