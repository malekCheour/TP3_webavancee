{% include 'layouts/header.php' with {title: 'edit'} %}
    <div class="container">
        <h2>Location Edit</h2>
        <form method="post">
        <label>Date de debut
                <input type="date" name="date_debut" value="{{ location.date_debut }}">
            </label>
            <label>Date de fin
                <input type="date" name="date_fin" value="{{ location.date_fin }}">

            <label>Prix
                <input type="text" name="zip_code" value="{{ client.zip_code }}">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
    {{ include('layouts/footer.php') }}