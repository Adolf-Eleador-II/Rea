
<section class="form" id="sectionReg" style="display: none;">
    <div class="backForm">
        <form name="regUser" method="post" action="./php/reg.php" enctype="multipart/form-data" onsubmit="return valid()">
            <div class="containerForm">
                <h1>Registrate</h1>
                <p>Please fill out this form.</p>
                <br>

                <label for="nameUserReg">Your Name</label>
                <input class="textImputForm" type="text" placeholder="Name" id="nameUserReg" name="regName" required>
                <label for="paswordUserReg">Your Pasword</label>
                <input class="textImputForm" type="password" placeholder="Password" id="paswordUserReg" name="regPassword"  required>
                <label for="avatarUserReg">Your Avatar</label>
                <input class="textImputForm" type="file" placeholder="Avatar" id="avatarUserReg" name="regAvatar">

                <button type="submit" class="greenButtonForm" id="registerButton">Registrate</button>
            </div>
        </form>
        <button class="closeButtonForm">X</button>
</section>
