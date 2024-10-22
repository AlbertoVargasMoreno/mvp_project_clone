<header>
    <a href="../">« Home</a>
    <h1>Login</h1>
    <p>Please, login to manage the database</p>
</header> 

<section>
    <form action="auth" method="post">
    
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
    
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
    
        <div class="button-container">
            <button class="button-link" type="submit">Login</button>
        </div>
    
    </form>
</section>
