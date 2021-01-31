<?php
/**
 * @author Sergio Abad Alonso <saaideveloper@gmail.com>
 */
namespace Saaideveloper\Framework\FileManager\DataFile\Csv\Product;


class VirtualProductCSV extends ProductCsv
{
    /**
     * CSV Row product_type
     * @var  string
     */
    public $_product_type= 'virtual';

    public function __construct() {
        //parent::__construct();
    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_Csv_Product_VirtualProductCSV::test";
    }

}