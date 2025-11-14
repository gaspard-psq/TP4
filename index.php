<?php include('entete.php'); ?> 

    <header>
            <h1>Page de connexion</h1>
        <nav>
        </nav>
     </header>        
        <section>
            <h2>Connexion</h2>
         </section>

    <div>
        <form action="connexion.php">

        <label for="username">Pseudo:</label>
        <input type="text" id="username" name="username" />

        <label for="pass">Mot de passe:</label>
        <input type="password" id="pass" name="password"/>
    </div>
    <input type="submit" value="Connexion" />

<?php include('pieddepage.php'); ?>      