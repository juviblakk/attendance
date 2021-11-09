
    <?php 
        $title = 'Index';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        $results = $crud ->getSpecialties();

    ?>

        <h1 class="text-center">Registration for IT Conference</h1>
        
        <form method="post" action="success.php">
            <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input required type="text" class="form-control" id="firstname" placeholder="John" name="firstname">
            </div>
            <div class="mb-3">
                    <label for="lasttname" class="form-label">Last Name</label>
                    <input required type="text" class="form-control" id="lastname" placeholder="Doe" name="lastname">
            </div> 
            <div class="mb-3">
                    <label for="dob" class="form-label"> Date of Birth</label>
                    <input required type="text" class="form-control" id="dob" placeholder="Enter D.O.B" name="dob">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label"> Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty" >

                    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                        <option value="<?php echo $r['specialty_id']?>"> <?php echo $r ['name']; ?></option>
                    <?php }?>

                </select>
            </div> 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="johndoe@email.com" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="phoneHelp" placeholder="000-000-0000" name="phone">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>


    <?php require_once 'includes/footer.php'; ?>

    