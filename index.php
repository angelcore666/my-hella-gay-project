<?php

require 'include/initialiseTwig.php';

$twigid = init_twig();


echo $twigid->render('pages/index.twig');