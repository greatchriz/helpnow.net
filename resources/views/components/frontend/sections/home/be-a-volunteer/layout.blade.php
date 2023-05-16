<!-- Section: Become a Volunteer -->
<section>
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
                    {{ $slot }}
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                        $("#volunteer_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
                    </script>
                </div>
                <div class="col-md-6 sm-text-center mt-40">
                    <img
                        class="hidden-sm hidden-xs"
                        src="images/photos/v1.png"
                        alt=""
                    >
                </div>
            </div>
        </div>
    </div>
</section>
