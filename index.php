<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8" />
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Casse Brick Mario</title>
</head>

<body style="background:#333333">
	<div class="NoCursor" id="NoCursor">
		<div style="padding-top:50px;">
			<div class="start" id="FenetreChoix">
				<div class="Fenetre">
					<div class="ChoixDifficulté" id="Difficulte">
						<span>Choisissez votre difficulté :</span>
						<button onclick="ChoisirDifficulte(999)">FACILE</button>
						<button onclick="ChoisirDifficulte(4)">NORMAL</button>
						<button onclick="ChoisirDifficulte(0)">DIFFICILE</button>
					</div>
					<div id="feedback">

					</div>
				</div>
			</div>
			<div id="ctn">
				<div id="babale"></div>
				<div id="cucure"></div>
			</div>
			<div id="point">&nbsp;</div>
		</div>
	</div>
</body>

</html>