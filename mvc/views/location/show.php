{{ include('layouts/header.php', {'title': 'Location'}) }}


    <div class="container">
        <h2>location Show</h2>
        <hr>
        <p><strong>votre location :</strong></p>
        <p><strong>location date debut:</strong> {{ location.date_debut }}</p>
        <p><strong>location date fin</strong> {{ location.date_fin }}</p>
        <p><strong>prix:</strong> {{ location.prix }}</p>

        <a href="{{base}}/location/edit?id={{location.id}}" class="btn block">Edit</a>
        <form action="{{base}}/location/delete" method="post">
            <input type="hidden" name="id" value="{{ location.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
    {{ include('layouts/footer.php') }}