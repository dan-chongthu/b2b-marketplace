$(document).ready(function(){
	
	
	
	$('#deactivate-appmysite').click(function (e) {		
		e.preventDefault();
		window.deactivationLink = e.target.href;
        $('#ams-form-popup-wrap').css('display', '-webkit-box');
        $('#ams_modal_box').css('display', 'block');
    });
	


	
	$('#ams-deactivate-submit-button').click(function (e) {
			
		e.preventDefault();
		const deactivationError = document.querySelectorAll( '.deactivation-error' );
		const checkedRadio = document.querySelectorAll( 'input[name="ams_survey_radios"]:checked' );
		const surveyForm = document.querySelectorAll( '.deactivation-survey-form' );
		
		let continueFlag = true;

		if ( deactivationError.length > 0 ) {
			continueFlag = false;
		}

		// If no radio button is selected then throw error.
		if ( 0 === checkedRadio.length && 0 === deactivationError.length ) {
			surveyForm[ 0 ].innerHTML += `
				<div class="notice notice-error deactivation-error" id="deactivation-alert" >
					Please select an option to continue.
				</div>
			`;
			continueFlag = false;
		}else{			
			continueFlag = true;
		}	 
		
		if ( continueFlag ) {
			const formData = $( '.deactivation-survey-form' ).serialize();
			
			$.ajax( {
				url: ajaxurl,
				type: 'POST',
				data: {
					action: 'ams_deactivation_form_submit',
					'form-data': formData,
					nonce: frontend_ajax_object.amsDeactivationSurveyNonce,
				},
				beforeSend: function() {
					const spinner = document.querySelectorAll( '.spinner' );  //Block the page
					spinner[ 0 ].style.display = 'block';
					$('#ams-deactivate-submit-button > .spinner').show();
				},
			} ).done( function( responseFromSubmit ) {
					const spinner = document.querySelectorAll( '.spinner' );  //Block the page
					spinner[ 0 ].style.display = 'none';
					$('#ams-form-popup-wrap').hide();
					window.location.replace( window.deactivationLink );
				    				
			} );
		}

	});
	
    // close the modal
    $('#ams-form-popup-close').click(function () {
        $('#ams-form-popup-wrap').hide();

    });
	
	// cancel button
	$('#ams-cancel-button').click(function () {
        $('#ams-form-popup-wrap').hide();

    });
	
	
});



$(document).on("click", "input[name='ams_survey_radios']", function(e){
	
	$('#deactivation-alert').css('display', 'none');
	let survey_val = $(this).val();
	if(survey_val == 8){
		$("#user_reason").html('');
		$("#user_reason").attr('placeholder' , 'Write your reason...');
		$("#user_reason").removeClass('hidetextarea');
	}
	else{
		$("#user_reason").addClass('hidetextarea');
		$('#user_reason').html($("#ams-survey-radios-" + survey_val ).text().trim());
	}
});