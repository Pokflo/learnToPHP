<?php

/*-----------Les variables----------*/
    /*                            /--commentaires
    Bonjour

    <?php                         /--balise ouvrante PHP

        $prenom = 'Marc';

        echo $prenom;

        $note = 10;

        $note2 = 20;

        echo ' vous avez eu ';

        echo ($note2 - $note) + 5 ;

    ?>                           /--balise fermante PHP

    de moyenne 
*/

/* Pour afficher ce que l'on demande il suffit d'utiliser dans le terminal (php nomdudossier.php) .*/

/*-----------Les variables----------*/

    /* exemple bis

    <?php

        $prenom = 'Marc';

        $nom = 'Doe';

        $note = 10;

        $note2 = 20;

        echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . ($note + $note2) /2 . ' de moyenne.'; /--autre maniere d'ecrire le echo

    ?>

*/

/*-----------Les tableaux----------*/

    /* 

    <?php

        $note = array(10, 20);            /--ancienne notation pour les tableaux.

        $note = [10, 20, 10, 9, 8, 'eleve']; /--un tableau avec des nombres et une chaine de caractere. 

        $eleve = ['Marc', 'Doe', [10, 20, 40]];

        echo $eleve[2][1];
    ?>

*/

/*-----------Les tableaux----------*/

    /*

    <?php

        $eleve = [                      /--clé etrangere ( notation pour que les etranger comprenne le code ).
    
        'nom' => 'Doe',

        'prenom' => 'Marc',

        'note' => [10,20,15]];

        $eleve ['nom'] = 'Jean';    /--ici en mettant = '...' ont ecrase la valeur donnée dans le tableau pour la remplacer par celle-ci, ici une chaine de caracteres.

        $eleve ['note'][3] = 16;    /--ici en mettant aprés le tableau [nombre] = nombre ont ecrase la valeur donnée dans le tableau pour la remplacer par celle-ci, ici un nombre.
    
        echo $eleve['prenom'] . ' ' . $eleve['nom'];

        print_r($eleve['note']);    /--autre maniere d'afficher un resultat. Il affichera un tableau de cet manieres dsans le terminal :

    ?>
(
    [0] => 10 
    [1] => 20
    [2] => 15
)

*/

/*-----------Les tableaux----------*/

    /*
     Si on veux creer une classe on mpeut le voir de cet maniere :

    <?php

    $classe = [
        [
            'nom' => 'Doe',
            'prenom' => 'Jean',
            'note' => [16, 16, 16]
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'Jane',
            'note' => [12, 15, 17]
        ]
    ];

        echo $classe[1]['note'][1];

    ?>
*/


 /*-----------Les conditions----------*/

    $note = 12

?>