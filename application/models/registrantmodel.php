<?php

class RegistrantModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all registrants from database
     */
    public function getAllRegistrants()
    {
        $sql = "SELECT * FROM registrants ORDER BY time DESC";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * Add a registrant to database
     * @param array $info Registrant info
     */
    public function addRegistrant($info)
    {
        // check for items, clean the input from javascript code
        $fname = isset($info['fname']) ? strip_tags($info['fname']) : '';
        $lname = isset($info['lname']) ? strip_tags($info['lname']) : '';
        $addr1 = isset($info['addr1']) ? strip_tags($info['addr1']) : '';
        $addr2 = isset($info['addr2']) ? strip_tags($info['addr2']) : '';
        $city = isset($info['city']) ? strip_tags($info['city']) : '';
        $state = isset($info['state']) ? strip_tags($info['state']) : '';
        $zip = isset($info['zip']) ? strip_tags($info['zip']) : '';
        $country = isset($info['country']) ? strip_tags($info['country']) : '';

        // server side checks for registration, not as informative
        // TODO return informative message for each case
        if ($fname === '' || $lname === '' || $addr1 === '' || $city === '' || strlen($state) !== 2 || (strlen($zip) !== 5 && strlen($zip) !== 9) || $country !== 'US') {
          return false;
        }

        $sql = "INSERT INTO registrants (fname, lname, addr1, addr2, city, state, zip, country, time) VALUES (:fname, :lname, :addr1, :addr2, :city, :state, :zip, :country, NOW())";
        $query = $this->db->prepare($sql);
        $query->execute(array(':fname' => $fname, ':lname' => $lname, ':addr1' => $addr1, ':addr2' => $addr2, ':city' => $city, ':state' => $state, ':zip' => $zip, ':country' => $country));

        return true;
    }

    /**
     * Delete a registrant in the database
     * @param int $registrant_id Id of registrant
     */
    public function deleteRegistrant($registrant_id)
    {
        $sql = "DELETE FROM registrants WHERE id = :registrant_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':registrant_id' => $registrant_id));

        return true;
    }
}
