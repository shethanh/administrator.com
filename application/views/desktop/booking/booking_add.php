 			<!-- start: page -->
						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<button id="addToTable" class="btn btn-success">Lists <i class="fa fa-list"></i></button>
											<button id="addToTable" class="btn btn-warning" onclick="window.location = '<?php echo base_url()?>hotels/rooms';">Rooms <i class="fa fa-bar-chart-o"></i></button>
                    						<button id="addToTable" class="btn btn-danger" onclick="window.location = '<?php echo base_url()?>hotels/booking';">Booking <i class="fa fa-calendar-o"></i></button>
                    						<button id="addToTable" class="btn btn-default">Trash <i class="fa fa-shopping-cart"></i></button>
										</div>
						
										<h2 class="panel-title">Hotels Add</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="#">

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-user"></i></span>
															</span>
															<input type="text" class="form-control" placeholder="First Name ...">
														</div>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<div class="input-group input-group-icon">
														<span class="input-group-addon">
															<span class="icon"><i class="fa fa-user"></i></span>
														</span>
														<input type="text" class="form-control" placeholder="Last Name ...">
													</div>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
														<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="Search Gender">---:- Search Gender -:---</option>
															<option value="Neutre">Neutre</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</optgroup>
													</select>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">---:- Search Nationality -:---</option>
															<option value="KH">Cambodia</option>
															<option value="FH">French</option>
															<option value="GB">British</option>
															<option value="JP">Japan</option>
														</optgroup>
													</select>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
														<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">---:- Search Country -:---</option>
															<option value="KH">Cambodia</option>
															<option value="USA">United States</option>
															<option value="FH">French</option>
															<option value="GB">British</option>
															<option value="JP">Japan</option>
														</optgroup>
													</select>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="Search Company">---:- Search Company -:---</option>
															<option value="University Student">University Student</option>
															<option value="Google Staff">Google Staff</option>
															<option value="Booking.Com Staff">Booking.Com Staff</option>
															<option value="Agoda Staff">Agoda Staff</option>
														</optgroup>
													</select>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
														<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-book"></i></span>
															</span>
															<input type="number" class="form-control" placeholder="Passsport ID ...">
														</div>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-envelope"></i></span>
															</span>
															<input type="text" class="form-control" placeholder="Email Address ...">
														</div>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select data-plugin-selectTwo class="form-control populate">
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
														</optgroup>
													</select>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select multiple data-plugin-selectTwo class="form-control populate">
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="NV">Nevada</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
														</optgroup>
													</select>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
													</select>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
													</select>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-12">
													<div class="row">
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control">
													</div>
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-6">
															<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control">
													</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row">
											<div class="col-md-6">
												<form class="form-horizontal form-bordered" method="get">
													<div class="form-group">
														<label class="col-sm-4 control-label"> Hotel Include</label>
						
														<div class="col-sm-8">
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample1">
																<label for="checkboxExample1">Checkbox Default</label>
															</div>
						
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample2">
																<label for="checkboxExample2">Checkbox Primary</label>
															</div>
						
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample3">
																<label for="checkboxExample3">Checkbox Success</label>
															</div>
						
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample4">
																<label for="checkboxExample4">Checkbox Warning</label>
															</div>
						
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="col-md-6">
												<form class="form-horizontal form-bordered" method="get">
													<div class="form-group">
														<label class="col-sm-4 control-label"> Hotel Exclude</label>
						
														<div class="col-sm-8">
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
														</div>
													</div>
												</form>
											</div>
										</div>
										</form>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

	






 