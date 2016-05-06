<?php
    include "konfig.php";  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/star.png" type="favicon/ico" />

    <title>Pakar THT</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="css/main.css">


  </head>
  <body>

    <!--== 4. Header ==-->

        <section class="header" id="header">
            <div class="navigationbar  navbar-fixed-top">
                <div class="container">
                    <a href="#" class="logo">
                       sistem pakar<i class="fa fa-star-o star"></i>
                    </a>
                    <i class="fa fa-bars pull-right" id="iconhideshow"></i>
                    <ul class="nav hide nav-pills pull-right">
                      <li role="presentation"><a href="#header">Beranda</a></li>
                      <li role="presentation"><a href="#service">Diagnosa</a></li>
                      <li role="presentation"><a href="#about">Tentang</a></li>
                      <li role="presentation"><a href="#meet">Developer</a></li>
                      
                    </ul>
                </div> <!-- /.container -->
            </div> <!-- /.navigation-bar -->
            <div class="header-description text-center">
                <div class="header-content custom-black wow bounce animated">
                    <h1 class="heading">sistem pakar diagnosa penyakit tht</h1>
                    <p class="heading-subtitle">
                        mulai diagnosa
                    </p> 
                </div> <!-- /.header-content -->   
             <form id="form1" name="form1" method="post" action="biodata_proses.php">
                <div class="wow zoomIn button-down" data-wow-duration="1s" data-wow-offset="100">
                  <div class="wow tada" data-wow-delay="1s" data-wow-duration="1s">
                    <div class="wow rubberBand" data-wow-delay="2000ms" data-wow-duration="1s">
                      <div class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s">
                        <a href="#service" title="Go down">
                          <img src="images/button_downr.png" alt="MaterialUp" class="center" id="submit" name="submit">
                        </a>
                      </div> </form>
                    </div>
                  </div>
                </div>
            </div> <!-- /.header-description -->
        </section> <!-- /#header -->

      <!--== 5. diagnosa ==-->
     
  <section class="service" id="service">
            <div class="wrapper">
                <div class="container">
                    <h2 class="section-title wow bounceInRight animated custom-white">Diagnosa</h2>
                </div> <!-- /.container -->
                <div class="service-content">
                <div class="row">
                <div class="container-fluid">
        <div  class="col-md-6 col-md-offset-3">
            <div class="text-center">
             <?php if(!isset($_GET['idpertanyaan'])){?>
                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2 class="subtitle custom-white wow bounceInLeft center animated">Diagnosa Penyakit THT</h2>       
                    <h2><a href="https://github.com/khairunnas13/pakartht.git/index.php?idpertanyaan=1#service">Mulai</a></h2>
                </div> 
            </div>
    
            <?php }else{
                      $idsolusi=$_GET['idpertanyaan'];
                      $sqlp = "select * from pertanyaan where id=$idsolusi";
                      $rs=mysql_query($sqlp);
                      $data=mysql_fetch_array($rs);
        
                      if($data['jenis']!="k"){
                    

                        echo "<br><h2 class='subtitle custom-white wow bounceInLeft center animated'>".$data['pertanyaan']."</h2>";
            ?>
        </div>
 
        
            <div class="text-center">
                <div class="col-md-12">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.9s">
                        <form class="form-inline">
                            <div class="form-group">
                                <?php echo "<button formaction='#service' type='purchase' name='idpertanyaan' class='btn btn-primary btn-lg'                                       required='required' value='".$data['ya']."'>Ya</button>";
                                ?> 
                            </div>
                            <div class="form-group">
                                <?php echo "<button type='subscribe' name='idpertanyaan' class='btn btn-primary btn-lg' required='required'                                         value='".$data['tidak']."'>Tidak</button>";
                                    }else{
                                        $sqlp = "select * from penyakit where id=$idsolusi";
                                    $rs=mysql_query($sqlp);
                                    $data=mysql_fetch_array($rs);
                                    echo "<h2 class='service-main-content wow pulse animated custom-white'>Hasil diagnosa: <br>Anda Mengalami ".$data['nama_penyakit']."</br></h2>";
                                    echo "<h3 class='service-main-content wow pulse animated custom-white'>".$data['deskripsi']." <br> <br>Saran : ".$data['pengobatan']." </br></br>  </h3>";
                                ?>
                                    <a href="https://github.com/khairunnas13/pakartht.git/index.php?idpertanyaan=1#service">Diagnosa Kembali</a>";
                                  <?php  
                                     } 
                                   }
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5 empty"></div>
                                        <div class="col-sm-7 empty"></div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.container-fluid -->
                            <div class="container-fluid ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5 empty"></div>
                                        <div class="col-sm-7 empty"></div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.container-fluid -->
                           <div class="container-fluid ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5 empty"></div>
                                        <div class="col-sm-7 empty"></div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.container-fluid -->
        </div>
        </div>
     
     
            </div> <!-- /.wrapper -->
            </div>
        </section> <!-- /#service -->

    <!--== 6. About Us ==-->
    
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="about-table">
                         <div class="col-md-4 col-sm-12 about-table-cell">
                            <div class="about-content">
                                <div class="wrapper">
                                    <h2 class="section-title wow bounceInRight animated">Tentang</h2>
                                    <p class="section-paragraph wow pulse animated">
                                        Penyakit THT merupakan salah satu penyakit yang sering ditemukan di masyarakat, ilmu kedokteran yang khusus meneliti penyakit Telinga Hidung dan Tenggorokan (THT) serta kepala dan leher disebut otolaringologi. Keberadaan Sistem Pakar untuk Diagnosa Penyakit THT berbasis Web ini diharapkan dapat membantu pengunjung website untuk mengetahui gejala-gejala penyakit THT.
                                    </p> <!-- /.section-paragraph -->
                                </div> <!-- /.wrapper --> 
                            </div> <!-- /.about-content -->
                        </div>
                        <div >
                        </div>
                    </div> <!-- /.about-table -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </section> <!-- /#about -->
    
    <!--== 8. Meet With Us ==-->
        <section class="meet" id="meet">
            <div class="container">  
                <div class="wrapper">
                    <h2 class="section-title block-title wow animated bounceInRight animated custom-black">developer</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="meet-item-bg wow pulse animated text-center">
                                <div class="meet-item text-center">
                                  
                                </div> <!-- /.meet-item -->
                            </div> <!-- /.meet-item-bg -->
                        </div> <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="meet-item-bg wow pulse animated text-center">
                                <div class="meet-item text-center">
                                    <div class="meet-single-item wow bounceInDown animated">
                                    <img src="images/m_03.jpg" alt="Meet">
                                        <div class="meet-icons">
                                            <a href="#"><i class="custom-icon fa fa-twitter"></i></a>
                                            <a href="#"><i class="custom-icon fa fa-facebook"></i></a>
                                            <a href="#"><i class="custom-icon fa fa-google-plus"></i></a>
                                            <a href="#"><i class="custom-icon fa fa-linkedin"></i></a>
                                        </div> <!-- /.meet-icons -->
                                    </div> <!-- /.meet-single-item -->
                                    <div class="meet-item-content custom-white wow bounceInUp animated">
                                        <h6 class="meet-item-name">Khairunnas</h6>
                                        <p class="meet-item-sub custom-black">Teknik Informatika</p>
                                        <p class="meet-item-about">
                                            e-mail : run.khairunnas@gmail.com
                                        </p>
                                    </div> <!-- /.meet-item-content -->
                                </div> <!-- /.meet-item -->
                            </div> <!-- /.meet-item-bg -->
                        </div> <!-- /.col-sm-4 -->
                       </section>
           
                <footer class="custom-red text-center wow flip animated">
                    &copy;Copyright <a href="#"><strong></strong></a> 2016. 
                </footer>
            </div> <!-- /.contact-content -->
        </section> <!-- /#contact -->
        <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    
        


    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.circlechart.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="nivo-lightbox/nivo-lightbox.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
