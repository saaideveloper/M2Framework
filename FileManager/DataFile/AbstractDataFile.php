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

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamRead
     */
    public function streamRead(){}

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamWrite
     */
    public function streamWrite(){}

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamClose
     */
    public function streamClose(){}

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: fileExists
     */
    public function iswriteable (){}

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: getPathInfo
     */
    public function getPathInfo(){}

}