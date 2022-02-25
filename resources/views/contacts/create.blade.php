<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        <h3>Criar novo contato</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('contacts.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefone</label>
                                    <input class="form-control" type="tel" name="phone" id="phone" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="github_profile">Perfil do github</label>
                                    <input class="form-control" type="text" name="github_profile" id="github_profile" required>
                                    @error('github_profile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <button type="submit" class="btn btn-primary my-3">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>