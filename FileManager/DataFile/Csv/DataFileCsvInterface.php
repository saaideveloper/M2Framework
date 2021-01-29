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
    public function generateLine();
  }