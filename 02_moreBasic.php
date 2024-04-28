<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>

<style>
*{

    margin:0;
    padding:0;
    box-sizing: border-box;
}

.container{
max-width: 80%;
background-color: rgb(228,195,195);
margin: auto;
padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1>Lets learn about PHP</h1>
    <p>Your party status is here</p>



    <?php
    $age = 6;
    if($age >18){
        echo "you can go to the party";
    }

    elseif ($age==7) {
        echo"you are 7 years old";
    }
    elseif ($age==6) {
        echo"you are 7 years old";
    }
    else {
        echo  "you can not go to the party";
    }

#array in php
echo "<br>";
$languages = array("Python","c++","php","node.js");
// echo $languages[0];

#loops in php
#while loop 
// $a= 0;
// while ($a <=10){
//     echo "<br> The value of a is: ";
//     echo $a;
//     $a++;
// }
# iterating arrays in php using while loop
$a= 0;
while ($a < count($languages)){
    echo "<br> The value of languages is: ";
    echo $languages[$a];
    $a++;
}

# this is do while loop
// $a=80;
// do{
//     echo "<br> The value of a is: ";
//     echo $a;
//     $a++;
// }while ($a <=10);


#for loop
for ($a=0; $a <= 10; $a++) {
    echo "<br> The value of a is: ";
    echo $a;
}
#for each loop
foreach ($languages as $value) {
    echo "<br> The value of this languages is: ";
    echo $value;
}

#functions in php
echo "<br>";
function print5(){
    echo "hello world";
}
print5();

function print_number($number){
    echo "<br> Your number is: ";
    echo $number;
}
print_number(45);

?>
</div>  
</body>
</html>