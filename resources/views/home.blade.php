
@extends('layout.master')

@section('title','Home')


 <style type="text/css">

#text {
	display: inline-block;
	vertical-align: middle;
	color: rgb(242,242,247);
	
}

#cursor {
	display: inline-block;
	vertical-align: middle;
	width: 3px;
	height: 50px;
	background-color: rgb(242,242,247);
	animation: blink .75s step-end infinite;
}

@keyframes blink {
	from, to { 
		background-color: transparent 
	}
	50% { 
		background-color: rgb(242,242,247); 
	}
}

    </style>
@section('bg-body', 'bg-dark')
@section('content') 
<div  style="padding: 3%;">
    <div class="row g-3" style="position:static;">
        <div class="col-md-6">
            <h2 style="color: #f2f2f7" style="position:static;"><div id="text"></div><div id="cursor"></div></h2>
            <h3 style="color: #f2f2f7">The First Indonesian Web and App Template Provider based from Framework</h3>
            <a href="/templates"><button type="button" style="border-corner:50%" class="btn btn-primary start">Let's Explore...</button></a>
        </div>
        <script type="text/javascript">
            // List of sentences
var _CONTENT = [ 
	"Uklise","Good Night Developers","Gutten Nacht Entwickler","Bonne Nuit Développeurs","Доброй Hочи Pазработчики","Selamat Malam Para Pengembang", "Sugeng Dalu Para Pengembang", "Wilujeng Wengi Pamekar"
];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element 
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() { 
	// Get substring with 1 characater added
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	// If full sentence has been displayed then start to delete the sentence after some time
	if(text === _CONTENT[_PART]) {
		// Hide the cursor
		_CURSOR.style.display = 'none';

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 1000);
	}
}

// Implements deleting effect
function Delete() {
	// Get substring with 1 characater deleted
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	// If sentence has been deleted then start to display the next sentence
	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		// If current sentence was last then display the first one, else move to the next
		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;
		
		_PART_INDEX = 0;

		// Start to display the next sentence after some time
		setTimeout(function() {
			_CURSOR.style.display = 'inline-block';
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);
        </script>
        <div class="col-md-6" style="text-align: center;">
           
        </div>
    </div>
    <br><br>
    
</div>
</div>

    
    <div class="card">
        <div class="card-body">
            <div class="container">
          
                <div style="padding-top: 6%; padding-left: 3% padding-right: 3%">
                    <div class="col-md" style="text-align: center;"><h3>In Here We Provide...</h3></div><br>
            <div class="row g-3" style="align-self: center">
                
                <div class="col-md-6" style="align-self: center">
                    <div class="card" style="height: 500px">
                    <div class="col-md" style="padding: 3%">
                        <div class="col-md" style="text-align: center;"><img src="/assets/picture/flutter.svg" alt="" width="47.5%" height="47.5%"></div><br>
                        <div class="col-md"><h5 style="text-align: center;">Flutter</h5></div>
                        <div class="col-md"><p  style="text-align: center;">A framework that can create iOS, Android, Windows, macOS, Linux, and even Web applications.</p></div>
                        <div class="col-md" style="text-align: center;"><a href="/app" ><button type="button" class="btn btn-primary" style="width: 160px; height: 50px;">Get app start</button></a></div>
                    </div>
                </div>
                </div>
                
                <div class="col-md-6" style="align-self: center">
                    <div class="card" style="height: 500px">
                    <div class="col-md" style="padding: 3%">
                        <div class="col-md" style="text-align: center;"><img src="/assets/picture/laravel.png" alt="" width="50%" height="50%" ></div><br>
                        <div class="col-md"><h5 style="text-align: center;">Laravel</h5></div>
                        <div class="col-md"><p style="text-align: center;">A Framework provides all tools you need for your web programming experience without make from zero anymore.</p></div>
                        <div class="col-md" style="text-align: center;"><a href="/web"><button type="button" class="btn btn-primary" style="width: 160px; height: 50px;">Get web start</button></a></div>
                    </div>
                </div>
                </div>
            </div>
            <br><br>
            <div class="col-md" style="text-align: center;"><h3>Advantages of using templates</h3></div><br>
            <div class="row g-3" style="text-align: center;">
                <div class="col-md-6" style="text-align: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <div class="rt-container">
                            <div class="radialProgressBar progress-60">
                              <div class="overlay">60%</div>
                            </div>
                        </div><br><br>
                        <h4>Time efficient for develop</h4>
                    </div>
                </div>
        
                <div class="col-md-6" style="text-align: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <div class="rt-container">
                            <div class="radialProgressBar progress-70">
                              <div class="overlay">70%</div>
                            </div>
                        </div><br><br>
                        <h4>Faster to develop instead create from blank pages</h4>
                    </div>
                </div>
            </div><br>
            <div class="row g-3" style="text-align: center;">
                <div class="col-md-6" style="text-align: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <div class="rt-container">
                            <div class="radialProgressBar progress-90">
                              <div class="overlay">90%</div>
                            </div>
                        </div><br><br>
                        <h4>Developers Satisfying</h4>
                    </div>
                </div>
        
                <div class="col-md-6" style="text-align: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <div class="rt-container">
                            <div class="radialProgressBar progress-100">
                              <div class="overlay">100%</div>
                            </div>
                        </div><br><br>
                        <h4>Reusable</h4>
                    </div>
                </div>
            </div><br><br>
            <div class="col-md" style="text-align: center;"><h3>What developers said ??</h3></div><br>
        
            <div class="row g-3" style="text-align: center;">
                <div class="col-md-6" style="align-self: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <h4>It's clearly easy to learn and modify again and again and again - Anonym</h4>
                    </div>
                </div>
        
                <div class="col-md-6" style="align-self: center">
                    <div class="card" style="height: auto; padding:2%;">
                        <h4>It's more faster and efficient for time making than I made it from scratch - Anonym</h4>
                    </div>
                </div>
            </div>
          </div>
                </div>
              </div>
            <div class="row g-3" style="padding: 5%">
                <div class="col-md-6" style="text-align: center">
                    <img src="/assets/picture/phoneMockUp.png" alt="Phone MockUp" srcset="">
                </div>
                <div class="col-md-6" style="position: relative">
                    <h3>So, when it comes up into app?</h3>
                    <h4>Soon, our platform are available in Mobile and Desktop 
                        which is our app will compatible at all platform. 
                    Like iOS, Android, macOS, Chrome OS, Windows, and Linux. <a href="#">App Platform is Coming Soon.</a></h4>
                </div>
            </div>
           
      
        </div>
      </div>

      
    


@stop


