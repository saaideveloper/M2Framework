<?php

namespace Saaideveloper\Framework\FileManager\DataFile;

use Magento\Framework\Filesystem\Io\File;
//use Magento\Framework\Filesystem\Driver\File;

use Saaideveloper\Framework\FileManager\DataFile\DataFileInterface;

/**
 * 
 */
abstract class AbstractDataFile extends File implements DataFileInterface
{
    public function __construct() {

    }

    public function test(){
        return "Saaideveloper_Framework_Filemanager_DataFile_AbstractDataFile ::test extends File 
        class AbstractDataFile extends File ";
    }


}