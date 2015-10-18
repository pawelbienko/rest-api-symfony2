<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Article
 *
 * @author symfony
 * @ORM\Entity()
 */
class Location {
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=100)
     */
    protected $address;
    
     /**
     * @ORM\Column(type="float")
     */
    protected $lat;
    
     /**
     * @ORM\Column(type="float")
     */
    protected $lng;

    public function __construct($name = '', $address = '', $lat = '', $lng = '') {
        
      /*  echo $lat;
        die();
        $this->name = $name;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;*/
    }

        /**
     * Set id
     *
     * @return \Integer
     */
    public function setId()
    {
        return $this->id;
    }
    
        /**
     * Get id
     *
     * @return \Integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Location
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Location
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Location
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }
}
