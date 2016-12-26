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
         * Saves a comment into the database.
         *
         * @param  api\Domain $content The comment to save
         */
        public function save(Membre $content) {
            $Data = array(
                'id' => $content->getId(),
                'nom' => $content->getId(),
                'prenom' => $content->getId(),
                'date_naissance' => $content->getId(),
                'adresse' => $content->getId(),
                'code_postal' => $content->getId(),
                'ville' => $content->getId(),
                'niveau_etudes' => $content->getId(),
                'type_contrat' => $content->getId()
            );

            return $this->db->update('membre', $Data, array('id' => $content->getId()));
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
            $membre->setDate_naissance($row['date_naissance']);
            $membre->setAdresse($row['adresse']);
            $membre->setCode_postal($row['code_postal']);
            $membre->setVille($row['ville']);
            $membre->setType_contrat($row['type_contrat']);
            $membre->setIdEtatInscription($row['id_etat_inscription']);
            $membre->setCivilite($row['civilite']);
            $membre->setNiveau_etude($row['niveau_etude']);
            $membre->setDateInscription($row['date_inscription']);

            return $membre;
        }
    }