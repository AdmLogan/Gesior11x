<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
if($action == '')
  {
$main_content .= '
<p>Before you can download the client program please read the ' . htmlspecialchars($config['server']['serverName']) . ' Service Agreement and state if you agree to it by clicking on the appropriate button below.</p>
<div class="TableContainer" >  
<table class="Table1" cellpadding="0" cellspacing="0">    
<div class="CaptionContainer" >      
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text" >' . htmlspecialchars($config['server']['serverName']) . ' Service Agreement</div>  
			<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				</div>
					</div>
<tr><td>        
<div class="InnerTableContainer" >
<table style="width:100%;" ><p>
This agreement describes the terms on which CipSoft GmbH offers you access to an account for being able to play the online role playing game "' . htmlspecialchars($config['server']['serverName']) . '". By creating an account or downloading the client software you accept the terms and conditions below and state that you are of full legal age in your country or have the permission of your parents to play this game.</p><p>You agree that the use of the software is at your sole risk. We provide the software, the game, and all other services "as is". We disclaim all warranties or conditions of any kind, expressed, implied or statutory, including without limitation the implied warranties of title, non-infringement, merchantability and fitness for a particular purpose. We do not ensure continuous, error-free, secure or virus-free operation of the software, the game, or your account.</p><p>We are not liable for any lost profits or special, incidental or consequential damages arising out of or in connection with the game, including, but not limited to, loss of data, items, accounts, or characters from errors, system downtime, or adjustments of the gameplay.</p><p>While you are playing "' . htmlspecialchars($config['server']['serverName']) . '", you must abide by some rules ("' . htmlspecialchars($config['server']['serverName']) . ' Rules") that are stated on this homepage. If you break any of these rules, your account may be removed and all other services terminated immediately.</p></table>        </div>      </td>    </tr>  </table></div><br/>
<center><form action="index.php?subtopic=downloads&action=client" method="post" style="padding:0px;margin:0px;" ><input type="hidden" name="step" value="downloadclient" >
<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" >
<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" >
<div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div>
<input class="ButtonText" type="image" name="I agree" alt="I agree" src="http://i.imgur.com/Un5PzHM.gif" ></div></div></form></center>        

';
}
elseif($action == 'client')
  {
  $main_content .= '
<div class="Border_2">
       
        <div class="BoxContent" style="background-image:url(./layouts/tibiacom/images/content/scroll.gif);">
	
	
	
	



        <div class="BoxContent" style="background-image:url(./layouts/tibiacom/images/content/scroll.gif);">
	
   <div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Downloads Macabra-Global</div>
				<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
					</div>
						</div>
							<table class="Table3" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>
										<div class="InnerTableContainer">
											<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
															</div>
														</div><table style="width:100%;">
												<tbody>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent">
																	<tbody><tr>
																		<td width="60">
																		<center><img src="images/tibia-download.png" width="60"></center>
																		</td>
																		<td>
																		<b>Macabra-Global 1.0.0 Client 10</b><br> Cliente próprio com MC incluso e não precisa de IP Changer para se conectar.
																		</td>
																		<td width="80">
																		<center><a href="http://www.mediafire.com/file/5b0ne3e76xykadt/Cliente%20macabra-global%20V1.0.0.exe" target="_BLANK"><img src="images/tibia-download2.gif" width="80"></a><br><b>35 MB</b><br><a href="http://www.mediafire.com/file/5b0ne3e76xykadt/Cliente%20macabra-global%20V1.0.0.exe" target="_BLANK">Link 1</a></center>
												
															
															
																		
															
																		</td>
																		
																	</tr>									
																</tbody></table>
															</div>
														</div>											
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
												</tr>
														
													
												
												
												

								</tbody>
							
						
				</table>
				
			</div></td></tr></tbody>
		</table>
		
		
		
		
		
		
		
		
		<table class="Table3" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>
										<div class="InnerTableContainer">
											<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
															</div>
														</div><table style="width:100%;">
												<tbody>
												<tr>
													<td>
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent">
																	<tbody><tr>
																		<td width="60">
																		<center><img src="images/tibiamap.png" width="60"></center>
																		</td>
																		<td>
																		<b>Full Map</b><br> Instalador feito pela nossa equipe irá instala o mapa completo.
																		</td>
																		<td width="80">
																		<center><a href="http://portaltibia.com.br/?ddownload=68757" target="_BLANK"><img src="images/tibia-download2.gif" width="80"></a><br><b>35 MB</b><br><a href="http://www.mediafire.com/file/97lunr525oxfvub/mapacompleto.exe" target="_BLANK">Link 2</a></center>
																		</td>
																		
																	</tr>									
																</tbody></table>
															</div>
														</div>											
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
												</tr>
												
																				
														
													
												
												
												

								</tbody>
							
						
				</table>
				
			</div></td></tr></tbody>
		</table>
 
      </div>      </div>   
 
      </div>
    </div>
<TABLE BORDER=0 WIDTH=100%><TR><TD ALIGN=CENTER><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=120 HEIGHT=1 BORDER=0><BR></TD><TD ALIGN=CENTER><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION=index.php?subtopic=accountmanagement METHOD=post><TR><TD>
<INPUT TYPE=image NAME="Login" ALT="Login" SRC="\layouts\tibiacom\images\buttons\sbutton_login.gif" BORDER=0 WIDTH=120 HEIGHT=18>
</TD></TR></FORM></TABLE>
</TD><TD ALIGN=CENTER><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION=index.php?subtopic=downloads METHOD=post><TR><TD>
<INPUT TYPE=image NAME="Back" ALT="Back" SRC="\layouts\tibiacom\images\buttons\sbutton_back.gif" BORDER=0 WIDTH=120 HEIGHT=18>

</TD></TR></FORM></TABLE>
</TD><TD ALIGN=CENTER><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=120 HEIGHT=1 BORDER=0><BR></TD></TR></TABLE><iframe src="" name="confirmclient" style="height:0px;width:0px;visibility:hidden;" >NO FRAMES</iframe>
</TD>
<TD><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD>
</TR>
</TABLE>
';
}
?>