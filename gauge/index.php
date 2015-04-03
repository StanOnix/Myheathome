


<div class="row">
  <div class="col-md-6">
<div id="example" class="gauge">

  <ul class="horiz-list" id="type-select">
  	<li class="active" type="gauge"><canvas width=100 height=50 id="select-1"></canvas></li>
  	<li type="donut"><canvas width=80 height=40 id="select-2"></canvas></li>
  </ul>	
  <div id="preview">
    
  	<canvas width=220 height=70 id="canvas-preview"></canvas>
  	<div id="preview-textfield"></div>
    <p style="color:black;font-weight:bold;text-align:right;position:absolute;right:60px;top:40px;">°C</p>
    
  </div>
</div>
</div>
</div>
  <div class="row">
    <div class="col-md-3">
      
          <form id="opts" class="opts">
            <div class="jumbotron" style="background-color:#8FC0DA;width:220px;height:100px;padding-left:40px;margin-top:0px;">
              <h4 style="font-family:'Sigmar One';text-align:right;">Température</h4>
            <input style="margin-top:0px;"type="text" name="currval" min="0" max="40" step="1" value="32"><br>
            </div>
            <div hidden>
            <label>Anim speed:</label><input type="text" name="animationSpeed" min="1" max="40" step="1" value="32"><br><br>
            <label>Angle:</label><input id="input-angle" type="text" name="angle" min="0" max="50" step="1" value="0"><br>
            <label>Line width:</label><input id="input-line-width" type="text" name="lineWidth" min="0" max="70" value="30"><br>
            <label>Ptr length:</label><input id="input-ptr-len" type="text" name="pointer.length" min="0" max="100" value="90"><br>
            <label>Ptr color:</label><input id="input-ptr-color" type="text" class="color" name="pointer.color" value="000000"><br>
            <label>Ptr stroke:</label><input id="input-ptr-stroke" type="text" name="pointer.strokeWidth" min="0" max="300" value="35"><br>
            <label>Font size:</label><input id="input-font-size" type="text" name="fontSize" min="0" max="100" value="41"><br>
            <label>Color start:</label><input type="text" name="colorStart" class="color" value="6FADCF"><br>
            <label>Color stop:</label><input type="text" name="colorStop" class="color" value="8FC0DA"><br>
            <label>Background:</label><input type="text" name="strokeColor" class="color" value="E0E0E0"><br>
            </div>
        </form>
      
   </div>
</div>

  <br clear="left">

</div>

<div hidden>
<pre class="prettyprint hidden">
var opts = {
  lines: <span id="opt-lines" class="lit">12</span>, // The number of lines to draw
  angle: <span id="opt-angle" class="lit">7</span>, // The length of each line
  lineWidth: <span id="opt-lineWidth" class="lit">5</span>, // The line thickness
  pointer: {
    length: <span id="opt-pointer-length" class="lit">10</span>, // The radius of the inner circle
    strokeWidth: <span id="opt-pointer-strokeWidth" class="lit">0</span>, // The rotation offset
    color: '<span id="opt-pointer-color" class="lit">#000000</span>' // Fill color
  },
  limitMax: '<span id="opt-limitMax" class="lit">false</span>',   // If true, the pointer will not go past the end of the gauge
  colorStart: '<span id="opt-colorStart" class="lit">0</span>',   // Colors
  colorStop: '<span id="opt-colorStop" class="lit">0</span>',    // just experiment with them
  strokeColor: '<span id="opt-strokeColor" class="lit">0</span>',   // to see which ones work best for you
  generateGradient: true
};
var target = document.getElementById('foo'); // your canvas element
var gauge = new <span id="class-code-name" class="typ">Gauge</span>(target).setOptions(opts); // create sexy gauge!
gauge.maxValue = <span id="opt-maxval" class="lit">3000</span>; // set max gauge value
gauge.animationSpeed = <span id="opt-animationSpeed" class="lit">32</span>; // set animation speed (32 is default value)
gauge.set(<span id="opt-currval" class="lit">1500</span>); // set actual value
</pre>

<pre class="prettyprint">
percentColors = [[0.0, "#a9d70b" ], [0.50, "#f9c802"], [1.0, "#ff0000"]];
</pre>
    

<pre class="prettyprint">
$.fn.gauge = function(opts) {
  this.each(function() {
    var $this = $(this),
        data = $this.data();

    if (data.gauge) {
      data.gauge.stop();
      delete data.gauge;
    }
    if (opts !== false) {
      data.gauge = new Gauge(this).setOptions(opts);
    }
  });
  return this;
};
</pre>
</div>


