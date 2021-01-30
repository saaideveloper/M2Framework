<?php
/**
 * 
 */

 namespace Saaideveloper\Framework\FileManager\DataFile\Csv;

 /**
  * 
  */

  interface DataFileCsvInterface
  {
     /**
     * Returns test String
     *
     * @return string
     */
    public function test();

    /**
     * Generate Line For CSV
     * 
     * @return string
     */
    //public function generateLine();

    /**
     * @TODO : Check Params
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamReadCSV
     */
    public function streamReadCSV();

    /**
     * @TODO : Check Params 
     * 
     * @see Magento/Framework/Filesystem/IO/File :: streamWriteCSV
     */
    public function streamWriteCSV();

  }