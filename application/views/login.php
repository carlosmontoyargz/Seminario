<div class="container">
    <h2>Seminario ingresa tus datos</h2>
    <form method="POST" action="<?php echo base_url(); ?>index.php/welcome/validaLogin">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Ingresa Login">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
