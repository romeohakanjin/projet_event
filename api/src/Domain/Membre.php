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
         * Membre date_naissance.
         *
         * @var Date
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

        public function getDate_naissance() {
            return $this->date_naissance;
        }

        public function getAdresse() {
            return $this->adresse;
        }

        public function getCode_postal() {
            return $this->code_postal;
        }

        public function getVille() {
            return $this->ville;
        }

        public function getType_contrat() {
            return $this->type_contrat;
        }

        public function getIdEtatInscription() {
            return $this->id_etat_inscription;
        }

        public function getCivilite() {
            return $this->civilite;
        }

        public function getNiveau_etude() {
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

        public function setDate_naissance($dateNaissance) {
            $this->date_naissance = $dateNaissance;
        return $this;
    }

        public function setAdresse($adresse) {
            $this->adresse = $adresse;
            return $this;
        }

        public function setCode_postal($code_postal) {
            $this->code_postal = $code_postal;
            return $this;
        }

        public function setVille($ville) {
            $this->ville = $ville;
            return $this;
        }

        public function setType_contrat($type_contrat) {
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

        public function setNiveau_etude($niveau_etude) {
            $this->niveau_etude = $niveau_etude;
            return $this;
        }

        public function setDateInscription($date_inscription) {
            $this->date_inscription = $date_inscription;
            return $this;
        }
    }