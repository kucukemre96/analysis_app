<?php

namespace OCA\Analysis_App\Tests;

use OCA\Analysis_app\FileModel;
use Test\TestCase;

class FileModelTest extends TestCase {
    /** @var $currentFolderMock | \PHPUnit_Framework_MockObject_MockObject */
    private $currentFolderMock;
    /** @var FileModel $fileModelObject */
    private $fileModelObject;
    /** @var $biggestFileNodesMock | \PHPUnit_Framework_MockObject_MockObject */
    private $biggestFileNodesMock;
    /** @var $mimeTypesMock | \PHPUnit_Framework_MockObject_MockObject */
    private $mimeTypesMock;
    /** @var $biggestFilesMock | \PHPUnit_Framework_MockObject_MockObject */
    private $biggestFilesMock;



    protected function setUp() {
        parent::setUp();
        $this->currentFolderMock = $this->getMockBuilder('OCP\Files\Folder')
            ->getMock();
        $this->biggestFileNodesMock = $this->getMockBuilder('OCP\Files\Node');
        $this->mimeTypesMock = array();
        $this->biggestFilesMock = array();
        $this->fileModelObject = new FileModel($this->currentFolderMock);
    }

    public function testAnalyze() {

    }

    public function testGetAnalysisReport() {

    }

    public function testPushToBiggestFileIfNecessary() {

    }

    public function testAnalyzeMimeType() {

    }

    public function convertBiggestFilesNodeToArray() {

    }
}