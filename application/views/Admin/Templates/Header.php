
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin BISA AI Learning</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    <link href="<?=base_url('assets/Admin/select2/dist/css/select2.min.css')?>" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom styles for this template -->
    <style>
      :root {
          --ck-z-default: 9999;
          --ck-z-modal: calc( var(--ck-z-default) + 999 );
      }
        body {
  font-size: .875rem;
}

 
/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/*
 * Utilities
 */

.bg-dark2{
    background-color: #007bff;
} 

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

#loading {
   z-index: 9999;
   position: absolute;
   top: 0;
   right: 0;
   margin-top: 66px;
   margin-right: 70px;
}



.editor__editable,
/* Classic build. */
main .ck-editor[role='application'] .ck.ck-content,
/* Decoupled document build. */
.ck.editor__editable[role='textbox'],
.ck.ck-editor__editable[role='textbox'],
/* Inline & Balloon build. */
.ck.editor[role='textbox'] {
	width: 100%;
	background: #fff;
	font-size: 1em;
	line-height: 1.6em;
	min-height: var(--ck-sample-editor-min-height);
	padding: 1.5em 2em;
}

main .ck-editor[role='application'] {
	overflow: auto;
}

.ck.ck-editor__editable {
	background: #fff;
	border: 1px solid hsl(0, 0%, 70%);
	width: 100%;
}

/* Because of sidebar `position: relative`, Edge is overriding the outline of a focused editor. */
.ck.ck-editor__editable {
	position: relative;
	z-index: var(--ck-sample-editor-z-index);
}

.editor-container {
	display: flex;
	flex-direction: row;
    flex-wrap: nowrap;
    position: relative;
	width: 100%;
	justify-content: center;
}

.document-editor__toolbar{
    width: 100%;
}
.modal.modal-full .modal-dialog {
  width: 100%;
  /* height: 100vh; */
  margin: 0;
  padding: 0;
  max-width: none; 
  padding: 20px;
}

.modal.modal-full .modal-content {
  margin-top: 20px;
  height: auto;
  /* height: 100vh; */
  border-radius: 0;
  border: none; 
}

.modal.modal-full .modal-body {
  overflow-y: auto; 
}
.ck.ck-balloon-panel.ck-balloon-panel_visible {
    z-index: 9999!important;
}

/* .select2{
  width: 100%;
} */
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark2 flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Bisaai Admin</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">  
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Hi, <?=$this->session->userdata('nama')?></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid" id="body-row">
      <div class="row">
        <!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="<?=base_url('Dapur/dashboard')?>">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Dapur/course')?>">
                  <i class="fa fa-university" aria-hidden="true"></i>
                  Course
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Dapur/learncation')?>">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  Learncation
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Akun</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Dapur/login/logout')?>">
                  <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                  Logout
                </a>
              </li>
               
            </ul>
 

          </div>
        </nav> -->

    <!-- Sidebar -->
    <div id="sidebar-container" class="col-md-2 d-none d-md-block bg-light sidebar"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <a href="<?=base_url('Dapur/dashboard')?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-home" aria-hidden="true"></i> 
                    <span class="menu-collapsed"> &nbsp; Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>

            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-book" aria-hidden="true"></i>  
                    <span class="menu-collapsed"> &nbsp; Course</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?=base_url('Dapur/course')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Course</span>
                </a>
                <a href="<?=base_url('Dapur/silabus')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Syllabus</span>
                </a>
                <a href="<?=base_url('Dapur/quiz')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Quiz</span>
                </a>
                <a href="<?=base_url('Dapur/flashsale')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Flashsale</span>
                </a>
                <a href="<?=base_url('Dapur/discuss')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Discussion</span>
                </a>
                <a href="<?=base_url('Dapur/porto')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Portofolio</span>
                </a>
                <a href="<?=base_url('Dapur/tugas')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; List Tugas Silabus</span>
                </a>
                <a href="<?=base_url('Dapur/tugas/ta')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; List Tugas Akhir</span>
                </a>
                <a href="<?=base_url('Dapur/porto_topik')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Portofolio Topik Modeling</span>
                </a>
            </div>

            <!-- Menu with submenu -->
            <a href="#degree1" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <span class="menu-collapsed"> &nbsp; Pendidikan</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='degree1' class="collapse sidebar-submenu">
                <a href="<?=base_url('Dapur/degree')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Pendidikan</span>
                </a>

                <a href="<?=base_url('Dapur/master_pendidikan')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Master Universitas</span>
                </a>

                <a href="<?=base_url('Dapur/master_pendidikan/jenjang')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Master Jenjang Pendidikan</span>
                </a>

                <a href="<?=base_url('Dapur/master_pendidikan/prodi')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Master Program Studi</span>
                </a>

                <a href="<?=base_url('Dapur/master_pendidikan/batch')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Master Batch Pendidikan</span>
                </a>
                 
            </div>

            <!-- Menu with submenu -->
            <a href="#cert" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span class="menu-collapsed"> &nbsp; Certificate</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='cert' class="collapse sidebar-submenu">
                <a href="<?=base_url('Dapur/certificate')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Certificate</span>
                </a>
                <a href="<?=base_url('Dapur/cert_faq')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data FAQ</span>
                </a>
                <a href="<?=base_url('Dapur/cert_kategori')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Kategori</span>
                </a>
                <a href="<?=base_url('Dapur/cert_partner')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Data Partner</span>
                </a>
                <a href="<?=base_url('Dapur/cert_assign')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Assign Course > Certificate</span>
                </a>
                <a href="<?=base_url('Dapur/cert_exam')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Exam</span>
                </a>
                <a href="<?=base_url('Dapur/cert_quiz')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Quiz </span>
                </a>

                 
            </div>

            <!-- Menu with submenu -->
            <!-- <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-university" aria-hidden="true"></i>  
                    <span class="menu-collapsed"> &nbsp; Tugas </span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a> -->
            
            <!-- Submenu content -->
            <!-- <div id='submenu2' class="collapse sidebar-submenu">
                <a href="<?=base_url('Dapur/tugas')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Tugas Silabus</span>
                </a>
                <a href="<?=base_url('Dapur/tugas/ta')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Tugas Akhir</span>
                </a>
        
            </div> -->

            <!-- Menu with submenu -->
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                <i class="fas fa-money-check-alt"></i>
                    <span class="menu-collapsed"> &nbsp; Transaksi </span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            
            <!-- Submenu content -->
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="<?=base_url('Dapur/transaksi')?>" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Course Transaction</span>
                </a>
                <a href="<?=base_url('Dapur/transaksi/certificate')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Certificate</span>
                </a>
                <a href="<?=base_url('Dapur/transaksi/degree')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Pendididkan</span>
                </a>
                <a href="<?=base_url('Dapur/transaksi/solusi')?>" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed"> <i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Solusi</span>
                </a>
        
            </div>

          
            <a href="<?=base_url('Dapur/login/logout')?>"  class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fa fa-sign-out-alt" aria-hidden="true"></i> 
                    <span class="menu-collapsed"> &nbsp; Logout</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
 

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><?=$title?></h1>
          </div> 
          
