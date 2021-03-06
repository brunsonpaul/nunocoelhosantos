<?
  $title='#todo';
  $description='User interface and user experience of the Twitter-powered to-do
  list app for iOS and Android';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
  <span>
    <a href="../keepon/">Previous</a> &thinsp;/&thinsp;
    <a href="../norman-hartnell/">Next</a>
  </span>
</div>

<? require_once('../../_spinner.php'); ?>

<div class="project" id="hash-todo">

  <img class="full" width="1080" height="1080"
    src="/media/images/hash-todo-main.jpg"
    alt="">

  <div class="clear txt">
    <h2>#todo</h2>
    <h6><acronym title="User Interface">UI</acronym>, <acronym title="User Experience">UX</acronym> and Icon Design</h6>
    <p>
      Interface design for the <a href="http://twitter.com" target="_blank">
      Twitter</a>-powered to-do list developed for <a href="http://apple.com/iphone"
      target="_blank">iPhone</a> and <a href="http://www.android.com/"
      target="_blank"> Android</a>. #todo, pronounced "hash to-do",
      is an utility app that lets you share dreams, tasks and ambitions with
      your Twitter network automatically.
    </p>
    <p class="icon-globe-1">
      <a href="https://itunes.apple.com/us/app/todo-twitter-powered-to-do/id538969906?mt=8"
      target="_blank">#todo on the App Store</a>
    </p>
  </div>

  <img class="no-margin right half" width="624" height="870"
    src="/media/images/hash-todo-ios-screen-1.jpg"
    alt="">
  <img class="no-margin clear half" width="624" height="870"
    src="/media/images/hash-todo-ios-screen-2.jpg"
    alt="">
  <img class="no-margin half" width="624" height="870"
    src="/media/images/hash-todo-ios-screen-3.jpg"
    alt="">
  <img class="no-margin clear half" width="624" height="870"
    src="/media/images/hash-todo-ios-screen-4.jpg"
    alt="">
  <img class="half" width="624" height="870"
    src="/media/images/hash-todo-ios-screen-5.jpg"
    alt="">

  <img class="no-margin clear half" width="624" height="1000"
    src="/media/images/hash-todo-android-screen-1.jpg"
    alt="">
  <img class="no-margin half" width="624" height="1000"
    src="/media/images/hash-todo-android-screen-2.jpg"
    alt="">

</div>

<? require_once('../../_footer.php'); ?>
