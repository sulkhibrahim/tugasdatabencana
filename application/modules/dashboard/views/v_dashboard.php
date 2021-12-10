<div class="container-xl wide-lg">
<div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Peta Bencana</h3>
                    <div class="nk-block-des text-soft">
                        <p>Menampilkan <?php echo count($bencanas); ?> Bencana</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filter</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right" style="">
                                            <div class="dropdown-head">
                                                <span class="sub-title dropdown-title">Filter</span>
                                                <div class="dropdown">
                                                    <a href="#" class="link link-light">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-body dropdown-body-rg">
                                                <div class="row gx-6 gy-4">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            
                                                            <form method="get">
                                                            <label class="overline-title overline-title-alt">Jenis Bencana <?php echo $param_jen."//".$param_wak; ?></label>
                                                            <select name="jenis" class="form-select form-select-sm select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option  value='0'>Semua</option>
                                                                <?php 

                                                                //print_r(json_encode($jenis));

                                                                foreach($jenis as $j){
                                                                    echo "<option ".($param_jen==$j["jenis_bencana_id"]?"selected":"")." value='".$j["jenis_bencana_id"]."'>".$j['jenis_bencana']."</option>";
                                                                }
                                                                
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="overline-title overline-title-alt">Waktu</label>
                                                            <select name="waktu" class="form-select form-select-sm select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                <option value="0" <?php echo $param_wak==0?"selected":""; ?>>Semua</option>
                                                                <option value="1" <?php echo $param_wak==1?"selected":""; ?>>Hari ini</option>
                                                                <option value="2" <?php echo $param_wak==2?"selected":""; ?>>Minggu ini</option>
                                                                <option value="3" <?php echo $param_wak==3?"selected":""; ?>>Bulan ini</option>
                                                                <option value="4" <?php echo $param_wak==4?"selected":""; ?>>Tahun ini</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-secondary">Filter</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot between">
                                                <a class="clickable" href="./dashboard">Reset Filter</a>
                                                <!-- <a href="#savedFilter" data-toggle="modal">Save Filter</a> -->
                                            </div>
                                        </div><!-- .filter-wg -->
                                    </div><!-- .dropdown -->
                                </li>
                                <!-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a></li> -->
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div id="map" style="height: 550px;"></div>
        </div><!-- .nk-block -->
    </div>
</div>
<script>
    var map = L.map('map').setView([-0.8409388917254549, 117.35767364501955],5);

    var tiles = L.tileLayer('https://tile.jawg.io/jawg-light/{z}/{x}/{y}{r}.png?access-token=7SIL5sz0pZczkTMNc6Bs4CLRXtUFvqwNJrqxou2wSn9ZEzeJuSnxUICO8Qr95c6g', {}).addTo(map);

    var datas=<?php print_r(json_encode( $bencanas)."\n"); ?>
    datas=datas.map(c=>{
        return {"loc":[c['latitude'],c['longitude']],"title":c["judul_bencana"],"desc":c["deskripsi_bencana"],"time":c["tanggal_kejadian"],"type":c["jenis_bencana"],"jb_icon":c["icon"],"jb_color":c["color"]}
    })
    datas.forEach(c=>{
        var icon = L.divIcon({
            className: 'custom-div-icon',
            html: '<div class="nk-tnx-type-icon bg-'+c["jb_color"]+'-dim text-'+c["jb_color"]+' custom-div-icon"><em class="icon wi '+c["jb_icon"]+'"></em></div>',
            iconSize: [30, 42],
            iconAnchor: [15, 42]
        });
        L.marker(c["loc"],{ icon: icon }).addTo(map).bindPopup('<b>'+c['title']+'</b><br />Jenis Bencana: '+c["type"]+' <em class="icon wi '+c["jb_icon"]+' text-'+c["jb_color"]+'"></em>'+'</br>Tanggal kejadian: <i>'+c["time"]+"</i>")
    })
</script>