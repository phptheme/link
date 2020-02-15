<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Link\Tests;

use PhpTheme\Link\PostLink;

class PostLinkTest extends \PHPUnit\Framework\TestCase
{

    public function testIndex()
    {
        $link = new PostLink([
            'url' => '#',
            'label' => 'Label'
        ]);

        $content = $link->toString();

        $this->assertEquals($content, '<form method="POST" action="#"><button type="submit">Label</button></form>');
    }

}