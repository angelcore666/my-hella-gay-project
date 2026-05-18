<?php

require 'include/initialiseTwig.php';

$twigid = init_twig();

$data = [
    [
        'prenom' => 'Jean-Luc',
        'nom' => 'Husson',
        'civilite' => 'M',
        'initiale' => 'jlh',
        'expertise' => 'Informatique',
        'email' => 'jh@mmi.fr'
    ],
    [
        'prenom' => 'Audrey',
        'nom' => 'Bichet',
        'civilite' => 'F',
        'initiale' => 'ab',
        'expertise' => ['infographie', 'UX'],
        'email' => 'ab@mmi.fr'
    ],  
    [
        'prenom' => 'Elodie',
        'nom' => 'Aveline',
        'civilite' => 'F',
        'initiale' => 'ea',
        'expertise' => 'Informatique',
        'email' => 'ea@mmi.fr'
    ],
    [
        'prenom' => 'Mathias',
        'nom' => 'Clavelin',
        'civilite' => 'M',
        'initiale' => 'mc',
        'expertise' => 'Informatique',
        'email' => 'mc@mmi.fr'
    ]
];

echo $twigid->render('pages/experts.twig', ['equipe'=>$data]);