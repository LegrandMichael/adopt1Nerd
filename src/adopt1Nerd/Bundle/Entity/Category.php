<?php

namespace adopt1Nerd\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="adopt1Nerd\Bundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titleCat", type="string", length=255)
     */
    private $titleCat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titleCat
     *
     * @param string $titleCat
     *
     * @return Category
     */
    public function setTitleCat($titleCat)
    {
        $this->titleCat = $titleCat;

        return $this;
    }

    /**
     * Get titleCat
     *
     * @return string
     */
    public function getTitleCat()
    {
        return $this->titleCat;
    }
}

