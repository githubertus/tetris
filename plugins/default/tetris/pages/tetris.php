<div id="tetris-body">		
		
	<div id="sound"></div>

	<div id="help">
		<h2>Help</h2>
		<table align="center" border="0" cellPadding="2" cellSpacing="0">
			<tbody>
				<tr><td>Arrow Left / Arrow Right : </td><td>Move Left / Move Right</td></tr>
				<tr><td>Arrow Down : </td><td>Move Down</td></tr>
				<tr><td>Arrow Up, CTRL, Space, S : </td><td>Rotate Right</td></tr>
				<tr><td>Q, A : </td><td>Rotate Left</td></tr>
				<tr><td colspan="2">&nbsp;</td></tr>
				<tr><td>ESCAPE, ENTER, P : </td><td>PAUSE</td></tr>
				<tr><td>DELETE, BACKSPACE : </td><td>SHOW / HIDE NEXT PIECE</td></tr>
			</tbody>
		</table>
	</div>
	
	<div id="home">
		<h1>Tetris</h1>
		<h2>Lucio PANEPINTO</h2>
		<h3>2014</h3>
		<span class="start invisible">- Click to start -</span>
		<div id="scores">
			<h2>High scores</h2>
			<table align="center" border="0" cellPadding="2" cellSpacing="0">
				<thead>
					<tr><th>Rank</th><th>Score</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name</th></tr>
				</thead>
				<tbody>
					<tr><td id="position1">1</td><td id="score1">0</td><td id="name1">-------</td></tr>
					<tr><td id="position2">2</td><td id="score2">0</td><td id="name2">-------</td></tr>
					<tr><td id="position3">3</td><td id="score3">0</td><td id="name3">-------</td></tr>
					<tr><td id="position4">4</td><td id="score4">0</td><td id="name4">-------</td></tr>
				</tbody>
			</table>
		</div>
		<div>
			<a class="sound" href="javascript:void(0);" data-sound="on"><img src="components/Tetris/vendor/img/sound-on.png" alt="" border="0"></a>
			<div class="help-button">- help -</div>
		</div>
	</div>
	
	<div id="panel">
		<h1>Tetris</h1>
		<div id="board"></div>
		<div id="level">
			<h2>Level</h2>
			<span></span>
		</div>
		<div id="lines">
			<h2>Lines</h2>
			<span></span>
		</div>
		<div id="score">
			<h2>Score</h2>
			<span></span>
		</div>
		<div id="next">
			<h2>Next</h2>
			<span>
				<div id="board-next"></div>
			</span>
		</div>
		<div>
			<a class="sound" href="javascript:void(0);" data-sound="on"><img src="components/Tetris/vendor/img/sound-on.png" alt="" border="0"></a>
			<div class="help-button">- help -</div>
		</div>
	</div>
	
	<div id="control">
		<div class="move-left"></div>
		<div class="move-right"></div>
		<div class="move-down"></div>
		<div class="rotate"></div>
		<div class="pause"></div>
		<div class="view-next not"></div>
	</div>
	
</div>
