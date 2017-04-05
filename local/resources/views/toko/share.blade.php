<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
.social-icon {
   color: #222;
   background-color: #fff;
   height: 4em;
   width: 4em;
   line-height: 1em;
   text-align: center;
   border-radius: 50%;
   border: medium solid #222;
}
</style>
<div class="social-buttons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
       target="_blank">
       <i class="fa fa-facebook-official"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
       target="_blank">
        <i class="fa fa-twitter-square"></i>
    </a>
    <a href="https://plus.google.com/share?url={{ urlencode($url) }}"
       target="_blank">
       <i class="fa fa-google-plus-square"></i>
    </a>
</div>