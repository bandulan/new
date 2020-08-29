<?php

function suratPernyataanTidakBermasalah(){
    $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Times','BU',14);
        $pdf->Cell(0,7,'SURAT PERNYATAAN TIDAK BERMASALAH',0,1,'C');
        $pdf->Cell(0,7,'DAN PEMASANGAN TANDA BATAS',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Times','',12);
        $pdf->Cell(0,7,'Yang bertanda tangan dibawah ini :',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(40,7,'Nama                         :',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(40,7,'Tempat/Tgl Lahir      :',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(40,7,'Pekerjaan                   :',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(40,7,'Alamat                       :  ',0,0,'L');
        $pdf->Ln();
        
        $pdf->MultiCell(195, 6,'Dalam rangka permohonan pensertipikatan tanah pada Kantor Pertanahan Pringsewu dan memenuhi ketentuan Peraturan Pemerintah Nomor'. 
        ' 24 Tahun 1997 Jo, Peraturan Menteri Agraria Nomor 3 Tahun 1997, dengan ini saya menerangkan dan menyatakan sebagai berikut:','','J',0,0);
        $pdf->Cell(5,6,'1. ',0,0,'L');
        $pdf->MultiCell(190, 6,'Bidang tanah seluas......... M2 terletak di Kelurahan..................Kecamatan............adalah milik saya sendiri tidak tersangkut'.
        ' paut dengan pihak lain , bukan tanah warisan yang belum tebagi, dan tidak sedang dijadikan jaminan hutang, belum bersertipikat, belum pernah diperjual belikan'.
        ' dan tidak sedang dalam sengketa atau proses perkara peradilan','J','J',0,0);
        $pdf->Cell(5,6,'2. ',0,0,'L');
        $pdf->MultiCell(190, 6,'Bidang tanah tersebut telah dipasang tanda batas/patok terbuat dari beton/besi/kayu sebanyak......... buah.','J','J',0,0);
        $pdf->Cell(5,6,'3. ',0,0,'L');
        $pdf->MultiCell(190, 6,'Saya mengaku dan menerima luas tanah hasil pengukuran oleh petugas Kantor Pertanahan Kab Pringsewu dan tidak akan mempermasalahkan'.
        ' / menurut apabila terdapat perbedaan luas dengan alasan hak surat yang ada.','J','J',0,0);
        $pdf->Cell(5,6,'4. ',0,0,'L');
        $pdf->MultiCell(190, 6,'Surat Asli perolehan tanah yang saya mohon akan saya serahkan kepada petugas untuk dijadikan warkah pada kantor Pertanahan Kab.Pringsewu.',
        'J','J',0,0);
        $pdf->Cell(5,6,'5. ',0,0,'L');
        $pdf->MultiCell(190, 6,'Apabila dikemudian hari timbul pengakuan pemilikan dari pihak lain dengan menunjukan surat-surat tanah yang lebih kuat, maka saya bertanggung'.
        ' jawab untuk menyelesaikan baik secara musyawarah atau melalui pengadilan.','J','J',0,0);
        $pdf->Ln();
        $pdf->Cell(5,6,'S a k s i :',0,0,'L');
        $pdf->Ln();
        
        $pdf->Cell(5,6,'1. ',0,0,'L');
        $pdf->MultiCell(90, 6,'...........................(..................)','J','J',0,0);
        $pdf->Cell(5,6,'   ',0,0,'L');
        $pdf->MultiCell(90, 6,'Umur ............. tahun','J','J',0,0);
        $pdf->Cell(5,6,'2. ',0,0,'L');
        $pdf->MultiCell(90, 6,'...........................(..................)','J','J',0,0);
        $pdf->Cell(5,6,'   ',0,0,'L');
        $pdf->MultiCell(90, 6,'Umur ............. tahun','J','J',0,0);

        $pdf->SetLeftMargin(120);
        $pdf->SetX(120);
        $pdf->SetY(-112);
        $pdf->MultiCell(80, 6,'Pringsewu, ...................................','','',0,0);
        $pdf->MultiCell(55, 6,'Yang membuat pernyataan','','C',0,0);
        $pdf->Ln();
        $pdf->SetFont('Times','',9);
        $pdf->MultiCell(60, 6,'Materai Rp.6.000','','C',0,0);
        $pdf->Ln();
        $pdf->SetFont('Times','',12);
        $pdf->Ln();
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->Line($x+10, $y, $x+50, $y);
        $pdf->Ln();
        
        $pdf->SetLeftMargin(0);
        $pdf->SetX(0);
        $pdf->Cell(190,6,'Mengetahui',0,0,'C');
        $pdf->Ln();
        $pdf->Cell(190,6,'Kepala Desa ....................................',0,0,'C');
        $pdf->Ln();
        $pdf->Cell(190,6,'Kecamatan ......................................',0,0,'C');
        $pdf->Ln();
        $pdf->Cell(190,30,'(...............................................)',0,0,'C');
        $pdf->Output();
}


?>