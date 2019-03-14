<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class CodeTest extends TestCase
{
    public function testCSVFileExists() {
        $this->assertFileExists('data/data.csv');
    }
    public function testSrcDirectory(){
        $this->assertDirectoryExists('src');
    }
    public function testTestDirectory(){
        $this->assertDirectoryExists('test');
    }
    public function testextractCSVFile(){
        echo file_exists('extractCSV');
    }
    public function testHtmlFile(){
        echo file_exists('Html');
    }
    public function testMainFile(){
        echo file_exists('Main');
    }
    public function testRecordFile(){
        echo file_exists('Record');
    }
    public function testindexFile(){
        echo file_exists('index');
    }
    public function testrecordFactorFile(){
        echo file_exists('recordFactor');
    }
}