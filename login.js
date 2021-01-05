$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'auth.php',
				data:  {username: username, password: password},
				success: function(data){
				Swal.fire({
								'title': 'Selamat anda telah login',
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

		});
	});