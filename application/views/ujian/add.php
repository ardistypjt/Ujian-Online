<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$subjudul?></h3>
        <div class="box-tools pull-right">
            <a href="<?=base_url()?>ujian/master" class="btn btn-sm btn-flat btn-warning">
                <i class="fa fa-arrow-left"></i> Batal
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="alert bg-purple">
                    <h4>Subjek <i class="fa fa-book pull-right"></i></h4>
                    <p><?=$matkul->nama_matkul?></p>
                </div>
                <div class="alert bg-purple">
                    <h4>Penilai <i class="fa fa-address-book-o pull-right"></i></h4>
                    <p><?=$dosen->nama_dosen?></p>
                </div>
                <div class="alert bg-purple">
                    <h4>NOTE!!<i class="fa fa-address-book-o pull-right"></i></h4>
                    <p>Apabila penilai memilih untuk mengacak soal, maka penilai diminta untuk mengisi bilangan prima!
                </div>
            </div>
            <div class="col-sm-4">
                <?=form_open('ujian/save', array('id'=>'formujian'), array('method'=>'add','dosen_id'=>$dosen->id_dosen, 'matkul_id'=>$matkul->matkul_id))?>
                <div class="form-group">
                    <label for="nama_ujian">Nama Ujian</label>
                    <input autofocus="autofocus" onfocus="this.select()" placeholder="Nama Ujian" type="text" class="form-control" name="nama_ujian">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jumlah_soal">Jumlah Soal</label>
                    <input placeholder="Jumlah Soal" type="number" class="form-control" name="jumlah_soal">
                    <small class="help-block"></small>
                </div>
                 <div class="form-group">
                    <label for="jumlah_soal">Total Soal</label>
                    <input placeholder="Total Soal" type="number" class="form-control" name="total_soal">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jumlah_soal">Jumlah Peserta</label>
                    <input placeholder="Jumlah Peserta" type="number" class="form-control" name="jumlah_peserta">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input name="tgl_mulai" type="text" class="datetimepicker form-control" placeholder="Tanggal Mulai">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input name="tgl_selesai" type="text" class="datetimepicker form-control" placeholder="Tanggal Selesai">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input placeholder="menit" type="number" class="form-control" name="waktu">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Soal</label>
                    <select name="jenis" class="form-control">
                        <option value="" disabled selected>--- Pilih ---</option>
                        <option value="acak">Acak Soal</option>
                        <option value="urut">Urut Soal</option>
                    </select>
                    <small class="help-block"></small>
                </div>
                 <div class="form-group">
                    <label for="jumlah_soal">Bilangan Prima</label>
                    <input placeholder="2,3,5,7,11,13,17,19,23,29,31,37,41,43,47" type="number" class="form-control" name="bil_prima">
                    <small class="help-block"></small>
                </div>
                <div class="form-group pull-right">
                    <button type="reset" class="btn btn-default btn-flat">
                        <i class="fa fa-rotate-left"></i> Reset
                    </button>
                    <button id="submit" type="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/add.js"></script>