<div class="container-xl wide-lg">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Data Bencana</h3>
                    <div class="nk-block-des text-soft">
                        <p>Total ada <?php echo $stats["total"]; ?> data bencana. Menampilkan
                            <?php echo count($bencanas); ?> data</p>
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
        <?php if ($this->session->flashdata('msgx')) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('msgx');
                if (isset($_SESSION['msgx'])) {
                    unset($_SESSION['msgx']);
                }
                ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('msgr')) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('msgr');
                if (isset($_SESSION['msgr'])) {
                    unset($_SESSION['msgr']);
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
                                <h5 class="title">Data Bencana</h5>
                            </div>

                        </div><!-- .card-title-group -->
                    </div><!-- .card-inner -->

                    <div class="card card-preview">
                        <div class="card-inner">
                            <table id="mydata" class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span>Jenis Bencana</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span>Deskripsi</span></th>
                                        <th class="nk-tb-col text-right tb-col-sm"><span>Lokasi &amp; Tanggal</span>
                                        </th>
                                        <th class="nk-tb-col nk-tb-col-tools"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    function trimaddr($ss)
                                    {
                                        return array_slice(explode(",", $ss), -3, 1)[0];
                                    }
                                    foreach ($bencanas as $b) { ?>
                                        <tr class="nk-tb-item">
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
                                                <span class="tb-amount"><?php echo $b['tanggal_kejadian']; ?></span>
                                                <span class="tb-amount-sm"><?php echo trimaddr($b['alamat']); ?></span>
                                            </td>

                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-2">

                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt">
                                                                <li><a href="./uploads/<?php echo $b["photo_bencana"]; ?>" target="_blank"><em class="icon ni ni-eye"></em><span>Lihat Foto Bencana</span></a>
                                                                    </li>    
                                                                <li><a href="#" data-toggle="modal" data-target="#modalForm" onclick="editBencana(this)" data-idjenis="<?php echo $b['jenis_bencana_id']; ?>" data-ids="<?php echo $b['id']; ?>" data-lat="<?php echo $b['latitude']; ?>" data-lng="<?php echo $b['longitude']; ?>" data-alamt="<?php echo $b['alamat']; ?>" data-tgl="<?php echo $b['tanggal_kejadian']; ?>" data-jud="<?php echo $b['judul_bencana']; ?>" data-jen="<?php echo $b['jenis_bencana']; ?>" data-des="<?php echo $b['deskripsi_bencana']; ?>" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-pen"></em><span>Edit</span></a>
                                                                    </li>
                                                                    <li><a href="#" data-toggle="modal" data-val="<?php echo $b['id']; ?>" onclick="hapusBencana(this)" data-target="#confirm-delete"><em class="icon ni ni-trash"></em><span>Hapus</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->

                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>