$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

			var username 		= $('#username').val();
			var email			= $('#email').val();
			var password 		= $('#password').val();
			
				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'proses.php',
					data: {username: username,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Berhasil',
								'text': data,
								'type': 'success'
								}).then(function() {
								    window.location = "home.php";
								});
							
					}, 
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'Ada error silahkan ulangi',
								'type': 'error'
								})
					}
				});	
			}else{
			}
		});		
	});