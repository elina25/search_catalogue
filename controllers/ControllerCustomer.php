<?php
class ControllerCustomer
{ 
    private $db;
    private $pdo;
    function __construct() 
    {
        // connecting to database
        $this->db = new DB_Connect();
        $this->pdo = $this->db->connect();
    }
 
    function __destruct() { }




    public function getCustomerWithID($customer_id) {

        $stmt = $this->pdo->prepare('SELECT * 
            FROM `p_customers` 
            INNER JOIN customer_address 
            ON p_customers.customer_id = customer_address.customer_id
            WHERE p_customers.customer_id = :customer_id 
');

        $stmt->execute( array('customer_id' => $customer_id ) );

        //$array = array();
        //$ind = 0;
        foreach ($stmt as $row)
         {
            //do something with $row
            $itm = new Customer();
            $itm->customer_id = $row['customer_id'];
            $itm->customer_name = $row['customer_name'];
            $itm->customer_company_name = $row['customer_company_name'];
            $itm->customer_title = $row['customer_title'];
            $itm->customer_fname = $row['customer_fname'];
            $itm->customer_phone = $row['customer_phone'];
            $itm->customer_mobile = $row['customer_mobile'];
            $itm->customer_email = $row['customer_email'];
            $itm->customer_afm = $row['customer_afm'];
            $itm->customer_doy = $row['customer_doy'];
            $itm->customer_website = $row['customer_website'];
            $itm->street = $row['street'];
            $itm->street2 = $row['street2'];
            $itm->street2 = $row['street2'];
            $itm->street_number = $row['street_number'];
            $itm->latitude = $row['latitude'];
            $itm->longitude = $row['longitude'];
            $itm->email = $row['email'];
            $itm->phone = $row['phone'];
            $itm->phone2 = $row['phone2'];
           
        
           

            //$array[$ind] = $itm;
           // $ind++;

          }

        return $itm;
    }




    public function getCustomerSocialWithID($customer_id) {

        $stmt = $this->pdo->prepare('SELECT * 
            FROM `customer_social_network` 
            WHERE  customer_id = :customer_id 
');

        $stmt->execute( array('customer_id' => $customer_id ) );

        foreach ($stmt as $row)
         {
            //do something with $row
            $itm = new Customer();
            $itm->customer_id = $row['customer_id'];
            $itm->social_network_id = $row['social_network_id'];
            $itm->url = $row['url'];
          
          }

        return $itm;
    }




}

?>

















