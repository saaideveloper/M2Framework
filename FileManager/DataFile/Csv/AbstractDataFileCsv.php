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

}