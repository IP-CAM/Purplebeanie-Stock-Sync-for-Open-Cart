<div class="box">
  <div class="box-heading"><?php echo (isset($heading_title) )? $heading_title : null; ?></div>
  <div class="box-content" style="text-align: center;">
  <!--<?php if ($customers) { ?>
    <table cellpadding="2" cellspacing="0" style="width: 100%;">
      <?php foreach ($customers as $customer) { ?>
      <tr><td valign="top"><?php echo $customer['firstname']; ?></td></tr>
      <?php } ?>
    </table>
    <?php } ?>-->
    <?php echo html_entity_decode($content);?>
  </div>
</div>
