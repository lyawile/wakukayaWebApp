<div class="col-sm-12">
    <div class="row col-sm-10 offset-1 window">
        <div class="col-md-3 commands">
            <!--the commands go here-->
        </div>
        <div class="col-md-9">
            <?php if (isset($message)) echo $message; ?>
            <?php echo form_open('member/register') ?>
            <div class="form-row">
                <?php ?>

                <div class="form-group col-md-4">
                    <?php
                    $data = form_error('firstname');
                    if (isset($data) && $data !== "") {
                        ?>
                        <?php
                        echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                    } else {
                        ?>
                        <?php
                        echo '<label for="firstname">First Name</label> ';
                    }
                    ?>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>" placeholder="First Name">
                </div>
                <div class="form-group col-md-4">
                    <?php
                    $data1 = form_error('middlename');
                    if (isset($data1) && $data1 !== "") {
                        ?>
                        <?php
                        echo '<label for="firstname" style="color: red;">' . $data1 . '</label>';
                    } else {
                        ?>
                        <?php
                        echo '<label for="firstname">Middle Name</label> ';
                    }
                    ?>
                    <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo set_value('middlename'); ?>" placeholder="Middle Name">
                </div>
                <div class="form-group col-md-4">
                    <?php
                    $data2 = form_error('surname');
                    if (isset($data2) && $data2 !== "") {
                        ?>
                        <?php
                        echo '<label for="surname" style="color: red;">' . $data2 . '</label>';
                    } else {
                        ?>
                        <?php
                        echo '<label for="sur">Surname(Optional)</label> ';
                    }
                    ?>
                    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo set_value('surname'); ?>" placeholder="Surname">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select class="form-control col-md-4" id="gender" name="gender">
                        <option value="male">Male       </option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <?php
                    $data = form_error('phonenumber');
                    if (isset($data) && $data !== "") {
                        ?>
                        <?php
                        echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                    } else {
                        ?>
                        <?php
                        echo '<label for="firstname">Phone Number</label> ';
                    }
                    ?>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo set_value('phonenumber'); ?>" placeholder="Phone number">
                </div>
                <div class="form-group col-md-4">
                    <?php
                    $data = form_error('email');
                    if (isset($data) && $data !== "") {
                        ?>
                        <?php
                        echo '<label for="firstname" style="color: red;">' . $data . '</label>';
                    } else {
                        ?>
                        <?php
                        echo '<label for="firstname">Email Address</label> ';
                    }
                    ?>
                    <input type="email" class="form-control" id="email" value="<?php echo set_value('email') ?>" name="email"  placeholder="Email Address">
                </div>

            </div>
            <div class="">
                <label for="picture">Upload Picture(Optional)</label>
                <input type="file" class="form-control" id="picture"/>
            </div>
            <div style="margin-top: 30px;">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>