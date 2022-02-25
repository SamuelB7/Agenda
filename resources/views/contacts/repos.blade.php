<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="card">
                    <div class="card-header">
                        <h3>Lista de repositórios</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do repositorio</th>
                                    <th>Url</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($repos as $repo)
                                <tr>
                                    <td>{{ $repo['id'] }}</td>
                                    <td>{{ $repo['name'] }}</td>
                                    <td><a target="_blank" href="{{ $repo['html_url'] }}">{{ $repo['html_url'] }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>