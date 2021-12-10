<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Peta Bencana</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.12/css/weather-icons.min.css" integrity="sha512-r/Gan7PMSRovDus++vDS2Ayutc/cSdl268u047n4z+k7GYuR7Hiw71FsT3QQxdKJBVHYttOJ6IGLnlM9IoMToQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Latest compiled and minified JavaScript -->

    <style>
        .nk-sidebar-logo {
            zoom: 2;
            transform: translateX(-15px);
        }

        select .wis {
            font-family: 'weathericons';
        }

        .bootstrap-select .btn-light {
            background-color: transparent;
        }
        .custom-div-icon{
            width: 1.5rem;
            height: 1.5rem;
        }
        .text-twoline {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
                    line-clamp: 2; 
            -webkit-box-orient: vertical;
        }
        .short-text {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 210px;
        }
    </style>
</head>

<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/crypto/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./assets/images/logo.png" alt="logo">
                            <img class="logo-dark logo-img" src="./assets/images/logo.png" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-widget d-none d-xl-block">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">JUMLAH TOTAL BENCANA</h6>
                                        <div class="user-balance"><?php echo $stats["total"]; ?></small></div>
                                        <!-- <div class="user-balance-alt">3 <span class="currency currency-btc">BULAN INI</span></div> -->
                                    </div>
                                    <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                </div>
                                <ul class="user-account-data gy-1">
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Bulan ini</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="sub-text"><?php echo $stats["monthly"]; ?><span class="currency currency-btc"></span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Tahun ini</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="lead-text"><?php echo $stats["yearly"]; ?> <span class="currency currency-btc"></span></span>
                                            <span class="text-success ml-2">40% <em class="icon ni ni-arrow-long-up"></em></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="user-account-actions">
                                    <a href="#" class="btn btn-lg btn-primary" onclick="adjustMapSize()" data-toggle="modal" data-target="#modalForm"><span>Laporkan Bencana</span></a>
                                </div>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <em class="icon ni ni-chevron-down"></em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="user-account-links">
                                        <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                        <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                        <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Log out</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="dashboard" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="databencana" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                                            <span class="nk-menu-text">Data Bencana</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="jenisbencana" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-contact"></em></span>
                                            <span class="nk-menu-text">Jenis Bencana</span>
                                        </a>
                                    </li>
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-sidebar-menu -->

                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-footer">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item ml-auto">
                                        <div class="dropup">
                                            <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                                <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                <span class="nk-menu-text">English</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- .nk-footer-menu -->
                            </div><!-- .nk-sidebar-footer -->
                        </div><!-- .nk-sidebar-content -->
                    </div><!-- .nk-sidebar-body -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/crypto/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    <span class="nio-version">Crypto</span>
                                </a>
                            </div>
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <marquee>Do you know the latest update of 2019? <span> A overview of our is now available on YouTube</span></marquee>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-name"><?php echo $me->nama; ?></div>
                                                    <div class="text-muted dropdown-indicator"><?php echo $me->email; ?></div>

                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right dropdown-menu-s1">
                                            
                                        <div class="dropdown-inner user-account-info">
                                                <div class="user-balance-sub">API KEY: <br><b><?php echo $me->password; ?></b></span></div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="./dashboard/signout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <?php echo $contents; ?>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer nk-footer-fluid">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

    

    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Laporkan Bencana</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="./databencana/do_post" method="POST" class="form-validate" enctype="multipart/form-data">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-subject">Judul</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-subject" name="form_judul" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="jenisz">Jenis Bencana</label>
                                    <div class="form-control-wrap ">
                                        <select class="selectpicker" id="jenisz" name="form_jenis">
                                            <option value="-1">Pilih...</option>
                                            <?php foreach($jenisb as $jb){
                                                echo '<option value="'.$jb['id'].'" data-icon="wi '.$jb['icon'].'">'.$jb['jenis_bencana'].'</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-message">Deskripsi</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm" id="fv-message" name="form_desc" placeholder="Tulis laporan lengkap mengenai bencana disini" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-subjectx">Alamat</label>
                                    <!-- <a href="#" class="text-primary" onclick="initmaps()" style="margin-top: -10px;" data-toggle="modal" data-target="#mapspicker">  Pilih Di Peta</a> -->
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-subjectx" name="form_alamat" required>
                                    </div>
                                </div>
                                <div id="mapicker" style="height: 210px;"></div>
                                <input type="hidden" id="maplat" name="maplat"/>
                                <input type="hidden" id="maplng" name="maplng"/>
                                <input type="hidden" id="ids" name="ids"/>
                                <p><i class="text-muted">Klik pada peta untuk menandai lokasi</i></p>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-subjectx">Tanggal Kejadian</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control date-picker" id="xfv-subjectx" name="form_tgl" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="customFileLabel">Foto Kejadian</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="userfile" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Konfirmasi Hapus
                </div>
                <div class="modal-body">
                    Apakah kamu yakin ingin menghapus ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <a id="hapusbtn" class="btn btn-danger btn-ok text-white">Ya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalFormjenis">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambahkan Jenis Bencana</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="./jenisbencana/add" onsubmit="return validateFormJenis(this)" method="post" class="form-validate">
                        <input type="hidden" id="bids" name="bids">
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-subjectx">Nama Bencana</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-subjectx" name="nama_bencana" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics1">Simbol</label>
                                    <div class="form-control-wrap ">
                                        <select class="selectpicker" id="fv-topics1" name="icon" required>
                                            <option value="0">Pilih...</option>
                                            <option value="wi-day-sunny" data-icon="wi wi-day-sunny">Day Sunny</option>
                                            <option value="wi-day-cloudy" data-icon="wi wi-day-cloudy">Day Cloudy</option>
                                            <option value="wi-day-cloudy-gusts" data-icon="wi wi-day-cloudy-gusts">Day Cloudy Gusts</option>
                                            <option value="wi-day-cloudy-windy" data-icon="wi wi-day-cloudy-windy">Day Cloudy Windy</option>
                                            <option value="wi-day-fog" data-icon="wi wi-day-fog">Day Fog</option>
                                            <option value="wi-day-hail" data-icon="wi wi-day-hail">Day Hail</option>
                                            <option value="wi-day-haze" data-icon="wi wi-day-haze">Day Haze</option>
                                            <option value="wi-day-lightning" data-icon="wi wi-day-lightning">Day Lightning</option>
                                            <option value="wi-day-rain" data-icon="wi wi-day-rain">Day Rain</option>
                                            <option value="wi-day-rain-mix" data-icon="wi wi-day-rain-mix">Day Rain Mix</option>
                                            <option value="wi-day-rain-wind" data-icon="wi wi-day-rain-wind">Day Rain Wind</option>
                                            <option value="wi-day-showers" data-icon="wi wi-day-showers">Day Showers</option>
                                            <option value="wi-day-sleet" data-icon="wi wi-day-sleet">Day Sleet</option>
                                            <option value="wi-day-sleet-storm" data-icon="wi wi-day-sleet-storm">Day Sleet Storm</option>
                                            <option value="wi-day-snow" data-icon="wi wi-day-snow">Day Snow</option>
                                            <option value="wi-day-snow-thunderstorm" data-icon="wi wi-day-snow-thunderstorm">Day Snow Thunderstorm</option>
                                            <option value="wi-day-snow-wind" data-icon="wi wi-day-snow-wind">Day Snow Wind</option>
                                            <option value="wi-day-sprinkle" data-icon="wi wi-day-sprinkle">Day Sprinkle</option>
                                            <option value="wi-day-storm-showers" data-icon="wi wi-day-storm-showers">Day Storm Showers</option>
                                            <option value="wi-day-sunny-overcast" data-icon="wi wi-day-sunny-overcast">Day Sunny Overcast</option>
                                            <option value="wi-day-thunderstorm" data-icon="wi wi-day-thunderstorm">Day Thunderstorm</option>
                                            <option value="wi-day-windy" data-icon="wi wi-day-windy">Day Windy</option>
                                            <option value="wi-solar-eclipse" data-icon="wi wi-solar-eclipse">Solar Eclipse</option>
                                            <option value="wi-hot" data-icon="wi wi-hot">Hot</option>
                                            <option value="wi-day-cloudy-high" data-icon="wi wi-day-cloudy-high">Day Cloudy High</option>
                                            <option value="wi-day-light-wind" data-icon="wi wi-day-light-wind">Day Light Wind</option>
                                            <option value="wi-night-clear" data-icon="wi wi-night-clear">Night Clear</option>
                                            <option value="wi-night-alt-cloudy" data-icon="wi wi-night-alt-cloudy">Night Alt Cloudy</option>
                                            <option value="wi-night-alt-cloudy-gusts" data-icon="wi wi-night-alt-cloudy-gusts">Night Alt Cloudy Gusts</option>
                                            <option value="wi-night-alt-cloudy-windy" data-icon="wi wi-night-alt-cloudy-windy">Night Alt Cloudy Windy</option>
                                            <option value="wi-night-alt-hail" data-icon="wi wi-night-alt-hail">Night Alt Hail</option>
                                            <option value="wi-night-alt-lightning" data-icon="wi wi-night-alt-lightning">Night Alt Lightning</option>
                                            <option value="wi-night-alt-rain" data-icon="wi wi-night-alt-rain">Night Alt Rain</option>
                                            <option value="wi-night-alt-rain-mix" data-icon="wi wi-night-alt-rain-mix">Night Alt Rain Mix</option>
                                            <option value="wi-night-alt-rain-wind" data-icon="wi wi-night-alt-rain-wind">Night Alt Rain Wind</option>
                                            <option value="wi-night-alt-showers" data-icon="wi wi-night-alt-showers">Night Alt Showers</option>
                                            <option value="wi-night-alt-sleet" data-icon="wi wi-night-alt-sleet">Night Alt Sleet</option>
                                            <option value="wi-night-alt-sleet-storm" data-icon="wi wi-night-alt-sleet-storm">Night Alt Sleet Storm</option>
                                            <option value="wi-night-alt-snow" data-icon="wi wi-night-alt-snow">Night Alt Snow</option>
                                            <option value="wi-night-alt-snow-thunderstorm" data-icon="wi wi-night-alt-snow-thunderstorm">Night Alt Snow Thunderstorm</option>
                                            <option value="wi-night-alt-snow-wind" data-icon="wi wi-night-alt-snow-wind">Night Alt Snow Wind</option>
                                            <option value="wi-night-alt-sprinkle" data-icon="wi wi-night-alt-sprinkle">Night Alt Sprinkle</option>
                                            <option value="wi-night-alt-storm-showers" data-icon="wi wi-night-alt-storm-showers">Night Alt Storm Showers</option>
                                            <option value="wi-night-alt-thunderstorm" data-icon="wi wi-night-alt-thunderstorm">Night Alt Thunderstorm</option>
                                            <option value="wi-night-cloudy" data-icon="wi wi-night-cloudy">Night Cloudy</option>
                                            <option value="wi-night-cloudy-gusts" data-icon="wi wi-night-cloudy-gusts">Night Cloudy Gusts</option>
                                            <option value="wi-night-cloudy-windy" data-icon="wi wi-night-cloudy-windy">Night Cloudy Windy</option>
                                            <option value="wi-night-fog" data-icon="wi wi-night-fog">Night Fog</option>
                                            <option value="wi-night-hail" data-icon="wi wi-night-hail">Night Hail</option>
                                            <option value="wi-night-lightning" data-icon="wi wi-night-lightning">Night Lightning</option>
                                            <option value="wi-night-partly-cloudy" data-icon="wi wi-night-partly-cloudy">Night Partly Cloudy</option>
                                            <option value="wi-night-rain" data-icon="wi wi-night-rain">Night Rain</option>
                                            <option value="wi-night-rain-mix" data-icon="wi wi-night-rain-mix">Night Rain Mix</option>
                                            <option value="wi-night-rain-wind" data-icon="wi wi-night-rain-wind">Night Rain Wind</option>
                                            <option value="wi-night-showers" data-icon="wi wi-night-showers">Night Showers</option>
                                            <option value="wi-night-sleet" data-icon="wi wi-night-sleet">Night Sleet</option>
                                            <option value="wi-night-sleet-storm" data-icon="wi wi-night-sleet-storm">Night Sleet Storm</option>
                                            <option value="wi-night-snow" data-icon="wi wi-night-snow">Night Snow</option>
                                            <option value="wi-night-snow-thunderstorm" data-icon="wi wi-night-snow-thunderstorm">Night Snow Thunderstorm</option>
                                            <option value="wi-night-snow-wind" data-icon="wi wi-night-snow-wind">Night Snow Wind</option>
                                            <option value="wi-night-sprinkle" data-icon="wi wi-night-sprinkle">Night Sprinkle</option>
                                            <option value="wi-night-storm-showers" data-icon="wi wi-night-storm-showers">Night Storm Showers</option>
                                            <option value="wi-night-thunderstorm" data-icon="wi wi-night-thunderstorm">Night Thunderstorm</option>
                                            <option value="wi-lunar-eclipse" data-icon="wi wi-lunar-eclipse">Lunar Eclipse</option>
                                            <option value="wi-stars" data-icon="wi wi-stars">Stars</option>
                                            <option value="wi-storm-showers" data-icon="wi wi-storm-showers">Storm Showers</option>
                                            <option value="wi-thunderstorm" data-icon="wi wi-thunderstorm">Thunderstorm</option>
                                            <option value="wi-night-alt-cloudy-high" data-icon="wi wi-night-alt-cloudy-high">Night Alt Cloudy High</option>
                                            <option value="wi-night-cloudy-high" data-icon="wi wi-night-cloudy-high">Night Cloudy High</option>
                                            <option value="wi-night-alt-partly-cloudy" data-icon="wi wi-night-alt-partly-cloudy">Night Alt Partly Cloudy</option>
                                            <option value="wi-cloud" data-icon="wi wi-cloud">Cloud</option>
                                            <option value="wi-cloudy" data-icon="wi wi-cloudy">Cloudy</option>
                                            <option value="wi-cloudy-gusts" data-icon="wi wi-cloudy-gusts">Cloudy Gusts</option>
                                            <option value="wi-cloudy-windy" data-icon="wi wi-cloudy-windy">Cloudy Windy</option>
                                            <option value="wi-fog" data-icon="wi wi-fog">Fog</option>
                                            <option value="wi-hail" data-icon="wi wi-hail">Hail</option>
                                            <option value="wi-rain" data-icon="wi wi-rain">Rain</option>
                                            <option value="wi-rain-mix" data-icon="wi wi-rain-mix">Rain Mix</option>
                                            <option value="wi-rain-wind" data-icon="wi wi-rain-wind">Rain Wind</option>
                                            <option value="wi-showers" data-icon="wi wi-showers">Showers</option>
                                            <option value="wi-sleet" data-icon="wi wi-sleet">Sleet</option>
                                            <option value="wi-snow" data-icon="wi wi-snow">Snow</option>
                                            <option value="wi-sprinkle" data-icon="wi wi-sprinkle">Sprinkle</option>
                                            <option value="wi-storm-showers" data-icon="wi wi-storm-showers">Storm Showers</option>
                                            <option value="wi-thunderstorm" data-icon="wi wi-thunderstorm">Thunderstorm</option>
                                            <option value="wi-snow-wind" data-icon="wi wi-snow-wind">Snow Wind</option>
                                            <option value="wi-snow" data-icon="wi wi-snow">Snow</option>
                                            <option value="wi-smog" data-icon="wi wi-smog">Smog</option>
                                            <option value="wi-smoke" data-icon="wi wi-smoke">Smoke</option>
                                            <option value="wi-lightning" data-icon="wi wi-lightning">Lightning</option>
                                            <option value="wi-raindrops" data-icon="wi wi-raindrops">Raindrops</option>
                                            <option value="wi-raindrop" data-icon="wi wi-raindrop">Raindrop</option>
                                            <option value="wi-dust" data-icon="wi wi-dust">Dust</option>
                                            <option value="wi-snowflake-cold" data-icon="wi wi-snowflake-cold">Snowflake Cold</option>
                                            <option value="wi-windy" data-icon="wi wi-windy">Windy</option>
                                            <option value="wi-strong-wind" data-icon="wi wi-strong-wind">Strong Wind</option>
                                            <option value="wi-sandstorm" data-icon="wi wi-sandstorm">Sandstorm</option>
                                            <option value="wi-earthquake" data-icon="wi wi-earthquake">Earthquake</option>
                                            <option value="wi-fire" data-icon="wi wi-fire">Fire</option>
                                            <option value="wi-flood" data-icon="wi wi-flood">Flood</option>
                                            <option value="wi-meteor" data-icon="wi wi-meteor">Meteor</option>
                                            <option value="wi-tsunami" data-icon="wi wi-tsunami">Tsunami</option>
                                            <option value="wi-volcano" data-icon="wi wi-volcano">Volcano</option>
                                            <option value="wi-hurricane" data-icon="wi wi-hurricane">Hurricane</option>
                                            <option value="wi-tornado" data-icon="wi wi-tornado">Tornado</option>
                                            <option value="wi-small-craft-advisory" data-icon="wi wi-small-craft-advisory">Small Craft Advisory</option>
                                            <option value="wi-gale-warning" data-icon="wi wi-gale-warning">Gale Warning</option>
                                            <option value="wi-storm-warning" data-icon="wi wi-storm-warning">Storm Warning</option>
                                            <option value="wi-hurricane-warning" data-icon="wi wi-hurricane-warning">Hurricane Warning</option>
                                            <option value="wi-wind-direction" data-icon="wi wi-wind-direction">Wind Direction</option>
                                            <option value="wi-alien" data-icon="wi wi-alien">Alien</option>
                                            <option value="wi-celsius" data-icon="wi wi-celsius">Celsius</option>
                                            <option value="wi-fahrenheit" data-icon="wi wi-fahrenheit">Fahrenheit</option>
                                            <option value="wi-degrees" data-icon="wi wi-degrees">Degrees</option>
                                            <option value="wi-thermometer" data-icon="wi wi-thermometer">Thermometer</option>
                                            <option value="wi-thermometer-exterior" data-icon="wi wi-thermometer-exterior">Thermometer Exterior</option>
                                            <option value="wi-thermometer-internal" data-icon="wi wi-thermometer-internal">Thermometer Internal</option>
                                            <option value="wi-cloud-down" data-icon="wi wi-cloud-down">Cloud Down</option>
                                            <option value="wi-cloud-up" data-icon="wi wi-cloud-up">Cloud Up</option>
                                            <option value="wi-cloud-refresh" data-icon="wi wi-cloud-refresh">Cloud Refresh</option>
                                            <option value="wi-horizon" data-icon="wi wi-horizon">Horizon</option>
                                            <option value="wi-horizon-alt" data-icon="wi wi-horizon-alt">Horizon Alt</option>
                                            <option value="wi-sunrise" data-icon="wi wi-sunrise">Sunrise</option>
                                            <option value="wi-sunset" data-icon="wi wi-sunset">Sunset</option>
                                            <option value="wi-moonrise" data-icon="wi wi-moonrise">Moonrise</option>
                                            <option value="wi-moonset" data-icon="wi wi-moonset">Moonset</option>
                                            <option value="wi-refresh" data-icon="wi wi-refresh">Refresh</option>
                                            <option value="wi-refresh-alt" data-icon="wi wi-refresh-alt">Refresh Alt</option>
                                            <option value="wi-umbrella" data-icon="wi wi-umbrella">Umbrella</option>
                                            <option value="wi-barometer" data-icon="wi wi-barometer">Barometer</option>
                                            <option value="wi-humidity" data-icon="wi wi-humidity">Humidity</option>
                                            <option value="wi-na" data-icon="wi wi-na">Na</option>
                                            <option value="wi-train" data-icon="wi wi-train">Train</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics2">Warna</label>
                                    <div class="form-control-wrap">
                                        <select class="selectpicker" id="fv-topics2" name="color">
                                            <option value="0">Pilih...</option>
                                            <option value="primary" class="bg-primary text-white">Biru</option>
                                            <option value="warning" class="bg-warning text-white">Kuning</option>
                                            <option value="danger" class="bg-danger text-white">Merah</option>
                                            <option value="info" class="bg-info text-white">Indigo</option>
                                            <option value="success" class="bg-success text-white">Hijau</option>
                                            <option value="dark" class="bg-dark text-white">Hitam</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="mapspicker">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Lokasi Bencana</h5>
                </div>
                <div class="modal-body">
                <div class="text-muted text-sm">Silahkan tandai lokasi di maps</div>

                <div id="mapickerf" style="height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->

    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/chart-crypto.js?ver=2.4.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script>
        $( document ).ready(function() {
            $('#confirm-delete').on('show.bs.modal', function (event) {
                var myVal = $(event.relatedTarget).data('val');
                alert(myVal)
                $(this).find("#hapusbtn").attr("href",myVal);
            });
            $('#modalForm').on('show.bs.modal', function () {
                setTimeout(()=>{
                    mapick.invalidateSize()
                },1000);
            })
            mapick = L.map('mapicker').setView([-0.8409388917254519, 117.35767364501955],4);
            var tiles = L.tileLayer('https://tile.jawg.io/jawg-light/{z}/{x}/{y}{r}.png?access-token=7SIL5sz0pZczkTMNc6Bs4CLRXtUFvqwNJrqxou2wSn9ZEzeJuSnxUICO8Qr95c6g', {}).addTo(mapick);
            mapick.on('click', function(e){
                if(window.oldmarker) mapick.removeLayer(window.oldmarker)
                window.oldmarker = new L.marker(e.latlng).addTo(mapick);
                $("#maplat").val(e.latlng.lat)
                $("#maplng").val(e.latlng.lng)
            });
        });

        function hapusBencana(event){
            var myVal = $(event).data('val');
            $("#hapusbtn").attr("href","./databencana/del/"+myVal);
        }
        function hapusJenisBencana(event){
            var myVal = $(event).data('val');
            $("#hapusbtn").attr("href","./jenisbencana/del/"+myVal);
        }
        function editJenisBencana(event){
            var d_id = $(event).data('ids');
            var d_jenis = $(event).data('jenis');
            var d_col = $(event).data('color');
            var d_icon = $(event).data('icon');
            $("input[name='nama_bencana']").val(d_jenis)
            $("#bids").val(d_id)
            $("select[name='icon']").val(d_icon)
            $("select[name='color']").val(d_col)
            $('.selectpicker').selectpicker('refresh')
            //alert(d_id+"\n"+d_jenis+"\n"+d_col+"\n"+d_icon)
        }
        function editBencana(event){
            var d_alamat = $(event).data('alamt');
            var d_id = $(event).data('ids');
            var d_lat = $(event).data('lat');
            var d_lng = $(event).data('lng');
            var d_idjenis = $(event).data('idjenis');
            var d_judul = $(event).data('jud');
            var d_des = $(event).data('des');
            var d_jenis = $(event).data('jen');
            var d_tgl = $(event).data('tgl');
            $("input[name='form_tgl']").val(d_tgl)
            $("input[name='form_alamat']").val(d_alamat)
            $("input[name='form_judul']").val(d_judul)
            $("textarea[name='form_desc']").val(d_des)
            $("select[name='form_jenis']").val(d_idjenis)
            $("input[name='form_maplat']").val(d_lat)
            $("input[name='form_maplng']").val(d_lng)
            $("input[name='ids']").val(d_id)
            $('.selectpicker').selectpicker('refresh')
            adjustMapSize([parseFloat(d_lat),parseFloat(d_lng)])
        }
        function validateFormJenis(el){
            var icon=el.elements["icon"].value;
            var color=el.elements["color"].value;
            if(icon=="0" || color=="0") return false;
            return true;
        }
        function adjustMapSize(pos){
            if(!pos){
                if(window.oldmarker) mapick.removeLayer(window.oldmarker)
                $("input[name='form_tgl']").val("")
                $("input[name='form_alamat']").val("")
                $("input[name='form_judul']").val("")
                $("textarea[name='form_desc']").val("")
                $("select[name='form_jenis']").val("-1")
                $("input[name='form_maplat']").val("")
                $("input[name='form_maplng']").val("")
                $("input[name='ids']").val("")
                $("input[name='ids']").removeAttr("")
                $('.selectpicker').selectpicker('refresh')
            }
            setTimeout(()=>{
                    if(pos){
                        if(window.oldmarker) mapick.removeLayer(window.oldmarker)
                        window.oldmarker = new L.marker(pos).addTo(mapick);
                    }
                    mapick.invalidateSize()
                },1000);
        }

    </script>

</body>

</html>