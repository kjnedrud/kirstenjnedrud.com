<?php
/**
 * Site Footer
 */
?>
<footer class="site-footer purple-cool">
	<div class="container">
		<p>Copyright &copy; <?php echo date('Y'); ?> Kirsten J. Nedrud</p>
	</div>
</footer>

<script type="text/javascript">

	// replace email spans with mailto links
	// (this is probably wildly unnecessary)
	var emailsToReplace = document.querySelectorAll('.email');
	for (var i=0; i<emailsToReplace.length; i++) {
		var email1 = emailsToReplace[i].getAttribute('data-email-a');
		var email2 = emailsToReplace[i].getAttribute('data-email-b');
		var email = email1 + '@' + email2;
		var href = 'mailto:' + email;
		var html = '<a href="' + href + '">' + email + '</a>';
		emailsToReplace[i].outerHTML = html;
	}

	var setFieldInvalid = function(field, errorMessage) {
		if (typeof errorMessage === 'undefined') {
			errorMessage = 'Invalid field';
		}
		field.classList.add('invalid');
		field.insertAdjacentHTML('afterend', '<p class="note error">' + errorMessage + '</p>');
	}

	var clearErrors = function(form) {
		form.querySelectorAll('.error').forEach(function(errorMessage){
			errorMessage.parentNode.removeChild(errorMessage);
		});
		form.querySelectorAll('.invalid').forEach(function(field){
			field.classList.remove('invalid');
		});
	}

	// contact form
	var form = document.getElementById('contact-form');

	// ajax submit
	// todo: feature detection and fallbacks
	var contactSubmit = function(e) {

		e.preventDefault();

		var emailInput = document.getElementById('contact-email');
		var messageInput = document.getElementById('contact-message');
		var submit = document.getElementById('contact-submit');
		var valid = true;

		// clear any old errors
		clearErrors(form);

		// quick validation - just check that fields have values
		if (!emailInput.value.trim()) {
			setFieldInvalid(emailInput, 'Email is required.')
			valid = false;
		}
		if (!messageInput.value.trim()) {
			setFieldInvalid(messageInput, 'Message is required.')
			valid = false;
		}

		if (!valid) {
			return;
		}

		// set form fields to readonly
		emailInput.setAttribute('readonly', 'readonly');
		messageInput.setAttribute('readonly', 'readonly');
		submit.setAttribute('disabled', 'disabled');
		submit.innerHTML = 'Sending...';

		// get form data
		var data = 'email=' + encodeURIComponent(emailInput.value) + '&message=' + encodeURIComponent(messageInput.value);

		// set up request
		var action = form.getAttribute('action');
		var method = form.getAttribute('method');
		var request = new XMLHttpRequest();
		request.open(method, action, true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

		// response handler
		request.onreadystatechange = function() {
			if (request.readyState === XMLHttpRequest.DONE) {

				// successful request
				if (request.status >= 200 && request.status < 400) {

					// parse response
					var response = JSON.parse(request.responseText);

					// success
					if (response.status == 'success') {
						// remove form and display success message
						form.insertAdjacentHTML('afterend', '<h3>Message Sent</h3><p>Thanks for your message! I\'ll get back to you as soon as I can.</p>');
						form.parentNode.removeChild(form);
						return;
					}
					// error
					else if (response.status == 'error') {

						if (response.errors) {

							// validation errors
							for (var i = 0; i<response.errors.length; i++) {
								var field = form.querySelector('[name=' + response.errors[i].name + ']');
								var errorMessage = response.errors[i].message;
								setFieldInvalid(field, errorMessage);
							}

							// allow user to edit inputs and resubmit
							emailInput.removeAttribute('readonly');
							messageInput.removeAttribute('readonly');
							submit.removeAttribute('disabled');
							submit.innerHTML = 'Send';
							return;
						}
					}
				}

				// generic error message if something else went wrong
				form.insertAdjacentHTML('beforeend', '<p class="error">Sorry, something went wrong. You can refresh the page and try again, or email me directly at: <a href="mailto:kjnedrud@gmail.com">kjnedrud@gmail.com</a></p>');
			}
		};

		// send request with form data
		request.send(data);
	}

	form.addEventListener('submit', contactSubmit);

</script>

</body>

</html>
