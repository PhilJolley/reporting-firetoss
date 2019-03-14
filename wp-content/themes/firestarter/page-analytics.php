<?php
// =============================================================================
// TEMPLATE NAME: Analytics
// -----------------------------------------------------------------------------

if($post->ID === 964) {
 get_header('logout');
}
else {
 get_header();
}
global $post;
global $current_user;
$user_id = $current_user->ID;
// check if the repeater field has rows of data
//REMEMBER: if you're going to use have_rows function, you need add an extra parameter
//to define the function. EXE: we need to access the user's information.
//We access it by user_id
?>
<div class="container container-full">
    <div class="header_text_inner">
        <h1 class="grey-line-below"><?= $current_user->user_firstname . "'s" ?> Analytics</h1>
        <?php
        //getting the customer's logo
        $logo = get_field('logo', 'user_'.$user_id.'');
        $size = 'thumbnail';
        ?>
        <img src="<?= $logo; ?>">
    </div>
    <div id="btn-row" class="btn-group">
    <?php
    //this for loop is to go through the repeater field 'iframe' to get the values from tab and iframe_url
    $values = get_field('iframe', 'user_'.$user_id.'');
    for($i = 0; $i < count($values); $i++){ ?>
        <button class="analytics_btn" onclick="iframeLayout(event, 'tab_<?= ''. $i .'' ?>')"><?= $values[$i]['tab']; ?></button>
    <?php } ?>
    </div>
    <div id="iframe" class="row iframe-row">
        <?php
        for($x = 0; $x < count($values); $x++){ ?>
            <iframe id="tab_<?= ''. $x .'' ?>" class="iframe_pos" width="560" height="315" src="<?= $values[$x]['iframe_url'];  ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <?php } ?>
    </div>
    <script>
        //this function is to allow the tab layout work to switch to the desired tab
        function iframeLayout(evt, btnName) {
            // Declare all variables
            var i, iframe_pos, analytics_btn;

            // Get all elements with class="iframe_pos" and hide them
            iframe_pos = document.getElementsByClassName("iframe_pos");
            for (i = 0; i < iframe_pos.length; i++) {
                iframe_pos[i].style.display = "none";
            }

            // Get all elements with class="analytics-btn" and remove the class "active"
            analytics_btn = document.getElementsByClassName("analytics_btn");
            for (i = 0; i < analytics_btn.length; i++) {
                analytics_btn[i].className = analytics_btn[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(btnName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
