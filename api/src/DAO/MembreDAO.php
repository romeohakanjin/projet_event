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
                $membresId = $row['date_inscription'];
                $membres[$membresId] = $this->buildMembre($row);
            }
            return $membres;
        }

        /**
         * Creates an Membres object based on a DB row.
         *
         * @param array $row The DB row containing Membre data.
         * @return api\Domain\Membre
         */
        private function buildMembre(array $row) {
            $membre = new Membre();
            $membre->setId($row['id']);
            $membre->setNom($row['nom']);
            $membre->setPrenom($row['prenom']);

            return $membre;
        }
    }