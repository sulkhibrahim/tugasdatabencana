<div class="container-xl wide-lg">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Jenis Bencana</h3>
                    <div class="nk-block-des text-soft">
                        <p>Sekiranya ada <?php echo count($jenisb); ?> jenis bencana disini.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="./jenisbencana/exportexcel" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export Excel</span></a></li>
                                <li><a href="./jenisbencana/exportpdf" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export PDF</span></a></li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal" data-target="#modalFormjenis"><em class="icon ni ni-plus"></em></a>
                                        
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
                        
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-tnx">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span>Jenis Bencana</span></div>
                                <div class="nk-tb-col tb-col-lg"><span>Jumlah Bencana</span></div>
                                <!-- <div class="nk-tb-col text-right tb-col-sm"><span>Lokasi &amp; Tanggal</span></div> -->
                                <!-- <div class="nk-tb-col tb-col-lg text-right"><span>Lokasi</span></div> -->
                                <!-- <div class="nk-tb-col nk-tb-col-sm"><span class="sub-text d-none d-md-block"></span></div> -->
                                <div class="nk-tb-col nk-tb-col-tools"></div>
                            </div><!-- .nk-tb-item -->
                            <?php
                            foreach($jenisb as $b){ ?>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col col-6">
                                    <div class="nk-tnx-type">
                                        <div class="nk-tnx-type-icon bg-<?php echo $b['color'] ?>-dim text-<?php echo $b['color'] ?>">
                                            <em class="icon wi <?php echo $b['icon'] ?>"></em>
                                        </div>
                                        <div class="nk-tnx-type-text short-text">
                                            <span class="tb-lead"><?php echo $b['jenis_bencana']; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-tb-col col-3">
                                    <span class="text-twoline"><?php echo $b['total']; ?></span>
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
                                                        <li><a href="#" data-toggle="modal" onclick="editJenisBencana(this)" data-icon="<?php echo $b['icon'] ?>" data-ids="<?php echo $b['id'] ?>" data-color="<?php echo $b['color'] ?>" data-jenis="<?php echo $b['jenis_bencana'] ?>" data-target="#modalFormjenis"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                        <?php if($b["total"]==0){ ?>
                                                        <li><a href="#" data-toggle="modal" data-val="<?php echo $b['id'] ?>" onclick="hapusJenisBencana(this)" data-target="#confirm-delete"><em class="icon ni ni-trash"></em><span>Hapus</span></a></li>
                                                        <?php } ?>
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
                    
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>