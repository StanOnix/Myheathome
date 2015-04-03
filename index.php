<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trouvez des solutions et des astuces à vos problèmes de matériel sur MyTricks">
    <meta name="author" content="FAYE Stanislas">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trouvez des solutions et des astuces à vos problèmes de matériel sur MyTricks" />
    <meta property="og:url" content="http://mytricks.com/materiel"/>
    <meta property="og:site_name" content="MyTricks"/>

    <title>MyHomeHeat</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="index.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="ckeditor-ckfinder-integration/uploads/images/favicon (2).ico"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Sigmar+One" />
    <link href="gauge/assets/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="gauge/assets/main.css?v=5" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700|Just+Another+Hand' rel='stylesheet' type='text/css'>
      <link href="gauge/assets/prettify.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="gauge/assets/fd-slider/fd-slider.css?v=2">
      <link rel="stylesheet" type="text/css" href="gauge/assets/fd-slider/fd-slider-tooltip.css">
      <script type="text/javascript" src="gauge/assets/prettify.js"></script>
      <script type="text/javascript" src="gauge/assets/jscolor.js"></script>
      <script type="text/javascript" src="gauge/assets/fd-slider/fd-slider.js"></script>
        <script src="gauge/dist/gauge.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  
    
    
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Connexion <span class="caret"></span></a>
          <ul class="dropdown-menu">
                           
       <div class="col-md-12"> 
    


     
                       
                               <form method="post">
                                    <label for="inputPseudo" class="sr-only"></label>
                                    <div class="error">Bonjour</div>
                                    <input type="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" style="margin-top:5px;width:195px;" required autofocus>
                                    <label for="inputPassword" class="sr-only"></label>
                                    <?php echo '<div class="error">'.$erreur_motdepasse.'</div>';?>
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" style="margin-top:5px;width:195px;" required>
                                    <br/>
                                    <button class="btn btn-primary btn-circle" type="submit" name="connexion">Connexion</button> <br/> <a href="forgetpass.php" style="font-size:0.7em;"> Mot de passe oublié ? </a> 
                                </form>
                           
                            <br/>
                           </div>
                        </ul> 
          </li>
        <li><a href="inscription">Inscription</a></li>
      </ul>
    </div>
  </div>
</nav>
    
    
      <!--Fin Barre de navigation-->
    <!-- Header de la page -->
        <header>
            <div class="jumbotron" style="background:transparent !important;">
                <div id="share-buttons" class="text-center">
 
                  <div id="share-buttons" class="text-center">
                <?php $page_courante   =  "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_courante; ?>" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(" ").''.$page_courante;?>" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>

                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=<?php echo $page_courante; ?>" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>
 
                </div>
                <a href="../index.php"><p style="font-weight:bold; color:white;font-family:'Sigmar One';font-size:2em;margin-left:80px;margin-right:5px;">MyHomeHeat
                   </p></a>
               
                  
 
                
            </div>
        </header>
    <!-- Fin header de la page -->
    
    <div class="container">
        >
        <?php
        
         include("gauge/index.php");
         include("température/index.php");
       
        ?>
           
    </div>
       <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h6 style="font-weight:bold;">Copyright &copy; 2015</h6>
                </div>
                <div class="col-sm-3">
                    <h6 style="font-weight:bold;">Contacts</h6>
                </div>
                <div class="col-sm-3">
                    <h6 style="font-weight:bold;">Charte</h6>
                </div>
                <div class="col-sm-3">
                    <h6 style="font-weight:bold;">Conditions générales</h6>
                </div>
                
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
  prettyPrint();
  function update() {
    var opts = {};
    $('.opts input[min], .opts .color').each(function() {
      var val = $(this).hasClass("color") ? this.value : parseFloat(this.value);
      if($(this).hasClass("color")){
        val = "#" + val;
      }
      if(this.name.indexOf("lineWidth") != -1 ||
        this.name.indexOf("angle") != -1 ||
        this.name.indexOf("pointer.length") != -1){
        val /= 100;
      }else if(this.name.indexOf("pointer.strokeWidth") != -1){
        val /= 1000;
      }
      $('#opt-' + this.name.replace(".", "-")).text(val);
      if(this.name.indexOf(".") != -1){
        var elems = this.name.split(".");
        var tmp_opts = opts;
        for(var i=0; i<elems.length - 1; i++){
            if(!(elems[i] in tmp_opts)){
                tmp_opts[elems[i]] = {};
            }
            tmp_opts = tmp_opts[elems[i]];
        }
        tmp_opts[elems[elems.length - 1]] = val;
      }else if($(this).hasClass("color")){
        // color picker is removing # from color values
        opts[this.name] = "#" + this.value
        $('#opt-' + this.name.replace(".", "-")).text("#" + this.value);
      }else{
        opts[this.name] = val;
      }
      if(this.name == "currval"){
        // update current demo gauge
        demoGauge.set(parseInt(this.value));
        AnimationUpdater.run();
      }
    });
    $('#opts input:checkbox').each(function() {
      opts[this.name] = this.checked;
      $('#opt-' + this.name).text(this.checked);
    });
    demoGauge.animationSpeed = opts.animationSpeed;
    opts.generateGradient = true;
    demoGauge.setOptions(opts);
    demoGauge.ctx.clearRect(0, 0, demoGauge.ctx.canvas.width, demoGauge.ctx.canvas.height);
    demoGauge.render();
    if ($('#share').is(':checked')) {
      window.location.replace('#?' + $('form').serialize());
    }
  }
  function initGauge(){
    document.getElementById("class-code-name").innerHTML = "Gauge";
    demoGauge = new Gauge(document.getElementById("canvas-preview"));
    demoGauge.setTextField(document.getElementById("preview-textfield"));
    demoGauge.maxValue = 40;
    demoGauge.set(0);
  };
  function initDonut(){
    document.getElementById("class-code-name").innerHTML = "Donut";
    demoGauge = new Donut(document.getElementById("canvas-preview"));
    demoGauge.setTextField(document.getElementById("preview-textfield"));
    demoGauge.maxValue = 40;
    demoGauge.set(0);
  };
  $(function() {
    var params = {};
    var hash = /^#\?(.*)/.exec(location.hash);
    if (hash) {
      $('#share').prop('checked', true);
      $.each(hash[1].split(/&/), function(i, pair) {
        var kv = pair.split(/=/);
        params[kv[0]] = kv[kv.length-1];
      });
    }
    $('.opts input[min], #opts .color').each(function() {
      var val = params[this.name];
      if (val !== undefined) this.value = val;
      this.onchange = update;
    });
    $('.opts input[name=currval]').mouseup(function(){
        AnimationUpdater.run();
    });

    $('.opts input:checkbox').each(function() {
      this.checked = !!params[this.name];
      this.onclick = update;
    });
    $('#share').click(function() {
      window.location.replace(this.checked ? '#?' + $('form').serialize() : '#!');
    });
    
    $("#type-select li").click(function(){
        $("#type-select li").removeClass("active")
        $(this).addClass("active");
        var type = $(this).attr("type");
        if(type=="donut"){
            initDonut();
            $("input[name=lineWidth]").val(30);
            $("input[name=fontSize]").val(24);
            $("input[name=angle]").val(0);

            $("input[name=colorStart]").val("6F6EA0")[0].color.importColor();
            $("input[name=colorStop]").val("C0C0DB")[0].color.importColor();
            $("input[name=strokeColor]").val("EEEEEE")[0].color.importColor();

            fdSlider.disable('input-ptr-len');
            fdSlider.disable('input-ptr-stroke');
        $("#input-ptr-color").prop('disabled', true);

        selectGaguge1.set(1);
        selectGaguge2.set(3000);

        }else{
            initGauge();
            $("input[name=lineWidth]").val(30);
            $("input[name=fontSize]").val(41);
            $("input[name=angle]").val(0);

            $("input[name=colorStart]").val("6FADCF")[0].color.importColor();
            $("input[name=colorStop]").val("8FC0DA")[0].color.importColor();
            $("input[name=strokeColor]").val("E0E0E0")[0].color.importColor();

            fdSlider.enable('input-ptr-len');
            fdSlider.enable('input-ptr-stroke');
        $("#input-ptr-color").prop('disabled', false);
        selectGaguge1.set(3000);
        selectGaguge2.set(1) ;
        }
        fdSlider.updateSlider('input-line-width');
        fdSlider.updateSlider('input-font-size');
        fdSlider.updateSlider('input-angle');
        $("#example").removeClass("donut, gauge").addClass(type);
        update();
    });

    selectGaguge1 = new Gauge(document.getElementById("select-1"));
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(1552);
    
    selectGaguge2 = new Donut(document.getElementById("select-2"));
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);
    
    initGauge();
    update();
    
  });
</script>
  

   
</body>

</html>
