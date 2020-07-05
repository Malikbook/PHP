<?php

namespace Core\Classes;

class Router{
    
    public static function routing(object $db){
        if(isset($_POST['submit'])){

            if($_POST['submit'] == 'sellers'){
                Master_views::go_to('Views_controller', [
                    'DB' => $_SESSION['connect'] = 'seller',
                    "sellers" => $db->get_info("SELECT * FROM `sellers` ORDER BY `seller_id`")
                ]);
            }

            if($_POST['submit'] == 'customers'){
                Master_views::go_to('Views_controller', [
                    'DB' => $_SESSION['connect'] = 'customer',
                    "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                    customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                    JOIN `sellers` ON customers.seller_id=sellers.seller_id
                    ORDER BY sellers.seller_id ASC, customers.customer_id;")
                ]);
            }
        
            if($_POST['submit'] == 'sell_param'){
                $city = $_POST['city'];
                $com = trim($_POST['commission'], "%");
        
                if(($city == '-') && ($_POST['commission'] == '-')){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'seller',
                        "sellers" => $db->get_info("SELECT * FROM `sellers` ORDER BY `seller_id`")
                    ]);
                } else if(($city !== '-') && ($_POST['commission'] == '-')){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'seller',
                        "sellers" => $db->get_info("SELECT * FROM `sellers` WHERE `seller_city` = :city ORDER BY `seller_id`", array('city' => $city))
                    ]);
                } else if (($city == '-') && ($_POST['commission'] !== '-')) {
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'seller',
                        "sellers" => $db->get_info("SELECT * FROM `sellers` WHERE `commission` = :com ORDER BY `seller_id`", array('com' => $com))
                    ]);
                } else if(($city !== '-') && ($_POST['commission'] !== '-')){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'seller',
                        "sellers" => $db->get_info("SELECT * FROM `sellers` WHERE `seller_city` = :city AND `commission` = :com ORDER BY `seller_id`", array('city' => $city, 'com' => $com))
                    ]);
                } else {
                    echo "<span>Information ERR</span>";
                }
            }

            if($_POST['submit'] == 'custom_param'){
                $city = $_POST['city'];
                $rating = (int)$_POST['rating'];
                $seller = $_POST['seller'];

                if($city == "-" && $rating == "-" && $seller == "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id
                        ORDER BY sellers.seller_id ASC, customers.customer_id;")
                    ]);
                } else if($city !== "-" && $rating == "-" && $seller == "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.customer_city = :city
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('city' => $city))
                    ]);
                } else if($city == "-" && $rating !== "-" && $seller == "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.rating = :rating
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('rating' => $rating))
                    ]);
                }else if($city == "-" && $rating == "-" && $seller !== "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE sellers.seller_name = :seller
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('seller' => $seller))
                    ]);
                }else if($city !== "-" && $rating !== "-" && $seller == "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.customer_city = :city AND customers.rating = :rating
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('city' => $city, 'rating' => $rating))
                    ]);
                }else if($city !== "-" && $rating == "-" && $seller !== "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.customer_city = :city AND sellers.seller_name = :seller
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('city' => $city, 'seller' => $seller))
                    ]);
                }else if($city == "-" && $rating !== "-" && $seller !== "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.rating = :rating AND sellers.seller_name = :seller
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('rating' => $rating, 'seller' => $seller))
                    ]);
                }else if($city !== "-" && $rating !== "-" && $seller !== "-"){
                    Master_views::go_to('Views_controller', [
                        'DB' => $_SESSION['connect'] = 'customer',
                        "customers" => $db->get_info("SELECT customers.customer_id, customers.customer_name, customers.customer_city,
                        customers.rating, sellers.seller_id, sellers.seller_name FROM `customers`
                        JOIN `sellers` ON customers.seller_id=sellers.seller_id WHERE customers.customer_city = :city AND customers.rating = :rating AND sellers.seller_name = :seller
                        ORDER BY sellers.seller_id ASC, customers.customer_id;", array('city' => $city, 'rating' => $rating, 'seller' => $seller))
                    ]);
                }
            }

            if($_POST['submit'] == 'return'){
                Master_views::go_to('Views_controller', [
                    'DB' => 'start'
                ]);
            }
        }
    }
}