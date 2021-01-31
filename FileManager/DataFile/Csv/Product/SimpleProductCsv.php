<?php
/**
 * @author Sergio Abad Alonso <saaideveloper@gmail.com>
 */
namespace Saaideveloper\Framework\FileManager\DataFile\Csv\Product;


class SimpleProductCsv extends ProductCsv
{
    /**
     * CSV Row product_type
     * @var  string
     */
    public $_product_type= 'simple';;

    public function __construct() {
        //parent::__construct();
    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_Csv_Product_SimpleProductCsv::test";
    }

}