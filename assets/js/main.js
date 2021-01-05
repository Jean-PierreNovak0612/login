$(document).on("submit", "form.js-register", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val(),
    }

    if(dataObj.email.length < 6){
        _error.text("Please enter a valid e-mail addres!").show();
        return false;
    }
    else if(dataObj.password.length < 8){
        _error.text("Please enter a password that has at least 8 characters!").show();
        return false;
    }

    _error.hide();
    // This is where starts AJAX 

    $.ajax({
		type: 'POST',
		url: '/ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		console.log(data);
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		} else if(data.error !== undefined){
			_error.html(data.error).show();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

    return false;
})
// 
.on("submit", "form.js-login", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val(),
    }

    if(dataObj.email.length < 6){
        _error.text("Please enter a valid e-mail addres!").show();
        return false;
    }
    else if(dataObj.password.length < 8){
        _error.text("Please enter a password that has at least 8 characters!").show();
        return false;
    }

    _error.hide();
    // This is where starts AJAX 

    $.ajax({
		type: 'POST',
		url: '/ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		console.log(data);
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		} else if(data.error !== undefined){
			_error.html(data.error).show();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

    return false;
})