<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => 'index.php',
        'Add news item' => 'news_add.php',
        'Leap Year' => 'leapyear.php',
        'Simple Form' => 'simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>
<script src="scripts/leapyear.js"></script>
<div class="row wp-row">
    <div class="col-md-12">
        <h1>
            <?php
            if (!empty($_GET['name'])) {
                    print "Welcome {$_GET['name']}!";
                } else {
                    print "Welcome!";
                }
            ?>
        </h1>
        <p>
            <?php
            if (!empty($_GET['place'])) {
                if ($_GET['place'] == 'Amsterdam') {
                    print "You're from the capital of the Netherlands!";
                } else {
                    print "You're from {$_GET['place']}!";
                }
            }
            ?>
        </p>
        <form method="GET">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for ="inputPlace">Place</label>
                <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>