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

    public function __toString()
    {
        return "$this->nom " . $this->etoiles . " $this->ville";
    }

    public function afficherAdresse()
    {
        return "$this->adresse " . $this->codePostal . " $this->ville";
    }

    public function getInfos()
    {
        return "<h3>$this</h3>
                <p>" . $this->afficherAdresse() . "</p>
                <p>Nombre de chambres : " . count($this->chambres) . "</p>
                <p>Nombre de chambres réservées : " . count($this->reservations) . "</p>
                <p>Nombre de chambres dispo : " . count($this->chambres) - count($this->reservations) . " </p>";
    }

    public function afficherReservations()
    {
        $result = "<h3>Réservations de l'hôtel $this</h3>
                    <span class='green'>" . count($this->reservations) . " Réservations</span>";
        if (empty($this->reservations)) {
            $result .= "<p>Aucune réservations !</p>";
        } else {
            foreach ($this->reservations as $reservation) {
                $result .= "<p>" . $reservation->getClient() . " - " . $reservation->getChambre()->afficherNumero() . " - " . $reservation->afficherDates() . "</p>";
            }
        }
        return $result;
    }

    public function afficherStatut()
    {

        $result = "<h3><span class='statut'>Statuts des chambres de </span>$this</h3>";
        $result .= "<table>
                    <thead>
                        <tr>
                            <th id='chambre'>CHAMBRE</th>
                            <th id='prix'>PRIX</th>
                            <th id='wifi'>WIFI</th>
                            <th id='etat'>ETAT</th>
                        </tr>
                    </thead>    
                    <tbody>";
        foreach ($this->chambres as $chambre) {
            $result .= "<tr>
                        <td>" . $chambre->afficherNumero() . "</td>
                        <td>" . $chambre->getPrix() . " €</td>
                        <td>" . $chambre->afficherIcon() . "</td>
                        <td><span class ='res'>" . $chambre->afficherEtat() . "</span></td>";
        }
        $result .= "</tbody></table>";
        return $result;
    }

}