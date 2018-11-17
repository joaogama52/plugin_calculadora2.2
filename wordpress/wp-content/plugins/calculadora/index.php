<!DOCTYPE html>
<html>
    <head>
        <title>javascript calculator</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="calcula.js"></script>
    </head>
    <body>
	    <div id="background">
    
	        <div id="result"></div>

	         <div id="main">
	             <div id="first-rows">
	              <button class="del-bg" id="delete">Del</button>
	                 <button value="%" class="btn-style operator opera-bg fall-back">%</button>
	                 <button value="+" class="btn-style opera-bg value align operator">+</button>
	                 </div>

	               <div class="rows">
	             <button value="7" class="btn-style num-bg num first-child">7</button>
	                 <button value="8" class="btn-style num-bg num">8</button>
	                 <button value="9" class="btn-style num-bg num">9</button>
	                 <button value="-" class="btn-style opera-bg operator">-</button>
	                 </div>
	                 <div class="rows">
	                 <button value="4" class="btn-style num-bg num first-child">4</button>
	                 <button value="5" class="btn-style num-bg num">5</button>
	                 <button value="6" class="btn-style num-bg num">6</button>
	                 <button value="*" class="btn-style opera-bg operator">x</button>
	                 </div>

	                 <div class="rows">
	                 <button value="1" class="btn-style num-bg num first-child">1</button>
	                 <button value="2" class="btn-style num-bg num">2</button>
	                 <button value="3" class="btn-style num-bg num">3</button>
	                 <button value="/" class="btn-style opera-bg operator">/</button>
	                 </div>

	                 <div class="rows">
	                 <button value="0" class="num-bg zero" id="delete">0</button>
	                 <button value="." class="btn-style num-bg period fall-back">.</button>
	                 <button value="=" id="eqn-bg" class="eqn align">=</button>
	                 </div>

	             </div>
	             
	         </div>

</body>


</html>
