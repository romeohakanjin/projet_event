<?php
    namespace   api\Domain;
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
         * Membre date_naissance.
         *
         * @var string
         */
        private $date_naissance;

        /**
         * Membre adresse.
         *
         * @var string
         */
        private $adresse;

        /**
         * Membre code_postal.
         *
         * @var string
         */
        private $code_postal;

        /**
         * Membre ville.
         *
         * @var string
         */
        private $ville;

        /**
         * Membre type_contrat.
         *
         * @var string
         */
        private $type_contrat;

        /**
         * Membre id_etat_inscription.
         *
         * @var int
         */
        private $id_etat_inscription;

        /**
         * Membre civilite.
         *
         * @var string
         */
        private $civilite;

        /**
         * Membre niveau_etude.
         *
         * @var string
         */
        private $niveau_etude;

        /**
         * Membre date_inscription.
         *
         * @var string
         */
        private $date_inscription;

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
            return $this->date_naissance;
        }

        public function getAdresse() {
            return $this->adresse;
        }

        public function getCodePostal() {
            return $this->code_postal;
        }

        public function getVille() {
            return $this->ville;
        }

        public function getTypeContrat() {
            return $this->type_contrat;
        }

        public function getIdEtatInscription() {
            return $this->id_etat_inscription;
        }

        public function getCivilite() {
            return $this->civilite;
        }

        public function getNiveauEtude() {
            return $this->niveau_etude;
        }

        public function getDateInscription() {
            return $this->date_inscription;
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
            $this->date_naissance = $dateNaissance;
        return $this;
    }

        public function setAdresse($adresse) {
            $this->adresse = $adresse;
            return $this;
        }

        public function setCodePostal($code_postal) {
            $this->code_postal = $code_postal;
            return $this;
        }

        public function setVille($ville) {
            $this->ville = $ville;
            return $this;
        }

        public function setTypeContrat($type_contrat) {
            $this->type_contrat = $type_contrat;
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
            $this->niveau_etude = $niveau_etude;
            return $this;
        }

        public function setDateInscription($date_inscription) {
            $this->date_inscription = $date_inscription;
            return $this;
        }
    }