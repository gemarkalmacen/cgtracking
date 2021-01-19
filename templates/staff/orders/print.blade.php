
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Optical | Invoice 1</title>
		<meta name="description" content="Invoice example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!-- <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" /> -->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!-- <div class="d-flex flex-column flex-root"> -->
			<!--begin::Page-->
			<!-- <div class="d-flex flex-row flex-column-fluid page"> -->
				<!--begin::Wrapper-->
				<!-- <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper"> -->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!-- begin::Card-->
								<div class="card card-custom overflow-hidden">
									<div class="card-body p-0">
										<!-- begin: Invoice-->
										<!-- begin: Invoice header-->
										<div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url(assets/media/bg/bg-6.jpg);">
											<div class="col-md-9">
												<div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
													<h1 class="display-4 text-white font-weight-boldest mb-10">INVOICE</h1>
													<div class="d-flex flex-column align-items-md-end px-0">
														<!--begin::Logo-->
														<a href="#" class="mb-5">
                                                            <!-- <img src="assets/media/logos/logo-light.png" alt="" /> -->
                                                            <img alt="Logo" src="{{ url('staff/assets/media/logos/logo.jpg') }}" height="50"/>
														</a>
														<!--end::Logo-->
														<span class="text-white d-flex flex-column align-items-md-end opacity-70">
															<span>
                                                                <!-- Cecilia Chapman, 711-2880 Nulla St, Mankato -->
                                                            </span>
															<span>Butuan City</span>
														</span>
													</div>
												</div>
												<div class="border-bottom w-100 opacity-20"></div>
												<div class="d-flex justify-content-between text-white pt-6">
													<div class="d-flex flex-column flex-root">
														<span class="font-weight-bolde mb-2r">DATE</span>
														<span class="opacity-70">
                                                            @if(isset($record_order_details))
                                                                {{ $record_order_details->created_at }}
                                                            @endif
                                                        </span>
													</div>
													<div class="d-flex flex-column flex-root">
														<span class="font-weight-bolder mb-2">INVOICE NO.</span>
														<span class="opacity-70">
                                                            @if(isset($record_order_details))
                                                                {{ $record_order_details->order_code }}
                                                            @endif
                                                        </span>
													</div>
													<div class="d-flex flex-column flex-root">
														<span class="font-weight-bolder mb-2">INVOICE TO.</span>
														<span class="opacity-70">
                                                            <!-- Iris Watson, P.O. Box 283 8562 Fusce RD. -->
                                                        <!-- <br /> -->
                                                            @if(isset($record_order_details->firstname))
                                                                MR/MS. {{ $record_order_details->firstname }} {{ $record_order_details->lastname }}
                                                            @endif
                                                        </span>
													</div>
												</div>
											</div>
										</div>
										<!-- end: Invoice header-->
										<!-- begin: Invoice body-->
										<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
											<div class="col-md-9">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
                                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Description</th>
                                                                <!-- <th class="pl-0 font-weight-bold text-muted text-uppercase">Brand</th> -->
                                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Code</th>
                                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Color</th>
                                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Size</th>
                                                                <th class="text-left font-weight-bold text-muted text-uppercase">Category</th>
                                                                <th class="text-left font-weight-bold text-muted text-uppercase">Sub Category</th>
																<th class="text-right font-weight-bold text-muted text-uppercase">Amount</th>
																<th class="text-right font-weight-bold text-muted text-uppercase">Discount</th>
																<th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Sub Total</th>
															</tr>
														</thead>
														<tbody>
                                                            @foreach($record_orders AS $index => $value)
															<tr class="font-weight-boldest font-size-lg">
                                                                <td class="pl-0 pt-7">
                                                                    {{ empty($value['description']) ? '' : $value['description'] }}
                                                                </td>
                                                                <!-- <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['brand_name']) ? '' : $value['brand_name'] }}
                                                                </td> -->
                                                                <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['brand_name']) ? '' : $value['stock_code'] }}
                                                                </td>
                                                                <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['color']) ? '' : $value['color'] }}
                                                                </td>
                                                                <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['size']) ? '' : $value['size'] }}
                                                                </td>
                                                                <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['category']) ? '' : $value['category'] }}
                                                                </td>
                                                                <td class="text-left pt-7 py-4">
                                                                    {{ empty($value['category']) ? '' : $value['subcategory'] }}
                                                                </td>
																<td class="text-left pt-7 py-4">
                                                                    {{ empty($value['order_amount']) ? '' : $value['order_amount'] }}
                                                                </td>
																<td class="text-left pt-7 py-4">
                                                                    {{ empty($value['order_discounts']) ? '' : $value['order_discounts'] }}
                                                                </td>
																<td class="text-left pt-7 py-4">
                                                                    {{ empty($value['order_discounts']) ? '' : ($value['order_amount'] - $value['order_discounts']) }}
                                                                </td>
                                                            </tr>
                                                            @endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- end: Invoice body-->
										<!-- begin: Invoice footer-->
										<div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
											<div class="col-md-9">
												<div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
													<div class="d-flex flex-column mb-10 mb-md-0">
														<div class="font-weight-bolder font-size-lg mb-3">
                                                            CASH TRANSACTION
                                                        </div>
														<!-- <div class="d-flex justify-content-between mb-3">
															<span class="mr-15 font-weight-bold">Account Name:</span>
															<span class="text-right">Barclays UK</span>
														</div>
														<div class="d-flex justify-content-between mb-3">
															<span class="mr-15 font-weight-bold">Account Number:</span>
															<span class="text-right">1234567890934</span>
														</div>
														<div class="d-flex justify-content-between">
															<span class="mr-15 font-weight-bold">Code:</span>
															<span class="text-right">BARC0032UK</span>
														</div> -->
													</div>
													<div class="d-flex flex-column text-md-right">
														<span class="font-size-lg font-weight-bolder mb-1">TOTAL AMOUNT</span>
														<span class="font-size-h2 font-weight-boldest text-danger mb-1">
                                                            {{ $record_order_details->total_amount_paid }}
                                                        </span>
                                                        <span>Discounted Amount </span>
														<span class="font-size-h2 font-weight-boldest text-danger mb-1">
                                                            {{ $record_order_details->total_discounted_amount }}
                                                        </span>
													</div>
												</div>
											</div>
										</div>
										<!-- end: Invoice footer-->
										<!-- begin: Invoice action-->
										<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
											<div class="col-md-9">
												<div class="d-flex justify-content-between">
													<button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button>
													<button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
												</div>
											</div>
										</div>
										<!-- end: Invoice action-->
										<!-- end: Invoice-->
									</div>
								</div>
								<!-- end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
				<!-- </div> -->
				<!--end::Wrapper-->
			<!-- </div> -->
			<!--end::Page-->
		<!-- </div> -->
		<!--end::Main-->
		<!-- <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script> -->
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>