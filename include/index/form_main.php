<?php 
$api_key = "" ; 
// header('');
?>
<form method="POST" id="contactUs" name="contactUs" action="">

    <div class="form-item mt-2 mb-4">
        <input type="text" name="user_name" id="user_name" class="user_name form-input" required>
        <label class="form-label">*Ваше имя</label>
    </div>
    <div class="form-item mb-4">
        <input type="text" id="user_phone" name="user_phone" class="user_phone form-input" required>
        <label class="form-label">*Номер телефона</label>
    </div>
    <div class="form-item mb-4">
        <textarea id="user_message" name="user_message" class="user_message form-input" pattern=""></textarea>
        <label class="text_area form-label">Опишите вашу проблему и укажите удобное время для звонка</label>
    </div>
    <button type="submit" class="l-form_primary-btn">Отправить заявку</button>
    <div class="l-form_loading d-none">
        <img src="/img/loading.gif">
    </div>
    <div class="l-form_success_msg d-none">Заявка отправлена</div>
        
</form>