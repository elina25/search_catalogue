<?php
class ControllerCategory
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



    public function getAllCategories() 
    {
        $stmt = $this->pdo->prepare('SELECT * 
                                FROM loumakos_categories
                                 ');

        $stmt->execute();

        $array = array();
        foreach ($stmt as $row) 
        {
            // do something with $row
            $itm = new Category();
            $itm->id = $row['id'];
            $itm->descr = $row['descr'];
            
            $array[] = $itm;
        }

        return $array;
    }


       public function GetSearchResults($search_text = NULL,$category_id = NULL, $PageSize = NULL, $RecordOffest = NULL)
    {   

        $array_parameters = array(); 
        $query =  'SELECT DISTINCT p_customers.*,loumakos_categories.id, loumakos_categories.descr
                                    FROM p_customers 
                                    INNER JOIN p_orders ON 
                                    `p_orders`.`customer_id` = p_customers.customer_id 
                                    INNER JOIN p_order_product ON
                                    p_orders.order_id = p_order_product.order_id 
                                    INNER JOIN order_product_subcategories ON
                                    order_product_subcategories.orderProductID = p_orders.order_id
                                    INNER JOIN loumakos_categories ON 
                                    loumakos_categories.id = order_product_subcategories.subcategoryID';

                                if (!empty($category_id)) {
                                  $query .= " WHERE loumakos_categories.id = :id";
                                  $array_parameters['id'] = $category_id;
                                }

                                if (!empty($category_id) && !empty($search_text) ) {
                                    $query .= " AND customer_name LIKE '%$search_text%'";
                                 //   $array_parameters['search_text'] = $search_text;

                                }

                                if (empty($category_id) && !empty($search_text) ) {
                                    $query .= " WHERE customer_name LIKE '%$search_text%'";
                                 //   $array_parameters['search_text'] = $search_text;

                                }

                         



                                // $query .= " LIMIT 10";




                                    // WHERE loumakos_categories.id = :id
              if(is_numeric($PageSize) && is_numeric($RecordOffest))
        {
            //echo '2:' . $PageSize . ' ' . $RecordOffest ;
            $query .= " LIMIT " .  $RecordOffest . "," . $PageSize;
        }                        

        //print_r($array_parameters);

        //echo $query;

        $stmt = $this->pdo->prepare($query);

        $stmt->execute($array_parameters);



        $array = array();
        
        foreach ($stmt as $row) 
        {
            // do something with $row
            $itm = new Category();
            $itm->customer_id = $row['customer_id'];
            $itm->category_description = $row['descr'];
            $itm->customer_name = $row['customer_name'];
            $itm->customer_company_name = $row['customer_company_name'];
            $itm->customer_title = $row['customer_title'];
    
            //$itm->orderProductID = $row['orderProductID'];
            //$itm->number = $row['number'];
            
            $array[] = $itm;
           

        }

        return $array;
    }


 public function GetCountSearchResultsWithFilters($search_text = NULL,$category_id = NULL) 
    {   


   try {

        $array_parameters = array(); 
        $query =  'SELECT DISTINCT count(p_customers.customer_id )
                                    FROM p_customers 
                                    INNER JOIN p_orders ON 
                                    `p_orders`.`customer_id` = p_customers.customer_id 
                                    INNER JOIN p_order_product ON
                                    p_orders.order_id = p_order_product.order_id 
                                    INNER JOIN order_product_subcategories ON
                                    order_product_subcategories.orderProductID = p_orders.order_id
                                    INNER JOIN loumakos_categories ON 
                                    loumakos_categories.id = order_product_subcategories.subcategoryID';

                                if (!empty($category_id)) {
                                  $query .= " WHERE loumakos_categories.id = :id";
                                  $array_parameters['id'] = $category_id;
                                }

                                if (!empty($category_id) && !empty($search_text) ) {
                                    $query .= " AND customer_name LIKE '%$search_text%'";
                                 //   $array_parameters['search_text'] = $search_text;

                                }

                                if (empty($category_id) && !empty($search_text) ) {
                                    $query .= " WHERE customer_name LIKE '%$search_text%'";
                                 //   $array_parameters['search_text'] = $search_text;

                                }



                                // $query .= " LIMIT 10";




                                    // WHERE loumakos_categories.id = :id
                                    

        //print_r($array_parameters);

        //echo $query;

        $stmt = $this->pdo->prepare($query);

        $stmt->execute($array_parameters);



        //$array = array();
        
        foreach ($stmt as $row) 
        {
            // do something with $row
           // $itm = new Category();
           //$itm->category_description = $row['descr'];
           //$itm->customer_name = $row['customer_name'];
    
            //$itm->orderProductID = $row['orderProductID'];
            //$itm->number = $row['number'];
            
            //$array[] = $itm;
             return $row[0]; 

        }

        return null;
    }
        catch (Exception $e) {
                         echo $e->getMessage();
                    }


    }





     public function GetCountAll_SearchResults() 
    {   


   try {
    
        $array_parameters = array(); 
        $query =  'SELECT DISTINCT count(p_customers.customer_id )
                                    FROM p_customers 
                                    INNER JOIN p_orders ON 
                                    `p_orders`.`customer_id` = p_customers.customer_id 
                                    INNER JOIN p_order_product ON
                                    p_orders.order_id = p_order_product.order_id 
                                    INNER JOIN order_product_subcategories ON
                                    order_product_subcategories.orderProductID = p_orders.order_id
                                    INNER JOIN loumakos_categories ON 
                                    loumakos_categories.id = order_product_subcategories.subcategoryID';

                               



                                // $query .= " LIMIT 10";




                                    // WHERE loumakos_categories.id = :id
                                    

        //print_r($array_parameters);

        //echo $query;

        $stmt = $this->pdo->prepare($query);

        $stmt->execute($array_parameters);



        //$array = array();
        
        foreach ($stmt as $row) 
        {
            // do something with $row
           // $itm = new Category();
           //$itm->category_description = $row['descr'];
           //$itm->customer_name = $row['customer_name'];
    
            //$itm->orderProductID = $row['orderProductID'];
            //$itm->number = $row['number'];
            
            //$array[] = $itm;
             return $row[0]; 

        }

        return null;
    }
        catch (Exception $e) {
                         echo $e->getMessage();
                    }


    }



    //fetch all companies based on search results
  public function getAllCompaniesForListingWithParams($category_id) 
    {
        $stmt = $this->pdo->prepare("SELECT DISTINCT p_customers.*,loumakos_categories.id, loumakos_categories.descr
                                    FROM p_customers 
                                    INNER JOIN p_orders ON 
                                    `p_orders`.`customer_id` = p_customers.customer_id 
                                    INNER JOIN p_order_product ON
                                     p_orders.order_id = p_order_product.order_id 
                                     INNER JOIN order_product_subcategories ON
                                     order_product_subcategories.orderProductID = p_orders.order_id
                                    INNER JOIN loumakos_categories ON 
                                    loumakos_categories.id = order_product_subcategories.subcategoryID
                                    WHERE loumakos_categories.id = :id
                                    
                                ");

        $stmt->execute(array('cat_id'=>$category_id,'category_id'=>$category_id));

        $array = array();
        $ind = 0;
        foreach ($stmt as $row) 
        {
            // do something with $row
            $itm = new Company();

             $itm->customer_name = $row['customer_name'];
            $itm->customer_company_name = $row['customer_company_name'];
            $itm->customer_title = $row['customer_title'];
            
            $array[$ind] = $itm;
            $ind++;
        }

        return $array;
    }






}
