<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>#Spielsklave - Tom programmiert dein Spiel!</title>
    <style type="text/css">
    	body {
    		text-align: center;
    	}

	    iframe {
	    	position: absolute;
    		left: calc(50% - 360px);
    		background-color: #aaa;
	    }

	    #title {
	    	height: 100px;
	    }

      #controlls {
        position: absolute;
        font-size: 30px;
        font-family: Arial;
        color: #333;
        text-align: left;
        top: 530px;
        left: 30%;
      }
    </style>
  </head>
  <body>
  	<div id="head">
  		<img id="title" src="img/spielsklave_logo.png"/>
  	</div>
  	<iframe src="game" frameBorder="0" width="710" height="400"></iframe>
  	<div id="controlls">
  		Steuerung:<br>
  		Pfeiltasten: Bewegen<br>
      C: Zweispielermodus Aktivieren/Deaktivieren<br>
      V: Einspieler - Wechsel zwischen Charakteren<br>
      Maus: Zweiter Spieler Steuerung Schwein
  	</div>
  </body>
</html>