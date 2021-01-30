<?php
/**
 * Copyright © 
 * @author Sergio Abad Alonso <saaideveloper@gmail.com>
 */
namespace Saaideveloper\Framework\FileManager\DataFile;

/**
 * Interface Saaideveloper\Framework\FileManager\DataFile
 *
 */
interface DataFileInterface
{
    /**
     * Returns test String
     *
     * @return string
     */
    public function test();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamRead
     */
    public function streamRead();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamWrite
     */
    public function streamWrite();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamClose
     */
    public function streamClose();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: fileExists
     */
    public function iswriteable ();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: getPathInfo
     */
    public function getPathInfo();
}
