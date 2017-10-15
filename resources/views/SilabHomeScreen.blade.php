<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Tio Rizky Almunazir, Muhamad Bayu Wilanda, Rendy Renaldi Berahim -->
	<meta charset="UTF-8">
	<title>Laboratorium Sistem Informasi - Universitas Gunadarma</title>
	<link rel="shortcut icon" href="{{asset('img/icon.png')}}" />

	<!-- CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.reject.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/general.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/template.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" media="screen" />
	
	<!-- JS Files -->
	<script src="{{asset('js/jquery-1.9.1.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.reject.js')}}"></script>
	<script src="{{asset('js/general.js')}}"></script>
</head>
<body>
	<div id="body">
	    <div id="body-inner">
		
	    <header id="header">
	        <div class="container">
	            <div class="logo"><a title="" href="index.php"><img src="{{asset('img/cottage-logo.png')}}" alt=""/></a></div>

	      

	            <form class="search right" action="#" method="get">
	                
	            </form>
				
				
				
				

	            <div id="topmenu" class="clear">
	                <div class="left-side"></div>
	                <div class="right-side "></div>

	                <nav class="navbar" role="navigation">
	                    <div class="navbar-header">
	                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                        </button>
	                        <span class="navbar-brand visible-xs">MENU</span>
	                    </div>

	                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                            <ul class="nav navbar-nav left">
	                                <li class="id1"><a href="index.php">Beranda</a></li>
	                                <li class="id2"><a href="semua-berita.html">Artikel</a></li>
	                                <li class="id3"><a href="semua-agenda.html">Agenda</a></li>
	                            </ul>
	                            <ul class="nav navbar-nav right">
	                                <li class="dropdown id4">
	                                <a href="tatib-1-lalp.html" class="dropdown-toggle">Tata Tertib<b class="caret"></b></a>
	                                <ul class="dropdown-menu">
	                                    <li><a href="tatib-2-lalp.html">Format LA dan LP</a></li>
	                                    <li><a href="tatib-3-prosedur.html">Prosedur</a></li>
	                                </ul>
									
	                                <li class="dropdown id5">
	                                <a href="jadwal-1-kelapadua.html" class="dropdown-toggle">Jadwal<b class="caret"></b></a>
	                                <ul class="dropdown-menu">
	                                    <li><a href="jadwal-1-kelapadua.html">Lab. SI Kelapa Dua</a></li>
	                                    <li><a href="jadwal-2-kalimalang.html">Lab. SI Kalimalang</a></li>
										 <li><a href="jadwal-3-Cengkareng.html">Lab. SI Cengkareng</a></li>
										  <li><a href="jadwal-4-Karawaci.html">Lab. SI Karawaci</a></li>
	                                </ul>
									<li class="dropdown id6">
	                                <a href="hubungi-kami.html" class="dropdown-toggle">Profil<b class="caret"></b></a>
	                                <ul class="dropdown-menu">
	                                    <li><a href="statis-2-visidanmisi.html">Visi dan Misi</a></li>
	                                    
	                                </ul>
									
									
	                            </ul>
	                        </div>
	                </nav>
	            </div>
	        </div>
	    </header>


	    <div id="page" class="container">
	            <section>
	            <div class="container hideOnLoad showOnLoad">
	                <div id="carousel-main-wrapper">
	                    <div id="carousel" class="main-carousel" data-ride="carousel">
	                        <div class="carousel-inner">
	                            <div class="item active">
	                                <img src="{{asset('img/gallery/gambar1.jpg')}}" alt="" />
	                            </div>
	                            <div class="item">
	                                <img src="{{asset('img/gallery/gambar2.jpg')}}" alt="" />
	                            </div>
	                            <div class="item">
	                                <img src="{{asset('img/gallery/gambar3.jpg')}}" alt="" />
	                            </div>
	                            <div class="item">
	                                <img src="{{asset('img/gallery/gambar4.jpg')}}" alt="" />
	                            </div>
	                        </div>

	                        <ol class="carousel-indicators">
	                            <li data-target="#carousel" data-slide-to="0" class="active hideOnLoad showOnLoad1">
	                                <div class="carousel-caption">
	                                    <h2>The University</h2>
	                                    <h3>Kampus dengan akreditasi A</h3>
	                                </div>
	                            </li>
	                            <li data-target="#carousel" data-slide-to="1" class="hideOnLoad showOnLoad2">
	                                <div class="carousel-caption">
	                                    <h2>The Lab.</h2>
	                                    <h3>Ruangan Lab yang luas, dan nyaman.</h3>
	                                </div>
	                            </li>
	                            <li data-target="#carousel" data-slide-to="2" class="hideOnLoad showOnLoad3">
	                                <div class="carousel-caption">
	                                    <h2>Facility</h2>
	                                    <h3>Lengkap dan dapat membantu meningkatkan kreativitas praktikan.</h3>
	                                </div>
	                            </li>
	                            <li data-target="#carousel" data-slide-to="3" class="hideOnLoad showOnLoad4">
	                                <div class="carousel-caption">
	                                    <h2>Assistant</h2>
	                                    <h3>Ditunjang dengan Kemampuan Asisten yang baik.</h3>
	                                </div>
	                            </li>
	                        </ol>

	                        <a class="left carousel-control" href="#carousel" data-slide="prev"></a>
	                        <a class="right carousel-control" href="#carousel" data-slide="next"></a>
	                    </div>
	                    <div class="shadow"></div>
	                </div>
	            </div>
	        </section>

	<section>
	                <div id="content" class="blog well">
	                    <hr/>
	                    <br/>

	                    <div class="row">
	                        <div class="blog-list col-md-9 pull-left">
	                            <p>
									<script language="javascript">
	function validasi(form){
	  if (form.nama_komentar.value == ""){
	    alert("Anda belum mengisikan Nama.");
	    form.nama_komentar.focus();
	    return (false);
	  }   
	  if (form.isi_komentar.value == ""){
	    alert("Anda belum mengisikan komentar.");
	    form.isi_komentar.focus();
	    return (false);
	  }
	  return (true);
	}
	</script>

	<script language="JavaScript">
	function bukajendela(url) {
	 window.open(url, "window_baru", "width=1000,height=700,left=120,top=10,resizable=1,scrollbars=1");
	}
	</script>



	<span class=judul_head><a href='home'>Beranda</a></span>
		
	        <section>
	                <div class="separator h40"></div>

					
	                <div class="box1 hideOnLoad showOnLoad1">
	                    <div class="inner-border">
	                        <h1>Welcome to Laboratorium Sistem Informasi</h1>
	                    </div>
	                </div>
					

	                <div class="separator h40"></div>

	                <div class="row box2 hideOnLoad showOnLoad2">
	                    <div class="col-xs-12 col-sm-4">
	                        <div class="inner">
	                            <div class="flipimg">
	                                <div class="flipimg-inner">
										
	                                    <figure class="front"><img src="{{asset('img/gallery/01.jpg')}}" alt="" /></figure>
	                                    <figure class="back"><img src="{{asset('img/gallery/01a.jpg')}}" alt="" /></figure>
	                                </div>
	                            </div>
	                            <div class="text">
	                                <h2><a href="lomba-1-usb.html">Lomba USB</a></h2>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-xs-12 col-sm-4">
	                        <div class="inner">
	                            <div class="flipimg">
	                                <div class="flipimg-inner">
	                                    <figure class="front"><img src="{{asset('img/gallery/02.jpg')}}" alt="" /></figure>
	                                    <figure class="back"><img src="{{asset('img/gallery/02a.jpg')}}" alt="" /></figure>
	                                </div>
	                            </div>
	                            <div class="text">
	                                <h2><a href="lomba-2-d3mi.html">Lomba Aksi D3MI</a></h2>
	                                
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-xs-12 col-sm-4">
	                        <div class="inner">
	                            <div class="flipimg">
	                                <div class="flipimg-inner">
	                                    <figure class="front"><img src="{{asset('img/gallery/03.jpg')}}" alt="" /></figure>
	                                    <figure class="back"><img src="{{asset('img/gallery/03a.jpg')}}" alt="" /></figure>
	                                </div>
	                            </div>
	                            <div class="text">
	                                <h2><a href="lomba-3-praktikum_gabungan.html">Prak. Gabungan</a></h2>
	             
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <hr class="clear"/>

	            
	           
	        </section>
			<hr color=#e0cb91 noshade=noshade />
		
		
		<table><tr><td><span class=date><img src=templates/future/images/clock.gif> Minggu, 16 Oktober 2016 - 11:56:40 WIB</span><br /><span class=judul><a href=berita-141-daftar-matkul-prak-gabungan-pta-1617.html>DAFTAR MATKUL PRAK. GABUNGAN PTA 16/17</a></span><br /><span class=image><img src='foto_berita/small_80info.jpg' width=110 border=0></span>
	Berikut ini adalah daftar matakuliah yang tersedia untuk Praktikum Kelas Gabungan (Virtual) :


	 


	Click to view image 


	*Jika matakuliah dan kelas yang tidak terdapat pada daftar diatas maka 
	praktikum ... <a href=berita-141-daftar-matkul-prak-gabungan-pta-1617.html>Selengkapnya</a> (<b>0 komentar</b>)
	          <br /></td></tr>
	          </table><hr color=#e0cb91 noshade=noshade /><table><tr><td><span class=date><img src=templates/future/images/clock.gif> Kamis, 21 April 2016 - 14:42:05 WIB</span><br /><span class=judul><a href=berita-140-penutupan-pendaftaran-dan-validasi-praktikum-gabungan.html>Penutupan Pendaftaran dan Validasi Praktikum Gabungan</a></span><br /><span class=image><img src='foto_berita/small_1info.jpg' width=110 border=0></span>Pengumuman

	Pendaftaran dan validasi untuk praktikum gabungan ditutup pada tanggal 23 April 2016 pukul 13.00 WIB.


	Bagi yang terlewatkan tidak dapat mengikuti praktikum gabungan dengan alasan ... <a href=berita-140-penutupan-pendaftaran-dan-validasi-praktikum-gabungan.html>Selengkapnya</a> (<b>0 komentar</b>)
	          <br /></td></tr>
	          </table><hr color=#e0cb91 noshade=noshade /><table><tr><td><span class=date><img src=templates/future/images/clock.gif> Senin, 04 April 2016 - 21:58:06 WIB</span><br /><span class=judul><a href=berita-139-daftar-matakuliah-gabungan-ata-1516.html>Daftar Matakuliah Gabungan ATA 15/16</a></span><br /><span class=image><img src='foto_berita/small_40info.jpg' width=110 border=0></span>
	Berikut ini adalah daftar matakuliah yang tersedia untuk Praktikum Kelas Gabungan (Virtual) :






	&amp;nbsp;
	Jika matakuliah dan kelas yang tidak terdapat pada daftar diatas maka praktikum tersebut berada di ... <a href=berita-139-daftar-matakuliah-gabungan-ata-1516.html>Selengkapnya</a> (<b>0 komentar</b>)
	          <br /></td></tr>
	          </table><hr color=#e0cb91 noshade=noshade /><img src=templates/future/images/berita_sebelumnya.png><br />
	          <ul><li><a href=berita-71-perkembangan-teknologi-kincir-angin.html>Perkembangan Teknologi Kincir Angin</a></li><li><a href=berita-68-teknologi-tepat-waktu.html>Teknologi Tepat Waktu</a></li><li><a href=berita-60-digerus-firefox-ie-makin-melempem.html>Digerus Firefox, IE Makin Melempem</a></li></ul><style>
	.img{
		border:2px solid #72a143;
		padding:2px;
		background:#ffeda5;
	}
	.img2{
		border:2px solid #F0892C;
		padding:2px;
		background:#ffeda5;
	}
	</style>
								</p>

	                         
	                        </div>

	                        <aside>
	                            <div class="sidebar col-md-3 pull-right">
	                                
	                                    <p>
											<script language="JavaScript" type="text/javascript">
	  function addSmiley(textToAdd){
	  document.formshout.pesan.value += textToAdd;
	  document.formshout.pesan.focus();
	}
	</script>



	<img src=templates/future/images/pencarian.png><br />
	        <form method=POST action='hasil-pencarian.html'>    
	        <input name=kata type=text size=17 maxlength=50 />
	        <input type=submit value=Go />
	        </form><br /><hr color=#e0cb91 noshade=noshade /><br />
	        <img src=templates/future/images/agenda.png /><br /><br /><span class=date>&bull; 01 November 2016 </a></span><br /><span class=agenda><a href=agenda-52-pendaftaran-praktikum-gabungan.html> Pendaftaran Praktikum Gabungan</a></span><br /><br /><span class=date>&bull; 17 Maret 2016 </a></span><br /><span class=agenda><a href=agenda-51-final-lomba-usb-2016.html> Final Lomba USB 2016</a></span><br /><br /><span class=date>&bull; 18 Maret 2015 </a></span><br /><span class=agenda><a href=agenda-50-pengambilan-surat-tugas-asisten-ata-20142015.html> Pengambilan Surat Tugas Asisten ATA 2014/2015</a></span><br /><br /><br />
	<br /><hr color=#FCEDC7 noshade=noshade /><br />
	        <img src='templates/future/images/arsip.png' /><br />
	        <ul><script language="javascript" src="jquery.js"></script>
	 <script language="javascript">
	   // untuk melihat daftar artikel pada bulan dan tahun yang ditentukan
	   function loadArtikel(element,filter){ 
		 // ambil element span yang sejajar dengan element link
		 var span = $(element).next('span'); 
		 // perlihatkan terlebih dahulu text 'loading' sebelum muncul list artikel
		 span.html('<small>loading...</small>'); 
		 $.post('getarticle.php',
			{bulan_tanggal: filter}, // kirim parameter 'bulan_tanggal' ke 'getarticle.php'
			function(response){ 
			  span.html(response); // ubah isi span dengan hasil response dari getarticle
			}
		 );
	   }
	 </script>
	 <p><a name="October 2016" id="October 2016"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#October 2016" onClick="loadArtikel(this,'October 2016')">October 2016</a> (1)<span></span></p><p><a name="April 2016" id="April 2016"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#April 2016" onClick="loadArtikel(this,'April 2016')">April 2016</a> (2)<span></span></p><p><a name="February 2015" id="February 2015"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#February 2015" onClick="loadArtikel(this,'February 2015')">February 2015</a> (1)<span></span></p><p><a name="November 2014" id="November 2014"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#November 2014" onClick="loadArtikel(this,'November 2014')">November 2014</a> (1)<span></span></p><p><a name="October 2009" id="October 2009"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#October 2009" onClick="loadArtikel(this,'October 2009')">October 2009</a> (1)<span></span></p><p><a name="January 2009" id="January 2009"></a>
	          <img src="icon/arroworange.gif" width="12" height="11" /> <a href="#January 2009" onClick="loadArtikel(this,'January 2009')">January 2009</a> (3)<span></span></p></ul><hr color=#e0cb91 noshade=noshade /><br />
	        <img src='templates/future/images/statistik.png' /><br />
			<br></br><p align=center><img src='counter/0.png' alt='0'><img src='counter/1.png' alt='1'><img src='counter/8.png' alt='8'><img src='counter/6.png' alt='6'><img src='counter/1.png' alt='1'><img src='counter/6.png' alt='6'> </p>
	      <img src=counter/hariini.png> Pengunjung hari ini : 1 <br>
	      <img src=counter/total.png> Total pengunjung    : 5407 <br><br>
	      <img src=counter/hariini.png> Hits hari ini    : 9 <br>
	      <img src=counter/total.png> Total Hits       : 18616 <br><br>
	      <img src=counter/online.png> Pengunjung Online: 1<br><br><hr color=#e0cb91 noshade=noshade /><br />
	        <img src='templates/future/images/poling.png' /><br /><br /><b>Menurut anda Praktikum di laboratorium sistem informasi mampu mengembangkan skill IT anda?</b> <br /><br /><form method=POST action='hasil-poling.html'><input type=radio name=pilihan value='2' />Cukup<br /><input type=radio name=pilihan value='3' />Setuju<br /><input type=radio name=pilihan value='4' />Sangat Setuju<br /><p align=center><input type=submit value=Vote /></p>
	        </form>
	        <p align=center><a href=lihat-poling.html>Lihat Hasil Poling</a></p>





	<br /><hr color=#e0cb91 noshade=noshade /><br />
	        <img src=templates/future/images/link.png /><br /><br />
			
			<!-- social-bar -->
					<ul id="social-bar" class="cf">
						<li class="baak"><a href="https://baak.gunadarma.ac.id"  title="BAAK" ></a></li>
						<li class="ss"><a href="https://studentsite.gunadarma.ac.id"  title="Studentsite UG" ></a></li>
						<li class="filkom"><a href="https://filkom.gunadarma.ac.id"  title="Filkom" ></a></li>
						<li class="library"><a href="https://library.gunadarma.ac.id"  title="Library UG" ></a></li>
					</ul>
					<!-- ENDS social-bar -->
						


	<style>
	.tr_judul {
	  font-weight : bold;
	  text-align : center;
	  background : #d0d0d0;
	}
	.tr_terang {
	  text-align : center;
	  background : #f0f0f0;
	}
	.tabel_data {
	  background : #d0d0d0;
	  color : #000000;
	}
	</style>
										</p>
	                               
	                            </div>
	                        </aside>
	                    </div>
	                </div>
	            </section>
	        </div>

	        <footer id="footer-wide">
	            <div id="footer" class="container">

	         

	                <div class="separator h30"></div>
					
	                <div class="copyright">
	                    <div class="left-side"></div>
	                    <div class="right-side "></div>

	                    <div class="logo left hidden-xxs"><a title="" href="index.php"><img src="templates/future/img/cottage-logo2.png" alt=""/></a></div>

	                    <p>&copy; 2014<span class="hidden-xxs">-  Laboratorium Sistem Informasi</span>| Tribute to Gunadarma</p>
						
						

	                 

	                    <div class="clear"></div>
	                </div>
	            </div>

	            <a href="#" class="btn-top glyphicon glyphicon-chevron-up hidden-xxs" title='Back to top...'></a>
	        </footer>
	    </div>
	</div>
</body>
</html>