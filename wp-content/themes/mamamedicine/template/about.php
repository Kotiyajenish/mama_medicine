<?php
/* Template Name: about */
get_header();

// global $wp_query;
// $post_id = $wp_query->queried_object->post_name;
// $mail_url = "http://192.168.1.128/mama_medicine/$post_id";
// echo '<pre>';
// print_r($mail_url);
//exit;
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<section class="testimonial-section">
    <div class="uk-container">
        <div class="uk-height-1 uk-text-center">
            <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=https://w3layouts.com/&size=100x100" alt="" title="HELLO" width="50" height="50" />
        </div>
    </div>
</section>
<script>
    function generateBarCode() {
        var nric = $('#text').val();
        var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
        $('#barcode').attr('src', url);
    }
</script>
<?php
get_footer();
?>