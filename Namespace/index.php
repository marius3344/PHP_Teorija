<?php 

require "src/Model/Customer.php";
require "src/Model/Product.php";
require "src/Database/Logger.php";
require "src/Utils/Logger.php";
use Paskaita\Model\Customer;
use Paskaita\Model\Product;
use Paskaita\Database\Logger;
use Paskaita\Utils\Logger as ULogger; //suteikiame Alias

// use Paskaita\Database;
// use Paskaita\Utils;

// use Paskaita\Model\{Customer, Product};

$customer = new Customer("Petras");
echo $customer->getName();

