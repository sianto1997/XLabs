<?php
echo $this->Html->charset();
echo $this->Html->css('beheerStyle');
//
echo $this->Html->script('jquery');
echo $this->Html->script('modalScript');
echo $this->Html->css('homeStyle');



 //pr($database_code);
 //pr($database_land);
?>


    <head>
        <title>TEST</title>
    </head>

    <body>

        <div class="Edit_Codes">
        <?php echo $this->Form->create('Edit'); ?>
    <fieldset>
        <legend><?php echo __('Data Aanpassen') ?></legend>
    </fieldset>
    <?php
     // echo $code['Code']['id'];
             echo $this->Form->input('Code', array('value' => $code['Code']['code']));

             echo $this->Form->input('Omschrijving', array('value' => $code['Code']['description']));

             //echo $this->Form->input('Land', array('value' => $code['Code']['countries']));

             echo $this->Form->input('Created', array('value' => $code['Code']['created']));

             echo $this->Form->input('Modified', array('value' => $code['Code']['modified']));
    ?>
    <?php echo $this->Form->submit('Bewerk', array('name' => 'submit')); ?>
    <?php echo $this->Form->end(); ?>
    </div>

   

    </body>

    <footer></footer>