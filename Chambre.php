<?php

class Chambre
{
    private string $numero;
    private int $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $etat;

    public function __construct(string $numero, int $prix, int $nbLits, bool $wifi, bool $etat)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->etat = $etat;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix(int $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbLits(): int
    {
        return $this->nbLits;
    }

    public function setNbLits(int $nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    public function getWifi(): bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getEtat(): bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat)
    {
        $this->etat = $etat;

        return $this;
    }
}