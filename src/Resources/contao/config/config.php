<?php

$GLOBALS['TL_CTE']['lexprodsasBootstrap'] = [
    'lexprodsasBootstrapTabs' => 'Contao\LexprodBootstrapBundle\ContentTabs',
];

if (TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js';
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/dist/js/bootstrap.bundle.js|async';
}
