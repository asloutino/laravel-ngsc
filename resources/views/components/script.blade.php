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

          $.ajax({
            url: "{{ route('apply.submit') }}",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
              if (response.errors) {
                $('#apply-first-name-error').text(response.errors.apply-first-name);
                $('#email-error').text(response.errors.email);
              } else {
                $('#name-error').text('');
                $('#email-error').text('');
                $('#success-message').show();
                $('#applyForm')[0].reset();
              }
            }
          });
        });
      });
    </script>