    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Pendaftaran Mitra Baru</h1>
                            </div>
                            <br>
                            <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                                <div class="form-group">
                                    <div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                                id="no_handphone" name="no_hp" 
                                                placeholder="Masukkan Nomor Handphone" value="<?= set_value ('no_hp');?>">
                                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                                        placeholder="Nama Lengkap"  value="<?= set_value ('nama');?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="pass1"
                                            id="exampleInputPassword" placeholder="Password" <?= set_value ('pass1');?>">
                                            <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="pass2" 
                                            id="exampleRepeatPassword" placeholder="Ulangi Password">
                                            <?= form_error('pass2', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                </div>
 								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="upline" name="upline"
                                        placeholder="Upline" <?= set_value ('upline');?>">
                                        <?= form_error('upline', '<small class="text-danger pl-3">', '</small>');?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block"> Daftar </button>
                                <hr>
                                
                            </form>            
                            <div class="text-center">
                                <span class="small">Sudah Memiliki Akun?</span>
                                <a class="small" href="<?= base_url ('auth/index');?>">Login Disini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
