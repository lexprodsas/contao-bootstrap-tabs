<?php

$GLOBALS['TL_CTE']['lexprodsasBootstrap'] = [
    'lexprodsasBootstrapTabs' => 'Contao\LexprodBootstrapBundle\ContentTabs',
];

if (TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/dist/js/bootstrap.js';
}
