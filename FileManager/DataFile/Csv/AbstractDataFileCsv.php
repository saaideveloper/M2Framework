<?php
/**
 * 
 */
namespace Saaideveloper\Framework\FileManager\DataFile\Csv;

use Saaideveloper\Framework\FileManager\DataFile\Csv\DataFileCsvInterface;
use Saaideveloper\Framework\FileManager\DataFile\AbstractDataFile;

/**
 * 
 */
abstract class AbstractDataFileCsv extends AbstractDataFile implements DataFileCsvInterface
{
    public function __construct() {

    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_Csv_AbstractDataFile ::test extends Saaideveloper\Framework\FileManager\DataFile\AbstractDataFile";
    }

    /**
     * @TODO : Check Params
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamReadCSV
     */
    public function streamReadCSV(){}

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamWriteCSV
     */
    public function streamWriteCSV(){}

}