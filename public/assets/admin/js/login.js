var Login = function () {
    
    return {
        //main function to initiate the module
        init: function () {
        	
           $('.login-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true,
						email: true
	                },
	                password: {
	                    required: true,
						minlength:6
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required."
	                },
	                password: {
	                    required: "Password is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
					
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                $('.login-form').attr('action', '/admin/login');
	                $('.login-form').submit();
	            }
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').attr('action', '/admin/login');
						$('.login-form').submit();
	                }
	                return false;
	            }
	        });

	        $('.forget-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: {
	                email: {
	                    required: "Email is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
					$('#forget-btn').attr("disabled","disabled");
	                $.ajax({
						type: "POST",
						url: "/admin/findPassword",
						data: { _token: $('.forget-form :input[name=_token]').val(), email: $('.forget-form :input[name=email]').val()},
						dataType: "json",
						success: function(msg){
							$('#forget-error').removeClass('alert-error');
							$('#forget-error').addClass('alert-success');
							$('#forget-error span').html('邮件已发送')
							$('#forget-error').show();
							$('#forget-btn').attr("disabled","disabled");
						},
						error: function(msg) {
							var m = msg.responseJSON;
							$('#forget-error').removeClass('alert-success');
							$('#forget-error').addClass('alert-error');
                            if (m==null) {
                                $('#forget-error span').html('服务器累坏了,请稍后再试')
                                $('#forget-error').show();
                            } else {
                                $('#forget-error span').html(m.email)
                                $('#forget-error').show();
                            }
							$('#forget-btn').attr("disabled","disabled");
						}
					});
	            }
	        });

	        $('.forget-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.forget-form').validate().form()) {
						$.ajax({
							type: "POST",
							url: "/admin/findPassword",
							data: { _token: $('.forget-form :input[name=_token]').val(), email: $('.forget-form :input[name=email]').val()},
							dataType: "json",
							success: function(msg){
								$('#forget-error').removeClass('alert-error');
								$('#forget-error').addClass('alert-success');
								$('#forget-error span').html('邮件已发送')
								$('#forget-error').show();
							},
							error: function(msg) {
								var m = msg.responseJSON;
								$('#forget-error').removeClass('alert-success');
								$('#forget-error').addClass('alert-error');
								if (m==null) {
									$('#forget-error span').html('服务器累坏了,请稍后再试')
									$('#forget-error').show();
								} else {
									$('#forget-error span').html(m.email)
									$('#forget-error').show();
								}
							}
						});
	                }
	                return false;
	            }
	        });

	        $('#forget-password').click(function () {
	            $('.login-form').hide();
	            $('.forget-form').show();
	        });

	        $('#back-btn').click(function () {
	            $('.login-form').show();
	            $('.forget-form').hide();
	        });

	        $('.register-form').validate({
	            errorElement: 'label', //default input error message container
	            errorClass: 'help-inline', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                username: {
	                    required: true,
						email:true
	                },
	                password: {
	                    required: true,
						minlength:6
	                },
	                password_confirmation: {
	                    equalTo: "#register_password"
	                },
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: { // custom messages for radio buttons and checkboxes

	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.control-group').addClass('error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.control-group').removeClass('error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
	                    error.addClass('help-small no-left-padding').insertAfter($('#register_tnc_error'));
	                } else {
	                    error.addClass('help-small no-left-padding').insertAfter(element.closest('.input-icon'));
	                }
	            },

	            submitHandler: function (form) {
					$('#register-btn').attr("disabled","disabled");
					if (!$('.register-form input[name="isChecked"]').val()) {
						$('#register-error').removeClass('alert-success');
						$('#register-error').addClass('alert-error');
						$('#register-error span').html('服务器累坏了,请稍后再试')
						$('#register-error').show();
						$('#register-btn').attr("disabled","");
					} else {
						$.ajax({
							type: "POST",
							url: "/admin/register",
							data: { _token: $('.register-form :input[name=_token]').val(), username: $('.register-form :input[name=username]').val(),
										password: $('.register-form :input[name=password]').val(), password_confirmation: $('.register-form :input[name=password_confirmation]').val()},
							dataType: "json",
							success: function(msg){
								if (msg.register) {
									$('#register-error').removeClass('alert-error');
									$('#register-error').addClass('alert-success');
									$('#register-error span').html('注册成功,请前往邮箱验证')
									$('#register-error').show();
								} else {
									$('#register-error').removeClass('alert-success');
									$('#register-error').addClass('alert-error');
									$('#register-error span').html('注册失败,请重新尝试')
									$('#register-error').show();
								}
								$('#register-btn').attr("disabled","");
							},
							error: function(msg) {
								var m = msg.responseJSON;
								$('#register-error').removeClass('alert-success');
								$('#register-error').addClass('alert-error');
								if (m==null) {
									$('#register-error span').html('服务器累坏了,请稍后再试')
									$('#register-error').show();
								} else {
									
								}
								$('#register-btn').attr("disabled","");
							}
						});
					}
					
					
	            }
	        });

			$('.register-form input[name="username"]').blur(function(){
				$.ajax({
					type: "POST",
					url: "/admin/checkRegisterEmail",
					data: { _token: $('.register-form :input[name=_token]').val(), username: $('.register-form :input[name=username]').val()},
					dataType: "json",
					success: function(msg){
						if (!msg.check) {
							$('#register-error').removeClass('alert-error');
							$('#register-error').addClass('alert-success');
							$('#register-error span').html('该邮箱未注册,可用')
							$('.register-form input[name="isChecked"]').val(true);
							$('#register-error').show();
						} else {
							$('#register-error').removeClass('alert-success');
							$('#register-error').addClass('alert-error');
							$('#register-error span').html('该邮箱已注册')
							$('.register-form input[name="isChecked"]').val(false);
							$('#register-error').show();
						}
					},
					error: function(msg) {
						var m = msg.responseJSON;
						$('#register-error').removeClass('alert-success');
						$('#register-error').addClass('alert-error');
						if (m==null) {
							$('#register-error span').html('服务器累坏了,请稍后再试')
							$('#register-error').show();
						} else {
							
						}
					}
				});
			});
	        $('#register-btn').click(function () {
	            $('.login-form').hide();
	            $('.register-form').show();
	        });

	        $('#register-back-btn').click(function () {
	            $('.login-form').show();
	            $('.register-form').hide();
	        });
        }

    };

}();
64/27