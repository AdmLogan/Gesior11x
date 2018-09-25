<?php
$bonusPoints = $config['site']['bonusPoints'];
if ($action == ""){
$main_content .='
<script>
function validate_form(thisform){
with (thisform){
if(rules.checked==false){
alert(\'Para prosseguir com a doação você deve concordar com os termos acima!\');return false;
}}}
</script>
<div id="ProgressBar">
<div id="Headline">Donation Rules</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter"> 
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div>
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div> 
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif"> 
<div id="FirstStep" class="Steps">
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif">
<div class="StepText" style="font-weight: bold;">Donation Rules</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif"> 
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-blue.gif"> 
<div class="StepText" style="font-weight: normal;">Método de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;"> 
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Regras da Doação</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
 <tbody><tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
We inform players and employees that the <b>'.$config['server']['serverName'].' Global Full Map RL</b> has no financial interest. All income earned is directly reapplied for server maintenance - this means that by making a donation, you are ensuring stability and increasing the quality of it.</br></br>
The points that are passed on to the players who make the donations represent nothing more than our gratification, that is, you are not buying points but receiving a symbolic bonus (in points forms) that benefits you in the game; you can use your points the way you want.</br></br>
The spirit of this system is simple: in order to get closer to the players and make you feel at home, we understand your donation as a two-way street in terms of credibility. In believing that it is worth investing in the maintenance of the server, we invest in you crediting them with points, which as previously said, can be used in the way that most fit them.</br></br>
Check our <a href="#">STORE</a> and know how to take advantage of your points in the most beneficial way to your situation.</br>

<h3>Frequently Asked Questions</h3></br>
<b>But what are TIBIA COINS?</b>
Tibia Coins is part of our donation system, with them you can purchase something that is available in STORE PREMIA.</br></br>


<b>How to make the donation?</b>
<br />Click on the button <b>"Continue"</b> and follow all the procedures to make your donation. 
<br />
<br />
<hr>
<div align="center">
<b>Donation Terms</b>
<br /><INPUT TYPE="checkbox" NAME="rules" id="rules" value="true" /> I accept the terms and wish to proceed.<br />
<small style="color: red;">Be aware of the donation terms before proceeding!</small>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<form action="?subtopic=buypoints&action=agreement" method="post" onsubmit="return validate_form(this)">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';}
if ($action == "agreement"){
if(!$logged) {
$link = "index.php?subtopic=buypoints&action=agreement";
}
else
{
$buy_name = stripslashes(urldecode($_POST['buy_name']));
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Payment method</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: bold;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<br /><br />
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="100%"> 
<form action="index.php?subtopic=buypoints&action=tipo" method="POST">
<input type="hidden" name="char_name" value=""> 
<TR BGCOLOR="#505050"> 
<TD CLASS="white" COLSPAN="3"><b>Select a payment method</b></TD> 
</TR>';
if ($config['site']['pagseguro'] == 1){
$main_content .='
	<TR BGCOLOR=#D4C0A1>
		<TD>';
			if ($bonusPoints > 1){
			if ($bonusPoints <= 4){$main_content .='<b>[Bônus Points <font color="#FF0000">x'.$bonusPoints.'</font>]</b><br />';}
			if ($bonusPoints >= 5){$main_content .='<b>[Bônus Points <font color="#FF0000" style="font-size:18px;font-weight:bold;">Extreme x'.$bonusPoints.'!</font>]</b><br />';}
			}
		$main_content .='<input type="radio" name="method" value="1" />&nbsp;PagSeguro - <b>Cartões de crédito&nbsp;<i>/</i>&nbsp;Boleto&nbsp;<i>/</i>&nbsp;Transferência bancária</b>
		</TD>
	</TR>';}
if ($config['site']['paypal'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="2" />&nbsp;Paypal - <b>Credit Cards/International Transactions</b></TD>
		</TR>';}
		if ($config['site']['caixa'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;Caixa Poupança - <b>Depósitos/Transferencias Bancárias</b></TD>
		</TR>';}
		if ($config['site']['caixa'] == 0 && $config['site']['pagseguro'] == 0 && $config['site']['paypal'] == 0){
		$main_content .='
		<TR BGCOLOR="#D4C0A1" padding="10px">
			<TD><b style="color: red; padding: 5px;">Nenhuma forma de pagamento disponível no momento.</b></TD>
		</TR>';
		}
$main_content .='
</TABLE>
</tbody>
</table>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>';
if ($config['site']['caixa'] == 1 || $config['site']['pagseguro'] == 1 || $config['site']['paypal'] == 1){
$main_content .='
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=pag_form">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>';
}
$main_content .='
</td>
</tr>
</tbody>
</table>';
}
$_SESSION["nome"] = stripslashes(urldecode($_POST['method']));}
elseif($action == 'tipo'){
if(!$logged){
$main_content .= '
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS="white"><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD>Please, log in so you can proceed with the operation.<br /><a href="index.php?subtopic=accountmanagement">It is here log</a>. If you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.</TD>
</TR>
</TABLE>';
}else{
$buy_tipo = stripslashes(urldecode($_POST['method']));
if($buy_tipo == 0) { $main_content .='
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS=white><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD><b style="color: red;">No payment method has been selected.</b><br /><i>Select a form of payment available to give procedure.</i></TD>
</TR>
</TABLE>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;"> 
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=agreement">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Back" alt="Back" src="'.$layout_name.'/images/vips/_sbutton_back.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
';}
if($buy_tipo == 1) {
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Informações do Pedido</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: bold;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
';
if ($bonusPoints >= 2){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Bônus Points!</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td>';
if ($bonusPoints >= 2){
$main_content .= '<div style="font-size: 20px; font-weight: bold; color: red;">Points x'.$bonusPoints.'</div>';
}
$main_content .='
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />';
}
$_POST['item_quant_1'];
$_POST['account_namev'];
$_POST['emailv'];
$_POST['character_namev'];
$main_content .='
<form action="?subtopic=buypoints&action=confirmacao" method="post" enctype="application/x-www-form-urlencoded">
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Account Information</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
</tr>
<tr>
<td><b>Account Name:</b></td>
<td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev" />' . $account_logged->getCustomField("name") . '</td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><input type="hidden" value="' . $account_logged->getCustomField("email") . '" name="emailv" />' . $account_logged->getCustomField("email") . '</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td width="10%"><b>Points:</b></td>
<td>
<select name="item_valor_1">
<option value="1000">10</option>
<option value="2000">20</option>
<option value="3000">30</option>
<option value="5000">50</option>
<option value="10000">100</option>
<option value="15000">150</option>
<option value="20000">200</option>
<option value="25000">250</option>
<option value="50000">500</option>
</select>
</td>
</tr>
</table>
<br />
<small>Todos os pagamentos feito com forma de pagamento pagseguro são totalmente automatizados. São entregues os pontos assim que o pagseguro confirma a transferencia. <br />
<b style="color: red;">Nenhum membro da equipe tem a autorização e permissão para ter acesso ao painel de pontos do servidor. Todos os mesmos são adicionados por nossos sistemas inteligentes.</b></small>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</table>
';
}
if($buy_tipo == 3) {
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS=white><B>BANCO CAIXA ECONOMICA</B></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><pre>' . $config['site']['CaixaCont'] . '</pre></td>
</tr>
</TABLE>
<br />
<center>
<a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</center>';
}
if($buy_tipo == 2) {
$main_content .='
<b>PayPal Shop System</b><br /><br />
The shop costs:
<ul><li> 15 BRL (for 30 TIBIA COINS)</li>
<li> 50 BRL (for 100 TIBIA COINS)</li><li> 100 BRL (for 300 TIBIA COINS)</li></ul>
<br />
<b>Here are the steps you need to make:</b> <br />
1. A PayPal account with a required balance or a creditcard. <br />
2. Fill in your account number. <br />
3. Click on the Buy Now button or your creditcard brand. <br />
4. Make a transaction. <br />
5. After the transaction points will be automatically added to your account. <br />
6. Go to Item shop and use your points <br /> <br /> <br />

<span style="color:red">If you recall the money, and your premium points can\'t be recalled your account will be deleted.</span>
<br />
<br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Paypal</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="'.$config['paypal']['email'].'">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Premium points">
<b>Account name/login:</b> <input type="text" name="custom" value="'.$account_logged->getCustomField("name").'" style="padding: 5px;" autocomplete="off" readonly="readonly">

<select name="amount">
<option value="15.00">15,00 REAIS</option>
<option value="20.00">20,00 REAIS</option>
<option value="30.00">30,00 REAIS</option>
<option value="40.00">40,00 REAIS</option>
<option value="50.00">50,00 REAIS</option>
<option value="100.00">100,00 REAIS</option>
<option value="120.00">120,00 REAIS</option>
<option value="150.00">150,00 REAIS</option>
<option value="200.00">200,00 REAIS</option>
</select>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="notify_url" value="'.$config['server']['url'].'/ipn.php">
<input type="hidden" name="return" value="'.$config['server']['url'].'">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="submit" value="Submit" style="padding: 5px;" />
</form></td>
</tr>
</TABLE>
';}
}
}
if ($action == "confirmacao"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Confirmação</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: bold;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
Após confirmar esta etapa, você automaticamente aceitará os <a href="index.php?subtopic=termsdonate" target="_blank">Termos de Compra</a> do servidor <b>'.$config ['server']['serverName'].'</b>. <u>Leia e esteja de acordo com os termos.</u><br /><br />
<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="' . $config['pagseguro']['email']. '">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">

<input type="hidden" name="item_id_1" value="1">
<input type="hidden" name="item_descr_1" value="' . $config['pagseguro']['produtoNome'] . '">

<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="' . $account_logged->getCustomField("name").'">
<input type="hidden" name="item_valor_1" value="'.$_POST['item_valor_1'].'">';

$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%"><strong>Character Name:</strong></td>
<td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev" />' . $account_logged->getCustomField("name") . '</td>
</tr>
<tr>
<td><strong>Email:</strong></td>
<td>'.$_POST['emailv'].'</td>
</tr>
<tr>
<!--td><strong>Quant. Points:</strong></td>
<td>';
$main_content .= $_POST['item_valor_1'] * 2;
$main_content .='</td> 
</tr-->';
if ($bonusPoints >= 2){
$main_content .='
<tr>
<td><strong>Bônus Points:</strong></td>
<td>';
$main_content .= '<b>x&nbsp;'.$bonusPoints.'</b>';
$main_content .='</td>
</tr>';}
$main_content .='
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;">

<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>

</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center>
';}
if ($action == "realizado"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Pedido Realizado</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-green.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-green.gif">
<div class="StepText" style="font-weight: bold;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Pedido Realizado</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="8%" valign="top"><img src="images/account/account-status_green.gif" width="52" height="52" /></td>
    <td width="86%" align="left"><div style="font-weight:bold;font-size:16px; margin-bottom: -10px;">Pedido realizado com sucesso!</div><br />Recebemos seu pagamento com sucesso, dentro de 5 minutos seus pontos serão creditados. Agradecemos por sua colaboração!<br /><small>Att, Yours Community</small></td>
  </tr>
</table>
<br /><br />
<b style="color: red">Não tente nenhum tipo de fraude, pois sua conta será penalizada!</b>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<form action="index.php?subtopic=history" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';
}
?>