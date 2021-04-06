<?php
/**
 * @author Sergio Abad <saaideveloper@gmail.com>
 * @see https://docs.magento.com/user-guide/system/data-attributes-product.html
 * @see https://www.mageplaza.com/devdocs/magento-2-create-product-programmatically.html
 */
namespace Saaideveloper\Framework\FileManager\DataFile\Csv\Product;

use Saaideveloper\Framework\FileManager\DataFile\Csv\AbstractDataFileCsv;


/**
 * 
 */
class ProductCsv extends AbstractDataFileCsv
{
    /**
     * @var  string
     */
    public $_test= 'test';

    public function __construct() {
        //parent::__construct();
    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_Csv_Product_ProductCSV::test";
    }

    public function writeCSV(){
        try {
            $om = \Magento\Framework\App\ObjectManager::getInstance();
            $filesystem = $om->get('Magento\Framework\Filesystem');
            $directoryList = $om->get('Magento\Framework\App\Filesystem\DirectoryList');
            $media = $filesystem->getDirectoryWrite($directoryList::VAR_DIR);
            $contents = "Saaideveloper\Framework\FileManager\DataFile\Csv\Product\ProductCsv.php";
            $media->writeFile("module1/sampleeeeeeee.txt",$contents);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    /**
     * Generate Line For Csv
     * @TODO : Finish logic generateCsvLine
     * @return string
     */
    //public function generateCsvLine(){return "generateCsvLine";}

    /**
     * Generate Simple product
     * @TODO : Finish Logic generateSimpleProduct
     * @return string 
     */
    //public function generateSimpleProduct(){ return"generateSimpleProduct";}

    /**
     * Generate Configurable product
     * @TODO : Finish Logic generateConfigurableProduct
     * @return string
     */
    //public function generateConfigurableProduct(){ return"generateConfigurableProduct";}
      
    /**
     * Generate Group Product
     * @TODO : Finish Logic generateGroupProduct
     * @return string
     */
    //public function generateGroupProduct(){ return"generateGroupProduct";}

    /**
     * Generate Bundle Product
     * @TODO : Finish Logic generateBundleProduct
     * @return string
     */
    //public function generateBundleProduct(){ return"generateBundleProduct";}
    
    /**
     * Generate Downloadable Product
     * @TODO : Finish Logic generateDownloadableProduct
     * @return string
     */
    //public function generateDownloadableProduct(){ return"generateDownloadableProduct";}


}