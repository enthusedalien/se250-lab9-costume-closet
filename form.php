<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costume Closet Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="flex-wrapper">
    <body>
        <main>
            <div class="form-wrapper">
                <form action="add.php" id="addform" method="post">
                    <div class="form-content">
                        <label class="form-input" for="itemInfo">Insert Item Info <span class="required-format"></span>:<br>
                            <input type="text" id="item" name="item" required><br>
                        </label>
                        <label class="form-input" for="Borrower">Insert Name of Person<span class="required-format"></span>:<br>
                            <input type="text" id="borrower" name="borrower" required><br>
                        </label>
                        <label class="form-input" for="Due Date">Insert Due Date<span class="required-format"></span>:<br>
                            <input type="date" id="due_date" name="due_date" required><br>
                        </label>
                    </div>
                    <input id="submit" class="hidden" type="submit" form="addform">
                </form>
            </div>
        </main>
    </body>
</div>
</html>