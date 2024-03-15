{% include 'layouts/header.php' with {title: 'create'} %}

<div>
    <form method="post" enctype="multipart/form-data">
        <label>client id
            <input type="text" name="client_id" value="{{ location.client_id }}">
        </label>
        <label>Date de Debut
            <input type="date" name="date_debut" value="{{ location.date_debut }}">
        </label>
        <label>Date_fin
            <input type="date" name="date_fin" value="{{ location.date_fin }}">
        </label>
        <label>Prix
            <input type="text" name="prix" value="{{ location.prix }}">
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>

{% include 'layouts/footer.php' %}
