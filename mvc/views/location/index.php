{{ include('layouts/header.php', {'title': 'Location'}) }}
    <h1>Location</h1>
    <table>
        <thead>
            <tr>
                <th>Client id</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
                <th>prix</th>

            </tr>
        </thead>
        <tbody>
        {% for location in locations %}
            <tr>
                <!-- <td>{{ location.client_id }}</td> -->
                <td><a href="{{ base }}/location/show?id={{ location.id }}" >{{ location.client_id }}</a></td>
                <td>{{ location.date_debut }}</td>
                <td>{{ location.date_fin }}</td>
                <td>{{ location.prix }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    <a href="{{ base }}/location/create" class="btn" >Location Create</a>

    {{ include('layouts/footer.php') }}
