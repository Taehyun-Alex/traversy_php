<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$nums = [1, 2, 3, 4];
$count = count($nums);
$sum = $nums[0] + $nums[1] + $nums[2] + $nums[3];
echo "The sum of the {$count} numbers is: {$sum}";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$reversed_array = array_reverse($colors);
$reversed_array = array_merge($reversed_array, ["purple", "orange"]);
$reversed_array[1] = 'pink';
array_pop($reversed_array);
echo '<pre>';
print_r($reversed_array);
echo '</pre>';

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$job_listing = [[
    'id' => 1,
    'job_title' => 'PHP Developer',
    'company' => 'ABC Company',
    'contact_email' => 'john@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
],
  [
      'id' => 2,
      'job_title' => 'Web Designer',
      'company' => 'XYZ Company',
      'contact_email' => 'steph@email.com',
      'contact_phone' => '123-456-7890',
      'skills' => ['Photoshop', 'Illustrator', 'HTML', 'CSS']
  ],
  [
      'id' => 3,
      'job_title' => 'Web Developer',
      'company' => '123 Company',
      'contact_email' => 'peter@email.com',
      'contact_phone' => '123-456-7890',
      'skills' => ['Python', 'PostgreSQL', 'JavaScript', 'HTML', 'CSS']
  ]
];



array_push($job_listing, [
    'id' => 4,
    'job_title' => 'PHP Developer',
    'company' => 'ABC Company',
    'contact_email' => 'john@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
]);

echo "<pre>";
print_r($job_listing);
echo "</pre>";
echo $job_listing[1]["job_title"];
echo $job_listing[2]["skills"][0];
