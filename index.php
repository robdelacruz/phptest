<!DOCTYPE html>
<html class="blue">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>test</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="titlebar">
    <h1 class="pill">The Everything Webpage</h1>
    <select style="flex-basis: 100px;" class="input" id="theme" name="theme">
        <option value="dark1">Dark</option>
        <option value="green">Green</option>
        <option value="amber">Amber</option>
        <option value="blue">Blue</option>
    </select>
</div>
<div class="content">
    <section class="row">
        <div class="box w-xs">
            <?php include "login.php" ?>
        </div>
    </section>

</div>
<script>
var theme = document.querySelector("#theme");
console.log(theme);
theme.addEventListener("change", function(e) {
    e.preventDefault();
    var sel = e.currentTarget.value;
    console.log(sel);
    document.querySelector("html").className = sel;
});
</script>
</body>
</html>

