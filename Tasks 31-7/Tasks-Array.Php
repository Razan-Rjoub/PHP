<?php
$colors = array('white', 'green', 'red');
$length = count($colors);
for ($i = 0; $i < $length; $i++) {
    print('<ul>' . '<li>' . $colors[$i] . '</li>' . '</ul>');
}
$cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");
asort($cities);
foreach ($cities as $country => $capital) {
    echo 'The capital of ' . $country . ' is <span style="color:red ; font-weight: bold;" >' . $capital . '</span><br>';
}
echo '<br>';
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color[4];
echo '<br>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach($fruits as $key=>$value){
echo $key.' = '.$value;
echo '<br>';}
$words =  array("abcd","abc","de","hjjj","g","wer");
$length=count($words);
$lengths = array_map('strlen', $words);
$max=max($lengths);
$min=min($lengths);
echo 'The longest array is '.$max.'.  ';
echo 'The shortest array is '.$min.'. ';
?>