###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.


<div class="container-xl wide-lg">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Data Bencana</h3>
                    <div class="nk-block-des text-soft">
                        <p>Total ada <?php echo $stats["total"]; ?> data bencana. Menampilkan <?php echo count($bencanas); ?> data</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="./databencana/exportexcel" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export Excel</span></a></li>
                                <li><a href="./databencana/exportpdf" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export PDF</span></a></li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" onclick="adjustMapSize()" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-plus"></em></a>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <?php if($this->session->flashdata('msgx')){ ?>
            <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('msgx');
            if(isset($_SESSION['msgx'])){
                unset($_SESSION['msgx']);
            }
            ?>
        </div>
        <?php } ?>
        <div class="nk-block">
            <div class="card card-bordered card-stretch">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h5 class="title">Page #<?php echo $curpage; ?></h5>
                            </div>

                        </div><!-- .card-title-group -->
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-tnx">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span>Jenis Bencana</span></div>
                                <div class="nk-tb-col tb-col-lg"><span>Deskripsi</span></div>
                                <div class="nk-tb-col text-right tb-col-sm"><span>Lokasi &amp; Tanggal</span></div>
                                <!-- <div class="nk-tb-col tb-col-lg text-right"><span>Lokasi</span></div> -->
                                <!-- <div class="nk-tb-col nk-tb-col-sm"><span class="sub-text d-none d-md-block"></span></div> -->
                                <div class="nk-tb-col nk-tb-col-tools"></div>
                            </div><!-- .nk-tb-item -->
                            <?php
                            function trimaddr($ss){
                                return array_slice(explode(",",$ss),-3,1)[0];
                            }
                            foreach($bencanas as $b){ ?>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col col-4">
                                    <div class="nk-tnx-type">
                                        <div class="nk-tnx-type-icon bg-<?php echo $b['color'] ?>-dim text-<?php echo $b['color'] ?>">
                                            <em class="icon wi <?php echo $b['icon'] ?>"></em>
                                        </div>
                                        <div class="nk-tnx-type-text short-text">
                                            <span class="tb-lead"><?php echo $b['jenis_bencana']; ?></span>
                                            <span class="tb-date"><?php echo $b['judul_bencana']; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-tb-col col-5">
                                    <span class="text-twoline"><?php echo $b['deskripsi_bencana']; ?></span>
                                </div>
                                <div class="nk-tb-col text-right short-text">
                                    <span class="tb-amount"><?php echo trimaddr($b['alamat']); ?></span>
                                    <span class="tb-amount-sm"><?php echo $b['tanggal_kejadian']; ?></span>
                                </div>
                                
                                <!-- <div class="nk-tb-col nk-tb-col-status">
                                    <div class="dot dot-success d-md-none"></div>
                                    <span class="badge badge-sm badge-dim badge-outline-success d-none d-md-inline-flex">Completed</span>
                                </div> -->
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">

                                        <li>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt">
                                                        <li><a href="#" data-toggle="modal" data-target="#modalForm" onclick="editBencana(this)" data-idjenis="<?php echo $b['jenis_bencana_id']; ?>" data-ids="<?php echo $b['id']; ?>" data-lat="<?php echo $b['latitude']; ?>" data-lng="<?php echo $b['longitude']; ?>" data-alamt="<?php echo $b['alamat']; ?>" data-tgl="<?php echo $b['tanggal_kejadian']; ?>" data-jud="<?php echo $b['judul_bencana']; ?>" data-jen="<?php echo $b['jenis_bencana']; ?>" data-des="<?php echo $b['deskripsi_bencana']; ?>" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                        <li><a href="#" data-toggle="modal" data-val="<?php echo $b['id']; ?>" onclick="hapusBencana(this)" data-target="#confirm-delete"><em class="icon ni ni-trash"></em><span>Hapus</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <?php } ?>
                        </div><!-- .nk-tb-list -->
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <ul class="pagination justify-content-center justify-content-md-start">
                            <?php if($curpage>1){ ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $curpage-1; ?>">Prev</a></li>
                            <?php } ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $curpage+1; ?>">Next</a></li>
                        </ul>
                    </div><!-- .card-inner -->
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>





<td class="nk-tb-col col-4">
    <div class="nk-tnx-type">
        <div class="nk-tnx-type-icon bg-<?php echo $b['color'] ?>-dim text-<?php echo $b['color'] ?>">
            <em class="icon wi <?php echo $b['icon'] ?>"></em>
        </div>
        <div class="nk-tnx-type-text short-text">
            <span class="tb-lead"><?php echo $b['jenis_bencana']; ?></span>
            <span class="tb-date"><?php echo $b['judul_bencana']; ?></span>
        </div>
    </div>
</td>

<td class="nk-tb-col col-5">
    <span class="text-twoline"><?php echo $b['deskripsi_bencana']; ?></span>
</td>
<td class="nk-tb-col text-right short-text">
    <span class="tb-amount"><?php echo trimaddr($b['alamat']); ?></span>
    <span class="tb-amount-sm"><?php echo $b['tanggal_kejadian']; ?></span>
</td>

<td class="nk-tb-col nk-tb-col-tools">
    <ul class="nk-tb-actions gx-2">

        <li>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="link-list-opt">
                        <li><a href="#" data-toggle="modal" data-target="#modalForm" onclick="editBencana(this)" data-idjenis="<?php echo $b['jenis_bencana_id']; ?>" data-ids="<?php echo $b['id']; ?>" data-lat="<?php echo $b['latitude']; ?>" data-lng="<?php echo $b['longitude']; ?>" data-alamt="<?php echo $b['alamat']; ?>" data-tgl="<?php echo $b['tanggal_kejadian']; ?>" data-jud="<?php echo $b['judul_bencana']; ?>" data-jen="<?php echo $b['jenis_bencana']; ?>" data-des="<?php echo $b['deskripsi_bencana']; ?>" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                        <li><a href="#" data-toggle="modal" data-val="<?php echo $b['id']; ?>" onclick="hapusBencana(this)" data-target="#confirm-delete"><em class="icon ni ni-trash"></em><span>Hapus</span></a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</td>



<th class="nk-tb-col"><span>Jenis Bencana</span></th>
<th class="nk-tb-col tb-col-lg"><span>Deskripsi</span></th>
<th class="nk-tb-col text-right tb-col-sm"><span>Lokasi &amp; Tanggal</span></th>
<th class="nk-tb-col nk-tb-col-tools"></th>