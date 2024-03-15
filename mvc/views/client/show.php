{% include 'layouts/header.php' with {title: 'create'} %}

<div class="container">
    <h2>Client Show</h2>
    <hr>

    <p><strong>id</strong> {{ client.id }}</p>
    <p><strong>Name:</strong> {{ client.nom }}</p>
    <p><strong>adresse:</strong> {{ client.adresse }}</p>
    <p><strong>Phone:</strong> {{ client.phone }}</p>
    <p><strong>Email:</strong> {{ client.courriel }}</p>
    <a href="{{ base }}/client/edit?id={{ client.id }}" class="btn block">Edit</a>
    <form action="{{ base }}/client/delete" method="post">
        <input type="hidden" name="id" value="{{ client.id }}">
        <button class="btn block red">Delete</button>
        <a href="../../mvc/generate-pdf.php?id={{ client.id }}" target="_blank">Imprimer les informations</a>


</div>

{% include 'layouts/footer.php' %}
