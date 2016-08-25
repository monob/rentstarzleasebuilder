$(document).ready(function(){


	$("#createleasebutton").click( function(){

		var dataSrc = "createLease";
		var data = { } //JSON

		sendData( dataSrc, data );
	});


	$("#1b").click( function(){
		var landlordName = $("#landlordName").val();

		var dataSrc = "1b";
		var data = { landlordName : landlordName } //JSON

		sendData( dataSrc, data );


	});



	

    $("#mytenantbutton").click(function(){
       
        var dataSrc = "mytenant";
		var data = { tenantName: tenanatname }
		sendData( dataSrc, data );
    });
	

   $("#myproperties").click(function(){
       
        var dataSrc = "myproperties";
		var data = { listofmyproperties: myproperties }
		sendData( dataSrc, data );
    });
	
    
    $("#totalincomebutton").click(function(){
       
        var dataSrc = "totalincomebutton";
		var data = { totalincomebutton: totalincomebutton }
		sendData( dataSrc, data );
    }); 

    
    
    $("#mylease").click(function(){
       
        var dataSrc = "mylease";
		var data = { mylease : mylease }
		sendData( dataSrc, data );
    }); 



    $("#editbutton").click(function(){
       
        var dataSrc = "editbutton";
		var data = { editbutton : editbutton }
		sendData( dataSrc, data );
    }); 



	





	$("#userReg_btn").click( function(){
        var username 	= $("#username").val();
		var pass1 		= $("#pass1").val();
		var pass2 		= $("#pass2").val();
		var firstname   =$("#firstname").val();
		var lastname    =$("#lastname").val();
		var email       =$("#email").val();

		var validReg 	= validateUserReg( username, pass1, pass2, email );

		if( validReg ){
			alert( username )
			alert( pass1 )
			alert ( email )
			var dataSrc = "userRegistration";
			var data = { "username": username, "password": pass1, "firstname": firstname, "lastname":lastname, "email": email }

			sendData( dataSrc, data );

		}
	} );

	$("#logoutLink").click( function(){
		var dataSrc = "logout";
		var data 	= "";

		sendData( dataSrc, data );

	});

	$("#userLogin_btn").click( function(){
		console.log("logging in");
		var username 	= $("#login_username").val();
		var pass1 		= $("#login_pass1").val();

		//Add validation step
		
		var dataSrc = "userLogin";
		var data = { "username": username, "password": pass1 }

			sendData( dataSrc, data );
	} );

	$("#profile_btn").click( function(){
		console.log("TEST SUCCESS");

		var u_name 	= $("#u_name").val();

		//Preparing the data for back end
		var dataSrc = "userProfile";
		//This is a JSON
		var data 	= { "u_name" : u_name };

			sendData( dataSrc, data );

	});



	function sendData( dataSrc, data ){
		console.log( "sendData() initialized...")


		
		$.post("api/", { "dataSource": dataSrc, "data": data }).done( function( data ){
			//This below executes when the server has responded
			//convert string to json

			console.log( data )
			obj = JSON.parse(data);

			console.log( obj )

			switch(obj.status.status){

			 	case "User logged in":
			 		 loginHandler();
			 		break;

			 	case "session terminated":
			 		logoutHandler();
			 		break;
			 	case "no user":
			 		alert("SORRY YOUR USERNAME IS NOT FOUND")
			 		break;
			 	case "success":
			 		location.reload();
			 		break;

			}
			if( obj.status.status == "User logged in"){
				location.reload();
			}
		});
	}

	function loginHandler(){
		location.reload();
	}

	function logoutHandler(){
		location.reload();
	}

	function validateUserReg( username, pass1, pass2 ){
		console.log( "validateUserReg() initialized...")
		var result = false;

		if( username != "" && pass1 != "" && pass2 != "" ){
			if( pass1 == pass2 ){
				if( pass1.length > 5 ){

					result = true;

				}else{
					alert("Password must be at least 6 characters long")
				}
			}else{
				alert("Passwords do not match");
			}
		}else{
			alert("All fields are required!");
		}

		return result;
	}
});