<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QRF
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QRF
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
