    <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ripples.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
      $(document).ready(function() {
        $('#applyForm').submit(function(e) {
          e.preventDefault();
          $('#apply-button').hide();
          $('#apply-first-name-error').text('');
          $('#apply-last-name-error').text('');
          $('#apply-email-error').text('');
          $('#apply-phone-error').text('');
          $('#apply-company-error').text('');
          $('#apply-position-error').text('');
          $('#apply-industry-error').text('');
          $('#apply-success-message').text('');

          $.ajax({
            url: "{{ route('apply.submit') }}",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
              if (response.errors) {
                // $('#apply-first-name-error').text(response.errors.apply-first-name);
                // $('#email-error').text(response.errors.email);
              } else {
                if ($('html')[0].lang == "en") {
                    $('#apply-success-message').text("Thank you for your submission!");
                } else if ($('html')[0].lang == "ar") {
                    $('#apply-success-message').text("شكرا لاكمال الارسال!");
                }
                $('#applyForm')[0].reset();
                $('#apply-button').show();
              }
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                var parsedErrors = jQuery.parseJSON( xhr.responseText );

                var applyFirstNameError = parsedErrors.errors.apply_first_name;
                var applylastNameError = parsedErrors.errors.apply_last_name;
                var applyEmailError = parsedErrors.errors.apply_email;
                var applyPhoneError = parsedErrors.errors.apply_phone;
                var applyCompanyError = parsedErrors.errors.apply_company;
                var applyPositionError = parsedErrors.errors.apply_position;
                var applyIndustryError = parsedErrors.errors.apply_industry;

                $('#apply-first-name-error').text(parsedErrors.errors.apply_first_name);
                $('#apply-last-name-error').text(parsedErrors.errors.apply_last_name);
                $('#apply-email-error').text(parsedErrors.errors.apply_email);
                $('#apply-phone-error').text(parsedErrors.errors.apply_phone);
                $('#apply-company-error').text(parsedErrors.errors.apply_company);
                $('#apply-position-error').text(parsedErrors.errors.apply_position);
                $('#apply-industry-error').text(parsedErrors.errors.apply_industry);
                $('#apply-button').show();
            }
          });
        });

        $('#contactForm').submit(function(e) {
          e.preventDefault();
          $('#contact-button').hide();
          $('#contact-first-name-error').text('');
          $('#contact-last-name-error').text('');
          $('#contact-email-error').text('');
          $('#contact-phone-error').text('');
          $('#contact-subject-error').text('');
          $('#contact-company-error').text('');
          $('#contact-position-error').text('');
          $('#contact-industry-error').text('');
          $('#contact-message-error').text('');
          $('#contact-success-message').text('');

          $.ajax({
            url: "{{ route('contact.submit') }}",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
              if (response.errors) {
                // $('#apply-first-name-error').text(response.errors.apply-first-name);
                // $('#email-error').text(response.errors.email);
              } else {
                if ($('html')[0].lang == "en") {
                    $('#apply-success-message').text("Thank you for your submission!");
                } else if ($('html')[0].lang == "ar") {
                    $('#apply-success-message').text("شكرا لاكمال الارسال!");
                }
                $('#contactForm')[0].reset();
                $('#contact-button').show();
              }
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                var parsedErrors = jQuery.parseJSON( xhr.responseText );
                $('#contact-first-name-error').text(parsedErrors.errors.contact_first_name);
                $('#contact-last-name-error').text(parsedErrors.errors.contact_last_name);
                $('#contact-email-error').text(parsedErrors.errors.contact_email);
                $('#contact-phone-error').text(parsedErrors.errors.contact_phone);
                $('#contact-subject-error').text(parsedErrors.errors.contact_subject);
                $('#contact-company-error').text(parsedErrors.errors.contact_company);
                $('#contact-position-error').text(parsedErrors.errors.contact_position);
                $('#contact-industry-error').text(parsedErrors.errors.contact_industry);
                $('#contact-message-error').text(parsedErrors.errors.contact_message);
                $('#contact-button').show();
            }
          });
        });
      });
    </script>