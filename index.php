
<!-- Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che 
contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative 
lunghezza e sostituire la badword passata in GET con 
tre *. -->


<?php 
$badword = $_GET['badword'];

$paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores eos consequatur numquam dolorem expedita totam ad aut cumque ullam eum nihil, voluptatum obcaecati in. Porro vero sequi architecto sit veritatis";
echo '<h1> TESTO ORIGINALE </h1>';
echo '<p>'.$paragraph.'</p>';
// lunghezza paragrafo 
$paragraph_length = strlen($paragraph);
echo '<p> Numero di caratteri: '.$paragraph_length.'.</p>';

// sostituisco la parola Porro con ***

$paragraph = str_replace($badword, "***", $paragraph);
$paragraph_length = strlen($paragraph);


?>

<h1>TESTO CENSURATO</h1>
<p> <?php echo $paragraph ?></p>
<p> Numero di caratteri: <?php echo $paragraph_length ?>.</p>