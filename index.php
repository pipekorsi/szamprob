<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>szamprob</title>
<link rel="stylesheet" href="../base.css" />
<script type="text/javascript" src="https://stackedit.io/libs/MathJax/MathJax.js?config=TeX-AMS_HTML"></script>

<style> 
.mytwocol {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
}
</style>

</head>

<body>
<div class="container"><h1 id="számítógépes-problémamegoldás-fizika-tanár-bsc">Számítógépes problémamegoldás - Fizika tanár BSc</h1>
<hr>

<table>
<tbody>

<td style="border: 0px solid #ffffff ">
<h2 id="tematika">Tematika</h2>
<blockquote>
<ul>
<li>Notebook, REPL, Python nyelv, Markdown, pylab</li>
<li>Adatok ki-be olvasása, feldolgozása és ábrázolása</li>
<li>Matplotlib, ábrázolásról egy kicsit bővebben</li>
<li>Függvény illesztés</li>
<li>Integrálás</li>
<li>Szimbolikus számítások a SymPy csomag segítségével</li>
<li>Lineáris egyenletrendszerek</li>
<li>Differenciál egyenletrendszerek</li>
<li>Interaktív widget-ek </li>
</ul>
</blockquote>
<br>
</td>

<td style="border: 0px solid #ffffff ">
<h2 id="linkek">Hasznos linkek </h3>
<?php include 'vars.php'; echo "<a href=$bevezeto_foliak>Bevezető fóliák</a><br>"; ?>
<?php include 'vars.php'; echo "<a href=$hub_link_fix>Jupyterhub@ELTE</a><br>"; ?>
<a href="https://cloud.sagemath.com/">Sage Math Cloud</a> / <a href="http://tmpnb.org/">Tmpnb</a> <br>
<a href="https://jupyter.org/">Jupyter</a> / <a href="http://ipython.org/">IPython</a> <br>
<a href="http://www.scipy.org/">Scipy</a> / <a href="http://matplotlib.org/">Matplotlib</a>  <br>
<a href="http://python.hu/">Magyar python oldalak </a><br>
<a href="http://pythontutorial.pergamen.hu/downloads/html/tut/tut.html"> Magyar python dokumentáció </a><br>
<a href="http://nyelvek.inf.elte.hu/leirasok/Python/index.php">ELTE python dokumentáció </a><br>
<a href="https://perso.limsi.fr/pointal/_media/python:cours:mementopython3-english.pdf">Python 3 Cheat Sheat</a><br>
<a href="http://www.ntg.nl/doc/nemeth/lrovid.pdf">Latex-ről magyarul</a><br>
<a href="./old_2015">Régi honlap</a>
</td>
<td style="border: 0px solid #ffffff ">
<h2 id="linkek"  style="text-align: right"><a href="hf_montage">HF montázs</a></h3>
<img src="hf_montage/ifelifelse.png" width=300></img>
</td>

</tbody>
</table>
<hr><div class="se-section-delimiter"></div>

<h2 id="aktualis">Aktuális információk </h2>
<?php include 'vars.php'; echo "<a href=$kurzus_adatok>Kurzus adatok</a><br>"; ?>
<?php include 'vars.php'; echo "<a href=$kiseloadas>Kiselőadás vállalások</a><br>"; ?>

<hr><div class="se-section-delimiter"></div>

<h2 id="notebooks">Notebookok</h2>
<p>Az alábbi táblázat tartalmazza statikus(.html) és notebook (.ipynb) formátumban az órai és a házi feladat IPython notebook-okat. Továbbá néhány rövid összefoglaló puskát is a melyek alapvető feladatok megoldásában nyújthatnak némi segítséget. A feladatok közt szereplő ☠-el jelölt feladatok vagy alfeladatok nem kötelezőek viszont megoldásuk pozitívan befolyásolják a félév végén megszerzett érdemjegyet.</p>
<div align="center">

<table>
<tbody>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Mintapéldák </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package00/mintapelda00.html'>Mintapelda-00</a><br> 
                                                          <a href='notebooks/Package00/mintapelda00.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package01/mintapelda01.html'>Mintapelda-01</a><br> 
                                                          <a href='notebooks/Package01/mintapelda01.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/mintapelda02.html'>Mintapelda-02</a><br>  
                                                          <a href='notebooks/Package02/mintapelda02.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/mintapelda03.html'>Mintapelda-03</a><br>  
                                                          <a href='notebooks/Package03/mintapelda03.ipynb' download>(forrás)</a></td>

    
</tr>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Feladatok </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package00/feladat00.html'>Feladat-00</a><br>  
                                                          <a href='notebooks/Package00/feladat00.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package01/feladat01.html'>Feladat-01</a><br>  
                                                          <a href='notebooks/Package01/feladat01.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/feladat02.html'>Feladat-02</a><br>  
                                                          <a href='notebooks/Package02/feladat02.ipynb' download>(forrás)</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/feladat03.html'>Feladat-03</a><br>  
                                                          <a href='notebooks/Package03/feladat03.ipynb' download>(forrás)</a></td>

</tr>
<tr>
<td style="text-align:center; border: 1px solid #dddddd "><p style="font-weight: bold;"> Puskák </p> </td>
<td style="text-align:center; border: 1px solid #dddddd "></td> 
<td style="text-align:center; border: 1px solid #dddddd "></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package02/Cheat_sheet02.html'>Vezérő utasítások<br>függvények</a></td>
<td style="text-align:center; border: 1px solid #dddddd "><a href='static_notebooks/Package03/Cheat_sheet03.html'>Modulok <br>ábrák</a></td>
    
</tr>
</tbody>
</table>
</div>


<hr><div class="se-section-delimiter"></div>

<h2 id="javaslatok-egyéni-projektekre">Javaslatok egyéni projektekre</h2>
<blockquote>
<ul>
<li>A <a href="http://www.wolframalpha.com/">Wolfram Alpha</a> használata a matematika (és/vagy fizika/biológia/stb.) tanításában</li>
<li>Interaktív fizikai szimulációk az Interneten (keress!!)</li>
<li><a href="https://www.geogebra.org/">GeoGebra</a></li>
<li>Virtuális világok pl. <a href="http://www.crayonphysics.com/">Crayon Physics</a>, <a href="http://www.algodoo.com/">Algodoo</a>, mint fizkia illusztrációk</li>
<li>Fizikai kísérletek mobiltelefonnal (pl. Medvegy Tibor Fizikai Szemle <a href="http://fizikaiszemle.hu/archivum/fsz1403/MedvegyTibor.pdf">cikke</a> alapján)</li>
<li>Tanítást/tanulást segítő App-ok</li>
<li>Interaktív táblák a fizika oktatásában</li>
<li>E-learning eszközök a fizika oktatásban</li>
<li><a href="https://classroom.google.com">Google Class</a></li>
<li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
<li>Citizen Science,<a href="http://setiathome.ssl.berkeley.edu/">SETI@HOME</a></li>
<li><a href="https://en.wikipedia.org/wiki/Peer_instruction">Peer Instruction</a></li>
<li><a href="https://scratch.mit.edu">Scratch</a></li>
<li><a href="https://phet.colorado.edu/hu/simulations/translated/hu">Phet</a></li>
<li><a href="http://portal.coospace.hu/hu/">CooSpace</a>,<a href="http://portal.coospace.hu/hu/">CooSpace az ELTE-n</a></li>
</ul>
</blockquote>

<p>Egy-egy témából egyeztetés után több projekt is készíthető. Használjátok bátran az Internetet témák és háttéranyg kereséséhez!</p>

<hr><div class="se-section-delimiter"></div>

<h2 id="követelmények">Követelmények</h2>

<blockquote>
<ul>
<li>Feladat Notebook-ok beadása</li>
<li>kisZHk</li>
<li>Egyéni prezentáció (kb 10p)</li>
</ul>
</blockquote>
</div></body>

</html>
