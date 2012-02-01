<?=$form->open()?>
  <?if (Forms::is_submitted($form->name())):?>
    <div class="success-message">
      <?=___('Formulář byl úspěšně odeslán.')?>
    </div>
  <?endif;?>

  <?if ($errors = $form->errors()):?>
    <div class="error-message">
      <?foreach ($errors as $error):?>
        <?=$error?><br />
      <?endforeach;?>
    </div>
  <?endif;?>

  <fieldset>
    <div>
      <label><?=$form->name->get('label')?></label>
      <?=$form->name?>
    </div>
    
    <div>
      <label><?=$form->email->get('label')?></label>
      <?=$form->email?>
    </div>
    
    <div>
      <label><?=$form->phone->get('label')?></label>
      <?=$form->phone?>
    </div>
    
    <div>
      <label><?=$form->question->get('label')?></label>
      <?=$form->question?>
    </div>
    
    <input type="submit" value="Odeslat" />
  </fieldset>
</form>