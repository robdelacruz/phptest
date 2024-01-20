<?php include "pagehead.php" ?>
    <section class="row">
        <div class="box w-xs">
            <h2 class="heading">Login</h2>
            <form class="form">
                <div class="form_row">
                    <label class="label" for="username">Username</label>
                    <input class="input" type="text" name="username" id="username" value="">
                </div>
                <div class="form_row">
                    <label class="label" for="password">Password</label>
                    <input class="input" type="password" name="password" id="password" value="">
                </div>
                <div class="form_action">
                    <button class="button">Submit</button>
                </div>
                <div class="form_row">
                    <a class="text-sm" href="register.php">Register Account</a>
                </div>
            </form>
        </div>
    </section>
<?php include "pagefoot.php" ?>

