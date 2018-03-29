<?php

namespace TOBAT\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table(name="bateau")
 * @ORM\Entity(repositoryClass="TOBAT\Bundle\Repository\BateauRepository")
 */
class Bateau
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="longueur", type="integer")
     */
    private $longueur;

    /**
     * @var int
     *
     * @ORM\Column(name="largeur", type="integer")
     */
    private $largeur;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur", type="integer")
     */
    private $hauteur;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="nbCabine", type="integer")
     */
    private $nbCabine;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSaleEau", type="integer")
     */
    private $nbSaleEau;

    /**
     * @var int
     *
     * @ORM\Column(name="nbMoteur", type="integer")
     */
    private $nbMoteur;

    /**
     * @var int
     *
     * @ORM\Column(name="puissance", type="integer")
     */
    private $puissance;

    /**
     * @var int
     *
     * @ORM\Column(name="nbHMoteur", type="integer")
     */
    private $nbHMoteur;

    /**
     * @var int
     *
     * @ORM\Column(name="energie", type="integer")
     */
    private $energie;

    /**
     * @var int
     *
     * @ORM\Column(name="latitude", type="integer")
     */
    private $latitude;

    /**
     * @var int
     *
     * @ORM\Column(name="longitude", type="integer")
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Bateau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Bateau
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Bateau
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set longueur
     *
     * @param integer $longueur
     *
     * @return Bateau
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    
        return $this;
    }

    /**
     * Get longueur
     *
     * @return integer
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param integer $largeur
     *
     * @return Bateau
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    
        return $this;
    }

    /**
     * Get largeur
     *
     * @return integer
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     *
     * @return Bateau
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    
        return $this;
    }

    /**
     * Get hauteur
     *
     * @return integer
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Bateau
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set nbCabine
     *
     * @param integer $nbCabine
     *
     * @return Bateau
     */
    public function setNbCabine($nbCabine)
    {
        $this->nbCabine = $nbCabine;
    
        return $this;
    }

    /**
     * Get nbCabine
     *
     * @return integer
     */
    public function getNbCabine()
    {
        return $this->nbCabine;
    }

    /**
     * Set nbSaleEau
     *
     * @param integer $nbSaleEau
     *
     * @return Bateau
     */
    public function setNbSaleEau($nbSaleEau)
    {
        $this->nbSaleEau = $nbSaleEau;
    
        return $this;
    }

    /**
     * Get nbSaleEau
     *
     * @return integer
     */
    public function getNbSaleEau()
    {
        return $this->nbSaleEau;
    }

    /**
     * Set nbMoteur
     *
     * @param integer $nbMoteur
     *
     * @return Bateau
     */
    public function setNbMoteur($nbMoteur)
    {
        $this->nbMoteur = $nbMoteur;
    
        return $this;
    }

    /**
     * Get nbMoteur
     *
     * @return integer
     */
    public function getNbMoteur()
    {
        return $this->nbMoteur;
    }

    /**
     * Set puissance
     *
     * @param integer $puissance
     *
     * @return Bateau
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    
        return $this;
    }

    /**
     * Get puissance
     *
     * @return integer
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set nbHMoteur
     *
     * @param integer $nbHMoteur
     *
     * @return Bateau
     */
    public function setNbHMoteur($nbHMoteur)
    {
        $this->nbHMoteur = $nbHMoteur;
    
        return $this;
    }

    /**
     * Get nbHMoteur
     *
     * @return integer
     */
    public function getNbHMoteur()
    {
        return $this->nbHMoteur;
    }

    /**
     * Set energie
     *
     * @param integer $energie
     *
     * @return Bateau
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    
        return $this;
    }

    /**
     * Get energie
     *
     * @return integer
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set latitude
     *
     * @param integer $latitude
     *
     * @return Bateau
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return integer
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param integer $longitude
     *
     * @return Bateau
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return integer
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Bateau
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Bateau
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}

