<?php

// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

$paragrafo = 'La tigre del Bengala è un animale solitario che caccia prevalentemente durante le ore notturne e che non ama spartire il proprio territorio con altre tigri o altri animali. Per scoraggiare gli intrusi, tutte le tigri marcano il loro territorio con l urina, la quale contiene delle secrezioni dall odore molto intenso che segnalano la loro presenza. Un altro metodo che impiegano consiste nel lacerare la corteccia degli alberi con gli artigli.

È difficile seguire le tracce di una tigre del Bengala perché, nonostante la sua taglia imponente, questo felino è di natura discreta e timida. L animale è solito ricoprire gli escrementi con la terra e spesso trascina i resti delle sue prede in mezzo ai cespugli. Alle volte arriva persino a ricoprirli di foglie morte per essere sicuro che nessun altro potrà approfittarne in sua assenza. Durante le ore diurne riesce a mimetizzarsi nel folto dell erba degli elefanti, una pianta appartenente al genere Miscanthus tipica dell ambiente di vita di questo felino e che può raggiungere un altezza di quasi 10 metri.

Le tigri uccidono la loro preda schiacciandola a terra e rompendole la spina dorsale (metodo preferito per le prede di dimensioni medio-piccole), o strangolandola con un potente morso al collo (metodo preferito per le prede di dimensioni medio-grandi). L animale ucciso viene quindi trascinato verso un luogo sicuro dove viene consumato. Alle volte cacciano tendendo agguati in vicinanza delle pozze di abbeveraggio e catturando anche animali nuotatori. La tigre del Bengala può consumare fino a 18 kg di carne a pasto e poi rimanere senza mangiare per giorni.';

var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
</head>

<body>
   <div>
      <h1>La tigre del Bengala</h1>
      <p><?php echo str_replace($_GET['censuredword'], '****', $paragrafo ) ?></p>
      <p>Il testo di descrizione della tigre del Bengala è di <?php echo strlen($paragrafo) ?> caratteri.</p>
   </div>
</body>

</html>

<style>
   h1 {
      text-transform: uppercase;
   }
</style>