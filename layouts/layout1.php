<?php

//Inicializo session
session_start();

require_once('../inc/config.php');
require_once('../inc/functions.php');
require_once('../inc/fetch-session-inputs.php');

//Start buffering
if ($action === "generate") {
	startBuffering();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- NAME: TELL A STORY -->
		<!--[if gte mso 15]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>
			*|MC:SUBJECT|*
		</title>
		<style type="text/css">
		               p{
		                   margin:10px 0;
		                   padding:0;
		               }
		               table{
		                   border-collapse:collapse;
		               }
		               h1,h2,h3,h4,h5,h6{
		                   display:block;
		                   margin:0;
		                   padding:0;
		               }
		               img,a img{
		                   border:0;
		                   height:auto;
		                   outline:none;
		                   text-decoration:none;
		               }
		               body,#bodyTable,#bodyCell{
		                   height:100%;
		                   margin:0;
		                   padding:0;
		                   width:100%;
		               }
		               .mcnPreviewText{
		                   display:none !important;
		               }
		               #outlook a{
		                   padding:0;
		               }
		               img{
		                   -ms-interpolation-mode:bicubic;
		               }
		               table{
		                   mso-table-lspace:0pt;
		                   mso-table-rspace:0pt;
		               }
		               .ReadMsgBody{
		                   width:100%;
		               }
		               .ExternalClass{
		                   width:100%;
		               }
		               p,a,li,td,blockquote{
		                   mso-line-height-rule:exactly;
		               }
		               a[href^=tel],a[href^=sms]{
		                   color:inherit;
		                   cursor:default;
		                   text-decoration:none;
		               }
		               p,a,li,td,body,table,blockquote{
		                   -ms-text-size-adjust:100%;
		                   -webkit-text-size-adjust:100%;
		               }
		               .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
		                   line-height:100%;
		               }
		               a[x-apple-data-detectors]{
		                   color:inherit !important;
		                   text-decoration:none !important;
		                   font-size:inherit !important;
		                   font-family:inherit !important;
		                   font-weight:inherit !important;
		                   line-height:inherit !important;
		               }
		               .templateContainer{
		                   max-width:600px !important;
		               }
		               a.mcnButton{
		                   display:block;
		               }
		               .mcnImage{
		                   vertical-align:bottom;
		               }
		               .mcnTextContent{
		                   word-break:break-word;
		               }
		               .mcnTextContent img{
		                   height:auto !important;
		               }
		               .mcnDividerBlock{
		                   table-layout:fixed !important;
		               }
		               /*
		               @tab Page
		               @section Heading 1
		               @style heading 1
		               */
		               h1{
		                   /*@editable*/color:#222222;
		                   /*@editable*/font-family:Helvetica;
		                   /*@editable*/font-size:40px;
		                   /*@editable*/font-style:normal;
		                   /*@editable*/font-weight:bold;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/letter-spacing:normal;
		                   /*@editable*/text-align:center;
		               }
		               /*
		               @tab Page
		               @section Heading 2
		               @style heading 2
		               */
		               h2{
		                   /*@editable*/color:#222222;
		                   /*@editable*/font-family:Helvetica;
		                   /*@editable*/font-size:34px;
		                   /*@editable*/font-style:normal;
		                   /*@editable*/font-weight:bold;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/letter-spacing:normal;
		                   /*@editable*/text-align:left;
		               }
		               /*
		               @tab Page
		               @section Heading 3
		               @style heading 3
		               */
		               h3{
		                   /*@editable*/color:#444444;
		                   /*@editable*/font-family:Helvetica;
		                   /*@editable*/font-size:22px;
		                   /*@editable*/font-style:normal;
		                   /*@editable*/font-weight:bold;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/letter-spacing:normal;
		                   /*@editable*/text-align:left;
		               }
		               /*
		           @tab Page
		           @section Heading 4
		           @style heading 4
		           */
		               h4{
		                   /*@editable*/color:#999999;
		                   /*@editable*/font-family:Georgia;
		                   /*@editable*/font-size:20px;
		                   /*@editable*/font-style:italic;
		                   /*@editable*/font-weight:normal;
		                   /*@editable*/line-height:125%;
		                   /*@editable*/letter-spacing:normal;
		                   /*@editable*/text-align:left;
		               }
		               /*
		               @tab Header
		               @section Header Container Style
		               */
		               #templateHeader{
		                   /*@editable*/background-color:#ffffff;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable border-bottom:1px solid #f0f0f0;*/
		                   /*@editable*/padding-top:13px;
		                   /*@editable*/padding-bottom:13px;
		               }
		               /*
		               @tab Header
		               @section Header Interior Style
		               */
		               .headerContainer{
		                   /*@editable*/background-color:#transparent;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable*/border-bottom:0;
		                   /*@editable*/padding-top:0;
		                   /*@editable*/padding-bottom:0;
		               }
		               /*
		               @tab Header
		               @section Header Text
		               */
		               .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
		                   /*@editable*/color:#808080;
		                   /*@editable*/font-family:Helvetica;
		                   /*@editable*/font-size:16px;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/text-align:left;
		               }
		               /*
		               @tab Header
		               @section Header Link
		               */
		               .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
		                   /*@editable*/color:#00ADD8;
		                   /*@editable*/font-weight:normal;
		                   /*@editable*/text-decoration:underline;
		               }
		               /*
		               @tab Body
		               @section Body Container Style
		               */
		               #templateBody{
		                   /*@editable*/background-color:#ffffff;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable*/border-bottom:0;
		                   /*@editable*/padding-top:26px;
		                   /*@editable*/padding-bottom:26px;
		               }
		               /*
		               @tab Body
		               @section Body Interior Style
		               */
		               .bodyContainer{
		                   /*@editable*/background-color:#transparent;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable*/border-bottom:0;
		                   /*@editable*/padding-top:0;
		                   /*@editable*/padding-bottom:0;
		               }
		               /*
		               @tab Body
		               @section Body Text
		               */
		               .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
		                   /*@editable*/color:#808080;
		                   /*@editable*/font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		                   /*@editable*/font-size:16px;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/text-align:left;
		               }
		               /*
		               @tab Body
		               @section Body Link
		               */
		               .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
		                   /*@editable*/color:#00d7e6;
		                   /*@editable*/font-weight:normal;
		                   /*@editable*/text-decoration:underline;
		               }
		               /*
		               @tab Footer
		               @section Footer Style
		               */
		               #templateFooter{
		                   /*@editable*/background-color:#e7e6e6;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable*/border-bottom:0;
		                   /*@editable*/padding-top:7px;
		                   /*@editable*/padding-bottom:7px;
		               }
		               /*
		               @tab Footer
		               @section Footer Interior Style
		               */
		               .footerContainer{
		                   /*@editable*/background-color:#transparent;
		                   /*@editable*/background-image:none;
		                   /*@editable*/background-repeat:no-repeat;
		                   /*@editable*/background-position:center;
		                   /*@editable*/background-size:cover;
		                   /*@editable*/border-top:0;
		                   /*@editable*/border-bottom:0;
		                   /*@editable*/padding-top:0;
		                   /*@editable*/padding-bottom:0;
		               }
		               /*
		               @tab Footer
		               @section Footer Text
		               */
		               .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
		                   /*@editable*/color:#FFFFFF;
		                   /*@editable*/font-family:Helvetica;
		                   /*@editable*/font-size:12px;
		                   /*@editable*/line-height:150%;
		                   /*@editable*/text-align:center;
		               }
		               /*
		               @tab Footer
		               @section Footer Link
		               */
		               .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
		                   /*@editable*/color:#4caad8;
		                   /*@editable*/font-weight:normal;
		                   /*@editable*/text-decoration:underline;
		               }
		               @media only screen and (min-width:768px){
		                   .templateContainer{
		                       width:600px !important;
		                   }

		               }
		               @media only screen and (max-width: 480px){
		                   body,table,td,p,a,li,blockquote {
		                       -webkit-text-size-adjust:none !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   body{
		                       width:100% !important;
		                       min-width:100% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImage{
		                       width:100% !important;
		                   }

		               }   @media only screen and (max-width: 480px){
		                   .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
		                       max-width:100% !important;
		                       width:100% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnBoxedTextContentContainer{
		                       min-width:100% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		               .mcnImageGroupContent{
		                   padding:9px !important;
		               }

		               }
		               @media only screen and (max-width: 480px){
		                   .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
		                       padding-top:9px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
		                       padding-top:18px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImageCardBottomImageContent{
		                       padding-bottom:9px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImageGroupBlockInner{
		                       padding-top:0 !important;
		                       padding-bottom:0 !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImageGroupBlockOuter{
		                       padding-top:9px !important;
		                       padding-bottom:9px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnTextContent,.mcnBoxedTextContentColumn{
		                       padding-right:18px !important;
		                       padding-left:18px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
		                       padding-right:18px !important;
		                       padding-bottom:0 !important;
		                       padding-left:18px !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   .mcpreview-image-uploader{
		                       display:none !important;
		                       width:100% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Heading 1
		                   @tip Make the first-level headings larger in size for better readability on small screens.
		                   */
		                   h1{
		                       /*@editable*/font-size:30px !important;
		                       /*@editable*/line-height:125% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Heading 2
		                   @tip Make the second-level headings larger in size for better readability on small screens.
		                   */
		                   h2{
		                       /*@editable*/font-size:26px !important;
		                       /*@editable*/line-height:125% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Heading 3
		                   @tip Make the third-level headings larger in size for better readability on small screens.
		                   */
		                   h3{
		                       /*@editable*/font-size:20px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Heading 4
		                   @tip Make the fourth-level headings larger in size for better readability on small screens.
		                   */
		                   h4{
		                       /*@editable*/font-size:18px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Boxed Text
		                   @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
		                   */
		                   .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
		                       /*@editable*/font-size:14px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Header Text
		                   @tip Make the header text larger in size for better readability on small screens.
		                   */
		                   .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
		                       /*@editable*/font-size:16px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Body Text
		                   @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
		                   */
		                   .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
		                       /*@editable*/font-size:16px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		               @media only screen and (max-width: 480px){
		                   /*
		                   @tab Mobile Styles
		                   @section Footer Text
		                   @tip Make the footer content text larger in size for better readability on small screens.
		                   */
		                   .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
		                       /*@editable*/font-size:14px !important;
		                       /*@editable*/line-height:150% !important;
		                   }
		               }
		</style>
	</head>
	<body>
		<!--*|IF:MC_PREVIEW_TEXT|*-->
		<!--[if !gte mso 9]><!==-->
		<span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
		 <!--*|END:IF|*-->

		<center>
			<table align="center" border="0" cellpadding="0" cellspacing="0" id="bodyTable" width="100%">
				<tr>
					<td align="center" id="bodyCell" valign="top">
						<!-- BEGIN TEMPLATE // -->

						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td align="center" data-template-container="" id="templateHeader" valign="top">
									<!--[if gte mso 9]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                <tr>
                                <td align="center" valign="top" width="600" style="width:600px;">
                                <![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" class="templateContainer" width="100%">
										<tr>
											<td class="headerContainer" valign="top">
												<table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnImageBlockOuter">
														<tr>
															<td class="mcnImageBlockInner" style="padding:9px" valign="top">
																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnImageContent" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;" valign="top">
																				<a class="" href="http://latio.co" target="_blank" title=""><img align="center" alt="" class="mcnImage" src="https://latio.co/images/latio-mailing-logo.png" style="max-width:150px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" width="150"></a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</table>
									<!--[if gte mso 9]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
								</td>
							</tr>

							<tr>
								<td align="center" data-template-container="" id="templateBody" valign="top">
									<!--[if gte mso 9]>
                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                <tr>
                                <td align="center" valign="top" width="600" style="width:600px;">
                                <![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" class="templateContainer" width="100%">
										<tr>
											<td class="bodyContainer" valign="top">
												<div style="border:1px solid #e2e2e2;">
													<table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="min-width:100%;" width="100%">
														<tbody class="mcnImageBlockOuter">
															<tr>
																<td class="mcnImageBlockInner" valign="top">
																	<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;" width="100%">
																		<tbody>
																			<tr>
																				<td class="mcnImageContent" style="padding-top: 0; padding-bottom: 0; text-align:center;" valign="top">
																					<?php echo "<img align='center' src='$site_url$uploads_path$main_image_path' width='564' style='width:100%; padding-bottom: 0; display: inline !important; vertical-align: bottom;' class='mcnImage'>"?>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>

													<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
														<tbody class="mcnTextBlockOuter">
															<tr>
																<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																	<!--[if mso]>
                              <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                    <tr>
                                    <![endif]-->
																	<!--[if mso]>
                                    <td valign="top" width="600" style="width:600px;">
                                    <![endif]-->

																	<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																		<tbody>
																			<tr>
																				<td class="mcnTextContent" style="padding-top:6px; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																					<div style="text-align: center;">
																						<span style="color:#000000"><span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:20px"><strong><?php echo $main_title; ?></strong></span><br>
																						<span style="font-size:11px"><em>Por&nbsp; <?php echo "<a href='$author_twitter' target='_blank'>" . $author_name . '&nbsp;</a>'; ?>&nbsp;en&nbsp;<a href="https://medium.com/latio-reads/tagged/destacados-semanales" target="_blank">#LatioSemanal</a>. <?php echo $publish_date; ?>.</em></span></span></span>
																					</div>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--[if mso]>
                                                                </td>
                                                            <![endif]-->
																	<!--[if mso]>
                                                            </tr>
                                                            </table>
                                                            <![endif]-->
																</td>
															</tr>
														</tbody>
													</table>

													<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
														<tbody class="mcnTextBlockOuter">
															<tr>
																<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																	<!--[if mso]>
                                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                        <tr>
                                                        <![endif]-->
																	<!--[if mso]>
                                                        <td valign="top" width="600" style="width:600px;">
                                                        <![endif]-->

																	<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																		<tbody>
																			<tr>
																				<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																					<span style="color:#000000"><span style="font-size:14px"><span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><?php echo $description; ?></span></span></span><br>
																					&nbsp;
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--[if mso]>
                </td>
                <![endif]-->
																	<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
																</td>
															</tr>
														</tbody>
													</table>

													<table border="0" cellpadding="0" cellspacing="0" class="mcnButtonBlock" style="min-width:100%;" width="100%">
														<tbody class="mcnButtonBlockOuter">
															<tr>
																<td align="center" class="mcnButtonBlockInner" style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top">
																	<table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #00D7E6;">
																		<tbody>
																			<tr>
																				<td align="center" class="mcnButtonContent" style="font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; padding: 15px;" valign="middle">
																					<a class="mcnButton" href="https://medium.com/latio-reads" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;" target="_blank" title="Ver más historias">Ver más historias</a>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</div>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<div style="text-align: center;">
																					<br>
																					<span style="color:#000000"><span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif">TOP 3<br>
																					<strong>NOTICIAS DE LA SEMANA</strong></span></span>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><?php echo "<a href='$t3_n1_link' target='_blank'>"; ?><strong><?php echo $t3_n1_title; ?> &gt;&nbsp;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:14px"><span style="color:#000000"><?php echo $t3_n1_desc; ?></span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><?php echo "<a href='$t3_n2_link' target='_blank'>"; ?><strong><?php echo $t3_n2_title; ?> &gt;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px"><?php echo $t3_n2_desc; ?></span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<?php echo "<a href='$t3_n3_link' target='_blank'>"; ?><span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><strong><?php echo $t3_n3_title; ?> &gt;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px"><?php echo $t3_n3_desc; ?></span></span></span><span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px">.</span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width: 100%; padding: 27px 18px 0px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width: 100%; padding: 27px 18px 0px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<div style="text-align: center;">
																					<br>
																					<span style="color:#000000"><span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif">TOP 3<br>
																					<strong>PRÓXIMOS EVENTOS</strong></span></span>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnDividerBlockOuter">
														<tr>
															<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																	<tbody>
																		<tr>
																			<td>
																				<span></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<?php echo "<a href='$e1_link' target='_blank'>"; ?> <span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><strong><?php echo $e1_title; ?> &gt;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px"><?php echo $e1_desc; ?></span></span><br>
																				<span style="color:#A9A9A9"><span style="font-size:14px"><?php echo $e1_date . " · " . $e1_type . " · " . $e1_fee . " · " . $e1_location; ?></span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->

																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
																	<tbody class="mcnDividerBlockOuter">
																		<tr>
																			<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																				<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																					<tbody>
																						<tr>
																							<td>
																								<span></span>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<?php echo "<a href='$e2_link' target='_blank'>"; ?> <span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><strong><?php echo $e2_title; ?> &gt;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px"><?php echo $e2_desc; ?></span></span><br>
																				<span style="color:#A9A9A9"><span style="font-size:14px"><?php echo $e2_date . " · " . $e2_type . " · " . $e2_fee . " · " . $e2_location; ?></span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                  </td>
                  <![endif]-->

																<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerBlock" style="min-width:100%;" width="100%">
																	<tbody class="mcnDividerBlockOuter">
																		<tr>
																			<td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
																				<table border="0" cellpadding="0" cellspacing="0" class="mcnDividerContent" style="min-width: 100%;border-top: 2px solid #EAEAEA;" width="100%">
																					<tbody>
																						<tr>
																							<td>
																								<span></span>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<br>
																				<?php echo "<a href='$e3_link' target='_blank'>"; ?> <span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><span style="font-size:15px"><strong><?php echo $e3_title; ?> &gt;</strong></span></span><br>
																				<span style="font-family:open sans,helvetica neue,helvetica,arial,sans-serif"><span style="color:#000000"><span style="font-size:14px"><?php echo $e3_desc; ?></span></span><br>
																				<span style="color:#A9A9A9"><span style="font-size:14px"><?php echo $e3_date . " · " . $e3_type . " · " . $e3_fee . " · " . $e3_location; ?></span></span></span><br>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                  </td>
                  <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
																				<div style="text-align: center;">
																					<br>
																					<span style="color:#000000"><span style="font-family:roboto,helvetica neue,helvetica,arial,sans-serif"><strong style="text-transform: uppercase;">Conocé la <a href="http://bit.ly/agendalatio" style="text-decoration: none;" target="_blank"><span style="color:#00d7e6;">agenda completa y sumá tu evento</span></a></strong></span></span>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</table>
									<!--[if gte mso 9]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
								</td>
							</tr>

							<tr>
								<td align="center" data-template-container="" id="templateFooter" valign="top">
									<!--[if gte mso 9]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                    <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                                    <![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" class="templateContainer" width="100%">
										<tr>
											<td class="footerContainer" valign="top">
												<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnFollowBlockOuter">
														<tr>
															<td align="center" class="mcnFollowBlockInner" style="padding:9px" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td align="center" style="padding-left:9px;padding-right:9px;">
																				<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="min-width:100%;" width="100%">
																					<tbody>
																						<tr>
																							<td align="center" style="padding-top:9px; padding-right:9px; padding-left:9px;" valign="top">
																								<table align="center" border="0" cellpadding="0" cellspacing="0">
																									<tbody>
																										<tr>
																											<td align="center" valign="top">
																												<!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
																												<!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->

																												<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
																													<tbody>
																														<tr>
																															<td class="mcnFollowContentItemContainer" style="padding-right:10px; padding-bottom:9px;" valign="top">
																																<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" width="100%">
																																	<tbody>
																																		<tr>
																																			<td align="left" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;" valign="middle">
																																				<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
																																					<tbody>
																																						<tr>
																																							<td align="center" class="mcnFollowIconContent" valign="middle" width="24">
																																								<a href="http://www.facebook.com/latio6" target="_blank"><img class="" height="24" src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-facebook-48.png" style="display:block;" width="24"></a>
																																							</td>
																																						</tr>
																																					</tbody>
																																				</table>
																																			</td>
																																		</tr>
																																	</tbody>
																																</table>
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<!--[if mso]>
                                        </td>
                                        <![endif]-->
																												<!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->

																												<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
																													<tbody>
																														<tr>
																															<td class="mcnFollowContentItemContainer" style="padding-right:10px; padding-bottom:9px;" valign="top">
																																<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" width="100%">
																																	<tbody>
																																		<tr>
																																			<td align="left" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;" valign="middle">
																																				<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
																																					<tbody>
																																						<tr>
																																							<td align="center" class="mcnFollowIconContent" valign="middle" width="24">
																																								<a href="http://www.twitter.com/latio_co" target="_blank"><img class="" height="24" src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-twitter-48.png" style="display:block;" width="24"></a>
																																							</td>
																																						</tr>
																																					</tbody>
																																				</table>
																																			</td>
																																		</tr>
																																	</tbody>
																																</table>
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<!--[if mso]>
                                        </td>
                                        <![endif]-->
																												<!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->

																												<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
																													<tbody>
																														<tr>
																															<td class="mcnFollowContentItemContainer" style="padding-right:10px; padding-bottom:9px;" valign="top">
																																<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" width="100%">
																																	<tbody>
																																		<tr>
																																			<td align="left" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;" valign="middle">
																																				<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
																																					<tbody>
																																						<tr>
																																							<td align="center" class="mcnFollowIconContent" valign="middle" width="24">
																																								<a href="http://www.instagram.com/latio.co" target="_blank"><img class="" height="24" src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-instagram-48.png" style="display:block;" width="24"></a>
																																							</td>
																																						</tr>
																																					</tbody>
																																				</table>
																																			</td>
																																		</tr>
																																	</tbody>
																																</table>
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<!--[if mso]>
                                        </td>
                                        <![endif]-->
																												<!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->

																												<table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
																													<tbody>
																														<tr>
																															<td class="mcnFollowContentItemContainer" style="padding-right:0; padding-bottom:9px;" valign="top">
																																<table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" width="100%">
																																	<tbody>
																																		<tr>
																																			<td align="left" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;" valign="middle">
																																				<table align="left" border="0" cellpadding="0" cellspacing="0" width="">
																																					<tbody>
																																						<tr>
																																							<td align="center" class="mcnFollowIconContent" valign="middle" width="24">
																																								<a href="http://latio.co" target="_blank"><img class="" height="24" src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-link-48.png" style="display:block;" width="24"></a>
																																							</td>
																																						</tr>
																																					</tbody>
																																				</table>
																																			</td>
																																		</tr>
																																	</tbody>
																																</table>
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<!--[if mso]>
                                        </td>
                                        <![endif]-->
																												<!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
																											</td>
																										</tr>
																									</tbody>
																								</table>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>

												<table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="min-width:100%;" width="100%">
													<tbody class="mcnTextBlockOuter">
														<tr>
															<td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
																<!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
																<!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->

																<table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="max-width:100%; min-width:100%;" width="100%">
																	<tbody>
																		<tr>
																			<td class="mcnTextContent" style="padding: 0px 18px 9px;color: #888888;" valign="top">
																				<em>Latio 2017, Algunos Derechos Reservados.</em><br>
																				<br>
																				¿Dejar de recibir estos mails?<br>
																				<a href="*|UNSUB|*" target="_blank">Desuscribirse</a><br>
																				<br>
																				*|IF:REWARDS|* *|HTML:REWARDS|* *|END:IF|*
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
                </td>
                <![endif]-->
																<!--[if mso]>
                </tr>
                </table>
                <![endif]-->
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</table>
									<!--[if gte mso 9]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
								</td>
							</tr>
						</table>
						<!-- // END TEMPLATE -->
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>

<?php
if ($action === "generate") {
	//Guardar datos de buffer
	save_file($files_path);
	//Detener buffer
	stopBuffering();
}
?>
