<?php
    namespace api\DAO;

    use Doctrine\DBAL\Connection;

    use api\Domain\Membre;

    class MembreDAO{
        /**
         * Database connection
         *
         * @var \Doctrine\DBAL\Connection
         */
        private $db;

        /**
         * Constructor
         *
         * @param \Doctrine\DBAL\Connection The database connection object
         */
        public function __construct(Connection $db) {
            $this->db = $db;
        }

        /**
         * @param $id
         * @return array
         */
        public function find($id) {
            $sql = "SELECT * FROM membre WHERE id = ? ";
            $row = $this->db->fetchAssoc($sql, array($id));

            return $row;
        }

        /**
         * @return array
         */
        public function findAttente() {
            $sql = "SELECT * FROM membre WHERE id_etat_inscription = ?";
            $row = $this->db->fetchAll($sql, array(1));

            return $row;
        }

        /**
         * Return a list of all membre, sorted by date (most recent first).
         *
         * @return array A list of all membre.
         */
        public function findAll() {
            $sql = "SELECT * FROM membre ORDER BY date_inscription DESC";
            $result = $this->db->fetchAll($sql);
            // Convert query result to an array of domain objects
            $membres = array();
            foreach ($result as $row) {
                $membres[$row['id']] = $this->buildMembre($row);
            }
            return $membres;
        }


        /**
         * @param Membre $content
         * @return int
         */
        public function save(Membre $content, $option) {
            $Data = array(
                'nom' => $content->getNom(),
                'prenom' => $content->getPrenom(),
                'date_naissance' => $content->getDateNaissance(),
                'adresse' => $content->getAdresse(),
                'code_postal' => $content->getCodePostal(),
                'ville' => $content->getVille(),
                'niveau_etude' => $content->getNiveauEtude(),
                'type_contrat' => $content->getTypeContrat()
            );

            return $this->db->$option('membre', $Data);
        }

        /**
         * Creates an Membres object based on a DB row.
         *
         * @param array $row The DB row containing Membre data.
         * @return \api\Domain\Membre
         */
        private function buildMembre(array $row) {
            $membre = new Membre();
            $membre->setId($row['id']);
            $membre->setNom($row['nom']);
            $membre->setPrenom($row['prenom']);
            $membre->setEmail($row['email']);
            $membre->setDateNaissance($row['date_naissance']);
            $membre->setAdresse($row['adresse']);
            $membre->setCodePostal($row['code_postal']);
            $membre->setVille($row['ville']);
            $membre->setTypeContrat($row['type_contrat']);
            $membre->setIdEtatInscription($row['id_etat_inscription']);
            $membre->setCivilite($row['civilite']);
            $membre->setNiveauEtude($row['niveau_etude']);
            $membre->setDateInscription($row['date_inscription']);

            return $membre;
        }
    }