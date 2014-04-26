<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * P
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\PRepository")
 */
class P
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="makefile", type="string", length=255)
     */
    private $makefile;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set makefile
     *
     * @param string $makefile
     * @return P
     */
    public function setMakefile($makefile)
    {
        $this->makefile = $makefile;

        return $this;
    }

    /**
     * Get makefile
     *
     * @return string 
     */
    public function getMakefile()
    {
        return $this->makefile;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return P
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
}
