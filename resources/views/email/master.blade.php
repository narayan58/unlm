<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<style type="text/css">
			#detail-content img{
				max-width: 750px !important;
				height:auto;
				border-radius: 5px;
			}
		</style>
	</head>
	<body>

		<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#e6e6e6" align="center">
			<tbody>
				<tr><td height="30"></td></tr> {{-- 70 --}}
				<tr>
					<td>
						<table style="margin: 0px auto; border-color: rgb(48, 63, 159);" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#303f9f" align="center">
							<tbody>
								<tr><td height="25"></td></tr>
								<tr>
									<td>
										<table style="margin: 0 auto;" width="700" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												<tr>
													<td>
														<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
															<tbody>
																<tr>
																	<td align="left">
																		<a href="#" style="color: white; text-decoration: none;font-size: 16px; font-weight: 700; font-family: lato, Helvetica, sans-serif;">{{ $sitedetail['title'] }}
																		</a>
																	</td>
																	<td align="right" style="color: white; text-decoration: none; font-size: 12px; font-weight: 400; font-family: lato, Helvetica, sans-serif;">
																		No Images?
																		<a href="@yield('clickhere_url')" target="_blank" style="color: white;">
																			 <u>Click here</u>
																		</a>
																	</td>
																</tr>
																<tr><td height="22"></td></tr>
															</tbody>
														</table>
													</td>
												</tr>
												<tr><td height="20"></td></tr>
												<tr>
													<td align="center">
														<div>
															<img src="@yield('icon')" style="display:block; line-height:0; font-size:0; border:0;" alt="" border="0">
														</div>
													</td>
												</tr>
												<tr><td height="40"></td></tr>
												<tr>
													<td style="color: rgb(255, 255, 255); font-size: 30px; font-weight: 700; font-family: lato, Helvetica, sans-serif; border-color: rgb(255, 255, 255);" align="center">
														<div>
															<span>
																<multiline>@yield('title')</multiline>
															</span>
														</div>
													</td>
												</tr>
												<tr><td height="30"></td></tr>
												<tr>
													<td style="color: rgb(255, 255, 255); font-size: 12px; font-weight: 300; font-family: lato, Helvetica, sans-serif; border-color: rgb(255, 255, 255);" align="center">
														<div>
															<span>
																<multiline>@yield('date')</multiline>
															</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr><td height="60"></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table style="margin: 0px auto; border-color: rgb(255, 255, 255);" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
							<tbody>
								<tr><td height="30"></td></tr>
								<tr>
									<td>
										<table style="margin: 0 auto;" width="90%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												@section('main-content') @show
												<!-- horizontal gap -->
												<tr><td height="20"></td></tr>
												<tr>
													<td style="color: #a1a2a5; font-size: 14px;line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;" align="left">
														<div class="editable-text" style="line-height: 2;">
															<span class="text_container">
																<multiline>Thanks & Best Regards,</multiline>
															</span>
														</div>
													</td>
												</tr>
												<!-- horizontal gap -->
												<tr><td height="5"></td></tr>
												<tr>
													<td style="color: #a1a2a5; font-size: 14px;line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;" align="left">
														<div class="editable-text" style="line-height: 2;">
															<span class="text_container">
																<multiline>{{ $sitedetail['title'] }}</multiline>
															</span>
														</div>
													</td>
												</tr>
												<!-- horizontal gap -->
												<tr><td height="5"></td></tr>
												<tr>
													<td style="color: #a1a2a5; font-size: 14px;line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;" align="left">
														<div style="line-height: 2;">
															<span class="text_container">
																<multiline>{{ INDEX_URL }}</multiline>
																{{-- <multiline><a href="{{ route('login.page') }}" target="_blank">{{ route('login.page') }}</a></multiline> --}}
															</span>
														</div>
													</td>
												</tr>
												<!-- horizontal gap -->
												<tr><td height="20"></td></tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr><td height="60"></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table style="margin: 0 auto;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
							<tbody>
								<tr><td height="40"></td></tr>
								<tr><td height="70"></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>