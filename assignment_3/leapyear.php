<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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
<?php
function leapYears($year) {
    // This function calculates the next four leap years starting from a given year.
    $leapYearBirthdays = [];
    for ($i = 0; $i < 25; $i++) {
        if (date('L', strtotime("$year-01-01"))) {
            array_push($leapYearBirthdays,$year);
        }
        $year++;
    }
    return $leapYearBirthdays;
}
?>
<div class="row wp-row">
    <div class="col-md-12">
        <h1>
            <?php
            if (!empty($_POST['name'])) {
                print "Welcome {$_POST['name']}!";
            } else {
                print "Welcome!";
            }
            ?>
        </h1>
        <p>
            <?php
            if (!empty($_POST['place'])) {
                if ($_POST['place'] == 'Groningen') {
                    print "You're from the greatest place on earth!";
                }
            }
            ?>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_POST['age'])) {
                    $age = $_POST['age'];
                    $currentYear = date('Y');
                    $leapYears = leapYears($currentYear);
                    for ($i = 0; $i  <5; $i++) {
                        $newAge = $leapYears[$i] - $currentYear + $age;
                        print "<tr><td>{$leapYears[$i]}</td><td>{$newAge}</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <form class="needs-validation" method="POST" novalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a name which contains only letters.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" min="0" class="form-control" id="age" name="age" placeholder="Age" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a number.
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            <div class="form-group">
                <label for="place">Place</label>
                <input type="text" class="form-control" id="place" name="place" placeholder="Place" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a place name which contains only letters.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script src="scripts/leapyear.js"></script>
<?php
include __DIR__ . '/tpl/body_end.php';
?>
