<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_prodi_usulan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('m_data');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'usulan';

            $lastperiode = $this->m_data->getLastID('idperiode', 'periode');
            $user=$this->session->userdata('logged_in');
            //setting periode
            if (!isset($_SESSION['periode'])) {
                $_SESSION['periode'] = $lastperiode[0]->idperiode;
            }
            if ($_SESSION['periode'] != "") {
                $setperiode = "&& usulan.idperiode='" . $_SESSION['periode'] . "'";
            } else {
                $setperiode = "";
            }
            //setting skema
            if (!isset($_SESSION['skema'])) {
                $_SESSION['skema'] = "";
            }
            if ($_SESSION['skema'] != "") {
                $setskema = "&& usulan.idskema='" . $_SESSION['skema'] . "'";
            } else {
                $setskema = "";
            }
            //setting status
            if (!isset($_SESSION['status'])) {
                $_SESSION['status'] = "";
            }
            if ($_SESSION['status'] != "") {
                if ($_SESSION['status'] == 1) {
                    $statususulan = 'Baru';
                } else if ($_SESSION['status'] == 2) {
                    $statususulan = 'Final';
                } else if ($_SESSION['status'] == 3) {
                    $statususulan = 'Didanai';
                } else if ($_SESSION['status'] == 4) {
                    $statususulan = 'Tidak Didanai';
                }
                $setstatus = "&& usulan.statususulan='" . $statususulan . "'";
            } else {
                $setstatus = "";
            }
            $idperiode = $_SESSION['periode'];
            $idprodi=$user['idprodiadmin'];
            $prodi=$this->m_data->caridata('idprodi',$idprodi,'prodi');
            $data['namaprodi'] = $prodi->namaprodi;
            $data['ppm'] = $this->m_data->getTbbycond2("usulan, usulananggota, peneliti", "usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim $setperiode $setskema $setstatus && usulananggota.nipnim=peneliti.nipnim && peneliti.idprodi='$idprodi' group by usulan.idusulan", "usulan.idusulan", "desc");
            $data['skema'] = $this->m_data->getAllbyorder('program', 'asc', 'skema');
            $data['periode'] = $this->m_data->getAllbyorder('idperiode', 'desc', 'periode');
            $data['lastperiode'] = $lastperiode;
            $data['dateline'] = $this->tgl_indo($lastperiode[0]->end);

            $this->load->view('v_prodi_usulan', $data);
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function setperiode() {
        if ($this->session->userdata('logged_in')) {
            $idperiode = $this->input->post('id');
            $_SESSION['periode'] = $idperiode;
            $response = 1;
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function setskema() {
        if ($this->session->userdata('logged_in')) {
            $idskema = $this->input->post('id');
            $_SESSION['skema'] = $idskema;
            $response = 1;
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function setstatus() {
        if ($this->session->userdata('logged_in')) {
            $status = $this->input->post('id');
            $_SESSION['status'] = $status;
            $response = 1;
        } else {
            redirect('welcome', 'refresh');
        }
    }

//    function getperiode() {
//        if ($this->session->userdata('logged_in')) {
//            $idperiode = $this->input->get('idperiode');
//            $periode = $this->m_data->caridata('idperiode', $idperiode, 'periode');
//            if (!empty($periode)) {
//                if ($periode->start != "") {
//                    $start = $periode->start;
//                    $tgl = explode('-', $start);
//                    $start_edit = $tgl['1'] . "/" . $tgl['2'] . "/" . $tgl['0'];
//                }
//                if ($periode->end != "") {
//                    $start = $periode->end;
//                    $tgl = explode('-', $start);
//                    $end_edit = $tgl['1'] . "/" . $tgl['2'] . "/" . $tgl['0'];
//                }
//                $data = array(
//                    "idperiode" => $idperiode,
//                    "nama" => $periode->nama,
//                    "start" => $start_edit,
//                    "end" => $end_edit
//                );
//            }
//            echo json_encode($data);
//        } else {
//            redirect('welcome', 'refresh');
//        }
//    }
//
//    function editperiode() {
//        if ($this->session->userdata('logged_in')) {
//            $response = 0;
//
//            $idperiode = $this->input->post('idperiode_edit');
//            $nama = $this->input->post('nama_edit');
//            $start = $this->input->post('start_edit');
//            $end = $this->input->post('end_edit');
//
//            if ($start != "") {
//                $tgl = explode('/', $start);
//                $start_edit = $tgl['2'] . "-" . $tgl['0'] . "-" . $tgl['1'];
//            }
//            if ($end != "") {
//                $tgl = explode('/', $end);
//                $end_edit = $tgl['2'] . "-" . $tgl['0'] . "-" . $tgl['1'];
//            }
//
//            //edit
//            $data = array(
//                'nama' => $nama,
//                'start' => $start_edit,
//                'end' => $end_edit
//            );
//            $result = $this->m_data->updatedata('idperiode', $idperiode, $data, 'periode');
//            if ($result) {
//                $response = 1;
//            }
//
//            echo $response;
//        } else {
//            redirect('welcome', 'refresh');
//        }
//    }
//
//    function ketetapan() {
//        if ($this->session->userdata('logged_in')) {
//            $response = 0;
//
//            $id = $this->input->post('id');
//            $data = explode("-", $id);
//            $idusulan = $data[0];
//            $statuusulan = $data[1];
//            if ($idusulan != "") {
//                if ($statuusulan == 'Tidak Didanai') {
//                    $data = array(
//                        "statususulan" => $statuusulan,
//                        "danadisetujui" => 0
//                    );
//                } else {
//                    $data = array(
//                        "statususulan" => $statuusulan
//                    );
//                }
//
//
//                $result = $this->m_data->updatedata('idusulan', $idusulan, $data, 'usulan');
//                if ($result) {
//                    $response = 1;
//                }
//            }
//
//            echo $response;
//        } else {
//            redirect('welcome', 'refresh');
//        }
//    }
//
//    function pendanaan() {
//        if ($this->session->userdata('logged_in')) {
//            $response = 0;
//
//            $idusulan = $this->input->post('idusulan');
//            $danadisetujui = $this->input->post('danadisetujui');
//            $usulan = $this->m_data->caridata('idusulan', $idusulan, 'usulan');
//
//            if ($usulan->statususulan == 'Didanai') {
//                if ($idusulan != "") {
//                    $data = array(
//                        "danadisetujui" => $danadisetujui
//                    );
//                    $result = $this->m_data->updatedata('idusulan', $idusulan, $data, 'usulan');
//                    if ($result) {
//                        $response = 1;
//                    }
//                }
//            }
//
//            echo $response;
//        } else {
//            redirect('welcome', 'refresh');
//        }
//    }
    public function export() {
        if ($this->session->userdata('logged_in')) {
            $user=$this->session->userdata('logged_in');
            $idprodi=$user['idprodiadmin'];
            $prodi=$this->m_data->caridata('idprodi',$idprodi,'prodi');
            
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            // Panggil class PHPExcel nya
            $excel = new PHPExcel();
            // Settingan awal fil excel
            $excel->getProperties()->setCreator('PPM-FSM')
                ->setLastModifiedBy('PPM-FSM')
                ->setTitle("Daftar Usulan Penelitian dan Pengabdian")
                ->setSubject("Penelitian dan Pengabdian")
                ->setDescription("Daftar Usulan Penelitian dan Pengabdian")
                ->setKeywords("Usulan Penelitian dan Pengabdian");
            // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
            $style_col = array(
                'font' => array('bold' => true), // Set font nya jadi bold
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                ),
                'borders' => array(
                    'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                    'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border right dengan garis tipis
                    'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                    'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                )
            );
            // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
            $style_row = array(
                'alignment' => array(
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                ),
                'borders' => array(
                    'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                    'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border right dengan garis tipis
                    'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                    'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                )
            );
            $namaprodi=strtoupper($prodi->namaprodi);
            $excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR USULAN PENELITIAN DAN PENGABDIAN PRODI $namaprodi (KETUA/ANGGOTA)"); // Set kolom A1 dengan tulisan "DATA SISWA"
            $excel->getActiveSheet()->mergeCells('A1:H1'); // Set Merge Cell pada kolom A1 sampai E1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            // Buat header tabel nya pada baris ke 3
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); 
            $excel->setActiveSheetIndex(0)->setCellValue('B3', "JUDUL"); 
            $excel->setActiveSheetIndex(0)->setCellValue('C3', "KETUA PENELITI"); 
            $excel->setActiveSheetIndex(0)->setCellValue('D3', "PERIODE"); 
            $excel->setActiveSheetIndex(0)->setCellValue('E3', "SKEMA"); 
            $excel->setActiveSheetIndex(0)->setCellValue('F3', "STATUS"); 
            $excel->setActiveSheetIndex(0)->setCellValue('G3', "USULAN DANA"); 
            $excel->setActiveSheetIndex(0)->setCellValue('H3', "DANA DISETUJUI"); 
            // Apply style header yang telah kita buat tadi ke masing-masing kolom header
            $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
            // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
            // 
            //setting periode
            if (!isset($_SESSION['periode'])) {
                $_SESSION['periode'] = $lastperiode[0]->idperiode;
            }
            if ($_SESSION['periode'] != "") {
                $setperiode = "&& usulan.idperiode='" . $_SESSION['periode'] . "'";
            } else {
                $setperiode = "";
            }
            //setting skema
            if (!isset($_SESSION['skema'])) {
                $_SESSION['skema'] = "";
            }
            if ($_SESSION['skema'] != "") {
                $setskema = "&& usulan.idskema='" . $_SESSION['skema'] . "'";
            } else {
                $setskema = "";
            }
            //setting status
            if (!isset($_SESSION['status'])) {
                $_SESSION['status'] = "";
            }
            if ($_SESSION['status'] != "") {
                if ($_SESSION['status'] == 1) {
                    $statususulan = 'Baru';
                } else if ($_SESSION['status'] == 2) {
                    $statususulan = 'Final';
                } else if ($_SESSION['status'] == 3) {
                    $statususulan = 'Didanai';
                } else if ($_SESSION['status'] == 4) {
                    $statususulan = 'Tidak Didanai';
                }
                $setstatus = "&& usulan.statususulan='" . $statususulan . "'";
            } else {
                $setstatus = "";
            }
            
            $usulan = $this->m_data->getTbbycond2("usulan, usulananggota, peneliti, periode, skema", "usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && usulan.idperiode=periode.idperiode && usulan.idskema=skema.idskema $setperiode $setskema $setstatus && usulananggota.nipnim=peneliti.nipnim && peneliti.idprodi='$idprodi' group by usulan.idusulan", "usulan.idusulan", "desc");
            
            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
            foreach ($usulan as $data) { // Lakukan looping pada variabel siswa
                $ketua=$this->m_data->getTbbycond1('usulananggota, peneliti', "idusulan='$data->idusulan' and posisi='Ketua' and usulananggota.nipnim=peneliti.nipnim");
                if($ketua[0]->gelardepan!=""){
                    $namaketua=$ketua[0]->gelardepan.' '.$ketua[0]->namalengkap.' '.$ketua[0]->gelarblkg;
                }else{
                    $namaketua=$ketua[0]->namalengkap.' '.$ketua[0]->gelarblkg;;
                }
            
                $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->judul);
                $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $namaketua);
                $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->nama);
                $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->namaskema);
                $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->statususulan);
                $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, "Rp " . number_format($data->dana,2,',','.'));
                $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, "Rp " . number_format($data->danadisetujui,2,',','.'));

                // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);

                $no++; // Tambah 1 setiap kali looping
                $numrow++; // Tambah 1 setiap kali looping
            }
            // Set width kolom
            $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
            $excel->getActiveSheet()->getColumnDimension('B')->setWidth(50); 
            $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30); 
            $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); 
            $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
            $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
            $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
            $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
            $excel->getActiveSheet(0)->setTitle("Daftar Usulan PPM");
            $excel->setActiveSheetIndex(0);
            // Proses file excel
            ob_end_clean();
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Daftar Usulan Penelitian dan Pengabdian.xlsx"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $write->save('php://output');
        } else {
            redirect('welcome', 'refresh');
        }
    }

    function tgl_indo($tanggal) {
        $bulan = array(
            1 => 'Januari',
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

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

}
