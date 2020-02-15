<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Link;

use PhpTheme\HtmlHelper\HtmlHelper;

class PostLink extends Link
{

    public $tag = 'button';

    public $defaultAttributes = ['type' => 'submit'];

    public $formAttributes = [];

    public $defaultFormAttributes = ['method' => 'POST']

    public function toString() : string
    {
        $content = parent::toString();

        $formAttributes = HtmlHelper::mergeAttributes($this->defaultFormAttributes, $this->formAttributes);

        $formAttributes['action'] = $this->getUrl();

        return HtmlHelper::tag('form', $content, $formAttributes);
    }

}
