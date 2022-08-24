<?php

$GLOBALS['TL_CTE']['lexprodsasBootstrap'] = [
    'lexprodsasBootstrapTabs' => 'Contao\LexprodBootstrapBundle\ContentTabs',
];

if (TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/dist/util/config.js';
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/dist/base-component.js';
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/dist/tab.js';
}
