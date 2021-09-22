    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4">Login Mitra</h1>
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>
                                    <br>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="no_handphone" 
                                                placeholder="Masukkan Nomor Handphone">
                                        </div>
                                        <div class="form-group">

                                            <input type="password" class="form-control form-control-user"
                                                id="pass" placeholder="Password">
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                    </form>

                                    <div class="text-center">
                                    	
                                        <a class="small" href="<?= base_url ('');?>">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                    	<span class="small">Belum memiliki akun</span>
                                        <a class="small" href="<?= base_url ('auth/register');?>">Daftar Disini!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    