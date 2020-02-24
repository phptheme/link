<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Link;

use PhpTheme\HtmlEscaper\HtmlEscaper;

class Link extends \PhpTheme\Tag\Tag
{

    public $tag = 'a';

    public $label;

    public $url;

    public $icon;

    public $template = '{label}';

    public $iconTemplate = '<i class="{icon}"></i>{label}';

    public $escapeLabel = true;

    protected function getLabel()
    {
        $return = $this->label;

        if ($this->escapeLabel)
        {
            $return = HtmlEscaper::encode($return);
        }

        return $return;
    }

    protected function getUrl()
    {
        return $this->url;
    }

    protected function getIcon()
    {
        return $this->icon;
    }

    protected function renderIconTemplate(array $params = []) : string
    {
        return strtr($this->iconTemplate, $params);
    }

    protected function renderTemplate(array $params = []) : string
    {
        return strtr($this->template, $params);
    }

    public function getContent()
    {
        $icon = $this->getIcon();

        if ($icon)
        {
            return $this->renderIconTemplate([
                '{label}' => $this->getLabel(),
                '{icon}' => $icon
            ]);
        }

        return $this->renderTemplate([
            '{label}' => $this->getLabel()
        ]);
    }

    public function toString() : string
    {
        if (($this->url) && ($this->tag == 'a'))
        {
            $this->attributes['href'] = $this->getUrl();
        }

        return parent::toString();
    }

}