<?php
//Associative array
echo"Associative array";

$Districts=[
    "c"=>"chittagong",
    "d"=>"Dhaka",
   "r"=> "Rajshahi",
   "s"=> "Sylhet",
   "b"=> "Barisal",
   "k"=> "Khulna"
];
echo"<pre>";
print_r($Districts);
echo"</pre>";

print_r("My district is  "."$Districts[c]");
echo"<br>";

//multi dimentional array 

  $country=[
    'Bangladesh'=>[   "c"=>"chittagong",
                      "d"=>"Dhaka",
                      "r"=> "Rajshahi",
                      "s"=> "Sylhet"],
    'i'=>'India',
    'c'=>'Canada',
    'a'=>'Argentina',
    'f'=>'Fiji',
];
echo"<pre>";
print_r($country);
echo"</pre>";

echo"<pre>";
print_r("$country[a]");
echo"</pre>";

print_r($country['Bangladesh']['c']);
echo"<br>";
//replace in multiple array
$country['Bangladesh']['r']='rongpur';
print_r($country);
echo"<br>";

//replace in array 
$country['Bangladesh']='Bangla';
$country['c']='china';
print_r($country);
echo"<br>";

echo"Multi dimentional array<br> ";
$Desh=[
  'Bangladesh'=>[   "chittagong"=>[
                        'Rangunia'=>['south ghatcheck'=>["school","collage"],
                                      'nouth ghatcheck'],
                        "bo"=>'Boalkhali',
                        "ra"=>'Raozan'
                      ],
                    "d"=>"Dhaka",
                    "r"=> "Rajshahi",
                    "s"=> "Sylhet"],
  'India'=>['usa','Bharat'],
  'c'=>'Canada',
];
echo"<pre>";
print_r($Desh);
echo"</pre>";

//Global scope

$saving=500;
function taka(){
  global $saving;
  echo  $saving;
}
 taka();
 echo"<br>";

//locla scope

function money(){
  $saving= 100;
  return $saving;
}
echo money();
echo"<br>";

//static scope
function tk($newsaving){
 static $money=1000;
  $money+=$newsaving;
echo "My monthly saving ".$money;
}
tk(2000); echo"<br>";
tk (4000); echo"<br>";
tk(6000);  echo"<br>";

 //************string function***************//
$a="sumi";
$b="kumsuma akter shanta";
$Roll="100";
$email="sumi@gmail.com";
$name="SHARMIN";
$d="Alhamdulia";
echo strtoupper ($b);echo"<br>";
echo  str_replace("kumsuma","sharmin",$b);echo"<br>";

$b="kumsuma akter shanta";
echo strlen ($b);echo"<br>";
if (strlen($b)!=15){
  echo"yes";
}
else {
  echo"no";
}
echo"<br>";
echo str_word_count($b);echo"<br>";
echo strtolower($name);echo"<br>";
echo strrev($b);echo"<br>";


echo str_repeat($a,5);echo"<br>";//repeat string

if($d=="Alhamdulia"){
  echo str_repeat($d,4);echo"<br>";
}else {
   echo"help me";echo"<br>";
}


echo substr($email,4);echo"<br>";
$my="my name is sharmin akter sumi .I am a student.I am from Bangladesh";
echo substr($my,0,30);
echo"<br>";

echo ucwords($my);echo"<br>";
echo str_shuffle($a);echo"<br>";

$b="kumsuma akter shanta";
echo strpos($b,"shanta");echo"<br>";
echo stripos($b,"SHANTA");echo"<br>";


if (strpos($b,"shanta")){
  echo"it's true";
}else{
  echo"it's false";
}
echo"<br>";
$email="sumi@gmail.com";
echo stripos($email,"COM");
echo"<br>";


//trim() means //remove characters and space from both sides of a string
$my="   my name is sharmin akter sumi .I am a student.I am from Bangladesh   ";

echo trim($my,"my name is  desh");echo"<br>";
echo ltrim($my,"my name ");echo"<br>";
echo rtrim($my,"I am from Bangladesh");
echo"<br>";

//******password*********//
$pass="sumi123sharmin";

echo md5($pass);echo"<br>";//it 's encrypted 30 character
echo sha1($pass);echo"<br>";//it 's encrypted 40 character
echo password_hash($pass,PASSWORD_BCRYPT);echo"<br>";//hash password



var_dump( password_verify("sumi123sharmin",password_hash($pass,PASSWORD_BCRYPT)));echo"<br>";

$verify=password_hash($pass,PASSWORD_BCRYPT);
var_dump(password_verify("sumi",$verify));


?>