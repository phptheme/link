<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Link\Tests;

use PhpTheme\Link\Link;

class LinkTest extends \PHPUnit\Framework\TestCase
{

    public function testIndex()
    {
        $link = new Link([
            'url' => '#',
            'label' => 'Label'
        ]);

        $content = $link->toString();

        $this->assertEquals($content, '<a href="#">Label</a>');
    }

}