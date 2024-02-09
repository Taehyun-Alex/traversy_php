<?php
echo "hello from PHP!";
echo "<br>";
print "Hello from Print";
echo "<br>";
echo "One", "Two";
// comment
/*
 * multi line
 */

/**
 *description
 *
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo "Learn PHP from Scratch";?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= "Learn PHP from scratch"; ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <h2><?= "Welcome To the Course";?></h2>
            <!-- Output -->
            <?php echo '<p> In this course, you will learn the fundamentals of the PHP language</p>';?>
        </div>
    </div>
</body>

</html>