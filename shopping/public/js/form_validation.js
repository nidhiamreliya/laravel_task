$.validator.setDefaults({
		submitHandler: function() {
			return true;
		}
	});

$().ready(function() {

	jQuery.validator.addMethod("lettersonly", function(value, element) {
  	return this.optional(element) || /^[a-z]+$/i.test(value);
	}, "Letters only please"); 

	// validate registration form on keyup and submit
	$("#registration").validate({
		rules: {
			first_name: {
				required: true,
				lettersonly: true
			},
			last_name: {
				required: true,
				lettersonly: true
			},
			address: "required",
			city: "required",
			state: "required",
			country: "required",
			email_id: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			contact_no: {
				required: true,
				minlength: 10,
				maxlength: 10,
				digits: true
			},
			zip_code: {
				required: true,
				minlength: 6,
				maxlength: 6,
				digits: true
			}				
		},
		messages: {
			first_name: 
			{
				required: "Please provide Firstname",
				accept: "Enter only latters"
			},
			last_name: {
				required: "Please provide a Password",
				accept: "Enter only latters"
			},
			password: {
				required: "Please provide a Password",
				minlength: "Your Password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a Password",
				minlength: "Your Password must be at least 6 characters long",
				equalTo: "Please enter the same Password as above"
			},
			email_id: {
				required: "Please provide your email address",
				email: "Please enter a valid email address",
			},
			contact_no: {
				required: "Please provide a Contact no",
				minlength: "Your Contact no must be exact 10 characters long",
				maxlength: "Your Contact no must be exact 10 characters long",
				digits: "Enter only digits"
			},
			zip_code: {
				required: "Please provide a zip code",
				minlength: "Your zip code must be exact 6 characters long",
				maxlength: "Your Zip code must be exact 6 characters long",
				digits: "Enter only digits"
			},
			address: "Please enter your Address",
			city: "Please enter your City",
			state: "Please enter your State",
			country: "Please enter your Country"
		}
	}),
	$("#login").validate({
		rules: {
			email_id: {
				required: true,
			},
			password: {
				required: true,
				minlength: 6
			}
		},
		messages: {
			email_id: "Please enter your Email",
			password: {
				required: "Please provide a Password",
				minlength: "Your Password must be at least 6 characters long"
			}
		}
	}),
	$("#edit_user").validate({
		rules: {
			first_name: {
				required: true,
				lettersonly: true
			},
			last_name: {
				required: true,
				lettersonly: true
			},
			address: "required",
			city: "required",
			state: "required",
			country: "required",
			email_id: {
				required: true,
				email: true
			},
			contact_no: {
				required: true,
				minlength: 10,
				maxlength: 10,
				digits: true
			},
			zip_code: {
				required: true,
				minlength: 6,
				maxlength: 6,
				digits: true
			}				
		},
		messages: {
			first_name: "Please enter your Firstname",
			last_name: "Please enter your Lastname",
			email_id: {
				required: "Please provide your email address",
				email: "Please enter a valid email address",
			},
			contact_no: {
				required: "Please provide a Contact no",
				minlength: "Your Contact no must be exact 10 characters long",
				maxlength: "Your Contact no must be exact 10 characters long",
				digits: "Enter only digits"
			},
			zip_code: {
				required: "Please provide a zip code",
				minlength: "Your zip code must be exact 6 characters long",
				maxlength: "Your Zip code must be exact 6 characters long",
				digits: "Enter only digits"
			},
			address: "Please enter your Address",
			city: "Please enter your City",
			state: "Please enter your State",
			country: "Please enter your Country"
		}
	}),
	$("#insert_product").validate({
		rules: {
			category_id: "required",
			product_name: "required",
			description: "required",
			price: {
				required: true,
				number: true
			},
			visible: "required",
		},
		messages: {
			category_id: "select category",
			product_name: "Please enter your product name",
			description: "Please enter description",
			price: {
				required: "Please enter your price",
				number: "Please enter only number"
			},
			visible: "Please select option",
		},
		errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) {
                error.appendTo( element.parents('.radio_group'));
            } else { // This is the default behavior 
                error.insertAfter( element );
            }
         }
	}),
	$("#edit_category").validate({
		rules: {
			category_name: {
				required: true,
			},
			visible: {
				required: true,
			}
		},
		messages: {
			category_name: "Please enter category name",
			visible: "Please select one option"
		},
		errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) {
                error.appendTo( element.parents('.radio_group'));
            } else { // This is the default behavior 
                error.insertAfter( element );
            }
        }
	}),
	$("#edit_password").validate({
		rules: {
			old_password: {
				required: true,
				minlength: 6
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			}
		},
		messages: {
			old_password: {
				required: "Please provide your current Password",
				minlength: "Your Password must be at least 6 characters long"
			},
			password: {
				required: "Please provide a new Password",
				minlength: "Your Password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a Password",
				minlength: "Your Password must be at least 6 characters long",
				equalTo: "Please enter the same Password as above"
			}
		}
	}),
	$("#change_psw").validate({
		rules: {
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			}
		},
		messages: {
			password: {
				required: "Please provide a new Password",
				minlength: "Your Password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a Password",
				minlength: "Your Password must be at least 6 characters long",
				equalTo: "Please enter the same Password as above"
			}
		}
	}),
	$("#forgot_password").validate({
		rules: {
			email_id: {
				required: true,
				email: true
			}
		},
		messages: {
			email: {
				required: "Please provide a valid email",
				email: "Please enter a valid email address"
			}
		}
	}),
	$( "#product_img" ).validate({
	  	rules: {
		    image: {
		      	required: true,
		        extension: "jpg, png, jpeg, gif"
		    }
	  	},
	  	messages: {
			image: {
				required: "Please provide an image file",
				extension: "Please enter only .jpg, .png, .jpeg files only"
			}
		}
	})
});
