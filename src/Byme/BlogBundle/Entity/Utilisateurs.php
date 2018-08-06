<?php

namespace Byme\BlogBundle\Entity;

/**
 * Utilisateurs
 */
class Utilisateurs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $motDePasse;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateurs
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
     * Set motDePasse
     *
     * @param string $motDePasse
     *
     * @return Utilisateurs
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    /**
     * @var \Byme\BlogBundle\Entity\role
     */
    private $role;


    /**
     * Set role
     *
     * @param \Byme\BlogBundle\Entity\role $role
     *
     * @return Utilisateurs
     */
    public function setRole(\Byme\BlogBundle\Entity\role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Byme\BlogBundle\Entity\role
     */
    public function getRole()
    {
        return $this->role;
    }
}
