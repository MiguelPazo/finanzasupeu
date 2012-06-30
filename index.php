<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Presentación del Proyecto - Gestión del Conocimiento</title>
    
    <meta name="description" content="impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com." />
    <meta name="author" content="Bartek Szopka" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="css/impress-demo.css" rel="stylesheet" />
    
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
</head>

<body class="impress-not-supported">

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<div id="impress">

    <div class="title step" data-x="-500" data-y="0" data-scale="5">
        <span class="try">SBC en el</span>
        <h1>Área de Finanzas</h1>
        <span class="footnote">para agilizar el aprendizaje en el personal nuevo y rotativo</span>
    </div>
    
    <div class="step title" data-x="700" data-y="-4000" data-z="-20000" data-rotate="90" data-scale="3">
        <h1>Problema</h1>
        <p>Demora en el aprendizaje dentro del personal nuevo y rotativo en el área de Finanzas de la Universidad Peruana Unión.</p>
    </div>
    
    <div class="step title" data-x="500" data-y="4000" data-rotate="90" data-scale="3">
        <h1>Solución</h1>
        <p>Implementación de un Sistema Basado en Conocimiento (SBC).</p>
    </div>
    
    <div class="step title centerPosition" data-x="100" data-y="5000" data-z="-20000" data-rotate="0" data-scale="1">
        <h1>¿Por qué?</h1>
        <img src="http://fviso.blogspot.es/img/duda.gif" />
    </div>

    <div id="its" class="step centerPosition" data-x="3500" data-y="2100" data-rotate="90" data-scale="2">
        <p>"...las alianzas trajeron consigo mayor especialización adquiriendo <b>know how</b> y transfiriendo el conocimiento de otras compañías para ser más competitivo..."</p>
        <img src="images/nokia.png" />
        
    </div>
    
    <div id="" class="step centerPosition" data-x="5825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
        <p>¿Qué es <strong>know-how</strong>?</p>
        <img src="images/knowHow.png" />
        <p><span class="footnote" style="font-size: 30px; text-align: right">Garud, 1997</span></p>
    </div>
    
    <div id="ing" class="step" data-x="4000" data-y="-150" data-rotate="270" data-scale="1">
        <p>¿Cómo generar <b class="rotating">Conocimiento?</b></p>
        <img src="images/generarKnowledge.png" style="border: none" />
    </div>

    <div id="imagination" class="step" data-x="8700" data-y="-3000" data-scale="6">
        <p><b class="imagination">Conocimiento</b> como proceso <span style="font-size: 20px">(Szulanski, 1996)</span></p>
        <img src="images/circle.png" />
    </div>

    <div id="" class="step title" data-x="11300" data-y="2000" data-rotate="20" data-scale="2">
        <p>Conocimiento = <b>Ventaja Competitiva</b></p>
    </div>

    <div id="" class="step" data-x="6000" data-y="4000" data-scale="1">
        <p>Genera un <b>Valor Agregado</b></p>
    </div>
    
    <div id="its-in-3d" class="step" data-x="6200" data-y="5300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">
        <p><span class="have">observemos </span> <span class="you">un</span> <span class="noticed">caso</span> <span class="its">práctico</span> <span class="in">usando</span> <b>Bizagi, <sup>google groups</sup></b> y <b>dropbox... ;)</b></p>
    </div>
    
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>

</div>
    
<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>
<script src="js/impress.js"></script>
<script>impress().init();</script>
</body>
</html>