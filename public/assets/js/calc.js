  $(document).ready(function () {
            
         $('#calc_num1').keydown(function() {
          $(this).val($(this).val().replace(/[^0-9]/, ''));
            });
         
         $('#calc_num2').keydown(function() {
          $(this).val($(this).val().replace(/[^0-9]/, ''));
            });

        });
