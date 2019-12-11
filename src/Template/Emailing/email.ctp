<script src="https://www.google.com/recaptcha/api.js"></script>

<?php
Echo "Enter your email address (will receive a random email from me";
echo $this->Form->create($email,['type'=>'post','class'=>'form']);
echo $this->Form->control('email');?>
<div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
<?php
echo $this->Form->button("Sending",['class'=>'submit']);
echo $this->Form->end();
?>