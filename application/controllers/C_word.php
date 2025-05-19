<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once APPPATH."/third_party/PHPWord.php"; 
class C_word extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('m_data');
//        $this->load->library('word');
    }

    public function index() {
//        require_once APPPATH . "/third_party/PHPWord.php";
        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(2);
        $section->addText('Mohammad Rifqi Sucahyo.', array('name' => 'Verdana', 'color' => '006699'));
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('rStyle', array('bold' => true, 'italic' => true, 'size' => 16));
        $PHPWord->addParagraphStyle('pStyle', array('align' => 'center', 'spaceAfter' => 100));
        // Save File / Download (Download dialog, prompt user to save or simply open it)
        $section->addText('Ini Adalah Demo PHPWord untuk CI', 'rStyle', 'pStyle');

        $filename = 'just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');
    }

}
