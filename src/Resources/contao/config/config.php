<?php

$GLOBALS['TL_CTE']['lexprodsasBootstrap'] = [
    'lexprodsasBootstrapTabs' => 'Contao\LexprodBootstrapBundle\ContentTabs',
];

if (TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/src/util/config.js';
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/src/base-component.js';
    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/contao-component-bootstrap/bootstrap/js/src/tab.js';
}
