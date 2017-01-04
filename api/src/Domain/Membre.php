<?php
    namespace   api\Domain;
    use Symfony\Component\Validator\Constraints\Date;

    class Membre{
        /**
         * Membre id.
         *
         * @var integer
         */
        private $id;

        /**
         * Membre nom.
         *
         * @var string
         */
        private $nom;

        /**
         * Membre prenom.
         *
         * @var string
         */
        private $prenom;

        /**
         * Membre email.
         *
         * @var string
         */
        private $email;

        /**
         * Membre dateNaissance.
         *
         * @var Date
         */
        private $dateNaissance;

        /**
         * Membre adresse.
         *
         * @var string
         */
        private $adresse;

        /**
         * Membre codePostal.
         *
         * @var string
         */
        private $codePostal;

        /**
         * Membre ville.
         *
         * @var string
         */
        private $ville;

        /**
         * Membre typeContrat.
         *
         * @var string
         */
        private $typeContrat;

        /**
         * Membre idEtatInscription.
         *
         * @var int
         */
        private $idEtatInscription;

        /**
         * Membre civilite.
         *
         * @var string
         */
        private $civilite;

        /**
         * Membre niveauEtude.
         *
         * @var string
         */
        private $niveauEtude;

        /**
         * Membre dateInscription.
         *
         * @var string
         */
        private $dateInscription;

        public function getId() {
            return $this->id;
        }

        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getDateNaissance() {
            return $this->dateNaissance;
        }

        public function getAdresse() {
            return $this->adresse;
        }

        public function getCodePostal() {
            return $this->codePostal;
        }

        public function getVille() {
            return $this->ville;
        }

        public function getTypeContrat() {
            return $this->typeContrat;
        }

        public function getIdEtatInscription() {
            return $this->id_etat_inscription;
        }

        public function getCivilite() {
            return $this->civilite;
        }

        public function getNiveauEtude() {
            return $this->niveauEtude;
        }

        public function getDateInscription() {
            return $this->dateInscription;
        }

        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        public function setNom($nom) {
            $this->nom = $nom;
            return $this;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
            return $this;
        }

        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }

        public function setDateNaissance($dateNaissance) {
            $this->dateNaissance = $dateNaissance;
        return $this;
    }

        public function setAdresse($adresse) {
            $this->adresse = $adresse;
            return $this;
        }

        public function setCodePostal($code_postal) {
            $this->codePostal = $code_postal;
            return $this;
        }

        public function setVille($ville) {
            $this->ville = $ville;
            return $this;
        }

        public function setTypeContrat($type_contrat) {
            $this->typeContrat = $type_contrat;
            return $this;
        }

        public function setIdEtatInscription($id_etat_inscription) {
            $this->id_etat_inscription = $id_etat_inscription;
            return $this;
        }

        public function setCivilite($civilite) {
            $this->civilite = $civilite;
            return $this;
        }

        public function setNiveauEtude($niveau_etude) {
            $this->niveauEtude = $niveau_etude;
            return $this;
        }

        public function setDateInscription($date_inscription) {
            $this->date_inscription = $date_inscription;
            return $this;
        }
    }