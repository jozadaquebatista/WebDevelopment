<html>
    <head>
        <title>::DATALIST::</title>
    </head>

    <style>
	* { 
		/*text-align: center;*/
		font-weight: bolder;
		font-size: 130%;
		margin: 18% 0 0 20%;
		width: 300px;
		color: #ddd;
	}
	body:not(input){

		background-color: #336485;

	}
	input{
		border: 5px solid #ddd;
		border-radius: 20px;
		width: 600px;
	}

	input:active { border: 1px solid black; }

	
    </style>
    <body>
	<label for="country_name">Country: </label><input id="country_name" name="country_name" type="text" list="country" />
	<datalist id="country">
	   <option value="Afghanistan">
	   <option value="Albania">
	   <option value="Algeria">
	   <option value="Andorra">
	   <option value="Angola">
	</datalist>

    </body>

</html>