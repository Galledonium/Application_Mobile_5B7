<?php
   echo $this->Form->create("Localizations",array('url'=>'/locale'));
   echo $this->Form->radio("locale",[
      ['value'=>'en_US','text'=>'English'],
      ['value'=>'fr_CA','text'=>'French'],
   ]);
   echo $this->Form->button('Change Language');
   echo $this->Form->end();
?>
<?php echo __('msg'); ?>