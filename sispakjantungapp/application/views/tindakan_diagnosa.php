<?php require('header_pakar.php'); ?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Tindakan Diagnosa</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Rule / Keputusan</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Diagnosa</th>
                    <th>Nama Tindakan</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                 <?php 
                $i = 1;
                foreach ($records as $r) { 
                echo '<tr>';
                echo '    <td>'.$r->id_diagnosa_tindakan.'</td>';
                echo '    <td class="center">'.$r->nama_diagnosa.'</td>';
                echo '    <td class="center">'.$r->nama_tindakan.'</td>';
                echo '    <td class="center">';
                echo '        <a class="btn btn-info btn-setting" href="'.site_url('pakar/edittindakandiagnosa/').$r->id_diagnosa_tindakan.'">';
                echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '        <a class="btn btn-danger" href="'.site_url('pakar/deltindakandiagnosa/').$r->id_diagnosa_tindakan.'">';
                echo '            <i class="glyphicon glyphicon-trash icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '    </td>';
                echo '</tr>';
            }
            ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Tindakan Diagnosa</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('pakar/addtindakandiagnosa'); ?>" method="POST">
                    <input type="hidden" placeholder="Enter email" name="id" value="">
                     <div class="form-group">
                        <label>Diagnosa</label>
                        <!--
                        <input type="text" class="form-control" placeholder="Nama Jenis Faktor Resiko Gejala">
                        -->
                          <select class="form-control" id="sel1" name="diagnosa">
                            <option>-----Pilih------</option>
                            <?php 
                                foreach($records2 as $r){
                                    echo '<option value="'.$r->id_diagnosa.'">'.$r->id_diagnosa."-  ".$r->nama_diagnosa.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label>Tindakan</label>
                        <!--
                        <input type="text" class="form-control" placeholder="Nama Jenis Faktor Resiko Gejala">
                        -->
                          <select class="form-control" id="sel1" name="tindakan">
                             <option>-----Pilih------</option>
                            <?php 
                                foreach($records3 as $r){
                                    echo '<option value="'.$r->id_tindakan.'">'.$r->id_tindakan."-  ".$r->nama_tindakan.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content ends -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>View All</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
<?php require('footer.php'); ?>