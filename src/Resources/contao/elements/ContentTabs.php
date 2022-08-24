<?php

namespace Contao\LexprodBootstrapBundle;

use Contao;

class ContentTabs extends Contao\ContentElement
{
    protected $strTemplate = 'ce_tabs';

    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new Contao\BackendTemplate($this->strTemplate);
            $this->Template->title = $this->headline;
        }
    }
}

class_alias(ContentTabs::class, 'ContentTabs');
