<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Email Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
					<tr>
						<td align="center" bgcolor="#30cbcb" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
							<img src="{{asset('public/v2/elmedinaV2LogoTransparent.png')}}" alt="Creating Email Magic" width="50%" height="30%" style="display: block;" />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 10px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<b>Hi, {{$branch}} !</b>
									</td>
								</tr>
								<tr>
									<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        Tempahan baharu telah diterima. Butiran tempahan adalah seperti berikut: <br/><br/>

                                        <span style="font-weight:bold;">Nama :</span> {{$name}}<br/>
										<span style="font-weight:bold;">No. Telefon : </span>{{$phone_no}} <br/>
										<span style="font-weight:bold;">Jantina : </span>{{$gender}} <br/><br/>
                                        <table style="border-collapse: collapse; ">
                                            <tr style="border-top: 1px solid black;">
                                                <th >Tarikh</th>
                                                <th >Slot masa</th>
                                                <th >Cawangan</th>
                                                <th >Perkhidmatan</th>
                                                <th >Status</th>
                                            </tr>
                                            <tr style="border-top: 1px solid black;">
                                                <td style="text-align:center;">{{$booking_date}}</td>
                                                <td style="text-align:center;">{{$booking_time}}</td>
                                                <td style="text-align:center;">{{$branch}}</td>
                                                <td style="text-align:center;">{{$package}}</td>
                                                <td style="text-align:center;">{{$status == 0 ? 'Belum Selesai' : 'Selesai'}}</td>
                                            </tr>
                                        </table>
										<br/>
										Klik <a href="{{route('getApproveBooking', ['id' => $id ])}}" target="_blank">sini</a> 
										untuk menukar status tempahan ini atau boleh login di <a href="{{route('admin.login-page')}}" target="_blank">sini</a> 
										untuk melihat tempahan-tempahan yang lain.
										<br/><br/>
                                        Terima Kasih. <br/><br/>
                                        Sekian,<br/>
                                        EL MEDINA SPA BEKAM
									</td>
								</tr>
								{{-- <tr>
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="260" valign="top">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
																<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/left.gif" alt="" width="100%" height="140" style="display: block;" />
															</td>
														</tr>
														<tr>
															<td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
															</td>
														</tr>
													</table>
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">
													&nbsp;
												</td>
												<td width="260" valign="top">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
																<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/right.gif" alt="" width="100%" height="140" style="display: block;" />
															</td>
														</tr>
														<tr>
															<td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr> --}}
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#30cbcb" style="padding: 30px 30px 30px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										© EL MEDINA BEKAM & RECOVERY SPA 2018 <br/>
										{{-- <a href="#" style="color: #ffffff;"><font color="#ffffff">Unsubscribe</font></a> to this newsletter instantly --}}
									</td>
									<td align="right" width="25%">
										{{-- <table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
											</tr>
										</table> --}}
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>