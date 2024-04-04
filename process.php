<?php
$name = $_POST['name'];
$cupcakesOrdered = 0;
echo"<p>Thank you, $name, for your order!</p>
     <p>Order Summary:</p>
     <ul>";
foreach ($_POST['flavor'] as $value) {
    if(isset($value)) {
        $value = str_replace('_', ' ', $value);
        $value = ucwords($value);
        $cupcakesOrdered++;
        echo "<li>$value</li>";
    }
}
$cupcakesOrdered = $cupcakesOrdered*3.5;
$cupcakesOrdered = number_format(($cupcakesOrdered), 2, '.', '');
echo"</ul>
     <p>Order Total: $$cupcakesOrdered</p>";
?>