<?php
$output = null;
$fruits = [
        ["Apple", "Red"],
    ["Orange", "Orange"],
    ["Banana", "Yellow"]
];

$output = $fruits[0][0];

$fruits[] = ["Grape", "purple"];

$users = [
        ["name" => "John", "email" => "john@gmail.com", "password" => "1245"],
        ["name" => "Alex", "email" => "alex@gmail.com", "password" => "1245"],
        ["name" => "Ken", "email" => "Ken@gmail.com", "password" => "1245"],
];
$users[] = ["name" => "Mike", "email" => "mike@gmail.com", "password" => "1245"];
$output = $users[3]["name"];

array_pop($users);
$output = $users[2]["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
        <p><pre>
            <?php print_r($fruits) ?>
            </pre>
        </p>
    </div>
  </div>
</body>

</html>