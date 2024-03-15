{{ include('layouts/header.php', {title: client}) }}
    <h1>Client</h1>
    <table>
        <thead>
            <tr>

                <th>id</th>
                <th>Name</th>
                <th>adresse</th>
                <th>phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td>{{ client.id }}</td>
                <td><a href="{{ base }}/client/show?id={{ client.id }}">{{ client.nom }}</a></td>
                <td>{{ client.adresse }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.courriel }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    <a href="{{ base }}/client/create" class="btn" >Client Create</a>

    {{ include('layouts/footer.php') }}
