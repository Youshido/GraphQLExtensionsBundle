<?php
/**
 * This file is a part of GraphQLExtensionsBundle project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 2/22/17 9:09 PM
 */

namespace Youshido\GraphQLExtensionsBundle\Service\Locator;

use Youshido\GraphQLExtensionsBundle\Model\PathAwareInterface;

class LocatedObject implements LocatedObjectInterface, PathAwareInterface
{
    /** @var  string */
    private $path;

    /** @var  int */
    private $size;

    /** @var  string */
    private $extension;

    /** @var  string */
    private $filename;

    public function __construct($path, $filename = null, $size = 0, $extension = null)
    {
        $this->path      = $path;
        $this->filename  = $filename;
        $this->size      = $size;
        $this->extension = $extension;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    public function getExtension()
    {
        return $this->extension;
    }
}