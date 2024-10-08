<?php

//include connect file

// include('./includes/connect.php'); //23-01-2024  //commented on 31-01-2024

//getting products

function getproducts()
{

    global $con; //23-01-2024

    //condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {







            $select_query = "Select * from `products` order by rand() limit 0,9";
            $result_query = mysqli_query($con, $select_query);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id']; //product_id as mentioned in database
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                // $product_keywords = $row['product_keywords'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price:$product_price/-</p> 
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>";
                // echo "<br>";

                // $product_image2 = $row['product_image2'];
                // $product_image3 = $row['product_image3'];
            }

        }
    }
}

//getting all products

function get_all_products()
{
    global $con; //23-01-2024

    //condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {







            $select_query = "Select * from `products` order by rand() ";
            $result_query = mysqli_query($con, $select_query);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id']; //product_id as mentioned in database
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                // $product_keywords = $row['product_keywords'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description
           </p>
           <p class='card-text'>Price:$product_price/-</p> 
           <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary'>View More</a> 
            </div>
        </div>
    </div>";
                // echo "<br>";

                // $product_image2 = $row['product_image2'];
                // $product_image3 = $row['product_image3'];
            }

        }
    }

}

//getting unique categories
function get_unique_categories()
{

    global $con; //23-01-2024

    //condition to check isset or not
    if (isset($_GET['category'])) {
        $category_id = $_GET['category']; //23-01-2024








        $select_query = "Select * from `products` where category_id=$category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        //displaying error if searched product is not there //23-01-2024
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger' >No stock for this category</h2>";
        }


        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id']; //product_id as mentioned in database
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            // $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/ $product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description
           </p>
           <p class='card-text'>Price:$product_price/-</p> 
           <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>";
            // echo "<br>";

            // $product_image2 = $row['product_image2'];
            // $product_image3 = $row['product_image3'];
        }

    }
}


//getting unique brands
function get_unique_brands()
{

    global $con; //23-01-2024

    //condition to check isset or not
    if (isset($_GET['brand'])) { //'brand' as mentioned in url when clicking on particular brand for example brand=1
        $brand_id = $_GET['brand']; //23-01-2024








        $select_query = "Select * from `products` where category_id=$brand_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        //displaying error if searched product is not there //23-01-2024
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger' >This brand is not available for service</h2>";
        }


        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id']; //product_id as mentioned in database
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            // $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/ $product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description
           </p>
           <p class='card-text'>Price:$product_price/-</p> 
           <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>";
            // echo "<br>";

            // $product_image2 = $row['product_image2'];
            // $product_image3 = $row['product_image3'];
        }

    }
}



//displaying brands in side nav

function getbrands()
{
    global $con; //23-01-2024
    $select_brands = "Select * from `brands` ";
    $result_brands = mysqli_query($con, $select_brands);
    // $row_data=mysqli_fetch_assoc($result_brands); //To fetch data from database
    // echo $row_data['brand_title'];  //brand_title because in brand table of database column name is brand_title       

    //To display all the brands in the database

    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id']; //brand_id,brand_title from database
        echo "  <li class='nav-item '>
        <a href='index.php?brand=$brand_id' class='nav-link text-light '>$brand_title</a>  
    </li>";
    }
}


//displaying categories in side nav
function getcategories()
{
    global $con;
    $select_categories = "Select * from `categories` ";
    $result_categories = mysqli_query($con, $select_categories);


    //To display all the categories in the database

    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id']; //brand_id,brand_title from database
        echo "  <li class='nav-item '>
        <a href='index.php?category=$category_id' class='nav-link text-light '>$category_title</a>  
    </li>";
    }

}

//searching products function

function search_product()
{

    global $con; //23-01-2024
    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];










        $search_query = "Select * from `products` where product_keywords like '% $search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
        $num_of_rows = mysqli_num_rows($result_query);

        //displaying error if searched product is not there //23-01-2024
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger' >No results match.No products found on this category!</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id']; //product_id as mentioned in database
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            // $product_keywords = $row['product_keywords'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/ $product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description
           </p>
           <p class='card-text'>Price:$product_price/-</p> 
           <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>";
            // echo "<br>";

            // $product_image2 = $row['product_image2'];
            // $product_image3 = $row['product_image3'];
        }

    }
}


//View details function 25-01-2024

function view_details()
{
    global $con; //23-01-2024

    //condition to check isset or not
    if (isset($_GET['product_id'])) {  //25-01-2024
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {

                $product_id = $_GET['product_id'];



                $select_query = "Select * from `products` where product_id=$product_id";
                $result_query = mysqli_query($con, $select_query);
                // $row=mysqli_fetch_assoc($result_query);
                // echo $row['product_title'];
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row['product_id']; //product_id as mentioned in database
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    // $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_image3 = $row['product_image3'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo "  <div class='col-md-4 mb-2'>
        <div class='card'>
            <img src='./admin_area/product_images/ $product_image1' class='card-img-top' alt='$product_title'> 
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description
           </p>
           <p class='card-text'>Price:$product_price/-</p> 
           <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a>
                <a href='index.php' class='btn btn-secondary'>Go Home</a>
            </div>
        </div>
    </div>
    
    
    
    <div class='col-md-8'>
   
    <div class='row'>
        <div class='col-md-12'>
            <h4 class='text-center text-success mb-5'>Related products</h4>
        </div>

        <div class='col-md-6'>
        <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
        </div>

        <div class='col-md-6'>
        <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
        </div>
    </div>
</div>";

                }

            }
        }
    }
}

// get ip  address function //26-01-2024 //javapoint website

function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 



//cart function  //26-01-2024

function cart()
{

    if (isset($_GET['add_to_cart']))       //if add to cart button is clicke then only perform following operation
    {
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];

        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        //displaying error, if product already stored in cart //26-01-2024
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already present inside the cart')</script>";
            echo "<script>window.open('index.php','_self')</script>"; //to redirect into home page after displaying of error message
        }

        //if not stored in cart,then add product into cart
        else {

            $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>"; //to redirect into home page after adding product into cart 

        }

    }

}

//function to get cart  item numbers //26-01-2024
function cart_item()
{

    if (isset($_GET['add_to_cart']))       //if add to cart button is clicke then only perform following operation
    {
        global $con;
        $get_ip_add = getIPAddress();


        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' ";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);

    } else {

        global $con;
        $get_ip_add = getIPAddress();


        $select_query = "Select * from `cart_details` where ip_address='$get_ip_add' ";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);

    }
    echo $count_cart_items;   //To print number of products added in the cart

}



//total price function  //26-01-2024 3:45PM

function total_cart_price()
{
    global $con;
    $get_ip_add = getIPAddress();
    $total_price = 0; //26-01-2024 7:09 PM
    $cart_query = "Select * from `cart_details` where ip_address='$get_ip_add'"; //26-01-2024 3:50PM
    $result = mysqli_query($con, $cart_query);


    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id'];
        $select_products = "Select * from `products` where product_id='$product_id'"; //26-01-2024 3:55PM
        $result_products = mysqli_query($con, $select_products);
        while ($row_product_price = mysqli_fetch_array($result_products))       //26-01-2024 3:58PM
        {
            $product_price = array($row_product_price['product_price']);           //[200,300]
            $product_values = array_sum($product_price);         //26-01-2024 4:03PM  //[500]
            $total_price += $product_values; //26-01-2024 7:10 PM //[500]



        }


    }
    echo $total_price;

}

//22-02-2024 //3:26PM
//get user order details

function get_user_order_details()
{

    global $con;
    $username = $_SESSION['username'];
    $get_details = "Select * from `user_table` where username='$username'";
    $result_query = mysqli_query($con, $get_details);

    while ($row_query = mysqli_fetch_array($result_query)) {
        $user_id = $row_query['user_id'];

        //22-02-2024 //3:37PM
        if (!isset($_GET['edit_account'])) {
            if (!isset($_GET['my_orders'])) {
                if (!isset($_GET['delete_account'])) {
                    $get_orders = "Select * from `user_orders` where user_id=$user_id and order_status='pending'";
                    $result_orders_query = mysqli_query($con, $get_orders);
                    $row_count = mysqli_num_rows($result_orders_query);

                    if ($row_count > 0) {
                        echo "<h3 class='text-center text-success mt-5 mb-2'>You Have <span class='text-danger'>$row_count</span> Pending Orders</h3>
                
                    <p class='text-center'> <a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
                    } else {
                        echo "<h3 class='text-center text-success mt-5 mb-2'>You Have Zero Pending Orders</h3>
                
                        <p class='text-center'> <a href='../index.php' class='text-dark'>Explore Products</a></p>";
                    }
                }
            }

        }
    }


}







?>