<?php
switch ($extra) {
	case 'invite':
		$button = '
		<center>
			<a href="' . $this->getServerPath(true) . '?invite=' . $email['inviteCode'] . '" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Use Invite Code</a>
		</center>
        ';
		break;
	case 'reset':
		$button = '
		<center>
			<a href="' . $this->getServerPath(true) . '" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Goto My Site</a>
		</center>
        ';
		break;
	default:
		$button = null;
		break;
}
$email = '
 <!DOCTYPE html>
 <html>
 <head>
 	<meta content="width=device-width" name="viewport">
 	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 	<title>Email</title>
 </head>
 <body style="margin: 0px; background: rgb(35, 35, 35);">
 	<div style="background: #232323; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color: #514d6a;">
 		<div style="max-width: 700px;margin: 0px auto;font-size: 14px;">
 			<table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
 				<tbody>
 					<tr>
 						<td align="center" style="vertical-align: top; padding-bottom:30px;"><a href="javascript:void(0)" target="_blank"><br>
 						<img alt="admin Responsive web app kit" src="' . $this->config['PHPMAILER-logo'] . '" style="border:none;width: 100%;"></a></td>
 					</tr>
 				</tbody>
 			</table>
 			<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
 				<tbody>
 					<tr>
 						<td style="background: #1b1a1a;padding:20px;color:#fff;text-align:center;">' . $subject . '</td>
 					</tr>
 				</tbody>
 			</table>
 			<div style="padding: 40px; background: #fff;">
 				<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
 					<tbody>
 						<tr>
 							<td>
 								<p>' . $body . '</p>
 								' . $button . '
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>
 </body>
 </html>
';
