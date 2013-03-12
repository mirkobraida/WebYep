<?php
	$webyep_bDocumentPage = false;
	$webyep_sIncludePath = "../..";
	include_once("$webyep_sIncludePath/webyep.php");
?>
<html><!-- #BeginTemplate "/Templates/help-1.1-en.dwt" --><!-- DW6 -->
<head>
<!--
// WebYep
// (C) Objective Development Software GmbH
// http://www.obdev.at
-->
<!-- #BeginEditable "doctitle" -->
<title><?php echo $webyep_sProductName?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../../styles.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<span class="textButton">&lt;<a href="javascript:window.close();">Zamknij okno</a>&gt;</span><br>
<img src="../../images/nix.gif" width="8" height="8">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="left" valign="top"><h1><?php echo $webyep_sProductName?> Pomoc: D&#322;ugi Tekst</h1></td>
    <td align="right" valign="top"><img src="../../images/logo.gif" align="top" border="0"><img src="../../images/nix.gif" width="8" height="8" align="top"></td>
</tr>
</table>
<div><img src="../../images/nix.gif" width="8" height="10"></div>
<!-- #BeginEditable "content" -->
<h3>Opis</h3>
<p>Mo&#380;esz u&#380;ywa&#263; kontrolki D&#322;ugi Tekst<?php echo $webyep_sProductName?>
  aby wstawia&#263; sformatowany tekst (pogrubiony, lista itp.). Gdy u&#380;ywasz konstrolki powiene&#347; pami&#281;ta&#263;, &#380;e:</p>
<ul>
<li><?php echo $webyep_sProductName?> to nie jest Word&reg;! Tekst stworzony w edytorach tekst&oacute;w takich jak Microsoft&#153; Word&reg; mog&#261; nie by&#263; przenoszone do kontrolki D&#322;ugi Tekst <?php echo $webyep_sProductName?>
   wraz ze wszystkimi elementami formatowania, czcionkami, listami, tabelkami itp.</li>
<li>To co mo&#380;esz robi&#263; to wstawianie prostych element&oacute;w formatowania</li>
<li>Kopiowanie tekstu z Worda&reg; skopiuje jedynie tre&#347;&#263;, nie formatowanie.</li>
<li>Najlepiej jest stworzy&#263; tekst w edytorze tekstu bez formatowania, skopiowa&#263; go do kontrolki  
  <?php echo $webyep_sProductName?>
   D&#322;ugi Tekst poprzez kopiuj/wklej, a nast&#281;pnie ustawi&#263; &#380;&#261;dane formatowanie dzi&#281;ki 
  specjalnym sekwencjom znak&oacute;w <?php echo $webyep_sProductName?>.</li>
</ul>
<p>Niekt&oacute;re cz&#281;&#347;ci tekstu b&#281;d&#261; formatowane automatycznie, np. linki lub adresy email</p>
<table width="98%" border="0" cellspacing="0" cellpadding="6">
  
<tr> 
    
<td align="left" valign="top" bgcolor="#CCCCCC"><b>wpisane</b><br><img src="../../images/nix.gif" width="200" height="1"></td>
<td align="left" valign="top" bgcolor="#CCCCCC"><b><?php echo $webyep_sProductName?> wy&#347;wietli</b></td>
<td align="left" valign="top" bgcolor="#CCCCCC"><strong>przyk&#322;ad</strong><img src="../../images/nix.gif" width="200" height="1"></td>
</tr>
  
<tr> 
    
<td height="66" align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p>http://www.test.com</p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p>Tekst &quot;http://www.test.com&quot; sformatowany jako link URL, kt&oacute;ry po klikni&#281;ciu otworzy nowe okno w przegl&#261;darce!</p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p><a href="http://www.test.com" target="_blank" class="externalLink">http://www.test.com</a><br>
  <span class="remark">(wygl&#261;d linku w rzeczywisto&#347;ci - wygl&#261;d mo&#380;e r&oacute;&#380;ni&#263; si&#281; w r&oacute;&#380;nych przegl&#261;darkach!)</span></p></td>
</tr>
  
<tr> 
    
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p>test@company.com</p></td>
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p>Tekst &quot;test@firma.com&quot; sformatowany jako link do podanego adresu email.</p></td>
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p><a href="mailto:test@firma.com" class="externalLink">test@firma.com</a><br>
  <span class="remark">(wygl&#261;d linku w rzeczywisto&#347;ci - wygl&#261;d mo&#380;e r&oacute;&#380;ni&#263; si&#281; w r&oacute;&#380;nych przegl&#261;darkach!)</span></p></td>
</tr>
</table>
<p>Dzi&#281;ki przedrostkom formatuj&#261;cym mamy wi&#281;cej opcji formatowania:</p>
<table width="98%" border="0" cellspacing="0" cellpadding="6">
  
<tr> 
    
<td align="left" valign="top" bgcolor="#CCCCCC"><b>wpisane</b><br><img src="../../images/nix.gif" width="200" height="1"></td>
<td align="left" valign="top" bgcolor="#CCCCCC"><b><?php echo $webyep_sProductName?>
  wy&#347;wietli</b></td>
<td align="left" valign="top" bgcolor="#CCCCCC"><strong>przyk&#322;ad</strong><br><img src="../../images/nix.gif" width="200" height="1"></td>
</tr>
  
<tr> 
    
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      <p><nobr>&lt;LINK:otherpage.php</nobr> To some other page<nobr>&gt;</nobr></p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p>Tekst &quot;To some other page&quot; sformatowany jako link do strony  <i>otherpage.php</i> 
        - nowe okno nie b&#281;dzie otwarte po klikni&#281;ciu na link. Mo&#380;n r&oacute;wnie&#380; u&#380;ywa&#263; ca&#322;ego adresu URL (&quot;http://...&quot;)
        zamiast tylko samej nazwy pliku (otherpage.php).</p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p><a href="javascript:alert('This link would lead to some other page of your website.');" class="externalLink">To
    some other page</a></p></td>
</tr>
  
<tr> 
    
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
      <p><nobr>&lt;BOLD</nobr> Some bold Text<nobr>&gt;</nobr></p></td>
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p>Tekst &quot;Some bold text&quot; sformatowany jako pogrubiony.</p></td>
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p><b>Some bold text</b></p></td>
</tr>
<tr> 
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      <p><nobr>&lt;SPECIAL</nobr> Some text with special formatting<nobr>&gt;</nobr></p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
      
<p>Tekst &quot;Some text with special formatting&quot; w stylu zdefiniowanym przez web designera. Dost&#281;pne style z nazwami  (&quot;<nobr>SPECIAL</nobr>&quot;) zdefiniowane s&#261; przez tw&oacute;rc&#281; strony.</p></td>
<td align="left" valign="top" bgcolor="#FFFFFF"> 
<p><font face="Courier New, Courier, mono" color="#009933">Some text with special
    formatting</font> </p></td>
</tr>
  

  
<tr> 
    
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<p>---</p></td>
    <td align="left" valign="top" bgcolor="#EEEEEE"> 
      <p>Linia pozioma. Sekwencja &quot;---&quot; musi zaczyna&#263; si&#281; na samym pocz&#261;tku linii!</p></td>
<td align="left" valign="top" bgcolor="#EEEEEE"> 
      
<hr width="200">    </td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>* First list item<br>
    ** A subitem
    <br>
      * Second list item with some longer text<br>
      * Third list item<nobr></nobr></p>  </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>Wstawiaj&#261;c gwiazdki przed wyrazami tworzy si&#281; listy.</p>    </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
      <li>First list item
        <ul>
          <li>A subitem </li>
        </ul>
      </li>
      <li>Second list item with some longer text</li>
      <li>Third list item<nobr></nobr></li>
    </ul>  </td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p><nobr></nobr></p>  </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>Mo&#380;na wstawi&#263; kilka linijek tekstu jako jeden element listy poprzez wstawienie dw&oacute;ch spacji przed elementem, tak jak:</p>
      <p class="codeExample">* First item<br>
&nbsp;&nbsp;This is all part of the first list item.<br>
      * Second item<br>
      ...</p>    </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
      <li>First item<br>
        This is all text of the first list item.      </li>
      <li>Second item<nobr></nobr></li>
      </ul>  </td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p><nobr></nobr></p></td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>Mo&#380;na r&oacute;wnie&#380; po&#322;&#261;czy&#263; formatowanie np.:</p>
    <p class="codeExample">* &lt;BOLD First item&gt;<br>
&nbsp;&nbsp;This is all part of the first list item.<br>
  * Second item<br>
  ...</p></td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
    <li><strong>First item</strong><br>
    This is all text of the first list item. </li>
    <li>Second item<nobr></nobr></li>
  </ul></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="left" valign="top" bgcolor="#EEEEEE"><p>+ First list item<br>
      ++ A subitem <br>
      + Second list item with a quite long text<br>
      + Third list item<nobr></nobr></p></td>
  <td align="left" valign="top" bgcolor="#EEEEEE"><p>U&#380;ywaj&#261; &quot;+&quot; (plus) zamiast gwiazdki otrzymujemy list&#281; numerowan&#261;/uporz&#261;dkowan&#261;.</p></td>
  <td align="left" valign="top" bgcolor="#EEEEEE"><ol style="list-style: upper-roman; margin: 0; margin-left: 30px; padding: 0px">
      <li>First list item
          <ol style="list-style: lower-roman; margin: 0; margin-left: 30px; padding: 0px">
            <li>A subitem</li>
          </ol>
      </li>
      <li>Second list item with a quite long text</li>
      <li>Third list item<nobr></nobr></li>
  </ol></td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>aaa | bbb | ccc<br>
      111 | 222 | 333<nobr></nobr></p>  </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><p>U&#380;ywaj&#261;c znaku &quot;|&quot; mo&#380;na stworzy&#263; proste tabelki. Znak &quot;|&quot; s&#322;u&#380;y jako oznaczenie kraw&#281;dzi kom&oacute;rki. </p>
    <p>Wygl&#261;d tabeli definiowany jest przez tw&oacute;rc&#281; strony.</p>    </td>
  <td align="left" valign="top" bgcolor="#FFFFFF"><table border="0" cellspacing="0" cellpadding="6">
      <tr>
        <td>aaa</td>
        <td>bbb</td>
        <td>ccc</td>
      </tr>
      <tr>
        <td>111</td>
        <td>222</td>
        <td>333</td>
      </tr>
    </table>  </td>
</tr>
</table>
<h3>U&#380;ycie</h3>
<p>Wstaw tekst  (w&#322;&#261;czaj&#261;c w to sekwencje formatuj&#261;ce) i naci&#347;nij przycisk &quot;Zapisz&quot;.</p>
<p>Okno edytora zamknie si&ecirc; i zostanie wy&para;wietlona zmieniona strona.<br>
  <span class="remark">W niekt&oacute;rych przypadkach wymagane b&ecirc;dzie naci&para;ni&ecirc;cie przycisku &quot;Od&para;cie&iquest; ston&ecirc;&quot; w przegl&plusmn;darce internetowej.</span></p>

<span class="textButton">&lt;<a href="javascript:window.close();">Zamknij okno</a>&gt;</span>
<hr>
<span class="remark"><?php echo $webyep_sCopyrightLine?></span>
</body>
</html>
