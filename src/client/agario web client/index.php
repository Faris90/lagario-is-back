<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AgarFF | Agario pvp server. AgarFF agario pvp serverler aras&#305;nda yerini ald&#305;r. Sende AgarFF'ye kat&#305;l ve yerini al. Agario pvp server.agarff, agarff oyna, oyna, tk, agarff.tk, pvp, agarpvp, agariopvp, agarff pvp, agario, agar, io, cell, cells, virus, bacteria, blob, game, games">
    <meta name="keywords"  content="agarff, agarff oyna, oyna, tk, agarff.tk, pvp, agarpvp, agariopvp, agarff pvp, agario, agar, io, cell, cells, virus, bacteria, blob, game, games, web game, html5, fun, flash">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta property="fb:app_id" content="677505792353827"/>
    <meta property="og:title" content="AgarFF | Agario PVP Server, Agario oyna, agario"/>
    <meta property="og:description" content="AgarFF | Agario pvp server. AgarFF agario pvp serverler aras&#305;nda yerini ald&#305;r. Sende AgarFF'ye kat&#305;l ve yerini al. Agario pvp server.agarff, agarff oyna, oyna, tk, agarff.tk, pvp, agarpvp, agariopvp, agarff pvp, agario, agar, io, cell, cells, virus, bacteria, blob, game, games"/>
    <meta property="og:url" content="http://agarff.tk"/>
    <meta property="og:image" content="http://agar.io/img/1200x630.png"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:type" content="website"/>
    <title>AgarFF | Agario PVP Server, Agario oyna, agario</title>
    <link id="favicon" rel="icon" type="image/png" href="favicon-32x32.png"/>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="Vector2.js"></script><?php
if($_GET['mode']=='ffa2'){
	echo '<script src="main_out_2.js?542"></script>';
}elseif($_GET['mode']=='team'){
	echo '<script src="main_out_team.js?542"></script>';
}elseif($_GET['mode']=='crazy'){
	echo '<script src="main_out_crazy.js?542"></script>';
}elseif($_GET['mode']=='ffa'){
	echo '<script src="main_out.js?542"></script>';
}else{
	echo '<script src="main_out.js?542"></script>';
}
?>
	<script type="text/javascript" src="//go.pub2srv.com/apu.php?zoneid=573229"></script>
    <style>body {
        padding: 0;
        margin: 0;
        overflow: hidden;
    }

    #canvas {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
    }

    .checkbox label {
        margin-right: 10px;
    }

    form {
        margin-bottom: 0px;
    }

    .btn-play, .btn-settings, .btn-spectate {
        display: block;
        height: 35px;
    }

    .btn-play {
        width: 85%;
        float: left;
    }

    .btn-settings {
        width: 13%;
        float: right;
    }

    .btn-spectate {
        display: block;
        float: right;
    }

    #adsBottom {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #adsBottomInner {
        margin: 0px auto;
        width: 728px;
        height: 90px;
        border: 5px solid white;
        border-radius: 5px 5px 0px 0px;
        background-color: #FFFFFF;
        box-sizing: content-box;
    }

    .region-message {
        display: none;
        margin-bottom: 12px;
        margin-left: 6px;
        margin-right: 6px;
        text-align: center;
    }

    #nick, #locationKnown #region {
        width: 65%;
        float: left;
    }

    #locationUnknown #region {
        margin-bottom: 15px;
    }

    #gamemode, #spectateBtn {
        width: 33%;
        float: right;
    }

    #helloDialog {
        width: 350px;
        background-color: #FFFFFF;
        margin: 10px auto;
        border-radius: 15px;
        padding: 5px 15px 5px 15px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    #chat_textbox {
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        position: absolute;
        z-index: 1;
        bottom: 10px;
        background: rgba(0, 0, 0, .2);
        border: 0px;
        outline: none;
        color: #FFF;
        height: 30px;
        text-indent: 12px;
        left: 10px;
        width: 300px;
    }

    #chat_textbox:focus {
        background: rgba(0, 0, 0, .5);
    }

    #a300x250 {
        width: 300px;
        height: 250px;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center center;
    }</style>
</head>
<body>
<div id="fb-root"></div>
<div id="overlays"
     style="display:none; position: absolute; left: 0; right: 0; top: 0; bottom: 0; background-color: rgba(0,0,0,0.5); z-index: 200;">
    <div id="helloDialog">
        <form role="form">
            <div class="form-group">
                <div style="float: left; margin-left: 20px;"><h2>AgarFF | Agario PVP</h2></div>
                <div class="fb-like" style="float: right; margin-top: 30px;"
                     data-href="https://www.facebook.com/playagar.io" data-layout="button" data-action="like"
                     data-show-faces="true" data-share="true"></div>
                <br clear="both"/>
            </div>
            <div class="form-group">
                <input id="nick" class="form-control" placeholder="İsim" maxlength="15"/>
                <br clear="both"/>
				<center>
<a href="index.php?mode=ffa"><b>FFA</b></a>   |
<a href="index.php?mode=ffa2"><b>FFA2</b></a>  |
<a href="index.php?mode=crazy"><b>Çılgın</b></a>  |
<a href="index.php?mode=team"><b>Team</b></a>  

</center>
            </div>
            <div id="locationUnknown">
                <select id="region" class="form-control" onchange="setRegion($('#region').val());" required>
                    <option selected disabled value=""> -- Ülke --</option>
                    <option value="TK-Turkey">Turkey</option>
                </select>
            </div>
            <div>
                <div class="text-muted region-message CN-China">

                </div>
            </div>
            <div class="form-group">
                <div>

                    <a href="uploads.html" class="btn-primary btn btn-info" role="button">Skin Yükle</a>
                    <a href="gallery" class="btn-primary btn btn-info" role="button">Skin Galerisi</a>
                    <p></p>
                </div>

                <button disabled type="submit" id="playBtn"
                        onclick="setNick(document.getElementById('nick').value); return false;"
                        class="btn btn-play btn-primary btn-needs-server">Oyuna Giriş
                </button>
                <button onclick="$('#settings, #instructions').toggle();return false;"
                        class="btn btn-info btn-settings"><i class="glyphicon glyphicon-cog"></i></button>
                <br clear="both"/>
            </div>
            <div id="settings" class="checkbox" style="display:none;">
                <div class="form-group" id="mainform">
                    <div id="locationKnown"></div>
                    <button id="spectateBtn" onclick="spectate(); return false;" disabled
                            class="btn btn-warning btn-spectate btn-needs-server">İzleyici Modu
                    </button>
                    <br clear="both"/>
                </div>
                <div style="margin: 6px;">
                    <label><input type="checkbox" onchange="setSkins(!$(this).is(':checked'));"> Skinleri Gizle</label>
                    <label><input type="checkbox" onchange="setNames(!$(this).is(':checked'));"> İsimleri Gizle</label>
                    <label><input type="checkbox" onchange="setDarkTheme($(this).is(':checked'));"> Karanlık Tema</label>
                    <label><input type="checkbox" onchange="setColors($(this).is(':checked'));"> Renkleri Kapat</label>
                    <label><input type="checkbox" onchange="setShowMass($(this).is(':checked'));"> Yemleri Göster</label>
                    <label><input type="checkbox" onchange="setHideChat($(this).is(':checked'));"> Chat Gizle</label>
                    <label><input type="checkbox" onchange="setSmooth($(this).is(':checked'));"> Basit Diken</label>
                </div>
            </div>
        </form>
        <div id="instructions">
            <hr/>
            <center><span class="text-muted">
			Dikenler 300Puan<br>
			Yemleri yiyerek büyüyebilir ve 1. olabilirsin. <br>
			W tuşu ile arkadaşını besleyebilir ya da dikenlere w atarak başkalarını patlatabilirsin.<br>
			</span></center>
<script src="//go.padstm.com/?id=573252"></script>
        </div>
        <hr/>
        <center>

            <center>
		<span class="text-muted">
		</span>
            </center>
            <small class="text-muted text-center"></small>
        </center>
        <hr style="margin-bottom: 7px; "/>
        <div style="margin-bottom: 5px; line-height: 32px; margin-left: 6px; height: 32px;">
            <center>
                <a href="#" class="text-muted">Kullanım Koşulları</a>
                |
				<a href="http://agarff.tk">AgarFF</a>
| <a href="http://www.agario.emekserverler.com" title="www.agario.emekserverler.com">www.agario.emekserverler.com</a>
            </center>
        </div>

    </div>
</div>
<div id="connecting"
     style="display:none;position: absolute; left: 0; right: 0; top: 0; bottom: 0; z-index: 100; background-color: rgba(0,0,0,0.5);">
    <div style="width: 350px; background-color: #FFFFFF; margin: 100px auto; border-radius: 15px; padding: 5px 15px 5px 15px;">
        <h2>Bağlantı Hatası!</h2>

        <p>Şuan Sunucu kaynaklı bir bağlantı hatası yaşanıyor sayfayı yenileyin yada başka mod seçin.
    </div>
</div>
<canvas id="canvas" width="800" height="600"></canvas>
<input type="text" id="chat_textbox" maxlength="200" placeholder="Press Enter to chat!"/>

<div style="font-family:'Ubuntu'">&nbsp;</div>


</body>

<script type="text/javascript">
    $('input').keypress(function(e) {
        if (e.which == '13') {
            e.preventDefault();
            if (!isSpectating) setNick(document.getElementById('nick').value);
        }
    });
</script>
<script src="minimap.js"></script>

</html>
		