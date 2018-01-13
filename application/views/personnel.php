<form action="/PersonnelController/Insert" method="post" id="form_1" name="form_1">

    <input type="text" name="name" id="name"><br>
    <input type="text" name="gender" id="gender"><br>
    <input type="text" name="address" id="address"><br>
    <input type="text" name="email" id="email"><br>
    <input type="submit" value="POST">

</form>


<?php

foreach ($personnel as $person) {
    ?>

    <div style="width: 100%">
    <div style="width:20%;"><?=$person->name?></div>
    <div style="width:20%;"><?=$person->gender?></div>
    <div style="width:20%;"><?=$person->address?></div>
    <div style="width:20%;"><?=$person->email?></div>

    </div>

    <?php

}
?>