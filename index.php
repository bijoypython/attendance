<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialities();
    
?>
    <!--
        -first Name
        -last name
        -date of birth (date peaker)
        -speciality(database addmin, software developer, web administrator, other)
        -email address
        -contact number
    -->
    <h1 class="text-center">Registration for IT Conference</h1>
    <form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname">Enter First Name </label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Enter Last Name </label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth </label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="speciality">Area of Experties </label>
                <select class="form-control" id="speciality" name="speciality">
                    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                        <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']  ?></option>
                    <?php }?>
                </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>
