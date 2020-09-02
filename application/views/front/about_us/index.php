<section class="slice sct-color-1">
    <?php if (!empty($success_alert)): ?>
            <div class="col-6 ml-auto mr-auto" id="success_alert">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?=$success_alert?>
                </div>
            </div>
        <?php endif ?>
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h3 class="section-title-inner heading-1 strong-300 text-normal">
                <?php echo translate('about_us')?>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>
        <?php
            // $contact_us_text = $this->db->get_where('frontend_settings', array('type' => 'about_us_text'))->row()->value;
        $contact_us_text = $this->db->get_where('general_settings', array('general_settings_id' => 87))->row()->value;
        ?>
        <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center">
            <?php echo $contact_us_text;?>
        </div>

        <span class="space-xs-xl"></span>

        
    </div>
</section>
<script>
    $(document).ready(function(){
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 5000); // <-- time in milliseconds
    });
</script>