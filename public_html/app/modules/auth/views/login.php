<style>
    /* Made with love by Mutiullah Samim*/

    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
        background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container{
        height: 100%;
        align-content: center;
    }

    .card{
        height: 400px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0,0,0,0.5) !important;
    }

    .card-header h3{
        color: white;
    }

    .social_icon{
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span{
        width: 50px;
        background-color: #FFC312;
        color: black;
        border:0 !important;
    }

    input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember{
        color: white;
    }

    .remember input
    {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn{
        color: black;
        background-color: #FFC312;
        width: 100px;
    }

    .login_btn:hover{
        color: black;
        background-color: white;
    }

    .links{
        color: white;
    }

    .links a{
        margin-left: 4px;
    }
</style>
<?= $this->load->view('includes/top') ?>

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3><?= lang('login_heading'); ?></h3>
                <div class="d-flex justify-content-center links"><?= lang('login_subheading'); ?></div>
            </div>
            <div class="card-body">
                <div id="infoMessage"><?= $message; ?></div>
                <form action="/auth/login" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="identity" id="identity" class="form-control" placeholder="<?= lang('login_identity_label') ?>">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="<?= lang('login_password_label') ?>">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox"><?= lang('login_remember_label') ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" style="background-color: #FFC312;" value="<?= lang('login_submit_btn') ?>" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="#">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#"><?= lang('login_forgot_password') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->load->view('includes/tail') ?>











