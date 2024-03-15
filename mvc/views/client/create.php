{% include 'layouts/header.php' %}
<h1>Create Client</h1>
<form method="post">
    <label for="nom">Name:</label>
    <input type="text" id="nom" name="nom" value="{{ client.nom }}" required><br>
    {% if errors.nom is defined %}
                <span class="error">{{ errors.nom }}</span>
            {% endif %}
    
    <label for="adresse">Address:</label>
    <input type="text" id="adresse" name="adresse" value="{{ client.adresse }}" required><br>
    {% if errors.adresse is defined %}
                <span class="error">{{ errors.adresse}}</span>
            {% endif %}
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ client.phone }}" required><br>
    {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}
         
    <label for="courriel">Email:</label>
    <input type="email" id="courriel" name="courriel" value="{{ client.courriel }}" required><br>
    
    <input type="submit" value="Submit">
</form>
{% include 'layouts/footer.php' %}
