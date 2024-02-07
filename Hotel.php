<?php

class Hotel
{
    private string $nom;
    private string $etoiles;
    private string $adresse;
    private string $ville;
    private string $codePostal;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom, string $etoiles, string $adresse, string $ville, string $codePostal)
    {
        $this->nom = $nom;
        $this->etoiles = $etoiles;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->chambres = [];
        $this->reservations = [];
    }

    // GETTERS & SETTERS //


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEtoiles(): string
    {
        return $this->etoiles;
    }

    public function setEtoiles(string $etoiles)
    {
        $this->etoiles = $etoiles;

        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }
    public function getChambres()
    {
        return $this->chambres;
    }

    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

    public function addChambres(Chambre $chambre)
    {
        $this->chambres[] = $chambre;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservations(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    // DISPLAY //

    public function getInfos()
    {
        return "<h3>$this->nom " . $this->etoiles . " $this->ville</h3>
                    <p>$this->adresse " . $this->codePostal . " $this->ville</p>
                    <p>Nombre de chambres : " . count($this->chambres) . "</p>
                    <p>Nombre de chambres reservées : </p>
                    <p>Nombre de chambres dispo : </p>";
    }


}