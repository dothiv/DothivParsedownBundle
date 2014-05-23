<?php

namespace Dothiv\Bundle\ParsedownBundle\Twig\Extension;

class Parsedown extends \Twig_Extension
{
    public function __construct()
    {
        $this->markdownParser = new \Parsedown();
    }

    public function getFilters()
    {
        return array(
            'markdown' => new \Twig_Filter_Method($this, 'parsedown', array('is_safe' => array('html'))),
        );
    }

    public function parsedown($str)
    {
        return $this->markdownParser->text($str);
    }

    public function getName()
    {
        return 'parsedown';
    }
}
