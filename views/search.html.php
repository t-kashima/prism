<h1><?php echo $title; ?></h1>
<form method="GET" action="<?php echo url_for('/search'); ?>" class="search_form">
  <div class="search_box">
    <div class="search_inputbox"><input type="text" name="word" value="<?php echo $word; ?>"></div>
    <div class="search_button"><button>検索する</button></div>
    <div class="clear"></div>
  </div>
</form>
<?php if (isset($word)) { ?>
<div class="search_result_message">検索結果は<b><?php echo count($result); ?>件</b>です</div>
<?php } ?>
<?php if (isset($result)) { ?>
<ul class="search_result">
  <?php foreach($result as $r) { ?>
    <li class="search_result_list"><a href="<?php echo $r['url'] ?>"><?php echo $r['title']; ?></a></li>
  <?php } ?>
</ul>
<?php  } ?>

