<?php 	
echo "
		<link rel='stylesheet' href='sources/semantic.min.css'>
		<link rel='stylesheet' href='sources/dropdown.min.css'>
		<link rel='stylesheet' href='sources/transition.min.css'>		
		<link rel='stylesheet' href='sources/main.css'>
		<link rel='stylesheet' href='sources/owl.carousel.css'>
		<link rel='shortcut icon' href='sources/rel_icon.gif'/>		


				<form action='Results.php' method='POST'>
        <div class='category_div' id='category_div'>
            <select name='category' class='required-entry ui selection dropdown' id='category' onchange='javascript: dynamicdropdown(this.options[this.selectedIndex].value);'>
                <option value=''>Select District</option>
                <option value='Adilabad'>Adilabad</option>
								<option value='Bhadradri'>Bhadradri</option>
								<option value='Hyderabad'>Hyderabad</option>
								<option value='Jagtial'>Jagtial</option>
								<option value='Jangaon'>Jangaon</option>
								<option value='Jayashankar'>Jayashankar</option>
								<option value='Jogulamba'>Jogulamba</option>
								<option value='Kamareddy'>Kamareddy</option>
								<option value='Karimnagar'>Karimnagar</option>
								<option value='Khammam'>Khammam</option>
								<option value='Komaram_Bheem'>Komaram Bheem</option>
								<option value='Mahabubabad'>Mahabubabad</option>
								<option value='Mahabubnagar'>Mahabubnagar</option>
								<option value='Mancherial'>Mancherial</option>
								<option value='Medak'>Medak</option>
								<option value='Medchal'>Medchal</option>
								<option value='Nagarkurnool'>Nagarkurnool</option>
								<option value='Nalgonda'>Nalgonda</option>
								<option value='Nirmal'>Nirmal</option>
								<option value='Nizamabad'>Nizamabad</option>
								<option value='Peddapalli'>Peddapalli</option>
								<option value='Rajanna_Sircilla'>Rajanna Sircilla</option>
								<option value='Ranga_Reddy'>Ranga Reddy</option>
								<option value='Sangareddy'>Sangareddy</option>
								<option value='Siddipet'>Siddipet</option>
								<option value='Suryapet'>Suryapet</option>
								<option value='Vikarabad'>Vikarabad</option>
								<option value='Wanaparthy'>Wanaparthy</option>
								<option value='Warangal_Rural'>Warangal Rural</option>
								<option value='Warangal_Urban'>Warangal Urban</option>
								<option value='Yadadri'>Yadadri</option>
            </select>
        </div>
        <div class='sub_category_div' id='sub_category_div'>
            <script type='text/javascript' language='JavaScript'>
                document.write(\"<select class='ui selection dropdown' name='subcategory' id='subcategory'><option value=''>Select Mandal</option></select>\")
            </script>
            <noscript>
                <select name='subcategory' id='subcategory' >
                    <option value=''></option>
                </select>
            </noscript>
        </div>
        <select class='ui selection dropdown' name='roomtype'>
					<option value=''>Select type of Room</option>
					<option>Residential</option>
					<option>Commercial</option>
					<option>Payin Guest</option>
					<option>Hotels</option>
					<option>Banquet Halls</option>
					<option>Open Grounds</option>
				</select><br>
				
        <input class='ui button blue' type='submit' value='Submit' name='submit'>
        </form>
  <script src='sources/Address.js'></script>
	<script src='sources/jquery.min.js'></script>
	<script src='sources/indexdr.js'></script>	
	<script src='sources/semantic.min.js'></script>
	<script src='sources/owl.carousel.js'></script>
	<script src='sources/main.js'></script>
";?>
