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
                $('#apply-success-message').text("Thank you for your submission!");
                $('#applyForm')[0].reset();
                $('#apply-button').show();
              }
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                var parsedErrors = jQuery.parseJSON( xhr.responseText );
                console.error(parsedErrors);
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
      });
    </script>