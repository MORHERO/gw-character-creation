<div task="base" class="slide">
	<div class="wrapper">
		
		<div class="content">
	
			<h2>Basic Informations</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<div submodule="accordion">

				<div class="flex">
						
						<div class="element" title="base_name">
							<div task="accordion_title">
								<p>Name</p>
							</div>
							<div task="accordion_content">
								<div class="flex">

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_name_main">Name*</label><br/>
											<input type="text" name="base_name_main" required="true">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									
									<div class="input-box">
										<div class="input-wrap">
											<label for="base_name_nick">Nickname</label><br/>
											<input type="text" name="base_name_nick">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_name_hidden">Secret Name</label><br/>
											<input type="text" name="base_name_hidden">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>

						<div class="element" title="base_race">
							<div task="accordion_title">
								<p>Race</p>
							</div>
							<div task="accordion_content">
								<div class="flex">

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_race">Race</label><br/>
											<select name="base_race">
												<?php
													// add custom request
													$races = array(
															['race_human','Human'],
															['race_elb','Elben & Alben'],
															['race_dwarf','Dwarf'],
															['race_ork','Ork'],
															['race_reptiloid','Reptiloid'],
															['race_gnom','Gnom'],
															['race_werewolf','Werewolf*'],
															['race_varg','Varg'],
															['race_ent','Ents*'],
															['race_fee','Fee*']
														);


													foreach ($races as $key => $race) {
														echo('<option value="'. $race[0] .'">'. $race[1] .'</option>');
													}
												?>
												
											</select>
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>

						<div class="element" title="base_body">
							<div task="accordion_title">
								<p>Body Basics</p>
							</div>
							<div task="accordion_content">
								<div class="flex">

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_gender">Gender*</label><br/>
											<input type="text" name="base_gender" required="true">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_age">Age*</label><br/>
											<input type="number" name="base_age" required="true" min="0" max="100">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_height">Height*</label><br/>
											<input type="number" name="base_height" required="true" min="150" max="215">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>

									<div class="input-box">
										<div class="input-wrap">
											<label for="base_weight">Weight*</label><br/>
											<input type="number" name="base_weight" required="true" min="50" max="160">
										</div>
										<div class="help-box">
											<div class="inner">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>