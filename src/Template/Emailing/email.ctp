<?php
Echo "Enter your email address (will receive a random email from me";
echo $this->Form->create($email,['type'=>'post','class'=>'form']);
echo $this->Form->control('email');
echo $this->Form->button("Sending",['class'=>'submit']);
echo $this->Form->end();
?>