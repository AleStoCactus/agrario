
<div class="loginbuttona">   
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Accedi per un`esperienza migliore</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="includes/login.php" method="post">
            <div class="mb-3">
                <input type="email" class="textbox" id="email" name="email" placeholder="E-mail" required>
                <br>
                <br>
                <input type="password" class="textbox" id="password" name="password" placeholder="Password" required>
                <br>
            </div>
                <button class="btn btn-primary" id="loginbutton" type="submit">Login</button>
                or
                <button type="button" class="btn btn-secondary" onclick="window.location='registrati.php';">Register</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
</div> 
