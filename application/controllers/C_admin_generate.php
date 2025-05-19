<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* @property phpword_model $phpword_model */
include_once(APPPATH . "third_party/PhpWord/Autoloader.php");

//include_once(APPPATH . "core/Front_end.php");

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();
Settings::loadConfig();

class C_admin_generate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('m_generate');
//        $this->load->model('phpword_model');
    }
    public function index() {
        if ($this->session->userdata('logged_in')) {
//            echo phpinfo(); die();
            $_SESSION['menu'] = 'generate';

            $data['sk'] = $this->m_generate->getAllbyorder("idsk",'desc','sk');
            $data['periode'] = $this->m_generate->getAllbyorder('idperiode', 'desc', 'periode');
            $data['template'] = $this->m_generate->getAllbyorder('idtemplate', 'desc', 'template');

            $this->load->view('v_admin_generate', $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }
    function buatsk() {
        if ($this->session->userdata('logged_in')) {
            $response = 0;

            $nosk = $this->input->post('nosk');
            $judul = strtoupper($this->input->post('judul'));
            $sumberdana = $this->input->post('sumberdana');
            $tanggalmulai = $this->input->post('tanggalmulai');
            $tanggalakhir = $this->input->post('tanggalakhir');
            $tanggalpenetapan = $this->input->post('tanggalpenetapan');
            $namadekan = strtoupper($this->input->post('namadekan'));
            $nipdekan = $this->input->post('nipdekan');
            $idperiode = $this->input->post('idperiode');
            $idtemplate = $this->input->post('idtemplate');
            
            if ($tanggalmulai != "") {
                $tgl = explode('/', $tanggalmulai);
                $tanggalmulai_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            if ($tanggalakhir != "") {
                $tgl = explode('/', $tanggalakhir);
                $tanggalakhir_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            if ($tanggalpenetapan != "") {
                $tgl = explode('/', $tanggalpenetapan);
                $tanggalpenetapan_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            
            $sk = $this->m_generate->caridata('nosk',$nosk,'sk');
            if(empty($sk)){
                $data = array(
                    "idperiode" => $idperiode,
                    "idtemplate" => $idtemplate,
                    "nosk" => $nosk,
                    "judul" => $judul,
                    "sumberdana" => $sumberdana,
                    "tanggalmulai" => $tanggalmulai_edit,
                    "tanggalakhir" => $tanggalakhir_edit,
                    "tanggalpenetapan" => $tanggalpenetapan_edit,
                    "namadekan" => $namadekan,
                    "nipdekan" => $nipdekan,
                    "generatedate" => date('Y-m-d')
                );

                $result= $this->m_generate->simpandatawithconfirm($data,'sk');
                if($result){
                    $newsk= $this->m_generate->getLastID('idsk','sk');
                    $fileloc=$this->generate($newsk[0]->idsk);
                    $datafile=array(
                        'fileloc' => $fileloc
                    );
                    $update= $this->m_generate->updatedata('idsk',$newsk[0]->idsk,$datafile,'sk');
                    if($update){
                        $response=1;
                    }
                    
                }
            }
            
            echo $response;
        } else {
            redirect('welcome', 'refresh');
        }
    }
    function generate($idsk) {
        $sk = $this->m_generate->getSK($idsk);
        $tablesk = $this->m_generate->gettableSK($idsk);
//        print_r($tablesk); die();
//        $path = "./uploads/";
        $template=$sk[0]->fileloc;
                
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $header = array('size' => 16, 'bold' => true);

        $section->addTextBreak(1);
        $section->addText('Fancy table', $header);

        $fancyTableStyleName = 'Fancy Table';
        $fancyTableStyle = array('borderSize' => 6, 'borderColor' => '000000', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::START);
        $fancyTableFirstRowStyle = array('valign' => 'center','borderBottomSize' => 10, 'borderBottomColor' => '000000');
        $fancyTableCellStyle = array('valign' => 'center','name'=> 'Bookman Old Style','size' => 11);
        $fancyTableFontStyle = array('bold' => true,'name'=> 'Bookman Old Style','size' => 11);

        $phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
        $table = $section->addTable($fancyTableStyle);
        $table->addRow(1000);
        $table->addCell(200, $fancyTableFirstRowStyle)->addText('No.', $fancyTableFontStyle, array('align' => 'center'));
        $table->addCell(6000, $fancyTableFirstRowStyle)->addText('Judul Penelitian', $fancyTableFontStyle, array('align' => 'center'));
        
        $ketuamhs = $this->m_generate->cekketua($idsk);
        $jmlketuamhs=$ketuamhs[0]->jmlketuamhs;
        if($jmlketuamhs > 0){
            $table->addCell(6000, $fancyTableFirstRowStyle)->addText('Pembimbing', $fancyTableFontStyle, array('align' => 'center'));
        }
        $table->addCell(6000, $fancyTableFirstRowStyle)->addText('Nama Tim', $fancyTableFontStyle, array('align' => 'center'));
        $table->addCell(2000, $fancyTableFirstRowStyle)->addText('Departemen', $fancyTableFontStyle, array('align' => 'center'));
        $table->addCell(3000, $fancyTableFirstRowStyle)->addText('Jenis Penelitian', $fancyTableFontStyle, array('align' => 'center'));
        $table->addCell(3000, $fancyTableFirstRowStyle)->addText('Jumlah Dana', $fancyTableFontStyle, array('align' => 'center'));
        $i=1; $j=1;
        foreach ($tablesk as $data) {                       
            $table->addRow();
            $table->addCell(200)->addText($i.".",$fancyTableCellStyle, array('align' => 'center'));
            $table->addCell(6000)->addText($data->judul,$fancyTableCellStyle);
            
            if( $jmlketuamhs > 0){
                $table_cell=$table->addCell(4000);
                //start pembimbing penelitian
                $phpWord->addNumberingStyle('List-'.$i, array("format"=>"decimal", "restart"=>true, 'cellMargin' => 80));
                $listFormat = $phpWord->addNumberingStyle(
                    'multilevel'.$j,
                    array('type' => 'multilevel', 'levels' => array(
                            array("format"=>"decimal", "restart"=>true)                
                        )
                    )
                );
                if($data->status=='Mahasiswa'){
                    $pembimbing= $this->m_generate->getTbbycond2("usulananggota,peneliti", "usulananggota.idusulan='$data->idusulan' and usulananggota.nipnim=peneliti.nipnim and posisi='anggota' and status='Dosen'", 'peneliti.nipnim', 'asc');
    //                $table_cell->addText('Pembimbing: ',$fancyTableCellStyle); 
                    foreach($pembimbing as $row){
                        if($row->gelardepan!=""){
                            $namalengkap=$row->gelardepan." ".$row->namalengkap." ".$row->gelarblkg;
                        }else{
                            $namalengkap=$row->namalengkap." ".$row->gelarblkg;
                        }
    //                    $table_cell->addListItem($namalengkap,0, null,$fancyTableCellStyle);//0 is the list level
                        $table_cell->addListItem($namalengkap,0, null,'multilevel'.$i,$fancyTableCellStyle);//0 is the list level
                    }
                }else{
                    $table_cell->addListItem("",0, null,'multilevel'.$i,$fancyTableCellStyle);//0 is the list level
                }
                //end pembimbing penelitian
            }
            
            $table_cell=$table->addCell(4000);
            if($data->gelardepan!=""){
                $namalengkap=$data->gelardepan." ".$data->namalengkap." ".$data->gelarblkg;
            }else{
                $namalengkap=$data->namalengkap." ".$data->gelarblkg;
            }
            //add elements to cell. For square bullets refer documentation
            $table_cell->addText('Ketua: ',$fancyTableCellStyle); 
            $table_cell->addText($namalengkap,$fancyTableCellStyle);
            //start anggota penelitian
            $phpWord->addNumberingStyle('List-'.$i, array("format"=>"decimal", "restart"=>true, 'cellMargin' => 80));
            $listFormat = $phpWord->addNumberingStyle(
                'multilevel-'.$i,
                array('type' => 'multilevel', 'levels' => array(
                        array("format"=>"decimal", "restart"=>true)                
                    )
                )
            );
            if($data->status=='Mahasiswa'){
                $anggota= $this->m_generate->getTbbycond2("usulananggota,peneliti", "usulananggota.idusulan='$data->idusulan' and usulananggota.nipnim=peneliti.nipnim and posisi='anggota' and status='Mahasiswa'", 'peneliti.nipnim', 'asc');
            }else{
                $anggota= $this->m_generate->getTbbycond2("usulananggota,peneliti", "usulananggota.idusulan='$data->idusulan' and usulananggota.nipnim=peneliti.nipnim and posisi='anggota'", 'peneliti.nipnim', 'asc');
            } 
            if(!empty($anggota)){
                $table_cell->addText('Anggota: ',$fancyTableCellStyle); 
                foreach($anggota as $row){
                    if($row->gelardepan!=""){
                        $namalengkap=$row->gelardepan." ".$row->namalengkap." ".$row->gelarblkg;
                    }else{
                        $namalengkap=$row->namalengkap." ".$row->gelarblkg;
                    }
//                    $table_cell->addListItem($namalengkap,0, null,$fancyTableCellStyle);//0 is the list level
                    $table_cell->addListItem($namalengkap,0, null,'multilevel-'.$i,$fancyTableCellStyle);//0 is the list level
                }
            }
            //end anggota penelitian
            
            
            $table->addCell(2000)->addText($data->namadepartemen,$fancyTableCellStyle);
            $table->addCell(3000)->addText($data->namaskema,$fancyTableCellStyle);
            $table->addCell(3000)->addText("Rp " . number_format($data->danadisetujui,2,',','.'),$fancyTableCellStyle);
            
            $i++; $j++;
        }
        
        // create new writer
        $objWriter = new PhpOffice\PhpWord\Writer\Word2007($phpWord);

        // use new function to get $tables XML
        $tableStr = $objWriter->getWriterPart('Document')->getTableAsText($table);        
        
        $template = $phpWord->loadTemplate($template);
        $template->setValue('nosk', $sk[0]->nosk);
        $template->setValue('judul', $sk[0]->judul);
        $template->setValue('sumberdana', $sk[0]->sumberdana);
        $template->setValue('tanggalmulai', $this->tgl_indo($sk[0]->tanggalmulai));
        $template->setValue('tanggalakhir', $this->tgl_indo($sk[0]->tanggalakhir));
        $template->setValue('tanggalpenetapan', $this->tgl_indo($sk[0]->tanggalpenetapan));
        $template->setValue('namadekan', $sk[0]->namadekan);
        $template->setValue('nipdekan', $sk[0]->nipdekan);        
        
        // setValue in loaded Template
        $template->setValue('table', $tableStr);
        
        //File name if duplicate
        $filename=str_replace('/','_',str_replace(".",'',$sk[0]->nosk));
        $filename_ex=str_replace('/','_',str_replace(".",'',$sk[0]->nosk)).".docx";
        $uploadDir="./uploads/sk/";
        $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
        $handle = opendir($uploadDir);
        while (false !== ($file = readdir($handle))) { // Looping isi file pada directory tujuan
            // Apabila ada file dengan awalan yg sama dengan nama file di uplaod
            if (strpos($file, $filename) !== false)
                $sameName++; // Tambah data file yang sama
        }
        $newName = empty($sameName) ? $filename_ex : $filename . '(' . $sameName . ').docx';
        $fileloc=$uploadDir.''.$newName;
//        header("Content-Disposition: attachment; filename=hasil.docx");
        ob_clean();
//        $template->saveAs('php://output');
        $template->saveAs($fileloc);  
        
        return $fileloc;
    } 
    function getsk() {
        if ($this->session->userdata('logged_in')) {
            $idsk = $this->input->get('idsk');        
            $sk = $this->m_generate->caridata('idsk',$idsk,'sk');
            if (!empty($sk)) {
                if ($sk->tanggalmulai != "") {
                    $tgl = explode('-', $sk->tanggalmulai);
                    $tanggalmulai=$tgl['1']."/".$tgl['2']."/".$tgl['0'];
                }
                if ($sk->tanggalakhir != "") {
                    $tgl = explode('-', $sk->tanggalakhir);
                    $tanggalakhir=$tgl['1']."/".$tgl['2']."/".$tgl['0'];
                }
                if ($sk->tanggalpenetapan != "") {
                    $tgl = explode('-', $sk->tanggalpenetapan);
                    $tanggalpenetapan=$tgl['1']."/".$tgl['2']."/".$tgl['0'];
                }
                $data = array(
                    "idsk" => $sk->idsk,
                    "idperiode" => $sk->idperiode,
                    "idtemplate" => $sk->idtemplate,
                    "nosk" => $sk->nosk,
                    "judul" => $sk->judul,
                    "sumberdana" => $sk->sumberdana,
                    "tanggalmulai" => $tanggalmulai,
                    "tanggalakhir" => $tanggalakhir,
                    "tanggalpenetapan" => $tanggalpenetapan,
                    "namadekan" => $sk->namadekan,
                    "nipdekan" => $sk->nipdekan
                );
            }
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editsk() {
        if ($this->session->userdata('logged_in')) {
            $response = 0;
            date_default_timezone_set('Asia/Jakarta');
            
            $idsk = $this->input->post('idsk_edit');
            $nosk = $this->input->post('nosk_edit');
            $judul = strtoupper($this->input->post('judul_edit'));
            $sumberdana = $this->input->post('sumberdana_edit');
            $tanggalmulai = $this->input->post('tanggalmulai_edit');
            $tanggalakhir = $this->input->post('tanggalakhir_edit');
            $tanggalpenetapan = $this->input->post('tanggalpenetapan_edit');
            $namadekan = strtoupper($this->input->post('namadekan_edit'));
            $nipdekan = $this->input->post('nipdekan_edit');
            $idperiode = $this->input->post('idperiode_edit');
            $idtemplate = $this->input->post('idtemplate_edit');
            
            if ($tanggalmulai != "") {
                $tgl = explode('/', $tanggalmulai);
                $tanggalmulai_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            if ($tanggalakhir != "") {
                $tgl = explode('/', $tanggalakhir);
                $tanggalakhir_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            if ($tanggalpenetapan != "") {
                $tgl = explode('/', $tanggalpenetapan);
                $tanggalpenetapan_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            
            $data = array(
                "idperiode" => $idperiode,
                "idtemplate" => $idtemplate,
                "nosk" => $nosk,
                "judul" => $judul,
                "sumberdana" => $sumberdana,
                "tanggalmulai" => $tanggalmulai_edit,
                "tanggalakhir" => $tanggalakhir_edit,
                "tanggalpenetapan" => $tanggalpenetapan_edit,
                "namadekan" => $namadekan,
                "nipdekan" => $nipdekan,
                "generatedate" => date('Y-m-d')
            );
            
            $result= $this->m_generate->updatedata('idsk',$idsk,$data,'sk');
            if($result){
                $fileloc=$this->generate($idsk);
                $datafile=array(
                    'fileloc' => $fileloc
                );
                $update= $this->m_generate->updatedata('idsk',$idsk,$datafile,'sk');
                if($update){
                    $response=1;
                }
            }
            
            echo $response;
        } else {
            redirect('welcome', 'refresh');
        }
    }
    function hapussk(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idsk = $this->input->post('id');

            $hapussk=$this->m_generate->hapusDatabyId('idsk',$idsk,'sk');
            if($hapussk){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    public function template() {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'generate';

            $data['template'] = $this->m_generate->getAllbyorder("idtemplate",'desc','template');
            $data['skema'] = $this->m_generate->getAllbyorder('program', 'asc', 'skema');

            $this->load->view('v_admin_template', $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }
    
    function uploadtemplate(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);
            date_default_timezone_set('Asia/Jakarta');

            $config['upload_path']="./uploads/template/"; //path folder file upload
            $config['allowed_types']='docx'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $namatemplate= $this->input->post('namatemplate');
            $keterangan= $this->input->post('keterangan');
            
            $namafile = $this->m_generate->caridata('namatemplate',$namatemplate,'template');
            if(empty($namafile)){
                $new_name = str_replace(".",'',$namatemplate);
                $config['file_name'] = $new_name; 

                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file")){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $namafile= $data['upload_data']['file_name']; 

                    //new
                    $datafile=array(
                        'namatemplate' => $namatemplate,
                        'keterangan' => $keterangan, 
                        'fileloc' => $config['upload_path']."".$namafile,
                        'tglunggah' => date('Y-m-d')
                    );
                    $result= $this->m_generate->simpandatawithconfirm($datafile,'template');
                    if($result){
                        $response=1;
                    }

                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function gettemplate() {
        if ($this->session->userdata('logged_in')) {
            $idtemplate = $this->input->get('idtemplate');    
            $template = $this->m_generate->caridata('idtemplate',$idtemplate,'template');
            if (!empty($template)) {
                if ($template->fileloc != "") {
                    $path = $template->fileloc;
                    $file = explode('/', $path);
                    $file_template=$file[3];
                }else{
                    $file_template=$template->fileloc;
                }

                $data = array(
                    "idtemplate" => $idtemplate,
                    "namatemplate" => $template->namatemplate,
                    "keterangan" => $template->keterangan,
                    "template" => $file_template,
//                    "fileloc" => $file_template
                );
                
            }
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function edittemplate(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);
            date_default_timezone_set('Asia/Jakarta');

            $config['upload_path']="./uploads/template/"; 
            $config['allowed_types']='docx'; 
            $config['encrypt_name'] = False; 
            $config['max_size'] = 5*MB; 
            
            
            $idtemplate= $this->input->post('idtemplate_edit');
            $namatemplate= $this->input->post('namatemplate_edit');
            $keterangan= $this->input->post('keterangan_edit');
            $uploadedfile= $this->input->post('uploadedfile');            
            
            if($uploadedfile!="") {            
                $new_name = str_replace(".",'',$namatemplate);
                $config['file_name'] = $new_name; 

                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file_edit")){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $namafile= $data['upload_data']['file_name']; 

                    //edit
                    $datafile=array(
                        'namatemplate' => $namatemplate,
                        'keterangan' => $keterangan, 
                        'fileloc' => $config['upload_path']."".$namafile,
                        'tglunggah' => date('Y-m-d')
                    );
                    $result= $this->m_generate->updatedata('idtemplate',$idtemplate,$datafile,'template');
                    if($result){
                        $response=1;
                    }

                }
            }else{
                $datafile=array(
                    'namatemplate' => $namatemplate,
                    'keterangan' => $keterangan
                );
                $result= $this->m_generate->updatedata('idtemplate',$idtemplate,$datafile,'template');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function checkskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;            
            $ids = $this->input->post('id');           
            
            if (!empty($ids)) {
                $id=explode('-', $ids);                
                $idskema=$id[0];
                $idtemplate=$id[1];
                
                $data = array(
                    "idtemplate" => $idtemplate
                );
                $result= $this->m_generate->updatedata('idskema',$idskema,$data,'skema');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uncheckskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;            
            $ids = $this->input->post('id');           
            
            if (!empty($ids)) {
                $id=explode('-', $ids);                
                $idskema=$id[0];
                $idtemplate=$id[1];
                
                $data = array(
                    "idtemplate" => ''
                );
                $result= $this->m_generate->updatedata('idskema',$idskema,$data,'skema');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function tgl_indo($tanggal){
        $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
       

}

/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */