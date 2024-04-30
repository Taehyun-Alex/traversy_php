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
$output = null;
$ids = [10, 22, 15, 45, 67];
$users = ["user1", "user2", "user3"];

$output = count($ids);
sort($ids);
rsort($ids);
array_push($ids, "1");

array_pop($ids);
array_shift($ids);

array_unshift($ids, 99);
$ids2 = array_slice($ids, 2);
array_splice($ids, 1, 2, "new id");
$output = "User 2 is at index: " . array_search("user2", $users);

$tags = "tech,code,programming";
$tagArr = explode(",", $tags);
var_dump($tagArr);
$output = implode(", ", $users);

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
            <p><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
                <pre>
                    <?php print_r($ids); ?>
            </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">users Array:</h2>
            <p>
            <pre>
                    <?php print_r($users); ?>
            </pre>
            </p>
            <p><pre><?php var_dump($ids2); ?></pre></p>
        </div>

    </div>
</body>

</html>