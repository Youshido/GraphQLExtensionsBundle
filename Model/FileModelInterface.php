<?php

namespace Youshido\GraphQLExtensionsBundle\Model;

/**
 * Class File
 *
 * @MongoDB\Document(collection="files")
 * @MongoDB\HasLifecycleCallbacks()
 */
interface FileModelInterface extends PathAwareInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return mixed
     */
    public function getSize();

    /**
     * @param mixed $size
     *
     * @return $this
     */
    public function setSize($size);

    /**
     * @return mixed
     */
    public function getPath();

    /**
     * @param mixed $path
     *
     * @return $this
     */
    public function setPath($path);
}
