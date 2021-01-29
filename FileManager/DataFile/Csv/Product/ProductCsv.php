<?php

namespace Saaideveloper\Framework\FileManager\DataFile\Csv\Product;

use Saaideveloper\Framework\FileManager\DataFile\Csv\AbstractDataFileCsv;


/**
 * 
 */
class ProductCsv extends AbstractDataFileCsv
{
   

    public function __construct() {
        parent::__construct();
    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_Csv_Product_ProductCSV::test";
    }


    /**
     * Generate Line For Csv
     * @TODO : Finish logic generateCsvLine
     * @return string
     */
    public function generateCsvLine(){return "generateCsvLine";}

    /**
     * Generate Simple product
     * @TODO : Finish Logic generateSimpleProduct
     * @return string 
     */
    public function generateSimpleProduct(){ return"generateSimpleProduct";}

    /**
     * Generate Configurable product
     * @TODO : Finish Logic generateConfigurableProduct
     * @return string
     */
    public function generateConfigurableProduct(){ return"generateConfigurableProduct";}
      
    /**
     * Generate Group Product
     * @TODO : Finish Logic generateGroupProduct
     * @return string
     */
    public function generateGroupProduct(){ return"generateGroupProduct";}

    /**
     * Generate Bundle Product
     * @TODO : Finish Logic generateBundleProduct
     * @return string
     */
    public function generateBundleProduct(){ return"generateBundleProduct";}
    
    /**
     * Generate Downloadable Product
     * @TODO : Finish Logic generateDownloadableProduct
     * @return string
     */
    public function generateDownloadableProduct(){ return"generateDownloadableProduct";}


}