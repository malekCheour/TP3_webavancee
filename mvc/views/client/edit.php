{% include 'layouts/header.php' with {title: 'Edite'} %}

<div class="container">
    <h2>Client Edit</h2>
    <form method="post">
        <label>Name
            <input type="text" name="nom" value="{{ client.nom }}">
        </label>
        {% if errors.name is defined %}
            <span class="error">{{ errors.name }}</span>
        {% endif %}
        <label>adresse
            <input type="text" name="adresse" value="{{ client.adresse }}">
        </label>
        {% if errors.adresse is defined %}
            <span class="error">{{ errors.adresse }}</span>
        {% endif %}
        <label>Phone
            <input type="text" name="phone" value="{{ client.phone }}">
        </label>
        {% if errors.phone is defined %}
            <span class="error">{{ errors.phone }}</span>
        {% endif %}
        <label>email
            <input type="email" name="courriel" value="{{ client.courriel }}">
        </label>
        {% if errors.email is defined %}
            <span class="error">{{ errors.courriel }}</span>
        {% endif %}
        <input type="submit" class="btn" value="Update">
        
    </form>
</div>

{% include 'layouts/footer.php' %}
