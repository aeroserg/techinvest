<?php 
$api_key = "" ; 
// header('');
?>
<form method="POST" name="contactUsFooter" id="contactUsFooter" action="">

    <div class="form-item mt-2 mb-4">
        <input type="text" name="user_name_footer" id="user_name_footer" class="user_name_footer form-input" required>
        <label class="form-label">*Ваше имя</label>
    </div>
    <div class="form-item mb-4">
        <input type="text" id="user_phone_footer" name="user_phone_footer" class="user_phone_footer form-input" required>
        <label class="form-label">*Номер телефона</label>
    </div>
    <div class="form-item mb-4">
        <textarea id="user_message_footer" name="user_message_footer" class="user_message_footer form-input" pattern=""></textarea>
        <label class="text_area form-label">Опишите вашу проблему</label>
    </div>
    <button type="submit" class="l-form_primary-btn">Отправить заявку</button>
    <div class="l-form_loading d-none">
        <img src="/img/loading.gif">
    </div>
    <div class="l-form_success_msg d-none">Заявка отправлена</div>
        
</form>