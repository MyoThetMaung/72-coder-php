<?php
/*
    $age = 24;
    echo "hello my name is \"myo thet maung\" and my age is $age";
    echo "<br>";
    echo 'hello my name is \'myo thet maung\' and my age is '.$age;
    echo "<br>";

//multiple html code writing | START or any word can write 
  echo $doc = <<<START
    <h2>hello world</h2>
    <h2>hello world</h2>
    <h2>hello world</h2>
    <h2>hello world</h2>
    START;

//define is used for constant variables | cannot redefine | use in connecting database
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "do_list");

    echo DB_NAME;
    echo DB_PASS;
    echo DB_HOST;
    echo DB_USER;


//conditional operator
  $name = '';
  echo $name ? "correct" : "wrong";
  echo "<br>";  

//switch
switch($old=20){
  case $old = 21:
    echo 'answer correct';
    break;
  case $old = 24;
    echo 'age is 24';
    break;
  case $old = 29:
    echo 'age is 29';
    break;
  default:
    echo "age is under 18";
    break;
} 
echo "<br>";

//for loop
for($i=0; $i<10; $i+=3){
  echo $i;
  echo "<br>";
}
echo "<br>";

//while loop
$number = 0;
while($number < 11){
  echo $number;
  $number+=2;
  echo "<br>";
}
echo "<br>";

//do while loop
$num = 0;
do{
  echo $num;
  $num+=4;
  echo "<br>";
}while($num<15);
echo "<br>";

//continue
for($i=0; $i<10; $i+=2){
  if($i == 4){
    echo 'i am number (4)';
    continue;
  }else{
    echo $i;
  }
}
echo "<br>";

//break
$break = 0;
while($break<10){
  if($break == 6){
    echo "it is 6 <br>";
    $break++;
    break;
  }else{
    echo $break;
    $break++;
  }
}

//Simple Array
$array = array();
$array[0] = 'saimon';
$array[1] = 'mgmg';
$array[2] = 24;
var_dump($array);
*/

//Associated array  | key, value pair
$asso_array = array(
  "firstname" => "saimon",
  "lastname" => "mtmg",
  "age" => 24
);
print_r($asso_array);

//Array looping
$array_loop = array('toyota','mercede','bmw','honda');

for ($i=0; $i < count($array_loop); $i++) { 
  echo $array_loop[$i];
  echo "<br>";
}


//function
function fun($no = 1){
    echo $no;
}
echo fun(10);

//global and local variables
$glo = 'saimon';
function glo(){
    global $glo;
    echo $glo;
}
glo();  echo "<br>";

//static                    |      static record memory
function myfun(){
    static $ok = 0;
    $ok++;
    echo $ok;
}
myfun();
myfun();
myfun();

?>
